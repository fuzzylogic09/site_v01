<?php
    session_start();


    // admin mode
    $_SESSION['adminMode'] = false;
    if (isset($_POST['adminCheckBox']) && $_POST['adminCheckBox'] == 'on') {
        $_SESSION['adminMode'] = true;
    } else {
        $_SESSION['adminMode'] = false;
    }



    // Session timeout
    if (isset($_POST['sessionTimeoutCheckBox']) && $_POST['sessionTimeoutCheckBox'] == 'on') {
        $_SESSION['sessionTimeout'] = true;
    } else {
        $_SESSION['sessionTimeout'] = false;
    }




    echo "<meta http-equiv='refresh' content='0;url=preferences.php'>";
    exit();
?>
