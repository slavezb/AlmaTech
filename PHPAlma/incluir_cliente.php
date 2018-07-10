<?php

include "conecta_mysql.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$empresa = $_POST["empresa"];


if (empty($nome) OR strstr($nome, ' ')==TRUE){
	echo "Preencher o campo NOME corretamente.</br>";
		$erro = 1;
	}
		
if (strlen($id) <2 OR strstr($id, ' ')==TRUE){
	echo "Preencher o campo ID corretamente.</br>";
		$erro = 1;
	}

if ($erro == 0) {
    $msg = "Incluido com sucesso!";
}else{
    $msg = "Erro ao incluir!";
}
//mysql_close($con);

/*	
if(mysql_query($sql,$con)){
    $msg = "Incluido com sucesso!";
}else{
    $msg = "Erro ao incluir!";
}
mysql_close($con);
*/
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
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">

        <input type="hidden" value="" name="id">

        <p>Nome:   <input type="text" value="" name="nome" placeholder="Insira um nome" required></p>
        <p>Empresa:   <input type="text" value="" name="empresa" placeholder="Insira o nome da empresa" required></p>

        <input type="submit" class="btn" value="Incluir" >


    </form>
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