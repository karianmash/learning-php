<?php

require_once __DIR__ . '/00-connection.php';

class DBQueries
{
    public static function createDatabase($databaseName)
    {
        try {
            $query = "CREATE DATABASE $databaseName";

            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error creating database: " . mysqli_error(DBConnection::$connection) . PHP_EOL);
            }
            echo "Database created successfully." . PHP_EOL;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function dropDatabase($databaseName)
    {
        try {
            $query = "DROP DATABASE $databaseName";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error dropping database: " . mysqli_error(DBConnection::$connection));
            }
            echo "Database dropped successfully.";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function createTable($tableName)
    {
        try {
            $query = "CREATE TABLE $tableName (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error creating table: " . mysqli_error(DBConnection::$connection));
            }
            echo "Table created successfully.";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function dropTable($tableName)
    {
        try {
            $query = "DROP TABLE $tableName";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error dropping table: " . mysqli_error(DBConnection::$connection));
            }
            echo "Table dropped successfully.";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function insertData($tableName, $firstname, $lastname, $email)
    {
        try {
            $query = "INSERT INTO $tableName (firstname, lastname, email)
            VALUES ('$firstname', '$lastname', '$email')";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error inserting data: " . mysqli_error(DBConnection::$connection));
            }
            echo "Data inserted successfully.";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function updateData($tableName, $id, $lastname)
    {
        try {
            $query = "UPDATE $tableName SET lastname='$lastname' WHERE id=$id";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error updating data: " . mysqli_error(DBConnection::$connection));
            }
            echo "Data updated successfully.";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function deleteData($tableName, $id)
    {
        try {
            $query = "DELETE FROM $tableName WHERE id=$id";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error deleting data: " . mysqli_error(DBConnection::$connection));
            }
            echo "Data deleted successfully.";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function selectData($tableName)
    {
        try {
            $query = "SELECT id, firstname, lastname FROM $tableName";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error selecting data: " . mysqli_error(DBConnection::$connection));
            }
            echo "Data selected successfully.";
            return $result;
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public static function closeConnection()
    {
        DBConnection::close();
    }
}
