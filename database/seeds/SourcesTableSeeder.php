<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert([
            'name' => 'TechCrunch',
            'slug' => 'tech-crunch',
            'active' => 1,
            'wordpress_api_url' => 'https://techcrunch.com/wp-json/wp/v2'
        ]);
        DB::table('sources')->insert([
            'name' => 'LinuxTechLab',
            'slug' => 'linux-tech-lab',
            'active' => 1,
            'wordpress_api_url' => 'https://linuxtechlab.com/wp-json/wp/v2'
        ]);
        DB::table('sources')->insert([
            'name' => 'PojokSatu',
            'slug' => 'pojok-satu',
            'active' => 1,
            'wordpress_api_url' => 'https://pojoksatu.id/wp-json/wp/v2'
        ]);
        DB::table('sources')->insert([
            'name' => 'JawaPos',
            'slug' => 'jawa-pos',
            'active' => 1,
            'wordpress_api_url' => 'https://jawapos.com/wp-json/wp/v2'
        ]);
        DB::table('sources')->insert([
            'name' => 'Hipwee',
            'slug' => 'hipwee',
            'active' => 1,
            'wordpress_api_url' => 'https://hipwee.com/wp-json/wp/v2'
        ]);
        DB::table('sources')->insert([
            'name' => 'Komikindo',
            'slug' => 'Komikindo',
            'active' => 1,
            'wordpress_api_url' => 'https://komikindo.id/wp-json/wp/v2'
        ]);
    }
}
