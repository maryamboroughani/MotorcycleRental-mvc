<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Details</title>
    <link rel="stylesheet" href="<?= htmlspecialchars(BASE) ?>/css/style.css">

</head>
<body>
    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <div class="container">
        <h1>Rental Details</h1>
        <p><strong>Rental ID:</strong> <?= htmlspecialchars($rental['id']) ?></p>
        <p><strong>Motorcycle ID:</strong> <?= htmlspecialchars($rental['motorcycle_id']) ?></p>
        <p><strong>User ID:</strong> <?= htmlspecialchars($rental['user_id']) ?></p>
        <p><strong>Start Date:</strong> <?= date('d M Y', strtotime($rental['start_date'])) ?></p>
        <p><strong>End Date:</strong> <?= date('d M Y', strtotime($rental['end_date'])) ?></p>
        <a class="btn" href="<?= BASE ?>/rental/edit?id=<?= htmlspecialchars($rental['id']) ?>">Edit</a>
        <form action="<?= BASE ?>/rental/delete" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?= htmlspecialchars($rental['id']) ?>">
            <button class="btn red" type="submit">Delete</button>
        </form>
    </div>

    <?php include __DIR__ . '/../layouts/footer.php'; ?>
</body>
</html>
