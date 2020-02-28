<?php

$useremail = $_GET['useremail'];
$userpassword = $_GET['userpassword'];
$acceso = 0;

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";


$connection = mysqli_connect($hostname,$username,$password,$database);


if(!$connection){
    die("Connectio failed: ".mysqli_connect_error());
}else{
    
    $sqlquery = "SELECT * FROM users";
    $result = mysqli_query($connection, $sqlquery);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {

            if ($useremail == "admin@admin.com" && $userpassword == "admin"){
                $acceso = 5;
            }

            if ($useremail == $row["useremail"] && $userpassword == $row["userpassword"]){
                
                $acceso = 1;
                echo "Bienvenido ". $row["useremail"];
                echo "<br>";
                echo "<a href='http://localhost/PII-2/index.html'>Ingresa</a>";
                
            }
        }
    } else {
        echo "No hay usuarios registrados";
    }

    if($acceso == 5){

        echo "Bienvenido administrador ";
        echo "<br>";
        echo "<a href='http://localhost/PII-2/admin.html'>Ingresar</a>";
    }

    if($acceso == 0){

        echo "Email o contrasena incorrecta ";
        echo "<br>";
        echo "<a href='http://localhost/PII-2/views/login.html'>Regresar</a>";
    }

    //$conn->close();
    mysqli_close($connection);

}

?>

