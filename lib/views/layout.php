<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?? ucfirst($viewName) ?></title>
    <link href="/../css/styles.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>LAYOUT</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/login">Login</a>
        </nav>
    </header>
    <main>
        <?php require_once $viewPath; ?>
    </main>
</body>

</html>
