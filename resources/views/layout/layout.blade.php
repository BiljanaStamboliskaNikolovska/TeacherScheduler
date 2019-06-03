<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>@yield('title', 'Teacher`s Appointments')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
<a class="navbar-brand" href="#">
    <img src="..\images\teacher logo.jpg" width="50" height="50" class="d-inline-block align-top" alt="">
   
  </a>
  <span class="navbar-brand mb-0 h1">School name</span>
  <a class="navbar-brand mb-0" href="/">Home</a>

  <div class="collapse navbar-collapse" >
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item mb-0 h5">
        <a class="nav-link"  href="/create">Create a teacher </a>
      </li>
      <li class="nav-item mb-0 h5">
        <a class="nav-link" href="/createSubject">Create a class</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  
@yield('content')

@stack('scripts')


</body>
</html>