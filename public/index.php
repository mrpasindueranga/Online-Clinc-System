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