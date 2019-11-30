<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" defer></script>
      </head>
    <body >
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm">
              <div class="container">
                    <a class="navbar-brand" href="#">FOODS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                                        
                      </ul>
                      <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>                    
                        </ul>
                      </div>
                    </div>
                  </nav>

                  <div class="row justify-content-center" >
                    <div class="col-10"style="font-size:100px; color:dark">
                        HEALTHY FOOD SYSTEM
                    </div>                   
                    </div>
                  <div class="row justify-content-center">
                    <div class="col-md-12">
                        <img src="2.jpg" alt="" width="100%" height="500px">  
                      </div>                
                 </div>  
               
                               
        </div>
    </body>
</html>
