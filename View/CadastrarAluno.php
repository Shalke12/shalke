
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../complementosWEB.html';
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
        <script>

            function MascaraCNPJ(cnpj) {
                if (mascaraInteiro(cnpj) == false) {
                    event.returnValue = false;
                }
                return formataCampo(cnpj, '00.000.000/0000-00', event);
            }

//adiciona mascara de cep
            function MascaraCep(cep) {
                if (mascaraInteiro(cep) == false) {
                    event.returnValue = false;
                }
                return formataCampo(cep, '00.000-000', event);
            }

//adiciona mascara de data
            function MascaraData(data) {
                if (mascaraInteiro(data) == false) {
                    event.returnValue = false;
                }
                return formataCampo(data, '00/00/0000', event);
            }

//adiciona mascara ao telefone
            function MascaraTelefone(tel) {
                if (mascaraInteiro(tel) == false) {
                    event.returnValue = false;
                }
                return formataCampo(tel, '(00) 0000-0000', event);
            }
//adiciona mascara ao Celular
            function MascaraCelular(cel) {
                if (mascaraInteiro(cel) == false) {
                    event.returnValue = false;
                }
                return formataCampo(cel, '(00) 00000-0000', event);
            }
//adiciona mascara ao Celular
            function MascaraWhatzap(what) {
                if (mascaraInteiro(what) == false) {
                    event.returnValue = false;
                }
                return formataCampo(what, '(00) 00000-0000', event);
            }

//adiciona mascara ao CPF
            function MascaraCPF(cpf) {
                if (mascaraInteiro(cpf) == false) {
                    event.returnValue = false;
                }
                return formataCampo(cpf, '000.000.000-00', event);
            }

//valida telefone
            function ValidaTelefone(tel) {
                exp = /\(\d{2}\)\ \d{4}\-\d{4}/
                if (!exp.test(tel.value))
                    alert('Numero de Telefone Invalido!');
            }
//valida celular
            function ValidaCelular(cel) {
                exp = /\(\d{2}\)\ \d{4}\-\d{4}/
                if (!exp.test(cel.value))
                    alert('Numero de Celular Invalido!');
            }
//valida celular
            function ValidaWhatzap(what) {
                exp = /\(\d{2}\)\ \d{4}\-\d{4}/
                if (!exp.test(what.value))
                    alert('Numero de Whatzap Invalido!');
            }

//valida CEP
            function ValidaCep(cep) {
                exp = /\d{2}\.\d{3}\-\d{3}/
                if (!exp.test(cep.value))
                    alert('Numero de Cep Invalido!');
            }

//valida data
            function ValidaData(data) {
                exp = /\d{2}\/\d{2}\/\d{4}/
                if (!exp.test(data.value))
                    alert('Data Invalida!');
            }

//valida o CPF digitado
            function ValidarCPF(Objcpf) {
                var cpf = Objcpf.value;
                exp = /\.|\-/g
                cpf = cpf.toString().replace(exp, "");
                var digitoDigitado = eval(cpf.charAt(9) + cpf.charAt(10));
                var soma1 = 0, soma2 = 0;
                var vlr = 11;

                for (i = 0; i < 9; i++) {
                    soma1 += eval(cpf.charAt(i) * (vlr - 1));
                    soma2 += eval(cpf.charAt(i) * vlr);
                    vlr--;
                }
                soma1 = (((soma1 * 10) % 11) == 10 ? 0 : ((soma1 * 10) % 11));
                soma2 = (((soma2 + (2 * soma1)) * 10) % 11);

                var digitoGerado = (soma1 * 10) + soma2;
                if (digitoGerado != digitoDigitado)
                    alert('CPF Invalido!');
            }

//valida numero inteiro com mascara
            function mascaraInteiro() {
                if (event.keyCode < 48 || event.keyCode > 57) {
                    event.returnValue = false;
                    return false;
                }
                return true;
            }

//valida o CNPJ digitado
            function ValidarCNPJ(ObjCnpj) {
                var cnpj = ObjCnpj.value;
                var valida = new Array(6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2);
                var dig1 = new Number;
                var dig2 = new Number;

                exp = /\.|\-|\//g
                cnpj = cnpj.toString().replace(exp, "");
                var digito = new Number(eval(cnpj.charAt(12) + cnpj.charAt(13)));

                for (i = 0; i < valida.length; i++) {
                    dig1 += (i > 0 ? (cnpj.charAt(i - 1) * valida[i]) : 0);
                    dig2 += cnpj.charAt(i) * valida[i];
                }
                dig1 = (((dig1 % 11) < 2) ? 0 : (11 - (dig1 % 11)));
                dig2 = (((dig2 % 11) < 2) ? 0 : (11 - (dig2 % 11)));

                if (((dig1 * 10) + dig2) != digito)
                    alert('CNPJ Invalido!');

            }

