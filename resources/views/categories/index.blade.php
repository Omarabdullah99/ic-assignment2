@extends('layouts.dashboard')
@section('title', 'Show Categories')
@section('main-content')
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Category List</h2>
            <a href="{{ route('categories.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md flex items-center">
                <i class="fas fa-plus mr-2"></i>
                Create Category
            </a>
        </div>

        @if (session('success'))
            <div class="text-green-500 mb-2.5">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Title
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Slug
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $category->name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $category->slug }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-green-600 hover:text-green-900 mr-2">View</a>
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                No Data Available
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $categories->links() }}</div>
    </div>
@endsection
