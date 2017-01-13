<?php

use Illuminate\Database\Seeder;
use VirtualOffice\Models\Position;
use VirtualOffice\Models\Department;

class DepartmentsAndPositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Marketing' => [
                'Marketing Supervisor',
                'Marketing Staff'
            ],
            'MIS' => [
                'MIS Supervisor',
                'Programmer'
            ]
        ];

        foreach ($data as $dept => $positions) {
            $department = Department::create([
                'name' => $dept
            ]);

            foreach ($positions as $position) {
                Position::create([
                    'department_id' => $department->id,
                    'name' => $position
                ]);
            }
        }

    }
}
