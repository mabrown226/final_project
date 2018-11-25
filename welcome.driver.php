
<?php
    require 'header.php';
?>
    <body >
<?php
    if (isset($_SESSION['id'])) {
        header("Location: login.php");
    }

?>
        <div class="body-wrapper">

            <div class="body-wrapper-child">
                <h3>Welcome Driver</h3>
            </div>

            <div class="body-wrapper-child">
                <a href="driver.profile.php">Change Profile</a>
            </div>

            <div class="body-wrapper-child">
                <a href="includes/logout.inc.php">Logout</a>
            </div>



        </div>
    </body>


<?php require 'footer.php'; ?>
