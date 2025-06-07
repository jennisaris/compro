<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HeroSection;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\ContactInfo;
use App\Models\ContactMessage;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'hero' => HeroSection::all(),
            'about' => AboutUs::all(),
            'services' => Service::all(),
            'contactInfo' => ContactInfo::first(),
        ]);
    }

    public function contactFormSubmit(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return redirect()->to('/#contact')->with('success', 'Pesan kamu berhasil dikirim!');
    }
}
