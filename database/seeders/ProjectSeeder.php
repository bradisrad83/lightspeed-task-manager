<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'Slack Integration',
            'Laravel Upgrade',
            'Dashboard Build',
            'Mobile App Build',
            'API Integration',
        ];

        foreach($titles as $title) {
            Project::create([
                'title' => $title,
                'slug'  => Str::slug($title),
            ]);
        }
    }
}
