<?php
    /* Template Name: Inicio */ 
    get_header();
?>
<section id="banner" class="template-section">

   <div class="center">    
<h1>¿No sabes <span>inglés?</span><b>¡NO TE PREOCUPES!</b></h1>
           <div class="azul">
           
            </div>
             <h3>En DocuMóvil contamos con personal bilingüe <br>para apoyarte en todo tipo de trámites</h3>
             <div class="bot">
  <a href="https://www.facebook.com/documovilaz/appointments" class="btn ">PROGRAMA UNA CITA AQUÍ</a><br><a href="#contacto" class="btn programa">SOLICITA UN PRESUPUESTO AQUÍ</a>
       </div>
        </div> 
      
    </section>
    <section id="quienes" class="template-section">

        


            <div class="grid">

                <div class="col fondo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pavoreal.png" alt="Pavoreal">

                </div>
                <div class="col prueba_col">
                  <h2>¿Quiénes somos?</h2>
                    <p>Somos una red de especialistas dedicados a proporcionar servicios profesionales de documentación, trámites y orientación en diversas aéreas, mediante atención personalizada: en tu idioma y a precios accesibles, para el empoderamiento de la comunidad hispana en Arizona. </p>
                    <div class="center">
                 <a href="https://documovilaz.com/quienes-somos/" class="btn">Saber más</a>
                 </div>
               
                </div>


            </div>
      
    </section>
     <section id="soluciones" class="template-section">

        


            <div class="grid">

                <div class="col fondo1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/soluciones2.png" alt="Soluciones">

                </div>
                <div class="col prueba_col">
                  <h2>Soluciones al Migrante
<span>¡CONOCE NUESTROS SERVICIOS!</span></h2>
                
                   <ul>
                       <li>Traducciones e interpretaciones personales y corporativas<br>
                      (Español - Inglés / Inglés - Español)
</li>
<li>Notaría movil y/o en la oficina</li>
<li>Llenado de solicitudes y/o formatos</li>
<li>Poderes notariales</li>
                   </ul>
                    <div class="center">
                 <a href="https://documovilaz.com/servicios/" class="btn">Saber más</a>
                 </div>
               
                </div>
                <div class="col fondo2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/soluciones.png" alt="Soluciones">

                </div>


            </div>
           
      
    </section>
    <section id="blog" class="template-section">
     <img class="flor" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog.png" alt="Soluciones">
     <h2>BLOG</h2>
     <div class="gris">
        <div class="centro">
        
        
        <?php echo do_shortcode('[vc_row][vc_column][woodmart_blog items_per_page="3" blog_design="masonry" img_size="200x100" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="no" blog_columns="3"][/vc_column][/vc_row]');?>

         
     </div>
        </div>
    </section>
    <section id="video" class="template-section">
    <h2>GALERÍA</h2>
     <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/video.png" alt="Soluciones">
     <?php echo do_shortcode('[elfsight_instagram_feed id="2"]');?>
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/videoflor.png" alt="Soluciones">
     
    
</section>
 
 <section id="advertencia" class="template-section">
<p>No somos abogados, por lo tanto no proporcionamos asesoría legal, <br>sólo <strong>brindamos orientación</strong> para ayudarle a estar mejor informado.  </p>
</section>

<section id="testimonios" class="template-section">
   <div class="contenedor">
    <h2>TESTIMONIOS</h2>
     
     <?php echo do_shortcode('[elfsight_testimonials_slider id="1"]');?>
     </div>
    
</section>
 
  <?php include 'contacto.php'; ?>

<?php 
    get_footer();
?>
