<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEKSIKA</title>
      <link rel="stylesheet" href="{{ asset('css/landingpageuser.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <!-- Hero Section -->
<main>
  <section class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <div class="logo-title">
          <img src="{{ asset('images/logo-biru.png') }}" alt="Logo Teksika">
          <h1><span class="brand">TEKSIKA</span></h1>
        </div>
        <h2>Solusi Teknisi <span class="highlight">Terpercaya</span></h2>
        <p>Solusi Perbaikan Terlengkap – Teknisi berpengalaman, siap datang ke lokasi Anda dengan cepat dan tepat.</p>
        <a href="{{ route('menu_login') }}" class="btn-primary">+ Mulai Request Sekarang</a>
      </div>
      <div class="hero-image">
        <img src="{{ asset('images/benerinac.jpg') }}"alt="Teknisi Sedang Bekerja">
      </div>
    </div>
  </section>


  <!-- Services Section -->
  
  <section class="services">
    <h2>Layanan Kami</h2>
    <p>Solusi Perbaikan Terlengkap – Teknisi berpengalaman, siap datang ke lokasi Anda dengan cepat dan tepat.</p>

    <div class="service-cards">
      <div class="card">
        <i class="fas fa-bolt listrik"></i>
        <h3>Listrik</h3>
        <p>Instalasi & perbaikan listrik professional dengan standar keamanan tinggi</p>
      </div>
      <div class="card">
        <i class="fa-solid fa-wrench"></i>
        <h3>Plumbing</h3>
        <p>Solusi pipa dan saluran air terpercaya untuk kebutuhan rumah dan kantor</p>
      </div>
      <div class="card">
        <i class="fas fa-snowflake ac"></i>
        <h3>AC</h3>
        <p>Service & instalasi AC berkualitas dengan teknologi terkini</p>
      </div>
      <div class="card">
        <i class="fa-solid fa-palette cat"></i>
        <h3>Cat</h3>
        <p>Cat interior & eksterior professional dengan hasil finishing sempurna</p>
      </div>
    </div>
  </section>


  <!-- Portfolio Section -->

  <section class="portfolio">
    <h2>Hasil Kerja Terbaik Kami</h2>
    <div class="portfolio-cards">
      
      <div class="portfolio-card">
        <img src="{{ asset('images/Benerin listrik.jpeg') }}" alt="Renovasi Listrik">
        <div class="portfolio-content">
          <h3>Renovasi Listrik Rumah</h3>
          <p>Penambahan stop kontak, penggantian MCB, serta perapian kabel rumah.</p>
          <div class="portfolio-info">
            <span><i class="fa-solid fa-location-dot"></i> Sudirman, Jakarta Pusat</span>
            <span><i class="fa-solid fa-clock"></i> 1 Hari</span>
          </div>
          <div class="divider"></div>
          <div class="portfolio-footer">
            <span class="price">Rp.150.000</span>
            <a href="#" class="btn-secondary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="portfolio-card">
        <img src="{{ asset('images/benerinac.jpg') }}" alt="Instalasi AC">
        <div class="portfolio-content">
          <h3>Instalasi AC</h3>
          <p>Pemasangan unit AC baru atau servis menyeluruh agar udara tetap sejuk dan bersih.</p>
          <div class="portfolio-info">
            <span><i class="fa-solid fa-location-dot"></i> Sudirman, Jakarta Pusat</span>
            <span><i class="fa-solid fa-clock"></i> 2 Hari</span>
          </div>
          <div class="divider"></div>
          <div class="portfolio-footer">
            <span class="price">Rp.150.000</span>
            <a href="#" class="btn-secondary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="portfolio-card">
        <img src="{{ asset('images/pipa.jpeg') }}" alt="Instalasi Plumbing">
        <div class="portfolio-content">
          <h3>Perbaikan & Instalasi Plumbing</h3>
          <p>Perbaikan pipa bocor dan pemasangan sistem air baru untuk rumah Anda.</p>
          <div class="portfolio-info">
            <span><i class="fa-solid fa-location-dot"></i> Sudirman, Jakarta Pusat</span>
            <span><i class="fa-solid fa-clock"></i> 2 Hari</span>
          </div>
          <div class="divider"></div>
          <div class="portfolio-footer">
            <span class="price">Rp.150.000</span>
            <a href="#" class="btn-secondary">Lihat Detail</a>
          </div>
        </div>
      </div>

