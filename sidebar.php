<pre>
    <?php
        //var_dump($_POST);
        //var_dump($_GET);
        //var_dump($_SESSION);
    ?>
</pre>


<?php if ($_SESSION['LOGGED_IN'] == 'true'): ?>
    <div class="profile">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="profile_picture">
        <h3>Nicolas Lefevre</h3>
        <p>NL254707</p>
    </div>


    <ul>
        <li>
            <a href="dashboard.php">
                <span class="icon"><i class="fas fa-desktop"></i></span>
                <span class="item">My Dashboard</span>
            </a>
        </li>

        <li>
            <a href="tasks.php">
                <span class="icon"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                <span class="item">Tasks</span>
            </a>
        </li>

        <li>
            <a href="projects.php" target="contentFrame">
                <span class="icon"><i class="fas fa-cogs"></i></span>
                <span class="item">Projects</span>
            </a>
        </li>

        <li>
            <a href="phonebook.php">
                <span class="icon"><i class="fas fa-chart-line"></i></span>
                <span class="item">Phone book</span>
            </a>
        </li>


        <li>
            <a href="admin.php" target="contentFrame">
                <span class="icon"><i class="fas fa-user-shield"></i></span>
                <span class="item">Admin</span>
            </a>
        </li>
        <li>
            <a href="settings.php" target="contentFrame">
                <span class="icon"><i class="fas fa-cog"></i></span>
                <span class="item">Settings</span>
            </a>
        </li>

        <li>
            <a href="logout.php">
                <span class="icon"><i class="fas fa-universal-access"></i></span>
                <span class="item">Logout</span>
            </a>
        </li>

    </ul>










<?php else: ?>



    <ul>
        <li>
            <a href="login.php">
                <span class="icon"><i class="fas fa-universal-access"></i></span>
                <span class="item">Login</span>
            </a>
        </li>

    </ul>

<?php endif; ?>




