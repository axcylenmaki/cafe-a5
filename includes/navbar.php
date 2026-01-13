<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container py-2">
    <a class="navbar-brand d-flex align-items-center gap-2" href="?page=home">
      <img src="assets/img/logo.png" alt="AAAAA Group" style="height:44px; width:44px; object-fit:contain; border-radius:12px;">
      <div class="lh-1">
        <div class="fw-bold">A5 Group</div>
        <small class="text-muted">Sala Lauak & Es Tebak</small>
      </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link <?= ($page=='home'?'active':'') ?>" href="?page=home">Home</a></li>
        <li class="nav-item"><a class="nav-link <?= ($page=='about'?'active':'') ?>" href="?page=about">Tentang</a></li>
        <li class="nav-item"><a class="nav-link <?= ($page=='menu'?'active':'') ?>" href="?page=menu">Menu</a></li>
        <li class="nav-item"><a class="nav-link <?= ($page=='gallery'?'active':'') ?>" href="?page=gallery">Galeri</a></li>
        <li class="nav-item"><a class="nav-link <?= ($page=='order'?'active':'') ?>" href="?page=order">Cara Pesan</a></li>
        <li class="nav-item"><a class="nav-link <?= ($page=='contact'?'active':'') ?>" href="?page=contact">Lokasi</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-brand" href="?page=order"><i class="bi bi-bag-heart me-1"></i> Pesan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
