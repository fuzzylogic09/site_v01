
<style>
    .nav-link:hover {
        color: black !important;
        /*font-weight: bold;*/
    }
</style>

<nav class="navbar sticky-top border border-primary navbar-expand-lg <?php echo (isset($_SESSION['adminMode']) && $_SESSION['adminMode'] == true) ? 'bg-warning text-bg-white' : 'navbar-light bg-light'; ?>" >
        <div class="container-fluid">
            
        

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                    <?php
                        if (isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] == true) {
                    ?>


                        
                        <li class="nav-item">
                            <a class="nav-link px-2" href="index.php">Tableau de bord</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-2" href="projects.php">Projets</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-2" href="tasks.php">Tâches</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-2" href="workflows.php">Workflows</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-2" href="repository.php">Entrepot</a>
                        </li>

                        
                        <?php
                            if (isset($_SESSION['adminMode']) && $_SESSION['adminMode'] == true) {
                                echo '<li class="nav-item">';
                                echo '<a class="nav-link px-3" href="#">Administration</a>';
                                echo '</li>';
                            }
                        ?>


                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>



                    <?php

                        } else {

                       }

                    ?>

                    


                    
                </ul>







                <ul class="navbar-nav ">

                    <?php
            
                        if (isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] === true) {
                            echo '<li class="nav-item dropdown">';
                            echo '<a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown">';
                            echo 'Logged as NLE';
                            echo '</a>';

                            echo '<ul class="dropdown-menu dropdown-menu-end">';
                            echo '  <li><a class="dropdown-item" href="preferences.php">Preferences</a></li>';
                            echo '  <li><a class="dropdown-item" href="#">Another action</a></li>';
                            echo '  <li><hr class="dropdown-divider"></li>';
                            echo '  <li><a class="dropdown-item" href="logout.php">Logout</a></li>';
                            echo '  </ul>';
                            echo '</li>';
                        } else {
                            echo '<a class="nav-link px-3" href="login.php" data-page="login">Login</a>';
                        }

                    ?>


                </ul>



            </div>
        </div>
    </nav>
