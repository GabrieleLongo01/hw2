
<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
@yield('head')

</head>


 <body>
    

<nav>
 
    <img class="logo reveal4" src="{{asset('images/logo.png')}}"/> 
     <input class="menu-btn" type="checkbox" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
    </label>
          
    <div  class="menu reveal1">
    
   
        <div class="mediumtext"> <a href="{{route('home')}}"> HOME </a></div>
        <div class="mediumtext"> <a href="{{route('forum')}}">FORUM </a> </div>
         <div class="mediumtext">  <a href="{{route('fucili')}}"> FUCILI </a> </div>
         <div class="mediumtext"> <a href="{{route('pistole')}}"> PISTOLE </a></div>
         <div class="mediumtext"> <a href="{{route('abbigliamento')}}"> ABBIGLIAMENTO</a>   </div>
         <div class="mediumtext"> <a href="{{route('regole')}}">REGOLE E MODALITÀ </a> </div>


         
         @if(isset($user_nomeutente))

                    <div class="mediumtext"> <a href="{{ route('logout') }}">LOGOUT</a></div>
                    @else
                    <div class="mediumtext" > <a href="{{ route('login') }}">LOGIN</a></div>

                    @endif



         
        </div>

        

</nav>

<section>
    @yield('sezione')

</section>



<footer>
    <div class="main-carousel reveal1">
        <div class="fucili"> <a href="{{route('fucili')}}"> FUCILI </a> </div>
        <div class="pistole"> <a href="{{route('pistole')}}"> PISTOLE </a> </div>
        <div class="abbigliamento"> <a href="{{route('abbigliamento')}}">ABBIGLIAMENTO </a> </div>
        <div class="regole"> <a href="{{route('regole')}}">REGOLE E MODALITÀ</a> </div>
        <div class="contatti"> <a href="{{route('forum')}}"> FORUM </a> </div>
        
        
        
      </div>

</footer>
 </body>
</html>
