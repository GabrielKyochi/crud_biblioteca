<?php

include '../../db/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data_emprestimo = $_POST['data_emprestimo'];
    $data_devolucao = $_POST['data_devolucao'];

    $sql = " INSERT INTO emprestimos (data_emprestimo,data_devolucao) VALUE ('$data_emprestimo','$data_devolucao')";

    if ($conn->query($sql) === true) {
        echo "Novo registro de empréstimo criado com sucesso.";
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
    <title>Criar empréstimo</title>
</head>

<body>

    <form method="POST" action="create.php">

        <label for="data_emprestimo">Data de empréstimo:</label>
        <input type="date" name="data_emprestimo" required>

        <label for="data_devolucao">Data de devolução:</label>
        <input type="date" name="data_devolucao" required>

        <input type="submit" value="Adicionar">

    </form>

</body>

</html>