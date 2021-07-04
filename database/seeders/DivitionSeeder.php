<?php

namespace Database\Seeders;
use App\Models\Divition;
use Illuminate\Database\Seeder;

class DivitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Divition::truncate();

        Divition::create([
            'name' => 'Dhaka-ঢাকা',
            'status' =>1
        ]);
        Divition::create([
            'name' => 'Barisal-বরিশাল',
            'status' =>1
        ]);
        Divition::create([
            'name' => 'Khulna-খুলনা',
            'status' =>1
        ]);
        Divition::create([
            'name' => 'Rajshahi-রাজশাহী',
            'status' =>1
        ]);
        Divition::create([
            'name' => 'Rangpur-রংপুর',
            'status' =>1
        ]);
        Divition::create([
            'name' => 'Sylhet-সিলেট',
            'status' =>1
        ]);
        Divition::create([
            'name' => 'Mymensingh-ময়মনসিংহ',
            'status' =>1
        ]);
        Divition::create([
            'name' => 'Chittagong - চট্টগ্রাম',
            'status' =>1
        ]);
    }
}
