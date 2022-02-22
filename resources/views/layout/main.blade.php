<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">


    <title>Document</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
      <div class="navbar-brand">
      <img src="{{asset('asset/img/nft-logo.png')}}" alt="" width="80" height="80">
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold ">
        <li class="nav-item ">
          <a class="nav-link  m-4" href="{{ 'home' }}">Home</a>
            </li>
        <li class="nav-item">
          <a class="nav-link  m-4" href="{{ 'project' }}">Our Project</a>
            </li>
        <li class="nav-item">
          <a class="nav-link  m-4" href="{{ 'about' }}">About</a>
            </li>
        <li class="nav-item">
          <a class="nav-link  m-4" href="{{ 'login' }}">Login</a>
             </li>
      </ul>
          </div>
            </div>
      </div>
      <div>
    </nav>
  </header>
@yield('mainweb')

</body>
</html>