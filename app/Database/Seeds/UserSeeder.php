<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Linisin muna ang users table para maiwasan ang Duplicate Email Errors
        $this->db->table('users')->emptyTable();

        $data = [
            [
                'name'       => 'Admin User',
                'email'      => 'admin@lms.com',
                'password'   => password_hash('admin123', PASSWORD_BCRYPT),
                'role'       => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Instructor User',
                'email'      => 'instructor@lms.com',
                'password'   => password_hash('teacher123', PASSWORD_BCRYPT),
                'role'       => 'instructor',
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Student User',
                'email'      => 'student@lms.com',
                'password'   => password_hash('student123', PASSWORD_BCRYPT),
                'role'       => 'student',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}