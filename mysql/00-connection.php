<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'karianmash');
define('DB_PASS', 'mash');
define('DB_NAME', 'mysql_tutorial');

class DBConnection
{
    public static $connection;

    public static function connect()
    {
        try {
            self::$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            // if (!self::$connection) {
            //     throw new \Exception(mysqli_connect_error());
            // }
            // echo "Connected to the database." . PHP_EOL;
        } catch (\Exception $e) {
            // echo "Connection failed: " . $e->getMessage() . PHP_EOL;
            // return $e->getMessage();
        }
    }

    public static function executeQuery($query)
    {
        self::connect();

        try {
            if (!self::$connection) {
                return false;
            }

            $result = mysqli_query(self::$connection, $query);
            if ($result === false) {
                self::close();
                // throw new \Exception(mysqli_error(self::$connection)) . PHP_EOL;
            }

            if ($result instanceof mysqli_result) {
                $data = array();
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
                mysqli_free_result($result);
                self::close();

                return $data;
            } else {
                self::close();
                return true; // Return a success indicator when the query doesn't return a result set
            }
        } catch (\Exception $e) {
            // echo "Error: " . $e->getMessage() . PHP_EOL;
            return null;
        }
    }

    public static function close()
    {
        try {
            if (!self::$connection) {
                throw new \Exception("Connection not established.");
            }

            mysqli_close(self::$connection);
            // echo "Database connection closed." . PHP_EOL;
        } catch (\Exception $e) {
            // echo "Error: " . $e->getMessage() . PHP_EOL;
        }
    }
}
