<?php require_once("include/function.php") ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/nullify.css">
    <link rel="stylesheet" href="css/footer.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

    <?php if ($_SERVER["SCRIPT_NAME"] === "/portfolio/home.php") : ?>
        <link rel="stylesheet" href="css/home.css">
        <title>Accueil</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "about.php") : ?>
        <title>A Propos</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] === "project.php") : ?>
        <title>Projet</title>
    <?php endif; ?>
</head>

<body>

    <main>