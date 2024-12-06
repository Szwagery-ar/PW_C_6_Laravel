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

    .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgb(0,0,0); 
        background-color: rgba(0,0,0,0.4); 
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto; 
        padding: 20px;
        border: 1px solid #888;
        width: 30%; 
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

</style>

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item d-inline-block w-auto"><a href="{{ url('admin/medicinegroups') }}" class="no-underline" style="color: #888A88"><h3>Medicine Groups</h3></a></li>
            <li class="breadcrumb-item active d-inline-block w-auto" aria-current="page"><h3>Azithral 500 Tablet</h3></li>
        </ol>
    </nav>

    <h5>List of medicines groups.</h5>
            
    <div class="d-flex justify-content-between">
        <div style="position: relative; width: 40%;">
            <input class="form-control" type="search" placeholder="Search Medicine Groups.." aria-label="Search" style="width: 100%; background-color: #E3EBF3;">
            <i class="fa-solid fa-magnifying-glass" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);"></i>
        </div>
        <button type="button" class="btn" style="height: 40px; background-color: #F0483E; color: #FFFFFF" id="addGroupBtn"> 
            <i class="fa-solid fa-plus"></i> Add Medicine
        </button>
    </div>
    

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Group Name</th>
                <th scope="col">Number of Medicines</th>
                <th scope="col" class="small-width">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td scope="row">Augmentin 625 Duo Tablet</td>
                <td>02</td>
                <td class="small-width">
                    <a href="{{url('admin/detailgroup')}}" class="no-underline" style="color: red"><i class="fa-solid fa-trash"></i> Remove from Group</a>
                </td>
            </tr>
            <tr>
                <td scope="row">Azithral 500 Tablet</td>
                <td>32</td>
                <td class="small-width">
                    <a href="" class="no-underline" style="color: red"><i class="fa-solid fa-trash"></i> Remove from Group</a>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="#" id="deleteGroups" class="btn btn-outline-danger no-hover" style="background-color: #FFFFFF"><i class="fa-solid fa-trash"></i> Delete Group</a>

    <!-- Modal untuk menambahkan obat -->
    <div id="addModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeAddModal">&times;</span>
            <h2><strong>Add Medicine</strong></h2>
            <label for="groupName"><strong>Enter Medicine Name:</strong></label>
            <input type="text" id="groupName" class="form-control mt-1" placeholder="Enter Medicine Name or Medicine ID">
            <button type="button" id="addGroup" class="btn mt-3" style="height: 40px; background-color: #F0483E; color: #FFFFFF"> 
                <i class="fa-solid fa-plus"></i> Add Medicine to Group
            </button>
        </div>
    </div>

    <!-- Modal untuk menghapus grup -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeDeleteModal">&times;</span>
            <h2><strong>Delete Group?</strong></h2>
            
            <div class="d-flex justify-content-between">
                <button type="button" id="cancelDelete" class="btn" style="height: 40px; width: 150px; background-color: #8E8E8E; color: #FFFFFF">Cancel</button>
                <button type="button" id="confirmDelete" class="btn" style="height: 40px; width: 150px; background-color: #F0483E; color: #FFFFFF">Delete</button>
            </div>
        </div>
    </div>


</div>
<script>
    // Modal untuk menambahkan obat
    var addModal = document.getElementById("addModal");
    var addButton = document.getElementById("addGroupBtn");
    var closeAddModal = document.getElementById("closeAddModal");

    addButton.onclick = function() {
        addModal.style.display = "block";
    }

    closeAddModal.onclick = function() {
        addModal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == addModal) {
            addModal.style.display = "none";
        }
    }

    document.getElementById("addGroup").onclick = function() {
        var groupName = document.getElementById("groupName").value;
        if (groupName) {
            alert("Group '" + groupName + "' added!");
            addModal.style.display = "none"; 
            document.getElementById("groupName").value = "";
        } else {
            alert("Please enter a group name.");
        }
    }
</script>

<script>
    // Modal untuk menghapus grup
    var deleteModal = document.getElementById("deleteModal");
    var deleteButton = document.getElementById("deleteGroups"); // Tombol Delete Group
    var closeDeleteModal = document.getElementById("closeDeleteModal");
    var cancelButton = document.getElementById("cancelDelete");
    var confirmDeleteButton = document.getElementById("confirmDelete");

    deleteButton.onclick = function() {
        deleteModal.style.display = "block";
    }

    closeDeleteModal.onclick = function() {
        deleteModal.style.display = "none";
    }

    cancelButton.onclick = function() {
        deleteModal.style.display = "none";
    }

    confirmDeleteButton.onclick = function() {
        // Tambahkan logika penghapusan di sini jika diperlukan
        console.log("Group deleted");

        // Redirect ke halaman user management setelah konfirmasi delete
        window.location.href = "{{ url('admin/medicinegroups') }}";
    }

    window.onclick = function(event) {
        if (event.target == deleteModal) {
            deleteModal.style.display = "none";
        }
    }
</script>



@endsection
