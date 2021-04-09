<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillerController;
use App\Http\Controllers\uplink;
use App\Http\Controllers\getData;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/consumer', function () {
    return view('consumer');
});

Route::get('/merchant', function () {
    return view('merchant');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/billers', function () {
    return view('billers');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog2', function () {
    return view('blog2');
});

Route::get('/blog3', function () {
    return view('blog3');
});

Route::get('/blog4', function () {
    return view('blog4');
});

Route::get('/blog5', function () {
    return view('blog5');
});

Route::get('/blog6', function () {
    return view('blog6');
});

Route::get('/blog7', function () {
    return view('blog7');
});

Route::get('/blog8', function () {
    return view('blog8');
});

Route::get('/blog9', function () {
    return view('blog9');
});

Route::get('/blogs-grid', function () {
    return view('blogs-grid');
});

Route::get('/Career', function () {
    return view('Career');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('Contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/ipg', function () {
    return view('IPG');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/pos', function () {
    return view('POS');
});

Route::get('/privacy', function () {
    return view('Privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/vpos', function () {
    return view('VPOS');
});

Route::get('/web', function () {
    return view('Web');
});

Route::get('/whitelable', function () {
    return view('Whitelable');
});

Route::get('/mtest', function () {
    return view('mtest');
});

Route::get('/business', function () {
    return view('business');
});


Route::get('admin', function () {

    return redirect('/login');
});


Route::group(['prefix' => '', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/create-article', function () {

        return view('create-article');

    });


});

Route::post('create', [uplink::class, 'rocket']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('billers', [BillerController::class, 'index']);


Route::group(['prefix' => 'agent'], function () {
    Route::get('/view', function () {
        return 'view agent';
    });
    Route::get('/edit', function () {
        return 'edit agent';
    });
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('blog6', [getData::class, 'index']);
