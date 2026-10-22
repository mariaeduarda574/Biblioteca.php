
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$base_url = "/projeto_biblioteca/";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
</head>
<body>

<header>
    <h1>Sistema de Biblioteca</h1>

    <nav>
        <a href="<?= $base_url ?>index.php">Início</a>

        <?php if (isset($_SESSION["usuario_id"])): ?>
            <a href="<?= $base_url ?>livros/listar.php">
                Livros
            </a>

            <a href="<?= $base_url ?>logout.php">
                Sair
            </a>
        <?php else: ?>
            <a href="<?= $base_url ?>login.php">Entrar</a>
        <?php endif; ?>
    </nav>
</header>

<main class="container">
