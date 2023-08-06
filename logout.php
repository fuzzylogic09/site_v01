<?php 
    session_start();
?>


<?php
    $vars = array_keys(get_defined_vars());
    for ($i = 0; $i < sizeOf($vars); $i++) {
        unset($vars[$i]);
    }
    unset($vars,$i);
    session_unset();
    $_SESSION['LOGGED_IN'] = false;

    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
?>