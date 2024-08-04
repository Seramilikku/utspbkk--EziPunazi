<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Perpustakaan</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/fontawesome/css/all.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">
  <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="#" class="navbar-brand">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-envelope"></i>
                <span class="badge badge-primary">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <div class="dropdown-header">Messages
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <!-- Message Items -->
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ezi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <!-- Add more messages here -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="notificationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell"></i>
                <span class="badge badge-danger">4</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown">
                <div class="dropdown-header">Notifications
                  <div class="float-right">
                    <a href="#">Mark All As Read</a>
                  </div>
                </div>
                <!-- Notification Items -->
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <!-- Add more notifications here -->
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <div class="dropdown-title">Logged in 5 min ago</div>
                  <i class="far fa-user"></i> Profile
                </a>
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      
      <!-- Sidebar -->
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">Perpustakaan</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">PPK</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu Utama</li>
            <li class="nav-item {{ request()->is('bukus*') ? 'active' : '' }}"><a href="{{ route('bukus.index') }}"><i class="fas fa-book"></i><span> Buku</span></a></li>
            <li class="nav-item {{ request()->is('anggotas*') ? 'active' : '' }}"><a href="{{ route('anggotas.index') }}"><i class="fas fa-users"></i><span> Anggota</span></a></li>
            <li class="nav-item {{ request()->is('peminjamans*') ? 'active' : '' }}"><a href="{{ route('peminjamans.index') }}"><i class="fas fa-exchange-alt"></i><span> Peminjaman</span></a></li>
            <li class="nav-item {{ request()->is('penuliss*') ? 'active' : '' }}"><a href="{{ route('penuliss.index') }}"><i class="fas fa-pen"></i><span> Penulis</span></a></li>
            <li class="nav-item {{ request()->is('raks*') ? 'active' : '' }}"><a href="{{ route('raks.index') }}"><i class="fas fa-sitemap"></i><span> Rak</span></a></li>
            <li class="nav-item {{ request()->is('sanksis*') ? 'active' : '' }}"><a href="{{ route('sanksis.index') }}"><i class="fas fa-exclamation-triangle"></i><span> Sanksi</span></a></li>
          </ul>
        </aside>
      </div>
      <!-- End of Sidebar -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="main-footer">
        <div class="footer-left">
          &copy; 2024 Perpustakaan | Design by <a href="#">Ezi</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="https://demo.getstisla.com/assets/js/stisla.js"></script>
  <script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
  <script src="https://demo.getstisla.com/assets/js/custom.js"></script>
</body>

</html>
