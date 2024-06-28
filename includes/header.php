<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
      <img src="assets/logo1.jpeg" alt="Arcade Games Logo" style="width: 3.5rem; height: auto;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Equipe</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Jogos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- Dropdown do header: renderizar depois dados da API de games -->
            <a class="dropdown-item" href="game.php?game=space_invaders">Space Invaders</a>
            <a class="dropdown-item" href="game.php?game=pac_man">Pacman</a>
            <a class="dropdown-item" href="game.php?game=snake">Snake</a>
          </div>
        </li>
      </ul>
      <a class="btn btn-outline-primary my-2 my-sm-0" href="mailto:amanda.dolci@gmail.com">Entre em contato</a>
    </div>
  </nav>
</header>