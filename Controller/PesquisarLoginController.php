<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../Dao/LoginDAO.php';
        require_once '../Dto/LoginDTO.php';
        include_once '../ComplementosWeb.html';

        $login = $_POST["login"];




        $LoginDAO = New LoginDAO();
        $sucesso = $LoginDAO->pesquisarLogin($login);


        if ($sucesso) {
            ?>
           <br>
            <div class="container">
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1> <center> Resultado Pesquisa Login</center></h1></div>
                </div>
                <br>
                <table class="table table-success table-striped">
                    <tr style="background-color: coral">


                    <th align='center'>Código</th>
                    <th align='center'>Nome</th>
                    <th align='center'>Login</th>
                    <th align='center'>Email</th>
                  
                       



                    </tr>

                    <?php
                     foreach ($sucesso as $l) {
                    echo "<tr>";
                    echo " <td>{$l["idlogin"]}</td>";
                    echo " <td>{$l["nome"]}</td>";
                    echo " <td>{$l["login"]}</td>";
                    echo " <td>{$l["email"]}</td>";
                    
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
        
            echo "window.location.href = '../View/PesquisarLogin.php';
        ";
            echo "</script>";
    }
    ?>

</body>
</html>
