<?php

class LoginDTO {

    //put your code here
    private $idLogin;
    private $nome;
    private $login;
    private $email;
    private $senha;
    private $Perfil_idPerfil;

    function getIdLogin() {
        return $this->idLogin;
    }

    function getNome() {
        return $this->nome;
    }

    function getLogin() {
        return $this->login;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getPerfil_idPerfil() {
        return $this->Perfil_idPerfil;
    }

    function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil_idPerfil($Perfil_idPerfil) {
        $this->Perfil_idPerfil = $Perfil_idPerfil;
    }

        //fim
}
