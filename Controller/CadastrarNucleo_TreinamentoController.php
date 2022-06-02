<?php

require_once '../Dao/Nucleo_TreinamentoDAO.php';
require_once '../Dto/Nucleo_TreinamentoDTO.php';

$nome_responsavel= $_POST["nome_responsavel"];
$telefone_responsavel= $_POST["telefone_responsavel"];
$local = $_POST["local"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$telefone_local = $_POST["telefone_local"];
$uf =$_POST["uf"];
$Nucleo_Atendimento_idNucleo_Atendimento = $_POST ["Nucleo_Atendimento_idNucleo_Atendimento"];

//if ($telefone_responsavel==""){
  // echo "<script>";
  // echo "alert('Esse número é whatsapp?');";
  // echo "window.location.href='../view/CadastrarNucleo_Treinamento.php';";
  // echo "</script>"; 
    
//}
// else {
  $Nucleo_TreinamentoDTO = new Nucleo_TreinamentoDTO();

$Nucleo_TreinamentoDTO->setNome_responsavel($nome_responsavel);
$Nucleo_TreinamentoDTO->setTelefone_responsavel($telefone_responsavel);
$Nucleo_TreinamentoDTO->setLocal($local);
$Nucleo_TreinamentoDTO->setCidade($cidade);
$Nucleo_TreinamentoDTO->setCep($cep);
$Nucleo_TreinamentoDTO->setTelefone_local($telefone_local);
$Nucleo_TreinamentoDTO->setUf($uf);
$Nucleo_TreinamentoDTO->setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento);


$Nucleo_TreinamentoDAO = new Nucleo_TreinamentoDAO;
$sucesso = $Nucleo_TreinamentoDAO->salvarNucleo_Treinamento($Nucleo_TreinamentoDTO);

if ($sucesso){
    echo "<script>";
            echo "alert('Cadastro realizado com sucesso!');";
            echo "window.location.href='../View/ListrarNucleo_Treinamento.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert.(' Erro ao cadastrar !');";
            echo "window.location.href='../View/ListrarNucleo_Treinamento.php';";
            echo "</script>";
}
?>
