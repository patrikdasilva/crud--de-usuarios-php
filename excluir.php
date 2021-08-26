<?php 

include_once 'conexao.php';

try {
    // recebendo os dados
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
 
    $sql = $conectar->prepare("  
        DELETE 
        FROM login 
        WHERE id_login = :id
    ");
    $sql->bindParam(':id', $id);
    $sql->execute();
    header('location: index.php');

} catch(PDOException $e) {
    echo 'Erro ao cadastrar usuário ' . $e->getMessage();
}
?>