<html>

<head>  
<link rel="stylesheet" href="{{ asset('css/registrazione.css')}}" > </link> 
<script src="{{asset('js/ConvalidaForm.js')}}"defer="true" ></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet"> </head>
<body>
     
         <div class="c_finestra">
         <h1> REGOLE PER REGISTRARSI</h1>
             <ul>
              <li>Nome:Min 1 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9 . </li> 
              <li>Cognome:Min 1 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9.  </li>
              <li>Nome Utente:Min 5 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9 e _ .  </li>
              <li>Email:Utilizzare mail valida ed esistente. </li>
              <li>Password:Min 5 carattere,Max 15 caratteri.É possibile usare lettere dalla A alla Z sia in minuscolo che maiuscolo.Numeri da 0 a 9 e _ . </li>
            
            </ul> 
        
        </div> 

    <div class="blocco_form">
<div class="informazioni">?</div> 
    <form action="{{url('registrazione')}}" method="POST" class="registrazione_form">
        
  @csrf
<p class="testo_registrazione"> Registrazione</p>

<div class='input'> <input  class='input_form' type='text' name='nome' placeholder='Nome'  id='nome' value='{{old("nome")}}' required> <small class='errore'>   </small> </div>



  <div class='input'> <input class='input_form' type='text' name='cognome' placeholder='Cognome' id='cognome' value='{{old("cognome")}}' required> <small class='errore'>   </small></div>

  <div class='input'>  <input class='input_form' type='text' name='nomeutente' placeholder='Nome utente' id='nomeutente' value='{{old("nomeutente")}}' required> <small class='errore'>   </small> </div>  

  <div class='input'><input class='input_form' type='email' name='email' placeholder='Email'id='email' value='{{old("email")}}' required> <small class='errore'> </small></div>

 <div class='input'><input class='input_form' type='password' name='password' placeholder='Password' id='password' value='{{old("password")}}' required><small class='errore'>   </small></div>

 <div class='input'><input class='input_form' type='password' name='conferma_password' placeholder=' Conferma Password' id='conferma_password' value='' required><small class='errore'>   </small></div>

 <p class='testo_registrazione_login'> Hai già un account? <a href="{{route('login')}}">Accedi qui</a> </p> 



 



<button  name="submit" class="button">Registrati</button> 


</form>
    </div>
</body>
</html>