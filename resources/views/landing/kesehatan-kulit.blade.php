@extends('layouts.landing')

@section('title', 'British Propolis untuk Kesehatan Kulit - Atasi Jerawat, Eksim, dan Masalah Kulit Lainnya')
@section('meta_description',
    'British Propolis efektif mengatasi jerawat, eksim, dermatitis, dan berbagai masalah kulit.
    Antibakteri alami yang aman dan tidak menimbulkan iritasi. Kulit sehat alami!')
@section('meta_keywords',
    'british propolis kulit, obat jerawat alami, eksim propolis, dermatitis alami, propolis
    antibakteri kulit, perawatan kulit alami, obat gatal kulit, propolis anti inflamasi')

@section('og_title', 'British Propolis - Solusi Alami untuk Kesehatan Kulit')
@section('og_description',
    'Atasi masalah kulit dengan British Propolis premium. Efektif untuk jerawat, eksim, dan
    peradangan kulit. 100% alami tanpa efek samping!')
@section('twitter_title', 'British Propolis untuk Kulit Sehat')
@section('twitter_description', 'Kulit bermasalah? British Propolis solusinya! Antibakteri alami untuk kulit sehat.')

@section('hero')
    <section class="relative bg-gradient-to-br from-pink-50 to-purple-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-pink-100 text-pink-800 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-6">
                        ✨ Kulit Bersih dalam 7 Hari
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Kulit
                        <span class="text-pink-600">Sehat & Bersih</span>
                        dengan British Propolis
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Akhiri masalah jerawat, eksim, dan peradangan kulit! British Propolis dengan
                        <strong>antibakteri dan anti-inflamasi alami</strong> memberikan solusi aman
                        untuk kulit sehat berkilau.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-pink-600 hover:bg-pink-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            🛒 Dapatkan Kulit Cantik Sekarang!
                        </a>
                        <a
                            href="https://wa.me/6281234567890"
                            target="_blank"
                            class="border-2 border-pink-600 text-pink-600 hover:bg-pink-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            💬 Konsultasi Gratis
                        </a>
                    </div>
                    <div class="flex items-center space-x-6 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-pink-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            100% Alami
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-pink-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Tanpa Efek Samping
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-pink-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Hasil Cepat
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10">
                        <div class="bg-white rounded-2xl p-8 shadow-xl">
                            <div class="text-center mb-6">
                                <div class="w-24 h-32 bg-pink-600 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">BRITISH<br>PROPOLIS</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Formula Khusus Kulit</h3>
                                <p class="text-pink-600 font-semibold">Dermatologically Tested</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-pink-500 rounded-full mr-3"></div>
                                    Mengatasi jerawat dalam 3-7 hari
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-pink-500 rounded-full mr-3"></div>
                                    Meredakan eksim dan dermatitis
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-pink-500 rounded-full mr-3"></div>
                                    Menyembuhkan luka minor dengan cepat
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-pink-500 rounded-full mr-3"></div>
                                    Mencegah penuaan dini pada kulit
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-pink-200 rounded-full opacity-60"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-purple-200 rounded-full opacity-40"></div>
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
                    😰 Masalah Kulit yang Meresahkan
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Masalah kulit tidak hanya mengganggu penampilan, tapi juga menurunkan rasa percaya diri dan
                    kualitas hidup Anda
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Jerawat Membandel</h3>
                    <p class="text-gray-600">
                        Jerawat yang tidak kunjung hilang, meninggalkan bekas hitam dan membuat wajah tidak percaya diri.
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
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Eksim & Dermatitis</h3>
                    <p class="text-gray-600">
                        Kulit gatal, kemerahan, dan mengelupas yang mengganggu aktivitas sehari-hari dan tidur malam.
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Produk Mahal Tidak Efektif</h3>
                    <p class="text-gray-600">
                        Sudah mencoba berbagai produk skincare mahal tapi hasilnya mengecewakan, bahkan memperparah kondisi.
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
                    🌿 British Propolis: Solusi Alami untuk Kulit Sehat
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dengan kandungan antibakteri, anti-inflamasi, dan antioksidan alami, British Propolis adalah
                    solusi terbaik untuk berbagai masalah kulit
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="space-y-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-pink-600"
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
                                    Kandungan flavonoid dan asam fenolik menghancurkan bakteri penyebab jerawat dan
                                    infeksi kulit tanpa merusak kulit sehat.
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Anti-Inflamasi Alami</h3>
                                <p class="text-gray-600">
                                    Meredakan peradangan, kemerahan, dan pembengkakan pada kulit yang terkena eksim,
                                    dermatitis, atau iritasi.
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Regenerasi Sel Kulit</h3>
                                <p class="text-gray-600">
                                    Mempercepat penyembuhan luka, menghilangkan bekas jerawat, dan merangsang
                                    pembentukan sel kulit baru yang sehat.
                                </p>
                            </div>
                        </div>

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
                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Antioksidan Pelindung</h3>
                                <p class="text-gray-600">
                                    Melindungi kulit dari radikal bebas dan polusi, mencegah penuaan dini, dan
                                    menjaga elastisitas kulit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-pink-100 to-purple-100 rounded-2xl p-8">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Hasil yang Bisa Anda Lihat:</h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-pink-700 mb-1">Dalam 24-48 Jam:</h4>
                                    <p class="text-sm text-gray-600">Rasa gatal berkurang, peradangan mereda</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-purple-700 mb-1">Dalam 3-7 Hari:</h4>
                                    <p class="text-sm text-gray-600">Jerawat mengering, kemerahan hilang</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-blue-700 mb-1">Dalam 2-4 Minggu:</h4>
                                    <p class="text-sm text-gray-600">Kulit tampak bersih, sehat, dan berkilau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Usage Methods Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    🧴 Cara Penggunaan untuk Kulit
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis dapat digunakan dengan berbagai cara sesuai kebutuhan dan jenis masalah kulit Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-pink-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2M9 3h10a2 2 0 012 2v12a4 4 0 01-2 2H9M9 7h4m-4 8h4m-4-16h4"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Konsumsi Oral</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Dosis:</strong> 10-15 tetes, 2x sehari</p>
                        <p><strong>Cara:</strong> Teteskan langsung ke mulut</p>
                        <p><strong>Waktu:</strong> Pagi dan malam sebelum tidur</p>
                        <p><strong>Manfaat:</strong> Memperbaiki kulit dari dalam</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-purple-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Aplikasi Topikal</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Dosis:</strong> 2-3 tetes untuk area bermasalah</p>
                        <p><strong>Cara:</strong> Oleskan langsung ke kulit</p>
                        <p><strong>Waktu:</strong> 2-3x sehari setelah cuci muka</p>
                        <p><strong>Manfaat:</strong> Mengatasi jerawat dan infeksi langsung</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-blue-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Face Mask</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Dosis:</strong> 5-7 tetes + madu murni</p>
                        <p><strong>Cara:</strong> Campur dan oleskan ke wajah</p>
                        <p><strong>Waktu:</strong> 2x seminggu, diamkan 15 menit</p>
                        <p><strong>Manfaat:</strong> Deep cleansing dan nutrisi kulit</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gradient-to-r from-pink-50 to-purple-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Tips Penggunaan untuk Hasil Maksimal</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <h4 class="font-semibold text-pink-700">✅ Yang Harus Dilakukan:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Bersihkan wajah sebelum aplikasi topikal</li>
                            <li>• Mulai dengan dosis kecil untuk tes sensitivitas</li>
                            <li>• Gunakan secara konsisten untuk hasil optimal</li>
                            <li>• Minum air putih yang banyak</li>
                            <li>• Hindari menyentuh area yang diobati</li>
                        </ul>
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-semibold text-red-700">❌ Yang Harus Dihindari:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Menggunakan produk skincare keras bersamaan</li>
                            <li>• Terpapar sinar matahari langsung setelah aplikasi</li>
                            <li>• Menghentikan penggunaan saat mulai membaik</li>
                            <li>• Memencet jerawat atau luka</li>
                            <li>• Menggunakan dosis berlebihan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before After Stories -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    📸 Transformasi Kulit Nyata
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Lihat bagaimana British Propolis mengubah kulit bermasalah menjadi kulit sehat dan bersih
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After Photo<br>Jerawat Parah → Kulit Bersih</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Sarah, 24 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Jerawat yang sudah 5 tahun hilang dalam 3 minggu! Sekarang kulit saya bersih dan percaya diri
                        lagi."
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After Photo<br>Eksim → Kulit Sehat</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Budi, 35 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Eksim di tangan yang gatal dan mengelupas sembuh total. Tidak ada lagi rasa gatal yang mengganggu!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After Photo<br>Bekas Jerawat → Kulit Mulus</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Maya, 28 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Bekas jerawat hitam yang membandel akhirnya memudar. Sekarang kulit wajah saya mulus kembali!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section class="py-20 bg-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    🧬 Kandungan Aktif untuk Kulit Sehat
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis mengandung senyawa bioaktif yang telah terbukti secara klinis efektif untuk
                    berbagai masalah kulit
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-pink-600"
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
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Quercetin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan sifat anti-inflamasi kuat yang meredakan kemerahan, bengkak, dan
                                iritasi pada kulit sensitif.
                            </p>
                            <div class="bg-pink-50 p-4 rounded-lg">
                                <p class="text-sm text-pink-800">
                                    <strong>Manfaat:</strong> Menenangkan kulit berjerawat dan mengurangi peradangan
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
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Pinocembrin</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa antibakteri dan antijamur yang efektif melawan Propionibacterium acnes
                                penyebab jerawat.
                            </p>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="text-sm text-purple-800">
                                    <strong>Manfaat:</strong> Membunuh bakteri jerawat dan mencegah infeksi kulit
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
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Asam Ferulic</h3>
                            <p class="text-gray-600 mb-4">
                                Antioksidan kuat yang melindungi kulit dari kerusakan radikal bebas dan mempercepat
                                regenerasi sel kulit.
                            </p>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-blue-800">
                                    <strong>Manfaat:</strong> Mencegah penuaan dini dan memperbaiki tekstur kulit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

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
                                    d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Galangin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan efek wound healing yang mempercepat penyembuhan luka dan mengurangi
                                pembentukan bekas luka.
                            </p>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-green-800">
                                    <strong>Manfaat:</strong> Menyembuhkan luka jerawat dan menghilangkan bekas hitam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-pink-600 to-purple-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                ✨ Wujudkan Kulit Impian Anda Hari Ini!
            </h2>
            <p class="text-xl text-pink-100 mb-8 max-w-3xl mx-auto">
                Jangan biarkan masalah kulit menurunkan rasa percaya diri Anda. British Propolis adalah solusi alami
                yang telah dipercaya ribuan orang untuk kulit sehat dan bersih.
            </p>

            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 mb-8 max-w-2xl mx-auto">
                <h3 class="text-xl font-bold text-white mb-3">🎁 Bonus Eksklusif Hari Ini</h3>
                <ul class="text-pink-100 text-left space-y-2">
                    <li>✅ E-book "Panduan Perawatan Kulit Alami"</li>
                    <li>✅ Konsultasi gratis dengan beauty expert</li>
                    <li>✅ Tips skincare routine yang tepat</li>
                    <li>✅ Garansi 100% uang kembali jika tidak puas</li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ url('/checkout') }}"
                    class="bg-white text-pink-700 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                >
                    <svg
                        class="w-5 h-5 mr-2"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 11-4 0v-6m4 0V9a2 2 0 10-4 0v4.01"
                        />
                    </svg>
                    Pesan Sekarang - Kulit Cantik!
                </a>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="border-2 border-white text-white hover:bg-white hover:text-pink-700 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                >
                    <svg
                        class="w-5 h-5 mr-2"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.105"
                        />
                    </svg>
                    Konsultasi Sekarang
                </a>
            </div>

            <p class="text-pink-200 mt-6 text-sm">
                💳 Pembayaran mudah: Transfer Bank, COD, atau E-Wallet
            </p>
        </div>
    </section>
@endsection
