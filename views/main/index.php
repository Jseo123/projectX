<!DOCTYPE html>
<html>

<head>
    <title>Pide ya!</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/main.css">
</head>

<body>
<nav class="navbar navbar-light bg-light"><div class="navFlex">
    <a class="navbar-brand" href="panel.php">
      <img src="https://cdn-icons-png.flaticon.com/512/2453/2453333.png" width="70" height="30" class="d-inline-block align-top" alt="">
    </a><p class="navbar-brand">!Bienvenido de nuevo!</p> <a class="nav-link" href="panel.php">Inicio</a> <a class="nav-link" href="statistics.php">Estadisticas</a> </div><a href="./control/adminLog.php?logOut"><button class="btn btn-danger">Log Out</button></a>
  </nav>
    <main class="logMain">

            <div class="client border">
                <a href="<?= BASE_URL ?>" class="nav-link redirect ">
                    <p>Cliente </p>
                </a>
            </div>
            <div class="admin border"> <a href="<?= BASE_URL . "/adminLog" ?>" class="nav-link redirect ">
                    <p>Administrador</p>
                </a></div>

    </main>

</body>

</html>