<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ProjetWebTest</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
        <header>
        <div class="container">
        <div id="logo">

        <h1> le titre de  logo</h1>
        </div>

        <nav>

            <ul>

                <li><a href="/"> HOME</a></li>
                <li><a href="/search"> Recherche</a></li>
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

    <section id="showcase">
        <div class="container">

            <h1>Faire partager des expériences en direct</h1>
        </div>

    </section> 
    <section id="showcase2">
            <div class="container">
    
                <p>FdsEvent est une plateforme  spécialisée dans les expériences partagées qui permet à chaque étudiant de la FDS  de créer, partager, trouver et participer à des événements qui nourrissent ses passions et enrichissent ses expériences. Festivals de musique, marathons, conférences, rassemblements communautaires, concours de jeux ou encore de guitare , notre mission est de rassembler les étudiants autour d'expériences partagées.</p>            
            </div>
    
        </section>   
    <section id="newsletter">
            <div class="container">
                <h1>welocome to newsletter </h1>
                <form>
                    <input type="email" placeholder="Enter Email...">
                    <button type="submit" class="boutton1">Qubscribe</button>


                </form>
                


            </div>



    </section>

    <section id="theboxes">
            <div class="column">
                    <img src="./img/11.png">
                    <h1>welcome to our web site </h1>
                    <p>siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.</p>
            </div>
            <div class="column">                    <img src="./img/22.png">
                    <h1>welcome to our web site </h1>
                    <p>siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.</p>
            </div>
            <div class="column">                    <img src="./img/33.png">
                    <h1>welcome to our web site </h1>
                    <p>siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.</p>
            </div>

    </section>


<footer>

        <div class="contact">

            <div>
                <i class="fa fa-map-marker"></i>
                <p>1516 avenue Augustin Fliche</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+33767326289</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p>bouzidibelkassim@gmail.com</p>
            </div>



        </div>


    <div class="about">
        <h3>About the comapny</h3>
        <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
        <div class="social-boutton">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>




        </div>

        
    </div>    



    </div>


</footer>
    </body>
</html>
