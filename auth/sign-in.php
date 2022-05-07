<?php 
    $title = "Se connecter";
    $cssPath = "../css/styles.css";

    include("../partials/header.php");
    
    require("../includes/Input.php");
    
    if (!empty($_POST)) {

        if (isset($_POST["username"], $_POST["password"])) {

            $username = strip_tags($_POST["username"]);
            $password = strip_tags($_POST["password"]);
    
            $error_array = [];
    
            if (empty($username))
                $error_array[] = "Le nom d'utilisateur est vide! <br/>";
            if (empty($password))
                $error_array[] = "Le mot de passe est vide! <br/>";
    
            if ($username && $password) {
                $user = $db -> getUser($username);
                if (!$user)
                    $error_array[3] = "Utilisateur et/ou le mot de passe est incorect <br/>";
                else {

                    if (password_verify($password, $user["password"])) {
                        session_start();
                        $_SESSION["user"] = [
                            "id" => $user["id"],
                            "username" => $user["username"],
                            "email" => $user["email"],
                            "roles" => $user["roles"]
                        ];
                        header("Location: ../index.php");
                    }
                    
                    else
                        $error_array[3] = "Utilisateur et/ou le mot de passe est incorect <br/>";
                }
            } else {
                $display = "block";
            }
        }
    }

?>

<div id="container">
    <form class="form-container" method="POST">

        <h1 class="form-title">Se connecter</h1>

        <?php

            Input("Username", "text");
            Input("Password", "password");

        ?>  

        <button class="form-btn-submit" type="submit">Se connecter</button>
    </form>
</div>

<?php include("../partials/footer.php"); ?>