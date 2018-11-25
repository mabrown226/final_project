<?php
include 'header.php';
require 'includes/dbh.inc.php';

?>
<body>
    <div class="body">
        <div class="body-wrapper">
            <div class="banner" class="body-wrapper-child">
                <h3>Login In</h3>
            </div>
            <?php

                if (!isset($_SESSION['id'])) {
                    echo '<div class="formContainer">
                        <form action="includes/login.inc.php" method="post">
                            <div class="body-wrapper-child">
                                <input type="text" name="uidUsers" placeholder="E-mail/Username">
                            </div>
                            <div class="body-wrapper-child">
                                <input type="password" name="pwd" placeholder="Password">

                            <div class="body-wrapper-child">
                                <button type="submit" name="login-submit">Login</button>
                            </div>
                        </form>

                        <div class="body-wrapper-child">
                            <a href="signup.php" class="header-signup">Signup</a></div>
                        </div>';
                        }
                else if (isset($_SESSION['id'])) {
                    echo '<div class="formContainer"><form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="login-submit">Logout</button>
                        </form></div>';
                    }

            ?>
        </div>
    </div>
</body>

<div class="body-wrapper-child">





<?php include 'footer.php'  ?>
