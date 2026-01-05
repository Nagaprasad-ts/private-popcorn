<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Booking | {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full font-sans antialiased text-gray-800 selection:bg-red-100">
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl w-full space-y-8 bg-white p-8 sm:p-12 rounded-2xl shadow-2xl border border-gray-100">
                <!-- Header Section -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center mb-4 text-red-600">
                        <img src="{{ asset('storage/privatepopcorn.webp') }}" alt="Private Popcorn Logo" class="size-16"/>
                    </div>
                    <h1 class="text-4xl font-black tracking-tight text-gray-900">
                        Book Your <span class="text-red-600">Private</span> Theatre
                    </h1>
                    <p class="mt-3 text-gray-500 max-w-xs mx-auto text-sm leading-relaxed">
                        A cinematic escape designed for you. Select your preferences below.
                    </p>
                </div>

                <form class="mt-10 space-y-8" onsubmit="event.preventDefault();">
                    <!-- Theatre Selection (Visual Radio Buttons) -->
                    <div>
                        <label class="block text-md font-bold uppercase tracking-wider text-blue-600 mb-4">Choose Your Venue</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            @foreach ($theatres as $theatre)
                                <label class="relative group">
                                    <input type="radio" name="theatre" value="{{ $theatre->id }}" data-price="{{ $theatre->offer_price }}" class="peer sr-only" required>
                                    <div class="pb-4 bg-white border-2 border-gray-200 rounded-xl cursor-pointer text-center transition-all peer-checked:border-red-600 peer-checked:bg-red-50 hover:border-red-200">
                                        <img src="{{ asset('storage/' . $theatre->image) }}" alt="{{ $theatre->name }}" class="w-full h-32 object-cover mb-3 rounded-t-lg">
                                        <div class="mt-2 flex flex-row items-center justify-around space-x-2">
                                            <span class="block text-md font-semibold text-gray-700 peer-checked:text-red-700 text-left">{{ $theatre->name }}</span>
                                            <div class="text-right flex flex-row items-baseline justify-end space-x-2">
                                                <span class="block text-xs text-gray-500 line-through mt-1">₹{{ $theatre->base_price }}</span>
                                                <span class="block text-lg text-gray-800 font-bold mt-1 uppercase">₹{{ $theatre->offer_price }}</span>
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
                            <label for="date" class="block text-md font-bold uppercase tracking-wider text-blue-600 mb-2">Booking Date</label>
                            <input type="date" id="date" required class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="block text-md font-bold uppercase tracking-wider text-blue-600 mb-2">Preferred Slot</label>
                        <div id="slot-selection" class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            <!-- Slots will be loaded here by JavaScript -->
                        </div>
                    </div>

                    {{-- Customer Details --}}
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div>
                            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-2">Full Name</label>
                            <input type="text" id="name" required message="Please enter your full name" class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white transition-colors">
                        </div>
                        <div>
                            <label for="contact_no" class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-2">Contact Number</label>
                            <input type="text" id="contact_no" required pattern="[0-9]{10}" message="Please enter a valid 10-digit phone number" class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white transition-colors">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-2">Email Address</label>
                            <input type="email" id="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" message="Please enter a valid email address" class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white transition-colors">
                        </div>
                    </div>

                    <!-- Purpose & Add-ons -->
                    <div class="space-y-6">
                        <div>
                            <label for="purpose" class="block text-md font-bold uppercase tracking-wider text-blue-600 mb-2">Event Type</label>
                            <select id="purpose" class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white" required>
                                <option value="" disabled selected>Select an Event Type</option>
                                @foreach ($eventTypes as $eventType)
                                    <option value="{{ $eventType->id }}">{{ $eventType->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-md font-bold uppercase tracking-wider text-blue-600 mb-3">Optional Add Ons</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                @foreach ($addons as $addon)
                                    <label class="flex items-center p-3 border border-gray-200 rounded-xl bg-gray-50 cursor-pointer hover:bg-white transition-all">
                                        <input
                                            id="addon{{ $addon->id }}"
                                            name="addon"
                                            type="checkbox"
                                            data-id="{{ $addon->id }}"
                                            data-name="{{ $addon->name }}"
                                            data-price="{{ $addon->price }}"
                                            class="addon-checkbox h-5 w-5 rounded-md border-gray-300 text-red-600 focus:ring-blue-500"
                                        >
                                        <span class="ml-3 text-sm text-gray-700 font-medium">{{ $addon->name }} (₹{{ $addon->price }})</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-md font-bold text-gray-600">Grand Total</span>
                            <span id="total-price" class="text-3xl font-black text-gray-900">₹0</span>
                        </div>
                        <div class="flex flex-col md:flex-row space-y-2 md:space-x-2 items-center md:items-stretch justify-center">
                            <button type="button" onclick="initiatePayment('partial')" class="group relative w-full flex items-center justify-center py-4 px-6 border border-transparent rounded-2xl shadow-xl text-lg font-black text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200 transition-all active:scale-[0.98]">
                                Pay 30% Advance
                            </button>
                            <button type="button" onclick="initiatePayment('full')" class="group relative w-full flex items-center justify-center py-4 px-6 border border-transparent rounded-2xl shadow-xl text-lg font-black text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-200 transition-all active:scale-[0.98]">
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
        </div>

        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

        <script>
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
                            div.classList.add('p-4', 'bg-white', 'border-2', 'rounded-xl', 'cursor-pointer', 'text-center', 'transition-all');

                            const spanSlot = document.createElement('span');
                            spanSlot.classList.add('block', 'text-sm', 'font-bold', 'text-gray-700');
                            spanSlot.textContent = slotData.slot;

                            const spanStatus = document.createElement('span');
                            spanStatus.classList.add('block', 'text-[10px]', 'mt-1', 'uppercase');

                            let isPastSlot = false;
                            
                            if (!slotData.available) {
                                input.disabled = true;
                                div.classList.add(
                                    'border-red-600',    // make border red
                                    'bg-red-100',        // light red background
                                    'text-red-700',      // strong red text
                                    'line-through',
                                    'cursor-not-allowed' // indicate non-interactive
                                );
                                spanStatus.classList.add('text-red-700', 'font-bold'); // bold and bright red
                                spanStatus.textContent = 'Booked';
                            } else {
                                div.classList.add(
                                    'border-gray-200',
                                    'hover:border-blue-200',
                                    'peer-checked:border-green-600',
                                    'peer-checked:bg-green-50'
                                );
                                spanSlot.classList.add('peer-checked:text-red-700');
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
    </body>
</html>
