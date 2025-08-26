<?php

include '../../db/db.php';

$sql = "SELECT * FROM livros";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Titulo </th>
            <th> Genero </th>
            <th> Ano de publicacao </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['titulo']} </td>
                <td> {$row['genero']} </td>
                <td> {$row['ano_publicacao']} </td>
                <td> 
                    <a href='update.php?id={$row['id']}'>Editar</a>
                    <a href='delete.php?id={$row['id']}'>Excluir</a>
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro de livro encontrado.";
}

$conn -> close();

echo "<a href='create.php'>Inserir novo registro de livro</a>";