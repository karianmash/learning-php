<!-- MySQL methods for PHP -->
<!-- ----------------------------------------------------------------------- -->

<?php
// 1. Connect to MySQL
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
// -----------------------------------------------------------------------

// 2. Create a database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
// -----------------------------------------------------------------------

// 3. Create a table
$sql = "CREATE TABLE myTable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// -----------------------------------------------------------------------

// 4. Insert data into a table
$sql = "INSERT INTO myTable (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// -----------------------------------------------------------------------

// 5. Update data in a table
$sql = "UPDATE myTable SET lastname='Doe Jr.' WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
// -----------------------------------------------------------------------

// 6. Delete data from a table
$sql = "DELETE FROM myTable WHERE id=1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
// -----------------------------------------------------------------------

// 7. Select data from a table
$sql = "SELECT id, firstname, lastname FROM myTable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    // fetch_assoc() returns an associative array
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
// -----------------------------------------------------------------------

// 8. Drop a table
$sql = "DROP TABLE myTable";
if ($conn->query($sql) === TRUE) {
    echo "Table dropped successfully";
} else {
    echo "Error dropping table: " . $conn->error;
}
// -----------------------------------------------------------------------

// 9. MySQL error
if ($conn->error) {
    echo "MySQL error: " . $conn->error;
}
// -----------------------------------------------------------------------

// 10. mysql_fetch_object
$sql = "SELECT * FROM myTable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    // fetch_object() returns an object
    while ($row = $result->fetch_object()) {
        echo $row->id . " " . $row->firstname . " " . $row->lastname . "<br>";
    }
} else {
    echo "0 results";
}
// -----------------------------------------------------------------------

// 11. Execute a SELECT query
$sql = "SELECT * FROM numbers";
$result = $conn->query($sql);
// Fetch rows as an array
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "Number: " . $row["number"] . "<br>";
}
// -----------------------------------------------------------------------

// 12. Execute an INSERT query
$sql = "INSERT INTO myTable (column1, column2, column3) VALUES ('value1', 'value2', 'value3')";
$conn->query($sql);
// Get the ID of the last inserted row
$last_id = $conn->insert_id;

// Print the ID to the screen
echo "Last inserted ID is: " . $last_id;
// -----------------------------------------------------------------------

// Close the connection
$conn->close();
?>