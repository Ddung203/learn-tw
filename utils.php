<?php

function showAlert($message)
{
  echo "<script type='text/javascript'>alert('$message');</script>";
}
function autoLogoutAfterInactivity($timeoutInSeconds, $redirectURL)
{
  if (!isset($_SESSION["last_activity"])) {
    $_SESSION["last_activity"] = time();
  }

  if ((time() - $_SESSION["last_activity"]) > $timeoutInSeconds) {
    session_unset();
    session_destroy();
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600, '/');
    }
    header("Location: $redirectURL");
    exit();
  }

  $_SESSION["last_activity"] = time();
}
// Kiểm tra để đảm bảo email duy nhất
function isEmailExist($mysqli, $email)
{
  $query = "SELECT COUNT(*) as total FROM users WHERE email = ?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row['total'] > 0;
}

function insertUserData($mysqli, $hoten, $email, $password)
{
  $query = "INSERT INTO users(hoten, email, matkhau) VALUES (?,?,?);";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("sss", $hoten, $email, $password);

  return $stmt->execute();
}


function Authentication($mysqli, $email, $password)
{
  $query = "SELECT * FROM `users` WHERE email=? AND matkhau=?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("ss", $email, $password);
  $stmt->execute();
  $result = $stmt->get_result();
  $rows = $result->num_rows;

  return $rows === 1;
}


function Authorization($mysqli, $email)
{
  $query = "SELECT hoten, role FROM `users` WHERE email=?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $_SESSION['email'] = $email;
  $_SESSION['hoten'] = $row['hoten'];
  $_SESSION['role'] = $row['role'];
}

function checkAccessRole($requiredRole)
{
  if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
  }
  require('database.php');
  $email = $_SESSION["email"];
  $query = "SELECT role FROM users WHERE email=?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();

  if ($user["role"] != $requiredRole) {
    $_SESSION = array();
    session_destroy();
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600, '/');
    }
    header("Location: login.php");
    exit();
  }
}
