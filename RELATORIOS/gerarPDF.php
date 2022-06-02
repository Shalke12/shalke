<?php

include './fpdf/fpdf.php';
include_once './Data.php';

//Inclusão dos dados de acesso ao Banco
require_once '../Dao/AlunoDAO.php';

$AlunoDAO = new AlunoDAO();
$pessoas = $AlunoDAO->getAllAluno();

//Início do Relatório

$pdf = new FPDF();
$pdf->AddPage();

// Imagem do cabeçalho

$pdf ->Image('../Imagem/3.jpeg',60, 10, 100, 20);
$pdf->Ln(20);


// Título do Relatório
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, utf8_decode('Relação de Alunos'), 0, 0, "C");
$pdf->Ln(15);


//Início da construção da tabela


$pdf->SetFont("Arial", "I", 10);
$pdf->Cell(50, 7, "Nome", 1, 0, "C");
$pdf->Cell(40, 7, "Data de Nasc.", 1, 0, "C");
$pdf->Cell(40, 7, "Telefone", 1, 0, "C");
$pdf->Cell(60, 7, utf8_decode("Email"), 1, 0, "C");
$pdf->Ln();

foreach ($pessoas as $pessoa) {


    $pdf->Cell(50, 7, utf8_decode($pessoa["nome"]), 1, 0, "C");
    $pdf->Cell(40, 7, formatoData($pessoa["datanascimento"]), 1, 0, "C");
    $pdf->Cell(40, 7, $pessoa["telefone"], 1, 0, "C");
    $pdf->Cell(60, 7, utf8_decode($pessoa["email"]), 1, 0, "C");
    $pdf->Ln();
}


//Geração do Relatório em PDF
$pdf->Output();
