<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Chndu;
use App\Http\Controllers\chnduController;
use Illuminate\Http\Request;

Route::get('/home', function () {
 return view('home');
});

Route::get('/registerUser', [ResistrationController::class, 'index']);
Route::post('/create', [ResistrationController::class, 'register']);
Route::get('/createCustomer', [ChnduController::class, 'index']);
Route::get('/delete/{customer_id}', [ChnduController::class, 'delete'])->name('delete.customer');
Route::get('/restore/{customer_id}', [ChnduController::class, 'restore'])->name('restore.customer');
Route::get('/forcedelete/{customer_id}', [ChnduController::class, 'forcedelete']);
Route::get('/edit/{customer_id}', [ChnduController::class, 'edit'])->name('edit.customer');
// Route::get('/update/{customer_id}', [chnduController::class, 'update'])->name('edit.customer');

Route::post('/update', [ChnduController::class, 'update'])->name('usersData');



Route::get('/trash', [ChnduController::class, 'trash'])->name('trash.customers');

Route::get('/view', [ChnduController::class, 'view'])->name('view.customers');
Route::post('/create-customer', [ChnduController::class, 'store'])->name('create.customer');

// Route::post('/chndu', [ChnduController::class, 'store']);

// Route::get('/chndu', function () {
//     $customer = Chndu::all();
//     echo'<pre>';
//     print_r( $customer ->toArray());
//     echo '</pre>';
// });
Route::get('get_all_function', function () {
    $session = session()->all();
    p($session); // Dump and die to see all session data
});


Route::get('set_session', function (Request $request) {
    $request->session()->put('name', 'yohyo');
    $request->session()->put('customer_id', '123');
    // $request->session()->put('bank', 'uco');
    $request->session()->put('account', '45463829092374');
    $request->session()->put('password', '7f7f73h4r34h');
    $request->session()->put('piyus ki', '45463829092374');




    return redirect('get_all_function');
});
Route::get('destroy_session', function () {
    session()->flush(); // Clears all session data
    return redirect('get_all_function'); // Redirect to view session data (which should be empty now)
});
