<div> <!-- Root tunggal untuk Livewire -->
    <main class="container mt-5">
        <!-- PROFILE -->
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card mb-4 shadow" style="border-radius: 20px;">
                    <div class="card-body text-center bg-light" style="border-radius: 20px;">
                        <div class="mt-3 mb-4">
                            <img src="{{ asset('front/images/profile.jpg') }}"
                                class="rounded-circle img-fluid border border-3 border-pink" style="width: 120px;" />
                        </div>
                        <h4 class="my-3 text-pink fw-bold">ANDINI LARASATI</h4>
                        <p class="text-muted mb-1">Fakultas Ilmu Komputer</p>
                        <p class="text-muted mb-3">Teknik Informatika</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-outline-pink me-2">Jakarta</button>
                            <button type="button" class="btn btn-outline-pink">01 January 2024</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABOUT ME -->
        <div class="card-body p-4 text-black">
            <div class="text-center mb-3">
                <h5 class="text-pink fw-semibold">ABOUT ME</h5>
            </div>
            <div class="p-4 rounded bg-pink-light shadow-sm">
                <p class="font-italic mb-2 text-dark">Saya adalah mahasiswi aktif di Universitas Esa Unggul jurusan Teknik Informatika yang tertarik pada pengembangan web dan teknologi informasi. Saya senang belajar hal baru dan bekerja secara kreatif.</p>
                <p class="font-italic mb-2 text-dark">Saat ini, saya sedang mengembangkan proyek berbasis Laravel dan terus mendalami HTML, CSS, dan framework modern lainnya.</p>
                <p class="font-italic text-dark">Tujuan saya adalah menjadi web developer profesional yang dapat memberikan solusi digital yang inovatif.</p>
            </div>
        </div>

        <!-- LINKS -->
        <div class="card my-4 shadow-sm">
            <div class="card-body p-0">
                <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item p-3">
                        <a href="https://esaunggul.ac.id" class="text-decoration-none text-pink">
                            <i class="fa fa-globe me-2"></i>My Website
                        </a>
                    </li>
                    <li class="list-group-item p-3">
                        <a href="https://github.com/andinilarasati" class="text-decoration-none text-pink">
                            <i class="fa fa-instagram me-2"></i>My Instagram
                        </a>
                    </li>
                    <li class="list-group-item p-3">
                        <a href="https://github.com/andinilarasati" class="text-decoration-none text-pink">
                            <i class="fa fa-github me-2"></i>My GitHub
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>

        <!-- SKILLS -->
        <div class="card mb-5 shadow-sm">
            <div class="card-body">
                <h5 class="mb-4 text-pink fw-semibold">My Skills</h5>
                <p class="mb-1">HTML</p>
                <div class="progress rounded mb-3" style="height: 10px;">
                    <div class="progress-bar bg-pink" role="progressbar" style="width: 90%;" aria-valuenow="90"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-1">CSS</p>
                <div class="progress rounded mb-3" style="height: 10px;">
                    <div class="progress-bar bg-pink" role="progressbar" style="width: 90%;" aria-valuenow="90"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </main>

    <!-- Tambahan CSS -->
    <style>
        .text-pink {
            color: #d63384;
        }

        .bg-pink {
            background-color: #d63384;
        }

        .bg-pink-light {
            background-color: #fce4ec;
        }

        .btn-outline-pink {
            color: #d63384;
            border-color: #d63384;
        }

        .btn-outline-pink:hover {
            background-color: #d63384;
            color: white;
        }

        .border-pink {
            border-color: #d63384 !important;
        }
    </style>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</div>
