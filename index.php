<?php

    include 'functions/main-function.php';
    $pages = scandir('pages/');

    if (isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)) {
        $page = $_GET['page'];
    }else {
        $page = 'home';
        // echo $page;
    }


    $functions = scandir('functions/');

    if (in_array($page.'.func.php', $functions)) {
        $function = 'functions/'.$page.'.func.php';
        include $function;
    }else {
        $function = '';
        // echo $page;
    }


    $scripts = scandir('scripts/');

    if (in_array($page.'.func.js', $scripts)) {
        $script = 'scripts/'.$page.'.func.js';
        // include $script;
    }else {
        $script = '';
        // echo $page;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Finance</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <div class="toolbar">
            <?php
                include 'body/navbar.php';
            ?>
        </div>
        <?php

            include 'pages/'.$page.'.php';

        ?>
    </div>


    <script src="scripts/jquery.js"></script>
    <script src="<?= $script?>"  ></script>
    
</body>
</html>