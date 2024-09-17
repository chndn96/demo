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
