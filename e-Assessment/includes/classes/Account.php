<?php

/*
Here we create a class that will contain a bunch of public and private functions.
This class will also connect to our database.
*/

class Account {

    private $conn;

    private $errorArray = array();

    public function __construct($conn) {

        $this->conn = $conn;

    }

    /*
     Here we have a public function called register which takes seven arguments-> these are
     inputs we get from the the users.

     We then call validation functions we have created for each input to ensure that inputs
     are valid.

     After we Check if the there are no errors which are collected in our errorArray.
      - If there are no errors a function called insertUserDetails is called to insert Data into the 
        database
      - If Error were collected we return noting
    */

    public function register($Rpr, $Rn, $Rs, $Re, $Ru, $Rp, $R2p) {

        $this->validateFirstName($Rn);
        $this->validateLastName($Rs);
        $this->validateUsername($Ru);
        $this->validateEmails($Re);
        $this->validatePasswords($Rp, $R2p);

        if (empty($this->errorArray)) {

            return $this->insertUserDetails($Rpr, $Rn, $Rs, $Re, $Ru, $Rp);

        } else {

            return (false);

        }

    }

    public function login($Lu, $Lp) {

    $Lp = hash("sha512", $Lp, true);

    $query = $this->conn->prepare("SELECT * FROM scp_users WHERE username=:Lu AND password=:Lp");
    $query->bindParam(":Lu", $Lu);
    $query->bindParam(":Lp", $Lp);

    $query->execute();

    if($query->rowCount() == 1) {
      return true;
    } else {
      array_push($this->errorArray, Constants::$loginFailed);
      echo $this->errorMessageDisplay(Constants::$loginFailed);
      return false;
    }

  }

    /*
       The insertUserDetails function takes 7 arguments and these come from the input of the user all inputs passed here have been validated and Sanitized.

       We begin by converting the password of the user into hash code using "sha512".
       After we then run a msql query / prepapre statement which inserts data into our scp_users
       database. We use bindParam as alias similar to typedefs

       After we execute the query.
    */

    public function insertUserDetails($Rpr, $Rn, $Rs, $Re, $Ru, $Rp) {


        $Rp = hash("sha512", $Rp, true);
        $profilePic = "none";

        $query = $this->conn->prepare("INSERT INTO `scp_users` (`id`, `name`, `surname`, `email`, `password`, `username`, `province`, `profile`) VALUES (NULL, :Rn, :Rs, :Re, :Rp, :Ru, :Rpr, :pic)");

        $query->bindParam(":Rn", $Rn);
        $query->bindParam(":Rs", $Rs);
        $query->bindParam(":Re", $Re);
        $query->bindParam(":Rp", $Rp);
        $query->bindParam(":Ru", $Ru);
        $query->bindParam(":Rpr", $Rpr);
        $query->bindParam(":pic", $profilePic);

        return $query->execute();

    }

    /*
       These are private functions we have created to validate all inputs from the user.

       if we find false or errors we call
        - errorMessageDisplay a function we have created that echos styles messages to the 
          user to make correct changes.
        - errorMessageDisplay also calls another function called errorDecorateBorderInput we have
          created to change the style of target input using jquery.
    */

    private function validateFirstName($Rn) {

        if (strlen($Rn) > 25 || strlen($Rn) < 2) {
            array_push($this->errorArray, Constants::$firstNameCharacters);

            echo $this->errorMessageDisplay(Constants::$firstNameCharacters);

        }

    }

    private function validateLastName($Rs) {

        if (strlen($Rs) > 25 || strlen($Rs) < 2) {
            array_push($this->errorArray, Constants::$lastNameCharacters);

            echo $this->errorMessageDisplay(Constants::$lastNameCharacters);


        }

    }

    private function validateUsername($Ru) {

        if (strlen($Ru) > 25 || strlen($Ru) < 5) {
            array_push($this->errorArray, Constants::$usernameCharacters);

            echo $this->errorMessageDisplay(Constants::$usernameCharacters);
            return;
        }

        $query = $this->conn->prepare("SELECT username From scp_users WHERE username=:Ru");
        $query->bindParam(":Ru", $Ru);
        $query->execute();

        if ($query->rowCount() != 0) {
            array_push($this->errorArray, Constants::$usernameTaken);

            echo $this->errorMessageDisplay(Constants::$usernameTaken);
        }

    }

    private  function validateEmails($Re) {



        if (!filter_var($Re, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray, Constants::$emailInvalid);

            echo $this->errorMessageDisplay(Constants::$emailInvalid);
            return;
        }

        $query = $this->conn->prepare("SELECT email From scp_users WHERE email=:Re");
        $query->bindParam(":Re", $Re);
        $query->execute();

        if ($query->rowCount() != 0) {
            array_push($this->errorArray, Constants::$emailTaken);

            echo $this->errorMessageDisplay(Constants::$emailTaken);
        }


    }


    private function validatePasswords($Rp, $R2p) {

        if ($Rp != $R2p) {
            array_push($this->errorArray, Constants::$passwordDoNotMatch);

            echo $this->errorMessageDisplay(Constants::$passwordDoNotMatch);
            return;
        }

        if (preg_match("/[^A-Za-z0-9]/", $Rp)) {
            array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
            echo $this->errorMessageDisplay(Constants::$passwordNotAlphanumeric);
            return;
        }


        if (strlen($Rp) > 30 || strlen($Rp) < 5) {
            array_push($this->errorArray, Constants::$passwordLength);
            echo $this->errorMessageDisplay(Constants::$passwordLength);

        }


    }

    /*
	 A function we have defined to collect all errors that might be encountered during the 
	 registeration process.
 	*/

    public function getError($error) {

        if (in_array($error, $this->errorArray)) {
            return "<span class='errorMessage'>$error</span>";
        }
    }

    private function errorMessageDisplay($error) {

        $this->errorDecorateBorderInput($error);
        return "<div class='error_registerMessage'>$error</div>";
    }

    private function errorDecorateBorderInput($error_input) {
        switch ($error_input) {
            case Constants::$firstNameCharacters:
                echo "<script>$('#register-name').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$lastNameCharacters:
                echo "<script>$('#register-surname').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$usernameCharacters:
                echo "<script>$('#register-username').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$usernameTaken:
                echo "<script>$('#register-username').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$emailInvalid:
                echo "<script>$('#register-email').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$emailTaken:
                echo "<script>$('#register-email').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$passwordDoNotMatch:
                echo "<script>$('#register-password').css({'border':'2px solid #F44336'});</script>";
                echo "<script>$('#register-re-password').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$passwordNotAlphanumeric:
                echo "<script>$('#register-password').css({'border':'2px solid #F44336'});</script>";
                break;
            case Constants::$passwordLength:
                echo "<script>$('#register-password').css({'border':'2px solid #F44336'});</script>";
                break;
        }
    }



}

?>