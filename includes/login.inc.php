<?php

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        require 'dbh.inc.php';
        // escape special characters
        $uidUsers = mysqli_real_escape_string($conn, $_POST['uidUsers']);
        $password = mysqli_real_escape_string($conn, $_POST['pwd']);
        $hashedPassword = md5($password);
        $sql = "SELECT * FROM MAB_users WHERE uidUsers='$uidUsers' AND '$hashedPassword'";
        $query = mysqli_query($conn, $sql);
        $res=mysqli_num_rows($query);

        //If result match $username and $password Table row must be 1 row
        if($res == 1) {

            header("Location: ../welcome.driver.php");
        }
        else {
            echo "Invalid Username or Password";

        }
    }





?>
