<?php
// views/layouts/header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Home') ?></title>
    <link rel="stylesheet" href="<?= htmlspecialchars(BASE) ?>/css/style.css">

</head>
<body>
<header class="header">
    <div class="logo">
    <img src="<?= htmlspecialchars(BASE) ?>/img/motorcycle_icon.svg" alt="Motorcycle Icon">

        <h1>Welcome to our Motorcycle Shop</h1>
    </div>
</header>
