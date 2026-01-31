<?php
// ===============================
// CONFIGURATION FILE (PRODUCTION)
// Cafe A5
// ===============================

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Base Path (filesystem) — AMAN
define('BASE_PATH', realpath(__DIR__ . '/../'));

// Base URL (GANTI domain asli)
define('BASE_URL', 'https://0rca.cloud/');

// ===============================
// INFORMASI WEBSITE
// ===============================
$site = [
    'name'        => 'Cafe A5',
    'tagline'     => 'Cita Rasa Khas Minangkabau untuk Keluarga',
    'description' => 'Cafe A5 menyajikan makanan dan minuman khas Minangkabau seperti Sala Lauak dan Es Tebak dalam suasana kafe modern yang nyaman untuk keluarga.',
];

// ===============================
// KONTAK
// ===============================
$contact = [
    'address'  => 'Jl. Contoh Alamat No. 123',
    'city'     => 'Padang, Sumatera Barat',
    'phone'    => '+62 812-3456-7890',
    'whatsapp' => '+62 812-3456-7890',
    'open'     => '09:00',
    'close'    => '22:00',
];

// ===============================
// ORDER ONLINE
// ===============================
$order = [
    'gofood'     => 'https://gofood.co.id/padang/cafe-a5',
    'grabfood'   => 'https://food.grab.com/id/id/restaurant/cafe-a5',
    'shopeefood' => 'https://shopee.co.id/cafe-a5',
];

// ===============================
// MEDIA SOSIAL
// ===============================
$social = [
    'instagram' => 'https://instagram.com/cafea5',
    'tiktok'    => 'https://tiktok.com/@cafea5',
    'facebook'  => 'https://facebook.com/cafea5',
];
