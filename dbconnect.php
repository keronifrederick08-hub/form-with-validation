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

//// Escape user inputs for security|| protection from SQL injection

$name = mysqli_real_escape_string($connection, $_REQUEST['name']);
$program = mysqli_real_escape_string($connection, $_REQUEST['program']);
$year = mysqli_real_escape_string($connection, $_REQUEST['year']);
$email = mysqli_real_escape_string($connection, $_REQUEST['email']);

//the mySQL query to be executed by the DB server
$sql = "INSERT INTO student (name, program, year_of_study, email) VALUES ('$name','$program','$year','$email')";


//insert data into db using try -- catch to handle exceptions

try
{
    if(mysqli_query($connection, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
}
catch(Exception $e)
{
    echo "<p style='color:red;'>Slight error, Please check your values " . mysqli_error($connection)."</p>";
}
// close the SQL connection
mysqli_close($connection);
?>