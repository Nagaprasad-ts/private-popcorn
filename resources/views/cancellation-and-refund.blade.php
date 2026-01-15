@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="flex-grow pt-32">
        <div class="p-8">
            <header class="mb-6">
                <h1 class="text-3xl text-red-500 font-extrabold">Cancellation & Refund Policy</h1>
                <p class="text-sm text-gray-300 mt-1">
                    Last updated: <span class="font-medium">Jan 11, 2026</span>
                </p>
                <p class="mt-2 text-gray-300">Clear, fair, and easy to follow — here’s how cancellations and refunds work for your bookings.</p>
            </header>

            <section class="space-y-6 text-gray-300">
                <article>
                <h2 class="text-xl font-medium">Cancellations</h2>
                <p class="mt-2">You may <strong>cancel your booking up to 2 days (48 hours)</strong> before the scheduled booking date. Cancellations must be submitted by contacting our reception team via phone, WhatsApp, or in person at the theater. A cancellation is considered valid only after you receive confirmation from our staff.</p>
                </article>

                <article>
                <h2 class="text-xl font-medium">Refunds</h2>
                <ul class="mt-2 list-disc list-inside space-y-2">
                    <li>If you cancel at least 2 days prior to the booking date, you will receive a <strong>full refund</strong> of the amount paid.</li>
                    <li>Refunds are processed to the original payment method within <strong>5–7 working days</strong>. For manual reception bookings, refunds may be issued in cash or via the original transaction method.</li>
                </ul>
                </article>

                <article>
                <h2 class="text-xl font-medium">Late Cancellations & No-Shows</h2>
                <p class="mt-2">Cancellations made <strong>less than 2 days</strong> before the booking date are <strong>not eligible for a refund</strong>. No-shows (failure to attend without prior cancellation) are not refundable.</p>
                </article>

                <article>
                <h2 class="text-xl font-medium">Theater-Initiated Changes</h2>
                <p class="mt-2">If we need to cancel your booking due to operational reasons (maintenance, unforeseen closures), you will be offered either a <strong>full refund</strong> or the option to <strong>reschedule</strong> to another available slot.</p>
                </article>

                <article>
                <h2 class="text-xl font-medium">How to Contact Us</h2>
                <p class="mt-2">To cancel or inquire about refunds, reach out to our support team:</p>

                <div class="mt-3 grid sm:flex sm:items-center gap-3">
                    <a href="tel:+918884447958" class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-indigo-600 text-white text-sm font-medium shadow hover:bg-indigo-700">Call: +91 88844 47958</a>
                    <a href="mailto:privatepopcorn913@gmail.com" class="inline-flex items-center justify-center px-4 py-2 rounded-lg border border-red-500 text-sm text-red-700 hover:bg-gray-50">Email: privatepopcorn913@gmail.com</a>
                    <a href="https://wa.me/+918884447958" class="inline-flex items-center justify-center px-4 py-2 rounded-lg bg-green-500 text-white text-sm font-medium hover:bg-amber-600">WhatsApp</a>
                </div>
                </article>

                <article class="mt-10">
                    <h2 class="text-xl font-semibold mb-4">
                    Frequently Asked Questions
                    </h2>
                    <dl class="space-y-3" id="faq-container">
                        <!-- FAQs will be inserted here by JavaScript -->
                    </dl>
                </article>

                <footer class="mt-6 border-t pt-4 text-sm text-gray-400">
                    <p>Please ensure your contact details are correct in the booking. This policy is subject to change; check this page for the latest version.</p>
                </footer>
            </section>
        </div>
    </main>
    
    <script>
        const faqs = [
            {
                question: "When exactly is the 48-hour cutoff?",
                answer:
                "The cutoff is 48 hours before your booked slot's date and start time. For example, for a booking on Oct 10 at 10:00 AM, you must cancel before Oct 8 at 10:00 AM.",
            },
            {
                question: "How long will the refund take?",
                answer:
                "Refunds are usually processed within 5–7 working days, depending on your payment provider.",
            },
            {
                question: "I booked at the counter — how is my refund issued?",
                answer:
                "For walk-in bookings made at reception, refunds will be issued in cash or via the original transaction method, depending on how the payment was taken.",
            },
        ];
        
        const faqContainer = document.getElementById('faq-container');
        let openIndex = -1;

        function toggleFAQ(index) {
            if (openIndex === index) {
                openIndex = -1;
            } else {
                openIndex = index;
            }
            renderFAQs();
        }

        function renderFAQs() {
            faqContainer.innerHTML = '';
            faqs.forEach((faq, index) => {
                const faqElement = document.createElement('div');
                faqElement.className = 'border rounded-lg';

                const questionButton = document.createElement('button');
                questionButton.className = 'w-full flex justify-between items-center px-4 py-3 text-left text-gray-300 font-medium hover:bg-gray-800';
                questionButton.onclick = () => toggleFAQ(index);
                
                const questionText = document.createElement('span');
                questionText.textContent = faq.question;
                questionButton.appendChild(questionText);

                const icon = document.createElement('span');
                icon.className = 'ml-2 text-gray-500';
                icon.textContent = openIndex === index ? '−' : '+';
                questionButton.appendChild(icon);
                
                faqElement.appendChild(questionButton);

                if (openIndex === index) {
                    const answerElement = document.createElement('dd');
                    answerElement.className = 'px-4 pb-4 text-gray-300 border-t bg-gray-800';
                    answerElement.textContent = faq.answer;
                    faqElement.appendChild(answerElement);
                }
                
                faqContainer.appendChild(faqElement);
            });
        }

        renderFAQs();

    </script>
@endsection