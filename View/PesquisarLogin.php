<!DOCTYPE html>
<?php
include_once '../complementosWEB.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        </script> 
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> <center>Pesquisa de Login </center></h1></div>
            </div>
            <br>
            <form class="form-group" name="PesquisarLogin" method="post" action="../Controller/PesquisarLoginController.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="login">Login</label>
                                <input type="text" required="1" placeholder="Digite o Login" class="form-control" name="login" size="50">
                            </div>
                            
                            
                            </div>
                        <div class="form-row">
                            <div class="form-group">
                                <button type="reset" class="btn btn-light btn-lg">Limpar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                            </div>