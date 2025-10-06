@extends('layouts.landing')

@section('title', 'British Propolis & Respons Alergi - Informasi Edukatif')
@section('meta_description', 'Ringkasan penelitian awal propolis terkait modulasi inflamasi & antioksidan. Bukan
    antihistamin pengganti terapi dokter.')
@section('meta_keywords',
    'british propolis alergi, obat asma alami, rinitis alergi propolis, alergi makanan alami, propolis
    antihistamin, obat alergi alami, propolis anti alergi, meredakan alergi propolis')

@section('og_title', 'British Propolis - Solusi Alami untuk Meredakan Alergi')
@section('og_description',
    'Atasi berbagai alergi dengan British Propolis premium. Efektif untuk asma, rinitis, dan alergi makanan.
    100% alami tanpa efek samping!')
@section('twitter_title', 'British Propolis untuk Bebas Alergi')
@section('twitter_description',
    'Alergi mengganggu aktivitas? British Propolis solusinya! Antihistamin alami untuk hidup
    bebas alergi.')

@section('hero')
    <section class="relative bg-gradient-to-br from-orange-50 to-red-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="bg-orange-100 text-orange-800 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-6">
                        ℹ️ Edukasi Respons Alergi</div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Hidup
                        <span class="text-orange-600">Bebas Alergi</span>
                        dengan British Propolis
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">Propolis mengandung flavonoid yang diteliti secara
                        pra-klinis terkait jalur inflamasi. Tidak menggantikan inhaler, antihistamin resep, atau penanganan
                        anafilaksis.</p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            🛒 Dapatkan Kebebasan dari Alergi!
                        </a>
                        <a
                            href="https://wa.me/6281234567890"
                            target="_blank"
                            class="border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            💬 Konsultasi Gratis
                        </a>
                    </div>
                    <div class="flex items-center space-x-6 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-orange-500 mr-2"
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
                                class="w-5 h-5 text-orange-500 mr-2"
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
                                class="w-5 h-5 text-orange-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Tanpa Ketergantungan
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10">
                        <div class="bg-white rounded-2xl p-8 shadow-xl">
                            <div class="text-center mb-6">
                                <div
                                    class="w-24 h-32 bg-orange-600 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">BRITISH<br>PROPOLIS</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Profil Bioaktif Alergi</h3>
                                <p class="text-orange-600 font-semibold">Data Awal / Pra-Klinis</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full mr-3"></div>
                                    Tidak untuk keadaan darurat pernapasan
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full mr-3"></div>
                                    Dapat mendampingi kebersihan lingkungan
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full mr-3"></div>
                                    Tidak digunakan untuk alergi makanan akut
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-orange-500 rounded-full mr-3"></div>
                                    Fokus keseimbangan respon (teori penelitian)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-orange-200 rounded-full opacity-60"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-red-200 rounded-full opacity-40"></div>
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
                    😰 Penderitaan Alergi yang Mengganggu
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Alergi tidak hanya menyebabkan ketidaknyamanan fisik, tapi juga membatasi aktivitas dan
                    menurunkan kualitas hidup Anda
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
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Asma & Sesak Nafas</h3>
                    <p class="text-gray-600">
                        Serangan asma yang tiba-tiba, nafas terasa berat, dan dada sesak yang membuat aktivitas terbatas.
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Rinitis & Bersin Bersin</h3>
                    <p class="text-gray-600">
                        Hidung berair, bersin terus menerus, mata berair, dan gatal yang mengganggu produktivitas.
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Obat Kimia Ketergantungan</h3>
                    <p class="text-gray-600">
                        Tergantung antihistamin kimia yang menimbulkan efek samping dan tidak mengatasi akar masalah.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Potensi Propolis dalam Konteks Alergi</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Dengan kandungan antihistamin alami, anti-inflamasi, dan imunomodulator, British Propolis adalah
                    solusi aman dan efektif untuk berbagai jenis alergi
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="space-y-8">
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
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Modulasi Jalur Histamin (Pra-Klinis)</h3>
                                <p class="text-gray-600">
                                    Menghambat pelepasan histamin yang menyebabkan reaksi alergi seperti bersin, gatal, dan
                                    bengkak tanpa efek samping.
                                </p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-red-600"
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Kenyamanan Saluran Napas</h3>
                                <p class="text-gray-600">
                                    Merelaksasi otot-otot saluran nafas, membuka bronkus, dan meredakan sesak nafas pada
                                    penderita asma.
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Imunomodulasi (Data Awal)</h3>
                                <p class="text-gray-600">
                                    Menyeimbangkan sistem imun yang berlebihan reaktif terhadap alergen, mencegah reaksi
                                    alergi berulang.
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Regulasi Inflamasi (Studi Laboratorium)
                                </h3>
                                <p class="text-gray-600">
                                    Mengurangi peradangan di saluran nafas, hidung, dan mata yang disebabkan oleh reaksi
                                    alergi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-orange-100 to-red-100 rounded-2xl p-8">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Catatan Variasi Individu</h3>
                            <div class="space-y-4">
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-orange-700 mb-1">Awal:</h4>
                                    <p class="text-sm text-gray-600">Pantau gejala – gunakan terapi dokter jika perlu</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-red-700 mb-1">Pemantauan:</h4>
                                    <p class="text-sm text-gray-600">Lingkungan bebas alergen & kebersihan penting</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-md">
                                    <h4 class="font-semibold text-blue-700 mb-1">Lanjutan:</h4>
                                    <p class="text-sm text-gray-600">Hasil tidak seragam; tidak ada jaminan bebas alergi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Allergy Types Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Contoh Kategori Alergi (Informasi)</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis efektif untuk berbagai jenis alergi berkat kandungan antihistamin alami yang
                    komprehensif
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-orange-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Asma Alergi</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Sesak nafas akibat alergen</p>
                        <p>• Serangan asma mendadak</p>
                        <p>• Batuk alergi berkepanjangan</p>
                        <p>• Dada terasa berat dan sesak</p>
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
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Rinitis Alergi</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Bersin-bersin terus menerus</p>
                        <p>• Hidung berair dan tersumbat</p>
                        <p>• Mata gatal dan berair</p>
                        <p>• Hidung gatal dan tidak nyaman</p>
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
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Alergi Makanan</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Reaksi setelah makan tertentu</p>
                        <p>• Gatal-gatal dan ruam kulit</p>
                        <p>• Mual dan gangguan pencernaan</p>
                        <p>• Bengkak di bibir atau wajah</p>
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
                                d="M13 10V3L4 14h7v7l9-11h-7z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Dermatitis Alergi</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Eksim akibat alergen</p>
                        <p>• Kulit gatal dan kemerahan</p>
                        <p>• Ruam yang muncul tiba-tiba</p>
                        <p>• Kulit kering dan mengelupas</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Alergi Debu & Tungau</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Bersin di pagi hari</p>
                        <p>• Hidung tersumbat saat bangun</p>
                        <p>• Mata merah dan gatal</p>
                        <p>• Batuk kering berkepanjangan</p>
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
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Alergi Obat</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Reaksi setelah minum obat</p>
                        <p>• Ruam kulit mendadak</p>
                        <p>• Bengkak dan gatal-gatal</p>
                        <p>• Sesak nafas ringan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Usage Methods Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Contoh Penggunaan Umum (Non Terapi)</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis dapat digunakan dengan berbagai cara sesuai jenis alergi dan tingkat keparahan gejala
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border border-orange-200">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-orange-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Ilustrasi Pola Rutin</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Beberapa tetes 1–2x per hari (opsional)</p>
                        <p><strong>Cara:</strong> Teteskan langsung ke mulut</p>
                        <p><strong>Waktu:</strong> Pagi dan malam sebelum tidur</p>
                        <p><strong>Manfaat:</strong> Mencegah serangan alergi berulang</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg border border-red-200">
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
                                d="M13 10V3L4 14h7v7l9-11h-7z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Bukan Untuk Keadaan Darurat</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Peringatan:</strong> Gunakan rencana darurat dokter untuk serangan berat</p>
                        <p><strong>Cara:</strong> Teteskan langsung ke mulut</p>
                        <p><strong>Waktu:</strong> Segera saat gejala muncul</p>
                        <p><strong>Manfaat:</strong> Meredakan serangan dengan cepat</p>
                    </div>
                </div>

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
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 7.172V5L8 4z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Contoh Inhalasi</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Uap air hangat (hindari risiko luka bakar)</p>
                        <p><strong>Cara:</strong> Hirup uap selama 5-10 menit</p>
                        <p><strong>Waktu:</strong> 2-3x sehari saat sesak</p>
                        <p><strong>Manfaat:</strong> Melegakan saluran nafas</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Tips Umum</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <h4 class="font-semibold text-orange-700">✅ Yang Harus Dilakukan:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Identifikasi & kelola pemicu lingkungan</li>
                            <li>• Lanjutkan penggunaan rutin untuk pencegahan</li>
                            <li>• Hindari alergen yang sudah diketahui</li>
                            <li>• Jaga kebersihan lingkungan dari debu</li>
                            <li>• Minum air putih yang banyak</li>
                        </ul>
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-semibold text-red-700">❌ Yang Harus Dihindari:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Mengabaikan rencana tindakan alergi dokter</li>
                            @section('disclaimer') @include('partials.disclaimer') @endsection
                            <li>• Terpapar alergen saat masih pemulihan</li>
                            <li>• Menggunakan bersama obat alergi tanpa konsultasi</li>
                            <li>• Merokok atau terpapar asap</li>
                            <li>• Stres berlebihan yang memicu alergi</li>
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
                    📸 Transformasi Bebas Alergi Nyata
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Lihat bagaimana British Propolis membebaskan penderita dari berbagai jenis alergi
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After<br>Asma Alergi → Nafas Lega</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Doni, 42 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Asma yang kambuh setiap ganti musim kini terkontrol. Nafas saya lega dan bisa beraktivitas normal
                        tanpa inhaler!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After<br>Rinitis → Hidung Lega</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Sinta, 29 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Bersin-bersin setiap pagi kini hilang. Hidung tidak lagi tersumbat dan mata tidak berair!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Before/After<br>Alergi Makanan → Bebas Makan</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Rudi, 35 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">
                        "Alergi seafood yang selalu bikin gatal-gatal kini hilang. Bisa makan udang dan kepiting lagi!"
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section class="py-20 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    🧬 Kandungan Anti-Alergi Aktif
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    British Propolis mengandung senyawa bioaktif yang telah terbukti secara klinis efektif sebagai
                    antihistamin dan anti-alergi alami
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
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
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Quercetin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan efek antihistamin kuat yang menghambat pelepasan histamin dan meredakan
                                reaksi alergi.
                            </p>
                            <div class="bg-orange-50 p-4 rounded-lg">
                                <p class="text-sm text-orange-800">
                                    <strong>Manfaat:</strong> Mengurangi bersin, gatal, dan bengkak akibat alergi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-red-600"
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
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Kaempferol</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa anti-inflamasi yang meredakan peradangan di saluran nafas dan hidung akibat alergi.
                            </p>
                            <div class="bg-red-50 p-4 rounded-lg">
                                <p class="text-sm text-red-800">
                                    <strong>Manfaat:</strong> Melegakan saluran nafas dan mengurangi hidung tersumbat
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
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Asam Caffeic</h3>
                            <p class="text-gray-600 mb-4">
                                Senyawa dengan efek bronkodilator alami yang merelaksasi otot saluran nafas dan meredakan
                                sesak.
                            </p>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-blue-800">
                                    <strong>Manfaat:</strong> Meredakan asma dan sesak nafas akibat alergi
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
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Chrysin</h3>
                            <p class="text-gray-600 mb-4">
                                Flavonoid dengan efek imunomodulator yang menyeimbangkan respons imun berlebihan terhadap
                                alergen.
                            </p>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-green-800">
                                    <strong>Manfaat:</strong> Mencegah reaksi alergi berulang dan menstabilkan imun
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-orange-600 to-red-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                🌿 Wujudkan Hidup Bebas Alergi Hari Ini!
            </h2>
            <p class="text-xl text-orange-100 mb-8 max-w-3xl mx-auto">
                Jangan biarkan alergi membatasi aktivitas dan kebahagiaan Anda. British Propolis adalah solusi alami
                yang telah dipercaya ribuan orang untuk hidup bebas alergi.
            </p>

            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 mb-8 max-w-2xl mx-auto">
                <h3 class="text-xl font-bold text-white mb-3">🎁 Bonus Eksklusif Hari Ini</h3>
                <ul class="text-orange-100 text-left space-y-2">
                    <li>✅ E-book "Panduan Hidup Bebas Alergi"</li>
                    <li>✅ Konsultasi gratis dengan allergy specialist</li>
                    <li>✅ Tips menghindari alergen dalam kehidupan sehari-hari</li>
                    <li>✅ Garansi 100% uang kembali jika tidak puas</li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ url('/checkout') }}"
                    class="bg-white text-orange-700 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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
                    Pesan Sekarang - Bebas Alergi!
                </a>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="border-2 border-white text-white hover:bg-white hover:text-orange-700 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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

            <p class="text-orange-200 mt-6 text-sm">
                💳 Pembayaran mudah: Transfer Bank, COD, atau E-Wallet
            </p>
        </div>
    </section>
@endsection
