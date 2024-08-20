<?php include __DIR__ . '/../layouts/header.php'; ?>

<div class="container">
    <h1>New Rental</h1>
    <form method="post" action="<?= BASE ?>/rental/store">
        <label>Motorcycle ID
            <input type="text" name="motorcycle_id" required>
        </label>
        <label>User ID
            <input type="text" name="user_id" required>
        </label>
        <label>Start Date
            <input type="date" name="start_date" required>
        </label>
        <label>End Date
            <input type="date" name="end_date" required>
        </label>
        <input type="submit" class="btn" value="Save">
    </form>
</div>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
