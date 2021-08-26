<link rel="stylesheet" href="style.css">

<?php
include_once 'conexao.php';
try {
    // recebendo os dados
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_var($_POST['nome']);
    $login = filter_var($_POST['login']);
    
    $sql = $conectar->prepare("  
        UPDATE login 
        SET nome = :nome,  login = :login
        WHERE id_login = :id
    ");
    $sql->bindParam(':id', $id);
    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':login', $login);
    $sql->execute();

    header('location: index.php');

} catch(PDOException $e) {
    echo 'Erro ao cadastrar usuário ' . $e->getMessage();
}
?>