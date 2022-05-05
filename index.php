<?php 
    include("partials/header.php"); 

    $hours = date("H");
    $salutation = "";

    if ($hours > 0 && $hours < 12)
        $words = "Bonjour";
    elseif ($hours >= 12 && $hours < 18)
        $words = "Bon après midi";
    elseif ($hours >= 18 && $hours < 22)
        $words = "Bon soir";
    else
        $words = "Bonne nuit";
?>

<div id="container">

    <h1><?= $words; ?> ;)</h1>

</div>

<?php include("partials/footer.php"); ?>