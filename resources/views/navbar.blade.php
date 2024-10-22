<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMA - Health Solutions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #F4F1E3;
        }

        .navbar {
            background-color: #768A6E;
            color: white;
            height: 100px;
            flex-grow: 1;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .search-bar {
            display: flex;
            align-items: center;
            border-radius: 30px;
            background-color: white;
            border: 2px solid #768A6E;
            padding: 5px;
        }

        .search-bar input[type="search"] {
            border: none;
            outline: none;
            width: 100%;
            padding: 8px 15px;
            border-radius: 30px;
            margin-right: 10px;
        }

        .search-bar button {
            background-color: #D6DEC9;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            color: #4a4a4a;
            font-weight: bold;
        }

        .footer {
            background-color: #768A6E;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="row mx-2" style="flex-grow: 1">
            <div class="col-3">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/Logo.png') }}" alt="Atma" width="135" height="50">
                </a>
            </div>
            <div class="col-6">
                <form class="search-bar" onsubmit="return searchObat(event)">
                    <img src="{{ asset('images/IconSearch.png') }}" alt="Search Icon">
                    <input type="search" class="form-control" placeholder="Search" id="search-input">
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="{{ asset('images/cart.png') }}" alt="Atma" width="83" class= "me-4"
                                height="35">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profil') }}">
                            <img src="{{ asset('images/profilKosong.png') }}" alt="Atma" width="45"
                                class= "me-4" height="40">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content goes here -->
    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-white mt-3">
            <div class="row">
                <div class="col-md-5">
                    <h5>Contact</h5>
                    <p class="text-white">
                        Jl. Sorosutan, Umbulharjo, Sleman, Daerah Istimewa Yogyakarta<br>
                        +628 7887 7683<br>
                        apotekatma@gmail.com
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <div class="quick-links">
                        <a href="{{ route('home') }}" class="text-white">Home</a>
                        <br>
                        {{-- <a href="{{ route('about') }}" class="text-white">About</a> --}}
                    </div>
                </div>

            </div>
            <div class="text-center mt-4">
                <p class="text-white">&copy; 2024 APOTEK ATMA. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const obatArray = [
            "Paracetamol",
            "Ibuprofen",
            "Amoxicillin",
            "Cetirizine",
            "Loratadine",
            "Aspirin",
            "Omeprazole",
            "Simvastatin",
        ];

        function searchObat(event) {
            event.preventDefault();
            const searchTerm = document.getElementById('search-input').value.toLowerCase();
            const results = obatArray.filter(obat => obat.toLowerCase().includes(searchTerm));
            if (results.length > 0) {
                alert("Search results: " + results.join(', '));
            } else {
                alert("Product not found");
            }
            // Reset input
            document.getElementById('search-input').value = '';
        }
    </script>
</body>

</html>
