<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->string('name');
        // $table->string('email')->unique();
        // $table->string('usertype')->default(0);
        // $table->string('phone')->nullable();
        // $table->string('address')->nullable();
        // $table->timestamp('email_verified_at')->nullable();
        // $table->string('password');
        // $table->rememberToken();

        $users = [
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'usertype' => '1',
                    'phone' => '1234567890',
                    'address' => '123 Admin St, Admin City',
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678'),
                    'remember_token' => null,
                ],
                [
                    'name' => 'User',
                    'email' => 'user@user.com',
                    'usertype' => '0',
                    'phone' => '0987654321',
                    'address' => '456 User St, User City',
                    'email_verified_at' => now(),
                    'password' => bcrypt('12345678'),
                    'remember_token' => null,
                ]
            ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
