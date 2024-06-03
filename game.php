<?php
$game = $_GET['game'];
$games = [
  "space_invaders" => [
    "title" => "Space Invaders",
    "description" => "Space Invaders foi um dos primeiros jogos de tiro com gráfico bidimensional. O objetivo é destruir ondas de naves com uma espaçonave humana para ganhar o maior número de pontos possível.",
    "image" => "assets/space_invaders3.jpg",
    "screenshots" => ["assets/space_invaders5.png"]
  ],
  "pac_man" => [
    "title" => "Pac-Man",
    "description" => "Pac-man foi produzido originalmente para Arcade no início dos anos 1980, tornou-se um dos jogos mais jogados e populares no momento, tendo versões modernas para diversos consoles e continuações para tantos outros, inclusive na atualidade. A mecânica do jogo é simples: o jogador era uma cabeça redonda com uma boca que se abre e fecha, posicionado em um labirinto simples repleto de pastilhas e 4 fantasmas que o perseguiam. O objetivo era comer todas as pastilhas sem ser alcançado pelos fantasmas, em ritmo progressivo de dificuldade.",
    "image" => "assets/pac_man2.png",
    "screenshots" => ["assets/pac_man3.jpg", "assets/pac_man7.jpg", "assets/pac_man4.png"/* , "assets/pac_man5.png" */]
  ],
  "snake" => [
    "title" => "Snake",
    "description" => "Snake é um gênero de videogame de ação em que o jogador manobra o fim de uma linha crescente, geralmente com o tema de uma cobra. O jogador deve evitar que a cobra colida com outros obstáculos e consigo mesma, o que fica mais difícil à medida que a cobra se alonga.",
    "image" => "assets/snake1.jpg",
    "screenshots" => ["assets/snake4.jpg", "assets/snake5.jpg", "assets/snake6.jpg", "assets/snake3.png"]
  ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $games[$game]['title']; ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="sass/styles.css">
</head>

<body>
  <?php include 'includes/header.php'; ?>

  <div class="container mt-4">
    <!-- <h1><?php echo $games[$game]['title']; ?></h1> -->
    <img src="<?php echo $games[$game]['image']; ?>" class="img-fluid" alt="<?php echo $games[$game]['title']; ?>">
    <p><?php echo $games[$game]['description']; ?></p>

    <h2>Galeria de fotos:</h2>
    <div class="row">
      <?php foreach ($games[$game]['screenshots'] as $screenshot) : ?>
        <div class="col-md-4">
          <img src="<?php echo $screenshot; ?>" class="img-fluid" alt="Screenshot">
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>