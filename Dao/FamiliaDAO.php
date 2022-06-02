<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FamiliaDAO
 *
 * @author Will
 */
require_once '../Dao/Conexao/conexao.php';
class FamiliaDAO {
    //put your code here
    
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllFamilia() {
        
        try {
            $sql = "SELECT * FROM familia as f,nucleo_atendimento as na WHERE f.nucleo_atendimento_idnucleo_atendimento= na.idnucleo_atendimento;";
           
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $familia = "";
            $familia = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $familia;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }
    
    public function pesquisarFamilia($nome_chefe_familia) {
        
        try {
            $sql = "SELECT f.idfamilia, f.nome_chefe_familia, f.sexo, f.cpf, f.endereco, f.cidade,
                   f.cep, f.uf, f.email, f.telefone , f.nucleo_familiar, f.moradia
				   FROM familia as f 
				   inner join nucleo_atendimento as na on na.idnucleo_atendimento = f.nucleo_atendimento_idnucleo_atendimento
                   WHERE nome_chefe_familia like '%" . $nome_chefe_familia . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $familia = "";
            $familia = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $familia;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }

    public function salvarFamilia(FamiliaDTO $FamiliaDTO) {
       
        try {
            $sql = "INSERT INTO familia (nome_chefe_familia,sexo,cpf,endereco,cidade,cep,uf,email,telefone,nucleo_familiar,moradia,nucleo_atendimento_idnucleo_atendimento)VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $FamiliaDTO->getNome_chefe_familia());
             $stmt->bindValue(2, $FamiliaDTO->getSexo());
            $stmt->bindValue(3, $FamiliaDTO->getCpf());
            $stmt->bindvalue(4, $FamiliaDTO->getEndereco());
            $stmt->bindvalue(5, $FamiliaDTO->getCidade());
            $stmt->bindValue(6, $FamiliaDTO->getCep());
            $stmt->bindValue(7, $FamiliaDTO->getUf());
            $stmt->bindValue(8, $FamiliaDTO->getEmail());
            $stmt->bindValue(9, $FamiliaDTO->getTelefone());
             $stmt->bindValue(10, $FamiliaDTO->getNucleo_familiar());
            $stmt->bindValue(11, $FamiliaDTO->getMoradia());
            $stmt->bindValue(12, $FamiliaDTO->getNucleo_Atendimento_idNucleo_Atendimento());
          return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha ao salvar. Erro:" . $exc->getMessage();
        }
    }

    public function excluirFamilia($idFamilia) {
       
        try {
            $sql = " DELETE From familia where idfamilia = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idFamilia);

            return $stmt->execute();
        } catch (Exception $ex) {
            echo "Falha ao excluir o registro. Erro" . $ex->getMessage();
        }
    }

    public function updateFamiliaById(FamiliaDTO $FamiliaDTO) {
    

        try {
            $sql = "UPDATE familia SET nome_chefe_familia= ?,sexo= ?,cpf= ?,endereco= ?,cidade= ?,cep= ?,uf= ?,email= ?,telefone= ?,nucleo_familiar= ?,moradia= ?,nucleo_atendimento_idnucleo_atendimento= ? WHERE idfamilia = ?" ;
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $FamiliaDTO->getNome_chefe_familia());
            $stmt->bindValue(2, $FamiliaDTO->getSexo());
            $stmt->bindValue(3, $FamiliaDTO->getCpf());
            $stmt->bindvalue(4, $FamiliaDTO->getEndereco());
            $stmt->bindvalue(5, $FamiliaDTO->getCidade());
            $stmt->bindValue(6, $FamiliaDTO->getCep());
            $stmt->bindValue(7, $FamiliaDTO->getUf());
            $stmt->bindValue(8, $FamiliaDTO->getEmail());
            $stmt->bindValue(9, $FamiliaDTO->getTelefone());
            $stmt->bindValue(10, $FamiliaDTO->getNucleo_familiar());
            $stmt->bindValue(11, $FamiliaDTO->getMoradia());
            $stmt->bindValue(12, $FamiliaDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            $stmt->bindValue(13, $FamiliaDTO->getIdFamilia());


            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na alteração. Erro:" . $exc->getMessage();
        }
    }

    public function getFamiliaById($idFamilia) {
      
        try {
            $sql = "select * from familia where idfamilia = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idFamilia);
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
