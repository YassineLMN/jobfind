<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded within the "web" middleware group which includes
| sessions, cookie encryption, and more. Go build something great!
|
*/

// All jobs
Route::get('/', function () {
    return view('jobs', [
        'heading' => 'Latest Jobs',
        'jobs' => Job::all()
    ]);
});


// Single job
Route::get('/jobs/{id}', function ($id) {
    return view('job' , [
        'job' => Job::find($id)
    ]);
} );