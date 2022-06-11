<!DOCTYPE html>



<?php
include_once '../ComplementosWeb.html';
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
                <div class="card-body"><h1> <center>Pesquisar Colaborador</center> </h1></div>
            </div>
            <br>
            <form class="form-group" name="PesquisarColaborador" method="post" action="../Controller/PesquisarColaboradorController.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome">Nome</label>
                                <input type="text" required="1" class="form-control" name="nome" placeholder="Digite o Nome">
                            </div>
                            
                            
                            </div>
                        <div class="form-row">
                            <div class="form-group">
                                <button type="reset" class="btn btn-light btn-lg">Limpar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                            </div>