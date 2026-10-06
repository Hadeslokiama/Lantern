<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LanternSeeder extends Seeder
{
    public function run(): void
    {
        $createdAt = (new \DateTimeImmutable('now', new \DateTimeZone('Asia/Manila')))->format('Y-m-d H:i:s');

        $this->db->table('customers')->insertBatch([
            ['full_name' => 'Northstar Labs', 'email' => 'hello@northstarlabs.com', 'phone' => '+63 917 555 0101', 'created_at' => $createdAt],
            ['full_name' => 'Brightline Studio', 'email' => 'team@brightline.studio', 'phone' => '+63 917 555 0102', 'created_at' => $createdAt],
            ['full_name' => 'Harbor & Co.', 'email' => 'ops@harborco.example', 'phone' => null, 'created_at' => $createdAt],
            ['full_name' => 'Lumen Health', 'email' => 'admin@lumenhealth.example', 'phone' => '+63 917 555 0104', 'created_at' => $createdAt],
            ['full_name' => 'Pinecrest Retail', 'email' => 'support@pinecrest.example', 'phone' => '+63 917 555 0105', 'created_at' => $createdAt],
        ]);

        $this->db->table('users')->insertBatch([
            ['username' => 'maya.chen', 'full_name' => 'Maya Chen', 'created_at' => $createdAt],
            ['username' => 'jordan.lee', 'full_name' => 'Jordan Lee', 'created_at' => $createdAt],
            ['username' => 'amara.okafor', 'full_name' => 'Amara Okafor', 'created_at' => $createdAt],
            ['username' => 'theo.martin', 'full_name' => 'Theo Martin', 'created_at' => $createdAt],
            ['username' => 'sofia.reyes', 'full_name' => 'Sofia Reyes', 'created_at' => $createdAt],
        ]);
    }
}
