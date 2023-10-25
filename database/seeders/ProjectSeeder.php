<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $project = new Project();

            $project->title = $faker->catchPhrase();
            $project->description = $faker->paragraph(2, true);
            $project->link = $faker->url();
            $project->date= $faker->dateTime();
            // $project->coding_lang= $faker;
           
            $project->save();
        }
    }
}
