<!DOCTYPE html>
<html lang="pt-br" Xmanifest=""appcache="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Atendente</title>
    <meta name="description" content="App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main.css" rel="stylesheet" type="text/css">

    <link rel="manifest" href="manifest.json">

    <!--MUDAR IMAGEM E COR -->
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="img/icon.png">
    <meta name="theme-color" content="#F77F00">

    <!--MUDAR IMAGEM -->
    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="App em PHP">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon-precomposed" href="img/icon.png">

    <!--MUDAR IMAGEM E COR -->
    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/icon.png">
    <meta name="msapplication-TileColor" content="#F77F00">

</head>
<body>

<div class="header">
</div>

<div class="text">
            <h1>Customer Care and Support</h1>
            <br>
            <h2>Gestão de Atendentes</h2>
			<br>
            <h3> Escolha o tipo de mudança que deseja efetuar:</h3>
			
</div>

<div class="container1">
		<br>
		<form method="POST" action="incluir_atendente.php"> 
		<fieldset><br>
			<label for="nome"><b> Nome Completo:   </b></label>
			<input type="text" id="nome" name="nome" size="60" maxlength="60" />
			<span class="style1">*</span><br>
			<br>
		
			<label for="id"><b> ID: </b></label>
			<input name="id" type="text" id="id" size="10"/>
			<span class="style1">*</span><br>
			<br>
    <div class="button-app1">

        <?php
            echo "<a href='incluir_atendente.php?value=incluir'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Incluir' checked/></a><br/>";
         ?>
		</div>
	<div class="button-app2">
		<?php
			echo "<a href='buscar_atendente.php?value=buscar'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Buscar' checked/></a><br/>";
        ?>
		</div>
	<div class="button-app3">
		<?php
			echo "<a href='alterar_atendente.php?value=alterar'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Alterar' checked/></a><br/>";
        ?>
		</div>
	<div class="button-app4">
		<?php
			echo "<a href='deletar_atendente.php?value=deletar'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Deletar' checked/></a><br/>";
            ?>
        </div>
    </div>

<script src="js/main.js"></script>
<script src="js/install.js"></script>
</body>

</html>