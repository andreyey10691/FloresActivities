<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $users = $userModel
            ->orderBy('id', 'ASC')
            ->findAll();

        $data = [
            'title' => 'User Accounts',
            'page' => 'users',
            'users' => $users
        ];

        return view('users', $data);
    }
}