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

    public function enrollment()
    {
        $courses = [
            [
                'code' => 'CCS101',
                'name' => 'Applications Development',
                'units' => 3,
                'schedule' => 'Monday · 9:00 AM - 12:00 PM',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'IT202',
                'name' => 'Cybersecurity Fundamentals',
                'units' => 3,
                'schedule' => 'Tuesday · 1:00 PM - 4:00 PM',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'RES301',
                'name' => 'Research Methods',
                'units' => 3,
                'schedule' => 'Wednesday · 10:00 AM - 1:00 PM',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'NET204',
                'name' => 'Networking Administration',
                'units' => 3,
                'schedule' => 'Thursday · 1:00 PM - 4:00 PM',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'ETH201',
                'name' => 'Ethics in Information Technology',
                'units' => 3,
                'schedule' => 'Friday · 9:00 AM - 12:00 PM',
                'status' => 'Enrolled'
            ],
            [
                'code' => 'WEB205',
                'name' => 'Web Development',
                'units' => 3,
                'schedule' => 'Saturday · 8:00 AM - 11:00 AM',
                'status' => 'Enrolled'
            ]
        ];

        $data = [
            'title' => 'Enrollment',
            'page' => 'enrollment',
            'courses' => $courses,
            'totalUnits' => array_sum(array_column($courses, 'units'))
        ];

        return view('enrollment', $data);
    }

    public function customers()
    {
        $customers = [
            [
                'name' => 'Lee Andrei Flores',
                'id' => '••••1069',
                'email' => 'andrei.flores@example.com',
                'type' => 'Student',
                'status' => 'Active'
            ],
            [
                'name' => 'Lucho Andrei Flores',
                'id' => '••••2041',
                'email' => 'lucho.flores@example.com',
                'type' => 'Student',
                'status' => 'Active'
            ],
            [
                'name' => 'Renia Lael Domingo',
                'id' => '••••3187',
                'email' => 'renia.domingo@example.com',
                'type' => 'Student',
                'status' => 'Active'
            ],
            [
                'name' => 'Lightning McQueen',
                'id' => '••••4428',
                'email' => 'lightning@example.com',
                'type' => 'Student',
                'status' => 'Pending'
            ],
            [
                'name' => 'Tiffany Shannen Fermin',
                'id' => '••••5724',
                'email' => 'tiffany.fermin@example.com',
                'type' => 'Student',
                'status' => 'Active'
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
                'name' => 'Lee Andrei Flores',
                'id' => 'USR-1069',
                'role' => 'Student',
                'email' => 'andrei.flores@example.com',
                'status' => 'Active'
            ],
            [
                'name' => 'Admin Account',
                'id' => 'USR-0001',
                'role' => 'Administrator',
                'email' => 'admin@example.com',
                'status' => 'Active'
            ],
            [
                'name' => 'Faculty Account',
                'id' => 'USR-0024',
                'role' => 'Faculty',
                'email' => 'faculty@example.com',
                'status' => 'Active'
            ],
            [
                'name' => 'Student Assistant',
                'id' => 'USR-0158',
                'role' => 'Staff',
                'email' => 'staff@example.com',
                'status' => 'Inactive'
            ]
        ];

        $data = [
            'title' => 'Users',
            'page' => 'users',
            'users' => $users
        ];

        return view('users', $data);
    }

    public function profile()
    {
        $profile = [
            'name' => 'Lee Andrei Flores',
            'student_id' => '••••1069',
            'email' => 'andrei.flores@example.com',
            'contact' => '••••••••12',
            'birthday' => '•• / •• / ••••',
            'program' => 'BSIT-CST',
            'major' => 'Cybersecurity',
            'year' => '3rd Year',
            'section' => 'TC32',
            'status' => 'Active Student'
        ];

        $data = [
            'title' => 'Profile',
            'page' => 'profile',
            'profile' => $profile
        ];

        return view('profile', $data);
    }
}