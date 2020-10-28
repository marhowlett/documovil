<?php
    /* Template Name: Servicios */ 
    get_header();
?>
<section id="conoc" class="template-section">
<div class="center">
<h1>¡CONOCE NUESTROS SERVICIOS!</h1>
<p><strong class="apoyo">Te apoyamos con los siguientes trámites:</strong></p>
</div>
</section>
<section id="truno" class="template-section">

        <div class="contenedor">
            <div class="grid">
               <div class="col coldos imamovil1">
                    <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/s1.png" alt="Soluciones">
                </div>
                <div class="col coluno">
                   <ul>
                       <li>TRADUCCIONES E INTERPRETACIONES PERSONALES Y CORPORATIVAS<br><em>(Español - Inglés / Inglés - Español)</em></li>
                       <li>NOTARÍA MOVIL Y/O EN LA OFICINA</li>
                       <li>LLENADO DE SOLICITUDES Y/O FORMATOS</li>
                       <li>PODERES NOTARIALES<br>
                        <em>General</em><br>
                       <em> Parental</em><br>
                       <em> Cuidado de la salud </em>

                       </li>
                       <li>APOSTILLA DE DOCUMENTOS </li>
                       <li>CONSULTA DE RECORD CRIMINAL</li>
                       <li>REGISTRO DE LLC, EIN Y NOMBRE PARA PEQUEÑOS NEGOCIOS</li>
                   </ul>

                </div>
                <div class="col coldos imamovil2">
                    <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/s1.png" alt="Soluciones">
                </div>
            </div>
            <div class="grid">
               <div class="col coluno">
                    <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/s2.png" alt="Soluciones">
                </div>
                <div class="col coldos">
               <ul>
                   <li>CARTAS DE VIAJE PARA MENORES</li>
                   <li>ITIN RENOVACION O PRIMERA VEZ</li>
                   <li>FBI FINGERPRINTS <br><em>(Récord Criminal Federal)</em></li>
                   <li>ESCRITOS DE CUALQUIER TIPO <br><em>(Español - Inglés / Inglés - Español)</em></li>
                   <li>REPORTES DE POLICÍA: Hacer o Solicitar</li>
                   <li>REPORTE DE CREDITO</li>
                   <li>SOLICITUD DE RECORD PUBLICOS</li>
               </ul>
                </div>
                
            </div>
             <div class="grid">
               <div class="col coldos imamovil1">
                    <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/s3.png" alt="Soluciones">
                </div>
                <div class="col coluno colunouno">
                   <ul>
                       <li>CONSULTA FECHAS DE CORTES</li>
                       <li>FAX, COPIAS, IMPRESIÓN BYN, COLOR, ESCANEO DE DOCUMENTOS, CORREO ELECTRÓNICO</li>
                       <li>CITAS EN LÍNEA <br><em>(Médicas y Legales)</em></li>
                       <li>BÚSQUEDA E IMPRESIÓN DE CURP</li>
                       <li>RESERVACIONES EN LÍNEA <br><em>(Renta de Auto, Airbnb, Boletos para Espectáculos, Boletos de Avión, Hoteles)</em></li>
                       <li>TRAMITE DE PASAPORTE CUBANO</li>
                       <li>ORIENTACIÓN GRATUITA EN TEMAS, LEGALES, FINANCIEROS, LABORALES, FAMILIARES Y CIVILES</li>
                   </ul>

                </div>
                <div class="col coldos imamovil2">
                    <img class="uno" src="<?php echo get_stylesheet_directory_uri(); ?>/img/s3.png" alt="Soluciones">
                </div>
            </div>
        </div>
    <h3 class="azul">Si no encuentras aquí el trámite que necesitas por favor <br>
<a href="https://documovilaz.com/servicios/#contacto"><u>CONTÁCTANOS</u></a> y te ayudaremos.</h3>
  
   <div class="naranja">
       <h3>Visita también el <a href="https://calendar.google.com/calendar/u/0/r?tab=cc"><u>CALENDARIO DE EVENTOS</u></a> y el<br>
<a href="https://documovilaz.com/wp-content/uploads/2019/10/DIRECTORIO-DE-RECUSOS.pdf"><u>DIRECTORIO DE RECURSOS</u></a> de interés para<br>
la comunidad hispana en Arizona.</h3>
   </div>
    </section>
    <section id="pago" class="template-section">
    

        <div >
            <div class="grid">
                <div class="col colespe">
                   <h2>¿Cómo pagar?</h2>
                   <?php echo do_shortcode( '[slide-anything id="69"]' ); ?>
                   
                   <p>Efectivo y Tarjetas (débito y crédito)</p>
                </div>
                <div class="col">
                   <section id="advertencia2" class="template-section">
<p>No somos abogados, por lo tanto no proporcionamos asesoría legal, sólo <strong>brindamos orientación</strong> para ayudarle a estar mejor informado.  </p>
</section>
                </div>
            </div>
        </div>

    </section>
    

<?php include 'contacto.php'; ?>

<?php 
    get_footer();
?>
