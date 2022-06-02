<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="icon" type="image/png" href="../Imagem/icon_menu.jpeg" /><!--Usando faviconIcon na Aba do URL-->
        <title></title>
        <style>
            #tablehome
            {
                width: 100%;
                height: 700px;

            }

        </style>
    </head>
    <body>
        <?php
        session_start();
        include 'validaLogin.php';
        ?> 
        <table width="100%">
            <tr>
                <td>
                    <?php
                    switch ($_SESSION["idPerfil"]) {
                        case "1":
                            include './MenuAdministrador.php';
                            break;
                        case "2":
                            include './MenuColaborador.php';
                            break;
                    }
                    ?>
                    <br>
                </td>
            </tr>
        </table>
        <table id="tablehome">
            <tr>         
                <td>
                    <iframe name="centro" src="../View/Centro.php" width="100%" height="500px" frameborder="0"></iframe>
                </td>
            </tr>                
        </table>
        <?php include './Rodape.php'; ?>
    </body>
</html>

