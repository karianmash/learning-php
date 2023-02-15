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