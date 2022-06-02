<?php

require_once '../Dao/Conexao/conexao.php';
class AlunoDAO {
    //put your code here
    
     public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

     public function getAllAluno() {
        

        try {
            $sql = "SELECT * FROM aluno as a, nucleo_atendimento as na, nucleo_treinamento as nt, treino_semanal as ts, categoria as c, horario as h, modalidade as m WHERE a.nucleo_atendimento_idnucleo_atendimento = na.idnucleo_atendimento AND a.nucleo_treinamento_idnucleo_treinamento = nt.idnucleo_treinamento AND a.treino_semanal_idtreino_semanal = ts.idtreino_semanal AND a.categoria_idcategoria = c.idcategoria and a.horario_idhorario = h.idhorario AND a.modalidade_idmodalidade = m.idmodalidade";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $aluno = "";
            $aluno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $aluno;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }
    
    public function pesquisarAluno($nome) {
        

        try {
            $sql = "SELECT a.idaluno, a.nome, a.cpf, a.rg, a.datanascimento, a.sexo, a.raca, a.email, a.website, a.endereco, a.cidade, a.cep, a.uf, a.telefone, a.nome_escola, a.endereco_escola, a.cidade_escola, a.cep_escola, a.uf_escola, a.turno, a.grau, a.datainclusao, a.desligamento, a.peso, a.altura, a.camisa, a.short, a.calcado, a.grupo_sanguineo, a.medicacao, a.mae, a.pai, a.responsavel, a.telefone_mae, a.telefone_pai, a.telefone_responsavel, a.parentesco_responsavel, a.profissao_mae, a.profissao_pai, a.profissao_responsavel, a.termo FROM aluno as a, nucleo_atendimento as na
                   WHERE a.nucleo_atendimento_idnucleo_atendimento = na.idnucleo_atendimento and  nome like '%" . $nome . "%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $aluno = "";
            $aluno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $aluno;
        } catch (PDOException $exc) {
            echo "falha na pesquisa. Erro: " . $exc->getMessage();
        }
    }

    public function salvarAluno(AlunoDTO $AlunoDTO) {
      
        try {
            $sql = "INSERT INTO aluno (nome,cpf,rg,datanascimento,sexo,raca,email,website,endereco,cidade,
                cep,uf,telefone,nome_escola,endereco_escola,cidade_escola,cep_escola,uf_escola,turno,grau,
                datainclusao,desligamento,peso,altura,camisa,short,calcado,grupo_sanguineo,medicacao,mae,
                pai,responsavel,telefone_mae,telefone_pai,telefone_responsavel,parentesco_responsavel,profissao_mae,
                profissao_pai,profissao_responsavel,termo,nucleo_atendimento_idnucleo_atendimento,nucleo_treinamento_idnucleo_treinamento,treino_semanal_idtreino_semanal,categoria_idcategoria,horario_idhorario,modalidade_idmodalidade)
                VALUES (?,?,?,?,?,?,?,?,?,?,
                        ?,?,?,?,?,?,?,?,?,?,
                        ?,?,?,?,?,?,?,?,?,?,
                        ?,?,?,?,?,?,?,
                        ?,?,?,?,?,?,?,?,?);";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $AlunoDTO->getNome());
            $stmt->bindValue(2, $AlunoDTO->getCpf());
            $stmt->bindValue(3, $AlunoDTO->getRg());
            $stmt->bindValue(4, $AlunoDTO->getDatanascimento());
            $stmt->bindValue(5, $AlunoDTO->getSexo());
            $stmt->bindValue(6, $AlunoDTO->getRaca());
            $stmt->bindValue(7, $AlunoDTO->getEmail());
            $stmt->bindValue(8, $AlunoDTO->getWebsite());
            $stmt->bindValue(9, $AlunoDTO->getEndereco());
            $stmt->bindValue(10, $AlunoDTO->getCidade());
            $stmt->bindValue(11, $AlunoDTO->getCep());
            $stmt->bindValue(12, $AlunoDTO->getUf());
            $stmt->bindValue(13, $AlunoDTO->getTelefone());
            $stmt->bindValue(14, $AlunoDTO->getNome_escola());
            $stmt->bindValue(15, $AlunoDTO->getEndereco_escola());
            $stmt->bindValue(16, $AlunoDTO->getCidade_escola());
            $stmt->bindValue(17, $AlunoDTO->getCep_escola());
            $stmt->bindValue(18, $AlunoDTO->getUf_escola());
            $stmt->bindValue(19, $AlunoDTO->getTurno());
            $stmt->bindValue(20, $AlunoDTO->getGrau());
            $stmt->bindValue(21, $AlunoDTO->getDatainclusao());
            $stmt->bindValue(22, $AlunoDTO->getDesligamento());
            $stmt->bindValue(23, $AlunoDTO->getPeso());
            $stmt->bindValue(24, $AlunoDTO->getAltura());
            $stmt->bindValue(25, $AlunoDTO->getCamisa());
            $stmt->bindValue(26, $AlunoDTO->getShort());
            $stmt->bindValue(27, $AlunoDTO->getCalcado());
            $stmt->bindValue(28, $AlunoDTO->getGrupo_sanguineo());
            $stmt->bindValue(29, $AlunoDTO->getMedicacao());
            $stmt->bindValue(30, $AlunoDTO->getMae());
            $stmt->bindValue(31, $AlunoDTO->getPai());
            $stmt->bindValue(32, $AlunoDTO->getResponsavel());
            $stmt->bindValue(33, $AlunoDTO->getTelefone_mae());
            $stmt->bindValue(34, $AlunoDTO->getTelefone_pai());
            $stmt->bindValue(35, $AlunoDTO->getTelefone_responsavel());
            $stmt->bindValue(36, $AlunoDTO->getParentesco_responsavel());
            $stmt->bindValue(37, $AlunoDTO->getProfissao_mae());
            $stmt->bindValue(38, $AlunoDTO->getProfissao_pai());
            $stmt->bindValue(39, $AlunoDTO->getProfissao_responsavel());
            $stmt->bindValue(40, $AlunoDTO->getTermo());
            $stmt->bindValue(41, $AlunoDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            $stmt->bindValue(42, $AlunoDTO->getNucleo_Treinamento_idNucleo_Treinamento());
            $stmt->bindValue(43, $AlunoDTO->getTreino_semanal_idTreino_semanal());
            $stmt->bindValue(44, $AlunoDTO->getCategoria_idCategoria());
            $stmt->bindValue(45, $AlunoDTO->getHorario_idHorario());
            $stmt->bindValue(46, $AlunoDTO->getModalidade_idModalidade());
           
             return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha ao salvar o login. Erro:" . $exc->getMessage();
        }
    }

    public function excluirAluno($idAluno) {
       
        try {
            $sql = " DELETE From aluno where idaluno = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idAluno);
            return $stmt->execute();
        } catch (Exception $exc) {
            echo "Falha ao excluir o registro. Erro" . $exc->getMessage();
        }
    }

    public function updateAlunoById(AlunoDTO $AlunoDTO) {
        

        try {
            $sql = "UPDATE aluno SET nome= ?, cpf= ?, rg= ?, datanascimento= ?, sexo= ?, raca= ?, email= ?,
                    website= ?, endereco= ?, cidade= ?, cep= ?, uf= ?, telefone= ?, nome_escola= ?, 
                    endereco_escola= ?, cidade_escola= ?, cep_escola= ?, uf_escola= ?, turno= ?, grau= ?, 
                    datainclusao= ?, desligamento= ?, peso= ?, altura= ?, camisa= ?, short= ?, calcado= ?, 
                    grupo_sanguineo= ?, medicacao= ?, mae= ?, pai= ?, responsavel= ?, telefone_mae= ?, 
                    telefone_pai= ?, telefone_responsavel= ?, parentesco_responsavel= ?, profissao_mae= ?, 
                    profissao_pai= ?, profissao_responsavel= ?,termo=?,
                    nucleo_atendimento_idnucleo_atendimento= ?,nucleo_treinamento_idnucleo_treinamento= ?,
                    treino_semanal_idtreino_semanal=?,categoria_idcategoria=?,horario_idhorario=?,modalidade_idmodalidade=? 
                    WHERE idaluno= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $AlunoDTO->getNome());
            $stmt->bindValue(2, $AlunoDTO->getCpf());
            $stmt->bindValue(3, $AlunoDTO->getRg());
            $stmt->bindValue(4, $AlunoDTO->getDatanascimento());
            $stmt->bindValue(5, $AlunoDTO->getSexo());
            $stmt->bindValue(6, $AlunoDTO->getRaca());
            $stmt->bindValue(7, $AlunoDTO->getEmail());
            $stmt->bindValue(8, $AlunoDTO->getWebsite());
            $stmt->bindValue(9, $AlunoDTO->getEndereco());
            $stmt->bindValue(10, $AlunoDTO->getCidade());
            $stmt->bindValue(11, $AlunoDTO->getCep());
            $stmt->bindValue(12, $AlunoDTO->getUf());
            $stmt->bindValue(13, $AlunoDTO->getTelefone());
            $stmt->bindValue(14, $AlunoDTO->getNome_escola());
            $stmt->bindValue(15, $AlunoDTO->getEndereco_escola());
            $stmt->bindValue(16, $AlunoDTO->getCidade_escola());
            $stmt->bindValue(17, $AlunoDTO->getCep_escola());
            $stmt->bindValue(18, $AlunoDTO->getUf_escola());
            $stmt->bindValue(19, $AlunoDTO->getTurno());
            $stmt->bindValue(20, $AlunoDTO->getGrau());
            $stmt->bindValue(21, $AlunoDTO->getDatainclusao());
            $stmt->bindValue(22, $AlunoDTO->getDesligamento());
            $stmt->bindValue(23, $AlunoDTO->getPeso());
            $stmt->bindValue(24, $AlunoDTO->getAltura());
            $stmt->bindValue(25, $AlunoDTO->getCamisa());
            $stmt->bindValue(26, $AlunoDTO->getShort());
            $stmt->bindValue(27, $AlunoDTO->getCalcado());
            $stmt->bindValue(28, $AlunoDTO->getGrupo_sanguineo());
            $stmt->bindValue(29, $AlunoDTO->getMedicacao());
            $stmt->bindValue(30, $AlunoDTO->getMae());
            $stmt->bindValue(31, $AlunoDTO->getPai());
            $stmt->bindValue(32, $AlunoDTO->getResponsavel());
            $stmt->bindValue(33, $AlunoDTO->getTelefone_mae());
            $stmt->bindValue(34, $AlunoDTO->getTelefone_pai());
            $stmt->bindValue(35, $AlunoDTO->getTelefone_responsavel());
            $stmt->bindValue(36, $AlunoDTO->getParentesco_responsavel());
            $stmt->bindValue(37, $AlunoDTO->getProfissao_mae());
            $stmt->bindValue(38, $AlunoDTO->getProfissao_pai());
            $stmt->bindValue(39, $AlunoDTO->getProfissao_responsavel());
            $stmt->bindValue(40, $AlunoDTO->getTermo());
            $stmt->bindValue(41, $AlunoDTO->getNucleo_Atendimento_idNucleo_Atendimento());
            $stmt->bindValue(42, $AlunoDTO->getNucleo_Treinamento_idNucleo_Treinamento());
            $stmt->bindValue(43, $AlunoDTO->getTreino_semanal_idTreino_semanal());
            $stmt->bindValue(44, $AlunoDTO->getCategoria_idCategoria());
            $stmt->bindValue(45, $AlunoDTO->getHorario_idHorario());
            $stmt->bindValue(46, $AlunoDTO->getModalidade_idModalidade());
            $stmt->bindValue(47, $AlunoDTO->getIdAluno());

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo "Falha na alteração. Erro:" . $exc->getMessage();
        }
    }

