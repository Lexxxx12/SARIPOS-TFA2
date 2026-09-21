<?php

namespace Tests\Support\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SariposSeeder extends Seeder
{
    public function run(): void
    {
        $this->db->table('customers')->insertBatch([
            ['full_name' => 'Andrea Santos', 'email' => 'andrea.santos@example.com', 'phone' => '0917 234 8101', 'created_at' => '2026-09-01 09:00:00'],
            ['full_name' => 'Rafael Lim', 'email' => 'rafael.lim@example.com', 'phone' => '0966 402 8395', 'created_at' => '2026-09-06 16:15:00'],
        ]);

        $this->db->table('users')->insertBatch([
            ['username' => 'admin.mara', 'full_name' => 'Mara Villanueva', 'created_at' => '2026-09-01 08:00:00'],
            ['username' => 'supervisor.sam', 'full_name' => 'Samuel Aquino', 'created_at' => '2026-09-06 10:30:00'],
        ]);
    }
}
