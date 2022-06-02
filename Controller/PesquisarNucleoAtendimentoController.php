<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../Dao/Nucleo_AtendimentoDAO.php';
        require_once '../Dto/Nucleo_AtendimentoDTO.php';
        include_once '../ComplementosWeb.html';

        $sede = $_POST["sede"];




        $Nucleo_AtendimentoDAO = New Nucleo_AtendimentoDAO();
        $sucesso = $Nucleo_AtendimentoDAO->pesquisarNucleo_Atendimento($sede);


        if ($sucesso) {
            ?>
            <br>
            <div class="container">
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1><center> Resultado Pesquisa Núcleo de Atendimento</center></h1></div>
                </div>
                <br>
                <table class="table table-success table-striped">
                    <tr style="background-color: coral">


                        <th align='center'>Código</th>
                        <th align='center'>Dados Sede</th>
                        <th align='center'>Endereço</th>




                    </tr>

                    <?php
                    foreach ($sucesso as $na) {
                        $sede = "";
                        $sede = "Sede:" . $na["sede"] . "\n Tel Sede: " . $na["telefone_sede"] . "\n Email: " . $na["email_email"];
                        $endereco_sede = "";
                        $endereco_sede = "Endereço:" . $na["endereco_sede"] . "\n Cidade: " . $na["cidade_sede"] . "\n UF: " . $na["uf_sede"] . "\n CEP: " . $na["cep_sede"];

                        echo "  <td>{$na["idnucleo_atendimento"]}</td>";
                        echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$sede}'> <img src='../Imagem/sede.PNG' widht='30px' height='30px' ></a></td>";
                        echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$endereco_sede}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
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
            echo "window.location.href='../View/PesquisarNucleoAtendimento.php';";
            echo "</script>";
        }
        ?>

    </body>
</html>
