<?php
include("auth_admin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/4/45/IOS_14_Logo.png">
  <title>Admin Page</title>
</head>

<body>

  <h1>Đây là trang của Admin</h1>
  <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
  <p><a href="list_ad.php">List</a></p>
  <p><a href="logout.php">Logout</a></p>
</body>

</html>