<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/CSS/navigation.css">
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
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Clinic Name</th>
                        <th>Max Patition Count</th>
                        <th>District</th>
                        <th>Date</th>
                        <th>Head of Incharge</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cli-01</td>
                        <td>Regonal Clinic</td>
                        <td>45</td>
                        <td>colombo</td>
                        <td>2021/12/05</td>
                        <td>Dr.Ravindra Gamage</td>

                    </tr>
                    <tr>
                        <td>Cli-02</td>
                        <td>District Clinic</td>
                        <td>50</td>
                        <td>Galle</td>
                        <td>2021/12/05</td>
                        <td>Dr.Nuwan Karunarathna</td>
                    </tr>



                </tbody>
            </table>

        </div>
    </div>



</body>

</html>