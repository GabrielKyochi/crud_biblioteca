<?php

include '../../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano_publicacao = $_POST['ano_publicacao'];

    $sql = " INSERT INTO livros (titulo, genero, ano_publicacao) VALUE ('$titulo','$genero', '$ano_publicacao')";

    if ($conn->query($sql) === true) {
        echo "Novo livro registrado com sucesso.";
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
    <title>Criar livro</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" required>

        <label for="genero">Gênero:</label>
        <input type="text" name="genero" required>

        <label for="ano_publicacao">Ano de publicação:</label>
        <input type="number" name="ano_publicacao" required>

        <input type="submit" value="Adicionar">

    </form>

</body>

</html>