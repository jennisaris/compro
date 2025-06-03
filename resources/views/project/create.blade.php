@extends('layouts.admin')

@section('page_title', 'Tambah Project')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white p-6 rounded shadow">
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Judul Project</label>
                <input type="text" name="title" value="{{ old('title') }}" required
                    class="mt-1 block w-full border border-gray-300 rounded px-4 py-2">
                @error('title')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" rows="5" required
                    class="mt-1 block w-full border border-gray-300 rounded px-4 py-2">{{ old('description') }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="image_path" accept="image/*" required
                    class="mt-1 block w-full">
                @error('image_path')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
