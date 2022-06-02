<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlunoDTO
 *
 * @author Daniela
 */
class AlunoDTO {
    //put your code here
    private $idAluno;
    private $nome;
    private $cpf;
    private $rg;
    private $datanascimento;
    private $sexo;
    private $raca;
    private $email;
    private $website;
    private $endereco;
    private $cidade;
    private $cep;
    private $uf;
    private $telefone;
    private $nome_escola;
    private $endereco_escola;
    private $cidade_escola;
    private $cep_escola;
    private $uf_escola;
    private $turno;
    private $grau;
    private $datainclusao;
    private $desligamento;
    private $peso;
    private $altura;
    private $camisa;
    private $short;
    private $calcado;
    private $grupo_sanguineo;
    private $medicacao;
    private $mae;
    private $pai;
    private $responsavel;
    private $telefone_mae;
    private $telefone_pai;
    private $telefone_responsavel;
    private $parentesco_responsavel;
    private $profissao_mae;
    private $profissao_pai;
    private $profissao_responsavel;
    private $termo;
    private $Nucleo_Atendimento_idNucleo_Atendimento;
    private $Nucleo_Treinamento_idNucleo_Treinamento;
    private $Treino_semanal_idTreino_semanal;  
    private $Categoria_idCategoria; 
    private $Horario_idHorario; 
    private $Modalidade_idModalidade;
            
