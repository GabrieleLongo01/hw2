
@extends('layouts.layouts')


  @section('head')
    <link rel="stylesheet" href="{{asset('css/forum.css')}}"> </link>
  
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.min.css" integrity="sha512-fJcFDOQo2+/Ke365m0NMCZt5uGYEWSxth3wg2i0dXu7A1jQfz9T4hdzz6nkzwmJdOdkcS8jmy2lWGaRXl+nFMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://apis.google.com/js/api.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="{{asset('js/forum.js')}}" defer="true"></script>
    
   @endsection



@section('sezione')


    <div class="video">
        <div class="video__content reveal1" >
    
         <h1 class="bigtext"> FORUM</h1>
           
        </div>
    
        <video autoplay muted loop id="myvideo"> <source src="{{asset('images/contatti.mp4')}}" type="video/mp4"> </video>
    </div>

   

   <div id="container_tabella"> </div> 
   <div id="form_modifica"> </div>

   <div id="sessione_utente">
   @if(isset($user_nomeutente))
        <div data-session-id={{$user_nomeutente['nomeutente']}}></div>
      @endif
  <div>


  
   
   
   
   @if(isset($user_nomeutente))

 <form method='POST' action="{{url('forum')}}" class='form_commenti' id='myform'> 
    @csrf
 <input type='hidden' name='commento_id' value = ''>
    <input type='hidden' name='id_utente' value ="">  
    <input type='hidden' name='data' value ="">  
    <textarea name='messaggio' id='messaggio' class='normaltext' ></textarea> <br>
    <input type='submit' name='invia_commenti' class='bottone_commenti normaltext' id='btn_commenti' value="INSERISCI COMMENTO">
</form> 
 @else <p class='text-commenti normaltext'> Accedi per chattare con altri utenti. </p> <div class='text-commenti normaltext'> <a href='/login' class='a_login'>LOGGA </a>  </div>  
   @endif
    
@endsection




 

