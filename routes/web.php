<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservasiController;
use App\Models\PembelianObat;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

// Authentication Routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');





Route::get('/', function () {
    return redirect('/login');
});

//ROUTE LOGIN 
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');

Route::post('/login', [UserController::class, 'login'])->name('login');

//ROUTE REGISTER
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

//ROUTE PROFIL
Route::get('/profil', [UserController::class, 'showProfilForm'])->middleware('auth')->name('profil');
Route::put('/profile/{id}', [UserController::class, 'update'])->name('profile.update');

// Route untuk logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// ROUTE OBAT
Route::get('/home', [ObatController::class, 'index'])->name('home'); // untuk tampil data di customer
Route::get('/obat/{id}', [ObatController::class, 'show'])->name('detailObat'); // untuk tampil data di customer

Route::post('/obat/store', [ObatController::class, 'store']);// untuk admin


// Route::get('/obat/{id}', [ObatController::class, 'show']);// tampil satu data obat
Route::put('/obat/update/{id}', [ObatController::class, 'update'])->name('obat.update');// untuk admin
Route::delete('/obat/delete/{id}', [ObatController::class, 'delete'])->name('obat.delete'); // untuk admin


//ROUTE RESERVASI
Route::get('/reservasi', [ReservasiController::class, 'show'])->name('reservasi');

// Route::get('/reservation', function () {
//     return view('reservation');
// })->name('reservation'); 

Route::get('/obat', function () {
    return view('obat');
})->name('obat');

Route::get('/listObat', [ObatController::class, 'showKatalog'])->name('listObat');
Route::get('/jenisObat/{jenis}', [ObatController::class, 'getAllObatByJenis'])->name('jenisObat');

// Route::get('/detailObat', function () {
//     return view('detailObat');
// })->name('detailObat');

Route::get('/cart', function(){
    return view('cart');
})->name('cart');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/pembelianObat/{id}', function (int $id) {
    // return view('obat');
    $data = PembelianObat::where('id_transaksi' ,$id)->get();
    return response()->json($data);
})->name('pembelianObat.showByIdTransaksi');

// Route::post('/pembelianObat/store', [PembelianObatController::class, 'storeToCart'] 
// )->name('pembelianObat.storeToCart');

Route::post('/obat/store/{id}', function(Request $request, $id){
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
    // return response()->json($item);
// [ObatController::class, 'store'] 
)->name('obat.store');

Route::put('/obat/update/{id}', [ObatController::class, 'update']
    // return response()->json($item);
// [ObatController::class, 'store'] 
)->name('obat.update');

Route::delete('/cart/delete/{id}', [PembelianObatController::class, 'deleteItem'])->name('cart.delete');

/////
Route::get('/transaksiCheckout',function(){
    return view('/transaksiCheckout');
})->name('transaksiCheckout');

Route::get('/transaksiCheckoutKonsul',function(){
    return view('/transaksiCheckoutKonsul');
})->name('transaksiCheckoutKonsul');

Route::get('/pembayaranObat',function(){
    return view('/pembayaranObat');
})->name('pembayaranObat');

Route::get('/pembayaranKonsul',function(){
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





Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/admin/listofmedicines', function () {
    return view('admin.listofmedicines');
});
Route::get('/admin/medicinegroups', function () {
    return view('admin.medicinegroups');
});
Route::get('/admin/usermanagement', [AdminController::class, 'userManagement'])->name('admin.users');


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

Route::get('/admin/editprofile/{user}', [AdminController::class, 'editUser'])->name('admin.editprofile');
Route::put('/admin/editprofile/{user}', [AdminController::class, 'updateUser'])->name('admin.updateUser');
Route::delete('/admin/editprofile/{user}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');