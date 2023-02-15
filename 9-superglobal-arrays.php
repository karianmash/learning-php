<!-- Superglobal variables in PHP -->
<!-- Superglobal variables are built-in variables that are always available in all scopes. i.e, $GLOBALS -->
<!-- ----------------------------------------------------------------------- -->

<?php
// 1. $_SERVER
// -----------------------------------------------------------------------

// $_SERVER is a PHP super global variable which holds information about headers,
//  paths, and script locations.
// The example below shows how to use some of the elements in $_SERVER:

// The $_SERVER["PHP_SELF"] returns the filename of the currently executing script as a string
echo $_SERVER['PHP_SELF'];
// The $_SERVER["SERVER_NAME"] returns the name of the host server (such as www.w3schools.com) as a string
echo $_SERVER['SERVER_NAME'];
// The $_SERVER["HTTP_HOST"] returns the Host header from the current request as a string
echo $_SERVER['HTTP_HOST'];
// The $_SERVER["HTTP_REFERER"] returns the complete URL of the current page as a string
echo $_SERVER['HTTP_REFERER'];
// The $_SERVER["HTTP_USER_AGENT"] returns the user agent as a string
echo $_SERVER['HTTP_USER_AGENT'];
// The $_SERVER["SCRIPT_NAME"] returns the path of the current script as a string
echo $_SERVER['SCRIPT_NAME'];
// -----------------------------------------------------------------------

// 2. $_REQUEST
// -----------------------------------------------------------------------

// $_REQUEST is a PHP super global variable which is used to collect data after 
// submitting an HTML form.
// The example below shows how to use some of the elements in $_REQUEST:

// The $_REQUEST["name"] returns the value of the name field from the form
echo $_REQUEST['name'];
// The $_REQUEST["email"] returns the value of the email field from the form
echo $_REQUEST['email'];
// -----------------------------------------------------------------------

// 3. $_POST
// -----------------------------------------------------------------------

// $_POST is a PHP super global variable which is used to collect form data after
// submitting an HTML form with method="post".
// The example below shows how to use some of the elements in $_POST:

// The $_POST["name"] returns the value of the name field from the form
echo $_POST['name'];
// The $_POST["email"] returns the value of the email field from the form
echo $_POST['email'];
// -----------------------------------------------------------------------

// 4. $_GET
// -----------------------------------------------------------------------

// $_GET is a PHP super global variable which is used to collect form data after
// submitting an HTML form with method="get".
// The example below shows how to use some of the elements in $_GET:

// The $_GET["name"] returns the value of the name field from the form
echo $_GET['name'];
// The $_GET["email"] returns the value of the email field from the form
echo $_GET['email'];
// -----------------------------------------------------------------------

// 5. $_FILES
// -----------------------------------------------------------------------

// $_FILES is a PHP super global variable which is used to collect data from
// file uploads.
// The example below shows how to use some of the elements in $_FILES:

// The $_FILES["file"]["name"] returns the original name of the file on the client machine
echo $_FILES['file']['name'];
// The $_FILES["file"]["type"] returns the mime type of the file
echo $_FILES['file']['type'];
// The $_FILES["file"]["size"] returns the size, in bytes, of the uploaded file
echo $_FILES['file']['size'];
// The $_FILES["file"]["tmp_name"] returns the temporary filename of the file in which the uploaded file was stored on the server
echo $_FILES['file']['tmp_name'];
// The $_FILES["file"]["error"] returns the error code associated with this file upload
echo $_FILES['file']['error'];
// -----------------------------------------------------------------------

// 6. $_ENV
// -----------------------------------------------------------------------

// $_ENV is a PHP super global variable which is used to collect data from
// environment variables.
// The example below shows how to use some of the elements in $_ENV:

// The $_ENV["name"] returns the value of the name field from the form
echo $_ENV['name'];
// The $_ENV["email"] returns the value of the email field from the form
echo $_ENV['email'];
// -----------------------------------------------------------------------

// 7. $_COOKIE
// -----------------------------------------------------------------------

// $_COOKIE is a PHP super global variable which is used to collect data from
// cookies.
// The example below shows how to use some of the elements in $_COOKIE:

// The $_COOKIE["name"] returns the value of the name field from the form
echo $_COOKIE['name'];
// The $_COOKIE["email"] gets the email from the cookie
echo $_COOKIE['email'];
// -----------------------------------------------------------------------

// 8. $_SESSION
// -----------------------------------------------------------------------

// $_SESSION is a PHP super global variable which is used to collect data from
// session variables.
// The example below shows how to use some of the elements in $_SESSION:

// The session_start() function must be the very first thing in your document. Before any HTML tags.
// The $_SESSION["name"] accesses the session variable named "name"
echo $_SESSION['name'];
// The $_SESSION["email"] accesses the session variable named "email"
echo $_SESSION['email'];
// Set session variables
$_SESSION['name'] = 'John';
// -----------------------------------------------------------------------

// 9. $GLOBALS
// -----------------------------------------------------------------------

// $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script.
// The example below shows how to use some of the elements in $GLOBALS:

// The $GLOBALS["name"] accesses the global variable named "name"
echo $GLOBALS['name'];
// The $GLOBALS["email"] accesses the global variable named "email"
echo $GLOBALS['email'];
// Define Global Variables
$name = 'John';
// -----------------------------------------------------------------------