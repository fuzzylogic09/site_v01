<?php 
    session_start();
    include "checkSession.php";
?>


<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "stylesheets.php"; ?>
        
        <title>Home</title>
        
        <style>

        </style>

    </head>


    <body>

        <?php
            include "navbar.php";
        ?>

        <main id="main-content">
            
            <div class="container-fluid <?php echo $_SESSION['globalPaddingTopAfterNav']; ?>">
                <div class="row align-items-start">
    

    

                
    
            </div>








            <div class="container">

                <div class="row ">
                    <div class="col-sm me-auto border">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tache</th>
                                    <th scope="col">Echéance</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-sm border">
                        <div class="list-group <?php echo $_SESSION['globalPaddingTopAfterNav']; ?>">
                            <a href="projects.php?p=2" class="list-group-item list-group-item-action list-group-item-danger">Project 1</a>
                            <a href="projects.php?p=1" class="list-group-item list-group-item-action list-group-item-success">Project 2</a>
                            <a href="projects.php?p=6" class="list-group-item list-group-item-action list-group-item-warning">Project 3</a>
                            <a href="projects.php?p=10" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                        </div>
                    </div>
                </div>


                <div class="row border">
                    test

                </div>
            </div>
    
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>