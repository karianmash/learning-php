<?php

require_once __DIR__ . '/00-Connection.php';

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
            echo $e->getMessage();
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
                throw new \Exception("Error creating table: " . mysqli_error(DBConnection::$connection) . PHP_EOL);
            }
            echo "Table $tableName created successfully." . PHP_EOL;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function dropTable($tableName)
    {
        try {
            $query = "DROP TABLE $tableName";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error dropping table: " . mysqli_error(DBConnection::$connection) . PHP_EOL);
            }
            echo "Table $tableName dropped successfully." . PHP_EOL;
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function showTables()
    {
        try {
            $query = "SHOW TABLES";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error showing tables: " . mysqli_error(DBConnection::$connection) . PHP_EOL);
            }

            if (is_array($result)) {
                echo "Tables in " . DB_NAME . " database:" . PHP_EOL . PHP_EOL;
                $index = 1;
                foreach ($result as $table) {
                    echo $index . ". " . $table['Tables_in_' . DB_NAME] . PHP_EOL;
                    $index++;
                }
            } else {
                echo "No tables found in " . DB_NAME . " database." . PHP_EOL;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public static function insertData($tableName, $data)
    {
        try {
            // Generate the placeholders for the query
            $placeholders = implode(', ', array_fill(0, count($data), '?'));

            // Generate the column names for the query
            $columns = implode(', ', array_keys($data));

            // Prepare the query
            $query = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
            DBConnection::connect();
            $statement = DBConnection::$connection->prepare($query);

            // Bind the values to the prepared statement
            $types = str_repeat('s', count($data));
            $values = array_values($data);
            $statement->bind_param($types, ...$values);

            // Execute the statement
            $result = $statement->execute();
            if (!$result) {
                throw new \Exception("Error inserting data: " . $statement->error . PHP_EOL);
            }

            echo "Data inserted successfully." . PHP_EOL;
            DBConnection::close();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function selectData($tableName)
    {
        try {
            $query = "SELECT * FROM $tableName";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error selecting data: " . mysqli_error(DBConnection::$connection) . PHP_EOL);
            }

            if (is_array($result)) {
                echo "Data in $tableName table:" . PHP_EOL . PHP_EOL;
                foreach ($result as $row) {
                    foreach ($row as $columnName => $columnValue) {
                        echo "$columnName: $columnValue" . PHP_EOL;
                    }
                    echo PHP_EOL;
                }
            } else {
                echo "No data found in $tableName table." . PHP_EOL;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public static function updateData($tableName, $id, $data)
    {
        try {
            // Generate the update assignments for the query
            $assignments = [];
            foreach ($data as $column => $value) {
                $assignments[] = "$column='$value'";
            }
            $assignments = implode(', ', $assignments);

            // Prepare the query
            $query = "UPDATE $tableName SET $assignments WHERE id=$id";
            // DBConnection::connect();
            $result = DBConnection::executeQuery($query);

            if (!$result) {
                throw new \Exception("Error updating data: " . mysqli_error(DBConnection::$connection) . PHP_EOL);
            }

            echo "Data updated successfully." . PHP_EOL;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function deleteData($tableName, $id)
    {
        try {
            $query = "DELETE FROM $tableName WHERE id=$id";
            $result = DBConnection::executeQuery($query);
            if (!$result) {
                throw new \Exception("Error deleting data: " . mysqli_error(DBConnection::$connection) . PHP_EOL);
            }

            DBConnection::connect();
            $affectedRows = mysqli_affected_rows(DBConnection::$connection);
            if ($affectedRows > 0) {
                echo "Data deleted successfully." . PHP_EOL;
            } else {
                throw new \Exception("No records found for deletion." . PHP_EOL);
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
