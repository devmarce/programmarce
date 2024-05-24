<?php
/*template name: contacto*/

mostrarRuta(0, __FILE__);
get_header();

?>

<main class="main-conteiner">
    <section id="sect1" class="sect">
        <video class="object-fit-xxl-contain rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/video/estrellas.mp4" autoplay="true" muted="true" loop="true" poster="https://carontestudio.com/img/contacto.jpg"></video>

        <div class="video-text">
                <h1 class="card-title">Encotrá tu Sitio Web.</h1>
                <p class="card-text">
                    Se parte del Universo Digital. <ion-icon name="telescope-outline" role="img" class="md hydrated" aria-label="telescope outline" style="font-size: 23px;"></ion-icon> <ion-icon name="sparkles-outline" role="img" class="md hydrated" aria-label="sparkles outline" style="
    margin-bottom: 14px;"></ion-icon>
                </p>
        </div>
    </section>
    <div id="form-contacto" class="card text-center form-content" style="margin: 0px 2rem 0px 2rem;">
        <div class="card-header" style="box-shadow: inset -1px 4px 9px #d908ff;">
            <h2>Contactanos para Diseñar tu Web</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Completa el Formulario</h5>
            <p class="card-text">
                Dejanos tus datos y tu consulta para que te contactemos.
                <br>
                Contanos que estas buscado para Tu Nuevo Sitio Web.
                <br>
            </p>
            <ion-icon name="telescope-outline" role="img" class="md hydrated" aria-label="telescope outline" style="font-size: 23px;"></ion-icon> <ion-icon name="sparkles-outline" role="img" class="md hydrated" aria-label="sparkles outline" style="
    margin-bottom: 14px;"></ion-icon>
            <div class="fomulario_contacto" style="margin-bottom: 2rem;">
                <?php the_content(); ?>
            </div>
            <a href="<?php echo get_home_url(); ?>/productos" class="btn btn-primary btn-packs-view">Conocer los Packs</a>
        </div>
        <div class="card-footer text-muted">
            <div>
                <p style="color: white;">Contactanos por WhatsApp</p>
                <?php redes(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>
