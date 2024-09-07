<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about_contoh', function () {
//     return view('about_contoh', [
//         'name' => 'Yogi Pradana',
//         'kelas' => 'a2',
//     ]);
// });

// // Route::get('/', function () {
// //     return view('home');
// // })->name('home');

// Route::get('/about', function () {
//     $data = [
//         'name' => 'Yogi Pradana Isdiyanto',
//         'profession' => 'Students in Universitas Gadjah Mada',
//         'email' => 'yogipradanaisdiyanto@mail.ugm.ac.id',
//         'bio' => 'Im passionate about software development, 
//         with a focus on Android app creation using Kotlin and 
//         Oracle SQL. I enjoy working on projects that involve both 
//         backend logic and front-end design, like managing MainActivity.kt 
//         in Android applications and refining UI elements such as adding rounded 
//         corners to images in ImageView. Additionally, I have an interest in vocational education, 
//         particularly in the D4 programs at Universitas Gadjah Mada (UGM). Im also skilled in web development, 
//         working with Blade templates and ensuring seamless integration of CSS and JavaScript.'
//     ];
//     return view('about')->with($data);
// })->name('about');
