<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token ()}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <title>MASTER</title>
  </head>
  <body>
    

    <head>

        <nav class="navbar navbar-expand-lg navbar-light bg-primary text-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">
                <img class= "imagen" src="{{asset('img/chilquinta.png')}}" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  <a class="nav-link" href="{{route('registrar_lectura')}}">Registrar Lecturas</a>
                  <a class="nav-link" href="{{route('mediciones_existentes')}}">Mediciones Existentes</a>
                </div>
              </div>
            </div>
          </nav>

    </head>

    <main class="container-fluid">
        @yield("contenido")
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    @yield('javascript')

  </body>
</html>