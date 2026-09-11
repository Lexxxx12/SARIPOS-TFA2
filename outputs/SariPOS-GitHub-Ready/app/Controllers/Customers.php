<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Andrea Santos', 'email' => 'andrea.santos@example.com', 'phone' => '0917 234 8101'],
            ['full_name' => 'Miguel Reyes', 'email' => 'miguel.reyes@example.com', 'phone' => '0918 425 6720'],
            ['full_name' => 'Camille Dela Cruz', 'email' => 'camille.delacruz@example.com', 'phone' => '0920 316 4589'],
            ['full_name' => 'Paolo Garcia', 'email' => 'paolo.garcia@example.com', 'phone' => '0921 775 2046'],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '0995 638 1174'],
            ['full_name' => 'Rafael Lim', 'email' => 'rafael.lim@example.com', 'phone' => '0966 402 8395'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customers,
        ]);
    }
}
