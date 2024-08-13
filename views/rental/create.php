<?php
// views/rental/create.php
?>
<?php include 'layouts/header.php'; ?>
<div class="container">
    <form method="post" action="<?php echo BASE; ?>/rental/store">
        <h2>New Rental</h2>
        
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
<?php include 'layouts/footer.php'; ?>
