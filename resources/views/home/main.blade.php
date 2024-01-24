<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.head')
</head>

<body>

    <!-- Navbar -->
    @include('home.navbar')

    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline">
                    <h1>Website UKM Olahraga Politeknik Negeri Banyuwangi</h1>
                    <p>AUTHOR :</p>
                    <p>UKM Olahraga</p>
                </div>
            </div>
            <img src="{{ asset('image/pembuatan-website-olahraga.png') }}" alt="" class="accent-img position-absolute start-0 w-100" style="top:80px;">
        </div>
    </section>

    <!-- Section 1 -->
    <section id="information">
        <div class="container">
            <div class="row">
                <div class="col-12 info-tagline">
                    <h2 class="mt-5">Prestasi UKM Olahraga</h2>
                </div>

                <!-- Carausel Section -->
                <div class="continer justify-content-center align-items-center vh-100 posi-section">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image1.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image2.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image3.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image4.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image5.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image6.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image7.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image8.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image9.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image10.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image11.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{ asset('image/image12.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="About" class="container-fluid">
            <div class="row ">
                <div class="col mt-5">
                    <div class="p-3 box1">
                        <div class="col-12 info-tagline">
                            <div class="rectangle"></div>
                            <h2>About</h2>
                        </div>
                        <div class="col-md-10 mt-5 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <p> Tujuan dari aplikasi ini nantinya adalah mempermudah mitra,
                                        para mahasiswa yang nantinya akan mendaftar menjadi anggota ukm dan mahasiswa yang ingin
                                        mengetahui informasi tentang ukm dan mungkin akan tertarik untuk bergabung,
                                        dan para anggota ukm yang akan meminjam alat olahraga yang akan digunakan untuk
                                        keperluan latihan.</p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="Team" class="container-fluid">
            <div class="row">
                <div class="col mt-5">
                    <div class="p-3 box1">
                        <div class="col-12 info-tagline">
                            <div class="rectangle"></div>
                            <h2>Team</h2>
                        </div>

                        {{-- Team  --}}
                        <div class="row mt-5 justify-content-center" style="position: relative; top:50px;">
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img src="{{ asset('image/IMG_20231220_082333.jpg') }}" class="rounded-circle" style="width: 150px; " alt="...">
                                    <h5>Muhamad Cahya Yunizar </h5>
                                    <p>Scrum Master</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img src="{{ asset('image/IMG-20210808-WA0110.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                                    <h5>M. Alvian Ari Nugroho</h5>
                                    <p>Web Development</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img src="{{ asset('image/IMG-20231007-WA0025.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                                    <h5>Lisa Ayu Anjani</h5>
                                    <p>Databasae Analyst</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img src="{{ asset('image/1685946468058.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                                    <h5>Moh. Kosim</h5>
                                    <p>Desain UI/UX</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img src="{{ asset('image/DSC_0093.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                                    <h5>M. Rouf Mubarok</h5>
                                    <p>Mobile Development</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="Contact" class="container-fluid">
            <div class="row">
                <div class="col mt-5">
                    <div class="p-3 box1">
                        <div class="col-12 info-tagline">
                            <div class="rectangle"></div>
                            <h2>Contact</h2>
                        </div>

                        <div class="row">

                            {{-- <!-- Information/Preview Section -->  --}}
                            <div class="col-md-10 mt-5 mx-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Selamat datang di halaman Contact Us! Kami senang mendengar dari Anda. Jika Anda memiliki pertanyaan, saran, atau ingin berbagi pengalaman, jangan ragu untuk menghubungi tim kami. Kami berkomitmen untuk memberikan layanan terbaik dan merespons secepat mungkin.</p>
                                        <div class="contact-links">
                                            <!-- WhatsApp Logo -->
                                            <a class="contact-link" href="https://wa.me/1234567890" target="_blank">
                                                <img src="{{ asset('image/WhatsApp.png') }}" alt="WhatsApp">
                                                <h5>Call : 081 xxxx xxx</h5>
                                            </a>

                                            <!-- Instagram Logo -->
                                            <a class="contact-link" href="https://www.instagram.com/ukmolahraga_poliwangi/" target="_blank">
                                                <img src="{{ asset('image/Instagram_logo_2022.svg.png') }}" alt="Instagram" style="height: 30px; width: 30px;">
                                                <h5>ukmolahraga_poliwangi</h5>
                                            </a>

                                            <!-- Gmail Logo -->
                                            <a class="contact-link" href="https://www.yourwebsite.com" target="_blank">
                                                <img src="{{ asset('image/Gmail.png') }}" alt="Gmail" style="height: 40px; width: 50px;">
                                                <h5>ukmolahraga@gmail.com</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer">
        @include('home.footer')
    </section>

    {{-- Script --}}
    @include('home.script')

</body>

</html>
