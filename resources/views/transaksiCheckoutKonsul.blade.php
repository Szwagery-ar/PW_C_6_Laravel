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
        .my-12-1{
            margin-top: 3rem;
            margin-bottom: 1rem;
        }
    </style>
    <div class="m-0 px-10" style="background-color: #F4F1E3;">
        <div class="container py-3 pt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body mx-5">
                            <h2 class="card-title mb-4" style="color:#768A6E;">Booking</h2>
                            
                            <!-- Item 1 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <h6 class="mb-0 pr-4"style="color:#304D30;" style="width: 200px;">Nama Lengkap</h6>
                                <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                    <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <h6 class="mb-0 pr-4"style="color:#304D30;"style="width: 200px;">Usia</h6>
                                <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                    <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                    <h6 class="mb-0 pr-4"style="color:#304D30;"style="width: 200px;">Jenis Kelamin</h6>
                                    <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                        <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                    </div>
                            </div>
                            <!-- Item 14-->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                    <h6 class="mb-0 pr-4"style="color:#304D30;"style="width: 200px;">Berat Badan</h6>
                                    <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                        <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                    </div>
                            </div>
                            <!-- Item 5 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                    <h6 class="mb-0 pr-4"style="color:#304D30;"style="width: 200px;">Jam Konsultasi</h6>
                                    <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                        <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                    </div>
                            </div>
                            <!-- Item 6 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <h6 class="mb-0 pr-4"style="color:#304D30;"style="width: 200px;">Tanggal Konsultasi</h6>
                                <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                    <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                </div>
                            </div>
                            <!-- Item 7 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                <h6 class="mb-0 pr-4"style="color:#304D30;"style="width: 200px;">Alergi</h6>
                                <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                    <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                </div>
                            </div>
                            <!-- Item 8 -->
                            <div class="d-flex justify-content-between align-items-center mb-4 mt-4">
                                    <h6 class="mb-0 pr-4"style="color:#304D30;"style="width: 200px;">Keluhan</h6>
                                    <div class="card border border-dark rounded m-2 p-2" style="width: 1000px;">
                                        <h6 class="mx-2 mb-0"style="color:#304D30;">Temp</h6>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3 pt-1">
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
                            <a type="button" class="btn text-white" style="background-color: #768A6E;" href="{{url('/pembayaranKonsul')}}">PEMBAYARAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
