<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModalidadeDAO
 *
 * @author Daniela
 */
require_once '../Dao/Conexao/conexao.php';
class ModalidadeDAO {
    //put your code here
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function  getAllModalidade() {
      

        try {
            $sql = "select * from modalidade";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $modalidade = "";
            $modalidade = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $modalidade;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarModalidade(ModalidadeDTO $ModalidadeDTO) {
 try {
            $sql = "INSERT INTO modalidade (`descricao`) VALUES ('?');";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ModalidadeDTO->getDescricao());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function  excluirModalidade($idModalidade) {
        
        try {
            $sql = " DELETE From modalidade where idmodalidade = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idModalidade);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getModalidadeById( $idModalidade) {
      
        try {
            $sql = "select * from modalidade where idmodalidade = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idModalidade);
            $stmt->execute();
             $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateModalidade(ModalidadeDTO $ModalidadeDTO) {
      

        try {
            $sql = "UPDATE modalidade set descricao=?where idmodalidade = ?;" ;
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $ModalidadeDTO->getDescricao());
           $stmt->bindValue(2, $ModalidadeDTO->getIdModalidade());

            $stmt->execute();   
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
}
