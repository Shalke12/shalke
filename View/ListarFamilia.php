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
                <div class="card-body"><h1><center>Famílias Cadastradas</center></h1></div>
                
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
                    <th align='center'>Assistência</th>
                    
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                require_once '../Dao/FamiliaDAO.php';
                include_once '../ComplementosWeb.html';

                $FamiliaDAO = new FamiliaDAO();
                $familia = $FamiliaDAO->getAllFamilia();

                foreach ($familia as $f) {
                    $cpf = "";
                    $cpf ="\n CPF: " . $f["cpf"] . "\n Telefone: " . $f["telefone"] . "\n sexo: " . $f["sexo"];
                     $endereco = "";
                    $endereco = "Endereço:" . $f["endereco"] . "\n Cidade: " . $f["cidade"] . "\n UF: " . $f["uf"] . "\n CEP: " . $f["cep"] . "\n Moradia: " . $f["moradia"];
                    $Nucleo_Atendimento_idNucleo_Atendimento = "";
                    $Nucleo_Atendimento_idNucleo_Atendimento = "Nuc Atendimento:" . $f["sede"];
                    
                    echo "<tr>";
                    echo "  <td>{$f["idfamilia"]}</td>";
                    echo "  <td>{$f["nome_chefe_familia"]}</td>";
                    echo "  <td>{$f["nucleo_familiar"]}</td>";
                    echo "  <td>{$f["email"]}</td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$cpf}'> <img src='../Imagem/documento.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$endereco}'> <img src='../Imagem/casa.png' widht='30px' height='30px' ></a></td>";
                     echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$Nucleo_Atendimento_idNucleo_Atendimento}'> <img src='../Imagem/sede.png' widht='30px' height='30px' ></a></td>";
                    
                    
                     
                   
                    echo "<td> <a href='AlterarFamilia.php?id={$f["idfamilia"]}' data-toggle='tooltip' data-placement='top' title='Editar Familia!' onclick=\"return confirm('Tem certeza que deseja alterar os dados cadastrados?'); return false;\"> <i class='fas fa-user-edit text-dark'></i></a></td>";
                    echo "<td> <a href='../Controller/ExcluirFamilia.php?id={$f["idfamilia"]}' data-toggle='tooltip' data-placement='top' title='Excluir Familia!' onclick=\"return confirm('Tem certeza que deseja excluir essas informações?'); return false;\"> <i class='fas fa-trash-alt text-danger'></i> </a></td>";
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
