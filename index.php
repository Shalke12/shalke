<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once './ComplementosWeb.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="Imagem/" />
        <style>
            .container {
                width: 100vw;
                height: 100vh;
                background: #67A80;
                display: flex;
                flex-direction: row;
                justify-content: center;             
                align-items: center;

            }
            .box {
                width: 300px;
                height: 300px;
                background: coral;

            }
            body {
                margin: 0px;

                background-image: url('Imagem/Index2.jpg');
                background-size: cover;
            }
        </style>

        <title>Login</title>
    </head>
    <body>

        <div class="container">

            <div class="card">
                <img src="Imagem/indexlogin.png"  style="width:100%">

                <form name="login" method="post" action="Controller/Controllerlogin.php">
                    <table class="table table-borderless">
                        <tr>
                            <td colspan="2">
                                <input type="text" name="login" placeholder="Login" class="form-control" required="1" >
                            </td>
                        </tr>
                        <td colspan="2">
                            <input type="password" name="senha" placeholder="Senha" class="form-control" required="1" >
                                   </td>
                        <tr>
                            <td align="right">

                                <input type="reset" value="Limpar" class="btn btn-danger btn-sn">
                            </td>
                            <td>
                             <button type="submit" class="btn btn-success btn-sn">Entrar</button>

                            </td>    
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </center>>
    <center> 
        Sistema - Shalke.XII - &COPY;2021
    </center>

</body>
</html>
