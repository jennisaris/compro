@extends('layouts.public')

@section('content')
<section class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900">Our Team</h2>
            <p class="mt-4 text-lg text-gray-500">Meet the amazing people behind our success</p>
        </div>

        <div class="mt-12 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($team as $member)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $member->image_path) }}" 
                     alt="{{ $member->name }}" 
                     class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900">{{ $member->name }}</h3>
                    <p class="text-sm text-blue-600">{{ $member->position }}</p>
                    <p class="mt-4 text-gray-600">{{ $member->bio }}</p>
                    
                    @if($member->social_links)
                    <div class="mt-4 flex space-x-4">
                        @foreach($member->social_links as $platform => $url)
                        <a href="{{ $url }}" target="_blank" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-{{ $platform }}"></i>
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection