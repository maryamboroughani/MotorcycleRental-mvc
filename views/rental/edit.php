<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rental</title>
    <link rel="stylesheet" href="<?= htmlspecialchars(BASE) ?>/css/style.css">

</head>
<body>
    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <div class="container">
        <h1>Edit Rental</h1>
        <form method="post" action="<?= BASE ?>/rental/update">
            <input type="hidden" name="id" value="<?= htmlspecialchars($rental['id']); ?>">
            <label for="motorcycle_id">Motorcycle ID
                <input type="text" id="motorcycle_id" name="motorcycle_id" value="<?= htmlspecialchars($rental['motorcycle_id']); ?>" required>
            </label>
            <label for="user_id">User ID
                <input type="text" id="user_id" name="user_id" value="<?= htmlspecialchars($rental['user_id']); ?>" required>
            </label>
            <label for="start_date">Start Date
                <input type="date" id="start_date" name="start_date" value="<?= htmlspecialchars($rental['start_date']); ?>" required>
            </label>
            <label for="end_date">End Date
                <input type="date" id="end_date" name="end_date" value="<?= htmlspecialchars($rental['end_date']); ?>" required>
            </label>
            <input type="submit" class="btn" value="Save">
        </form>
    </div>

    <?php include __DIR__ . '/../layouts/footer.php'; ?>
</body>
</html>
