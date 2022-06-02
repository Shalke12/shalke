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


require_once '../Dao/EmpresasDAO.php';
require_once '../Dto/EmpresasDTO.php';

$cnpj = $_POST["cnpj"];
$razao_social = $_POST["razao_social"];
$nome_fantasia = $_POST["nome_fantasia"]; 
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$uf = $_POST["uf"];
$segmento = $_POST["segmento"];
$tipo_empresa = $_POST["tipo_empresa"];
$email = $_POST["email"];
$website = $_POST["website"];
$telefone_local = $_POST["telefone_local"];
$nome_empresario = $_POST["nome_empresario"];
$telefone_pessoal = $_POST["telefone_pessoal"];
$nucleo_atendimento_idnucleo_atendimento = $_POST["Nucleo_Atendimento_idNucleo_Atendimento"];
$idEmpresas = $_POST["idEmpresas"];


$EmpresasDTO = New EmpresasDTO();

$EmpresasDTO->setCnpj($cnpj);
$EmpresasDTO->setRazao_social($razao_social);
$EmpresasDTO->setnome_fantasia($nome_fantasia);
$EmpresasDTO->setendereco($endereco);
$EmpresasDTO->setcidade($cidade);
$EmpresasDTO->setcep($cep);
$EmpresasDTO->setUf($uf);
$EmpresasDTO->setSegmento($segmento);
$EmpresasDTO->setTipo_empresa($tipo_empresa);
$EmpresasDTO->setEmail($email);
$EmpresasDTO->setWebsite($website);
$EmpresasDTO->setTelefone_local($telefone_local);
$EmpresasDTO->setNome_empresario($nome_empresario);
$EmpresasDTO->setTelefone_pessoal($telefone_pessoal);
$EmpresasDTO->setNucleo_Atendimento_idNucleo_Atendimento($nucleo_atendimento_idnucleo_atendimento);
$EmpresasDTO->setIdEmpresas($idEmpresas);

$EmpresasDAO = new EmpresasDAO;
$sucesso = $EmpresasDAO->updateEmpresasById($EmpresasDTO);

if ($sucesso) {
    echo "<script>";
    echo "alert(' Alteração realizado com sucesso!');";
    echo "window.location.href='../View/ListarEmpresas.php';";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert.(' Erro ao cadastrar!');";
    echo "window.location.href='../View/ListarEmpresas.php';";
    echo "</script>";
}




        ?>
    </body>
</html>
