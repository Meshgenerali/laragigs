<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
                'name' => 'Mesh Malonza',
                'email' => 'meshgenerali@gmail.com'
        ]);


         Listing::factory(6)->create([
            'user_id' => $user->id
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https:/www.acme.com',
        //     'description' => 'The web application was built using the Laravel framework version 4, a modern PHP frame-
        //     work that aims at making PHP development easier, faster and more intuitive. The web ap-
        //     plication was built following the MVC architecture pattern. Admin panels were created for
        //     easily updating and managing the categories and products and uploading product images
        //     as well.'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https:/www.acme.com',
        //     'description' => 'The web application was built using the Laravel framework version 4, a modern PHP frame-
        //     work that aims at making PHP development easier, faster and more intuitive. The web ap-
        //     plication was built following the MVC architecture pattern. Admin panels were created for
        //     easily updating and managing the categories and products and uploading product images
        //     as well.'
        // ]);
    }
}
