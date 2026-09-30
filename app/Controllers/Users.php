<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['name' => 'Maya Chen', 'email' => 'maya@northstarlabs.com', 'role' => 'Owner', 'status' => 'Active'],
            ['name' => 'Jordan Lee', 'email' => 'jordan@brightline.studio', 'role' => 'Admin', 'status' => 'Active'],
            ['name' => 'Amara Okafor', 'email' => 'amara@lumenhealth.example', 'role' => 'Member', 'status' => 'Active'],
            ['name' => 'Theo Martin', 'email' => 'theo@pinecrest.example', 'role' => 'Member', 'status' => 'Invited'],
            ['name' => 'Sofia Reyes', 'email' => 'sofia@harborco.example', 'role' => 'Admin', 'status' => 'Active'],
        ];

        return view('users/accounts', ['users' => $users]);
    }
}
