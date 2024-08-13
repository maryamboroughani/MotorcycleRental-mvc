
<?php
include __DIR__ . '/../layouts/header.php'; // Include the header from layouts directory
?>

<h1><?= htmlspecialchars($data['title']) ?></h1>
<p><?= htmlspecialchars($data['description']) ?></p>

<?php
include __DIR__ . '/../layouts/footer.php'; // Include the footer from layouts directory
?>
