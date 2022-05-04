<?php 
    include("partials/header.php"); 

    $hours = date("H");
    $salutation = "";

    if ($hours > 0 && $hours < 12)
        $words = "Bonjour";
    elseif ($hours >= 18 && $hours <= 22)
        $words = "Bonsoir";
    else
        $words = "Bonne nuit";
?>

<div id="accueil">

    <h1><?= $words; ?> ;)</h1>

</div>

<?php include("partials/footer.php"); ?>