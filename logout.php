<?php
    session_start();
?>



<main id="main-content">


    <?php
        $_SESSION = [];
        session_unset();
        
        $_SESSION['LOGGED_IN'] = false;
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        exit();
    ?>

</main>

