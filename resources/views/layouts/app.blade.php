<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'British Propolis - Kesehatan Alami dari Inggris')</title>
    <meta
        name="description"
        content="@yield('meta_description', 'British Propolis premium untuk kesehatan alami. Meningkatkan imunitas, mengatasi pilek flu, kesehatan kulit dan mulut. Produk berkualitas tinggi dari Inggris.')"
    >
    <meta
        name="keywords"
        content="@yield('meta_keywords', 'british propolis, propolis inggris, kesehatan alami, imunitas, pilek flu, kesehatan kulit, kesehatan mulut, suplemen alami')"
    >
    <meta
        name="author"
        content="British Propolis Indonesia"
    >

    <!-- Open Graph Tags -->
    <meta
        property="og:title"
        content="@yield('og_title', 'British Propolis - Kesehatan Alami dari Inggris')"
    >
    <meta
        property="og:description"
        content="@yield('og_description', 'British Propolis premium untuk kesehatan alami. Meningkatkan imunitas, mengatasi pilek flu, kesehatan kulit dan mulut.')"
    >
    <meta
        property="og:image"
        content="@yield('og_image', asset('images/british-propolis-og.jpg'))"
    >
    <meta
        property="og:url"
        content="{{ url()->current() }}"
    >
    <meta
        property="og:type"
        content="website"
    >
    <meta
        property="og:site_name"
        content="British Propolis Indonesia"
    >

    <!-- Twitter Card Tags -->
    <meta
        name="twitter:card"
        content="summary_large_image"
    >
    <meta
        name="twitter:title"
        content="@yield('twitter_title', 'British Propolis - Kesehatan Alami dari Inggris')"
    >
    <meta
        name="twitter:description"
        content="@yield('twitter_description', 'British Propolis premium untuk kesehatan alami.')"
    >
    <meta
        name="twitter:image"
        content="@yield('twitter_image', asset('images/british-propolis-twitter.jpg'))"
    >

    <!-- Canonical URL -->
    <link
        rel="canonical"
        href="{{ url()->current() }}"
    >

    <!-- Favicon -->
    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('favicon.ico') }}"
    >
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('images/apple-touch-icon.png') }}"
    >

    <!-- Fonts -->
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Styles -->
    @stack('styles')

    <!-- Schema.org JSON-LD -->
    @hasSection('schema_ld')
        @yield('schema_ld')
    @else
        <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Organization",
            "name": "British Propolis Indonesia",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('images/logo.png') }}",
            "description": "Penyedia British Propolis premium untuk kesehatan alami di Indonesia",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "ID"
            },
            "sameAs": [
                "https://www.facebook.com/britishpropolisindonesia",
                "https://www.instagram.com/britishpropolisindonesia"
            ]
        }
        </script>
    @endif

    @stack('head')
</head>

