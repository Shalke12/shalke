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
        // put your code here

        require_once '../Dao/Nucleo_AtendimentoDAO.php';
        require_once '../Dto/Nucleo_AtendimentoDTO.php';

$sede = $_POST ["sede"];
$telefone_sede = $_POST["telefone_sede"];
$email_email = $_POST["email_email"];
$endereco_sede= $_POST["endereco_sede"];
$cidade_sede = $_POST["cidade_sede"];
$cep_sede = $_POST["cep_sede"];
$uf_sede = $_POST["uf_sede"];
$idNucleo_Atendimento = $_POST["idNucleo_Atendimento"];



$Nucleo_AtendimentoDTO = new Nucleo_AtendimentoDTO();

$Nucleo_AtendimentoDTO->setSede($sede);
$Nucleo_AtendimentoDTO->setTelefone_sede($telefone_sede);
$Nucleo_AtendimentoDTO->setEmail_email($email_email);
$Nucleo_AtendimentoDTO->setEndereco_sede($endereco_sede);
$Nucleo_AtendimentoDTO->setCidade_sede($cidade_sede);
$Nucleo_AtendimentoDTO->setCep_sede($cep_sede);
$Nucleo_AtendimentoDTO->setUf_sede($uf_sede);
$Nucleo_AtendimentoDTO->setIdNucleo_Atendimento($idNucleo_Atendimento);


        $Nucleo_AtendimentoDAO = New Nucleo_AtendimentoDAO;
        $verificar = $Nucleo_AtendimentoDAO->updateNucleo_Atendimento($Nucleo_AtendimentoDTO);

        if ($verificar) {

            echo "<script>";
            echo "alert(' Alteração realizada com sucesso!');";
            echo "window.location.href='../View/ListarNucleo_Atendimento.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert.(' Erro ao alterar!');";
            echo "window.location.href='../../View/ListarNucleo_Atendimento.php';";
            echo "</script>";
        }
        ?>
    </body>
</html>
