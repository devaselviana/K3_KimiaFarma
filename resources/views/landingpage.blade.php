{{-- resources/views/landingpage.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Informasi K3 - PT Kimia Farma</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    /* Navbar */
    .navbar {
      background-color: #003366;
    }

    .navbar-brand, .nav-link {
      color: white !important;
    }

    /* Hero Section */
    .hero {
      background: url('https://images.unsplash.com/photo-1603398938378-d482a21917cc?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
      color: white;
      height: 90vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-direction: column;
      padding: 0 20px;
      position: relative;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .hero h1, .hero p, .hero a {
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
      color: #003366;
    }

    footer {
      background: #003366;
      color: white;
      text-align: center;
      padding: 20px 0;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">K3 Kimia Farma</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#policy">Kebijakan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Selamat Datang di Sistem Informasi K3</h1>
    <p>PT Kimia Farma Tbk - Komitmen Kami terhadap Keselamatan dan Kesehatan Kerja</p>
    <a href="#about" class="btn btn-light mt-3">Pelajari Lebih Lanjut</a>
  </section>

  <!-- Tentang K3 -->
  <section id="about" class="container py-5">
    <h2 class="section-title">Tentang K3 di Kimia Farma</h2>
    <p class="text-center">
      PT Kimia Farma Sejahtera adalah bagian dari Kimia Farma Group yang bergerak di bidang industri manufaktur kimia dan layanan kesehatan. 
      Produk yang dihasilkan antara lain cat, deterjen, pupuk, serta layanan kefarmasian di apotek. Perusahaan ini berperan penting namun juga memiliki risiko tinggi karena penggunaan Bahan Berbahaya dan Beracun (B3).
      Industri manufaktur kimia, seperti yang dijalankan oleh PT Kimia Farma Sejahtera, memegang peranan vital dalam perekonomian nasional dengan memproduksi cat, deterjen, dan pupuk. 
      Namun, proses produksi ini melibatkan penggunaan dan penanganan Bahan Berbahaya dan Beracun (B3) yang memiliki potensi risiko tinggi. 
      Risiko tersebut mencakup kecelakaan kerja akut seperti kebakaran, ledakan, dan tumpahan bahan kimia, serta risiko kesehatan jangka panjang bagi tenaga kerja akibat paparan kronis, seperti gangguan pernapasan, iritasi kulit, dan penyakit sistemik lainnya.
      PT Kimia Farma berkomitmen untuk menerapkan Keselamatan dan Kesehatan Kerja (K3) di setiap aktivitas operasional.
      Kami memastikan lingkungan kerja yang aman, sehat, dan bebas dari potensi bahaya dengan menerapkan sistem manajemen K3
      yang sesuai dengan standar nasional dan internasional.
    </p>
  </section>

  <!-- Kebijakan K3 -->
  <section id="policy" class="bg-light py-5">
    <div class="container">
      <h2 class="section-title">Kebijakan K3</h2>
      <div class="row text-center">
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
              <h5 class="fw-bold text-primary">Keselamatan</h5>
              <p>Mengutamakan keselamatan kerja di setiap proses produksi dan operasional.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
              <h5 class="fw-bold text-primary">Kesehatan</h5>
              <p>Menjamin kesehatan seluruh karyawan melalui pemeriksaan rutin dan lingkungan sehat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
              <h5 class="fw-bold text-primary">APD Lengkap</h5>
              <p>Menyediakan alat pelindung diri (APD) sesuai risiko pekerjaan dan memastikan penggunaannya.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
              <h5 class="fw-bold text-primary">Pelatihan</h5>
              <p>Memberikan pelatihan K3 secara berkala kepada seluruh karyawan untuk meningkatkan kesadaran dan tanggung jawab.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; {{ date('Y') }} PT Kimia Farma Tbk | Sistem Informasi K3</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>