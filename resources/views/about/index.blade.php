@extends('layouts.public')

@section('content')
<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Pelajari lebih lanjut tentang visi, misi, dan komitmen kami terhadap solusi digital yang berdampak.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">{{ $about->title }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $about->content }}</p>
            </div>
            @if($about->image_path)
            <div>
                <img src="{{ asset('storage/' . $about->image_path) }}" alt="Tentang Kami" class="rounded-lg shadow-md w-full">
            </div>
            @endif
        </div>
    </div>
</section>
@endsection
