<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            .rodape{
                position: fixed;
                left:0;
                bottom:0;
                width: 100%;
                background-color: #28a745;
                color: black;
                text-align: center;
                height: 50px;
            }  
            p{
                margin-top: 1px
            }
        </style>
        <title></title>
    </head>
    <body style="background-color:white ">
        <div class="rodape">
            <p>
            <h4> Sistema 1.0 SHALKE-XII - &COPY;2021 -</h4>
                <?php
                $data = date("y");
                echo $data;
                ?>
            </p>

        </div>
        <?php
        // put your code here
        include_once '../ComplementosWeb.html';
        ?>
    </body>
</html>
