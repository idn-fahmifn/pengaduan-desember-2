<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive Admin Dashboard Template">
  <meta name="keywords" content="admin,dashboard">
  <meta name="author" content="stacks">
  <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <!-- Title -->
  <title>Circl - Responsive Admin Dashboard Template</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
  <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">


  <!-- Theme Styles -->
  <link href="{{asset('assets/css/main.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">


</head>

<body>
  <div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
      <span class='sr-only text-primary'>Loading...</span>
    </div>
  </div>

  <div class="page-container">
    <div class="page-header">
      <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="" id="navbarNav">
          <ul class="navbar-nav" id="leftNav">
            <li class="nav-item">
              <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
            </li>

            <li class="nav-item">
              <div class="logo">
                <a href="{{route('dashboard')}}">
                  <img src="https://www.idn.id/storage/2022/11/LOGO-ID-Networkers-IDN.ID_.png" width="150" alt="Logo Aplikasi">
                </a>
              </div>
            </li>

          </ul>
        </div>

        <div class="" id="headerNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                <form>
                  <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                </form>
                <h6 class="dropdown-header">Recent Searches</h6>
                <a class="dropdown-item" href="#">charts</a>
                <a class="dropdown-item" href="#">new orders</a>
                <a class="dropdown-item" href="#">file manager</a>
                <a class="dropdown-item" href="#">new users</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3</a>
              <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                <h6 class="dropdown-header">Notifications</h6>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge bg-info text-white">
                        <i class="fas fa-bullhorn"></i>
                      </span>
                    </div>
                    <div class="notif-text">
                      <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                      <small>19:00</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge bg-primary text-white">
                        <i class="fas fa-bolt"></i>
                      </span>
                    </div>
                    <div class="notif-text">
                      <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                      <small>18:00</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge bg-success text-white">
                        <i class="fas fa-at"></i>
                      </span>
                    </div>
                    <div class="notif-text">
                      <p>faucibus dolor in commodo lectus mattis</p>
                      <small>yesterday</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge">
                        <img src="../../assets/images/avatars/profile-image.png" alt="">
                      </span>
                    </div>
                    <div class="notif-text">
                      <p>faucibus dolor in commodo lectus mattis</p>
                      <small>yesterday</small>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="header-notif">
                    <div class="notif-image">
                      <span class="notification-badge">
                        <img src="../../assets/images/avatars/profile-image.png" alt="">
                      </span>
                    </div>
                    <div class="notif-text">
                      <p>faucibus dolor in commodo lectus mattis</p>
                      <small>yesterday</small>
                    </div>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/profile-image.png" alt=""></a>
              <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- area sidebar -->

    @if (Auth::check() && Auth::user()->is_admin)
    <!-- jika Admin -->
    @include('template.menu-admin')

    @else
    @include('template.menu-user')

    @endif

    <div class="page-content">
      <div class="main-wrapper">
      </div>

    </div>

  </div>

  <!-- Javascripts -->
  <script src="{{asset('assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="{{asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/main.min.js')}}"></script>
</body>

</html>