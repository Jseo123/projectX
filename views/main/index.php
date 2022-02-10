<!DOCTYPE html>
<html>

<head>
    <title>Pide ya!</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/main.css">
</head>

<body>

    <main class="logMain">
<?php echo date("Y-m-d"); ?>
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