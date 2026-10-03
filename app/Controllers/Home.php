<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'page' => 'home'
        ];

        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'page' => 'about'
        ];

        return view('about', $data);
    }

    public function customers()
    {
        $customers = [
            [
                'full_name' => 'Lee Andrei Flores',
                'email' => 'andrei@hotmail.com',
                'phone' => '09123456789'
            ],
            [
                'full_name' => 'Lucho Andrei Flores',
                'email' => 'lucho@gmail.com',
                'phone' => '09234567890'
            ],
            [
                'full_name' => 'Renia Lael Domingo',
                'email' => 'renia@yahoo.com',
                'phone' => '09345678901'
            ],
            [
                'full_name' => 'Lightning McQueen',
                'email' => 'lightning@fit.edu.com',
                'phone' => '09456789012'
            ],
            [
                'full_name' => 'Tiffany Shannen Fermin',
                'email' => 'tiffany@gmail.com',
                'phone' => '09567890123'
            ]
        ];

        $data = [
            'title' => 'Customer Accounts',
            'page' => 'customers',
            'customers' => $customers
        ];

        return view('customers', $data);
    }

    public function users()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Lee Andrei Flores',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Lucho Andrei Flores',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Renia Lael Domingo',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Lightning McQueen',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Tiffany Shannen Fermin',
                'role' => 'Staff'
            ]
        ];

        $data = [
            'title' => 'User Accounts',
            'page' => 'users',
            'users' => $users
        ];

        return view('users', $data);
    }
}