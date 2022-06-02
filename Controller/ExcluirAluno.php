  <?php
        require_once '../Dao/AlunoDAO.php';

$idAluno = $_GET["id"];
//echo $idAluno;

$AlunoDAO = new AlunoDAO();
$AlunoDAO->excluirAluno($idAluno);

echo "<script>";
echo "window.location.href = '../View/listarAlunos.php';";
echo "</script> ";
        ?>
