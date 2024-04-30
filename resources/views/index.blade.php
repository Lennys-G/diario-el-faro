<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fuente Roboto - Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <!-- Hoja de estilos css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Diario El Faro</title>
</head>

<body>
    <header>
        <div class="container">
            <div id="currentDate" class="currentDate"></div>
            <!-- Logo -->
            <div class="center-flex">
                <object data="sources/images/logo.svg" type="image/svg+xml" id="logo">
                    <img src="sources/images/logo.png" alt="Logo Diario El Faro" />
                </object>
            </div>

            <!-- Barra de navegación -->
            <nav class="navbar navbar-expand-lg">
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler d-lg-none" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon  "></span>
                </button>
                <div id="navbarNav" class="collapse navbar-collapse">
                    <ul class="navbar-nav">

                        <li class="nav-item active ">
                            <a href="#" class="nav-link ">
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item active ">
                            <a href="#" class="nav-link ">
                                Negocio
                            </a>
                        </li>
                        <li class="nav-item active ">
                            <a href="#" class="nav-link ">
                                Deportes
                            </a>
                        </li>
                        <li class="nav-item active ">
                            <a href="#" class="nav-link ">
                                Ciencias
                            </a>
                        </li>
                        <li class="nav-item active ">
                            <a href="#" class="nav-link ">
                                Salud
                            </a>
                        </li>
                        <li class="nav-item active ">
                            <a href="#" class="nav-link ">
                                Entretenimiento
                            </a>
                        </li>
                    </ul>

                    <div>
                        <!-- Button trigger modal crear nuevo artículo- -->
                        <button type="button" class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#modalCreateArticle">
                            Crear nuevo artículo
                        </button>
                        <!-- Modal crear nuevo artículo-->
                        <div class="modal fade" id="modalCreateArticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Crear un nuevo artículo</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulario -->
                                        <form action="/articles/store" method="POST" name="formCreateArticle" method="get" id="formCreateArticle" class="bg-light p-4 formContact">
                                            @csrf
                                            <div class="form-row row">

                                                <div class="form-group col-md-6">
                                                    <label for="titleFormCreateArticle">Titulo</label>
                                                    <input type="text" name="title-formCreateArticle" class="form-control" id="title-formCreateArticle" placeholder="Titulo del artículo" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="url-formCreateArticle">Url</label>
                                                    <input type="text" name="url-formCreateArticle" class="form-control" id="url-formCreateArticle" placeholder="Link de acceso" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="urlToImage-formCreateArticle">Url Imagen</label>
                                                <input type="text" name="urlToImage-formCreateArticle" class="form-control" id="urlToImage-formCreateArticle" placeholder="URL Imagen" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="category-formCreateArticle">Categoria</label>
                                                <select class="form-control" name="category-formCreateArticle" id="category-formCreateArticle" required>
                                                    <option selected>General</option>
                                                    <option>Negocio</option>
                                                    <option>Deportes</option>
                                                    <option>Ciencias</option>
                                                    <option>Salud</option>
                                                    <option>Anuncios</option>
                                                    <option>Entretenimiento</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btnModalFormClose" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button id="btnModalFormSave" type="submit" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Fin modal  crear nuevo artículo--->


                        <!-- Button trigger modal crear nuevo artículo- -->
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCreateAccount" aria-label="Open Account Menu">
                            Registrar usuario
                        </button>
                        <!-- Modal crear nuevo artículo-->
                        <div class="modal fade" id="modalCreateAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Crear cuenta</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Formulario -->
                                        <form action="/articles" method="POST" name="formCreateAccount" method="get" id="formCreateAccount" class="bg-light p-4 formContact">
                                            @csrf
                                            <div class="form-row row">

                                                <div class="form-group col-md-6">
                                                    <label for="inputTitleArticle">Nombre</label>
                                                    <input type="text" name="name-formCreateAccount" class="form-control" id="name-formCreateAccount" placeholder="Nombre" required>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="inputLinkToArticle">Contraseña</label>
                                                    <input type="password" name="password-formCreateAccount" class="form-control" id="password-formCreateAccount" placeholder="Contraseña" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputLinkToImagen">Correo</label>
                                                <input type="email" name="email-formCreateAccount" class="form-control" id="email-formCreateAccount" placeholder="Correo eléctronico" required>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="btnModalFormClose" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button id="btnModalFormSave" type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Fin modal  crear nuevo artículo--->
                    </div>

                </div><!-- Fin navbar -->

                <div class="center-flex search-bar">
                    <input type="text" name="search" id="">
                    <button type="submit"><object data="./sources/images/icon-search.svg" type="image/svg+xml"></object></button>
                </div>
            </nav>
        </div>
    </header>


    <main class="container">
        <!-- Inicio Primera fila: Carrusel y tarjetas horizontales -->
        <div class="row">
            <!-- Noticias Generales -->
            <section id="generalNews" class="col-lg-8">
                <div class="row align-text-bottom mt-3  ">
                    <h5 class="col-4 col-md-2">Actualidad</h5>
                    <a href="#" class="col-8">Ver más</a>
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div id="container-carousel" class="carousel-inner">
                            <!-- Aquí se insertan las noticias -->
                            @foreach ($articlesCurrents as $article)
                            <div class="carousel-item active">
                                <img src="{{$article['urlToImage']}}" class="d-block w-100" alt="{{$article['title']}}">
                                <div class="carousel-caption d-md-block">
                                    <h5>{{$article['title']}}</h5>
                                    <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </section>

            <!-- Noticias De Negocios -->
            <section id="businessNews" class=" col-lg-4 mt-3">
                <div class="row align-text-bottom ">
                    <h5 class="col-4">Negocios</h5>
                    <a href="#" class="col-8 ">Ver más</a>
                </div>
                <!-- Aquí se insertan las noticias -->
                @php
                $counter = 0;
                @endphp


                @foreach ($articlesBusiness as $article)
                @if ($counter < 4) <div class="card mt-2">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="d-block w-100 h-100" src="{{$article['urlToImage']}}" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h4 class="card-title">{{$article['title']}}</h4>
                                <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                            </div>
                        </div>
                    </div>
        </div>
        <?php $counter++; // Increment counter inside the loop
        ?>
        @endif
        @endforeach
        </section>
        </div>
        <!-- Fin Primera fila: Carrusel y tarjetas horizontales -->

        <hr> <!-- Linea divisoria -->

        <section id="advertisements" class="row justify-content-between">
            <div class="row align-text-bottom ">
                <h5 class="col-4 col-sm-2 ">Anuncios</h5>
                <a href="#" class="col-8 ">Ver más</a>
            </div>
            @foreach ($articlesAdvertisements as $article)
            <div class="card cardArticle col-md-3 col-sm-4">
                <img src="{{$article['urlToImage']}}" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$article['title']}}</h4>
                    <div class="footerCard">
                        <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

        <hr>
        <section id="sportsNews" class="row justify-content-between">
            <div class="row align-text-bottom ">
                <h5 class="col-4 col-md-2">Deportes</h5>
                <a href="#" class="col-8">Ver más</a>
            </div>
            @foreach ($articlesSports as $article)
            <div class="card cardArticle col-md-3 col-sm-4">
                <img src="{{$article['urlToImage']}}" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$article['title']}}</h4>
                    <div class="footerCard">
                        <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

        <hr>
        <section id="scienceNews" class="row justify-content-between">
            <div class="row align-text-bottom ">
                <h5 class="col-4 col-sm-2 ">Ciencias</h5>
                <a href="#" class="col-8 ">Ver más</a>
            </div>
            @foreach ($articlesScience as $article)
            <div class="card cardArticle col-md-3 col-sm-4">
                <img src="{{$article['urlToImage']}}" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$article['title']}}</h4>
                    <div class="footerCard">
                        <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

        <hr>
        <section id="healthNews" class="row justify-content-between">
            <div class="row align-text-bottom ">
                <h5 class="col-4 col-sm-2">Salud</h5>
                <a href="#" class="col-8 ">Ver más</a>
            </div>
            @foreach ($articlesHealth as $article)
            <div class="card cardArticle col-md-3 col-sm-4">
                <img src="{{$article['urlToImage']}}" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$article['title']}}</h4>
                    <div class="footerCard">
                        <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

        <hr>
        <section id="entertainmentNews" class="row justify-content-between">
            <div class="row align-text-bottom ">
                <h5 class="col-12 col-sm-3 col-lg-2">Entretenimiento</h5>
                <a href="#" class="col-5 ">Ver más</a>
            </div>
            @foreach ($articlesEntertainment as $article)
            <div class="card cardArticle col-md-3 col-sm-4">
                <img src="{{$article['urlToImage']}}" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$article['title']}}</h4>
                    <div class="footerCard">
                        <a href="{{$article['url']}}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>
            @endforeach

        </section>
        <hr>
        <div>
            <h5>Contactanos</h5>
            <form action="/articles" method="POST" class="bg-light p-4 formContact ">
                @csrf
                <div class="form-row row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Correo</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Asunto</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Asunto">
                </div>

                <div class="form-row">
                    <label>Comentarios</label>
                    <textarea class="form-control min-height-100" id="validationTextarea" placeholder="Mensaje" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-2 ">Enviar</button>
            </form>
        </div>
    </main>

    <footer class="footer">
        <div class="container footer-container">
            <!-- Logo -->
            <div>
                <object data="sources/images/logo.svg" type="image/svg+xml" id="logo">
                    <img src="sources/images/logo.png" alt="Logo Diario El Faro" />
                </object>
            </div>

            <!-- Sección Sobre Nosotros -->
            <div class="footer-about-us ">
                <h2>Sobre Nosotros</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa illum quis omnis minima doloribus ea obcaecati
                    fugit.</p>
            </div>


            <!-- Iconos Redes Sociales -->
            <div class="footer-container-icons">
                <h2>Siguenos</h2>
                <nav class="footer-social-icons">
                    <a href="#"><object class="social-icon" data="./sources/images/instagram_f_icon-icons.com_65485.svg" type="image/svg+xml"></object></a>
                    <a href="#"><object class="social-icon" data="./sources/images/TWITTER_icon-icons.com_65486.svg" type="image/svg+xml"></object></a>
                    <a href="#"><object class="social-icon" data="./sources/images/FB_icon-icons.com_65484.svg" type="image/svg+xml"></object></a>
                    <a href="#"><object class="social-icon" data="./sources/images/YOUTUBE_icon-icons.com_65487.svg" type="image/svg+xml"></object></a>
                </nav>
            </div>
            <!-- Sección Desarrollado por -->
            <div class="footer-info">
                <p><small>Desarrollado por <i>Lennys G. - Iris A. - Samuel P.</i> / <b>Con fines educativos</b> </small></p>
            </div>
    </footer>
</body>

<script src="{{ url('js/index.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>