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
                <div class="card-body"><h1> <center>Pesquisar Família</center> </h1></div>
            </div>
            <br>
            <form class="form-group" name="PesquisarFamilia" method="post" action="../Controller/PesquisarFamiliaController.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_chefe_familia">Nome do Chefe da Família</label>
                                <input type="text" required="1" class="form-control" placeholder="Digite o nome do chefe da Familia" name="nome_chefe_familia" >
                            </div>
                            
                            
                            </div>
                        <div class="form-row">
                            <div class="form-group">
                                <button type="reset" class="btn btn-light btn-lg">Limpar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                            </div>