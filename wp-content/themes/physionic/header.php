<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); echo ' | ';bloginfo('description'); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory'); ?>/css/estilos.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('stylesheet_directory'); ?>/js/procesos.js"></script>
</head>
<body>
    
<header>
    <div class="container-header">
        <div class="logo">
            <span><a href="#">Physionic</a></span>
        </div>
        <div class="menu">
            <nav>
                <?php wp_nav_menu( array('theme_location' => 'menu_ppl')); ?>
            </nav>
        </div>
        <a id="bar" onclick="mostrar();"><i class="fas fa-bars fa-2x"></i></a>
        <a href="#" class="accion">Get Quote Now<i class="fas fa-arrow-right"></i></a>
    </div>
</header>
<div class="menu-responsive" id="menu">   
    <nav>
        <?php wp_nav_menu( array('theme_location' => 'menu_ppl')); ?>
    </nav>
</div>

<script>
    $("#bar").click(function(){
        $("#menu").fadeToggle();
    });
</script>