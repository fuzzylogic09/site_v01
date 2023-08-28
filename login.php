<?php 
    session_start();
?>


<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "stylesheets.php"; ?>
        
        <title>test</title>
        

        <style>

        </style>

    </head>


    <body>


    <?php
        include "navbar.php";
    ?>






    <main id="main-content">





    <?php



        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['username']) && isset($_POST['password'])) {
                $_SESSION['USERNAME'] = $_POST['username'];
                
                if ($_SESSION['USERNAME'] == 'NLE') {
                    $_SESSION['LOGGED_IN'] = true;
                    include "userVariables.php";
                    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
                    exit();
                } else {
                    $_SESSION['LOGGED_IN'] = false;
                    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
                    exit();
                }
            }
        }
    ?>


    <style>


        body{
        margin: 0;
        padding: 0;
        
        background-repeat: no-repeat;
        background-size: cover;
        //background: linear-gradient(120deg, #007bff, #d0314c);
        height: 100vh;
        overflow: hidden;
        }

        .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 29vw;
        background: white;
        border-radius: 10px;
        }

        .center h1{
        text-align: center;
        padding: 0 0 20px 0;
        border-bottom: 1px solid silver;
        }

        .center form{
        padding: 0 40px;
        box-sizing: border-box;
        }

        form .txt_field{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
        }

        .txt_field input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
        }

        .txt_field label{
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        }

        .txt_field span::before{
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0px;
        height: 2px;
        background: #2691d9;
        transition: .5s;
        }

        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
        top: -5px;
        color: #2691d9;
        }

        .txt_field input:focus ~ span::before,
        .txt_field input:Valid ~ span::before{
        width: 100%;
        }

        .pass{
        margin: -5px 0 20px 5px;
        color: #a6a6a6;
        cursor: pointer;
        }

        .pass:hover{
        text-decoration: underline;
        }

        input[type="Submit"]{
        width: 100%;
        height: 50px;
        border: 1px solid;
        border-radius: 25px;
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;

        }

        input[type="Submit"]:hover{
        background: #2691d9;
        color: #e9f4fb;
        transition: .5s;
        }

        .signup_link{
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #666666;
        }

        .signup_link a{
        color: #2691d9;
        text-decoration: none;
        }

        .signup_link a:hover{
        text-decoration: underline;
        }

        .HomeAbout{
        width: 100vw;
        height: 25vh;
        }


    </style>






    <div class="container">
        <div class="center">
            <h1>Login</h1>
            <form action="login.php" method="POST">
                <div class="txt_field">
                    <input type="text" name="username" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="password">
                    <span></span>
                    <label>Password</label>
                </div>
                <div class="pass">Forget Password?</div>
                <input name="submit" type="Submit" value="Login">
                <div class="signup_link">
                    Not a Member ? <a href="signup.php">Signup</a>
                </div>
            </form>
        </div>






    </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>









        <script>

        </script>


    </body>

</html>