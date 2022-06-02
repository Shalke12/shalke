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
        <?php
        require_once '../Dao/EmpresasDAO.php';
        require_once '../Dto/EmpresasDTO.php';
        include_once '../ComplementosWeb.html';

        $nome_fantasia = $_POST["nome_fantasia"];




        $EmpresasDAO = New EmpresasDAO();
        $sucesso = $EmpresasDAO->pesquisarEmpresa($nome_fantasia);


        if ($sucesso) {
            ?>
            <br>
            <div class="container">
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1><center> <center>Resultado Pesquisa Empresa</center></center></h1></div>
                </div>
                <br>
                <table class="table table-success table-striped">
                    <tr style="background-color: coral">


                        <th align='center'>Código</th>
                    <th align='center'>CNPJ</th>
                    <th align='center'>Razão Social</th>
                    <th align='center'>Empresa</th>
                    <th align='center'>Endereço</th>
                    <th style="align-items: center">Contato</th>
                        



                    </tr>

                    <?php
                    foreach ($sucesso as $e) {
                       $razao_social = "";
                $razao_social = "Razão Social: " . $e["razao_social"] . "\n Nome Fantasia: " . $e["nome_fantasia"] . "\n Segmento: " . $e["segmento"] . "\n Tipo da Empresa: " . $e["tipo_empresa"];
                    $endereco = "";
                    $endereco = "Endereço:" . $e["endereco"] . "\n Cidade: " . $e["cidade"] . "\n CEP: " . $e["cep"] . "\n UF: " . $e["uf"];
                    $email = "";
                    $email = "Email:" . $e["email"] . "\n Redes Sociais: " . $e["website"] . "\n Tel Empresa: " . $e["telefone_local"] . "\n Tel pessoal: " . $e["telefone_pessoal"];




                        echo "  <td>{$e["idempresas"]}</td>";
                        echo "  <td>{$e["cnpj"]}</td>";
                        echo "  <td>{$e["nome_empresario"]}</td>";
                        echo "<td align='center'> <a data-toggle='tooltip' data-placement='top' title='{$razao_social}'> <img src='../Imagem/empresa.PNG' widht='30px' height='30px' ></a></td>";
                        echo "<td align='center'> <a data-toggle='tooltip' data-placement='top' title='{$endereco}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
                        echo "<td align='center'> <a data-toggle='tooltip' data-placement='top' title='{$email}'> <img src='../Imagem/arroba.JPG' widht='30px' height='30px' ></a></td>";

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
                    echo "window.location.href='../View/PesquisarEmpresa.php';";
                    echo "</script>";
                }
                ?>

                </body>
                </html>
