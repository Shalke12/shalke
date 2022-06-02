<?php

require_once '../Dao/EmpresasDAO.php';

$idEmpresas = $_GET["id"];


$EmpresasDAO = new EmpresasDAO();
$EmpresasDAO->excluirEmpresas($idEmpresas);

echo "<script>";
echo "window.location.href = '../View/ListarEmpresas.php';";
echo "</script> ";
?>