<div id="popup-listrik" class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>

    <!-- Judul -->
    <h2>Renovasi Listrik Rumah</h2>

    <!-- Foto -->
    <div class="popup-images">
      <img src="{{ asset('images/Benerin listrik.jpeg') }}"alt="Renovasi Listrik">
      <img src="{{ asset('images/Benerin listrik.jpeg') }}" alt="Renovasi Listrik">
    </div>

    <!-- Konten utama: deskripsi (kiri) + card info (kanan) -->
    <div class="popup-body">
      <!-- Deskripsi -->
      <div class="popup-text">
        <h3>Deskripsi Project</h3>
        <p>
          Proyek ini mencakup pemasangan stop kontak tambahan, penggantian MCB lama,
          serta penataan ulang jalur kabel listrik agar lebih rapi dan aman sesuai standar SNI.
        </p>

        <h3>Detail Pekerjaan</h3>
        <ul>
          <li>✅ Penambahan stop kontak</li>
          <li>✅ Penggantian MCB baru</li>
          <li>✅ Perapian & penataan kabel listrik</li>
        </ul>
      </div>

      <!-- Card Info -->
      <div class="info-card">
        <span class="badge">Listrik</span>
        <p><i class="fa-solid fa-location-dot"></i> Sudirman, Jakarta Pusat</p>
        <p><i class="fa-solid fa-clock"></i> 1 Hari</p>
        <p><i class="fa-solid fa-calendar"></i> 2025-01-10</p>
        <p><i class="fa-solid fa-user"></i> Andi, Tim Listrik Pro</p>
        <div class="divider"></div>
        <p class="price-label">Total Biaya:</p>
        <p class="price-value">Rp.150.000</p>
      </div>
    </div>
  </div>
</div>

<!-- POPUP MODAL AC -->
<div id="popup-ac" class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>

    <!-- Judul -->
    <h2>Servis & Perawatan AC</h2>

    <!-- Foto -->
    <div class="popup-images">
      <img src="{{ asset('images/benerinac.jpg') }}" alt="Servis AC">
      <img src="{{ asset('images/benerinac.jpg') }}" alt="Servis AC">
    </div>

    <!-- Konten utama: deskripsi (kiri) + card info (kanan) -->
    <div class="popup-body">
      <!-- Deskripsi -->
      <div class="popup-text">
        <h3>Deskripsi Project</h3>
        <p>
          Servis rutin untuk menjaga performa AC tetap dingin dan hemat listrik, 
          termasuk pembersihan filter, evaporator, serta pengecekan freon.
        </p>

        <h3>Detail Pekerjaan</h3>
        <ul>
          <li>✅ Pembersihan filter & evaporator</li>
          <li>✅ Pengecekan tekanan freon</li>
          <li>✅ Pemeriksaan kondisi unit indoor & outdoor</li>
        </ul>
      </div>

      <!-- Card Info -->
      <div class="info-card">
        <span class="badge">AC</span>
        <p><i class="fa-solid fa-location-dot"></i> Tebet, Jakarta Selatan</p>
        <p><i class="fa-solid fa-clock"></i> 2 Jam</p>
        <p><i class="fa-solid fa-calendar"></i> 2025-01-15</p>
        <p><i class="fa-solid fa-user"></i> Budi, Teknisi AC</p>
        <div class="divider"></div>
        <p class="price-label">Total Biaya:</p>
        <p class="price-value">Rp.150.000</p>
      </div>
    </div>
  </div>
</div>

