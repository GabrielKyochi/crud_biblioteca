<?php

include '../../db.php';
$id = $_GET['id'];

$sql = " DELETE FROM livros WHERE id=$id ";

if ($conn->query($sql) === true) {
    echo "Registro de livro excluído com sucesso.";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();