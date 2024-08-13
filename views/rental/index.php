<?php 
include 'layouts/header.php'; 

// Debugging: Output rental data
echo '<pre>';
print_r($rentals);
echo '</pre>';
?>

<h1>Rentals</h1>

<?php if (!empty($rentals)): ?>
<table>
    <thead>
        <tr>
            <th>Rental ID</th>
            <th>Motorcycle ID</th>
            <th>User ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rentals as $rental): ?>
        <tr>
            <td><?= htmlspecialchars($rental['id']) ?></td>
            <td><?= htmlspecialchars($rental['motorcycle_id']) ?></td>
            <td><?= htmlspecialchars($rental['user_id']) ?></td>
            <td><?= date('d M Y', strtotime($rental['start_date'])) ?></td>
            <td><?= date('d M Y', strtotime($rental['end_date'])) ?></td>
            <td>
                <a href="<?= BASE ?>/rental/edit?id=<?= htmlspecialchars($rental['id']) ?>">Edit</a>
                <form action="<?= BASE ?>/rental/delete" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($rental['id']) ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php else: ?>
<p>No rentals found.</p>
<?php endif; ?>

<a href="<?= BASE ?>/rental/create" class="btn">New Rental</a>

<?php include 'layouts/footer.php'; ?>
