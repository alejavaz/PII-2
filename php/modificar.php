<?php

$usuarioactual = $_GET['usuarioactual'];
$usuarionuevo = $_GET['usuariomod'];
$rowid = 0;

$connection = mysqli_connect('localhost','root','','univa');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());

} else{ 

    $result = mysqli_query($connection,"SELECT useremail FROM users WHERE useremail = '$usuarioactual'");


    
    if (mysqli_num_rows($result) > 0) {

        $id = mysqli_query($connection,"SELECT id FROM users WHERE useremail = '$usuarioactual'");
        while($result = mysqli_fetch_array($id)){
            $idnew = $result['id'];
        }

        $sql = "UPDATE users SET useremail = '$usuarionuevo' WHERE id = '$idnew'";
        if (mysqli_query($connection, $sql)) {
        echo "Nombre de usuario modificado";
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