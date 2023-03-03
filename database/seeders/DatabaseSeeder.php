<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dashboard;
use App\Models\User;
use App\Models\Listing;
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
        // User::factory(5)->create();
        // Listing::factory(6)->create();

        $user = User::factory()->create([
            'email' => 'Imperialhomes@gmail.com',
            'password' => 'password'
        ]);

        Listing::create([
            'user_id' => $user->id,
            'propertyName' => 'Signa Designer Residences' ,
            'propertyType' => 'Condominium',
            'model' => 'Studio Unit',
            'location' => 'Salcedo Village, Makati',
            'price' =>'4 million',
            'tags' => 'For Sale',
            // 'file' => ,
            'description' => 'This stylish and modern studio unit in Signa Designer Residences is perfect for young professionals looking for a convenient location and access to luxury amenities.',
        ]);

        // Listing::factory(6)->create([
        //     'user_id' => $user->id
        // ]);
        // Dashboard::factory(6)->create([
        //     'user_id' => $user->id
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer', 
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend ,api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);
        // \App\Models\User::factory()->create([
        //     'email' => 'Imperialhomes@gmail.com',
        //     'password' => 'password'
        // ]);
    }
}
