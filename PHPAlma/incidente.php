<!DOCTYPE html>
<html lang="pt-br" Xmanifest=""appcache="appcache.manifest">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Incidentes </title>
    <meta name="description" content="App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main.css" rel="stylesheet" type="text/css">

    <link rel="manifest" href="manifest.json">

    <!--MUDAR COR -->
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#F77F00">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="App em PHP">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!--MUDAR COR -->
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
            <h3> Escolha o tipo de mudança que deseja efetuar:</h3>
			
</div>


<div class="container1">
		<br>
		<form method="POST" action="incluir_incidente.php"> 
		<fieldset><br>
			<label for="id"><b> ID: </b></label>
			<input name="id" type="text" id="id" size="10"/>
			<span class="style1">*</span><br>
			<br>
			
			<label for="atentende"><b> ID do Atendente:   </b></label>
			<input type="text" id="atendente" name="atendente" size="10" maxlength="60" />
			<span class="style1">*</span><br>
			<br>			
			
			<label for="cliente"><b> ID do Cliente: </b></label>
			<input name="cliente" type="text" id="cliente" size="10"/>
			<span class="style1">*</span><br>
			<br>
			
			<label for="descricao"><b> Descrição do Incidente: </b></label>
			<input name="descricao" type="text" id="descricao" size="124"/>
			<span class="style1">*</span><br>
			<br>	

			<label for="status"><b> Status: </b></label>
			<input name="status" type="text" id="status" size="16"/>
			<span class="style1">*</span><br>
			<br>	

			<label for="creation_time"><b> Data de Criação: </b></label>
			<input name="creation_time" type="text" id="creation_time" size="10"/>
			<span class="style1">*</span><br>
			<br>
    <div class="button-app1">
			
        <?php
        echo "<a href='incluir.php?value=incluir'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Incluir' checked/></a><br/>";
		 ?>
		</div>
	<div class="button-app2">
		<?php
        echo "<a href='buscar.php?value=buscar'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Buscar' checked/></a><br/>";
        ?>
		</div>
	<div class="button-app3">
		<?php
		echo "<a href='alterar.php?value=alterar'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Alterar' checked/></a><br/>";
        ?>
		</div>
	<div class="button-app4">
		<?php
		echo "<a href='deletar.php?value=deletar'><input type='submit' class='btn btn-info' id='btn-1' name='tipos-crud' value='Deletar' checked/></a><br/>";
        ?>
    </div>
</div>

<script src="js/main.js"></script>
<script src="js/install.js"></script>
</body>

</html>