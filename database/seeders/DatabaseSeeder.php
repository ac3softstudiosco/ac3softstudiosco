<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Service;
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
        $this->call(UserSeeder::class);
        Contact::factory(200)->create();
        Service::factory(200)->create();
        Project::factory(200)->create();
        Blog::factory(200)->create();
    }
}
