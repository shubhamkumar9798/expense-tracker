// db.php

<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "expense_tracker";

// making connection with database
$conn = mysqli_connect($host, $user, $password, $database);

// checking connection
if (!$conn) {
    die("Connection failed");
}

?>