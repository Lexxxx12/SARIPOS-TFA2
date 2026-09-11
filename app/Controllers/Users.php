<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin.mara', 'full_name' => 'Mara Villanueva', 'role' => 'Administrator'],
            ['username' => 'cashier.joel', 'full_name' => 'Joel Navarro', 'role' => 'Cashier'],
            ['username' => 'manager.ella', 'full_name' => 'Ella Bautista', 'role' => 'Store Manager'],
            ['username' => 'cashier.nico', 'full_name' => 'Nico Ramos', 'role' => 'Cashier'],
            ['username' => 'stock.lia', 'full_name' => 'Lia Castillo', 'role' => 'Inventory Staff'],
            ['username' => 'supervisor.sam', 'full_name' => 'Samuel Aquino', 'role' => 'Supervisor'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ]);
    }
}
