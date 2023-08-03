<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
            <a class="navbar-brand" href="{{ route('messages.index') }}">Message Blog</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.create') }}">Create Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('broadcast-log.index') }}">Broadcast Log</a>
                    </li>
                </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col pt-5 pb-5">
          @yield('content')
        </div>
      </div>
    </div>    

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>