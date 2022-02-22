<!DOCTYPE html>
<html>

<head>
  <title>Admin Panel</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="<?= BASE_URL ?>/assets/js/client.js" defer></script>
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/main.css">
</head>

<body id="body" data-id="<?= $_SESSION["id"] ?>">
  <nav class="navbar navbar-light bg-light">
    <div class="navFlex">
      <a class="navbar-brand" href="cliente">
        <img src="https://cdn-icons-png.flaticon.com/512/2453/2453333.png" width="70" height="30" class="d-inline-block align-top" alt="">
      </a>
      <p class="navbar-brand">!Bienvenido de nuevo <?php if (isset($_SESSION["client"])) {
                                                      echo $_SESSION["client"];
                                                    } ?>!</p> <a class="nav-link" href="cliente">Inicio</a> <a class="nav-link" href="statistics.php">Estadisticas</a>
    </div><a href="<?= BASE_URL ?>/clientLog/logOUt"><button class="btn btn-danger">Log Out</button></a>
  </nav>
  <div class="alert alert-<?php if (isset($this->added)) {
                            echo "success";
                          } else if (isset($this->failed)) {
                            echo "danger";
                          }; ?>"><?php if (isset($this->added)) {
                                                                                                                                echo $this->added;
                                                                                                                              } else if (isset($this->failed)) {
                                                                                                                                echo $this->failed;
                                                                                                                              }; ?></div>
  <main id="container" class="d-flex justify-content-center">
    <div id="listHead">

    </div>
  </main>
</body>

</html>