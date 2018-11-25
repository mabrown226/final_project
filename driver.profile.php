
<?php require 'header.php'; ?>

    <body >
        <?php
            if (isset($_SESSION['id'])) {
                header("Location: login.php");
            }

        ?>
        <h3>Driver Profile</h3>
        <div class="wrapper">
            <form action="includes/driver.profile.inc.php" method="post">
                <div class="form">

                        <h5>Driver Info</h5>
                        <div class="driver-info">
                            <label>First Name:</label>
                            <input type="text" name="driverLName" placeholder="Last Name">
                            <label>Last Name:</label>
                            <input type="text" name="driverFName" placeholder="First Name">
                            <label>Middle Intial:</label>
                            <input type="text" name="driverMI" placeholder="MI"> <br>
                            <label>Email:</label>
                            <input type="text" name="driverEmail" placeholder="Email@email.com">
                            <label>Area Code:</label>
                            <input type="number" name="driverAreaCode">
                            <label>Cell Phone Number:</label>
                            <input type="number" name="driverNum" > <br>
                            <label>Address:</label>
                            <input type="text" name="driverAddr" placeholder="Street Address"> <br>
                            <label>City:</label>
                            <input type="text" name="driverCity" placeholder="City">
                            <label>State:</label>
                            <input type="text" name="driverState" placeholder="State">
                            <label>Zip:</label>
                            <input type="Text" name="driverZip" placeholder="Zip">
                        </div>
                        <h5>Vehicle Info</h5>
                        <div class="veh-info">
                            <label>Year:</label>
                            <input type="Text" name="vehYear" placeholder="Year">
                            <label>Make:</label>
                            <input type="Text" name="vehMake" placeholder="Make">
                            <label>Model:</label>
                            <input type="Text" name="vehModel" placeholder="Model">
                            <label>Color:</label>
                            <input type="Text" name="vehcolor" placeholder="Color"><br>

                            <label>Number of Years driving as a rideshare driver:</label>
                            <input type="Text" name="driverYear" placeholder="Years driving">
                        </div>
                </div>
            </form>
        </div>
    </body>


<?php require 'footer.php'; ?>
