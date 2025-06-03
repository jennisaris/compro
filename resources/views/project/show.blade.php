@extends('layouts.public')

@section('content')
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="mb-6">
            <a href="{{ route('projects') }}" class="text-blue-600 hover:underline text-sm">
                ← Kembali ke daftar proyek
            </a>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $project->title }}</h1>

        @if($project->image_path)
            <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->title }}" class="rounded-lg shadow-md mb-6 w-full">
        @endif

        <div class="text-gray-700 leading-relaxed">
            {{ $project->description }}
        </div>
    </div>
</section>
@endsection
