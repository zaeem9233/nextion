<!-- Navigation Bar with Dropdown -->
<nav class="navbar navbar-expand-lg bg-custom-primary bottom-shadow text-light">
  <div class="container-fluid">
        <a class="navbar-brand navbar-brand-custom bg-light" href="#">
            <img src="/images/logo.png" alt="" width="180" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Dropdown with profile image -->
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle btn btn-default text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Posts
                    </button>
                    <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Dropdown with profile image -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="images/profile.png" alt="Profile" class="rounded-circle" width="30" height="30">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        
                        <div class="dropdown-divider"></div>

                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                            @csrf
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit()">
                                Logout
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
  </div>
</nav>