    function getIdAluno() {
        return $this->idAluno;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getDatanascimento() {
        return $this->datanascimento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getRaca() {
        return $this->raca;
    }

    function getEmail() {
        return $this->email;
    }

    function getWebsite() {
        return $this->website;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function getUf() {
        return $this->uf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNome_escola() {
        return $this->nome_escola;
    }

    function getEndereco_escola() {
        return $this->endereco_escola;
    }

    function getCidade_escola() {
        return $this->cidade_escola;
    }

    function getCep_escola() {
        return $this->cep_escola;
    }

    function getUf_escola() {
        return $this->uf_escola;
    }

    function getTurno() {
        return $this->turno;
    }

    function getGrau() {
        return $this->grau;
    }

    function getDatainclusao() {
        return $this->datainclusao;
    }

    function getDesligamento() {
        return $this->desligamento;
    }

    function getPeso() {
        return $this->peso;
    }

    function getAltura() {
        return $this->altura;
    }

    function getCamisa() {
        return $this->camisa;
    }

    function getShort() {
        return $this->short;
    }

    function getCalcado() {
        return $this->calcado;
    }

    function getGrupo_sanguineo() {
        return $this->grupo_sanguineo;
    }

    function getMedicacao() {
        return $this->medicacao;
    }

    function getMae() {
        return $this->mae;
    }

    function getPai() {
        return $this->pai;
    }

    function getResponsavel() {
        return $this->responsavel;
    }

    function getTelefone_mae() {
        return $this->telefone_mae;
    }

    function getTelefone_pai() {
        return $this->telefone_pai;
    }

    function getTelefone_responsavel() {
        return $this->telefone_responsavel;
    }

    function getParentesco_responsavel() {
        return $this->parentesco_responsavel;
    }

    function getProfissao_mae() {
        return $this->profissao_mae;
    }

    function getProfissao_pai() {
        return $this->profissao_pai;
    }

    function getProfissao_responsavel() {
        return $this->profissao_responsavel;
    }

    function getTermo() {
        return $this->termo;
    }

    function getNucleo_Atendimento_idNucleo_Atendimento() {
        return $this->Nucleo_Atendimento_idNucleo_Atendimento;
    }

    function getNucleo_Treinamento_idNucleo_Treinamento() {
        return $this->Nucleo_Treinamento_idNucleo_Treinamento;
    }

    function getTreino_semanal_idTreino_semanal() {
        return $this->Treino_semanal_idTreino_semanal;
    }

    function getCategoria_idCategoria() {
        return $this->Categoria_idCategoria;
    }

    function getHorario_idHorario() {
        return $this->Horario_idHorario;
    }

    function getModalidade_idModalidade() {
        return $this->Modalidade_idModalidade;
    }

    function setIdAluno($idAluno): void {
        $this->idAluno = $idAluno;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setRg($rg): void {
        $this->rg = $rg;
    }

    function setDatanascimento($datanascimento): void {
        $this->datanascimento = $datanascimento;
    }

    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    function setRaca($raca): void {
        $this->raca = $raca;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setWebsite($website): void {
        $this->website = $website;
    }

    function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    function setCidade($cidade): void {
        $this->cidade = $cidade;
    }

    function setCep($cep): void {
        $this->cep = $cep;
    }

    function setUf($uf): void {
        $this->uf = $uf;
    }

    function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    function setNome_escola($nome_escola): void {
        $this->nome_escola = $nome_escola;
    }

    function setEndereco_escola($endereco_escola): void {
        $this->endereco_escola = $endereco_escola;
    }

    function setCidade_escola($cidade_escola): void {
        $this->cidade_escola = $cidade_escola;
    }

    function setCep_escola($cep_escola): void {
        $this->cep_escola = $cep_escola;
    }

    function setUf_escola($uf_escola): void {
        $this->uf_escola = $uf_escola;
    }

    function setTurno($turno): void {
        $this->turno = $turno;
    }

    function setGrau($grau): void {
        $this->grau = $grau;
    }

    function setDatainclusao($datainclusao): void {
        $this->datainclusao = $datainclusao;
    }

    function setDesligamento($desligamento): void {
        $this->desligamento = $desligamento;
    }

    function setPeso($peso): void {
        $this->peso = $peso;
    }

    function setAltura($altura): void {
        $this->altura = $altura;
    }

    function setCamisa($camisa): void {
        $this->camisa = $camisa;
    }

    function setShort($short): void {
        $this->short = $short;
    }

    function setCalcado($calcado): void {
        $this->calcado = $calcado;
    }

    function setGrupo_sanguineo($grupo_sanguineo): void {
        $this->grupo_sanguineo = $grupo_sanguineo;
    }

    function setMedicacao($medicacao): void {
        $this->medicacao = $medicacao;
    }

    function setMae($mae): void {
        $this->mae = $mae;
    }

    function setPai($pai): void {
        $this->pai = $pai;
    }

    function setResponsavel($responsavel): void {
        $this->responsavel = $responsavel;
    }

    function setTelefone_mae($telefone_mae): void {
        $this->telefone_mae = $telefone_mae;
    }

    function setTelefone_pai($telefone_pai): void {
        $this->telefone_pai = $telefone_pai;
    }

    function setTelefone_responsavel($telefone_responsavel): void {
        $this->telefone_responsavel = $telefone_responsavel;
    }

    function setParentesco_responsavel($parentesco_responsavel): void {
        $this->parentesco_responsavel = $parentesco_responsavel;
    }

    function setProfissao_mae($profissao_mae): void {
        $this->profissao_mae = $profissao_mae;
    }

    function setProfissao_pai($profissao_pai): void {
        $this->profissao_pai = $profissao_pai;
    }

    function setProfissao_responsavel($profissao_responsavel): void {
        $this->profissao_responsavel = $profissao_responsavel;
    }

    function setTermo($termo): void {
        $this->termo = $termo;
    }

    function setNucleo_Atendimento_idNucleo_Atendimento($Nucleo_Atendimento_idNucleo_Atendimento): void {
        $this->Nucleo_Atendimento_idNucleo_Atendimento = $Nucleo_Atendimento_idNucleo_Atendimento;
    }

    function setNucleo_Treinamento_idNucleo_Treinamento($Nucleo_Treinamento_idNucleo_Treinamento): void {
        $this->Nucleo_Treinamento_idNucleo_Treinamento = $Nucleo_Treinamento_idNucleo_Treinamento;
    }

    function setTreino_semanal_idTreino_semanal($Treino_semanal_idTreino_semanal): void {
        $this->Treino_semanal_idTreino_semanal = $Treino_semanal_idTreino_semanal;
    }

    function setCategoria_idCategoria($Categoria_idCategoria): void {
        $this->Categoria_idCategoria = $Categoria_idCategoria;
    }

    function setHorario_idHorario($Horario_idHorario): void {
        $this->Horario_idHorario = $Horario_idHorario;
    }

    function setModalidade_idModalidade($Modalidade_idModalidade): void {
        $this->Modalidade_idModalidade = $Modalidade_idModalidade;
    }


}
