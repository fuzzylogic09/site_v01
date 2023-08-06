<?php 
    session_start();
    $_SESSION["loggedIn"] = False;
?>


<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <title>Simple Site</title>
        <link rel="stylesheet" href="styles.css">

        <style>

            * {
                list-style: none;
                text-decoration: none;
            }
            .contact-list {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
            }

            .contact {
                background-color: #f7f7f7;
                border: 1px solid #ddd;
                padding: 10px;
                border-radius: 5px;
            }

            .contact-name {
                font-weight: bold;
                margin-bottom: 5px;
            }

            .contact-phone {
                color: #666;
            }

            iframe {
                width: 100%;
                height: 350px;
                border: none;
                padding-top: 20px;
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

                <h2>Phonebook</h2>

                <div class="contact-list">
                    <a href="phonebookdetail.php?id=1" target="phonebookdetail">
                        <div class="contact">
                            <div class="contact-name">John Doe</div>
                            <div class="contact-phone">+1 (123) 456-7890</div>
                        </div>
                    </a>
                    
                    <a href="phonebookdetail.php?id=2" target="phonebookdetail">
                        <div class="contact">
                            <div class="contact-name">Jane Smith</div>
                            <div class="contact-phone">+1 (987) 654-3210</div>
                        </div>
                    </a>

                    <a href="phonebookdetail.php?id=3" target="phonebookdetail">
                        <div class="contact">
                            <div class="contact-name">Michael Johnson</div>
                            <div class="contact-phone">+1 (555) 123-4567</div>
                        </div>
                    </a>

                    <a href="phonebookdetail.php?id=4" target="phonebookdetail">
                        <div class="contact">
                            <div class="contact-name">Emily Davis</div>
                            <div class="contact-phone">+1 (222) 789-4561</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>


    </body>

</html>