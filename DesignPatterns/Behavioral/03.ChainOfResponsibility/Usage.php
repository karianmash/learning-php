<?php

use App\Request;
use App\Validators\HeadersValidator;
use App\Validators\DataValidator;

require_once 'Request.php';
require_once 'ValidatorInterface.php';
require_once 'HeadersValidator.php';
require_once 'DataValidator.php';

// Create the validator instances
$headersValidator = new HeadersValidator();
$dataValidator = new DataValidator();

// Define the validator chain
$validatorChain = $headersValidator->setNext($dataValidator);

// Simulate an incoming request (in a real implementation, this would be an actual HTTP request)
$headers = ['Authorization' => 'Bearer abc123']; // Simulated request headers
$data = ['username' => 'user123', 'password' => 'pass123']; // Simulated request data
$request = new Request($headers, $data);

// Process the request through the validator chain
if ($validatorChain->validate($request)) {
    echo "Request is valid. Processing the request...\n";
    // Additional logic to handle the request goes here
} else {
    echo "Request is invalid. Unable to process the request.\n";
}
