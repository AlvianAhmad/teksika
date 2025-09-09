<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="{{ ('css/welcome.css') }}">
</head>
<body>

  <!-- LOGO -->
  <div class="logo">
    <img src="{{ asset('images/logo-putih.png') }}" alt="Logo" />
  </div>

  <!-- TEKS -->
  <div class="text">Solusi tukang terpercaya</div>
  <div class="subtitle">
    Platform digital yang menghubungkan anda dengan tukang<br>
    berpengalaman secara cepat dan mudah.
  </div>

  <!-- SEGITIGA GARIS (besar & samar) -->
  <svg class="triangle t1" viewBox="0 0 300 300">
    <polygon points="40,260 260,200 100,40"/>
  </svg>
  <svg class="triangle t2" viewBox="0 0 300 300">
    <polygon points="60,40 280,120 150,280"/>
  </svg>
  <svg class="triangle t3" viewBox="0 0 300 300">
    <polygon points="20,220 280,160 120,60"/>
  </svg>
  <svg class="triangle t4" viewBox="0 0 300 300">
    <polygon points="80,280 260,80 140,40"/>
  </svg>
</body>
<script src="{{ asset('js/welcome.js') }}"></script>