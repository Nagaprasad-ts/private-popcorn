@extends('layouts.app')

@section('meta')
    {{-- SEO --}}
    <title>Private Theatre in Bangalore for Couples, Birthdays & Events</title>
    <meta name="description" content="Book a private theatre in Bangalore for couples, birthdays, and special moments. Enjoy full privacy, 4K screen, decorations, and easy booking.">
    <link rel="canonical" href="https://privatepopcorn.com/about-us" />
@endsection

@section('content')
    <!-- Hero Section -->
    <header class="relative h-[40vh] md:h-[60vh] w-full flex items-center justify-center overflow-hidden">
        <img src="{{ asset('images/image2.jpg') }}" alt="About Private Popcorn" class="absolute inset-0 w-full h-full object-cover opacity-50 object-center">
        <div class="absolute inset-0 hero-overlay"></div>
        <div class="relative text-center text-white px-4 mt-20">
            <h1 class="text-4xl md:text-6xl font-light mb-5 serif fade-in">
                Private Theatre in Bangalore
            </h1>
            <p class="text-gold uppercase text-center px-8 tracking-[0.1em] leading-[2.2] mb-4 text-xs md:text-sm fade-in">
                For Couples, Birthdays & Special Occasions
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="bg-[#0d0d0d] text-gray-300">

        <!-- What is a Private Theatre -->
        <section class="py-10 px-8 max-w-7xl mx-auto">
            <p class="text-justify leading-relaxed font-light mb-12 fade-in">
                Looking for a private theatre in Bangalore where you can enjoy a movie without crowds, noise, or interruptions? A private theatre gives you your own personal movie space — perfect for couples, friends, families, and special celebrations.
                Instead of sitting in a crowded multiplex, you get a fully private room, a big screen with clear sound, comfortable seating, and complete control over what you watch. Whether it’s a romantic date, a birthday surprise, an anniversary celebration, or just a fun movie night with friends, a private theatre makes the experience more special and personal.
                Many people in Bangalore now prefer private movie theatres because they offer privacy, comfort, and flexibility. You can stream your favorite content, enjoy decorations, bring in cake, and celebrate without any pressure. From couples looking for quiet time to families planning a small celebration, private theatres fit every mood.
                If you want a relaxed, premium movie experience made just for you, booking a private theatre in Bangalore is the perfect choice.
            </p>
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl serif text-white mb-4">What Is a Private Theatre and Why People in Bangalore Love It</h2>
                <p class="text-lg leading-relaxed font-light">
                    A private theatre is a small, personal movie room that you can book only for yourself and your group. Unlike a regular cinema hall, there are no strangers, no noise, and no fixed movie schedule. You decide who comes in, what to watch, and how long you want to enjoy the experience.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="fade-in">
                    <p class="mb-6 leading-relaxed">In a private movie theatre in Bangalore, you get a big screen, high-quality sound, comfortable seating, and complete privacy. You can play movies from OTT platforms, watch sports, enjoy web series, or even play games. Everything happens in a relaxed, home-like setting — but with a cinema-style experience.</p>
                    <p class="mb-6 leading-relaxed">People in Bangalore love private theatres because they match the city’s lifestyle. Couples prefer them for peaceful date nights. Friends book them for fun movie marathons. Families choose them for safe and comfortable celebrations. Many even use private mini theatres for birthdays, anniversaries, and surprise events.</p>
                    <p class="mb-6 leading-relaxed">Another big reason private theatres are popular is flexibility. You can decorate the room, bring cake, choose your own playlist, and celebrate freely without time pressure or public attention. This level of comfort and personalization is something normal multiplex theatres simply can't offer.</p>
                    <p class="mb-6 leading-relaxed">That's why private theatres are quickly becoming the first choice for people who want more than just watching a movie — they want an experience.</p>
                </div>
                <div class="fade-in">
                    <img src="{{ asset('images/image3.jpg') }}" alt="Comfortable private theatre seating" class="rounded-sm shadow-2xl w-full h-auto object-cover">
                </div>
            </div>
        </section>

        <!-- Who Should Book -->
        <section class="py-20 px-8 bg-[#121212]">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12 fade-in">
                    <h2 class="text-4xl serif text-white mb-4">Who Should Book a Private Theatre?</h2>
                    <p class="text-lg leading-relaxed font-light px-0 md:px-30">A private theatre in Bangalore is not just for watching movies. It’s for people who want comfort, privacy, and a better way to celebrate. If you fall into any of these groups, a private theatre is made for you.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- For Couples -->
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in">
                        <h3 class="text-2xl serif text-gold mb-3">Private Theatre for Couples</h3>
                        <p class="font-light">Couples love private theatres because they offer a quiet and romantic space. There are no strangers around, no distractions, and no rush. You can enjoy a movie, decorate the room, or plan a surprise date. That’s why many couples prefer a private theatre for couples in Bangalore instead of crowded cinema halls.</p>
                    </div>
                    <!-- For Birthdays & Anniversaries -->
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in" style="transition-delay: 100ms;">
                        <h3 class="text-2xl serif text-gold mb-3">Private Theatre for Birthdays & Anniversaries</h3>
                        <p class="font-light">Private theatres are a popular choice for birthday parties and anniversaries. You can celebrate with close friends or family, add decorations, cut a cake, and enjoy your favorite movie together. A private theatre for birthdays in Bangalore makes celebrations feel more personal and memorable.</p>
                    </div>
                    <!-- For Friends & Family -->
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in" style="transition-delay: 200ms;">
                        <h3 class="text-2xl serif text-gold mb-3">Private Theatre for Friends & Family</h3>
                        <p class="font-light">If you want to spend quality time with friends or family, a private movie theatre is perfect. You can watch movies, sports, or web series together in a relaxed environment. It’s comfortable, safe, and fun for all age groups.</p>
                    </div>
                    <!-- For Special Occasions -->
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in" style="transition-delay: 300ms;">
                        <h3 class="text-2xl serif text-gold mb-3">Private Theatre for Small Events & Get-Togethers</h3>
                        <p class="font-light">Many people also book private theatres for small team outings, surprise celebrations, or casual get-togethers. The private setup, good sound system, and flexible timing make it a great option for small groups who want something different.</p>
                        <p class="font-light">No matter the occasion, a private theatre gives you a space where the moment is all about you.</p>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="py-20 px-8 max-w-7xl mx-auto">
            <div class="text-center mb-12 fade-in">
                <h2 class="text-4xl serif text-white mb-4">Private Theatre Experience & Features</h2>
                <p class="text-lg leading-relaxed font-light">When you book a private theatre in Bangalore, you’re not just booking a room — you’re booking a complete experience designed for comfort and enjoyment. Everything is set up to make your time special, relaxed, and memorable.</p>
            </div>
           <div class="grid md:grid-cols-2 gap-12">
                <ul class="space-y-10 font-light">
                    <li class="flex items-start group">
                        <div class="p-3 rounded-lg bg-white/5 border border-white/10 group-hover:border-gold/50 transition-colors mr-5">
                            <i data-lucide="tv-2" class="text-gold size-8"></i>
                        </div>
                        <span>
                            <strong class="text-white text-xl block mb-1">Big Screen & Clear Sound</strong>
                            Private theatres come with large screens and high-quality sound systems. Whether you’re watching a movie, a web series, or a live match, the picture is clear and the sound feels immersive.
                        </span>
                    </li>
                    <li class="flex items-start group">
                        <div class="p-3 rounded-lg bg-white/5 border border-white/10 group-hover:border-gold/50 transition-colors mr-5">
                            <i data-lucide="sofa" class="text-gold size-8"></i>
                        </div>
                        <span>
                            <strong class="text-white text-xl block mb-1">Comfortable Seating</strong>
                            Most private mini theatres in Bangalore offer soft sofa seating or recliners instead of hard cinema chairs. You can sit comfortably and relax without feeling rushed.
                        </span>
                    </li>
                    <li class="flex items-start group">
                        <div class="p-3 rounded-lg bg-white/5 border border-white/10 group-hover:border-gold/50 transition-colors mr-5">
                            <i data-lucide="lock" class="text-gold size-8"></i>
                        </div>
                        <span>
                            <strong class="text-white text-xl block mb-1">Full Privacy</strong>
                            Privacy is the biggest advantage. The room is reserved only for you and your group. No strangers, no noise, and no interruptions. Ideal for couples and small celebrations.
                        </span>
                    </li>
                </ul>
                <ul class="space-y-10 font-light">
                    <li class="flex items-start group">
                        <div class="p-3 rounded-lg bg-white/5 border border-white/10 group-hover:border-gold/50 transition-colors mr-5">
                            <i data-lucide="film" class="text-gold size-8"></i>
                        </div>
                        <span>
                            <strong class="text-white text-xl block mb-1">OTT & Entertainment Access</strong>
                            Watch content from popular OTT platforms like Netflix, Amazon Prime, or Hotstar. Many theatres also allow you to play games or stream live sports events.
                        </span>
                    </li>
                    <li class="flex items-start group">
                        <div class="p-3 rounded-lg bg-white/5 border border-white/10 group-hover:border-gold/50 transition-colors mr-5">
                            <i data-lucide="shield-check" class="text-gold size-8"></i>
                        </div>
                        <span>
                            <strong class="text-white text-xl block mb-1">Clean & Safe Environment</strong>
                            Well-maintained and safe for all age groups, including kids. All these features together make private theatres a better option than regular movie halls.
                        </span>
                    </li>
                    <li class="flex items-start group">
                        <div class="p-3 rounded-lg bg-white/5 border border-white/10 group-hover:border-gold/50 transition-colors mr-5">
                            <i data-lucide="cake" class="text-gold size-8"></i>
                        </div>
                        <span>
                            <strong class="text-white text-xl block mb-1">Decorations & Surprises</strong>
                            One of the biggest reasons people choose us is the option to turn a simple movie plan into a full celebration with decorations and surprise setups.
                        </span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- How to Book -->
        <section class="py-20 px-8 bg-[#121212]">
            <div class="max-w-7xl mx-auto text-center fade-in">
                <h2 class="text-5xl serif text-white mb-6">How to Book a Private Theatre</h2>
                <p class="text-white px-0 md:px-40 mb-8">Booking a private theatre in Bangalore is simple and quick. The process is designed to be easy so you can focus on enjoying your plan instead of worrying about arrangements.</p>
                <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-12">
                    <div class="flex items-center flex-col">
                        <div class="size-12 md:size-16 bg-gold text-black rounded-full flex items-center justify-center text-base md:text-2xl font-bold mb-3">1</div>
                        <h4 class="text-white text-lg font-semibold mb-2">Choose Location & Time</h4>
                        <p>First, select the location that is closest to you and choose a suitable date and time. Evening and weekend slots are usually in high demand, so booking early is always a good idea.</p>
                    </div>
                    <div class="flex items-center flex-col">
                        <div class="size-12 md:size-16 bg-gold text-black rounded-full flex items-center justify-center text-base md:text-2xl font-bold mb-3">2</div>
                        <h4 class="text-white text-lg font-semibold mb-2">Select a Package</h4>
                        <p>Choose a package based on the number of people and the type of experience you want. Whether it’s a basic movie plan, a birthday celebration, or a romantic setup, there are options for every need.</p>
                    </div>
                    <div class="flex items-center flex-col">
                        <div class="size-12 md:size-16 bg-gold text-black rounded-full flex items-center justify-center text-base md:text-2xl font-bold mb-3">3</div>
                        <h4 class="text-white text-lg font-semibold mb-2">Add Decorations or Extras</h4>
                        <p>If you’re planning a special occasion, you can add decorations, cake, or food options to your booking. These extras help make the experience more memorable and stress-free.</p>
                    </div>
                    <div class="flex items-center flex-col">
                        <div class="size-12 md:size-16 bg-gold text-black rounded-full flex items-center justify-center text-base md:text-2xl font-bold mb-3">4</div>
                        <h4 class="text-white text-lg font-semibold mb-2">Confirm Your Booking</h4>
                        <p>Once everything is selected, confirm your booking through WhatsApp, phone call, or online payment. After confirmation, you’ll receive the booking details and instructions.</p>
                    </div>
                </div>
                <a href="/booking" class="mt-12 inline-block bg-gold text-center text-black px-10 py-4 text-sm uppercase tracking-widest hover:bg-white transition-all duration-300 font-semibold rounded-lg">
                    Book Now
                </a>
            </div>
        </section>

        <!-- Pricing Section -->
        <section class="py-24 bg-black/50 border-y border-white/5">
            <div class="max-w-7xl mx-auto px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl serif text-white mb-6">Private Theatre Packages & Pricing in Bangalore</h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto font-light">
                        When booking a private theatre in Bangalore, pricing usually depends on the number of people, time duration, and extra services like decorations or cake. The good thing is, private theatres offer flexible packages, so you can choose what fits your plan and budget.
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Basic Package -->
                    <div class="pricing-card p-8 rounded-2xl flex flex-col h-[65vh]">
                        <div class="mb-6">
                            <h3 class="text-2xl text-white serif mb-2">Basic Movie Package</h3>
                            <p class="text-sm text-gray-500 font-light">Ideal for couples & small groups</p>
                        </div>
                        <p class="text-gray-300 mb-8">This package is ideal for couples or small groups who just want a private movie experience. It includes a private room, big screen, sound system, and OTT access. It’s perfect for date nights or casual movie plans.</p>
                        <a href="/booking" class="w-full py-4 rounded-full border border-gold text-center text-gold hover:bg-gold hover:text-black transition-all font-semibold uppercase text-xs tracking-widest">
                            Book Experience
                        </a>
                    </div>

                    <!-- Celebration Package -->
                    <div class="pricing-card p-8 rounded-2xl flex flex-col relative overflow-hidden h-[65vh]">
                        <div class="absolute top-0 right-0 bg-gold text-black px-4 py-1 text-[10px] font-bold tracking-tighter uppercase">Most Popular</div>
                        <div class="mb-6">
                            <h3 class="text-2xl text-white serif mb-2">Celebration Package</h3>
                            <p class="text-sm text-gray-500 font-light">Birthdays & Anniversaries</p>
                        </div>
                        <p class="text-gray-300 mb-8">Celebration packages are designed for birthdays, anniversaries, and small parties. Along with the private theatre setup, you may get basic decorations, extra time, and support for cake cutting. This is one of the most popular options for people searching for a private theatre for birthday celebrations in Bangalore.</p>
                        <a href="/booking" class="w-full py-4 rounded-full bg-gold text-center text-black hover:bg-white transition-all font-semibold uppercase text-xs tracking-widest">
                            Start Celebrating
                        </a>
                    </div>

                    <!-- Premium Package -->
                    <div class="pricing-card p-8 rounded-2xl flex flex-col h-[65vh]">
                        <div class="mb-6">
                            <h3 class="text-2xl text-white serif mb-2">Premium Custom</h3>
                            <p class="text-sm text-gray-500 font-light">Proposals & VIP Events</p>
                        </div>
                        <p class="text-gray-300 mb-8">For special occasions like proposals or surprise events, premium packages are available. These may include themed decorations, romantic lighting, personalized messages on screen, and food add-ons. You can also customize the setup based on your needs.</p>
                        <a href="/booking" class="w-full py-4 rounded-full border border-gold text-center text-gold hover:bg-gold hover:text-black transition-all font-semibold uppercase text-xs tracking-widest">
                            Customize Now
                        </a>
                    </div>
                </div>

                <!-- Transparency Info -->
                <div class="mt-16 bg-white/5 rounded-3xl p-8 border border-white/10">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                        <div class="max-w-xl">
                            <h4 class="text-2xl text-white serif mb-3">Pricing Transparency</h4>
                            <p class="text-gray-400 font-light leading-relaxed">
                                Our rates are calculated based on the number of guests, booking duration, and selected add-ons. 
                                <span class="text-gold italic block mt-2">📌 Tip: Booking in advance helps you get better time slots, especially on weekends and special days.</span>
                            </p>
                        </div>
                        <div class="grid grid-cols-3 gap-4 w-full md:w-auto">
                            <div class="p-4 rounded-xl bg-black/40 border border-white/5 text-center">
                                <i data-lucide="users" class="size-6 text-gold mx-auto mb-2"></i>
                                <span class="text-xs uppercase tracking-widest text-white">Guest Count</span>
                            </div>
                            <div class="p-4 rounded-xl bg-black/40 border border-white/5 text-center">
                                <i data-lucide="clock" class="size-6 text-gold mx-auto mb-2"></i>
                                <span class="text-xs uppercase tracking-widest text-white">Duration</span>
                            </div>
                             <div class="p-4 rounded-xl bg-black/40 border border-white/5 text-center">
                                <i data-lucide="plus-circle" class="size-6 text-gold mx-auto mb-2"></i>
                                <span class="text-xs uppercase tracking-widest text-white">Add-ons</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-24 px-8 max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl serif text-white mb-6">Why Choose Our Private Theatre in Bangalore</h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto font-light">
                    With many options available, choosing the right private theatre in Bangalore can feel confusing. What really matters is comfort, privacy, pricing, and overall experience. Here’s why people prefer booking with us.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Image Side -->
                <div class="relative group overflow-hidden rounded-3xl">
                    <img src="{{ asset('images/image5.jpg') }}" alt="Private Cinema Room" class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 image-overlay flex flex-col justify-end p-8">
                        <h4 class="text-2xl text-gold serif mb-2">Premium Ambiance</h4>
                        <p class="text-gray-200 font-light">Designed for the ultimate cinematic escape in the heart of the city.</p>
                    </div>
                </div>

                <!-- Content Side Cards -->
                <div class="space-y-6">
                    <div class="feature-card p-6 rounded-2xl flex gap-5">
                        <div class="shrink-0"><i data-lucide="user-check" class="text-gold size-8"></i></div>
                        <div>
                            <h4 class="text-white text-xl serif mb-2">Complete Privacy, No Disturbance</h4>
                            <p class="text-gray-400 font-light text-sm">Our private theatres are truly private. Once you book, the entire room is reserved only for you and your group. No strangers, no noise, and no interruptions. This makes it perfect for couples, families, and celebrations.</p>
                        </div>
                    </div>
                    <div class="feature-card p-6 rounded-2xl flex gap-5">
                        <div class="shrink-0"><i data-lucide="sparkles" class="text-gold size-8"></i></div>
                        <div>
                            <h4 class="text-white text-xl serif mb-2">Clean, Comfortable & Well-Maintained</h4>
                            <p class="text-gray-400 font-light text-sm">We focus a lot on cleanliness and comfort. From seating to screens, everything is regularly cleaned and maintained. You get a safe and relaxed environment where you can enjoy without stress.</p>
                        </div>
                    </div>
                    <div class="feature-card p-6 rounded-2xl flex gap-5">
                        <div class="shrink-0"><i data-lucide="badge-check" class="text-gold size-8"></i></div>
                        <div>
                            <h4 class="text-white text-xl serif mb-2">Flexible Packages & Honest Pricing</h4>
                            <p class="text-gray-400 font-light text-sm">Unlike many places that hide costs, we offer clear packages with transparent pricing. Whether you want a simple movie night or a full celebration setup, you know exactly what you’re paying for.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <div class="feature-card p-8 rounded-3xl text-center border-2 border-gold">
                    <i data-lucide="message-square" class="text-gold size-10 mx-auto mb-4"></i>
                    <h4 class="text-white text-xl serif mb-3">Easy Booking & Friendly Support</h4>
                    <p class="text-gray-400 font-light text-sm">Booking a private movie theatre in Bangalore with us is simple. Our team is always available on call or WhatsApp to help you choose the right package and answer your questions.</p>
                </div>
                <div class="feature-card p-8 rounded-3xl text-center border-2 border-gold">
                    <i data-lucide="heart" class="text-gold size-10 mx-auto mb-4"></i>
                    <h4 class="text-white text-xl serif mb-3">Loved by Couples, Families & Groups</h4>
                    <p class="text-gray-400 font-light text-sm">Many of our bookings come from repeat customers and recommendations. People trust us for birthdays, anniversaries, date nights, and special moments because we focus on experience, not just bookings.</p>
                </div>
                <div class="bg-gold p-8 rounded-3xl flex flex-col justify-center items-center text-center">
                    <p class="text-black font-semibold text-lg serif mb-4 leading-snug">When you choose us, you’re choosing comfort, privacy, and a smooth experience from start to finish.</p>
                    <i data-lucide="award" class="text-black size-12"></i>
                </div>
            </div>
        </section>

        <!-- Reviews -->
        <section class="py-20 px-8 bg-[#121212]">
            <div class="max-w-5xl mx-auto">
                <div class="text-left mb-12 fade-in">
                    <h2 class="text-4xl serif text-white mb-4 text-center">Real Reviews from Our Customers</h2>
                    <p class="text-gray-400 font-light mb-4">Before booking a private theatre in Bangalore, most people want to know one thing — is it actually worth it? The answer comes best from people who have already experienced it.</p>
                    <p class="text-gray-400 font-light">Many of our customers book private theatres for special moments like birthdays, anniversaries, proposals, and date nights. What they love most is the privacy, comfort, and smooth overall experience.</p>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in">
                        <p class="font-light mb-4">"We booked a private theatre in Bangalore for a couple movie night, and the experience was really nice. The room was clean, the screen quality was good, and we had complete privacy. Much better than going to a crowded cinema."</p>
                        <p class="font-semibold text-gold">- Rahul S. ⭐⭐⭐⭐⭐</p>
                    </div>
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in">
                        <p class="font-light mb-4">"I booked this private theatre for my friend’s birthday celebration. The decorations were beautiful, and the staff helped us with everything. Everyone enjoyed the movie and the overall setup. Totally worth it."</p>
                        <p class="font-semibold text-gold">- Neha K. ⭐⭐⭐⭐⭐</p>
                    </div>
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in">
                        <p class="font-light mb-4">"Very smooth booking process and friendly support team. The private theatre was comfortable, and the sound system was amazing. Perfect place to spend quality time with friends."</p>
                        <p class="font-semibold text-gold">- Aman P. ⭐⭐⭐⭐⭐</p>
                    </div>
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in">
                        <p class="font-light mb-4">"We were looking for a private theatre near us in Bangalore, and this was a great choice. The place was clean, safe, and well maintained. It’s a good option for couples and families."</p>
                        <p class="font-semibold text-gold">- Pooja R. ⭐⭐⭐⭐⭐</p>
                    </div>
                    <div class="bg-[#1a1a1a] p-8 rounded-sm border border-white/10 fade-in">
                        <p class="font-light mb-4">"Had an amazing experience watching our favorite movie here. No disturbance, no rush, just a relaxed environment. I would definitely recommend this private movie theatre for special occasions."</p>
                        <p class="font-semibold text-gold">- Kunal M. ⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-24 px-8 max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl serif text-white mb-6">Frequently Asked Questions (FAQs)</h2>
            </div>

            <div class="space-y-4">
                <!-- Question 1 -->
                <div class="faq-item group cursor-pointer active">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">1. What is a private theatre in Bangalore?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">A private theatre is a personal movie room that you can book only for yourself and your group. Unlike regular cinemas, there are no strangers. You get full privacy, a big screen, and complete control over what you watch.</p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">2. How much does a private theatre in Bangalore cost?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">The cost of a private theatre in Bangalore depends on the number of people, duration, and any extra services like decorations or cake. Prices usually start at affordable rates for couples and increase based on the package you choose.</p>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">3. Is a private theatre safe for couples?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">Yes, private theatres are safe for couples. The rooms are fully private, clean, and secure. Many couples prefer private theatres because they offer a peaceful and comfortable environment without outside disturbance.</p>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">4. Can I celebrate a birthday in a private theatre?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">Yes, private theatres are a great choice for birthday celebrations. You can decorate the room, bring or order a cake, and enjoy a movie with your friends or family in a private space.</p>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">5. Do private theatres provide decorations and cakes?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">Most private theatres offer decoration options for birthdays, anniversaries, and surprises. Cakes and food add-ons are also available, or you may be allowed to bring your own cake with prior permission.</p>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">6. How many people can a private theatre accommodate?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">Private theatres usually accommodate small groups, starting from couples to around 10–15 people, depending on the room size and package selected.</p>
                    </div>
                </div>

                <!-- Question 7 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">7. Can we watch Netflix or other OTT platforms?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">Yes, you can watch content from OTT platforms like Netflix, Amazon Prime, or Hotstar in most private theatres. You can choose your favorite movie, series, or even sports content.</p>
                    </div>
                </div>

                <!-- Question 8 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">8. Are private theatres available near me in Bangalore?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">Private theatres are available in many popular areas of Bangalore, including Koramangala, Indiranagar, Whitefield, HSR Layout, and Jayanagar. You can choose a location that is closest to you.</p>
                    </div>
                </div>

                <!-- Question 9 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">9. How early should I book a private theatre?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">It’s best to book a private theatre at least a few days in advance, especially for weekends, evenings, or special occasions. Early booking helps you get your preferred time slot.</p>
                    </div>
                </div>

                <!-- Question 10 -->
                <div class="faq-item group cursor-pointer">
                    <div class="w-full py-6 flex items-center justify-between text-left">
                        <span class="text-lg text-white font-medium group-hover:text-gold transition-colors">10. Is a private theatre better than a regular multiplex?</span>
                        <i data-lucide="chevron-down" class="faq-icon text-gold transition-transform duration-300"></i>
                    </div>
                    <div class="faq-content text-gray-400 font-light leading-relaxed">
                        <p class="pb-6">A private theatre offers more privacy, comfort, and flexibility compared to a multiplex. You can watch what you want, celebrate freely, and enjoy the experience without crowds or noise.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <style>
        .faq-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }
        .faq-item.active .faq-content {
            max-height: 20rem; /* A generous max-height for content */
        }
        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                item.addEventListener('click', () => {
                    const wasActive = item.classList.contains('active');

                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('active');
                    });

                    if (!wasActive) {
                        item.classList.add('active');
                    }
                });
            });
        });
    </script>
@endsection
