<?php 
    $title = "Se connecter";
    $cssPath = "../css/styles.css";

    include("../partials/header.php");
    
    require("../includes/Input.php");

    if (isset($_POST["sign-up"])) {

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $error_array = [];

        if (empty($username))
            $error_array[] = "Le nom d'utilisateur est vide! <br/>";
        if (empty($email))
            $error_array[] = "L'email est vide! <br/>";
        if (empty($password))
            $error_array[] = "Le mot de passe est vide! <br/>";

        if ($username && $email && $password) {
            $db -> addUser($username, $email, $password);
            header("Location: ../index.php");
        } else {
            $display = "block";
        }
    }
    
?>

<div id="container">

    <form class="form-container" method="POST">

        <h1 class="form-title">Se connecter</h1>

        <?php

            Input("Username", "text");
            Input("Email", "text");
            Input("Password", "password");

        ?>  

        <button class="form-btn-submit" type="submit" name="sign-up">Se connecter</button>
        <p class="form-error" style="display: <?= $display ?? "none" ?>;">
            <?php

                if ($display) {
                    foreach ($error_array as $error) {
                        echo $error;
                    }
                }

            ?>
        </p>
    </form>
</div>

<?php include("../partials/footer.php"); ?>