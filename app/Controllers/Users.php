<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Anna Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Michael Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Sarah Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'David Garcia',
                'role' => 'Manager'
            ]
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users
        ];

        return view('users', $data);
    }
}