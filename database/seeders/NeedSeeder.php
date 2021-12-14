<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserType;
use App\Models\Campus;
use App\Models\Program;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class NeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create([
            'type' => 'administrator',
          
        ]);
        UserType::create([
            'type' => 'office',
          
        ]);
        UserType::create([
            'type' => 'student',
          
        ]);

        User::create([
            'name' => 'administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'user_type_id' => 1,
        ]);
        User::create([
            'name' => 'office',
            'email' => 'office@office.com',
            'password' => Hash::make('password'),
            'user_type_id' => 2,
        ]);
        User::create([
            'name' => 'student',
            'email' => 'student@student.com',
            'password' => Hash::make('password'),
            'user_type_id' => 3,
        ]);

        Campus::create([
            'campus_name' => 'Isulan',
        ]);
    }
}
