<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arcade Games</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="sass/styles.css">
</head>

<body>
  <?php include 'includes/header.php'; ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/logo3.jpeg" class="d-block w-100" alt="Arcade Games">
      </div>
      <div class="carousel-item">
        <img src="assets/space_invaders4.png" class="d-block w-100" alt="Space Invaders">
      </div>
      <div class="carousel-item">
        <img src="assets/pac_man1.png" class="d-block w-100" alt="Pacman">
      </div>
      <div class="carousel-item">
        <img src="assets/snake2.jpg" class="d-block w-100" alt="Snake">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <ul class="list-unstyled">
    <!-- Renderização alimentada pela api dos jogos posteriormente -->
    <li class="card">
      <img src="assets/space_invaders6.png" class="card-img-top" alt="Space Invaders">
      <div class="card-body">
        <h5 class="card-title">Space Invaders</h5>
        <a href="game.php?game=space_invaders" class="btn btn-primary">Detalhes</a>
      </div>
    </li>
    <li class="card">
      <img src="assets/pac_man8.jpg" class="card-img-top" alt="Pacman">
      <div class="card-body">
        <h5 class="card-title">Pacman</h5>
        <a href="game.php?game=pac_man" class="btn btn-primary">Detalhes</a>
      </div>
    </li>
    <li class="card">
      <img src="assets/snake7.jpg" class="card-img-top" alt="Snake">
      <div class="card-body">
        <h5 class="card-title">Snake</h5>
        <a href="game.php?game=snake" class="btn btn-primary">Detalhes</a>
      </div>
    </li>
    <li class="card">
      <img src="assets/space_invaders1.png" class="card-img-top" alt="Space Invaders">
      <div class="card-body">
        <h5 class="card-title">Space Invaders</h5>
        <a href="game.php?game=space_invaders" class="btn btn-primary">Detalhes</a>
      </div>
    </li>
  </ul>

  <?php include 'includes/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>