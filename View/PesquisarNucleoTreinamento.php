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
                <div class="card-body"><h1><center>Pesquisar Núcleo de Treinamento</center></h1></div>
            </div>
            <br>
            <form class="form-group" name="PesquisarNucleoTreinamento" method="post" action="../Controller/PesquisarNucleoTreinamentoController.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_responsavel">Nome do Responsável</label>
                                <input name="nome_responsavel" required="1" type="text" class="form-control" id="nome_responsavel" placeholder="Digite o nome do Responsável">
                            </div>
                            
                            
                            </div>
                        <div class="form-row">
                            <div class="form-group">
                                <button type="reset" class="btn btn-light btn-lg">Limpar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                            </div>
