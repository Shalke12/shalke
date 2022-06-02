<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColaboradorDAO
 *
 * @author Will
 * 
 * 
 */

require_once '../Dao/Conexao/conexao.php';

class ColaboradorDAO {
    //put your code here
     public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

     public function getAllColaborador() {
        

        try {
            $sql = "select * FROM colaborador as c, perfil as p, nucleo_atendimento as na WHERE c.perfil_idperfil = p.idperfil AND c.nucleo_atendimento_idnucleo_atendimento= na.idnucleo_atendimento;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $colaborador = "";
            $colaborador = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $colaborador;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }
    
    public function pesquisarColaborador($nome) 
            {
        

        try {
            $sql = "SELECT c.idcolaborador, c.nome, c.cpf, c.rg, c.datanascimento, c.sexo,
                   c.raca, c.email, c.website, c.endereco, c.cidade, c.cep, c.uf, 
                   c.telefone, c.profissao FROM colaborador as c, nucleo_atendimento as na
                   where C.nucleo_atendimento_idnucleo_atendimento = na.idnucleo_atendimento and nome like '%" . $nome . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $colaborador = "";
            $colaborador = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $colaborador;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }

    public function salvarColaborador(ColaboradorDTO $ColaboradorDTO) {
      
        try {
            $sql ="INSERT INTO colaborador (nome,cpf,rg,datanascimento,sexo,raca,email,website,endereco,cidade,
                cep,uf,telefone,profissao,perfil_idperfil,nucleo_atendimento_idnucleo_atendimento)
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ColaboradorDTO->getNome());
            $stmt->bindValue(2, $ColaboradorDTO->getCpf());
            $stmt->bindValue(3, $ColaboradorDTO->getRg());
            $stmt->bindValue(4, $ColaboradorDTO->getDatanascimento());
            $stmt->bindValue(5, $ColaboradorDTO->getSexo());
            $stmt->bindValue(6, $ColaboradorDTO->getRaca());
            $stmt->bindValue(7, $ColaboradorDTO->getEmail());
            $stmt->bindValue(8, $ColaboradorDTO->getWebsite());
            $stmt->bindValue(9, $ColaboradorDTO->getEndereco());
            $stmt->bindValue(10, $ColaboradorDTO->getCidade());
            $stmt->bindValue(11, $ColaboradorDTO->getCep());
            $stmt->bindValue(12, $ColaboradorDTO->getUf());
            $stmt->bindValue(13, $ColaboradorDTO->getTelefone());
            $stmt->bindValue(14, $ColaboradorDTO->getProfissao());
            $stmt->bindValue(15, $ColaboradorDTO->getPerfil_idPerfil());
            $stmt->bindValue(16, $ColaboradorDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha ao salvar o login. Erro:" . $exc->getMessage();
        }
    }

    public function excluirColaborador($idColaborador) {
       
        try {
            $sql = " DELETE From colaborador where idcolaborador = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idColaborador);
            return $stmt->execute();
        } catch (Exception $exc) {
            echo "Falha ao excluir o registro. Erro" . $exc->getMessage();
        }
    }

    public function updateColaboradorById(ColaboradorDTO $ColaboradorDTO) {
        

        try {
            $sql = "UPDATE colaborador SET nome= ?, cpf= ?, rg= ?, datanascimento= ?, sexo= ?, raca= ?,
                   email= ?, website= ?, endereco= ?, cidade= ?, cep= ?, uf= ?, telefone= ?,
                   profissao= ?,perfil_idperfil=?,nucleo_atendimento_idnucleo_atendimento= ? WHERE idcolaborador= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $ColaboradorDTO->getNome());
            $stmt->bindValue(2, $ColaboradorDTO->getCpf());
            $stmt->bindValue(3, $ColaboradorDTO->getRg());
            $stmt->bindValue(4, $ColaboradorDTO->getDatanascimento());
            $stmt->bindValue(5, $ColaboradorDTO->getSexo());
            $stmt->bindValue(6, $ColaboradorDTO->getRaca());
            $stmt->bindValue(7, $ColaboradorDTO->getEmail());
            $stmt->bindValue(8, $ColaboradorDTO->getWebsite());
            $stmt->bindValue(9, $ColaboradorDTO->getEndereco());
            $stmt->bindValue(10, $ColaboradorDTO->getCidade());
            $stmt->bindValue(11, $ColaboradorDTO->getCep());
            $stmt->bindValue(12, $ColaboradorDTO->getUf());
            $stmt->bindValue(13, $ColaboradorDTO->getTelefone());
            $stmt->bindValue(14, $ColaboradorDTO->getProfissao());
            $stmt->bindValue(15, $ColaboradorDTO->getPerfil_idPerfil());
            $stmt->bindValue(16, $ColaboradorDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            $stmt->bindValue(17, $ColaboradorDTO->getIdColaborador());
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na alteração. Erro:" . $exc->getMessage();
        }
    }

    public function getColaboradorById($idColaborador) {
       
        try {
            $sql = "SELECT *, p.perfil, n.sede FROM colaborador as c, perfil as p, nucleo_atendimento as n WHERE c.perfil_idperfil = p.idperfil AND c.nucleo_atendimento_idnucleo_atendimento= n.idnucleo_atendimento AND c.idcolaborador = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idColaborador);
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
