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

require_once '../Dao/Nucleo_AtendimentoDAO.php';

$idNucleo_Atendimento = $_GET["id"];


$Nucleo_AtendimentoDAO = new Nucleo_AtendimentoDAO();
$Nucleo_AtendimentoDAO->excluirNucleo_Atendimento($idNucleo_Atendimento);

echo "<script>";
echo "window.location.href = '../View/ListarNucleo_Atendimento.php';";
echo "</script> ";

?>
    </body>
</html>
