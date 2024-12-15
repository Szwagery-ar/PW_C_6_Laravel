@extends('navbar')

@section('content')
    <style>
        .product-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            height: 300px;
            width: 250px;
            text-decoration: none;
            color: inherit;
        }

        .product-card:hover {
            transform: scale(1.05);
            text-decoration: none;
        }

        .product-image {
            margin-top: 8px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        .card-title {
            font-size: 1.2em;
            font-weight: bold;
        }

        .card-price {
            font-size: 1.1em;
            color: green;
        }
    </style>

    <div class="container mt-5">
        <h2 class="text-center mb-4 fw-bold">Medicinal Product Catalog</h2>
        <div class="row justify-content-center">
            @php
                $products = [
                    [
                        'id' => 1,
                        'image' => 'image1.png',
                        'name' => 'Isolate Way',
                        'price' => 'Rp 200.000',
                    ],
                    [
                        'id' => 2,
                        'image' => 'image2.png',
                        'name' => 'Friends Adult Diapers',
                        'price' => 'Rp 75.000',
                    ],
                    [
                        'id' => 3,
                        'image' => 'image3.png',
                        'name' => 'LiveEasy',
                        'price' => 'Rp 100.000',
                    ],
                    [
                        'id' => 4,
                        'image' => 'image24.webp',
                        'name' => 'Sumagesic',
                        'price' => 'Rp 2.500',
                    ],
                    [
                        'id' => 5,
                        'image' => 'image5.png',
                        'name' => 'NutriGo',
                        'price' => 'Rp 125.000',
                    ],
                    [
                        'id' => 6,
                        'image' => 'image6.png',
                        'name' => 'Protinex',
                        'price' => 'Rp 90.000',
                    ],
                    [
                        'id' => 7,
                        'image' => 'image7.png',
                        'name' => 'Episof',
                        'price' => 'Rp 55.000',
                    ],
                    [
                        'id' => 8,
                        'image' => 'image8.png',
                        'name' => 'StayFree',
                        'price' => 'Rp 15.000',
                    ],
                    [
                        'id' => 9,
                        'image' => 'image9.png',
                        'name' => 'Himalaya',
                        'price' => 'Rp 40.000',
                    ],
                    [
                        'id' => 10,
                        'image' => 'image22.png',
                        'name' => 'Tolak Angin',
                        'price' => 'Rp 15.000',
                    ],
                    [
                        'id' => 11,
                        'image' => 'image23.webp',
                        'name' => 'Charm',
                        'price' => 'Rp 12.000',
                    ],
                    [
                        'id' => 12,
                        'image' => 'image12.png',
                        'name' => 'Ketonof',
                        'price' => 'Rp 65.000',
                    ],
                ];
            @endphp

            @foreach ($products as $index => $product)
                @if ($index < 12)
                    <div class="col-md-2 mb-4 d-flex justify-content-center">
                        <a href="{{ route('detailObat', ['id' => $index + 1]) }}" class="card product-card">
                            <img src="{{ asset('images/' . $product['image']) }}" class="card-img-top product-image"
                                alt="{{ $product['name'] }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-price">{{ $product['price'] }}</p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endsection
