@extends('layouts.dashboard')
@section('title', 'Create Post')

@section('main-content')
    <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Post</h2>
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title <span
                        class="text-red-500">*</span></label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">

                @error('title')
                    <div class="text-red-400 my-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <!-- Parent Category -->
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Parent Category <span
                        class="text-red-500">*</span></label>
                <select id="category_id" name="category_id" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-red-400 my-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Description <span
                        class="text-red-500">*</span></label>
                <textarea id="content" name="content" rows="4"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">{{ old('content') }}</textarea>

                @error('content')
                    <div class="text-red-400 my-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                    Create Post
                </button>
            </div>
        </form>
    </div>
@endsection
