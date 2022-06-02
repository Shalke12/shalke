<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        require_once '../Dao/ColaboradorDAO.php';

$idColaborador = $_GET["id"];
//echo $idAluno;

$ColaboradorDAO = new ColaboradorDAO();
$ColaboradorDAO->excluirColaborador($idColaborador);

echo "<script>";
echo "window.location.href = '../View/ListarColaboradores.php';";
echo "</script> ";
        ?>

    </body>
</html>
