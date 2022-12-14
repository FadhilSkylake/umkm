<?= $this->include('front/template/top'); ?>

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="position-relative">
        <video autoplay loop muted id="video-background" poster="assets/img/header-background.jpg" playsinline>
            <source src="<?= base_url(); ?>/assets/home.mp4" type="video/mp4" />
        </video>
        <!-- <img class="img-fluid" src="<?= base_url(); ?>/front/img/carousel-1.jpg" alt=""> -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 text-center">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat Datang ke Website</h5>
                        <h1 class="display-3 text-white animated slideInDown mb-4">DINAS KOPERASI UMKM PERDAGANGAN DAN PERINDUSTRIAN</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?= base_url(); ?>/assets/kantor.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="section-title text-start">
                        <h1 class="display-5 mb-4">Tentang Dinas</h1>
                    </div>
                    <p class="mb-4 pb-2" style="text-align: justify;">Dinas Koperasi, UMKM dan Perindustrian mempunyai tugas pokok melaksanakan sebagian urusan Pemerintahan Daerah berdasarkan azas otonomi dan pembantuan di bidang Koperasi, UMKM dan Perindustrian.

                        Untuk melaksanakan tugas pokok tersebut Dinas Koperasi, UMKM dan Perindustrian mempunyai fungsi :

                        Perumusan kebijakan teknis di bidang sekretariat , Koperasi , UMKM dan Perindustrian
                        Penyelenggraaan urusan pemerintahan dan pelayanan umum di bidang Sekretariat, Koperasi, UMKM dan Perindustrian.
                        Pembinaan dan pelaksanaan tugas di bidang Sekretariat Koperasi, UMKM dan Perindustrian
                        Penyelenggaraan kesekretariatan Dinas.
                        Pembinaan, pengendalian, pengawasan dan koordinasi.
                        Pelaksanaan tugas lain yang diberikan oleh Walikota sesuai dengan tugas pokok dan fungsinya.</p>
                    <div class="row g-4 mb-4 pb-2">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                    <i class="fa fa-users fa-2x text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-1" data-toggle="counter-up"><?= $daftar; ?></h2>
                                    <p class="fw-medium mb-0">UMKM TERDAFTAR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/login" class="btn btn-primary py-3 px-5">LOGIN ADMINISTRATOR</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Projects Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5">Kegiatan</h1>
        </div>
        <div class="row g-4 portfolio-container">
            <?php foreach ($kegiatan as $k) : ?>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="/img/<?= $k['dokumentasi']; ?>" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="/img/<?= $k['dokumentasi']; ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2"><?= $k['nama_kegiatan']; ?></p>
                            <h5 class="lh-base mb-0"><?= $k['deskripsi']; ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Projects End -->

<?= $this->include('front/template/bot'); ?>