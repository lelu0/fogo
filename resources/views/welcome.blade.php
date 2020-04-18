<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/app.css" />
    <title>FOGO ESPORTS</title>
</head>

<body>
    
    <div class="container">

        <div class="row" id="top">
            <div class="col-md-4 offset-md-8 col-sm-12 align-self-center">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link first-link" href="#top">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#drivers">DRIVERS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#series">SERIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#results">RESULTS</a>
                      </li>
                  </ul>
            </div>
        </div>
        <div class="row" id="about">
            <div class="col-md-3 offset-md-1 col-sm-12" id='logo'>
                
            </div>
            <div class="col-md-7 offset-md-1 col-sm-12" id='about-text'>
                <h1>ABOUT US</h1>
               <p>Fogo Esports is a project founded by people who love competition online and in real life!
                The idea of ​​Fogo Esports is to have fun in front of the monitor but also to develop your skills in the sphere of simulation.
               </p><p>                
                We will currently participate in races on the Assetto Corsa platform.         
                We would like to focus primarily on equal, good driving so that each of our next races will be a race that brought us great joy and satisfaction from a job well done.</p>
            </div>
        </div>
        <div class="row" id="social">
            <div class="col-md-1 offset-md-1 col-sm-12">     
                <h2>SOCIALS</h2>       
            </div>
            <div class="col-md-2 offset-md-1 col-sm-12" id='fb'  onclick="window.location='https://www.facebook.com/fogo.esports/'">                
            </div>
            <div class="col-md-2 col-sm-12" id='ig' onclick="window.location='https://www.instagram.com/fogo.esports/'">                
            </div>
            <div class="col-md-2 col-sm-12" id='yt' onclick="window.location='https://www.youtube.com/channel/UCB6BCNVM2PA6CkcSAb_m5lg'">                
            </div>
            
        </div>
       
        <div class="row" id="drivers">
            <div class="col-md-1 offset-md-1 col-sm-12">
                <h2>DRIVERS</h2>
            </div>

            <div class="col-md-4 col-sm-12 driver">
                <img src="gfx/hex-logo.png" class="img-fluid" />
                <h3>Damian Borkowski</h3>
                <p>Age: 28</p>
                <p>Location: Wroclaw</p>                
                
            </div>
            <div class="col-md-4 col-sm-12 driver">
                <img src="gfx/drv2.png" class="img-fluid" />
                <h3>Kamil Paczos</h3>
                <p>Age: 25</p>
                <p>Location: Wroclaw</p>    

            </div>
        </div>
        <div class="row" id="series">
            <div class="col-md-5 offset-md-7 col-sm-12">
                <h1>SERIES</h1>
                <h2>CURRENTLY WE ARE PARTICIPATING IN:</h2>
                <ul id="series-list">
                    @foreach ($leagues as $league)
                        <li><img src="gfx/comb.png" class="list-icon"/><a href="{{ $league->link }}" target="_blank">{{ $league->league_name }}</a></li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
        <div class="row" id="results">
            <div class="col-md-12">
                <h1>LASTEST RESULTS</h1>
                <ul id="results-list">
                @foreach ($results as $result)
                    <li><span>{{ $result->race }}</span> {{ $result->result }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>
</html>
