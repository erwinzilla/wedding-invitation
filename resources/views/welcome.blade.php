<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Faisal & Erna Invitation</title>

    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/favicon.png') }}">

    <!-- CSS only -->
{{--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('assets/css/wedding.css?v=4') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Parisienne&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap');
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#main-nav" data-bs-offset="1" tabindex="1">
<div class="container-fluid" style="overflow-x: hidden">
    <nav id="main-nav" class="navbar fixed-bottom navbar-light border-top">
        <div class="container-fluid">
            <div class="w-100">
                <ul class="nav nav-pills nav-fill text-muted">
                    <li class="nav-item">
                        <a class="nav-link me-5" href="#">
                            <img src="{{ url('assets/images/logo.png') }}" class="d-inline-block align-text-top filter-primary nav-logo" alt="logo erwin fahny" width="32">
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#couple">
                            <i class="bi bi-people h2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#date">
                            <i class="bi bi-calendar-date h2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#place">
                            <i class="bi bi-geo h2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#greeting">
                            <i class="bi bi-envelope-open h2"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div id="home" class="col-12 bg-main">
            <div class="card bg-white bg-opacity-25 border-white border">
                <div class="card-body">
                    <h1 class="font-playfair">WE ARE GETTING MARRIED</h1>
{{--                    <img src="{{ url('assets/images/flower.png') }}" alt="bunga" class="opacity-50">--}}
                    <div class="font-parisienne home-cover p-4">
                        <span class="float-start">Faisal</span><br>
                        <span class="text-secondary and">&</span><br>
                        <span class="float-end">Erna</span>
                    </div>
                    <div class="home-footer">
                        <h5>09-10-2022</h5>
                        <a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=N2s3NHUxbXZqZmVjcWp0dXNrc2o3MDE1dG8gYW5ucndpbnpAbQ&tmsrc=annrwinz%40gmail.com" target="_blank" class="btn btn-lg btn-primary w-100 fw-bold">SAVE THE DATE</a>
                    </div>
                </div>
            </div>
        </div>

        {{--        Div Ar-rum--}}
        <div class="col-12 text-white text-center p-4 py-5 bg-arrum bg-primary">
            <div class="content" data-aos="zoom-in" data-aos-duration="2000">
                <img src="{{ url('assets/images/divider-up.png') }}" class="filter-white w-75 mb-3 opacity-50" alt="divider">
                <p class=""><strong>Ar-Rum : 21</strong></p>
                <p class="">“Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.”</p>
                <img src="{{ url('assets/images/divider-down.png') }}" class="filter-white w-75 mt-3 opacity-50" alt="divider">
            </div>
        </div>

        {{--        Couple--}}
        <div id="couple" class="col-12 text-primary text-center p-4 py-5">
            <div class="mb-5" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="fw-bold font-playfair">The Groom</h1>
                <img src="{{ url('assets/images/divider.png') }}" class="w-50 my-3" alt="divider">
                <img src="{{ url('assets/images/groom.jpg') }}" class="rounded-circle img-thumbnail img-avatar mb-4" alt="groom">
                <h1 class="font-parisienne">Faisal Abdul Rozzak</h1>
                <p>Putra ke-empat dari<br><b>Bpk. Sukeri &<br>Ibu Paimah</b></p>
                <div class="mt-3">
{{--                    <a href="https://www.facebook.com/annrwinz" target="_blank" class="btn text-primary p-2"><i class="bi bi-facebook h1"></i></a>--}}
{{--                    <a href="https://twitter.com/erwinzilla_" target="_blank" class="btn text-primary p-2"><i class="bi bi-twitter h1"></i></a>--}}
                    <a href="https://www.instagram.com/faisal_abdul_r/" target="_blank" class="btn text-primary p-2"><i class="bi bi-instagram h1"></i></a>
                </div>
            </div>
            <div data-aos="flip-left">
                <h1><i class="bi bi-heart"></i></h1>
            </div>
            <div class="mb-3 mt-5" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="fw-bold font-playfair">The Bridge</h1>
                <img src="{{ url('assets/images/divider.png') }}" class="w-50 my-3" alt="divider">
                <img src="{{ url('assets/images/bridge.jpg') }}" class="rounded-circle img-thumbnail img-avatar mb-4" alt="bridge">
                <h1 class="font-parisienne">Erna Ayu Kurnia</h1>
                <p>Putri ke-tiga dari<br><b>Bpk. Sutisna (Alm) &<br>Ibu Dedeh Kurniasih</b></p>
                <div class="mt-3">
{{--                    <a href="https://www.facebook.com/fahny.arfah" target="_blank" class="btn text-primary p-2"><i class="bi bi-facebook h1"></i></a>--}}
                    <a href="https://www.instagram.com/erna.a.kurnia/" target="_blank" class="btn text-primary p-2"><i class="bi bi-instagram h1"></i></a>
                </div>
            </div>
        </div>

        {{--        Do'a--}}
        <div class="col-12 bg-pray text-white text-center p-4 py-5">
            <div data-aos="zoom-out" data-aos-duration="2000">
                <img src="{{ url('assets/images/divider-up.png') }}" class="filter-white w-75 mb-3 opacity-50" alt="divider">
                <h1 class="mb-3"> بِسْمِ اللّهِ الرَّحْمَنِ الرَّحِيْ </h1>
                <span>Maha Suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah, Perkenankan dan ridhoilah putra-putri kami dalam ikatan suci pernikahan:</span>
                <br>
                <img src="{{ url('assets/images/divider-down.png') }}" class="filter-white w-75 mt-3 opacity-50" alt="divider">
            </div>
        </div>

        {{--        Date--}}
        <div id="date" class="col-12 bg-secondary text-primary text-center p-4 py-5 bg-opacity-25 bg-time">
            <div data-aos="fade-right" data-aos-duration="2000">
                <h1 class="font-playfair">Akad</h1>
                <img src="{{ url('assets/images/divider.png') }}" class="w-50 my-3" alt="divider">
                <div class="row align-items-center">
                    <div class="col border border-primary py-1 border-start-0 border-end-0 border-2">
                        <h5 class="mb-0">Minggu</h5>
                    </div>
                    <div class="col">
                        <span>Oktober</span>
                        <h1 class="fw-bold mb-0" style="font-size: 3rem;">09</h1>
                        <h5 class="mb-0">2022</h5>
                    </div>
                    <div class="col border border-primary py-1 border-start-0 border-end-0 border-2">
                        <h5 class="mb-0">08.00 WIB</h5>
                    </div>
                </div>
            </div>
            <hr class="mt-4">
            <div class="mt-4" data-aos="fade-left" data-aos-duration="2000">
                <h1 class="font-playfair">Resepsi</h1>
                <img src="{{ url('assets/images/divider.png') }}" class="w-50 my-3" alt="divider">
                <div class="row align-items-center">
                    <div class="col border border-primary py-1 border-start-0 border-end-0 border-2 d-flex" style="height: 5rem">
                        <h5 class="align-self-center mx-auto">Minggu</h5>
                    </div>
                    <div class="col">
                        <span>Oktober</span>
                        <h1 class="fw-bold mb-0" style="font-size: 3rem;">09</h1>
                        <h5 class="mb-0">2022</h5>
                    </div>
                    <div class="col border border-primary py-1 border-start-0 border-end-0 border-2">
                        <h5 class="mb-0" >
                            11.00 WIB
                            <br><b class="text-secondary small">s/d</b>
                            <br>15.00 WIB
                        </h5>
                    </div>
                </div>
            </div>
{{--            <div class="mt-4">--}}
{{--                <b>Resepsi terdiri dari 2 Sesi, penentuan sesi dapat dilihat pada surat undangan</b>--}}
{{--            </div>--}}
            <div class="mt-4">
                <a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=N2s3NHUxbXZqZmVjcWp0dXNrc2o3MDE1dG8gYW5ucndpbnpAbQ&tmsrc=annrwinz%40gmail.com" target="_blank" class="btn btn-secondary w-100 fw-bold">SAVE THE DATE</a>
            </div>
        </div>

        {{--        Countdown--}}
        <div class="col-12 text-center p-4 py-5 bg-count">
            <div data-aos="flip-up" data-aos-duration="2000">
                <h1 class="font-playfair mb-3">Menuju Hari Pernikahan</h1>
                <img src="{{ url('assets/images/divider.png') }}" class="w-50 my-3" alt="divider">
                <div id="time" class="bg-white rounded px-3 py-2 bg-opacity-50 border-white border">
                    <table class="table table-borderless my-4">
                        <tr class="h1">
                            <td id="day">00</td>
                            <td>:</td>
                            <td id="hour">00</td>
                            <td>:</td>
                            <td id="min">00</td>
                            <td>:</td>
                            <td id="sec">00</td>
                        </tr>
                        <tr class="h6 text-muted">
                            <td>DAYS</td>
                            <td></td>
                            <td>HOUR</td>
                            <td></td>
                            <td>MIN</td>
                            <td></td>
                            <td>SEC</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        {{--        Place--}}
{{--        <div id="place" class="col-12 text-center p-4 py-5 bg-mujahidin" style="height:400px;"></div>--}}

        <div id="place" class="col-12 text-center p-4 py-5 bg-mujahidin">
            <div class="card bg-primary bg-opacity-50" data-aos="flip-down" data-aos-duration="2000">
                <div class="card-body">
                    <div class="text-white">
                        <h1 class="fw-bold font-playfair mb-4">Location</h1>
                        <div class="mb-3">
                            <i class="bi bi-geo-fill text-danger fs-2"></i>
                        </div>
                        <address>Jl. Bantar Gedang Gg. Alpuket RT/RW 05/09, Desa Mekarsari, Kec. Ngamprah, Kab. Bandung Barat, Jawa Barat 40552</address>
                        <a href="https://goo.gl/maps/UJjjRnfQ21cxYvMh9" target="_blank" class="btn btn-primary w-100 mt-2"><i class="bi bi-geo-alt-fill"></i> Menuju Lokasi</a>
                    </div>
                </div>
            </div>
        </div>

        {{--        Guestbook--}}
        <div class="col-12 bg-primary text-start p-4 bg-opacity-25">
            <img src="https://erwinzilla.com/v2/assets/images/divider-up.png" class="filter-primary w-75 mb-3 d-flex mx-auto opacity-50" alt="divider">
            <div class="text-primary" data-aos="zoom-in" data-aos-duration="2000">
                <h1 class="fw-bold font-playfair mb-4 text-center">GUEST BOOK</h1>
                <p class="text-center">Kami tidak sabar menunggu hari pernikahan kami bersama kalian, mohon konfirmasi kehadiran kalian.<br>Terima Kasih.</p>
                <hr>
                <div id="attendance-content">
                    @if(!$data['attendance'])
                        {{--                        <form id="form-attendance" action="{{ url('wedding/manage') }}" method="post">--}}
                        {{--                            @csrf--}}
                        <div class="mb-2">
                            <label class="form-label">Nama:</label>
                            <input type="text" name="name" class="form-control" value="{{ $name }}" placeholder="Nama">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Alamat:</label>
                            <textarea name="address" class="form-control" placeholder="Alamat"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Apakah Hadir?</label>
                            <div class="row">
                                <div class="col">
                                    <select name="coming" class="form-select">
                                        <option value="1">Iya</option>
                                        <option value="2">Mungkin</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <input name="qty" type="number" class="form-control" placeholder="Berapa orang?" >
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button id="submit-attendance" type="submit" class="btn btn-primary w-100">Simpan</button>
                        </div>
                        {{--                        </form>--}}
                    @else
                        <div class="text-center">
                            <span>Terima kasih telah mengkonfirmasi kehadiran anda.</span>
                            <br><i class="bi bi-heart"></i>
                        </div>
                    @endif
                </div>
            </div>
            <img src="https://erwinzilla.com/v2/assets/images/divider-down.png" class="filter-primary w-75 mt-3 d-flex mx-auto opacity-50" alt="divider">
        </div>
        <div class="col-12 bg-primary text-center text-white p-4 bg-opacity-50">
            <h1 class="fw-bold font-playfair mb-0">OUR GALLERY</h1>
            <img src="{{ url('assets/images/divider.png') }}" class="w-50 my-4" alt="divider">
            <div id="carousel-gallery-portrait" class="carousel slide mb-3" data-bs-ride="carousel" data-aos="zoom-out-right" data-aos-duration="2000">
                <div class="carousel-inner">
                    @for($i = 1; $i <= 12; $i++) {{-- 12 gambar yang tersedia --}}
                        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                            <img src="{{ url('assets/images/gallery/portrait-black-'.$i.'.jpeg') }}" class="d-block w-100" alt="gallery image">
                        </div>
                    @endfor
                    @for($i = 1; $i <= 3; $i++) {{-- 3 gambar yang tersedia --}}
                        <div class="carousel-item">
                            <img src="{{ url('assets/images/gallery/portrait-white-'.$i.'.jpeg') }}" class="d-block w-100" alt="gallery image">
                        </div>
                    @endfor
                </div>
            </div>
            <div id="carousel-gallery-landscape" class="carousel slide carousel-fade" data-bs-ride="carousel" data-aos="zoom-out-left" data-aos-duration="2000">
                <div class="carousel-inner">
                    @for($i = 1; $i <= 8; $i++) {{-- 8 gambar yang tersedia --}}
                        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                            <img src="{{ url('assets/images/gallery/landscape-black-'.$i.'.jpeg') }}" class="d-block w-100" alt="gallery image">
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div id="greeting" class="col-12 bg-primary text-start p-4 bg-opacity-75">
            <img src="https://erwinzilla.com/v2/assets/images/divider-up.png" class="filter-white w-75 mb-3 d-flex mx-auto opacity-50" alt="divider">
            <div class="text-white" data-aos="zoom-out" data-aos-duration="2000">
                <h1 class="fw-bold font-playfair mb-4 text-center">WEDDING WISHES</h1>
                <p class="text-center">Tulis do'a untuk kami ...</p>
                <hr>
                <div id="wish-content">
                    <div class="mb-2">
                        <label class="form-label">Nama:</label>
                        <input type="text" name="name" class="form-control" value="{{ $name }}" placeholder="Nama">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Pesan / Doa:</label>
                        <textarea name="wish" class="form-control" placeholder="Doa.."></textarea>
                    </div>
                    <div class="mb-2">
                        <button id="wish-submit" type="submit" class="btn btn-primary w-100 mb-2">Simpan</button>
                        <div id="wish-label">
                            @if($data['wish'])
                                <small class="mt-2 text-light"><b>Ctt:</b> Do'a / Pesan kami sunting terlebih dahulu, jika ada kesalahan penulisan silahkan isi do'a / pesan kembali.</small>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                <div class="overflow-auto mb-4" style="height: 50vh;">
                    @if($data2->count() > 0)
                        @foreach($data2 as $row)
                            <ul class="list-group list-group-flush text-white">
                                <li class="list-group-item text-white mb-2 pb-3 border-muted bg-transparent">
                                    <h5 class="font-playfair text-light">{{ $row->name }}</h5>
                                    <span>{{ $row->wish }}</span>
                                </li>
                            </ul>
                        @endforeach
                    @else
                        <div class="d-flex text-center h-100">
                            <span class="my-auto mx-auto">
                                Do'a / Pesan akan ditampilkan disini..
                                <br>Stay tuned ya..
                                <br><i class="bi bi-heart"></i>
                            </span>
                        </div>
                    @endif
                </div>
            </div>
            <img src="https://erwinzilla.com/v2/assets/images/divider-down.png" class="filter-white w-75 mt-3 d-flex mx-auto opacity-50" alt="divider">
        </div>

        {{-- Partnership--}}
        <div class="col-12 bg-white text-center p-4 bg-opacity-50">
            <div data-aos="flip-right" data-aos-duration="2000">
                <h1 class="fw-bold font-playfair mb-4">PARTNERSHIP</h1>
                <div class="swiper mb-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ url('assets/images/partnership/mahaz.png') }}" class="d-block w-100 filter-black" alt="mahaz">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ url('assets/images/partnership/afternoon.png') }}" class="d-block w-100" alt="afternoon">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ url('assets/images/partnership/undangan-kita.png') }}" class="d-block w-100 filter-black" alt="undangan kita">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ url('assets/images/partnership/shella-catering.png') }}" class="d-block w-100 filter-black" alt="afternoon">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Wedding Gift--}}
        <div class="col-12 bg-primary text-center text-white p-4 bg-opacity-75">
            <img src="{{ url('/assets/images/divider-up.png') }}" class="filter-white w-75 mb-3 d-flex mx-auto opacity-50" alt="divider">
            <div data-aos="flip-left" data-aos-duration="2000">
                <h1 class="fw-bold font-playfair mb-4">WEDDING GIFT</h1>
                <p>Bagi yang berkenan memberikan kado pernikahan atau tanda kasih, kami juga menyediakan amplop digital pada link dibawah ini</p>
                <div class="row mt-2">
                    <div class="col">
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#bank">Amplop Digital</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#gift">Kirim Kado</button>
                    </div>
                </div>
            </div>
            <img src="{{ url('/assets/images/divider-down.png') }}" class="filter-white w-75 mt-3 d-flex mx-auto opacity-50" alt="divider">
        </div>

        <div class="col-12 text-center p-4 py-5 bg-thankyou">
            <div class="card bg-primary bg-opacity-50" data-aos="zoom-in" data-aos-duration="2000">
                <div class="card-body">
                    <div class="text-white">
                        <h1 class="font-parisienne my-4" style="font-size: 2.5rem;">Thank You</h1>
                        <p>For Being With Use</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="effect hide">
        <svg xmlns="http://www.w3.org/2000/svg" class="equilizer" viewBox="0 0 128 128">
            <g>
                <title>Audio Equilizer</title>
                <rect class="bar" transform="translate(0,0)" y="15"></rect>
                <rect class="bar" transform="translate(25,0)" y="15"></rect>
                <rect class="bar" transform="translate(50,0)" y="15"></rect>
                <rect class="bar" transform="translate(75,0)" y="15"></rect>
                <rect class="bar" transform="translate(100,0)" y="15"></rect>
            </g>
        </svg>
    </div>

    <div class="fab pause">
        <button id="music-control" class="btn btn-primary rounded">
            <i class="bi bi-music-note-beamed"></i>
        </button>
    </div>

    <!-- Bank modal -->
    <div class="modal fade" id="bank" tabindex="-1" aria-labelledby="bank" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-primary text-center">
                    <div class="title mb-3">
                        <h1 class="font-parisienne">Amplop Digital</h1>
                        <span>Silahkan pilih nomor rekening yang ada di bawah ini</span>
                    </div>
                    <hr>
                    <textarea id="copy-text" hidden></textarea>
                    <div>
                        <img src="{{ url('/assets/images/bank/bca.png') }}" alt="bca" width="125"><br>
                        <b>Bank BCA</b><br>
                        <span>a.n. Faisal Abdul Rozzak</span><br>
                        <h5 id="bank-bca-text" class="mt-2 mb-0 fw-bold">2780311188</h5>
                        <button class="btn btn-primary mt-2" onclick="copyText('bank-bca-text');">Salin Rekening</button>
                    </div>
                    <hr>
                    <div>
                        <img src="{{ url('/assets/images/bank/bni.png') }}" alt="bni" width="125"><br>
                        <b>Bank BNI</b><br>
                        <span>a.n. Erna Ayu Kurnia</span><br>
                        <h5 id="bank-bni-text" class="mt-2 mb-0 fw-bold">1430223204</h5>
                        <button class="btn btn-primary mt-2" onclick="copyText('bank-bni-text');">Salin Rekening</button>
                    </div>
                    <hr>
                    <div>
                        <img src="{{ url('/assets/images/bank/shopeepay.png') }}" alt="shopeepay" width="125"><br>
                        <b>Shopee Pay</b><br>
                        <span>a.n. Erna Ayu Kurnia</span><br>
                        <h5 id="shopeepay-text" class="mt-2 mb-0 fw-bold">0821-2165-7720</h5>
                        <button class="btn btn-primary mt-2" onclick="copyText('shopeepay-text');">Salin Nomor</button>
                    </div>
                    <hr>
                    <button class="btn btn-secondary w-100 fw-bold" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Gift modal -->
    <div class="modal fade" id="gift" tabindex="-1" aria-labelledby="gift" aria-hidden="true" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-primary text-center">
                    <div class="title mb-3">
                        <h1 class="font-parisienne">Kirim Kado</h1>
                        <span>Silahkan kirim kado ke alamat yang ada di bawah ini</span>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <i class="bi bi-geo-fill text-danger fs-2"></i>
                    </div>
                    <address id="address-gift">Jl. Bantar Gedang Gg. Alpuket RT/RW 05/09, Desa Mekarsari, Kec. Ngamprah, Kab. Bandung Barat, Jawa Barat 40552</address>
                    <button class="btn btn-primary w-100 mt-2" onclick="copyText('address-gift');">Salin Lokasi</button>
                    <hr>
                    <button class="btn btn-secondary w-100 fw-bold" data-bs-dismiss="modal" aria-label="Close">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Protocol modal -->
    <div class="modal fade" id="protocol" tabindex="-1" aria-labelledby="protocol" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-primary" style="--bs-bg-opacity: 0.9;">
                <div class="modal-body text-white">
                    <div class="title text-center mb-3">
                        <h1 class="font-parisienne">Protokol Kesehatan</h1>
                        <span>Sebelum memasuki ruang acara jangan lupa mengikuti protokol kesehatan</span>
                    </div>
                    <div id="carousel-protocol" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" style="height:45vh">
                        <div class="carousel-indicators mb-0">
                            <button type="button" data-bs-target="#carousel-protocol" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-protocol" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-protocol" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carousel-protocol" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner mb-3">
                            <div class="carousel-item active">
                                <div class="d-flex flex-column align-items-center">
                                    <img src="{{ url('assets/images/masker.png') }}" class="w-50 mb-3 mt-5 filter-white" alt="logo masker">
                                    <div class="text-center mt-5">
                                        <h1 class="font-playfair">Menggunakan Masker</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-column align-items-center">
                                    <img src="{{ url('assets/images/washing-hands.png') }}" class="w-50 mb-3 mt-5 filter-white" alt="mecuci tangan">
                                    <div class="text-center mt-5">
                                        <h1 class="font-playfair">Mencuci Tangan</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-column align-items-center">
                                    <img src="{{ url('assets/images/temperature.png') }}" class="w-50 mb-3 mt-5 filter-white" alt="temperatur suhu">
                                    <div class="text-center mt-5">
                                        <h1 class="font-playfair">Cek Suhu</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-column align-items-center">
                                    <img src="{{ url('assets/images/social-distancing.png') }}" class="w-50 mb-3 mt-5 filter-white" alt="sosial distancing">
                                    <div class="text-center mt-5">
                                        <h1 class="font-playfair">Jaga Jarak</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <div id="button" class="row w-100">
                        <div class="col">
                            <a id="prev" class="btn btn-secondary w-100" data-bs-target="#carousel-protocol" data-bs-slide="prev">Prev</a>
                        </div>
                        <div class="col">
                            <a id="next" class="btn btn-light w-100" data-bs-target="#carousel-protocol" data-bs-slide="next">Next</a>
                        </div>
                    </div>
                    <a id="open" class="btn btn-success w-100" hidden>Ya, Saya akan mengikuti prokes</a>
                </div>
            </div>
        </div>
    </div>

