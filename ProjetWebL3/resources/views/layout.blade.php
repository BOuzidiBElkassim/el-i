
<html>
<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viweport" content="width=device-width">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer1.css')}}">      
        <link rel  ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/f02947e5f2.js" crossorigin="anonymous"></script> 
 </head>

<body>

    <header>
        <div class="container">
        <div id="logo">

        <h1> le titre de  logo</h1>
        </div>

        <nav>

            <ul>

                <li><a href="/"> HOME</a></li>
                <li><a href="/search"> RECHERCHE</a></li>
                @if (Route::has('login'))
                @auth
                <a href="{{url('/home')}}"></a>
                @else 
                <li><a href="{{route('login')}}">Sing UP/IN</a></li>
                @endif
                @endauth

            </ul>


        </nav>


        </div>

        
    </header>
    @yield('content')
    <!-- 
    <div class="footer">
                <div class="inner-footer">
            
            
            
                    
                        <div class="footer-items">
            
                                <h1>Hello guys!!</h1>
                                <p> Hello guys!!
                                        This video shows you how you can 
                                        create a Responsive footer section
                                        Hope this video is clear to you.
                                </p>
                    
                    
                    
                    
                            </div>
                            
            
            
            
                        <div class="footer-items">
            
                                <h2>Quick links </h2>
                                <div class="border"></div>
                                <ul>
                                    <a href=""><li> Home </li></a>
                                    <a href=""><li> Home </li></a>
                                    <a href=""><li> Home </li></a>
                                    <a href=""><li> Home </li></a>
            
            
                                </ul>
                                
                    
                    
                    
                    
                        </div>
                        <div class="footer-items">
            
                                <h2> Contacter Nous </h2>
                                <div class="border"></div>
                                <ul>
                                   <li><i class="fas fa-map-marked-alt"></i> 1516 avenue augusstin fliche</li>
                                   <li><i class="fas fa-sms"></i> +33-7-673-262-89</li> 
                                   <li><i class="fas fa-envelope"></i> support@evarois.fr </li> 
                                </ul>
                                <div class="social-media">
                                    <a href=""><i class="fab fa-facebook-square"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-twitter-square"></i></a>
            
            
            
                                </div>
                                
                    
                    
                    
                    
                        </div>
                        
            
            
            
            
            
            
            
            
            
            
            
            
            
                </div>
                <div class="footer-bottom">
            
                        Copyright &copy; El i & Co 2019 , All right reserved.
                    </div>            
            
            
            
            
            
            
            

                </div> -->
</body>

</html>