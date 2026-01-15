@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-[#1a1a1a] p-8 sm:p-10 rounded-xl shadow-lg text-center">
            
            <div>
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-900">
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-center text-white mt-5">
                    Payment Failed
                </h1>
                <p class="mt-2 text-center text-sm text-gray-400">
                    Unfortunately, we could not process your booking. Please try again.
                </p>
            </div>

            <div>
                <a href="/booking" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-lg font-bold text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-transform transform hover:scale-105">
                    Try Again
                </a>
            </div>

        </div>
    </main>
@endsection
