<?php

include '../../db/db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano_publicacao = $_POST['ano_publicacao'];

    $sql = "UPDATE livros SET titulo ='$titulo',genero ='$genero', ano_publicacao = '$ano_publicacoa' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro do livro atualizado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM livros WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar livros</title>
</head>

<body>

    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">

         <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" required>

        <label for="genero">Gênero:</label>
        <input type="text" name="genero" required>

        <label for="ano_publicacao">Ano de publicação:</label>
        <input type="number" name="ano_publicacao" required>

        <input type="submit" value="Adicionar">

    </form>s

</body>

</html>
