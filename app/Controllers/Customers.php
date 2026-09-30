<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['name' => 'Northstar Labs', 'email' => 'hello@northstarlabs.com', 'plan' => 'Scale', 'status' => 'Active'],
            ['name' => 'Brightline Studio', 'email' => 'team@brightline.studio', 'plan' => 'Growth', 'status' => 'Active'],
            ['name' => 'Harbor & Co.', 'email' => 'ops@harborco.example', 'plan' => 'Starter', 'status' => 'Trial'],
            ['name' => 'Lumen Health', 'email' => 'admin@lumenhealth.example', 'plan' => 'Growth', 'status' => 'Active'],
            ['name' => 'Pinecrest Retail', 'email' => 'support@pinecrest.example', 'plan' => 'Scale', 'status' => 'Paused'],
        ];

        return view('customers/accounts', ['customers' => $customers]);
    }
}
