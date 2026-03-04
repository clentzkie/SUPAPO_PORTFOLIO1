<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Profile
        DB::table('profiles')->insert([
            'full_name' => 'Juan Dela Cruz',
            'about_me' => 'I am a passionate Web Developer...',
            'email' => 'juan@email.com',
            'phone' => '09123456789'
        ]);

        // 2. Skills
        DB::table('skills')->insert([
            ['skill_name' => 'Laravel', 'proficiency' => 85],
            ['skill_name' => 'Bootstrap', 'proficiency' => 90],
        ]);

        // 3. Projects (REQUIRED)
       // Sa loob ng PortfolioSeeder.php, palitan ang projects section:

        DB::table('projects')->insert([
            [
             'title' => 'E-Portfolio', 
            'description' => 'Built with Laravel', 
             'project_link' => '#' // Siguraduhin na 'project_link' ang gamit dito
            ]
]);

        // 4. Experience (REQUIRED)
        DB::table('experiences')->insert([
            ['title' => 'Junior Dev', 'company' => 'Tech Inc', 'year' => '2024']
        ]);

        // 5. Contact Details (REQUIRED)
        DB::table('contacts')->insert([
            ['platform' => 'GitHub', 'link' => 'github.com/user']
        ]);
    }
}