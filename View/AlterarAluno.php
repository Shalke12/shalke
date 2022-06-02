
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../complementosWEB.html';
require_once '../Dao/AlunoDAO.php';
require_once '../Dto/AlunoDTO.php';

$idAluno = $_GET["id"];//ERRO

$AlunoDTO = new AlunoDTO;
$AlunoDTO->setIdAluno($idAluno);
$AlunoDAO = new AlunoDAO;
$pesquisaUmRegistro = $AlunoDAO->getAlunoById($AlunoDTO);


?>

<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> Alterar Dados Pessoais do Aluno</h1></div>
            </div>
            <br>
            <form class="form-group" name="AlterarAluno" method="post" action="../Controller/AlterarAlunoController.php">
                <input type="hidden" name="idAluno" value="<?php echo $pesquisaUmRegistro["idaluno"] ?>"/>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome">Nome</label>
                                <input name="nome" required="1" type="text" class="form-control" id="nome"  value="<?php echo $pesquisaUmRegistro["nome"] ?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="raca">Raça</label>
                                <select class="form-control" name="raca">
                                    <option value="<?php echo $pesquisaUmRegistro["raca"] ?>"><?php echo $pesquisaUmRegistro["raca"] ?></option>
                                    <option value="Negro"> Negro</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Pardo">Pardo</option>
                                    <option value="indigena">indígena</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label>
                                    Sexo:
                                </label>
                               <?php 

                              $sexo = $pesquisaUmRegistro["sexo"] ;
                              If ($sexo  ==  "masculino")
                              {
                              echo "Masculino <input  type='radio' name='sexo' value='masculino' checked='1' >";
                               echo "Feminino <input  type='radio' name='sexo' value='feminino' >";
                              }
                              Else
                              {
                                 echo "Feminino <input  type='radio' name='sexo' value='feminino'  checked='1' >";
                                 echo "Masculino <input  type='radio' name='sexo' value='masculino' >";

                              }

                              ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cpf">CPF</label>
                                <input name="cpf" required="1" type="text" class="form-control" id="cpf"  value="<?php echo $pesquisaUmRegistro["cpf"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="rg">RG</label>
                                <input name="rg" required="1" type="text" class="form-control" id="RG"  value="<?php echo $pesquisaUmRegistro["rg"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="datanascimento">Data de Nascimento</label>
                                <input name="datanascimento" required="1" type="date" class="form-control" id="datanascimento"  value="<?php echo $pesquisaUmRegistro["datanascimento"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone">WhatsApp</label>
                                <input name="telefone" type="tel" class="form-control" name="telefone"  value="<?php echo $pesquisaUmRegistro["telefone"] ?>">
                               
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email"  value="<?php echo $pesquisaUmRegistro["email"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="website">Redes Sociais</label>
                                <select name="website" id="website" class="form-control">
                                  <option value="<?php echo $pesquisaUmRegistro["website"] ?>"><?php echo $pesquisaUmRegistro["website"] ?></option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="LinkedIn">LinkedIn</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Snapchat">Snapchat</option>
                                    <option value="Skype">Skype</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="endereco">Endereço</label>
                                <input name="endereco" required="1" type="text" class="form-control" id="endereco"  value="<?php echo $pesquisaUmRegistro["endereco"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input name="cidade" required="1" type="text" class="form-control" id="cidade"  value="<?php echo $pesquisaUmRegistro["cidade"] ?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input name="cep" required="1" type="text" class="form-control" id="cep"  value="<?php echo $pesquisaUmRegistro["cep"] ?>">
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf">UF</label>
                                <input name="uf" required="1" type="text" class="form-control" id="uf"  value="<?php echo $pesquisaUmRegistro["uf"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                           

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="mae">Nome da Mãe</label>
                                <input name="mae" type="text" class="form-control" id="mae" value="<?php echo $pesquisaUmRegistro["mae"] ?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_mae">WhatsApp</label>
                                <input name="telefone_mae" type="text" class="form-control" name="telefone_mae"  value="<?php echo $pesquisaUmRegistro["telefone_mae"] ?>">
                                
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="profissao_mae">Profissão</label>
                                <input name="profissao_mae" type="text" class="form-control" id="profissao_mae"  value="<?php echo $pesquisaUmRegistro["profissao_mae"] ?>">
                            </div>
                        </div>
                        <div class="form-row"> 
                           

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="pai">Nome do Pai</label>
                                <input name="pai" type="text" class="form-control" id="pai"  value="<?php echo $pesquisaUmRegistro["pai"] ?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_pai">WhatsApp</label>
                                <input name="telefone_pai" type="tet" class="form-control" name="telefone_pai"  value="<?php echo $pesquisaUmRegistro["telefone_pai"] ?>">
                               
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="profissao_pai">Profissão</label>
                                <input name="profissao_pai" type="text" class="form-control" id="profissao_pai"  value="<?php echo $pesquisaUmRegistro["profissao_pai"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                           

                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="responsavel">Nome do Responsavel</label>
                                <input name="responsavel" type="text" class="form-control" id="responsavel" value="<?php echo $pesquisaUmRegistro["responsavel"] ?>" >
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="parentesco_responsavel">Parentesco do Responsavel</label>
                                <input name="parentesco_responsavel" type="text" class="form-control" id="parentesco_responsavel"  value="<?php echo $pesquisaUmRegistro["parentesco_responsavel"] ?>" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="telefone_responsavel">WhatsApp</label>
                                <input name="telefone_responsavel" type="tel" class="form-control"  value="<?php echo $pesquisaUmRegistro["telefone_responsavel"] ?>" >
                                
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="profissao_responsavel">Profissão</label>
                                <input name="profissao_responsavel" type="text" class="form-control" id="profissao_responsavel"  value="<?php echo $pesquisaUmRegistro["profissao_responsavel"] ?>" >
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1> Alterar Dados Escolares do Aluno</h1></div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_escola">Nome da Escola</label>
                                <input name="nome_escola" type="text" class="form-control" id="nome_escola"  value="<?php echo $pesquisaUmRegistro["nome_escola"] ?>" >
                            </div>

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="endereco_escola">Endereço</label>
                                <input name="endereco_escola"  type="text" class="form-control" id="endereco_escola"  value="<?php echo $pesquisaUmRegistro["endereco_escola"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input name="cidade_escola" type="text" class="form-control" id="cidade"  value="<?php echo $pesquisaUmRegistro["cidade_escola"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input name="cep_escola"  type="text" class="form-control" id="cep"  value="<?php echo $pesquisaUmRegistro["cep_escola"] ?>">
                            </div>
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="uf">UF</label>
                                <input name="uf_escola" type="text" class="form-control" id="uf"  value="<?php echo $pesquisaUmRegistro["uf_escola"] ?>">
                            </div>
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="grau">Escolaridade</label>
                                <select name="grau" id="grau" class="form-control">
                                    <option value="<?php echo $pesquisaUmRegistro["grau"] ?>"><?php echo $pesquisaUmRegistro["grau"] ?></option>
                                   
                                    <option value="Educação Infantil">Educação Infantil</option>
                                    <option value="Ensino Fundamental">Ensino Fundamental</option>
                                    <option value="Ensino Médio">Ensino Médio</option>
                                    <option value="Completo">Completo</option>
                                    <option value="Outros">Outros</option>

                                </select>
                            </div>
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="turno">Turno</label>
                                <select name="turno" id="inputState" class="form-control">
                                    <option  value="<?php echo $pesquisaUmRegistro["turno"] ?>"><?php echo $pesquisaUmRegistro["turno"] ?></option>
                                    <option value="Matutino">Matutino</option>
                                    <option value="Vespertino">Vespertino</option>
                                    <option value="Noturno">Noturno</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1> Alterar Dados Esportivos do Aluno</h1></div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="datainclusao">Dada de inclusão</label>
                                <input name="datainclusao" type="date" class="form-control" id="datainclusao"  value="<?php echo $pesquisaUmRegistro["datainclusao"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="desligamento">Data de Desligamento</label>
                                <input name="desligamento" type="date" class="form-control" id="desligamento"  value="<?php echo $pesquisaUmRegistro["desligamento"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="peso">Peso</label>
                                <input name="peso" type="text" class="form-control" id="peso"  value="<?php echo $pesquisaUmRegistro["peso"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="altura">Altura</label>
                                <input name="altura" type="text" class="form-control" id="altura"  value="<?php echo $pesquisaUmRegistro["altura"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="camisa">Tamanho da Camisa:</label>
                                <select name="camisa" class="form-control">
                                    <option  value="<?php echo $pesquisaUmRegistro["camisa"] ?>"><?php echo $pesquisaUmRegistro["camisa"] ?></option>
                                   
                                    <option value="P">P</option> 
                                    <option value="M">M</option> 
                                    <option value="G">G</option> 
                                    <option value="GG">GG</option> 
                                    <option value="XXG">XXG</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="short" >Tamanho do Short</label>
                                <select name="short" class="form-control">
                                 <option  value="<?php echo $pesquisaUmRegistro["short"] ?>"><?php echo $pesquisaUmRegistro["short"] ?></option>
                                    
                                    <option value="P">P</option> 
                                    <option value="M">M</option> 
                                    <option value="G">G</option> 
                                    <option value="GG">GG</option> 
                                    <option value="XXG">XXG</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="calcado">Calçado</label>
                                <input name="calcado" type="number" class="form-control" id="calcado"  value="<?php echo $pesquisaUmRegistro["calcado"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="grupo_sanguineo">Grupo Sanguineo</label>
                                <select name="grupo_sanguineo" id="grupo_sanguineo" class="form-control">
                                    <option  value="<?php echo $pesquisaUmRegistro["grupo_sanguineo"] ?>"><?php echo $pesquisaUmRegistro["grupo_sanguineo"] ?></option> 
                                    <option value="A+">A+</option> 
                                    <option value="B+">B+</option> 
                                    <option value="AB+">AB+</option> 
                                    <option value="AB-">AB-</option> 
                                    <option value="O+">O+</option> 
                                    <option value="O-">O-</option>

                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="medicacao">Medicação</label>
                                
                                <input name="medicacao" required="1" type="text" class="form-control" name="medicacao"  value="<?php echo $pesquisaUmRegistro["medicacao"] ?>">
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="termo">Termo</label>
                                
                                <input name="termo" type="file" class="form-control"  value="<?php echo $pesquisaUmRegistro["termo"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Atendimento_idNucleo_Atendimento">Nucleo de Atendimento</label>
                                <select name="Nucleo_Atendimento_idNucleo_Atendimento" class="form-control">
                                     
                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["nucleo_atendimento_idnucleo_atendimento"]}'> {$pesquisaUmRegistro["sede"]}</option>";
                                    require_once '../Dao/Nucleo_AtendimentoDAO.php';
                                    $Nucleo_AtendimentoDAO = new Nucleo_AtendimentoDAO();
                                    $nucleo_atendimento = $Nucleo_AtendimentoDAO->getAllNucleo_Atendimento();

                                    foreach ($nucleo_atendimento as $na) {

                                        echo " <option value='{$na["idnucleo_atendimento"]}'> {$na["sede"]}</option>";
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Treinamento_idNucleo_Treinamento">Nucleo de Treinamento</label>
                                <select name="Nucleo_Treinamento_idNucleo_Treinamento" class="form-control">
                                     
                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["nucleo_treinamento_idnucleo_treinamento"]}'> {$pesquisaUmRegistro["local"]}</option>";
                                    require_once '../Dao/Nucleo_TreinamentoDAO.php';
                                    $Nucleo_TreinamentoDAO = new Nucleo_TreinamentoDAO;
                                    $nucleo_treinamento = $Nucleo_TreinamentoDAO->getAllNucleo_Treinamento();

                                    foreach ($nucleo_treinamento as $nt) {

                                        echo " <option value='{$nt["idnucleo_treinamento"]}'> {$nt["local"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Modalidade_idModalidade">Modalidade</label>
                                <select name="Modalidade_idModalidade" id="Modalidade_idModalidade" class="form-control">
                                     
                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["modalidade_idmodalidade"]}'> {$pesquisaUmRegistro["descricao"]}</option>";
                                    require_once '../Dao/ModalidadeDAO.php';
                                    $ModalidadeDAO = new ModalidadeDAO;
                                    $modalidade = $ModalidadeDAO->getAllModalidade();

                                    foreach ($modalidade as $m) {

                                        echo " <option value='{$m["idmodalidade"]}'> {$m["descricao"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Categoria_idCategoria">Categoria</label>
                                <select name="Categoria_idCategoria" class="form-control">
                                
                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["categoria_idcategoria"]}'> {$pesquisaUmRegistro["idade"]}</option>";
                                    require_once '../Dao/CategoriaDAO.php';
                                    $CategoriaDAO = new CategoriaDAO;
                                    $categoria = $CategoriaDAO->getAllCategoria();

                                    foreach ($categoria as $c) {

                                        echo " <option value='{$c["idcategoria"]}'> {$c["idade"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Horario_idHorario">Horário</label>
                                <select name="Horario_idHorario" class="form-control">
                                     
                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["horario_idhorario"]}'> {$pesquisaUmRegistro["hora"]}</option>";
                                    require_once '../Dao/HorarioDAO.php';
                                    $HorarioDAO = new HorarioDAO;
                                    $hora = $HorarioDAO->getAllHorario();

                                    foreach ($hora as $h) {

                                        echo " <option value='{$h["idhorario"]}'> {$h["hora"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="treino_semanal_idTreino_semanal">Treino na Semana</label>
                                <select name="Treino_semanal_idTreino_semanal" class="form-control">
                                     
                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["treino_semanal_idtreino_semanal"]}'> {$pesquisaUmRegistro["semana"]}</option>";
                                    require_once '../Dao/Treino_semanalDAO.php';
                                    $Treino_semanalDAO = new Treino_semanalDAO;
                                    $treino = $Treino_semanalDAO->getAllTreino_semanal();

                                    foreach ($treino as $ts) {

                                        echo " <option value='{$ts["idtreino_semanal"]}'> {$ts["semana"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <button type="reset" class="btn btn-light btn-lg">Limpar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Alterar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </center>
</body>
</html>