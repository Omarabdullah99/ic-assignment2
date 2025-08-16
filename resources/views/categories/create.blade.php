@extends('layouts.dashboard')
@section('title', 'Create Categories')

@section('main-content')
    <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Category</h2>

        <form action="{{ route('categories.store') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Title -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Title <span
                        class="text-red-500">*</span></label>
                <input type="text" id="name" name="name"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                    value="{{ old('name') }}">

                @error('name')
                    <div class="py-2">
                        <p class="text-red-500 font-bold text-xl">{{ $message }}</p>
                    </div>
                @enderror
            </div>




            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                    Create Category
                </button>
            </div>
        </form>
    </div>

@endsection
