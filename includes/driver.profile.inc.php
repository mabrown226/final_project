<?php
    // get data from form
    $lName = mysqli_real_escape_string($conn, $_POST['driverLName']);
    $fName = mysqli_real_escape_string($conn, $_POST['driverFName']);
    $miName = mysqli_real_escape_string($conn, $_POST['driverMI']);
    $driverEmail = mysqli_real_escape_string($conn, $_POST['driverEmail']);
    $driverAreaCode = mysqli_real_escape_string($conn, $_POST['driverAreaCode']);
    $driverNum = mysqli_real_escape_string($conn, $_POST['driverNum']);
    $driverAddr = mysqli_real_escape_string($conn, $_POST['driverAddr']);
    $driverCity = mysqli_real_escape_string($conn, $_POST['driverCity']);
    $driverState = mysqli_real_escape_string($conn, $_POST['driverState']);
    $driverZip = mysqli_real_escape_string($conn, $_POST['driverZip']);
    $vehYear = mysqli_real_escape_string($conn, $_POST['vehYear']);
    $vehMake = mysqli_real_escape_string($conn, $_POST['vehMake']);
    $vehModel = mysqli_real_escape_string($conn, $_POST['vehModel']);
    $vehcolor = mysqli_real_escape_string($conn, $_POST['vehcolor']);
    $driverYear = mysqli_real_escape_string($conn, $_POST['driverYear']);




?>
