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
</style>

<div class="content">
    <div class="container-fluid">
        <div class="dashboard-header mb-5">
            <div class="d-flex justify-content-between">
                <h1>List of Medicines (298)</h1>
                <a href="{{url('admin/addmedicine')}}" type="button" class="btn" style="height: 40px; background-color: #F0483E; color: #FFFFFF"> 
                    <i class="fa-solid fa-plus"></i> Add New Item
                </a>
            </div>
            <h5>List of medicines available for sales.</h5>

            <div class="d-flex justify-content-between">
                <div style="position: relative; width: 40%;">
                    <input class="form-control" type="search" placeholder="Search Medicine Inventory.." aria-label="Search" style="width: 100%; background-color: #E3EBF3;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);"></i>
                </div>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" style="background-color: #FFFFFF; border: 1px solid #1D242E" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        - Select Group -
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Generic Medicine</a></li>
                        <li><a class="dropdown-item" href="#">Diabetes</a></li>
                    </ul>
                </div>
            </div>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">Medicine Name</th>
                        <th scope="col">Medicine ID</th>
                        <th scope="col">Group Name</th>
                        <th scope="col">Stock in Qty</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">Augmentin 625 Duo Tablet</td>
                        <td>D06ID232435454</td>
                        <td>Generic Medicine</td>
                        <td>350</td>
                        <td class="small-width">
                            <a href="{{url('admin/detail')}}" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Azithral 500 Tablet</td>
                        <td>D06ID232435451</td>
                        <td>Generic Medicine</td>
                        <td>20</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Ascoril LS Syrup</td>
                        <td>D06ID232435452</td>
                        <td>Diabetes</td>
                        <td>85</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Azee 500 Tablet</td>
                        <td>D06ID232435450</td>
                        <td>Generic Medicine</td>
                        <td>75</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Allegra 120mg Tablet</td>
                        <td>D06ID232435455</td>
                        <td>Diabetes</td>
                        <td>44</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Alex Syrup</td>
                        <td>D06ID232435456</td>
                        <td>Generic Medicine</td>
                        <td>65</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Amoxyclav 625 Tablet</td>
                        <td>D06ID232435457</td>
                        <td>Generic Medicine</td>
                        <td>150</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Avil 25 Tablet</td>
                        <td>D06ID232435458</td>
                        <td>Generic Medicine</td>
                        <td>270</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between mt-3">
                <p><strong>Showing 1 - 8 result of 298</strong></p>
                <div class="d-flex justify-content-between">
                    <a class="badge" style="background-color: #FFFFFF; color: #1D242E" href="#"><i class="fa-solid fa-chevron-left"></i></a>
                    <p><strong>Page 01</strong></p>
                    <a class="badge" style="background-color: #FFFFFF; color: #1D242E" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
