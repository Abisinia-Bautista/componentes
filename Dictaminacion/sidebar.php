<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar con Submenús</title>
    <!-- Agregar Bootstrap 5 CSS sin el atributo integrity -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Para iconos -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="header-mid">
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
                <div class="d-none d-lg-block d-sm-none ">
                    <h1 class="logo me-auto">
                    <a href="/">
                        <img style="max-width: 500px; outline: none!important" alt="Logo de Baja California" src="http://15.220.187.125/assets/public/img/logo.webp" width="350px">
                    </a>
                    </h1>
                </div>
                <div class="d-lg-none">
                    <h1 class="logo me-auto">
                    <a href="index.php">
                        <img style="max-width: 400px; outline: none!important" alt="Logo de Baja California" src="http://15.220.187.125/assets/public/img/logo.webp" width="180px" height="30px">
                    </a>
                    </h1>
                </div>
                <div class="container">    
                    <div class="logo" style="text-align: justify; text-decoration: blin; text-decoration: none; font-size:22px; color: #ffffff;"></div>
                </div> 
                <nav id="navbar" class="navbar">
                    <ul>
                    <li><a type="submit" href="http://15.220.187.125/TramitesyServicios" class="enlaces">Tramites y Servicios</a></li>
                    <li><a type="submit" href="http://3.12.178.209:88/" class="enlaces">Mejora Regulatoria</a></li>
                    <li><a type="submit" href="https://gobiernoabierto.bajacalifornia.gob.mx/" class="enlaces" target="_blank">Gobierno Abierto</a></li>
                    <!-- <li><a type="submit" href="http://15.220.187.125/auth/login"><img src="http://15.220.187.125/assets/public/img/next.png"  width="50px"/></a></li> -->
                    <li><a type="submit" href="http://15.220.187.125/auth/login" class="enlaces">Iniciar Sesion</a></li>
                    </ul>
                    
                </nav>
            </div>
        </header>
    </div>
    <div class="d-flex">
        <div class="sidebar">
            <div class="header">
                <p class="mb-0">Estandares Tecnios</p>
            </div>
            
            <ul class="nav flex-column">
                <!-- Opción 1 -->
                <li class="mt-3">
                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                        <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-5 fw-semibold">Estándares Técnicos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu1" aria-expanded="true">
                        <img src="./img/down.png" alt="Icono 1">Formatos Descargables
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="submenu1">
                        <li><a href="./docs/LINEAMIENTOS PARA LA GOBERNANZA TECNOLÓGICA DEL ESTADO DE BAJA CALIFORNIA.pdf" class="nav-link text-white ms-3" download="Lineamiento.pdf">Lineamientos para la Gobernanza Tecnologica Del Estado de Baja California</a></li>
                        <li><a href="./docs/ANEXO TÉCNICO SOLICITUD DE AUTORIZACION.docx" class="nav-link text-white ms-3" download="Solicitud de Autorizacion.docx">Solicitud de Autorización</a></li>
                        <li><a href="./docs/ANEXO TÉCNICO SOLICITUD DE DICTAMEN.docx" class="nav-link text-white ms-3" download="Solicitud de Dictamen Tecnico.docx">Solicitud de Dictamen Técnico</a></li>
                        <li><a href="./docs/ANEXO TÉCNICO SOLICITUD DE VISTO BUENO.docx" class="nav-link text-white ms-3" download="Solicitud de Visto Bueno.docx">Solicitud de Visto Bueno</a></li>
                        <li><a href="./docs/ANEXO TÉCNICO SOLICITUD ACEPTACION DE BAJA.docx" class="nav-link text-white ms-3" download="Solicitud de Aceptacion de Baja.docx">Solicitud de Aceptación de Baja</a></li>
                        <li><a href="./docs/FORMATO AUTORIZACION DE FACTURA (VoBo).docx" class="nav-link text-white ms-3" download="Formato de Actualizacion de Factura.docx">Formato de Actualización de Factura</a></li>
                        <li><a href="./docs/CERTIFICADO OBSOLECENCIA.docx" class="nav-link text-white ms-3" download="Ejemplo Certificado Obsolencia.docx">Ejemplo Certificado de Obsolencia</a></li>
                        <li><a href="./docs/Inventario de bienes de TIC.docx" class="nav-link text-white ms-3" download="Inventario de Bienes de TIC.docx">Inventario de Bienes de TIC</a></li>
                        <li><a href="./docs/inventario de activos intangibles de TIC.docx" class="nav-link text-white ms-3" download="Inventario de Activos Intangibles de TIC.docx">Inventario de Activos Intangibles de TIC</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#solicitud" aria-expanded="true">
                        <img src="./img/formulario.png" alt="Icono 1">Revisiones Tecnicas
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="solicitud">
                        <li><a href="#" class="nav-link text-white ms-3" >Solicitud de Autorización</a></li>
                        <li><a href="#" class="nav-link text-white ms-3">Solicitud de Dictamen Técnico</a></li>
                        <li><a href="#" class="nav-link text-white ms-3">Solicitud de Visto Bueno</a></li>
                        <li><a href="#" class="nav-link text-white ms-3">Solicitud de Aceptación de Baja</a></li>
                        <li><a href="#" class="nav-link text-white ms-3">Formato de Actualización de Factura</a></li>
                    </ul>
                </li>
                
                <!-- Opción 2 -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu2" aria-expanded="false">
                        <img src="./img/hardware.png" alt="Icono 2">Hardware
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="submenu2">
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="1">PC Escritorio (Desktop)</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="2">PC Portátil (Laptop)</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="3">Tablet de Oficina</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="4">Servidores Tipo 1(Rack) y 2(Torre)</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="5">Impresoras Monocromaticas Tipo 1, 2 y 3</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="6">Impresora a color Tipo 1 y 2</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="7">Impresora Multifuncional Laser</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="8">Impresora Multifuncional Inyección de Tinta</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="9">Escáner</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="10">Plotter</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="11">Video Proyector</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="12">Cámara Digital</a></li>
                    </ul>
                </li>

                <!-- Opción 3 -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu3" aria-expanded="false">
                        <img src="./img/software.png" alt="Icono 3">Software
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="submenu3">
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="13">Antivirus</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="14">Servidores WEB y App</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="15">Manejo de Imagenes</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="16">Software de VideoConferencias</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white tab" href="#" data-tab="17">
                        <img src="./img/electrico.png" alt="Icono 3">Equipos Eléctricos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu5" aria-expanded="false">
                        <img src="./img/usb.png" alt="Icono 3">Redes Informáticas
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="submenu5">
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="18">Switch Tipo 1, 2 y 3</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="19">Access Point Tipo 1 y 2</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="20">Antena de Enlace Tipo 1</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="21">Firewall Tipo 1 (Fisico)</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="22">Firewall y Router Para Servicios Unificados</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="23">Teléfonos IP</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="24">Radios y Walkie Talkie</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white tab" href="#" data-tab="25" >
                        <img src="./img/torre-de-pc.png" alt="Icono 3">Accesorios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white tab" href="#" data-tab="26">
                        <img src="./img/usb (1).png" alt="Icono 3">Periféricos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white tab" href="#" data-tab="27">
                        <img src="./img/herramientas-manuales.png" alt="Icono 3">Consumibles
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white tab" href="#" data-tab="28">
                        <img src="./img/impresora.png" alt="Icono 3">Componentes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu10" aria-expanded="false">
                        <img src="./img/estandares-de-contenido-de-datos.png" alt="Icono 3">Ductería en Infraestructura de Redes y Telecomunicaciones
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="submenu10">
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="29">Requisitos de Adecuaciones de Infraestructura</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="30">Requisitos de Adecuaciones de Site</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="31">Entregables para Validación</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu11" aria-expanded="false">
                        <img src="./img/web.png" alt="Icono 3">Desarrollo de Software de Aplicativos WEB
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="submenu11">
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="32">Requerimientos para Desarrollo WEB</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="33">Características y Funcionalidades </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" data-bs-toggle="collapse" data-bs-target="#submenu12" aria-expanded="false">
                        <img src="./img/desarrollo-de-aplicaciones.png" alt="Icono 3">Desarrollo de Software de Aplicativos Móviles
                        <i class="fas fa-chevron-down float-end"></i>
                    </a>
                    <ul class="submenu collapse" id="submenu12">
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="34">Requerimientos para Desarrollo Móvil</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="35">Características y Funcionalidades</a></li>
                        <li><a href="#" class="nav-link text-white ms-3 tab" data-tab="36">Arquitectura</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white tab" href="#" data-tab="37">
                        <img src="./img/faq.png" alt="Icono 3">Preguntas Frecuentes
                    </a>
                </li>
            </ul>
        </div>
        <div class="px-5" style="width: 100%; margin-top: 100px;">
            <div class="px-5 py-3" style="width: 100%;" id="info">
                <div class="justify-content-center text-center d-grid">
                    <h1 class="subtitulo">Proceso de Dictaminación</h1>
                    <div class="steps-container mt-4">
                    <div class="step current-step">
                        <div class="step-number">1</div>
                        <div class="step-title" style="color: #fff;">Iniciar Solicitud</div>
                        <div class="step-description" style="color: #fff;">Iniciar el proceso desde Ventanilla Digital de acuerdo a la solicitud</div>
                        <div class="arrow">
                        <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-title">Correo Electrónico</div>
                        <div class="step-description">Cotinua el proceso mediante el correo electrónico</div>
                        <!--
                        <div class="arrow arrow-left">
                        <i class="fas fa-arrow-left"></i>
                        </div> -->
                        <div class="arrow">
                        <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-title">Enviar Formatos</div>
                        <div class="step-description">Envia tus formatos de acuerdo al tipo de solicitud</div>
                        
                        <div class="arrow">
                        <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-title">¡Listo!</div>
                        <div class="step-description">Espera a ser aceptado para continuar con tu proceso</div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="justify-content-center content-div" style="width: 100%;" id="div-1">
                <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                    <h1 class="subtitulo" style="font-size: 2rem;">PC Escritorio (Desktop)</h1>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Caracteristicas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Normas y Estandares</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Software y Manuales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="garantia-tab" data-bs-toggle="tab" data-bs-target="#garantia-tab-pane" type="button" role="tab" aria-controls="garantia-tab-pane" aria-selected="false">Garantia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="consideraciones-tab" data-bs-toggle="tab" data-bs-target="#consideraciones-tab-pane" type="button" role="tab" aria-controls="consideraciones-tab-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active m-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                        <strong>Estatus:</strong> Vigente<br>
                        <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                        <ol>
                            <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                            <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                            <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                            <li style="list-style: auto;">Para equipos <strong>COMPUTADORA DE ESCRITORIO TODO EN UNO (All in One)</strong> deben apegarse estrictamente para uso de personal administrativo acorde a las siguientes consideraciones.</li>
                        </ol>
                        </div>
                        <div class="tab-pane fade m-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                        </div>
                        <div class="tab-pane fade m-3" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                        <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                        electrónico y en idioma español.
                        </div>
                        <div class="tab-pane fade m-3" id="garantia-tab-pane" role="tabpanel" aria-labelledby="garantia-tab" tabindex="0">
                        <strong>Características que deberá cubrir:</strong>
                        <ol>
                            <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                            <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                            <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                            <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                            <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                        </ol>
                        <strong>Requerimientos de servicio:</strong>
                        <ol>
                            <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                            <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                            <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                        </ol>
                        </div>
                        <div class="tab-pane fade m-3" id="consideraciones-tab-pane" role="tabpanel" aria-labelledby="consideraciones-tab" tabindex="0">Es estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de garantía. La ADBC no tiene responsabilidad alguna por alguna deficiencia  administrativa en este sentido.</div>
                    </div>
                </div>
                <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Componente</th>
                            <th scope="col">Equipo administrativo</th>
                            <th scope="col">Equipo Desarrollador</th>
                            <th scope="col">Equipo Diseñador</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="resaltado">Procesador</td>
                            <td>Con tecnología de 64 bits(x64). Desde 32 MHz o más en frecuencia base, de acuerdo a la necesidad del Ente. De 2 a 6 núcleos físicos máximo</td>
                            <td>Con tecnología de 64 bits(x64). Desde 700 MHz o más en frecuencia base, de acuerdo a la necesidad del Ente. De 4 a 12 núcleos físicos máximo.</td>
                            <td>Con tecnología de 64 bits(x64). De 700 MHz o más en frecuencia base, de acuerdo a la necesidad del Ente. 4 a 12 núcleos físicos máximo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="resaltado">Memoria RAM</td>
                            <td>De 8 GB. Opcional dual channel memory</td>
                            <td>De 16 GB a 64 GB Máximo. Dual channel o Quad channel memory</td>
                            <td>De 16 GB a 64 GB Máximo. Dual channel o Quad channel memory</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="resaltado">Disco Duro</td>
                            <td>Elegir uno de las siguientes opciones: -1 TB mínimo HDD, interfaz SATA III. -128 GB mínimo en SSD, Interfaz SATA (Serial Advanced Technology Attachment), M2, PCI Express. Equipos con más de un disco duro, el Ente podrá definir el número, tipo y capacidades del disco duro de acuerdo a sus necesidades. Autocifrado opcional de acuerdo a las necesidades del Ente requirente</td>
                            <td>Elegir uno de las siguientes opciones: -1 TB mínimo en HDD o SSDH, interfaz SATA III. -128 GB mínimo en SSD, SATA (Serial Advanced Technology Attachment), M2, PCI Express. Equipos con más de un disco duro, el Ente podrá definir el número, tipo y capacidades del disco duro de acuerdo a sus necesidades. Autocifrado opcional de acuerdo a las necesidades del Ente requirente.</td>
                            <td>Elegir uno de las siguientes opciones: -1 TB mínimo en HDD o SSDH, interfaz SATA III. -128 GB mínimo en SSD, SATA (Serial Advanced Technology Attachment), M2, PCI Express. Equipos con más de un disco duro, el Ente podrá definir el número, tipo y capacidades del disco duro de acuerdo a sus necesidades. Autocifrado opcional de acuerdo a las necesidades del Ente requirente.</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td class="resaltado">Gráficos</td>
                            <td>Tarjeta gráfica dedicada o integrada con las siguientes especificaciones, de acuerdo a las necesidades del Ente. Frecuencia base de 200 MHz o más. Soporte a tecnología Shader Model 5 (OpenGL 4 o DirectX 11) o superior. Salida de gráficos DVI, Display Port o HDMI.</td>
                            <td>Tarjeta gráfica dedicada o integrada con las siguientes especificaciones de a cuerdo a las necesidades del Ente Frecuencia base de 300 MHz o más. Soporte a tecnología Shader Model 5 (OpenGL 4 o DirectX 11) o superior. Salida de gráficos DVI, Display Port o HDMI.</td>
                            <td>Tarjeta gráfica dedicada o integrada con las siguientes especificaciones mínimas. Frecuencia base de 300 MHz o más. Soporte a tecnología Shader Model 5 (OpenGL 4 o DirectX 11) o superior. Salida de gráficos DVI, Display Port o HDMI.</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td class="resaltado">Monitor</td>
                            <td>Pantalla ancha de 18 a 24 pulgadas máximo Resolución mínima de 1920 x 1080 pixeles. Menú de ajustes. Conector compatible con el conector de video de la tarjeta gráfica (DVI o MiniDisplay Port o HDMI).</td>
                            <td>Pantalla ancha de 19 a 35 pulgadas máximo Resolución mínima 1920 x 1080 pixeles o más pixeles. Menú de ajustes. Conector compatible con el conector de video de la tarjeta gráfica (DVI o MiniDisplay Port o HDMI).</td>
                            <td>Pantalla ancha de 19 a 35 pulgadas maximo Resolución mínima 1920 x 1080 pixeles o más pixeles. Menú de ajustes. Conector compatible con el conector de video de la tarjeta gráfica (DVI o MiniDisplay Port o HDMI).</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td class="resaltado">Lector de Tarjeta</td>
                            <td>Secure Digital opcional: SD/SDHC UHS I-II/SDXC UHS I-II.</td>
                            <td>Secure Digital opcional: SD/SDHC UHS I-II/SDXC UHS I-II.</td>
                            <td>Secure Digital opcional: SD/SDHC UHS I-II/SDXC UHS I-II.</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td class="resaltado">Unidad Optica</td>
                            <td>CD/DVD+RW</td>
                            <td>Opcional CD/DVD+RW o Blu-Ray de acuerdo a las necesidades del ente</td>
                            <td>Opcional CD/DVD+RW o Blu-Ray  de acuerdo a las necesidades del ente</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td class="resaltado">Puertos</td>
                            <td>Características:Con un mínimo de 4 puertos USB, con 1 o 2  puertos USB de interfaz 3.0 o 3.1 Un Puerto de red con terminal RJ-45. Un puerto para gráficos de alta definición: DVI, Display Port, HDMI o VGA. Puerto de audífonos. Puerto de micrófono. Opcional Puerto de USB Tipo-C</td>
                            <td>Características: Con un mínimo de 4 puertos USB, con 1 o 2  puertos USB de interfaz 3.0 o 3.1 Un Puerto de red con terminal RJ -45. Un puerto para gráficos de alta definición: DVI, Display Port, HDMI o VGA. Puerto de audífonos. Puerto de micrófono. Opcional Puerto de USB Tipo-C</td>
                            <td>Características:Con un mínimo de 4 puertos USB, con 1 o 2  puertos USB de interfaz 3.0 o 3.1 Un Puerto de red con terminal RJ -45. Un puerto para gráficos de alta definición: DVI, Display Port, HDMI o VGA. Puerto de audífonos. Puerto de micrófono. Opcional Puerto de USB Tipo-C</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td class="resaltado">Teclado</td>
                            <td>Teclado español Latinoamérica. Con teclado numérico. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos. Misma marca que el fabricante. Con conector USB.</td>
                            <td>Teclado español Latinoamérica. Con teclado numérico. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos. Misma marca que el fabricante. Con conector USB.</td>
                            <td>Teclado español Latinoamérica. Con teclado numérico. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos. Misma marca que el fabricante. Con conector USB.</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td class="resaltado">Mouse</td>
                            <td>Con dos botones y Scroll. Con conector USB.</td>
                            <td>Con dos botones y Scroll. Con conector USB.</td>
                            <td>Con dos botones y Scroll. Con conector USB.</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td class="resaltado">Tarjeta de Red</td>
                            <td>Ethernet 10/100/1000 Base-TX Rj45 Wi-Fi: 802.11a/b/g/n/ac, (2x2) Dual Band Wireless interna instalada con su antena, e incluir el driver. (Opcional para computadoras Desktop).</td>
                            <td>Ethernet 10/100/1000 Base-TX Rj45 Wi-Fi: 802.11a/b/g/n/ac, (2x2) Dual Band Wireless interna instalada con su antena, e incluir el driver. (Opcional para computadoras Desktop).</td>
                            <td>Ethernet 10/100/1000 Base-TX Rj45 Wi-Fi: 802.11a/b/g/n/ac, (2x2) Dual Band Wireless interna instalada con su antena, e incluir el driver. (Opcional para computadoras Desktop).</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td class="resaltado">Gabinete</td>
                            <td>Misma marca del fabricante. Material de policarbonato o metálica. Opcional, alerta de apertura de gabinete.</td>
                            <td>Misma marca del fabricante. Material de policarbonato o metálica. Opcional, alerta de apertura de gabinete.</td>
                            <td>Misma marca del fabricante. Material de policarbonato o metálica. Opcional, alerta de apertura de gabinete.</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td class="resaltado">Manual y Software</td>
                            <td>Información necesaria para la recuperación de sistema operativo, drivers y configuración de fábrica en una partición en el disco duro. Sistema Operativo: de acuerdo a los requerimientos del ente requirente. Manual de instalación y configuración en español.</td>
                            <td>Información necesaria para la recuperación de sistema operativo, drivers y configuración de fábrica en una partición en el disco duro. Sistema Operativo: de acuerdo a los requerimientos del ente requirente. Manual de instalación y configuración en español.</td>
                            <td>Información necesaria para la recuperación de sistema operativo, drivers y configuración de fábrica en una partición en el disco duro. Sistema Operativo: de acuerdo a los requerimientos del ente requirente. Manual de instalación y configuración en español.</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td class="resaltado">Garantia</td>
                            <td>	Mínimo 3 años.</td>
                            <td>	Mínimo 3 años.</td>
                            <td>	Mínimo 3 años.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="div-2" class="justify-content-center content-div" style="width: 100%;">
                
                <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                    <h1 class="subtitulo" style="font-size: 2rem;">PC Portátil</h1>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda active" id="home-tab2" data-bs-toggle="tab" data-bs-target="#home-tab2-pane" type="button" role="tab" aria-controls="home-tab2-pane" aria-selected="true">Caracteristicas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile-tab2-pane" type="button" role="tab" aria-controls="profile-tab2-pane" aria-selected="false">Normas y Estandares</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="contact-tab2" data-bs-toggle="tab" data-bs-target="#contact-tab2-pane" type="button" role="tab" aria-controls="contact-tab2-pane" aria-selected="false">Software y Manuales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="garantia-tab2" data-bs-toggle="tab" data-bs-target="#garantia-tab2-pane" type="button" role="tab" aria-controls="garantia-tab2-pane" aria-selected="false">Garantia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="consideraciones-tab2" data-bs-toggle="tab" data-bs-target="#consideraciones-tab2-pane" type="button" role="tab" aria-controls="consideraciones-tab2-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active m-3" id="home-tab2-pane" role="tabpanel" aria-labelledby="home-tab2" tabindex="0">
                        <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                        <strong>Estatus:</strong> Vigente<br>
                        <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                        <ol>
                        <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                        <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                        <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                        <li style="list-style: auto;">Los equipos Laptop-Tablet 2 en 1 son dictaminables ya que se consideran equipos especiales.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade m-3" id="profile-tab2-pane" role="tabpanel" aria-labelledby="profile-tab2" tabindex="0">
                        Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                    </div>
                    <div class="tab-pane fade m-3" id="contact-tab2-pane" role="tabpanel" aria-labelledby="contact-tab2" tabindex="0">
                        <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                        <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                        electrónico y en idioma español.
                    </div>
                    <div class="tab-pane fade m-3" id="garantia-tab2-pane" role="tabpanel" aria-labelledby="garantia-tab2" tabindex="0">
                        <strong>Características que deberá cubrir:</strong>
                        <ol>
                        <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                        <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                        <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                        <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                        <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                        </ol>
                        <strong>Requerimientos de servicio:</strong>
                        <ol>
                        <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                        <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                        <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade m-3" id="consideraciones-tab2-pane" role="tabpanel" aria-labelledby="consideraciones-tab2" tabindex="0">Es estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de garantía. La ADBC no tiene responsabilidad alguna por alguna deficiencia  administrativa en este sentido.</div>
                    </div>
                </div>
                <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Componente</th>
                        <th scope="col">Equipo administrativo</th>
                        <th scope="col">Equipo Desarrollador</th>
                        <th scope="col">Equipo Diseñador</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td class="resaltado">Procesador</td>
                        <td>Con tecnología de 64 bits(x64). Desde 32 MHz o más en frecuencia base, de acuerdo a la necesidad del Ente. De 2 a 6 núcleos físicos máximo</td>
                        <td>Con tecnología de 64 bits(x64). Desde 700 MHz o más en frecuencia base, de acuerdo a la necesidad del Ente. De 4 a 12 núcleos físicos máximo.</td>
                        <td>Con tecnología de 64 bits(x64). Desde 700 MHz o más en frecuencia base, de acuerdo a la necesidad del Ente. 4 a 12 núcleos físicos máximo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td class="resaltado">Memoria RAM</td>
                        <td>De 8 GB. Opcional dual channel memory</td>
                        <td>De 16 GB a 64 GB Máximo. Dual channel o Quad channel memory</td>
                        <td>De 16 GB a 64 GB Máximo. Dual channel o Quad channel memory</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td class="resaltado">Disco Duro</td>
                        <td>Elegir uno de las siguientes opciones: -1 TB mínimo HDD, interfaz SATA III. -128 GB mínimo en SSD, Interfaz SATA (Serial Advanced Technology Attachment), M2, PCI Express. Equipos con más de un disco duro, el Ente podrá definir el número, tipo y capacidades del disco duro de acuerdo a sus necesidades. Autocifrado opcional de acuerdo a las necesidades del Ente requirente</td>
                        <td>Elegir uno de las siguientes opciones: -1 TB mínimo en HDD o SSDH, interfaz SATA III. -128 GB mínimo en SSD, SATA (Serial Advanced Technology Attachment), M2, PCI Express. Equipos con más de un disco duro, el Ente podrá definir el número, tipo y capacidades del disco duro de acuerdo a sus necesidades. Autocifrado opcional de acuerdo a las necesidades del Ente requirente.</td>
                        <td>Elegir uno de las siguientes opciones: -1 TB mínimo en HDD o SSDH, interfaz SATA III. -128 GB mínimo en SSD, SATA (Serial Advanced Technology Attachment), M2, PCI Express. Equipos con más de un disco duro, el Ente podrá definir el número, tipo y capacidades del disco duro de acuerdo a sus necesidades. Autocifrado opcional de acuerdo a las necesidades del Ente requirente.</td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td class="resaltado">Gráficos</td>
                        <td>Tarjeta gráfica dedicada o integrada con las siguientes especificaciones, de acuerdo a las necesidades del Ente. Frecuencia base de 200 MHz o más. Soporte a tecnología Shader Model 5 (OpenGL 4 o DirectX 11) o superior. Salida de gráficos DVI, Display Port o HDMI.</td>
                        <td>Tarjeta gráfica dedicada o integrada con las siguientes especificaciones de a cuerdo a las necesidades del Ente Frecuencia base de 300 MHz o más. Soporte a tecnología Shader Model 5 (OpenGL 4 o DirectX 11) o superior. Salida de gráficos DVI, Display Port o HDMI.</td>
                        <td>Tarjeta gráfica dedicada o integrada con las siguientes especificaciones mínimas. Frecuencia base de 300 MHz o más. Soporte a tecnología Shader Model 5 (OpenGL 4 o DirectX 11) o superior. Salida de gráficos DVI, Display Port o HDMI.</td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td class="resaltado">Monitor</td>
                        <td>Pantalla ancha de 18 a 24 pulgadas máximo Resolución mínima de 1920 x 1080 pixeles. Menú de ajustes. Conector compatible con el conector de video de la tarjeta gráfica (DVI o MiniDisplay Port o HDMI).</td>
                        <td>Pantalla ancha de 19 a 35 pulgadas máximo Resolución mínima 1920 x 1080 pixeles o más pixeles. Menú de ajustes. Conector compatible con el conector de video de la tarjeta gráfica (DVI o MiniDisplay Port o HDMI).</td>
                        <td>Pantalla ancha de 19 a 35 pulgadas maximo Resolución mínima 1920 x 1080 pixeles o más pixeles. Menú de ajustes. Conector compatible con el conector de video de la tarjeta gráfica (DVI o MiniDisplay Port o HDMI).</td>
                        </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td class="resaltado">Lector de Tarjeta</td>
                        <td>Secure Digital opcional: SD/SDHC UHS I-II/SDXC UHS I-II.</td>
                        <td>Secure Digital opcional: SD/SDHC UHS I-II/SDXC UHS I-II.</td>
                        <td>Secure Digital opcional: SD/SDHC UHS I-II/SDXC UHS I-II.</td>
                        </tr>
                        <tr>
                        <th scope="row">7</th>
                        <td class="resaltado">Unidad Optica</td>
                        <td>CD/DVD+RW</td>
                        <td>Opcional CD/DVD+RW o Blu-Ray</td>
                        <td>Opcional CD/DVD+RW o Blu-Ray </td>
                        </tr>
                        <tr>
                        <th scope="row">8</th>
                        <td class="resaltado">Batería</td>
                        <td>Batería de Ion-Litio de 1 o más celdas, Duración mínima de 2 o 4 horas</td>
                        <td>Batería de Ion-Litio de 1 o más celdas, Duración mínima de 4 horas (requerimiento mínimo).</td>
                        <td>Batería de Ion-Litio de 1 o más celdas, Duración mínima de 4 horas (requerimiento mínimo). </td>
                        </tr>
                        <tr>
                        <th scope="row">9</th>
                        <td class="resaltado">Puertos</td>
                        <td>Características: 1 a 3 puertos USB 3.1 mínimo. Un Puerto de red con terminal RJ -45. Un puerto para gráficos de alta definición: DVI o Display Port o HDMI. Puerto de audífonos*. Puerto de micrófono*. *Los puertos de audífonos y micrófonos pueden estar integrados en uno solo.</td>
                        <td>Características: 1 a 3 puertos USB 3.1 mínimo. Un Puerto de red con terminal RJ -45. Un puerto para gráficos de alta definición: DVI o Display Port o HDMI. Puerto de audífonos*. Puerto de micrófono*. *Los puertos de audífonos y micrófonos pueden estar integrados en uno solo.</td>
                        <td>Características: 1 a 3 puertos USB 3.1 mínimo. Un Puerto de red con terminal RJ -45. Un puerto para gráficos de alta definición: DVI o Display Port o HDMI. Puerto de audífonos*. Puerto de micrófono*. *Los puertos de audífonos y micrófonos pueden estar integrados en uno solo.</td>
                        </tr>
                        <tr>
                        <th scope="row">10</th>
                        <td class="resaltado">Teclado</td>
                        <td>Teclado español Latinoamérica. Con teclado numérico. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos. Misma marca que el fabricante. Con conector USB.</td>
                        <td>Teclado español Latinoamérica. Con teclado numérico. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos. Misma marca que el fabricante. Con conector USB.</td>
                        <td>Teclado español Latinoamérica. Con teclado numérico. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos. Misma marca que el fabricante. Con conector USB.</td>
                        </tr>
                        <tr>
                        <th scope="row">11</th>
                        <td class="resaltado">Manual y Software</td>
                        <td>Información necesaria para la recuperación de sistema operativo, drivers y configuración de fábrica en una partición en el disco duro. Sistema Operativo: de acuerdo a los requerimientos del ente requirente. Manual de instalación y configuración en español.</td>
                        <td>Información necesaria para la recuperación de sistema operativo, drivers y configuración de fábrica en una partición en el disco duro. Sistema Operativo: de acuerdo a los requerimientos del ente requirente. Manual de instalación y configuración en español.</td>
                        <td>Información necesaria para la recuperación de sistema operativo, drivers y configuración de fábrica en una partición en el disco duro. Sistema Operativo: de acuerdo a los requerimientos del ente requirente. Manual de instalación y configuración en español.</td>
                        </tr>
                        <tr>
                        <th scope="row">12</th>
                        <td class="resaltado">Garantia</td>
                        <td>Mínimo 3 años.</td>
                        <td>Mínimo 3 años.</td>
                        <td>Mínimo 3 años.</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <div id="div-3" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Tablet de Oficina</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda active" id="home-tab3" data-bs-toggle="tab" data-bs-target="#home-tab3-pane" type="button" role="tab" aria-controls="home-tab3-pane" aria-selected="true">Caracteristicas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="profile-tab3" data-bs-toggle="tab" data-bs-target="#profile-tab3-pane" type="button" role="tab" aria-controls="profile-tab3-pane" aria-selected="false">Normas y Estandares</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact-tab3-pane" type="button" role="tab" aria-controls="contact-tab3-pane" aria-selected="false">Software y Manuales</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="garantia-tab3" data-bs-toggle="tab" data-bs-target="#garantia-tab3-pane" type="button" role="tab" aria-controls="garantia-tab3-pane" aria-selected="false">Garantia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="consideraciones-tab3" data-bs-toggle="tab" data-bs-target="#consideraciones-tab3-pane" type="button" role="tab" aria-controls="consideraciones-tab3-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active m-3" id="home-tab3-pane" role="tabpanel" aria-labelledby="home-tab3" tabindex="0">
                        <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                        <strong>Estatus:</strong> Vigente<br>
                        <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                        <ol>
                        <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                        <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                        <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                        <li style="list-style: auto;">Los equipos Laptop-Tablet 2 en 1 son dictaminables ya que se consideran equipos especiales.</li>
                        </ol>
                    </div>
                <div class="tab-pane fade m-3" id="profile-tab3-pane" role="tabpanel" aria-labelledby="profile-tab3" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab3-pane" role="tabpanel" aria-labelledby="contact-tab3" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab3-pane" role="tabpanel" aria-labelledby="garantia-tab3" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab3-pane" role="tabpanel" aria-labelledby="consideraciones-tab3" tabindex="0">Es estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de garantía. La ADBC no tiene responsabilidad alguna por alguna deficiencia  administrativa en este sentido.</div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Especificaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Procesador</td>
                    <td>Un mínimo de 1.3 GHz en el reloj del procesador Un máximo de 12 núcleos físicos</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Memoria Interna</td>
                    <td>Un mínimo de 16 GB</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Pantalla</td>
                    <td>De 7” o superior con una resolución mínima de 1200 x 800px</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Sistema Operativo</td>
                    <td>A elegir, con la versión más reciente, la ADBC no respalda o favorece el uso de algún Sistema Operativo.</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Memoria RAM</td>
                    <td>Un mínimo de 16 GB</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Procesador video GPU</td>
                    <td>Si</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Wi-Fi</td>
                    <td>versión reciente con 802.11a/b/g/n mínimo.</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Bluetooth</td>
                    <td>4.0 o superior</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Cámara</td>
                    <td>Frontal y Trasera</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Conector</td>
                    <td>Micro SD/SDHC Memory Card</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Seguridad</td>
                    <td>Password de usuario</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Batería</td>
                    <td>Batería recargable integrada Carga a través del adaptador de corriente o USB del sistema de la computadora</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Conectividad LTE</td>
                    <td>Opcional</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Accesorios</td>
                    <td>Cargador y cable micro SD.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Garantía</td>
                    <td>Minimo de 3 años</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-4" class="justify-content-center content-div" style="width: 100%;">
                <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                    <h1 class="subtitulo" style="font-size: 2rem;">Servidores Tipo 1(Rack) y 2(Torre)</h1>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda active" id="home-tab4" data-bs-toggle="tab" data-bs-target="#home-tab4-pane" type="button" role="tab" aria-controls="home-tab4-pane" aria-selected="true">Caracteristicas</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="profile-tab4" data-bs-toggle="tab" data-bs-target="#profile-tab4-pane" type="button" role="tab" aria-controls="profile-tab4-pane" aria-selected="false">Normas y Estandares</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="contact-tab4" data-bs-toggle="tab" data-bs-target="#contact-tab4-pane" type="button" role="tab" aria-controls="contact-tab4-pane" aria-selected="false">Software y Manuales</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="garantia-tab4" data-bs-toggle="tab" data-bs-target="#garantia-tab4-pane" type="button" role="tab" aria-controls="garantia-tab4-pane" aria-selected="false">Garantia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link letra-guinda" id="consideraciones-tab4" data-bs-toggle="tab" data-bs-target="#consideraciones-tab4-pane" type="button" role="tab" aria-controls="consideraciones-tab4-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active m-3" id="home-tab4-pane" role="tabpanel" aria-labelledby="home-tab4" tabindex="0">
                            <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                            <strong>Estatus:</strong> Vigente<br>
                            <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                            <ol>
                            <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                            <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                            <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                            </ol>
                        </div>
                    <div class="tab-pane fade m-3" id="profile-tab4-pane" role="tabpanel" aria-labelledby="profile-tab4" tabindex="0">
                        Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                    </div>
                    <div class="tab-pane fade m-3" id="contact-tab4-pane" role="tabpanel" aria-labelledby="contact-tab4" tabindex="0">
                        <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                        <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                        electrónico y en idioma español.
                    </div>
                    <div class="tab-pane fade m-3" id="garantia-tab4-pane" role="tabpanel" aria-labelledby="garantia-tab4" tabindex="0">
                        <strong>Características que deberá cubrir:</strong>
                        <ol>
                            <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                            <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                            <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                            <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                            <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                        </ol>
                        <strong>Requerimientos de servicio:</strong>
                        <ol>
                            <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                            <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                            <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                        </ol>
                    </div>
                    <div class="tab-pane fade m-3" id="consideraciones-tab4-pane" role="tabpanel" aria-labelledby="consideraciones-tab4" tabindex="0">Es estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de garantía. La ADBC no tiene responsabilidad alguna por alguna deficiencia  administrativa en este sentido.</div>
                    </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <h1>Servidor Tipo 1 - Rack</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Especificación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Procesador</td>
                    <td>1 o 2 Procesadores con tecnología x86 a 64 bits con las siguientes características técnicas: - Un mínimo de 2.0 GHz en el reloj del procesador - Un mínimo de 2 núcleos físicos - Protección contra desbordamiento de búfer - Tecnología de regulación bajo demanda - Consumo de energía (TDP) máximo de 125W</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">TarjetaMadre</td>
                    <td>Tarjeta madre diseñada por el fabricante del equipo, grabada con la marca, y debe contener un número de parte del fabricante del equipo, sin puentes, parches ni enmendaduras.</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">BIOS</td>
                    <td>Propietario del fabricante o con derechos reservados para el fabricante, almacenado en Flash ROM, actualizable vía red, que tenga manejo de plug and play en aquellos dispositivos que lo permitan. Con seguridad de password para encendido y configuración.</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Memoria RAM</td>
                    <td>16GB mínimo de DIMM  y dos slots libres mínimo para crecimiento. Expandible 64 Gbs Maximo.</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Almacenamiento</td>
                    <td>1 Disco Duro de 1T mínimo Tipo SATA III, SAS (opcional) o SSD, para rack.RAID 1 con controlador SATA , SAS (opcional) o SSD, con soporte para 2 discos duros mínimo. Hot Swap o Hot Plug, si lo requiere el ente requirente.</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Gráficos</td>
                    <td>Tarjeta de 8 MB de memoria y resolución mínima de 1280x1024 a 75 Hz</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Tarjeta de Red</td>
                    <td>Puede tener como mínimo los siguientes: Ethernet Gigabit 10/100/1000 Base T Autosensing Full Duplex, integrada a la motherboard, con conector RJ-45 y soporte para SNMP y DMI.</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Bluetooth</td>
                    <td>4.0 o superior</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Puertos</td>
                    <td>De acuerdo a la necesidad del ente puede tener cómo mínimo los siguiente. 2 ranuras PCIe (opcional) Un mínimo de 2 puertos USB 3.1 compatible con 2.0 en la parte posterior y 2 puertos frontales USB 3.1 (Para servidor de Rack 1U) Un Puerto de red con terminal RJ-45, soporte para un puerto de video VGA..</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Gabinete</td>
                    <td>Factor de forma: Rack (1U) Con kit de montaje para Rack opcional de acuerdo a las necesidades de la dependencia. Cubierta metálica o policarbonato, chasis de estructura metálica, el gabinete debe contar con sistema de apertura sin necesidad de utilizar herramienta alguna, tipo tool less en los dispositivos disco duro, unidad óptica y fuente de poder. Las grapas de sujeción de los dispositivos deberán estar identificadas para su fácil localización. Alerta de apertura de gabinete (opcional). No se aceptan alteraciones.</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Fuente de Poder</td>
                    <td>De un máximo de 400 W con capacidad de soportar todos los dispositivos planeados en operación a su máxima capacidad de crecimiento la cual deberá estar avalada con carta del fabricante. Cable de alimentación eléctrica Alimentación eléctrica monofásica polarizada con tierra física.</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Consumo de energía</td>
                    <td>Se requiere declaración del consumo de energía del equipo encendido y apagado.</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Monitor (Opcional: en caso de requerirse debe especificarse y ser de acuerdo a las características aquí descritas)</td>
                    <td>18.5" Led con resolución compatible con la resolución máxima de gráficos. Misma marca del fabricante de la computadora, apreciable en etiqueta posterior donde señale características eléctricas. Debe contar con menú de ajustes. Debe traer el cable de alimentación eléctrica. Debe traer el cable de video de acuerdo al conector de video.</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Teclado (Opcional: en caso de requerirse debe especificarse y ser de acuerdo a las características aquí descritas)</td>
                    <td>Español Latinoamérica USB. Misma marca del equipo. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Mouse (Opcional: en caso de requerirse debe especificarse y ser de acuerdo a las características aquí descritas)</td>
                    <td>Óptico USB 2 Botones+Scroll de la misma marca del equipo.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Discos de Recuperación y Drivers</td>
                    <td>El equipo deberá de tener toda la información necesaria para la recuperación de sistema operativo preinstalado (cuando aplique), drivers y configuración de fábrica en una partición en el disco duro con acceso a través de una tecla de función o en un CD/DVD.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Certificados</td>
                    <td>Nom-019-scfi-1998: norma de seguridad de equipo de procesamiento de datos, o equivalente internacional..</td>
                    </tr>
                </tbody>
                </table>
                <h1 class="mt-5 mb-5">Servidor Tipo 2 - Torre</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Especificación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Procesador</td>
                    <td>1 o 2 Procesadores con tecnología x86 a 64 bits con las siguientes características técnicas: - Un mínimo de 2.0 GHz en el reloj del procesador - Un mínimo de 2 núcleos físicos - Protección contra desbordamiento de búfer - Tecnología de regulación bajo demanda - Consumo de energía (TDP) máximo de 125W</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">TarjetaMadre</td>
                    <td>Tarjeta madre diseñada por el fabricante del equipo, grabada con la marca, y debe contener un número de parte del fabricante del equipo, sin puentes, parches ni enmendaduras.</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">BIOS</td>
                    <td>Propietario del fabricante o con derechos reservados para el fabricante, almacenado en Flash ROM, actualizable vía red, que tenga manejo de plug and play en aquellos dispositivos que lo permitan. Con seguridad de password para encendido y configuración.</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Memoria RAM</td>
                    <td>16GB mínimo de DIMM  y dos slots libres mínimo para crecimiento. Expandible 64 Gbs Maximo.</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Almacenamiento</td>
                    <td>1 Disco Duro de 1T mínimo Tipo SATA III, SAS (opcional) o SSD, para rack.RAID 1 con controlador SATA , SAS (opcional) o SSD, con soporte para 2 discos duros mínimo. Hot Swap o Hot Plug, si lo requiere el ente requirente.</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Gráficos</td>
                    <td>Tarjeta de 8 MB de memoria y resolución mínima de 1280x1024 a 75 Hz</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Tarjeta de Red</td>
                    <td>Ethernet Gigabit 10/100/1000 Base T Autosensing Full Duplex, integrada a la motherboard, con conector RJ-45 y soporte para SNMP y DMI.</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Unidad óptica</td>
                    <td>DVD-ROM o DVD-RW opcionales. Interno tipo Sata, homologado por el fabricante.</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Puertos</td>
                    <td>Un mínimo de 4 puertos USB 3.1 compatible con 2.0 en la parte posterior y 2 puertos frontales USB 3.1 (Para servidor de Torre) Un Puerto de red con terminal RJ -45, soporte para un puerto de video VGA.</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Gabinete</td>
                    <td>Factor de forma: Tipo Torre Con kit de montaje Para servidor de Torre, opcional de acuerdo a las necesidades de la dependencia. Cubierta metálica o policarbonato, chasis de estructura metálica, el gabinete debe contar con sistema de apertura sin necesidad de utilizar herramienta alguna, tipo tool less en los dispositivos disco duro, unidad óptica y fuente de poder. Las grapas de sujeción de los dispositivos deberán estar identificadas para su fácil localización. Alerta de apertura de gabinete (opcional). No se aceptan alteraciones. Al menos 4 bahías libres para discos duros(Para servidor de Torre)</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Fuente de Poder</td>
                    <td>De un máximo de 400 W con capacidad de soportar todos los dispositivos planeados en operación a su máxima capacidad de crecimiento la cual deberá estar avalada con carta del fabricante. Cable de alimentación eléctrica Alimentación eléctrica monofásica polarizada con tierra física.</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Consumo de energía</td>
                    <td>Se requiere declaración del consumo de energía del equipo encendido y apagado.</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Monitor (Opcional: en caso de requerirse debe especificarse y ser de acuerdo a las características aquí descritas)</td>
                    <td>18.5" Led con resolución compatible con la resolución máxima de gráficos. Misma marca del fabricante de la computadora, apreciable en etiqueta posterior donde señale características eléctricas. Debe contar con menú de ajustes. Debe traer el cable de alimentación eléctrica. Debe traer el cable de video de acuerdo al conector de video.</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Teclado (Opcional: en caso de requerirse debe especificarse y ser de acuerdo a las características aquí descritas)</td>
                    <td>Español Latinoamérica USB. Misma marca del equipo. Con 12 teclas de función, teclado numérico y tecla de menú de inicio para Windows, con indicadores luminosos.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Mouse (Opcional: en caso de requerirse debe especificarse y ser de acuerdo a las características aquí descritas)</td>
                    <td>Óptico USB 2 Botones+Scroll de la misma marca del equipo.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Discos de Recuperación y Drivers</td>
                    <td>El equipo deberá de tener toda la información necesaria para la recuperación de sistema operativo preinstalado (cuando aplique), drivers y configuración de fábrica en una partición en el disco duro con acceso a través de una tecla de función o en un CD/DVD.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Certificados</td>
                    <td>Nom-019-scfi-1998: norma de seguridad de equipo de procesamiento de datos, o equivalente internacional.</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-5" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Impresoras Monocromaticas Tipo 1 y 2</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab5" data-bs-toggle="tab" data-bs-target="#home-tab5-pane" type="button" role="tab" aria-controls="home-tab5-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab5" data-bs-toggle="tab" data-bs-target="#profile-tab5-pane" type="button" role="tab" aria-controls="profile-tab5-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab5" data-bs-toggle="tab" data-bs-target="#contact-tab5-pane" type="button" role="tab" aria-controls="contact-tab5-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab5" data-bs-toggle="tab" data-bs-target="#garantia-tab5-pane" type="button" role="tab" aria-controls="garantia-tab5-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab5" data-bs-toggle="tab" data-bs-target="#consideraciones-tab5-pane" type="button" role="tab" aria-controls="consideraciones-tab5-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab5-pane" role="tabpanel" aria-labelledby="home-tab5" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab5-pane" role="tabpanel" aria-labelledby="profile-tab5" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab5-pane" role="tabpanel" aria-labelledby="contact-tab5" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab5-pane" role="tabpanel" aria-labelledby="garantia-tab5" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab5-pane" role="tabpanel" aria-labelledby="consideraciones-tab5" tabindex="0">Es    estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte   al proceso y aseguren el respaldo de los fabricantes de los mismos, en   cuanto a especificaciones técnicas, vicios ocultos y condiciones de   garantía. La ADBC no tiene responsabilidad alguna por  alguna  deficiencia administrativa en este sentido.
                CONSUMUBLES KITS INICIALES<br>
                <strong>Monocromática:</strong> Debe incluir  adicionalmente al cartucho de tóner instalado de fábrica, un cartucho de tóner  para 4,000 impresiones mínimo.<br>
                En el proceso de adquisición, anexo a las    características técnicas  del equipo, se debe proporcionar una lista   con los  rendimientos y el  precio de los consumibles del equipo, para   su evaluación en  los costos  de operación.<br>
                <strong>SE  RECOMIENDA QUE EL FABRICANTE TENGA UN SISTEMA DE   RECOLECCION Y   DISPOSICIÓN DE LOS CARTUCHOS VACIOS PARA SU RECICLAJE   ECOLOGICO, SIN  NINGUN  CARGO ADICIONAL PARA LAS DEPENDENCIAS DEL   GOBIERNO DE CIUDAD DE MÉXICO. </strong></div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Tipo 1</th>
                    <th scope="col">Tipo 2</th>
                    <th scope="col">Tipo 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Tecnología de impresión</td>
                    <td>Láser o Led</td>
                    <td>Láser o Led</td>
                    <td>Láser o Led</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Tipo</td>
                    <td>Monocromática</td>
                    <td>Monocromática</td>
                    <td>Monocromática</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Resolución dpi</td>
                    <td>600 x 600 dpi como mínimo o superior</td>
                    <td>600 x 600 dpi como mínimo o superior</td>
                    <td>600 x 600 dpi como mínimo o superior</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Memoria RAM</td>
                    <td>256 MB como mínimo o superior</td>
                    <td>512 MB como mínimo o superior</td>
                    <td>512 MB como mínimo o superior</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Velocidad ppm</td>
                    <td>De 20 ppm hasta 25 ppm como máximo</td>
                    <td>De 26 ppm hasta 40 ppm como máximo</td>
                    <td>De 41 ppm hasta 50 ppm como máximo</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Puertos</td>
                    <td>Puerto USB Version 2.0, Ethernet 10/100/1000 Base-TX RJ-45 mínimo, opcional Wi-Fi</td>
                    <td>Puerto USB Version 2.0, Ethernet 10/100/1000 Base-TX RJ-45 mínimo, opcional Wi-Fi</td>
                    <td>Puerto USB Version 2.0, Ethernet 10/100/1000 Base-TX RJ-45 mínimo, opcional Wi-Fi</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Dúplex</td>
                    <td>La capacidad de impresión automática en ambas caras de la hoja, es opcional</td>
                    <td>Deberá tener la capacidad de impresión automática en ambas caras de la hoja</td>
                    <td>Deberá tener la capacidad de impresión automática en ambas caras de la hoja</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Capacidad de Papel</td>
                    <td>Bandeja multipropósito integrada de 100 hojas o superior y bandeja manual que debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente</td>
                    <td>Bandeja multipropósito integrada de 100 hojas o superior y bandeja manual que debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente</td>
                    <td>Bandeja multipropósito integrada de 100 hojas o superior y bandeja manual que debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Tamaño de papel</td>
                    <td>Carta y Oficio mínimo</td>
                    <td>Carta y Oficio mínimo</td>
                    <td>Carta y Oficio mínimo</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Sistemas Soportados</td>
                    <td>Windows, Mac OSX  Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    <td>Windows, Mac OSX  Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    <td>Windows, Mac OSX  Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Manuales, software y accesorio</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Garantía</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación, en el área donde reside el equipo</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación, en el área donde reside el equipo</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación, en el área donde reside el equipo</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Kit inicial de consumibles</td>
                    <td>Instalado (s) de fábrica, cartucho(s) de tóner para 4,000 impresiones mínimo.</td>
                    <td>Instalado (s) de fábrica, cartucho(s) de tóner para 9,000 impresiones mínimo.</td>
                    <td>Instalado (s) de fábrica, cartucho(s) de tóner para 10,000 impresiones mínimo.</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Sistema para el ahorro de energía</td>
                    <td>Energy Star y EPEAT vigentes para la marca del bien.</td>
                    <td>Energy Star y EPEAT vigentes para la marca del bien.</td>
                    <td>Energy Star y EPEAT vigentes para la marca del bien.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Estado físico</td>
                    <td>La impresora láser o led monocromática propuesta, deberá ser 100 % nueva y original, empacada de fábrica y de la línea de negocios del fabricante</td>
                    <td>La impresora láser o led monocromática propuesta, deberá ser 100 % nueva y original, empacada de fábrica y de la línea de negocios del fabricante</td>
                    <td>La impresora láser o led monocromática propuesta, deberá ser 100 % nueva y original, empacada de fábrica y de la línea de negocios del fabricante</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-6" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Impresoras a Color Tipo 1 y 2</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab6" data-bs-toggle="tab" data-bs-target="#home-tab6-pane" type="button" role="tab" aria-controls="home-tab6-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab6" data-bs-toggle="tab" data-bs-target="#profile-tab6-pane" type="button" role="tab" aria-controls="profile-tab6-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab6" data-bs-toggle="tab" data-bs-target="#contact-tab6-pane" type="button" role="tab" aria-controls="contact-tab6-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab6" data-bs-toggle="tab" data-bs-target="#garantia-tab6-pane" type="button" role="tab" aria-controls="garantia-tab6-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab6" data-bs-toggle="tab" data-bs-target="#consideraciones-tab6-pane" type="button" role="tab" aria-controls="consideraciones-tab6-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab6-pane" role="tabpanel" aria-labelledby="home-tab6" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab6-pane" role="tabpanel" aria-labelledby="profile-tab6" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab6-pane" role="tabpanel" aria-labelledby="contact-tab6" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab6-pane" role="tabpanel" aria-labelledby="garantia-tab6" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab6-pane" role="tabpanel" aria-labelledby="consideraciones-tab6" tabindex="0">Es estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte   al proceso y aseguren el respaldo de los fabricantes de los mismos, en   cuanto a especificaciones técnicas, vicios ocultos y condiciones de   garantía. La ADBC no tiene responsabilidad alguna por  alguna  deficiencia administrativa en este sentido.
                CONSUMUBLES KITS INICIALES<br>
                <strong>Color:</strong> Debe incluir  adicionalmente al cartucho de tóner instalado de fábrica, un cartucho de tóner  para 4,000 impresiones mínimo.<br>
                En el proceso de adquisición, anexo a las    características técnicas  del equipo, se debe proporcionar una lista   con los  rendimientos y el  precio de los consumibles del equipo, para   su evaluación en  los costos  de operación.<br>
                <strong>SE  RECOMIENDA QUE EL FABRICANTE TENGA UN SISTEMA DE   RECOLECCION Y   DISPOSICIÓN DE LOS CARTUCHOS VACIOS PARA SU RECICLAJE   ECOLOGICO, SIN  NINGUN  CARGO ADICIONAL PARA LAS DEPENDENCIAS DEL   GOBIERNO DE CIUDAD DE MÉXICO. </strong></div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Tipo 1</th>
                    <th scope="col">Tipo 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Tecnología de impresión</td>
                    <td>Láser o Led</td>
                    <td>Láser o Led</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Tipo</td>
                    <td>Color</td>
                    <td>Color</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Resolución dpi</td>
                    <td>600 x 600 dpi como mínimo o superior</td>
                    <td>600 x 600 dpi como mínimo o superior</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Memoria RAM</td>
                    <td>256 MB como mínimo o superior</td>
                    <td>512 MB como mínimo o superior</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Velocidad ppm</td>
                    <td>De 21 ppm hasta 25 ppm como máximo</td>
                    <td>De 26 ppm hasta 44 ppm como máximo</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Puertos</td>
                    <td>Puerto USB Version 2.0, Ethernet 10/100/1000 Base-TX RJ-45 mínimo, opcional Wi-Fi</td>
                    <td>Puerto USB Version 2.0, Ethernet 10/100/1000 Base-TX RJ-45 mínimo, opcional Wi-Fi</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Dúplex</td>
                    <td>La capacidad de impresión automática en ambas caras de la hoja, es opcional</td>
                    <td>Deberá tener la capacidad de impresión automática en ambas caras de la hoja</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Capacidad de Papel</td>
                    <td>Bandeja multipropósito integrada de 100 hojas o superior y bandeja manual que debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente</td>
                    <td>Bandeja multipropósito integrada de 100 hojas o superior y bandeja manual que debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Tamaño de papel</td>
                    <td>Carta y Oficio mínimo</td>
                    <td>Carta y Oficio mínimo</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Sistemas Soportados</td>
                    <td>Windows, Mac OSX  Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    <td>Windows, Mac OSX  Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Manuales, software y accesorio</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Garantía</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación, en el área donde reside el equipo</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación, en el área donde reside el equipo</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Kit inicial de consumibles</td>
                    <td>Instalado (s) de fábrica, cartucho(s) de tóner para 4,000 impresiones mínimo.</td>
                    <td>Instalado (s) de fábrica, cartucho(s) de tóner para 9,000 impresiones mínimo.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Estado físico</td>
                    <td>La impresora láser o led monocromática propuesta, deberá ser 100 % nueva y original, empacada de fábrica y de la línea de negocios del fabricante</td>
                    <td>La impresora láser o led monocromática propuesta, deberá ser 100 % nueva y original, empacada de fábrica y de la línea de negocios del fabricante</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-7" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Impresora Multifuncional Laser</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda active" id="home-tab7" data-bs-toggle="tab" data-bs-target="#home-tab7-pane" type="button" role="tab" aria-controls="home-tab7-pane" aria-selected="true">Caracteristicas</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="profile-tab7" data-bs-toggle="tab" data-bs-target="#profile-tab7-pane" type="button" role="tab" aria-controls="profile-tab7-pane" aria-selected="false">Normas y Estandares</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="contact-tab7" data-bs-toggle="tab" data-bs-target="#contact-tab7-pane" type="button" role="tab" aria-controls="contact-tab7-pane" aria-selected="false">Software y Manuales</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="garantia-tab7" data-bs-toggle="tab" data-bs-target="#garantia-tab7-pane" type="button" role="tab" aria-controls="garantia-tab7-pane" aria-selected="false">Garantia</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link letra-guinda" id="consideraciones-tab7" data-bs-toggle="tab" data-bs-target="#consideraciones-tab7-pane" type="button" role="tab" aria-controls="consideraciones-tab7-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab7-pane" role="tabpanel" aria-labelledby="home-tab7" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab7-pane" role="tabpanel" aria-labelledby="profile-tab7" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab7-pane" role="tabpanel" aria-labelledby="contact-tab7" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab7-pane" role="tabpanel" aria-labelledby="garantia-tab7" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab7-pane" role="tabpanel" aria-labelledby="consideraciones-tab7" tabindex="0">Es    estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte   al proceso y aseguren el respaldo de los fabricantes de los mismos, en   cuanto a especificaciones técnicas, vicios ocultos y condiciones de   garantía. La ADBC no tiene responsabilidad alguna por  alguna  deficiencia administrativa en este sentido.
                CONSUMUBLES KITS INICIALES<br>
                <strong>Monocromática:</strong> Debe incluir  adicionalmente al cartucho de tóner instalado de fábrica, un cartucho de tóner  para 4,000 impresiones mínimo.<br>
                En el proceso de adquisición, anexo a las    características técnicas  del equipo, se debe proporcionar una lista   con los  rendimientos y el  precio de los consumibles del equipo, para   su evaluación en  los costos  de operación.<br>
                <strong>SE  RECOMIENDA QUE EL FABRICANTE TENGA UN SISTEMA DE   RECOLECCION Y   DISPOSICIÓN DE LOS CARTUCHOS VACIOS PARA SU RECICLAJE   ECOLOGICO, SIN  NINGUN  CARGO ADICIONAL PARA LAS DEPENDENCIAS DEL   GOBIERNO DE CIUDAD DE MÉXICO. </strong></div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Tipo 1</th>
                    <th scope="col">Tipo 2</th>
                    <th scope="col">Tipo 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Tecnología de impresión</td>
                    <td>Láser monocromatico</td>
                    <td>Láser de color</td>
                    <td>Láser monocromatico</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Resolución</td>
                    <td>1200 x 600 dpi</td>
                    <td>600 x 600 dpi</td>
                    <td>600 x 600 dpi para copiado, escaneado e impresión como mínimo.</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Velocidad de impresión</td>
                    <td>21 ppm como mínimo</td>
                    <td>30 ppm negro y 15 ppm Color mínimo.</td>
                    <td>50 ppm o superior.</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Área de la cama plana</td>
                    <td>Carta y Oficio mínimo.</td>
                    <td>Carta y Oficio mínimo, escaneo a color, alimentación automática.</td>
                    <td>Carta y Oficio mínimo.</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Capacidad de bandeja de alimentación</td>
                    <td>Bandeja integrada de 100 páginas o superior. La bandeja manual debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente. Debe tener la capacidad de impresión automática en ambas caras de la hoja.</td>
                    <td>Bandeja integrada de 250 páginas o superior. La bandeja manual debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente. Debe tener la capacidad de impresión automática en ambas caras de la hoja.</td>
                    <td>2000 hojas como mínimo distribuido en las diferentes bandejas. La bandeja manual debe tener los accesorios para sostener la hoja completa y el mecanismo de la impresora la tome automáticamente. Debe tener la capacidad de impresión automática en ambas caras de la hoja.</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Funciones estándar</td>
                    <td>Copiado, escaneo e impresión a doble cara (dúplex automático)</td>
                    <td>Copiado, escaneo e impresión a doble cara (dúplex automático)</td>
                    <td>Copiado, escaneo e impresión a doble cara (dúplex automático)</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Puertos</td>
                    <td>USB 2.0 o USB 3.0, Ethernet 10/100 BASE-TX RJ-45, opcional: Wi-Fi</td>
                    <td>USB 2.0 o USB 3.0, Ethernet 10/100 BASE-TX RJ-45, opcional: Wi-Fi</td>
                    <td>USB 2.0 o USB 3.0, Ethernet 10/100 BASE-TX RJ-45, opcional: Wi-Fi</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Tamaño de papel</td>
                    <td>Carta y Oficio mínimo</td>
                    <td>Carta y Oficio mínimo</td>
                    <td>Carta y Oficio mínimo</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Manuales, software y accesorio</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo y se deberá adicionar un kit de de tóner nuevo al kit de prueba, mismo que deberá venir empacado adicional al equipo</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Compatibilidad</td>
                    <td>Windows y MAC OS X. Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    <td>Windows y MAC OS X. Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    <td>Windows y MAC OS X. Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Garantía</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación en el área donde reside el equipo</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación en el área donde reside el equipo</td>
                    <td>1 año mínimo al momento de la entrega, el cual comprenderá refacciones nuevas y originales, así como la sustitución del equipo en caso de defecto de fabricación en el área donde reside el equipo</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Sistema para el ahorro de energía</td>
                    <td>Energy Star y EPEAT vigentes para la marca del bien.</td>
                    <td>Energy Star y EPEAT vigentes para la marca del bien.</td>
                    <td>Energy Star y EPEAT vigentes para la marca del bien.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Estado físico</td>
                    <td>El multifuncional láser monocromático propuesto, deberá ser 100 % nuevo y original, empacado de fábrica y de la línea de negocios del fabricante</td>
                    <td>El multifuncional láser monocromático propuesto, deberá ser 100 % nuevo y original, empacado de fábrica y de la línea de negocios del fabricante</td>
                    <td>El multifuncional láser monocromático propuesto, deberá ser 100 % nuevo y original, empacado de fábrica y de la línea de negocios del fabricante</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-8" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Impresora Multifuncional Inyección de Tinta</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab8" data-bs-toggle="tab" data-bs-target="#home-tab8-pane" type="button" role="tab" aria-controls="home-tab8-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab8" data-bs-toggle="tab" data-bs-target="#profile-tab8-pane" type="button" role="tab" aria-controls="profile-tab8-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab8" data-bs-toggle="tab" data-bs-target="#contact-tab8-pane" type="button" role="tab" aria-controls="contact-tab8-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab8" data-bs-toggle="tab" data-bs-target="#garantia-tab8-pane" type="button" role="tab" aria-controls="garantia-tab8-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab8" data-bs-toggle="tab" data-bs-target="#consideraciones-tab8-pane" type="button" role="tab" aria-controls="consideraciones-tab8-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab8-pane" role="tabpanel" aria-labelledby="home-tab8" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab8-pane" role="tabpanel" aria-labelledby="profile-tab8" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab8-pane" role="tabpanel" aria-labelledby="contact-tab8" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab8-pane" role="tabpanel" aria-labelledby="garantia-tab8" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab8-pane" role="tabpanel" aria-labelledby="consideraciones-tab8" tabindex="0">Es    estricta responsabilidad del Ente Requirente, como parte funcional  durante el procedimiento de adquisición de estos componentes  tecnológicos, el considerar todas las cartas respectivas que den soporte   al proceso y aseguren el respaldo de los fabricantes de los mismos, en   cuanto a especificaciones técnicas, vicios ocultos y condiciones de   garantía. La ADBC no tiene responsabilidad alguna por  alguna  deficiencia administrativa en este sentido.
                CONSUMUBLES KITS INICIALES<br>
                <strong>Monocromática:</strong> Debe incluir  adicionalmente al cartucho de tóner instalado de fábrica, un cartucho de tóner  para 4,000 impresiones mínimo.<br>
                En el proceso de adquisición, anexo a las    características técnicas  del equipo, se debe proporcionar una lista   con los  rendimientos y el  precio de los consumibles del equipo, para   su evaluación en  los costos  de operación.<br>
                <strong>SE  RECOMIENDA QUE EL FABRICANTE TENGA UN SISTEMA DE   RECOLECCION Y   DISPOSICIÓN DE LOS CARTUCHOS VACIOS PARA SU RECICLAJE   ECOLOGICO, SIN  NINGUN  CARGO ADICIONAL PARA LAS DEPENDENCIAS DEL   GOBIERNO DE CIUDAD DE MÉXICO. </strong></div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Componente</th>
                    <th scope="col">Requerimientos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Color</td>
                    <td>Con cartuchos o botes de tinta separados</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Tecnología</td>
                    <td>De inyección de tinta de 4 colores (CMYK) </td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Velocidad</td>
                    <td>15 ppm a color y 33 ppm en texto negro</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Resolución</td>
                    <td>1200 x 1200 dpi mínimo</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Puertos</td>
                    <td>USB 2.0, Ethernet y WI-FI</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Tarjeta de WI-FI</td>
                    <td>802.11b/g/n opcional</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Bandeja de Entrada</td>
                    <td>100 hojas mínimo</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Bandeja de Salida</td>
                    <td>30 hojas mínimo</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Tamaño de papel</td>
                    <td>Mínimo carta, oficio y sobres</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Compatibilidad</td>
                    <td>Windows y MAC OS X. Si requiere alguna versión de Linux u otro SO deberá especificarlo</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Tinta</td>
                    <td>Incluir la cantidad de cartuchos o botes necesarios.</td>
                    </tr>
                    <tr>
                    <td colspan="3" ><strong> Escáner</strong> </td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Resolución</td>
                    <td>1200 dpi</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Velocidad de escaneo negro</td>
                    <td>5 ppm (200 ppi)</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Velocidad de escaneo color</td>
                    <td>3 ppm (200 ppi)</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Formato salida </td>
                    <td>Mínimo BMP, JPEG, TIFF, PDF</td>
                    </tr>
                    <tr>
                    <td colspan="3" ><strong>Copiadora</strong></td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Calidad</td>
                    <td>Blanco y negro, color</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Velocidad</td>
                    <td>10 copias por minuto</td>
                    </tr>
                    <tr>
                    <td colspan="3" ><strong> Otros</strong> </td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Garantia</td>
                    <td>1 año en todas sus partes</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Contenido de la caja</td>
                    <td>Impresora, Cable USB de alta velocidad; adaptador de alimentación con cable de alimentación; CD-ROM con software de instalación y configuración y Guía de soporte y configuración y manuales</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-9" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Escaner</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab9" data-bs-toggle="tab" data-bs-target="#home-tab9-pane" type="button" role="tab" aria-controls="home-tab9-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab9" data-bs-toggle="tab" data-bs-target="#profile-tab9-pane" type="button" role="tab" aria-controls="profile-tab9-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab9" data-bs-toggle="tab" data-bs-target="#contact-tab9-pane" type="button" role="tab" aria-controls="contact-tab9-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab9" data-bs-toggle="tab" data-bs-target="#garantia-tab9-pane" type="button" role="tab" aria-controls="garantia-tab9-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab9" data-bs-toggle="tab" data-bs-target="#consideraciones-tab9-pane" type="button" role="tab" aria-controls="consideraciones-tab9-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab9-pane" role="tabpanel" aria-labelledby="home-tab9" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab9-pane" role="tabpanel" aria-labelledby="profile-tab9" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab9-pane" role="tabpanel" aria-labelledby="contact-tab9" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab9-pane" role="tabpanel" aria-labelledby="garantia-tab9" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab9-pane" role="tabpanel" aria-labelledby="consideraciones-tab9" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Especificación</th>
                    <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Tamaño de digitalización</td>
                    <td>Maximo 29.7 cm x 609.6 cm</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Tipo de digitalización</td>
                    <td>Superficie plana, alimentador automático de documentos (ADF), duplex opcional</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Resolución de escaneo, óptica</td>
                    <td>Maximo 1200 dpi, puntos por pulgada.</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Niveles de escala de grises</td>
                    <td>256 tonalidades de gris.</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Capacidad del alimentador automático de documentos</td>
                    <td>Maximo 200 hojas.</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Velocidad de escaneado</td>
                    <td>Maximo de  70 ppm (Páginas por minuto) en blanco y negro y/o color.</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Conectividad</td>
                    <td>Ethernet 10/100/1000, USB 2.0 o 3.0</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Compatibilidad con sistemas operativos</td>
                    <td>Compatible con una de las siguientes, Windows, GNU/Linux, Mac OS X, u otro, deacuerdo a las necesidades del Ente</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Garantía</td>
                    <td>Mínimo 3 años en todas sus partes</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Contenido de la caja</td>
                    <td>Escáner plano con alimentador automático de documentos (ADF); Cable USB de alta velocidad; adaptador de alimentación con cable de alimentación; CD-ROM con software de instalación y configuración y Guía de soporte y configuración y manuales</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-10" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Plotter</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab10" data-bs-toggle="tab" data-bs-target="#home-tab10-pane" type="button" role="tab" aria-controls="home-tab10-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab10" data-bs-toggle="tab" data-bs-target="#profile-tab10-pane" type="button" role="tab" aria-controls="profile-tab10-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab10" data-bs-toggle="tab" data-bs-target="#contact-tab10-pane" type="button" role="tab" aria-controls="contact-tab10-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab10" data-bs-toggle="tab" data-bs-target="#garantia-tab10-pane" type="button" role="tab" aria-controls="garantia-tab10-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab10" data-bs-toggle="tab" data-bs-target="#consideraciones-tab10-pane" type="button" role="tab" aria-controls="consideraciones-tab10-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab10-pane" role="tabpanel" aria-labelledby="home-tab10" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab10-pane" role="tabpanel" aria-labelledby="profile-tab10" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab10-pane" role="tabpanel" aria-labelledby="contact-tab10" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab10-pane" role="tabpanel" aria-labelledby="garantia-tab10" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab10-pane" role="tabpanel" aria-labelledby="consideraciones-tab10" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Componente</th>
                    <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Cartuchos de tinta</td>
                    <td>Con al mnos 4 tintas independientes</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Ancho</td>
                    <td>44 pulgadas máximo</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Velocidad de impresión</td>
                    <td>Con un mínimo 25 segundos por página en A1, 70 impresiones A1 por hora</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Resolución</td>
                    <td>Máximo 2400 x 1200 dpi</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Puertos</td>
                    <td>Mínimo Ethernet 10/100/1000, USB 2.0 o 3.0</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Tarjeta de red</td>
                    <td>Tarjeta de red Ethernet,Wi-Fi opcional.</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Memoria RAM</td>
                    <td>1GB máximo</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Manuales, software y accesorios</td>
                    <td>Incluir los manuales en español, así como un disco con el controlador del equipo.</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Compatibilidad con sistemas operativos</td>
                    <td>Compatible con una de las siguientes,  Windows, GNU/Linux, Mac OS X u otro, de acuerdo a las necesidades del Ente</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Garantía</td>
                    <td>Garantía de mínimo 3 años en todas sus partes.</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-11" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Video Proyector</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab11" data-bs-toggle="tab" data-bs-target="#home-tab11-pane" type="button" role="tab" aria-controls="home-tab11-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab11" data-bs-toggle="tab" data-bs-target="#profile-tab11-pane" type="button" role="tab" aria-controls="profile-tab11-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab11" data-bs-toggle="tab" data-bs-target="#contact-tab11-pane" type="button" role="tab" aria-controls="contact-tab11-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab11" data-bs-toggle="tab" data-bs-target="#garantia-tab11-pane" type="button" role="tab" aria-controls="garantia-tab11-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab11" data-bs-toggle="tab" data-bs-target="#consideraciones-tab11-pane" type="button" role="tab" aria-controls="consideraciones-tab11-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab11-pane" role="tabpanel" aria-labelledby="home-tab11" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab11-pane" role="tabpanel" aria-labelledby="profile-tab11" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab11-pane" role="tabpanel" aria-labelledby="contact-tab11" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab11-pane" role="tabpanel" aria-labelledby="garantia-tab11" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab11-pane" role="tabpanel" aria-labelledby="consideraciones-tab11" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Especificación</th>
                    <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Fuente de alimentación</td>
                    <td>100 - 240V ,  50 /60 Hz</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Tipo</td>
                    <td>Portátil</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Resolución mínima</td>
                    <td>800 x 600 pixeles</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Resolución máxima</td>
                    <td>1920 x 1080 pixeles</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Contraste</td>
                    <td>Dentro del rango de 15000:1 a 2600:1.</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Brillo</td>
                    <td>Brillo Máximo en Color - Salida de Luz en Color: 4,500 Lúmenes Brillo Máximo en Blanco - Salida de Luz en Blanco: 4,500 Lúmenes</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Vida útil de la lampara</td>
                    <td>2,500 horas en modo Normal y hasta 10,000 horas en modo ECO.</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Reproducción de color</td>
                    <td>Hasta 1.07 billón de colores</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Inerfaces</td>
                    <td>De acuerdo a las necesidades del Ente pueden tener como mínimo: Entrada computadora x 1 D-sub15 HDMI x 1 USB tipo A x 1 o USB tipo B x 1  Opcional Video  RCA x 1 Entrada audio RCA x 2 RCA (Blanco x 1, Rojo x 1) opcional Salida monitor x 1 Opcional Entrada audio mini x 1 Opcional Salida audio mini x 1 Opcional Wireless / Inalámbrico Opcional LAN-RJ45 opcional RS-232C x 1 opcional</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Tamaño de la pantalla</td>
                    <td>30 pulgadas a 300 pulgadas (0.89 m - 10.95 m)</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Ruido del ventilador</td>
                    <td>Dentro del rango de 20 a 40 decibeles.</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Peso</td>
                    <td>Dentro del rango de 1.7 a 4 kg</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Temperatura de operación</td>
                    <td>0 a 40°C</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Bocina integrada</td>
                    <td>Opcional de al menos 1 watt</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Compatibilidad</td>
                    <td>Con salida de video de cualquier equipo de cómputo.</td>
                    </tr>
                    <tr>
                    <th scope="row">16</th>
                    <td class="resaltado">Configuración automática</td>
                    <td>Si (Auto Setup)</td>
                    </tr>
                    <tr>
                    <th scope="row">17</th>
                    <td class="resaltado">Manuales, software y accesorios</td>
                    <td>Maletín de transporte, cables de alimentación y conexión para equipos informáticos, los manuales en español, así como un disco con el controlador del equipo.</td>
                    </tr>
                    <tr>
                    <th scope="row">18</th>
                    <td class="resaltado">Garantía</td>
                    <td>Minimo 3 años en todas sus partes</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-12" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Cámara Digital</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab12" data-bs-toggle="tab" data-bs-target="#home-tab12-pane" type="button" role="tab" aria-controls="home-tab12-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab12" data-bs-toggle="tab" data-bs-target="#profile-tab12-pane" type="button" role="tab" aria-controls="profile-tab12-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab12" data-bs-toggle="tab" data-bs-target="#contact-tab12-pane" type="button" role="tab" aria-controls="contact-tab12-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab12" data-bs-toggle="tab" data-bs-target="#garantia-tab12-pane" type="button" role="tab" aria-controls="garantia-tab12-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab12" data-bs-toggle="tab" data-bs-target="#consideraciones-tab12-pane" type="button" role="tab" aria-controls="consideraciones-tab12-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab12-pane" role="tabpanel" aria-labelledby="home-tab12" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de hardware<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas excepto donde se indique.</li>
                    <li style="list-style: auto;">Las máquinas deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab12-pane" role="tabpanel" aria-labelledby="profile-tab12" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab12-pane" role="tabpanel" aria-labelledby="contact-tab12" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab12-pane" role="tabpanel" aria-labelledby="garantia-tab12" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab12-pane" role="tabpanel" aria-labelledby="consideraciones-tab12" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Especificación</th>
                    <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Fuente de alimentación</td>
                    <td>100 - 240V ,  50 /60 Hz</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Tipo</td>
                    <td>Portátil</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Resolución mínima</td>
                    <td>800 x 600 pixeles</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Resolución máxima</td>
                    <td>1920 x 1080 pixeles</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Contraste</td>
                    <td>Dentro del rango de 15000:1 a 2600:1.</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Brillo</td>
                    <td>Brillo Máximo en Color - Salida de Luz en Color: 4,500 Lúmenes Brillo Máximo en Blanco - Salida de Luz en Blanco: 4,500 Lúmenes</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Vida útil de la lampara</td>
                    <td>2,500 horas en modo Normal y hasta 10,000 horas en modo ECO.</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Reproducción de color</td>
                    <td>Hasta 1.07 billón de colores</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Inerfaces</td>
                    <td>De acuerdo a las necesidades del Ente pueden tener como mínimo: Entrada computadora x 1 D-sub15 HDMI x 1 USB tipo A x 1 o USB tipo B x 1  Opcional Video  RCA x 1 Entrada audio RCA x 2 RCA (Blanco x 1, Rojo x 1) opcional Salida monitor x 1 Opcional Entrada audio mini x 1 Opcional Salida audio mini x 1 Opcional Wireless / Inalámbrico Opcional LAN-RJ45 opcional RS-232C x 1 opcional</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Tamaño de la pantalla</td>
                    <td>30 pulgadas a 300 pulgadas (0.89 m - 10.95 m)</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Ruido del ventilador</td>
                    <td>Dentro del rango de 20 a 40 decibeles.</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Peso</td>
                    <td>Dentro del rango de 1.7 a 4 kg</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Temperatura de operación</td>
                    <td>0 a 40°C</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Bocina integrada</td>
                    <td>Opcional de al menos 1 watt</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Compatibilidad</td>
                    <td>Con salida de video de cualquier equipo de cómputo.</td>
                    </tr>
                    <tr>
                    <th scope="row">16</th>
                    <td class="resaltado">Configuración automática</td>
                    <td>Si (Auto Setup)</td>
                    </tr>
                    <tr>
                    <th scope="row">17</th>
                    <td class="resaltado">Manuales, software y accesorios</td>
                    <td>Maletín de transporte, cables de alimentación y conexión para equipos informáticos, los manuales en español, así como un disco con el controlador del equipo.</td>
                    </tr>
                    <tr>
                    <th scope="row">18</th>
                    <td class="resaltado">Garantía</td>
                    <td>Minimo 3 años en todas sus partes</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div id="div-13" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Antivirus</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab12" data-bs-toggle="tab" data-bs-target="#home-tab12-pane" type="button" role="tab" aria-controls="home-tab12-pane" aria-selected="true">Caracteristicas</button>
                </li>
        <!--
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab12" data-bs-toggle="tab" data-bs-target="#profile-tab12-pane" type="button" role="tab" aria-controls="profile-tab12-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="contact-tab12" data-bs-toggle="tab" data-bs-target="#contact-tab12-pane" type="button" role="tab" aria-controls="contact-tab12-pane" aria-selected="false">Software y Manuales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab12" data-bs-toggle="tab" data-bs-target="#garantia-tab12-pane" type="button" role="tab" aria-controls="garantia-tab12-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab12" data-bs-toggle="tab" data-bs-target="#consideraciones-tab12-pane" type="button" role="tab" aria-controls="consideraciones-tab12-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
        -->
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab12-pane" role="tabpanel" aria-labelledby="home-tab12" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Software<br>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab12-pane" role="tabpanel" aria-labelledby="profile-tab12" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="contact-tab12-pane" role="tabpanel" aria-labelledby="contact-tab12" tabindex="0">
                    <strong>Software Preinstalado: </strong> De acuerdo a los requerimientos del ente requirente. La ADBC no  respalda ni favorece el uso de algún Sistema Operativo en específico.<br>
                    <strong>Manuales: </strong>Se debe de entregar manual del equipo para su instalación, configuración y operación en medio
                    electrónico y en idioma español.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab12-pane" role="tabpanel" aria-labelledby="garantia-tab12" tabindex="0">
                    <strong>Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboralSiexcede este   lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab12-pane" role="tabpanel" aria-labelledby="consideraciones-tab12" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Especificación</th>
                    <th scope="col">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Fuente de alimentación</td>
                    <td>100 - 240V ,  50 /60 Hz</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Tipo</td>
                    <td>Portátil</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Resolución mínima</td>
                    <td>800 x 600 pixeles</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Resolución máxima</td>
                    <td>1920 x 1080 pixeles</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Contraste</td>
                    <td>Dentro del rango de 15000:1 a 2600:1.</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Brillo</td>
                    <td>Brillo Máximo en Color - Salida de Luz en Color: 4,500 Lúmenes Brillo Máximo en Blanco - Salida de Luz en Blanco: 4,500 Lúmenes</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Vida útil de la lampara</td>
                    <td>2,500 horas en modo Normal y hasta 10,000 horas en modo ECO.</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Reproducción de color</td>
                    <td>Hasta 1.07 billón de colores</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Inerfaces</td>
                    <td>De acuerdo a las necesidades del Ente pueden tener como mínimo: Entrada computadora x 1 D-sub15 HDMI x 1 USB tipo A x 1 o USB tipo B x 1  Opcional Video  RCA x 1 Entrada audio RCA x 2 RCA (Blanco x 1, Rojo x 1) opcional Salida monitor x 1 Opcional Entrada audio mini x 1 Opcional Salida audio mini x 1 Opcional Wireless / Inalámbrico Opcional LAN-RJ45 opcional RS-232C x 1 opcional</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Tamaño de la pantalla</td>
                    <td>30 pulgadas a 300 pulgadas (0.89 m - 10.95 m)</td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Ruido del ventilador</td>
                    <td>Dentro del rango de 20 a 40 decibeles.</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Peso</td>
                    <td>Dentro del rango de 1.7 a 4 kg</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Temperatura de operación</td>
                    <td>0 a 40°C</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Bocina integrada</td>
                    <td>Opcional de al menos 1 watt</td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Compatibilidad</td>
                    <td>Con salida de video de cualquier equipo de cómputo.</td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td class="resaltado">Configuración automática</td>
                    <td>Si (Auto Setup)</td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td class="resaltado">Manuales, software y accesorios</td>
                    <td>Maletín de transporte, cables de alimentación y conexión para equipos informáticos, los manuales en español, así como un disco con el controlador del equipo.</td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td class="resaltado">Garantía</td>
                    <td>Minimo 3 años en todas sus partes</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-14">
            <div>
                <h1 class="subtitulo" style="font-size: 2rem;">Servidores WEB Y App</h1>
                <p><strong>Válido a partir del 14 de Agosto de 2023</strong></p>
                <p><strong>Estatus:</strong>Vigente</p>
                <p>
                    <strong>Categoría:</strong> Estándares Técnicos de Software<br/>
                    <strong>Apache HTTP Server </strong> V 2.4.54 o superior <a href="https://httpd.apache.org/download.cgi">(https://httpd.apache.org/download.cgi)</a><br/>
                    <strong>Lighthttpd </strong> V 1.4.68 o superior <a href="https://www.lighttpd.net/download">(https://www.lighttpd.net/download/)</a><br/>
                    <strong>Apache Tomcat</strong> V 8.5.50 o superior <a href="https://tomcat.apache.org/download-80.cgi">(https://tomcat.apache.org/download-80.cgi)</a> <br>
                    <strong>Ubuntu </strong>22.04 LTS Server Edition o superior <a href="https://ubuntu.com/download/server">(https://ubuntu.com/download/server)</a>
                </p>
            </div>
        </div>
        <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-15">
            <div>
            <h1 class="subtitulo" style="font-size: 2rem;">Manejo de Imagenes</h1>
            <p><strong>Válido a partir del 14 de Agosto de 2023</strong></p>
            <p><strong>Estatus:</strong>Vigente</p>
            <p>
                <strong>Categoría:</strong> Estándares Técnicos de Software<br/>
                GIMP V 2.10.14 o superior (Programa de Manipulación de Imágenes de GNU<a href="https://www.gimp.org/downloads/ ">-https://www.gimp.org/downloads/ )</a><br/>
                Blender  V 2.81 (Programa multi plataforma, dedicado especialmente al  modelado,  iluminación, renderizado, animación y creación de gráficos   tridimensionales.<a href="https://www.blender.org/download/"> https://www.blender.org/download/)</a><br/>
            </p>
            <p><strong>NOTA: Todos los productos de Adobe y otros  no gratuitos requieren dictamen de la ADBC.</strong></p>
            </div>
        </div>
        <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-16">
            <div>
                <h1 class="subtitulo" style="font-size: 2rem;">Software de VideoConferencias</h1>
                <p><strong>Válido a partir del 14 de Agosto de 2023</strong></p>
                <p><strong>Estatus:</strong>Vigente</p>
                <p>
                    <strong>Categoría:</strong> Estándares Técnicos de Software<br/>
                </p>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Características</th>
                    <th scope="col">Fabricantes</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="resaltado">100 participantes mínimo</td>
                    <td>G-MEET</td>
                </tr>
                <tr>
                    <td class="resaltado">Número de reuniones ilimitadas</td>
                    <td>WEBEX</td>
                </tr>
                <tr>
                    <td class="resaltado">Grabación local y/o en nube, planificación de reuniones, tiempo en sala</td>
                </tr>
                <tr>
                    <td class="resaltado">ilimitada</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div id="div-17" class="justify-content-center content-div" style="width: 100%;">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Equipos Eléctricos</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab17" data-bs-toggle="tab" data-bs-target="#home-tab17-pane" type="button" role="tab" aria-controls="home-tab17-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab17" data-bs-toggle="tab" data-bs-target="#profile-tab17-pane" type="button" role="tab" aria-controls="profile-tab17-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab17" data-bs-toggle="tab" data-bs-target="#garantia-tab17-pane" type="button" role="tab" aria-controls="garantia-tab17-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab17" data-bs-toggle="tab" data-bs-target="#consideraciones-tab17-pane" type="button" role="tab" aria-controls="consideraciones-tab17-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab17-pane" role="tabpanel" aria-labelledby="home-tab17" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Equipos Eléctricos<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Todas las especificaciones son mínimas, excepto donde se establezcan rangos.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab17-pane" role="tabpanel" aria-labelledby="profile-tab17" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab17-pane" role="tabpanel" aria-labelledby="garantia-tab17" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab17-pane" role="tabpanel" aria-labelledby="consideraciones-tab17" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">TIPO 1</th>
                    <th scope="col">TIPO 2</th>
                    </tr>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Concepto</th>
                    <th scope="col">Especificaciones Técnicas Requeridas</th>
                    <th scope="col">Especificaciones Técnicas Requeridas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td class="resaltado">Capacidad</td>
                    <td>De 480 VA y hasta 520 VA.</td>
                    <td>De 900 VA y hasta 1500 VA.</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td class="resaltado">Salida</td>
                    <td>120 VCA</td>
                    <td>120 VCA</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td class="resaltado">Entrada eléctrica</td>
                    <td>Voltaje nominal 120 VCA, rango de voltaje de 95 VCA y hasta 138 VCA, frecuencia de 50 ó 60 Hz.</td>
                    <td>Voltaje nominal 120 VCA, rango de voltaje de 90 VCA y hasta 138 VCA, frecuencia de 50 ó 60 Hz.</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td class="resaltado">Tiempo de Respaldo</td>
                    <td>50 segundos a un 100% de carga</td>
                    <td>3 minutos a un 100% de carga</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td class="resaltado">Tipo de gabinete</td>
                    <td>Tipo torre</td>
                    <td>Tipo torre</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td class="resaltado">Contactos</td>
                    <td>4 contactos polarizados, tipo NEMA 5 -15R</td>
                    <td>6 contactos polarizados, tipo NEMA 5 - 15R</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td class="resaltado">Protección</td>
                    <td>Supresor de picos</td>
                    <td>Supresor de picos</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td class="resaltado">Indicadores luminosos</td>
                    <td>LED (En línea, en batería)</td>
                    <td>LED (En línea, en batería)</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td class="resaltado">Indicadores audibles</td>
                    <td>Encendido, batería encendida o modo batería o en respaldo, regreso a línea, sobrecarga, batería baja, reemplazo de batería.</td>
                    <td>Encendido, batería encendida o modo batería o en respaldo, regreso a línea, sobrecarga, batería baja, reemplazo de batería.</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td class="resaltado">Batería</td>
                    <td>Sellado libre de mantenimiento</td>
                    <td>Sellado libre de mantenimiento</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td class="resaltado">Accesorios</td>
                    <td>Incluir software del fabricante del No break (UPS) y manuales.</td>
                    <td>Incluir software del fabricante del No break (UPS) y manuales.</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td class="resaltado">Regulador</td>
                    <td>Integrado</td>
                    <td>Integrado</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td class="resaltado">Normas y certificaciones</td>
                    <td>NOM-001-SCFI-1993</td>
                    <td>NOM-001-SCFI-1993</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td class="resaltado">Respaldo del fabricante</td>
                    <td>Con un mínimo de 5 años en partes, refacciones y accesorios.</td>
                    <td>Con un mínimo de 5 años en partes, refacciones y accesorios.</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td class="resaltado">Instalación y puesta en marcha</td>
                    <td>Se deberán contemplar todo el material eléctrico y de soporte para la instalación y puesta en marcha de los No break.</td>
                    <td>Se deberán contemplar todo el material eléctrico y de soporte para la instalación y puesta en marcha de los No break.</td>
                    </tr>
                    <tr>
                    <th scope="row">16</th>
                    <td class="resaltado">Garantía</td>
                    <td>Mínimo de 1 año en todas las partes que integran al equipo, al momento de la entrega, la cual deberá realizarse en el área requirente en el lugar donde se encuentre instalado el No Break (UPS).</td>
                    <td>Mínimo de 1 año en todas las partes que integran al equipo, al momento de la entrega, la cual deberá realizarse en el área requirente en el lugar donde se encuentre instalado el No Break (UPS).</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-18">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Switch Tipo 1, 2 y 3</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab18" data-bs-toggle="tab" data-bs-target="#home-tab18-pane" type="button" role="tab" aria-controls="home-tab18-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab18" data-bs-toggle="tab" data-bs-target="#profile-tab18-pane" type="button" role="tab" aria-controls="profile-tab18-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab18" data-bs-toggle="tab" data-bs-target="#garantia-tab18-pane" type="button" role="tab" aria-controls="garantia-tab18-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab18" data-bs-toggle="tab" data-bs-target="#consideraciones-tab18-pane" type="button" role="tab" aria-controls="consideraciones-tab18-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab18-pane" role="tabpanel" aria-labelledby="home-tab18" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Redes Informáticas<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab18-pane" role="tabpanel" aria-labelledby="profile-tab18" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:1800 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab18-pane" role="tabpanel" aria-labelledby="garantia-tab18" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab18-pane" role="tabpanel" aria-labelledby="consideraciones-tab18" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Componente</th>
                    <th scope="col">Requerimiento</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th colspan="3">SWITCH TIPO 1</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <th scope="row" class="resaltado">PUERTOS</th>
                    <td>-8, 16, 24 o 48 puertos (a requerimiento del Ente) -10/100/1000 Mbps Base-T -802.3 af y 802.3 at (opcional) -Interfaz Gigabit Ethernet.</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <th scope="row" class="resaltado">MONTAJE EN RACK</th>
                    <td>Con soportes para su montaje en Rack (opcional), Chasis metálico, en el caso de que el equipo sea de menor de 19 pulgadas, el proveedor y de ser requerido por el Ente, deberá entregar equipamiento con soportes para montaje en rack.</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <th scope="row" class="resaltado">UPLINKS</th>
                    <td>	Mínimo de 1 a 4 puertos Gigabit Ethernet RJ-45 para UPLINK</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <th scope="row" class="resaltado">GABINETE</th>
                    <td>Chasis metálico, en el caso de que el equipo sea de menor de 19 pulgadas, el proveedor y de ser requerido por el Ente, deberá entregar equipamiento con soportes para montaje en rack.</td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <th scope="row" class="resaltado">INDICADORES</th>
                    <td>Con indicadores lumínicos y textual.</td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <th scope="row" class="resaltado">BACKPLANE (ANCHO DE BANDA)</th>
                    <td>Con un minimo de 1.6 Gbps</td>
                    </tr>
                    <tr>
                    <td>7</td>
                    <th scope="row" class="resaltado">CONMUTACIÓN</th>
                    <td>Con un minimo de 3.6 Gbps</td>
                    </tr>
                    <tr>
                    <td>8</td>
                    <th scope="row" class="resaltado">TABLA DE DIRECCIONES MAC</th>
                    <td>Con un minimo de 1k</td>
                    </tr>
                    <tr>
                    <td>9</td>
                    <th scope="row" class="resaltado">MEDIOS SOPORTADOS</th>
                    <td>	Pueden ser los siguientes medios de acuerdo al requerimiento del Ente: - 10Base-T Cat3, 4, 5 UTP/STP RJ45 - 100Base-TX Cat5 UTP/STP RJ45  o superior - 1000Base-T Cat5e UTP/STP RJ45 - 10Base-T UTP/STP RJ45 - 100Base-TX UTP/STP RJ45 - 1000Base-T UTP/STP RJ45</td>
                    </tr>
                    <tr>
                    <td>10</td>
                    <th scope="row" class="resaltado">SERVICIOS</th>
                    <td>	Servicios en caso de que el Ente lo requiera: -Al menos 128 VLAN activas (rango 4096) -MAC Address Notification -Dynamic ARP Inspection (DAI) -DHCP Spoof Protection -RADIUS y/o TACS+ Authentication -Extended ACLs -DHCP Dynamic Host Configuration Protocol -RMON Remote Monitoring -SNMP v1/v2/v3 simple Network Management Protocol -Switch administrable por CLI, WEB.</td>
                    </tr>
                    <tr>
                    <td>11</td>
                    <th scope="row" class="resaltado">SEGURIDAD</th>
                    <td>Características en caso de que el Ente lo requiera: ARP Spoof Protection MAC based Port Authentication Password Protection (encryption) WEB based Port Authentication Secure Shell (SSHv2) Secured Socket Layer (SSL)</td>
                    </tr>
                    <tr>
                    <td>12</td>
                    <th scope="row" class="resaltado">CARACTERÍSTICAS ADICIONALES</th>
                    <td>VLAN (opcional) 802.1X (opcional) SSH v2 (opcional) IEEE 802.3ad (opcional) 127 V, 60 Hz (opcional) Rutas IPV4 ≥ 16,000 (opcional) Rutas IPV6 ≥ 8,000 (opcional) 1+1 respaldo de alimentación (opcional)</td>
                    </tr>
                    <tr>
                    <td>13</td>
                    <th scope="row" class="resaltado">GARANTÍA</th>
                    <td>	mínimo 1 año en todas sus partes</td>
                    </tr>
                    <tr>
                    <td>14</td>
                    <th scope="row" class="resaltado">CONTENIDO DE LA CAJA</th>
                    <td>Switch, cable para corriente eléctrica, fuente AC/DC, software del equipo y manuales</td>
                    </tr>
                    <tr>
                    <th colspan="3">SWITCH TIPO 2</th>
                    </tr>
                    <tr>
                    <td>No</td>
                    <th scope="row" class="resaltado">COMPONENTE</th>
                    <td>REQUERIMIENTO</td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <th scope="row" class="resaltado">PUERTOS</th>
                    <td>-8, 16, 24 o 48 puertos (a requerimiento del Ente) -10/100/1000 Mbps Base-T -802.3 af y 802.3 at (opcional) -Interfaz Gigabit Ethernet.</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <th scope="row" class="resaltado">MONTAJE EN RACK</th>
                    <td>Con soportes para su montaje en Rack (opcional), Chasis metálico, en el caso de que el equipo sea de menor de 19 pulgadas, el proveedor y de ser requerido por el Ente, deberá entregar equipamiento con soportes para montaje en rack.</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <th scope="row" class="resaltado">UPLINKS</th>
                    <td>	Mínimo de 1 a 4 puertos Gigabit Ethernet RJ-45 para UPLINK</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <th scope="row" class="resaltado">GABINETE</th>
                    <td>Chasis metálico, en el caso de que el equipo sea de menor de 19 pulgadas, el proveedor y de ser requerido por el Ente, deberá entregar equipamiento con soportes para montaje en rack.</td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <th scope="row" class="resaltado">INDICADORES</th>
                    <td>Con indicadores lumínicos y textual.</td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <th scope="row" class="resaltado">BACKPLANE (ANCHO DE BANDA)</th>
                    <td>Con un minimo de 1.6 Gbps</td>
                    </tr>
                    <tr>
                    <td>7</td>
                    <th scope="row" class="resaltado">CONMUTACIÓN</th>
                    <td>Con un minimo de 3.6 Gbps</td>
                    </tr>
                    <tr>
                    <td>8</td>
                    <th scope="row" class="resaltado">TABLA DE DIRECCIONES MAC</th>
                    <td>Con un minimo de 1k</td>
                    </tr>
                    <tr>
                    <td>9</td>
                    <th scope="row" class="resaltado">MEDIOS SOPORTADOS</th>
                    <td>	Pueden ser los siguientes medios de acuerdo al requerimiento del Ente: - 10Base-T Cat3, 4, 5 UTP/STP RJ45 - 100Base-TX Cat5 UTP/STP RJ45  o superior - 1000Base-T Cat5e UTP/STP RJ45 - 10Base-T UTP/STP RJ45 - 100Base-TX UTP/STP RJ45 - 1000Base-T UTP/STP RJ45</td>
                    </tr>
                    <tr>
                    <td>10</td>
                    <th scope="row" class="resaltado">SERVICIOS</th>
                    <td>	Servicios en caso de que el Ente lo requiera: -Al menos 128 VLAN activas (rango 4096) -MAC Address Notification -Dynamic ARP Inspection (DAI) -DHCP Spoof Protection -RADIUS y/o TACS+ Authentication -Extended ACLs -DHCP Dynamic Host Configuration Protocol -RMON Remote Monitoring -SNMP v1/v2/v3 simple Network Management Protocol -Switch administrable por CLI, WEB.</td>
                    </tr>
                    <tr>
                    <td>11</td>
                    <th scope="row" class="resaltado">SEGURIDAD</th>
                    <td>Características en caso de que el Ente lo requiera: ARP Spoof Protection MAC based Port Authentication Password Protection (encryption) WEB based Port Authentication Secure Shell (SSHv2) Secured Socket Layer (SSL)</td>
                    </tr>
                    <tr>
                    <td>12</td>
                    <th scope="row" class="resaltado">CARACTERÍSTICAS ADICIONALES</th>
                    <td>VLAN (opcional) 802.1X (opcional) SSH v2 (opcional) IEEE 802.3ad (opcional) 127 V, 60 Hz (opcional) Rutas IPV4 ≥ 16,000 (opcional) Rutas IPV6 ≥ 8,000 (opcional) 1+1 respaldo de alimentación (opcional)</td>
                    </tr>
                    <tr>
                    <td>13</td>
                    <th scope="row" class="resaltado">GARANTÍA</th>
                    <td>	mínimo 1 año en todas sus partes</td>
                    </tr>
                    <tr>
                    <td>14</td>
                    <th scope="row" class="resaltado">CONTENIDO DE LA CAJA</th>
                    <td>Switch, cable para corriente eléctrica, fuente AC/DC, software del equipo y manuales</td>
                    </tr>
                    <tr>
                    <th colspan="3">SWITCH TIPO 3</th>
                    </tr>
                    <tr>
                    <td>No</td>
                    <th scope="row" class="resaltado">COMPONENTE</th>
                    <td>REQUERIMIENTO</td>
                    </tr>
                    <tr>
                    <td>1</td>
                    <th scope="row" class="resaltado">PUERTOS</th>
                    <td>-8, 16, 24 o 48 puertos (a requerimiento del Ente) -10/100/1000 Mbps Base-T -802.3 af y 802.3 at (opcional) -Interfaz Gigabit Ethernet.</td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <th scope="row" class="resaltado">MONTAJE EN RACK</th>
                    <td>Con soportes para su montaje en Rack (opcional), Chasis metálico, en el caso de que el equipo sea de menor de 19 pulgadas, el proveedor y de ser requerido por el Ente, deberá entregar equipamiento con soportes para montaje en rack.</td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <th scope="row" class="resaltado">UPLINKS</th>
                    <td>	Mínimo de 1 a 4 puertos Gigabit Ethernet RJ-45 para UPLINK</td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <th scope="row" class="resaltado">GABINETE</th>
                    <td>Chasis metálico, en el caso de que el equipo sea de menor de 19 pulgadas, el proveedor y de ser requerido por el Ente, deberá entregar equipamiento con soportes para montaje en rack.</td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <th scope="row" class="resaltado">INDICADORES</th>
                    <td>Con indicadores lumínicos y textual.</td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <th scope="row" class="resaltado">BACKPLANE (ANCHO DE BANDA)</th>
                    <td>Con un minimo de 1.6 Gbps</td>
                    </tr>
                    <tr>
                    <td>7</td>
                    <th scope="row" class="resaltado">CONMUTACIÓN</th>
                    <td>Con un minimo de 3.6 Gbps</td>
                    </tr>
                    <tr>
                    <td>8</td>
                    <th scope="row" class="resaltado">TABLA DE DIRECCIONES MAC</th>
                    <td>Con un minimo de 1k</td>
                    </tr>
                    <tr>
                    <td>9</td>
                    <th scope="row" class="resaltado">MEDIOS SOPORTADOS</th>
                    <td>	Pueden ser los siguientes medios de acuerdo al requerimiento del Ente: - 10Base-T Cat3, 4, 5 UTP/STP RJ45 - 100Base-TX Cat5 UTP/STP RJ45  o superior - 1000Base-T Cat5e UTP/STP RJ45 - 10Base-T UTP/STP RJ45 - 100Base-TX UTP/STP RJ45 - 1000Base-T UTP/STP RJ45</td>
                    </tr>
                    <tr>
                    <td>10</td>
                    <th scope="row" class="resaltado">SERVICIOS</th>
                    <td>	Servicios en caso de que el Ente lo requiera: -Al menos 128 VLAN activas (rango 4096) -MAC Address Notification -Dynamic ARP Inspection (DAI) -DHCP Spoof Protection -RADIUS y/o TACS+ Authentication -Extended ACLs -DHCP Dynamic Host Configuration Protocol -RMON Remote Monitoring -SNMP v1/v2/v3 simple Network Management Protocol -Switch administrable por CLI, WEB.</td>
                    </tr>
                    <tr>
                    <td>11</td>
                    <th scope="row" class="resaltado">SEGURIDAD</th>
                    <td>Características en caso de que el Ente lo requiera: ARP Spoof Protection MAC based Port Authentication Password Protection (encryption) WEB based Port Authentication Secure Shell (SSHv2) Secured Socket Layer (SSL)</td>
                    </tr>
                    <tr>
                    <td>12</td>
                    <th scope="row" class="resaltado">CARACTERÍSTICAS ADICIONALES</th>
                    <td>VLAN (opcional) 802.1X (opcional) SSH v2 (opcional) IEEE 802.3ad (opcional) 127 V, 60 Hz (opcional) Rutas IPV4 ≥ 16,000 (opcional) Rutas IPV6 ≥ 8,000 (opcional) 1+1 respaldo de alimentación (opcional)</td>
                    </tr>
                    <tr>
                    <td>13</td>
                    <th scope="row" class="resaltado">GARANTÍA</th>
                    <td>	mínimo 1 año en todas sus partes</td>
                    </tr>
                    <tr>
                    <td>14</td>
                    <th scope="row" class="resaltado">CONTENIDO DE LA CAJA</th>
                    <td>Switch, cable para corriente eléctrica, fuente AC/DC, software del equipo y manuales</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-19">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Access Point Tipo 1 y 2</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab19" data-bs-toggle="tab" data-bs-target="#home-tab19-pane" type="button" role="tab" aria-controls="home-tab19-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab19" data-bs-toggle="tab" data-bs-target="#profile-tab19-pane" type="button" role="tab" aria-controls="profile-tab19-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab19" data-bs-toggle="tab" data-bs-target="#garantia-tab19-pane" type="button" role="tab" aria-controls="garantia-tab19-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab19" data-bs-toggle="tab" data-bs-target="#consideraciones-tab19-pane" type="button" role="tab" aria-controls="consideraciones-tab19-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab19-pane" role="tabpanel" aria-labelledby="home-tab19" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Redes Informáticas<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab19-pane" role="tabpanel" aria-labelledby="profile-tab19" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:1900 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab19-pane" role="tabpanel" aria-labelledby="garantia-tab19" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab19-pane" role="tabpanel" aria-labelledby="consideraciones-tab19" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">Acces Point - Tipo 1</th>
                    <td>Cantidad de puertos LAN: 2 o más Frecuencia: 5Ghz y 2.4Ghz Taza de transferencia: mínimo 300 Mbps Taza de transferencia: 867Mbit/s Velocidad de transferencia: 10/100/1000 Mbit/s Ganancia de antena: Máximo 3dBi Seguridad: WPA-PSK, WPA-TKIP, WPA2 AES, 802.11i y Dynamic PSK, WPIS/WIDS. Estándares IEEE 802.11 a/b/g/n/ac Wave 2 -Interfaces Ethernet 1x100/1000/2.5G/5G BASE-T (opcional) -Habilitación para acceso a la red (móviles y fijos) (opcional) -802.3 at y 802.3bt (opcional) -BLE que permita integración de tecnologías IoT (opcional) -Beacon (opcional) -Escáneo de dispositivos BLE (opcional) -Uso de analíticos de presencia (opcional) -Open API (opcional) -Licenciamiento (opcional) -MIMO 2.4 GHz 2x2 (opcional) -MIMO 5GHz 2x2 (opcional) -Autenticación 802.1x (opcional) -Soporte de ancho de banda de 8.3 Gbps (opcional)</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Acces Point - Tipo 2</th>
                    <td>Cantidad de puertos LAN: 2 o más Ganancia de la antena: Máximo 8dBi Frecuencia: Dual Band 2.4/5 GHz Tasa de transferencia: 1733 Mbit/s Velocidad de transferencia: 10/100/1000 Mbit/s Seguridad: AEIS, TKIP, WEP, WPA, WPA-Enterprise, WPA-PSK, WPA2. Estándares de red: IEEE 802.11a, IEEE 802.11ac, IEEE 802.b, IEE 802.11g, IEEE 802.11n, IEEE 802.1Q -Interfaces Ethernet 1x100/1000/2.5G/5G BASE-T (opcional)  -Habilitación para acceso a la red (móviles y fijos) (opcional) -802.3 at y 802.3bt (opcional) -BLE que permita integración de tecnologías IoT (opcional) -Beacon (opcional) -Escáneo de dispositivos BLE (opcional) -Uso de analíticos de presencia (opcional) -Open API (opcional) -Licenciamiento (opcional) -MIMO 2.4 GHz 4x4 (opcional) -MIMO 5GHz 4x4 (opcional) -Autenticación 802.1x (opcional) -Soporte de ancho de banda de 8.3 Gbps (opcional)</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Acces Point para Exteriores</th>
                    <td>"IEEE 802.11 a/b/g/n/ac IEEE 802.11 ax (opcional)" -Dual Band 2.4/2.5 GHz -Interfaces Ethernet 1x100/1000/2.5G BASE-T -Habilitación para acceso a la red (móviles y fijos) -802.3 at y 802.3bt -BLE -Beacon -Escáneo de dispositivos BLE -Open API -IP67 -Licenciamiento -MIMO 2.4 GHz 4x4 -MIMO 5GHz 4x4 -802.1x -1 Interfaz GE basado en cobre -1 Interfaz GE SFP+ -Ancho de Banda 3.5 Gbps</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-20">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Antena de Enlace Tipo 1</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab20" data-bs-toggle="tab" data-bs-target="#home-tab20-pane" type="button" role="tab" aria-controls="home-tab20-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab20" data-bs-toggle="tab" data-bs-target="#profile-tab20-pane" type="button" role="tab" aria-controls="profile-tab20-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab20" data-bs-toggle="tab" data-bs-target="#garantia-tab20-pane" type="button" role="tab" aria-controls="garantia-tab20-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab20" data-bs-toggle="tab" data-bs-target="#consideraciones-tab20-pane" type="button" role="tab" aria-controls="consideraciones-tab20-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab20-pane" role="tabpanel" aria-labelledby="home-tab20" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Redes Informáticas<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab20-pane" role="tabpanel" aria-labelledby="profile-tab20" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab20-pane" role="tabpanel" aria-labelledby="garantia-tab20" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab20-pane" role="tabpanel" aria-labelledby="consideraciones-tab20" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">Antena de Enlace Tipo 1</th>
                    <td>Velocidad de transferencia: de 100 Mbps en adelante Frecuencia: 5 Hhz en adelante Ganancia de la antena: Antena de 23 dBi en adelante Puerto: 1 puerto de datos de 10/100 Mbps cómo mínimo Equipo de polaridad simple Seguridad: WPA2 AES</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-21">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Firewall Tipo 1(Fisico)</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab21" data-bs-toggle="tab" data-bs-target="#home-tab21-pane" type="button" role="tab" aria-controls="home-tab21-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab21" data-bs-toggle="tab" data-bs-target="#profile-tab21-pane" type="button" role="tab" aria-controls="profile-tab21-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab21" data-bs-toggle="tab" data-bs-target="#garantia-tab21-pane" type="button" role="tab" aria-controls="garantia-tab21-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab21" data-bs-toggle="tab" data-bs-target="#consideraciones-tab21-pane" type="button" role="tab" aria-controls="consideraciones-tab21-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab21-pane" role="tabpanel" aria-labelledby="home-tab21" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Redes Informáticas<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab21-pane" role="tabpanel" aria-labelledby="profile-tab21" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab21-pane" role="tabpanel" aria-labelledby="garantia-tab21" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab21-pane" role="tabpanel" aria-labelledby="consideraciones-tab21" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">Firewall - Tipo 1 (Físico)</th>
                    <td>
                        <ul>
                        <li>Rendimiento de throughput de al menos 2 Gbps</li>
                        <li>Al menos 3 Gbps de desempeño con las funcionalidades de inspección habilitadas simultáneamente de IPS, Antivirus, Antispyware, URL Filtering y detección de malware día cero</li>
                        <li>Configuración e interoperabilidad con VPN con IPsec de al menos 2 Gbps, Nuevas sesiones por segundo 80,000. Interfaces</li>
                        <li> Al menos 12 x 10/100/1000 en Cobre RJ45 y 8 SFP.</li>
                        <li>Puerto de consola rj45 (10/100/1000)</li>
                        <li>puerto USB</li>
                        <li> Capacidad de realizar HA</li>
                        <li>Alimentación: Deberá de contar con al menos 2 fuentes de alimentación (100–240VAC 50–60Hz)</li>
                        <li>Al menos una Unidad de disco: ssd de 200 GB </li>
                        <li>Objetos: Al menos objetos direcciones: 300</li>
                        <li>Al menos grupo de direcciones: 300</li>
                        <li>Miembros por grupo de direcciones</li>
                        <li>Funcionalidades: Identificación y control de aplicaciones (Firewall Capa 7) independientemente del puerto o técnica evasiva que ocupen dichas aplicaciones</li>
                        <li> Identificación de usuarios, independientemente de la dirección IP que tengan, a través de la integración de diferentes métodos de autenticación, como Microsoft Active Directory</li>
                        <li>Análisis de tráfico, capaz de Identificar archivos y/o datos sensibles basados en expresiones regulares, Identificación de amenazas conocidas, con motores de inspección simultanea</li>
                        <li>Anti-spyware, como Botnets, troyanos, adware, etc</li>
                        <li>Análisis de peticiones DNS a sitios sospechosos e integración de DNS Sinkhole propio o de terceros</li>
                        <li>Antivirus de red</li>
                        <li>Vulnerabilidades en aplicaciones, protocolos y servicios</li>
                        <li>Filtrado de navegación Web, basado en categoría y reputación del sitio URL visitado, con capacidad de interceptar peticiones y alertar a los usuarios, bloquear acceso y/o solicitar contraseña de acceso. </li>
                        <li>Detección y prevención de amenazas de día cero y de propósito específico (APT) </li>
                        <li>Capacidad de análisis online vía SandBox</li>
                        <li>Diagnóstico inmediato y creación de firmas de mitigación en 5 minutos o menos</li>
                        <li>Inteligencia compartida a nivel mundial con un motor de inteligencia automatizado en la nube </li>
                        <li>Reportes completos de severidad por comportamiento malicioso y comportamiento de malware  </li>
                        <li>Control de ancho de banda (QoS) mediante colas de tráfico por prioridad con base en aplicaciones, direcciones IP, usuarios y horarios</li>
                        <li>Políticas de protección de recursos contra comportamiento de negación de tráfico (DoS).</li>
                        <li>Almacenamiento de bitácoras (Logs) en disco duro dedicado, con capacidad de exportación por diversos métodos</li>
                        <li>Generación de alertas y almacenamiento de bitácoras de cambios en la configuración</li>
                        <li>Generación de usuarios basados en roles y permisos (RBAC) de administración. </li>
                        <li>Generación de reportes en la misma consola Web</li>
                        <li>Panel de análisis en tiempo real para identificar, tráfico, amenazas, acciones de mitigación, exportables en formato PDF</li>
                        <li>Reportes generados automáticamente en los que se incluye el resumen de actividad por día </li>
                        <li>Panel de reportes programados incluidos usuarios con mayor actividad, amenazas presentes, detalles de filtrado URL, por mencionar algunos. Todos los reportes pueden ser generados en el momento de solicitarlos o bien ser calendarizados y enviados por correo a diversas listas de distribución en diversos formatos.</li>
                        <li> Interfaces multi propósito; modo monitoreo, transparente, Capa 2, Capa 3, modo agregación</li>
                        <li>Interfaces lógicas; túnel, Loopback</li>
                        <li>Escalabilidad a sistemas virtuales (segmentación lógica del firewall) disponible con licenciamiento adicional</li>
                        <li>Capacidad de generar comunicaciones seguras basadas en IPSec para VPN Site-to-Site o bien para usuarios móviles b basadas en SSL basadas en software y/o clientes para usuarios móviles</li>
                        <li> SEGURIDAD: SSL basadas en software y/o clientes para usuarios móviles</li>
                        <li>ARP Spoof Protection</li>
                        <li>DHCP Spoof Protection </li>
                        <li>Password Protection (encryption)</li>
                        <li>WEB based Port Authentication </li>
                        <li>INCLUYA LICENCIAMIENTO QUE CUBRA LAS SIGUIENTES FUNCIONALIDADES:</li>
                        </ul>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-22">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Firewall y Router Para Servicios Unificados</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab22" data-bs-toggle="tab" data-bs-target="#home-tab22-pane" type="button" role="tab" aria-controls="home-tab22-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab22" data-bs-toggle="tab" data-bs-target="#profile-tab22-pane" type="button" role="tab" aria-controls="profile-tab22-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab22" data-bs-toggle="tab" data-bs-target="#garantia-tab22-pane" type="button" role="tab" aria-controls="garantia-tab22-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab22" data-bs-toggle="tab" data-bs-target="#consideraciones-tab22-pane" type="button" role="tab" aria-controls="consideraciones-tab22-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab22-pane" role="tabpanel" aria-labelledby="home-tab22" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Redes Informáticas<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab22-pane" role="tabpanel" aria-labelledby="profile-tab22" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab22-pane" role="tabpanel" aria-labelledby="garantia-tab22" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab22-pane" role="tabpanel" aria-labelledby="consideraciones-tab22" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">Router</th>
                    <td>Banda: 5, 2.4 Ghz Transferencia: Wlan 240 Mbits Ethernet Lan Fast Ethernet Cantidad de antenas: 2 Ganancia de antena: 5 dBi Puertos RJ-45: 4 </td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Router para Servidores Unificados</th>
                    <td>Point-to-Point Tunneling Protocol : PPTP de hasta 25 conexiones Puertos: Wan Gigabit Ethernet duales Servidor DHCP IPSec IKEv1 e IKEv2 Compatibilidad: con modem 3G/4G Firewall Funciones UTM VPN De 16 puertos LAN en adelante De 2 puertos WAN en adelante 1 puerto de consola 2 puertos USB en adelante</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-23">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Telefonos IP</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab23" data-bs-toggle="tab" data-bs-target="#home-tab23-pane" type="button" role="tab" aria-controls="home-tab23-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab23" data-bs-toggle="tab" data-bs-target="#profile-tab23-pane" type="button" role="tab" aria-controls="profile-tab23-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab23" data-bs-toggle="tab" data-bs-target="#garantia-tab23-pane" type="button" role="tab" aria-controls="garantia-tab23-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab23" data-bs-toggle="tab" data-bs-target="#consideraciones-tab23-pane" type="button" role="tab" aria-controls="consideraciones-tab23-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab23-pane" role="tabpanel" aria-labelledby="home-tab23" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Redes Informáticas<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab23-pane" role="tabpanel" aria-labelledby="profile-tab23" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab23-pane" role="tabpanel" aria-labelledby="garantia-tab23" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab23-pane" role="tabpanel" aria-labelledby="consideraciones-tab23" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">Teléfono IP</th>
                    <td>	Altavoz Enchufe de entrada de CC Llamada en espera Capacidad de transferencia de llamada Llamada en conferencia. Guía de configuración rápida. Capacidad de registro de al menos 200 direcciones. Capacidad de lista de al menos 100 llamadas. Pantalla LCD. Manual de usuario. Intercomunicador. Protocolos de gestión: RFC3261, TCP/IP/UDP, RTP/RTCP, HTTP/HTTPS, ARP/RARP, ICMP, DNS, DHCP, PPPoE, SSH, TFTṔ, NTP, STUN, SIMPLE, LLDPMED, LDAP, TR-069, 802.1x, TLS, SRTP Idioma de interfaz en español o inglés Interfaz -Gigabit Ethernet (opcional) -Puerto de entrada y puerto para conectar a la red un equipo de cómputo (opcional) -Identificador de llamada (opcional) -Directorio telefónico para almacenar contactos de forma interna (opcional) -Software de gestión para altas bajas y cambios de servicios de voz (opcional)</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-24">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Radios y Walkie Talkie</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab24" data-bs-toggle="tab" data-bs-target="#home-tab24-pane" type="button" role="tab" aria-controls="home-tab24-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab24" data-bs-toggle="tab" data-bs-target="#profile-tab24-pane" type="button" role="tab" aria-controls="profile-tab24-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab24" data-bs-toggle="tab" data-bs-target="#garantia-tab24-pane" type="button" role="tab" aria-controls="garantia-tab24-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab24" data-bs-toggle="tab" data-bs-target="#consideraciones-tab24-pane" type="button" role="tab" aria-controls="consideraciones-tab24-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab24-pane" role="tabpanel" aria-labelledby="home-tab24" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2023.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Redes Informáticas<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab24-pane" role="tabpanel" aria-labelledby="profile-tab24" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab24-pane" role="tabpanel" aria-labelledby="garantia-tab24" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab24-pane" role="tabpanel" aria-labelledby="consideraciones-tab24" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">Radios Walkie Tarkie</th>
                    <td>Alimentación: 3.7 Vcc Rango de frecuencia: UHF 400-470MHz Canales: 16 o más Espacio de canales: 12.5 kHz Transmisor: UHF Modulo de modulación: FM</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-25">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Estándares Técnicos de Accesorios</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab25" data-bs-toggle="tab" data-bs-target="#home-tab25-pane" type="button" role="tab" aria-controls="home-tab25-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab25" data-bs-toggle="tab" data-bs-target="#profile-tab25-pane" type="button" role="tab" aria-controls="profile-tab25-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab25" data-bs-toggle="tab" data-bs-target="#garantia-tab25-pane" type="button" role="tab" aria-controls="garantia-tab25-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab25" data-bs-toggle="tab" data-bs-target="#consideraciones-tab25-pane" type="button" role="tab" aria-controls="consideraciones-tab25-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab25-pane" role="tabpanel" aria-labelledby="home-tab25" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2022.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de accesorios<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab25-pane" role="tabpanel" aria-labelledby="profile-tab25" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab25-pane" role="tabpanel" aria-labelledby="garantia-tab25" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab25-pane" role="tabpanel" aria-labelledby="consideraciones-tab25" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="col">CABLES</th>
                    <th scope="col"></th>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Patch Panel</th>
                    <td>	Puertos: 12, 24, 48 y 96 puertos Categoría 5E, 6 y 6A Opcional: Modular o no Modular</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Patch cords</th>
                    <td>Tipo LC UPC, UTP, STP, Coaxial, Fibra Óptica Categoría 1, 2, 3, 4, 5, 6, 7</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">High Definition Multimedia Interface (HDMI)</th>
                    <td>Tipo A, C y D Versiones 1.1, 1.2, 1.3, 1.4, 2.0 y 2.1Nota: Incluye cables, conectores, adaptadores, convertidores.</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Universal Serial Bus (USB)</th>
                    <td>Universal Serial Bus (USB)</td>
                    </tr>
                    <tr>
                    <th colspan="2">KITS DE MANTENIMIENTO PARA IMPRESORA</th>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">kit 1</th>
                    <td>Kit de mantenimiento que incluye: Unidad de Cilindro, Unidad de Revelado, Unidad Fusora. Rendimiento Estimado 300.000 Páginas.</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 2</th>
                    <td>Kit de rodillos de arrastre de papel, y gomas alimentadoras para escáner.</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 3</th>
                    <td>Mica transparente autoadherible de aplicación manual, para mayor protección de datos personales y protección adicional a la credencial, identificación o tarjeta de plástica.</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 4</th>
                    <td>Tarjeta larga que limpia el cabezal y rodillos de transporte Tarjeta corta que limpia el módulo de alimentación de tarjetas Tarjeta larga que limpia el cabezal y rodillos de transporte Tarjeta corta que limpia el módulo de alimentación de tarjetas</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 5</th>
                    <td>Kit de mantenimiento para impresora ( pueden ser, FUSOR, RODILLO DE TRANFERENCIA, GOMAS PICK ROLLER, CABEZAL)</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 6</th>
                    <td>Tambor para 10,000 Páginas</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 7</th>
                    <td>Kit de mantenimiento para impresora fusor 110 voltios</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 8</th>
                    <td>Kit de unidad de imagen para impresora</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 9</th>
                    <td>Kit de mantenimiento y fusor para impresora</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 10</th>
                    <td>Kit de imagen negro y color para impresora</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 11</th>
                    <td>Kit de mantenimiento módulo de transferencia para impresora</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 12</th>
                    <td>Kit de Rodillo de Calor y Rodillo de Presión</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 13</th>
                    <td>Kit de Imagen de revelado.</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 14</th>
                    <td>Kit de limpieza: -Tarjeta larga para limpieza del cabezal y rodillos de transporte -Tarjeta corta para limpia el módulo de alimentación de tarjetas</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Kit 14</th>
                    <td>Cinta Ribbon para 100 impresiones en adelante</td>
                    </tr>
                    <tr>
                    <th colspan="2" scope="row">KITS DE HERRAMIENTAS INFORMATICOS</th>
                    </tr>
                    <tr>
                    <td class="resaltado">Multímetro profesional</td>
                    <td>Multímetro profesional: Digital que permite medir con gran precisión, sin la necesidad de escoger escalas, para medir resistencia, voltaje de corriente alterna o directa, intensidad de corriente, capacitancia. Resistencia: 400 Ohms a 40 MOhms Voltaje cc: 400 mV a 1000 V Voltaje ca: 400 mV a 750 V Capacitancia: 4 nF a 200 uF Frecuencia: 9,9 Hz a 200 KHz Corriente cc: 0 a 10 Amperes Corriente ca: 0 a 20 Amperes Pantalla de 3 3/4 dígitos LCD Temperatura de operación: 0-40°C (80% de humedad relativa, < 10°C no condensada) Voltaje máximo entre terminales y tierra: 750V CA rms o 1000V CD Selección de rango: automático y manual Indicador de sobre rango Indicador de polaridad</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Estación de soldadura</td>
                    <td>Estación de soldadura, control de temperatura inteligente de 6 segundos de calentamiento rápido, certificado de seguridad, kit de soldadura con soporte de soldadura, esponja resistente al calor.</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Pistola de calor</td>
                    <td>Boquilla Esférica, Control De Temperatura Variable, Dos Niveles De Flujo De Aire, Potencia: 1800 W Y Diseño Manos Libre, Interruptor de 2 posiciones,</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Pasta termina</td>
                    <td>Para CPU Grasa de Gel, de sílice plata, Enfriadores de pasta de compuesto térmico de alto rendimiento</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Espuma limpiadora</td>
                    <td>Espuma limpiadora de uso exclusivamente externo para gabinetes de equipos de cómputo y todo tipo de superficies plásticas, con una eficaz acción emulsificante que desintegra grasas, cochambre y suciedad, sin afectar la estructura molecular de los equipos.</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Limpiador de circuitos</td>
                    <td>Limpiador Dieléctrico interno de circuitos y tarjetas electrónicas que desintegra grasa, cochambre, polvo y otro residuos, evaporándose y dejando una capa protectora, repelente al polvo</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Aire Comprimido</td>
                    <td>Volumen mínimo: 660 ml</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Desarmadores</td>
                    <td>Juego de desarmadores de precisión, cabeza giratoria, forjadas en acero al Cr-V y mango de aluminio</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Generador de tonos</td>
                    <td>Tono y rastreo de cable en redes no activas; la tecnología SmartTone proporciona cinco tonos distintos para la identificación exacta de pares. Batería: 9 voltios alcalina, envía un tono fuerte de hasta 16 kilómetros (10 millas) en la mayoría de los cables y proporciona cinco cadencias distintas para aislar pares de cables individuales, El altavoz ruidoso en la sonda hace que el tono sea más fácil de escuchar a través de paneles de yeso, madera y otros recintos, Los clips angulados de lecho de clavos permiten un fácil acceso a pares individuales y el RJ 11 se conecta fácilmente a las tomas telefónicas sin necesidad de adaptadores.</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Pinza peladora y cortadora</td>
                    <td>PELADORA Y CORTADORA DE CABLE UTP, CAXIAL</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Pinza para plug</td>
                    <td>PINZAS PARA PLUGS RJ11, RJ12 Y RJ45</td>
                    </tr>
                    <tr>
                    <td class="resaltado">Cautín con estáción</td>
                    <td>Control automático de temperatura rango: 350 ° F a 850 ° F (177 ° C a 454 ° C). Soporte de Cautin. Lápiz para soldar con punta, Unidad de potencia de 85W, Voltaje de entrada 120V. Opcional: incluir Esponja para limpieza y sonda, alambre de estaño.</td>
                    </tr>
                    <tr>
                    <td class="resaltado">ACOPLADOR - MÓDULO CONECTOR (JACK)</td>
                    <td>Categoría: 1, 2, 3, 4, 5, 6, 7 Tipo: LC UPC, UTP, STP, Coaxial, Fibra Óptica SC, RJ45</td>
                    </tr>
                    <tr>
                    <td class="resaltado">CONECTORES PLUG</td>
                    <td>Categoría: 1, 2, 3, 4, 5, 6, 7 Tipo: LC UPC, UTP, STP, Coaxial, Fibra Óptica SC, RJ45</td>
                    </tr>
                    <tr>
                    <td class="resaltado">FACE PLATE</td>
                    <td>Categoría: 1, 2, 3, 4, 5, 6, 7 Tipo: LC UPC, UTP, STP, Coaxial, Fibra Óptica SC, RJ45</td>
                    </tr>
                    <tr>
                    <td class="resaltado">JACK</td>
                    <td>Categoría: 1, 2, 3, 4, 5, 6, 7 Tipo: LC UPC, UTP, STP, Coaxial, Fibra Óptica SC, RJ45</td>
                    </tr>
                    <tr>
                    <td class="resaltado">ORGANIZADOR HORIZONTAL-VERTICAL DE CABLES, METALICOS PARA RAK/GABINETE</td>
                    <td>Tamaño: 10 pulgadas o más Tipo: Panel de gestión de cables tipo C UPC, UTP, STP, Coaxial, Fibra Óptica. Color: cualquier color</td>
                    </tr>
                    <tr>
                    <td class="resaltado">MULTICONTACTO PARA RACK</td>
                    <td>Cable de conexión: Máximo 5 metros Conexiones de entrada: NEMA 5-15P Conexiones de salida: Máximo 14 x NEMA 5-15R Entrada máxima de corriente: 15 A </td>
                    </tr>
                    <tr>
                    <td class="resaltado">PROVADOR DE CABLES</td>
                    <td>Conectores: BNC,RJ-11,RJ-12,RJ-45 Longitud de medición:Máximo 700 metros Pantalla: LCD retroiluminado. Batería: 9V **Equipos más sofisticados deben ser dictaminados</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div py-3 mt-4" style="width: 100%;" id="div-26">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Estándares Técnicos de Periféricos</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab26" data-bs-toggle="tab" data-bs-target="#home-tab26-pane" type="button" role="tab" aria-controls="home-tab26-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab26" data-bs-toggle="tab" data-bs-target="#profile-tab26-pane" type="button" role="tab" aria-controls="profile-tab26-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab26" data-bs-toggle="tab" data-bs-target="#garantia-tab26-pane" type="button" role="tab" aria-controls="garantia-tab26-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab26" data-bs-toggle="tab" data-bs-target="#consideraciones-tab26-pane" type="button" role="tab" aria-controls="consideraciones-tab26-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab26-pane" role="tabpanel" aria-labelledby="home-tab26" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2022.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Periféricos<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab26-pane" role="tabpanel" aria-labelledby="profile-tab26" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab26-pane" role="tabpanel" aria-labelledby="garantia-tab26" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab26-pane" role="tabpanel" aria-labelledby="consideraciones-tab26" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">MEMORIA USB</th>
                    <td>Capacidad: 32 A 128 GBConexión: USB 2.0 en adelanteVelocidad de lectura: 40 MB/s  o superiorVelocidad de escritura: 10 MB/s o superior</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">DISCO DURO EXTERNO MECÁNICO HDD</th>
                    <td>Capacidad: 1TB  a Máximo 10TBConexión:  USB 2.0 o 3.0Velocidad de lectura: 400 MB/s  o superiorVelocidad de escritura: 400 MB/s o superiorVelocidad de transferencia: 400 MB/s o superior</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">DISCO DURO EXTERNO ESTADO SÓLIDO (SSD)</th>
                    <td>Capacidad: Máximo 2TB,Conexión: USB 3.0, 3.1o 3.2Velocidad de lectura: 400 MB/s  o superiorVelocidad de escritura: 400 MB/s o superiorVelocidad de transferencia: 400 MB/s o superior</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">MOUSE ALAMBRICO E INALAMBRICO</th>
                    <td>Mouse óptico Alámbrico:Interfaz: Cable USBResolución de movimiento: 1000dpi Botones: 3 Mouse óptico Inalámbrico: Interfaz: Receptor RF (Radio Frecuencia) Inalámbrica USB.Resolución de movimiento: 1000dpi Botones: 3</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">TECLADO ALAMBRICO E INALAMBRICO</th>
                    <td>Teclado Alámbrico:Distribución: Español LatinoamericanoInterfaz: Cable USBBotones: Con teclas , alfanuméricos, numéricos, funciones, control y navegación.Teclado Inalámbrico:Interfaz: Receptor RF (Radio Frecuencia) Inalámbrica USB.Distribución: Español LatinoamericanoBotones: Con teclas , alfanuméricos, numéricos, funciones, control y navegación</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">KIT TECLADO CON MOUSE ALAMBRICO E INALAMABRICO</th>
                    <td>KIT ALAMBRICO Mouse óptico:Interfaz: Cable USBResolución de movimiento: 1000dpiBotones: 3Teclado :Distribución: Español LatinoamericanoInterfaz: Cable USBBotones: Con teclas , alfanuméricos, numéricos, funciones, control y navegación.KIT INALAMBRICO Mouse óptico : Interfaz: Receptor RF (Radio Frecuencia) Inalámbrica USB.Resolución de movimiento: 1000dpi Botones: 3Teclado Inalámbrico:Interfaz: Receptor RF (Radio Frecuencia) Inalámbrica USB.Distribución: Español Latinoamericano Botones: Con teclas , alfanuméricos, numéricos, funciones, control y navegación</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">MONITOR</th>
                    <td>Tamaño:  27" PULGADAS máximo,  Puertos: mínimo uno de los siguientes, VGA, HDMI o DisplayPort, USB.  Resolución Máxima*: Full HD 1920 x 1080, *Mayores resoluciones deben ser dictaminados.</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">CÁMARA WEB</th>
                    <td>-Resolucion mínima 1920 x 1080 Pixeles  <br/> -Compatible con SO Windows 11, 10, 8.1. <br/>  -Compatible con USB 2.0 y superior. <br/>  -Enfoque automatico opcional. <br/>  -Microfono de banda ancha con cancelación de ruido.</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-27">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Estándares Técnicos de Consumibles</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab27" data-bs-toggle="tab" data-bs-target="#home-tab27-pane" type="button" role="tab" aria-controls="home-tab27-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab27" data-bs-toggle="tab" data-bs-target="#profile-tab27-pane" type="button" role="tab" aria-controls="profile-tab27-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab27" data-bs-toggle="tab" data-bs-target="#garantia-tab27-pane" type="button" role="tab" aria-controls="garantia-tab27-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab27" data-bs-toggle="tab" data-bs-target="#consideraciones-tab27-pane" type="button" role="tab" aria-controls="consideraciones-tab27-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab27-pane" role="tabpanel" aria-labelledby="home-tab27" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2022.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Consumibles<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab27-pane" role="tabpanel" aria-labelledby="profile-tab27" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab27-pane" role="tabpanel" aria-labelledby="garantia-tab27" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab27-pane" role="tabpanel" aria-labelledby="consideraciones-tab27" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">Toner</th>
                    <td>Colores: K = negro (key plate) C = Cian (azul) M = Magenta (rojo) Y = Amarillo Tecnología láser Rendimiento de 10000 páginas o más</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Fusor</th>
                    <td>Rendimiento de 200,000 páginas en adelante</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Cabezal</th>
                    <td>Colores: K = negro (key plates) C = Cian (azul) M = Magenta (rojo) Y = Amarillo</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Cartucho</th>
                    <td>Colores: K = negro (key plates) C = Cian (azul) M = Magenta (rojo) Y = Amarillo Rendimiento de 200 páginas en adelante Tecnología inyección de tinta</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Tinta</th>
                    <td>Colores: K = negro (key plate) C = Cian (azul) M = Magenta (rojo) Y = Amarillo</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">DISCOS</th>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Disco CD-R</th>
                    <td>Capacidad mínima: 700 Mb por disco Piezas mínimas por paquete: 50</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Disco CD-R</th>
                    <td>Capacidad mínima 4.7 Gb por disco Mínimo 50 piezas por paquete</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">Disco Blu-Ray</th>
                    <td>Capacidad mínima de 25 GB Mínimo 50 piezas por paquete</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-28">
            <div class="px-5 py-3" style="width: 100%; max-width: 1500px;">
                <h1 class="subtitulo" style="font-size: 2rem;">Estándares Técnicos de Componentes</h1>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda active" id="home-tab28" data-bs-toggle="tab" data-bs-target="#home-tab28-pane" type="button" role="tab" aria-controls="home-tab28-pane" aria-selected="true">Caracteristicas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="profile-tab28" data-bs-toggle="tab" data-bs-target="#profile-tab28-pane" type="button" role="tab" aria-controls="profile-tab28-pane" aria-selected="false">Normas y Estandares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="garantia-tab28" data-bs-toggle="tab" data-bs-target="#garantia-tab28-pane" type="button" role="tab" aria-controls="garantia-tab28-pane" aria-selected="false">Garantia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link letra-guinda" id="consideraciones-tab28" data-bs-toggle="tab" data-bs-target="#consideraciones-tab28-pane" type="button" role="tab" aria-controls="consideraciones-tab28-pane" aria-selected="false">Consideraciones para la Adquisición</button>
                </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active m-3" id="home-tab28-pane" role="tabpanel" aria-labelledby="home-tab28" tabindex="0">
                    <strong>Válido a partir del 14 de Agosto de 2022.</strong><br>
                    <strong>Estatus:</strong> Vigente<br>
                    <strong>Categoría:</strong> Estándares técnicos de Componentes<br>
                    <ol>
                    <li style="list-style: auto;">Excepto donde se indique, todos los requerimientos son mínimos.</li>
                    <li style="list-style: auto;">Característica técnicas iguales o  mayores a  las aquí listadas, son válidas.</li>
                    <li style="list-style: auto;">Los equipos deben pertenecer a la línea de negocios del fabricante.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="profile-tab28-pane" role="tabpanel" aria-labelledby="profile-tab28" tabindex="0">
                    Que el equipo cumpla con el estándar de Calidad ISO 9001:2000 ó NMX equiparable.
                </div>
                <div class="tab-pane fade m-3" id="garantia-tab28-pane" role="tabpanel" aria-labelledby="garantia-tab28" tabindex="0">
                    <strong>Uno a tres años de garantía en repuestos y mano de obra en sitio para todos los elementos descritos.<br/>
                    Características que deberá cubrir:</strong>
                    <ol>
                    <li style="list-style: auto;">El proveedor se compromete a dar cumplimiento a la garantía.</li>
                    <li style="list-style: auto;">El servicio se prestará en las instalaciones del ente requirente.</li>
                    <li style="list-style: auto;">El tiempo de atención será, como máximo, dos horas.</li>
                    <li style="list-style: auto;">El tiempo de reparación será día siguiente laboral Si excede este lapso, el proveedor deberá entregar un equipo de respaldo equivalente mientras se soluciona el problema.</li>
                    <li style="list-style: auto;">Sí la reparación excede de 30 días naturales, el proveedor entregará a cambio un equipo nuevo con las características iguales al   adquirido u otro equipo de mayores características.</li>
                    </ol>
                    <strong>Requerimientos de servicio:</strong>
                    <ol>
                    <li style="list-style: auto;">El procedimiento de recepción de reportes y atención de fallas de los equipos.</li>
                    <li style="list-style: auto;">Se debe de indicar una línea telefónica del fabricante o centro de   atención telefónica certificado o aprobado por el fabricante sin costo   de llamada para el usuario, como uno de los canales para hacer efectiva la garantía.</li>
                    <li style="list-style: auto;">Se debe de especificar un correo electrónico de atención, como uno de los canales para hacer efectiva la garantía.</li>
                    </ol>
                </div>
                <div class="tab-pane fade m-3" id="consideraciones-tab28-pane" role="tabpanel" aria-labelledby="consideraciones-tab28" tabindex="0">
                    Es estricta responsabilidad del Ente Requirente, como parte funcional durante el procedimiento de adquisición de estos componentes tecnológicos, el considerar todas las cartas respectivas que den soporte  al proceso y aseguren el respaldo de los fabricantes de los mismos, en  cuanto a especificaciones técnicas, vicios ocultos y condiciones de  garantía. La ADBC no tiene responsabilidad alguna por  alguna deficiencia administrativa en este sentido.
                </div>
                </div>
            </div>
            <div style="width: 100%; max-width: 1500px;" class="px-5 py-3">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Estándar</th>
                    <th scope="col">Características técnicas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row" class="resaltado">DISCOS DUROS INTERNOS MECÁNICO HDD</th>
                    <td>Capacidad: 500 GB a 4 TB  Interfaces: Conexión Sata 1,2, 3  Velocidad de lectura: 400 MB/s  o superior  Velocidad de escritura: 400 MB/s o superior  Velocidad de transferencia: 400 MB/s o superior Velocidad de rotación: 7200 RPM</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">DISCO DURO INTERNO  ESTADO SÓLIDO (SSD)</th>
                    <td>Capacidad: Máximo 2TBInterfaces: SATA (Serial Advanced Technology Attachment), M2, PCI Express.Velocidad de lectura: 400 MB/s  o superiorVelocidad de escritura: 400 MB/s o superiorVelocidad de transferencia: 400 MB/s o superior</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">CARGADORES Y TABLETA MULTICONTACTO</th>
                    <td>Es importante asegurarse de que los cargadores cumplan con las normativas y estándares internacionales, como los establecidos por la Comisión Electrotécnica Internacional</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">MEMORIA RAM</th>
                    <td>Capacidad: 8 a 16 GB como maximo  Velocidad: 2.133  MHz en adelante  Modulo: de 240 pines en adelante  FORMATOS: DIMM, SODIMM, DDR, DDR3, DDR4, DDR5</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">MEMOIA USB</th>
                    <td>	USB 2.0, USB 3.0, USB 3.1 Gen 1, USB 3.1 Gen 2 , USB 4.</td>
                    </tr>
                    <tr>
                    <th scope="row" class="resaltado">TECLADOS Y MOUSE</th>
                    <td>	Ver Estándares técnicos de periféricos</td>
                    </tr>
                
                </tbody>
                </table>
            </div>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-29">
                <h3 class="subtitulo" style="font-size: 2rem;">Requisitos de adecuaciones de infraestructura</h3>
                <p>Estos son algunos de los requisitos mínimos que podrías considerar para garantizar una infraestructura adecuada para la instalación de servicios de datos, voz y telefonía en un local.</p>
                <div>
                <p><strong>Dimenciones Adecuadas</strong></p>
                <p>1. Las ducterías deben tener dimensiones apropiadas para alojar los cables de red y telecomunicaciones de manera ordenada y sin obstrucciones. Se deben tener en cuenta tanto el tamaño como la cantidad de cables que se instalarán.<br/>
                    2. Para cables de datos y voz, se recomienda una ductería con un diámetro interno de al menos 1.25 pulgadas (31.75 mm) para permitir una fácil instalación y manipulación de los cables.<br/>
                    3. Para cables de fibra óptica, se debe utilizar una ductería con un diámetro interno de al menos 2 pulgadas (50.8 mm) para evitar curvaturas excesivas que puedan dañar la fibra.</p>
                </div>
                <div>
                <p><strong>Material de Calidad</strong></p>
                <p>1. Asegúrate de que las ducterías estén fabricadas con materiales resistentes y duraderos que cumplan con las especificaciones necesarias para el entorno en el que se instalarán.<br>
                    2. Se recomienda certificación Panduit, no especifica materiales específicos para la ductería en términos de marcas o fabricantes particulares, pero ofrece pautas generales sobre los tipos de materiales que son adecuados para su uso en diferentes entornos, ya sea en interiores o exteriores o utilizar o cualquier otra normativa aplicable.</p>
                    <p>
                    <strong>Interior</strong><br>
                    1. Para instalaciones en interiores, los materiales más comunes y recomendados son el PVC (Policloruro de Vinilo) y el PVC-U (Policloruro de Vinilo no Plastificado). Estos materiales son duraderos, resistentes a la corrosión, fáciles de trabajar y ofrecen una buena protección para los cables en entornos controlados. Además del PVC, también se pueden utilizar materiales como el acero galvanizado para ductería metálica, especialmente en entornos donde se requiere una mayor resistencia mecánica o donde existe el riesgo de daños físicos.<br>
                    <strong>Exterior</strong><br>
                    1. Para instalaciones en exteriores, es importante utilizar materiales que sean resistentes a la intemperie, la humedad, los rayos UV y otros elementos ambientales. El PVC y el PVC-U pueden ser adecuados en algunos casos, especialmente si están diseñados para uso en exteriores y cuentan con protección adicional contra la radiación UV.<br>
                    2. Otros materiales comunes para la ductería en exteriores incluyen el PVC corrugado, que ofrece una mayor flexibilidad y resistencia a la tracción, así como el acero inoxidable, que es altamente resistente a la corrosión.
                    </p>
                </div>
                <div>
                <p><strong>Rutas Claras y Directivas</strong></p>
                <p>1. Las ducterías deben proporcionar rutas claras y directas para el tendido de cables, evitando giros bruscos o curvas cerradas que puedan dañar los cables o dificultar el acceso para futuras modificaciones o mantenimiento.<br>
                    2. Se recomienda que los ángulos en las curvas no excedan los 90 grados. Ángulos mayores pueden causar estrés excesivo en los cables y reducir su vida útil.<br>
                    3. Se recomienda seguir las directrices proporcionadas por el fabricante de los cables y los componentes de la infraestructura. Esto garantiza que se cumplan las especificaciones técnicas y se mantenga la garantía del producto.<br>
                    4. Se recomienda seguir las normativas locales o estándares de la industria que establezcan requisitos específicos para la instalación de ducterías y cables. Es importante consultar estas normativas y asegurarse de cumplirlas en todo momento.</p>
                </div>
                <div>
                <p><strong>Separación Adecuada</strong></p>
                <p>1. Si se van a alojar cables de diferentes tipos (datos, voz, telefonía, etc.), es importante asegurarse de que haya una separación adecuada entre ellos para evitar interferencias y garantizar un rendimiento óptimo.<br>
                    2. Se recomienda una separación mínima de 2 pulgadas (50.8 mm) entre los cables de datos y voz, y una separación mínima de 4 pulgadas (101.6 mm) entre los cables de datos/voz y los cables de energía eléctrica para reducir el riesgo de interferencias.</p>
                </div>
                <div>
                <p><strong>Etiquetado y Documentación</strong></p>
                <p>1. Cada ductería debe estar etiquetada de manera clara y precisa para identificar los cables que contiene y su destino. Además, se debe mantener una documentación detallada que registre la ubicación y la ruta de cada ductería.<br>
                    2. Cada ductería debe estar etiquetada de manera clara y precisa para identificar los cables que contiene, su origen y su destino.<br>
                    3. Se debe mantener una documentación detallada que registre la ubicación, la ruta y la capacidad de cada ductería, así como cualquier otra información relevante para su gestión y mantenimiento.<br>
                    4. Las ducterías deben ser accesibles para facilitar la instalación inicial de los cables y el acceso posterior para tareas de mantenimiento, inspección o reparación.</p>
                </div>
                <div>
                <p><strong>Cumplimiento de Normativas</strong></p>
                <p>1. Asegúrate de que las ducterías cumplan con las normativas y regulaciones locales relacionadas con la seguridad, el cableado y la infraestructura de telecomunicaciones.</p>
                </div>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-30">
                <h3 class="subtitulo" style="font-size: 2rem;">Requisitos de Adecuaciones del site</h3>
                <p>Los requisitos mínimos para un “site", refiriéndose a un lugar físico donde se instalará equipamiento de redes y telecomunicaciones. Pueden variar dependiendo de varios factores, incluyendo el tamaño del sitio, el tipo de servicios que se van a proporcionar, las necesidades de los usuarios y las regulaciones algunos requisitos mínimos que podrían aplicar:</p>
                <div>
                <p><strong>Conexión a la red eléctrica confiable:</strong></p>
                <p>1. El sitio debe contar con una conexión eléctrica estable y confiable para alimentar el equipamiento de redes y telecomunicaciones, así como cualquier otro equipo necesario.<br/>
                    2. Considerar la instalación de sistemas de protección contra sobretensiones para proteger el equipamiento de daños causados por picos de voltaje.</p>
                </div>
                <div>
                <p><strong>Conexión a la red de telecomunicaciones:</strong></p>
                <p>1. Se necesita contar con una conexión a la red de telecomunicaciones que permita la comunicación externa, ya sea mediante líneas terrestres, fibra óptica u otros medios. Es importante garantizar que se cumplan los estándares de seguridad y calidad de la señal para asegurar un rendimiento óptimo de los servicios de datos, voz y video.</p>
                </div>
                <div>
                <p><strong>Espacio físico adecuado:</strong></p>
                <p>1. Proporcionar un espacio físico adecuado y suficiente para alojar todos los equipos de red y telecomunicaciones, incluyendo racks, servidores, switches, routers y otros dispositivos considerando la disponibilidad de espacio adicional para futuras expansiones o actualizaciones de la infraestructura.</p>
                </div>
                <div>
                <p><strong>Seguridad física:</strong></p>
                <p>1. Se deben implementar medidas de seguridad física, como cerraduras en las puertas, sistemas de vigilancia por video, control de acceso y sistemas de alarma, para proteger el sitio y el equipamiento contra el acceso no autorizado y el robo.</p>
                </div>
                <div>
                <p><strong>Climatización adecuada:</strong></p>
                <p>1. Es importante considerar la utilización de sistemas de ventilación, aire acondicionado o refrigeración líquida según las necesidades y el tamaño del sitio y prevenir el sobrecalentamiento del equipamiento</p>
                </div>
                <div>
                <p><strong>Sistema de respaldo de energía:</strong></p>
                <p>Se recomienda tener un sistema de respaldo de energía, como UPS (Sistema de Alimentación Ininterrumpida) o generadores, para garantizar la continuidad del servicio en caso de cortes de energía.</p>
                </div>
                <div>
                <p><strong>Conectividad de red interna:</strong></p>
                <p>1. Se debe proporcionar una infraestructura de red interna que permita la conectividad entre todos los dispositivos y equipos instalados utilizando cableado estructurado de alta calidad y certificado para garantizar un rendimiento óptimo de la red y minimizar la interferencia electromagnética.</p>
                </div>
                <div>
                <p><strong>Climatización adecuada:</strong></p>
                <p>1. Es importante contar con un sistema de monitoreo y gestión remota que permita supervisar y controlar el equipamiento de forma remota.</p>
                </div>
                <div>
                <p><strong>Sistema de respaldo de energía:</strong></p>
                <p>1. Se deben cumplir con todas las normativas y estándares relevantes en el campo de las telecomunicaciones y la infraestructura de redes, tanto a nivel nacional como local según las necesidades de la operación.</p>
                </div>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-31">
                <h3 class="subtitulo" style="font-size: 2rem;">Entregables para validación</h3>
                <p>Esta documentación debe estar disponible en formato digital para su revisión y referencia mostrando adecuadamente el proceso de instalación y verifiquen el cumplimiento de los estándares y especificaciones pertinentes</p>
                <div>
                <p><strong>Planos de Diseño y layout</strong></p>
                <p>1. Planos deben proporcionar información clara y precisa que muestren la disposición de la ductería desde la acera hasta el sitio, incluyendo la ubicación de las cámaras de acceso, los registros, las curvas, los cambios de dirección, así como cualquier otro detalle importante para la instalación y la accesibilidad.</p>
                </div>
                <div>
                <p><strong>Documentación fotográfica</strong></p>
                <p>1. Las fotografías deben mostrar claramente la calidad de la instalación, la correcta disposición de la ductería, los ángulos de curvatura, las conexiones y cualquier otro aspecto relevante.</p>
                </div>
                <div>
                <p><strong>Informes de Inspección</strong></p>
                <p>1. Informes detallados de inspección que documenten la evaluación de la ductería en términos de dimensiones, materiales, rutas, separación adecuada, etiquetado, accesibilidad y cumplimiento de normativas.<br/>
                    2. Los informes deben incluir observaciones, recomendaciones y cualquier acción correctiva necesaria para garantizar el cumplimiento de los estándares y especificaciones.</p>
                </div>
                <div>
                <p><strong>Certificados de cumplimiento y garantía</strong></p>
                <p>1. Certificados emitidos por el contratista o el instalador que certifiquen que la ductería ha sido instalada de acuerdo con los estándares y especificaciones pertinentes.<br/>
                    2. Los certificados deben incluir información sobre el cumplimiento de normativas, la calidad de los materiales utilizados y cualquier garantía ofrecida por el contratista.</p>
                </div>
                <div>
                <p><strong>Documentación técnica de los materiales</strong></p>
                <p>1. Especificaciones técnicas de los materiales utilizados en la instalación de la ductería, incluyendo información sobre el tipo de material, las dimensiones, la resistencia mecánica, la resistencia a la corrosión y cualquier otro detalle relevante.</p>
                </div>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-32">
                <h3 class="subtitulo" style="font-size: 2rem;">Requerimientos para desarrollo web</h3>
                <p>
                1. PHP 7 o superior<br/>
                2. MySQL 5.6 o MariaDB 10 o superior a través del controlador MySQLi.<br/>
                3. PostgreSQL a través del controlador Postgre<br/>
                4. SQLite3 a través del controlador SQLite3<br/>
                5. MSSQL a través del controlador SQLSRV<br/>
                6. CodeIgniter v4 o Superior<br/>
                </p>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-33">
                <h3 class="subtitulo" style="font-size: 2rem;">Características y Funcionalidades</h3>
                <p>
                <strong>Estructura MVC (Modelo-Vista-Controlador):</strong> Permite separar la lógica de negocio, la presentación y la interacción con la base de datos en componentes independientes. Esta separación facilita el mantenimiento y la reutilización del código.<br/>
                <strong>Motor de enrutamiento:</strong> Permite definir rutas de URL para acceder a diferentes controladores y métodos de manera eficiente.<br/>
                <strong>Biblioteca de controladores y helpers:</strong> Son esenciales, ya que simplifican tareas comunes como la manipulación de formularios, la validación de datos, el manejo de sesiones, el envío de correos electrónicos y la gestión de archivos.<br/>
                <strong>Interacción con bases de datos:</strong> Capa de abstracción que admite múltiples sistemas de gestión de bases de datos, incluyendo MySQL, PostgreSQL, SQLite y Oracle. Esto facilita la ejecución de consultas y transacciones de manera segura y con una sintaxis sencilla.<br/>
                <strong>Seguridad:</strong> Reforzar con medidas contra amenazas comunes, como ataques XSS (Cross-Site Scripting) y CSRF (Cross-Site Request Forgery), además de incluir funciones para la validación de formularios y la filtración de datos.<br/>
                <strong>Flexibilidad:</strong> Llevar una organización del código y los recursos es crucial, ya que no se impone una estructura de directorios rígida. Esto permite a los desarrolladores organizar sus proyectos de la manera que consideren más conveniente.<br/>
                </p>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-34">
                <h3 class="subtitulo" style="font-size: 2rem;">Requerimientos para desarrollo movil</h3>
                <p>El propósito fundamental de estos estándares es ofrecer a los desarrolladores una herramienta poderosa y fácil de usar que potencie la eficiencia en el desarrollo de aplicaciones móviles con Flutter. Desde la autenticación segura hasta la integración con servicios externos, el estándar aspira a ser un compañero confiable para crear aplicaciones innovadoras y de alto rendimiento.</p>
                <p>
                1. Sistema operativo: macOS, versión 10.14 (Mojave) o posterior. <br>
                2. Espacio en disco: 2.8 GB (no incluye espacio en disco para el IDE/herramientas).<br/>
                3. Herramientas: Flutter utiliza git para la instalación y actualización. Recomendamos instalar Xcode, que incluye git, pero también puedes instalar git por separado.<br/>
                4. IDE Android Studio<br/>
                5. Flutter SDK<br/>
                <strong>Importante:</strong> Si estás instalando en una Mac con Apple Silicon, debes tener disponible el entorno de traducción Rosetta para algunas herramientas auxiliares.
                </p>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-35">
            <h3 class="subtitulo" style="font-size: 2rem;">Características en el desarrollo de aplicaciones móviles</h3>
            <p>
                <strong>Autenticación de Usuarios: </strong> garantizar la seguridad y controlar el acceso a las funcionalidades de las aplicaciones.<br/>
                <strong>Admob:</strong> Permitirá la monetización de la aplicación mediante la incorporación de anuncios publicitarios.<br/>
                <strong>Dashboards:</strong> Desarrollar dashboards intuitivos para proporcionar a los usuarios una visión general de estadísticas y datos relevantes.<br/>
                <strong>SQLite:</strong> Sistema de gestión de bases de datos local para el almacenamiento de datos de forma eficiente.<br/>
                <strong>RestAPI service:</strong> Para la comunicación con servidores externos y el intercambio de datos.<br/>
                <strong>Firebase:</strong> Plataforma integral para la autenticación, almacenamiento de datos en tiempo real (Firestore), y almacenamiento de archivos (Firebase Storage).
            </p>
            </div>
            <div class="justify-content-center content-div px-5 py-3 mt-4" style="width: 100%;" id="div-36">
            <div>
                <h3 class="subtitulo" style="font-size: 2rem;">Arquitectura</h3>
                <p>1. Flutter es un kit de herramientas de interfaz de usuario multiplataforma diseñado para permitir la reutilización de código en sistemas operativos como iOS y Android, al mismo tiempo que permite que las aplicaciones se comuniquen directamente con los servicios subyacentes de la plataforma. El objetivo es permitir a los desarrolladores ofrecer aplicaciones de alto rendimiento que se sientan naturales en diferentes plataformas, adoptando las diferencias donde existan, al tiempo que comparten la mayor cantidad de código posible.</p>
                <p>2. Durante el desarrollo, las aplicaciones de Flutter se ejecutan en una máquina virtual que ofrece una recarga rápida y en caliente de los cambios sin necesidad de una recompilación completa. Para la versión final, las aplicaciones de Flutter se compilan directamente a código de máquina, ya sea instrucciones Intel x64 o ARM, o JavaScript si el objetivo es la web. El marco es de código abierto, con una licencia BSD permisiva, y cuenta con un próspero ecosistema de paquetes de terceros que complementan la funcionalidad básica de la biblioteca.</p>
                <p>3. Flutter está diseñado como un sistema extensible y en capas. Existe como una serie de bibliotecas independientes que dependen cada una de la capa subyacente. Ninguna capa tiene acceso privilegiado a la capa inferior, y cada parte del nivel del marco está diseñada para ser opcional y reemplazable.</p>
            </div>
            </div>

                <!-- PREGUNTAS FRECUENTES -->
            <div class="justify-content-center content-div px-5 py-3 mt-4"  id="div-37">
            <div class="">
                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                        <div class="faq-contenedor">
                            <section class="faq-section">
                                <div class="pc">
                                    <div class="row">
                                        <div class="">
                                            <div class="faq-title text-center">
                                                <h2>Preguntas Frecuentes</h2>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="faq" id="accordion">
                                                <div class="card">
                                                    <div class="card-header" >
                                                        <div class="mb-0">
                                                            <h5  class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-1" aria-expanded="true" aria-controls="faqCollapse-1">
                                                                <span class="badge">1</span> ¿Qué es la dictaminación?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>La dictaminación es el procedimiento mediante el cual la Agencia Digital autoriza o deniega la asignación de recursos públicos destinados a un proyecto específico que involucra directamente Tecnologías de la Información y Comunicaciones.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" >
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-2" aria-expanded="true" aria-controls="faqCollapse-2">
                                                                <span class="badge">2</span> ¿Qué es la Revisión Técnica?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Análisis y resolución que realiza la agencia digital respecto de las solicitudes de autorización, dictamen técnico, aceptación de baja o visto bueno de los Entes Públicos para la adquisición, arrendamiento, contrataciones, baja, traspaso o transferencia, de bienes o de servicios en materia de TIC; Se gestiona para contratar la adquisición, arrendamiento de bienes o prestación de servicios en materia de TIC, así como para traspasar, donar, recibir donaciones, transferir y/o dar de baja bienes y/o servicios de TIC, los Entes Públicos deberán presentar sus proyectos ante la Agencia Digital para su revisión técnica, a través de los mecanismos siguientes: Autorización, Dictamen Técnico, Visto Bueno y Aceptación de Baja. (Artículo 8, L.G.T.E.B.C.)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-3">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-3" aria-expanded="true" aria-controls="faqCollapse-3">
                                                                <span class="badge">3</span> ¿Qué es una Autorización?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Determinación favorable que deberán obtener los Entes Públicos para la adquisición y arrendamiento de bienes de TIC que se ajusten a los Estándares Técnicos emitidos por la Agencia Digital. (Fracc. I, Artículo 9, L.G.T.E.B.C.) El plazo de atención es de 10 días.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-4">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-4" aria-expanded="false" aria-controls="faqCollapse-4">
                                                                <span class="badge">4</span> ¿Qué es un Dictamen Técnico?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Determinación favorable que deberán obtener los Entes Públicos para la contratación de la adquisición, arrendamiento de bienes o prestación de servicios en materia de TIC que no se encuentren previstos en los Estándares Técnicos. (Fracc. II, Artículo 9, L.G.T.E.B.C.) El plazo de atención es de 15 días.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-5">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-5" aria-expanded="false" aria-controls="faqCollapse-5">
                                                                <span class="badge">5</span> ¿Qué es un Visto Bueno?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Determinación favorable que deberán obtener los Entes Públicos para el traspaso, transferencia o donación de bienes y/o servicios en materia de TIC´s, (Fracc. III, Artículo 9, L.G.T.E.B.C.) El plazo de atención es de 20 días.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-6">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-6" aria-expanded="false" aria-controls="faqCollapse-6">
                                                                <span class="badge">6</span> ¿Qué es una Aceptación de Baja?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Determinación favorable que deberán obtener los Entes Públicos para realizar la baja y disposición final de bienes de TIC. (Fracc. IV, Artículo 9, L.G.T.E.B.C.) El plazo de atención es de 10 días.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-7">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-7" aria-expanded="false" aria-controls="faqCollapse-7">
                                                                <span class="badge">7</span> ¿Quiénes están obligados a solicitar dictamen técnico?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Aquellos individuos que ocupen la posición de coordinador o responsable de informática en una entidad perteneciente al poder ejecutivo del estado de Baja California, son los responsables de solicitar el dictamen técnico.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-8">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-8" aria-expanded="false" aria-controls="faqCollapse-8">
                                                                <span class="badge">8</span> ¿Quiénes están exentos de solicitar dictamen técnico?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Aquellos individuos que carezcan de la capacidad o conocimientos técnicos necesarios para cumplir con esta obligación.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-9">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-9" aria-expanded="false" aria-controls="faqCollapse-9">
                                                                <span class="badge">9</span> ¿Cuáles son los requisitos para solicitar un dictamen técnico?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Dependiendo del proceso que se pretenda llevar a cabo, se debe acceder al enlace correspondiente dentro de los trámites y descargar el formulario respectivo. Luego, es necesario completar dicho formulario con la información técnica requerida y satisfacer los requisitos indispensables según el trámite. Los pasos a seguir se encuentran detallados en los enlaces de los cuatro tipos de procesos disponibles: Solicitud de Autorización, Solicitud de Dictaminación, Solicitud de Visto Bueno y Solicitud de Aceptación de Baja, todos bajo la competencia de la Agencia Digital de Baja California.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-10">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-10" aria-expanded="false" aria-controls="faqCollapse-10">
                                                                <span class="badge">10</span> ¿En qué período se emite el dictamen?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>El período de emisión del dictamen varía según el tipo de proceso:<br/>

                                                                Solicitud de Autorización: 10 días hábiles.<br/>

                                                                Solicitud de Dictaminación: 15 días hábiles.<br/>

                                                                Solicitud de Visto Bueno: 20 días hábiles.<br/>

                                                                Solicitud de Aceptación de Baja: 10 días hábiles.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-11">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-11" aria-expanded="false" aria-controls="faqCollapse-11">
                                                                <span class="badge">11</span> ¿Dónde puedo encontrar los formularios para presentar mi solicitud de dictamen?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Los formularios se encuentran disponibles en la página web del trámite, en hipervínculos. También es posible acceder a ellos mediante los siguientes enlaces:
                                                            <br/>
                                                                Formato de Solicitud de Autorización<br/>
                                                                Formato de Solicitud de Dictamen Técnico<br/>
                                                                Formato de Solicitud de Visto Bueno<br/>
                                                                Formato de Solicitud de Aceptación de Baja
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-12">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-12" aria-expanded="false" aria-controls="faqCollapse-12">
                                                                <span class="badge">12</span> ¿Cuál es el marco normativo aplicable y los criterios para emitir un dictamen?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>Los criterios y regulaciones pertinentes se encuentran en los lineamientos de gobernanza tecnológica, disponibles en el siguiente enlace: Lineamientos de Gobernanza Tecnológica.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="faqHeading-13">
                                                        <div class="mb-0">
                                                            <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-13" aria-expanded="false" aria-controls="faqCollapse-13">
                                                                <span class="badge">13</span> ¿Qué ocurre si se emite un Dictamen NO favorable?
                                                            </h5>
                                                        </div>
                                                    </div>
                                                    <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-bs-parent="#accordion">
                                                        <div class="card-body">
                                                            <p>En todos los procesos, se enviará una notificación por correo electrónico a la dirección proporcionada por el solicitante al inicio del trámite de dictaminación. En esta comunicación se expondrán los motivos de la decisión desfavorable, y se proporcionarán las indicaciones necesarias para enmendar los aspectos necesarios a fin de obtener un dictamen favorable en el futuro.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Funcionalidad para cerrar otros submenús cuando se abre uno nuevo
        const collapseElements = document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]');
        collapseElements.forEach(item => {
            item.addEventListener('click', function() {
                const target = document.querySelector(item.getAttribute('data-bs-target'));
                const otherTargets = document.querySelectorAll('.submenu');
                otherTargets.forEach(submenu => {
                    if (submenu !== target) {
                        submenu.classList.remove('show');
                    }
                });

                // Alternar el ícono de chevron cuando se hace clic
                const chevronIcon = item.querySelector('i');
                if (target.classList.contains('show')) {
                    chevronIcon.classList.remove('fa-chevron-up');
                    chevronIcon.classList.add('fa-chevron-down');
                } else {
                    chevronIcon.classList.remove('fa-chevron-down');
                    chevronIcon.classList.add('fa-chevron-up');
                }
            });
            const target = document.querySelector(item.getAttribute('data-bs-target'));
            target.addEventListener('hidden.bs.collapse', function() {
                const chevronIcon = item.querySelector('i');
                chevronIcon.classList.remove('fa-chevron-up');
                chevronIcon.classList.add('fa-chevron-down');
            });
        });

        /* funcionamiento para las sub opciones del menu */

        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', function(event) {
                event.preventDefault(); 

                const tabNumber = this.getAttribute('data-tab');

                const allDivs = document.querySelectorAll('.content-div');
                allDivs.forEach(div => div.style.display = 'none');

                const activeDiv = document.getElementById('div-' + tabNumber);
                activeDiv.style.display = 'block';
                const info = document.getElementById('info');
                info.style.display = 'none';
            });
        });
    </script>

</body>
</html>
