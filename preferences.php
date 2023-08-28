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




            <form action="setPreferences.php" method="POST" class="border border-primary mx-2 mt-2">
                <div class="form-group row">
                    <div class="col-sm-2">Administrateur</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" name="adminCheckBox" type="checkbox" id="administrateur" <?php echo ($_SESSION['adminMode'] == true) ? 'checked' : ''; ?>>
                            
                        </div>
                    </div>


                    <div class="col-sm-2">Session Timeout</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" name="sessionTimeoutCheckBox" type="checkbox" id="sessiontimeout" <?php echo ($_SESSION['sessionTimeout'] == true) ? 'checked' : ''; ?>>
                            
                        </div>
                    </div>
                </div>
                    
                <div class="form-group row pt-0">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row pt-2">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <fieldset class="form-group pt-2">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

                
                <div class="form-group row pt-4">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Save Preferences</button>
                    </div>
                </div>
            </form>
    
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    </body>

</html>