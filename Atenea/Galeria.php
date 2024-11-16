<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENTRO EDUCATIVO CACIQUE YURBACO</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon"> <!-- Invocación del archivo de favicon -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }
        .gallery-item {
            margin: 10px;
            cursor: pointer;
            border: 2px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 150px; /* Ancho fijo para mantener proporciones */
            height: 150px; /* Altura fija para mantener proporciones */
            position: relative;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajusta la imagen para cubrir el área sin distorsión */
            border-radius: 8px;
        }
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
        }
        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
        <div class="header-container">
            <div class="logo-container">
                <a href="../index.html">
                    <img src="../img/logo.png" alt="Logotipo" class="logo"><!-- Invocación del archivo de logo -->
                </a>
            </div>
            <div class="header-text">
                <h1 class="colegio-nombre">CENTRO EDUCATIVO CACIQUE <br/>YURBACO</h1>
                <nav class="menu">
                <ul>
                <li><a href="../Index.html">Inicio</a></li>
                        <li>
                            <a href="#">Información Institucional</a>
                            <ul class="submenu">
                                <li><a href="Histórica.html">Revisión Histórica</a></li>
                                <li>
                                    <a href="#">Principios Corporativos</a>
                                    <ul class="submenu">
                                        <li><a href="misión-visión.html">Misión - Visión</a></li>
                                        <li><a href="Filosofía.html">Filosofía</a></li>
                                        <li><a href="Modelo.html">Modelo pedagógico</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Equipos de Trabajo</a></li>
                                <li><a href="JUNTA-DIRECTIVA.html">Junta Directiva</a></li>
                            </ul>
                        </li>
                        <li><a href="Mapa.php">Mapa</a></li>
                        <li><a href="Galeria.php">Galería </a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="gallery">
            <?php 
                $Cgaleria = scandir('Cgaleria');
                foreach ($Cgaleria as $imagen) {
                    if ($imagen !== "." && $imagen !== "..") { ?>
                        <div class="gallery-item" onclick="showImage('<?php echo $imagen; ?>')">
                            <img src="Cgaleria/<?php echo $imagen; ?>" alt="<?php echo $imagen; ?>" />
                        </div>
            <?php 
                    }
                } 
            ?>
        </div>

        <div class="lightbox" id="lightbox">
            <span class="close" onclick="closeLightbox()">&times;</span>
            <img id="lightboxImage" src="" alt="Imagen Grande" />
        </div>
    </main>

    <footer>
    <div class="contactos-footer">
            <h2>Contactos Institucionales</h2>
            <p>Dirección: Turbaco, Bolívar Barrio Bellavista diagonal 27 13 104</p>
            <p>Teléfonos: 3113066848-3114243209</p>
            <p>Email: centroeducativocaciqueyurbaco@gmail.com</p>
        </div>
        <p>&copy; 2024 CENTRO EDUCATIVO CACIQUE YURBACO. Todos los derechos reservados. Diseñado por <span class="diseñado-por">"Snake"</span>.</p>
    </footer>

    <script>
        function showImage(imageSrc) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImage = document.getElementById('lightboxImage');
            lightboxImage.src = 'Cgaleria/' + imageSrc;
            lightbox.style.display = 'flex';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
        }
    </script>
</body>
</html>




