<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/beranda">766Hi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Beranda") ? 'active' : '' }}" href="/beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Tentang") ? 'active' : '' }}" href="/tentang">Tentang</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/login" class="nav-link">Login</a> 
        </li>
      </ul>
    </div>
  </div>
</nav>