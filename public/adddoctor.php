<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/CSS/navigation.css">
    <link rel="stylesheet" href="./resources/CSS/adddoc.css">
    <link rel="stylesheet" href="./resources/CSS/doctors.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">

    <title>Dashboard</title>
</head>

<body>
    <?php
    require '../component/navigation.php';
    ?>

    <div class="y">
        <div class="bodyl">
            <img class="side" src="./resources/Images/dash.png" alt="">

        </div>
        <div class="bodyr">
            <form action="" method="POST">
                <h2 class="h2">Doctor Registretion Form</h2>
                <div>
                    <div class="left">
                        <input type="text" name="Name" placeholder="Name" required>
                        <Select type="text" name="Qualifications" placeholder="Qualifications" required>
                            <option value="MBBS">MBBS</option>
                            <option value="BUMS">BUMS</option>
                            <option value="BHMS">BHMS</option>
                        </Select>
                    </div>

                    <div>
                        <input type="text" name="Clinics" placeholder="Visiting Clinics" required>
                        <input type="Date" name="Date" placeholder="Date" required>
                    </div>

                    <div class="right">
                        <input type="text" name="Number" placeholder="Available Number" required>
                        <input type="password" name="Password" placeholder="Password" required>
                    </div>
                    <div class="left">
                        <input type="text" name="NIC" placeholder="NIC" required>
                        <input type="text" name="Email" placeholder="Email" required>
                    </div>
                </div>

                <input id="logbtn" type="submit" value="Register Doctor">
            </form>


        </div>
    </div>



</body>

</html>