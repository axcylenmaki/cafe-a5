<main class="container my-4 my-lg-5">

  <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-4">
    <div>
      <h1 class="fw-semibold mb-1" style="color: var(--primary);">Menu</h1>
      <div class="text-muted-2" style="font-size: 1.05rem; line-height:1.7;">
        Klik tiap menu untuk lihat <strong>rasa</strong> dan <strong>komposisi kasar</strong>.
      </div>
    </div>
    <a href="?page=order" class="btn btn-brand">
      <i class="bi bi-bag-heart me-1"></i> Pesan Sekarang
    </a>
  </div>

  <?php
    // =========================
    // DATA MENU (edit bebas)
    // =========================
    $highlight = [
      [
        'id' => 'sala-original',
        'name' => 'Sala Lauak Original',
        'price' => 6000,
        'img' => 'assets/img/menu/sala-lauak.jpg',
        'tag' => 'Best Seller',
        'tagStyle' => 'background: rgba(244,166,65,.14); border-color: rgba(244,166,65,.22); color:#7a4d00;',
        'taste' => 'Camilan gurih khas Minangkabau dengan tekstur lembut dan aroma ikan yang khas. Renyah di luar, lembut di dalam.',
        'comp' => 'Tepung beras/tepung terigu, ikan (ikan asin/ikan teri sesuai resep), bumbu (bawang, garam, rempah), daun bawang/seledri, minyak goreng.'
      ],
      [
        'id' => 'sala-pedas',
        'name' => 'Sala Lauak Pedas',
        'price' => 6000,
        'img' => 'assets/img/menu/sala-lauak-isi.jpg', // boleh ganti jadi sala-lauak-pedas.jpg kalau ada
        'tag' => 'Pedas Favorit',
        'tagStyle' => 'background: rgba(243,166,200,.16); border-color: rgba(243,166,200,.24); color:#8b2f4a;',
        'taste' => 'Varian sala lauak dengan tambahan cabai. Gurihnya tetap terasa, ditutup pedas yang “nendang” tapi masih nyaman buat keluarga.',
        'comp' => 'Adonan sala lauak + cabai (iris/halus), bumbu pedas, rempah, minyak goreng.'
      ],
      [
        'id' => 'es-tebak',
        'name' => 'Es Tebak',
        'price' => 6000,
        'img' => 'assets/img/menu/es-tebak.jpg',
        'tag' => 'Favorit Keluarga',
        'tagStyle' => 'background: rgba(11,127,117,.10); border-color: rgba(11,127,117,.18); color: var(--primary);',
        'taste' => 'Minuman dingin khas Sumatra Barat: segar, manis pas, dengan campuran buah dan topping yang bikin “ramai” di mulut.',
        'comp' => 'Es serut, buah-buahan (opsional sesuai stok), santan/susu, gula/sirop, topping (kolang-kaling, tape, ketan hitam, cincau, dll).'
      ],
    ];

    $others = [
      [
        'id' => 'teh-talua',
        'name' => 'Teh Talua',
        'price' => 12000,
        'img' => 'assets/img/menu/teh-talua.jpg',
        'taste' => 'Hangat, manis lembut, dan terasa “bertenaga”. Cocok buat yang suka minuman tradisional.',
        'comp' => 'Teh, telur, gula, perasan jeruk nipis (opsional), sedikit bumbu (opsional).'
      ],
      [
        'id' => 'kopi-minang',
        'name' => 'Kopi Minang',
        'price' => 10000,
        'img' => 'assets/img/menu/kopi-minang.jpg',
        'taste' => 'Aroma kopi kuat, pahitnya seimbang, cocok buat pecinta kopi hitam.',
        'comp' => 'Bubuk kopi, air panas, gula (opsional).'
      ],
      [
        'id' => 'air-mineral',
        'name' => 'Air Mineral',
        'price' => 5000,
        'img' => 'assets/img/menu/air-mineral.jpg', // kalau ga ada gambar, aman ada fallback
        'taste' => 'Pilihan simpel dan aman untuk semua usia.',
        'comp' => 'Air mineral kemasan.'
      ],
      [
        'id' => 'teh-manis',
        'name' => 'Teh Manis (Hangat / Es)',
        'price' => 7000,
        'img' => 'assets/img/menu/teh-manis.jpg',
        'taste' => 'Manisnya pas, ringan, cocok untuk teman ngemil.',
        'comp' => 'Teh, gula, air panas / es.'
      ],
    ];

    function rupiah($n){
      return 'Rp ' . number_format($n, 0, ',', '.');
    }
  ?>

  <!-- HIGHLIGHT -->
  <section class="card-soft p-4 p-lg-5 mb-4 hero-simple">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
      <div>
        <h2 class="h4 fw-semibold mb-1">Menu Andalan</h2>
        <div class="text-muted-2">Sala Lauak & Es Tebak jadi highlight utama kami.</div>
      </div>
      <span class="badge-soft">
        <i class="bi bi-star-fill"></i> Highlight
      </span>
    </div>

    <div class="row g-3 g-lg-4">
      <?php foreach($highlight as $m): ?>
        <div class="col-lg-4">
          <div class="card-soft p-3 h-100">
            <div class="d-flex gap-3 align-items-start">
              <img
                src="<?= $m['img'] ?>"
                alt="<?= htmlspecialchars($m['name']) ?>"
                class="rounded-4"
                style="width:110px; height:110px; object-fit:cover;"
                onerror="this.src='https://dummyimage.com/600x600/eeeeee/777777&text=Foto+Menu';"
              >
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start gap-2">
                  <div>
                    <div class="fw-semibold" style="font-size:1.05rem; line-height:1.3;">
                      <?= $m['name'] ?>
                    </div>
                    <div class="text-muted-2 small mt-1">
                      <?= rupiah($m['price']) ?> / porsi
                    </div>
                  </div>
                  <span class="badge-soft" style="<?= $m['tagStyle'] ?>">
                    <i class="bi bi-award"></i> <?= $m['tag'] ?>
                  </span>
                </div>

                <div class="mt-2">
                  <a class="btn btn-outline-brand btn-sm" data-bs-toggle="collapse" href="#detail-<?= $m['id'] ?>" role="button" aria-expanded="false" aria-controls="detail-<?= $m['id'] ?>">
                    <i class="bi bi-info-circle me-1"></i> Lihat detail
                  </a>
                </div>
              </div>
            </div>

            <div class="collapse mt-3" id="detail-<?= $m['id'] ?>">
              <div class="p-3 rounded-4" style="background: rgba(11,127,117,.06); border: 1px solid rgba(11,127,117,.12);">
                <div class="fw-semibold mb-1">Rasa</div>
                <div class="text-muted-2" style="line-height:1.7;"><?= $m['taste'] ?></div>

                <hr class="soft my-3">

                <div class="fw-semibold mb-1">Komposisi kasar</div>
                <div class="text-muted-2" style="line-height:1.7;"><?= $m['comp'] ?></div>
              </div>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- LIST MENU + REKOMENDASI -->
  <section class="row g-3 g-lg-4">

    <!-- DAFTAR MENU -->
    <div class="col-lg-8">
      <div class="card-soft p-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
          <div>
            <h2 class="h4 fw-semibold mb-1">Daftar Menu Lainnya</h2>
            <div class="text-muted-2">Klik untuk lihat detail rasa & komposisi.</div>
          </div>
          <span class="badge-soft"><i class="bi bi-journal-text"></i> Lengkap</span>
        </div>

        <div class="accordion" id="menuAccordion">
          <?php foreach($others as $i => $m): ?>
            <div class="accordion-item" style="border: 1px solid rgba(2,6,23,.10); border-radius: 14px; overflow:hidden; margin-bottom: 12px;">
              <h2 class="accordion-header" id="heading<?= $m['id'] ?>">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse<?= $m['id'] ?>"
                        aria-expanded="false"
                        aria-controls="collapse<?= $m['id'] ?>"
                        style="background: rgba(255,255,255,.8);">
                  <div class="d-flex gap-3 align-items-center w-100">
                    <img
                      src="<?= $m['img'] ?>"
                      alt="<?= htmlspecialchars($m['name']) ?>"
                      class="rounded-3"
                      style="width:54px; height:54px; object-fit:cover;"
                      onerror="this.src='https://dummyimage.com/300x300/eeeeee/777777&text=Menu';"
                    >
                    <div class="flex-grow-1">
                      <div class="fw-semibold"><?= $m['name'] ?></div>
                      <div class="text-muted-2 small"><?= rupiah($m['price']) ?></div>
                    </div>
                    <span class="badge-soft" style="background: rgba(11,127,117,.06); border-color: rgba(11,127,117,.14);">
                      Detail
                    </span>
                  </div>
                </button>
              </h2>

              <div id="collapse<?= $m['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $m['id'] ?>" data-bs-parent="#menuAccordion">
                <div class="accordion-body" style="background: rgba(11,127,117,.04);">
                  <div class="fw-semibold mb-1">Rasa</div>
                  <div class="text-muted-2" style="line-height:1.7;">
                    <?= $m['taste'] ?>
                  </div>

                  <hr class="soft my-3">

                  <div class="fw-semibold mb-1">Komposisi kasar</div>
                  <div class="text-muted-2" style="line-height:1.7;">
                    <?= $m['comp'] ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="text-muted-2 small mt-3">
          *Harga bisa berubah mengikuti ketersediaan bahan. Untuk event/ramai-ramai bisa request paket.
        </div>

      </div>
    </div>

    <!-- REKOMENDASI -->
    <div class="col-lg-4">
      <div class="card-soft p-4 h-100">

        <h2 class="h4 fw-semibold mb-3">Rekomendasi</h2>

        <div class="card-soft p-3 mb-3" style="background: rgba(244,166,65,.10);">
          <div class="d-flex gap-3">
            <div class="icon-circle" style="background: rgba(244,166,65,.16); border-color: rgba(244,166,65,.22); color:#7a4d00;">
              <i class="bi bi-stars"></i>
            </div>
            <div>
              <div class="fw-semibold">Paket aman untuk pertama kali</div>
              <div class="text-muted-2 small">Sala Lauak Original + Es Tebak</div>
              <div class="fw-semibold mt-1"><?= rupiah(12000) ?></div>
            </div>
          </div>
        </div>

        <div class="card-soft p-3 mb-3" style="background: rgba(11,127,117,.06);">
          <div class="d-flex gap-3">
            <div class="icon-circle">
              <i class="bi bi-cup-hot"></i>
            </div>
            <div>
              <div class="fw-semibold">Kalau mau hangat</div>
              <div class="text-muted-2 small">Teh Talua (tradisional)</div>
              <div class="fw-semibold mt-1"><?= rupiah(12000) ?></div>
            </div>
          </div>
        </div>

        <div class="card-soft p-3" style="background: rgba(243,166,200,.10);">
          <div class="d-flex gap-3">
            <div class="icon-circle" style="background: rgba(243,166,200,.18); border-color: rgba(243,166,200,.22); color:#8b2f4a;">
              <i class="bi bi-cup"></i>
            </div>
            <div>
              <div class="fw-semibold">Buat pecinta kopi</div>
              <div class="text-muted-2 small">Kopi Minang</div>
              <div class="fw-semibold mt-1"><?= rupiah(10000) ?></div>
            </div>
          </div>
        </div>

        <a href="?page=order" class="btn btn-brand mt-3 w-100">
          <i class="bi bi-bag-check me-1"></i> Pesan Sekarang
        </a>

        <a href="?page=contact" class="btn btn-outline-brand mt-2 w-100">
          <i class="bi bi-chat-dots me-1"></i> Tanya Admin
        </a>

      </div>
    </div>

  </section>

</main>
