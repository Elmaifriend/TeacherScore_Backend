<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeacherScore</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .reaction-bar i {
            font-style: normal;
            font-size: 14px;
        }
        @media screen and (min-width: 768px) {
            .content {
                display: grid !important;
                grid-template-rows: 1fr 2rem;
                grid-template-areas: "warning" "extra";
            }
            .extra {
                grid-area: extra;
            }
            .warning {
                grid-area: warning;
            }
        }
    </style>
</head>

<body class="d-flex flex-column"> 
    <header-component></header-component>
    
    <div class="container py-4">
        <div class="row">
            <div class="description col-md-4 d-flex flex-column align-items-center">
                <img src="/img/logo-placeholder.png" alt="Teacher Image" class="img-fluid rounded-circle mb-2" style="width: 160px;">
                <h5 class="text-center">Profesor Apellido Apellido</h5>
                <ul class="list-unstyled text-center row row-cols-2">
                    <li>Materia 1</li>
                    <li>Materia 2</li>
                    <li>Materia 3</li>
                    <li>Materia 4</li>
                </ul>
                <div class="stars d-flex column-gap-1 justify-content-center">
                    <i style="font-size: 22px; color: #eb9f1c" class="bi bi-star-fill"></i>
                    <i style="font-size: 22px; color: #eb9f1c" class="bi bi-star-fill"></i>
                    <i style="font-size: 22px; color: #eb9f1c" class="bi bi-star-fill"></i>
                    <i style="font-size: 22px; color: #eb9f1c" class="bi bi-star-fill"></i>
                    <i style="font-size: 22px; color: #eb9f1c" class="bi bi-star-fill"></i>
                </div>
            </div>
            <div class="content col-sm d-flex flex-column row-gap-3">
                <div class="alert alert-danger d-flex justify-content-center align-items-center mb-0" role="alert" style="min-height: 120px;">                    
                    <img src="/img/red-alert-icon.svg" class="img-fluid me-2" style="width: 60px;">
                    <span class="text-center"><strong>Este profesor tiene muchas críticas negativas</strong></span>
                </div>
                <div class="extra d-flex flex-column flex-sm-row align-items-center justify-content-center justify-content-md-end">
                    <div class="d-flex align-items-center row-gap-3">
                        <div class="reaction-bar d-flex justify-content-around column-gap-2">
                            <button type="button" class="btn btn-outline-secondary rounded-pill">
                                <img class="emoji-reaction" src="/img/emojis/heart.svg" alt=""> 0
                            </button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill" >
                                <img class="emoji-reaction" src="/img/emojis/thumbs-up.svg" alt=""> 0
                            </button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill">
                                <img class="emoji-reaction" src="/img/emojis/neutral-face.svg" alt=""> 0 
                            </button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill">
                                <img class="emoji-reaction" src="/img/emojis/slightly-frowning-face.svg" alt=""> 0
                            </button>
                            <button type="button" class="btn btn-outline-secondary rounded-pill">
                                <img class="emoji-reaction" src="/img/emojis/hot-face.svg" alt=""> 0
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-4">
        <h4>Comentarios</h4>
        <div class="list-group">
            <comment-component></comment-component>
            <comment-component></comment-component>
            <comment-component></comment-component>
            <comment-component></comment-component>
        </div>
    </div>

    <script src="/js/bootstrap.bundle.js"></script>
    <script type="module" src="/js/header.js"></script>
    <script type="module" src="/js/comment.js"></script>
</body>

</html>