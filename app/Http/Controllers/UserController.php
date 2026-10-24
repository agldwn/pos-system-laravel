<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            [
                'id' => 1,
                'username' => 'admin',
                'name' => 'Admin User',
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'username' => 'cashier1',
                'name' => 'Liza Cruz',
                'role' => 'Cashier',
            ],
            [
                'id' => 3,
                'username' => 'cashier2',
                'name' => 'Mark Santos',
                'role' => 'Cashier',
            ],
            [
                'id' => 4,
                'username' => 'manager1',
                'name' => 'Ramon Reyes',
                'role' => 'Manager',
            ],
            [
                'id' => 5,
                'username' => 'staff1',
                'name' => 'Nina Garcia',
                'role' => 'Staff',
            ],
        ];

        return view('users', compact('users'));
    }
}