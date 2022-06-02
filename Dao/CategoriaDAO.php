<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriaDAO
 *
 * @author Will
 */
require_once '../Dao/Conexao/conexao.php';
class CategoriaDAO {
    //put your code here
    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function  getAllCategoria() {
      

        try {
            $sql = "select * from categoria";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
             $categoria = "";
            $categoria = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $categoria;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarCategoria(CategoriaDTO $CategoriaDTO) {
 try {
            $sql = "INSERT INTO categoria (`idade`) VALUES ('?');";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $CategoriaDTO->getIdade());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function  excluirCategoria($idCategoria) {
        
        try {
            $sql = " DELETE From categoria where idcategoria = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idCategoria);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getCategoriaById( $idPerfil) {
      
        try {
            $sql = "select * from categoria where idcategoria = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idCategoria);
            $stmt->execute();
            $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateCategoria(CategoriaDTO $CategoriaDTO) {
      

        try {
            $sql = "UPDATE categoria set idade=?where idcategoria = ?;" ;
           $stmt = $this->pdo->prepare($sql);
           $stmt->bindValue(1, $CategoriaDTO->getIdade());
           $stmt->bindValue(2, $CategoriaDTO->getIdCategoria());

            $stmt->execute();   
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
}
