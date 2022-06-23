<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'name' => 'Silvio',
        'lastname' => 'Berlusconi',
        'isLoggedIn' => true,
        'minions' => [
            [
                'name' => 'Piersilvio',
                'lastname' => 'Berlusconi',
                'status' => 'Fattura con Mediaset'
            ],
            [
                'name' => 'Marina',
                'lastname' => 'Berlusconi',
                'status' => 'Empowering women'
            ],
            [
                'name' => 'Mario',
                'lastname' => 'Giordano',
                'status' => 'Intrattiene la popolazione'
            ]
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/disburse', function () {
    $data = [
        'creditors' => [
            [
                'name' => 'Veronica Lario',
                'amount' => '20.000.000,00€'
            ],
            [
                'name' => 'Fondazione Olgettine',
                'amount' => '5.000.000,00€'
            ],
            [
                'name' => 'Noemi Letizia',
                'amount' => '2.000.000,00€'
            ],
            [
                'name' => 'Ruby Rubacuori',
                'amount' => '1.000.000,00€'
            ]
        ]
    ];
    return view('disburse', $data);
})->name('disburse');