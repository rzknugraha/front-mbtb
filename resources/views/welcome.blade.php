<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>#BebasTanpaBatas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <style>
            body  {
            background-image: url("{{ asset('images/coming_soon.jpg') }}");
            background-size: cover;

            }
            @font-face {
            font-family: monseratBold;
            src: url("{{ asset('fonts/Montserrat-Bold.woff') }}");
            }
            div {
            font-family: monseratBold;
            }
            .masthead {
                height: 100vh;
                min-height: 500px;
                }
            .ijo{
                color: #14E5AB;
                font-size: xxx-large;
                margin: auto;
            }
            .bgijo{
                background-color: #14E5AB;

            }
            .putih{
                color: white;
                font-size: xxx-large;
            }
            .putihKecil{
                color: white;

            }

        </style>


    </head>

    <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-left">
          <p class="ijo" >#BEBASTANPABATAS</p>
          <p class="ijo" >PREAPARE</p>
          <p class="ijo">YOUR <span class="putih">STORY</span></p>
          <br>

          <form  method="POST" action="/subscribe">
          <div class="input-group mb-13 col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
          </div>
          <div class="input-group mb-13 col-md-6">
                @csrf
            <input type="text" class="form-control" name="email" style="height: 50px;" placeholder="Your Email" aria-label="Your Email" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary bgijo" type="submit">Notify Me!</button>
              </div>
              <p class="putihKecil" >Subscribe to our mailing list to get latest news</p>
          </div>
        </form>

        </div>
      </div>
    </div>
  </header>

</html>
