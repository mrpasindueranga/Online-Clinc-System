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
                        <th>Doctors' Name</th>
                        <th>Patient ID</th>
                        <th>Spent Time</th>
                        <th>Date</th>
                        <th>Ticket No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Com0001</td>
                        <td>Regonal Clinic Colombo</td>
                        <td>Pat0045</td>
                        <td>45min</td>
                        <td>2021/12/05</td>
                        <td>8</td>

                    </tr>
                    <tr>
                        <td>Com0002</td>
                        <td>Distric Clinic Galle</td>
                        <td>Pat0125</td>
                        <td>20min</td>
                        <td>2021/12/05</td>
                        <td>10</td>
                    </tr>



                </tbody>
            </table>

        </div>
    </div>



</body>

</html>