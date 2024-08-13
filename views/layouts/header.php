<?php
// views/layouts/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Default Title'; ?></title>
    <link rel="stylesheet" href="<?= BASE ?>/css/styles.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="<?php echo ASSET; ?>img/motorcycle_icon.svg" alt="Motorcycle Shop Logo">
        <h1>Welcome to our Motorcycle Shop</h1>
    </div>
</header>
