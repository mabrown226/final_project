<?php
require 'header.php';
?>

<body>
    <div class="body-wrapper">
        <div class="body-wrapper-child">
            <h3>Signup</h3>
        </div>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                } else if ($_GET["error"] == "invaliduidmail") {
                    echo '<p class="signuperror">Invalid username and e-mail!</p>';
                } else if ($_GET["error"] == "invaliduid") {
                    echo '<p class="signuperror">Invalid username!</p>';
                } else if ($_GET["error"] == "invalidmail") {
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                } else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="signuperror">Your passwords do not match!</p>';
                } else if ($_GET["error"] == "usertaken") {
                    echo '<p class="signuperror">Username is already taken!</p>';
                    }
                }

            else if (isset($_GET["signup"])) {
                if ($_GET["signup"] == "success") {
                    echo '<p class="signupsuccess">Signup successful!</p>';
                    }
                }
        ?>
        <div class="formStyle">

            <form action="includes/signup.inc.php" method="post">

                <?php
                    if (!empty($_GET["uid"])) {
                        echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
                        }
                    else {
                        echo '<input type="text" name="uid" placeholder="Username">';
                    }

                    if (!empty($_GET["mail"])) {
                        echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
                        }
                    else {
                        echo '<input type="text" name="mail" placeholder="E-mail">';
                    }
                ?>

                <div class="body-wrapper-child">
                    <input type="password" name="pwd" placeholder="Password">
                </div>

                <div class="body-wrapper-child">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                </div>

                <div class="body-wrapper-child">
                    <button type="submit" name="signup-submit">Signup</button>
                </div>

            </form>
        </div>
    </div>
</body>

<?php require 'footer.php' ?>
