<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get(); // Ambil semua project dari DB
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function store(Request $request)
    {
         $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image_path' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = $request->file('image_path')->store('projects', 'public');

        \App\Models\Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            // slug akan otomatis terisi dari model (booted)
        ]);

        return redirect()->route('projects.index')->with('success', 'Project berhasil ditambahkan!');
    }

    public function edit(Project $Project)
    {
        return view('project.edit', compact('Project'));
    }

    public function update(Request $request, Project $Project)
    {
        $Project->update($request->all());

        return redirect()->route('project.index')->with('success', 'Updated successfully.');
    }

    public function destroy(Project $Project)
    {
        $Project->delete();

        return redirect()->route('project.index')->with('success', 'Deleted successfully.');
    }
}
