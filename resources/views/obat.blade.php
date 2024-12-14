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
        @foreach ($products as $product)
        <div class="col-md-2 mb-4 d-flex justify-content-center">
            <a href="{{ route('getDetailObat', ['id' => $product->id_obat]) }}" class="card product-card">
                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top product-image"
                    alt="{{ $product->nama_obat }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->nama_obat }}</h5>
                    <p class="card-price">{{ $product->harga_obat }}</p>
                </div>
            </a>
        </div>

        @endforeach

    </div>
</div>
@endsection
