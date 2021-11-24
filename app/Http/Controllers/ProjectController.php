<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{

    public function public(){

        $projects = Project::orderBy('id', 'desc')->paginate(9);

        return view('front.portafolio', compact('projects'));
    }

    public function index(){

        $projects = Project::orderBy('id', 'desc')->paginate(9);


        return view('admin.projects.index', compact('projects'));
    }
    
    public function create(){
        return view('admin.projects.create');
    }

    public function store(Request $request){

        $project = new Project();

        $project->name = $request->name;
        $project->description = $request->description;
        $project->category = $request->category;

        $project->save();

        return redirect()->route('projects.show', $project);
    }

    public function show(Project $project){

        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project){

        return view('admin.projects.edit', compact('project'));

    }

    public function update(Request $request, Project $project){

        $project->name = $request->name;
        $project->description = $request->description;
        $project->category = $request->category;

        $project->save();

        return redirect()->route('projects.show', $project);

    }

    public function destroy(Project $project){

        $project->delete();

        return redirect()->route('projects.index');

    }
}
