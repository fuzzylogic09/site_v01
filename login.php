<?php 
    session_start();
?>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the variable "example_variable" is set in the $_POST superglobal array
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // The variable is set, you can now access its value
        $_SESSION['USERNAME'] = $_POST['username'];
        $_SESSION['PASSWORD'] = $_POST['password'];




        
        if ($_SESSION['USERNAME'] == 'NLE') {
            $_SESSION['LOGGED_IN'] = true;
                
                echo "<meta http-equiv='refresh' content='0;url=dashboard.php'>";
        } else {
            $_SESSION['LOGGED_IN'] = false;
        }



    } else {
        
    }
}



?>

    

<!DOCTYPE html>

<html lang="en">

    <?php
        include "head.php";
    ?>

    <head>
        <title>Login</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                
                justify-content: center;
                align-items: center;
                
                background-color: #f1f1f1;
                margin-top: 0px;
            }


            /*
            LOGIN styles
            */


            .login-container{
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex: 1;
                
            }
            .my-form{
                background: rgb(5, 68, 104);
                padding: 10px 20px;
                border-radius: 10px;
            }
            .form-title{
                text-align: center;
                margin-bottom: 5px;
            }
            .form-title h1{
                margin: 0px;
                color: #0cd6a8;
            }
            .single-input{
                width: 300px;
                border:1px solid #c1c1c1;
                display: flex;
                margin-top: 6px;
                margin-bottom: 6px;
                font-size: 16px;
                margin-left: 5px;
                margin-right: 5px;
            }
            .single-input i{
                padding: 8px 16px;
                color: #0cd6a8;
            }
            .single-input input{
                border:0px solid #c1c1c1;
                width: 100%;
                outline: none;
                height: 30px;
                font-size: 16px;
            }
            .submit-btn{
                border:0px solid #c1c1c1;
                margin-top: 20px;
            
            }
            .submit-btn input{
            background: #0cd6a8;
            color: #fff;
            cursor: pointer; 
            }


        </style>
    </head>

    <body>
        

        <div class="container">
            <div class="sidebar">
                <?php
                    include "sidebar.php";
                ?>

            </div>

            <div class="main">

                <div class="login-container">
                    <!-- form start -->
                    <div class="my-form">
                        <div class="form-title">
                            <h1>Login</h1>
                        </div>
                        
                        <!-- main form -->
                        <form action="login.php" method="POST">
                            <div class="single-input">
                                <span><i class="fas fa-user"></i></span>
                                <input type="text" name="username" placeholder="User Name">
                                
                            </div>
                            <div class="single-input">
                                <span><i class="fas fa-unlock"></i></span>
                                <input type="password" name="password" placeholder="Password">
                                
                            </div>

                            <div class="single-input submit-btn">
                                <input type="submit" value="Login">
                                
                                
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>