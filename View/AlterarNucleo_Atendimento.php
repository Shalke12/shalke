<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../ComplementosWeb.html';
require_once '../Dao/Nucleo_AtendimentoDAO.php';
require_once '../Dto/Nucleo_AtendimentoDTO.php';

$idNucleo_Atendimento = $_GET["id"];

$Nucleo_AtendimentoDTO = new Nucleo_AtendimentoDTO;
$Nucleo_AtendimentoDTO->setIdNucleo_Atendimento($idNucleo_Atendimento);
$Nucleo_AtendimentoDAO = new Nucleo_AtendimentoDAO;
$pesquisaUmRegistro = $Nucleo_AtendimentoDAO->getNucleo_AtendimentoById($idNucleo_Atendimento);

?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1>Alterar Núcleo Atendimento</h1></div>
            </div>
            <br>
            <form class="form-group" name="AlterarNucleo_atendimento" method="post" action="../Controller/AlterarNucleo_AtendimentoController.php">
                <input type="hidden" name="idNucleo_Atendimento" value="<?php echo $pesquisaUmRegistro["idnucleo_atendimento"] ?>"/>
               <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="sede">Sede</label>
                                <input type="text" required="1" name="sede" class="form-control" id="sede" value="<?php echo $pesquisaUmRegistro["sede"]?>" >
                            </div>

                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_sede">Telefone</label>
                                <input type="tel" class="form-control" name="telefone_sede" value="<?php echo $pesquisaUmRegistro["telefone_sede"]?>">
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="email_email">Email</label>
                                <input type="email" class="form-control" name="email_email" placeholder="Email" value="<?php echo $pesquisaUmRegistro["email_email"]?>">
                            </div>
                        </div>
                        <div class="form-row">
                           <div class="form-group col-md-4 font-weight-bold">
                                <label for="inputAddress">Endereço</label>
                                <input type="text" required="1" class="form-control" name="endereco_sede" placeholder="Endereço" value="<?php echo $pesquisaUmRegistro["endereco_sede"]?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade_sede">Cidade</label>
                                <input type="text" required="1" class="form-control" name="cidade_sede" value="<?php echo $pesquisaUmRegistro["cidade_sede"]?>" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep_sede">CEP</label>
                                <input type="text" required="1" class="form-control" name="cep_sede" value="<?php echo $pesquisaUmRegistro["cep_sede"]?>">
                            </div>
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf_sede">UF</label>
                                <input type="text" required="1" class="form-control" name="uf_sede" value="<?php echo $pesquisaUmRegistro["uf_sede"]?>">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                     
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


