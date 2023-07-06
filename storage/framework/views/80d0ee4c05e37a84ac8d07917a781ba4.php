<?php

?>
<html>
    <head>
        <meta charset="utf-8">
        <title> AroundTheWorld  </title>
        <link rel="stylesheet" href="<?php echo e(asset('css/mhw1.css')); ?>" >
        <link rel="stylesheet" href="<?php echo e(asset('css/mhw.css')); ?>" >
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?php echo e(asset('js/descrizioni.js')); ?>" defer="true"></script>       
         <script src="<?php echo e(asset('js/cerc.js')); ?>" defer="true"></script>
    </head>
    
    <body>

        <nav>
        <div id="opzioni">
        <a href="<?php echo e(url('home')); ?>"> home </a>
        <a href="<?php echo e(url('home')); ?>#news"> news </a>
           <a href="<?php echo e(url('home')); ?>#Io"> contatti </a>
         <a href="<?php echo e(url('logout')); ?>" class='button'>logout</a>
        </div>
        
               <div id="menumini">
              <div></div>
              <div></div>
              <div></div>
              </div>
            </nav>   
        <header>
            <div id="trasparenza"><img class="abc" src="immagini/f1.jpeg">
            <h1>
               <strong>AroundTheWorld</strong>
           </h1>
        </div>
        </header>

 <section>
 <div class="top">
    <p>  questi sono i luoghi preferiti da altri utenti per la tipologia di viaggio da te scelta! </p>
                   
            </div>

        <div id="main" class="sectionGrid">
                <div data-city ="Bali" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Bali</p>
                         </div>
                    <img src="immagini/bali.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
             
                <div data-city ="Maldive" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Maldive </p>
                          </div>
                    <img src="immagini/maldive.jpg">
                    <p class="descrizione"> Clicca qui  per più dettagli </p>
                </div>
                
                <div data-city ="Hawaii" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Hawaii </p>
                        </div>
                    <img src="immagini/hawaii.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Mauritius" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Mauritius</p>
                          </div>
                    <img src="immagini/mauritius.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="IsoleFiji" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Isole Fiji </p>
                        </div>
                    <img src="immagini/fiji.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Madagascar" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Mora Mora (Madagascar) </p>
                        </div>
                    <img src="immagini/madagascar.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Tibet" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Tibet </p>
                          </div>
                    <img src="immagini/tibet.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            
                <div data-city ="GrandCanyon" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Grand Canyon </p>
                          </div>
                    <img src="immagini/canyon.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Caraibi" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Caraibi</p>
                         </div>
                    <img src="immagini/caraibi.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            </div>
        
        </section>


        <footer>
        <div id="Io">
       @AroundTheWorld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="recensioni.php">Dicono di noi</a>
      </div>
        </footer>   
    </body>
</html><?php /**PATH C:\Users\monic\OneDrive\Desktop\prova\resources\views/relax.blade.php ENDPATH**/ ?>