@extends('navbar')

@section('content')
    <style>
        body {
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            width: 900px;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .form-label {
            color: black;
            font-weight: bold;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            margin-top: 20px;
        }

        .btn-edit-profile,
        .btn-cancel-profile {
            margin-top: 20px;
            display: block;
        }

        .profile-col {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="center-container">
        <div class="card mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-5 profile-col">
                        <!-- Profile Picture -->
                        <div class="text-center">
                            <img src="{{ asset('images/user.png') }}" alt="Profile Picture" id="profile-pic"
                                class="profile-picture">
                            <input type="file" id="profile-pic-input" accept="image/*" style="display: none;" />
                        </div>
                    </div>
                    <div class="col-7">
                        <!-- Profil Info -->
                        <form id="profile-form" action="{{ route('profil') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" value="john_doe" disabled
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="John Doe"
                                    disabled required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="1234567890"
                                    disabled required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="john@example.com" disabled required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="123 Main St"
                                    disabled required>
                            </div>

                            <!-- Tombol Edit -->
                            <button type="button" class="btn btn-success w-100 btn-edit-profile fw-bold"
                                id="edit-profile-btn">
                                Edit Profile
                            </button>

                            <!-- Tombol Simpan -->
                            <button type="submit" class="btn btn-success w-100 btn-save-profile d-none fw-bold"
                                id="save-profile-btn">
                                Save Changes
                            </button>

                            <!-- Tombol Cancel -->
                            <button type="button" class="btn btn-danger w-100 btn-cancel-profile d-none fw-bold"
                                id="cancel-profile-btn">
                                Cancel
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ganti profil picture -->
    <script>
        document.getElementById('profile-pic').addEventListener('click', function() {
            document.getElementById('profile-pic-input').click();
        });

        document.getElementById('profile-pic-input').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-pic').src = e.target.result;
            };
            reader.readAsDataURL(file);
        });

        // untuk mengaktifkan edit
        document.getElementById('edit-profile-btn').addEventListener('click', function() {
            document.getElementById('name').disabled = false;
            document.getElementById('phone').disabled = false;
            document.getElementById('email').disabled = false;
            document.getElementById('address').disabled = false;
            document.getElementById('save-profile-btn').classList.remove('d-none');
            document.getElementById('cancel-profile-btn').classList.remove('d-none');
            this.classList.add('d-none');
        });

        // untuk membatalkan edit
        document.getElementById('cancel-profile-btn').addEventListener('click', function() {
            document.getElementById('name').disabled = true;
            document.getElementById('phone').disabled = true;
            document.getElementById('email').disabled = true;
            document.getElementById('address').disabled = true;

            document.getElementById('name').value = 'John Doe';
            document.getElementById('phone').value = '1234567890';
            document.getElementById('email').value = 'john@example.com';
            document.getElementById('address').value = '123 Main St';

            document.getElementById('save-profile-btn').classList.add('d-none');
            this.classList.add('d-none');
            document.getElementById('edit-profile-btn').classList.remove('d-none');
        });
    </script>
@endsection
