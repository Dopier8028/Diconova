<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>Proyectos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../images/favicon.ico" type="../image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>
<body>
    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser.">
        </a>
    </div>

    <?php include 'preloader.php'; ?>

    <div class="page">
    <?php 
            $current_page = basename($_SERVER['PHP_SELF']); // Obtiene el nombre del archivo actual
            $active_proyectos = ($current_page == 'Proyectos.html') ? 'active' : 'active';
            $active_especialidades = ($current_page == 'Especialidades.html') ? 'active' : '';
        include 'header.php'; ?>

        <?php
        $projectTitle = "Complejos departamentales";  
        $projectLink = "../Proyectos.html";
        $projectName = "Proyectos";
        include 'breadcrumbs.php';  
        ?>

        <?php
        $galleryImages = [
            '../images/Proyectos/Proyectos arquitectonicos/complejos departamentales/img1.jpg',
            '../images/Proyectos/Proyectos arquitectonicos/complejos departamentales/img2.jpg',
            '../images/Proyectos/Proyectos arquitectonicos/complejos departamentales/img3.jpg',
            '../images/Proyectos/Proyectos arquitectonicos/complejos departamentales/img4.jpg',
            '../images/Proyectos/Proyectos arquitectonicos/complejos departamentales/img5.jpg',
            '../images/Proyectos/Proyectos arquitectonicos/complejos departamentales/img6.jpg'
        ];
        $projectTitle = "Complejos departamentales";  
        include 'content.php';  
        ?>

        <?php include 'footer.php'; ?>
    </div>

    <div class="snackbars" id="form-output-global"></div>
    <script src="../js/core.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
