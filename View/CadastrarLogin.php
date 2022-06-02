<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../complementosWEB.html';
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> <center>Cadastrar Login</center></h1></div>
            </div>
            <br>
            <form class="form-group" nome="CadastrarLogin" method="post" action="../Controller/CadastrarLogincontroller.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="nome">Nome</label>
                                <input type="text" required="1" placeholder="Digite o Nome" class="form-control" name="nome" >
                            </div>

                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="login">Login</label>
                                <input type="text" required="1" placeholder="Digite o Login" class="form-control" name="login" size="50">
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder=" Digite o Email">
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="senha">Senha</label>
                                <input type="password" required="1" placeholder="Digite a Senha" class="form-control" name="senha" >
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
                                    <option>Selecione</option>
                                    <?php
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
                                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
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
