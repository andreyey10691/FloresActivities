<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Lee Andrei Flores',
                'email' => 'leeandreiflores@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Lucho Andres Flores',
                'email' => 'luchoandresflores@gmail.com',
                'phone' => '09164872941'
            ],
            [
                'full_name' => 'Renia Lael Domingo',
                'email' => 'renialaeldomingo@gmail.com',
                'phone' => '04582947819'
            ],
            [
                'full_name' => 'Lightning McQueen',
                'email' => 'lightningmcqueen@gmail.com',
                'phone' => '09457897819'
            ],
            [
                'full_name' => 'Tiffany Shannen Fermin',
                'email' => 'tiffanyshannenfermin@gmail.com',
                'phone' => '09454985229'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}