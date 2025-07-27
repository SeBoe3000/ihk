<?php
include __DIR__ . '/funktionen.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= $relPath ?>css/style.css">
    <title><?= $siteName ?? 'Standardtitel' ?></title>
</head>
<body>
    <?php include("$relPath"."php/templates/header.php"); ?>
    <main>
        