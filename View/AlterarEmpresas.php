
<!DOCTYPE html>

<?php
include_once '../complementosWEB.html';
require_once '../Dao/EmpresasDAO.php';
require_once '../Dto/EmpresasDTO.php';

  $idEmpresas = $_GET["id"];//ERRO

$EmpresasDTO = new EmpresasDTO;
$EmpresasDTO->setIdEmpresas($idEmpresas);
$EmpresasDAO = new EmpresasDAO;
$pesquisaUmRegistro = $EmpresasDAO->getEmpresasById($idEmpresas);//OLHAR COMO ESTÁ NA CLASSE DAO
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card  text-white" style="background-color: coral">
                <div class="card-body"><h1> Alterar Empresa</h1></div>
            </div>
            <br>
            <form class="form-group" name="AlterarEmpresas" method="post" action="../Controller/AlterarEmpresasController.php">
               <input type="hidden" name="idEmpresas" value="<?php echo $pesquisaUmRegistro["idempresas"]?>"/>
                <div class="card" style="background-color: coral;">
                    <div class="card-body">
                        <div class="form-row">
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" required="1" pla name="cnpj" class="form-control" value="<?php echo $pesquisaUmRegistro["cnpj"] ?>" size="50"/>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="razao_social">Razão Social</label>
                                <input type="text" required="1" name="razao_social" class="form-control" value="<?php echo $pesquisaUmRegistro["razao_social"] ?>" size="50"/>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_fantasia">Nome Fantasia</label>
                                <input type="text" required="1" name="nome_fantasia" class="form-control" value="<?php echo $pesquisaUmRegistro["nome_fantasia"] ?>" size="50"/>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="endereco">Endereço</label>
                                <input type="text" v name="endereco" class="form-control" value="<?php echo $pesquisaUmRegistro["endereco"] ?>" size="50"/>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cidade">Cidade</label>
                                <input type="text" required="1" name="cidade" class="form-control" value="<?php echo $pesquisaUmRegistro["cidade"] ?>" size="50"/>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="cep">CEP</label>
                                <input type="text" name="cep" class="form-control" value="<?php echo $pesquisaUmRegistro["cep"] ?>" size="50"/>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="uf">UF</label>
                                <input type="text" required="1" name="uf" class="form-control" value="<?php echo $pesquisaUmRegistro["uf"] ?>" size="50"/>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="segimento">Segmento</label>
                                <input type="text" required="1" name="segmento" class="form-control" value="<?php echo $pesquisaUmRegistro["segmento"] ?>" size="50"/>
                            </div>
                            
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="tipo_empresa">Tipo da Empresa</label>
                                <select class="form-control" name="tipo_empresa">
                                   <option value=" <?php echo $pesquisaUmRegistro["tipo_empresa"] ?>"><?php echo $pesquisaUmRegistro["tipo_empresa"] ?></option>
                                   <option value="Empresas Colaboradoras"> Empresas Colaboradoras</option>
                                    <option value="Empresas Fornecedoras">Empresas Fornecedoras</option>
                                    <option value="Empresas Governamentais">Empresas Governamentais</option>
                                    <option value="Empresas Parceiras">Empresas Parceiras</option>
                                    <option value="Empresas Patrocinadoras">Empresas Patrocinadoras</option>
                                    <option value="Outras">Outras</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $pesquisaUmRegistro["email"] ?>">
                            </div>
                            
                             <div class="form-group col-md-4 font-weight-bold">
                                <label for="website">Redes Sociais</label>
                                <select class="form-control" name="website" >
                                   <option value=" <?php echo $pesquisaUmRegistro["website"] ?>"><?php echo $pesquisaUmRegistro["website"] ?></option>
                                    <option value="">Facebook</option>
                                    <option value="">Instagram</option>
                                    <option value="">LinkedIn</option>
                                    <option value="">Twitter</option>
                                    <option value="">Snapchat</option>
                                    <option value="">Skype</option>

                                </select>
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_local">Telefone do Local</label>
                                <input type="text" required="1" name="telefone_local" class="form-control" value="<?php echo $pesquisaUmRegistro["telefone_local"] ?>" size="50"/> 
                            </div>
                            
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="nome_empresario">Nome do Empresário</label>
                                <input type="text" required="1" name="nome_empresario" class="form-control" value="<?php echo $pesquisaUmRegistro["nome_empresario"] ?>" size="50"/>
                            </div>
                            <div class="form-group col-md-4 font-weight-bold">
                                <label for="telefone_pessoal">Telefone Pessoal</label>
                                <input type="text" name="telefone_pessoal" class="form-control" value="<?php echo $pesquisaUmRegistro["telefone_pessoal"] ?>" size="50"/> 
                            </div>
                            </div>
                        <br>
                        <div class="card" style="background-color: coral;">
                    <div class="card-body">
                     
                        <div class="form-row">
                            <div class="form-group col-md-6 font-weight-bold">
                                <label for="Nucleo_Atendimento_idNucleo_Atendimento">Nucleo de Atendimento</label>
                                <select name="Nucleo_Atendimento_idNucleo_Atendimento" class="form-control">
                                    
                                    <?php
                                     echo "<option value='{$pesquisaUmRegistro["nucleo_atendimento_idnucleo_atendimento"]}'> {$pesquisaUmRegistro["sede"]}</option>";
                                    
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

                           
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <button type="reset" class="btn btn-light btn-lg">Limpar</button>
                                <button type="submit" class="btn btn-primary btn-lg">Alterar</button>
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
