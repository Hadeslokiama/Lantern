<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LocalizeLanternSampleData extends Migration
{
    private array $phoneNumbers = [
        'hello@northstarlabs.com'   => '+63 917 555 0101',
        'team@brightline.studio'    => '+63 917 555 0102',
        'admin@lumenhealth.example' => '+63 917 555 0104',
        'support@pinecrest.example' => '+63 917 555 0105',
    ];

    private array $usernames = [
        'maya.chen',
        'jordan.lee',
        'amara.okafor',
        'theo.martin',
        'sofia.reyes',
    ];

    public function up(): void
    {
        foreach ($this->phoneNumbers as $email => $phone) {
            $this->db->query(
                'UPDATE customers SET phone = ?, created_at = DATE_ADD(created_at, INTERVAL 8 HOUR) WHERE email = ?',
                [$phone, $email],
            );
        }

        foreach ($this->usernames as $username) {
            $this->db->query(
                'UPDATE users SET created_at = DATE_ADD(created_at, INTERVAL 8 HOUR) WHERE username = ?',
                [$username],
            );
        }
    }

    public function down(): void
    {
        foreach ($this->phoneNumbers as $email => $phone) {
            $this->db->query(
                'UPDATE customers SET phone = NULL, created_at = DATE_SUB(created_at, INTERVAL 8 HOUR) WHERE email = ?',
                [$email],
            );
        }

        foreach ($this->usernames as $username) {
            $this->db->query(
                'UPDATE users SET created_at = DATE_SUB(created_at, INTERVAL 8 HOUR) WHERE username = ?',
                [$username],
            );
        }
    }
}
