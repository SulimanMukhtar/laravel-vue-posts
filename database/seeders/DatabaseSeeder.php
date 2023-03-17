<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@superadmin.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role_id' => 0
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role_id' => 1
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'role_id' => 2
            ],
        ]);


        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => 'Post Title 1',
                'body' => 'Post Body For 1'
            ],
            [
                'user_id' => 2,
                'title' => 'Post Title 2',
                'body' => 'Post Body For 2'
            ],
            [
                'user_id' => 3,
                'title' => 'Post Title 3',
                'body' => 'Post Body For 3'
            ],
            [
                'user_id' => 1,
                'title' => 'Post Title 4',
                'body' => 'Post Body For 4'
            ]
        ]);
    }
}
