<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>Psique - Encontre seu psicólogo</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-primary">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="images\psique_logo_icon.png" alt="">
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#precos" class="nav-link text-light lead">Preços</a>
                    </li> 
                    <li class="nav-item">                    
                        <a href="#conversecomumpsicologo" class="nav-link text-light lead">Converse com um Psicologo</a>
                    </li> 
                    <li class="nav-item">                    
                        <a href="#contato" class="nav-link text-light lead">Contato</a> 
                    </li>     
                </ul>
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light lead" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>Cadastre-se<strong>
                                <img src="images\dropdown_icon.png" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-light text-light lead" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Como paciente</a></li>
                                <li><a class="dropdown-item" href="#">Como médico</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#precos" class="nav-link text-light lead"><strong>Entrar<strong>   </a>
                        </li>
                    </ul>  
            </div>
    </nav>
    <section id="home">
        <div class="container-fluid px-0 top-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h1 class="text-light">Encontre seu psicólogo</h1>
                        <h4 class="text-light opacity-75">Mais de 15 mil profissionais prontos para lhe ajudar</h4>
                        <div id="box" class="col-2 p-3 mb-2 bg-dark text-white">
                            <div class="d-flex">
                                <button id="button" class="btn btn-outline-light"><i class="bi bi-house-door-fill me-2"></i></i><strong>No Local</strong></button>
                                <button id="button" class="btn btn-outline-light"><i class="bi bi-camera-video-fill me-2"></i></i><strong>Teleconsulta</strong></button>
                            </div>
                            <div class="d-flex mt-3">
                                <form class="" role="search">
                                    <input id="search-box-1" class="form-control" type="search" placeholder="nome, especialidade, serviço" aria-label="nome, especialidade, serviço">
                                </form>
                                <form class="" role="search">
                                    <input id="search-box-2" class="form-control" type="search" placeholder="nome, especialidade, serviço" aria-label="nome, especialidade, serviço">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>