<?php

use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/one_to_many', [MainController::class, 'OneToMany']);


// Route::get('/teste', function(){
//     $products = Product::all();
//     echo '<pre>';
//     print_r($products->toArray());
// });
