<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html>

<head>
  <title>booking page</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="cssfile/sidebar.css">
  <link rel="stylesheet" href="cssfile/signUp.css">
  <style type="text/css">
    body {
      background-image: url("image/1.8.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .adminTopic {
      text-align: center;
      color: #fff;
    }

    table {
      width: 99%;
      border-collapse: separate !important;
      margin: auto;
      /*/table-layout:fixed;/*/
      text-align: center;
      margin-top: 50px;
      background-color: rgb(255, 255, 255);
      border-radius: 10px 10px 0px 0px;
    }

    table th {
      border-bottom: 2px solid rgb(187, 187, 187);
      padding: 10px 0px 10px 0px;
      font-family: "balsamiq_sansitalic" !important;
    }

    table tr td {
      border-right: 2px solid rgb(187, 187, 187);
      height: 58px;
      padding: 22px 0px 0px 0px;
      font-family: "monospace;" !important;
      border-bottom: 2px solid rgb(187, 187, 187);
      font-size: 20px;
    }

    table tr td a {
      /*background-color: rgb(255, 196, 0);*/
      color: white;
      border-radius: 5px;
      padding: 6px;
      text-decoration: none;
      margin: 10px;
      font-weight: 700;
    }

    table tr td button:hover {
      padding: 5px 5px 5px 5px;
      border: 2px solid yellow;
      border-radius: 7px;
      background-color: red;
      color: white;
      cursor: pointer;
    }

    button {
      padding: 5px 5px 5px 5x;
    }

    .btnPolicy {
      padding: 5px 5px 5px 5px;
      border: 2px solid yellow;
      border-radius: 7px;
      background-color: red;
      color: white;
      margin-left: 20px;
    }

    .btnPolicy:hover {

      background: red;
      padding: 7px 7px 7px 7px;
      cursor: pointer;
    }

    .idclass {
      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;
    }
  </style>
  </script>
</head>

<body>
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
  </label>
  <div class="sidebar">
    <header><img src="image/avatar.png">
      <p>
        <?php echo $user_data['username']; ?>
      </p>
    </header>
    <ul>
      <li><a href="viewBus.php">Ticket Booking</a></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>
  <div class="sidebar2">
    <?php
    if (isset($_POST['AddBooking'])) {
      $passenger = $_POST['passenger_name'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $board_place = $_POST['board_place'];
      $desti = $_POST['Your_destination'];

      // Validate telephone number (10 digits)
      if (!preg_match("/^\d{10}$/", $tel)) {
        echo '<script type="text/javascript">alert("Invalid Telephone Number. Please enter 10 digits.")</script>';
      } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Validate email format
        echo '<script type="text/javascript">alert("Invalid Email Address.")</script>';
      } else {
        // All validations passed, proceed with database insertion
        if ($conn->connect_error) {
          die('Connection Failed: ' . $conn->connect_error);
        } else {
          $stmt = $conn->prepare("INSERT INTO booking(passenger_name, telephone, email, boarding_place, Your_destination) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss", $passenger, $tel, $email, $board_place, $desti);
          $stmt->execute();
          echo ("<script LANGUAGE='JavaScript'>
              window.alert('Successfully added!!!');
              window.location.href='AddPay.php';
              </script>");
          $stmt->close();
          $conn->close();
        }
      }
    }
    ?>
    <div class="wrapper">
      <div class="registration_form">
        <div class="title">Book Your Ticket</div>
        <form action="#" method="POST">
          <div class="form_wrap">
            <div class="input_wrap">
              <label for="title">Passenger Name</label>
              <input type="text" id="title" name="passenger_name" placeholder="Passenger Name" required>
            </div>
            <div class="input_wrap">
              <label for="title">Telephone</label>
              <input type="text" id="title" name="tel" placeholder="Tel" required>
            </div>
            <div class="input_wrap">
              <label for="title">E-mail</label>
              <input type="E-mail" id="title" name="email" placeholder="E-mail" class="idclass" required>
            </div>
            <div class="input_wrap">
              <label for="title">Board Place</label>
              <input type="text" id="title" name="board_place" placeholder="board place" required>
            </div>
            <div class="input_wrap">
              <label for="title">Destination</label>
              <input type="text" id="title" name="Your_destination" placeholder="Your destination" required>
            </div>
            <div class="input_wrap">
              <input type="submit" value="Booking Now" class="submit_btn" name="AddBooking">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>