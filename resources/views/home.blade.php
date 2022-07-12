

@extends('layouts.layouts')
    @section('head')
        
        <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDh58QklIwchmHBNuNA6Hfukeink6klIyU"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="{{asset('js/softair.js')}}" defer="true"></script>
        <script src="{{asset('js/map.js')}}" defer="true"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="{{asset('css/softair.css')}}"> </link>
        
       


   @endsection

    
        


@section('sezione')

<div class="video">
    <div class="video__content reveal1" >
  @if(isset($user_nomeutente)) <h1 class='bigtext'> Benvenuto {{$user_nomeutente['nomeutente']}}</h1>  @else 
       <h1 class='bigtext'> SOFTAIR</h1>

    @endif
     
       
    </div>

    <video autoplay muted loop id="myvideo"> <source src="{{asset('images/video-back.mp4')}}" type="video/mp4"> </video>
</div>




<div class="blocco1 ">

<div class="img__1 reveal1">
<img src="{{asset('images/img1.jpg')}}" >
</div>

<div class="contenuto__1 reveal4">
<h3 class="bigtext"> Cos'è il softair?</h3>


<p> Il softair è un’attività sportiva/ricreativa che consiste nel riprodurre uno scontro a fuoco impiegando armi ed equipaggiamenti che garantiscono l’incolumità dei partecipanti.La competizione si svolge quasi sempre all’aperto, tendenzialmente in boschi o in aree urbane circoscritte, lontane da cose o persone che possano subire danni.

    Generalmente, il softair simula un conflitto armato tra due o più fazioni contrapposte, ognuna caratterizzata da alcuni segni distintivi (ad esempio, il colore delle armi o del caschetto protettivo) che consentono ai contendenti di fronteggiarsi adoperando strategie e tattiche militari. <a href="{{route('youtube')}}" class="youtube" > Scopri di più.</a>
</p></div>




</div>



<div class="blocco2  ">

  <div class="titolo2">
      
  </div>
    
    <div class="contenuto__2 reveal3">
    <h4 class="mediumtext"> Cosa sono le ASG?</h3>
    
    
    <p> ASG è l'acronimo di Air Soft Gun: sono delle riproduzioni di pistole e fucili, prevalentemente in plastica (più economiche) o prevalentemente in metallo (riproduzione più fedele, più pesanti e più robuste).

        Le ASG sparano pallini in plastica. I pallini hanno un diametro di 6 mm. e il loro peso varia tra i 0,12 ed i 0,30 grammi.
        Le armi softair possono essere a colpo singolo, semiautomatiche o a raffica (a seconda del modello).
        Le repliche softair possono essere a molla, a gas o elettriche (con batterie ricaricabili).
        Non sono assolutamente da confondere con le armi ad aria compressa: le ASG hanno una potenza molto bassa (inferiore ad 1 Joule) e sono innocue. Non necessitano di alcuna licenza o autorizzazione, ma possono essere vendute solo ai maggiori di 16 anni.Le pistole vengono solitamente utilizzate per il tiro al bersaglio (sono spesso utilizzate nei luna parks), per collezionismo o come "arma di supporto" nei Combats. I fucili invece vengono principalmente utilizzati per i Combats.
    
    </p>
    <h4 class="mediumtext"> Cosa sono i Combats?</h3>
    <p> Sono delle avvincenti "simulazioni di guerra" in cui una o più squadre hanno un obiettivo da raggiungere (per esempio: conquistare un fortino, liberare un ostaggio, stanare un cecchino, annientare la squadra avversaria, eccetera): chi viene colpito si auto dichiara "colpito" ed esce dal gioco.
    </p>
    <h4 class="mediumtext"> Cosa serve per cominciare a praticare il Soft Air?</h3>
    <p> E' sufficiente acquistare un fucile (con caricatore maggiorato, batteria e caricabatteria, se non compresi con il fucile): alcuni clubs hanno comunque armi di squadra da noleggiare ai neo-iscritti.
        Sono necessarie le protezioni per il viso: occhiali o meglio ancora una maschera protettiva.
        E' consigliabile indossare abbigliamento comodo, protettivo e in colori adeguati (verde e sabbia principalmente, permettono di mimetizzarsi nelle ambientazioni boschive).
        Inoltre è consigliabile indossare scarponi comodi con una suola tassellata per evitare di scivolare.
        Ovviamente una mimetica militare e degli anfibi rispondono perfettamente alle caratteristiche e sono l'ideale.
        Per completare l'attrezzatura è consigliabile avere un paio di guanti protettivi e, per chi giocasse in un ambiente urbano, ginocchiere ed elmetto.
        L'attrezzatura elencata è sufficiente per cominciare. In seguito, per chi volesse completare l'equipaggiamento da softair, è utile aggiungere un tattico con tasche per contenere i caricatori di riserva ed i pallini di scorta.
    </p>
    
  </div>

</div>

 





<div class="map reveal4">
    <p class="normaltext"> 
        Non sai dove comprare l'attrezzatura giusta?Controlla la mappa e scegli il negozio più vicino a te!
    </p>
<div id="map" style="width:100%; height: 800px;"></div></div>

@endsection





