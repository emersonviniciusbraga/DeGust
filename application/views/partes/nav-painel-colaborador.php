  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('')?>index.php/Inicial/#">DeGust</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('')?>index.php/PainelColaborador/#"><?= $_SESSION['logged_user']['nome']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('')?>index.php/LoginColaborador/logout">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>