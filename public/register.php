<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministry of Health</title>
    <link rel="stylesheet" href="./Resources/CSS/props.css">
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
            <form action="../DB/log.php" method="POST">
                <h2>Sign In</h2>
                <input type="text" name="Username" placeholder="User Name" required>
                <input type="password" name="Pass" placeholder="Password" required>
                <input id="logbtn" type="submit" value="Login">
                <p>Don't have account ? </p>
                <a id="reglink" href="./register.php">Click here to register</a>
            </form>
        </div>
    </div>
</body>

</html>