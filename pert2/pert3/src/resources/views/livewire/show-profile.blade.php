<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Andini Larasati</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background-color: #ffe6f0; /* pink lembut */
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      background-color:rgb(247, 242, 246);
      border: none;
      border-radius: 20px;
    }
    .btn-outline-primary {
      border-color:rgb(8, 8, 8);
      color:rgb(8, 8, 8);
    }
    .btn-outline-primary:hover {
      background-color:rgb(10, 10, 10);
      color: white;
    }
    .btn-outline-secondary {
      border-color:rgb(10, 10, 10);
      color:rgb(8, 8, 8);
    }
    .btn-outline-secondary:hover {
      background-color:rgb(8, 8, 8);
      color: white;
    }
    .btn-outline-dark {
      border-color:rgb(3, 3, 3);
      color:rgb(14, 13, 13);
    }
    .btn-outline-dark:hover {
      background-color: #ff69b4;
      color: white;
    }
    .card-body p:last-child {
      font-style: italic;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-lg p-4">
        <div class="card-body text-center">
          <!-- Foto Profil -->
          <img src="{{ asset('front/assets/fotoandin.jpg') }}"
     alt="Foto Profil Andini"
     class="rounded-circle img-thumbnail shadow-sm mb-3"
     style="width: 180px; border: 5px solid rgb(253, 13, 93);">

          <!-- Informasi Dasar -->
          <h4 class="mb-0 text-danger">Andini Larasati</h4>
          <small class="text-muted d-block">Fakultas Ilmu Komputer</small>
          <small class="text-muted mb-3 d-block">Teknik Informatika</small>
          <small class="text-muted mb-3 d-block">2023-Sekarang</small>
          <!-- Lokasi dan Tanggal -->
          <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-outline-primary btn-sm mx-2">
              <i class="fas fa-map-marker-alt me-1"></i>Tangerang
            </button>
            <button class="btn btn-outline-secondary btn-sm mx-2">
              <i class="fas fa-calendar-alt me-1"></i>14 April 2025
            </button>
          </div>

          <!-- Media Sosial -->
          <div class="mb-3">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" title="Instagram">
              <i class="fab fa-instagram"></i>
              <a href="https://www.instagram.com/andiniiilrs" target="_blank">My Instagram</a>
            </a>
            <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" title="My Website">
              <i class="fab fa-My Website"></i>
              <a href="https://esaunggul.ac.id" target="_blank">My Website</a>
            </a>
            <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" title="GitHub">
              <i class="fab fa-github"></i>
              <a href="https://github.com/andinilarasati" target="_blank">My GitHub</a>
            </a>
          </div>

          <!-- Tentang Saya -->
          <p class="text-muted">
           Mahasiswa Teknik Informatika yang sedang menempuh pendidikan dari tahun 2023 sampai sekarang
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
