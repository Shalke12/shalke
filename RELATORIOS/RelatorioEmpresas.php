<?php

include './fpdf/fpdf.php';
include_once './Funcoes.php';

//Inclusão dos dados de acesso ao Banco
require_once '../Dao/EmpresasDAO.php';


$EmpresasDAO = new EmpresasDAO();
$empresas = $EmpresasDAO->getAllEmpresas();

//Início do Relatório

$pdf = new FPDF();
$pdf->AddPage();

// Imagem do cabeçalho

$pdf->Image('../Imagem/3.jpeg', 60, 10, 100, 20);
$pdf->Ln(20);

$pdf->SetY(30);
$pdf->Line(5, $pdf->GetY(), 205, $pdf->GetY());
$pdf->SetFont("Arial", "", 7);
$pdf->Cell(0, 10, utf8_decode('Página -  ' . $pdf->PageNo()), 0, 0, 'R');


$pdf->Line(5, $pdf->GetY(), 205, $pdf->GetY());

$pdf->Ln(20);
// Título do Relatório
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, utf8_decode('Relatório de Empresas'), 0, 0, "C");
$pdf->Ln(15);


//Início da construção da tabela


$pdf->SetFont("Arial", "I", 10);
$pdf->Cell(40, 7, "CNPJ", 1, 0, "C");
$pdf->Cell(30, 7, "Empresario", 1, 0, "C");
$pdf->Cell(60, 7, "Razao Social", 1, 0, "C");
$pdf->Cell(30, 7, "Segmento", 1, 0, "C");
$pdf->Cell(35, 7, utf8_decode("Telefone do Local"), 1, 0, "C");
$pdf->Ln();

foreach ($empresas as $empresas) {


    
    $pdf->Cell(40, 7, utf8_decode($empresas["cnpj"]), 1, 0, "C");
    $pdf->Cell(30, 7, utf8_decode($empresas["nome_empresario"]), 1, 0, "C");
    $pdf->Cell(60, 7, $empresas["razao_social"], 1, 0, "C");
    $pdf->Cell(30, 7, utf8_decode($empresas["segmento"]), 1, 0, "C");
    $pdf->Cell(35, 7, utf8_decode($empresas["telefone_local"]), 1, 0, "C");
    $pdf->Ln();
}


//Rodapé

$pdf->SetY(256);
$pdf->Line(5, $pdf->GetY(), 205, $pdf->GetY());
$pdf->SetFont("Arial", "", 6);

$pdf->Cell(0, 10, utf8_decode('COMUNIDADE ESPORTIVA SHALKE XII - QR 523 CONJUNTO 09 LOTE 18 - SAMAMBAIA SUL'), 0, 1, 'C');
//$pdf->Cell(0,10,utf8_decode('Contato: (61) 3358.0114/(61) 98402.1683 e shalke.xii@gmail.com'),0,0,'C');
//Geração do Relatório em PDF
$pdf->Output();


