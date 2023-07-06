<?php

?>

<html>
    <head>
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="{{ asset('css/registrazion.css') }}">

    
        <link href="https://fonts.googleapis.com/css2?family=Carter+One+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
       <!-- <script src="{{asset('js/signup.js') }}" defer="true"></script>
-->
    <script type="text/javascript">
            const CONTROLLO_ROUTE = "{{route('controlloUsername')}}";
        </script>

        <script type="text/javascript">
            const CSFR_TOKEN = '{{ csrf_token() }}';
        </script>
      </head>
<body>

    
    <section>

    <div id="iscriviti">
        <form action="" name="iscriviti2" method='post'>
    @csrf
  
      <label></label><br>
      <input type="text"placeholder='Nome' name="name" pattern="[A-Za-z ]{2,20}$" title="Il nome deve contenere solo lettere, deve avere una lunghezza minima di 2 e massima di 20">
    <br>
      <label></label><br>
      <input type="text"placeholder='Cognome' name="surname" pattern="[A-Za-z ]{2,20}$" title="Il cognome deve contenere solo lettere, deve avere una lunghezza minima di 2 e massima di 20">
    <br>
    <label> </label><br>
      <input type="text"placeholder='Email' name="email" title="">
    <br>
    
      <label> </label><br>
      <input type="text" placeholder='Username'id="username" name="username" pattern="[A-Za-z0-9]{6,20}$" title="L'username deve contenere solo caratteri alfanumerici, deve avere una lunghezza minima di 6 e massima di 20">
    <br>
   
      <label> </label><br>
      <div class="password"><input type="password"placeholder='Password' name="password" id="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$" title="La password deve contenere minimo 8, massimo 20 caratteri tra cui: una lettera maiuscola, una minuscola, un numero e un carattere speciale">
     </div>
      <br>
     &nbsp; <input type="submit" name="iscrizione" id="iscrizione" value="Iscriviti">
    </form>
    <br>
    <div class="signup">Hai un account? <a href="{{ url('login') }}">Accedi</a>
    </div>
   
    </section>

<footer>
      <div id="Io">
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423
      </div>
   </footer>
</body>
</html>