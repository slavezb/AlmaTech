<!DOCTYPE html>
<html lang="pt-br" Xmanifest=""appcache="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Página Inicial</title>
    <meta name="description" content="App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main.css" rel="stylesheet" type="text/css">

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

<div class="header">
</div>

<div class="text">
            <h1>Customer Care and Support</h1>
            <br>
            <h2>Gestão de Incidentes</h2>
			<br>
            <h3> Escolha uma categoria para efetuar uma mudança:</h3>
			
</div>

<div class="container">
    <div class="button-app1">
        <?php
            echo "<a href='atendente.php?value=atendente'><input type='submit' class='btn btn-info' id='btn-1' name='tipos' value='Atendente' checked/></a><br/>";
         ?>
    </div>
	<div class="button-app2">
		<?php
		echo "<a href='incidente.php?value=incidente'><input type='submit' class='btn btn-info' id='btn-1' name='tipos' value='Incidente' checked/></a><br/>";
        ?>
    </div>
	<div class="button-app3">
		<?php
		echo "<a href='cliente.php?value=clilente'><input type='submit' class='btn btn-info' id='btn-1' name='tipos' value='Cliente' checked/></a><br/>";
		?>
	</div>
</div>

<div class="footer">
    <div class="nav2">
    <ul>
		<li><a href="https://www.almatech.es/nosotros/"> Alma Tech </a></li> 
		<li> Desenvolvido por Bruna Slavez </li>             
    </ul>
    </div>    
</div>  

<script src="js/main.js"></script>
<script src="js/install.js"></script>
</body>

</html>