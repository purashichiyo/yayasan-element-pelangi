<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Element Pelangi</title>
    <link rel="stylesheet" href="bootstrap-4.2.1-stable/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <script src="sidebar.js"></script>
    <script src="style.js"></script>
    <script src="bootstrap-4.2.1-stable/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4.2.1-stable/js/popper.min.js"></script>
    <script src="bootstrap-4.2.1-stable/js/bootstrap.min.js"></script>
    <script src="fa/js/all.js"></script>
</head>

<body>


    <!--Start Sidebar Function -->
    <div class="container-fluid home">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="nav-link" href="#home">HOME</a>
            <a class="nav-link" href="#about">TENTANG KAMI</a>
            <a class="nav-link" href="#program">PROGRAM</a>
            <a class="nav-link" href="#pengajar">PENGAJAR</a>
            <a class="nav-link" href="#contact">HUBUNGI KAMI</a>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; Menu </button>
        </div>
    </div>
    <!-- End Sidebar Function -->



    <!-- Up Symbol -->
    <div><a class="atas" href="#home"><i class="far fa-arrow-alt-circle-up "></i></a></div>
    <!-- end Up Symbol -->



    <!-- Banner Logo Element -->
    <div id="home" class="topbar container-fluid text-center">
        <!-- <img class ="brand" src="img/nihon.png"> -->
        <h1 style="font-size: 5rem; font-family: YuMincho;">日本語</h1>
        <h2>ELEMEN PELANGI</h2>
    </div>
    <!-- End Banner Logo -->



    <!-- Start Carousel Sliding Image-->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <div class="carousel-indicators">
            <div class="carousel-caption carousel-padding">
                <!-- <h1 class="display-4">Elemen Pelangi</h1> -->
                <img src="img/Artboard 1.png" alt="" class="logo">
                <hr class="my-4 text-center">
                <h3>Lembaga Pendidikan Bahasa Jepang</h3>
                <br>
                <a href="daftar.php">
                    <button type="button" class="btn btn-outline-light btn-lg">DAFTAR</button>
                </a>
            </div>
        </div>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <div class=" middle ">
                    <img src="img\bg-slider-black1.jpg" class="d-block img-fluid" alt="">
                    <div class="overlay"></div>

                </div>
            </div>
            <div class="carousel-item">
                <div class="middle">
                    <img src="img\bg-slider-black2.jpg" class="d-block img-fluid" alt="">
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="carousel-item item">
                <div class="middle">
                    <img src="img\bg-slider-black3.jpg" class="d-block img-fluid" alt="">
                    <div class="overlay"></div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev carousel-fg" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </div>
    <!--------------------------------->
    <!-- END: Carousel Sliding Image -->



    <!-- INTRO -->
    <br>
    <div class="container-fluid col-lg-9">
        <div class="row wellcome text-center wellcome">
            <div class="col-12">
                <h1 class="display-4" id="about">Elemen Pelangi</h1>
                <hr>
            </div>
            <div class="col-12 my-4">
                <p class="lead text-justify">Kursus Bahasa Jepang Elemen Pelangi, sejak tahun 2000, berpengalaman belasan tahun dalam dunia pendidikan Bahasa Jepang dan mencetak ratusan lulusan handal berbahasa Jepang. Dengan metode belajar khas, belajar Bahasa Jepang menjadi mudah dan menyenangkan. Sebuah kursus bahasa Jepang unggulan yang memiliki kombinasi antara orientasi penguasaan bahasa dan pemahaman budaya. Apapun program yang Anda pilih kami jamin keterampilan berbahasa Jepang Anda akan meningkat dan Anda mampu berkomunikasi dengan percaya diri</p>
            </div>
        </div>
    </div>
    <!-- end intro -->



    <!-- ICON -->
    <br>
    <div class="container-fluid col-lg-9">
        <div class="row text-center m-auto">
            <div class="col-xs-12 col-md-6 col-lg-4 p-2">
                <i class="fas fa-font fa-4x"></i>
                <h3>MEMBACA</h3>
                <p>Membaca dan memahami tulisan Bahasa Jepang</p>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4 p-2">
                <i class="fas fa-pencil-alt fa-4x"></i>
                <h3>MENULIS</h3>
                <p>Menulis huruf Jepang Hiragana, Katakana, & Kanji</p>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-4 p-2">
                <i class="fas fa-comments fa-4x"></i>
                <h3>BERKOMUNIKASI</h3>
                <p>Dapat berkomunikasi dalam Bahasa jepang</p>
            </div>
        </div>
    </div>
    <!-- end ICON -->

    <hr class="my-4">




    <!-- START Content 1 -->
    <br>
    <div class="container card">
        <div class="row text-center my-5 mx-2">
            <div class="col-md-12 col-lg-12 text-justify">
                <h2 class="text-center">Conversation Classes</h2>
                <hr>
                <p class="lead mb-5">
                    Anda ingin bisa confident dan percaya diri dalam berbicara bahasa jepang?
                    Dengan metode kami dalam Conversation Classes memungkinkan anda untuk lebih cepat
                    dapat berkomunikasi dengan teman ataupun rekan kerja dengan bahasa Jepang.
                    Kami mengajarkan penggunaan kalimat-kalimat percakapan yg tepat dalam berbagai situasi.
                </p>
            </div>
            <div class="col-md-12 col-lg-12">
                <img src="img/classroom1.jpg" class="img-fluid rounded">
            </div>
        </div>
    </div>
    <!-- end content1 -->



    <!-- START Content 2 -->
    <br>
    <div class="container card">
        <div class="row text-center my-5 mx-2">
            <div class="col-md-12 col-lg-12 text-justify">
                <h2 class="text-center">JLPT Preparation Classes</h2>
                <hr>
                <p class="lead mb-5">
                    Jika anda ingin mengikuti test JLPT atau NAT-TES dan ingin lebih fasih dalam berkomuniksai dengan
                    bahasa jepang
                    JLPT Preparation Classes ini akan sangat membantu anda. Di kelas ini anda akan di ajarkan Bahasa
                    Jepang
                    dengan teori, vocabulary, grammar secara menyeluruh serta segala hal yang di perlukan untuk dapat
                    lulusan
                    ujian JLPT maupun NAT-TES
                </p>
            </div>
            <div class="col-md-12 col-lg-12">
                <img src="img/classroom2.jpg" class="img-fluid shadow rounded">
            </div>
        </div>
    </div>
    <br>
    <!-- end content2 -->

    
    
    <!-- START Our Focus -->
    <div class="container-fluid bg-primary text-white">
        <div class="row p-3">
            <div class=" col-md-10 col-lg-4 my-5 mx-5 text-center">
                <h2>Fokus Kami</h2>
                <p class="font-weight-light">
                    Menguasai 4 (empat) ketrampilan berbahasa : Speaking (Berbicara), Listening (Mendengar), Reading
                    Comprehension
                    (Pemahaman Bacaan) dan Writing (Menulis).
                </p>
                <p class="font-weight-light">
                    Lulus Ujian Bahasa Jepang (JLPT) atau NAT-TEST di dari level N5, N4, N3, N2 dan N1.
                </p>
                <p class="font-weight-light">
                    Memahami kebudayaan dan kebiasaan orang Jepang.
                </p>
                <p class="font-weight-light">Setelah mencapai kemampuan Bahasa Jepang tingkat menengah sampai mahir,
                    siswa bisa
                    menggunakannya untuk menunjang
                    karirnya atau melanjutkan pendidikan yang lebih tinggi di Jepang.</p>
            </div>
            <div class=" col-md-10 col-lg-5 my-5 mx-5 text-center">
                <h2>Bright & Modern Classrooms</h2>
                <br>
                <img src="img/classrom3.jpg" class="img-fluid rounded">
            </div>
        </div>
    </div>
    <!-- end our focus -->

    <br>




    <!-- START Our Program-->
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-4" id="program">Program Kami</h1>
                <hr class="my-4 garis_judul">
                <p class="lead text-center">ELEMEN PELANGI membuka beberapa program yang bisa dipilih :</p>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 my-4">
                <div class="card programcard h-100 d-inline-block">
                    <img src="img/classroom1.jpg" class="card-img-top">
                    <div class="card-body mb-5">
                        <h5 class="card-title">KURSUS INTENSIF</h5>
                        <p class="card-text">Siswa belajar setiap hari 4 jam, dari hari Senin sampai Jum’at</p>
                        <a href="daftar.html" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 my-4">
                <div class="card programcard h-100 d-inline-block">
                    <img src="img/classroom2.jpg" class="card-img-top">
                    <div class="card-body mb-4">
                        <h5 class="card-title">KURSUS REGULER</h5>
                        <p class="card-text">Satu minggu 2 kali pertemuan (8 sesi/bulan) dengan durasi 2 jam.</p>
                        <a href="daftar.html" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 my-4">
                <div class="card  programcard h-100 d-inline-block">
                    <img src="img/classroom4.png" class="card-img-top">
                    <div class="card-body mb-4">
                        <h5 class="card-title">KURSUS PRIVAT</h5>
                        <p class="card-text">Belajar privat di dampingi guru, dengan waktu yg menyesuaikan</p>
                        <a href="daftar.html" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end our program-->

    <hr class="my-4">




    <!-- START Testimonial -->

    <h3 class=" text-center font-italic font-weight-light">Suara Siswa</h3>
    <hr class="my-4 garis_judul mb-5">


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active h-100">
                <div class="testimonial">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 offset-2 text-center"><img src="img/newtestimoni-02.png" width="80%">
                            </div>
                            <div class="col-md-6 text-justify font-italic">
                                <h4 class="text-center mt-3">Abdan – Kursus Intensif</h4>
                                <p class="">
                                    “Setelah membandingkan dengan tempat-tempat kursus yang lain, saya merasa cocok dengan program yang ada disini. Bahasa Jepang menurut saya sulit dan merupakan suatu tantangan, tapi di Element Pelangi proses belajarnya menyenangkan jadi tidak terlalu stress atau tertekan dan bisa mempelajarinya bisa menjadi lebih mudah.”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="testimonial">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 offset-2 text-center"><img src="img/newtestimoni-01.png" width="80%">
                            </div>
                            <div class="col-md-6 text-justify font-italic">
                                <h4 class="text-center mt-3">Hartini – Kursus Intensif</h4>
                                <p class="">
                                    “Saya datang dari Indramayu untuk belajar Bahasa Jepang Intensif di Elemen Pelangi. Setelah saya datang ke sini, banyak ilmu yg di dapat. sensei-senseinya baik pengajarannya mudah di fahami. Nggak cuma belajar bahasa saja, tapi juga belajar budaya dan lain-lain. Kelas Intensif bagus karena sudah tertata dan tersusun rapi materinya buat pembelajaran-pembelajarannya jadi sangat bagus sekali.”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item h-100">
                <div class="testimonial">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 offset-2 text-center"><img src="img/newtestimoni-03.png" width="80%">
                            </div>
                            <div class="col-md-6 text-justify font-italic">
                                <h4 class="text-center mt-3">Livia – Kursus Intensif</h4>
                                <p class="">
                                    “Saya butuh tempat les yang bisa cepet belajarnya, karena bulan Oktober harus pergi ke Jepang dan itu saya cari-cari pas bulan Juli, jad sangat singkat. Setelah dicari-cari di internet, ternyata ketemu Element Pelangi yang punya kelas Intensif jadi cocok banget. Hari Senin sampai Jum’at belajar terus jadi bisa catch up cepet jadi membantu sekali buat saya yang harus segera berangkat ke Jepang.“
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- end Testimonial -->

    <hr class="pt-5">




    <!-- START Mentor -->
    <div class="container-fluid pt-3">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-4" id="pengajar">Team Pengajar</h1>
            </div>
            <hr>
        </div>
    </div>
    <!-- end team pengajar-->
    <hr class="my-4 garis_judul">
    <!-- card pengajar-->
    <div class="container">
        <div class="row">
            <div class="col-12  ">
                <p class="lead text-justify tech_gretting">Come and meet Connect’s experienced team of qualified
                    Japanese teachers.
                    They are
                    passionate about
                    helping you to improve your Japanese and reach your learning goals.</p>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-sm-12 col-md-5 col-lg-4 mx-3 my-4">
                <div class="card techcard">
                    <img src="img/teacher-shimako-1x1-q30-1000x1000.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Shimako sensei</h5>
                        <p class="card-text text-justify">Shimako sensei warga negara jepang yang sudah 7 tahun lebih
                            tinggal di
                            Indonesia
                            berpengalaman mengajar bahasa jepang lebih 10 tahun</p>
                        <a href="#pengajar" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4 mx-3 my-4">
                <div class="card techcard">
                    <img src="img/teacher-youji-1x1-q40-1000x1000.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-justify">Youji sensei</h5>
                        <p>Youji sensei sangat mencintai Indonesi ingin mengenalkan budaya Jepang di Indonesia
                            berpengalaman mengajar lebih dari 5 tahun</p>
                        <a href="#pengajar" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4 mx-3 my-4">
                <div class="card techcard">
                    <img src="img/teacher-masayo-1x1-q40-1000x1000.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Masayo sensei</h5>
                        <p class="card-text text-justify">Masayo sensei pernah mengajar bahasa jepang di berbagai negara
                            berpengalaman mengajar lebih dari 10 tahun
                        </p>
                        <a href="#pengajar" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-4 mx-3 my-4">
                <div class="card techcard">
                    <img src="img/teacher-rumika-1x1-q30-1000x1000.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Rumika sensei</h5>
                        <p class="card-text text-justify">Rumika sensei seporang pengajar yg bersemangat berpengalaman
                            mengajar lebih
                            dari 7 tahun
                        </p>
                        <a href="#pengajar" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7 mx-3 my-4">
                <div class="card techcard">
                    <img src="img/teacher-chihoko-1x1-q40-1000x1000.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-justify">Chihoko sensei</h5>
                        <p class="card-text">Chihoko sensei pensiunan dosen sastra jepang di salah satu kampus swasta
                            yang melanjutkan pasionny
                        </p>
                        <a href="#pengajar" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end mentor-->



    <!-- Start Location -->
    <div class="container-fluid  bg-light">
        <div class="row">
            <div class="col-12 mt-4">
                <h1 class="display-4 text-center" id="contact">Hubungi Kami</h1>
                <hr class="my-4 garis_judul mb-4 mt-5">
            </div>
        </div>
    </div>
    <div class="container-fluid   bg-light akseslokasi">
        <div class="row">
            <div class="col-md-12 col-lg-6 mb-4 p-lg-3">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h4>Lokasi dan Informasi</h4>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <p class="lead">Kantor Utama</p>
                        <hr class="">
                        <p class="font-weight-light">
                            Jl. Uluwatu Kedonganan Kuta, Kedonganan, Kuta, Kabupaten Badung, Bali 80361
                        </p>
                        <p class="font-weight-light">0361 -772 - 2897</p>
                        <p class="font-weight-light">WhatsApp : 0838 – 9291 – 0000</p>
                        <p class="font-weight-light">Email : elemenpelangi@gmail.com</p>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <p class="lead">Kantor Cabang</p>
                        <hr class="">
                        <p class="font-weight-light">Perumahan Griya Antareja Residence Blok A5
                            Jati Makmur, Pondok Gede
                            BEKASI – JAWA BARAT
                        </p>
                        <p class="font-weight-light">Telp./WhatsApp : 0812 – 9676 – 1505</p>
                        <p class="font-weight-light">Email : bekasi@shinjukucenter.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 text-center">
                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container mt-5" style="height: 350px">
                    <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=-8.762102, 115.175738&amp;q=+(Yayasan%20Element%20Pelangi)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!--Google Maps-->
            </div>
        </div>
    </div>
    <!-- end location -->




    <!-- Footer -->
    <footer>
        <div class="container-fluid p-3">
            <div class="row text-center">
                <div class="col-md-4">
                    <hr class="hr_fotter">
                    <h4 class="text-center" style="font-family: YuMincho; font-size: 1.5rem;"> 日本語 ELEMEN PELANGI</h4>
                    <hr class="hr_fotter">
                    <p>Sebuah kursus bahasa Jepang unggulan yang memiliki kombinasi antara
                        orientasi penguasaan bahasa
                        dan pemahaman budaya.</p>
                </div>
                <div class="col-md-4">
                    <hr class="hr_fotter">
                    <h5>Jadwal Operasional</h5>
                    <hr class="hr_fotter">
                    <p>Senin - Jumat : 9am - 5pm</p>
                    <p>Sabtu : 9am - 12pm</p>
                    <p>Minggu & Tanggal Merah : Libur</p>
                </div>
                <div class="col-md-4">
                    <hr class="hr_fotter">
                    <h5>Sosial Media Kami</h5>
                    <hr class="hr_fotter">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 text-center">
                    <hr>
                    <p>&copy; Yayasan Element Pelangi - 2019</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end-footer -->

</body>