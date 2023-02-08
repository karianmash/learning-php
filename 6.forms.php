<!-- PHP Forms -->
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

<!-- Go direct to the example -->
<!-- --------------------------------------------------------------------- -->
<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>