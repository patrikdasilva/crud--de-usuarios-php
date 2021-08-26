<link rel="stylesheet" href="style.css">

<?php
include_once 'conexao.php';
try {
    // recebendo os dados
    $nome = filter_var($_POST['nome']);
    $login = filter_var($_POST['login']);
    
    $sql = $conectar->prepare("  
        INSERT INTO login (nome, login)
        VALUES (:nome, :login)
    ");
    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':login', $login);
    $sql->execute();

    header('location: index.php');

} catch(PDOException $e) {
    echo 'Erro ao cadastrar usuário ' . $e.getMessage();
}
?>