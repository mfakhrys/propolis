@extends('layouts.landing')

@section('title', 'British Propolis & Dukungan Sistem Imun - Informasi Edukatif')
@section('meta_description', 'Potensi senyawa bioaktif propolis (flavonoid, fenolik) dalam modulasi inflamasi &
    antioksidan yang dapat mendukung fungsi imun sehat. Bukan terapi medis.')
@section('meta_keywords', 'propolis dukungan imun, flavonoid, antioksidan, edukasi sistem imun, modulasi inflamasi')

@section('og_title', 'British Propolis - Dukungan Gaya Hidup Imun')
@section('og_description', 'Flavonoid & antioksidan propolis: potensi mendukung fungsi imun seimbang. Informasi
    edukatif.')
@section('twitter_title', 'Dukungan Propolis untuk Imun (Edukasi)')
@section('twitter_description', 'Potensi bioaktif propolis dalam konteks pola hidup sehat. Bukan klaim kuratif.')

@section('hero')
    <section class="relative bg-gradient-to-br from-blue-50 to-indigo-100 overflow-hidden">
        <div class="absolute inset-0 bg-white/60"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="inline-flex items-center bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold mb-6">
                        ℹ️ Edukasi Sistem Imun
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">Dukungan <span
                            class="text-blue-600"
                        >Fungsi Imun Sehat</span> dengan Propolis</h1>
                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">Informasi tentang bagaimana komponen propolis
                        (flavonoid, asam fenolik, antioksidan) telah dipelajari secara pra-klinis dan dalam beberapa studi
                        manusia kecil terkait dukungan keseimbangan respon imun. Tidak ada klaim peningkatan persentase
                        tertentu.</p>

                    <div class="bg-white rounded-lg p-6 shadow-lg mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">✅ Topik Edukatif Terkait Imun:</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-center">
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
                                Dukungan respon inflamasi seimbang (data awal)
                            </li>
                            <li class="flex items-center">
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
                                Aktivitas antimikroba in vitro (relevansi klinis masih diteliti)
                            </li>
                            <li class="flex items-center">
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
                                Pola hidup sehat tetap faktor utama pencegahan infeksi
                            </li>
                            <li class="flex items-center">
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
                                Fokus: nutrisi, tidur, gerak, manajemen stres
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a
                            href="{{ url('/checkout') }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 text-center"
                        >
                            Pesan Sekarang - Gratis Ongkir
                        </a>
                        <a
                            href="#manfaat"
                            class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 text-center"
                        >
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                    <div class="flex items-center mt-6 space-x-4">
                        <div class="flex text-yellow-400">
                            @for ($i = 0; $i < 5; $i++)
                                <svg
                                    class="w-5 h-5 fill-current"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                                    />
                                </svg>
                            @endfor
                        </div>
                        <span class="text-gray-600 text-sm">4.9/5 dari 3,247 pengguna</span>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative z-10">
                        <div class="bg-gradient-to-br from-blue-100 to-indigo-200 rounded-2xl p-8 text-center shadow-2xl">
                            <div
                                class="w-32 h-40 bg-blue-600 rounded-lg mx-auto mb-6 flex items-center justify-center shadow-lg">
                                <span class="text-white text-xs font-bold">BRITISH<br>PROPOLIS<br>🛡️</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Profil Bioaktif</h3>
                            <p class="text-gray-600 mb-4">Antioksidan & senyawa fenolik (studi pra-klinis)</p>
                            <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Data
                                Berkembang</div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-200 rounded-full opacity-60"></div>
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-indigo-200 rounded-full opacity-40"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Masalah Sistem Imun -->
    <section
        id="masalah"
        class="py-20 bg-white"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Apakah Ini Tantangan Gaya Hidup Anda?
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Faktor gaya hidup dapat mempengaruhi ketahanan tubuh. Berikut contoh situasi umum.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-red-100 rounded-full p-2 mr-3">
                            <svg
                                class="w-6 h-6 text-red-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-red-800">Sering Sakit</h3>
                    </div>
                    <p class="text-red-700">Mudah terkena flu, pilek, dan infeksi berulang kali dalam sebulan</p>
                </div>

                <div class="bg-orange-50 border-l-4 border-orange-400 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-100 rounded-full p-2 mr-3">
                            <svg
                                class="w-6 h-6 text-orange-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-orange-800">Pemulihan Lambat</h3>
                    </div>
                    <p class="text-orange-700">Butuh waktu lama untuk sembuh dari penyakit, bahkan yang ringan sekalipun</p>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-yellow-100 rounded-full p-2 mr-3">
                            <svg
                                class="w-6 h-6 text-yellow-600"
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
                        <h3 class="text-lg font-semibold text-yellow-800">Mudah Lelah</h3>
                    </div>
                    <p class="text-yellow-700">Cepat merasa lemas dan tidak berenergi meski aktivitas tidak terlalu berat
                    </p>
                </div>

                <div class="bg-purple-50 border-l-4 border-purple-400 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 rounded-full p-2 mr-3">
                            <svg
                                class="w-6 h-6 text-purple-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-purple-800">Stres Berlebihan</h3>
                    </div>
                    <p class="text-purple-700">Mudah stres dan khawatir yang dapat memperlemah sistem kekebalan tubuh</p>
                </div>

                <div class="bg-pink-50 border-l-4 border-pink-400 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-pink-100 rounded-full p-2 mr-3">
                            <svg
                                class="w-6 h-6 text-pink-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-pink-800">Alergi Sering</h3>
                    </div>
                    <p class="text-pink-700">Sistem imun yang tidak seimbang menyebabkan reaksi alergi berlebihan</p>
                </div>

                <div class="bg-indigo-50 border-l-4 border-indigo-400 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-indigo-100 rounded-full p-2 mr-3">
                            <svg
                                class="w-6 h-6 text-indigo-600"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-indigo-800">Infeksi Berulang</h3>
                    </div>
                    <p class="text-indigo-700">Infeksi saluran pernapasan, pencernaan, atau kulit yang sering kambuh</p>
                </div>
            </div>

            <div class="bg-gradient-to-r from-red-500 to-pink-600 rounded-2xl p-8 text-white text-center">
                <h3 class="text-2xl font-bold mb-4">ℹ️ Catatan</h3>
                <p class="text-xl mb-6">Menjaga pola makan, aktivitas fisik, tidur cukup, dan kebersihan tetap pondasi
                    dukungan fungsi imun. Suplemen bersifat opsional.</p>
            </div>
        </div>
    </section>

    <!-- Solusi British Propolis -->
    <section
        id="manfaat"
        class="py-20 bg-blue-50"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                    🧬 Dukungan Ilmiah
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    British Propolis: Potensi Bioaktif & Imun (Edukasi)
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Flavonoid & fenolik telah diteliti dalam model laboratorium dan sebagian studi manusia kecil terkait
                    modulasi respon imun. Bukti masih berkembang dan tidak menggantikan intervensi medis.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">🔬 Ringkasan Penelitian (Berkembang):</h3>
                    <div class="space-y-6">
                        <div class="bg-white rounded-lg p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-100 rounded-full p-2 mr-4">
                                    <svg
                                        class="w-6 h-6 text-green-600"
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
                                <h4 class="text-lg font-semibold text-gray-900">Modulasi Sel Imun (Data Awal)</h4>
                            </div>
                            <p class="text-gray-700">Beberapa studi non-luas menunjukkan perubahan parameter seluler; angka
                                spesifik bervariasi dan tidak konklusif.</p>
                        </div>

                        <div class="bg-white rounded-lg p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="bg-blue-100 rounded-full p-2 mr-4">
                                    <svg
                                        class="w-6 h-6 text-blue-600"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900">Aktivitas Fagositosis (Pra-Klinis)</h4>
                            </div>
                            <p class="text-gray-700">Pengamatan in vitro / in vivo hewan—implementasi klinis masih
                                diteliti.</p>
                        </div>

                        <div class="bg-white rounded-lg p-6 shadow-lg">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-100 rounded-full p-2 mr-4">
                                    <svg
                                        class="w-6 h-6 text-purple-600"
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
                                <h4 class="text-lg font-semibold text-gray-900">Parameter Antibodi (Terbatas)</h4>
                            </div>
                            <p class="text-gray-700">Beberapa laporan perubahan titer pada skala kecil; perlu studi
                                terkontrol lebih besar.</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-100 to-indigo-200 rounded-2xl p-8">
                        <h4 class="text-xl font-bold text-gray-900 mb-6 text-center">📊 Visual Edukatif (Tanpa Persentase
                            Aktual)</h4>
                        <div class="space-y-4">
                            <div class="bg-white rounded-lg p-4 text-sm text-gray-600">Contoh parameter laboratorium (WBC,
                                diferensial) dapat berubah karena banyak faktor: nutrisi, tidur, stres, infeksi. Angka
                                spesifik tidak ditampilkan.</div>

                            <div class="bg-white rounded-lg p-4 text-sm text-gray-600">Pencegahan infeksi menitikberatkan
                                vaksinasi, kebersihan, dan gaya hidup — propolis bukan pengganti.</div>

                            <div class="bg-white rounded-lg p-4 text-sm text-gray-600">Durasi pemulihan dipengaruhi
                                kompleksitas penyakit & kondisi individu.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Perbandingan -->
            <div class="bg-white rounded-2xl p-8 shadow-xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Contoh Persepsi Pengguna (Subjektif)</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-red-50 border-2 border-red-200 rounded-xl p-6 text-sm text-gray-700">Pengalaman sebelum
                        menggunakan suplemen seringkali mencerminkan pola tidur kurang, stres tinggi, nutrisi kurang
                        seimbang.</div>

                    <div class="bg-green-50 border-2 border-green-200 rounded-xl p-6 text-sm text-gray-700">Perubahan
                        positif biasanya terkait kombinasi gaya hidup (makan, tidur, olahraga, reduksi stres). Suplemen
                        bukan satu-satunya faktor.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Kerja -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Kemungkinan Mekanisme (Model Penelitian)</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Berikut gambaran konseptual berdasarkan literatur
                    pra-klinis; bukan deskripsi pasti yang terjadi pada setiap individu.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div
                        class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-200 transition-colors">
                        <span class="text-2xl font-bold text-blue-600">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Penyerapan</h3>
                    <p class="text-gray-600">Komponen larut dapat memasuki sirkulasi; kecepatan & bioavailabilitas
                        dipengaruhi banyak faktor.</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-green-200 transition-colors">
                        <span class="text-2xl font-bold text-green-600">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Modulasi Seluler</h3>
                    <p class="text-gray-600">Beberapa data menunjukkan modulasi jalur inflamasi dalam model eksperimen.</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-purple-200 transition-colors">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Respons Humoral</h3>
                    <p class="text-gray-600">Observasi awal perubahan parameter humoral tidak seragam antar studi.</p>
                </div>

                <div class="text-center group">
                    <div
                        class="bg-amber-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-amber-200 transition-colors">
                        <span class="text-2xl font-bold text-amber-600">4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Keseimbangan</h3>
                    <p class="text-gray-600">Tujuan utama: keseimbangan, bukan hiper-stimulasi sistem imun.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kandungan Aktif -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Contoh Komponen Propolis yang Diteliti</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Daftar ringkas beberapa kelas senyawa. Bukti klinis
                    dosis-respons masih terbatas.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="bg-yellow-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg
                            class="w-8 h-8 text-yellow-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Flavonoid</h3>
                    <p class="text-gray-600 mb-4">Quercetin, kaempferol, dan chrysin yang berperan sebagai antioksidan kuat
                        dan imunomodulator alami.</p>
                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <p class="text-sm text-yellow-800"><strong>Catatan:</strong> Data persentase bervariasi dan belum
                            menjadi konsensus klinis.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="bg-green-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg
                            class="w-8 h-8 text-green-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Asam Fenolik</h3>
                    <p class="text-gray-600 mb-4">Asam caffeic, asam cinnamic, dan CAPE yang memiliki efek antimikroba dan
                        anti-inflamasi kuat.</p>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <p class="text-sm text-green-800"><strong>Catatan:</strong> Angka inhibisi berasal dari uji
                            laboratorium—bukan hasil langsung pada manusia.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="bg-blue-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg
                            class="w-8 h-8 text-blue-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Terpenes</h3>
                    <p class="text-gray-600 mb-4">Senyawa aromatik yang memiliki efek antimikroba dan membantu penetrasi
                        zat aktif ke dalam sel.</p>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <p class="text-sm text-blue-800"><strong>Manfaat:</strong> Meningkatkan bioavailabilitas senyawa
                            aktif lainnya</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="bg-purple-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg
                            class="w-8 h-8 text-purple-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Mineral & Vitamin</h3>
                    <p class="text-gray-600 mb-4">Zinc, selenium, vitamin C, dan vitamin E yang berperan penting dalam
                        fungsi sistem kekebalan tubuh.</p>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <p class="text-sm text-purple-800"><strong>Manfaat:</strong> Mendukung regenerasi dan fungsi
                            optimal sel imun</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="bg-red-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg
                            class="w-8 h-8 text-red-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Enzim Aktif</h3>
                    <p class="text-gray-600 mb-4">Katalase, peroksidase, dan enzim lain yang membantu detoksifikasi dan
                        perlindungan sel.</p>
                    <div class="bg-red-50 p-4 rounded-lg">
                        <p class="text-sm text-red-800"><strong>Manfaat:</strong> Melindungi sel dari kerusakan oksidatif
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="bg-indigo-100 w-16 h-16 rounded-lg flex items-center justify-center mb-6">
                        <svg
                            class="w-8 h-8 text-indigo-600"
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
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Artepillin-C</h3>
                    <p class="text-gray-600 mb-4">Senyawa unik yang hanya ditemukan dalam propolis berkualitas tinggi,
                        memiliki efek imunostimulan kuat.</p>
                    <div class="bg-indigo-50 p-4 rounded-lg">
                        <p class="text-sm text-indigo-800"><strong>Catatan:</strong> Temuan awal; diperlukan studi
                            terkontrol lebih besar.</p>
                    </div>
                    @section('disclaimer') @include('partials.disclaimer') @endsection
                </div>
            </div>
        </div>
    </section>
@endsection
