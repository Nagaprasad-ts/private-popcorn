@extends('layouts.app')

@section('meta')
    {{-- Seo team --}}
    <link rel="canonical" href="https://www.privatepopcorn.com/blogs/{{ $blog->slug }}" />
    <title>{{ $blog->meta_title }}</title>
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="keywords" content="{{ is_array($blog->keywords) ? implode(', ', $blog->keywords) : $blog->keywords }}">
@endsection

@section('content')
<section class="bg-[#0d0d0d] py-32 px-8">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16 fade-in">
            <h1 class="text-5xl serif mt-2">{{ $blog->title }}</h1>
            <p class="text-gold text-sm uppercase tracking-widest mt-4">{{ $blog->created_at->format('F d, Y') }}</p>
        </div>

        <div class="fade-in">
            <img src="{{ Storage::disk('public')->url($blog->image) }}" alt="{{ $blog->title }}" class="w-full h-auto object-cover rounded-sm shadow-2xl mb-8" />
        </div>

        <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed font-light text-lg">
            {!! $blog->description !!}
        </div>
    </div>
</section>
@endsection
