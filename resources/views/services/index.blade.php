@extends('layouts.public')

@section('content')
<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
        <p class="text-gray-600 mb-10 max-w-2xl mx-auto">Berikut adalah berbagai layanan yang kami tawarkan untuk mendukung bisnis dan kebutuhan digital Anda.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="{{ $service->icon_class }}"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-600 text-sm">{{ $service->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
