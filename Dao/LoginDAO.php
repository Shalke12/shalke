<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginDAO
 *
 * @author Daniela
 */

require_once '../Dao/Conexao/conexao.php';

class LoginDAO {
    //put your code here
    
  public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }


    public function login($login, $senha) {

      

        try {
            $sql = "select l.idlogin, l.nome,l.login,l.email, l.senha,l.perfil_idperfil,p.idperfil, p.perfil from login as l, perfil as p where l.perfil_idperfil= p.idperfil AND  l.login=? and l.senha=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $login);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $exc) {
            //caso ocorra erro n login
            echo "Erro ao efetuar Login" . $exc->getMessage();
        }
    }

    public function getAllLogin() {
        

        try {
            $sql = "SELECT l.idlogin, l.nome, l.login, l.email, l.senha, p.perfil FROM login as l, perfil as p where l.perfil_idperfil = p.idperfil";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $login = "";
            $login = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $login;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }
    
    public function pesquisarLogin($login) {
        

        try {
            $sql = "SELECT l.idlogin, l.nome, l.login, l.email FROM login as l
                   WHERE login like '%" . $login . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $login = "";
            $login = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $login;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }

    public function salvarLogin(LoginDTO $LoginDTO) {
      
        try {
            $sql = "INSERT INTO login (nome,login,email,senha,perfil_idperfil) VALUES (?,?,?,?,?);";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $LoginDTO->getNome());
            $stmt->bindValue(2, $LoginDTO->getLogin());
            $stmt->bindValue(3, $LoginDTO->getEmail());
            $stmt->bindvalue(4, $LoginDTO->getSenha());
            $stmt->bindvalue(5, $LoginDTO->getPerfil_idPerfil());
              return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha ao salvar o login. Erro:" . $exc->getMessage();
        }
    }

    public function excluirLogin($idLogin) {
       
        try {
            $sql = " DELETE From login where idlogin = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idLogin);
            return $stmt->execute();
        } catch (Exception $exc) {
            echo "Falha ao excluir o registro. Erro" . $exc->getMessage();
        }
    }

    public function updateLoginById(LoginDTO $LoginDTO) {
        

        try {
            $sql = "UPDATE login set nome= ?,login = ?,email= ?, senha = ?,perfil_idperfil = ? where idlogin = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $LoginDTO->getNome());
            $stmt->bindValue(2, $LoginDTO->getLogin());
            $stmt->bindValue(3, $LoginDTO->getEmail());
            $stmt->bindValue(4, $LoginDTO->getSenha());
            $stmt->bindValue(5, $LoginDTO->getPerfil_idPerfil());
            $stmt->bindValue(6, $LoginDTO->getIdlogin());          
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na alteração. Erro:" . $exc->getMessage();
        }
    }

    public function getLoginById(LoginDTO $LoginDTO) {
       
        try {
            $sql = "SELECT l.idLogin, l.nome, l.login, l.email, l.senha, l.perfil_idperfil, p.perfil FROM login as l, perfil as p WHERE l.perfil_idperfil = p.idperfil AND l.idLogin = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $LoginDTO->getIdLogin());
            $stmt->execute();
            $pesquisaUmRegistro = "";
            $pesquisaUmRegistro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $pesquisaUmRegistro;
        } catch (PDOException $exc) {
            echo "Falha ao pesquisa o registro. Erro:" . $exc->getMessage();
        }
    }

    //Fim
}

