<?php

include '../../db/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = " INSERT INTO leitores (nome,email,telefone) VALUE ('$nome','$email','$telefone')";

    if ($conn->query($sql) === true) {
        echo "Novo registro de leitor criado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
}

?>


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar leitor</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" requiredss>

        <input type="submit" value="Adicionar">

    </form>

</body>

</html>