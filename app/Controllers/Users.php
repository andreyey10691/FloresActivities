<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'systemadmin',
                'full_name' => 'Jennifer Lopez',
                'role' => 'System Administrator'
            ],
            [
                'username' => 'it_support',
                'full_name' => 'Anne Hathaway',
                'role' => 'IT Support'
            ],
            [
                'username' => 'data_operator',
                'full_name' => 'Kendall Jenner',
                'role' => 'Data Operator'
            ],
            [
                'username' => 'networktech',
                'full_name' => 'Ana De Armas',
                'role' => 'Network Technician'
            ],
            [
                'username' => 'securityanalyst',
                'full_name' => 'Cameron Diaz',
                'role' => 'Security Analyst'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}