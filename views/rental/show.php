<?php include 'layouts/header.php'; ?>

<div class="container">
    <h1>Rental</h1>
    <p><strong>Rental ID:</strong> <?= htmlspecialchars($rental['id']) ?></p>
    <p><strong>Motorcycle ID:</strong> <?= htmlspecialchars($rental['motorcycle_id']) ?></p>
    <p><strong>User ID:</strong> <?= htmlspecialchars($rental['user_id']) ?></p>
    <p><strong>Start Date:</strong> <?= date('d M Y', strtotime($rental['start_date'])) ?></p>
    <p><strong>End Date:</strong> <?= date('d M Y', strtotime($rental['end_date'])) ?></p>
    <a class="btn" href="<?= BASE ?>/rental/edit?id=<?= htmlspecialchars($rental['id']) ?>">Edit</a>
    <form action="<?= BASE ?>/rental/delete" method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?= htmlspecialchars($rental['id']) ?>">
        <button class="btn red">Delete</button>
    </form>
</div>

<?php include 'layouts/footer.php'; ?>
