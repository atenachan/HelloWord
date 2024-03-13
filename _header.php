<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/global.css" />
  <link rel="stylesheet" href="assets/css/<?php echo $page["css"] ?>"/>
  <link rel="shortcut icon" href="assets/img/jade.png" type="image/x-icon">
  <title>Hello Word - <?php echo $page["title"] ?></title>
</head>

<body>
  <div id="wrap">
    <header>
      <div class="header-logo-title">
        <a href="index.php">
          <img src="assets/img/jade.png" alt="Logotipo de Hello World" />
        </a>
        <div class="header-title">
          <h1><?php echo $site["title"] ?></h1>
          <small><?php echo $site["slogan"] ?></small>
        </div>
      </div>
      <div class="header-search">
        <form action="" method="get">
          <input type="search" name="q" id="search" />

          <input id="busca" type="image" src="assets/img/busca.png" alt="Submit" placeholder="Procurar..." />

          <!-- <button type="submit"><i class="fa-solid fa-magnifying-glass fa-fw"></i></button>  -->
        </form>
      </div>
    </header>

    <nav>
      <a href="index.php" title="Página Inicial">
        <i class="fa-solid fa-house fa-fw"></i>
        <span>Início</span>
      </a>

      <a href="contacts.php" title="Faça contato">
        <i class="fa-solid fa-comment fa-fw"></i>
        <span>Contatos</span>
      </a>

      <a href="about.php" title="Informações">
        <i class="fa-solid fa-circle-info fa-fw"></i>
        <span>Sobre</span>
      </a>

      <a id="userAccess" href="login.php" title="Logue-se">
        <img id="userImg" scr="" alt="">
                <i id="userIcon" class="fa-solid fa-right-to-bracket fa-fw"></i>
                <span id="userLabel">Login</span>
            </a>

    </nav>

    <main>
