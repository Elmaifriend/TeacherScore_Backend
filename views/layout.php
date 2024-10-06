<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeacherScore</title>
    <link rel="stylesheet" href="/styles/main.css">
</head>

<body class="d-flex flex-column">
    <nav class="navbar bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/assets/logo-placeholder.png" alt="Logo" height="60px" class="d-inline-block align-text-top">
            </a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" style="min-width: 190px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div id="registraTu" class="d-inline-block">Registra Tu Escuela</div>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-center" href="/registrar/escuela">Escuela</a></li>
                    <li><a class="dropdown-item text-center" href="/registrar/plantel">Plantel</a></li>
                    <li><a class="dropdown-item text-center" href="/registrar/carrera">Carrera</a></li>
                    <li><a class="dropdown-item text-center" href="/registrar/materia">Materia</a></li>
                    <li><a class="dropdown-item text-center" href="/registrar/profesor">Profesor</a></li>
                </ul>
            </div>
        </div>
    </nav>
    

    <?=$content?>


    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/js/jQuery.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>