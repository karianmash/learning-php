<?php

namespace DesignPatterns\Creational\Singleton;

class Logger
{
    private static $instance;
    private $logFile;

    // Private constructor to prevent direct instantiation
    private function __construct()
    {
        $this->logFile = fopen("log.txt", "a");
    }

    // Method to get the singleton instance
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Method to log a message
    public function log($message)
    {
        $timestamp = date('Y-m-d H:i:s');
        fwrite($this->logFile, "[$timestamp] $message" . PHP_EOL . PHP_EOL);
    }

    // Method to prevent cloning of the singleton instance
    public function __clone()
    {
        trigger_error('Cloning the singleton instance is not permitted.', E_USER_ERROR);
    }

    // Method to close the log file
    public function closeLogFile()
    {
        fclose($this->logFile);
    }
}

// Usage:
$logger = Logger::getInstance();

// Try to clone the singleton instance
$clonedSingleton = clone $logger; // This line will trigger an error

// Log some messages
$logger->log("This is a log message.");
$logger->log("Another log message.");
$logger->closeLogFile();
