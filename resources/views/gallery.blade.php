
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" style="color: white" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" style="color: white" href="/">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white" href="{{route('about')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white" href="{{route('contact')}}">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white" href="{{route('gallery')}}">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: white" href="{{route('register')}}">Register</a>
        </li>
       
      </ul>
    </div>
  </nav>
<h1>Gallery page</h1>
