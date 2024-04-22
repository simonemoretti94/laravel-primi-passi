<?php

use Illuminate\Support\Facades\Route;

class Job {
    public static function all():array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '50,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '10,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '40,000',
            ]
            ];
    }
}

Route::get('/', function () {


    return view('index' , [
        'jobs' => Job::all()
    ]);
});
