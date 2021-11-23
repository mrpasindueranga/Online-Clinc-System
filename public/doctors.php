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
                        <th>NIC</th>
                        <th>Doctors' Name</th>
                        <th>Qualification</th>
                        <th>Visting Clinic</th>
                        <th>Date</th>
                        <th>Available Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5000</td>
                        <td>980980980V</td>
                        <td>Dr.Nuwan Abesekara</td>
                        <td>MBBS</td>
                        <td>colombo</td>
                        <td>2021/12/05</td>
                        <td>8</td>

                    </tr>


                </tbody>
            </table>

        </div>
    </div>



</body>

</html>