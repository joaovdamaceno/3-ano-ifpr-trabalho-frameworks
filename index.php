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
                <img src="images\psique_logo_icon.png" style="max-width: 9rem;" alt="">
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
    <section>
        <div class="container-fluid px-0 top-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h2 class="text-light" style="margin-bottom:-0.1rem;"><strong>Encontre seu psicólogo</strong></h2>
                        <h5 class="text-light opacity-75" style="margin-bottom:1rem;"><strong>Mais de 15 mil profissionais prontos para lhe ajudar</strong></h5>
                        <div id="box" class="col-2 p-3 mb-2 bg-dark text-white">
                            <div class="d-flex">
                                <button id="button" class="btn btn-outline-light btn-sm"><i class="bi bi-house-door-fill me-2"></i></i><strong>No Local</strong></button>
                                <button id="button" class="btn btn-outline-light btn-sm"><i class="bi bi-camera-video-fill me-2"></i></i><strong>Teleconsulta</strong></button>
                            </div>
                            <div class="d-flex mt-3">
                                <form class="" role="search">
                                    <input id="search-box-1" class="form-control" type="search" placeholder="nome, especialidade, serviço" aria-label="nome, especialidade, serviço">
                                </form>
                                <form class="" role="search">
                                    <input id="search-box-2" class="form-control" type="search" placeholder="p. ex. São Paulo" aria-label="p. ex. São Paulo">
                                </form>
                                <a name="" id="search" class="btn btn-primary text-light fw-bold" href="#" role="button"><i id="icon" class="bi bi-search me-1"></i>Procurar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md">
                    <div class="card" style="border-style: none; margin-top:-20px;">
                        <div class="card-body text-center">
                            <h6 id="h5card" class="card-title mb-3 d-flex"><strong><i class="bi bi-search text-primary me-2"></i>Encontre especialistas</strong></h6>
                            <p class="lead text-start" style="font-size:16px; margin-top:-8px; opacity: 0.65;">
                            <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur est deserunt aut reprehenderit aliquid!</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="border-style: none; margin-top:-20px;">
                        <div class="card-body text-center">
                            <h6 id="h5card" class="card-title mb-3 d-flex"><strong><i class="bi bi-calendar-check text-primary me-2"></i>Agende sua consulta</strong></h6>
                            <p class="lead text-start" style="font-size:16px; margin-top:-8px; opacity: 0.65;">
                            <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, rerum. Officia ad magnam pariatur ex quibusdam.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card" style="border-style: none; margin-top:-20px;">
                        <div class="card-body text-center">
                            <h6 id="h5card" class="card-title mb-3 d-flex"><strong><i class="bi bi-star-fill text-primary me-2"></i>Avalie o serviço</strong></h6>
                            <p class="lead text-start" style="font-size:16px; margin-top:-8px; opacity: 0.65;">
                            <strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem at blanditiis quas unde dolor hic. Voluptate, molestias.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr style="width:100%;text-align:left;margin-top:-2.5rem">
    <section class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="images\saibamais_bg.png" style="width:98%; margin-top:-1rem;" alt="">
                </div>
                <div class="col-md">
                    <h2 class="text-primary" style="margin-top:-1.75rem; font-size:27px;">O que é Psique?</h2>
                    <p class="lead" style="opacity:70%; font-size:19px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae ad, a est, rem error laboriosam et nisi odio quae expedita saepe quos, consectetur beatae placeat ut quasi corrupti necessitatibus doloribus!
                    </p>
                    <p class="lead" style="opacity:70%; font-size:19px;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptate eligendi exercitationem provident consectetur modi, similique earum totam officiis hic vitae expedita veniam nobis quam aperiam. Eaque veritatis soluta explicabo.
                    </p>
                    <a name="" id="saibamais" class="btn btn-outline-primary fw-bold" href="#" role="button">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="container" style="margin-top:2rem;">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">BLOG</h6>
                    <h2>Ultimas noticias</h2>
                    <p class="fw-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos a necessitatibus atque error voluptatum rem, voluptatibus maiores at blanditiis sed distinctio dignissimos. Odio quas beatae nesciunt modi nobis natus molestias obcaecati fugit nostrum, neque nemo sequi non delectus veritatis.</p>
                </div>
            </div>
            <div class="row" style="margin-top:-1rem;">
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img class="w-100" src="https://s2.glbimg.com/jVqVMGnPpHUxCIIPkV6knJ2ls_o=/1080x608/top/smart/https://i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2021/D/I/bcX1nXTjCcVtIXX8LPWw/janeiro-branco-saude-mental.jpg" alt="">
                        <h5 style="margin-top:0.5rem;"><a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</a></h5>
                        <p class="fw-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium amet non ipsam blanditiis saepe vero nobis dignissimos.</p>
                        <p class="fw-light" style="font-size: 12px; margin-top:-0.5rem;">Há 6 horas</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img class="w-100" src="https://s2.glbimg.com/rq6RyxKY-hN5XG0jY0RC1J7o4hg=/540x304/top/smart/https://i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/d/m/wEbe14S7KIDfMpWTTQsA/image001-3-.jpg" alt="">
                        <h5 style="margin-top:0.5rem;"><a href="#">Dolores fuga iste laborum eum aspernatur quos?</a></h5>
                        <p class="fw-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium amet non ipsam blanditiis saepe vero nobis dignissimos.</p>
                        <p class="fw-light" style="font-size: 12px; margin-top:-0.5rem;">Há 6 horas</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img class="w-100" src="https://s2.glbimg.com/ClDvKs7YX6cTpPUTVJbZF5VKhx4=/540x304/top/smart/https://i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/Q/l/g38t4SRDiLT3zFBMYssg/pexels-yogendra-singh-1466852.jpg" alt="">
                        <h5 style="margin-top:0.5rem;"><a href="#">Tempora ad voluptatibus omnis dicta architecto!</a></h5>
                        <p class="fw-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium amet non ipsam blanditiis saepe vero nobis dignissimos.</p>
                        <p class="fw-light" style="font-size: 12px; margin-top:-0.5rem;">Há 6 horas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>