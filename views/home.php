<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorcycle Shop</title>
    <link rel="stylesheet" href="<?= htmlspecialchars(BASE) ?>/css/style.css">
</head>
<body>
    <?php include 'layouts/header.php'; ?>

    <div class="container">
        <h1>Welcome to our Motorcycle Shop</h1>

        <!-- Main Content -->
        <section>
            <h2>Rentals</h2>
            <?php if (empty($rentals)): ?>
                <p>No rentals found.</p>
            <?php else: ?>
                <!-- Rental listing will go here -->
            <?php endif; ?>
            <a href="<?= BASE ?>/rental/create" class="btn">New Rental</a>
        </section>
    </div>

    <?php include 'layouts/footer.php'; ?>
</body>
</html>
