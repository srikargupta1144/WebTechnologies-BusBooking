<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Sign Up</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/signUp.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <style type="text/css">
        body {
            background-image: url(image/1.8.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .confirm {
            background-color: black;
            margin-top: 5px;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .registration_form {
            text-align: center;
        }

        .title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form_wrap {
            display: flex;
            flex-direction: column;
        }

        .input_wrap {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        .submit_btn {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include("nav.php"); ?>
    <div class="confirm">
        <?php
        session_start();
        include("connection.php");
        include("function.php");
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $admin_username = $_POST['admin_username'];
            $admin_password = $_POST['admin_password'];
            $admin_con_pass = $_POST['admin_cpassword'];

            if (!empty($admin_username) && !empty($admin_password) && !is_numeric($admin_username)) {
                if ($admin_password == $admin_con_pass) {
                    $query = "INSERT INTO admin_table (admin_username, admin_password) VALUES ('$admin_username', '$admin_password')";
                    mysqli_query($conn, $query);
                    echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Admin registration successful!');
                            window.location.href='AdminLogin.php';
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
            <div class="title">Admin Sign Up</div>
            <form action="#" method="POST">
                <div class="form_wrap">
                    <div class="input_wrap">
                        <label for="admin_username">Admin Username</label>
                        <input type="text" id="admin_username" name="admin_username" placeholder="Admin Username"
                            required>
                    </div>
                    <div class="input_wrap">
                        <label for="admin_password">Admin Password</label>
                        <input type="password" id="admin_password" name="admin_password" placeholder="Admin Password"
                            required>
                    </div>
                    <div class="input_wrap">
                        <label for="admin_cpassword">Confirm Admin Password</label>
                        <input type="password" id="admin_cpassword" name="admin_cpassword"
                            placeholder="Confirm Admin Password" required>
                    </div>
                </div>
                <div class="input_wrap">
                    <input type="submit" value="Register Now" class="submit_btn">
                </div>
            </form>
        </div>
    </div>
</body>

</html>