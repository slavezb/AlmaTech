<?php

include 'conecta_mysql.php';

$id = $_POST["id"];
$atendente = $_POST["atendente"];
$cliente = $_POST["cliente"];
$descricao = $_POST["descricao"];
$status = $_POST["status"];
$creation_time = $_POST["creation_time"];

if (empty($atendente) OR strstr($atendente, ' ')==TRUE){
	echo "Preencher o campo ATENDENTE corretamente.</br>";
		$erro = 1;
	}
		
if (strlen($id) <2 OR strstr($id, ' ')==TRUE){
	echo "Preencher o campo ID corretamente.</br>";
		$erro = 1;
	}
	
if (empty($cliente) OR strstr($cliente, ' ')==TRUE){
	echo "Preencher o campo CLIENTE corretamente.</br>";
		$erro = 1;
	}
		
if (strlen($descricao) <2 OR strstr($descricao, ' ')==TRUE){
	echo "Preencher o campo DESCRICAO corretamente.</br>";
		$erro = 1;
	}
	
if (strlen($status) <2 OR strstr($status, ' ')==TRUE){
	echo "Preencher o campo STATUS corretamente.</br>";
		$erro = 1;
	}
	
if (strlen($creation_time) <2 OR strstr($creation_time, ' ')==TRUE){
	echo "Preencher o campo DATA corretamente.</br>";
		$erro = 1;
	}	

if ($erro == 0) {
    $msg = "Incluido com sucesso!";
}else{
    $msg = "Erro ao incluir!";
}
?>

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
<?php

$pageid = $_GET['pageid'];
$categoria = 'faculdades';

include "conecta_mysql.php";

if (isset($_GET['pageid'])) {

    echo "<div class='current-page'>";
    echo "<div class='parallax-container'><a href='selecionar_tipo.php?value=Incluir'><i class='material-icons waves-effect waves-light waves-circle'>arrow_back</i></a>";
    echo "<div class='section white'><div class='row container'>";

?>

<?php
    } else {
        header('location: check.php?value=Incluir');
    }
    mysqli_close($conn);
?>

    <script src="js/main.js"></script>
    <script src="js/install.js"></script>

</body>
</html>
