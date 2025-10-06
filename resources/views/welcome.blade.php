@extends('layouts.app')

@section('title', 'British Propolis - Kesehatan Alami Premium dari Inggris')
@section('meta_description', 'British Propolis premium untuk kesehatan alami. Tingkatkan imunitas, atasi pilek flu,
    rawat kesehatan kulit & mulut. Produk berkualitas tinggi dari Inggris. Pesan sekarang!')
@section('meta_keywords', 'british propolis, propolis inggris, kesehatan alami, imunitas, pilek flu, kesehatan kulit,
    kesehatan mulut, suplemen alami, propolis premium, antibakteri alami')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-amber-50 to-orange-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        <span class="text-amber-600">British Propolis</span><br>
                        Kesehatan Alami dari Inggris
                    </h1>
                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                        Tingkatkan imunitas tubuh Anda dengan British Propolis premium. Solusi alami terpercaya untuk
                        mengatasi pilek, flu, dan menjaga kesehatan kulit serta mulut.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 text-center"
                        >
                            Pesan Sekarang
                        </a>
                        <a
                            href="#manfaat"
                            class="border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 text-center"
                        >
                            Pelajari Manfaat
                        </a>
                    </div>
                    <div class="flex items-center mt-8 space-x-6">
                        <div class="flex items-center">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 bg-amber-400 rounded-full border-2 border-white"></div>
                                <div class="w-8 h-8 bg-orange-400 rounded-full border-2 border-white"></div>
                                <div class="w-8 h-8 bg-yellow-400 rounded-full border-2 border-white"></div>
                            </div>
                            <span class="ml-3 text-sm text-gray-600">Dipercaya 10,000+ keluarga</span>
                        </div>
                        <div class="flex items-center">
                            <div class="flex text-yellow-400">
                                <svg
                                    class="w-5 h-5 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                                    />
                                </svg>
                                <svg
                                    class="w-5 h-5 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                                    />
                                </svg>
                                <svg
                                    class="w-5 h-5 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                                    />
                                </svg>
                                <svg
                                    class="w-5 h-5 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                                    />
                                </svg>
                                <svg
                                    class="w-5 h-5 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                                    />
                                </svg>
                            </div>
                            <span class="ml-2 text-sm text-gray-600">4.9/5 rating</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative z-10">
                        <img
                            src="{{ asset('images/propolis-bottle-hero.jpg') }}"
                            alt="British Propolis Bottle"
                            class="w-full max-w-md mx-auto rounded-2xl shadow-2xl"
                        >
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-amber-200 rounded-full opacity-60"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-orange-200 rounded-full opacity-40"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Mengapa Memilih British Propolis?
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Propolis premium dari Inggris dengan kualitas terjamin dan manfaat yang telah terbukti secara klinis
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div
                        class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-200 transition-colors">
                        <svg
                            class="w-8 h-8 text-amber-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">100% Original</h3>
                    <p class="text-gray-600 text-sm">Langsung dari Inggris dengan sertifikat keaslian</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-200 transition-colors">
                        <svg
                            class="w-8 h-8 text-amber-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Teruji Klinis</h3>
                    <p class="text-gray-600 text-sm">Diteliti dan terbukti efektif secara medis</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-200 transition-colors">
                        <svg
                            class="w-8 h-8 text-amber-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Aman & Alami</h3>
                    <p class="text-gray-600 text-sm">Tanpa efek samping, cocok untuk segala usia</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-200 transition-colors">
                        <svg
                            class="w-8 h-8 text-amber-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Hasil Cepat</h3>
                    <p class="text-gray-600 text-sm">Merasakan manfaat dalam 3-7 hari pemakaian</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Manfaat Section -->
    <section
        id="manfaat"
        class="py-20 bg-gray-50"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Manfaat British Propolis
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Satu produk, berbagai manfaat untuk kesehatan Anda dan keluarga
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg
                            class="w-6 h-6 text-blue-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15.586 13H14a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Dukungan Sistem Imun</h3>
                    <p class="text-gray-600 mb-4">Meningkatkan daya tahan tubuh untuk melawan virus, bakteri, dan infeksi
                    </p>
                    <a
                        href="{{ url('/sistem-imun') }}"
                        class="text-amber-600 hover:text-amber-700 font-medium"
                    >Pelajari lebih lanjut →</a>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-green-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg
                            class="w-6 h-6 text-green-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Meredakan Pilek dan Flu</h3>
                    <p class="text-gray-600 mb-4">Mempercepat penyembuhan gejala pilek, flu, batuk, dan hidung tersumbat
                    </p>
                    <a
                        href="{{ url('/pilek-flu') }}"
                        class="text-amber-600 hover:text-amber-700 font-medium"
                    >Pelajari lebih lanjut →</a>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-pink-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg
                            class="w-6 h-6 text-pink-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Kesehatan Kulit</h3>
                    <p class="text-gray-600 mb-4">Mengatasi jerawat, eksim, dan menjaga kesehatan kulit secara alami</p>
                    <a
                        href="{{ url('/kesehatan-kulit') }}"
                        class="text-amber-600 hover:text-amber-700 font-medium"
                    >Pelajari lebih lanjut →</a>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-purple-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg
                            class="w-6 h-6 text-purple-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Kesehatan Mulut</h3>
                    <p class="text-gray-600 mb-4">Mengatasi sariawan, gusi berdarah, dan menjaga kebersihan mulut</p>
                    <a
                        href="{{ url('/kesehatan-mulut') }}"
                        class="text-amber-600 hover:text-amber-700 font-medium"
                    >Pelajari lebih lanjut →</a>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-red-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg
                            class="w-6 h-6 text-red-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Meredakan Alergi</h3>
                    <p class="text-gray-600 mb-4">Membantu mengurangi reaksi alergi dan gejala yang menyertainya</p>
                    <a
                        href="{{ url('/meredakan-alergi') }}"
                        class="text-amber-600 hover:text-amber-700 font-medium"
                    >Pelajari lebih lanjut →</a>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-indigo-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                        <svg
                            class="w-6 h-6 text-indigo-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.381z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Penyembuhan Luka</h3>
                    <p class="text-gray-600 mb-4">Mempercepat proses penyembuhan luka dan regenerasi sel kulit</p>
                    <a
                        href="{{ url('/penyembuhan-luka') }}"
                        class="text-amber-600 hover:text-amber-700 font-medium"
                    >Pelajari lebih lanjut →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        British Propolis Premium
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Propolis murni dari lebah Inggris yang dipanen dengan teknologi modern dan diproses dengan standar
                        farmasi Eropa. Setiap botol mengandung konsentrasi propolis tinggi untuk hasil maksimal.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-green-500 mr-3"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="text-gray-700">100% propolis murni tanpa campuran</span>
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-green-500 mr-3"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="text-gray-700">Diproduksi di fasilitas bersertifikat GMP</span>
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-green-500 mr-3"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="text-gray-700">Kandungan flavonoid dan asam fenolik tinggi</span>
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-green-500 mr-3"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="text-gray-700">Aman untuk konsumsi jangka panjang</span>
                        </div>
                    </div>

                    <div class="bg-amber-50 p-6 rounded-lg mb-8">
                        <h3 class="text-lg font-semibold text-amber-800 mb-2">💡 Cara Konsumsi:</h3>
                        <p class="text-amber-700">
                            <strong>Dewasa:</strong> 10-20 tetes, 3x sehari<br>
                            <strong>Anak-anak:</strong> 5-10 tetes, 2x sehari<br>
                            Teteskan langsung ke mulut atau campur dengan air hangat
                        </p>
                    </div>

                    <a
                        href="{{ url('/checkout') }}"
                        class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 inline-block"
                    >
                        Pesan British Propolis Sekarang
                    </a>
                </div>

                <div class="relative">
                    <img
                        src="{{ asset('images/propolis-product-detail.jpg') }}"
                        alt="British Propolis Product"
                        class="w-full rounded-2xl shadow-2xl"
                    >
                    <div class="absolute -top-4 -right-4 bg-amber-500 text-white px-4 py-2 rounded-full font-bold text-sm">
                        BEST SELLER
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Testimoni Pelanggan
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ribuan keluarga Indonesia telah merasakan manfaat British Propolis
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Sejak minum British Propolis, saya jarang sakit flu. Daya tahan tubuh benar-benar meningkat dan
                        keluarga saya jadi lebih sehat."
                    </p>
                    <div class="flex items-center">
                        <img
                            src="{{ asset('images/testimonial-1.jpg') }}"
                            alt="Testimoni"
                            class="w-12 h-12 rounded-full mr-4"
                        >
                        <div>
                            <p class="font-semibold text-gray-900">Sari Dewi</p>
                            <p class="text-gray-600 text-sm">Ibu Rumah Tangga, Jakarta</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Anak saya yang sering batuk pilek jadi lebih jarang sakit. British Propolis memang berkualitas dan
                        aman untuk anak."
                    </p>
                    <div class="flex items-center">
                        <img
                            src="{{ asset('images/testimonial-2.jpg') }}"
                            alt="Testimoni"
                            class="w-12 h-12 rounded-full mr-4"
                        >
                        <div>
                            <p class="font-semibold text-gray-900">Budi Santoso</p>
                            <p class="text-gray-600 text-sm">Ayah 2 Anak, Surabaya</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                        <svg
                            class="w-5 h-5 fill-current"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                            />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4">
                        "Masalah sariawan yang sering kambuh sudah tidak pernah muncul lagi sejak rutin konsumsi British
                        Propolis. Sangat rekomen!"
                    </p>
                    <div class="flex items-center">
                        <img
                            src="{{ asset('images/testimonial-3.jpg') }}"
                            alt="Testimoni"
                            class="w-12 h-12 rounded-full mr-4"
                        >
                        <div>
                            <p class="font-semibold text-gray-900">Nina Rahayu</p>
                            <p class="text-gray-600 text-sm">Karyawan, Bandung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing & CTA -->
    <section class="py-20 bg-amber-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Investasi Terbaik untuk Kesehatan Keluarga
            </h2>
            <p class="text-xl text-amber-100 mb-12 max-w-3xl mx-auto">
                Dapatkan British Propolis premium dengan harga terjangkau. Semakin banyak yang Anda beli, semakin hemat
                harganya!
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">1 Botol</h3>
                    <div class="text-3xl font-bold text-amber-600 mb-2">Rp 250.000</div>
                    <p class="text-gray-600 text-sm mb-4">Per botol</p>
                    <div class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm">Coba Dulu</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg border-2 border-amber-400">
                    <div class="bg-amber-100 text-amber-800 px-2 py-1 rounded-full text-xs font-bold mb-2">HEMAT 13%</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">3 Botol</h3>
                    <div class="text-3xl font-bold text-amber-600 mb-2">Rp 217.000</div>
                    <p class="text-gray-600 text-sm mb-4">Per botol</p>
                    <div class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm">Populer</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-bold mb-2">HEMAT 21%</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">5 Botol</h3>
                    <div class="text-3xl font-bold text-amber-600 mb-2">Rp 198.000</div>
                    <p class="text-gray-600 text-sm mb-4">Per botol</p>
                    <div class="bg-green-500 text-white px-4 py-2 rounded-full text-sm">Recommended</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-bold mb-2">HEMAT 28%</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">10 Botol</h3>
                    <div class="text-3xl font-bold text-amber-600 mb-2">Rp 180.000</div>
                    <p class="text-gray-600 text-sm mb-4">Per botol</p>
                    <div class="bg-blue-500 text-white px-4 py-2 rounded-full text-sm">Best Value</div>
                </div>
            </div>

            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 mb-8 max-w-2xl mx-auto">
                <h3 class="text-xl font-bold text-white mb-3">🎁 Bonus Eksklusif</h3>
                <ul class="text-amber-100 text-left space-y-2">
                    <li>✅ Gratis ongkos kirim ke seluruh Indonesia</li>
                    <li>✅ Garansi uang kembali 30 hari</li>
                    <li>✅ Konsultasi gratis dengan ahli kesehatan</li>
                    <li>✅ Panduan lengkap penggunaan propolis</li>
                </ul>
            </div>

            <a
                href="{{ url('/checkout') }}"
                class="bg-white hover:bg-gray-100 text-amber-600 px-12 py-4 rounded-lg text-xl font-bold transition-all duration-300 transform hover:scale-105 inline-block shadow-lg"
            >
                Pesan Sekarang - Bayar di Tempat (COD)
            </a>

            <p class="text-amber-200 mt-4 text-sm">
                💳 Pembayaran: Transfer Bank, COD, atau E-Wallet
            </p>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="text-xl text-gray-600">
                    Temukan jawaban atas pertanyaan Anda tentang British Propolis
                </p>
            </div>

            <div class="space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Apakah British Propolis aman untuk anak-anak?</h3>
                    <p class="text-gray-700">Ya, British Propolis aman untuk anak-anak di atas 1 tahun. Dosisnya
                        disesuaikan dengan usia: 5-10 tetes untuk anak-anak, 2x sehari. Selalu konsultasikan dengan dokter
                        untuk anak di bawah 2 tahun.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Berapa lama efek British Propolis bisa dirasakan?
                    </h3>
                    <p class="text-gray-700">Sebagian besar pengguna merasakan peningkatan kondisi dalam 3-7 hari pemakaian
                        rutin. Untuk hasil optimal, disarankan konsumsi selama minimal 1 bulan.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Apakah ada efek samping dari British Propolis?
                    </h3>
                    <p class="text-gray-700">British Propolis sangat aman dan jarang menimbulkan efek samping. Namun, bagi
                        yang alergi produk lebah, disarankan melakukan tes kecil terlebih dahulu atau konsultasi dengan
                        dokter.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Bagaimana cara menyimpan British Propolis yang
                        benar?</h3>
                    <p class="text-gray-700">Simpan di tempat sejuk dan kering, hindari sinar matahari langsung. Tidak
                        perlu disimpan di kulkas. Tutup rapat setelah digunakan dan jauhkan dari jangkauan anak-anak.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Apakah British Propolis bisa dikonsumsi bersamaan
                        dengan obat lain?</h3>
                    <p class="text-gray-700">British Propolis umumnya aman dikonsumsi bersamaan dengan obat lain. Namun,
                        untuk kondisi medis tertentu atau obat khusus, sebaiknya konsultasikan dengan dokter atau apoteker.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
