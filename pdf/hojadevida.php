<?php
require('fpdf/fpdf.php');

// Crear PDF en milímetros
$pdf = new FPDF('P', 'mm', 'letter');
$pdf->AddPage();
$pdf->SetFillColor(217, 217, 217);
$pdf->Rect(0, 0, 80.3435, 279.4, 'F');
$pdf->Rect(70.435, 25.9544, 145.5565, 39.7048, 'F');
$pdf->SetFillColor(54, 65, 82);
$pdf->Rect(2.2691, 0, 78.2322, 279.4, 'F');
$pdf->Image("img/perfil.png", 11.8409, 18.7561, 56.242, 56.242);

$pdf->SetFont('Arial', 'BI', 16);
$pdf->SetTextColor(255, 255, 255);

$pdf-> SetXY(28.4734, 98.7717);
$pdf->Cell(22.9774 , 6.5445 , 'Contacto', 0, 0, 'C');

$pdf-> SetXY(25.2743, 152.657);
$pdf->Cell(29.7639, 6.5446  , 'Habilidades', 0, 0, 'C');


$pdf-> SetXY(31.1712, 223.7786);
$pdf->Cell(17.9696, 6.5446   , 'Logros', 0, 0, 'C');

$pdf->SetFont('Arial', 'BI', 16);
$pdf->SetTextColor(54, 65, 82);

$pdf-> SetXY(105.6128, 81.949);
$pdf->Cell(32.1097, 6.5445   , 'Introduccion', 0, 0, 'C');

$pdf-> SetXY(105.4542, 150.7412);
$pdf->Cell(56.5866, 6.5446   , 'Experiencia de trabajo', 0, 0, 'C');

$pdf->SetFont('Arial', 'B', 35.7 );
$pdf->SetTextColor(29, 29, 27);

$pdf-> SetXY(89.1713, 36.0719);
$pdf->Cell(94.4761, 15.5462    , 'Edward Castillo', 0, 0, 'C');

$pdf->SetFont('Arial', 'BI', 13 );
$pdf-> SetXY(89.1713, 51.9384 );
$pdf->Cell(39.3654, 5.7264     , 'Desarollador Web', 0, 0, 'C');


$pdf->SetFillColor(217, 217, 217);
$pdf->Rect(91.1757 , 84.558, 1.0583  , 190.2576 , 'F');  



$pdf->SetFont('Arial', 'B', 10.33 );
$pdf->SetTextColor(45, 62, 111);

$pdf-> SetXY(100.7461 , 164.7106 );
$pdf -> MultiCell(69.8103, 3.9092, utf8_decode('Asistente de Servicio Técnico Egicma Nov 2024 - Actualmente'));

$pdf-> SetXY(100.7461  , 192.5178  );
$pdf -> MultiCell(78.0103 , 3.9092, utf8_decode('Supervisor de Sitio Web Magico Mundo SAS Ago 2022 - Oct 2023'));

$pdf-> SetXY(100.7461 , 230.3255  );
$pdf -> MultiCell(46.2028, 3.9092, utf8_decode('Desarollador Junior Jul 2024 - Oct 2024'));

$pdf->SetFont('Arial', '', 9.39 );
$pdf->SetTextColor(42, 57, 86);

$pdf-> SetXY(100.7461  , 97.3788 );
$text = 'Soy un desarrollador fullstack apasionado con experiencia en supervisión de sitios web, soporte técnico y desarrollo de CRM. Mi trayectoria en empresas como Mágico Mundo SAS, Egicma y Mercedes Bravo me ha permitido desarrollar habilidades técnicas robustas y un enfoque centrado en la satisfacción del cliente. Me destaco por mi capacidad para resolver problemas, mi atención al detalle y mi compromiso con la mejora continua. Soy una persona disciplinada, comprometida y siempre dispuesta a aprender cosas nuevas tanto del entorno como de mis compañeros. Estoy buscando oportunidades donde pueda contribuir con mis conocimientos y crecer profesionalmente en un entorno dinámico y desafiante.'; 
$pdf->MultiCell(96.6376 , 3.1476  , utf8_decode($text), 0, 'J');


$pdf->SetXY(106.7119, 175.0858);
$pdf ->Cell(34.9051, 3.1476, utf8_decode('Revisión de Equipos'));
$pdf->SetXY(106.7119, 179.6579  );
$pdf ->Cell(42.353  , 3.1476, utf8_decode('Resolución de Problemas'));
$pdf->SetXY(106.7119, 184.2299 );
$pdf ->Cell(42.353 , 3.1476, utf8_decode('Coordinación de Equipo'));

