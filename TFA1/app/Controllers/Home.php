<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function enrollment()
    {
        $subjects = [
            [
                'code' => 'CCS001',
                'name' => 'Introduction to Computing',
                'units' => 3
            ],
            [
                'code' => 'CCS002',
                'name' => 'Web Development',
                'units' => 3
            ],
            [
                'code' => 'CCS003',
                'name' => 'Database Management',
                'units' => 3
            ],
            [
                'code' => 'CCS004',
                'name' => 'Cybersecurity Fundamentals',
                'units' => 3
            ],
            [
                'code' => 'CCS005',
                'name' => 'Programming Concepts',
                'units' => 3
            ],
            [
                'code' => 'CCS006',
                'name' => 'Information Assurance',
                'units' => 2
            ]
        ];

        $totalUnits = 0;

        foreach ($subjects as $subject) {
            $totalUnits += $subject['units'];
        }

        return view('enrollment', [
            'subjects' => $subjects,
            'totalUnits' => $totalUnits
        ]);
    }

    public function profile()
    {
        return view('profile');
    }
}