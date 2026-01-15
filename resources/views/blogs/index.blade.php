@extends('layouts.app')

@section('content')
<section class="bg-[#0d0d0d] py-32 px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 fade-in">
            <span class="text-gold text-sm uppercase tracking-widest">Our Blog</span>
            <h2 class="text-5xl serif mt-2">Latest Articles</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($blogs as $blog)
                <a href="{{ route('blogs.show', $blog) }}" class="group bg-[#1a1a1a] overflow-hidden border border-white/5 hover:border-gold/50 transition-all duration-500 fade-in">
                    <div class="h-80 overflow-hidden relative">
                        <img src="{{ Storage::disk('public')->url($blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                    </div>
                    <div class="p-10">
                        <h3 class="serif text-3xl mb-3">{{ $blog->title }}</h3>
                        <p class="text-gray-200 text-sm mb-6 font-light">
                            {{ Str::limit(strip_tags($blog->description), 150) }}
                        </p>
                        <span class="text-[10px] uppercase tracking-[0.2em] text-gold font-bold border-b border-gold/30 pb-1">Read More</span>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-16">
            {{ $blogs->links() }}
        </div>
    </div>
</section>
@endsection
