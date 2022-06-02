<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresasDAO
 *
 * @author Will
 */
require_once '../Dao/conexao/conexao.php';
class EmpresasDAO {
    //put your code here
     public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllEmpresas()//pesquisar 
    {
        try {
            $sql = "SELECT e.idempresas, e.cnpj, e.razao_social, e.nome_fantasia, e.endereco, e.cidade,
                   e.cep, e.uf, e.segmento, e.tipo_empresa, e.email, e.website, e.telefone_local, 
                   e.nome_empresario, e.telefone_pessoal, na.sede FROM empresas as e, nucleo_atendimento as na
                   WHERE e.nucleo_atendimento_idnucleo_atendimento = na.idnucleo_atendimento";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $empresas = "";
            $empresas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $empresas;
        } catch (PDOException $exc) {
            echo "falha ao pesquisa. Erro: " . $exc->getMessage();
        }
    }
    
    public function pesquisarEmpresa($fantasia)//pesquisar 
    {
        try {
            $sql = "SELECT e.idempresas, e.cnpj, e.razao_social, e.nome_fantasia, e.endereco, e.cidade,
                   e.cep, e.uf, e.segmento, e.tipo_empresa, e.email, e.website, e.telefone_local, 
                   e.nome_empresario, e.telefone_pessoal, na.sede 
                   FROM empresas as e 
                   INNER JOIN nucleo_atendimento as na on na.idnucleo_atendimento = e.nucleo_atendimento_idnucleo_atendimento
                   WHERE nome_fantasia like '%" . $fantasia . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $empresas = "";
            $empresas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $empresas;
        } catch (PDOException $exc) {
            echo "falha ao pesquisa. Erro: " . $exc->getMessage();
        }
    }

    public function salvarEmpresas(EmpresasDTO $EmpresasDTO) {
        try {
            $sql = "INSERT INTO empresas (cnpj,razao_social,nome_fantasia,endereco,cidade,cep,
                    uf,segmento,tipo_empresa,email,website,telefone_local, 
                    nome_empresario,telefone_pessoal,nucleo_atendimento_idnucleo_atendimento)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt = $this->pdo->prepare($sql);
             $stmt->bindValue(1, $EmpresasDTO->getCnpj());
             $stmt->bindValue(2, $EmpresasDTO->getRazao_social());
            $stmt->bindValue(3, $EmpresasDTO->getNome_fantasia());
            $stmt->bindValue(4, $EmpresasDTO->getEndereco());
            $stmt->bindValue(5, $EmpresasDTO->getCidade());
            $stmt->bindvalue(6, $EmpresasDTO->getCep());
            $stmt->bindValue(7, $EmpresasDTO->getUf());
            $stmt->bindValue(8, $EmpresasDTO->getSegmento());
            $stmt->bindValue(9, $EmpresasDTO->getTipo_empresa());
            $stmt->bindvalue(10, $EmpresasDTO->getEmail());
            $stmt->bindValue(11, $EmpresasDTO->getWebsite());
            $stmt->bindValue(12, $EmpresasDTO->getTelefone_local());
            $stmt->bindValue(13, $EmpresasDTO->getNome_empresario());
            $stmt->bindValue(14, $EmpresasDTO->getTelefone_pessoal());
            $stmt->bindValue(15, $EmpresasDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha ao salvar . Erro:" . $exc->getMessage();
        }
    }

    public function excluirEmpresas($idEmpresas) {
        try {
            $sql = "DELETE FROM empresas WHERE idempresas = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idempresas);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha ao excluir o registro. Erro" . $exc->getMessage();
        }
    }

    public function getEmpresasById($idEmpresas) //PesquisarUmRegistro
    {
        try {
            $sql = "SELECT n.idnucleo_atendimento,n.sede,e.idempresas, e.cnpj, e.razao_social, e.nome_fantasia, e.endereco, e.cidade, e.cep, e.uf, e.segmento, e.tipo_empresa, e.email, e.email, e.website, e.telefone_local, e.nome_empresario, e.telefone_pessoal, e.nucleo_atendimento_idnucleo_atendimento  FROM empresas as e, nucleo_atendimento as n  WHERE e.nucleo_atendimento_idnucleo_atendimento = n.idnucleo_atendimento AND idempresas = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idEmpresas);
            $stmt->execute();
             $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo "Falha na pesquisa do registro. Erro:" . $exc->getMessage();
        }
    }

    public function updateEmpresasById(EmpresasDTO $EmpresasDTO)//Alteração
    {
        try {
            $sql = "UPDATE empresas set cnpj= ?,razao_social= ?,nome_fantasia= ?,endereco= ?,cidade= ?,cep= ?,
                    uf= ?,segmento= ?,tipo_empresa= ?,email= ?,website= ?,telefone_local= ?, 
                    nome_empresario= ?,telefone_pessoal= ?,nucleo_atendimento_idnucleo_atendimento= ? WHERE idempresas=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $EmpresasDTO->getCnpj());
            $stmt->bindValue(2, $EmpresasDTO->getRazao_social());
            $stmt->bindValue(3, $EmpresasDTO->getNome_fantasia());
            $stmt->bindValue(4, $EmpresasDTO->getEndereco());
            $stmt->bindValue(5, $EmpresasDTO->getCidade());
            $stmt->bindvalue(6, $EmpresasDTO->getCep());
            $stmt->bindValue(7, $EmpresasDTO->getUf());
            $stmt->bindValue(8, $EmpresasDTO->getSegmento());
            $stmt->bindValue(9, $EmpresasDTO->getTipo_empresa());
            $stmt->bindvalue(10, $EmpresasDTO->getEmail());
            $stmt->bindValue(11, $EmpresasDTO->getWebsite());
            $stmt->bindValue(12, $EmpresasDTO->getTelefone_local());
            $stmt->bindValue(13, $EmpresasDTO->getNome_empresario());
            $stmt->bindValue(14, $EmpresasDTO->getTelefone_pessoal());
            $stmt->bindValue(15, $EmpresasDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            $stmt->bindValue(16, $EmpresasDTO->getIdEmpresas());
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na alteração. Erro:" . $exc->getMessage();
        }
    }
    
    //fim
    
}
