<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OWL</title>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/mentor/css/style.css') ?>">
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.js') ?>"></script>
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-default shadow" style="height: 75px;">
    <div class="container">
      <a href="<?= base_url('/') ?>" class="navbar-brand">OWL</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          <li class="nav-item ms-2"><a class="nav-link" href="<?= base_url('/') ?>">Acceuil</a></li>
          <li class="nav-item ms-2"><a class="nav-link" href="">Matières</a></li>
          <li class="nav-item ms-2"><a class="nav-link" href="">Catégorie</a></li>
          <li class="nav-item ms-2"><a class="nav-link" href="">Panier</a></li>

          <div class="topbar-divider d-none d-sm-block"></div>

          <li class="nav-item dropdown ms-4">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-profile rounded-circle me-3" src="<?= base_url('assets/img/uploads/' . $data->chemin) ?>" style="object-fit: cover; height: 2rem; width: 2rem">
              <?= $data->prenom ?>
              <?= $data->nom; ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="userDropdown" id="usDropdown">
              <li><a class="dropdown-item" href="#">Créer un CV</a></li>
              <li><a class="dropdown-item" href="#">Paramètre du compte</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Déconnexion</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <h5 class="modal-title" id="exampleModalLabel">Déconnexion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Voullez vous vraiment vous déconnecter?</p>
        </div>
        <div class="modal-footer border-top-0">
          <a class="btn" href="<?= base_url('/deconnexion') ?>">Déconnecter</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>