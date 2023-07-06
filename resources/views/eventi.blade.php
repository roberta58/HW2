<?php
?>

<html>
    <head>
    <meta charset="utf-8">
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="{{ asset('css/styl.css') }}">
       <!-- <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">-->
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/eventi.js') }}" defer="true"></script>
    </head>
<body>
        <nav>
        <div id="opzioni">
        <a href="{{ url('') }}#news"> news </a>
       </div>

           <div id="menumini">
          <div></div>
          <div></div>
          <div></div>
          </div>
        </nav>   

        <section>
        <h1>Prossimi Eventi</h1>
    <form>
        <input type='text' id='event'>
        <input type='submit' value='Cerca'>
     <div id="cont">
</form>
    <div id="eventi">

                
    </div> 
</div>
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