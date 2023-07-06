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
                <p><strong><?php ?></strong> questi sono i luoghi preferiti da altri utenti per la tipologia di viaggio da te scelta! </p>
                   
            </div>
            <div id="main" class="sectionGrid">
                <div data-city ="Patagonia" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Patagonia </p>
                      </div>
                    <img src="immagini/patagonia.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Kenya" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Kenya </p>
                         </div>
                    <img src="immagini/kenya.jpg">
                    <p class="descrizione"> Clicca qui  per più dettagli </p>
                </div>
                
                <div data-city ="CostaRica" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Costa Rica</p>
                       </div>
                    <img src="immagini/rica.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Antartide" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Ghiacciai Antartide </p>
                          </div>
                    <img src="immagini/antartide.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Amazzonica" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Foresta Amazzonica </p>
                        </div>
                    <img src="immagini/amazzonia.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Sahara" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Deserto del Sahara</p>
                      </div>
                    <img src="immagini/sahara.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="SriLanka" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Sri Lanka </p>
                    </div>
                    <img src="immagini/lanka.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
              
                <div data-city ="Tanzania" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Tanzania </p>
                       </div>
                    <img src="immagini/tanzania.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Galapagos" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Isole Galapagos</p>
                        </div>
                    <img src="immagini/galapagos.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            </div>
        </section>

        <footer>
        <div id="Io">
       @AroundTheWorld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="<?php echo e(url('home')); ?>#recensioni">Dicono di noi</a>
      </div>
       
        </footer> 
           
    </body>
</html><?php /**PATH C:\Users\monic\OneDrive\Desktop\prova\resources\views/avventura.blade.php ENDPATH**/ ?>