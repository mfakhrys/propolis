@extends('layouts.landing')

@section('title', 'British Propolis & Kesehatan Mulut - Informasi Edukatif')
@section('meta_description', 'Ringkasan potensi antimikroba & antioksidan propolis sebagai pendukung kebersihan mulut
    bersama sikat gigi, floss, dan pemeriksaan gigi rutin.')
@section('meta_keywords',
    'british propolis mulut, obat sariawan alami, gusi berdarah propolis, bau mulut alami, propolis
    antibakteri mulut, obat sakit gigi alami, infeksi mulut propolis, mouthwash alami')

@section('og_title', 'British Propolis - Solusi Alami untuk Kesehatan Mulut')
@section('og_description',
    'Atasi masalah mulut dengan British Propolis premium. Efektif untuk sariawan, gusi berdarah, dan
    bau mulut. 100% alami tanpa efek samping!')
@section('twitter_title', 'British Propolis untuk Mulut Sehat')
@section('twitter_description',
    'Masalah mulut mengganggu? British Propolis solusinya! Antibakteri alami untuk mulut
    sehat.')

@section('hero')
    <section class="relative bg-gradient-to-br from-green-50 to-blue-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-6">
                        ℹ️ Edukasi Kesehatan Mulut</div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Mulut
                        <span class="text-green-600">Sehat & Segar</span>
                        dengan British Propolis
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">Suplemen propolis mengandung senyawa yang telah
                        dipelajari untuk aktivitas antimikroba. Pengelolaan kondisi mulut (sariawan, gingivitis) tetap
                        memerlukan kebersihan mulut konsisten dan konsultasi profesional bila menetap.</p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            🛒 Dapatkan Mulut Sehat Sekarang!
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
                            100% Alami
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
                            Aman untuk Anak
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
                            Hasil Cepat
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
                                <h3 class="text-xl font-bold text-gray-900">Profil Bioaktif Mulut</h3>
                                <p class="text-green-600 font-semibold">Data Pra-Klinis & Terbatas</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Potensi mendukung kenyamanan area sariawan*
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Perawatan gingiva tetap: sikat gigi lembut, floss
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Nafas segar: kombinasi kebersihan lidah & hidrasi
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Tidak menggantikan pemeriksaan gigi berkala
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
                    😰 Masalah Mulut yang Mengganggu
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Masalah mulut tidak hanya menyebabkan nyeri, tapi juga menurunkan kualitas hidup dan
                    hubungan sosial Anda
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
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sariawan Berulang</h3>
                    <p class="text-gray-600">
                        Sariawan yang sering muncul, perih, dan mengganggu saat makan, minum, atau berbicara.
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
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Gusi Berdarah</h3>
                    <p class="text-gray-600">
                        Gusi bengkak, berdarah saat sikat gigi, dan nyeri yang menandakan infeksi atau gingivitis.
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
                                d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-3-8v8m-6 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bau Mulut Tidak Sedap</h3>
                    <p class="text-gray-600">
                        Bau mulut yang persisten meskipun sudah menyikat gigi, mengurangi rasa percaya diri.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Potensi Bioaktif Propolis untuk Mulut</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dengan kandungan antibakteri, antiseptik, dan anti-inflamasi alami, British Propolis adalah
                    mouthwash alami terbaik untuk kesehatan mulut optimal
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Aktivitas Antimikroba (In Vitro)</h3>
                                <p class="text-gray-600">Studi menunjukkan efek terhadap beberapa bakteri oral;
                                    implementasi klinis memerlukan pendekatan kebersihan rutin.</p>
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
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Dukungan Jaringan</h3>
                                <p class="text-gray-600">
                                    Mempercepat penyembuhan sariawan, luka di mulut, dan meredakan peradangan gusi dalam
                                    hitungan hari.
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
                                            d="M13 10V3L4 14h7v7l9-11h-7z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Pendukung Kebersihan Nafas</h3>
                                <p class="text-gray-600">
                                    Menghilangkan bau mulut dari akar penyebabnya dan memberikan nafas segar yang tahan
                                    lama.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-yellow-600"
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Komplemen Kebersihan Harian</h3>
                                <p class="text-gray-600">
                                    Mencegah kerusakan gigi, karies, dan penyakit gusi untuk kesehatan mulut jangka panjang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-green-100 to-blue-100 rounded-2xl p-8">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Catatan Variabilitas</h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-green-700 mb-1">Awal:</h4>
                                    <p class="text-sm text-gray-600">Fokus kebersihan & hidrasi</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-blue-700 mb-1">Pemantauan:</h4>
                                    <p class="text-sm text-gray-600">Evaluasi perbaikan bertahap</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-purple-700 mb-1">Lanjutan:</h4>
                                    <p class="text-sm text-gray-600">Hasil berbeda tiap individu</p>
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
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Contoh Penggunaan Umum</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis dapat digunakan dengan berbagai cara untuk mengatasi masalah mulut spesifik Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-green-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Obat Kumur Alami</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Beberapa tetes dalam air (tidak ditelan) - opsional</p>
                        <p><strong>Cara:</strong> Kumur selama 30 detik, buang</p>
                        <p><strong>Waktu:</strong> Pagi dan malam setelah sikat gigi</p>
                        <p><strong>Catatan:</strong> Bukan pengganti obat kumur direkomendasikan dokter</p>
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
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Aplikasi Langsung</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Patch kecil – hentikan bila iritasi</p>
                        <p><strong>Cara:</strong> Teteskan langsung ke area sariawan</p>
                        <p><strong>Waktu:</strong> 3-4x sehari setelah makan</p>
                        <p><strong>Catatan:</strong> Kondisi menetap perlu evaluasi profesional</p>
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
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2M9 3h10a2 2 0 012 2v12a4 4 0 01-2 2H9M9 7h4m-4 8h4m-4-16h4"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Konsumsi Oral</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Konsumsi tetes sesuai preferensi pengguna</p>
                        <p><strong>Cara:</strong> Teteskan langsung ke mulut</p>
                        <p><strong>Waktu:</strong> Pagi dan malam sebelum tidur</p>
                        <p><strong>Catatan:</strong> Tetap sikat gigi, floss, kontrol gigi rutin</p>
                        @section('disclaimer') @include('partials.disclaimer') @endsection
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gradient-to-r from-green-50 to-blue-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Tips Penggunaan untuk Hasil Maksimal</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <h4 class="font-semibold text-green-700">✅ Yang Harus Dilakukan:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Sikat gigi dengan lembut sebelum menggunakan</li>
                            <li>• Hindari makan/minum 30 menit setelah penggunaan</li>
                            <li>• Gunakan secara rutin untuk pencegahan</li>
                            <li>• Bersihkan lidah dengan scraper</li>
                            <li>• Minum air putih yang cukup</li>
                        </ul>
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-semibold text-red-700">❌ Yang Harus Dihindari:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Menelan obat kumur propolis</li>
                            <li>• Menggunakan alkohol/rokok setelah aplikasi</li>
                            <li>• Makan makanan pedas saat ada sariawan</li>
                            <li>• Menghentikan penggunaan saat mulai membaik</li>
                            <li>• Menggunakan bersamaan dengan obat kumur kimia</li>
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
                    📸 Transformasi Kesehatan Mulut Nyata
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Lihat bagaimana British Propolis mengubah masalah mulut menjadi mulut sehat dan segar
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After Photo<br>Sariawan Parah → Mulut Sehat</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Rina, 32 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Sariawan yang sudah 2 minggu tidak sembuh, hilang dalam 3 hari! Sekarang mulut saya sehat dan bisa
                        makan dengan nyaman."
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After Photo<br>Gusi Berdarah → Gusi Sehat</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Ahmad, 45 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Gusi yang selalu berdarah saat sikat gigi kini sehat pink. Tidak ada lagi rasa ngilu dan bengkak!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 text-center">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After Photo<br>Bau Mulut → Nafas Segar</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Sari, 28 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Bau mulut yang membuat tidak percaya diri kini hilang total. Nafas segar sepanjang hari tanpa
                        permen karet!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section class="py-20 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    🧬 Kandungan Aktif untuk Mulut Sehat
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis mengandung senyawa bioaktif yang telah terbukti secara klinis efektif untuk
                    kesehatan mulut dan gigi
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
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Pinocembrin</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa antibakteri yang sangat efektif melawan Streptococcus mutans dan bakteri penyebab
                                karies gigi.
                            </p>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-green-800">
                                    <strong>Manfaat:</strong> Mencegah kerusakan gigi dan menghentikan perkembangan bakteri
                                    jahat
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
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Chrysin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan sifat anti-inflamasi yang meredakan pembengkakan dan kemerahan pada gusi.
                            </p>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-blue-800">
                                    <strong>Manfaat:</strong> Menyembuhkan gingivitis dan meredakan nyeri gusi
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
                                Senyawa dengan aktivitas wound healing yang mempercepat penyembuhan sariawan dan luka di
                                mulut.
                            </p>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="text-sm text-purple-800">
                                    <strong>Manfaat:</strong> Menyembuhkan sariawan dan luka mulut dengan cepat
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-yellow-600"
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
                                Antiseptik alami yang menghilangkan bau mulut dengan membunuh bakteri anaerob penyebab
                                halitosis.
                            </p>
                            <div class="bg-yellow-50 p-4 rounded-lg">
                                <p class="text-sm text-yellow-800">
                                    <strong>Manfaat:</strong> Menghilangkan bau mulut dan memberikan nafas segar alami
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-green-600 to-blue-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                🦷 Wujudkan Mulut Sehat Impian Anda Hari Ini!
            </h2>
            <p class="text-xl text-green-100 mb-8 max-w-3xl mx-auto">
                Jangan biarkan masalah mulut mengganggu kualitas hidup Anda. British Propolis adalah solusi alami
                yang telah dipercaya ribuan orang untuk mulut sehat dan nafas segar.
            </p>

            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 mb-8 max-w-2xl mx-auto">
                <h3 class="text-xl font-bold text-white mb-3">🎁 Bonus Eksklusif Hari Ini</h3>
                <ul class="text-green-100 text-left space-y-2">
                    <li>✅ E-book "Panduan Perawatan Mulut Alami"</li>
                    <li>✅ Konsultasi gratis dengan dental expert</li>
                    <li>✅ Tips oral hygiene yang tepat</li>
                    <li>✅ Garansi 100% uang kembali jika tidak puas</li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ url('/checkout') }}"
                    class="bg-white text-green-700 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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
                    Pesan Sekarang - Mulut Sehat!
                </a>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="border-2 border-white text-white hover:bg-white hover:text-green-700 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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

            <p class="text-green-200 mt-6 text-sm">
                💳 Pembayaran mudah: Transfer Bank, COD, atau E-Wallet
            </p>
        </div>
    </section>
@endsection
