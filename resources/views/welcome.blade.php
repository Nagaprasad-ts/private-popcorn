@extends('layouts.app')

@section('meta')
  {{-- Seo team --}}
  <link rel="canonical" href="https://www.privatepopcorn.com" />
  <title>Private Popcorn - Luxury Private Cinema</title>
  <meta name="description" content="Experience unparalleled luxury and create timeless memories at Private Popcorn. Your exclusive event starts here.">
  <meta name="keywords" content="private cinema, luxury theater, private screening, movie night, exclusive events">
@endsection

@section('content')
    <!-- Hero Section -->
    <header
      class="relative h-screen w-full flex items-center justify-center overflow-hidden"
    >
      <img
        src="{{ asset('images/image3.jpg') }}"
        alt="Luxury Theater"
        class="absolute inset-0 w-full h-full object-cover scale-110 animate-slow-zoom opacity-60"
      />
      <div class="absolute inset-0 hero-overlay"></div>

      <div class="relative text-center text-white px-4 mt-20">
        <h1 class="text-4xl md:text-8xl font-light mb-5 serif fade-in">
          A Space for every <br />
          kind of moment.
        </h1>
        <p
          class="text-gold uppercase text-center px-8 tracking-[0.1em] leading-[2.2] mb-4 text-xs md:text-sm fade-in"
        >
          Experience unparalleled luxury and create timeless memories at Private
          <br />
          Popcorn. Your exclusive event starts here.
        </p>
        <div class="flex justify-center items-center fade-in">
          <a
            href="/booking"
            class="border border-white/30 m-4 px-10 py-4 hover:bg-white hover:text-black transition-all duration-500 uppercase text-xs tracking-[0.2em]"
          >
            Book Your Moment
          </a>
          <a
            href="#about"
            class="border border-white/30 px-10 py-4 m-4 hover:bg-white hover:text-black transition-all duration-500 uppercase text-xs tracking-[0.2em]"
          >
            View Packages
          </a>
        </div>
      </div>

      <div
        class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce text-white/50"
      >
        <i data-lucide="chevron-down"></i>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-32 px-8 max-w-7xl mx-auto bg-[#0d0d0d]">
      <div class="grid md:grid-cols-2 gap-16 items-center">
        <div class="fade-in">
          <span class="text-gold text-sm uppercase tracking-widest block mb-4"
            >About Us</span
          >
          <h2 class="text-5xl serif mb-6">Welcome to Private Popcorn</h2>
          <p class="text-gray-300 leading-relaxed mb-8 font-light text-lg">
            Bangalore’s premier private theatre destination for unforgettable
            celebrations. Whether it’s a birthday, anniversary, romantic date
            night, or a special surprise, enjoy a luxurious private screening
            experience designed to turn every moment into a memorable cinematic
            celebration just for you.
          </p>
          <a href="/booking" class="text-xs font-semibold uppercase tracking-[0.2em] border-b-2 border-gold pb-2 hover:text-gold transition-all">
            Explore our Services
          </a>
        </div>
        <div class="relative fade-in">
          <div
            class="aspect-[1/1] overflow-hidden rounded-sm transition-all duration-1000"
          >
            <img
              src="{{ asset('images/image1.jpg') }}"
              alt="Cinema Interior"
              class="w-full h-full object-cover"
            />
          </div>
          <div
            class="absolute -bottom-8 -right-8 w-64 h-80 hidden lg:block border-8 border-[#1a1a1a] shadow-2xl overflow-hidden rounded-sm"
          >
            <img
              src="{{ asset('images/image5.jpg') }}"
              alt="Detail"
              class="w-full h-full object-cover"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Updated Services Section -->
    <section id="services" class="bg-[#0d0d0d] py-12 overflow-hidden">
      <div class="max-w-7xl mx-auto px-8">
        <div
          class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6"
        >
          <div class="max-w-xl fade-in">
            <span class="text-gold text-sm uppercase tracking-widest"
              >Our Services</span
            >
            <h2 class="text-5xl serif mt-2">Exclusive Celebrations</h2>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Service Card 1 -->
          <div
            class="service-card relative h-[500px] overflow-hidden group rounded-sm fade-in"
          >
            <img
              src="{{ asset('images/image6.jpg') }}"
              alt="Sommelier"
              class="w-full h-full object-cover"
            />
            <div
              class="service-overlay absolute inset-0 flex flex-col justify-end p-10"
            >
              <div class="service-title-container">
                <h3 class="serif text-3xl text-white service-title">
                  Birthday Party
                </h3>
                <div class="service-description">
                  <p
                    class="text-gray-300 text-sm leading-relaxed font-light mb-6"
                  >
                    Bring your birthday celebrations to life with a private
                    screening experience. Enjoy your favorite films in an
                    intimate setting, complete with personalized decorations,
                    gourmet snacks, and more.
                  </p>
                  <a
                    href="/booking"
                    class="text-[10px] uppercase tracking-widest text-gold font-bold"
                    >Book Your Moment</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Service Card 2 -->
          <div
            class="service-card relative h-[500px] overflow-hidden group rounded-sm fade-in"
          >
            <img
              src="{{ asset('images/image4.jpg') }}"
              alt="Sommelier"
              class="w-full h-full object-cover"
            />
            <div
              class="service-overlay absolute inset-0 flex flex-col justify-end p-10"
            >
              <div class="service-title-container">
                <h3 class="serif text-3xl text-white service-title">
                  Anniversary
                </h3>
                <div class="service-description">
                  <p
                    class="text-gray-300 text-sm leading-relaxed font-light mb-6"
                  >
                    Celebrate your love story with an unforgettable anniversary
                    at Private Popcorn. Enjoy a romantic private screening,
                    complete with champagne, gourmet treats, and personalized
                    touches to make your day truly special.
                  </p>
                  <a
                    href="/booking"
                    class="text-[10px] uppercase tracking-widest text-gold font-bold"
                    >Book Your Moment</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Service Card 3 -->
          <div
            class="service-card relative h-[500px] overflow-hidden group rounded-sm fade-in"
          >
            <img
              src="{{ asset('images/image7.jpg') }}"
              alt="Sommelier"
              class="w-full h-full object-cover"
            />
            <div
              class="service-overlay absolute inset-0 flex flex-col justify-end p-10"
            >
              <div class="service-title-container">
                <h3 class="serif text-3xl text-white service-title">
                  Friends Hangout
                </h3>
                <div class="service-description">
                  <p
                    class="text-gray-300 text-sm leading-relaxed font-light mb-6"
                  >
                    Bring your birthday celebrations to life with a private
                    screening experience. Enjoy your favorite films in an
                    intimate setting, complete with personalized decorations,
                    gourmet snacks, and more.
                  </p>
                  <a
                    href="/booking"
                    class="text-[10px] uppercase tracking-widest text-gold font-bold"
                    >Book Your Moment</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Suites Section -->
    <section id="suites" class="bg-[#0d0d0d] py-32 px-8">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 fade-in">
          <span class="text-gold text-sm uppercase tracking-widest"
            >Our Theatres</span
          >
          <h2 class="text-5xl serif mt-2">Designed for Your Special Moments</h2>
          <p
            class="text-gold uppercase tracking-[0.1em] leading-[1.8] mt-4 mb-4 text-sm fade-in"
          >
            Choose the perfect space for your celebration. Each package is
            designed to provide<br />
            a unique and unforgettable experience.
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <!-- Suite 1 -->
          <div
            class="group bg-[#1a1a1a] overflow-hidden border border-white/5 hover:border-gold/50 transition-all duration-500 fade-in"
          >
            <div class="h-80 overflow-hidden relative">
              <img
                src="{{ asset('images/image6.jpg') }}"
                alt="The Onyx"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
              />
              <div
                class="absolute top-4 right-4 bg-gold text-black px-3 py-1 text-[10px] uppercase tracking-widest font-semibold"
              >
                For Two
              </div>
            </div>
            <div class="p-10">
              <h3 class="serif text-3xl mb-3">Couple Nest</h3>
              <p class="text-gray-200 text-sm mb-6 font-light">
                An intimate, romantic setting perfect for anniversaries,
                proposals, or a special date night.
              </p>
              <a
                href="/booking"
                class="text-[10px] uppercase tracking-[0.2em] text-gold font-bold border-b border-gold/30 pb-1"
                >Reserve Now</a
              >
            </div>
          </div>

          <!-- Suite 2 -->
          <div
            class="group bg-[#1a1a1a] overflow-hidden border border-white/5 hover:border-gold/50 transition-all duration-500 fade-in"
            style="transition-delay: 200ms"
          >
            <div class="h-80 overflow-hidden relative">
              <img
                src="{{ asset('images/image7.jpg') }}"
                alt="The Grand"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
              />
              <div
                class="absolute top-4 right-4 bg-gold text-black px-3 py-1 text-[10px] uppercase tracking-widest font-semibold"
              >
                For Friends
              </div>
            </div>
            <div class="p-10">
              <h3 class="serif text-3xl mb-3">Friends Den</h3>
              <p class="text-gray-200 text-sm mb-6 font-light">
                The ultimate hangout for birthdays, reunions, or a fun
                get-together with your squad.
              </p>
              <a
                href="/booking"
                class="text-[10px] uppercase tracking-[0.2em] text-gold font-bold border-b border-gold/30 pb-1"
                >Reserve Now</a
              >
            </div>
          </div>

          <!-- Suite 3 -->
          <div
            class="group bg-[#1a1a1a] overflow-hidden border border-white/5 hover:border-gold/50 transition-all duration-500 fade-in"
            style="transition-delay: 400ms"
          >
            <div class="h-80 overflow-hidden relative">
              <img
                src="{{ asset('images/image3.jpg') }}"
                alt="Noir"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
              />
              <div
                class="absolute top-4 right-4 bg-gold text-black px-3 py-1 text-[10px] uppercase tracking-widest font-semibold"
              >
                For Family
              </div>
            </div>
            <div class="p-10">
              <h3 class="serif text-3xl mb-3">Fam Jam</h3>
              <p class="text-gray-200 text-sm mb-6 font-light">
                Create lasting memories with loved ones in a comfortable,
                family-friendly environment.
              </p>
              <a
                href="/booking"
                class="text-[10px] uppercase tracking-[0.2em] text-gold font-bold border-b border-gold/30 pb-1"
                >Reserve Now</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-18 px-4 bg-[#0d0d0d]">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 fade-in">
          <span class="text-gold text-sm uppercase tracking-widest"
            >Our Gallery</span
          >
          <h2 class="text-5xl serif mt-2">Glimpses of Celebrations</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div class="md:col-span-2 md:row-span-2 gallery-item fade-in">
            <img
              src="{{ asset('images/image3.jpg') }}"
              class="w-full h-full object-cover rounded-sm shadow-2xl"
              alt="Theater Room"
            />
          </div>
          <div class="gallery-item fade-in" style="transition-delay: 100ms">
            <img
              src="{{ asset('images/image6.jpg') }}"
              class="w-full h-full object-cover rounded-sm"
              alt="Cocktail"
            />
          </div>
          <div class="gallery-item fade-in" style="transition-delay: 200ms">
            <img
              src="{{ asset('images/image7.jpg') }}"
              class="w-full h-full object-cover rounded-sm"
              alt="Projector"
            />
          </div>
          <div class="gallery-item fade-in" style="transition-delay: 300ms">
            <img
              src="{{ asset('images/image4.jpg') }}"
              class="w-full h-full object-cover rounded-sm"
              alt="Audio Booth"
            />
          </div>
          <div class="gallery-item fade-in" style="transition-delay: 400ms">
            <img
              src="{{ asset('images/image1.jpg') }}"
              class="w-full h-full object-cover rounded-sm"
              alt="Martini"
            />
          </div>
        </div>
      </div>
    </section>
@endsection