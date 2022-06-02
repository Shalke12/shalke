<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> <center>Colaboradores Cadastrados</center> </h1></div>
            </div>
            <br>
            <table class="table table-success table-striped">
                <tr style="background-color: coral">

                    <th align='center'>Código</th>
                    <th align='center'>Nome</th>
                     <th align='center'>Perfil</th>
                    <th align='center'>Dados Pessoais</th>
                    <th align='center'>Endereço</th>
                    <th align='center'>Contatos</th>
                    <th align='center'>Assistência</th>
                   


                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                require_once '../Dao/ColaboradorDAO.php';
                include_once '../ComplementosWeb.html';
                include '../RELATORIOS/Funcoes.php';


                $ColaboradorDAO = new ColaboradorDAO();
                $colaborador = $ColaboradorDAO->getAllColaborador();

                foreach ($colaborador as $c) {
                    $endereco = "";
                    $endereco = "Endereço:" . $c["endereco"] . "\n Cidade: " . $c["cidade"] . "\n UF: " . $c["uf"] . "\n CEP: " . $c["cep"];
                    $rg = "";
                    $rg = "RG:" . $c["rg"] . "\n CPF: " . $c["cpf"] . "\n DN: " . formatoData($c["datanascimento"]) . "\n Sexo: " . $c["sexo"] . "\n Raça: " . $c["raca"] . "\n Profissão: " . $c["profissao"];
                    $telefone = "";
                    $telefone = "Telefone:" . $c["telefone"] . "\n Email: " . $c["email"] . "\n Website: " . $c["website"];
                    $Nucleo_Atendimento_idNucleo_Atendimento = "";
                    $Nucleo_Atendimento_idNucleo_Atendimento = "Nuc Atendimento:" . $c["sede"];


//so ve ai se vai executar 

                    echo "<tr>";
                    echo "  <td>{$c["idcolaborador"]}</td>";
                    echo "  <td>{$c["nome"]}</td>";
                     echo "  <td>{$c["perfil"]}</td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$rg}'> <img src='../Imagem/documento.PNG' widht='20px' height='40px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$endereco}'> <img src='../Imagem/casa.png' widht='20px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$telefone}'> <img src='../Imagem/arroba.jpg' widht='20px' height='35px' ></a></td>";
                     echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$Nucleo_Atendimento_idNucleo_Atendimento}'> <img src='../Imagem/sede.png' widht='30px' height='30px' ></a></td>";


                   
                    echo "<td> <a href='AlterarColaborador.php?id={$c["idcolaborador"]}' data-toggle='tooltip' data-placement='top' title='Editar Colaborador!'onclick=\"return confirm('Tem certeza que deseja alterar os dados cadastrados?'); return false;\"> <i class='fas fa-user-edit text-dark'></i></a></td>";
                    echo "<td> <a href='../Controller/ExcluirColaborador.php?id={$c["idcolaborador"]}' data-toggle='tooltip' data-placement='top' title='Excluir Colaborador!' onclick=\"return confirm('Tem certeza que deseja excluir essas informações?'); return false;\"> <i class='fas fa-trash-alt text-danger'></i> </a></td>";
                    echo "</tr>";
                }
                ?>


            </table>
            <script>
                $(document).ready(function () {
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </div>


        <?php
        // put your code here
        ?>
    </body>
</html>