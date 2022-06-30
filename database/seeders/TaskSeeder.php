<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e_commerce_website_tasks = [
            [
                'title'             => 'Product Pages',
                'estimated_hours'   => 5,
                'assigned_to'       => 'Adam'
            ],
            [
                'title'             => 'Shopping Cart',
                'estimated_hours'   => 10,
                'assigned_to'       => 'Tyler'
            ],
            [
                'title'             => 'My Account',
                'estimated_hours'   => 5,
                'assigned_to'       => 'Adam'
            ],                        
        ];

        $websocket_update_tasks = [
            [
                'title'             => 'Add to Socket.IO',
                'estimated_hours'   => 2,
                'assigned_to'       => 'Stuart'
            ],
            [
                'title'             => 'Enable Broadcasting',
                'estimated_hours'   => 5,
                'assigned_to'       => 'Stuart'
            ],
            [
                'title'             => 'Adjust Interface',
                'estimated_hours'   => 3,
                'assigned_to'       => 'Stuart'
            ],                        
        ];        

        $angular_upgrade_tasks = [
            [
                'title'             => 'Upgrade Angular',
                'estimated_hours'   => 15,
                'assigned_to'       => 'Lan'
            ],
            [
                'title'             => 'Fix Broken Things',
                'estimated_hours'   => 10,
                'assigned_to'       => 'Stuart'
            ],
            [
                'title'             => 'Test',
                'estimated_hours'   => 10,
                'assigned_to'       => 'Lan'
            ],                        
        ];         

        $e_commerce_project = Project::where('slug', 'e-commerce-website')->first();
        $e_commerce_users = [];
        foreach($e_commerce_website_tasks as $task) {
            $user = User::where('name', $task['assigned_to'])->first();
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user->id,
                'project_id'        => $e_commerce_project->id,
            ]);
            $e_commerce_users[] = $user->id;
        }
        $e_commerce_project->users()->sync($e_commerce_users);

        $websocket_project = Project::where('slug', 'websocket-updates')->first();
        $websocket_users = [];
        foreach($websocket_update_tasks as $task) {
            $user = User::where('name', $task['assigned_to'])->first();
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user->id,
                'project_id'        => $websocket_project->id,
            ]);
            $websocket_users[] = $user->id;
        }
        $websocket_project->users()->sync($websocket_users);

        $angular_project = Project::where('slug', 'angular-upgrade')->first();
        $angular_users = [];
        foreach($angular_upgrade_tasks as $task) {
            $user = User::where('name', $task['assigned_to'])->first();
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user->id,
                'project_id'        => $angular_project->id,
            ]);
            $angular_users[] = $user->id;
        }
        $angular_project->users()->sync($angular_users);
        
    }
}
