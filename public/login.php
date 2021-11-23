<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministry of Health</title>
    <link rel="stylesheet" href="./resources/CSS/index.css">
</head>

<body>
    <div class="welcome">Welcome to Online Clinic</div>
    <div class="colo"></div>
    <div class="content">
        <div class="picdtls">
            <img src="./resources/Images/index_left_img.svg" alt="Error occured while login">
        </div>
        <div class="logdtls">
            <form action="../db/login.php" method="POST">
                <h2>Sign In</h2>
                <input type="text" name="Email" placeholder="Email" required>
                <input type="password" name="Password" placeholder="Password" required>
                <input id="logbtn" type="submit" value="Login">
                <p>Don't have account ? </p>
                <a id="reglink" href="./register.php">Click here to register</a>
            </form>
        </div>
    </div>
</body>

</html>