<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../complementosWEB.html';
require_once '../Dao/FamiliaDAO.php';
require_once '../Dto/FamiliaDTO.php';

  $idFamilia = $_GET["id"];//ERRO

$FamiliaDTO = new FamiliaDTO;
$FamiliaDTO->setIdFamilia($idFamilia);
$FamiliaDAO = new FamiliaDAO;
$pesquisaUmRegistro = $FamiliaDAO->getFamiliaById($idFamilia);//OLHAR SEMPRE NA DAO

?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> Alterar Dados Pessoais da Família </h1></div>
            </div>
            <br>
            <form class="form-group" name="AlterarFamilia" method="post" action="../Controller/AlterarFamiliaController.php">
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_chefe_familia">Nome do Chefe da Família</label>
                                <input type="text" class="form-control" name="nome_chefe_familia" value="<?php echo $pesquisaUmRegistro["nome_chefe_familia"] ?>" >
                                <input type="hidden" required="1" class="form-control" name="idFamilia" value="<?php echo $pesquisaUmRegistro["idfamilia"] ?>" >

                            </div>
                            
                             <div class="form-group col-md-4 font-weight-bold">
                                 <label for="cpf">CPF</label>
                                 <input type="text" required="1" class="form-control" name="cpf" size="50" value="<?php echo $pesquisaUmRegistro["cpf"] ?>">
                               </div>
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
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone">WhatsApp</label>
                                <input type="tel" class="form-control" name="telefone" value="<?php echo $pesquisaUmRegistro["telefone"] ?>">
                               
                            </div>
                            
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $pesquisaUmRegistro["email"] ?>">
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="moradia">Moradia</label>
                                <select class="form-control" name="moradia" >
                                    <option value=" <?php echo $pesquisaUmRegistro["moradia"] ?>"><?php echo $pesquisaUmRegistro["moradia"] ?></option>
                                    <option value="Propria">Própria</option>
                                    <option value="Alugada">Alugada</option> 
                                    <option value="Cedida">Cedida</option>
                                    <option value="">Outras</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-row">
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="nucleo_familiar">Núcleo Familiar</label>
                                <input type="number" required="1" class="form-control" name="nucleo_familiar" value="<?php echo $pesquisaUmRegistro["nucleo_familiar"] ?>" >
                            </div>
                           <div class="form-group col-md-4 font-weight-bold">
                                <label for="inputAddress">Endereço</label>
                                <input type="text" required="1" class="form-control" name="endereco" placeholder="Endereço" value="<?php echo $pesquisaUmRegistro["endereco"] ?>">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input type="text" required="1" class="form-control" name="cidade" value="<?php echo $pesquisaUmRegistro["cidade"] ?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input type="text" required="1" class="form-control" name="cep" value="<?php echo $pesquisaUmRegistro["cep"] ?>">
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf">UF</label>
                                <input type="text" required="1" class="form-control" name="uf" value="<?php echo $pesquisaUmRegistro["uf"] ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                     
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Atendimento_idNucleo_Atendimento">Nucleo de Atendimento</label>
                                <select name="Nucleo_Atendimento_idNucleo_Atendimento" class="form-control">
                                
                                    <?php
                                    
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
