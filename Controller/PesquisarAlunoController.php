<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../Dao/AlunoDAO.php';
        require_once '../Dto/AlunoDTO.php';
        include_once '../ComplementosWeb.html';

        $nome = $_POST["nome"];




        $AlunoDAO = New AlunoDAO();
        $sucesso = $AlunoDAO->pesquisarAluno($nome);


if ($sucesso) {
    ?>
    <br>
    <div class="container">
        <div class="card  text-white" style="background-color: coral">
            <div class="card-body"><h1> <center> <Center>Resultado Pesquisa Aluno</Center></center></h1></div>
        </div>
        <br>
        <table class="table table-success table-striped">
            <tr style="background-color: coral">


                <th>Código</th>
                  <th align='center'>Nome</th>
                  <th align='center'>Dados Pessoais</th>
                  <th align='center'>Redes Sociais</th>
                  <th align='center'>Endereço</th>
                  <th align='center'>Dados dos Responsáveis</th>
                  <th align='center'>Dados Escolares</th>
                  <th align='center'>Dados do Aluno</th>
                
                 



            </tr>

            <?php
            foreach ($sucesso as $a) {

                $rg = "";
                    $rg ="RG:" . $a["rg"] . "\n CPF: " . $a["cpf"] . "\n DN: " . $a["datanascimento"] . "\n Sexo: " . $a["sexo"] . "\n Raça: " . $a["raca"];
                    $telefone = "";
                    $telefone = "Whatsapp:" . $a["telefone"] . "\n Email: " . $a["email"] . "\n Redes Sociais: " . $a["website"];
                    $endereco = "";
                    $endereco = "Endereço:" . $a["endereco"] . "\n Cidade: " . $a["cidade"] . "\n CEP: " . $a["cep"] . "\n UF: " . $a["uf"]; 
                    $mae = "";
                    $mae = "Nome da mãe:" . $a["mae"] . "\n Tel mãe: " . $a["telefone_mae"] . "\n Profissão da mãe: " . $a["profissao_mae"] . "\n Nome do pai: " . $a["pai"] . "\n Wpp pai: " . $a["telefone"]  . "\n Profissão do pai: " . $a["profissao_pai"] . "\n Responsável: " . $a["responsavel"] . "\n Parentesco: " . $a["parentesco_responsavel"] . "\n Wpp resp: " . $a["telefone_responsavel"] . "\n Profissão do resp: " . $a["profissao_responsavel"];
                    $nome_escola = "";
                    $nome_escola = "Escola:" . $a["nome_escola"] . "\n Endereço: " . $a["endereco_escola"] . "\n Cidade: " . $a["cidade_escola"] . "\n UF: " . $a["uf_escola"] . "\n CEP: " . $a["cep_escola"] . "\n Escolaridade: " . $a["grau"] . "\n Turno: " . $a["turno"];
                    $datainclusao = "";
                    $datainclusao = "Inclusão:" . $a["datainclusao"] . "\n Desligamento: " . $a["desligamento"] . "\n Peso: " . $a["peso"] . "\n Altura: " . $a["altura"] . "\n Camisa: " . $a["camisa"] . "\n Short: " . $a["short"] . "\n Calçado: " . $a["calcado"] . "\n Grupo sanguineo: " . $a["grupo_sanguineo"] . "\n Medicação: " . $a["medicacao"] . "\n Termo: " . $a["termo"];
                   // $Nucleo_Atendimento_idNucleo_Atendimento = "";
                   // $Nucleo_Atendimento_idNucleo_Atendimento = "Nuc Atendimento:" . $a["sede"] . "\n Nuc Treinamento: " . $a["local"] . "\n Modalidade: " . $a["descricao"] . "\n Categoria: " . $a["idade"] . "\n Horário: " . $a["hora"] . "\n Treino: " . $a["semana"];

                echo "<tr>";
                    echo "  <td>{$a["idaluno"]}</td>";
                      echo "  <td>{$a["nome"]}</td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$rg}'> <img src='../Imagem/documento.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$telefone}'> <img src='../Imagem/arroba.JPG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$endereco}'> <img src='../Imagem/casa.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$mae}'> <img src='../Imagem/familia.PNG' widht='30px' height='30px' ></a></td>";
                    echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$nome_escola}'> <img src='../Imagem/escola.PNG' widht='30px' height='30px' ></a></td>";
                   echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$datainclusao}'> <img src='../Imagem/iconelistar.PNG' widht='30px' height='30px' ></a></td>";
                  //echo "<td> <a data-toggle='tooltip' data-placement='top' title='{$Nucleo_Atendimento_idNucleo_Atendimento}'> <img src='../Imagem/bola.PNG' widht='30px' height='30px' ></a></td>";
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
    echo "window.location.href='../View/PesquisaAluno.php';";
    echo "</script>";
}
?>

</body>
</html>
