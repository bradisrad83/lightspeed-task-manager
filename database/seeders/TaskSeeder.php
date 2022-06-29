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
        $users = User::all();

        $slack_integration_tasks = [
            [
                'title'             => 'Serverless Function',
                'estimated_hours'   => 10,
            ],
            [
                'title'             => 'Create Webhook Route',
                'estimated_hours'   => 4,
            ],
            [
                'title'             => 'Create Slack App',
                'estimated_hours'   => 5,
            ],
            [
                'title'             => 'Test',
                'estimated_hours'   => 6,
            ],
            [
                'title'             => 'Deploy',
                'estimated_hours'   => 2,
            ],
        ];

        $laravel_upgrad_tasks = [
            [
                'title'             => 'Check Documentation',
                'estimated_hours'   => 2,
            ],
            [
                'title'             => 'Upgrade Laravel and the Needed Composer Packages',
                'estimated_hours'   => 5,
            ],
            [
                'title'             => 'Test Locally',
                'estimated_hours'   => 4,
            ],
            [
                'title'             => 'Fix Errors',
                'estimated_hours'   => 6,
            ],
            [
                'title'             => 'Deploy',
                'estimated_hours'   => 1,
            ],
        ];

        $dashboard_build_tasks = [
            [
                'title'             => 'Install Laravel Nova',
                'estimated_hours'   => 1,
            ],
            [
                'title'             => 'Create Nova Resources',
                'estimated_hours'   => 6,
            ],
            [
                'title'             => 'Create Nova Policies',
                'estimated_hours'   => 4,
            ],
            [
                'title'             => 'Create Metrics',
                'estimated_hours'   => 12,
            ],
            [
                'title'             => 'Custom Nova Actions',
                'estimated_hours'   => 8,
            ],
            [
                'title'             => 'Nova Filters',
                'estimated_hours'   => 9,
            ],
            [
                'title'             => 'Implement Lenses',
                'estimated_hours'   => 7,
            ],
            [
                'title'             => 'Custom CSS Theme',
                'estimated_hours'   => 10,
            ],            
        ];

        $mobile_app_build_tasks = [
            [
                'title'             => 'Setup React Native Repo',
                'estimated_hours'   => 2,
            ],
            [
                'title'             => 'Install Redux',
                'estimated_hours'   => 1,
            ],
            [
                'title'             => 'Create Components',
                'estimated_hours'   => 14,
            ],
            [
                'title'             => 'Integrate with API',
                'estimated_hours'   => 12,
            ],
            [
                'title'             => 'Create Google and Apple Accounts for Deployment',
                'estimated_hours'   => 6,
            ],
            [
                'title'             => 'Style and Animate Where Needed',
                'estimated_hours'   => 8,
            ],
            [
                'title'             => 'User Authentication',
                'estimated_hours'   => 8,
            ],
            [
                'title'             => 'Test',
                'estimated_hours'   => 10,
            ],            
            [
                'title'             => 'Deploy to Stores',
                'estimated_hours'   => 7,
            ],            
        ];

        $api_integration_tasks = [
            [
                'title'             => 'Install Stripe SDK',
                'estimated_hours'   => 2,
            ],
            [
                'title'             => 'Set up Stripe Dashboard',
                'estimated_hours'   => 3,
            ],
            [
                'title'             => 'Create Keys and Authentication',
                'estimated_hours'   => 4,
            ],
            [
                'title'             => 'Bind to App Container',
                'estimated_hours'   => 3,
            ],
            [
                'title'             => 'Test Locally',
                'estimated_hours'   => 6,
            ],
            [
                'title'             => 'Deploy',
                'estimated_hours'   => 1,
            ],            
        ];

        $slack_project = Project::where('slug', 'slack-integration')->first();
        $slack_users_id = [];
        foreach($slack_integration_tasks as $task) {
            $user = $users->random(1);
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user[0]->id,
                'project_id'        => $slack_project->id,
            ]);
            $slack_users_id[] = $user[0]->id;
        }
        $slack_project->users()->sync($slack_users_id);

        $laravel_project = Project::where('slug', 'laravel-upgrade')->first();
        $laravel_users_id = [];
        foreach($laravel_upgrad_tasks as $task) {
            $user = $users->random(1);
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user[0]->id,
                'project_id'        => $laravel_project->id,
            ]);
            $laravel_users_id[] = $user[0]->id;
        }  
        $laravel_project->users()->sync($laravel_users_id);

        $dashboard_project = Project::where('slug', 'dashboard-build')->first();
        $dashboard_users_id = [];
        foreach($dashboard_build_tasks as $task) {
            $user = $users->random(1);
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user[0]->id,
                'project_id'        => $dashboard_project->id,
            ]);
            $dashboard_users_id[] = $user[0]->id;
        } 
        $dashboard_project->users()->sync($dashboard_users_id);
        
        $mobile_project = Project::where('slug', 'mobile-app-build')->first();
        $mobile_users_id = [];
        foreach($mobile_app_build_tasks as $task) {
            $user = $users->random(1);
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user[0]->id,
                'project_id'        => $mobile_project->id,
            ]);
            $mobile_users_id[] = $user[0]->id;
        }      
        $mobile_project->users()->sync($mobile_users_id);
        
        $api_project = Project::where('slug', 'api-integration')->first();
        $api_users_id = [];
        foreach($api_integration_tasks as $task) {
            $user = $users->random(1);
            Task::create([
                'title'             => $task['title'],
                'estimated_hours'   => $task['estimated_hours'],
                'user_id'           => $user[0]->id,
                'project_id'        => $api_project->id,
            ]);
            $api_users_id[] = $user[0]->id;
        }         
        $api_project->users()->sync($api_users_id);
    }
}
