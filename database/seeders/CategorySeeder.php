<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    Category::factory(5)->hasProducts(10)->create();
    User::create([
        'name'=> "SININI Kévin",
        'email'=> "kevsinini@gmail.com",
        'password'=> Hash::make("Vins'k61"),

    ]);
    
}
}