
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#" style="color: white">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/" style="color: white">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('aboutpage')}}" style="color: white">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contactpage')}}" style="color: white">Contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('gallerypage')}}" style="color: white">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('registerpage')}}" style="color: white">Register</a>
      </li>
    
     
    </ul>
  </div>
</nav>
    <br>
    <center><h1>Registration form</h1></center>
    <form action="http://127.0.0.1:8000/register" method="POST">
      @csrf
        <div class="container">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
          <span class="text-danger">
            @error('name')
            {{$message}}  
            @enderror
          </span>
          <br>
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
          <span class="text-danger">
            @error('email')
            {{$message}}  
            @enderror
          </span>
          <br>
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" value="{{old('password')}}">
          <span class="text-danger">
            @error('password')
            {{$message}}  
            @enderror
          </span>
          <br>
          <label for="exampleInputPassword1" class="form-label">Gender</label>
          <input type="taxt" name="gender" class="form-control" id="exampleInputPassword1" value="{{old('gender')}}">
          <span class="text-danger">
            @error('gender')
            {{$message}}  
            @enderror
          </span>
        <br>
        <button type="submit" class="btn btn-warning" style="color: white">Submit</button>
    </div>
      </form>

<a href="/" style="text-decoration: none">go to home page</a>