<?php
include_once __DIR__ . '/funktionen.php';

// Zum Umschalten von Light und Dark Mode per Link und auslesen innerhalb einer Session
session_start();
if (isset($_GET['mode']) && in_array($_GET['mode'], ['light', 'dark'])) {
    $_SESSION['mode'] = $_GET['mode'];
}
$mode = $_SESSION['mode'] ?? 'light';
$darkClass = ($mode === 'dark') ? 'dark' : '';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= $relPath ?>css/style.css">
    <link rel="icon" href="<?= $relPath ?>favicon.svg">
    <title><?= $siteName ?? 'Standardtitel' ?></title>
</head>
<body class="<?= $darkClass ?>">
    <a id="top"></a> <!-- Sprungmarke für Zurückbutton -->
    <?php include("$relPath"."php/templates/header.php"); ?>
    <main>
        <?php include("$relPath"."php/templates/aside.php"); ?>
        <section>
        