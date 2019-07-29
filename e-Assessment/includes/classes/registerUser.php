<?php

/*
	including all the dependencies that we need in the program.
*/

require_once("FormSanitizer/FormSanitizer.php"); //Sanitizes the form before inserts
require_once("../config.php"); //Contains all connections to database
require_once("Constants.php"); //Contains all error outputs in a class.
require_once("Account.php"); //Contains all register and Login Classes


/*
	Sanitizing all the inputs from the user in order words ensuring that user
	does not insert funny stuff :) in the form. ErrorHandling.
*/

$Rprovince = $_POST["Rprovince"];
$Rname = FormSanitizer::sanitizeFormString($_POST["Rname"]);
$Rsurname = FormSanitizer::sanitizeFormString($_POST["Rsurname"]);
$Remail = FormSanitizer::sanitizeFormEmail($_POST["Remail"]);
$Rusername = FormSanitizer::sanitizeFormUsername($_POST["Rusername"]);
$Rpassword = FormSanitizer::sanitizeFormPassword($_POST["Rpassword"]);
$R2password = FormSanitizer::sanitizeFormPassword($_POST["R2password"]);


/*
 	initializing the variable account to a new object called Account which is our class that we created
 	in the directory ./Account.php this class all functions that allow us to register the user.
*/

$account = new Account($conn); //Connects to account class

/*
		initializing $wasSuccessful to the function called regsiter inside the Account class.
		This regsiter function takes 7 arguments and excutes the prepare statement or query to insert
		passed parameters into the database.

		if the query was excuted successfully we
		  - Hide the show_3 class
		  - Hide Welcome class header
		  - Set an Interval of 5 seconds when that 5 seconds ends
		     - Show the exam-login model
		     - Hide the exam-signup model

		Then echo style success message to user

		else Notify the user that he/she was not successfully registered.
*/

$wasSuccessful = $account->register($Rprovince, $Rname, $Rsurname, $Remail, $Rusername, $Rpassword, $R2password);

if ($wasSuccessful) {

    //$_SESSION["userLoggedIn"] = $username;
    //header("Location: index.php");

    //echo this when insert to the database was successful

    echo " <script>

        $('.show_3').hide()
    $('.welcome').hide();

    setInterval(function() {
        $('#exam-login').modal('show');
        $('#exam-signup').modal('hide');

    }, 5000);

    </script>";

    echo "<div class='successful_register'>You were registered successfully <b>Please wait while we redirect you to login page.</b></div>";

} else {
    echo "<div class='error_registerMessage registerPrevent'>You were not registered</div>";
}



?>