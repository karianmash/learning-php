<!-- MySQL methods -->
<!-- ----------------------------------------------------------------------- -->

<?php
// MySQL methods
// -----------------------------------------------------------------------

// 1. Connect to MySQL
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // die() is a function that kills the script
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// 2. Create a database
$sql = "CREATE DATABASE myDB";


?>