<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Profiles Table
        DB::table('profiles')->insert([
            'full_name' => 'CLENT JORDAN SUPAPO',
            'about_me' => 'I am Clent Jordan Supapo, a Computer Science student at the University of St. La Salle. I am the youngest of two my siblings and I enjoy cycling, going to the gym, riding motorcycles, and playing games and one of my dreams is to become one of the richest man in the world.',
            'email' => 'supapoclent@gmail.com',
            'phone' => '09919080623',
            'location' => 'ABKASA BRGY. MANDALAGAN BACOLOD CITY',
            'profile_image' => 'profile.jpg'
        ]);

        // Skills Table
        // Skills Table
        DB::table('skills')->insert([
         [
            'skill_name' => 'Laravel', 
            'proficiency' => 50, 
            'skill_link' => 'http://127.0.0.1:8000/' // Link sa documentation
        ],
         [
            'skill_name' => 'Business', 
            'proficiency' => 70, 
            'skill_link' => 'https://www.facebook.com/profile.php?id=61574058151938',
            'skill_link' => 'https://www.facebook.com/profile.php?id=61578389986229'
        ],
        [
            'skill_name' => 'Games', 
            'proficiency' => 100, 
            'skill_link' => 'https://www.ign.com/' // Link sa gaming news/concepts
        ],
]);

        // Projects Table
        DB::table('projects')->insert([
            [
                'title' => 'Clothing', 
                'description' => 'Inspired by precision. Powered by obsession.', 
                'project_link' => 'https://www.facebook.com/photo/?fbid=122151326528902000&set=pcb.122151326558902000' 
            ],
            [
                'title' => 'Portfolio', 
                'description' => 'CLE.', 
                'project_link' => 'http://127.0.0.1:8000/#projects' 
            ]
        ]);

        // Experiences Table
        DB::table('experiences')->insert([
             ['title' => 'University of St. La Salle', 'company' => 'Computer Science', 'year' => '2023-2027'],
             ['title' => 'Owner', 'company' => 'Thrifting', 'year' => '2025-Present'],
             ['title' => 'Business Partner', 'company' => 'Lgndry Collective Apparel Shop', 'year' => '2025-Present']
        ]);

        // Contacts Table
        // Contacts Table
        DB::table('contacts')->insert([
            ['platform' => 'GitHub', 'link' => 'https://github.com/clentzkie/SUPAPO_PORTFOLIO1'],
            ['platform' => 'Facebook', 'link' => 'https://www.facebook.com/clent.supapo'],
            ['platform' => 'Instagram', 'link' => 'https://www.instagram.com/clinzxc/?hl=en'],
            ['platform' => 'Telegram', 'link' => 'https://web.telegram.org/a/'],
            ['platform' => 'Gmail', 'link' => 'https://mail.google.com/mail/u/0/#inbox'] 
]); 
    }
}