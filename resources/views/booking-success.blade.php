@extends('layouts.app')

@section('content')
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
@endsection
