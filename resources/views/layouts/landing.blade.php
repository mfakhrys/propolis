@extends('layouts.app')

@section('schema_ld')
    <script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Product",
    "name": "British Propolis",
    "description": "@yield('meta_description', 'British Propolis premium untuk kesehatan alami')",
    "brand": {
        "@@type": "Brand",
        "name": "British Propolis"
    },
    "manufacturer": {
        "@@type": "Organization",
        "name": "British Propolis Indonesia",
        "url": "{{ url('/') }}"
    },
    "offers": {
        "@@type": "Offer",
        "price": "250000",
        "priceCurrency": "IDR",
        "availability": "https://schema.org/InStock",
        "seller": {
            "@@type": "Organization",
            "name": "British Propolis Indonesia"
        }
    },
    "aggregateRating": {
        "@@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "1247"
    }
}
</script>
@endsection

@section('testimonials')
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Testimoni Pengguna British Propolis
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ribuan keluarga Indonesia telah merasakan manfaat luar biasa British Propolis
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
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
                    <p class="text-gray-700 mb-4">
                        "Sejak mengonsumsi British Propolis, kesehatan keluarga saya jadi lebih terjaga. Anak-anak
                        jarang sakit dan daya tahan tubuh meningkat drastis."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-amber-700 font-semibold text-sm">SD</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Sari Dewi</p>
                            <p class="text-gray-600 text-sm">Ibu Rumah Tangga, Jakarta</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
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
                    <p class="text-gray-700 mb-4">
                        "British Propolis ini benar-benar ampuh! Batuk pilek yang sudah 2 minggu nggak sembuh-sembuh,
                        dalam 3 hari langsung hilang. Sekarang jadi langganan keluarga."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-amber-700 font-semibold text-sm">BW</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Budi Wijaya</p>
                            <p class="text-gray-600 text-sm">Karyawan Swasta, Bandung</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg">
                    <div class="flex text-yellow-400 mb-4">
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
                    <p class="text-gray-700 mb-4">
                        "Alergi kulit yang sudah bertahun-tahun mengganggu, setelah rutin minum British Propolis jadi
                        jarang kambuh. Kulit juga terasa lebih sehat dan bersih."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-amber-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-amber-700 font-semibold text-sm">LP</span>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900">Linda Pratiwi</p>
                            <p class="text-gray-600 text-sm">Guru, Surabaya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-r from-amber-600 to-amber-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Mulai Hidup Sehat dengan British Propolis
            </h2>
            <p class="text-xl text-amber-100 mb-8 max-w-2xl mx-auto">
                Jangan tunggu sampai sakit! Investasi terbaik adalah kesehatan. Dapatkan British Propolis premium
                sekarang juga.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a
                    href="{{ url('/checkout') }}"
                    class="bg-white text-amber-700 hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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
                    Pesan Sekarang
                </a>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="border-2 border-white text-white hover:bg-white hover:text-amber-700 px-8 py-4 rounded-lg text-lg font-semibold transition-colors inline-flex items-center justify-center"
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
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Pertanyaan yang Sering Diajukan
                </h2>
                <p class="text-xl text-gray-600">
                    Dapatkan jawaban atas pertanyaan Anda tentang British Propolis
                </p>
            </div>

            <div class="space-y-8">
                <div class="border-b border-gray-200 pb-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Apa yang membuat British Propolis berbeda dari propolis lainnya?
                    </h3>
                    <p class="text-gray-600">
                        British Propolis diproduksi di lingkungan yang bebas polusi dengan standar kualitas tinggi.
                        Kandungan artepillin-C dan flavonoid yang tinggi membuatnya lebih efektif dalam meningkatkan
                        sistem imun.
                    </p>
                </div>

                <div class="border-b border-gray-200 pb-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Berapa lama efek British Propolis bisa dirasakan?
                    </h3>
                    <p class="text-gray-600">
                        Umumnya efek dapat dirasakan dalam 3-7 hari untuk kondisi ringan seperti pilek atau flu. Untuk
                        peningkatan sistem imun secara keseluruhan, konsumsi rutin selama 2-4 minggu akan memberikan
                        hasil optimal.
                    </p>
                </div>

                <div class="border-b border-gray-200 pb-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Apakah aman untuk anak-anak dan ibu hamil?
                    </h3>
                    <p class="text-gray-600">
                        British Propolis aman untuk anak-anak di atas 1 tahun dengan dosis yang disesuaikan. Untuk ibu
                        hamil dan menyusui, sebaiknya konsultasikan dengan dokter terlebih dahulu.
                    </p>
                </div>

                <div class="pb-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Bagaimana cara konsumsi yang tepat?
                    </h3>
                    <p class="text-gray-600">
                        Dewasa: 3-5 tetes, 3 kali sehari. Anak-anak: 1-2 tetes, 2 kali sehari. Teteskan langsung ke
                        mulut atau campurkan dengan air hangat/madu. Konsumsi 30 menit sebelum makan untuk hasil
                        optimal.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
