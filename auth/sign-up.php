<?php 
    $title = "S'inscrire";
    $cssPath = "../css/styles.css";

    include("../partials/header.php");
    
    require("../includes/Input.php");

    if (!empty($_POST)) {

        if (isset($_POST["username"], $_POST["email"], $_POST["password"])) {

            $username = strip_tags($_POST["username"]);
            $email = strip_tags($_POST["email"]);
            $password = password_hash(strip_tags($_POST["password"]), PASSWORD_BCRYPT);
    
            $error_array = [];
    
            if (empty($username))
                $error_array[] = "Le nom d'utilisateur est vide! <br/>";
            if (empty($email))
                $error_array[] = "L'email est vide! <br/>";
            else
                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                    $error_array[] = "L'email est invalide !";
            if (empty($password))
                $error_array[] = "Le mot de passe est vide! <br/>";
    
            if ($username && $email && $password && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $db -> addUser($username, $email, $password);
                header("Location: ../index.php");
            } else {
                $display = "block";
            }
        }
    }
?>

<div id="container">

    <form class="form-container" method="POST">

        <h1 class="form-title">S'inscrire</h1>

        <?php

            Input("Username", "text");
            Input("Email", "email");
            Input("Password", "password");

        ?>  

        <button class="form-btn-submit" type="submit" name="sign-up">S'inscrire</button>
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