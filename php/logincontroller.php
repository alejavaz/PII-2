<?php


//echo "login controller";
//echo $useremail;
//echo $userpassword;

$useremail = $_GET['useremail'];
$userpassword = $_GET['userpassword'];

$hostname = "localhost"
$username = "root";
$password = "";
$database = "univa";

//create connection
$connection = mysqli_connect($hostname,$useremail,$password,$database);

//Check connection
if(!$connection){
    die("Connectio failed: ".mysqli_connect_error());
}else{
    
    //$sqlquery = "SELECT * FROM users WHERE lastname='Doe'";

    $sqlquery = "SELECT * FROM users";
    //$result = $connection->query($sqlquery);
    $result = mysqli_query($connection, $sqlquery);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        while($row = mysqli_fetch_assoc($result)) {
            /*
            echo "id: " . $row["id"]. " - Useremail: " . 
            $row["useremail"]. " - Password" . 
            $row["userpassword"]. "- inserted" . 
            $row["inserted"]. 
            "<br>";
            */
            if ($useremail == $row["useremail"] && $userpassword == $row["userpassword"]){
                echo "userfound";
                echo "<a href='http://localhost/PII-2/main.html'>Access to mail</a>";
            }
        }
    } else {
        echo "0 results";
    }
    
    //$conn->close();
    mysqli_close($conn);


}

?>

