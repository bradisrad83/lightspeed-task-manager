<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.projects')->with('projects', new ProjectCollection(Project::all()));
    }

    public function show(Request $request, string $slug)
    {
        $project = Project::where('slug', $slug)->first();
        if(!$project) {
            return abort(404);
        }
        return view('projects.project')->with('project', new ProjectResource($project));
    }
}
