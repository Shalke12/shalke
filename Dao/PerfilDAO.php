<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerfilDAO
 *
 * @author Daniela
 */
require_once '../Dao/Conexao/conexao.php';
class PerfilDAO {
    //put your code herepublic $pdo = null;
 
public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function  getAllPerfil() {
      

        try {
            $sql = "select * from perfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $perfil = "";
            $perfil = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $perfil;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarPerfil(PerfilDTO $PerfilDTO) {
 try {
            $sql = "INSERT INTO perfil (perfil) VALUES ('?');";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $PerfilDTO->getPerfil());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function  excluirPerfil($idPerfil) {
        
        try {
            $sql = " DELETE From perfil where idperfil = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idPerfil);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getPerfilById( $idPerfil) {
      
        try {
            $sql = "select * from perfil where idperfil = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idPerfil);
            $stmt->execute();
            $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updatePerfil(PerfilDTO $PerfilDTO) {
      

        try {
            $sql = "UPDATE perfil set perfil=?where idperfil = ?;" ;
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $PerfilDTO->getPerfil());
           $stmt->bindValue(2, $PerfilDTO->getIdPerfil());

            $stmt->execute();   
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>