<?php
include("auth_user.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dashboard - Client area</title>
  <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/4/45/IOS_14_Logo.png">
</head>

<body>
  <div id="hd">
    <?php
    include "header.php";
    ?>
  </div>

  <div class="form">
    <h1>Hey, <?php echo $_SESSION['email']; ?>!</h1>
    <p>You are now user dashboard page.</p>
    <p><a href="cart.php">Cart</a></p>
    <p><a href="logout.php">Logout</a></p>
  </div>

  <div id="footer">
    <?php
    include "footer.php";
    ?>
  </div>
</body>

</html>