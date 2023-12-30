<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Vahan solutions</title>
  <link rel="stylesheet" href="cssfile/nav.css">
  <link rel="stylesheet" href="cssfile/signUp.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <style type="text/css">
    body {
      background-image: url(image/1.8.jpg);
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .confirm {
      background-color: black;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <?php include("nav.php");
  ?>
  <div class="confirm">
    <?php
    // Define the sendConfirmationEmail function
    function sendConfirmationEmail($toEmail)
    {
      // Add your email sending logic here
      // You might use PHP's mail() function or a third-party library like PHPMailer
      // Example using mail() function:
      $subject = 'Registration Confirmation';
      $message = 'Thank you for registering with Vahan Solutions. Your registration is confirmed.';
      $headers = 'From: Manish_2025@woxsen.edu.in'; // Replace with your email address
    
      mail($toEmail, $subject, $message, $headers);
    }
    session_start();
    include("connection.php");
    include("function.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Include the Composer autoloader
    require 'vendor/autoload.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $user_name = $_POST['user_name'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $con_pass = $_POST['cpassword'];

      if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        if ($password == $con_pass) {
          $user_id = random_num(20);
          $query = "insert into users (user_id,First_Name,Last_Name,username,email,password) values ('$user_id','$fname','$lname','$user_name','$email','$password')";
          mysqli_query($conn, $query);

          // Add the code to send confirmation email here
          sendConfirmationEmail($email);

          echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Successfully registered! A confirmation email has been sent to your email address.');
                    window.location.href='Login.php';
                  </script>");
        } else {
          echo "Please enter confirm password as the previous one!!";
        }
      } else {
        echo "Please enter valid information!";
      }
    }
    ?>

  </div>
  <div class="wrapper">
    <div class="registration_form">
      <div class="title">
        Sign Up
      </div>
      <form action="#" method="POST">
        <div class="form_wrap">
          <div class="input_grp">
            <div class="input_wrap">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="fname" placeholder="First Name" required>
            </div>
            <div class="input_wrap">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lname" placeholder="Last Name" required>
            </div>
          </div>
          <div class="input_wrap">
            <label for="email">Email Address</label>
            <input type="text" id="email" name="email" placeholder="E-mail" required>
          </div>
          <div class="input_wrap">
            <label for="uname">Username</label>
            <input type="text" id="uname" name="user_name" placeholder="Username" required>
          </div>
          <div class="input_wrap">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password" required>
          </div>
          <div class="input_wrap">
            <label for="Confirm_password">Confirm Password</label>
            <input type="password" id="password" name="cpassword" placeholder="password" required>
          </div>
          <div class="input_wrap">
            <input type="submit" value="Register Now" class="submit_btn">
          </div><br>
          <p>Already have account?</p>
          <a href="Login.php" class="sign_up">Login up</a>&nbsp&nbsp&nbsp
        </div>
      </form>
    </div>
  </div>
</body>

</html>