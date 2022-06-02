<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nucleo_TreinamentoDAO
 *
 * @author Daniela
 */
require_once '../Dao/Conexao/conexao.php';
class Nucleo_TreinamentoDAO {
    //put your code here
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllNucleo_Treinamento() {
      

        try {
            $sql = "select * FROM nucleo_treinamento as nt, nucleo_atendimento as na WHERE nt.nucleo_atendimento_idnucleo_atendimento= na.idnucleo_atendimento;";
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $nucleo_treinamento = "";
            $nucleo_treinamento = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $nucleo_treinamento;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }
    
    public function pesquisarNucleo_Treinamento($nome_responsavel) {
      

        try {
            $sql = "SELECT nt.idnucleo_treinamento, nt.nome_responsavel, nt.telefone_responsavel, nt.local, nt.cidade, nt.cep,
                   nt.telefone_local, nt.uf FROM nucleo_treinamento as nt WHERE nome_responsavel like '%" . $nome_responsavel . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $nucleo_treinamento = "";
            $nucleo_treinamento = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $nucleo_treinamento;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }

    public function salvarNucleo_Treinamento(Nucleo_TreinamentoDTO $Nucleo_TreinamentoDTO) {
       

        try {
            $sql = "INSERT INTO nucleo_treinamento (nome_responsavel, telefone_responsavel, local, cidade, cep, 
telefone_local, uf, nucleo_atendimento_idnucleo_atendimento)
 VALUES (?,?,?,?,?,?,?,?);";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $Nucleo_TreinamentoDTO->getNome_responsavel()); 
            $stmt->bindvalue(2, $Nucleo_TreinamentoDTO->getTelefone_responsavel());
            $stmt->bindValue(3, $Nucleo_TreinamentoDTO->getLocal());
            $stmt->bindValue(4, $Nucleo_TreinamentoDTO->getCidade());
            $stmt->bindValue(5, $Nucleo_TreinamentoDTO->getCep());
            $stmt->bindValue(6, $Nucleo_TreinamentoDTO->getTelefone_local());
            $stmt->bindValue(7, $Nucleo_TreinamentoDTO->getUf()); 
            $stmt->bindValue(8, $Nucleo_TreinamentoDTO->getNucleo_Atendimento_idNucleo_Atendimento());
             return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na gravação. Erro:" . $exc->getMessage();
        }
    }

    public function excluirNucleo_Treinamento($idNucleo_Treinamento) {
        
        try {
            $sql = " DELETE From nucleo_treinamento where idnucleo_treinamento = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idNucleo_Treinamento);

            return $stmt->execute();
        } catch (Exception $exc) {
            echo "Falha ao excluir o registro. Erro" . $exc->getMessage();
        }
    }

    public function updateNucleo_Treinamento(Nucleo_TreinamentoDTO $Nucleo_TreinamentoDTO) {
       

        try {
            $sql = "UPDATE nucleo_treinamento set nome_responsavel= ?,telefone_responsavel= ?,
                local= ?,cidade= ?,cep= ?,telefone_local= ?,uf= ?, nucleo_atendimento_idnucleo_atendimento= ? where idnucleo_treinamento= ?;";
            $stmt =$this->pdo->prepare($sql);
            $stmt->bindValue(1, $Nucleo_TreinamentoDTO->getNome_responsavel()); 
            $stmt->bindvalue(2, $Nucleo_TreinamentoDTO->getTelefone_responsavel());
            $stmt->bindValue(3, $Nucleo_TreinamentoDTO->getLocal());
            $stmt->bindValue(4, $Nucleo_TreinamentoDTO->getCidade());
            $stmt->bindValue(5, $Nucleo_TreinamentoDTO->getCep());
            $stmt->bindValue(6, $Nucleo_TreinamentoDTO->getTelefone_local());
            $stmt->bindValue(7, $Nucleo_TreinamentoDTO->getUf());
            $stmt->bindValue(8, $Nucleo_TreinamentoDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            $stmt->bindValue(9, $Nucleo_TreinamentoDTO->getIdNucleo_Treinamento());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na alteração. Erro:" . $exc->getMessage();
        }
    }

    public function getNucleo_TreinamentoById($idNucleo_Treinamento) {
       
        try {
            $sql = "SELECT nt.idnucleo_treinamento, nt.nome_responsavel, nt.telefone_responsavel, nt.local, nt.cidade, nt.cep, nt.telefone_local, nt.uf, na.sede , nt.nucleo_atendimento_idnucleo_atendimento FROM nucleo_treinamento as nt, nucleo_atendimento as na WHERE idnucleo_treinamento = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idNucleo_Treinamento);
            $stmt->execute();
            $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo "Falha na pesquisa. Erro:" . $exc->getMessage();
        }
    }

    
    //fim
}
