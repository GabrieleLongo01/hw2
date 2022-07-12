<html>
    <head>   <script src="https://apis.google.com/js/api.js"></script>
    <link rel="stylesheet" href="{{asset('css/youtube.css')}}"> </link>
    <script src="{{asset('js/youtube2.js')}}" defer="true"></script>
</head>
    <body>
       
    <nav>
 
    
 <div  class='menu reveal1'>
 
     <div class='mediumtext'> <a href="{{route('home')}}"> TORNA ALLA HOME </a></div>
    
    
       
     </div>

</nav>


<div class='video'>

<div class='video__content' >

     <h1 class='bigtext'>  VIDEO SOFTAIR</h1>


  
    
 </div>
<video autoplay muted loop id='myvideo'> <source src="{{asset('images/youtube2.mp4')}}" type='video/mp4'> </video>


</div>


<section class='videoyt'></section>
    

    </body>
</html>