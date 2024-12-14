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

    .small-width {
        width:200px; /* Sesuaikan dengan lebar yang kamu inginkan */
    }

    .no-underline {
        color: #03A9F5; /* Warna biru */
        text-decoration: none; /* Menghilangkan underline */
    }

    .no-underline:hover {
        color: #03A9F5; /* Warna tetap biru saat hover */
        text-decoration: none; /* Tetap tanpa underline saat hover */
    }

</style>

<div class="content">
    <div class="container-fluid">
        <div class="dashboard-header mb-5">
            <h1>User Management</h1> 
            <h5>List of User.</h5>

            <div style="position: relative; width: 40%;">
                <input class="form-control" type="search" placeholder="Search User By Name.." aria-label="Search" style="width: 100%; background-color: #E3EBF3;">
                <i class="fa-solid fa-magnifying-glass" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);"></i>
            </div>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">Costumer Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="{{url('admin/editprofile')}}" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">C002</td>
                        <td>Adam Tan</td>
                        <td>338 Geri Curve, North Jerry, ND 68791</td>
                        <td>adam.tan@gmail.com</td>
                        <td>08123456789</td>
                        <td class="small-width">
                            <a href="" class="no-underline"><i class="fa-solid fa-pencil"></i> Edit Profile <i class="fa-solid fa-angles-right"></i></a>
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

@endsection
