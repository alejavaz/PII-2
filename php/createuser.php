<?php

$useremail = $_GET['useremail'];
$userpassword = $_GET['userpassword'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "univa";


// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());

} else{

    $result = mysqli_query($connect,"SELECT useremail FROM users WHERE useremail = '$useremail'");
    
    if (mysqli_num_rows($result) > 0) {

        echo "Usuario ya registrado";
                echo "<br>";
                echo "Ingresa un usuario diferente";
                echo "<br>";
                echo "<a href='http://localhost/PII-2/views/register.html'>Regresar</a>";

    } else {
        
        $sqladd = "INSERT INTO users (useremail, userpassword) VALUES ('$useremail','$userpassword')"; 
        mysqli_query($connect,$sqladd);
        echo "Usuario agregado";
        echo "<br>";
        echo "Bienvenido";
        echo "<br>";
        echo "<a href='http://localhost/PII-2/index.html'>Ingresar</a>";
    }

    mysqli_close($connect);

}

?>