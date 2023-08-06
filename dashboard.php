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
                
                background-color: #f1f1f1;
                margin-top: 0px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
                text-align: left;
            }
            tr:hover {
                background-color: #f5f5f5;
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

                <h2>Dashboard</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023-07-25</td>
                            <td>Meeting with Client</td>
                            <td>Discussed project requirements and scope</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>2023-07-26</td>
                            <td>Design Review</td>
                            <td>Reviewed and approved UI mockups</td>
                            <td>In Progress</td>
                        </tr>
                        <tr>
                            <td>2023-07-27</td>
                            <td>Code Development</td>
                            <td>Implemented backend functionality</td>
                            <td>Not Started</td>
                        </tr>
                        <tr>
                            <td>2023-07-28</td>
                            <td>Testing</td>
                            <td>Performed unit testing</td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>2023-07-29</td>
                            <td>Documentation</td>
                            <td>Wrote user documentation</td>
                            <td>In Progress</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </body>
</html>
