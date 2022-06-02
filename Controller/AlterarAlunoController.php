<?php

require_once '../Dao/AlunoDAO.php';
require_once '../Dto/AlunoDTO.php';


$nome = $_POST ["nome"];
$cpf = $_POST ["cpf"];
$rg = $_POST ["rg"];
$datanascimento = $_POST ["datanascimento"];
$sexo = $_POST ["sexo"];
$raca = $_POST ["raca"];
$email = $_POST ["email"];
$website = $_POST ["website"];
$endereco = $_POST ["endereco"];
$cidade = $_POST ["cidade"];
$cep = $_POST ["cep"];
$uf = $_POST ["uf"];
$telefone = $_POST ["telefone"];
$nome_escola = $_POST ["nome_escola"];
$endereco_escola = $_POST ["endereco_escola"];
$cidade_escola = $_POST ["cidade_escola"];
$cep_escola = $_POST ["cep_escola"];
$uf_escola = $_POST ["uf_escola"];
$turno = $_POST ["turno"];
$grau = $_POST ["grau"];
$datainclusao = $_POST ["datainclusao"];
$desligamento = $_POST ["desligamento"];
$peso = $_POST ["peso"];
$altura = $_POST ["altura"];
$camisa = $_POST ["camisa"];
$short = $_POST ["short"];
$calcado = $_POST ["calcado"];
$grupo_sanguineo = $_POST ["grupo_sanguineo"];
$medicacao = $_POST ["medicacao"];
$mae = $_POST ["mae"];
$pai = $_POST ["pai"];
$responsavel = $_POST ["responsavel"];
$telefone_mae = $_POST ["telefone_mae"];
$telefone_pai = $_POST ["telefone_pai"];
$telefone_responsavel = $_POST ["telefone_responsavel"];
$parentesco_responsavel = $_POST ["parentesco_responsavel"];
$profissao_mae = $_POST ["profissao_mae"];
$profissao_pai = $_POST ["profissao_pai"];
$profissao_responsavel = $_POST ["profissao_responsavel"];
$termo = $_POST ["termo"];
$Nucleo_Atendimento_idNucleo_Atendimento = $_POST ["Nucleo_Atendimento_idNucleo_Atendimento"];
$Nucleo_Treinamento_idNucleo_Treinamento = $_POST ["Nucleo_Treinamento_idNucleo_Treinamento"];
$Treino_semanal_idTreino_semanal = $_POST ["Treino_semanal_idTreino_semanal"];
$Categoria_idCategoria = $_POST ["Categoria_idCategoria"];
$Horario_idHorario = $_POST ["Horario_idHorario"];
$Modalidade_idModalidade = $_POST ["Modalidade_idModalidade"];
$idAluno = $_POST ["idAluno"];




$AlunoDTO = new AlunoDTO();

$AlunoDTO->setNome($nome);
$AlunoDTO->setCpf($cpf);
$AlunoDTO->setRg($rg);
$AlunoDTO->setDatanascimento($datanascimento);
$AlunoDTO->setSexo($sexo);
$AlunoDTO->setRaca($raca);
$AlunoDTO->setEmail($email);
$AlunoDTO->setWebsite($website);
$AlunoDTO->setEndereco($endereco);
$AlunoDTO->setCidade($cidade);
$AlunoDTO->setCep($cep);
$AlunoDTO->setUf($uf);
$AlunoDTO->setTelefone($telefone);
$AlunoDTO->setNome_escola($nome_escola);
$AlunoDTO->setEndereco_escola($endereco_escola);
$AlunoDTO->setCidade($cidade);
$AlunoDTO->setUf_escola($uf_escola);
$AlunoDTO->setTurno($turno);
$AlunoDTO->setGrau($grau);
$AlunoDTO->setDatainclusao($datainclusao);
$AlunoDTO->setDesligamento($desligamento);
$AlunoDTO->setPeso($peso);
$AlunoDTO->setAltura($altura);
$AlunoDTO->setCamisa($Camisa);
$AlunoDTO->setShort($short);
$AlunoDTO->setCalcado($calcado);
$AlunoDTO->setGrupo_sanguineo($grupo_sanguineo);
$AlunoDTO->setMedicacao($medicacao);
$AlunoDTO->setMae($mae);
$AlunoDTO->setPai($pai);
$AlunoDTO->setResponsavel($responsavel);
$AlunoDTO->setTelefone_mae($telefone_mae);
$AlunoDTO->setTelefone_pai($telefone_pai);
$AlunoDTO->setTelefone_responsavel($telefone_responsavel);
$AlunoDTO->setParentesco_responsavel($parentesco_responsavel);
$AlunoDTO->setProfissao_mae($profissao_mae);
$AlunoDTO->setProfissao_pai($profissao_pai);
$AlunoDTO->setProfissao_responsavel($profissao_responsavel);
$AlunoDTO->setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento);
$AlunoDTO->setNucleo_Treinamento_idNucleo_Treinamento($Nucleo_Treinamento_idNucleo_Treinamento);
$AlunoDTO->setTreino_semanal_idTreino_semanal($Treino_semanal_idTreino_semanal);
$AlunoDTO->setCategoria_idCategoria($Categoria_idCategoria);
$AlunoDTO->setHorario_idHorario($Horario_idHorario);
$AlunoDTO->setModalidade_idModalidade($Modalidade_idModalidade);
$AlunoDTO->setIdAluno($idAluno);


$AlunoDAO = new AlunoDAO();

$verificar = $AlunoDAO->updateAlunoById($AlunoDTO);

  if ($verificar) {

            echo "<script>";
            echo "alert(' Alteração realizada com sucesso!');";
            echo "window.location.href='../View/ListarAlunos.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert.(' Erro ao alterar!');";
            echo "window.location.href='../View/ListarAlunos.php';";
            echo "</script>";
        }
        ?>
