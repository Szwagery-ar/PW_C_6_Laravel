<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembelianObatController;
use App\Models\PembelianObat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

$user = [
    'profil' => [
        'username' => '',
        'name' => '',
        'password' => '',
        'phone' => '',
        'address' => '',
        'email' => '',
    ]
];

session(['user' => $user]);


Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/obat', function () {
    return view('obat');
})->name('obat');

Route::get('/jenisObat', [ObatController::class, 'showKatalog'])->name('jenisObat');

Route::get('/home', [ObatController::class, 'index'])->name('home'); // untuk tampil data di customer
Route::get('/obat/{id}', [ObatController::class, 'show'])->name('detailObat'); // untuk tampil data di customer
Route::post('/obat/store', [ObatController::class, 'store']); // untuk admin
Route::put('/obat/update/{id}', [ObatController::class, 'update'])->name('obat.update'); // untuk admin
Route::delete('/obat/delete/{id}', [ObatController::class, 'delete'])->name('obat.delete'); // untuk admin

Route::get('/pembelianObat/index', function () {
    // return view('obat');
    $data = PembelianObat::all();
    return response()->json($data);
})->name('pembelianObat.index');

Route::get('/pembelianObat/{id}', function (int $id) {
    // return view('obat');
    $data = PembelianObat::where('id_transaksi', $id)->get();
    return response()->json($data);
})->name('pembelianObat.showByIdTransaksi');

Route::post(
    '/obat/store/{id}',
    function (Request $request, $id) {
        $validatedData = $request->validate([
            'jumlah_obat' => 'required|integer',
        ]);
        // Prepare item data
        $item = [
            'id_obat' => $id,
            'jumlah_obat' => $validatedData['jumlah_obat'],
        ];
        // Add or create cart items array in session
        $cart = Session::get('cart.items', []);
        $cart[] = $item;
        Session::put('cart.items', $cart);

        return back()->with('success', 'Item ditambahkan ke keranjang');
    } 
)->name('obat.store');

// Route::put(
//     '/obat/update/{id}',
//     [ObatController::class, 'update']
//     // return response()->json($item);
//     // [ObatController::class, 'store'] 
// )->name('obat.update');
// Route::delete('/cart/delete/{id}', [PembelianObatController::class, 'deleteItem'])->name('cart.delete');

// Route::get('/detailObat', function () {
//     return view('detailObat');
// })->name('detailObat');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get("/", function () {
    session()->forget('cart');
    return view('login');
});

// Authentication Routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(
    function () {
        Route::get('/obat', [ObatController::class, 'index'])->name('getObat');
        Route::get('/detail-obat/{id}', [ObatController::class, 'detail'])->name('getDetailObat');
        Route::post('/add-to-cart/{id}', [TransaksiController::class, 'addToCart'])->name('addToCart');
        Route::get('/cart', [TransaksiController::class, 'getCart'])->name('getCart');
        Route::post('/cart/{id}/{value}', [TransaksiController::class, 'setValueCart'])->name('setValueCart');
        Route::post('/checkout', [TransaksiController::class, 'checkout'])->name('checkout');
        Route::post('/active-item/{id}', [TransaksiController::class, 'activeItem'])->name('activeItem');
        Route::post('/payment-obat', [TransaksiController::class, 'storePembelianObat'])->name('paymentObat');
    }
);

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/transaksiCheckout', function () {
    return view('/transaksiCheckout');
})->name('transaksiCheckout');

Route::get('/transaksiCheckoutKonsul', function () {
    return view('/transaksiCheckoutKonsul');
})->name('transaksiCheckoutKonsul');

Route::get('/pembayaranObat',function(){
    return view('/pembayaranObat');
})->name('pembayaranObat');

Route::get('/pembayaranKonsul', function () {
    return view('/pembayaranKonsul');
})->name('pembayaranKonsul');

Route::post('/edit-profil', function () {
    $userData = [
        'profil' => [
            'username' => session('user')['profil']['username'],
            'name' => $_POST['name'],
            'password' => session('user')['profil']['password'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'address' => $_POST['address']
        ]
    ];

    session(['user' => $userData]);

    return redirect('/profil');
});

Route::post('/logout', function () {
    $userData = [
        'profil' => [
            'username' => '',
            'name' => '',
            'password' => '',
            'phone' => '',
            'email' => '',
            'address' => ''
        ]
    ];

    session(['user' => $userData]);

    return redirect('/');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/listofmedicines', function () {
    return view('admin.listofmedicines');
});
Route::get('/admin/medicinegroups', function () {
    return view('admin.medicinegroups');
});
Route::get('/admin/usermanagement', function () {
    return view('admin.usermanagement');
});


Route::get('/admin/detail', function () {
    return view('admin.detail');
});
Route::get('/admin/detailgroup', function () {
    return view('admin.detailgroup');
});
Route::get('/admin/editmedicine', function () {
    return view('admin.editmedicine');
});
Route::get('/admin/addmedicine', function () {
    return view('admin.addmedicine');
});
Route::get('/admin/editprofile', function () {
    return view('admin.editprofile');
});
