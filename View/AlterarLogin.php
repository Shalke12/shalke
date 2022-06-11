<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../ComplementosWeb.html';
require_once '../Dao/LoginDAO.php';
require_once '../Dto/LoginDTO.php';

$idLogin = $_GET["id"];

$LoginDTO = new LoginDTO;
$LoginDTO->setIdLogin($idLogin);
$LoginDAO = new LoginDAO;
$pesquisaUmRegistro = $LoginDAO->getLoginById($LoginDTO);
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> Alterar Login dos Colaboradores </h1></div>
            </div>
            <br>
            <form class="form-group" name="AlterarLogin" method="post" action="../Controller/AlterarLoginController.php">
                <input type="hidden" name="idLogin" value="<?php echo $pesquisaUmRegistro["idLogin"] ?>"/>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" name="nome" required="1" value="<?php echo $pesquisaUmRegistro["nome"] ?>" >
                            </div>

                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" name="login" required="1" value="<?php echo $pesquisaUmRegistro["login"] ?>">
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required="1" placeholder="Email" value="<?php echo $pesquisaUmRegistro["email"] ?>">
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" name="senha" required="1" value="<?php echo $pesquisaUmRegistro["senha"] ?>" >
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Perfil_idPerfil">Perfil</label>
                                <select name="Perfil_idPerfil" class="form-control">

                                    <?php
                                    echo "<option value='{$pesquisaUmRegistro["Perfil_idPerfil"]}'> {$pesquisaUmRegistro["perfil"]}</option>";
                                    require_once '../Dao/PerfilDAO.php';
                                    $PerfilDAO = new PerfilDAO;
                                    $perfil = $PerfilDAO->getAllPerfil();

                                    foreach ($perfil as $p) {
                                        if (($p["idperfil"] == "1") or ($p["idperfil"] == "2")) {
                                            echo " <option value='{$p["idperfil"]}'> {$p["perfil"]}</option>";
                                        }
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
