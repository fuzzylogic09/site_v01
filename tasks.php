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

            body {
                margin: 0;
                padding: 0;
                
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f1f1f1;
                margin-top: 0px;
            }

            .sticky-notes-container {
                display: flex;
                flex-wrap: wrap;
            }

            .sticky-note {
                width: 200px;
                height: 200px;
                background-color: #ffd54f;
                border-radius: 10px;
                box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
                margin: 10px;
                overflow: hidden;
            }

            .note-header {
                width: 100%;
                height: 30px;
                background-color: #ffa000;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .note-content {
                padding: 10px;
            }

            .note-content p {
                margin: 0;
                font-family: Arial, sans-serif;
                color: #333;
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

            <h2>Tasks</h2>
            <div class="sticky-notes-container">
                <div class="sticky-note">
                    <div class="note-header"></div>
                    <div class="note-content">
                        <p>This is sticky note 1.</p>
                    </div>
                </div>
                <div class="sticky-note">
                    <div class="note-header"></div>
                    <div class="note-content">
                        <p>This is sticky note 2.</p>
                    </div>
                </div>
                <div class="sticky-note">
                    <div class="note-header"></div>
                    <div class="note-content">
                        <p>This is sticky note 3.</p>
                    </div>
                </div>
                <div class="sticky-note">
                    <div class="note-header"></div>
                    <div class="note-content">
                        <p>This is sticky note 4.</p>
                    </div>
                </div>
                <div class="sticky-note">
                    <div class="note-header"></div>
                    <div class="note-content">
                        <p>This is sticky note 5.</p>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
