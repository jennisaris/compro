@extends('layouts.admin')

@section('page_title', 'Edit Project')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white p-6 rounded shadow">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700">Judul Project</label>
                <input type="text" name="title" value="{{ old('title', $project->title) }}" required
                    class="mt-1 block w-full border border-gray-300 rounded px-4 py-2">
                @error('title')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" rows="5" required
                    class="mt-1 block w-full border border-gray-300 rounded px-4 py-2">{{ old('description', $project->description) }}</textarea>
                @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Gambar Saat Ini</label>
                <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{ $project->title }}" 
                     class="w-48 h-auto rounded mt-2">
                
                <label class="block text-sm font-medium text-gray-700 mt-4">Upload Gambar Baru</label>
                <input type="file" name="image_path" accept="image/*" id="image_input"
                    class="mt-1 block w-full" onchange="previewImage(event)">
                @error('image_path')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                
                <div id="image_preview" class="mt-4 hidden">
                    <p class="text-sm text-gray-600 mb-2">Preview:</p>
                    <img id="preview_img" src="#" alt="Preview" class="w-48 h-auto rounded">
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('projects.index') }}" 
                   class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded">
                    Kembali
                </a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                    Update Project
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById('preview_img');
        preview.src = reader.result;
        document.getElementById('image_preview').classList.remove('hidden');
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection