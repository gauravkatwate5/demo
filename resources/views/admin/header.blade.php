<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin')}}">Home</a>
                    </li>
                </ul>
                <div class="d-flex">
                <h4>Welcome Admin, {{ session('user')->name }}</h4>
                <a href="{{ route('logout') }}" class="btn btn-danger m-1 btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>