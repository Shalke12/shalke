<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../complementosWEB.html';
require_once '../Dao/ColaboradorDAO.php';
require_once '../Dto/ColaboradorDTO.php';

  $idColaborador = $_GET["id"];//ERRO

$ColaboradorDTO = new ColaboradorDTO;
$ColaboradorDTO->setIdColaborador($idColaborador);
$ColaboradorDAO = new ColaboradorDAO;
$pesquisaUmRegistro = $ColaboradorDAO->getColaboradorById($idColaborador);//OLHAR SEMPRE NA DAO

?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> Alterar Colaborador </h1></div>
            </div>
            <br>
            <form class="form-group" nome="AlterarColaboador" method="post" action="../Controller/AlterarColaboradorController.php">
                <input type="hidden" name="idColaborador" value="<?php echo $pesquisaUmRegistro["idcolaborador"] ?>"/>
               <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome">Nome</label>
                                <input type="text" required="1" class="form-control" name="nome"  value="<?php echo $pesquisaUmRegistro["nome"] ?>" >
                            </div>
                            <!-- QUAL O COMANDO PARA ESSE TIPO DE ALTERAÇÃO -->
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
                              <!-- QUAL O COMANDO PARA ESSE TIPO DE ALTERAÇÃO -->
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="sexo">
                                    Sexo:
                                </label>
                              <?php 

                              $sexo = $pesquisaUmRegistro["sexo"] ;
                              If ($sexo  ==  "masc")
                              {
                              echo "Masculino <input  type='radio' name='sexo' value='masc' checked='1' >";
                               echo "Feminino <input  type='radio' name='sexo' value='fem' >";
                              }
                              Else
                              {
                                 echo "Feminino <input  type='radio' name='sexo' value='fem'  checked='1' >";
                                 echo "Masculino <input  type='radio' name='sexo' value='masc' >";

                              }

                              ?>
                               
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" name="cpf" required="1" value="<?php echo $pesquisaUmRegistro["cpf"] ?>" size="50">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="rg">RG</label>
                                <input type="text" required="1" class="form-control" name="rg"  value="<?php echo $pesquisaUmRegistro["rg"] ?>" size="50">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="datanascimento">Data de Nascimento</label>
                                <input type="date" required="1" class="form-control" name="datanascimento" value="<?php echo $pesquisaUmRegistro["datanascimento"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone">WhatsApp</label>
                                <input type="tel" class="form-control" name="telefone"  value="<?php echo $pesquisaUmRegistro["telefone"] ?>">
                                <!--Sim <input type="radio" name="telefone"/>
                                Não <input type="radio" name="telefone"/>-->
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email"  value="<?php echo $pesquisaUmRegistro["email"] ?>">
                            </div>
                              <!-- QUAL O COMANDO PARA ESSE TIPO DE ALTERAÇÃO -->
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="website">Redes Sociais</label>
                                <select name="website" class="form-control">
                                    <option value=" <?php echo $pesquisaUmRegistro["website"] ?>"><?php echo $pesquisaUmRegistro["website"] ?></option>
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
                                <label for="inputAddress">Endereço</label>
                                <input type="text" required="1" class="form-control" name="endereco"  value="<?php echo $pesquisaUmRegistro["endereco"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input type="text" required="1" class="form-control" name="cidade"  value="<?php echo $pesquisaUmRegistro["cidade"] ?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input type="text" required="1" class="form-control" name="cep"  value="<?php echo $pesquisaUmRegistro["cep"] ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf">UF</label>
                                <input type="text" required="1" class="form-control" name="uf"  value="<?php echo $pesquisaUmRegistro["uf"] ?>">
                            </div>
                              <div class="form-group col-md-4 font-weight-bold">
                                <label for="profissao">Profissão</label>
                                <input type="text" required="1" class="form-control" name="profissao"  value="<?php echo $pesquisaUmRegistro["profissao"] ?>">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <br>
                  <!-- QUAL O COMANDO PARA ESSE TIPO DE ALTERAÇÃO -->
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                     
                        <div class="form-row">
                             <div class="form-group col-md-6 font-weight-bold">
                                <label for="Perfil_idPerfil">Perfil</label>
                                <select name="Perfil_idPerfil" class="form-control">
                                    
                                    <?php
                                     echo "<option value='{$pesquisaUmRegistro["perfil_idperfil"]}'> {$pesquisaUmRegistro["perfil"]}</option>";
                                    require_once '../Dao/PerfilDAO.php';
                                    $PerfilDAO = new PerfilDAO;
                                    $perfil = $PerfilDAO->getAllPerfil();

                                    foreach ($perfil as $p) {

                                        echo " <option value='{$p["idperfil"]}'> {$p["perfil"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                              <!-- QUAL O COMANDO PARA ESSE TIPO DE ALTERAÇÃO -->
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

