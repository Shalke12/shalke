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
$idNucleo_Atendimento =$_POST["Nucleo_Atendimento"];
//echo $idNucleo_Atendimento;
$idNucleo_Treinamento = $_POST["idNucleo_Treinamento"];
//echo $idNucleo_Treinamento;
//exit();

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
$Nucleo_TreinamentoDTO->setNucleo_Atendimento_idNucleo_Atendimento($idNucleo_Atendimento);
$Nucleo_TreinamentoDTO->setIdNucleo_Treinamento($idNucleo_Treinamento);




$Nucleo_TreinamentoDAO = new Nucleo_TreinamentoDAO;

$verificar = $Nucleo_TreinamentoDAO->updateNucleo_Treinamento($Nucleo_TreinamentoDTO);

  if ($verificar) {

            echo "<script>";
            echo "alert(' Alteração realizada com sucesso!');";
            echo "window.location.href='../View/ListrarNucleo_Treinamento.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert.(' Erro ao alterar!');";
            echo "window.location.href='../View/ListrarNucleo_Treinamento.php';";
            echo "</script>";
        }
     
        ?>