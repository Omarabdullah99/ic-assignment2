@extends('layouts.dashboard')
@section('title', 'Posts')

@section('main-content')
    <section class="flex flex-col gap-8 xl:col-span-8">
        @forelse ($posts as $post)
            <!-- Article 1 -->
            <article
                class="bg-white rounded-lg shadow-md hover:shadow-lg transition overflow-hidden flex flex-col md:flex-row">
                <img src="https://placehold.co/480x200/png" alt="Web Development" class="md:w-1/3 h-48 md:h-auto object-cover">
                <div class="p-6 md:w-2/3">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">{{ $category->name }}</span>

                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">{{ $post->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $post->content }}.</p>


                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read
                        More</a>

                </div>
            </article>
        @empty
            <div>
                <h1 class="flex flex-row items-center gap-4">
                    <p class="text-xl font-bold text-green-500">{{ $category->name }} Category</p> Post Not Available
                </h1>
            </div>
        @endforelse
    </section>
@endsection
