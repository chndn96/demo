<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
    <style>
        form {
            padding: 5px 300px 0 300px;
            overflow-y: auto;
            /* height: 30rem; */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="16" alt="MDB Logo" loading="lazy" style="margin-top: -1px;">
        </a>
        <!-- Toggle button -->
        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/view') }}">Dashboard</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a href="{{ url('/registerUser') }}" class="btn btn-link px-3 me-2">Login</a>
                <a href="{{ url('/createCustomer') }}" class="btn btn-primary me-3">Sign up for free</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    @if(Route::currentRouteName() == 'edit.customer')
    <h1>Update Customer</h1>
    @else
    <h1>Create a new Customer</h1>
    @endif

    <form action="{{ Route::currentRouteName() == 'edit.customer' ? route('usersData') : route('create.customer') }}" method="POST">

        @csrf
        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $customer['name'] ?? '') }}" required maxlength="60">
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $customer['email'] ?? '') }}" required maxlength="100">
        </div>
        <div class="mb-3">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" class="form-select">
                <option value="M" {{ (old('gender', $customer['gender'] ?? '') == 'M') ? 'selected' : '' }}>Male</option>
                <option value="F" {{ (old('gender', $customer['gender'] ?? '') == 'F') ? 'selected' : '' }}>Female</option>
                <option value="O" {{ (old('gender', $customer['gender'] ?? '') == 'O') ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', $customer['address'] ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="state">State:</label>
            <input type="text" id="state" name="state" class="form-control" value="{{ old('state', $customer['state'] ?? '') }}" maxlength="255">
        </div>
        <div class="mb-3">
            <label for="country">Country:</label>
            <input type="text" id="country" name="country" class="form-control" value="{{ old('country', $customer['country'] ?? '') }}" maxlength="255">
        </div>
        <div class="mb-3">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" class="form-control" value="{{ old('dob', $customer['dob'] ?? '') }}">
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form-control" {{ Route::currentRouteName() == 'edit.customer' ? '' : 'required' }}>
        </div>
        @if(Route::currentRouteName() == 'edit.customer')
            <input type="hidden" name="customer_id" value="{{ $customer['customer_id'] }}">
        @endif
        <button type="submit" class="btn btn-success w-100">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>
</html>
