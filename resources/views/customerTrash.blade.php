<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ775PRi8iTwNkeXflgx0KDw0RGtf6Tcnap" crossorigin="anonymous">
    <!-- Custom CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">


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
        <a class="nav-link" href="{{url('/view')}}">
          {{session()->get('name')}}
        </a>
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




    <div class=" mt-5 container">
    <div
        class="table-responsive"
    >

     <a href="{{url('/view')}}">
 <button class="btn mb-3 btn-primary"> customer view</button>
    </a>

        <table class="table table-primary">

            <thead>
                <tr>
                    <th> <b>Name </b></th>
                    <th> <b>Email </b></th>
                    <th> <b>Gender </b></th>
                    <th> <b>Dob </b></th>
                    <th> <b>Address </b></th>
                    <th> <b>State </b></th>
                    <th> <b>Country </b></th>
                    <th> <b>Status </b></th>
                    <th> <b>Action </b></th>


                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr class="p-3">
                    <td >{{$customer ->name}}</td>
                    <td>{{$customer ->email}} </td>
                    <td>{{$customer ->gender}}</td>
                    <td>{{get_formated_date($customer ->dob, "d-M-Y")}}</td>
                    <td>{{$customer ->address}}</td>
                    <td>{{$customer ->state}}</td>
                    <td>{{$customer ->country}}</td>
                    <td>
                       @if ($customer ->status == "1" )
                     <button>  Active </button>
                        @else
                       Inactive
                       @endif
                    </td>
                    <td>
                      <a href="{{ url('/restore/' . $customer->customer_id) }}">  <button class="btn btn-success">Restore</button> </a>

                        <a href="{{ url('/forcedelete/' . $customer->customer_id) }}">
    <button type="button" class="btn btn-danger">Delete</button>
</a>


                </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="row justify-content-center">
            <div class="col-auto">
                {{ $customers->links('pagination::bootstrap-4') }}
            </div>
    </div>

        </div>

</body>
</html>
