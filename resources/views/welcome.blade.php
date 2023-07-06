<?php
?>
<html>
    <head>
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="{{ asset('css/mhw1.css') }}" >
        <link href="https://fonts.googleapis.com/css2?family=Carter+One+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        

    </head>
<body>
        <nav>
        <div id="opzioni">
        <a href="{{ url('login') }}#news"> news </a>
           <a href="{{ url('login') }}#Io"> contatti </a>
         <a href="{{ url('login') }}" class='button'>Accedi</a>
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
    <section>
    <span id="avventura"><a href="{{ url('login') }}"><img class="i1" src="immagini/avventura.jpeg"> </a><h2>In cerca di avventura?</h2><br><h3>Sei alla ricerca delle
        avventure più stupefacenti in giro per il mondo?<br> Parti per la tua avventura da solo o con un piccolo gruppo.<br>
        Itinerari insoliti per chi ama scoprire gli angoli meno conosciuti del mondo!<br>Boschi, montagne, laghi, ghiacciai, 
        vulcani, scroscianti cascate, impenetrabili foreste tropicali e tanto altro ancora.</h3><a href="{{ url('login') }}">
            <h6>Scopri di più...</h6></a></span>
    <span id="cultura"><a href="{{ url('login') }}"><img class="i2" src="immagini/cultura.jpeg"></a><h5>Alla scoperta del passato...</h5><br><h4> Viaggi che hanno un 
        importante aspetto storico, artistico o culturale. <br> Tra antichi siti archeologici e rovine, templi, monumenti, 
        monasteri e chiese.<br> Dalle rovine Maya alle grandi capitali europee ricche di storia ed arte, dalle piramidi di 
        Giza ai templi di Angor Wat, dalla magica Petra alle antiche città carovaniere dell'Uzbekistan, dalla Grande 
        Muraglia al misticismo dei monasteri tibetani.</h4><a href="{{ url('login') }}"><h6> Scopri di più...</h6></a></span>
    <span id="divertimento"><a href="{{ url('login') }}"><img class="i3" src="immagini/divertimento.jpeg"></a><h2>Divertimento assicurato!</h2><br><h3>Goditi una 
        vacanza divertente alla scoperta di ritmi di vita nuovi e coinvolgenti.<br> Per tutti quelli che desiderano un viaggio
        all’insegna del divertimento è il momento di partire alla volta di una di queste fantastiche destinazioni.Tantissime 
        mete per vivere il viaggio più bello e divertente della tua vita!<br> Preparati a partire per una vacanza che non si
         potrà descrivere, ma soltanto vivere!</h3><br><a href="{{ url('login') }}"><h6>Scopri di più...</h6></a> </span>
    <span id="relax"><a href="{{ url('login') }}"><img class="i4" src="immagini/relax.jpeg"></a><h5>Sole, mare e... relax</h5><br><h4>Goditi un po' di serenità in 
        rilassanti località balneari, tra splendide spiagge e mari cristallini<br> Per chi vuole un viaggio stress-free e 
        vuole partire alla scoperta dei mari piu belli del mondo.<br>Il vicino Egeo tra Sporadi e Costa Turchese, l'atmosfera 
        paradisiaca della Polinesia e dei Caraibi, gli atolli delle Maldive, la vivace Zanzibar, le rilassanti spiagge del 
        Kerala e tanto altro ancora. </h4><a href="{{ url('login') }}"><h6>Scopri di più...</h6></a> </span>        
    </section>

<footer> 

<div id="Io">
        @aroundtheworld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="{{ url('login') }}">dicci come possiamo migliorare</a>
      </div>
   </footer>
</body>
</html>

