<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Home') ?></title>
    <link rel="stylesheet" href="<?= htmlspecialchars(ASSET) ?>css/style.css">
</head>
<body>
    <?php include 'layouts/header.php'; ?>

    <div class="container">
        <h1><?= htmlspecialchars($title ?? 'Welcome to Motorcycle Rental') ?></h1>
        <p><?= htmlspecialchars($description ?? 'Find and rent the best motorcycles!') ?></p>
    </div>

    <?php include 'layouts/footer.php'; ?>
</body>
</html>