<body class="font-sans antialiased bg-white">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a
                        href="{{ url('/') }}"
                        class="flex items-center"
                    >
                        <img
                            class="h-8 w-auto"
                            src="{{ asset('images/logo.png') }}"
                            alt="British Propolis"
                        >
                        <span class="ml-2 text-xl font-bold text-gray-900">British Propolis</span>
                    </a>
                </div>

                <!-- Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a
                            href="{{ url('/') }}"
                            class="text-gray-900 hover:text-amber-600 px-3 py-2 rounded-md text-sm font-medium transition-colors"
                        >
                            Beranda
                        </a>
                        <div class="relative group">
                            <button
                                class="text-gray-900 hover:text-amber-600 px-3 py-2 rounded-md text-sm font-medium transition-colors flex items-center"
                            >
                                Manfaat
                                <svg
                                    class="ml-1 h-4 w-4"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </button>
                            <div
                                class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                                <div class="py-1">
                                    <a
                                        href="{{ url('/sistem-imun') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    >Dukungan Sistem Imun</a>
                                    <a
                                        href="{{ url('/pilek-flu') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    >Meredakan Pilek dan Flu</a>
                                    <a
                                        href="{{ url('/kesehatan-kulit') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    >Kesehatan Kulit</a>
                                    <a
                                        href="{{ url('/kesehatan-mulut') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    >Kesehatan Mulut</a>
                                    <a
                                        href="{{ url('/meredakan-alergi') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    >Meredakan Alergi</a>
                                    <a
                                        href="{{ url('/penyembuhan-luka') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    >Penyembuhan Luka</a>
                                </div>
                            </div>
                        </div>
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-md text-sm font-medium transition-colors"
                        >
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button
                        type="button"
                        class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="h-6 w-6"
                            stroke="currentColor"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                class="inline-flex"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
                <a
                    href="{{ url('/') }}"
                    class="text-gray-900 hover:text-amber-600 block px-3 py-2 rounded-md text-base font-medium"
                >Beranda</a>
                <a
                    href="{{ url('/sistem-imun') }}"
                    class="text-gray-700 hover:text-amber-600 block px-3 py-2 rounded-md text-base font-medium"
                >Dukungan Sistem Imun</a>
                <a
                    href="{{ url('/pilek-flu') }}"
                    class="text-gray-700 hover:text-amber-600 block px-3 py-2 rounded-md text-base font-medium"
                >Meredakan Pilek dan Flu</a>
                <a
                    href="{{ url('/kesehatan-kulit') }}"
                    class="text-gray-700 hover:text-amber-600 block px-3 py-2 rounded-md text-base font-medium"
                >Kesehatan Kulit</a>
                <a
                    href="{{ url('/kesehatan-mulut') }}"
                    class="text-gray-700 hover:text-amber-600 block px-3 py-2 rounded-md text-base font-medium"
                >Kesehatan Mulut</a>
                <a
                    href="{{ url('/meredakan-alergi') }}"
                    class="text-gray-700 hover:text-amber-600 block px-3 py-2 rounded-md text-base font-medium"
                >Meredakan Alergi</a>
                <a
                    href="{{ url('/penyembuhan-luka') }}"
                    class="text-gray-700 hover:text-amber-600 block px-3 py-2 rounded-md text-base font-medium"
                >Penyembuhan Luka</a>
                <a
                    href="{{ url('/checkout') }}"
                    class="bg-amber-600 hover:bg-amber-700 text-white block px-3 py-2 rounded-md text-base font-medium"
                >Pesan Sekarang</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section (optional) -->
        @hasSection('hero')
            @yield('hero')
        @endif

        <!-- Main Content -->
        @yield('content')

        <!-- Testimonials Section (optional) -->
        @hasSection('testimonials')
            @yield('testimonials')
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img
                            class="h-8 w-auto"
                            src="{{ asset('images/logo-white.png') }}"
                            alt="British Propolis"
                        >
                        <span class="ml-2 text-xl font-bold text-white">British Propolis</span>
                    </div>
                    <p class="text-gray-300 text-sm mb-4">
                        British Propolis premium untuk kesehatan alami Anda. Dipercaya ribuan keluarga Indonesia untuk
                        meningkatkan imunitas dan menjaga kesehatan secara alami.
                    </p>
                    <div class="flex space-x-4">
                        <a
                            href="#"
                            class="text-gray-400 hover:text-white transition-colors"
                        >
                            <span class="sr-only">Facebook</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                />
                            </svg>
                        </a>
                        <a
                            href="#"
                            class="text-gray-400 hover:text-white transition-colors"
                        >
                            <span class="sr-only">Instagram</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.621 5.367 11.988 11.988 11.988s11.987-5.367 11.987-11.988C24.004 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.323-1.297C4.198 14.895 3.708 13.744 3.708 12.447s.49-2.448 1.297-3.323c.875-.807 2.026-1.297 3.323-1.297s2.448.49 3.323 1.297c.807.875 1.297 2.026 1.297 3.323s-.49 2.448-1.297 3.323c-.875.807-2.026 1.297-3.323 1.297zm7.718-9.527c-.295 0-.588-.118-.807-.326-.218-.218-.326-.512-.326-.807s.108-.588.326-.807c.218-.218.512-.326.807-.326s.588.108.807.326c.218.218.326.512.326.807s-.108.588-.326.807c-.218.218-.512.326-.807.326z"
                                />
                            </svg>
                        </a>
                        <a
                            href="#"
                            class="text-gray-400 hover:text-white transition-colors"
                        >
                            <span class="sr-only">WhatsApp</span>
                            <svg
                                class="h-6 w-6"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.105"
                                />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a
                                href="{{ url('/') }}"
                                class="text-gray-300 hover:text-white text-sm transition-colors"
                            >Beranda</a></li>
                        <li><a
                                href="{{ url('/sistem-imun') }}"
                                class="text-gray-300 hover:text-white text-sm transition-colors"
                            >Sistem Imun</a></li>
                        <li><a
                                href="{{ url('/pilek-flu') }}"
                                class="text-gray-300 hover:text-white text-sm transition-colors"
                            >Pilek & Flu</a></li>
                        <li><a
                                href="{{ url('/kesehatan-kulit') }}"
                                class="text-gray-300 hover:text-white text-sm transition-colors"
                            >Kesehatan Kulit</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase mb-4">Kontak</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-300 text-sm">
                            <span class="block">WhatsApp:</span>
                            <a
                                href="https://wa.me/6281234567890"
                                class="text-amber-400 hover:text-amber-300 transition-colors"
                            >+62 812-3456-7890</a>
                        </li>
                        <li class="text-gray-300 text-sm">
                            <span class="block">Email:</span>
                            <a
                                href="mailto:info@britishpropolis.id"
                                class="text-amber-400 hover:text-amber-300 transition-colors"
                            >info@britishpropolis.id</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-700">
                <p class="text-center text-sm text-gray-400">
                    &copy; {{ date('Y') }} British Propolis Indonesia. Semua hak dilindungi.
                </p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a
            href="https://wa.me/6281234567890"
            target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all duration-300 transform hover:scale-110"
        >
            <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
            >
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.105"
                />
            </svg>
        </a>
    </div>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
