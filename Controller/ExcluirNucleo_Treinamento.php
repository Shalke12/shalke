<?php
require_once '../Dao/Nucleo_TreinamentoDAO.php';

$idNucleo_Treinamento = $_GET["id"];


$Nucleo_TreinamentoDAO = new Nucleo_TreinamentoDAO();
$Nucleo_TreinamentoDAO->excluirNucleo_Treinamento($idNucleo_Treinamento);

echo "<script>";
echo "window.location.href = '../View/ListrarNucleo_Treinamento.php';";
echo "</script> ";


?>

