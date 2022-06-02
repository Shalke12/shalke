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
                <div class="card-body"><h1><center>Empresas Cadastradas</center></h1></div>
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
                      <th align='center'>Assistência</th>
                    

                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                require_once '../Dao/EmpresasDAO.php';
                include_once '../ComplementosWeb.html';

                $EmpresasDAO = new EmpresasDAO();
                $empresas = $EmpresasDAO->getAllEmpresas();

                foreach ($empresas as $e) {
    $razao_social = "";
    $razao_social = "Empresário: " . $e["nome_empresario"] . "\n Nome Fantasia: " . $e["nome_fantasia"] . "\n Segmento: " . $e["segmento"] . "\n Tipo da Empresa: " . $e["tipo_empresa"];
    $endereco = "";
    $endereco = "Endereço:" . $e["endereco"] . "\n Cidade: " . $e["cidade"] . "\n CEP: " . $e["cep"] . "\n UF: " . $e["uf"];
    $email = "";
    $email = "Email:" . $e["email"] . "\n Redes Sociais: " . $e["website"] . "\n Tel Empresa: " . $e["telefone_local"] . "\n Tel pessoal: " . $e["telefone_pessoal"];
    $Nucleo_Atendimento_idNucleo_Atendimento = "";
    $Nucleo_Atendimento_idNucleo_Atendimento = "Nuc Atendimento:" . $e["sede"];




    echo "  <td>{$e["idempresas"]}</td>";
                    echo "  <td>{$e["cnpj"]}</td>";
                    echo "  <td>{$e["razao_social"]}</td>";
                    echo "<td align='center'> <a data-toggle='tooltip' data-placement='top' title='{$razao_social}'> <img src='../Imagem/empresa.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td align='center'> <a data-toggle='tooltip' data-placement='top' title='{$endereco}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
                    echo "<td align='center'> <a data-toggle='tooltip' data-placement='top' title='{$email}'> <img src='../Imagem/arroba.JPG' widht='30px' height='30px' ></a></td>";
                     echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$Nucleo_Atendimento_idNucleo_Atendimento}'> <img src='../Imagem/sede.png' widht='30px' height='30px' ></a></td>";



                    
                    echo "<td align='center'> <a href='AlterarEmpresas.php?id={$e["idempresas"]}' data-toggle='tooltip' data-placement='top' title='Editar Empresa!' onclick=\"return confirm('Tem certeza que deseja alterar os dados cadastrados?'); return false;\"> <i class='fas fa-user-edit text-dark'></i></a></td>";
                    echo "<td align='center'> <a href='../Controller/ExcluirEmpresas.php?id={$e["idempresas"]}' data-toggle='tooltip' data-placement='top' title='Excluir Empresa!' onclick=\"return confirm('Tem certeza que deseja excluir essas informações?'); return false;\"> <i class='fas fa-trash-alt text-danger'></i> </a></td>";
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

