<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset }}css/style.css">
    <title>Error</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{ asset }}img/motorcycle_icon.svg" alt="Motorcycle Shop Logo">
            <h1>Motorcycle Shop</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2 class="error">
                PAGE NOT FOUND 404!
            </h2>
            <p>{{ msg }}</p>
            <a href="{{ base }}" class="btn">Go to Homepage</a>
        </div>
    </main>
</body>
</html>
