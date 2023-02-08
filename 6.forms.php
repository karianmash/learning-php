<!-- PHP Forms -->
<!-- --------------------------------------------------------------------- -->

<!-- (a) Form Handling -->
<!-- --------------------------------------------------------------------- -->

<!-- A form is a document that contains input fields that a user can fill out and submit to a server. -->
<!-- The server processes the form data and sends a response back to the user. -->
<!-- The form data is sent to the server using the HTTP POST method. -->
<!-- The HTTP POST method is the default method for sending form data. -->
<!-- The HTTP GET method is used to send form data in the URL. -->
<!-- The HTTP GET method is not recommended for sending sensitive data such as passwords. -->
<!-- The HTTP POST method is more secure than the HTTP GET method. -->
<!-- The HTTP POST method does not display the form data in the URL. -->
<!-- The HTTP GET method displays the form data in the URL. -->
<!-- The HTTP POST method is not limited to sending ASCII characters. -->
<!-- The HTTP GET method is limited to sending ASCII characters. -->
<!-- The HTTP POST method has no size limitations. -->
<!-- The HTTP GET method is limited to 1024 characters. -->
<!-- The HTTP POST method is better for sending larger amounts of data. -->

<!-- The action attribute specifies where to send the form-data when a form is submitted. -->
<!-- The method attribute specifies how to send the form-data (the HTTP method). -->
<!-- The name attribute specifies the name of an <input> element. -->
<!-- The value attribute specifies the value of an <input> element. -->
<!-- The type attribute specifies the type of <input> element to display. -->
<!-- The placeholder attribute specifies a short hint that describes the expected value of an <input> element. -->

<!-- Form example -->
<!-- --------------------------------------------------------------------- -->

<!-- The form below sends the form data to a file called "welcome.php" when the user clicks on the "Submit" button. -->
<!-- The form data is sent to the file "welcome.php" with the POST method. -->
<!-- The form data is sent as URL variables. -->

<!-- --------------------------------------------------------------------- -->
<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

<!-- The output could be something like this: -->

Welcome Peter
Your email address is peter@gmail.com
<!-- --------------------------------------------------------------------- -->

<!-- (b) Form Validation -->
<!-- --------------------------------------------------------------------- -->

<!-- Form validation is the process of checking if the form data is in the correct format. -->
<!-- Form validation is often done on the server side. -->
<!-- Form validation is also done on the client side. -->
<!-- Form validation is done with JavaScript. -->
<!-- Form validation can be done with PHP. -->

<!-- The PHP $_SERVER["PHP_SELF"] variable returns the filename of the currently executing script. -->
<!-- The PHP $_SERVER["PHP_SELF"] variable is a super global variable, which means that it is always accessible, regardless of scope. -->
<!-- The PHP $_SERVER["PHP_SELF"] variable is used to collect form data after submitting an HTML form with method="post". -->
<!-- The PHP $_SERVER["PHP_SELF"] variable is also used to collect form data after submitting an HTML form with method="get". -->
<!-- The PHP $_SERVER["PHP_SELF"] variable is a global variable, which means that it can be used anywhere in the PHP script (also from outside functions or methods). -->

<!-- The PHP $_REQUEST variable is used to collect data after submitting an HTML form. -->

<!-- Example -->

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- --------------------------------------------------------------------- -->