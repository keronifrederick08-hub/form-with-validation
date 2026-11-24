<?php
//define constants with Database credentials
define("HOST","localhost");
define("DB_USER","root");
define("PASSWORD","");
define("DB","student_info");


//create the connection string
$connection = mysqli_connect(HOST,DB_USER,PASSWORD,DB);

//CHECK CONNECTION
IF($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>