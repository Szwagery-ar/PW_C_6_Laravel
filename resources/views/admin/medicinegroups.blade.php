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

<div class="content">
    <div class="container-fluid">
        <div class="dashboard-header mb-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active d-inline-block w-auto" aria-current="page"><h3>Medicines Groups (02)</h3></li>
                </ol>
            </nav>
            <h5>List of medicines groups.</h5>
            
            <div class="d-flex justify-content-between">
                <div style="position: relative; width: 40%;">
                    <input class="form-control" type="search" placeholder="Search Medicine Groups.." aria-label="Search" style="width: 100%; background-color: #E3EBF3;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%);"></i>
                </div>
                <button type="button" class="btn" style="height: 40px; background-color: #F0483E; color: #FFFFFF" id="addGroupBtn"> 
                    <i class="fa-solid fa-plus"></i> Add New Group
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
                        <td scope="row">Generic Medicine</td>
                        <td>02</td>
                        <td class="small-width">
                            <a href="{{url('admin/detailgroup')}}" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Diabetes</td>
                        <td>32</td>
                        <td class="small-width">
                            <a href="" class="no-underline">View Full Detail <i class="fa-solid fa-angles-right"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>


        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <h2><strong>Add Group</strong></h2>
                <label for="groupName"><strong>Enter Medicine Group Name:</strong></label>
                <input type="text" id="groupName" class="form-control mt-1" placeholder="Medicine Group Name">
                <button type="button" id="addGroup" class="btn mt-3" style="height: 40px; background-color: #F0483E; color: #FFFFFF"> 
                    <i class="fa-solid fa-plus"></i> Add Group
                </button>
            </div>
        </div>

    </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    
    var btn = document.getElementById("addGroupBtn");
    
    var span = document.getElementById("closeModal");
    
    btn.onclick = function() {
        modal.style.display = "block";
    }
    
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.getElementById("addGroup").onclick = function() {
        var groupName = document.getElementById("groupName").value;
        if (groupName) {
            alert("Group '" + groupName + "' added!");
            modal.style.display = "none"; 
            document.getElementById("groupName").value = "";
        } else {
            alert("Please enter a group name.");
        }
    }
</script>



@endsection
