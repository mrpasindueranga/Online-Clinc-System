<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministry of Health</title>
    <link rel="stylesheet" href="./Resources/CSS/register.css">
</head>

<body>
    <div class="welcome">Welcome to Patient Registration Form</div>
    <div class="colo"></div>
    <div class="content">
        <div class="picdtls">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 fadeInLeft" style="user-select: auto;">
                <div class="moduletable" style="user-select: auto;">
                    <h3 style="user-select: auto;">Welcome to the National STD/AIDS Control Programme</h3>

                    <div class="custom" style="user-select: auto;">
                        <p style="text-align: justify; user-select: auto;">The National STD/AIDS Control Programme (NSACP) of the Ministry of Health is the main government organization which coordinates the national response to sexually transmitted infections including HIV/AIDS in Sri Lanka. It collaborates with many national and international organizations such as the Global Fund to Fight Against AIDS, TB, and Malaria (GFATM) and UN organizations while providing leadership and technical support to 34 islandwide STD clinics and 23 ART centers</p>

                    </div>
                </div>

            </div>
        </div>
        <div class="logdtls">
            <form action="../db/register.php" method="POST">
                <h2>Registretion Form</h2>
                <div>
                    <div class="left">
                        <input type="text" name="Name" placeholder="Name" required>
                        <Select type="text" name="Gender" placeholder="Gender" required>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </Select>
                    </div>

                    <div>
                        <input type="text" name="Age" placeholder="Age" required>
                        <input type="text" name="District" placeholder="District" required>
                    </div>

                    <div class="right">
                        <input type="text" name="Email" placeholder="Email" required>
                        <input type="password" name="Password" placeholder="Password" required>
                    </div>
                    <div class="left">
                        <input type="text" name="NIC" placeholder="NIC" required>
                        <input type="text" name="Con" placeholder="Contact Number" required>
                    </div>
                </div>

                <input id="logbtn" type="submit" value="Register">
            </form>
        </div>
    </div>
</body>

</html>