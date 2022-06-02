<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1><center>Núcleo de Atendimentos Cadastrados</center></h1></div>
            </div>
            <br>
            <table class="table table-success table-striped">
                <tr style="background-color: coral">
                     <th align='center'>Código</th>
                    <th align='center'>Endereço</th>
                    <th align='center'>Contatos</th>
                    
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                require_once '../Dao/Nucleo_AtendimentoDAO.php';
                include_once '../ComplementosWeb.html';

                $Nucleo_AtendimentoDAO = new Nucleo_AtendimentoDAO();
                $nucleo_atendimento = $Nucleo_AtendimentoDAO->getAllNucleo_Atendimento();

                foreach ($nucleo_atendimento as $na) {
                    
                    $endereco_sede = "";
                    $endereco_sede = "Sede:" . $na["sede"] . "Endereço:" . $na["endereco_sede"] . "\n Cidade: " . $na["cidade_sede"] . "\n UF: " . $na["uf_sede"] . "\n CEP: " . $na["cep_sede"];
                    $contatos = "";
                    $contatos =  "Tel Sede: " . $na["telefone_sede"] . "\n Email: " . $na["email_email"];
                    
                    echo "  <td>{$na["idnucleo_atendimento"]}</td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$endereco_sede}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$contatos}'> <img src='../Imagem/sede.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a href='AlterarNucleo_Atendimento.php?id={$na["idnucleo_atendimento"]}' data-toggle='tooltip' data-placement='top' title='Editar Nucleo_Atendimento!' onclick=\"return confirm('Tem certeza que deseja alterar os dados cadastrados?'); return false;\"> <i class='fas fa-user-edit text-dark'></i></a></td>";
                    echo "<td> <a href='../Controller/ExcluirNucleo_Atendimento.php?id={$na["idnucleo_atendimento"]}' data-toggle='tooltip' data-placement='top' title='Excluir Nucleo_Atendimento!' onclick=\"return confirm('Tem certeza que deseja excluir essas informações?'); return false;\"> <i class='fas fa-trash-alt text-danger'></i> </a></td>";
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
