<?php

session_start();

require '../db/Conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $Name = htmlentities($_POST['Name']);
  $Gender = htmlentities($_POST['Gender']);
  $Age = htmlentities($_POST['Age']);
  $District = htmlentities($_POST['District']);
  $NIC = htmlentities($_POST['NIC']);
  $Email = htmlentities($_POST['Email']);
  $Password = htmlentities($_POST['Password']);
  $Con = htmlentities($_POST['Con']);
  $Role = 'User';

  require '../db/Conn.php';
  $regUserQuery = $conn->prepare("INSERT INTO user(name,gender,age,district,nic,con) VALUES(?,?,?,?,?,?)");
  $regUserQuery->bind_param("ssisss", $Name, $Gender, $Age, $District, $NIC, $Con);
  $regUserQuery->execute();
  $conn->close();

  require '../db/Conn.php';
  $getUserIDQuery = $conn->prepare("SELECT id FROM user WHERE nic = ?");
  $getUserIDQuery->bind_param('s', $NIC);
  $getUserIDQuery->execute();
  $getUserID = $getUserIDQuery->get_result()->fetch_assoc();
  $conn->close();

  require '../db/Conn.php';
  $createAccQuery = $conn->prepare("INSERT INTO account(user_id, email, password, role) VALUE(?,?,?,?)");
  $createAccQuery->bind_param('isss', $getUserID["id"], $Email, $Password, $Role);
  $createAccQuery->execute();
  $createAccQuery->close();

  $_SESSION["Role"] = $Role;
  $_SESSION["Name"] = $Name;
  $_SESSION["Gender"] = $Gender;
  $_SESSION["Age"] = $Age;
  $_SESSION["District"] = $District;
  $_SESSION["NIC"] = $NIC;
  $_SESSION["Con"] = $Con;

  header('location: ../public/index.php');
}
