<?php
include '../db/db.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <header>

    </header>

    <main class="flex">
    <div>
        <a href="../public/livros/read.php">
        <button class="quadrado_menu"s>Livros</button>
        </a>
    </div>

    <div>
         <a href="../public/autores/read.php">
        <button class="quadrado_menu">Autores</button>
         </a>
    </div>

    <div>
         <a href="../public/leitores/read.php">
        <button class="quadrado_menu">Leitores</button>
         </a>
    </div>

    <div>
         <a href="../public/emprestimos/read.php">
        <button class="quadrado_menu">Empréstimos</button>
         </a>
    </div>

    </main>

    <footer>

    </footer>
    
</body>
</html>