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

    <title>Home</title>
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

    <main class="container">
      <div class="row mt-5">
        <div class="col-12 d-flex flex-row justify-content-between align-items-center">
          <h2 class="fw-bold text-muted">Users</h2>

          <a href="createUser" class="btn btn-outline-info">
            <i class="bi bi-plus-circle fs-5">&nbsp;Novo</i>
          </a>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-12 table-responsive">
          <table class="table table-dark table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col" class="p-3">Name</th>
                <th scope="col" class="p-3">Email</th>
                <th scope="col" class="text-center p-3"><i class="fs-5 text-info bi bi-pencil"></i></th>
                <th scope="col" class="text-center p-3"><i class="fs-5 text-danger bi bi-trash"></i></th>
              </tr>
            </thead>
            <?php foreach ($data as $key => $value) : ?>
            <tbody>
              <tr>
                <td class="p-3 text-nowrap"><?= $value->name ?></td>
                <td class="p-3 text-nowrap"><?= $value->email ?></td>
                <td class="text-center py-3">
                  <a href="#" class="text-dark btn text-decoration-none me-3 badge bg-info">
                    Editar
                  </a>
                </td>
                <td class="text-center py-3">
                  <form method="delete" action="<?= base_url('deleteUser/'.$value->cd) ?>">
                    <button class="text-white btn text-decoration-none me-3 badge bg-danger">
                      Deletar
                    </button>
                  </form>
                </td>
              </tr>
            </tbody>
            <?php endforeach ?>
          </table>
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
