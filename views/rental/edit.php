<?php
// views/rental/edit.php
?>
<?php include 'layouts/header.php'; ?>
<div class="container">
    <form method="post" action="<?php echo BASE; ?>/rental/update">
        <h2>Edit Rental</h2>
        
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($rental['id']); ?>">
        
        <label>Motorcycle ID
            <input type="text" name="motorcycle_id" value="<?php echo htmlspecialchars($rental['motorcycle_id']); ?>" required>
        </label>
        <label>User ID
            <input type="text" name="user_id" value="<?php echo htmlspecialchars($rental['user_id']); ?>" required>
        </label>
        <label>Start Date
            <input type="date" name="start_date" value="<?php echo htmlspecialchars($rental['start_date']); ?>" required>
        </label>
        <label>End Date
            <input type="date" name="end_date" value="<?php echo htmlspecialchars($rental['end_date']); ?>" required>
        </label>
        
        <input type="submit" class="btn" value="Save">
    </form>
</div>
<?php include 'layouts/footer.php'; ?>
