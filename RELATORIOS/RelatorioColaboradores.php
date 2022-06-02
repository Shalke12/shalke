<?php

include './fpdf/fpdf.php';
include_once './Funcoes.php';

//Inclusão dos dados de acesso ao Banco
require_once '../Dao/ColaboradorDAO.php';


$ColaboradorDAO = new ColaboradorDAO();
$colaborador = $ColaboradorDAO->getAllColaborador();

//Início do Relatório

$pdf = new FPDF();
$pdf->AddPage();

// Imagem do cabeçalho

$pdf ->Image('../Imagem/3.jpeg',60, 10, 100, 20);
$pdf->Ln(20);

$pdf ->SetY(30);
$pdf ->Line(5, $pdf->GetY(), 205,$pdf->GetY());
$pdf->SetFont("Arial", "", 7);
$pdf->Cell(0,10,utf8_decode('Página -  '. $pdf->PageNo()),0,0,'R');


$pdf ->Line(5, $pdf->GetY(), 205, $pdf->GetY());

$pdf->Ln(20);
// Título do Relatório
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, utf8_decode('Relatório de Colaboradores'), 0, 0, "C");
$pdf->Ln(15);


//Início da construção da tabela


$pdf->SetFont("Arial", "I", 10);
$pdf->Cell(40, 7, "Nome", 1, 0, "C");
$pdf->Cell(30, 7, "Data de Nasc.", 1, 0, "C");
$pdf->Cell(40, 7, utf8_decode("CPF"), 1, 0, "C");
$pdf->Cell(40, 7, utf8_decode("Telefone"), 1, 0, "C");
$pdf->Cell(40, 7, utf8_decode("Email"), 1, 0, "C");
$pdf->Ln();

foreach ($colaborador as $colaborador) {


    $pdf->Cell(40, 7, utf8_decode($colaborador["nome"]), 1, 0, "C");
    $pdf->Cell(30, 7, formatoData($colaborador["datanascimento"]), 1, 0, "C");
    $pdf->Cell(40, 7, utf8_decode($colaborador["cpf"]), 1, 0, "C");
    $pdf->Cell(40, 7, utf8_decode($colaborador["telefone"]), 1, 0, "C");
     $pdf->Cell(40, 7, utf8_decode($colaborador["email"]), 1, 0, "C");
    $pdf->Ln();
}


//Rodapé

$pdf ->SetY(256);
$pdf ->Line(5, $pdf->GetY(), 205,$pdf->GetY());
$pdf->SetFont("Arial", "", 6);

$pdf->Cell(0,10,utf8_decode('COMUNIDADE ESPORTIVA SHALKE XII - QR 523 CONJUNTO 09 LOTE 18 - SAMAMBAIA SUL'),0,1,'C');
//$pdf->Cell(0,10,utf8_decode('Contato: (61) 3358.0114/(61) 98402.1683 e shalke.xii@gmail.com'),0,0,'C');





//Geração do Relatório em PDF
$pdf->Output();


