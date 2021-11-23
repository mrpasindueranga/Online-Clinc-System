<?php
session_start();
if ($_SESSION) :
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <?php
    if ($_SESSION['Role'] === 'Admin') {
      require('../component/Home/admin.php');
    } elseif ($_SESSION['Role'] === 'Doctor') {
      require('../component/Home/doctor.php');
    } elseif ($_SESSION['Role'] === 'User') {
      require('../component/Home/user.php');
    }
    ?>
  </body>

  </html>
<?php
endif;
?>

<?php
if (!$_SESSION) {
  header('location: ../public/login.php');
}
?>