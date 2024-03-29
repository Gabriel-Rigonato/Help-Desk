<?php
require_once("validation.php");
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-abrir-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <form method="post" action="ticket.php">
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" placeholder="Título" name="title">
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="category">
                      <option value="1">Criação Usuário</option>
                      <option value="2">Impressora</option>
                      <option value="3">Hardware</option>
                      <option value="4">Software</option>
                      <option value="5">Rede</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" name="description"></textarea>
                  </div>
                  <div class="row mt-5">
                    <div class="col-6">
                      <a href="home.php">
                        <button class="btn btn-lg btn-warning btn-block" type="button">Voltar</button>
                      </a>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>