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
$Nucleo_Atendimento_idNucleo_Atendimento = $_POST["Nucleo_Atendimento_idNucleo_Atendimento"];



$EmpresasDTO = New EmpresasDTO();

$EmpresasDTO->setCnpj($cnpj);
$EmpresasDTO->setRazao_social($razao_social);
$EmpresasDTO->setNome_fantasia($nome_fantasia);
$EmpresasDTO->setEndereco($endereco);
$EmpresasDTO->setCidade($cidade);
$EmpresasDTO->setCep($cep);
$EmpresasDTO->setUf($uf);
$EmpresasDTO->setSegmento($segmento);
$EmpresasDTO->setTipo_empresa($tipo_empresa);
$EmpresasDTO->setEmail($email);
$EmpresasDTO->setWebsite($website);
$EmpresasDTO->setTelefone_local($telefone_local);
$EmpresasDTO->setNome_empresario($nome_empresario);
$EmpresasDTO->setTelefone_pessoal($telefone_pessoal);
$EmpresasDTO->setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento);



$EmpresasDAO = New EmpresasDAO();
$verificar = $EmpresasDAO->salvarEmpresas($EmpresasDTO);

if ($verificar) {
       
            echo "<script>";
            echo "alert('Cadastro realizado com sucesso!');";
            echo "window.location.href='../View/ListarEmpresas.php';";
            echo "</script>";
       
        }
        else {
            
            echo "<script>";
            echo "alert('Erro ao cadastrar Empresa!');";
            echo "window.location.href='../View/ListarEmpresas.php';";
            echo "</script>";
        }

?>