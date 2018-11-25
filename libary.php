<?php
session_start():






/***********************************
                        Functions
************************************/

//function to connect to the data base
function connectdb(){
    $servername = "localhost";
    $username = "2018Student";
    $password = "201810";
    $dbname = "php2018";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        $isCon == True;
    }
}

// function to set user input to VARIABLES
function setVarLogin() {
    // has user entered username
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }

    // has user entere PASSWORD
    if (isset($POST['userPass'])) {
        $userPass = $POST['userPass']);
    }
}
 // function to hash a password
function passHash() {
    if (isset($userPass)) {
        $passHash = md5($userPass); 
    }
}

 ?>
