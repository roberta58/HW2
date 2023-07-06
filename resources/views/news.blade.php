<?php
?>
<html>
    <head>
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="{{ asset('css/mhw1.css') }}" >
        <link href="https://fonts.googleapis.com/css2?family=Carter+One+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/apinew.js') }}" defer="true"></script>

    </head>
<body>
        <nav>
        <div id="opzioni">
        <a href="{{ url('eventi') }}"> eventi </a>
        <a href="{{ url('') }}#news"> news </a>
           <a href="{{ url('home') }}#Io"> contatti </a>
        </div>

           </div>
    
           <div id="menumini">
          <div></div>
          <div></div>
          <div></div>
          </div>
        </nav>   
    <header>
        <div id="trasparenza">
        <img class="sfondo" src="immagini/f1.jpeg"> 
        <h1>
           <strong>AroundTheWorld</strong>
       </h1>
    </div>
    </header> 
    
<section id="news">
            <h4>Cerca una notizia</h4>
            <form>
                <input type='text' id='key_news'>
                <input type='submit' value='Cerca'>
            </form>
            <div class="articoli"></div>
        </section>
<footer> 

<div id="Io">
        @aroundtheworld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="{{ url('recensioni') }}">Dicci come possiamo migliorare</a>
     
      </div>
   </footer>
</body>
</html>

