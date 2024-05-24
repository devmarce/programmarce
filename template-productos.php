<?php
/*template name: productos*/

mostrarRuta(0, __FILE__);
get_header();

$bool_standard = false;
$show_standard = "";
$bool_proweb = false;
$show_proweb = "";
$bool_premium = false;
$show_premium = "";
$bool_promo = false;
$show_promo = "";
$style_show = "";



if (!empty($_GET["pack"])) {
    $namePack = $_GET["pack"];
    if ($namePack=="standard"){
        $bool_standard = true;
        $show_standard = "show";
    }elseif ($namePack=="proweb"){
        $bool_proweb = true;
        $show_proweb = "show";
    }elseif ($namePack=="premium"){
        $bool_premium = true;
        $show_premium = "show";
    }elseif ($namePack=="promo"){
        $bool_promo = true;
        $show_promo = "show";
    }
}

?>
<div class="main_template">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banners/banner-coffe.png" class="card-img-top" alt="...">
</div>
<main>
    <div style="margin: 1px 1rem 1rem 1rem;">
        <div class="card">
            <div id="btn-packs" class="card-body">
                <h5 class="card-title">Conocé nuestros Paquetes:</h5>
                <div class="accordion" id="accordionPanelsStayOpenExample" style="margin-top: 1.5rem">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button style="<?php echo ($bool_standard ? 'background: linear-gradient(135deg, #8f0096 0%, #4d00c6 100%); color: white;' : ''); ?>" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="<?php echo $bool_standard; ?>" aria-controls="panelsStayOpen-collapseOne">
                                Pack Standar
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse <?php echo $show_standard; ?>" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="rocket-outline"></ion-icon> <strong>Tu sitio web ya !</strong><br>
                                        Con éste pack vas a tener <strong>tu sitio web de manera rápida y sencilla.</strong><br>
                                        Solo tenés que decirnos cuales son tus ideas, el nombre para tu página, qué contenido querés mostrar y cuál es la finalidad o que impactó buscas darle a tu proyecto.
                                        <br>Nosotros vamos a guiarte y darte una mano para el diseño y desarrollo. Verás que en pocos pasos tendrás tu web ya!
                                        <br>Éste pack tiene como objetivo darte <strong>de manera rápida y sencilla un sitio web a corto plazo.</strong>
                                        <br>
                                        <br>El <strong>Mantenimiento del sitio</strong> estará establecido en horas dedicadas a tu sitio, estas horas se pactaran con el asesor si contratas el abono mensual.
                                        <br>El Abono es opcional. <ion-icon name="trail-sign-outline"></ion-icon> Solo lo contratarías, si crees que lo necesitas para tu sitio. El asesor te explicará los beneficios de éste.
                                        <br>Más información en <a href="#abono-m">Contrato de Abono</a>.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="trail-sign-outline"></ion-icon> Te ofrecemos un dominio (nombre de tu sitio en la web) y te asesoramos cómo gestionarlo. ¡No te preocupes! Cuando nos contactemos, un asesor te explicará cómo proceder. ¡Es muy sencillo!. <ion-icon class="icon-fonsize" name="happy-outline"></ion-icon><br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nicar.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="globe-outline"></ion-icon> Nos encargamos de las configuraciones e instalaciones que requiere <strong>hosting donde alojaremos tu sitio</strong> para que se vea en la web. Optimizamos los servicios para que se adapte a tu sitio.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="receipt-outline"></ion-icon> En éste Pack te ofrecemos <strong>3 secciones o páginas para navegar por tu sitio.</strong> Si bien en éste pack te ofrecemos 3, podemos cotizar las secciones que necesites y todo lo que se te ocurra.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-development.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="color-wand-outline"></ion-icon> Si todavía no tenés tu logo, contanos tu idea y nosotros lo realizamos... <br>
                                        Nuestros desarrolladores pueden aplicar técnicas de diseño de marketing y comunicación visual, utilizando herramientas como Illustrator & Photoshop, entre otras…
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diseno-grafico.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ilustrador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photoshop.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon name="phone-portrait-outline"></ion-icon> <strong>Responsive Design</strong>
                                        <br>
                                        Se trata de hacer que tu web se vea bien en cualquier dispositivo mobile.
                                    <br>
                                        El <strong>diseño adaptativo</strong> es la técnica que se usa en la actualidad para tener una misma web adaptada a las diferentes plataformas que nos brinda la tecnología: PC de escritorio, tablet, Smartphone, iPad, Kindle y, en resumen, todas las resoluciones de pantalla existentes. <ion-icon name="phone-landscape-outline"></ion-icon>
                                        <br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsive.jpeg" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="shield-checkmark-outline"></ion-icon>  <strong>Certificado SSL</strong> incluído. <br>
                                        Los <strong>Certificado SSL</strong> de validación de dominio sirven para proteger  y garantizar la autenticidad de tu sitio web. <br>
                                        Éste es muy importante para proteger tu sitio y para los usuarios que visiten tu página, ya que les brinda seguridad y confianza al ver que no es un sitio de procedencia dudosa, sino que la validación del dominio está garantizada...
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="bar-chart-outline"></ion-icon> Implementación de <strong>SEO Basic</strong>. Aplicaremos una serie de técnicas, disciplinas y estrategias de optimización para que tu sitio web o blog, mejoren su posicionamiento en los buscadores.</p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="logo-stackoverflow"></ion-icon> Incorporación de <strong>Redes Sociales</strong>. <br>
                                        Con un click, tenés enlaces directos a Facebook - Instagram - Whatsapp - Twitter y demás. Creamos botones personalizados para tus redes.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="grid-outline"></ion-icon> <strong>Galería de Imágenes</strong>. <br>
                                        Adaptamos la galería de imágenes como más te guste. <br>
                                        En principio, tendrás la posibilidad de agregar a tu sitio 20 imágenes. De tener la necesidad de agregar más, dependiendo de la cantidad, se hará una cotización accesible y conveniente.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="lock-closed-outline"></ion-icon> <strong>Protección y respaldo de contenido</strong>.
                                        <br>
                                        Mediante copias de seguridad garantizamos el respaldo de tu base de datos, tus contenidos, correos electrónicos y otros recursos.
                                        <br>
                                        Para proteger tu sitio, aplicamos recursos de protección indispensables. Te recomendamos contratar el mantenimiento del sitio para tener un servicio completo y útil. Más info.

                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="chatbubble-ellipses-outline"></ion-icon> Feedback. <ion-icon name="repeat-outline"></ion-icon>
                                        <br>
                                        Te ofrecemos comunicación directa con uno de nuestros asesores para que te ayuden a coordinar los requerimientos de tu sitio web.
                                        <br>
                                        Desde el inicio de tu proyecto hasta la adquisición de Tu Sitio Web. Nuestro asesor se ocupará de darte la <strong>atención personalizada</strong> que necesitas.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/operador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <a href="<?php echo get_home_url(); ?>/contacto" class="btn btn-primary btn-packs-view">Contáctanos</a>
                                </div>
                                <div class="item-pack barra-redes">
                                    <p>Buscanos en Redes Sociales</p>
                                    <?php redes(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button style="<?php echo ($bool_proweb ? 'background: linear-gradient(135deg, #8f0096 0%, #4d00c6 100%); color: white;' : ''); ?>" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="<?php echo $bool_proweb; ?>" aria-controls="panelsStayOpen-collapseTwo">
                                Pack Pro Web
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse <?php echo $show_proweb; ?>" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="sparkles-outline"></ion-icon> <strong>Design Skills</strong>
                                        <br>En éste pack te ofrecemos propuestas de desarrollo y diseños que se adapten a lo que buscas. Buscaremos funcionalidades para optimizar tus recursos.
                                        <br>Nos enfocarnos en aplicar y reflejar tus ideas a travéz de nuestras habilidades de desarrollo y diseño web, o como le llamamos, nuestros <strong>Design Skills</strong>. Analizaremos los objetivos, guiándote con propuestas que puedan satisfacer tus necesidades.
                                        <br><ion-icon name="today-outline"></ion-icon>
                                        <br>El <strong>Mantenimiento del sitio</strong> estará establecido en horas dedicadas a tu sitio <ion-icon name="speedometer-outline"></ion-icon>, estas horas se pactaran con el asesor si contratas el abono mensual.
                                        <br>El Abono es opcional. <ion-icon name="trail-sign-outline"></ion-icon> Solo lo contartarías, si crees que lo necesitas para tu sitio. El asesor te explicará los beneficios de éste. <ion-icon name="chatbubbles-outline"></ion-icon>
                                        <br>Más información en <a href="#abono-m">Contrato de Abono</a>.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="checkmark-done-outline"></ion-icon> Te ofrecemos un dominio (nombre de tu sitio en la web) y te asesoramos cómo gestionarlo. ¡No te preocupes! Cuando nos contactemos, un asesor te explicará cómo proceder. ¡Es muy sencillo!. <ion-icon class="icon-fonsize" name="happy-outline"></ion-icon><br><br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dominio.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="receipt-outline"></ion-icon> Te ofrecemos 5 secciones o páginas para navegar por tu sitio. Si necesitas más, podemos cotizarlo y darte un mejor precio.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-development.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="today-outline"></ion-icon>Implementación de un <strong>Formulario de contacto</strong>. Esta herramienta te permite recolectar datos de los usuarios que visiten tu sitio web, tales como correo electrónico, número telefónico o ubicación.
                                        <br>El formulario será estructurado con los campos que requieras. Si no entendés bien de que se trata, no te preocupes, nuestros asesores te lo explicarán...
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/formulario.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="globe-outline"></ion-icon> Nos encargamos de las configuraciones del hosting donde alojaremos tu sitio para que se vea en la web.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon name="phone-portrait-outline"></ion-icon> <strong>Responsive Design</strong>
                                        <br>
                                        Se trata de hacer que tu web se vea bien en cualquier dispositivo mobile.
                                        <br>
                                        El <strong>diseño adaptativo</strong> es la técnica que se usa en la actualidad para tener una misma web adaptada a las diferentes plataformas que nos brinda la tecnología: PC de escritorio, tablet, Smartphone, iPad, Kindle y, en resumen, todas las resoluciones de pantalla existentes. <ion-icon name="phone-landscape-outline"></ion-icon>
                                        <br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsive.jpeg" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="color-wand-outline"></ion-icon> Si todavía no tenés tu <strong>logo</strong>, contanos tu idea y nosotros lo realizamos... <br>
                                        Nuestros desarrolladores pueden aplicar técnicas de diseño de marketing y comunicación visual, utilizando herramientas como Illustrator & Photoshop, entre otras…
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diseno-grafico.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ilustrador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photoshop.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="shield-checkmark-outline"></ion-icon> <strong>Certificado SSL</strong> incluído. Los <strong>certificados SSL</strong> de validación de dominio sirven para proteger sitios web personales o, incluso, portales de empresas y proyectos de comercio electrónico.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="bar-chart-outline"></ion-icon> Implementación de <strong>SEO Complete</strong>. Aplicaremos una serie de técnicas, disciplinas y estrategias de optimización para tu sitio web o blog que mejorarán su posicionamiento en los buscadores.
                                        <br>Implementamos la mejor optimización para motores de búsqueda. Un asesor te acompañará en Éste proceso.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="logo-stackoverflow"></ion-icon> Incorporación de <strong>Redes sociasles</strong> (Facebook - Instagram - Whatsaap - twiter - y otros que necesites aplicar).</p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="grid-outline"></ion-icon> <strong>Galería de Imágenes</strong>. <br>
                                        Adaptamos la galería de imágenes como más te guste. <br>
                                        En principio, tendrás la posibilidad de agregar a tu sitio hasta 30 imágenes. De tener la necesidad de agregar más, dependiendo de la cantidad, se hará una cotización accesible y conveniente.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="lock-closed-outline"></ion-icon> <strong>Seguridad y respaldo</strong> da la base de datos y tus contenidos. Correos electrónicos, bloqueos de intrusos y spams.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proteger.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="chatbubble-ellipses-outline"></ion-icon> <strong>Feedback</strong>. Te ofrecemos comunicación con uno de nuestros asesores para coordinar los requerimientos de tu sitio web.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/operador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <?php btnContacto(); ?>
                                </div>
                                <div class="item-pack barra-redes">
                                    <p>Buscanos en Redes Sociales</p>
                                    <?php redes() ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button style="<?php echo ($bool_premium ? 'background: linear-gradient(135deg, #8f0096 0%, #4d00c6 100%); color: white;' : ''); ?>" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="<?php echo $bool_premium; ?>" aria-controls="panelsStayOpen-collapseThree">
                                Pack Premium
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse <?php echo $show_premium; ?>" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="trophy-outline"></ion-icon> <strong>Premium Protected</strong>
                                        <br>Éste Pack es el más completo, por lo cual podemos ampliar horizontes y dedicarnos a tu sitio hasta lograr la mejor <strong>performance</strong>.
                                        <br>Aquí desarrolamos el potencial de tu sitio web con todas las adaptaciones que se requieran. Te acompañaremos en tu proyecto y en los desafios que éste implique.
                                        <br>Trabajaremos juntos para lograr los objetivos que propongas. <ion-icon name="contract-outline"></ion-icon>
                                        <br><strong>Digital Skills</strong>
                                        <br>Profesionales que cuenta con diversas habilidades informáticas aportarán sus <strong>Skills</strong> (habilidades) para bindarte el mejor servicio.
                                        <br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fullstack.png" class="card-img-top" alt="..." style="width: 14rem; margin-bottom: 1rem;">
                                        <br>
                                        <br>El <strong>Mantenimiento del sitio</strong> estará establecido en horas dedicadas a tu sitio, estas horas se pactaran con el asesor si contratas el abono mensual.
                                        <br>El Abono es opcional. <ion-icon name="trail-sign-outline"></ion-icon> Solo lo contartarías, si crees que lo necesitas para tu sitio. El asesor te explicará los beneficios de éste.
                                        <br>Más información en <a href="#abono-m">Contrato de Abono</a>.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/servicio-premium.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="trail-sign-outline"></ion-icon> Te ofrecemos un dominio y gestión del mismo. Asesoría completa y detallada. A medida que tengamos los feedback, te acompañaremos para que entiendas todo. Un asesor te explicará como proceder. ¡Es muy sencillo! <ion-icon name="happy-outline"></ion-icon><br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nicar.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tad.jpg" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="globe-outline"></ion-icon> Nos encargamos de las configuraciones del hosting donde alojaremos tu sitio para que se vea en la web. Monitoreo de vulnerabilidades en el sistema de archivos, control y administración de datos y velocidad.
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/server.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="receipt-outline"></ion-icon> Te ofrecemos 8 secciones o páginas para navegar por tu sitio. Si necesitas más, podemos cotizarlo y darte un mejor precio.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web-development.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon name="phone-portrait-outline"></ion-icon> <strong>Responsive Design</strong>
                                        <br>
                                        Se trata de hacer que tu web se vea bien en cualquier dispositivo mobile.
                                        <br>
                                        El <strong>diseño adaptativo</strong> es la técnica que se usa en la actualidad para tener una misma web adaptada a las diferentes plataformas que nos brinda la tecnología: PC de escritorio, tablet, Smartphone, iPad, Kindle y, en resumen, todas las resoluciones de pantalla existentes. <ion-icon name="phone-landscape-outline"></ion-icon>
                                        <br>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/responsive.jpeg" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="color-wand-outline"></ion-icon> Diseñamos tu <strong>Logo Custom</strong> Logo perzonalizado. O agregamos el que tengas y lo mejoramos a tu gusto.
                                        <br>Nuestros desarrolladores pueden aplicar técnicas de diseños de marketing utilizando herramientas como Illustrator & Photoshop.
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/diseno-grafico.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ilustrador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photoshop.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="shield-checkmark-outline"></ion-icon> <strong>Certificado SSL</strong> incluído. Los <strong>certificados SSL</strong> de validación de dominio sirven para proteger sitios web personales o, incluso, portales de empresas y proyectos de comercio electrónico.
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="bar-chart-outline"></ion-icon> Implementación de <strong>SEO Complete</strong>. <ion-icon name="stats-chart-outline"></ion-icon>
                                        <br>Aplicaremos una serie de técnicas, disciplinas y estrategias de optimización para tu sitio web o blog que mejorarán su posicionamiento en los buscadores.
                                        <br>Implementamos la mejor optimización para motores de búsqueda. Un asesor te acompañará en éste proceso.
                                        <br>Tu web más accesible para los usuarios y los rastreadores de los motores de búsqueda, mediante la mejora del <strong>SEO</strong> de tu contenido y su legibilidad, potenciará tu web.
                                        <br>Con herramientas de <strong>SEO</strong> on-page poderosas que puede mejorar las posiciones de tu web y ofrecerte un mejor control sobre el aspecto de tus páginas. <ion-icon name="navigate-outline"></ion-icon>

                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="logo-stackoverflow"></ion-icon> Incorporación de <strong>Redes Sociales</strong> (Facebook - Instagram - Whatsaap - twiter - y otros que necesites aplicar).</p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize" name="grid-outline"></ion-icon> Galería de Imágenes. Adaptamos la galería de imágenes a lo que necesites.
                                        <br>Incorporación de videos directos a <strog>youtube</strog>. <ion-icon name="logo-youtube"></ion-icon>
                                    </p>
                                </div>
                                <div class="item-pack">
                                    <p>
                                        <ion-icon class="icon-fonsize md hydrated" name="today-outline" role="img" aria-label="today outline"></ion-icon>Implementación de un <strong>Formulario de contacto</strong>. Esta herramienta te permite recolectar datos de los usuarios que visiten tu sitio web, tales como correo electrónico, número telefónico o ubicación.
                                        <br>El formulario será estructurado con los campos que requieras. Si no entendés bien de que se trata, no te preocupes, nuestros asesores te lo explicarán...
                                    </p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/formulario.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="lock-closed-outline"></ion-icon> Seguridad y respaldo da la base de datos y tus contenidos. Correos electrónicos, bloqueos de intrusos y spams. Imcorporamos antivirus y contrafuegos para proteger tu sitio.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proteger.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <p><ion-icon class="icon-fonsize" name="chatbubble-ellipses-outline"></ion-icon> Feedback. Te ofrecemos comunicación con uno de nuestros asesores para coordinar los requerimientos de tu sitio web.</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/operador.png" class="card-img-top" alt="..." style="width:5rem; margin-bottom: 1rem;">
                                </div>
                                <div class="item-pack">
                                    <a href="<?php echo get_home_url(); ?>/contacto" class="btn btn-primary btn-packs-view">Contáctanos</a>
                                </div>
                                <div class="item-pack barra-redes">
                                    <p>Buscanos en Redes Sociales</p>
                                    <?php redes(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--maintenance ini-->
                <div id="abono-m" class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="margin: 1.5rem auto 1rem auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/desin.jpeg" class="card-img-top" alt="..." style="max-width: 10rem;">
                    <div class="card-body">
                        <h5 class="card-title">Contrato de Abono - Servicio de Mantenimiento</h5>
                        <p class="card-text">
                            Éste contrato es opcional, es decir no requiere obligación de abono. Lo cual es una buena noticia <ion-icon class="icon-fonsize" name="happy-outline"></ion-icon>, ya que creemos que hay que darles la opción a nuestros clientes de elegir los servicios que necesitan. <ion-icon name="bag-check-outline"></ion-icon>
                            <br>
                            Pero, ¿De qué se trata el Contrato Abono? <br>
                            Éste contrato te ofrece <strong>Servicios de Mantenimiento</strong> para tu sitio web, pactadas en horas dedicadas a la mejora continua de tu página. <br>
                            ¿En qué te beneficiaría éste servicio? <br>
                            Nuestros productos se basan en <strong>servicios digitales</strong>.
                            <br>
                            Ofrecemos varias categorías iniciales a las que llamamos "Packs", las cuales tienen definidas sus características. <br>
                            El <strong>Servicio de Mantenimiento</strong> de tu sitio te brinda una atención adicional, además de los servicios propuestos en el pack.<br>
                            Es por ello que pactaremos un feedback (comunicación), para explicarte y coordinar los beneficios de éste <strong>servcio especializado</strong>, teniendo en cuenta el pack que elijas.<br>
                            Cada pack tiene un abono mensual de base y las especificaciones de lo que contempla el mantenimiento de tu sitio te lo explicará un asesor de manera detallada, paso a paso. <ion-icon class="icon-fonsize" name="footsteps-outline"></ion-icon>
                            <br>
                            Para que tedés una idea mejor, te daré un ejemplo.
                            <br>
                            Supongamos que tu sitio tiene contenidos que deben actualizarse con frecuencia. Esto requiere de una <b>atención y disponibilidad</b> pactada <ion-icon name="checkmark-done-outline"></ion-icon>, a la que llamamos <strong>horas dedicadas</strong> <ion-icon name="timer-outline"></ion-icon>.
                            <br>
                            Estas horas son para dedicarle tiempos de desarrollo, cambios o modificaciones, actualización de contenido, y todo lo que se necesite para mantener tu sitio actualizado y seguro. Dependerá de que tipo de desarrollo e implementaciones requiera tu sitio, para poder estimar una cotización en base al tiempo y complejidad.
                            <br>
                            Pero como te mencionamos antes, el abono no es obligatorio, así que no te preocupes... <ion-icon name="fast-food-outline"></ion-icon>
                            <br>
                            En fin, esto lo tendrás mas claro cuando te comuniques con el asesor. <ion-icon name="people-outline"></ion-icon>
                        </p>
                        <p>No esperes más...</p>
                        <a href="<?php echo get_home_url(); ?>/contacto/#form-contacto" class="btn btn-primary bg-theme">Realizá tu Consulta</a>
                    </div>
                </div>
                <!--maintenance fin-->
            </div>
            <div class="card" style="text-align: center; border: none;">
                <div class="card-body">
					<div>
						<p style="color: black;">Contactanos por WhatsApp</p>
					</div>
                    <?php redes(); ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
