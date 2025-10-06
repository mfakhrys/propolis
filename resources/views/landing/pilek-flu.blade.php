@extends('layouts.landing')

@section('title', 'British Propolis untuk Meredakan Pilek dan Flu - Penyembuh Alami Terpercaya')
@section('meta_description', 'British Propolis efektif meredakan pilek dan flu dengan cepat. Antibakteri dan antiviral
    alami yang aman untuk keluarga. Sembuh lebih cepat tanpa efek samping.')
@section('meta_keywords', 'british propolis pilek flu, obat pilek alami, obat flu alami, propolis antibakteri, propolis
    antiviral, meredakan batuk, obat tradisional pilek, sembuh dari flu')

@section('og_title', 'British Propolis - Meredakan Pilek dan Flu Secara Alami')
@section('og_description', 'Atasi pilek dan flu dengan British Propolis premium. Antibakteri dan antiviral alami yang
    terbukti efektif. Sembuh lebih cepat!')
@section('twitter_title', 'British Propolis untuk Pilek dan Flu')
@section('twitter_description', 'Sembuhkan pilek dan flu dengan British Propolis premium. Antibakteri alami
    terpercaya.')

@section('hero')
    <section class="relative bg-gradient-to-br from-green-50 to-blue-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-6">
                        ✨ Sembuh 3x Lebih Cepat
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Bye-bye
                        <span class="text-green-600">Pilek & Flu</span>
                        dengan British Propolis
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Jangan biarkan pilek dan flu mengganggu aktivitas Anda. British Propolis dengan kandungan
                        <strong>antibakteri dan antiviral alami</strong> membantu Anda sembuh lebih cepat tanpa efek
                        samping.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            🛒 Pesan Sekarang - Sembuh Cepat!
                        </a>
                        <a
                            href="https://wa.me/6281234567890"
                            target="_blank"
                            class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            💬 Konsultasi Gratis
                        </a>
                    </div>
                    <div class="flex items-center space-x-6 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-green-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Gratis Ongkir
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-green-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Garansi 30 Hari
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-green-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            COD Tersedia
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10">
                        <div class="bg-white rounded-2xl p-8 shadow-xl">
                            <div class="text-center mb-6">
                                <div
                                    class="w-24 h-32 bg-green-600 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">BRITISH<br>PROPOLIS</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Formula Khusus Anti Flu</h3>
                                <p class="text-green-600 font-semibold">100% Natural & Aman</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Meredakan hidung tersumbat dalam 6 jam
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Mengurangi batuk dan sakit tenggorokan
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Menurunkan demam secara alami
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Mencegah komplikasi flu yang parah
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-green-200 rounded-full opacity-60"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-blue-200 rounded-full opacity-40"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Problem Section -->
    <section class="py-20 bg-red-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    😷 Masalah Pilek & Flu yang Mengganggu
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Pilek dan flu bukan hanya mengganggu aktivitas, tapi juga bisa berdampak serius jika tidak ditangani
                    dengan tepat
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-red-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-3-8v8m-6 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Produktivitas Menurun</h3>
                    <p class="text-gray-600">
                        Pilek dan flu membuat Anda tidak bisa bekerja maksimal, mengganggu jadwal penting, dan merugikan
                        karir.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-red-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Menular ke Keluarga</h3>
                    <p class="text-gray-600">
                        Virus flu mudah menular. Satu orang sakit bisa membuat seluruh keluarga tertular dan menderita.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-red-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Biaya Pengobatan Mahal</h3>
                    <p class="text-gray-600">
                        Obat-obatan kimia mahal dan bisa menimbulkan efek samping. Belum lagi biaya dokter dan rawat inap.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    🌿 British Propolis: Solusi Alami Anti Pilek & Flu
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dengan kandungan antibakteri dan antiviral alami yang terbukti ilmiah, British Propolis adalah solusi
                    terbaik untuk meredakan pilek dan flu
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="space-y-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-green-600"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Antibakteri Kuat</h3>
                                <p class="text-gray-600">
                                    Kandungan flavonoid dan artepillin-C dalam British Propolis mampu membunuh bakteri
                                    penyebab infeksi saluran pernapasan dengan efektif.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-blue-600"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Antiviral Alami</h3>
                                <p class="text-gray-600">
                                    Propolis terbukti dapat menghambat replikasi virus flu dan common cold, mempercepat
                                    proses penyembuhan hingga 3x lipat.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-purple-600"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Tanpa Efek Samping</h3>
                                <p class="text-gray-600">
                                    100% bahan alami tanpa bahan kimia berbahaya. Aman dikonsumsi jangka panjang dan tidak
                                    menimbulkan ketergantungan.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-orange-600"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Meningkatkan Imunitas</h3>
                                <p class="text-gray-600">
                                    Selain menyembuhkan, British Propolis juga memperkuat sistem imun tubuh sehingga tidak
                                    mudah terserang pilek dan flu lagi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-green-100 to-blue-100 rounded-2xl p-8">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Hasil yang Bisa Anda Rasakan:</h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-green-700 mb-1">Dalam 6-12 Jam:</h4>
                                    <p class="text-sm text-gray-600">Hidung mulai lega, tenggorokan tidak sakit</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-blue-700 mb-1">Dalam 1-2 Hari:</h4>
                                    <p class="text-sm text-gray-600">Batuk berkurang, demam turun</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-purple-700 mb-1">Dalam 3-5 Hari:</h4>
                                    <p class="text-sm text-gray-600">Sembuh total, stamina pulih</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    🧬 Kandungan Aktif Anti Pilek & Flu
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis mengandung senyawa bioaktif yang terbukti secara klinis efektif melawan virus dan
                    bakteri penyebab pilek flu
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-green-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Flavonoid Complex</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa antioksidan kuat yang melindungi sel-sel tubuh dari kerusakan akibat infeksi virus
                                dan bakteri.
                            </p>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-green-800">
                                    <strong>Manfaat:</strong> Mengurangi peradangan saluran pernapasan dan mempercepat
                                    penyembuhan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-blue-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Artepillin-C</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa unik anti-mikroba yang hanya ada dalam propolis berkualitas tinggi, efektif melawan
                                virus flu.
                            </p>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-blue-800">
                                    <strong>Manfaat:</strong> Menghambat replikasi virus dan memperkuat pertahanan alami
                                    tubuh
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-purple-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Asam Caffeic</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa fenolat dengan aktivitas antiviral yang kuat, efektif melawan berbagai jenis virus
                                pernapasan.
                            </p>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="text-sm text-purple-800">
                                    <strong>Manfaat:</strong> Mencegah virus masuk ke sel dan mengurangi gejala flu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-orange-600"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Chrysin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan sifat anti-inflamasi yang membantu meredakan pembengkakan dan iritasi
                                tenggorokan.
                            </p>
                            <div class="bg-orange-50 p-4 rounded-lg">
                                <p class="text-sm text-orange-800">
                                    <strong>Manfaat:</strong> Menenangkan tenggorokan dan mengurangi batuk kering
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Usage Guide Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    📋 Cara Penggunaan untuk Pilek & Flu
                </h2>
                <p class="text-xl text-gray-600">
                    Ikuti panduan ini untuk hasil maksimal dalam meredakan pilek dan flu
                </p>
            </div>

            <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-2xl p-8 mb-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Dosis Khusus Saat Pilek & Flu</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h4 class="text-lg font-semibold text-green-700 mb-4">👨‍👩‍👧‍👦 Dewasa (18+ tahun)</h4>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-600 text-xs font-bold">1</span>
                                </div>
                                <p class="text-sm text-gray-700"><strong>15-20 tetes</strong> langsung ke mulut</p>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-600 text-xs font-bold">2</span>
                                </div>
                                <p class="text-sm text-gray-700"><strong>4-5 kali sehari</strong> (setiap 3-4 jam)</p>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-600 text-xs font-bold">3</span>
                                </div>
                                <p class="text-sm text-gray-700">Konsumsi hingga <strong>3 hari setelah sembuh</strong></p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-md">
                        <h4 class="text-lg font-semibold text-blue-700 mb-4">👶 Anak-anak (1-17 tahun)</h4>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 text-xs font-bold">1</span>
                                </div>
                                <p class="text-sm text-gray-700"><strong>5-10 tetes</strong> campur dengan madu</p>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 text-xs font-bold">2</span>
                                </div>
                                <p class="text-sm text-gray-700"><strong>3-4 kali sehari</strong> setelah makan</p>
                            </div>
                            <div class="flex items-center">
                                <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-blue-600 text-xs font-bold">3</span>
                                </div>
                                <p class="text-sm text-gray-700">Dosis bisa ditingkatkan jika perlu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-amber-50 border border-amber-200 rounded-xl p-6">
                <h4 class="text-lg font-semibold text-amber-800 mb-3">💡 Tips Tambahan untuk Penyembuhan Cepat:</h4>
                <ul class="space-y-2 text-amber-700">
                    <li class="flex items-center">
                        <span class="mr-2">✅</span>
                        Minum air putih yang banyak untuk membantu detoksifikasi
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✅</span>
                        Istirahat yang cukup untuk mempercepat recovery
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✅</span>
                        Konsumsi vitamin C alami dari buah-buahan
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✅</span>
                        Hindari makanan dingin dan berminyak
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Urgency Section -->
    <section class="py-20 bg-gradient-to-r from-red-600 to-orange-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                ⚠️ Jangan Biarkan Pilek & Flu Berlarut-larut!
            </h2>
            <p class="text-xl text-red-100 mb-8 max-w-3xl mx-auto">
                Semakin lama dibiarkan, virus akan semakin kuat dan sulit diobati. Atasi sekarang sebelum terlambat!
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <h3 class="text-lg font-bold text-white mb-2">Hari 1-2</h3>
                    <p class="text-red-100 text-sm">Masih mudah diobati dengan British Propolis</p>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <h3 class="text-lg font-bold text-white mb-2">Hari 3-7</h3>
                    <p class="text-red-100 text-sm">Butuh dosis lebih tinggi dan waktu lebih lama</p>
                </div>
                <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6">
                    <h3 class="text-lg font-bold text-white mb-2">Minggu 2+</h3>
                    <p class="text-red-100 text-sm">Risiko komplikasi dan infeksi sekunder</p>
                </div>
            </div>

            <a
                href="{{ url('/checkout') }}"
                class="bg-white text-red-600 hover:bg-gray-100 px-12 py-4 rounded-lg text-xl font-bold transition-colors inline-block shadow-lg"
            >
                🚨 Pesan Sekarang - Sembuh Hari Ini!
            </a>

            <p class="text-red-200 mt-4 text-sm">
                ⏰ Gratis ongkir & garansi uang kembali - Stock terbatas!
            </p>
        </div>
    </section>
@endsection
