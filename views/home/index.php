<?php
include __DIR__ . '/../layouts/header.php'; // Include the header from layouts directory
?>

<h1><?= isset($data['title']) ? htmlspecialchars($data['title']) : 'Title not available' ?></h1>
<p><?= isset($data['description']) ? htmlspecialchars($data['description']) : 'Description not available' ?></p>

<?php
include __DIR__ . '/../layouts/footer.php'; // Include the footer from layouts directory
?>
