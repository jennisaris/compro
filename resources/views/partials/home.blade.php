@extends('layouts.public')

@section('content')
    {{-- Hero Section --}}
    @foreach($hero as $heroItem)
    <section id="home" class="hero-gradient text-white py-32 text-center">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 fade-in">{{ $heroItem->title }}</h1>
            <p class="text-lg md:text-xl mb-6 fade-in">{{ $heroItem->subtitle }}</p>
            <a href="#services" class="bg-white text-blue-600 font-semibold py-3 px-6 rounded-full shadow hover:bg-gray-100 fade-in">Lihat Layanan</a>
        </div>
    </section>
    @endforeach

    {{-- About Us Section --}}
    @foreach($about as $aboutItem)
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
            <p class="text-gray-600 leading-relaxed max-w-3xl mx-auto">{{ $aboutItem->content }}</p>
        </div>
    </section>
    @endforeach

    {{-- Services Section --}}
    <section id="services" class="py-20">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-10">Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($services as $service)
                    <div class="bg-white rounded-lg shadow p-6 service-card">
                        <div class="text-blue-600 text-3xl mb-4">
                            <i class="{{ $service->icon_class }}"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $service->title }}</h3>
                        <p class="text-gray-600">{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="py-20 bg-gray-100">
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
    @csrf

        {{-- Nama --}}
        <div>
            <input type="text" name="name" placeholder="Nama"
                value="{{ old('name') }}"
                class="w-full px-4 py-2 rounded border @error('name') border-red-500 @enderror"
                required>
            @error('name')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div>
            <input type="email" name="email" placeholder="Email"
                value="{{ old('email') }}"
                class="w-full px-4 py-2 rounded border @error('email') border-red-500 @enderror"
                required>
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Subjek --}}
        <div>
            <input type="text" name="subject" placeholder="Subjek"
                value="{{ old('subject') }}"
                class="w-full px-4 py-2 rounded border @error('subject') border-red-500 @enderror"
                required>
            @error('subject')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Pesan --}}
        <div>
            <textarea name="message" rows="5" placeholder="Pesan"
                class="w-full px-4 py-2 rounded border @error('message') border-red-500 @enderror"
                required>{{ old('message') }}</textarea>
            @error('message')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Tombol --}}
        <button type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            Kirim Pesan
        </button>
    </form>

    </section>
@endsection
