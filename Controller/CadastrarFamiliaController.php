<?php
require_once '../Dao/FamiliaDAO.php';
require_once '../Dto/FamiliaDTO.php';

$nome_chefe_familia = $_POST ["nome_chefe_familia"];
$sexo = $_POST ["sexo"];
$cpf = $_POST ["cpf"];
$endereco = $_POST ["endereco"];
$cidade = $_POST ["cidade"];
$cep = $_POST ["cep"];
$uf = $_POST ["uf"];
$email = $_POST ["email"];
$telefone = $_POST ["telefone"];
$nucleo_familiar = $_POST ["nucleo_familiar"];
$moradia = $_POST ["moradia"];
$Nucleo_Atendimento_idNucleo_Atendimento = $_POST ["Nucleo_Atendimento_idNucleo_Atendimento"];


//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
//exit();


$FamiliaDTO = new FamiliaDTO();

$FamiliaDTO->setNome_chefe_familia($nome_chefe_familia);
$FamiliaDTO->setSexo($sexo);
$FamiliaDTO->setCpf($cpf);
$FamiliaDTO->setEndereco($endereco);
$FamiliaDTO->setCidade($cidade);
$FamiliaDTO->setCep($cep);
$FamiliaDTO->setUf($uf);
$FamiliaDTO->setEmail($email);
$FamiliaDTO->setTelefone($telefone);
$FamiliaDTO->setNucleo_familiar($nucleo_familiar);
$FamiliaDTO->setMoradia($moradia);
$FamiliaDTO->setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento);


$FamiliaDAO = new FamiliaDAO;
$sucesso = $FamiliaDAO->salvarFamilia($FamiliaDTO);

if ($sucesso){
    echo "<script>";
            echo "alert('Cadastro realizado com sucesso!');";
            echo "window.location.href='../View/ListarFamilia.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert.(' Erro ao cadastrar !');";
            echo "window.location.href='../View/ListarFamilia.php';";
            echo "</script>";
}
?>
