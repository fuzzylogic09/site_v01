<?php 
    session_start();
    include "checkSession.php";
    //include "userVariables.php";
?>



<?php
function generateTaskTable($dataArray) {
    echo '<table class="table table-hover " border="1">';

    //echo '<tr><th>PR</th><th>Title</th><th>Deadline</th></tr>';
    //echo '<tr><th>ID</th><th>Priority</th><th>Title</th><th>Deadline</th></tr>';  // -> to display the id of the task

    foreach ($dataArray as $row) {
        $id = $row[0]; // Get the ID from the first element of the row
        echo '<tr id="' . htmlspecialchars($id) . '" class="clickable" onclick="window.location.href = \'tasks.php?p=' . htmlspecialchars($id) . '\'"; >';

        $priority = $row[1];
        $taskText = $row[2];
        $taskDeadLine = $row[3];    

        echo '<td>';
        
        if ($priority == 1) {
            echo '<span class="badge rounded-pill text-bg-primary">' . htmlspecialchars($priority) . '</span>';
        } elseif ($priority == 2) {
            echo '<span class="badge rounded-pill text-bg-warning">' . htmlspecialchars($priority) . '</span>';
        } elseif ($priority == 3) {
            echo '<span class="badge rounded-pill text-bg-danger">' . htmlspecialchars($priority) . '</span>';
        }


        echo '</td> <td>' . $taskText . '</td> <td>' . $taskDeadLine . '</td>';


        echo '</tr>';
    }

    echo '</table>';
}



    $dataArray = array(
        array(1, 1, "Fonction de tri dans les listes", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Dans toutes les listes, essayer d'intégrer une fonction de tri des colonnes"),
        array(2, 2, "Repository à développer", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(3, 1, "Trim des éléments de liste", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(4, 1, "Uniformiser pages", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(5, 3, "Développer détails projets", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(6, 3, "Ajouter les fiches associées aux projets", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(7, 1, "Update Website Content", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(8, 2, "Attend Team Meeting", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(9, 3, "Research New Ideas", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(10, 1, "Create Marketing Plan", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(11, 2, "Finalize Budget Proposal", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(12, 3, "Collaborate on Project", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(13, 1, "Compile Data Analytics", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(14, 2, "Customer Support Calls", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(15, 3, "Design Product Mockups", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(16, 3, "Design Product Mockups", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(17, 3, "Design Product Mockups", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
        array(18, 3, "Design Product Mockups", date("d-m-Y", strtotime("+" . rand(1, 30) . " days")), "Description de la tache en détail"),
    );

?>



<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include "stylesheets.php"; ?>

        

        <title>Tâches</title>
        
        <style>

        </style>




        <script>
            
            
            const urlParams = new URLSearchParams(window.location.search);
            const pParam = urlParams.get('p');

            function highlightElement(elementId) {
                const element = document.getElementById(elementId);
                if (element) {
                    
                    element.classList.add('table-active');
                }
            }



        </script>



    </head>


    <body>



    <?php
        include "navbar.php";
    ?>









    <main id="main-content">

        <div class="container-fluid <?php echo $_SESSION['globalPaddingTopAfterNav']; ?>">
            <div class="row align-items-start ">
                <div class="col col-lg-4 border pl-0!important">
                    

                    <div class="table-responsive text-nowrap">
                        <?php
                            echo generateTaskTable($dataArray);
                        ?>
                    </div>

                    



                </div>

                <div class="col border overflow-auto">
                    <?php
                        echo '<h5 class="mt-0">';
                        if (isset($_GET['p'])) {
                            echo ($dataArray[$_GET['p'] - 1][2]);
                        } else {
                            echo ($dataArray[1 - 1][2]);
                        }

                        //if (isset($_GET['p'])) {
                        //    echo $_GET['p'];
                        //} else {
                        //    echo '';
                        //}

                        echo '</h5>'
                    ?>



                    <div class="d-flex bd-highlight">
                        <div class="col-md-2 bd-highlight">Deadline</div>
                        <div class="col-md-8 bd-highlight">20/03/2023</div>
                        <div class="ms-auto bd-highlight">Priority:
                            <span class="badge rounded-pill text-bg-danger">3</span>
                        </div>
                    </div>
                    
                    <div class="d-flex bd-highlight">
                        <div class="col-md-2 bd-highlight">Version</div>
                        <div class="col-md-8 bd-highlight">3</div>
                    </div>
                    
                    <div class="d-flex bd-highlight">
                        <div class="col-md-2 bd-highlight">Last update</div>
                        <div class="col-md-8 bd-highlight">18/03/2023</div>
                    </div>
                    
                    <div class="d-flex bd-highlight">
                        <div class="col-md-2 bd-highlight">Last update by</div>
                        <div class="col-md-8 bd-highlight">Me</div>
                    </div>
                    
                    <div class="d-flex bd-highlight mt-3">
                        <div class="col-md-12 bd-highlight">
                            <label for="exampleFormControlTextarea1" class="form-label">Task description:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6">Description of the task. Any modification will create a new version !</textarea>
                        </div>
                    </div>



                    
                    <div class="d-flex bd-highlight mt-3 align-items-center me-auto">
                        <div class="col-md-2 bd-highlight">Task history</div>
                        <div class="col-md-10 bd-highlight">

                            <select class="form-select form-select-sm" aria-label="">
                                
                                <option value=687>Version 3 (20/05/2018)</option>
                                <option value=657>Version 2 (18/05/2018)</option>
                                <option value=351>Version 1 (15/05/2018)</option>
                            </select>

                        </div>
                    </div>
        
                </div>

            </div>
        </div>

            
   

    </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            // Use the 'p' parameter value to expand the specified element
            if (pParam) {
                highlightElement(pParam);
            }


        </script>


    </body>

</html>