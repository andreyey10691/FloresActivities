<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home',
            'stats' => [
                ['number' => '06', 'label' => 'Main Pages'],
                ['number' => '24', 'label' => 'Student Records'],
                ['number' => '18', 'label' => 'Registered Units'],
            ]
        ];

        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'features' => [
                [
                    'number' => '01',
                    'title' => 'Student-Centered',
                    'description' => 'Designed to organize important student and academic information in a simple way.'
                ],
                [
                    'number' => '02',
                    'title' => 'Privacy-Aware',
                    'description' => 'Sensitive information is minimized and displayed only when necessary.'
                ],
                [
                    'number' => '03',
                    'title' => 'Modern Interface',
                    'description' => 'A clean and responsive interface designed for both desktop and mobile devices.'
                ]
            ]
        ];

        return view('about', $data);
    }

    public function customers()
    {
        $customers = [
            [
                'name' => 'Lee Andrei Flores',
                'email' => 'andrei.flores@example.com',
                'type' => 'Student',
                'status' => 'Active'
            ],
            [
                'name' => 'Lucho Andrei Flores',
                'email' => 'lucho.flores@example.com',
                'type' => 'Student',
                'status' => 'Active'
            ],
            [
                'name' => 'Renia Lael Domingo',
                'email' => 'renia.domingo@example.com',
                'type' => 'Student',
                'status' => 'Active'
            ],
            [
                'name' => 'Lightning McQueen',
                'email' => 'lightning@example.com',
                'type' => 'Student',
                'status' => 'Pending'
            ],
            [
                'name' => 'Tiffany Shannen Fermin',
                'email' => 'tiffany.fermin@example.com',
                'type' => 'Student',
                'status' => 'Active'
            ]
        ];

        $data = [
            'title' => 'Customer Accounts',
            'customers' => $customers
        ];

        return view('customers', $data);
    }

    public function users()
    {
        $users = [
            [
                'name' => 'Lee Andrei Flores',
                'role' => 'Student',
                'status' => 'Active',
                'initials' => 'LA'
            ],
            [
                'name' => 'Lucho Andrei Flores',
                'role' => 'Student',
                'status' => 'Active',
                'initials' => 'LF'
            ],
            [
                'name' => 'Renia Lael Domingo',
                'role' => 'Student',
                'status' => 'Active',
                'initials' => 'RD'
            ],
            [
                'name' => 'Tiffany Shannen Fermin',
                'role' => 'Student',
                'status' => 'Active',
                'initials' => 'TF'
            ]
        ];

        $data = [
            'title' => 'Users',
            'users' => $users
        ];

        return view('users', $data);
    }

    public function enrollment()
    {
        $courses = [
            [
                'code' => 'CCS0111',
                'title' => 'Applications Development',
                'units' => '3',
                'schedule' => 'TBA',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'CCS0121',
                'title' => 'Emerging Technologies',
                'units' => '3',
                'schedule' => 'TBA',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'IT0123',
                'title' => 'Cybersecurity Fundamentals',
                'units' => '3',
                'schedule' => 'TBA',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'RES0101',
                'title' => 'Research Methods',
                'units' => '3',
                'schedule' => 'TBA',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'GEN0104',
                'title' => 'General Education Course',
                'units' => '3',
                'schedule' => 'TBA',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'PE0003',
                'title' => 'Physical Education',
                'units' => '3',
                'schedule' => 'TBA',
                'status' => 'Enrolled'
            ]
        ];

        $data = [
            'title' => 'Enrollment',
            'courses' => $courses,
            'totalUnits' => 18
        ];

        return view('enrollment', $data);
    }

    public function profile()
    {
        $data = [
            'title' => 'My Profile',

            'profile' => [
                'name' => 'Lee Andrei Flores',
                'role' => 'Student',
                'studentId' => '2023••••1069',
                'email' => 'andrei.flores@example.com',
                'contact' => '09••••••12',
                'program' => 'Bachelor of Science in Information Technology',
                'major' => 'Cybersecurity',
                'yearLevel' => '3rd Year',
                'section' => 'TW291',
                'status' => 'Active Student'
            ]
        ];

        return view('profile', $data);
    }
}