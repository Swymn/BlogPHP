<?php
    session_start();
?>
<div id="navbar">
    <p class="logo"><a href="/blog/index.php">Blog</a></p>
    <div class="menu">
        <div class="search-bar">
            <input type="text" name="search" placeholder="Rechercher...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <ul class="menu-connexion">
            <!-- TODO : Modifier le chemin d'accès (Optimisation) -->
            <?php if (!isset($_SESSION["user"])) {?>
                <li class="sign-in"><a href="/blog/auth/sign-in.php">Se connecter</a></li>
                <li class="sign-up"><a href="/blog/auth/sign-up.php">S'inscrire</a></li>
            <?php }else { ?>
                <li class="disconnect"><a href="/blog/auth/logout.php">Se déconnecter</a></li>
            <?php } ?>
        </ul>
    </div>
</div>