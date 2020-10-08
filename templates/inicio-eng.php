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
 <a href="#" class="btn">See services offered</a>
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
                 <a href="#" class="btn">Learn more</a>
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
                  <h2>Migrant Solutions
<span>Get to know our services!</span></h2>
                   <ul>
                       <li>Notary</li>
<li>Personal and corporative translations and interpretations</li>
<li>Free guidance </li>
<li>Document Apostille</li>
<li>FBI Fingerprints</li>
                   </ul>
                    <div class="center">
                 <a href="#" class="btn">Learn more</a>
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
    <h2>VIDEOS</h2>
     <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/video.png" alt="Soluciones">
     <?php echo do_shortcode('[elfsight_youtube_gallery id="2"]');?>
     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/videoflor.png" alt="Soluciones">
     
    
</section>
 
 
 
  <?php include 'contacto-eng.php'; ?>

<?php 
    get_footer();
?>
