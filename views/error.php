<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= htmlspecialchars(BASE) ?>/css/style.css">

    <title>Error</title>
</head>
<body>
    <header class="header">
    <img src="<?= htmlspecialchars(BASE) ?>/img/motorcycle_icon.svg" alt="Motorcycle Icon">

            <h1>Motorcycle Shop</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2 class="error">PAGE NOT FOUND 404!</h2>
            <p><?= isset($msg) ? htmlspecialchars($msg) : 'An unexpected error occurred.' ?></p>
            <a href="<?= htmlspecialchars(BASE) ?>" class="btn">Go to Homepage</a>
        </div>
    </main>
</body>
</html>
