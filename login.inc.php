<?php
    if (isset($_POST['login-submit'])) {
        require 'dbh.inc.php';
        $uidUsers = $_POST['uidUsers'];
        $password = $_POST['pwd'];

        if (empty($uidUsers) || empty($password)) {
            header("Location: ../index.php?error=emptyfields&uidUsers=".$uidUsers);
            exit();
            }
        else {
            $uidUsers = mysqli_real_escape_string($conn,$_POST['uidUsers']);
            $password = mysqli_real_escape_string($conn, $_POST['pwd']);
            $passwordHashed = md5($password);
            $sql = "SELECT * FROM MAB_users WHERE uidUsers=?;";
            if (mysqli_query($conn, $sql)) {
                header("Location: ../index.php?login=success");
                exit();
            }
        }

        if (isset($_POST['uidUsers'])) {

            if(empty($_POST["uidUsers"]) && empty($_POST["pwd"])) {
                header("Location: ../driver.welcome.php");
                exit();
                }
            else {
                $uidUsers = mysqli_real_escape_string($connect, $_POST["uidUsers"]);
                $password = mysqli_real_escape_string($connect, $_POST["pdw"]);
                $passwordHashed = md5($password);
                $sql = "SELECT * FROM MAB_users WHERE uidUsers = '$username' AND pdw = '$password'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    $_SESSION['uidUsers'] = $uidUsers;
                    header("Location: ../driver.welcome.php");
                    exit();
                    }
                else {
                    header("Location: ../index.php?login=fail1");
                    exit();
                }
                }
            }

            mysqli_stmt_close($stmt);
            mysqli_close($conn)

    

?>
