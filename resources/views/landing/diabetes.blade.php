@extends('layouts.landing')

@section('title', 'British Propolis & Dukungan Metabolik - Mendampingi Perawatan Diabetes')
@section('meta_description', 'Informasi mengenai peran propolis sebagai pendukung gaya hidup sehat dan manajemen
    metabolik. Bukan pengganti obat atau terapi medis profesional.')
@section('meta_keywords', 'propolis metabolik, dukungan gaya hidup diabetes, propolis antioksidan, inflamasi, kesehatan
    metabolik')
@section('og_title', 'British Propolis - Pendamping Gaya Hidup Sehat (Diabetes)')
@section('og_description', 'Peran propolis: antioksidan dan anti-inflamasi yang dapat mendukung pola hidup sehat pada
    orang dengan diabetes. Bukan terapi utama.')
@section('twitter_title', 'Propolis & Dukungan Metabolik')
@section('twitter_description', 'Edukasi: potensi propolis dalam mendukung kesehatan metabolik sebagai bagian pola hidup
    sehat. Bukan klaim penyembuhan.')

@section('hero')
    <section class="relative bg-gradient-to-br from-emerald-50 to-teal-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full text-sm font-semibold inline-block mb-6">
                        ℹ️ Edukasi Kesehatan Metabolik
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Diabetes
                        <span class="text-emerald-600">Terkontrol</span>
                        dengan British Propolis
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Informasi edukatif tentang bagaimana komponen bioaktif propolis (flavonoid & antioksidan)
                        <strong>dapat mendukung strategi gaya hidup sehat</strong> (makanan seimbang, aktivitas fisik, tidur
                        cukup, manajemen stres) dalam manajemen metabolik. Bukan pengganti konsultasi dokter atau terapi
                        yang diresepkan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-emerald-600 hover:bg-emerald-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            🛒 Kontrol Diabetes Sekarang!
                        </a>
                        <a
                            href="https://wa.me/6281234567890"
                            target="_blank"
                            class="border-2 border-emerald-600 text-emerald-600 hover:bg-emerald-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
                        >
                            💬 Konsultasi Gratis
                        </a>
                    </div>
                    <div class="flex items-center space-x-6 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-emerald-500 mr-2"
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
                                class="w-5 h-5 text-emerald-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Konsultasi Tenaga Kesehatan Tetap Diperlukan
                        </div>
                        <div class="flex items-center">
                            <svg
                                class="w-5 h-5 text-emerald-500 mr-2"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            Fokus Pendamping Bukan Terapi Utama
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10">
                        <div class="bg-white rounded-2xl p-8 shadow-xl">
                            <div class="text-center mb-6">
                                <div
                                    class="w-24 h-32 bg-emerald-600 rounded-lg mx-auto mb-4 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">BRITISH<br>PROPOLIS</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Profil Bioaktif Propolis</h3>
                                <p class="text-emerald-600 font-semibold">Data Pra-Klinis & Beberapa Studi Manusia</p>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div> Potensi membantu
                                    keseimbangan oksidatif & inflamasi
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div> Mendukung sensitivitas
                                    insulin (indikasi dari studi awal)
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div> Dapat menjadi bagian pola
                                    hidup sehat menyeluruh
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></div> Konsultasikan perubahan
                                    regimen terapi kepada dokter
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-emerald-200 rounded-full opacity-60"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-teal-200 rounded-full opacity-40"></div>
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
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Diabetes & Pentingnya Pendekatan Terpadu</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Manajemen diabetes memerlukan kombinasi edukasi, pola
                    makan seimbang, aktivitas fisik, kepatuhan obat, pemantauan, dan dukungan profesional. Informasi berikut
                    bersifat edukatif.</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Hiperglikemia</h3>
                    <p class="text-gray-600">Kadar glukosa darah yang meningkat perlu evaluasi dan penyesuaian rencana
                        perawatan oleh tenaga kesehatan.</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Risiko Jangka Panjang</h3>
                    <p class="text-gray-600">Komplikasi kronis dapat dikurangi risikonya melalui kontrol multifaktor (gula
                        darah, tekanan darah, lipid, gaya hidup).</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Evaluasi Terapi</h3>
                    <p class="text-gray-600">Jika hasil belum optimal, konsultasikan penyesuaian dosis, kombinasi terapi,
                        atau aspek gaya hidup dengan dokter. Suplemen tidak menggantikan terapi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Potensi Peran Propolis dalam Kesehatan
                    Metabolik</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Beberapa studi pra-klinis dan sebagian studi manusia
                    kecil menunjukkan komponen propolis memiliki sifat antioksidan dan anti-inflamasi yang mungkin mendukung
                    parameter metabolik. Bukti masih berkembang dan tidak meniadakan terapi medis.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="space-y-8">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-emerald-600"
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Aktivitas Enzim Pencernaan Karbohidrat
                                </h3>
                                <p class="text-gray-600">Secara in vitro beberapa flavonoid dapat menghambat enzim terkait
                                    pencernaan karbohidrat. Relevansi klinis masih perlu penelitian lanjutan.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center">
                                    <svg
                                        class="w-6 h-6 text-teal-600"
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Dukungan Sensitivitas Insulin</h3>
                                <p class="text-gray-600">Data awal menunjukkan jalur seluler (misal AMPK) mungkin terlibat;
                                    temuan ini sebagian besar dari model laboratorium.</p>
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Perlindungan Oksidatif Sel</h3>
                                <p class="text-gray-600">Sifat antioksidan propolis dapat membantu menetralkan radikal
                                    bebas. Efek langsung pada sel beta manusia masih diteliti.</p>
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
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Kesehatan Jaringan</h3>
                                <p class="text-gray-600">Antioksidan & modulasi inflamasi dapat mendukung kesehatan
                                    jaringan secara umum bersama intervensi gaya hidup dan perawatan medis.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-emerald-100 to-teal-100 rounded-2xl p-8">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Catatan</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">Respon tiap individu bervariasi. Tidak ada
                                jaminan penurunan angka tertentu dalam periode waktu spesifik. Fokus pada langkah terukur:
                                pemantauan teratur, nutrisi seimbang, aktivitas fisik, tidur cukup, dan konsultasi berkala.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Diabetes Types Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Jenis Diabetes (Informasi Edukatif)</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Ringkasan kategori diabetes untuk pemahaman umum. Untuk
                    diagnosis & terapi, selalu rujuk tenaga kesehatan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-emerald-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Diabetes Tipe 2 (Umum)</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Resistensi insulin tinggi</p>
                        <p>• Gula darah >126 mg/dL puasa</p>
                        <p>• HbA1c >6.5%</p>
                        <p>• Obesitas dan metabolik sindrom</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-teal-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Diabetes Tipe 1</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Defisiensi insulin absolut</p>
                        <p>• Gula darah sangat tinggi >300 mg/dL</p>
                        <p>• Ketoasidosis diabetik</p>
                        <p>• Membutuhkan insulin seumur hidup</p>
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
                                d="M13 10V3L4 14h7v7l9-11h-7z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Prediabetes</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Gula darah puasa 100-125 mg/dL</p>
                        <p>• HbA1c 5.7-6.4%</p>
                        <p>• Resistensi insulin awal</p>
                        <p>• Risiko tinggi menjadi diabetes</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Diabetes Gestasional</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Diabetes saat kehamilan</p>
                        <p>• Gula darah >140 mg/dL setelah makan</p>
                        <p>• Risiko pada bayi tinggi</p>
                        <p>• Perlu kontrol ketat saat hamil</p>
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
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Diabetes Sekunder</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Akibat penyakit pankreas</p>
                        <p>• Efek samping obat steroid</p>
                        <p>• Gangguan endokrin lainnya</p>
                        <p>• Diabetes pasca operasi</p>
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Komplikasi (Ringkasan)</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p>• Neuropati diabetik</p>
                        <p>• Nefropati (gagal ginjal)</p>
                        <p>• Retinopati (kebutaan)</p>
                        <p>• Luka diabetes yang tidak sembuh</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Usage Methods Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Penggunaan Umum (Tidak Menggantikan Terapi)
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Contoh pola konsumsi suplemen propolis yang sering
                    digunakan secara tradisional. Bukan saran dosis individual. Konsultasikan sebelum mengkombinasikan
                    dengan obat hipoglikemik.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg border border-emerald-200">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-emerald-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Contoh Pola A</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Beberapa pengguna memilih 5–7 tetes dicampur air 2–3x per hari.</p>
                        <p><strong>Catatan:</strong> Tidak menetapkan target angka spesifik.</p>
                        <p><strong>Konteks:</strong> Dikombinasikan dengan diet & aktivitas.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg border border-teal-200">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg
                            class="w-8 h-8 text-teal-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Contoh Pola B</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> Penggunaan lebih sering sebaiknya dikonfirmasi dokter karena potensi
                            interaksi.</p>
                        <p><strong>Peringatan:</strong> Hindari menambah tanpa pemantauan.</p>
                        <p><strong>Fokus:</strong> Konsistensi dan keamanan.</p>
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
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Contoh Pola C</h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <p><strong>Ilustrasi:</strong> 3–5 tetes 1–2x per hari.</p>
                        <p><strong>Konteks:</strong> Bagian dari rutinitas gaya hidup sehat.</p>
                        <p><strong>Disarankan:</strong> Tetap lakukan skrining berkala.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Monitoring Umum</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <h4 class="font-semibold text-emerald-700">📊 Parameter Umum:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Gula darah puasa (rujuk panduan klinis resmi)</li>
                            <li>• Gula darah 2 jam setelah makan (sesuai rekomendasi profesional kesehatan)</li>
                            <li>• HbA1c berkala (interpretasi oleh tenaga kesehatan)</li>
                            <li>• Berat badan dan lingkar pinggang</li>
                            <li>• Tekanan darah dan kolesterol</li>
                        </ul>
                    </div>
                    <div class="space-y-3">
                        <h4 class="font-semibold text-red-700">⚠️ Perlu Konsultasi:</h4>
                        <ul class="space-y-2 text-sm text-gray-700">
                            <li>• Gula darah ekstrem (tinggi/rendah) berulang</li>
                            <li>• Gejala ketoasidosis (nafas bau buah)</li>
                            <li>• Luka yang tidak sembuh >2 minggu</li>
                            <li>• Pandangan kabur atau nyeri mata</li>
                            <li>• Kesemutan dan mati rasa kaki</li>
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
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Testimoni (Pengalaman Individu)</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Berikut adalah pengalaman subjektif pengguna. Hasil
                    setiap orang dapat berbeda dan tidak dapat dijadikan jaminan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Pengalaman Pribadi*</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Pak Budi, 55 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">"Merasa lebih termotivasi memperbaiki pola makan dan rutin
                        bergerak."</p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Pengalaman Pribadi*</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Ibu Sari, 48 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">"Merasa kulit lebih terjaga saat menjalankan perawatan dokter."
                    </p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-lg">
                    <div class="bg-gray-200 rounded-lg h-48 mb-4 flex items-center justify-center">
                        <span class="text-gray-500 text-sm">Pengalaman Pribadi*</span>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Doni, 42 tahun</h3>
                    <p class="text-sm text-gray-600 mb-3">"Membantu saya disiplin memantau pola makan dan olahraga."</p>
                    <div class="text-yellow-400 text-sm">★★★★★</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section class="py-20 bg-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Komponen Bioaktif yang Diteliti</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Berikut contoh flavonoid & senyawa lain dalam propolis
                    yang sedang atau telah diteliti terkait potensi efek metabolik. Tingkat bukti bervariasi dan banyak
                    berasal dari studi pra-klinis.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-emerald-600"
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
                            <p class="text-gray-600 mb-4">Flavonoid yang dalam model laboratorium menunjukkan potensi
                                menghambat enzim pencernaan karbohidrat. Bukti klinis manusia masih terbatas.</p>
                            <div class="bg-emerald-50 p-4 rounded-lg">
                                <p class="text-sm text-emerald-800"><strong>Catatan:</strong> Data persentase spesifik
                                    tidak konsisten lintas studi.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-teal-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg
                                class="w-6 h-6 text-teal-600"
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
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Pinocembrin</h3>
                            <p class="text-gray-600 mb-4">Senyawa yang sedang diteliti terkait jalur energi sel (misal
                                AMPK). Efek pada manusia masih perlu konfirmasi studi besar.</p>
                            <div class="bg-teal-50 p-4 rounded-lg">
                                <p class="text-sm text-teal-800"><strong>Catatan:</strong> Klaim angka peningkatan tidak
                                    dipastikan.</p>
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
                            <p class="text-gray-600 mb-4">Antioksidan yang dapat membantu menetralkan radikal bebas dalam
                                model eksperimental. Efek proteksi sel beta manusia masih area penelitian.</p>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-blue-800">
                                    <strong>Manfaat:</strong> Melindungi sel pankreas dan mempertahankan produksi insulin
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
                            <p class="text-gray-600 mb-4">Flavonoid yang dievaluasi terkait pembentukan Advanced Glycation
                                End-products (AGEs) dalam riset awal. Aplikasi klinis masih belum konklusif.</p>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-green-800"><strong>Catatan:</strong> Tidak dimaksudkan sebagai klaim
                                    pencegahan komplikasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-emerald-600 to-teal-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Dukungan Tambahan dalam Perjalanan Sehat</h2>
            <p class="text-xl text-emerald-100 mb-8 max-w-3xl mx-auto">Propolis dapat menjadi bagian dari pendekatan gaya
                hidup holistik bersama pola makan seimbang, aktivitas fisik, istirahat cukup, dan pengawasan medis.</p>

            <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 mb-8 max-w-2xl mx-auto">
                <h3 class="text-xl font-bold text-white mb-3">Materi Edukasi</h3>
                <ul class="text-emerald-100 text-left space-y-2">
                    <li>✅ Ringkasan nutrisi & aktivitas fisik</li>
                    <li>✅ Catatan pemantauan mandiri</li>
                    <li>✅ Tips diskusi efektif dengan tenaga kesehatan</li>
                    <li>✅ Informasi umum antioksidan & inflamasi</li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ url('/checkout') }}"
                    class="bg-white text-emerald-700 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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
                    Pesan Sekarang - Kontrol Diabetes!
                </a>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="border-2 border-white text-white hover:bg-white hover:text-emerald-700 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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

            <p class="text-emerald-200 mt-6 text-sm">Informasi di halaman ini bersifat edukatif dan tidak menggantikan
                nasihat, diagnosis, atau perawatan medis profesional.</p>
        </div>
    </section>
@section('disclaimer')
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-xs text-gray-500 leading-relaxed">
        <p><strong>Disclaimer:</strong> Konten ini untuk tujuan edukasi umum tentang potensi penelitian propolis. Tidak
            dimaksudkan untuk mendiagnosis, mengobati, menyembuhkan, atau mencegah penyakit. Bukti ilmiah terkait dukungan
            metabolik propolis masih berkembang dan banyak berasal dari studi pra-klinis atau studi manusia berskala kecil.
            Selalu konsultasikan dengan dokter sebelum mengubah atau menambahkan suplemen, terutama bila menggunakan obat
            hipoglikemik, insulin, sedang hamil, atau memiliki kondisi kronis lain.</p>
    </div>
@endsection
@endsection
