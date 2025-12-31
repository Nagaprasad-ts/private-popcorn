<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Successful | Private Theatre</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom colors based on the 60-30-10 rule */
        :root {
            --primary-red: #E11D48; /* Tailwind Rose-600 */
            --primary-red-dark: #BE123C; /* Tailwind Rose-700 */
            --accent-blue: #1E3A8A; /* Tailwind Blue-900 */
        }
        .bg-brand-red { background-color: var(--primary-red); }
        .text-brand-red { color: var(--primary-red); }
        .bg-brand-blue { background-color: var(--accent-blue); }
        .text-brand-blue { color: var(--accent-blue); }
        .border-brand-blue { border-color: var(--accent-blue); }
    </style>
</head>
<body class="font-sans antialiased bg-white selection:bg-rose-100">
    <!-- 60% White/Light Background -->
    <div class="min-h-screen flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        
        <!-- Decorative Header Bar (10% Blue Accent) -->
        <div class="w-full max-w-lg h-2 bg-brand-blue rounded-t-2xl shadow-sm"></div>

        <div class="max-w-lg w-full bg-white px-8 pt-10 pb-12 rounded-b-2xl shadow-2xl border-x border-b border-gray-100 relative overflow-hidden">
            
            <!-- Subtle Watermark -->
            <div class="absolute -top-10 -right-10 opacity-5">
                <svg class="h-40 w-40 text-brand-blue" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M21 6h-7.59l3.29-3.29L16.29 2.29 11.59 7H3a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2zm0 15H3V9h18v12zM8 11h2v2H8v-2zm0 4h2v2H8v-2zm4-4h2v2h-2v-2zm0 4h2v2h-2v-2zm4-4h2v2h-2v-2zm0 4h2v2h-2v-2z"/>
                </svg>
            </div>

            <div class="relative">
                <!-- Status Icon (Red/White Mix) -->
                <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-rose-50 border-4 border-white shadow-md ring-1 ring-rose-100">
                    <svg class="h-10 w-10 text-brand-red" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                </div>

                <!-- Header -->
                <div class="text-center mt-6">
                    <h1 class="text-3xl font-black tracking-tight text-gray-900 uppercase italic">
                        Booking <span class="text-brand-red">Confirmed!</span>
                    </h1>
                </div>

                <!-- Details Section -->
                <div class="mt-10 space-y-1">
                    <div class="flex justify-between items-center py-4 border-b border-dashed border-gray-200">
                        <span class="text-xs font-bold text-brand-blue uppercase tracking-widest">Theatre</span>
                        <span class="text-sm font-semibold text-gray-800">{{ $booking->theatre_name }}</span>
                    </div>
                    
                    <div class="flex justify-between items-center py-4 border-b border-dashed border-gray-200">
                        <span class="text-xs font-bold text-brand-blue uppercase tracking-widest">Date & Slot</span>
                        <span class="text-sm font-semibold text-gray-800">{{ $booking->booking_date }} &mdash; {{ $booking->slot }}</span>
                    </div>

                    <div class="flex justify-between items-center py-4 border-b border-dashed border-gray-200">
                        <span class="text-xs font-bold text-brand-blue uppercase tracking-widest">Purpose</span>
                        <span class="text-sm font-semibold text-gray-800">{{ $booking->purpose }}</span>
                    </div>

                     @if($booking->addon)
                        <div class="flex justify-between items-center py-4 border-b border-dashed border-gray-200">
                            <dt class="text-xs font-bold text-brand-blue uppercase tracking-widest">Add-ons</dt>
                            <dd class="text-sm font-semibold text-gray-800">{{ $booking->addon }}</dd>
                        </div>
                    @endif

                    <!-- Total Price Highlight (Red Theme) -->
                    <div class="flex justify-between items-center py-6">
                        <span class="text-sm font-bold text-gray-900">Total Paid</span>
                        <span class="text-2xl font-black text-brand-red">₹{{ $booking->total_price }}</span>
                    </div>
                </div>

                <!-- Action Buttons (30% Red dominance here) -->
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <a href="{{ url('/booking/receipt/' . $booking->id) }}" class="flex items-center justify-center px-6 py-4 bg-brand-red hover:bg-brand-red-dark text-white rounded-xl font-bold shadow-lg shadow-rose-200 transition-all active:scale-95 group">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Get Receipt
                    </a>

                    <a href="/booking" class="flex items-center justify-center px-6 py-4 bg-white border-2 border-brand-blue text-brand-blue hover:bg-blue-50 rounded-xl font-bold transition-all active:scale-95">
                        Book Another
                    </a>
                </div>

                <!-- Support Text -->
                <p class="mt-8 text-center text-xs text-gray-400 font-medium">
                    A confirmation email has been sent to your registered address.<br/>
                    Need help? <a href="#" class="text-brand-blue underline decoration-brand-red underline-offset-4">Contact Support</a>
                </p>
            </div>
        </div>

        <!-- Footer Logo/Tagline -->
        <div class="mt-8 flex items-center space-x-2">
            <div class="h-1 w-8 bg-brand-red"></div>
            <span class="text-[10px] uppercase tracking-[0.3em] font-black text-brand-red">Private Popcorn</span>
            <div class="h-1 w-8 bg-brand-red"></div>
        </div>
    </div>
</body>
</html>