    public function getAlunoById(AlunoDTO $AlunoDTO) {
       
        try {
            $sql = "select a.idaluno, a.nome, a.cpf,a.rg, a.datanascimento, a.sexo, a.raca, a.email, a.website, a.endereco, a.cidade, a.cep, a.uf, 
            a.telefone, a.nome_escola, a.endereco_escola, a.cidade_escola, a.cep_escola,a.uf_escola, a.turno, a.grau, a.datainclusao, a.desligamento, 
            a.peso, a.altura, a.Camisa, a.short, a.calcado, a.grupo_sanguineo, a.medicacao, a.mae, a.pai, a.responsavel, a.telefone_mae, a.telefone_pai, 
            a.telefone_responsavel, a.parentesco_responsavel, a.profissao_mae, a.profissao_pai, a.profissao_responsavel, a.termo,a.nucleo_atendimento_idnucleo_atendimento, 
            a.nucleo_treinamento_idnucleo_treinamento, a.treino_semanal_idtreino_semanal, a.categoria_idcategoria, a.horario_idhorario, a.modalidade_idmodalidade, n.sede, 
            nt.local, ts.semana, c.idade, h.hora, m.descricao 
            from aluno as a
            inner join nucleo_atendimento as n on n.idnucleo_atendimento = a.nucleo_atendimento_idnucleo_atendimento
            inner join nucleo_treinamento as nt on nt.idnucleo_treinamento = a.nucleo_treinamento_idnucleo_treinamento
            inner join treino_semanal as ts on ts.idtreino_semanal = a.treino_semanal_idtreino_semanal
            inner join categoria as c on c.idcategoria = a.categoria_idcategoria
            inner join horario as h on h.idhorario = a.horario_idhorario
            inner join modalidade as m on m.idmodalidade = a.modalidade_idmodalidade
            where idaluno = ?;";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $AlunoDTO->getIdAluno());
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
