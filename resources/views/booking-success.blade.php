<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} | Booking Successful</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--... [truncated]
            </style>
        @endif

        {{-- Styles --}}
        <style>
            :root {
                --primary-gold: #c5a059;
                --dark-bg: #1a1a1a;
            }
            body {
                font-family: "Montserrat", sans-serif;
                background-color: #0d0d0d;
                color: #ffffff;
            }
            h1,
            h2,
            h3,
            .serif {
                font-family: "Cormorant Garamond", serif;
            }
            .text-gold {
                color: #f4cf4a;
            }
            .bg-gold {
                background-color: #f4cf4a;
            }

            .fade-in {
                opacity: 0;
                transform: translateY(30px);
                transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .fade-in.visible {
                opacity: 1;
                transform: translateY(0);
            }
            .hero-overlay {
                background: linear-gradient(
                to bottom,
                rgba(0, 0, 0, 0.5),
                rgba(13, 13, 13, 1)
                );
            }
            .nav-scrolled {
                background: rgba(13, 13, 13, 0.98);
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
                /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); */
            }
        </style>

        {{-- Scripts --}}
        <link rel="icon" type="image/png" sizes="32x32" href="images/logo1.jpg" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <script src="https://unpkg.com/lucide@latest"></script>
    </head>
    <body class="overflow-x-hidden">
        <!-- Navigation -->
        <nav
          id="navbar"
          class="fixed w-full z-50 transition-all duration-500 py-6 px-8 flex justify-between items-center text-white"
        >
          <div class="flex items-center">
            <span class="text-2xl font-light tracking-[0.3em] uppercase serif">
                <img src="{{ asset('storage/privatepopcorn.webp') }}" alt="Private Popcorn Logo" class="h-10 inline-block" />
            </span>
          </div>
    
          <!-- Right Aligned Nav Items -->
          <div class="flex items-center space-x-10">
            <div
              class="hidden lg:flex space-x-8 text-[14px] uppercase tracking-[0.2em] font-light"
            >
              <a href="/#services" class="hover:text-gold transition-colors"
                >Packages</a
              >
              <a href="/#gallery" class="hover:text-gold transition-colors"
                >Gallery</a
              >
            </div>
    
            <a href="/booking" class="bg-gold text-black px-8 py-3 text-[14px] uppercase tracking-widest hover:bg-white hover:text-black transition-all duration-300 font-semibold shadow-lg border border-red-500 hover:border-black-500 rounded-lg">
              Book Now
            </a>
          </div>
        </nav>

        <!-- Main Content -->
        <main class="min-h-screen flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-lg w-full bg-[#1a1a1a] px-8 pt-10 pb-12 rounded-b-2xl shadow-2xl relative overflow-hidden">
                <div class="relative">
                    <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-green-900 border-4 border-gray-800 shadow-md ring-1 ring-green-500">
                        <svg class="h-10 w-10 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <div class="text-center mt-6">
                        <h1 class="text-3xl font-black tracking-tight text-white uppercase italic">
                            Booking <span class="text-gold">Confirmed!</span>
                        </h1>
                    </div>
                    <div class="mt-10 space-y-1">
                        <div class="flex justify-between items-center py-4 border-b border-dashed border-gray-700">
                            <span class="text-xs font-bold text-gold uppercase tracking-widest">Theatre</span>
                            <span class="text-sm font-semibold text-gray-300">{{ $booking->theatre_name }}</span>
                        </div>
                        <div class="flex justify-between items-center py-4 border-b border-dashed border-gray-700">
                            <span class="text-xs font-bold text-gold uppercase tracking-widest">Date & Slot</span>
                            <span class="text-sm font-semibold text-gray-300">{{ $booking->booking_date }} &mdash; {{ $booking->slot }}</span>
                        </div>
                        <div class="flex justify-between items-center py-4 border-b border-dashed border-gray-700">
                            <span class="text-xs font-bold text-gold uppercase tracking-widest">Purpose</span>
                            <span class="text-sm font-semibold text-gray-300">{{ $booking->purpose }}</span>
                        </div>
                        @if(!empty($booking->addon))
                            <div class="flex justify-between items-start py-4 border-b border-dashed border-gray-700">
                                <dt class="text-xs font-bold text-gold uppercase tracking-widest">Add-ons</dt>
                                <dd class="text-sm font-semibold text-gray-300 text-right">
                                    {{ implode(', ', $booking->addon) }}
                                </dd>
                            </div>
                        @endif
                        <div class="flex justify-between items-center py-6">
                            <span class="text-sm font-bold text-gray-300">Total Paid</span>
                            <span class="text-2xl font-black text-gold">₹{{ $booking->total_price }}</span>
                        </div>
                    </div>
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <a href="{{ url('/booking/receipt/' . $booking->id) }}" class="flex items-center justify-center px-6 py-4 bg-gold hover:bg-yellow-500 text-black rounded-xl font-bold shadow-lg transition-all active:scale-95 group">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Get Receipt
                        </a>
                        <a href="/booking" class="flex items-center justify-center px-6 py-4 bg-gray-800 border-2 border-gold text-gold hover:bg-gray-700 rounded-xl font-bold transition-all active:scale-95">
                            Book Another
                        </a>
                    </div>
                    <p class="mt-8 text-center text-xs text-gray-400 font-medium">
                        Need help? <a href="mailto:privatepopcorn913@gmail.com" class="text-gold underline">Contact Support</a> | Call us: <a href="tel:+918884447958" class="text-gold underline">+91 88844 47958</a>
                    </p>
                </div>
            </div>
        </main>
    
        <!-- Footer -->
        <footer class="text-white mt-20 py-12 px-8 border-t border-white/5">
            <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-16">
                <div class="md:col-span-1">
                <img src="{{ asset('storage/logo.jpg') }}" alt="" />
                <p class="text-gray-200 py-2 text-sm font-light leading-relaxed">
                    Crafting unforgettable memories in our exclusive private theaters.
                </p>
                </div>
                <div>
                <h5
                    class="uppercase text-xs tracking-[0.3em] mb-8 font-semibold text-gold"
                >
                    Quick Links
                </h5>
                <ul class="text-gray-200 text-sm font-light space-y-5">
                    <li>
                    <a href="/privacy-policy" class="hover:text-gold transition-colors"
                        >Privacy Policy</a
                    >
                    </li>
                    <li>
                    <a href="/terms-and-conditions" class="hover:text-gold transition-colors"
                        >Terms & Conditions</a
                    >
                    </li>
                    <li>
                    <a href="/cancellation-and-refund" class="hover:text-gold transition-colors"
                        >Cancellation & Refund</a
                    >
                    </li>
                    <li>
                    <a href="/shipping" class="hover:text-gold transition-colors"
                        >Shipping Policy</a
                    >
                    </li>
                </ul>
                </div>
                <div>
                <h5
                    class="uppercase text-xs tracking-[0.3em] mb-8 font-semibold text-gold"
                >
                    Contact Us
                </h5>
                <p class="text-gray-200 text-sm font-light mb-4">8884447958</p>
                <p class="text-gray-200 text-sm font-light mb-4">
                    privatepopcorn913@gmail.com
                </p>
                <p class="text-gray-200 text-sm font-light mb-4">
                    3rd Floor, #25, 60 Feet Road, Main Road, near Soda Factory, Jnana Juothi Nagar, Railway Layout, Ullal, Bangalore - 560056
                </p>
                </div>
            </div>
            <div class="max-w-7xl mx-auto pt-6 mt-4 border-t border-white/5 flex flex-col md:flex-row justify-between items-center" >
                <p class="text-gray-200 text-[14px] uppercase tracking-widest">
                © 2026 Private Popcorn. All rights reserved. | Designed & Developed by <a href="https://nagaprasad-ts.github.io/portfolio" target="_blank" class="text-blue-500 underline">Nagaprasad T S</a>
                </p>
                <div class="flex space-x-6 text-gray-500">
                <a href="https://www.instagram.com/private_popcornofficial/" class="hover:text-gold transition-colors">
                    <i data-lucide="instagram" class="w-4 h-4"></i>
                </a>
                </div>
            </div>
        </footer>

        <script>
            // Configuration
            const phoneNumber = "8884447958"; // Replace with your international format number (no + or spaces)
            const welcomeMessage = "Hello! I have a question about your services.";

            window.onload = function () {
                const waLink = document.getElementById("whatsappLink");

                // Encode the message for the URL
                const encodedMessage = encodeURIComponent(welcomeMessage);

                // Create the official WhatsApp API link
                // Using 'https://wa.me/' is the modern, recommended way
                waLink.href = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

                console.log("WhatsApp link initialized for:", phoneNumber);
            };
        </script>
        
        <script>
            // Initialize Lucide Icons
            lucide.createIcons();
        </script>
  </body>
</html>