/*
<?php

//LOCAL
//$servername = "127.0.0.1";
/*$username = "root";
$password = "";
$dbname = "gestao_incidentes";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

	$conexao = mysqli_connect("127.0.0.1","root","","gestao_incidentes");
	
		if (mysqli_connect_error()){
			echo "Não foi possível conectar: " . mysqli_connect_error();
			exit();
		} 
?>

