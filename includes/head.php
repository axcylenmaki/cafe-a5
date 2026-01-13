<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $site['name']; ?> • <?= $site['tagline']; ?></title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <!-- Bootstrap Icons (bi bi-...) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Custom CSS kamu -->
  <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/custom.css">

  <!-- OPTIONAL: kalau kamu mau font poppins beneran kepake -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Tambahin CSS modern yang kamu pakai di home (brand-badge, btn-brand, dll) -->
  <style>
    :root{
      --brand-teal: var(--primary);
      --brand-gold: var(--secondary);
      --brand-pink: var(--accent);
    }
    .brand-badge{
      width: 40px; height: 40px;
      border-radius: 12px;
      background: linear-gradient(135deg, rgba(11,127,117,.18), rgba(244,166,65,.18));
      display:grid; place-items:center;
      border: 1px solid rgba(11,127,117,.18);
    }
    .btn-brand{
      background: var(--primary);
      border: 1px solid var(--primary);
      color:#fff;
      border-radius: 14px;
      padding:.75rem 1rem;
    }
    .btn-brand:hover{ background:#09685f; border-color:#09685f; color:#fff; }
    .btn-outline-brand{
      color: var(--primary);
      border: 1px solid rgba(11,127,117,.45);
      border-radius: 14px;
      padding:.75rem 1rem;
    }
    .btn-outline-brand:hover{ background: rgba(11,127,117,.08); border-color: rgba(11,127,117,.65); }
    .text-muted-2{ color:#64748b !important; }
    .glass-card{
      background: rgba(255,255,255,.72);
      border: 1px solid rgba(11,127,117,.14);
      border-radius: 22px;
      box-shadow: 0 20px 60px rgba(2,6,23,.08);
    }
    .soft-card{
      background:#fff;
      border: 1px solid rgba(2,6,23,.06);
      border-radius: 22px;
      box-shadow: 0 14px 40px rgba(2,6,23,.06);
    }
    .icon-pill{
      width:44px; height:44px;
      border-radius:14px;
      display:grid; place-items:center;
      background: rgba(11,127,117,.12);
      border: 1px solid rgba(11,127,117,.18);
      color: var(--primary);
    }
    .chip{
      display:inline-flex;
      gap:.5rem; align-items:center;
      padding:.45rem .7rem;
      border-radius:999px;
      background: rgba(244,166,65,.16);
      border: 1px solid rgba(244,166,65,.24);
      color:#7a4d00;
      font-weight:600;
      font-size:.9rem;
    }
    .hero{
      border-radius: 28px;
      background:
        radial-gradient(1200px 400px at 20% 10%, rgba(244,166,65,.25), transparent 60%),
        radial-gradient(900px 380px at 90% 30%, rgba(243,166,200,.22), transparent 55%),
        linear-gradient(135deg, rgba(11,127,117,.22), rgba(11,127,117,.06));
      border: 1px solid rgba(11,127,117,.16);
      overflow:hidden;
    }
    /* FIX NAVBAR PUTIH (biar teks kebaca) */
.navbar.sticky-top .navbar-brand,
.navbar.sticky-top .navbar-brand strong,
.navbar.sticky-top .navbar-brand small,
.navbar.sticky-top .nav-link{
  color: #0f172a !important;
}

.navbar.sticky-top .nav-link:hover{
  color: var(--primary) !important;
}

.navbar.sticky-top .nav-link.active{
  color: var(--primary) !important;
  font-weight: 700;
}

/* biar icon hamburger keliatan di navbar putih */
.navbar.sticky-top .navbar-toggler{
  border-color: rgba(2,6,23,.18) !important;
}
.navbar.sticky-top .navbar-toggler-icon{
  filter: invert(1) grayscale(1);
}
/* ==== FIX: teks dalam card di HERO biar kebaca ==== */
.hero .glass-card,
.hero .soft-card{
  color: #0f172a !important; /* teks gelap */
}

.hero .glass-card .text-muted,
.hero .soft-card .text-muted{
  color: #475569 !important;
}

/* icon juga biar tetep jelas */
.hero .glass-card i,
.hero .soft-card i{
  opacity: 1 !important;
}

/* kalau ada badge/pill yang ketutup putih, paksa kebaca */
.hero .badge{
  color: #0f172a;
}

  </style>
</head>
<body>
