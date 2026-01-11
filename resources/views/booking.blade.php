<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} | Booking</title>

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
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <main class="pt-32">
            <div class="max-w-4xl w-full space-y-8 p-8 sm:p-12 rounded-2xl mx-auto">
                <!-- Header Section -->
                <div class="text-center">
                    <h1 class="text-4xl font-black tracking-tight text-white">
                        Book Your <span class="text-gold">Private</span> Theatre
                    </h1>
                    <p class="mt-3 text-gray-300 max-w-xs mx-auto text-sm leading-relaxed">
                        A cinematic escape designed for you. Select your preferences below.
                    </p>
                </div>

                <form class="mt-10 space-y-8" onsubmit="event.preventDefault();">
                    <!-- Theatre Selection (Visual Radio Buttons) -->
                    <div>
                        <label class="block text-md font-bold uppercase tracking-wider text-gold mb-4">Choose Your Venue</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            @foreach ($theatres as $theatre)
                                <label class="relative group">
                                    <input type="radio" name="theatre" value="{{ $theatre->id }}" data-price="{{ $theatre->offer_price }}" class="peer sr-only" required>
                                    <div class="pb-4 bg-[#1a1a1a] border-2 border-gray-700 rounded-xl cursor-pointer text-center transition-all peer-checked:border-gold peer-checked:bg-gray-800 hover:border-gold">
                                        <img src="{{ asset('storage/' . $theatre->image) }}" alt="{{ $theatre->name }}" class="w-full h-42 object-cover mb-3 rounded-t-lg">
                                        <div class="mt-2 flex flex-row items-center justify-around space-x-2">
                                            <span class="block text-md font-semibold text-gray-300 peer-checked:text-gold text-left">{{ $theatre->name }}</span>
                                            <div class="text-right flex flex-row items-baseline justify-end space-x-2">
                                                <span class="block text-xs text-gray-400 line-through mt-1">₹{{ $theatre->base_price }}</span>
                                                <span class="block text-lg text-gray-200 font-bold mt-1 uppercase">₹{{ $theatre->offer_price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Date and Time -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="date" class="block text-md font-bold uppercase tracking-wider text-gold mb-2">Booking Date</label>
                            <input type="date" id="date" required class="block w-full px-4 py-3 rounded-xl border-gray-700 bg-[#1a1a1a] text-sm text-white focus:bg-gray-800 transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-md font-bold uppercase tracking-wider text-gold mb-2">Preferred Slot</label>
                        <div id="slot-selection" class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            <!-- Slots will be loaded here by JavaScript -->
                        </div>
                    </div>

                    {{-- Customer Details --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div>
                            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-gold mb-2">Full Name</label>
                            <input type="text" id="name" required message="Please enter your full name" class="block w-full px-4 py-3 rounded-xl border-gray-700 bg-[#1a1a1a] text-sm text-white focus:bg-gray-800 transition-colors">
                        </div>
                        <div>
                            <label for="contact_no" class="block text-xs font-bold uppercase tracking-wider text-gold mb-2">Contact Number</label>
                            <input type="text" id="contact_no" required pattern="[0-9]{10}" message="Please enter a valid 10-digit phone number" class="block w-full px-4 py-3 rounded-xl border-gray-700 bg-[#1a1a1a] text-sm text-white focus:bg-gray-800 transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-gold mb-2">Email Address</label>
                            <input type="email" id="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" message="Please enter a valid email address" class="block w-full px-4 py-3 rounded-xl border-gray-700 bg-[#1a1a1a] text-sm text-white focus:bg-gray-800 transition-colors">
                        </div>
                    </div>

                    <!-- Purpose & Add-ons -->
                    <div class="space-y-6">
                        <div>
                            <label for="purpose" class="block text-md font-bold uppercase tracking-wider text-gold mb-2">Event Type</label>
                            <select id="purpose" class="block w-full px-4 py-3 rounded-xl border-gray-700 bg-[#1a1a1a] text-sm text-white focus:bg-gray-800" required>
                                <option value="" disabled selected>Select an Event Type</option>
                                @foreach ($eventTypes as $eventType)
                                    <option value="{{ $eventType->id }}">{{ $eventType->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-md font-bold uppercase tracking-wider text-gold mb-3">Optional Add Ons</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                @foreach ($addons as $addon)
                                    <label class="flex items-center p-3 border border-gray-700 rounded-xl bg-[#1a1a1a] cursor-pointer hover:bg-gray-800 transition-all">
                                        <input
                                            id="addon{{ $addon->id }}"
                                            name="addon"
                                            type="checkbox"
                                            data-id="{{ $addon->id }}"
                                            data-name="{{ $addon->name }}"
                                            data-price="{{ $addon->price }}"
                                            class="addon-checkbox h-5 w-5 rounded-md border-gray-600 text-gold focus:ring-gold"
                                        >
                                        <span class="ml-3 text-sm text-gray-300 font-medium">{{ $addon->name }} (₹{{ $addon->price }})</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="pt-4 border-t border-gray-800">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-md font-bold text-gray-300">Grand Total</span>
                            <span id="total-price" class="text-3xl font-black text-white">₹0</span>
                        </div>
                        <div class="flex flex-col md:flex-row space-y-2 md:space-x-2 items-center md:items-stretch justify-center">
                            <button type="button" onclick="initiatePayment('partial')" class="group relative w-full flex items-center justify-center py-4 px-6 border border-transparent rounded-2xl shadow-xl text-lg font-black text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200 transition-all active:scale-[0.98]">
                                Reserve @ ₹300/-
                            </button>
                            <button type="button" onclick="initiatePayment('full')" class="group relative w-full flex items-center justify-center py-4 px-6 border border-transparent rounded-2xl shadow-xl text-lg font-black text-gray-800 bg-gold hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-200 transition-all active:scale-[0.98]">
                                Confirm & Pay Securely
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                        <p class="mt-4 text-center text-[11px] text-gray-400 font-medium uppercase tracking-widest">
                            Secure SSL Encrypted Payment via <span class="text-blue-500">Razorpay</span>
                        </p>
                    </div>
                </form>
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

        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

        <script>
            // The existing javascript from booking.blade.php
            document.addEventListener('DOMContentLoaded', function () {
                const theatreRadios = document.querySelectorAll('input[name="theatre"]');
                const dateInput = document.getElementById('date');
                const slotSelection = document.getElementById('slot-selection');
                const priceDisplay = document.getElementById('total-price');
                const addonCheckboxes = document.querySelectorAll('.addon-checkbox');

                let basePrice = 0;
                let addonTotal = 0;

                function updateTotalPrice() {
                    const total = basePrice + addonTotal;
                    priceDisplay.textContent = `₹${total}`;
                }

                // Initially disable date and slot inputs
                dateInput.disabled = true;
                slotSelection.innerHTML = '<p class="text-gray-400 text-sm col-span-full">Select a date first</p>';
                slotSelection.classList.add('pointer-events-none', 'opacity-50');

                // Set minimum date for date input to today
                const today = new Date();
                const yyyy = today.getFullYear();
                const mm = String(today.getMonth() + 1).padStart(2, '0');
                const dd = String(today.getDate()).padStart(2, '0');
                const minDate = `${yyyy}-${mm}-${dd}`;
                dateInput.setAttribute('min', minDate);


                // Function to fetch and populate available slots
                async function fetchAvailableSlots() {
                    const selectedTheatreEl = document.querySelector('input[name="theatre"]:checked');
                    const bookingDate = dateInput.value;

                    if (!selectedTheatreEl || !bookingDate) {
                        return;
                    }

                    const theatreId = selectedTheatreEl.value;

                    try {
                        const response = await fetch(`/get-available-slots?theatre_id=${theatreId}&booking_date=${bookingDate}`);
                        if (!response.ok) {
                            throw new Error('Failed to fetch available slots.');
                        }
                        const availableSlots = await response.json();

                        // Clear existing slots
                        slotSelection.innerHTML = '';
                        slotSelection.classList.remove('pointer-events-none', 'opacity-50');


                        // Populate slots
                        if (availableSlots.length === 0) {
                            slotSelection.innerHTML = '<p class="text-gray-400 text-md col-span-full">No slots available for this date.</p>';
                            slotSelection.classList.add('pointer-events-none', 'opacity-50');
                            return;
                        }

                        availableSlots.forEach(slotData => {
                            const label = document.createElement('label');
                            label.classList.add('relative', 'group');

                            const input = document.createElement('input');
                            input.type = 'radio';
                            input.name = 'slot';
                            input.value = slotData.slot;
                            input.classList.add('peer', 'sr-only');
                            input.required = true;
                            input.setAttribute('data-slot-value', slotData.slot); // Store slot value

                            const div = document.createElement('div');
                            div.classList.add('p-4', 'bg-[#1a1a1a]', 'border-2', 'rounded-xl', 'cursor-pointer', 'text-center', 'transition-all', 'border-gray-700', 'hover:border-gold', 'peer-checked:border-gold', 'peer-checked:bg-gray-800');

                            const spanSlot = document.createElement('span');
                            spanSlot.classList.add('block', 'text-sm', 'font-bold', 'text-gray-300');
                            spanSlot.textContent = slotData.slot;

                            const spanStatus = document.createElement('span');
                            spanStatus.classList.add('block', 'text-[10px]', 'mt-1', 'uppercase');

                            let isPastSlot = false;
                            
                            if (!slotData.available) {
                                input.disabled = true;
                                div.classList.add(
                                    'border-red-600',    // make border red
                                    'bg-red-900',        // light red background
                                    'text-red-300',      // strong red text
                                    'line-through',
                                    'cursor-not-allowed' // indicate non-interactive
                                );
                                spanStatus.classList.add('text-red-300', 'font-bold'); // bold and bright red
                                spanStatus.textContent = 'Booked';
                            } else {
                                spanSlot.classList.add('peer-checked:text-gold');
                                spanStatus.classList.add('text-green-500');
                                spanStatus.textContent = 'Available';
                            }

                            div.appendChild(spanSlot);
                            div.appendChild(spanStatus);
                            label.appendChild(input);
                            label.appendChild(div);
                            slotSelection.appendChild(label);
                        });

                    } catch (error) {
                        console.error('Error fetching available slots:', error);
                        slotSelection.innerHTML = '<p class="text-red-500 text-sm col-span-full">Error loading slots. Please try again.</p>';
                        slotSelection.classList.add('pointer-events-none', 'opacity-50');
                    }
                }

                theatreRadios.forEach(radio => {
                    radio.addEventListener('change', function () {
                        if (this.checked) {
                            basePrice = parseFloat(this.getAttribute('data-price')) || 0;

                            // Reset addons when theatre changes
                            addonTotal = 0;
                            document.querySelectorAll('.addon-checkbox').forEach(cb => cb.checked = false);

                            updateTotalPrice();

                            dateInput.disabled = false;
                            dateInput.value = '';
                            slotSelection.innerHTML =
                                '<p class="text-gray-400 text-sm col-span-full">Select a date first</p>';
                            slotSelection.classList.add('pointer-events-none', 'opacity-50');
                        }
                    });
                });

                addonCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', function () {
                        const price = parseFloat(this.getAttribute('data-price')) || 0;

                        if (this.checked) {
                            addonTotal += price;
                        } else {
                            addonTotal -= price;
                        }

                        updateTotalPrice();
                    });
                });

                dateInput.addEventListener('change', function () {
                    if (this.value) {
                        fetchAvailableSlots(); // Fetch slots when date is selected
                    } else {
                        slotSelection.innerHTML = '<p class="text-gray-400 text-sm col-span-full">Select a date first</p>';
                        slotSelection.classList.add('pointer-events-none', 'opacity-50');
                    }
                });
            });

            function getSelectedAddons() {
                const addons = document.querySelectorAll('input[name="addon"]:checked');
                let selectedAddons = [];
                let addonsTotal = 0;

                addons.forEach((checkbox) => {
                    const [name, price] = checkbox.value.split('|'); // we'll store value as "Popcorn|150"
                    selectedAddons.push(name.trim());
                    addonsTotal += parseFloat(price);
                });

                return { names: selectedAddons.join(', '), total: addonsTotal };
            }


            function initiatePayment(paymentType) {
                const selectedTheatreEl = document.querySelector('input[name="theatre"]:checked');
                if (!selectedTheatreEl) {
                    alert('Please select a theatre.');
                    return;
                }

                const theatre_id = selectedTheatreEl.value;
                const theatre_name = selectedTheatreEl.closest('label').querySelector('span.block.text-md').textContent;

                // Parse theatre price as float
                let total_price = parseFloat(selectedTheatreEl.getAttribute('data-price'));

                // Get selected addons
                const addonCheckboxes = document.querySelectorAll('input[name="addon"]:checked');
                const addonIds = [];
                const addonNames = [];
                let addonsTotal = 0;

                addonCheckboxes.forEach(cb => {
                    addonIds.push(cb.dataset.id);           // send IDs to backend
                    addonNames.push(cb.dataset.name);       // for display / saving
                    addonsTotal += parseFloat(cb.dataset.price); // sum prices
                });

                total_price += addonsTotal;

                // Contact info
                const name = document.getElementById('name').value;
                const phone = document.getElementById('contact_no').value;
                const email = document.getElementById('email').value;

                if (!name || !phone || !email) {
                    alert('Please fill all contact details');
                    return;
                }

                // Client-side phone number validation
                const phonePattern = /^[0-9]{10}$/;
                if (!phonePattern.test(phone)) {
                    alert('Please enter a valid 10-digit phone number.');
                    return;
                }

                const booking_date = document.getElementById('date').value;
                if (!booking_date) {
                    alert('Please select a date.');
                    return;
                }

                const selectedSlotEl = document.querySelector('input[name="slot"]:checked');
                if (!selectedSlotEl || selectedSlotEl.disabled) {
                    alert('Please select an available slot.');
                    return;
                }
                const slot = selectedSlotEl.value;

                const purposeSelect = document.getElementById('purpose');
                const purpose = purposeSelect.options[purposeSelect.selectedIndex].text;

                // Create Razorpay order
                fetch('/create-order', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        theatre_id: theatre_id,
                        addons: addonIds,
                        payment_type: paymentType
                    })
                })
                .then(res => {
                    if (!res.ok) {
                        return res.text().then(text => { throw new Error(text) });
                    }
                    return res.json();
                })
                .then(order => {
                    var options = {
                        key: "{{ env('RAZORPAY_KEY') }}",
                        amount: order.amount, // from server
                        currency: "INR",
                        order_id: order.id,
                        name: "{{ env('APP_NAME') }}",
                        description: "Booking Payment",
                        handler: function(response) {
                            // Successful payment
                            fetch('/save-booking', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    theatre_id: theatre_id,
                                    theatre_name: theatre_name,
                                    name: name,
                                    contact_no: phone,
                                    email: email,
                                    booking_date: booking_date,
                                    slot: slot,
                                    purpose: purpose,
                                    addon: addonNames,
                                    total_price: order.paid_amount, // send paid amount
                                    razorpay_payment_id: response.razorpay_payment_id,
                                    razorpay_order_id: response.razorpay_order_id,
                                    razorpay_signature: response.razorpay_signature
                                })
                            })
                            .then(res => res.json())
                            .then(data => {
                                if(data.success) {
                                    window.location.href = `/booking/success?booking_id=${data.booking_id}`;
                                } else {
                                    window.location.href = '/booking/failed';
                                }
                            })
                            .catch(error => {
                                console.error('Error saving booking:', error);
                                window.location.href = '/booking/failed';
                            });
                        },
                        modal: {
                            ondismiss: function() {
                                // Only called if user closes modal without paying
                                window.location.href = '/booking/failed';
                            }
                        }
                    };

                    var rzp = new Razorpay(options);

                    // Only for failed payment events triggered by Razorpay
                    rzp.on('payment.failed', function(response){
                        console.error('Razorpay payment failed:', response);
                        window.location.href = '/booking/failed';
                    });

                    rzp.open();
                })
                .catch((error) => {
                    console.error('Could not initiate payment. Server response:', error.message);
                    alert('Could not initiate payment. Please try again. Check the browser console for more details.');
                });
            }
        </script>
        <script>
            // Initialize Lucide Icons
            lucide.createIcons();

            // Navbar Scroll Effect
            window.addEventListener("scroll", () => {
                const nav = document.getElementById("navbar");
                if (window.scrollY > 80) {
                nav.classList.add("nav-scrolled");
                } else {
                nav.classList.remove("nav-scrolled");
                }
            });

            // Intersection Observer for Animations
            const observerOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px",
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
                });
            }, observerOptions);

            document.querySelectorAll(".fade-in").forEach((el) => {
                observer.observe(el);
            });

            // Add slow zoom animation dynamically
            const style = document.createElement("style");
            style.innerHTML = `
                    @keyframes slowZoom {
                        0% { transform: scale(1); }
                        100% { transform: scale(1.15); }
                    }
                    .animate-slow-zoom {
                        animation: slowZoom 25s infinite alternate ease-in-out;
                    }
                `;
            document.head.appendChild(style);
        </script>
  </body>
</html>