<link rel="stylesheet" href="style.css">
<?php 
include_once 'conexao.php';

$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$sql = $conectar->query("
    SELECT *
    FROM login 
    WHERE id_login = $id
");
$linha = $sql->fetch(PDO::FETCH_ASSOC);
?>

<form action="editar_data.php" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?php echo $linha['nome']?>">
    <label for="login">Login</label>
    <input type="text" name="login" id="login" value="<?php echo $linha['login']?>">
    <input type="hidden" name="id" value="<?php echo $linha['id_login']?>">
    <button type="submit">Editar</button>
</form>