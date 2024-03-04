@extends('layouts.plantilla')

@section('title', 'Registros create')


@section('content')


    <div>



        <div id="carouselExampleCaptions" class="carousel slide border-5 border-dark  border-bottom "
            style=" background-color: rgb(0, 0, 0); ">
            <div class="carousel-indicators">
                <button type="button" style="background-color: #000000;" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" style="background-color: #4d4d4d;" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" style="background-color: #4d4d4d;" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/img/c1.jpg') }}" class="d-block w-100" alt="..."
                        style=" height:1000px; opacity:0.9">
                    <div class="carousel-caption d-none
                        d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src=" {{ asset('/img/odo1.jpg') }} " class="d-block w-100" alt="... "
                        style=" height:1000px; opacity:0.9">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src=" {{ asset('/img/c3.jpg') }}  " class="d-block w-100" alt="..."
                        style=" height:1000px; opacity:0.9">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev  " type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>




    <div class="container my-5   " style="background-color: rgba(255, 255, 11, 0); ">



        <div class="text-center">

            <h5 class="text-uppercase mb-4 fw-bold text-primary" style="font-size: 30px">Especialistas</h5>
        </div>


        <div class=" row 
                d-flex gap-5 justify-content-evenly text-center p-5 mb-5 "
            style="background-color: rgba(0, 0, 0, 0.628)">


            <div class="  col-md-6  col-lg-4 d-grid  gap-5 justify-content-center "
                style="background-color: rgba(104, 224, 0, 0); width:300px">
                <img src="https://calidad-dental.es/wp-content/uploads/2022/10/Dres-rubio-Corbata-def-web.jpg"
                    alt="" class=" border-2 border-primary rounded-circle" style="width: 300px; height:280px ">
                <div class="bg-dark text-white p-4 rounded-4 border border-light">
                    <h5 class="text-uppercase mb-4 fw-bold text-primary"> Dr. Juan
                        Rodríguez</h5>
                    <p> Con una sólida formación en odontología de la Universidad Nacional de Colombia, el Dr. Juan
                        Rodríguez se ha destacado como especialista en endodoncia en Bogotá. </p>
                </div>

            </div>
            <div class=" col-md-6 col-lg-4  d-grid gap-5 justify-content-center"
                style="background-color: rgba(0, 253, 186, 0); width:300px"><img
                    src="https://www.dentaltix.com/es/sites/default/files/odontologo-clinica-dental.jpg" alt=""
                    class=" border-2 border-primary rounded-circle" style="width: 300px; height:280px  ">
                <div class="bg-dark text-white p-4 rounded-4 border border-light">
                    <h5 class="text-uppercase mb-4 fw-bold text-primary">Dra. Laura Gómez</h5>
                    <p>Ortodoncista colombiana formada en la Universidad de Antioquia, conocida por su enfoque
                        meticuloso y personalizado en la creación de sonrisas estéticas y funcionales.</p>
                </div>

            </div>
            <div class="  col-md-12 col-lg-4  d-grid gap-5 justify-content-center "
                style="background-color: rgba(11, 39, 255, 0); width:300px"><img
                    src="https://s3.us-east-1.amazonaws.com/doctoralia.com.mx/doctor/4e7afa/4e7afa54ae594fb0a5715fd8684d5625_large.jpg"
                    alt="" class=" border-2 border-primary rounded-circle" style="width: 300px; height:280px   ">

                <div class="bg-dark text-white p-4 rounded-4 border border-light">
                    <h5 class="text-uppercase mb-4 fw-bold text-primary">Dr. Carlos Santos</h5>
                    <p> Su experiencia en implantes dentales y su
                        enfoque centrado en el paciente lo han convertido en una opción confiable para aquellos que buscan
                        restaurar su sonrisa.</p>
                </div>

            </div>




        </div>


        <div class="row my-5 pt-5  " style="background-color: rgba(0, 255, 255, 0)">



            <div class="col-xl-6 text-center p-5" style="background-color: rgba(0, 255, 255, 0)">
                <h5 class="text-uppercase my-4 fw-bold text-primary mt-5" style="font-size: 30px">Misión de SENA Sonríe</h5>
                <p> Proporcionar servicios odontológicos integrales de calidad, accesibles y centrados en el paciente, con
                    un enfoque en la prevención, el tratamiento y la educación, contribuyendo así a mejorar la salud bucal y
                    la calidad de vida de nuestra comunidad.</p>
            </div>
            <div class="col-xl-6 d-flex justify-content-center" style="background-color: rgba(0, 60, 255, 0)"> <img
                    style="width: 700px" src=" {{ asset('/img/b1.jpg') }} " alt=""> </div>


        </div>


        <div class="row">



            <div class="col-xl-6 d-flex justify-content-center"> <img style="width: 700px" src="{{ asset('/img/b2.jpg') }}"
                    alt=""></div>

            <div class="col-xl-6 text-center p-5" style="background-color: rgba(0, 255, 255, 0)">
                <h5 class="text-uppercase mb-4 mt-5 fw-bold text-primary" style="font-size: 30px">Visión de SENA Sonríe
                </h5>
                <p>Convertirnos en un referente nacional e internacional en el cuidado odontológico, destacados por nuestra
                    excelencia clínica, innovación, compromiso con la comunidad y el desarrollo continuo de nuestros
                    profesionales, trabajando siempre con ética, empatía y respeto hacia nuestros pacientes y colaboradores.
                </p>
            </div>


        </div>



        <div class="pt-5 my-5" style="background-color: rgba(0, 255, 13, 0)">
            <h5 class="text-uppercase my-4 fw-bold text-primary mt-5 text-center" style="font-size: 30px"> Nuestros
                servicios </h5>
        </div>


        <div id="card" style="background-color: rgba(255, 0, 0, 0)"
            class="row  d-flex gap-5 justify-content-around my-5">


            <div class="  col-md-12 col-lg-4  p-5  border-1  border-dark rounded-5" style="width:400px; height:500px  ">
                <p style="font-size: 50px"><i class="fa-solid fa-tooth" style="color: #005b8f;"></i></p>

                <h5 class="text-uppercase  fw-bold text-primary my-4 ">Exámenes y limpiezas regulares</h5>

                <p>Los exámenes dentales regulares son fundamentales para evaluar la salud bucal de un paciente. Durante
                    estos exámenes, el dentista revisa la salud de los dientes, las encías, la lengua, el paladar y otras
                    estructuras bucales. Además, las limpiezas dentales regulares son esenciales para eliminar la placa y el
                    sarro acumulados en los dientes, lo que ayuda a prevenir enfermedades de las encías y la caries dental.
                </p>
            </div>
            <div class=" col-md-12 col-lg-4 p-5  border-1  border-dark rounded-5" style="width:400px; height:500px ">
                <p style="font-size: 50px"><i class="fa-solid fa-earth-americas" style="color: #005b8f;"></i></p>
                <h5 class="text-uppercase  fw-bold text-primary my-4 ">Tratamientos de caries</h5>

                <p>Las caries dentales son áreas de deterioro en los dientes causadas por bacterias que producen ácidos que
                    erosionan el esmalte dental. Los tratamientos para las caries pueden incluir la eliminación del tejido
                    cariado y la restauración del diente con materiales como resinas compuestas o amalgama dental.
                </p>
            </div>
            <div class="col-md-12 col-lg-4 p-5 border-1  border-dark rounded-5" style="width:400px; height:500px">
                <p style="font-size: 50px"><i class="fa-solid fa-city" style="color: #005b8f;"></i></p>
                <h5 class="text-uppercase  fw-bold text-primary my-4 ">Tratamientos de conducto</h5>

                <p>Cuando la pulpa dental (el tejido blando en el interior del diente) está infectada o dañada debido a una
                    caries profunda o un traumatismo dental, puede ser necesario realizar un tratamiento de conducto para
                    salvar el diente. Durante este procedimiento, se elimina la pulpa infectada, se limpian los conductos
                    radiculares y se sellan para evitar futuras infecciones.
                </p>
            </div>

        </div>




        <div id="card"style="background-color: rgba(255, 0, 0, 0)" class="row d-flex gap-5 justify-content-around">


            <div class="col-md-12 col-lg-4 p-5  border-1  border-dark  rounded-5" style="width:400px; height:500px ">
                <p style="font-size: 50px"><i class="fa-brands fa-codepen" style="color: #005b8f;"></i></p>

                <h5 class="text-uppercase  fw-bold text-primary my-4 ">Implantes dentales</h5>

                <p>Los implantes dentales son una opción de tratamiento permanente para reemplazar dientes perdidos.
                    Consisten en insertar un tornillo de titanio en el hueso de la mandíbula, sobre el cual se coloca una
                    corona dental personalizada para que se vea y funcione como un diente natural.
                </p>
            </div>
            <div class=" col-md-12 col-lg-4 p-5  border-1  border-dark rounded-5" style="width:400px; height:500px ">
                <p style="font-size: 50px"><i class="fa-solid fa-stethoscope" style="color: #005b8f;"></i></p>
                <h5 class="text-uppercase  fw-bold text-primary my-4 ">Blanqueamiento dental</h5>

                <p>Los procedimientos de blanqueamiento dental se utilizan para aclarar el color de los dientes y eliminar
                    manchas y decoloraciones. Pueden realizarse en la clínica dental mediante el uso de geles blanqueadores
                    activados por luz o láser, o también pueden ofrecerse kits de blanqueamiento para usar en casa
                </p>
            </div>
            <div class="col-md-12 col-lg-4 p-5 border-1  border-dark rounded-5" style="width:400px; height:500px">
                <p style="font-size: 50px"><i class="fa-solid fa-hospital" style="color: #005b8f;"></i></p>
                <h5 class="text-uppercase  fw-bold text-primary my-4 ">Prótesis dentales</h5>

                <p>Las prótesis dentales son dispositivos diseñados para reemplazar dientes perdidos y restaurar la función
                    y la estética bucal. Pueden incluir dentaduras completas o parciales, puentes dentales y coronas
                    dentales.
                </p>
            </div>



        </div>






    </div>
@endsection
