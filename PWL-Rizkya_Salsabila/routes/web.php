<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//menggunakan rute 'GET' dengan url '/hello', kemudian mengembalikan teks 'Hello World'
Route::get('/hello', [WelcomeController::class, 'hello']);

//menggunakan rute 'GET' dengan url '/world', kemudian mengembalikan teks 'World'
Route::get('/world', function () {
    return 'World';
});

//menggunakan rute 'GET' dengan url '/', kemudian mengembalikan teks 'Selamat Datang'
Route::get('/', function () {
    return 'Selamat Datang';
});

/*menggunakan rute 'GET' dengan url '/about', 
kemudian mengembalikan teks NIM - Nama (2341720056 - Rizkya Salsabila) */
Route::get('/about', function () {
    return '2341720056 - Rizkya Salsabila';
});

/* menggunakan rute 'GET' dengan url yang memakai parameter dinamis {name},
dan disimpan dalam variabel $name, kemudian mengembalikan teks 
'gabungan string dg nilai parameter' */
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

/* menggunakan rute 'GET' dengan url memakai parameter dinamis {post} dan {comment},
serta memiliki 2 parameter '$postId' dan '$commentId', yang selanjutnya mengembalikan
teks gabungan nilai nilai tersebut */
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- ' .$postId. " <br>Komentar ke- : " .$commentId;
});

/* menggunakan rute 'GET' dengan url memakai parameter dinamis {id},
serta memiliki 1 parameter '$id' yang nantinya mengambil nilai dari {id} url
untuk ditampilkan di halaman web browser */
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' .$id;
});

/* menggunakan rute 'GET' dengan url memakai parameter dinamis {name?} yang 
bersifat opsional, jika diisi maka akan diterima oleh parameter 
'$name'.Jika tidak, maka nilainya null */
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya ' .$name;
});

/* menggunakan rute 'GET' dengan url memakai parameter dinamis {name?} yang 
bersifat opsional, jika diisi maka akan diterima oleh parameter 
'$name'.Jika tidak, maka nama yang muncul 'John' */
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya ' .$name;
});
/* menggunakan rute 'GET' dengan url '/user/profile', dimana fungsi ini tidak
// mengembalikan output apapun dan diberikan nama 'profile' pada route ini */
// Route::get('/user/profile', function () {
//     //
// })->name('profile');

// //menyimpan hasil route('profile') ke dalam variabel $url
// $url = route('profile');

// //mengalihkan pengguna ke named route 'profile'
// return redirect()->route('profile');

//akan menampilkan view welcome
Route::view('/welcome', 'welcome');
//akan menampilkan view welcome dengan tambahan data variabel name
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

/* menggunakan rute 'GET' dengan url '/hello',
kemudian memanggil class WelcomeController dan menjalankan method 'hello' */
Route::get('/hello', [WelcomeController::class, 'hello']);