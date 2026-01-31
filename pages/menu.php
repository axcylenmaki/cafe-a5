<main class="container my-4 my-lg-5">

  <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-4">
    <div>
      <h1 class="fw-semibold mb-1" style="color: var(--primary);">Menu</h1>
      <div class="text-muted-2" style="font-size: 1.05rem; line-height:1.7;">
        Klik tiap menu untuk lihat <strong>rasa</strong> dan <strong>bahan utama</strong>.
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
        'price' => 14000,
        'img' => 'assets/img/menu/sala-lauak.jpg',
        'tag' => 'Best Seller',
        'tagStyle' => 'background: rgba(244,166,65,.14); border-color: rgba(244,166,65,.22); color:#7a4d00;',
        'taste' => 'Camilan gurih khas Minang—renyah di luar, lembut di dalam, dengan aroma ikan yang khas dan bikin nagih.',
        'ingredients' => 'Tepung beras/terigu, ikan (teri/ikan asin sesuai resep), bawang & rempah, daun bawang/seledri, minyak goreng.',
        'pairing' => 'Nikmat ditemani Es Tebak atau teh hangat. Cocok untuk semua usia.'
      ],
      [
        'id' => 'sala-pedas',
        'name' => 'Sala Lauak Pedas',
        'price' => 14000,
        'img' => 'assets/img/menu/sala-lauak-isi.jpg', // ganti sala-lauak-pedas.jpg kalau ada
        'tag' => 'Pedas Favorit',
        'tagStyle' => 'background: rgba(243,166,200,.16); border-color: rgba(243,166,200,.24); color:#8b2f4a;',
        'taste' => 'Gurih khas sala lauak dengan sentuhan cabai—pedasnya “nendang”, tapi tetap nyaman dinikmati bareng keluarga.',
        'ingredients' => 'Adonan sala lauak, cabai (iris/halus), bawang & rempah, minyak goreng.',
        'pairing' => 'Pas buat yang suka pedas. Enak dipadu Es Tebak biar makin segar.'
      ],
      [
        'id' => 'es-tebak',
        'name' => 'Es Tebak',
        'price' => 15000,
        'img' => 'assets/img/menu/es-tebak.jpg',
        'tag' => 'Favorit Keluarga',
        'tagStyle' => 'background: rgba(11,127,117,.10); border-color: rgba(11,127,117,.18); color: var(--primary);',
        'taste' => 'Minuman dingin khas Sumatra Barat yang segar, manis pas, dengan topping yang “rame” dan bikin adem.',
        'ingredients' => 'Es serut, buah (sesuai stok), santan/susu, gula/sirop, topping (kolang-kaling, tape, ketan hitam, cincau, dll).',
        'pairing' => 'Paling pas disandingkan dengan Sala Lauak. Seger buat siang-siang!'
      ],
    ];

    $others = [
      [
        'id' => 'teh-talua',
        'name' => 'Teh Talua',
        'price' => 12000,
        'img' => 'assets/img/menu/teh-talua.jpg',
        'taste' => 'Hangat, manis lembut, dan terasa “bertenaga”. Cocok untuk yang suka minuman tradisional.',
        'ingredients' => 'Teh, telur, gula, jeruk nipis (opsional), sedikit bumbu (opsional).'
      ],
      [
        'id' => 'kopi-minang',
        'name' => 'Kopi Minang',
        'price' => 10000,
        'img' => 'assets/img/menu/kopi-minang.jpg',
        'taste' => 'Aroma kopi kuat, pahitnya seimbang, cocok buat pecinta kopi hitam.',
        'ingredients' => 'Bubuk kopi, air panas, gula (opsional).'
      ],
      [
        'id' => 'air-mineral',
        'name' => 'Air Mineral',
        'price' => 5000,
        'img' => 'assets/img/menu/air-mineral.jpg',
        'taste' => 'Pilihan simpel dan aman untuk semua usia.',
        'ingredients' => 'Air mineral kemasan.'
      ],
      [
        'id' => 'teh-manis',
        'name' => 'Teh Manis (Hangat / Es)',
        'price' => 7000,
        'img' => 'assets/img/menu/teh-manis.jpg',
        'taste' => 'Manisnya pas, ringan, cocok untuk teman ngemil.',
        'ingredients' => 'Teh, gula, air panas / es.'
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

                <div class="mt-2 d-flex gap-2 flex-wrap">
                  <button
                    type="button"
                    class="btn btn-outline-brand btn-sm"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-<?= $m['id'] ?>">
                    <i class="bi bi-info-circle me-1"></i> Lihat detail
                  </button>

                  <a href="?page=order" class="btn btn-brand btn-sm">
                    <i class="bi bi-bag-check me-1"></i> Pesan
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-muted-2 small mt-3">
      *Bahan/topping bisa menyesuaikan ketersediaan (tanpa mengurangi rasa utama).
    </div>
  </section>

  <!-- LIST MENU + REKOMENDASI -->
  <section class="row g-3 g-lg-4">

    <!-- DAFTAR MENU -->
    <div class="col-lg-8">
      <div class="card-soft p-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-3">
          <div>
            <h2 class="h4 fw-semibold mb-1">Menu Lainnya</h2>
            <div class="text-muted-2">Klik untuk lihat rasa & bahan utama.</div>
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
                        style="background: rgba(255,255,255,.86);">
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

                  <div class="fw-semibold mb-1">Bahan utama</div>
                  <div class="text-muted-2" style="line-height:1.7;">
                    <?= $m['ingredients'] ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="text-muted-2 small mt-3">
          *Harga bisa berubah mengikuti ketersediaan bahan. Untuk pesanan ramai-ramai bisa request paket.
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

  <!-- =========================
       MODALS (AUTO GENERATED)
       ========================= -->
  <?php foreach($highlight as $m): ?>
    <div class="modal fade" id="modal-<?= $m['id'] ?>" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content card-soft" style="border-radius: 18px; overflow:hidden;">
          <div class="modal-header" style="background: rgba(11,127,117,.06); border-bottom: 1px solid rgba(2,6,23,.08);">
            <div>
              <div class="fw-semibold" style="font-size: 1.1rem;"><?= $m['name'] ?></div>
              <div class="text-muted-2 small"><?= rupiah($m['price']) ?> / porsi</div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>

          <div class="modal-body">
            <div class="d-flex gap-3 align-items-start">
              <img src="<?= $m['img'] ?>"
                   alt="<?= htmlspecialchars($m['name']) ?>"
                   class="rounded-4"
                   style="width:120px; height:120px; object-fit:cover;"
                   onerror="this.src='https://dummyimage.com/600x600/eeeeee/777777&text=Foto+Menu';">
              <div class="flex-grow-1">
                <span class="badge-soft" style="<?= $m['tagStyle'] ?>">
                  <i class="bi bi-award"></i> <?= $m['tag'] ?>
                </span>
                <div class="text-muted-2 small mt-2">
                  *Bahan/topping bisa menyesuaikan ketersediaan.
                </div>
              </div>
            </div>

            <hr class="soft my-3">

            <div class="fw-semibold mb-1">Rasa</div>
            <div class="text-muted-2" style="line-height:1.75;">
              <?= $m['taste'] ?>
            </div>

            <hr class="soft my-3">

            <div class="fw-semibold mb-1">Bahan utama</div>
            <div class="text-muted-2" style="line-height:1.75;">
              <?= $m['ingredients'] ?>
            </div>

            <hr class="soft my-3">

            <div class="fw-semibold mb-1">Saran nikmat</div>
            <div class="text-muted-2" style="line-height:1.75;">
              <?= $m['pairing'] ?>
            </div>
          </div>

          <div class="modal-footer" style="border-top: 1px solid rgba(2,6,23,.08);">
            <button type="button" class="btn btn-outline-brand" data-bs-dismiss="modal">
              Tutup
            </button>
            <a href="?page=order" class="btn btn-brand">
              <i class="bi bi-bag-check me-1"></i> Pesan Sekarang
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

</main>
