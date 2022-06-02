<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../Dao/FamiliaDAO.php';
        require_once '../Dto/FamiliaDTO.php';
        include_once '../ComplementosWeb.html';

        $nome_chefe_familia = $_POST["nome_chefe_familia"];




        $FamiliaDAO = New FamiliaDAO();
        $sucesso = $FamiliaDAO->pesquisarFamilia($nome_chefe_familia);


        if ($sucesso) {
            ?>
            <br>
            <div class="container">
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1> <center>Resultado Pesquisa Família</center></h1></div>
                </div>
                <br>
                <table class="table table-success table-striped">
                    <tr style="background-color: coral">


                        <th align='center'>Código</th>
                    <th align='center'>Nome do chefe da Família</th>
                    <th align='center'>Nucleo Familiar</th>
                    <th align='center'>Email</th>
                    <th align='center'>Dados Pessoais</th>
                    <th align='center'>Endereço</th>
                       



                    </tr>

                    <?php
                    foreach ($sucesso as $f) {
                    $cpf = "";
                    $cpf ="\n CPF: " . $f["cpf"] . "\n Telefone: " . $f["telefone"] . "\n sexo: " . $f["sexo"];
                     $endereco = "";
                    $endereco = "Endereço:" . $f["endereco"] . "\n Cidade: " . $f["cidade"] . "\n UF: " . $f["uf"] . "\n CEP: " . $f["cep"] . "\n Moradia: " . $f["moradia"];
                    echo "<tr>";
                    echo "  <td>{$f["idfamilia"]}</td>";
                    echo "  <td>{$f["nome_chefe_familia"]}</td>";
                    echo "  <td>{$f["nucleo_familiar"]}</td>";
                    echo "  <td>{$f["email"]}</td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$cpf}'> <img src='../Imagem/documento.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$endereco}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
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
            echo "window.location.href='../View/PesquisarFamilia.php';";
            echo "</script>";
        }
        ?>

    </body>
</html>
