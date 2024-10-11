<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class OrganizersSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('organizers')->insert([
            [
                'name' => 'Tech Innovators Inc.',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/techinnovators',
                'x_link' => 'https://www.x.com/techinnovators',
                'website_link' => 'https://www.techinnovators.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Global Events Network',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/globalevents',
                'x_link' => 'https://www.x.com/globalevents',
                'website_link' => 'https://www.globalevents.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Future Conferences LLC',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/futureconferences',
                'x_link' => 'https://www.x.com/futureconferences',
                'website_link' => 'https://www.futureconferences.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Startup Builders Group',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/startupbuilders',
                'x_link' => 'https://www.x.com/startupbuilders',
                'website_link' => 'https://www.startupbuilders.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'NextGen Events',
                'description' => $faker->text(200),
                'facebook_link' => 'https://www.facebook.com/nextgenevents',
                'x_link' => 'https://www.x.com/nextgenevents',
                'website_link' => 'https://www.nextgenevents.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
