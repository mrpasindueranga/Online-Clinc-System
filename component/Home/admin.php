<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/CSS/navigation.css">
    <link rel="stylesheet" href="./resources/CSS/dashboard.css">
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
            <div class="main-part">
                <div class="cpanel">
                    <div class="icon-part">
                        <i class="fa fa-users" aria-hidden="true"></i><br>
                        <small>Total Registerd Patients</small>
                        <p>985</p>
                    </div>
                    <div class="card-content-part">
                        <a>Count Only</a>
                    </div>
                </div>
                <div class="cpanel cpanel-green">
                    <div class="icon-part">
                        <i class="fa fa-money" aria-hidden="true"></i><br>
                        <small>Doctors</small>
                        <p>52</p>
                    </div>
                    <div class="card-content-part">
                        <a href="/public/doctors.php">More Details </a>
                    </div>
                </div>
                <div class="cpanel cpanel-orange">
                    <div class="icon-part">
                        <i class="fa fa-bell" aria-hidden="true"></i><br>
                        <small>Clinics</small>
                        <p>02</p>
                    </div>
                    <div class="card-content-part">
                        <a href="/public/clinic.php">More Details </a>
                    </div>
                </div>
                <div class="cpanel cpanel-blue">
                    <div class="icon-part">
                        <i class="fa fa-tasks" aria-hidden="true"></i><br>
                        <small>ART Centers</small>
                        <p>02</p>
                    </div>
                    <div class="card-content-part">
                        <a href="/public/art.php">More Details </a>
                    </div>
                </div>
                <div class="cpanel cpanel-red">
                    <div class="icon-part">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
                        <small>Today Comleted Sesions</small>
                        <p>02</p>
                    </div>
                    <div class="card-content-part">
                        <a href="/public/comsesion.php">More Details </a>
                    </div>
                </div>
                <div class="cpanel cpanel-skyblue">
                    <div class="icon-part">
                        <i class="fa fa-comments" aria-hidden="true"></i><br>
                        <small>Today Pending Sesions</small>
                        <p>2</p>
                    </div>
                    <div class="card-content-part">
                        <a href="/public/pending.php">More Details </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>