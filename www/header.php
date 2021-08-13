<!DOCTYPE html>
<?php $url = $_SERVER['REQUEST_URI']; ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/lib/slick.css">
    <link rel="stylesheet" href="assets/css/main.min.css">

    <title>Pack Tubos | <?php echo $title; ?></title>
</head>
<body>
    <div class="loading">
        <img src="assets/img/logo.png" alt="Logo Pack Tubos">
    </div>
    <header class="header">
        <div class="wrapper header__container">
            <a href="#">
                <h1>Pack Tubos</h1>
                <img class="header__logo" src="assets/img/logo.png" alt="Pack Tubos">
            </a>
            <nav class="header__nav">
                <a class="header__nav--active" href="index">Home</a>
                <a href="<?php echo $url; ?>pages-template/visao-missao">Visão | Missão</a>
                <a href="produtos.html">Produtos</a>
                <a href="politica-de-qualidade.html">Política de Qualidade</a>
                <a href="logistica.html">Logística</a>
                <a href="atendimento.html">Atendimento</a>
            </nav>
        </div>
    </header>