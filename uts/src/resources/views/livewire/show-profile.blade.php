<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beasiswa Cemerlang</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to bottom right, #f0f4ff, #ffffff);
      color: #333;
      line-height: 1.6;
    }

    .beasiswa-section {
      min-height: 100vh;
      padding: 60px 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .beasiswa-container {
      max-width: 1100px;
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      border: 1px solid #e0ecff;
    }

    .header {
      text-align: center;
      margin-bottom: 40px;
    }

    .header h1 {
      font-size: 36px;
      color: #1e40af;
      margin-bottom: 10px;
    }

    .header p {
      font-size: 16px;
      color: #555;
      max-width: 700px;
      margin: 0 auto;
    }

    .grid-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .card {
      background: #f9f9ff;
      padding: 20px 25px;
      border-radius: 14px;
      border-left: 5px solid #3b82f6;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    }

    .card h2 {
      font-size: 20px;
      color: #2563eb;
      margin-bottom: 10px;
    }

    .card p,
    .card ul {
      font-size: 15px;
      color: #444;
    }

    .card ul {
      padding-left: 20px;
      list-style: disc;
    }

    .cta {
      text-align: center;
      border-left: none;
      background: #2563eb;
      color: #fff;
    }

    .cta button {
      padding: 12px 28px;
      font-size: 16px;
      background: #1e40af;
      color: #fff;
      border: none;
      border-radius: 9999px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .cta button:hover {
      background: #1d4ed8;
    }

    @media (max-width: 600px) {
      .beasiswa-container {
        padding: 30px 20px;
      }

      .header h1 {
        font-size: 28px;
      }
    }
  </style>
</head>
<body>

  <section class="beasiswa-section">
    <div class="beasiswa-container">
      <div class="header">
        <h1>Beasiswa Cemerlang</h1>
        <p>
          Program pendidikan untuk siswa dan mahasiswa berprestasi dengan dukungan finansial serta pengembangan karakter dan kepemimpinan.
        </p>
      </div>

      <div class="grid-info">
        <!-- Tentang -->
        <div class="card">
          <h2>Tentang Program</h2>
          <p>
            Beasiswa Cemerlang dirancang untuk mendorong potensi generasi muda melalui bantuan pendidikan dan bimbingan. Penerima akan mendapatkan pelatihan, mentoring, serta akses ke berbagai peluang pengembangan diri.
          </p>
        </div>

        <!-- Manfaat -->
        <div class="card">
          <h2>Manfaat Beasiswa</h2>
          <ul>
            <li>Bantuan biaya pendidikan (SPP, UKT)</li>
            <li>Pelatihan soft skills dan kepemimpinan</li>
            <li>Akses mentoring dari profesional</li>
            <li>Sertifikat dan peluang magang</li>
          </ul>
        </div>

        <!-- Persyaratan -->
        <div class="card">
          <h2>Persyaratan</h2>
          <ul>
            <li>Siswa/mahasiswa aktif di institusi pendidikan</li>
            <li>Nilai akademik tinggi (≥90/3.00 IPK)</li>
            <li>Tidak sedang menerima beasiswa lain</li>
            <li>Melengkapi berkas dan lulus seleksi</li>
          </ul>
        </div>

        <!-- CTA -->
        <div class="card cta">
          <button>Daftar Sekarang</button>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
