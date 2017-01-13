<?php

use Carbon\Carbon;
use VirtualOffice\Models\User;
use Illuminate\Database\Seeder;
use VirtualOffice\Models\Employee;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $henry = User::create([
            'first_name' => 'Henry',
            'last_name' => 'Vasquez',
            'middle_name' => 'Atega',
            'email' => 'henry@mpci.com',
            'password' => bcrypt('hello')
        ]);

        Employee::create([
            'user_id' => $henry->id,
            'position_id' => 3,
            'birthdate' => Carbon::now(),
            'address' => 'Diri',
            'city' => 'Davao',
            'zip_code' => 8000,
            'mobile_number' => '0933 321 3214'
        ]);

        $eric = User::create([
            'first_name' => 'Eric',
            'last_name' => 'Amigo',
            'middle_name' => 'Seville',
            'email' => 'eric@mpci.com',
            'password' => bcrypt('hello')
        ]);

        Employee::create([
            'user_id' => $eric->id,
            'position_id' => 2,
            'birthdate' => Carbon::now(),
            'address' => 'Dona Pilar',
            'city' => 'Davao',
            'zip_code' => 8000,
            'mobile_number' => '0933 321 3214'
        ]);

    }
}
