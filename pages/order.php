<main class="container my-4 my-lg-5">

  <!-- HEADER -->
  <section class="card-soft p-4 p-lg-5 hero-simple mb-4">
    <span class="badge-soft mb-2">
      <i class="bi bi-bag-check"></i> Cara Pemesanan
    </span>

    <h1 class="fw-semibold mb-2" style="color: var(--primary);">
      Cara Order di Cafe A5
    </h1>

    <p class="text-muted-2 mb-0" style="font-size:1.05rem; line-height:1.7;">
      Kamu bisa menikmati <strong>Sala Lauak</strong> dan <strong>Es Tebak</strong> dengan cara
      datang langsung ke cafe atau pesan secara online melalui aplikasi.
    </p>
  </section>

  <!-- OFFLINE ORDER -->
  <section class="card-soft p-4 mb-4">
    <h2 class="h4 fw-semibold mb-3">
      <i class="bi bi-shop me-1"></i> Pesan Langsung di Cafe (Offline)
    </h2>

    <ol class="text-muted-2 mb-0" style="line-height:1.8;">
      <li>Datang ke Cafe A5 (AAAAA Group).</li>
      <li>Pilih menu di meja kasir atau lihat daftar menu.</li>
      <li>Sampaikan pesanan ke petugas.</li>
      <li>Lakukan pembayaran (Cash / QRIS).</li>
      <li>Tunggu pesanan disiapkan dan nikmati di tempat atau bawa pulang.</li>
    </ol>

    <div class="badge-soft mt-3">
      Cocok untuk keluarga, makan santai, dan pesanan rame-rame.
    </div>
  </section>

  <!-- ONLINE ORDER -->
  <section class="card-soft p-4 mb-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
      <div>
        <h2 class="h4 fw-semibold mb-1">
          <i class="bi bi-phone me-1"></i> Pesan Online (Delivery)
        </h2>
        <div class="text-muted-2" style="line-height:1.7;">
          Pilih platform favorit kamu. Klik salah satu untuk menuju halaman toko (fiktif) kami.
        </div>
      </div>
      <span class="badge-soft"><i class="bi bi-lightning-charge"></i> Praktis</span>
    </div>

    <?php
      $partners = [
        [
          'name' => 'GoFood',
          'desc' => 'Pesan cepat, cocok buat delivery & pickup.',
          'href' => 'https://gofood.co.id/fiktif-cafe-a5',
          'logo' => 'assets/img/gofood.jpg',
          'bg'   => 'rgba(244,166,65,.10)',
          'brd'  => 'rgba(244,166,65,.22)'
        ],
        [
          'name' => 'GrabFood',
          'desc' => 'Banyak promo, layanan antar praktis.',
          'href' => 'https://food.grab.com/fiktif-cafe-a5',
          'logo' => 'assets/img/grabfood.jpg',
          'bg'   => 'rgba(11,127,117,.08)',
          'brd'  => 'rgba(11,127,117,.18)'
        ],
        [
          'name' => 'ShopeeFood',
          'desc' => 'Cocok buat yang suka diskon & voucher.',
          'href' => 'https://shopee.co.id/fiktif-cafe-a5',
          'logo' => 'assets/img/shopeefood.jpg',
          'bg'   => 'rgba(243,166,200,.12)',
          'brd'  => 'rgba(243,166,200,.22)'
        ],
      ];
    ?>

    <div class="row g-3 g-lg-4">
      <?php foreach($partners as $p): ?>
        <div class="col-md-4">
          <div class="card-soft p-3 h-100" style="background: <?= $p['bg'] ?>; border-color: <?= $p['brd'] ?>;">
            <div class="d-flex gap-3 align-items-center">
              <div
                class="rounded-4"
                style="
                  width:64px; height:64px;
                  background: #fff;
                  border: 1px solid rgba(2,6,23,.10);
                  display:grid; place-items:center;
                  overflow:hidden;
                "
              >
                <img
                  src="<?= $p['logo'] ?>"
                  alt="Logo <?= htmlspecialchars($p['name']) ?>"
                  style="width:80%; height:80%; object-fit:contain;"
                  onerror="this.src='https://dummyimage.com/160x160/eeeeee/777777&text=Logo';"
                >
              </div>

              <div class="flex-grow-1">
                <div class="fw-semibold"><?= $p['name'] ?></div>
                <div class="text-muted-2 small" style="line-height:1.5;"><?= $p['desc'] ?></div>
              </div>
            </div>

            <a href="<?= $p['href'] ?>" target="_blank" class="btn btn-brand w-100 mt-3">
              <i class="bi bi-box-arrow-up-right me-1"></i> Buka <?= $p['name'] ?>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-muted-2 small mt-3">
      *Link platform di atas adalah contoh (fiktif) untuk keperluan tampilan website.
    </div>
  </section>

  <!-- CARA ORDER ONLINE -->
  <section class="card-soft p-4">
    <h2 class="h4 fw-semibold mb-3">
      <i class="bi bi-list-check me-1"></i> Langkah Pemesanan Online
    </h2>

    <ol class="text-muted-2" style="line-height:1.8;">
      <li>Buka aplikasi GoFood / GrabFood / ShopeeFood.</li>
      <li>Cari: <strong>Cafe A5 – Sala Lauak & Es Tebak</strong>.</li>
      <li>Pilih menu yang diinginkan.</li>
      <li>Masukkan ke keranjang.</li>
      <li>Isi alamat pengantaran.</li>
      <li>Lakukan pembayaran.</li>
      <li>Tunggu pesanan sampai.</li>
    </ol>

    <div class="card-soft p-3 mt-3" style="background: rgba(11,127,117,.06);">
      <div class="fw-semibold mb-1">Butuh bantuan?</div>
      <div class="text-muted-2 mb-2">
        Kalau ada kendala saat memesan, silakan hubungi admin.
      </div>
      <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-brand">
        <i class="bi bi-whatsapp me-1"></i> Hubungi Admin
      </a>
    </div>
  </section>

</main>
