@extends('layouts.app')

@section('content')
    <section class="hero d-flex justify-content-center align-items-center" id="section_1">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-12">
                    <div class="hero-text">
                        <div class="hero-title-wrap d-flex align-items-center mb-4">
                            <img src="{{ asset('assets/images/my-album/1.jpeg') }}"
                                class="avatar-image avatar-image-large img-fluid" alt="">

                            <h1 class="hero-title ms-3 mb-0">Hello friends!</h1>
                        </div>

                        <h2 class="mb-4">Selamat Datang di Portofolio Pribadi Saya.</h2>
                        <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Ayo kita mulai</a></p>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#535da1" fill-opacity="1"
                d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
            </path>
        </svg>
    </section>


    <section class="about section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/my-album/5.jpeg') }}" class="about-image img-fluid"
                                    alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/my-album/9.jpeg') }}" class="about-image img-fluid"
                                    alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/my-album/10.png') }}" class="about-image img-fluid"
                                    alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/my-album/11.jpeg') }}" class="about-image img-fluid"
                                    alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <div class="about-thumb">

                        <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                            <h2 class="text-white me-4 mb-0">Cerita Saya</h2>

                            <img src="{{ asset('assets/images/my-album/1.jpeg') }}" class="avatar-image img-fluid"
                                alt="">
                        </div>

                        <h3 class="pt-2 mb-3">Tentang Saya</h3>

                        <p>
                            Saya seorang web developer dengan pengalaman empat
                            tahun, saya terlibat dalam proyek-proyek pengembangan
                            web beragam, dari situs web perusahaan, pemerintahan
                            hingga aplikasi web interaktif. Keahlian saya meliputi HTML,
                            CSS, JavaScript, PHP, serta teknologi frontend/backend
                            lainnya untuk menciptakan pengalaman pengguna yang menarik. Kolaborasi tim dan komunikasi
                            efektif juga merupakan bagian penting dari pengalaman saya dalam
                            menghadapi tantangan teknis.
                        </p>

                        <h3 class="pt-2 mb-3">Pengalaman Kerja</h3>

                        <p>
                            <b>PT Nebula Solusi Informasi</b> -
                            Kabupaten Bogor <br>
                            2019 - 2022 <br>
                            Web Developer
                        </p>

                        <p>
                            <b>PT Hantar Lintas Data</b> -
                            Jakarta Selatan <br>
                            2023 - 2024 <br>
                            Web Developer
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="featured section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <div class="profile-thumb">
                        <div class="profile-title">
                            <h4 class="mb-0">Informasi</h4>
                        </div>

                        <div class="profile-body">
                            <p>
                                <span class="profile-small-title">Nama</span>
                                <span>Abdul Fathah</span>
                            </p>

                            <p>
                                <span class="profile-small-title">Lahir</span>
                                <span>Bogor, 05 Oktober 2000</span>
                            </p>

                            <p>
                                <span class="profile-small-title">No. Telp</span>
                                <span><a href="tel: +62895609430066">+62895609430066</a></span>
                            </p>

                            <p>
                                <span class="profile-small-title">Email</span>
                                <span><a href="mailto:alfathah55@gmail.com">alfathah55@gmail.com</a></span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <div class="about-thumb">
                        <div class="row">
                            <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                <strong class="featured-numbers">4+</strong>

                                <p class="featured-text">Tahun Pengalaman Kerja</p>
                            </div>

                            <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                <strong class="featured-numbers">16</strong>

                                <p class="featured-text">Pelanggan</p>
                            </div>

                            <div class="col-lg-6 col-6 pt-4">
                                <strong class="featured-numbers">23</strong>

                                <p class="featured-text">Project Selesai</p>
                            </div>

                            <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                <strong class="featured-numbers">16</strong>

                                <p class="featured-text">Sertifikat Programming</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="clients section-padding">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-12">
                    <h3 class="text-center mb-5">Perusahaan tempat saya pernah bekerja</h3>
                </div>

                <div class="col-lg-4 col-4 clients-item-height">
                    <img src="{{ asset('assets/images/perusahaan/nsi.png') }}" class="clients-image img-perusahaan"
                        alt="">
                </div>

                <div class="col-lg-4 col-4 clients-item-height">
                    <img src="{{ asset('assets/images/perusahaan/hantar.png') }}" class="clients-image img-perusahaan"
                        alt="">
                </div>

                <div class="col-lg-4 col-4 clients-item-height">
                    <img src="{{ asset('assets/images/perusahaan/pupr.png') }}" class="clients-image img-perusahaan"
                        alt="">
                </div>

            </div>
        </div>
    </section>

    <section class="projects section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-12 ms-auto">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                        <img src="{{ asset('assets/images/white-desk-work-study-aesthetics.jpg') }}"
                            class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">Projects</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">PUSTAKA MENLHK <br> 2019</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/pustaka.png') }}" class="popup-image"
                            title="Perpustakaan Kementerian Lingkungan Hidup dan Kehutanan">
                            <img src="{{ asset('assets/images/projects/pustaka.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">SIMPANANKU BAWEL <br> 2019</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/phpl.png') }}" class="popup-image"
                            title="Sistem Informasi Monitoring dan Evaluasi Batas Areal Pemanfaatan Hutan Produksi Berbasis Web">
                            <img src="{{ asset('assets/images/projects/phpl.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">SENPI MENLHK <br> 2019</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/senpi.png') }}" class="popup-image"
                            title="Senjata API Kementerian Lingkungan Hidup dan Kehutanan">
                            <img src="{{ asset('assets/images/projects/senpi.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">JAPRI MENLHK <br> 2020</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/japri.png') }}" class="popup-image"
                            title="Jalur Aman Pengaduan Rahasia & Independen Kementerian Lingkungan Hidup dan Kehutanan">
                            <img src="{{ asset('assets/images/projects/japri.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">SISKLHK <br> 2021</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/sisklhk.png') }}" class="popup-image"
                            title="Sistem Informasi Statistik Kementerian Lingkungan Hidup dan Kehutanan">
                            <img src="{{ asset('assets/images/projects/sisklhk.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">API SISKLHK <br> 2021</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/api-sisklhk.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/api-sisklhk.png') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">Modul/Aplikasi <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/menu-sippa.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/menu-sippa.png') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">Kontrak Tahun Jamak/MYC <br> 2021</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/myc-sippa.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/myc-sippa.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">Usulan IBM/Padat Karya <br> 2021</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/ibm.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/ibm.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">FRONT OFFICE KOPKARHUTAN MENLHK <br> 2022</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/kopkarhut.png') }}" class="popup-image"
                            title="Koperasi Karyawan Kementerian Lingkungan Hidup dan Kehutanan">
                            <img src="{{ asset('assets/images/projects/kopkarhut.png') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Nebula Solusi Informasi</small>

                            <h6 class="projects-title">BACK OFFICE KOPKARHUTAN MENLHK <br> 2022</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/back-kopkar.png') }}" class="popup-image"
                            title="Koperasi Karyawan Kementerian Lingkungan Hidup dan Kehutanan">
                            <img src="{{ asset('assets/images/projects/back-kopkar.png') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Ditjen Cipta Karya - PUPR</small>

                            <h6 class="projects-title">Direktif Usulan Instansi Lain <br> 2023</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/direktif-sippa.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/directif-sippa.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Ditjen Cipta Karya - PUPR</small>

                            <h6 class="projects-title">Penelitian & Reviu Rkakl <br> 2023</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/rkakl.jpeg') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/rkakl.jpeg') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Hantar Lintas Data</small>

                            <h6 class="projects-title">Portal Informasi Kejadian Cuaca Ekstrem <br> 2023</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/pikacu.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/pikacu.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Hantar Lintas Data</small>

                            <h6 class="projects-title">Sistem Cadangan Nowcasting BMKG <br> 2023</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/nowcad.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/nowcad.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Hantar Lintas Data</small>

                            <h6 class="projects-title">Southeast Asia - Oceania FFG <br> 2023</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/saoffg.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/saoffg.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Ditjen Cipta Karya - PUPR</small>

                            <h6 class="projects-title">Instruksi Presiden <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/inpres.jpeg') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/inpres.jpeg') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Hantar Lintas Data</small>

                            <h6 class="projects-title">Central America FFG <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/caffg.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/caffg.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">PT Hantar Lintas Data</small>

                            <h6 class="projects-title">Haiti and Dominican Republic FFG <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/hdrffg.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/hdrffg.png') }}" class="projects-image img-fluid img-projects"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Tugas Magang</small>

                            <h6 class="projects-title">Aplikasi Penjualan Kedai Uncle Do <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/kedai-uncle-do.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/kedai-uncle-do.png') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Freelance</small>

                            <h6 class="projects-title">Aplikasi SPK Family Golf Metode SAW <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/spk-family-golf.jpeg') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/spk-family-golf.jpeg') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Freelance</small>

                            <h6 class="projects-title">Davin Laundry <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/davin-laundry.jpeg') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/davin-laundry.jpeg') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="projects-thumb">
                        <div class="projects-info">
                            <small class="projects-tag">Freelance</small>

                            <h6 class="projects-title">Aplikasi SPK Sukamaju Baru Metode SAW <br> 2024</h6>
                        </div>

                        <a href="{{ asset('assets/images/projects/spk-sukamaju-baru.png') }}" class="popup-image">
                            <img src="{{ asset('assets/images/projects/spk-sukamaju-baru.png') }}"
                                class="projects-image img-fluid img-projects" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8 col-12 ms-auto">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                        <img src="{{ asset('assets/images/handshake-man-woman-after-signing-business-contract-closeup.jpg') }}"
                            class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">Sertifikat</h2>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="col-lg-12 col-12 mx-auto">
                    <div class="row pt-lg-5">
                        <div class="col-lg-12 col-12">
                            <div class="services-thumb">
                                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/1.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/3.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/8.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/15.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/2.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/4.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/5.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/16.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/6.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/7.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/9.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/10.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="10000">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/11.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/12.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/13.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <img src="{{ asset('assets/images/sertifikat/14.png') }}"
                                                    class="d-block w-100 img-sertifikat" alt="...">
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev-two" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next-two" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
