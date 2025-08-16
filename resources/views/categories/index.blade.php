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
                            Parent Category
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            Web Development
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            web-development
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            —
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            React
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            react
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Web Development
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4 flex justify-between items-center">
            <div class="text-sm text-gray-700">
                Showing <span class="font-medium">1</span> to <span class="font-medium">10</span> of <span
                    class="font-medium">52</span> results
            </div>
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Previous</span>
                    <i class="fas fa-chevron-left h-5 w-5"></i>
                </a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    1
                </a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700">
                    2
                </a>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    3
                </a>
                <span
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                    ...
                </span>
                <a href="#"
                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                    6
                </a>
                <a href="#"
                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                    <span class="sr-only">Next</span>
                    <i class="fas fa-chevron-right h-5 w-5"></i>
                </a>
            </nav>
        </div>
    </div>
@endsection
