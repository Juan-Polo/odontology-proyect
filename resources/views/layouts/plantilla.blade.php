<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.png') }}" />


    {{-- bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- favicon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- estilos --}}


    <style>
        #card div {

            transition: transform .5s;
        }


        #card div:hover {
            background-color: rgba(217, 217, 217, 0.365);
            transform: scale(1.1);
        }


        #con {
            transition: transform .5s;

        }


        #con:hover {
            background-color: rgba(207, 207, 207, 0.814);

        }
    </style>

</head>

<body>
    {{-- header --}}

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid   d-flex align-items-center  p-5 "
            style="background-color:rgba(255, 0, 0, 0);  height:150px">

            <img class="position-absolute  start-0 " style="width: 300px" src=" {{ asset('/img/logo.png') }} "
                alt="">
            <button class="navbar-toggler   position-absolute end-10  " type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasDarkNavbarLabel">SENA-SONRIE</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('nav.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('users.index') }} ">Clientes</a>
                        </li>

                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>


    {{-- nav --}}





    @yield('content')




    {{-- footer --}}

    <footer class="bg-dark text-white pt-5 pb-4" style="background-color: rgba(255, 0, 0, 0)">

        <div class="container text-center text-md-left" style="background-color: rgba(255, 0, 0, 0)">

            <div class="row text-center" style="background-color: rgba(0, 0, 255, 0)">


                <div class="col-md-3  col-lg-3  col-xl-3 mx-auto mt-3" style="background-color: rgba(255, 255, 0, 0)">
                    <h5 class="text-uppercase mb-4 fw-bold text-primary" style="background-color: rgba(0, 0, 255, 0)">
                        ¿ Quiénes Somos ?</h5>
                    <p>Sena Sonríe de Popayán es una clínica dental comprometida con la salud bucal de nuestros
                        pacientes, Colombia. Nuestro equipo de profesionales altamente calificados ofrece
                        servicios personalizados en un ambiente acogedor. Nos enfocamos en la prevención y la educación
                        para mantener sonrisas saludables y radiantes. Nuestra misión es ser líderes en el cuidado
                        dental, proporcionando soluciones efectivas y mejorando la calidad de vida de nuestros
                        pacientes.

                    </p>

                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 grid gap-2"
                    style="background-color: rgba(255, 255, 0, 0);height:220px">
                    <h5 class="text-uppercase fw-bold text-primary mb-2">contactanos </h5>

                    <p>
                        <a href="$" class="text-white" style="text-decoration: none"> <i
                                class="mr-4 fa-solid fa-phone" style="color:#005b8f;font-size:30px "></i>- 3217437759
                        </a>
                    </p>
                    <p>
                        <a href="$" class="text-white" style="text-decoration: none"><i
                                class="mr-4 fa-brands fa-whatsapp" style="color: #005b8f;font-size:35px ;"></i>
                            - 3107141132
                        </a>
                    </p>
                    <p>
                        <a href="$" class="text-white" style="text-decoration: none"><i
                                class="mr-4 fa-solid fa-envelope" style="color: #005b8f;font-size:30px "></i>
                            juanma@gmail.com </a>
                    </p>

                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 ms-auto mt-3 d-grid gap-1 "
                    style="background-color: rgba(255, 255, 0, 0);height:220px">


                    <h5 class="text-uppercase  fw-bold text-primary mb-2"> LEGAL</h5>
                    <p>
                        <a href="$" class="text-white" style="text-decoration: none">Aviso Legal </a>
                    </p>
                    <p>
                        <a href="$" class="text-white" style="text-decoration: none">Política de Cookies

                        </a>
                    </p>
                    <p>
                        <a href="$" class="text-white" style="text-decoration: none">
                            Política de Privacidad </a>
                    </p>

                </div>


                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 grid gap-1"
                    style="background-color: rgba(255, 255, 0, 0);height:170px">


                    <h5 class="text-uppercase mb-2 fw-bold text-primary">horarios </h5>


                    <p>
                        <i class="fa-solid fa-clock mr-3" style="color: #005b8f;font-size:30px"></i> Martes - Viernes
                        9am
                        - 6pm
                    </p>
                    <p>
                        <i class="fa-regular fa-clock mr-3" style="color: #005b8f;font-size:30px"></i> Sabados -
                        Domingos
                        9am - 1pm
                    </p>

                </div>

            </div>
            <hr class="my-5">


            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.1944284489764!2d-76.60535142503142!3d2.4422018975367528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30030589955553%3A0xd69716d2be93c1df!2sSENA%20Centro%20De%20Comercio%20Y%20Servicios!5e0!3m2!1ses!2sco!4v1708261697415!5m2!1ses!2sco"
                width="100%" height="350" style="border:0; opacity:0.7; " allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>


            <hr class="my-5">

            <div class="row " style="background-color: rgba(69, 247, 15, 0)">

                <div class="col-md-7  col-lg-8">
                    <p> ADSO 2559637
                        <a href=" " style="text-decoration: none"> <strong class="text-primary">
                                Juan Manuel Timana Polo</strong> </a>
                    </p>
                </div>

                <div class="col-md-5  col-lg-4" style="background-color: rgba(255, 166, 0, 0)">
                    <div style="background-color: rgba(0, 0, 255, 0)">


                        <ul class="  d-flex justify-content-center gap-3 ">
                            <li>
                                <a href="" class="btn-floating btn-sm  text-white" style="font-size: 26px">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="btn-floating btn-sm  text-white" style="font-size: 26px">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="btn-floating btn-sm  text-white" style="font-size: 26px">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>


                        </ul>


                    </div>



                </div>


            </div>



        </div>


    </footer>





    {{-- script --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>
