<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome CDN -->
    <script src="https://kit.fontawesome.com/ccfc3093af.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href=<?= $cssPath ?? "css/styles.css" ?>>
    <title><?= $title ?></title>
</head>
<body>
<?php 

    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    require_once("/Applications/XAMPP/xamppfiles/htdocs/blog/database/database.php");

    $db = new DataBase("blog");

?>
<?php include("navbar.php"); ?>