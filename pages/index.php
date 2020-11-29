<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="../style/style.css">
  <title>Menu Responsivo</title>
</head>

<body>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../script/script.js"></script>

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Laís Silva MakeUp</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a id="noivas" href="#">Noivas</a></li>
          <li><a id="studio" href="#">Studio</a></li>
          <li><a id="projetos" href="#">Projetos</a></li>
          <li><a id="contatos" href="#">Contato</a></li>
        </ul>
        <ul class="sidenav" id="slide-out">
          <li><a class="sidenav-close" id="noivass" href="#">Noivas</a></li>
          <li><a class="sidenav-close" id="studios" href="#">Studio</a></li>
          <li><a class="sidenav-close" id="projetoss" href="#">Projetos</a></li>
          <li><a class="sidenav-close" id="contatoss" href="#">Contato</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
    <h1 class="eu">Eu...</h1>
    <div class="sobre">
      <div class="imagem-sobre">
        <img src="../img/laisperfil.jpg" alt="" class="imgsobre">
        <div class="sobre-text">
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ex laudantium excepturi sed itaque tempora voluptate,
            esse labore nulla nesciunt neque quasi omnis quia quaerat maxime delectus dolorem assumenda
            quam nobis!          
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ex laudantium excepturi sed itaque tempora voluptate,
            esse labore nulla nesciunt neque quasi omnis quia quaerat maxime delectus dolorem assumenda
            quam nobis!          
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ex laudantium excepturi sed itaque tempora voluptate,
            esse labore nulla nesciunt neque quasi omnis quia quaerat maxime delectus dolorem assumenda
            quam nobis!          
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Ex laudantium excepturi sed itaque tempora voluptate,
            esse labore nulla nesciunt neque quasi omnis quia quaerat maxime delectus dolorem assumenda
            quam nobis!
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>