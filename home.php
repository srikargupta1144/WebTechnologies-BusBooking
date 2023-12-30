<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Woxsen university Bus Bookings</title>
  <link rel="stylesheet" href="cssfile/nav.css">
  <link rel="stylesheet" href="cssfile/footer.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
  <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style type="text/css">
    body {
      background-image: url(image/1.jpg);
      background-size: cover;
      background-attachment: fixed;
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      background-color: black;
    }

    #container {
      height: 100vh;
      width: 100%;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      transition: 2s;
      font-family: cursive;
      animation-name: animate;
      animation-direction: alternate-reverse;
      animation-duration: 50s;
      animation-fill-mode: forwards;
      animation-iteration-count: infinite;
      animation-play-state: running;
      animation-timing-function: ease-in-out;
    }

    @keyframes animate {
      0% {
        background-image: url(image/1.1.jpg);
      }

      10% {
        background-image: url(image/1.2.jpg);
      }

      20% {
        background-image: url(image/1.3.jpg);
      }

      30% {
        background-image: url(image/1.4.jpg);
      }

      40% {
        background-image: url(image/1.5.jpg);
      }

      50% {
        background-image: url(image/1.6.png);
      }

      60% {
        background-image: url(image/1.7.jpeg);
      }

      70% {
        background-image: url(image/1.8.jpg);
      }

      80% {
        background-image: url(image/1.9.jpg);
      }

      90% {
        background-image: url(image/2.0.jpg);
      }

      100% {
        background-image: url(image/1.1.jpg);
      }
    }

    .home_details {
      color: #fff;
      font-family: inherit;
      font-size: 74px;
      padding: 162px 5px 5px 185px;
    }

    .font {
      color: #F9522E;
    }

    .btnHome {
      font-family: inherit;
      background-color: #F9522E;
      padding: 13px 44px 13px 44px;
      font-size: 18px;
      border-style: none;
    }

    .btnHome:hover {
      background-color: orange;
      cursor: pointer;
    }
  </style>
  <script src="https://www.gstatic.com/dialogflow-console/fast/df-messenger/prod/v1/df-messenger.js"></script>
  <df-messenger location="us-central1" project-id="cloudcomputing-404212"
    agent-id="3cb7d883-6320-4a3f-a2a1-fde0c44373ec" language-code="en">
    <df-messenger-chat-bubble chat-title="BUS_BOOKINGS">
    </df-messenger-chat-bubble>
  </df-messenger>
  <style>
    df-messenger {
      z-index: 999;
      position: fixed;
      bottom: 16px;
      right: 16px;
    }
  </style>
</head>

<body>
  <div id="container">
    <?php include("nav.php");
    ?>
    <h1 class="home_details">Your Bus Pass.Anytime. <br>
      <font class="font">Anywhere..</font>
      <br>
      <a href="signUp.php"> <button class="btnHome">SIGN UP NOW</button></a>
    </h1>
  </div>
  <div class="section">
    <video autoplay loop muted class="section">
      <source src="video\Video.webm" type="video/webm">
    </video>
  </div>
  <?php include("footer.php");
  ?>
</body>
</html>