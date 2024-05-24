<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>

<!doctype html>
<html lang="es" style="margin-top: 0px !important;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Creamos tu pagina web ya!">
    <meta name="google-site-verification" content="AkPos26Z72UvmXUGDM6iup8dfHJProkpl7be3BzUAN4" />
    <meta property="og:url" content="https://www.programmarce.ar/home">
    <meta property="og:image" content="<?php echo get_template_directory_uri().'/assets/img/programmarce-web.jpg'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Creamos tu pagina web ya! Diseñamos tu sitio a tu medida.">
    <meta property="og:description" content="Creamos y Diseñamos tu página web de manera rápida y segura, a la medida de tus necesidades. Somos de Argentina y apostamos al crecimiento digital. Precios y cotización increíbles. Contáctanos, no lo dudes.">
    <meta name=”keywords” content= “sitio, web, crear, diseño, desarrollo, logo, página, sitio, site, page, quiero”>
    <title>Programmarce: Creamos tu sitio Web ya!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script async src="https://www.google.com/recaptcha/api.js">
    <?php wp_head(); ?>
</head>
<body>
<!-- Header -->
<header class="main-header">
    <div class="main-header__container">
        <div class="main-header__logodefaul">
            <a href="<?php echo get_home_url(); ?>">
                <!--logo default-->
                <div class="logo">
                    <a href="<?php echo get_home_url(); //el logo redirecciona a la home ?>">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>">
                    </a>
                </div>
            </a>
        </div>
        <?php if (has_custom_logo()) : ?>
            <?php
            //@todo evaluar si mostrar el titulo de la pagina o el isologotipo
            /*logo customizado: IF existe, lo muestra*/
            ?>
            <div class="main-header__brand" style="display: none;">
                <a href="<?php echo get_home_url(); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                    <div class="logo">
                            <img src="<?php echo $logo[0] ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </div>
                </a>
            </div>
        <?php else: ?>
        <?php /*ELSE, muestra el nombre ingresado en apariencias*/ ?>
            <div class="main-header__title">
                <span><?php echo get_bloginfo('name') ?></span>
            </div>
        <?php endif; ?>
        <div class="main-header__menu">
            <label class="icon-menu" for="menu-check">
                <img src="<?php echo get_template_directory_uri().'/assets/img/menu.png'; ?>" style="width: 24px;float: right;"/>
            </label>
            <input type="checkbox" id="menu-check">
            <nav class="nav menu-principal items-menu">
                <!--<ul>
                    <li><a class="nav-link" aria-current="page" href="<?php /*echo get_template_directory_uri(); */?>/home">Home</a></li>
                    <li><a class="nav-link" href="<?php /*echo get_template_directory_uri(); */?>/productos/">Productos</a></li>
                    <li><a class="nav-link" href="<?php /*echo get_template_directory_uri(); */?>/contacto/">Contacto</a></li>
                </ul>-->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'container' => 'ul',
                        'fallback_cb'    => false
                    )
                );

                ?>
            </nav>
        </div>
    </div>
</header>
</body>
</html>