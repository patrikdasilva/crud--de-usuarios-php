<link rel="stylesheet" href="style.css">
<?php 
include_once 'conexao.php';

try {
    // Execução da instrução sql
    $sql = $conectar->query("
        SELECT * FROM LOGIN
    ");
    echo "<a href='formCadastro.php'>Novo cadastro</a><br><br>
        Listagem de usuários";

    echo "<table border='1' class='table'>
            <tr>
                <td>Nome</td> 
                <td>Login</td> 
                <td>Ações</td> 
            </tr>";
    while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
        echo " 
            <tr>
                <td>$linha[nome]</td> 
                <td>$linha[login]</td> 
                <td>
                    <a href='formEditar.php?id=$linha[id_login]'>Editar</a> - 
                    <a href='excluir.php?id=$linha[id_login]' >Excluir</a>
                </td> 
            </tr>
        ";
    }
    echo " </table>";
    echo $sql->rowCount() . " Registros exibidos";

} catch(PDOException $e) {
    echo "Erro ao listar usuarios" . $e.getMessage();
}
?>