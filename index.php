<?php

$dbhost = "sql3.freemysqlhosting.net";
$dbuser = "sql3511229";
$dbpass = "zUZENeQfQx";
$dbname = "sql3511229";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){
    die("No hay conexion establecida: ".mysqli_connect_error());
}

$usernm = $_POST["username"];
$passwr = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM logins WHERE usuario'".$usernm."' and password = '".$passwr."'");
$nr = mysqli_num_rows($query);

if($nr == 1){
    //header("Location: pagina.html")
    echo "Bienvenido: " .$nombre;
} 
else if ($nr == 0){
    echo "No ingreso";
}

?>