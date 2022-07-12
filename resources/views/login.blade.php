<html>

<head>  <link rel="stylesheet" href="{{asset('css/registrazione.css')}}"> </link> 
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&family=PT+Sans+Narrow:wght@700&display=swap" rel="stylesheet"> </head>
<body>
    <div class="blocco_form2">

    <form action="{{url('login')}}" method="POST" class="registrazione_form">

<p class="testo_registrazione"> Accesso</p>

@csrf



 <div class="input">  <input   class="input_form" type="text" name="nomeutente" placeholder="Nome utente" value="" required>  </div>



<div class="input"><input  class="input_form" type="password" name="password" placeholder="Password" value="" required></div>

 
@if($errors->any())
@foreach($errors->all() as $error)
<small class='errore'>{{$error}}<small>
    @endforeach
    @endif
<p class="testo_registrazione_login"> Non hai ancora  un account? <a href="{{route('registrazione')}}">Registrati qui</a> </p>








<button  name="submit" class="button">Accedi</button>
</form>
    </div>
</body>
</html>