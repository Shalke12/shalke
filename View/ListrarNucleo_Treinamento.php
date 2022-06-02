<!DOCTYPE html>

<html>
    <head>
        <meta charset=UTF-8">
        <title></title>        
    </head>
    <body>

        <br>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1><center>Núcleo de Treinamento Cadastrados</center></h1></div>
            </div>
            <br>
            <table class="table table-success table-striped">
                <tr style="background-color: coral">
                    <th align='center'>Código</th>
                    <th align='center'>Dados Responsável</th>
                    <th align='center'>Endereço</th>
                        <th>Assistência</th>
                    
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                require_once '../Dao/Nucleo_TreinamentoDAO.php';
                include_once '../ComplementosWeb.html';

                $Nucleo_TreinamentoDAO = new Nucleo_TreinamentoDAO();
                $nucleo_treinamento = $Nucleo_TreinamentoDAO->getAllNucleo_Treinamento();

                foreach ($nucleo_treinamento as $nt) {
                    $nome_responsavel = "";
                    $nome_responsavel = "Responsável:" . $nt["nome_responsavel"] . "\n Tel Responsável: " . $nt["telefone_responsavel"];
                    $local = "";
                    $local = "Endereço:" . $nt["local"] . "\n Cidade: " . $nt["cidade"] . "\n UF: " . $nt["uf"] . "\n CEP: " . $nt["cep"] . "\n Tel do Local: " . $nt["telefone_local"];
                    $Nucleo_Atendimento_idNucleo_Atendimento = "";
                    $Nucleo_Atendimento_idNucleo_Atendimento = "Nuc Atendimento:" . $nt["sede"];



                    echo "<tr>";
                    echo "  <td>{$nt["idnucleo_treinamento"]}</td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$nome_responsavel}'> <img src='../Imagem/responsavel.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$local}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$Nucleo_Atendimento_idNucleo_Atendimento}'> <img src='../Imagem/sede.png' widht='30px' height='30px' ></a></td>";

                    echo "<td> <a href='AlterarNucleo_Treinamento.php?id={$nt["idnucleo_treinamento"]}' data-toggle='tooltip' data-placement='top' title='Editar Nucleo_Treinamento!' onclick=\"return confirm('Tem certeza que deseja alterar os dados cadastrados?'); return false;\"> <i class='fas fa-user-edit text-dark'></i></a></td>";
                    echo "<td> <a href='../Controller/ExcluirNucleo_Treinamento.php?id={$nt["idnucleo_treinamento"]}' data-toggle='tooltip' data-placement='top' title='Excluir Nucleo_Treinamento!' onclick=\"return confirm('Tem certeza que deseja excluir essas informações?'); return false;\"> <i class='fas fa-trash-alt text-danger'></i> </a></td>";
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


    </body>
</html>

