<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function index()
    {
        
        $services = \App\Models\Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
             'title' => 'required',
            'description' => 'required',
            'icon_class' => 'required',
        ]);

        Service::create($request->all());

        return redirect()->route('service.index')->with('success', 'Service added.');
    }

    public function edit(Service $Service)
    {
        return view('service.edit', compact('Service'));
    }

    public function update(Request $request, Service $Service)
    {
        $Service->update($request->all());

        return redirect()->route('service.index')->with('success', 'Updated successfully.');
    }

    public function destroy(Service $Service)
    {
        $Service->delete();

        return redirect()->route('service.index')->with('success', 'Deleted successfully.');
    }
}