{{--    Wedding Invitation--}}
    <div class="modal fade" id="invitation" tabindex="-1" aria-labelledby="invitation" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content bg-cover">
                <div class="modal-body text-center">
                    <div class="mt-5">
                        <h1 class="fw-bold font-parisienne" style="font-size: 31px">You're Invited!</h1>
                        <p style="font-size: 17px">The Wedding Celebration of</p>
                        <img src="{{ url('assets/images/flower.png') }}" class="opacity-50" alt="bunga" style="position: absolute;width: 100%;left: 0;top: 8em;">
                        <img src="{{ url('assets/images/logo.png') }}" class="w-75 mt-5 filter-primary" alt="logo erwin fahny">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <h5 class="mb-2 ms-auto me-auto font-playfair">Dear, <b>{{ ucwords($name) }}</b></h5>
                    <a id="open-protocol" class="btn btn-outline-primary w-100 fw-bold" data-bs-target="#protocol" data-bs-toggle="modal">Open Invitation</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="bg-white px-3" style="padding-bottom: 5rem; padding-top: 1rem;">
        All resource icon, frame and background made by <a href="https://www.freepik.com" target="_blank">Freepik</a>
    </div>
</footer>

<audio id="music" loop>
    <source src="{{ url('assets/music/marry.mp3') }}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<script>
    const base_url = '{{ url('') }}/';

    // scroll
    AOS.init();

    // setting alert
    let alert = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary btn-lg text-white',
            cancelButton: 'btn btn-default btn-lg',
            popup: 'card',
            title: 'text-default'
        },
        buttonsStyling: false
    });

    let Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        customClass: {
            popup: 'card',
            title: 'text-default'
        },
        buttonsStyling: false,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    // swipper
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        slidesPerView: 2,
    });


    var modal_invitation = new bootstrap.Modal(document.getElementById('invitation'), {
        focus: true,
    });
    var modal_protocol = new bootstrap.Modal(document.getElementById('protocol'), {
        focus: true,
    });
    var myCarousel = document.getElementById('carousel-protocol');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: false,
        wrap: false
    });
    let music = document.getElementById('music');
    let btn_music = document.getElementById('music-control');

    modal_invitation.show();
    myCarousel.addEventListener('slid.bs.carousel', function () {
        if (carousel._activeElement === carousel._items[carousel._items.length - 1]) {
            let btn = document.getElementById('button');
            let open = document.getElementById('open');

            if (btn) {
                btn.setAttribute('hidden', '');
                open.removeAttribute('hidden')
            }
        }
    });

    document.addEventListener('click', function (e) {
        let open = document.getElementById('open');
        if (e.target === open) {
            modal_protocol.hide();
            music.play();

            let fab = btn_music.closest('.fab');
            if (fab.classList.contains('pause')) {
                fab.classList.remove('pause');
                fab.classList.add('play');

                let equalizer = document.querySelector('.effect');
                if (equalizer.classList.contains('hide')) {
                    equalizer.classList.remove('hide');
                    equalizer.classList.add('show')
                }
            }
        }
    });

    btn_music.addEventListener('click', function () {
        let fab = btn_music.closest('.fab');

        if (fab.classList.contains('play')) {
            music.pause();
            console.log('stop');

            fab.classList.remove('play');
            fab.classList.add('pause');

            let equalizer = document.querySelector('.effect');
            if (equalizer.classList.contains('show')) {
                equalizer.classList.remove('show');
                equalizer.classList.add('hide')
            }
        } else {
            music.play();
            console.log('play');

            if (fab.classList.contains('pause')) {
                fab.classList.remove('pause');
                fab.classList.add('play');

                let equalizer = document.querySelector('.effect');
                if (equalizer.classList.contains('hide')) {
                    equalizer.classList.remove('hide');
                    equalizer.classList.add('show')
                }
            }
        }
    });

    // Set the date we're counting down to
    var countDownDate = new Date("Oct 9, 2022 09:00:00").getTime();

    // form action
    let btn_attend = document.getElementById('submit-attendance');
    if (btn_attend){

        btn_attend.addEventListener('click', function (e) {
            e.preventDefault();

            let attend = document.getElementById('attendance-content');
            let name = attend.querySelector('input[name="name"]').value;
            let addr = attend.querySelector('textarea[name="address"]').value;
            let coming = attend.querySelector('select[name="coming"]').value;
            let qty = attend.querySelector('input[name="qty"]').value;

            let url = base_url + 'wedding/manage';
            send_http(url, function (data) {
                if (data === 'success') {
                    //show alert
                    alert.fire({
                        title: 'Success',
                        text: 'Sukses memasukan data, terimakasih telah mengkonfirmasi kehadiran',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });

                    attend.innerHTML = '<div class="text-center">' +
                        '<span>Terima kasih telah mengkonfirmasi kehadiran anda.</span>' +
                        '<br><i class="bi bi-heart"></i>' +
                        '</div>'
                } else {
                    //show alert
                    alert.fire({
                        title: 'Error',
                        text: 'Gagal memasukan data, silahkan cek kembali data yang diinput',
                        icon: 'error',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    })
                }
            }, 'post', 'name='+name+'&address='+addr+'&coming='+coming+'&qty='+qty, true)
        });
    }

    // form action
    let btn_wish = document.getElementById('wish-submit');
    if (btn_wish){

        btn_wish.addEventListener('click', function (e) {
            e.preventDefault();

            let wish = document.getElementById('wish-content');
            let name = wish.querySelector('input[name="name"]').value;
            let wishbox = wish.querySelector('textarea[name="wish"]').value;

            let url = base_url + 'wedding/manage/wish';
            send_http(url, function (data) {
                if (data === 'success') {
                    //show alert
                    alert.fire({
                        title: 'Success',
                        text: 'Sukses memasukan data, terimakasih telah memberikan doa dan pesan untuk kami',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });

                    wish.querySelector('textarea[name="wish"]').value = '';

                    let wish_label = document.getElementById('wish-label');
                    wish_label.innerHTML = '<small class="mt-2 text-light"><b>Ctt:</b> Do\'a / Pesan kami sunting terlebih dahulu, jika ada kesalahan penulisan silahkan isi do\'a / pesan kembali.</small>';
                } else {
                    //show alert
                    alert.fire({
                        title: 'Error',
                        text: 'Gagal memasukan data, silahkan cek kembali data yang diinput',
                        icon: 'error',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    })
                }
            }, 'post', 'name='+name+'&wish='+wishbox, true)
        });
    }

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("day").innerHTML = days;
        document.getElementById("hour").innerHTML = hours;
        document.getElementById("min").innerHTML = minutes;
        document.getElementById("sec").innerHTML = seconds;

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("time").innerHTML = "<h1 class='fw-bold'>EXPIRED</h1>";
        }
    }, 1000);

    function send_http(url, callback, method = 'get', param = null, loading = true) {
        console.log(url);
        console.log(param);

        let http = (window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP'));

        http.onreadystatechange = function () {
            if (http.readyState === 4 && http.status === 200) {
                if (loading) {
                    alert.close();
                }
                if (typeof callback === 'function') callback(http.responseText);
            }
        };

        if (loading) {
            alert.fire({
                title: 'Loading ...',
                timer: 120000,
                didOpen: () => {
                    alert.showLoading()
                }
            }).then((result) => {
                if (result.dismiss === alert.DismissReason.timer) {
                    alert.fire(
                        'Request Time Out',
                        'Cannot get data from database, please refresh page or try again',
                        'error'
                    )
                }
            });
        }

        if (method === 'get') {
            http.open(method, url);
            http.send()
        }

        if (method === 'post' || method === 'put') {
            http.open(method, url, true);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content);
            http.send(param)
        }
    }

    function copyText(type) {
        if (type) {
            var copyText = document.getElementById("copy-text");
            var teks = document.getElementById(type).innerText;

            // munculkan dulu textareanya
            copyText.hidden = false;
            copyText.value = teks;

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            //show alert
            alert.fire({
                title: 'Sukses',
                text: 'Salin ke clipboard',
                icon: 'success',
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false
            })

            copyText.hidden = true;
        }
    }

    // function myMap() {
    //     // var mapProp= {
    //     //     center:new google.maps.LatLng(-6.9305046, 107.6192866),
    //     //     zoom: 17,
    //     //     // mapId: '7ebcc73f6f6f1d79'
    //     // };
    //     // var map = new google.maps.Map(document.getElementById("place"),mapProp);
    //
    //     // var icon = {
    //     //     url: base_url + 'assets/images/favicon.png', // url
    //     //     scaledSize: new google.maps.Size(100, 100), // scaled size
    //     //     origin: new google.maps.Point(0, 0), // origin
    //     //     anchor: new google.maps.Point(50, 0) // anchor
    //     // };
    //     //
    //     //
    //     // var marker = new google.maps.Marker({
    //     //     position: { lat: -6.9305046, lng: 107.6192866},
    //     //     animation: google.maps.Animation.BOUNCE,
    //     //     icon: icon
    //     // });
    //     //
    //     // marker.setMap(map);
    // }
</script>

{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_dJfw86MRQT0y02V5-NNQBvBQNdQH7LE&callback=myMap"></script>--}}

</body>
</html>
