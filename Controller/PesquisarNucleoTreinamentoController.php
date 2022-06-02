<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../Dao/Nucleo_TreinamentoDAO.php';
        require_once '../Dto/Nucleo_TreinamentoDTO.php';
        include_once '../ComplementosWeb.html';

        $nome_responsavel = $_POST["nome_responsavel"];




        $Nucleo_TreinamentoDAO = New Nucleo_TreinamentoDAO();
        $sucesso = $Nucleo_TreinamentoDAO->pesquisarNucleo_Treinamento($nome_responsavel);


        if ($sucesso) {
            ?>
            <br>
            <div class="container">
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1><center> Resultado Pesquisa Núcleo de Treinamento</center></h1></div>
                </div>
                <br>
                <table class="table table-success table-striped">
                    <tr style="background-color: coral">


                        <th align='center'>Código</th>
                        <th align='center'>Dados Responsável</th>
                        <th align='center'>Endereço</th>



                    </tr>

                    <?php
                    foreach ($sucesso as $nt) {
                        $nome_responsavel = "";
                        $nome_responsavel = "Responsável:" . $nt["nome_responsavel"] . "\n Tel Responsável: " . $nt["telefone_responsavel"];
                        $local = "";
                        $local = "Endereço:" . $nt["local"] . "\n Cidade: " . $nt["cidade"] . "\n UF: " . $nt["uf"] . "\n CEP: " . $nt["cep"] . "\n Tel do Local: " . $nt["telefone_local"];



                        echo "<tr>";
                        echo "  <td>{$nt["idnucleo_treinamento"]}</td>";
                        echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$nome_responsavel}'> <img src='../Imagem/responsavel.PNG' widht='30px' height='30px' ></a></td>";
                        echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$local}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
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
            echo "window.location.href='../View/PesquisarNucleoTreinamento.php';";
            echo "</script>";
        }
        ?>

    </body>
</html>