$pdf->SetXY(106.7119, 202.893);
$pdf ->Cell(41.6902, 3.1476, 'Mantenimiento y Soporte');
$pdf->SetXY(106.7119, 207.465);
$pdf ->Cell(42.353 , 3.1476, utf8_decode('Atención al Cliente'));
$pdf->SetXY(106.7119, 212.0371);
$pdf ->Cell(47.9153, 3.1476, utf8_decode('Actualización de Contenidos'));
$pdf->SetXY(106.7119, 216.6092);
$pdf ->Cell(52.6583, 3.1476, 'Mejora de la Presencia Online');
$pdf->SetXY(106.7119, 221.1813);
$pdf ->Cell(52.6583, 3.1476, 'Experiencia de Usuario');

$pdf->SetXY(106.7119, 240.7007);
$pdf ->Cell(41.6902, 3.1476, 'Desarrollo de CRM');
$pdf->SetXY(106.7119, 245.2728);
$pdf ->Cell(42.353, 3.1476, utf8_decode('Programación en PHP'));
$pdf->SetXY(106.7119, 249.8448 );
$pdf ->Cell(47.9153 , 3.1476, 'Seguimiento Personalizado');
$pdf->SetXY(106.7119, 254.4169 );
$pdf ->Cell(52.6583 , 3.1476, utf8_decode('Colaboración en Equipo'));


$pdf->SetFont('Arial', 'B', 10.33  );
$pdf->SetTextColor(255, 255, 255);

$pdf->SetXY(18.253 , 167.1485 );
$pdf->MultiCell(50.3889  , 4.5002 , utf8_decode('Idiomas:'), 0, 'L');
$pdf->SetXY(18.253 , 183.6908);
$pdf->MultiCell(50.3889  , 4.5002 , utf8_decode('Lenguajes:'), 0, 'L');
$pdf->SetXY(18.253 , 199.5227);
$pdf->MultiCell(50.3889  , 4.5002 , utf8_decode('Aptitudes:'), 0, 'L');

$pdf->SetFont('Arial', '', 10.33  );


$pdf->SetXY(20.5, 116.6318 );
$pdf->Cell(29.4986, 4.5002, '+57 302 802 1967');
$pdf->SetXY(20.5, 125.9696);
$pdf->Cell(47.3215 , 4.5002, 'edwcastillo230@gmail.com');
$pdf->SetXY(20.5, 135.9001);
$pdf->Cell(42.8076 , 4.5002, 'Cra 6c este #90d - 21 sur');

$pdf->SetXY(18.253 , 172.9393);
$pdf->MultiCell(38.1104    , 4.5002 , utf8_decode('Ingles - inertmedio Español - avanzado'), 0, 'L');
$pdf->SetXY(18.253 , 188.999);
$pdf->MultiCell(50.3889     , 4.5002 , utf8_decode('Javascript, Python, Java, C++, PHP, Kotlin, react'), 0, 'L');
$pdf->SetXY(18.253 , 204.7059);
$pdf->MultiCell(50.3889     , 4.5002 , utf8_decode('Trabajo en equipo, adatavilidad, rapido aprendizaje'), 0, 'L');

$pdf->SetXY(18.253 , 236.8951);
$pdf->MultiCell(50.3889     , 4.5002 , utf8_decode('Participante en el semillero LOGITI'), 0, 'L');
$pdf->SetXY(18.253 , 248.5088);
$pdf->MultiCell(50.3889     , 4.5002 , utf8_decode('20 Desarrollos de proyectos'), 0, 'L');

$pdf->Image("img/circle-1.png", 89.7781 , 96.6727, 3.8536 , 3.8536 );
$pdf->Image("img/circle-1.png", 89.7781 , 164.7384, 3.8536 , 3.8536 );
$pdf->Image("img/circle-1.png", 89.7781 , 192.5455, 3.8536 , 3.8536 );
$pdf->Image("img/circle-1.png", 89.7781 , 230.3533, 3.8536 , 3.8536 );


$pdf->Image("img/circle-1.png", 101.9734  , 175.6779, 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 180.25, 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 184.8221, 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 208.0572, 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 212.6293 , 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 217.2014 , 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 221.7734 , 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 241.2928 , 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 245.8649 , 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 250.437, 2.7249  , 2.7249  );
$pdf->Image("img/circle-1.png", 101.9734  , 255.0091, 2.7249  , 2.7249  );





$pdf->Output('cuadrados_mm.pdf', 'I');
