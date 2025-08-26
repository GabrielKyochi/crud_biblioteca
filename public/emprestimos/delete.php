<?php

include '../../db/db.php';
$id = $_GET['id'];

$sql = " DELETE FROM emprestimos WHERE id=$id ";

if ($conn->query($sql) === true) {
    echo "Registro excluído de emprestimo com sucesso.";
} else {
    echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn -> close();
exit();