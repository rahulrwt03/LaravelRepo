<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('cssfiles/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
      h1,h2,p,hr{
        color: #c4c4c4;
      }
    
      .home-container{
        width: 100vw;
         background-color: #1b1b1b;
      }
      header{
        width: 100vw;
        background-color: #000000;
        display: flex;
        justify-content: center;
        
      }
      nav{
        width: 80vw;

      }
      #navbarNav ul li a{
        color: #ffffff;
      }
      .navbar-brand{
        color: #ee0707;
        font-size: 3vh;
      }
      .navbar-brand:hover{
        color: #0000ff;
        font-size: 3vh;
      }
    </style>
</head>
<body>

    {{-- header --}}
    <header class="navbar-light">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About-Me</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Contact-Me</a>
                </li>
              </ul>
            </div>
            <a href="" ><button class="connect">Let's Connect</button></a>
          </nav>

    </header>
    

    <div class="home-container">
        @yield('websitecontent')
    </div>



    {{-- footer --}}
    <footer class="text-center text-white" style="background-color: #1b1b1b;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="light"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="light"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="light"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="light"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="light"
              ><i class="fab fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-light m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="light"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center text-light p-3" style="background-color: rgb(0, 0, 0);">
          © 2020 Copyright:
          <a class="text-light" href="https://mdbootstrap.com/">all right reserved</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>