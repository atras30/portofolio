<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Project::create([
            "title" => "Peach Commerce",
            "image_path" => asset("images/peach-commerce.png"),
            "description" => "Project iseng yang melambangkan sebuah e-commerce",
            'url' => "https://peachcommerce.atras.my.id"
        ]);

        Project::create([
            "title" => "Maggot Finance",
            "image_path" => asset("images/maggot-finance.png"),
            "description" => "Maggot ni bos",
            'url' => "https://magfin.lppmumn.id"
        ]);

        Project::create([
            "title" => "UMN ECO",
            "image_path" => asset("images/umn-eco.png"),
            "description" => "UMN ECO ni bos",
            'url' => "https://eco.umn.ac.id"
        ]);

        Project::create([
            "title" => "DKBM UMN",
            "image_path" => asset("images/dkbm.png"),
            "description" => "DKBM ni bos",
            'url' => "https://dkbm.umn.ac.id"
        ]);
    }
}
