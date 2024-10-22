@extends('navbar')

@section('content')
    <style>
        .card-body-2 {
            background-color: #304D30;
            height: 295px;
        }

        .card-2 {
            border: none;
        }

        p {
            color: #CCE5FF;
        }

        .col-md-3 {
            margin: 15px;
        }

        .col-md-3 img {
            width: 100%;
            height: auto;
        }

        body .carousel-indicators li {}

        body .carousel-control-prev-icon,
        body .carousel-control-next-icon {}

        body .no-padding {
            padding-left: 0;
            padding-right: 0;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card {
            border: none;
            width: 360px;
            border-radius: 30px;
            height: 420px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            flex-grow: 1;
        }

        .card img {
            height: 300px;
            border-radius: 30px 30px 0 0;
            width: 100%;
            object-fit: cover;
            margin-top: 8px;
        }

        .card-text {
            color: #373D45;
        }

        .card-4 {
            border: none;
            background-color: #F6FAFF;
            width: 360px;
            height: 420px;
        }
    </style>

    <div class="card-2">
        <div class="card-body-2">
            <div class="row">
                <div class="col-5 ms-5 ps-5">
                    <h1 class="text-white mt-3 fw-bold">Your Prescription for Affordable Health Solutions!</h1>
                    <p class="fs-5">Elevate your health journey with exclusive discounts and unparalleled convenience.
                        Your path to well-being starts here, where every purchase is a prescription for savings.</p>
                    <a href="{{ url('obat') }}" class="btn btn-light text-success">Start Shopping
                        <img src="{{ asset('images/beli.png') }}" alt="Atma" width="21" height="21">
                    </a>
                </div>
                <div class="col-2"></div>
                <div class="col-4">
                    <img src="{{ asset('images/doctor.png') }}" alt="Atma" width="345" class="ms-5 mt-3"
                        height="279">
                </div>
            </div>
        </div>
    </div>


    <div class="me-5 mt-3">
        <h4 class="d-flex justify-content-end fw-bold">Book a consultation?
            <a href="{{ route('reservation') }}" class="btn btn-primary text-light fw-bold ms-2 mb-3">BOOK NOW</a>
        </h4>
    </div>




    <!--bagian 1 -->
    <div class="ms-5 mt-5">
        <h3 class="d-flex justify-content-start fw-bold text-black-50">Shop by Categories</h3>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                // Array gambar
                $images = [
                    'image1.png',
                    'image2.png',
                    'image3.png',
                    'image4.png',
                    'image5.png',
                    'image6.png',
                    'image7.png',
                    'image8.png',
                ];
                // Array judul untuk masing-masing gambar
                $titles = [
                    'Sport Nutrition',
                    'Elderly Care',
                    'Supplement',
                    'Healthcare Devices',
                    'Health food and drinks',
                    'Diabetic Care',
                    'Personal Care',
                    'Menstrual Hygiene',
                ];
            @endphp

            @foreach (array_chunk($images, 4) as $index => $imageChunk)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="row justify-content-center">
                        @foreach ($imageChunk as $i => $image)
                            <a href="{{ route('jenisObat') }}" class="col-3 d-flex justify-content-center">
                                <div class="card mb-5">
                                    <img src="{{ asset('images/' . $image) }}" class="d-block w-100"
                                        alt="Image {{ $i + 1 }}">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $titles[$index * 4 + $i] }}</h5>

                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- kiri and kanan controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <style>

    </style>

    <!--bagian 2 -->
    <div class="ms-5 mt-5">
        <h3 class="d-flex justify-content-start fw-bold text-black-50">New Launches</h3>
    </div>

    <!-- Carousel -->
    <div id="carouselExampleControls2" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                // Array gambar
                $images = [
                    'image25.webp',
                    'image26.jpg',
                    'image25.png',
                    'image27.webp',
                    'image24.webp',
                    'image23.webp',
                    'images21.jpg',
                    'image22.png',
                ];
                // Array judul untuk masing-masing gambar
                $titles = [
                    'HIMALAYA KAPI KACCHU',
                    'SELSUN SHAMPOO',
                    'OSKADON TABLET',
                    'MASTIN',
                    'SUMAGESIC TABLET',
                    'CHARM PADS',
                    'MYLANTA LIQUID',
                    'TOLAK ANGIN LIQUID',
                ];

                // Array subtitle untuk masing-masing gambar
                $subtitles = [
                    'Rp 35.500,-/bottle',
                    'Rp 25.500,-/bottle',
                    'Rp 2.500,-/strip',
                    'Rp 45.500,-/bottle',
                    'Rp 2.500,-/strip',
                    'Rp 10.500,-/pack',
                    'Rp 10.500,-/bottle',
                    'Rp 15.000,-/pack',
                ];
            @endphp

            @foreach (array_chunk($images, 4) as $index => $imageChunk)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="row justify-content-center">
                        @foreach ($imageChunk as $i => $image)
                            <div class="col-3 d-flex justify-content-center">
                                <div class="card mb-5">
                                    <img src="{{ asset('images/' . $image) }}" class="d-block w-100"
                                        alt="Image {{ $i + 1 }}">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $titles[$index * 4 + $i] }}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted text-center">
                                            {{ $subtitles[$index * 4 + $i] }}
                                        </h6>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- kiri and kanan controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- card bawah -->
    <div class="d-flex justify-content-center" style="min-height: 100vh;">
        <div class="card-4 mt-5" style="width: 100rem;">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">

                            <h6 class="card-subtitle mt-5 mb-2 fw-bold">Todays Hot Offer</h6>
                            <h1 class="fw-bold">Unlock 50% Off on Essential Medicines!</h1>
                            <p class="card-text fs-5 mt-3">Embrace wellness without breaking the bank! Enjoy a generous
                                25%
                                discount
                                on a wide range of vital medicines at our online pharmacy. Your health matters, and so does
                                your budget.</p>

                            <button type="button" class="btn btn-primary text-light fw-bold mt-3">Place An Order
                                Now
                                <img src="{{ asset('images/arrow.png') }}" alt="Atma" width="21" height="15"
                                    class="ms-2">
                            </button>
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('images/fotoBawah.png') }}" alt="Atma" width="442"
                                class="ms-5 mt-4" height="352">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
