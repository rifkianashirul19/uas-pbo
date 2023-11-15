<div class="sidebar pe-4 pb-3">
  <nav class="navbar bg-light navbar-light">
    <a href="/dashboard" class="navbar-brand mx-4 mb-3">
      <h3 class="text-primary">FJ Balikpapan</h3>
    </a>
    <div class="navbar-nav w-100">
      <a href="/dashboard" class="nav-item nav-link {{ Request::is('dashboard') ? 'active' : '' }}"><i
          class="fa fa-house me-2"></i></i>Dashboard</a>
      <a href="/dashboard/transaksi"
        class="nav-item nav-link {{ Request::is('dashboard/transaksi') ? 'active' : '' }}"><i
          class="fa fa-coins me-2"></i>Transaksi</a>
      <a href="/dashboard/histori" class="nav-item nav-link {{ Request::is('dashboard/histori') ? 'active' : '' }}"><i
          class="fa fa-wallet me-2"></i>History Transaksi</a>
      <a href="{{ route('logout') }}" class="nav-item nav-link"><i class="fa fa-arrow-left me-2"></i>Log out</a>
    </div>
  </nav>
</div>