//formata de forma generica os campos
            function formataCampo(campo, Mascara, evento) {
                var boleanoMascara;

                var Digitato = evento.keyCode;
                exp = /\-|\.|\/|\(|\)| /g
                campoSoNumeros = campo.value.toString().replace(exp, "");

                var posicaoCampo = 0;
                var NovoValorCampo = "";
                var TamanhoMascara = campoSoNumeros.length;
                ;

                if (Digitato != 8) { // backspace 
                    for (i = 0; i <= TamanhoMascara; i++) {
                        boleanoMascara = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                || (Mascara.charAt(i) == "/"))
                        boleanoMascara = boleanoMascara || ((Mascara.charAt(i) == "(")
                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))
                        if (boleanoMascara) {
                            NovoValorCampo += Mascara.charAt(i);
                            TamanhoMascara++;
                        } else {
                            NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                            posicaoCampo++;
                        }
                    }
                    campo.value = NovoValorCampo;
                    return true;
                } else {
                    return true;
                }
            }
        </script> 
    </head>
    <body>
        <div class="container">
            <div class="card text-white" style="background-color: coral">
                <div class="card-body"><h1> <center>Cadastro de Aluno</center></h1></div>
            </div>
            <br>
            <div class="card text-white" style="background-color: coral">
                <div class="card-body"><h1>Dados Pessoais</h1></div>
            </div>
            <br>
            <form class="form-group" name="CadastrarAluno" method="post" action="../Controller/CadastrarAlunoController.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome">Nome</label>
                                <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite o Nome ">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="raca">Raça</label>
                                <select class="form-control" name="raca">
                                    <option>Selecione</option>
                                    <option value="Negro"> Negro</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Pardo">Pardo</option>
                                    <option value="indigena">indígena</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label>
                                    Sexo:
                                </label>
                                Masculino <input type="radio" name="sexo" value="masculino"/>
                                Feminino <input type="radio" name="sexo" value="feminino"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" onBlur="ValidarCPF(CadastrarAluno.cpf);" 
                                       onKeyPress="MascaraCPF(CadastrarAluno.cpf);" maxlength="14"  class="form-control" placeholder="Digite o CPF"> 
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="rg">RG</label>
                                <input name="rg" type="text" class="form-control" id="RG" placeholder="Digite o RG" size="50">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="datanascimento">Data de Nascimento</label>
                                <input name="datanascimento" type="date" class="form-control" id="datanascimento">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone">WhatsApp</label>
                                
                                <input type="text" name="what" placeholder="Digite o Whatsapp" class="form-control "onKeyPress="MascaraWhatzap(CadastrarAluno.what);" 
                                       maxlength="14"  >

                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Digite o Email">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="website">Redes Sociais</label>
                                <select name="website" id="website" class="form-control">
                                    <option>Selecione</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="LinkedIn">LinkedIn</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Snapchat">Snapchat</option>
                                    <option value="Skype">Skype</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="endereco">Endereço</label>
                                <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Digite o Endereço">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input name="cidade" type="text" placeholder="Digite a Cidade" class="form-control" id="cidade" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep">CEP</label>

                                <input type="text" name="cep" placeholder="Digite o CEP" class="form-control" onKeyPress="MascaraCep(CadastrarAluno.cep);"
                                       maxlength="14" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf">UF</label>
                                <input name="uf" type="text" placeholder="Digite a UF" class="form-control" id="uf">
                            </div>
                        </div>
                        <div class="form-row">


                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="mae">Nome da Mãe</label>
                                <input name="mae" type="text" placeholder="Digite o nome da Mãe" class="form-control" id="mae" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_mae">WhatsApp</label>
                                <input type="text" name="telefone_mae" placeholder="Digite o telefone da Mãe" class="form-control "onKeyPress="MascaraTelefone(CadastrarAluno.telefone_mae);" 
                                       maxlength="14"  >

                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="profissao_mae">Profissão</label>
                                <input name="profissao_mae" placeholder="Digite a Profissão da Mãe" type="text" class="form-control" id="profissao_mae">
                            </div>
                        </div>
                        <div class="form-row">


                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="pai">Nome do Pai</label>
                                <input name="pai" placeholder="Digite o nome do Pai" type="text" class="form-control" id="mae" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_pai">WhatsApp</label>
                                <input type="text" name="telefone_pai" placeholder="Digite o telefone do Pai" class="form-control "onKeyPress="MascaraTelefone(CadastrarAluno.telefone_pai);" 
                                       maxlength="14"  >

                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="profissao_pai">Profissão</label>
                                <input name="profissao_pai" placeholder="Digite a profissão do Pai" type="text" class="form-control" id="profissao_pai">
                            </div>
                        </div>
                        <div class="form-row">


                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="responsavel">Nome do Responsavel</label>
                                <input name="responsavel" placeholder="Digite o nome do Responsável" type="text" class="form-control" id="responsavel" >
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="parentesco_responsavel">Parentesco do Responsavel</label>
                                <input name="parentesco_responsavel" placeholder="Qual parentesco do Responsável?" type="text" class="form-control" id="parentesco_responsavel" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="telefone_responsavel">WhatsApp</label>
                                <input type="text" name="telefone_responsavel" placeholder="Digite o telefone do Responsável" class="form-control "onKeyPress="MascaraTelefone(CadastrarAluno.telefone_responsavel);" 
                                       maxlength="14"  >

                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="profissao_responsavel">Profissão</label>
                                <input name="profissao_responsavel" placeholder="Digite a Profissão do Responsável" type="text" class="form-control" id="profissao_responsavel">
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1>Dados Escolares</h1></div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_escola">Nome da Escola</label>
                                <input name="nome_escola" placeholder="Digite o Nome da Escola" type="text" class="form-control" id="nome_escola" >
                            </div>

                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="endereco_escola">Endereço</label>
                                <input name="endereco_escola" placeholder="Digite o Endereço da Escola" type="text" class="form-control" id="endereco_escola">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input name="cidade_escola" placeholder="Digite a Cidade da Escola" type="text" class="form-control" id="cidade">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input name="cep_escola" placeholder="Digite o CEP" type="text" class="form-control" id="cep">
                            </div>
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="uf">UF</label>
                                <input name="uf_escola" placeholder="Digite a UF" type="text" class="form-control" id="uf">
                            </div>
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="grau">Escolaridade</label>
                                <select name="grau" id="grau" class="form-control">
                                    <option>Seleione</option>

                                    <option value="Educação Infantil">Educação Infantil</option>
                                    <option value="Ensino Fundamental">Ensino Fundamental</option>
                                    <option value="Ensino Médio">Ensino Médio Completo</option>
                                    <option value="Outros">Outros</option>
                                    

                                </select>
                            </div>
                            <div class="form-group col-md-3 font-weight-bold">
                                <label for="turno">Turno</label>
                                <select name="turno" id="inputState" class="form-control">
                                    <option>Selecione</option>
                                    <option value="Matutino">Matutino</option>
                                    <option value="Vespertino">Vespertino</option>
                                    <option value="Noturno">Noturno</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="card  text-white" style="background-color: coral">
                    <div class="card-body"><h1>Dados Esportivos</h1></div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="datainclusao">Dada de inclusão</label>
                                <input name="datainclusao" type="date" class="form-control" id="datainclusao">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="desligamento">Data de Desligamento</label>
                                <input name="desligamento" type="date" class="form-control" id="desligamento">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="peso">Peso</label>
                                <input name="peso" placeholder="Digite o Peso" type="text" class="form-control" id="peso">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="altura">Altura</label>
                                <input name="altura" placeholder="Digite a Altura" type="text" class="form-control" id="altura">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="camisa">Tamanho da Camisa:</label>
                                <select name="camisa" class="form-control">
                                    <option>Selecione</option>

                                    <option value="P">P</option> 
                                    <option value="M">M</option> 
                                    <option value="G">G</option> 
                                    <option value="GG">GG</option> 
                                    <option value="XXG">XXG</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="short" >Tamanho do Short</label>
                                <select name="short" class="form-control">
                                    <option>Selecione</option>
                                    <option value="P">P</option> 
                                    <option value="M">M</option> 
                                    <option value="G">G</option> 
                                    <option value="GG">GG</option> 
                                    <option value="XXG">XXG</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="calcado">Calçado</label>
                                <input name="calcado" placeholder="Tamanho do calçado" type="number" class="form-control" id="calcado">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="grupo_sanguineo">Grupo Sanguineo</label>
                                <select name="grupo_sanguineo" id="grupo_sanguineo" class="form-control">
                                    <option>Selecione</option> 
                                    <option value="A+">A+</option> 
                                    <option value="B+">B+</option> 
                                    <option value="AB+">AB+</option> 
                                    <option value="AB-">AB-</option> 
                                    <option value="O+">O+</option> 
                                    <option value="O-">O-</option>

                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="medicacao">Medicação</label>

                                <input name="medicacao" type="text" class="form-control" name="medicacao" placeholder="Usa alguma medicação? se sim qual?" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="termo">Termo</label>

                                <input name="termo" type="file" class="form-control" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Atendimento_idNucleo_Atendimento">Nucleo de Atendimento</label>
                                <select name="Nucleo_Atendimento_idNucleo_Atendimento" class="form-control">
                                    <option>Selecione</option> 
                                    <?php
                                    require_once '../Dao/Nucleo_AtendimentoDAO.php';
                                    $Nucleo_AtendimentoDAO = new Nucleo_AtendimentoDAO();
                                    $nucleo_atendimento = $Nucleo_AtendimentoDAO->getAllNucleo_Atendimento();

                                    foreach ($nucleo_atendimento as $na) {

                                        echo " <option value='{$na["idnucleo_atendimento"]}'> {$na["sede"]}</option>";
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Treinamento_idNucleo_Treinamento">Nucleo de Treinamento</label>
                                <select name="Nucleo_Treinamento_idNucleo_Treinamento" class="form-control">
                                    <option>Selecione</option> 
                                    <?php
                                    require_once '../Dao/Nucleo_TreinamentoDAO.php';
                                    $Nucleo_TreinamentoDAO = new Nucleo_TreinamentoDAO;
                                    $nucleo_treinamento = $Nucleo_TreinamentoDAO->getAllNucleo_Treinamento();

                                    foreach ($nucleo_treinamento as $nt) {

                                        echo " <option value='{$nt["idnucleo_treinamento"]}'> {$nt["local"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Modalidade_idModalidade">Modalidade</label>
                                <select name="Modalidade_idModalidade" id="Modalidade_idModalidade" class="form-control">
                                    <option>Selecione</option> 
                                    <?php
                                    require_once '../Dao/ModalidadeDAO.php';
                                    $ModalidadeDAO = new ModalidadeDAO;
                                    $modalidade = $ModalidadeDAO->getAllModalidade();

                                    foreach ($modalidade as $m) {

                                        echo " <option value='{$m["idmodalidade"]}'> {$m["descricao"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Categoria_idCategoria">Categoria</label>
                                <select name="Categoria_idCategoria" class="form-control">
                                    <option>Selecione</option> 
                                    <?php
                                    require_once '../Dao/CategoriaDAO.php';
                                    $CategoriaDAO = new CategoriaDAO;
                                    $categoria = $CategoriaDAO->getAllCategoria();

                                    foreach ($categoria as $c) {

                                        echo " <option value='{$c["idcategoria"]}'> {$c["idade"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Horario_idHorario">Horário</label>
                                <select name="Horario_idHorario" class="form-control">
                                    <option>Selecione</option> 
                                    <?php
                                    require_once '../Dao/HorarioDAO.php';
                                    $HorarioDAO = new HorarioDAO;
                                    $hora = $HorarioDAO->getAllHorario();

                                    foreach ($hora as $h) {

                                        echo " <option value='{$h["idhorario"]}'> {$h["hora"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                           <div class="form-group col-md-6 font-weight-bold">
                                <label for="Treino_semanal_idTreino_semanal">Treino na Semana</label>
                                <select name="Treino_semanal_idTreino_semanal" class="form-control">
                                    <option>Selecione</option> 
                                    <?php
                                    require_once '../Dao/Treino_semanalDAO.php';
                                    $Treino_semanalDAO = new Treino_semanalDAO;
                                    $treino = $Treino_semanalDAO->getAllTreino_semanal();

                                    foreach ($treino as $ts) {

                                        echo " <option value='{$ts["idtreino_semanal"]}'> {$ts["semana"]}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <button type="reset" class="btn btn-light btn-lg">Limpar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </center>
</body>
</html>