<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <h1><a href="/">FJ GROOMING</a></h1>
      <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="/" class="<?= (empty($current_page) || $current_page === '/') ? 'active' : ''; ?>">Home</a>
        </li>
        <li><a href="#tentang-kami"
            class="<?= (empty($current_page) || $current_page === '#tentang-kami') ? 'active' : ''; ?>">Tentang
            Kami</a></li>
        <li><a href="#pelayanan"
            class="<?= (empty($current_page) || $current_page === '#pelayanan') ? 'active' : ''; ?>">Layanan</a>
        </li>
        <li><a href="#galeri"
            class="<?= (empty($current_page) || $current_page === '#galeri') ? 'active' : ''; ?>">Galeri</a>
        </li>
        <li><a href="{{ route('login') }}">Login</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header>