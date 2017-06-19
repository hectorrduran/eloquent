<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
        <title>Laravel eloquent</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
      <nav class="navbar-inverse navbar-inverse navbar-fixed-top">
          <div class="container">
              <a href="{{route('home')}}" class="navbar-brand">Eloquent ORM</a>
              <ul class="nav navbar-nav">
                  <li>
                      <a href="{{route('home')}}">Home</a>
                  </li>

              </ul>
          </div>
      </nav>
      <div class="jumbotron">
        <div class="container">
            <h1>Curso Eloquent ORM</h1>
            <p>Texto</p>
        </div>    
      </div>
      
      <div class="container">
        @yield('content');
       </div>


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
