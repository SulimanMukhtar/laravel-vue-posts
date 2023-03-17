<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Hospital;
use App\Models\Doctor;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


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

        DB::table('hospitals')->insert([
            [
                'name' => 'Hospital 1',
                'location' => 'Abo Dhabi'
            ],
            [
                'name' => 'Hospital 2',
                'location' => 'Mecca'
            ]
        ]);
        DB::table('doctors')->insert([
            [
                'name' => 'Doctor 1'
            ],
            [
                'name' => 'Doctor 2'
            ],
            [
                'name' => 'Doctor 3'
            ],
            [
                'name' => 'Doctor 4'
            ]
        ]);


        $doctor1 = Doctor::where('id', 1)->first();
        $doctor2 = Doctor::where('id', 2)->first();
        $doctor3 = Doctor::where('id', 3)->first();
        $doctor4 = Doctor::where('id', 4)->first();

        $hospital1 = Hospital::where('id', 1)->first();
        $hospital2 = Hospital::where('id', 2)->first();

        $doctor1->hospitals()->attach($hospital1->id);
        $doctor2->hospitals()->attach($hospital1->id);
        $doctor3->hospitals()->attach($hospital2->id);
        $doctor4->hospitals()->attach($hospital2->id);
    }
}
