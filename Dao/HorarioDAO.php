<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HorarioDAO
 *
 * @author Will
 */
require_once '../Dao/Conexao/conexao.php';
class HorarioDAO {
    //put your code here
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function  getAllHorario() {
      

        try {
            $sql = "select * from horario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $hora = "";
            $hora = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $hora;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarHorario(HorarioDTO $HorarioDTO) {
 try {
            $sql = "INSERT INTO horario (`hora`) VALUES ('?');";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $HorarioDTO->getHora());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function  excluirHorario($idHorario) {
        
        try {
            $sql = " DELETE From horario where idhorario = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idHorario);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getHorarioById( $idHorario) {
      
        try {
            $sql = "select * from horario where idhorario = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idHorario);
            $stmt->execute();
            $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateHorario(HorarioDTO $HorarioDTO) {
      

        try {
            $sql = "UPDATE horario set hora=?where idhorario = ?;" ;
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $HorarioDTO->getHora());
           $stmt->bindValue(2, $HorarioDTO->getIdHorario());

            $stmt->execute();   
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
}
