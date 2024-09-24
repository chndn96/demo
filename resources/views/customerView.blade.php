<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ775PRi8iTwNkeXflgx0KDw0RGtf6Tcnap" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img
                src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                height="16"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;"
            />
        </a>
        <button
            id="uy"
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
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/view')}}">
                        {{session()->get('name')}}
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a href="{{url('/registerUser')}}" type="button" class="btn btn-link px-3 me-2">
                    Login
                </a>
                <a href="{{url('/createCustomer')}}" type="button" class="btn btn-primary me-3">
                    Sign up for free
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="mt-5 container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <form action=""  class="d-flex w-50">
            <input
                type="text"
                name="search"
                id="search"
                class="form-control me-2"
                placeholder="Search"
                value="{{$search}}"
                aria-describedby="helpId"
            />
            <button class="btn btn-primary m-1">Search</button>
            <a href="{{ url('/view')}}" class="btn btn-primary m-1">  reset</a>
        </form>
        <div>
            <a href="{{url('/createCustomer')}}" class="btn btn-primary">Add</a>
            <a href="{{url('/trash')}}" class="btn btn-danger">Go to Trash</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th><b>Name</b></th>
                    <th><b>Email</b></th>
                    <th><b>Gender</b></th>
                    <th><b>Dob</b></th>
                    <th><b>Address</b></th>
                    <th><b>State</b></th>
                    <th><b>Country</b></th>
                    <th><b>Status</b></th>
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr class="p-3">
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{($customer->dob)}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                        @if ($customer->status == "1")
                        <button class="btn btn-success btn-sm">Active</button>
                        @else
                        <button class="btn btn-secondary btn-sm">Inactive</button>
                        @endif
                    </td>
                    <td>
                        <a href="{{ url('/edit/' . $customer->customer_id) }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="{{ url('/delete/' . $customer->customer_id) }}" class="btn btn-danger btn-sm">Trash</a>
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
</div>
</body>
</html>
