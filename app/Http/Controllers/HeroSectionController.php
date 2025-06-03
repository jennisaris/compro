<?php

namespace App\Http\Controllers;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
   public function index()
    {
        $heroSections = HeroSection::all();
        return view('hero_sections.index', compact('heroSections'));
    }

    public function create()
    {
        return view('hero_sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image_path' => 'required',
        ]);

        HeroSection::create($request->all());

        return redirect()->route('hero_sections.index')->with('success', 'Hero section created successfully.');
    }

    public function edit(HeroSection $heroSection)
    {
        return view('hero_sections.edit', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $heroSection->update($request->all());

        return redirect()->route('hero_sections.index')->with('success', 'Hero section updated successfully.');
    }

    public function destroy(HeroSection $heroSection)
    {
        $heroSection->delete();

        return redirect()->route('hero_sections.index')->with('success', 'Hero section deleted successfully.');
    }
}
