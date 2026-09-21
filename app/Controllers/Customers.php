<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        $customerModel = new CustomerModel();

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customerModel->orderBy('full_name', 'ASC')->findAll(),
        ]);
    }
}
