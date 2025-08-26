<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE leitores SET nome ='$name',email ='$email',telefone = '$telefone' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro de leitores atualizado com sucesso.";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM leitores WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar leitores</title>
</head>

<body>

    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $row['name'];?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email'];?>" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $row['telefoness'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

</body>

</html>