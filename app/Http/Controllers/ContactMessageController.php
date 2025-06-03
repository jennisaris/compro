<?php

namespace App\Http\Controllers;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $descriptions = ContactMessage::all();
        return view('contact_message.index', compact('descriptions'));
    }

    public function create()
    {
        return view('contact_message.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'tagline' => 'required',
            'description' => 'required',
        ]);

        ContactMessage::create($request->all());

        return redirect()->route('contact_message.index')->with('success', 'Message added.');
    }

    public function edit(ContactMessage $ContactMessage)
    {
        return view('contact_message.edit', compact('ContactMessage'));
    }

    public function update(Request $request, ContactMessage $ContactMessage)
    {
        $ContactMessage->update($request->all());

        return redirect()->route('contact_message.index')->with('success', 'Updated successfully.');
    }

    public function destroy(ContactMessage $ContactMessage)
    {
        $ContactMessage->delete();

        return redirect()->route('contact_message.index')->with('success', 'Deleted successfully.');
    }
}
