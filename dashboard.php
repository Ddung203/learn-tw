<?php
include("auth_user.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dashboard - Client area</title>
  <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/4/45/IOS_14_Logo.png">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="form">
    <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
    <p>You are now user dashboard page.</p>
    <p><a href="logout.php">Logout</a></p>
  </div>
</body>

</html>