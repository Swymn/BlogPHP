<?php 
    $title = "Home";
    include("partials/header.php");

    $hours = date("H");

    if ($hours > 0 && $hours < 12)
        $words = "Bonjour";
    elseif ($hours >= 12 && $hours < 18)
        $words = "Bon après midi";
    elseif ($hours >= 18 && $hours < 22)
        $words = "Bon soir";
    else
        $words = "Bonne nuit";

    $username = (isset($_SESSION["user"]) ? $_SESSION["user"]["username"] : "");
?>

<div id="container">

    <h1><?= $words ?> <?= $username ?></h1>

</div>

<?php include("partials/footer.php"); ?>