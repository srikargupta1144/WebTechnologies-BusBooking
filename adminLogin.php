<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="cssfile/nav.css">
  <link rel="stylesheet" href="cssfile/footer_l.css">
  <link rel="stylesheet" href="cssfile/login.css">
  <link rel="stylesheet" a href="css\font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      background-image: url(image/1.3.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    .sign_up {
      font-size: 20px;
    }
    .sign_up:hover {
      background-color: #fff;
    }
  </style>
</head>
<body>
  <?php include("nav.php"); ?>
  <?php include("connection.php"); ?>
  <div class="login-box">
    <img src="image/logo.jpg" class="avatar">
    <h1>Admin Login</h1>
    <form method="POST">
      <p>Username</p>
      <input type="text" name="Admin_username" placeholder="Enter Username">
      <p>Password</p>
      <input type="password" name="Admin_password" placeholder="Enter Password">
      <input type="submit" name="login" value="Login">
      <!--<a href="AdminSignUp.php" class="sign_up">sign up</a>&nbsp&nbsp&nbsp
      <a href="#">Forget Password</a>-->
    </form>
  </div>
  <?php
  if (isset($_POST['login'])) {
    $admin_username = $_POST['Admin_username'];
    $admin_password = $_POST['Admin_password'];
    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM `admin_table` WHERE admin_username=? AND admin_password=?";
    $stmt = mysqli_prepare($conn, $query);
    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'ss', $admin_username, $admin_password);
    // Execute the query
    mysqli_stmt_execute($stmt);
    // Store the result
    mysqli_stmt_store_result($stmt);
    // Check if a row is returned
    if (mysqli_stmt_num_rows($stmt) == 1) {
      $_SESSION['username'] = $admin_username;
      header("location:adminDash.php");
    } else {
      echo '<script type="text/javascript">alert("Incorrect username or password!")</script>';
    }
    // Close the statement
    mysqli_stmt_close($stmt);
  }
  ?>
</body>
</html>