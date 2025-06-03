<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        return view('team.index', compact('team'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
            'image_path' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'social_links' => 'nullable|array'
        ]);

        $imagePath = $request->file('image_path')->store('team', 'public');

        Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'image_path' => $imagePath,
            'social_links' => $request->social_links
        ]);

        return redirect()->route('team.index')
            ->with('success', 'Team member added successfully!');
    }

    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'social_links' => 'nullable|array'
        ]);

        $data = $request->except('image_path');

        if ($request->hasFile('image_path')) {
            Storage::disk('public')->delete($team->image_path);
            $data['image_path'] = $request->file('image_path')->store('team', 'public');
        }

        $team->update($data);

        return redirect()->route('team.index')
            ->with('success', 'Team member updated successfully!');
    }

    public function destroy(Team $team)
    {
        Storage::disk('public')->delete($team->image_path);
        $team->delete();

        return redirect()->route('team.index')
            ->with('success', 'Team member deleted successfully!');
    }
}