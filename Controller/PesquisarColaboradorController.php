<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../Dao/ColaboradorDAO.php';
        require_once '../Dto/ColaboradorDTO.php';
        include_once '../ComplementosWeb.html';

        $nome = $_POST["nome"];




        $ColaboradorDAO = New ColaboradorDAO();
        $sucesso = $ColaboradorDAO->pesquisarColaborador($nome);


        if ($sucesso) {
            ?>
            <br>
            <div class="container">
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1> <center>Resultado Pesquisa Colaborador</center></h1></div>
                </div>
                <br>
                <table class="table table-success table-striped">
                    <tr style="background-color: coral">


                        <th align='center'>Código</th>
                        <th align='center'>Nome</th>
                        <th align='center'>Dados Pessoais</th>
                        <th align='center'>Endereço</th>
                        <th align='center'>Contatos</th>



                    </tr>

                    <?php
                    foreach ($sucesso as $c) {
                        $endereco = "";
                        $endereco = "Endereço:" . $c["endereco"] . "\n Cidade: " . $c["cidade"] . "\n UF: " . $c["uf"] . "\n CEP: " . $c["cep"];
                        $rg = "";
                        $rg = "RG:" . $c["rg"] . "\n CPF: " . $c["cpf"] . "\n DN: " . $c["datanascimento"] . "\n Sexo: " . $c["sexo"] . "\n Raça: " . $c["raca"] . "\n Profissão: " . $c["profissao"];
                        $telefone = "";
                        $telefone = "Telefone:" . $c["telefone"] . "\n Email: " . $c["email"] . "\n Website: " . $c["website"];




                        echo "<tr>";
                        echo "  <td>{$c["idcolaborador"]}</td>";
                        echo "  <td>{$c["nome"]}</td>";
                        echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$rg}'> <img src='../Imagem/documento.PNG' widht='20px' height='40px' ></a></td>";
                        echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$endereco}'> <img src='../Imagem/casa.png' widht='20px' height='30px' ></a></td>";
                        echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$telefone}'> <img src='../Imagem/arroba.jpg' widht='20px' height='35px' ></a></td>";

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
        } else {
            echo "<script>";
            echo "alert('Erro ao Pesquisar!');";
            echo "window.location.href='../View/PesquisarColaborador.php';";
            echo "</script>";
        }
        ?>

    </body>
</html>
