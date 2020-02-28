<?php

$useremail = $_GET['usuario'];

$hostname = "localhost";
$username = "root";
$password = "";
$database = "univa";


$connection = mysqli_connect($hostname,$username,$password,$database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());

} else{ 

    $result = mysqli_query($connection,"SELECT useremail FROM users WHERE useremail = '$useremail'");
    
    if (mysqli_num_rows($result) > 0) {

        $sql = "DELETE FROM users WHERE useremail = '$useremail'";
        if (mysqli_query($connection, $sql)) {
        echo "Usuario eliminado";
        echo "<br>";
        echo "<br>";
        echo "<a href='http://localhost/PII-2/admin.html'>Regresar</a>";
                
    }

    } else {
        
        echo "Usuario no encontrado";
        echo "<br>";
        echo "<br>";
        echo "<a href='http://localhost/PII-2/admin.html'>Regresar</a>";
    }
}

mysqli_close($connection);

?>

