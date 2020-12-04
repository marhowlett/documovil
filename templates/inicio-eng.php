<?php
    /* Template Name: Inicio eng */ 
    get_header();
?>
<section id="banner" class="template-section">

   <div class="center">    
<h1>Don’t speak <span> Spanish?</span><b>DON'T WORRY!</b></h1>
           <div class="azul">
           
            </div>
             <h3>DocuMovil has bilingual staff to <br>support you in all types of document procedures</h3>
             <div class="bot">
   <a href="https://www.facebook.com/documovilaz/appointments" class="btn ">SCHEDULE AN APPOINTMENT HERE</a> <br> <a href="#contacto" class="btn programa">REQUEST A QUOTE HERE</a>
       </div>
 
        </div> 
      
    </section>
    <section id="quienes" class="template-section">

        


            <div class="grid">

                <div class="col fondo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pavoreal.png" alt="Pavoreal">

                </div>
                <div class="col prueba_col">
                  <h2>Who are we?</h2>
                    <p>We are a network of specialist dedicated to providing professional documentation services, procedures,
                    and orientation in diverse areas through personalized attention in your language and at affordable
                    prices for the empowerment of the Hispanic community in Arizona. </p>
                    <div class="center">
                 <a href="https://documovilaz.com/who-we-are/" class="btn">Learn more</a>
                 </div>
               
                </div>


            </div>
      
    </section>
     <section id="soluciones" class="template-section">

        


            <div class="grid">

                <div class="col fondo1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/soluciones.png" alt="Soluciones">

                </div>
                <div class="col prueba_col">
                  <h2>Migrant Solutions
<span>Get to know our services!</span></h2>
                   <ul>
                       <li>Personal and corporate translations and interpretations.<br>Spanish - English / English - Epanish)</li>
<li>Mobile notary and in the office</li>
<li>Document preparation </li>
<li>Power of attorney</li>
                   </ul>
                    <div class="center">
                 <a href="https://documovilaz.com/services/" class="btn">Learn more</a>
                 </div>
               
                </div>
                <div class="col fondo2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/soluciones.png" alt="Solutions">

                </div>


            </div>
           
      
    </section>
    <section id="blog" class="template-section">
     <img class="flor" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog.png" alt="Solutions">
     <h2>BLOG</h2>
     <div class="gris">
        <div class="centro">
        
        
        <?php echo do_shortcode('[vc_row][vc_column][woodmart_blog items_per_page="3" blog_design="masonry" img_size="200x100" parts_title="1" parts_meta="1" parts_text="1" parts_btn="1" lazy_loading="no" blog_columns="3"][/vc_column][/vc_row]');?>

         
     </div>
        </div>
    </section>
    <section id="video" class="template-section">
    <h2>GALLERY</h2>
     <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/video.png" alt="Soluciones">
     <?php echo do_shortcode('[elfsight_instagram_feed id="2"]');?>
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/videoflor.png" alt="Soluciones">
     
    
</section>
 
 <section id="advertencia" class="template-section">
<p>We are not attorneys; therefore we do not provide legal advice. <br>We only <strong>provide guidance</strong> to help you be better informed.  </p>
</section>
 <section id="testimonios" class="template-section">
   <div class="contenedor">
    <h2>TESTIMONIALS</h2>
     
     <?php echo do_shortcode('[elfsight_testimonials_slider id="1"]');?>
     </div>
    
</section>
  <?php include 'contacto-eng.php'; ?>

<?php 
    get_footer();
?>
