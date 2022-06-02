<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Treino_semanalDAO
 *
 * @author Daniela
 * 
 */

require_once '../Dao/Conexao/conexao.php';
class Treino_semanalDAO {
    //put your code here
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function  getAllTreino_semanal() {
      

        try {
            $sql = "select * from treino_semanal";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $treino = "";
            $treino = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $treino;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarTreino_semanal(Treino_semanalDTO $Treino_semanalDTO) {
 try {
            $sql = "INSERT INTO treino_semanal (`semana`) VALUES ('?');";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $Treino_semanalDTO->getSemana());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function  excluirTreino_semanal($idTreino_semanal) {
        
        try {
            $sql = " DELETE From treino_semanal where idtreino_semanal = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idTreino_semanal);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getTreino_semanalById( $idTreino_semanal) {
      
        try {
            $sql = "select * from treino_semanal where idtreino_semanal = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idTreino_semanal);
            $stmt->execute();
            $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateTreino_semanal(Treino_semanalDTO $Treino_semanalDTO) {
      

        try {
            $sql = "UPDATE treino_semanal set semana=?where idtreino_semanal = ?;" ;
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $Treino_semanalDTO->getSemana());
           $stmt->bindValue(2, $Treino_semanalDTO->getIdTreino_semanal());

            $stmt->execute();   
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
}
