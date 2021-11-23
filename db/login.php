<?php
require '../db/Conn.php';
session_start();

$Uname = htmlentities($_POST['Email']);
$Passwd = htmlentities($_POST['Password']);

$checkCredQuery = $conn->prepare('SELECT id FROM account WHERE email=? AND password=?');
$checkCredQuery->bind_param('ss', $Uname, $Passwd);
$checkCredQuery->execute();
$getUser = $checkCredQuery->get_result()->fetch_assoc();
$conn->close();

if ($getUser) {
  require '../db/Conn.php';
  $getUserDataQuery = $conn->prepare('SELECT * FROM user WHERE id=?');
  $getUserDataQuery->bind_param('i', $getUser['id']);
  $getUserDataQuery->execute();
  $getUserData = $getUserDataQuery->get_result()->fetch_assoc();
  $conn->close();

  require '../db/Conn.php';
  $getAccDataQuery = $conn->prepare('SELECT * FROM account WHERE id=?');
  $getAccDataQuery->bind_param('i', $getUser['id']);
  $getAccDataQuery->execute();
  $getAccData = $getAccDataQuery->get_result()->fetch_assoc();
  $conn->close();

  $_SESSION["Role"] = $getAccData['role'];
  $_SESSION["Name"] = $getUserData['Name'];
  $_SESSION["Gender"] = $getUserData['Gender'];
  $_SESSION["Age"] = $getUserData['Age'];
  $_SESSION["District"] = $getUserData['District'];
  $_SESSION["NIC"] = $getUserData['NIC'];
  $_SESSION["Con"] = $getUserData['Con'];

  header('location: ../public/index.php');
}
