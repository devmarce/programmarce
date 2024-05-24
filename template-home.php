<?php
/*template name: home*/

mostrarRuta(0, __FILE__);
get_header();

/*** DATA PACKAGE ini ***/
$paquetes = array(
    $promo = dataPacks(
        false,
        "banner-cartel-standar.png",
        "Promo Limited",
        "",
        "",
        "25.000",
        "",
        "1.500",
        "Nuevo pack, Proximamente.",
        array(),
        "?pack=promo#btn-packs"
    ),
    $basicstatic = dataPacks(
        false,
        "banner-cartel-standar.png",
        "Basic Static",
        "",
        "",
        "25.000",
        "",
        "1.500",
        "Nuevo pack, Proximamente.",
        array(),
        ""
    ),
    $standar = dataPacks(
        true,
        "banner-cartel-standar.png",
        "Standard",
        "",
        "",
        "80.000",
        "",
        "5.000",
        "Obtené una página web ya!<br>En pocos pasos y de forma sencilla.",
        array(
            " Hosting Incluído",
            "Dominio Incluído",
            "3 Secciones",
            "Certificado SSL",
            "SEO Basic",
            "Logo",
            "Responsive Design",
            "Redes Sociales",
            "Galería de Imágenes",
            "Protección y Respaldo",
            "Feedback Cliente - Asesor"
        ),
        "?pack=standard#btn-packs"
    ),
    $proweb = dataPacks(
        true,
        "banner-cartel-proweb.png",
        "Pro Web",
        "diamond-outline",
        "",
        "120.000",
        "",
        "5.000",
        "Desarrollo, diseño y mantenimento de tu sitio activo.",
        array(
            "Hosting Incluído",
            "Dominio Incluído",
            "5 Secciones",
            "Certificado SSL",
            "Formulario de Contacto",
            "SEO Complete",
            "Logo",
            "Responsive Design",
            "Redes Sociales",
            "Galería de Imágenes",
            "Protección y Respaldo",
            "Feedback Cliente - Asesor"
        ),
        "?pack=proweb#btn-packs"
    ),
    $premium = dataPacks(
        true,
        "banner-cartel-premium.png",
        "Premium",
        "trophy-outline",
        "150.000",
        "125.000",
        "Limited time",
        "5.000",
        "Desempeño dedicado a tu sitio. Implementación de <strong>SEO</strong> Full, Seguridad y Mantenimiento Premium.",
        array(
            "Hosting Incluído",
            "Dominio Incluído",
            "8 Secciones",
            "Certificado SSL",
            "Formulario de Contacto",
            "SEO Premium",
            "Logo Custom",
            "Responsive Design",
            "Redes Sociales",
            "Interación con Whatsapp",
            "Galería de Imágenes",
            "Protección Total",
            "Antivirus y Contrafuegos",
            "Asesoramiento Full",
            "Actualizaciones incluidas",
            "Feedback Cliente - Asesor"
        ),
        "?pack=premium#btn-packs"
    )
);
/*** DATA PACKAGE fin ***/

//elegir icons: https://ionic.io/ionicons
?>

<style>/*.main-header {display: none;@todo debugger}*/</style>
<main class="main_template-home">
    <!--slider ini-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/keyboar.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Creamos tu Página Web ya!</h1>
                    <p>Ponete en contacto con nosotros. <br> Empezá hoy a ver tu sitio Web.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/business.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Invertí en tu Negocio Digital</h5>
                    <p>Aprovechá la tecnología para llegar más lejos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slide/hands.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Tu negocio en manos de todo el mundo.</h5>
                    <p>Mostrale a todos lo que ofrecés.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <!--slider fin-->
    <div style="height: auto; margin: 1rem;">
        <div class="container text-center">
            <div class="row">
                <?php if (!empty($paquetes)) : //verificando si hay packs?>
                    <?php foreach ($paquetes as $pack) : ?>
                        <?php
                        $name_icon = !empty($pack["icon"]) ? $pack["icon"] : "ribbon-outline";
                        ?>
                        <?php if ($pack["mostrar"]) : //check mostrar pack?>
                            <!--maquetar ini:-->
                            <div class="col card_conten">
                                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/banners/' . $pack['name img']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title"><?php echo $pack["name pack"]; ?></h5><ion-icon class="icon-fonsize" name="<?php echo $name_icon; ?>"></ion-icon>
                                            <?php if ($pack["precio tachado"]): ?>
                                                <h5 class="card-title" style="text-decoration-line: line-through; font-weight: 400;"><?php echo '$ ' . $pack['precio tachado'] . ' ARS'; ?></h5>
                                                <h5 class="card-title" style="text-shadow: 1px 1px 2px #6a0fbd;"><?php echo '$ ' . $pack['precio'] . ' ARS'; ?></h5><span style="color: red; font-weight: bold"><?php echo $pack['texo limite']; ?> </span><ion-icon class="icon-fonsize" name="hourglass-outline"  style="color: red;"></ion-icon>
                                            <?php else : ?>
                                                <h5 class="card-title"><?php echo '$ ' . $pack['precio'] . ' ARS'; ?></h5>
                                            <?php endif; ?>
                                        </div>
                                        <p class="card-text"><?php echo $pack["description"]; ?></p>
                                        <p class="" style="text-shadow: 1px 1px 2px #d352e3;color: #8022fd;"><?php echo 'Pago único + Abono $' . $pack['abono'] . ' ARS (Opcional)'; ?></p>
                                        <ul>
                                            <?php if (!empty($pack["skills"])) : ?>
                                                <?php foreach ($pack["skills"] as $skill) : ?>
                                                    <li>
                                                        <?php echo $skill;?>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <li>
                                                    <?php echo "proximamente <br> aún no disponible";?>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                        <?php if ($pack["boton"]) : ?>
                                            <a href="<?php echo get_home_url(); ?>/productos/<?php echo $pack['boton'];?>" class="btn btn-primary bg-theme" style="border: none; margin-top: 1.5rem;<?php echo $pack["boton"]; ?>">Consultar</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!--maquetar fin:-->
                        <?php else : ?>
                            <pre style="display: none;"><?php echo "no se puede mostar el pack: ". $pack['name pack']; //debbuger?></pre>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; //fin verificar paquetes?>
            </div>
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
</main>
<?php get_footer() ?>

