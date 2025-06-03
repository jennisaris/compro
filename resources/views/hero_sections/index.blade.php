@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Hero Sections</h1>
        <a href="{{ route('hero_sections.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">
            + Tambah Hero
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100 text-left text-sm font-semibold text-gray-600">
                <tr>
                    <th class="py-3 px-6">Title</th>
                    <th class="py-3 px-6">Subtitle</th>
                    <th class="py-3 px-6">Image</th>
                    <th class="py-3 px-6">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                @foreach($heroSections as $hero)
                <tr>
                    <td class="py-3 px-6">{{ $hero->title }}</td>
                    <td class="py-3 px-6">{{ $hero->subtitle }}</td>
                    <td class="py-3 px-6">
                        <img src="{{ asset('storage/' . $hero->image_path) }}" class="w-24 h-auto rounded">
                    </td>
                    <td class="py-3 px-6 space-x-2">
                        <a href="{{ route('hero_sections.edit', $hero->id) }}"
                           class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('hero_sections.destroy', $hero->id) }}" method="POST"
                              class="inline-block"
                              onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