<!-- POPUP MODAL PLUMBING -->
<div id="popup-plumbing" class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>

    <!-- Judul -->
    <h2>Perbaikan Instalasi Plumbing</h2>

    <!-- Foto -->
    <div class="popup-images">
      <img src="{{ asset('images/pipa.jpeg') }}" alt="Plumbing">
      <img src="{{ asset('images/pipa.jpeg') }}" alt="Plumbing">
    </div>

    <!-- Konten utama: deskripsi (kiri) + card info (kanan) -->
    <div class="popup-body">
      <!-- Deskripsi -->
      <div class="popup-text">
        <h3>Deskripsi Project</h3>
        <p>
          Perbaikan saluran air yang mampet, penggantian pipa rusak, 
          serta pengecekan kebocoran untuk memastikan instalasi berjalan normal kembali.
        </p>

        <h3>Detail Pekerjaan</h3>
        <ul>
          <li>✅ Pembersihan saluran air mampet</li>
          <li>✅ Penggantian pipa bocor/rusak</li>
          <li>✅ Pengecekan keseluruhan instalasi plumbing</li>
        </ul>
      </div>

      <!-- Card Info -->
      <div class="info-card">
        <span class="badge">Plumbing</span>
        <p><i class="fa-solid fa-location-dot"></i> Depok, Jawa Barat</p>
        <p><i class="fa-solid fa-clock"></i> 1 Hari</p>
        <p><i class="fa-solid fa-calendar"></i> 2025-01-20</p>
        <p><i class="fa-solid fa-user"></i> Suryo, Ahli Plumbing</p>
        <div class="divider"></div>
        <p class="price-label">Total Biaya:</p>
        <p class="price-value">Rp.150.000</p>
      </div>
    </div>
  </div>
</div>
</section>


  <!-- Review & Rating Section -->

  <section class="reviews">
    <h2>Ulasan Pelanggan</h2>
    <div class="review-cards">
      <div class="review-card">
        <p>"Pelayanan cepat dan hasil rapi banget. Recommended!"</p>
        <div class="reviewer">
          <img src="{{ asset('images/user1.png') }}" alt="Andi">
          <div>
            <h4>Andi</h4>
            <div class="stars">⭐⭐⭐⭐⭐</div>
          </div>
        </div>
      </div>
      <div class="review-card">
        <p>"Teknisi ramah dan profesional, harga juga sesuai."</p>
        <div class="reviewer">
          <img src="{{ asset('images/user2.png') }}" alt="Sinta">
          <div>
            <h4>Sinta</h4>
            <div class="stars">⭐⭐⭐⭐</div>
          </div>
        </div>
      </div>
      <div class="review-card">
        <p>"Saya pakai untuk perbaikan AC, hasilnya dingin lagi. Mantap!"</p>
        <div class="reviewer">
          <img src="{{ asset('images/user3.jpg') }}" alt="Budi">
          <div>
            <h4>Budi</h4>
            <div class="stars">⭐⭐⭐⭐⭐</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-top">
    <h2>Siap Memulai Project Anda?</h2>
    <p>Dapatkan Teknisi berpengalaman, siap datang ke lokasi Anda dengan cepat dan tepat.</p>
    <a href="{{ route('menu_login') }}" class="btn-request">+ Mulai Request Sekarang</a>
  </div>

  <div class="footer-bottom">
    <img src="{{ asset('images/logo-putih.png') }}" alt="Logo" class="footer-logo">
   <p>Teksika</p>
<div class="social-icons">
  <a href="https://www.facebook.com/share/16VxbAQdAY/" target="_blank"><i class="fab fa-facebook"></i></a>
  <a href="https://www.instagram.com/teksika.id/" target="_blank"><i class="fab fa-instagram"></i></a>
  <a href="https://wa.me/62895373441563 target="_blank"><i class="fab fa-whatsapp"></i></a>
</div>

    <p>Alamat: Wanaherang, Kec. Gunungputri, Kab. Bogor, Jawa Barat</p>
    <p>© 2025 TEKSIKA. Semua Hak Dilindungi</p>
  </div>
</footer>

  
<script src="{{ asset('js/landingpageuser.js') }}"></script>
<script src="{{ asset('js/popuplanding.js') }}"></script>
</body>
</html>