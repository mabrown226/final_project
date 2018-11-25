
<?php require 'header.php'; ?>

    <body >
        <div class="body-wrapper">

            <div class="body-wrapper-child">
                <h1>Pivotal Peak Media</h1>
            </div>

            <div class="body-wrapper-child">
                <h5>Taking Marking to New Heights!</h5>
            </div>

            <div class="body-wrapper-child">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <?php
              if (!isset($_SESSION['id'])) {
                echo '<br><br><br><p class="login-status">You are logged out!</p>';
              }
              else if (isset($_SESSION['id'])) {
                echo '<br><br><br><p class="login-status">You are logged in!</p>';
              }
            ?>

        </div>
    </body>


<?php require 'footer.php'; ?>
