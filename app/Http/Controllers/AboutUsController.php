<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first(); // ambil data pertama dari tabel
        return view('about.index', compact('about'));
    }

    public function create()
    {
        return view('about_us.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_path'=> 'required',

        ]);

        AboutUs::create($request->all());

        return redirect()->route('about_us.index')->with('success', 'About Us added.');
    }

    public function edit(AboutUs $AboutUs)
    {
        return view('about_us.edit', compact('AboutUs'));
    }

    public function update(Request $request, AboutUs $AboutUs)
    {
        $AboutUs->update($request->all());

        return redirect()->route('about_us.index')->with('success', 'Updated successfully.');
    }

    public function destroy(AboutUs $AboutUs)
    {
        $AboutUs->delete();

        return redirect()->route('about_us.index')->with('success', 'Deleted successfully.');
    }
}
