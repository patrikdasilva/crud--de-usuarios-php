<?php

try {
    // Faz conexão com o banco de dados
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo","root","");

} catch(PDOException $e) {
    // Caso ocorra algum erro na conexão com o banco
    echo 'Falha na conexão: ' . $e->getMessage();
}
