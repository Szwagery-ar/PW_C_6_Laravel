@extends('navbar')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <style>
        /* #F4F1E3 */
        /* #304D30 */
        .body{
            background-color: #F4F1E3;
        }
        .container-full-height {
            min-height: 65vh; /* Menggunakan 100% dari viewport height */
            display: flex;
            flex-direction: column; /* Membuat konten di dalamnya berorientasi vertikal */
        }
        .px-10{
            padding-left: 10rem;
            padding-right: 10rem;
        }
        .my-12-1{
            margin-top: 5rem;
            margin-bottom: 1rem;
        }
    </style>
    <div class="m-0 px-10" style="background-color: #F4F1E3;">
        <div class="container pt-5 ">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mx-5">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-start align-items-center mb-4 mt-4">
                                    <img src="{{asset('images/IconSearch.png')}}" alt="search">
                                    <h3 class="card-title" style="color:#768A6E;">Alamat Pengiriman</h3>
                                </div>
                                <div class="d-flex justify-content-end align-items-center mb-4 mt-4">
                                    <a class="card-title" style="color:blue;" id="change" href="#">Ubah</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <input type="text" class="px-4 py-2 mx-0" id="catatan" name="catatan" placeholder="catatan" required>
                                <input type="text" class="px-10 py-2 mr-3"id="alamat" name="alamat" placeholder="alamat" required>
                            </div>
                            <div class="px-auto py-1"><hr></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5 ">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mx-5">
                            <h2 class="card-title mb-4" style="color:#768A6E;">Keranjang:</h2>
                            
                            <!-- Item 1 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <div class="d-flex align-items-center">
                                    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                    <img src="{{asset('images/apotek_online_k24klik_20200810090629359225_SANMOL-4-TAB 1.png')}}" alt="Sanmol Tablet" style="width: 50px; height: auto; margin-right: 10px;">
                                    <div>
                                        <h6 class="mb-0"style="color:#304D30;">SANMOL TABLET 500 MG</h6>
                                        <small class="text-muted"style="color:#304D30;">Rp 5.000</small>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0"style="color:#304D30;">Rp 5.000</h6>
                                    <div style="width: 120px;">
                                        <div class="input-group mb-4">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control text-center" placeholder="" aria-label="Example text with two button addons" value="2">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <div class="d-flex align-items-center">
                                    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                    <img src="{{asset('images/images21.jpg')}}" alt="Mylanta" style="width: 50px; height: auto; margin-right: 10px;">
                                    <div>
                                        <h6 class="mb-0"style="color:#304D30;">MYLANTA 500 ML</h6>
                                        <small class="text-muted"style="color:#304D30;">Rp 66.000</small>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0"style="color:#304D30;">Rp 132.000</h6>
                                    <div style="width: 120px;">
                                        <div class="input-group mb-3">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control text-center" placeholder="" aria-label="Example text with two button addons" value="2">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="d-flex justify-content-between align-items-center mb-3 mt-4">
                                <div class="d-flex align-items-center">
                                   <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                    <img src="{{asset('images/image17.png')}}" alt="Sumagstic Tablet" style="width: 50px; height: auto; margin-right: 10px;">
                                    <div>
                                        <h6 class="mb-0"style="color:#304D30;">SUMAGSTIC TABLET 800 MG</h6>
                                        <small class="text-muted"style="color:#304D30;">Rp 18.000</small>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-0"style="color:#304D30;">Rp 18.000</h6>
                                    <div style="width: 120px;">
                                        <div class="input-group mb-3">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="text" class="form-control text-center" placeholder="" aria-label="Example text with two button addons" value="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mx-5">
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <div class="align-items-center mb-4 mt-4">
                                    <h6 class="mb-0"style="color:#304D30;">METODE PEMBAYARAN</h6>
                                    <h6 class="mt-3 mb-0"style="color:#304D30;">e-wallet</h6>
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input mt-0 mx-1" name="bayarwoi" type="radio" value="" aria-label="Checkbox for following text input">
                                        <!-- <img src="{{asset('images/images21.jpg')}}" alt="gopay" style="width: 50px; height: auto; margin-right: 10px;"> -->
                                        <h6 class="mb-0"style="color:#304D30;">Gopay</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input mt-0 mx-1" name="bayarwoi"type="radio" value="" aria-label="Checkbox for following text input">
                                        <!-- <img src="{{asset('images/images21.jpg')}}" alt="gopay" style="width: 50px; height: auto; margin-right: 10px;"> -->
                                        <h6 class="mb-0"style="color:#304D30;">Ovo</h6>
                                    </div>  
                                    <h6 class="mt-3 mb-0"style="color:#304D30;">virtual account</h6>
                                    <div class="d-flex align-items-center">
                                        <input class="form-check-input mt-0 mx-1" name="bayarwoi" type="radio" value="" aria-label="Checkbox for following text input">
                                        <!-- <img src="{{asset('images/images21.jpg')}}" alt="gopay" style="width: 50px; height: auto; margin-right: 10px;"> -->
                                        <h6 class="mb-0"style="color:#304D30;">BCA</h6>
                                    </div>
                                </div>
                                <div class="justify-content-between align-items-center mb-4 mt-4">
                                    <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                        <h6 class="mx-3 mb-0"style="color:#304D30;">Subtotal untuk Produk</h6>
                                        <h6 class="mx-3 mb-0"style="color:#304D30;">Rp 160.000</h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                        <h6 class="mx-3 mb-0"style="color:#304D30;">Onkos Kirim</h6>
                                        <h6 class="mx-3 mb-0"style="color:#304D30;">Rp 15.000</h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                        <h6 class="mx-3 mb-0"style="color:#304D30;">Total Pembayaran</h6>
                                        <h6 class="mx-3 mb-0"style="color:#304D30;">Rp 175.000</h6>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <!-- Checkout Button -->
                            <div class="d-flex justify-content-end my-12-1">
                                <a type="button" class="btn text-white" style="background-color: #768A6E;" href="{{url('/pembayaranObat')}}">PEMBAYARAN</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
