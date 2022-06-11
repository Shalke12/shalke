<!DOCTYPE html>

<!-- https://getbootstrap.com.br/docs/4.1/components/navbar/ -->
<?php
include_once '../ComplementosWeb.html';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-">
            <a class="navbar-brand" href="#">
                <img src="../Imagem/icon_menu.jpeg" style=" width:50px">
            </a>
            <a class="navbar-brand text-light font-weight-bold text-uppercase" href="../View/Principal.php">
              <?php
               echo $_SESSION["perfil"];
              
             ?>
            </a>
            <ul class="navbar-nav">
                <!--MENU LOGIN-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Login</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="CadastrarLogin.php" target="centro">Cadastrar Login</a>
                        <a class="dropdown-item" href="ListarLogin.php" target="centro">Logins Cadastrados</a>
                        <a class="dropdown-item" href="PesquisarLogin.php" target="centro">Pesquisar Login</a>
                    </div>
                </li>
                <!--MENU ALUNO-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Aluno</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="CadastrarAluno.php" target="centro">Cadastrar Aluno</a>
                        <a class="dropdown-item" href="ListarAlunos.php" target="centro">Alunos Cadastrados</a>
                        <a class="dropdown-item" href="../View/PesquisaAluno.php" target="centro">Pesquisar Aluno</a>
                    </div>
                </li>
                <!--MENU COLABORADOR-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Colaborador</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="CadastrarColaborador.php" target="centro">Cadastrar Colaborador</a>
                        <a class="dropdown-item" href="ListarColaboradores.php" target="centro">Colaboradores Cadastrados</a>
                        <a class="dropdown-item" href="../View/PesquisarColaborador.php" target="centro">Pesquisar Colaborador</a>
                    </div>
                </li>
                <!--MENU EMPRESA-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Empresa</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="CadastrarEmpresas.php" target="centro">Cadastrar Empresa</a>
                        <a class="dropdown-item" href="ListarEmpresas.php" target="centro">Empresas Cadastradas</a>
                        <a class="dropdown-item" href="../View/PesquisarEmpresa.php" target="centro">Pesquisar Empresa</a>
                    </div>
                </li>
                <!--MENU FAMÍLIA-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Família</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="CadastrarFamilia.php" target="centro"> Cadastrar Família</a>
                        <a class="dropdown-item" href="ListarFamilia.php" target="centro">Famílias Cadastradas</a>
                        <a class="dropdown-item" href="../View/PesquisarFamilia.php" target="centro">Pesquisar Família</a>
                    </div>
                </li>
                  <!--MENU NÚCLEO ATENDIMENTO-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Núcleo Atendimento</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="CadastrarNucleo_Atendimento.php" target="centro"> Cadastrar Núcleo de Atendimento</a>
                        <a class="dropdown-item" href="ListarNucleo_Atendimento.php" target="centro">Núcleo de Atendimento Cadastrados</a>
                        <a class="dropdown-item" href="../View/PesquisarNucleoAtendimento.php" target="centro">Pesquisar Nucleo de Atendimento</a>
                    </div>
                </li>
                <!--MENU NÚCLEO TREINAMENTO
                CRIAR PÁGINA LISTAR NÚCLEO DE TREINAMENTO
                -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Núcleo Treinamento</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="CadastrarNucleo_Treinamento.php" target="centro"> Cadastrar Núcleo de Treinamento</a>
                        <a class="dropdown-item" href="ListrarNucleo_Treinamento.php" target="centro">Núcleo de Treinamento Cadastrados</a>
                        <a class="dropdown-item" href="../View/PesquisarNucleoTreinamento.php" target="centro">Pesquisar Nucleo de Treinamento</a>
                    </div>
                </li>
              
                <!--MENU Relatórios-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">Relatórios</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../RELATORIOS/RelatorioLogin.php" target="centro">Login</a>
                        <a class="dropdown-item" href="../RELATORIOS/RelatorioAlunos.php" target="centro"> Alunos</a>
                        <a class="dropdown-item" href="../RELATORIOS/RelatorioColaboradores.php" target="centro"> Colaboradores </a>
                        <a class="dropdown-item" href="../RELATORIOS/RelatorioEmpresas.php" target="centro"> Empresas </a>
                        <a class="dropdown-item" href="../RELATORIOS/RelatorioFamilia.php" target="centro">Famílias</a>
                        <a class="dropdown-item" href="../RELATORIOS/RelatorioNucleoTreinamento.php" target="centro">Núcleos de Treinamento</a>
                        <a class="dropdown-item" href="../RELATORIOS/RelatorioNucleoAtendimento.php" target="centro">Núcleos de Atendimento</a>
                        
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark text-uppercase" href="#">
                        <i class="fas fa-user-circle" data-toggle="tooltip" data-placement="left" title="Administrador"></i>
                        <?php
                        echo $_SESSION["nome"];
                        ?>
                    </a>
                </li>
                <!--Classe botão sair-->
                <li class="nav-item">
                    <a class="nav-link" href="../Controller/ControllerLogof.php">
                        <i class="fas fa-sign-out-alt text-danger" title="Sair do Sistema." data-toggle="tooltip" data-placement="bottom"></i>
                    </a>
                </li>
            </ul>
            <!--
            <ul class="nav justify-content-end" style="margin-left: 100px">
                <!--Classe botão Administrador
                <li class="nav-item">
                    <a class="nav-link text-dark text-uppercase" href="#">
                        <i class="fas fa-user-circle" data-toggle="tooltip" data-placement="left" title="Administrador"></i>
                        <?php
                        //require_once '../DTO/PerfilDTO.php';
                        ?>
                    </a>
                </li>
                <!--Classe botão sair
                <li class="nav-item">
                    <a class="nav-link" href="../controller/ControllerLogof.php">
                        <i class="fas fa-sign-out-alt text-dark" title="Sair do Sistema." data-toggle="tooltip" data-placement="bottom"></i>
                    </a>
                </li>
            </ul
            -->
        </nav>
    </body>
</html>
