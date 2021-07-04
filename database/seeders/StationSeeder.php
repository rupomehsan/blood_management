<?php

namespace Database\Seeders;
use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Station::truncate();
        Station::create(['district_id' => 1,'name' => 'Adabor','status' => 1 ]);
        Station::create(['district_id' => 1, 'name' => 'Airport','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Badda','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Banani','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Bangshal','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Bhashantek','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Cantonment','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Chackbazar','status' => 1]);
        Station::create(['district_id' => 1,'name' => 'Darussalam','status' => 1 ]);
        Station::create(['district_id' => 1, 'name' => 'Daskhinkhan','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Demra','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Dhamrai','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Dhanmondi','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Dohar','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Gandaria','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Gulshan','status' => 1]);
        Station::create(['district_id' => 1,'name' => 'Hazaribag','status' => 1 ]);
        Station::create(['district_id' => 1, 'name' => 'Jatrabari','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Kafrul','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Kalabagan','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Kamrangirchar','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Keraniganj','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Khilgaon','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Khilkhet','status' => 1]);
        Station::create(['district_id' => 1,'name' => 'Kotwali','status' => 1 ]);
        Station::create(['district_id' => 1, 'name' => 'Mirpur Model','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Mohammadpur','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Motijheel','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Mugda','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'New Market','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'CantPallabionment','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Paltan','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Ramna','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Rampura','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Rupnagar','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Sabujbag','status' => 1]);
        Station::create(['district_id' => 1,'name' => 'Savar','status' => 1 ]);
        Station::create(['district_id' => 1, 'name' => 'Shah Ali ','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Shahbag','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Shahjahanpur','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Sherebanglanagar','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Shyampur','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Sutrapur','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Tejgaon','status' => 1]);
        Station::create(['district_id' => 1,'name' => 'Tejgaon','status' => 1 ]);
        Station::create(['district_id' => 1, 'name' => 'Turag','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Uttara','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Uttara West','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Uttarkhan','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Vatara','status' => 1]);
        Station::create(['district_id' => 1, 'name' => 'Wari','status' => 1]);
      

        
    }
}
