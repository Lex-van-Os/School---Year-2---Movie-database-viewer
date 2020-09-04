<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include '../templates/headfunctions.php'; ?>
</head>
<body>
<div class="imdb-wrapper container-fluid">
    <?php

    include '../templates/header.php';
    include '../templates/main.php';
    include '../templates' . $_GET['page'] . '.php';

    if (isset($_GET['page']))
        $page = $_GET['page'];
    else
        $page = 'home';
    if (preg_match('/^[a-z0-9\-]+$/', $page))
    {
        $inserted = include('pages/' . $page . '.php');
        if (!$inserted)
            echo("De pagina die u zoekt bestaat niet!");
    }
    else
        echo("Foute pagina gegevens");

    include '../templates/footer.php';
    ?>

</div>
</body>
</html>