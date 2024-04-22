<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

// class Job {
//     public static function all():array
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '50,000',
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Programmer',
//                 'salary' => '10,000',
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Teacher',
//                 'salary' => '40,000',
//             ]
//             ];
//     }
// }

Route::get('/', function () {


    return view('index' , [
        'jobs' => Job::all()
    ]);
})->name('home');

Route::get('/job/{id}', function($id){
    // $travail = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $travail = Job::find($id);
    //dd($id);

    return view('job' , compact('travail'));
});


Route::get('/about', function ()
{
    return view('about');
})->name('about');