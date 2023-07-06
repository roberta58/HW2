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
            <div id="trasparenza"> <img class="abc" src="immagini/f1.jpeg">
            <h1>
               <strong>AroundTheWorld</strong>
           </h1>
        </div>
        </header>

  <section>
        <div class="top">
                <p><strong> </strong> questi sono i luoghi preferiti da altri utenti per la tipologia di viaggio da te scelta! </p>   
            </div>

            <div id="main" class="sectionGrid">

                <div data-city ="Ibiza" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city">Ibiza</p>
                        </div>
                    <img src="immagini/ibiza.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            
                <div data-city ="Milano" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Milano </p>
                        </div>
                    <img src="immagini/milano.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Malta" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Malta </p>
                       </div>
                    <img src="immagini/malta.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Zante" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Zante </p>
                          </div>
                    <img src="immagini/zante.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>

                <div data-city ="Amsterdam" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Amsterdam </p>
                       </div>
                    <img src="immagini/amsterdam.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Lloretdemar" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Lloret de mar </p>
                       </div>
                    <img src="immagini/lloret.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Bangkok" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city">Bangkok</p>
                        </div>
                    <img src="immagini/bangkok.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            
                <div data-city ="Mykonos" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Mykonos </p>
                       </div>
                    <img src="immagini/mykonos.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Londra" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Londra </p>
                       </div>
                    <img src="immagini/londra.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            </div>
        </section>

       
        <footer>
        <div id="Io">
       @AroundTheWorld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="<?php echo e(url('recensioni')); ?>">Dicci come possiamo migliorare</a>
      </div>
        </footer> 
          
    </body>
</html><?php /**PATH C:\Users\monic\OneDrive\Desktop\prova\resources\views/divertimento.blade.php ENDPATH**/ ?>