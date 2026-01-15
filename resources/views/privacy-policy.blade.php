@extends('layouts.app')

@section('content')
    <main class="flex-grow pt-32">
        <div class="p-8">
            <article>
                <header class="mb-6">
                    <h1 class="text-3xl text-red-500 font-extrabold">Privacy Policy</h1>
                    <p class="text-sm text-gray-300 mt-1">
                    Last updated: <span class="font-medium">Jan 11, 2026</span>
                    </p>
                    <p class="mt-4 text-gray-300">
                    This Privacy Policy describes how <strong>Private Popcorn</strong> ("we", "us",
                    "our") collects, uses, discloses, and protects personal information of
                    visitors and users ("you") of <a href="https://privatepopcorn.com" class="text-indigo-400 hover:underline">https://privatepopcorn.com</a> (the
                    "Site") and our Services. By accessing or using the Site or Services, you
                    consent to the practices described here.
                    </p>
                </header>

                <nav class="mb-8 text-gray-300">
                    <h2 class="text-xl font-semibold">Contents</h2>
                    <ol class="list-decimal list-inside ml-0 text-sm">
                    <li><a href="#information-we-collect" class="hover:underline">1. Information We Collect</a></li>
                    <li><a href="#how-we-use-your-information" class="hover:underline">2. How We Use Your Information</a></li>
                    <li><a href="#cookies-tracking" class="hover:underline">3. Cookies & Tracking</a></li>
                    <li><a href="#disclosure" class="hover:underline">4. Disclosure of Your Information</a></li>
                    <li><a href="#security-retention" class="hover:underline">5. Data Security & Retention</a></li>
                    <li><a href="#children" class="hover:underline">6. Children’s Privacy</a></li>
                    <li><a href="#rights-choices" class="hover:underline">7. Your Rights & Choices</a></li>
                    <li><a href="#international-transfers" class="hover:underline">8. International Transfers</a></li>
                    <li><a href="#changes" class="hover:underline">9. Changes to This Privacy Policy</a></li>
                    <li><a href="#contact" class="hover:underline">10. Contact Us</a></li>
                    </ol>
                </nav>

                <section id="information-we-collect" class="mt-6 text-gray-300">
                    <h2 class="text-2xl font-semibold">1. Information We Collect</h2>

                    <h3 class="mt-4 font-semibold">(a) Information you provide to us</h3>
                    <ul class="list-disc list-inside mt-2">
                    <li>
                        <strong>Contact & profile information:</strong> name, email address, phone
                        number, address, event preferences, etc., which you submit when making
                        inquiries, bookings, or communicating with us.
                    </li>
                    <li class="mt-2">
                        <strong>Payment information:</strong> details necessary to process payments
                        (e.g. credit card, UPI, or other payment method). (Note: we do not store
                        full payment card numbers; payment processing is handled by secure
                        third‑party payment gateways.)
                    </li>
                    <li class="mt-2">
                        <strong>Communications:</strong> any messages, feedback, reviews, or support
                        requests you send us.
                    </li>
                    </ul>

                    <h3 class="mt-4 font-semibold">(b) Information we collect automatically</h3>
                    <ul class="list-disc list-inside mt-2">
                    <li>
                        <strong>Usage data:</strong> your IP address, browser type and version,
                        operating system, device identifiers, pages you visit, time spent, referral
                        URLs, navigation paths, click data.
                    </li>
                    <li class="mt-2">
                        <strong>Cookies & similar technologies:</strong> we and our third‑party
                        partners may use cookies, web beacons, local storage, and similar tracking
                        technologies to collect information and track usage.
                    </li>
                    </ul>

                    <h3 class="mt-4 font-semibold">(c) Third‑party sources</h3>
                    <p class="mt-2">
                    If you log in or connect via social media or other third‑party accounts, we
                    may collect information from those services (subject to their permissions).
                    Analytics, advertising, or marketing service providers may share aggregated
                    or anonymized data with us.
                    </p>
                </section>

                <section id="how-we-use-your-information" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">2. How We Use Your Information</h2>
                    <p class="mt-3">We use personal information for purposes including, but not limited to:</p>
                    <ul class="list-disc list-inside mt-2">
                    <li>To provide, operate, and maintain the Site and Services</li>
                    <li>To process and fulfil Bookings, payments, refunds, cancellations</li>
                    <li>To communicate with you, respond to inquiries, send confirmations, reminders, updates</li>
                    <li>To personalize your experience, recommend packages or events</li>
                    <li>To improve, maintain, and analyze performance, usage, and features</li>
                    <li>To monitor and prevent fraud, misuse, security incidents</li>
                    <li>To comply with legal obligations, dispute resolution, enforcing our Terms</li>
                    <li>For marketing, promotional activities, newsletters, offers (where permitted)</li>
                    <li>To anonymize or aggregate data for analytics or research</li>
                    </ul>
                </section>

                <section id="cookies-tracking" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">3. Cookies & Tracking</h2>
                    <p class="mt-3">
                    We may use cookies and similar technologies to:
                    </p>
                    <ul class="list-disc list-inside mt-2">
                    <li>Recognize you when you return to the Site</li>
                    <li>Store your preferences</li>
                    <li>Collect information about your browsing behavior</li>
                    <li>Serve targeted or contextual advertising (where applicable)</li>
                    <li>Understand traffic sources and site performance</li>
                    </ul>
                    <p class="mt-3">You can usually configure your browser to refuse or block cookies, but doing so may impact functionalities of the Site.</p>
                </section>

                <section id="disclosure" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">4. Disclosure of Your Information</h2>
                    <p class="mt-3">We may share your personal data in the following circumstances:</p>
                    <ul class="list-disc list-inside mt-2">
                    <li>
                        <strong>With service providers:</strong> vendors, contractors, agents who
                        assist us (e.g. payment processors, hosting providers, email delivery,
                        analytics, marketing) under confidentiality obligations
                    </li>
                    <li class="mt-2">
                        <strong>For legal reasons:</strong> where required by law, regulation, legal
                        process, court order, or governmental request
                    </li>
                    <li class="mt-2">
                        <strong>To protect rights and safety:</strong> to enforce our Terms, defend
                        rights, protect safety of users or public, prevent fraud or misuse
                    </li>
                    <li class="mt-2">
                        <strong>Business transfers:</strong> in connection with a merger, acquisition,
                        reorganization, sale, or transfer of assets—your information may be among
                        the transferred assets
                    </li>
                    <li class="mt-2">
                        <strong>With your consent:</strong> if you explicitly authorize us to share
                        with third parties for marketing or other purposes
                    </li>
                    </ul>
                    <p class="mt-3"><strong>We do not sell your personal data to third parties.</strong></p>
                </section>

                <section id="security-retention" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">5. Data Security & Retention</h2>
                    <p class="mt-3">We implement reasonable technical, administrative, and physical security measures to protect personal data from unauthorized access, use, or disclosure.</p>
                    <p class="mt-3">However, no method of transmission or storage is 100% secure; we cannot guarantee absolute security.</p>
                    <p class="mt-3">We retain personal data only as long as necessary to fulfill purposes laid out in this policy, or as required by law. After retention period, we will delete or anonymize your data or securely archive it if required.</p>
                </section>

                <section id="children" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">6. Children’s Privacy</h2>
                    <p class="mt-3">Our Site and Services are not intended for children under <strong>13</strong>. We do not knowingly collect personal data from minors. If we learn that we have collected data from a child under the applicable age, we will delete it promptly.</p>
                </section>

                <section id="rights-choices" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">7. Your Rights &amp; Choices</h2>
                    <p class="mt-3">Depending on applicable law, you may have the following rights:</p>
                    <ul class="list-disc list-inside mt-2">
                    <li>Access: request a copy of personal data we hold about you</li>
                    <li>Correction: ask us to correct or update inaccurate or incomplete data</li>
                    <li>Deletion / Erasure: request deletion of your data (subject to legal obligations)</li>
                    <li>Restriction: request us to restrict processing in certain circumstances</li>
                    <li>Portability: request transfer of your data to another service provider</li>
                    <li>Objection: object to certain processing (e.g. marketing)</li>
                    <li>Withdrawal of consent (where processing is consent-based), though it won’t affect earlier lawful processing</li>
                    </ul>
                    <p class="mt-3">To exercise these rights, contact us at the email given below. We may require identity verification before processing such requests.</p>
                </section>

                <section id="international-transfers" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">8. International Transfers</h2>
                    <p class="mt-3">If your data is transferred outside your country (e.g. to service providers in other jurisdictions), we will ensure appropriate safeguards are in place (e.g. standard contractual clauses, data protection standards) to protect your data.</p>
                </section>

                <section id="changes" class="mt-8 text-gray-300">
                    <h2 class="text-2xl font-semibold">9. Changes to This Privacy Policy</h2>
                    <p class="mt-3">We may update this Privacy Policy from time to time. We will post the “Last updated” date and, where required by law, notify you of material changes (e.g. by email). Your continued use of the Site after those changes constitutes acceptance of the new policy.</p>
                </section>

                <section id="contact" class="mt-8 mb-6 text-gray-300">
                    <h2 class="text-2xl font-semibold">10. Contact Us</h2>
                    <p class="mt-3">If you have questions, concerns, or requests about this Privacy Policy or your data, please contact:</p>
                    <address class="not-italic mt-3 text-sm leading-relaxed">
                    <div><strong>Email:</strong> <a href="mailto:privatepopcorn913@gmail.com" class="text-indigo-400 hover:underline">privatepopcorn913@gmail.com</a></div>
                    <div class="mt-1"><strong>Address:</strong> 3rd Floor, #25, 60 Feet Road, Main Road, near Soda Factory, Jnana Juothi Nagar, Railway Layout, Ullal, Bangalore</div>
                    <div class="mt-1"><strong>Phone:</strong> 8884447958</div>
                    </address>
                </section>

                <footer class="text-xs text-gray-400 mt-6 pt-6 border-t border-gray-700">
                    <p>© 2026 Private Popcorn. All rights reserved. | Designed & Developed by <a href="https://nagaprasad-ts.github.io/portfolio" target="_blank" class="text-blue-500 underline">Nagaprasad T S</a></p>
                </footer>
            </article>
        </div>
    </main>
@endsection