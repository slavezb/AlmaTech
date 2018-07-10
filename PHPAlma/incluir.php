

<!DOCTYPE html>
<html lang="pt-br" Xmanifest=""appcache="appcache.manifest">
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

<div class="header">
</div>

<div class="text">
            <h1><u>Customer Care and Support</u></h1>
            <br>
            <h2>Gestão de Atendentes</h2>
			<br>
            <h3> Cadastro de Novos Atendentes:</h3>
			
</div>

<div class="entriest1">
	<div class="postet1">
		<br>
		<form method="POST" action="etapa2.php"> 
		<fieldset><br>
			<label for="nome"><b> Nome Completo:   </b></label>
			<input type="text" id="nome" name="nome" size="60" maxlength="60" />
			<span class="style1">*</span><br>
			<br>
		
			<label for="id"><b> ID: </b></label>
			<input name="id" type="text" id="id" size="10"/>
			<span class="style1">*</span><br>
			<br>

			<input type="submit" value="Adicionar Atendente" name="enviar" >
			<span class="style1"><i>* Campos com * são obrigatórios!</i></span><br>
			<br>
			</fieldset>
		</form>
	</div><br>
	
</div>


<script src="js/main.js"></script>
<script src="js/install.js"></script>
</body>

</html>