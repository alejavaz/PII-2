<?php
$connection = mysqli_connect('localhost','root','','univa');


$sqlquery = "SELECT * from users";
$result = mysqli_query($connection,$sqlquery);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Useremail: " . 
        $row["useremail"]. " - Password: " . 
        $row["userpassword"]. " - inserted " . 
        $row["userinserted"]. 
        "<br>";
    }
} else {
    echo "0 results";
}

        echo "<br>";
        echo "<a href='http://localhost/PII-2/admin.html'>Regresar</a>";

mysqli_close($connection);

?>