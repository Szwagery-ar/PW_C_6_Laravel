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

<body>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item d-inline-block w-auto"><a href="{{ url('admin/listofmedicines') }}" class="no-underline" style="color: #888A88"><h3>User Management</h3></a></li>
                <li class="breadcrumb-item active d-inline-block w-auto" aria-current="page"><h3>Edit Profile</h3></li>
            </ol>
        </nav>
        <p><small>*Feel free to update any fields as needed.</small></p>
        <form onsubmit="redirectAfterSubmit(event)">
            <div class="d-flex justify-content-between">
                <div class="mb-3" style="flex: 1; margin-right: 10px;">
                    <label for="userID" class="form-label">Medicine ID</label>
                    <input type="text" class="form-control" id="userID" required>
                </div>
                <div class="mb-3" style="flex: 1;">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-3" style="flex: 1; margin-right: 10px;">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3" style="flex: 1;">
                    <label for="phonenumber" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" id="phonenumber" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" rows="3" required></textarea>
            </div>

            <div class="d-flex align-items-end">
                <div class="mb-3" style="flex: 1;">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3 ms-3">
                    <button type="button" class="btn btn-outline-danger" id="resetPasswordBtn" style="margin-bottom: 0;">Reset</button>
                </div>
            </div>

            <div class="d-flex ">
                <button type="submit" class="btn mb-3" style="background-color: #F0483E; color: white;">Save Details</button>
                <button type="submit" class="btn btn-secondary mb-3">Delete User</button>
            </div>
        </form>

    </div>


    <script>
        function redirectAfterSubmit(event) {
            event.preventDefault();
            window.location.href = "{{ url('admin/listofmedicines') }}";
        }
    </script>
</body>
@endsection
