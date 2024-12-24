<?php
$programmingLanguages = [
    "javascript",
    "python",
    "java",
    "cplusplus",
    "php",
    "kotlin",
    "react"
];
$programmingConcepts = [
    "Estructuras de Datos",
    "Algoritmos",
    "BD",
    "POO",
    "Programación Funcional",
    "Programación Asíncrona",
    "Interfaces",
    "APIs",
    "Hilos",
    "Concurrencia",
    "MVVM",
    "MVC",
    "Patron DAO",
    "Git",
];

if (isset($_POST["pdf"])) {
    include ("pdf/hojadevida.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=download" />
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-container {
            position: relative;
            text-align: center;
            color: white;
        }

        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 450px;
            background: url('img/background.jpg') no-repeat center center;
            background-size: cover;
            z-index: -1;
        }

        .profile-header {
            margin-top: 325px;
        }

        .profile-image {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .profile-header h2 {
            color: #000;
            /* Negro */
        }

        .profile-header p {
            color: #555;
            /* Gris opaco para los párrafos */
        }

        .nav-links a {
            text-decoration: none;
            margin: 0 10px;
            color: rgb(91, 91, 91);
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        .intro-container {
            margin-top: 120px;
            padding-bottom: 50px;
            position: relative;
            width: 100%;
            background-color: #555;
        }

        .intro-container .row {
            position: relative;
            text-align: center;
            color: white;
            padding-top: 50px;
        }

        h2 {
            margin-top: 30px;
        }

        .intro-text {
            max-width: 70%;
            line-height: 1.6;
            margin: 10px auto;
        }

        .language-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 10px 15px;
            background-color: #f5f9ff;
            border: 1px solid #d1e7fd;
            border-radius: 5px;
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
            white-space: nowrap;
        }

        .language-button img {
            width: 20px;
            height: 20px;
        }

        .language-button:hover {
            background-color: #e3f2fd;
        }

        .progress-bar-dark {
            background-color: rgb(91, 91, 91);
            /* Gris oscuro */
        }

        .counter-container {
            position: relative;
            text-align: center;
            background-color: rgb(91, 91, 91);
            color: white;
            padding: 20px;
            border: 2px solid white;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Alineación vertical */
            align-items: center;
            /* Alineación horizontal */
            height: 100%;
        }

        .counter-container .number {
            font-size: 60px;
            font-weight: bold;
            margin: 10px 0;
        }

        .counter-container .description {
            font-size: 16px;
        }

        .material-symbols-rounded {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }

        .unified-container {
            position: relative;
            text-align: center;
            color: rgb(91, 91, 91);
        }

        .accordion-body ul {
            text-align: justify;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="background-image"></div>
        <!-- Perfil Container -->
        <div class="profile-container">
            <div class="profile-header">
                <img src="img/perfil.png" alt="Profile Picture" class="profile-image">
                <h2 class="mt-3">Edward G Castillo B</h2>
                <p>Desarollador Full Stack<br>Bogotá D.C, Colombia<br>Estudiante Tec. sistematizacion UD</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <!-- Navegación -->
            <div class="nav-links">
                <a href="#intro-container">Introduccion</a>
                <a href="#skills-container">Habilidades</a>
                <a href="#achievements-container">Logros</a>
                <a href="#experience-container">Experiencia</a>
                <a href="#contact-container">Contacto</a>
            </div>
            <br>
            <form id="pdfForm" method="post" action="index.php"> 
                <button type="submit" name="pdf" class="btn btn-outline-danger" > 
                    <span class="material-symbols-rounded"> download </span> Descargar PDF 
                </button> 
            </form>
        </div>
    </div>
    <br>
    <!-- Intro Container -->
    <div class="intro-container">
        <div class="container">
            <div class="row" id="intro-container">
                <h2>Introducción</h2>
                <div class="intro-text">
                    <p>Soy un desarrollador fullstack apasionado con experiencia en supervisión de sitios web, soporte
                        técnico y desarrollo de CRM. Mi trayectoria en empresas como Magico Mundo SAS, Egicma y Mercedez
                        Bravo me ha permitido desarrollar habilidades técnicas robustas y un enfoque centrado en la
                        satisfacción del cliente. Me destaco por mi capacidad para resolver problemas, mi atención al
                        detalle, y mi compromiso con la mejora continua. Soy una persona disciplinada, comprometida y
                        siempre dispuesto a aprender cosas nuevas tanto del entorno como de mis compañeros. Estoy
                        buscando oportunidades donde pueda contribuir con mis conocimientos y crecer profesionalmente en
                        un entorno dinámico y desafiante.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills Container -->
    <div class="skills-container">
        <div class="container unified-container mt-5">
            <div class="row" id="skills-container">
                <h2>Habilidades</h2>
                <div class="col-1"></div>
                <div class="col-5">
                    <div class="container mt-5">
                        <h2>Idiomas</h2>
                        <div>
                            <div class="container mt-2">
                                <h3>Ingles</h3>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-dark" role="progressbar" style="width: 50%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    50%
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="container mt-2">
                                <h3>Español</h3>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-dark" role="progressbar" style="width: 80%;"
                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    80%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <h2>Aptitudes</h2>
                        <div>
                            <h3>Trabajo en equipo</h3>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-dark" role="progressbar" style="width: 90%;"
                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    90%
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3>Adaptabilidad</h3>
                            <div class="progress mt-3">
                                <div class="progress-bar progress-bar-dark" role="progressbar" style="width: 100%;"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                    100%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="container mt-5">
                        <h3 class="text-center">Lenguajes de Programación</h3>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
                            <?php
                            for ($i = 0; $i < count($programmingLanguages); $i++) {
                            ?>
                                <!-- Botones con logos -->
                                <a href="#" class="language-button">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/<?= $programmingLanguages[$i] ?>/<?= $programmingLanguages[$i] ?>-original.svg"
                                        alt="<?= $programmingLanguages[$i] ?>">
                                    <?= ucfirst($programmingLanguages[$i]) ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="container mt-4">
                        <h3 class="text-center">Conceptos</h3>
                        <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
                            <?php
                            for ($i = 0; $i < count($programmingConcepts); $i++) {
                            ?>
                                <!-- Botones con logos -->
                                <a href="#" class="language-button">
                                    <?= ucfirst($programmingConcepts[$i]) ?>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Achievements Container -->
    <div class="achievements-container">
        <div class="container unified-container mt-5">
            <div class="row" id="achievements-container">
                <h2>Logros</h2>
                <div class="col-1"></div>
                <div class="col-10">
                    <!-- Proyects -->
                    <div class="container mt-2">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="counter-container" style="height: 100%;">
                                    <h4>
                                        Desarrollo de proyectos
                                    </h4>
                                    <div class="number" id="counter">0</div>
                                    <div class="description mt-2">
                                        <p>Autonomos y laborales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="counter-container">
                                    <a href="https://logiti.itiud.org/" target="_blank"><img
                                            src="https://logiti.itiud.org/assets/logo.png"
                                            style="width: 200px; height: 100%;" alt="logiti.png"></a>
                                    <div class="description mt-2">
                                        <p>Participante en el semillero de programacion competitiva</p>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="counter-container">
                                    <a href="https://www.itiud.org/index.php" target="_blank"><img
                                            src="https://www.itiud.org/img/iti.png" style="width: 200px; height: 100%;"
                                            alt="iti.png"></a>
                                    <div class="description mt-2">
                                        <p>Convocado a la participacion de proyectos e investigaciones del grupo iti,
                                            dirigido por Ph.D Hector Florez</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <!-- Experience Container -->
    <div class="experience-container">
        <div class="container unified-container mt-5">
            <div class="row" id="experience-container">
                <h2>Experiencia profesional</h2>
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <!-- Asistente de Servicio Técnico Egicma -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Asistente de Servicio Técnico Egicma Nov 2024 - Actualmente
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><strong>Revisión de Equipos:</strong> Inspeccioné y diagnosticé equipos dañados,
                                            principalmente televisores, para identificar y resolver problemas técnicos.
                                        </li>
                                        <li><strong>Resolución de Problemas:</strong> Solucioné problemas técnicos, asegurando que los
                                            equipos funcionaran correctamente y mejorando la satisfacción del cliente.
                                        </li>
                                        <li><strong>Coordinación de Equipo:</strong> Coordiné con el equipo de técnicos para garantizar
                                            que las reparaciones se realizaran de manera eficiente y efectiva.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Supervisor de Sitio Web Magico Mundo SAS Soporte -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Supervisor de Sitio Web Magico Mundo SAS Soporte - Ago 2022 - Oct 2023
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><strong>Mantenimiento y Soporte:</strong> Gestioné el mantenimiento integral del sitio web,
                                            asegurando su correcto funcionamiento y actualizaciones constantes.</li>
                                        <li><strong>Atención al Cliente:</strong> Brindé soporte a los usuarios resolviendo dudas y
                                            problemas, mejorando la satisfacción del cliente.</li>
                                        <li><strong>Actualización de Contenidos:</strong> Supervisé y actualicé el contenido del sitio
                                            web, manteniéndolo relevante y atractivo para los visitantes.</li>
                                        <li><strong>Mejora de la Presencia Online:</strong> Implementé estrategias que mejoraron la
                                            visibilidad y presencia en línea de la empresa, contribuyendo al crecimiento
                                            del tráfico web.</li>
                                        <li><strong>Experiencia de Usuario:</strong> Aseguré una experiencia de usuario óptima
                                            supervisando el rendimiento y la funcionalidad del sitio.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Desarrollador Web Junior Mercedez Bravo Jul 2024 - Oct 2024 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Desarrollador Web Junior Mercedez Bravo Jul 2024 - Oct 2024
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><strong>Desarrollo de CRM:</strong> Desarrollé un sistema CRM personalizado conectado a bases
                                            de datos relacionales utilizando PHPMyAdmin.</li>
                                        <li><strong>Programación en PHP:</strong> Implementé funcionalidades clave del CRM utilizando PHP
                                            y la estructura de diseño DAO (Data Access Object).</li>
                                        <li><strong>Seguimiento Personalizado:</strong> Optimicé el sistema CRM para permitir un
                                            seguimiento más detallado y personalizado de los clientes.</li>
                                        <li><strong>Colaboración en Equipo:</strong> Trabajé en estrecha colaboración con stakeholders
                                            para asegurar que el CRM cumpliera con las necesidades de la distribuidora
                                            de dulces.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Container -->
    <div class="intro-container">
        <div class="container mt-5">
            <div class="row" id="contact-container">
                <h2>Información de Contacto</h2>
                <div class="contact-info">
                    <p><strong>Nombre:</strong> Edward Giovanni Castillo Beltran</p>
                    <p><strong>Teléfono:</strong> <a href="tel:3028021967">+57 302 802 1967</a></p>
                    <p><strong>Email:</strong> <a href="mailto:edwcastillo230@gmail.com">edwcastillo230@gmail.com</a></p>
                    <p><strong>Dirección:</strong> Carrera 6c este nro 90d - 21 sur</p>
                    <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/edward-castillo-beltr%C3%A1n-ba6827307/" target="_blank">https://www.linkedin.com/in/edward-castillo-beltr%C3%A1n-ba6827307/</a></p>
                    <p><strong>GitHub:</strong> <a href="https://github.com/EdwardGCB" target="_blank">https://github.com/EdwardGCB</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function animateCounter(elementId, start, end, duration) {
            const element = document.getElementById(elementId);
            let startTime = null;

            function updateCounter(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const currentValue = Math.floor(progress * (end - start) + start);
                element.textContent = currentValue;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            }

            requestAnimationFrame(updateCounter);
        }

        // Inicia la animación al cargar la página
        document.addEventListener("DOMContentLoaded", () => {
            animateCounter("counter", 0, 20, 2000); // Incrementa de 0 a 800 en 2 segundos
        });
    </script>
</body>

</html>