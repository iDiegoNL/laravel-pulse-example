<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Jobs\SlowJob;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Http;

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

Route::view('/', 'welcome')->name('home');

Route::get('slow-request', function () {
    sleep(5);

    return 'Slow request';
})->name('slow-request');

Route::get('slow-outgoing-request', function () {
    $response = Http::get('https://httpbin.org/delay/5');

    return $response->body();
})->name('slow-outgoing-request');

Route::get('dispatch-slow-job', function () {
    SlowJob::dispatch();
})->name('dispatch-slow-job');

Route::get('slow-query', function () {
    $users = User::all();

    $worstPossibleQuery = DB::table('users')
        ->crossJoin('posts')
        ->orderBy(DB::raw('RAND()'))
        ->select('users.*', 'posts.content')
        ->limit(1000000)
        ->get();
})->name('slow-query');

Route::get('throw-exception', function () {
    throw new Exception('Exception thrown');
})->name('throw-exception');

Route::get('http-response/{status}', function ($status) {
    abort($status);
})->name('http-response');

Route::get('cache-hit', function () {
    return cache()->remember('cache-hit', 60, function () {
        return 'Cache hit';
    });
})->name('cache-hit');

include __DIR__.'/auth.php';
