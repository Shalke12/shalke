<?php
require_once '../Dao/FamiliaDAO.php';

$idFamilia = $_GET["id"];


$FamiliaDAO = new FamiliaDAO();
$FamiliaDAO->excluirFamilia($idFamilia);

echo "<script>";
echo "window.location.href = '../View/ListarFamilia.php';";
echo "</script> ";
?>

