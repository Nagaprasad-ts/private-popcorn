<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <body class="h-full font-sans antialiased text-gray-800 selection:bg-red-100">
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl w-full space-y-8 bg-white p-8 sm:p-12 rounded-2xl shadow-2xl border border-gray-100">
                <!-- Header Section -->
                <div class="text-center">
                    <div class="inline-flex items-center justify-center p-3 mb-4 rounded-full bg-red-50 text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                        </svg>
                    </div>
                    <h1 class="text-4xl font-black tracking-tight text-gray-900">
                        Book Your <span class="text-red-600">Private</span> Theatre
                    </h1>
                    <p class="mt-3 text-gray-500 max-w-xs mx-auto text-sm leading-relaxed">
                        A cinematic escape designed for you. Select your preferences below.
                    </p>
                </div>

                <form class="mt-10 space-y-8" onsubmit="event.preventDefault(); pay();">
                    <!-- Theatre Selection (Visual Radio Buttons) -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-4">Step 1: Choose Your Venue</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <label class="relative group">
                                <input type="radio" name="theatre" value="Theatre A" class="peer sr-only" required>
                                <div class="p-4 bg-white border-2 border-gray-200 rounded-xl cursor-pointer text-center transition-all peer-checked:border-red-600 peer-checked:bg-red-50 hover:border-red-200">
                                    <span class="block text-sm font-bold text-gray-700 peer-checked:text-red-700">Studio One</span>
                                    <span class="block text-[10px] text-gray-400 mt-1 uppercase">2-4 People</span>
                                </div>
                            </label>
                            <label class="relative group">
                                <input type="radio" name="theatre" value="Theatre B" class="peer sr-only">
                                <div class="p-4 bg-white border-2 border-gray-200 rounded-xl cursor-pointer text-center transition-all peer-checked:border-red-600 peer-checked:bg-red-50 hover:border-red-200">
                                    <span class="block text-sm font-bold text-gray-700 peer-checked:text-red-700">Cinema Pro</span>
                                    <span class="block text-[10px] text-gray-400 mt-1 uppercase">4-8 People</span>
                                </div>
                            </label>
                            <label class="relative group">
                                <input type="radio" name="theatre" value="Theatre C" class="peer sr-only">
                                <div class="p-4 bg-white border-2 border-gray-200 rounded-xl cursor-pointer text-center transition-all peer-checked:border-red-600 peer-checked:bg-red-50 hover:border-red-200">
                                    <span class="block text-sm font-bold text-gray-700 peer-checked:text-red-700">Grand Hall</span>
                                    <span class="block text-[10px] text-gray-400 mt-1 uppercase">8-15 People</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Date and Time -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="date" class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-2">Booking Date</label>
                            <input type="date" id="date" required class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white transition-colors">
                        </div>
                        <div>
                            <label for="slot" class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-2">Preferred Slot</label>
                            <select id="slot" class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white transition-colors">
                                <option>Morning (10 AM - 1 PM)</option>
                                <option>Afternoon (2 PM - 5 PM)</option>
                                <option>Evening (6 PM - 9 PM)</option>
                                <option>Late Night (10 PM - 1 AM)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Purpose & Add-ons -->
                    <div class="space-y-6">
                        <div>
                            <label for="purpose" class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-2">Event Type</label>
                            <select id="purpose" class="block w-full px-4 py-3 rounded-xl border-gray-200 bg-gray-50 text-sm focus:bg-white">
                                <option value="Movie Screening">🎬 Movie Screening</option>
                                <option value="Private Event">🎉 Private Celebration</option>
                                <option value="Corporate Event">💼 Corporate Meeting</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-blue-600 mb-3">Optional Enhancements</label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <label class="flex items-center p-3 border border-gray-200 rounded-xl bg-gray-50 cursor-pointer hover:bg-white transition-all">
                                    <input id="addon1" name="addon" type="checkbox" value="Popcorn" class="h-5 w-5 rounded-md border-gray-300 text-red-600 focus:ring-blue-500">
                                    <span class="ml-3 text-sm text-gray-700 font-medium">Popcorn</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-xl bg-gray-50 cursor-pointer hover:bg-white transition-all">
                                    <input id="addon2" name="addon" type="checkbox" value="Drinks" class="h-5 w-5 rounded-md border-gray-300 text-red-600 focus:ring-blue-500">
                                    <span class="ml-3 text-sm text-gray-700 font-medium">Beverages</span>
                                </label>
                                <label class="flex items-center p-3 border border-gray-200 rounded-xl bg-gray-50 cursor-pointer hover:bg-white transition-all">
                                    <input id="addon3" name="addon" type="checkbox" value="3D Glasses" class="h-5 w-5 rounded-md border-gray-300 text-red-600 focus:ring-blue-500">
                                    <span class="ml-3 text-sm text-gray-700 font-medium">3D Setup</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="price" value="1200">

                    <!-- CTA Section -->
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between mb-6">
                            <span class="text-sm font-semibold text-gray-400">Total Investment</span>
                            <span class="text-3xl font-black text-gray-900">₹1,200</span>
                        </div>
                        <button type="submit" class="group relative w-full flex items-center justify-center py-4 px-6 border border-transparent rounded-2xl shadow-xl text-lg font-black text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-200 transition-all active:scale-[0.98]">
                            Confirm & Pay Securely
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                        <p class="mt-4 text-center text-[11px] text-gray-400 font-medium uppercase tracking-widest">
                            Secure SSL Encrypted Payment via <span class="text-blue-500">Razorpay</span>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <script>
            // The rest of your script remains unchanged.
            // Make sure to add the @csrf token in a meta tag if you are extracting this to a separate JS file.
            function getSelectedAddons() {
                const addons = document.querySelectorAll('input[name="addon"]:checked');
                let selectedAddons = [];
                addons.forEach((checkbox) => {
                    selectedAddons.push(checkbox.value);
                });
                return selectedAddons.join(', ');
            }


            function pay() {
                const selectedTheatreEl = document.querySelector('input[name="theatre"]:checked');
                if (!selectedTheatreEl) {
                    alert('Please select a theatre.');
                    return;
                }
                const theatre_name = selectedTheatreEl.value;


                const booking_date = document.getElementById('date').value;
                if (!booking_date) {
                    alert('Please select a date.');
                    return;
                }


                const slot = document.getElementById('slot').value;
                const purpose = document.getElementById('purpose').value;
                const addon = getSelectedAddons();
                const total_price = document.getElementById('price').value;


                fetch('/create-order', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({}) // No need to send price
                })
                .then(res => {
                    if (!res.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return res.json();
                })
                .then(order => {
                    var options = {
                        key: "{{ env('RAZORPAY_KEY') }}",
                        amount: order.amount,
                        currency: "INR",
                        order_id: order.id,
                        handler: function (response) {
                            fetch('/save-booking', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    theatre_name: theatre_name,
                                    booking_date: booking_date,
                                    slot: slot,
                                    purpose: purpose,
                                    addon: addon,
                                    total_price: total_price,
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
                                window.location.href = '/booking/failed';
                            }
                        }
                    };
                    var rzp = new Razorpay(options);
                    rzp.on('payment.failed', function (response){
                            window.location.href = '/booking/failed';
                    });
                    rzp.open();
                })
                .catch(error => {
                    console.error('Error creating order:', error);
                    alert('Could not initiate payment. Please try again.');
                });
            }
        </script>
    </body>
</html>
