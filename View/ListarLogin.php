<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset=UTF-8">
        <title></title>        
    </head>
    <body>
         <br>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1><center>Logins Cadastrados</center></h1></div>
            </div>
            <br>
            <table class="table table-success table-striped">
                <tr style="background-color: coral">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Email</th>
                    
                    <th>Perfil</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                require_once '../Dao/LoginDAO.php';
                include_once '../ComplementosWeb.html';

                $LoginDAO = new LoginDAO();
                $login = $LoginDAO->getAllLogin();

                foreach ($login as $l) {
                    echo "<tr>";
                    echo "  <td>{$l["idlogin"]}</td>";
                    echo "  <td>{$l["nome"]}</td>";
                    echo "  <td>{$l["login"]}</td>";
                    echo "  <td>{$l["email"]}</td>";
                    
                    echo "  <td>{$l["perfil"]}</td>";
                    echo "<td> <a href='AlterarLogin.php?id={$l["idlogin"]}' data-toggle='tooltip' data-placement='top' title='Editar Login!' onclick=\"return confirm('Tem certeza que deseja alterar os dados cadastrados?'); return false;\"> <i class='fas fa-user-edit text-dark'></i></a></td>";
                    echo "<td> <a href='../Controller/ExcluirLogin.php?id={$l["idlogin"]}' data-toggle='tooltip' data-placement='top' title='Excluir Login!' onclick=\"return confirm('Tem certeza que deseja excluir essas informações?'); return false;\"> <i class='fas fa-trash-alt text-danger'></i> </a></td>";
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
