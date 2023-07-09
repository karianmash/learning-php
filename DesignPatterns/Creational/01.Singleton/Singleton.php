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
        fwrite($this->logFile, "[$timestamp] $message" . PHP_EOL);
    }

    // Method to close the log file
    public function closeLogFile()
    {
        fclose($this->logFile);
    }
}

// Usage:
$logger = Logger::getInstance();
$logger->log("This is a log message.");
$logger->log("Another log message.");
$logger->closeLogFile();
