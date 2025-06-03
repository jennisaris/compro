@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Hero Section</h2>

    <form action="{{ route('hero_sections.update', $heroSection->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium text-gray-700">Title</label>
            <input type="text" name="title" value="{{ $heroSection->title }}"
                   class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
        </div>
        <div>
            <label class="block font-medium text-gray-700">Subtitle</label>
            <input type="text" name="subtitle" value="{{ $heroSection->subtitle }}"
                   class="mt-1 block w-full border-gray-300 rounded shadow-sm" required>
        </div>
        <div>
            <label class="block font-medium text-gray-700">Gambar Lama</label>
            <img src="{{ asset('storage/' . $heroSection->image_path) }}" class="w-32 h-auto rounded mb-3">
            <label class="block font-medium text-gray-700">Upload Gambar Baru (Opsional)</label>
            <input type="file" name="image_path" accept="image/*" class="block w-full">
        </div>

        <div>
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Update
            </button>
            <a href="{{ route('hero_sections.index') }}"
               class="ml-3 text-gray-600 hover:underline">Kembali</a>
        </div>
    </form>
</div>
@endsection
