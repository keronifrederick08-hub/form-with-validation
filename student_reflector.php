<?php
// include_once: if index.php already loaded validate.php, don't load it again
// (loading it twice would redeclare clean_input() and cause a fatal error)
include_once 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Student Info Page</title>
</head>
<body>
    <h1>Student Information</h1>

    <?php if ($success) {
        echo "<p>Thank you, " . htmlspecialchars($name) . "! Your information was submitted successfully.</p>";
        echo "<p>Program: " . htmlspecialchars($program) . "</p>";
        echo "<p>Year: " . htmlspecialchars($year) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    } else {
        echo "<p>No valid submission received.</p>";
    }
   

   include_once 'db_insert.php';

   echo '<meta http-equiv="refresh" content="10;url=http://localhost/form-with-validation/index.php">';
    ?>

</body>
</html>
