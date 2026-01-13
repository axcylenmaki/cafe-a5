<main class="container my-4 my-lg-5">

  <!-- HEADER -->
  <section class="card-soft p-4 p-lg-5 hero-simple">
    <div class="row align-items-center g-4">
      <div class="col-lg-7">
        <span class="badge-soft mb-3">
          <i class="bi bi-images"></i> Galeri & Fasilitas
        </span>

        <h1 class="fw-semibold mb-2" style="font-size: clamp(26px, 3.6vw, 40px); line-height: 1.2;">
          Suasana Cafe & Area yang <span class="brand-text">ramah keluarga</span>
        </h1>

        <p class="text-muted-2 mb-0" style="font-size: 1.05rem; line-height: 1.75;">
          Di halaman ini kamu bisa lihat foto suasana, menu, serta fasilitas yang tersedia.
          Kami buat sederhana biar mudah dipahami semua umur.
        </p>
      </div>

      <div class="col-lg-5">
        <div class="card-soft p-4" style="background: rgba(11,127,117,.06);">
          <div class="d-flex gap-3 align-items-start">
            <div class="icon-circle">
              <i class="bi bi-check2-circle"></i>
            </div>
            <div>
              <div class="fw-semibold mb-1">Info cepat</div>
              <div class="text-muted-2 small">
                ✓ Tempat ibadah • ✓ Toilet • ✓ Parkir • ✓ P3K<br>
                ✓ Area produksi & packaging • ✓ Tempat sampah/daur ulang
              </div>
            </div>
          </div>

          <hr class="soft my-3">

          <div class="d-flex flex-wrap gap-2">
            <a href="#galeri" class="btn btn-brand">
              <i class="bi bi-camera me-1"></i> Lihat Galeri
            </a>
            <a href="#fasilitas" class="btn btn-outline-brand">
              <i class="bi bi-building me-1"></i> Fasilitas
            </a>
            <a href="#denah" class="btn btn-outline-brand">
              <i class="bi bi-map me-1"></i> Denah
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GALERI FOTO -->
  <section id="galeri" class="mt-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
      <div>
        <h2 class="h4 section-title fw-semibold mb-1">Galeri Cafe</h2>
        <div class="text-muted-2">Dokumentasi suasana, menu, dan area cafe.</div>
      </div>
    </div>

    <?php
      // Kamu bisa ganti/ tambah file sesuai gambar yang kamu punya
      $gallery = [
        ['assets/img/gallery/suasana-1.jpg', 'Suasana cafe yang nyaman'],
        ['assets/img/gallery/suasana-2.jpg', 'Area duduk keluarga'],
        ['assets/img/gallery/menu-1.jpg', 'Sala Lauak (highlight)'],
        ['assets/img/gallery/menu-2.jpg', 'Es Tebak (highlight)'],
        ['assets/img/gallery/suasana-3.jpg', 'Spot foto & meja santai'],
        ['assets/img/gallery/menu-3.jpg', 'parking'],
      ];
    ?>

    <div class="row g-3">
      <?php foreach ($gallery as $g): ?>
        <div class="col-6 col-md-4 col-lg-3">
          <div class="card-soft p-2 h-100">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden">
              <img
                src="<?= $g[0] ?>"
                alt="<?= htmlspecialchars($g[1]) ?>"
                style="width:100%; height:100%; object-fit:cover;"
                onerror="this.src='https://dummyimage.com/800x600/eeeeee/777777&text=Foto+Belum+Ada';"
              >
            </div>
            <div class="p-2">
              <div class="small text-muted-2" style="line-height:1.4;"><?= $g[1] ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- FASILITAS & AREA -->
  <section id="fasilitas" class="mt-4">
    <div class="card-soft p-4">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
        <div>
          <h2 class="h4 section-title fw-semibold mb-1">Fasilitas & Area Cafe</h2>
          <div class="text-muted-2">Penjelasan singkat fasilitas supaya pengunjung mudah paham.</div>
        </div>
      </div>

      <?php
        $facilities = [
          [
            'title' => 'Tempat Ibadah',
            'desc'  => 'Tersedia ruang ibadah yang bersih dan nyaman untuk pengunjung.',
            'img'   => 'assets/img/facilities/mushola.jpg',
            'badge_bg' => 'rgba(11,127,117,.08)',
            'badge_border' => 'rgba(11,127,117,.18)',
            'badge_color' => 'var(--primary)',
            'icon'  => 'bi-moon-stars'
          ],
          [
            'title' => 'Toilet',
            'desc'  => 'Toilet dijaga kebersihannya, mudah dijangkau dari area utama.',
            'img'   => 'assets/img/facilities/toilet.jpg',
            'badge_bg' => 'rgba(244,166,65,.12)',
            'badge_border' => 'rgba(244,166,65,.22)',
            'badge_color' => '#7a4d00',
            'icon'  => 'bi-droplet'
          ],
          [
            'title' => 'Lahan Parkir Karyawan & Tamu',
            'desc'  => 'Area parkir terpisah agar lebih rapi dan aman untuk semua.',
            'img'   => 'assets/img/facilities/parkir.jpeg',
            'badge_bg' => 'rgba(243,166,200,.14)',
            'badge_border' => 'rgba(243,166,200,.22)',
            'badge_color' => '#8b2f4a',
            'icon'  => 'bi-car-front'
          ],
          [
            'title' => 'Tempat Produksi',
            'desc'  => 'Area produksi khusus untuk menjaga kualitas dan kebersihan produk.',
            'img'   => 'assets/img/facilities/produksi.jpg',
            'badge_bg' => 'rgba(11,127,117,.08)',
            'badge_border' => 'rgba(11,127,117,.18)',
            'badge_color' => 'var(--primary)',
            'icon'  => 'bi-gear'
          ],
          [
            'title' => 'Packaging',
            'desc'  => 'Area khusus pengemasan agar pesanan rapi dan aman dibawa.',
            'img'   => 'assets/img/facilities/packaging.jpg',
            'badge_bg' => 'rgba(244,166,65,.12)',
            'badge_border' => 'rgba(244,166,65,.22)',
            'badge_color' => '#7a4d00',
            'icon'  => 'bi-box-seam'
          ],
          [
            'title' => 'Kasir',
            'desc'  => 'Area kasir dan pengambilan pesanan yang mudah dilihat pengunjung.',
            'img'   => 'assets/img/facilities/toko.jpg',
            'badge_bg' => 'rgba(243,166,200,.14)',
            'badge_border' => 'rgba(243,166,200,.22)',
            'badge_color' => '#8b2f4a',
            'icon'  => 'bi-shop'
          ],
          [
            'title' => 'P3K',
            'desc'  => 'Tersedia perlengkapan P3K untuk kondisi darurat ringan.',
            'img'   => 'assets/img/facilities/p3k.jpg',
            'badge_bg' => 'rgba(11,127,117,.08)',
            'badge_border' => 'rgba(11,127,117,.18)',
            'badge_color' => 'var(--primary)',
            'icon'  => 'bi-heart-pulse'
          ],
          [
            'title' => 'Tempat Sampah',
            'desc'  => 'Tempat sampah terpisah untuk menjaga kebersihan dan membantu daur ulang.',
            'img'   => 'assets/img/facilities/daur-ulang.jpeg',
            'badge_bg' => 'rgba(244,166,65,.12)',
            'badge_border' => 'rgba(244,166,65,.22)',
            'badge_color' => '#7a4d00',
            'icon'  => 'bi-recycle'
          ],
          [
            'title' => 'Jalan Lingkungan',
            'desc'  => 'Akses jalan lingkungan dibuat aman dan nyaman untuk keluar-masuk pengunjung.',
            'img'   => 'assets/img/facilities/jalan-lingkungan.jpg',
            'badge_bg' => 'rgba(243,166,200,.14)',
            'badge_border' => 'rgba(243,166,200,.22)',
            'badge_color' => '#8b2f4a',
            'icon'  => 'bi-signpost-2'
          ],
        ];
      ?>

      <div class="row g-3">
        <?php foreach($facilities as $f): ?>
          <div class="col-md-6 col-lg-4">
            <div class="card-soft p-3 h-100">
              <div class="d-flex justify-content-between align-items-start mb-2">
                <span
                  class="badge-soft"
                  style="
                    background: <?= $f['badge_bg'] ?>;
                    border-color: <?= $f['badge_border'] ?>;
                    color: <?= $f['badge_color'] ?>;
                  "
                >
                  <i class="bi <?= $f['icon'] ?>"></i> <?= $f['title'] ?>
                </span>
              </div>

              <div class="ratio ratio-16x9 rounded-4 overflow-hidden mb-2">
                <img
                  src="<?= $f['img'] ?>"
                  alt="<?= htmlspecialchars($f['title']) ?>"
                  style="width:100%; height:100%; object-fit:cover;"
                  onerror="this.src='https://dummyimage.com/1200x675/eeeeee/777777&text=Gambar+Fasilitas';"
                >
              </div>

              <div class="text-muted-2" style="font-size: 1rem; line-height:1.7;">
                <?= $f['desc'] ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- DENAH -->
  <section id="denah" class="mt-4">
    <div class="card-soft p-4 p-lg-5">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
        <div>
          <h2 class="h4 section-title fw-semibold mb-1">Denah / Layout Area</h2>
          <div class="text-muted-2">Denah membantu pengunjung menemukan area penting dengan cepat.</div>
        </div>
        <div class="text-muted-2 small">*File: <code>assets/img/denah/denah.png</code></div>
      </div>

      <div class="ratio ratio-16x9 rounded-4 overflow-hidden" style="border:1px solid rgba(11,127,117,.14);">
        <img
          src="assets/img/denah/denah.png"
          alt="Denah Cafe"
          style="width:100%; height:100%; object-fit:contain; background:#fff;"
          onerror="this.src='https://dummyimage.com/1200x675/eeeeee/777777&text=Denah+Belum+Ada';"
        >
      </div>

      <div class="mt-3 text-muted-2" style="line-height:1.7;">
        <strong>Petunjuk singkat:</strong>
        Denah ini menampilkan area utama, fasilitas, serta jalur akses. Jika kamu ingin,
        kita bisa tambahkan label angka (1–9) sesuai daftar fasilitas di atas.
      </div>
    </div>
  </section>

</main>
