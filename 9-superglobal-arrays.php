<!-- Superglobal variables in PHP -->
<!-- ----------------------------------------------------------------------- -->

<?php
// Superglobal variables are built-in variables that are always available in all scopes
// $GLOBALS

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