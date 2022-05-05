<?php 
    $title = "Se connecter";
    $cssPath = "../css/styles.css";

    include("../partials/header.php");
    
    require("../includes/Input.php");
    
?>

<div id="container">
    <form class="form-container" method="POST">

        <h1 class="form-title">Se connecter</h1>

        <?php

            Input("Username");
            Input("Password");

        ?>  

        <button class="form-btn-submit" type="submit">Se connecter</button>
    </form>
</div>

<?php include("../partials/footer.php"); ?>