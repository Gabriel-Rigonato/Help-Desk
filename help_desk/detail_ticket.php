<?php
require_once("validation.php");

$userId = $_SESSION['id'];
$adminValue = 1;

?>

<?php

$file = fopen("ticket.txt", 'r');
$arrayData = [];

while (!feof($file)) { //feof test the end of life to files 

  $data = fgets($file);

  $formattedData = explode(':', $data);

  if ($userId == $adminValue) {
    array_push($arrayData, $data);
  } else {
    if ($formattedData[0] == $userId) {
      echo "cai aqui";
      array_push($arrayData, $data);
    }
  }
}

fclose($file);

?>

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
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

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <?php

          foreach ($arrayData as $data) {

            $formattedData = explode(':', $data);

            if (!empty($data)) {
          ?>
              <div class="card-body">

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?= $formattedData[1] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $formattedData[2] ?></h6>
                    <p class="card-text"><?= $formattedData[3] ?></p>

                  </div>
                </div>
            <?php
            }
          }
            ?>

            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php">
                  <button class=" btn btn-lg btn-warning btn-block" type="button">Voltar</button>
                </a>
              </div>
            </div>
              </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>