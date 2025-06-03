@extends('layouts.admin')

@section('page_title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Services</p>
                <h3 class="text-2xl font-bold text-gray-800">{{ $totalServices }}</h3>
            </div>
            <i class="fas fa-cogs text-blue-500 text-3xl"></i>
        </div>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Projects</p>
                <h3 class="text-2xl font-bold text-gray-800">{{ $totalProjects }}</h3>
            </div>
            <i class="fas fa-briefcase text-green-500 text-3xl"></i>
        </div>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Messages</p>
                <h3 class="text-2xl font-bold text-gray-800">{{ $totalMessages }}</h3>
            </div>
            <i class="fas fa-envelope text-red-500 text-3xl"></i>
        </div>
    </div>
</div>

<div class="bg-white rounded shadow p-6">
    <h2 class="text-lg font-semibold mb-4 text-gray-800">Pesan Terbaru</h2>
    <table class="min-w-full table-auto">
        <thead class="text-sm text-gray-600 border-b">
            <tr>
                <th class="text-left py-2 px-4">Nama</th>
                <th class="text-left py-2 px-4">Email</th>
                <th class="text-left py-2 px-4">Subjek</th>
                <th class="text-left py-2 px-4">Tgl</th>
            </tr>
        </thead>
        <tbody class="text-sm text-gray-700">
            @foreach($latestMessages as $msg)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $msg->name }}</td>
                    <td class="py-2 px-4">{{ $msg->email }}</td>
                    <td class="py-2 px-4">{{ $msg->subject }}</td>
                    <td class="py-2 px-4">{{ $msg->created_at->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
