<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Women Safety</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
  .typewriter h1  {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid grey; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation:
    typing 4.0s steps(40, end),
    blink-caret .75s step-end infinite;
}


/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: black; }
}

@media screen and (max-width: 768px) {
    h1{
        font-size:14px;
        text-align: left;
    }
}
</style>
      </head>
      <body background="https://wallpaper-house.com/data/out/8/wallpaper2you_252334.jpg">
        <nav class="navbar navbar-light navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">
            <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
            Women Safety
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
              </li>-->
        </ul>
        <ul class="navbar-nav ml-auto">
      @if (Route::has('login'))
              @auth
                  <a class="nav-link text-right" href="{{ url('/home') }}">Login</a>
              @else
                  <a class="nav-link d-inline" href="{{ route('login') }}">Login</a>
                  <a class="nav-link d-inline" href="{{ route('register') }}">Register</a>
              @endauth
      @endif
    </ul>

      </div>
    </nav>

    <div class="typewriter text-center container m-5">
<h1>Women deserve equal rights...!</h1>
</div>




        <!--JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>

  </html>
