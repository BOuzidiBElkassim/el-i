<html>
    <head>
        <meta charset="utf-8">        
        <link rel="stylesheet" href="{{asset('css/eventpage.css')}}">
    </head>

<body>

        @extends('layout')

        @section('content')

<div class="gird-container">
        <div class="gird-item gird-item-1 image">
        </div>  
        <div class="gird-item gird-item-2">
            <h1>Description de l'event</h1>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
        Nam sapiente, culpa rem molestiae soluta architecto iure, 
        saepe cumque atque quidem accusamus veritatis suscipit consectetur 
        fuga doloribus molestias assumenda. Excepturi, recusandae.
       </div>  

        <div class="gird-item gird-item-3">
        <h1>Infos event</h1>
        <div class="infos">
        <ul>
            <li>Heure :</li>
            <li>Date :</li>
            <li>Thème :</li>
            <li>Location :</li>
            <li>Effectif : min/max</li>
        </ul>
        </div>
        <div class="location">
        </div> 
        </div>  
        <div class="gird-item gird-item-4 inscrire">
            <button>s’inscrire / se désinscrire d'un événement</button> <br>
            <div class="rat">
                <form class="stars" action="">
                        <p>Rating system</p>

                        <input type="radio" class="star star-5" id="star-5" name="star">

                        <label for="star-5" class="star star-5"></label>

                        <input type="radio" name="star" class="star star-4" id="star-4">

                        <label for="star-4" class="star star-4"></label>

                        <input type="radio" name="star" class="star star-3" id="star-3">

                        <label for="star-3" class="star star-3"></label>
                        
                        <input type="radio" name="star" class="star star-2" id="star-2">

                        <label for="star-2" class="star star-2"></label>

                        <input type="radio" name="star" class="star star-1" id="star-1">

                        <label for="star-1" class="star star-1"></label>
                    </form>
            </div>

        </div>  
    </div>

</body>
@endsection