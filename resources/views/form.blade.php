
<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ775PRi8iTwNkeXflgx0KDw0RGtf6Tcnap" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
            display: flex;
            padding: 10px;
        }
        .form-container {
          background-color: #2CD07C; /*  Vibrant background color */ 
            padding: 4rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff;
        }
        .form-container .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
    

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">


<!-- Container wrapper -->
<div class="container">
  <!-- Navbar brand -->
  <a class="navbar-brand me-2" href="https://mdbgo.com/">
    <img
      src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
      height="16"
      alt="MDB Logo"
      loading="lazy"
      style="margin-top: -1px;"
    />
  </a>

  <!-- Toggle button -->
  <button
    data-mdb-collapse-init
    class="navbar-toggler"
    type="button"
    data-mdb-target="#navbarButtonsExample"
    aria-controls="navbarButtonsExample"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <i class="fas fa-bars"></i>
  </button>

  <!-- Collapsible wrapper -->
  <div class="collapse navbar-collapse" id="navbarButtonsExample">
    <!-- Left links -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/view')}}">Dashboard</a>
      </li>
    </ul>
    <!-- Left links -->

    <div class="d-flex align-items-center">
      <a  href="{{url('/registerUser')}}" type="button" class="btn btn-link px-3 me-2"> 
        Login
</a>
      <a  href="{{url('/createCustomer')}}"  type="button" class="btn btn-primary me-3">
        Sign up for free
</a>
     
    </div>
  </div>
  <!-- Collapsible wrapper -->
</div>
<!-- Container wrapper -->
</nav>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

</html>





    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form action="{{ url('/register') }}" method="post" class="form-container">
            @csrf
        
            <x-input type="text" name="name" label="Name" />
            <x-input type="email" name="email" label="Email" />
            <x-input type="password" name="password" label="Password" />
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK3E9D2x8y7Bz0ZJ2U0K4M5xgF8r8KxN5AA2IV8yg8PS68j" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UOa5I5b7eiV0C3g2zYB0V5c5O08I4qP4J5K8T5Ai8U5iW1k8J0O/N5O3Yox27G5J" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-xsqFBx/O8zY1sYL1E6N5Xq+oXK5j+xz0x1H0hz9iZVVtEwB5k3I7H0z4O9A6yV6" crossorigin="anonymous"></script>
</body>
</html>
