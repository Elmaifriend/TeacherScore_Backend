<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeacherScore</title>
    <link rel="stylesheet" href="/styles/main.css">

    <!-- TESTING: Will be replaced for a partial template in the server -->
    <script type="module" src="/js/components/header.js"></script>
</head>

<body class="d-flex flex-column">
    <nav class="navbar bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/assets/logo-placeholder.png" alt="Logo" height="60px" class="d-inline-block align-text-top">
            </a>
            <button class="btn btn-light fw-bold" type="button">Registra tu escuela</button>
        </div>
    </nav>
    
    <?=$content?>

    <script src="/js/bootstrap.bundle.js"></script>

</body>

</html>