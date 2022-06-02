
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../complementosWEB.html';
require_once '../Dao/Nucleo_TreinamentoDAO.php';
require_once '../Dto/Nucleo_TreinamentoDTO.php';

$idNucleo_Treinamento = $_GET["id"];

$Nucleo_TreinamentoDTO = new Nucleo_TreinamentoDTO;
$Nucleo_TreinamentoDTO->setIdNucleo_Treinamento($idNucleo_Treinamento);
$Nucleo_TreinamentoDAO = new Nucleo_TreinamentoDAO;
$pesquisaUmRegistro = $Nucleo_TreinamentoDAO->getNucleo_TreinamentoById($idNucleo_Treinamento);
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> Alterar Núcleo de Treinamento </h1></div>
            </div>
            <br>
            <form class="form-group" name="CadastrarNucleo_Treinamento" method="post" action="../Controller/AlterarNucleo_TreinamentoController.php">
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_responsavel">Nome do Responsável</label>
                                <input name="nome_responsavel" required="1" type="text" class="form-control" id="nome_responsavel" placeholder="Digite aqui" value="<?php echo $pesquisaUmRegistro["nome_responsavel"]?>">
                                <input name="idNucleo_Treinamento" type="hidden" class="form-control" id="idNucleo_Treinamento" placeholder="Digite aqui" value="<?php echo $pesquisaUmRegistro["idnucleo_treinamento"]?>">

                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_responsavel">Telefone do Responsável</label>
                                <input name="telefone_responsavel" type="tel" class="form-control" value="<?php echo $pesquisaUmRegistro["telefone_responsavel"]?>">
                               
                            </div>
                            
                        <div class="form-row">
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="local">Local</label>
                                <input name="local" required="1" type="text" class="form-control" id="endereco" placeholder="Digite aqui" value="<?php echo $pesquisaUmRegistro["local"]?>">
                            </div>
                            
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input name="cep" required="1" type="text" class="form-control" id="cep" placeholder="Digite aqui" value="<?php echo $pesquisaUmRegistro["cep"]?>" size="50"> 
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input name="cidade" required="1" type="text" class="form-control" id="cidade" placeholder="Digite aqui" value="<?php echo $pesquisaUmRegistro["cidade"]?>" size="50">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf">UF</label>
                                <input name="uf" type="text" required="1" class="form-control" id="cep" placeholder="Digite aqui" value="<?php echo $pesquisaUmRegistro["uf"]?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_local">Telefone do Local</label>
                                <input name="telefone_local" type="tel" class="form-control" id="telefone_local" placeholder="Digite aqui" value="<?php echo $pesquisaUmRegistro["telefone_local"]?>" >
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                     
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Atendimento">Núcleo de Atendimento</label>
                                <select name="Nucleo_Atendimento" class="form-control" id="Nucleo_Atendimento">
                                    
                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["nucleo_atendimento_idnucleo_atendimento"]}'> {$pesquisaUmRegistro["sede"]}</option>";

                                    require_once '../Dao/Nucleo_AtendimentoDAO.php';
                                    $Nucleo_AtendimentoDAO = new Nucleo_AtendimentoDAO();
                                    $Nucleo_AtendimentoDAO = $Nucleo_AtendimentoDAO->getAllNucleo_Atendimento();

                                    foreach ($Nucleo_AtendimentoDAO as $na) {

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

