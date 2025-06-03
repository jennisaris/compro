<?php

namespace App\Http\Controllers;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index()
    {
        $ContactInfos = ContactInfo::all();
        return view('contact_info.index', compact('ContactInfos'));
    }

    public function create()
    {
        return view('contact_info.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image_path' => 'required',
        ]);

        ContactInfo::create($request->all());

        return redirect()->route('contact_info.index')->with('success', 'Hero section created successfully.');
    }

    public function edit(ContactInfo $ContactInfo)
    {
        return view('contact_info.edit', compact('ContactInfo'));
    }

    public function update(Request $request, ContactInfo $ContactInfo)
    {
        $ContactInfo->update($request->all());

        return redirect()->route('contact_info.index')->with('success', 'Hero section updated successfully.');
    }

    public function destroy(ContactInfo $ContactInfo)
    {
        $ContactInfo->delete();

        return redirect()->route('contact_info.index')->with('success', 'Hero section deleted successfully.');
    }
}
