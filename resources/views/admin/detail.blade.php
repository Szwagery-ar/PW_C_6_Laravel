@extends('IndexAdmin')

@section('content')

<style>
    /* Mengatur tampilan umum konten */
    body {
        font-family: Poppins, sans-serif;
        background-color: #D8DEC5; /* Warna sage green */
    }
    .content {
        padding: 20px;
    }
    /* Header Dashboard */
    .dashboard-header h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }
    .dashboard-header h5 {
        font-weight: bold;
    }
    /* Kartu Data Utama */
    .card-custom {
        border: 1px solid #A3B18A; /* Warna sage untuk border */
        border-radius: 10px;
        padding: 20px;
        background-color: white;
        margin-right: 20px;
        width: 300px;
    }
    .card-custom h4 {
        font-size: 18px;
        margin-bottom: 5px;
    }
    .card-custom h5 {
        font-size: 24px;
        font-weight: bold;
    }
    .card-custom i {
        font-size: 40px;
        margin-right: 15px;
    }
    /* Atur layout menjadi lebih fleksibel */
    .d-flex {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }
    /* Inventory & Customers Section */
    .inventory-section {
        background-color: #A3B18A;
        padding: 20px;
        border-radius: 10px;
        margin-top: 40px;
    }
    .inventory-section h6 {
        font-size: 18px;
        margin-bottom: 15px;
    }
    .inventory-section .card {
        border-radius: 10px;
    }
    .go-link {
        text-align: right;
        font-size: 12px;
    }
    .go-link a {
        color: black;
        text-decoration: none;
    }

    p {
        margin: 0;
    }

    .no-hover {
        transition: none; /* Nonaktifkan transisi untuk hover */
    }

    .no-hover:hover {
        background-color: #FFFFFF; /* Tetap warna latar belakang putih saat hover */
        color: #dc3545; /* Pastikan warna teks tetap sesuai */
        border-color: #dc3545; /* Pastikan warna border tetap sesuai */
    }

</style>

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item d-inline-block w-auto"><a href="{{ url('admin/listofmedicines') }}" class="no-underline" style="color: #888A88"><h3>List of Medicines</h3></a></li>
            <li class="breadcrumb-item active d-inline-block w-auto" aria-current="page"><h3>Azithral 500 Tablet</h3></li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between">
        <div style="position: relative; width: 40%;">
            <input class="form-control" type="search" placeholder="Search Medicine Inventory.." aria-label="Search" style="width: 100%; background-color: #E3EBF3;">
            <i class="fa-solid fa-magnifying-glass" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);"></i>
        </div>
        <a href="{{url('admin/editmedicine')}}" class="btn" style="background-color: #03A9F5; color: #FFFFFF"><i class="fa-solid fa-pencil"></i> Edit Details</a>
    </div>

    <div class="d-flex justify-content-between" style="width: 100%;">
        <table class="table mt-4" style="width: 48%; height: 80%; border-collapse: collapse;">
            <thead>
                <tr>
                    <td scope="col" colspan="2" style="">Medicine</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" style="border: none;">D06ID232435454</th>
                    <th scope="row" style="border: none; ">24</th>
                </tr>
                <tr>
                    <td scope="row" style="border: none;">Medicine ID</td>
                    <td scope="row" style="border: none;">Medicines Group</td>
                </tr>
            </tbody>
        </table>

        
        <table class="table mt-4" style="width: 48%; height: 80%; border-collapse: collapse;">
            <thead>
                <tr>
                    <td scope="col" colspan="3">Inventory in Qty</td>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" style="border: none;">298</th>
                    <th scope="row" style="border: none;">24</th>
                    <th scope="row" style="border: none;">08</th>
                </tr>
                <tr>
                    <td scope="row" style="border: none;">Lifetime Supply</td>
                    <td scope="row" style="border: none;">Lifetime Sales</td>
                    <td scope="row" style="border: none;">Stick Left</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="">
        <table class="table mt-4">
            <thead>
                <tr>
                    <td scope="col">How to Use</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" style="height: 60px">Take this medication by mouth with or without food as directed by your doctor, usually once daily.</td>
                </tr>
            </tbody>
        </table>
        <table class="table mt-4">
            <thead>
                <tr>
                    <td scope="col">Side Effects</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" style="height: 60px">Dizziness, lightheadedness, drowsiness, nausea, vomiting, tiredness, excess saliva/drooling, blurred vision, weight gain, constipation, headache, and trouble sleeping may occur. If any of these effects persist or worsen, consult your doctor.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <a href="{{ url('admin/listofmedicines') }}" class="btn btn-outline-danger no-hover" style="background-color: #FFFFFF"><i class="fa-solid fa-trash"></i> Delete Medicine</a>
</div>
@endsection
