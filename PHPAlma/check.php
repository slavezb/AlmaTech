<?php
$value = $_GET['value'];

if ($value == 'Incluir'){
    $page= "Refresh:2; url='home.php'";
}

?>

<!doctype html>
<html lang="pt-br" Xmanifest="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Página Inicial</title>
    <meta name="description" content="App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">

    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#F77F00">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="App em PHP">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileColor" content="#F77F00">

</head>
<body>
<div class="current-page">


    <main class="check">

        <div class="topo-fixo z-depth-1">
            <div class="valign-wrapper amber darken-2 white-text">

                    <h5 class="titulo"> Redirecionando...</h5>

                <ul class="tabs amber darken-2">

                    <div class="indicator"></div>

                </ul>
            </div>
        </div>
        <?php

        echo "<h2><center> Operação Realizada com Sucesso!</center></h2>";
        echo "<center>Redirecionando...</center>";
        header($page);

        ?>


    </main>

</div><!--/.current-page-->

<script src="js/main.js"></script>
<script src="js/install.js"></script>

</body>
</html>

