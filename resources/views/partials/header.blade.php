<header id="header">
    <div class="header-topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-between">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Recipes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('drinks') }}">Drinks</a>
                                <a class="dropdown-item" href="{{ route('noodles') }}">Noodles</a>
                                <a class="dropdown-item" href="{{ route('dessert') }}">Dessert</a>
                                <a class="dropdown-item" href="{{ route('salad') }}">Salads</a>
                                <a class="dropdown-item" href="{{ route('snacks') }}">Snacks</a>
                                <a class="dropdown-item" href="{{ route('rice') }}">Rice</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cuisines
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/cuisine/indian') }}">Indian</a>
                                <a class="dropdown-item" href="{{ url('/cuisine/chinese') }}">Chinese</a>
                                <a class="dropdown-item" href="{{ url('/cuisine/japanese') }}">Japanese</a>
                                <a class="dropdown-item" href="{{ url('/cuisine/italian') }}">Italian</a>
                                <a class="dropdown-item" href="{{ url('/cuisine/thai') }}">Thai</a>
                            </div>
                        </li>
                        
                    </ul>
                    <ul class="header-user-menu">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/signup') }}">Signup</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-logobar py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-left mb-2 mb-md-0">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{ asset('images/site-images/logo.png') }}" alt="SavorVerse" width="80px">
                    </a>
                </div>
                <div class="col-md-8 align-self-center">
                <form action="{{ route('search-recipes') }}" method="GET" class="search-form">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search here....." required>
        <div class="input-group-append">
            <input type="submit" class="btn" value="Search">
        </div>
    </div>
</form>
                </div>
            </div>
        </div>
    </div>
</header>