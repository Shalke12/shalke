<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nucleo_Atendimento
 *
 * @author Daniela
 */
require_once '../Dao/Conexao/conexao.php';

class Nucleo_AtendimentoDAO {
    //put your code here
     public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllNucleo_Atendimento() {
      

        try {
            $sql = "select * from nucleo_atendimento";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $nucleo_atendimento = "";
            $nucleo_atendimento = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $nucleo_atendimento;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }
    
    public function pesquisarNucleo_Atendimento($sede) {
      

        try {
            $sql = "SELECT na.idnucleo_atendimento, na.sede, na.telefone_sede, na.email_email, na.endereco_sede, na.cidade_sede,
                   na.cep_sede, na.uf_sede FROM nucleo_atendimento as na WHERE sede like '%" . $sede . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $nucleo_atendimento = "";
            $nucleo_atendimento = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $nucleo_atendimento;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }

    public function salvarNucleo_Atendimento(Nucleo_AtendimentoDTO $Nucleo_AtendimentoDTO) {
       

        try {
            $sql = "INSERT INTO nucleo_atendimento (sede,telefone_sede,email_email,
                endereco_sede,cidade_sede,cep_sede,uf_sede)
                VALUES (?,?,?,?,?,?,?);";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $Nucleo_AtendimentoDTO->getSede());
            $stmt->bindValue(2, $Nucleo_AtendimentoDTO->getTelefone_sede());
            $stmt->bindvalue(3, $Nucleo_AtendimentoDTO->getEmail_email());
            $stmt->bindValue(4, $Nucleo_AtendimentoDTO->getEndereco_sede());
            $stmt->bindValue(5, $Nucleo_AtendimentoDTO->getCidade_sede());
            $stmt->bindValue(6, $Nucleo_AtendimentoDTO->getCep_sede());
            $stmt->bindValue(7, $Nucleo_AtendimentoDTO->getUf_sede());
            

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na gravação. Erro:" . $exc->getMessage();
        }
    }

    public function excluirNucleo_Atendimento($idNucleo_Atendimento) {
        
        try {
            $sql = " DELETE From nucleo_atendimento where idnucleo_atendimento = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idNucleo_Atendimento);

            return $stmt->execute();
        } catch (Exception $exc) {
            echo "Falha ao excluir o registro. Erro" . $exc->getMessage();
        }
    }

    public function updateNucleo_Atendimento(Nucleo_AtendimentoDTO $Nucleo_AtendimentoDTO) {
       

        try {
            $sql = "UPDATE nucleo_atendimento set sede= ?,telefone_sede= ?,
                email_email= ?,endereco_sede= ?,cidade_sede= ?,cep_sede= ?,uf_sede= ? where idnucleo_atendimento= ?;";
            $stmt =$this->pdo->prepare($sql);
            $stmt->bindValue(1, $Nucleo_AtendimentoDTO->getSede());
            $stmt->bindValue(2, $Nucleo_AtendimentoDTO->getTelefone_sede());
            $stmt->bindvalue(3, $Nucleo_AtendimentoDTO->getEmail_email());
            $stmt->bindValue(4, $Nucleo_AtendimentoDTO->getEndereco_sede());
            $stmt->bindValue(5, $Nucleo_AtendimentoDTO->getCidade_sede());
            $stmt->bindValue(6, $Nucleo_AtendimentoDTO->getCep_sede());
            $stmt->bindValue(7, $Nucleo_AtendimentoDTO->getUf_sede());
             $stmt->bindValue(8, $Nucleo_AtendimentoDTO->getIdNucleo_Atendimento());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na alteração. Erro:" . $exc->getMessage();
        }
    }

    public function getNucleo_AtendimentoById($idNucleo_Atendimento) {
       
        try {
            $sql = "SELECT na.idnucleo_atendimento, na.sede, na.telefone_sede, na.email_email, na.endereco_sede, na.cidade_sede, na.cep_sede, na.uf_sede FROM nucleo_atendimento as na WHERE idnucleo_atendimento = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idNucleo_Atendimento);
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
