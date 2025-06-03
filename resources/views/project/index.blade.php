@extends('layouts.public')

@section('content')
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Proyek Kami</h2>
        <p class="text-gray-600 mb-10 max-w-2xl mx-auto">Beberapa proyek terbaik yang telah kami kerjakan untuk klien dari berbagai industri.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $project->title }}</h3>
                        <p class="text-sm text-gray-600">{{ Str::limit($project->description, 100) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
