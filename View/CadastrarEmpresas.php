
<!DOCTYPE html>


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
                <div class="card-body"><h1> <center>Cadastrar Empresa</center> </h1></div>
            </div>
            <br>
            <form class="form-group" name="CadastrarEmpresas" method="post" action="../Controller/CadastrarEmpresasController.php">
                <div class="card" style="background-color: coral;">
                    <div class="container">
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="razao_social">Razão Social</label>
                                <input type="text" class="form-control" name="razao_social" placeholder="Digite a Razao Social" required="1">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_fantasia">Nome Fantasia</label>
                                <input type="text" class="form-control" name="nome_fantasia" placeholder="Digite o Nome Fantasia">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" name="cnpj" placeholder="Digite o CNPJ" class="form-control" onKeyPress="MascaraCNPJ(CadastrarEmpresas.cnpj);" 
                                       maxlength="18" onBlur="ValidarCNPJ(CadastrarEmpresas.cnpj);">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Digite o Email">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="website">Redes Sociais</label>
                                <select name="website" class="form-control">
                                    <option>Selecione</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="LinkedIn">LinkedIn</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Snapchat">Snapchat</option>
                                    <option value="Skype">Skype</option>

                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_local">Telefone da Empresa</label>
                                <input type="tel" placeholder="Digite o Telefone da Empresa" class="form-control" name="telefone_local" size="50">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="tipo_empresa">Tipo da Empresa</label>
                                <select class="form-control" name="tipo_empresa">
                                    <option>Selecione</option>
                                    <option value="Empresas Colaboradoras"> Empresas Colaboradoras</option>
                                    <option value="Empresas Fornecedoras">Empresas Fornecedoras</option>
                                    <option value="Empresas Governamentais">Empresas Governamentais</option>
                                    <option value="Empresas Parceiras">Empresas Parceiras</option>
                                    <option value="Empresas Patrocinadoras">Empresas Patrocinadoras</option>
                                    <option value="Outras">Outras</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="segmento">Segmento Empresarial</label>
                                <input type="text" placeholder="Digite o Segmento da Empresa" class="form-control" name="segmento">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_empresario">Nome do Empresário</label>
                                <input type="text" placeholder="Digite o nome do Empresário" class="form-control" name="nome_empresario">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold"> 
                                <label for="telefone_pessoal">WhatsApp</label>
                                <input type="text" placeholder="Digite o Telefone" class="form-control" name="telefone_pessoal">
                                
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="inputAddress">Endereço</label>
                                <input type="text"  class="form-control" name="endereco" placeholder="Digite o Endereço">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" name="cidade" placeholder="Digite a Cidade" >
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input type="text" placeholder="Digite o CEP" class="form-control" name="cep">
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf">UF</label>
                                <input type="text" placeholder="Digite a UF" class="form-control" name="uf">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">

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
