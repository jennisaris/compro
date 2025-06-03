<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalServices'   => Service::count(),
            'totalProjects'   => Project::count(),
            'totalMessages'   => ContactMessage::count(),
            'latestMessages'  => ContactMessage::latest()->take(5)->get(),
        ]);
    }
}
