<?php

?>

<html>
    <head>
    <meta charset="utf-8">
        <title> AroundTheWorld  </title>
        <link rel="stylesheet" href="{{ asset('css/mhw1.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/mhw.css') }}" >
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/descrizioni.js') }}" defer="true"></script>       
         <script src="{{ asset('js/cerc.js') }}" defer="true"></script>
    </head>
    
    <body>

        <nav>
            <div id="opzioni">
            <a href="{{ url('home') }}"> home </a>
        <a href="{{ url('home') }}#news"> news </a>
           <a href="{{ url('home') }}#Io"> contatti </a>
         <a href="{{ url('logout') }}" class='button'>logout</a>
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
                <p> questi sono i luoghi preferiti da altri utenti per la tipologia di viaggio da te scelta! </p>
                   
            </div>
            <div id="main" class="sectionGrid">
                <div data-city ="Roma" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Roma </p>
                    </div>
                    <img src="immagini/roma.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                <div data-city ="Firenze" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Firenze </p>
                    </div>
                    <img src="immagini/firenze.jpg">
                    <p class="descrizione"> Clicca qui  per più dettagli </p>
                </div>
               
                <div data-city ="Parigi" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Parigi </p>
                        </div>
                    <img src="immagini/parigi.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="IlCairo" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Il Cairo </p>
                           </div>
                    <img src="immagini/egitto.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Vienna" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Vienna </p>
                         </div>
                    <img src="immagini/vienna.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
    
                <div data-city = "Istanbul" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Istanbul </p>
                         </div>
                    <img src="immagini/istanbul.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>

                <div data-city ="Praga" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Praga </p>
                       </div>
                    <img src="immagini/praga.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Berlino" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Berlino </p>
                    </div>
                    <img src="immagini/berlino.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>

                <div data-city ="SanPietroburgo" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> San Pietroburgo </p>
                       </div>
                    <img src="immagini/pietroburgo.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            </div>
        </section>

       
        <footer>
        <div id="Io">
       @AroundTheWorld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="{{ url('recensioni') }}">Dicci come possiamo migliorare</a>
      </div>
        </footer> 
         </body>
</html>