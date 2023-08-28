<?php

    if ($_SESSION["LOGGED_IN"] == False) {
        echo "<meta http-equiv='refresh' content='0;url=login.php'>";
        exit();
    } else {

        if (isset($_SESSION['sessionTimeout']) && $_SESSION['sessionTimeout'] == true) {

            if (isset($_SESSION['lastTimestamp']) && (time() - $_SESSION['lastTimestamp']) > $_SESSION['inactivityTime']) {
                session_unset();
                session_destroy();
            
                //Redirect user to login page
                header("Location: login.php?p=timeout");
                exit();
            } else {
                // Regenerate new session id and delete old one to prevent session fixation attack
                session_regenerate_id(true);
                $_SESSION['lastTimestamp'] = time();
            }
        }
    }

?>