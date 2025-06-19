<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'anu',
            'password'=>'anu',
            'email'=>'anu@gmail.com',
            'dob'=>'1991-2-12',
            'phone'=>'9589404597',
            'type'=>'staff'
        ]);
        
    
    }
}
