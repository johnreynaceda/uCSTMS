<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserType;
use App\Models\Campus;
use App\Models\Program;
use App\Models\User;
use App\Models\AppointmentSchedule;
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

        AppointmentSchedule::create([
            'office_id' => 1,
            'title' => 'schedule 1',
            'notes' => 'loremsbdashbdhsbd asdjbsadjh sadbjhhdbjasbd',
            'start_date' => '2022-01-03',
            'end_date' => '2022-01-03',
            'slot' => 5,
        ]);
    }
}
