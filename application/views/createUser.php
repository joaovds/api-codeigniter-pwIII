<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <title>Create User</title>
  </head>
  <body style="background-color: #121212;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarToggler"
          aria-controls="navbarToggler"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <i class="bi bi-flower2 text-info navbar-brand fs-3 d-md-none"></i>

        <div id="navbarToggler" class="collapse navbar-collapse">
          <i class="bi bi-flower2 text-info navbar-brand fs-3 d-none d-lg-inline-block"></i>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="<?= base_url() ?>">Users</a>
            </li>
          </ul>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
            <button class="btn btn-outline-info" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row mt-5">
        <div class="col-12 d-flex flex-row justify-content-between align-items-center">
          <h2 class="fw-bold text-muted">Novo User</h2>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-12 text-light">
          <form class="row g-3" action="<?= base_url('create') ?>" method="post">
            <div class="col-md-6">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control form-control-lg" name="name">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg" name="email">
            </div>
            <div class="col-md-6">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control form-control form-control-lg" name="password">
            </div>
            <div class="col-md-6"></div>

            <div class="d-grid gap-2 col-md-4 mt-2 mt-md-5">
              <button type="submit" class="btn btn-primary">Criar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
