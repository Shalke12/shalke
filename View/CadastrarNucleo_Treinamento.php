
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once '../ComplementosWeb.html';
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
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> <center>Cadastrar Núcleo de Treinamento</center> </h1></div>
            </div>
            <br>
            <form class="form-group" nome="CadastrarNucleo_Treinamento" method="post" action="../Controller/CadastrarNucleo_TreinamentoController.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_responsavel">Nome do Responsável</label>
                                <input name="nome_responsavel" type="text" class="form-control" id="nome_responsavel" placeholder="Digite o nome do Responsável">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_responsavel">Telefone do Responsável</label>
                               <input type="text" name="telefone_responsavel" placeholder="Digite o Telefone do Responsável" class="form-control "onKeyPress="MascaraTelefone(CadastrarNucleo_Treinamento.telefone);" 
                                       maxlength="14"  >

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="local">Endereço</label>
                                    <input name="local" type="text" class="form-control" id="local" placeholder="Digite o Endereço">
                                </div>

                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="cep">CEP</label>
                                   <input type="text" name="cep" placeholder="Digite o CEP" class="form-control" id="cep" onKeyPress="MascaraCep(CadastrarAluno.cep);"
                                       maxlength="14" onBlur="ValidaCep(CadastrarAluno.cep)">
                                </div>
                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="cidade">Cidade</label>
                                    <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Digite a Cidade" size="50">
                                </div>
                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="uf">UF</label>
                                    <input name="uf" type="text" class="form-control" id="cep" placeholder="Digite a UF" >
                                </div>
                                <div class="form-group col-md-4 font-weight-bold">
                                    <label for="telefone_local">Telefone do Local</label>
                                    <input type="text" name="telefone_local" placeholder="Digite o Telefone do Local" class="form-control "onKeyPress="MascaraTelefone(CadastrarNucleo_Treinamento.telefone);" 
                                       maxlength="14"  >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Atendimento_idNucleo_Atendimento">Núcleo de Atendimento</label>
                                <select name="Nucleo_Atendimento_idNucleo_Atendimento" class="form-control" id="Nucleo_Atendimento_idNucleo_Atendimento">
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

