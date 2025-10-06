@extends('layouts.landing')

@section('title', 'British Propolis & Dukungan Perawatan Luka - Informasi Edukatif')
@section('meta_description', 'Potensi aktivitas antimikroba & antioksidan propolis dalam konteks perawatan luka standar.
    Bukan pengganti evaluasi medis.')
@section('meta_keywords',
    'british propolis luka, obat luka bakar alami, luka diabetes propolis, penyembuhan luka alami, propolis
    wound healing, obat luka operasi, luka kronis propolis, antiseptik alami')

@section('og_title', 'British Propolis - Solusi Alami untuk Penyembuhan Luka')
@section('og_description',
    'Sembuhkan berbagai jenis luka dengan British Propolis premium. Efektif untuk luka bakar, diabetes, dan operasi.
    100% alami tanpa efek samping!')
@section('twitter_title', 'British Propolis untuk Penyembuhan Luka Cepat')
@section('twitter_description', 'Luka sulit sembuh? British Propolis solusinya! Wound healing alami untuk pemulihan
    optimal.')

@section('hero')
    <section class="relative bg-gradient-to-br from-blue-50 to-purple-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-6">ℹ️
                        Edukasi Perawatan Luka</div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Luka
                        <span class="text-blue-600">Sembuh Sempurna</span>
                        dengan British Propolis
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">Ringkasan penelitian awal tentang potensi propolis
                        dalam mendukung lingkungan luka yang bersih. Perawatan luka kronis tetap harus ditangani tenaga
                        kesehatan.</p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            🛒 Dapatkan Penyembuhan Cepat!
                        </a>
                        <a
                            href="https://wa.me/6281234567890"
                            target="_blank"
                            class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            💬 Konsultasi Gratis
                        </a>
                    </div>
                    <div class="flex items-center space-x-6 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-blue-500 mr-2"
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
                                class="w-5 h-5 text-blue-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Tanpa Bekas Luka
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-blue-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Penyembuhan Cepat
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10">
                        <div class="bg-white rounded-2xl p-8 shadow-xl">
                            <div class="text-center mb-6">
                                <div class="w-24 h-32 bg-blue-600 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">BRITISH<br>PROPOLIS</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Profil Bioaktif Luka</h3>
                                <p class="text-blue-600 font-semibold">Data Pra-Klinis / Terbatas</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    Aktivitas antimikroba in vitro
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    Tidak menggantikan manajemen luka diabetes profesional
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    Dapat mendampingi protokol perawatan (dengan persetujuan tenaga kesehatan)
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    Kebersihan & debridement medis tetap utama
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-200 rounded-full opacity-60"></div>
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
                    😰 Masalah Luka yang Mengkhawatirkan
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Luka yang tak kunjung sembuh tidak hanya menyebabkan nyeri, tapi juga risiko infeksi dan
                    komplikasi serius yang mengancam kesehatan
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
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Luka Bakar Parah</h3>
                    <p class="text-gray-600">
                        Luka bakar yang melepuh, perih, dan sulit sembuh, meninggalkan bekas yang mengganggu penampilan.
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
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Luka Diabetes Kronis</h3>
                    <p class="text-gray-600">
                        Luka kaki diabetes yang tidak sembuh-sembuh, berisiko infeksi, gangren, dan amputasi.
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
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Obat Luka Tidak Efektif</h3>
                    <p class="text-gray-600">
                        Berbagai salep dan obat luka yang mahal tidak memberikan hasil, malah menimbulkan iritasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Potensi Komponen Propolis dalam Konteks Luka
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dengan kandungan antimikroba, regenerasi sel, dan anti-inflamasi alami, British Propolis adalah
                    solusi terbaik untuk penyembuhan luka yang cepat dan sempurna
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="space-y-8">
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
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Aktivitas Antimikroba (In Vitro)</h3>
                                <p class="text-gray-600">
                                    Membunuh bakteri, virus, dan jamur penyebab infeksi luka, mencegah komplikasi dan
                                    mempercepat penyembuhan.
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Dukungan Proses Regenerasi</h3>
                                <p class="text-gray-600">
                                    Merangsang pembentukan sel kulit baru, kolagen, dan pembuluh darah untuk penyembuhan
                                    luka yang optimal.
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
                                            d="M13 10V3L4 14h7v7l9-11h-7z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Modulasi Inflamasi (Data Awal)</h3>
                                <p class="text-gray-600">
                                    Mengurangi peradangan, pembengkakan, dan nyeri pada luka, menciptakan lingkungan optimal
                                    untuk penyembuhan.
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Komponen Antioksidan</h3>
                                <p class="text-gray-600">
                                    Melindungi jaringan dari kerusakan radikal bebas dan memperkuat barrier kulit yang baru
                                    terbentuk.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl p-8">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Catatan Variabilitas Proses</h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-blue-700 mb-1">Fase Awal:</h4>
                                    <p class="text-sm text-gray-600">Evaluasi kebutuhan medis & kebersihan dasar</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-purple-700 mb-1">Pemantauan:</h4>
                                    <p class="text-sm text-gray-600">Perubahan berbeda per individu / jenis luka</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-green-700 mb-1">Lanjutan:</h4>
                                    <p class="text-sm text-gray-600">Tidak ada jaminan waktu penutupan atau bekas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wound Types Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Contoh Kategori Luka (Informasi)</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis efektif untuk berbagai jenis luka berkat kandungan wound healing yang komprehensif
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Luka Bakar</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Luka bakar derajat 1 dan 2</p>
                        <p>• Luka bakar air panas/minyak</p>
                        <p>• Luka bakar sinar matahari</p>
                        <p>• Luka bakar kimia ringan</p>
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
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Luka Diabetes</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Ulkus kaki diabetik</p>
                        <p>• Luka yang sulit sembuh</p>
                        <p>• Luka dengan sirkulasi buruk</p>
                        <p>• Luka berisiko infeksi tinggi</p>
                    </div>
                </div>

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
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Luka Operasi</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Luka bekas operasi</p>
                        <p>• Luka jahitan terbuka</p>
                        <p>• Luka pasca sirkumsisi</p>
                        <p>• Luka bedah minor</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Luka Traumatik</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Luka sayat dan robek</p>
                        <p>• Luka akibat kecelakaan</p>
                        <p>• Luka gores dalam</p>
                        <p>• Luka akibat jatuh</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-yellow-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Luka Kronis</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Luka yang tidak sembuh >6 minggu</p>
                        <p>• Pressure ulcers (dekubitus)</p>
                        <p>• Luka vena</p>
                        <p>• Luka dengan gangguan penyembuhan</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-indigo-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Luka Infeksi</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Luka bernanah</p>
                        <p>• Luka dengan bakteri resisten</p>
                        <p>• Abses dan bisul</p>
                        <p>• Luka dengan komplikasi infeksi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Usage Methods Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Contoh Penggunaan Umum (Bukan Protokol Medis)
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis dapat digunakan dengan berbagai cara sesuai jenis luka dan tingkat keparahan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border border-blue-200">
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Aplikasi Topikal</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Aplikasi topikal hati-hati (uji sensitivitas)</p>
                        <p><strong>Cara:</strong> Bersihkan luka, teteskan propolis</p>
                        <p><strong>Waktu:</strong> 2-3x sehari setelah pembersihan</p>
                        <p><strong>Catatan:</strong> Jangan gunakan pada luka dalam / terinfeksi berat tanpa dokter</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg border border-purple-200">
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
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Kompres Basah</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Larutan encer (opsional) – tetap steril</p>
                        <p><strong>Cara:</strong> Rendam kasa, kompres luka 15 menit</p>
                        <p><strong>Waktu:</strong> 3-4x sehari untuk luka besar</p>
                        <p><strong>Catatan:</strong> Tidak mengganti saline medis standar</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg border border-green-200">
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
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2M9 3h10a2 2 0 012 2v12a4 4 0 01-2 2H9M9 7h4m-4 8h4m-4-16h4"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Konsumsi Oral</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Konsumsi sesuai preferensi (tidak wajib)</p>
                        <p><strong>Cara:</strong> Teteskan langsung ke mulut</p>
                        <p><strong>Waktu:</strong> Sebelum makan untuk penyerapan optimal</p>
                        <p><strong>Catatan:</strong> Pemulihan ditentukan kondisi sistemik & perawatan medis</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Prinsip Perawatan Umum</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <h4 class="font-semibold text-blue-700">✅ Protokol Perawatan:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Bersihkan luka dengan air steril atau NaCl 0.9%</li>
                            <li>• Keringkan dengan kasa steril (jangan digosok)</li>
                            <li>• Pertimbangkan konsultasi sebelum menambah bahan baru</li>
                            <li>• Tutup dengan kasa steril jika diperlukan</li>
                            <li>• Ganti perban setiap hari atau sesuai kebutuhan</li>
                        </ul>
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-semibold text-red-700">❌ Yang Harus Dihindari:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Menggunakan produk belum teruji pada luka kronis</li>
                            @section('disclaimer') @include('partials.disclaimer') @endsection
                            <li>• Menutup luka terlalu rapat tanpa ventilasi</li>
                            <li>• Menghentikan penggunaan saat mulai membaik</li>
                            <li>• Menyentuh luka dengan tangan kotor</li>
                            <li>• Menggunakan perban yang tidak steril</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Before After Stories -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    📸 Transformasi Penyembuhan Luka Nyata
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Lihat bagaimana British Propolis menyembuhkan luka yang paling sulit sekalipun
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After<br>Luka Bakar → Sembuh Tanpa Bekas</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Agus, 38 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Luka bakar minyak panas yang melepuh sembuh dalam 10 hari tanpa bekas. Tidak ada rasa perih lagi!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After<br>Luka Diabetes → Tertutup Sempurna</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Pak Hasan, 65 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Luka kaki diabetes yang 3 bulan tidak sembuh, kini tertutup sempurna. Terhindar dari amputasi!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After<br>Luka Operasi → Pulih Cepat</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Sari, 32 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Bekas operasi caesar sembuh 2x lebih cepat dari perkiraan dokter. Jahitan rapi tanpa keloid!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section class="py-20 bg-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    🧬 Kandungan Wound Healing Aktif
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis mengandung senyawa bioaktif yang telah terbukti secara klinis efektif untuk
                    penyembuhan luka yang optimal
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
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
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Asam Caffeic</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa dengan aktivitas wound healing yang merangsang pembentukan kolagen dan mempercepat
                                re-epitelisasi.
                            </p>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-blue-800">
                                    <strong>Manfaat:</strong> Mempercepat penutupan luka dan pembentukan jaringan baru
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
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Galangin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan efek antimikroba spektrum luas dan aktivitas angiogenesis untuk pembentukan
                                pembuluh darah baru.
                            </p>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="text-sm text-purple-800">
                                    <strong>Manfaat:</strong> Mencegah infeksi dan meningkatkan aliran darah ke luka
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
                                    d="M13 10V3L4 14h7v7l9-11h-7z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Pinocembrin</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa dengan efek antioksidan kuat yang melindungi jaringan dari kerusakan dan merangsang
                                proliferasi sel.
                            </p>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-green-800">
                                    <strong>Manfaat:</strong> Mempercepat regenerasi sel dan mencegah pembentukan jaringan
                                    parut
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
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Quercetin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan efek anti-inflamasi yang mengurangi edema dan memodulasi respons imun untuk
                                penyembuhan optimal.
                            </p>
                            <div class="bg-yellow-50 p-4 rounded-lg">
                                <p class="text-sm text-yellow-800">
                                    <strong>Manfaat:</strong> Mengurangi peradangan dan mempercepat fase penyembuhan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                ⚡ Wujudkan Penyembuhan Luka Sempurna Hari Ini!
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Jangan biarkan luka menghalangi aktivitas dan kebahagiaan Anda. British Propolis adalah solusi alami
                yang telah dipercaya ribuan orang untuk penyembuhan luka yang cepat dan sempurna.
            </p>

            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 mb-8 max-w-2xl mx-auto">
                <h3 class="text-xl font-bold text-white mb-3">🎁 Bonus Eksklusif Hari Ini</h3>
                <ul class="text-blue-100 text-left space-y-2">
                    <li>✅ E-book "Panduan Perawatan Luka Modern"</li>
                    <li>✅ Konsultasi gratis dengan wound care specialist</li>
                    <li>✅ Protokol perawatan luka yang tepat</li>
                    <li>✅ Garansi 100% uang kembali jika tidak puas</li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ url('/checkout') }}"
                    class="bg-white text-blue-700 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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
                    Pesan Sekarang - Sembuh Cepat!
                </a>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="border-2 border-white text-white hover:bg-white hover:text-blue-700 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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

            <p class="text-blue-200 mt-6 text-sm">
                💳 Pembayaran mudah: Transfer Bank, COD, atau E-Wallet
            </p>
        </div>
    </section>
@endsection
