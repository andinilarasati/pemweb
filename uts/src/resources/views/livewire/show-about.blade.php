<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tentang Kami - Beasiswa Cemerlang</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to bottom right, #f0f4ff, #ffffff);
      color: #333;
    }

    .about-section {
      padding: 60px 20px;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      text-align: center;
    }

    .section-title {
      font-size: 32px;
      color: #1e3a8a;
      margin-bottom: 20px;
    }

    .about-description {
      font-size: 16px;
      color: #444;
      line-height: 1.7;
      margin-bottom: 40px;
    }

    .about-values {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
    }

    .value-card {
      background: #ffffff;
      border: 1px solid #dbeafe;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      padding: 25px;
      width: 100%;
      max-width: 400px;
      text-align: left;
    }

    .value-card h3 {
      font-size: 20px;
      color: #2563eb;
      margin-bottom: 10px;
    }

    .value-card p,
    .value-card ul {
      font-size: 15px;
      color: #555;
      line-height: 1.6;
      margin: 0;
      padding: 0;
    }

    .value-card ul {
      list-style: disc inside;
    }

    @media (max-width: 600px) {
      .value-card {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <section class="about-section">
    <div class="container">
      <h2 class="section-title">Tentang Kami</h2>
      <p class="about-description">
        <strong>Beasiswa Cemerlang</strong> adalah program bantuan pendidikan yang didedikasikan untuk siswa dan mahasiswa berprestasi dari berbagai latar belakang.
        Kami percaya bahwa potensi luar biasa dapat tumbuh dari siapa saja, dan melalui program ini, kami menyediakan dukungan finansial, pelatihan soft skills,
        dan mentoring profesional agar generasi muda dapat berkembang secara maksimal.
      </p>

      <div class="about-values">
        <div class="value-card">
          <h3>Visi</h3>
          <p>Membangun generasi unggul dan berdaya saing global melalui pendidikan yang merata dan inklusif.</p>
        </div>
        <div class="value-card">
          <h3>Misi</h3>
          <ul>
            <li>Menyediakan beasiswa bagi pelajar dan mahasiswa berprestasi.</li>
            <li>Mendampingi pengembangan potensi diri dan karakter.</li>
            <li>Menjadi jembatan menuju kesempatan belajar dan berkarya lebih luas.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
