<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'hospital_id' => 1,
                'patientname' => 'นายสมชาย เข็มกลัด'
            ],
            [
                'hospital_id' => 1,
                'patientname' => 'นายเป็นต่อ จะบึจะบึ'
            ],
            [
                'hospital_id' => 2,
                'patientname' => 'นางสาววิไล เขื่อนแก้ว'
            ],
            [
                'hospital_id' => 2,
                'patientname' => 'นายอาทิตย์ ร้อนแรง'
            ],
        ]);
    }
}
