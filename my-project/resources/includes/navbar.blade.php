<header class="nav">
    <section class="Titel">
        <h1>Xenia Ludus Hub</h1>
    </section>
    <section>

        <a href="">Qna</a>
        <a href="">game</a>
        <a href="">Company</a>
        </ul>
    </section>
    <section>
        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo '<a class="admin-btn" href="adminpanel.php">Admin</a>';
        }
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'docent') {
            echo '<a class="admin-btn" href="docentpanel.php">docent</a>';
        }

        if (isset($_SESSION['user_id'])) {
            $profileHref = "profile.php?id=" . urlencode($_SESSION['user_id']);
        } else {
            $profileHref = "loginform.php";
        }
        ?>
    </section>
</header>