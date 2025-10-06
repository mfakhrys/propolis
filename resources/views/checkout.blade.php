@extends('layouts.app')

@section('title', 'Checkout - Pesan British Propolis Sekarang')
@section('meta_description', 'Pesan British Propolis premium sekarang. Gratis ongkir, garansi uang kembali 30 hari.
    Pembayaran COD, transfer bank, atau e-wallet.')
@section('meta_keywords', 'pesan british propolis, checkout propolis, beli propolis online, propolis cod, propolis
    gratis ongkir')

@section('content')
    <section class="py-20 bg-gray-50 min-h-screen">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Checkout British Propolis</h1>
                <p class="text-xl text-gray-600">Selesaikan pesanan Anda dengan aman dan mudah</p>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg mb-8">
                    <div class="flex items-center">
                        <svg
                            class="w-6 h-6 mr-3"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <form
                action="{{ route('checkout.store') }}"
                method="POST"
                class="bg-white rounded-xl shadow-lg overflow-hidden"
            >
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
                    <!-- Left Side - Form -->
                    <div class="p-8 lg:p-12">
                        <h2 class="text-2xl font-bold text-gray-900 mb-8">Informasi Pengiriman</h2>

                        <!-- Name -->
                        <div class="mb-6">
                            <label
                                for="name"
                                class="block text-sm font-semibold text-gray-700 mb-2"
                            >Nama Lengkap *</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-colors @error('name') border-red-500 @enderror"
                                placeholder="Masukkan nama lengkap Anda"
                            >
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone -->
                        <div class="mb-6">
                            <label
                                for="phone"
                                class="block text-sm font-semibold text-gray-700 mb-2"
                            >Nomor WhatsApp *</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-colors @error('phone') border-red-500 @enderror"
                                placeholder="08123456789"
                            >
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-500 text-sm mt-1">Nomor ini akan kami gunakan untuk konfirmasi pesanan</p>
                        </div>

                        <!-- Address -->
                        <div class="mb-8">
                            <label
                                for="address"
                                class="block text-sm font-semibold text-gray-700 mb-2"
                            >Alamat Lengkap *</label>
                            <textarea
                                id="address"
                                name="address"
                                rows="4"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent transition-colors @error('address') border-red-500 @enderror"
                                placeholder="Jalan, No. Rumah, RT/RW, Kelurahan, Kecamatan, Kota, Provinsi, Kode Pos"
                            >{{ old('address') }}</textarea>
                            @error('address')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Package Selection -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-700 mb-4">Pilih Paket *</label>
                            <div class="space-y-4">
                                <!-- 1 Bottle -->
                                <label
                                    class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-amber-300 transition-colors"
                                >
                                    <input
                                        type="radio"
                                        name="quantity"
                                        value="1"
                                        class="w-4 h-4 text-amber-600 focus:ring-amber-500 border-gray-300"
                                        {{ old('quantity', '3') == '1' ? 'checked' : '' }}
                                    >
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="font-semibold text-gray-900">1 Botol</p>
                                                <p class="text-sm text-gray-600">Coba dulu</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-xl font-bold text-amber-600">Rp 250.000</p>
                                                <p class="text-sm text-gray-500">Per botol</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <!-- 3 Bottles -->
                                <label
                                    class="flex items-center p-4 border-2 border-amber-300 bg-amber-50 rounded-lg cursor-pointer"
                                >
                                    <input
                                        type="radio"
                                        name="quantity"
                                        value="3"
                                        class="w-4 h-4 text-amber-600 focus:ring-amber-500 border-gray-300"
                                        {{ old('quantity', '3') == '3' ? 'checked' : '' }}
                                    >
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <div class="flex items-center gap-2">
                                                    <p class="font-semibold text-gray-900">3 Botol</p>
                                                    <span
                                                        class="bg-amber-200 text-amber-800 text-xs px-2 py-1 rounded-full font-semibold"
                                                    >POPULER</span>
                                                </div>
                                                <p class="text-sm text-gray-600">Hemat 13% - Rp 99.000</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-xl font-bold text-amber-600">Rp 217.000</p>
                                                <p class="text-sm text-gray-500 line-through">Rp 250.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <!-- 5 Bottles -->
                                <label
                                    class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-amber-300 transition-colors"
                                >
                                    <input
                                        type="radio"
                                        name="quantity"
                                        value="5"
                                        class="w-4 h-4 text-amber-600 focus:ring-amber-500 border-gray-300"
                                        {{ old('quantity', '3') == '5' ? 'checked' : '' }}
                                    >
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <div class="flex items-center gap-2">
                                                    <p class="font-semibold text-gray-900">5 Botol</p>
                                                    <span
                                                        class="bg-green-200 text-green-800 text-xs px-2 py-1 rounded-full font-semibold"
                                                    >RECOMMENDED</span>
                                                </div>
                                                <p class="text-sm text-gray-600">Hemat 21% - Rp 260.000</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-xl font-bold text-amber-600">Rp 198.000</p>
                                                <p class="text-sm text-gray-500 line-through">Rp 250.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>

                                <!-- 10 Bottles -->
                                <label
                                    class="flex items-center p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-amber-300 transition-colors"
                                >
                                    <input
                                        type="radio"
                                        name="quantity"
                                        value="10"
                                        class="w-4 h-4 text-amber-600 focus:ring-amber-500 border-gray-300"
                                        {{ old('quantity', '3') == '10' ? 'checked' : '' }}
                                    >
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <div class="flex items-center gap-2">
                                                    <p class="font-semibold text-gray-900">10 Botol</p>
                                                    <span
                                                        class="bg-blue-200 text-blue-800 text-xs px-2 py-1 rounded-full font-semibold"
                                                    >BEST VALUE</span>
                                                </div>
                                                <p class="text-sm text-gray-600">Hemat 28% - Rp 700.000</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-xl font-bold text-amber-600">Rp 180.000</p>
                                                <p class="text-sm text-gray-500 line-through">Rp 250.000</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            @error('quantity')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Right Side - Order Summary -->
                    <div class="bg-gray-50 p-8 lg:p-12">
                        <h3 class="text-2xl font-bold text-gray-900 mb-8">Ringkasan Pesanan</h3>

                        <div class="space-y-6 mb-8">
                            <!-- Product Image -->
                            <div class="flex items-center bg-white p-4 rounded-lg">
                                <div class="w-20 h-24 bg-amber-600 rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-white text-xs font-bold text-center">BRITISH<br>PROPOLIS</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">British Propolis Premium</h4>
                                    <p class="text-sm text-gray-600">Botol 30ml - Original dari Inggris</p>
                                    <p class="text-sm text-green-600 font-medium">✓ Teruji Klinis</p>
                                </div>
                            </div>

                            <!-- Price Calculation -->
                            <div class="bg-white p-6 rounded-lg space-y-4">
                                <div id="price-details">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Subtotal (<span id="qty-display">3</span>
                                            botol)</span>
                                        <span
                                            class="font-semibold"
                                            id="subtotal"
                                        >Rp 651.000</span>
                                    </div>
                                    <div class="flex justify-between text-green-600">
                                        <span>Hemat</span>
                                        <span id="savings">- Rp 99.000</span>
                                    </div>
                                    <div class="flex justify-between text-green-600">
                                        <span>Gratis Ongkir</span>
                                        <span>- Rp 25.000</span>
                                    </div>
                                    <hr class="my-4">
                                    <div class="flex justify-between text-xl font-bold text-gray-900">
                                        <span>Total</span>
                                        <span id="total-price">Rp 651.000</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Benefits -->
                            <div class="bg-green-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-green-800 mb-3">🎁 Yang Anda Dapatkan:</h4>
                                <ul class="space-y-2 text-sm text-green-700">
                                    <li class="flex items-center">
                                        <svg
                                            class="w-4 h-4 mr-2"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                        Gratis ongkos kirim seluruh Indonesia
                                    </li>
                                    <li class="flex items-center">
                                        <svg
                                            class="w-4 h-4 mr-2"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                        Garansi uang kembali 30 hari
                                    </li>
                                    <li class="flex items-center">
                                        <svg
                                            class="w-4 h-4 mr-2"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                        Konsultasi gratis via WhatsApp
                                    </li>
                                    <li class="flex items-center">
                                        <svg
                                            class="w-4 h-4 mr-2"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                        Panduan lengkap penggunaan
                                    </li>
                                </ul>
                            </div>

                            <!-- Payment Methods -->
                            <div class="bg-white p-6 rounded-lg">
                                <h4 class="font-semibold text-gray-900 mb-3">💳 Metode Pembayaran:</h4>
                                <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                        COD (Bayar di Tempat)
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                                        Transfer Bank
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                                        GoPay
                                    </div>
                                    <div class="flex items-center">
                                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                        Dana
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="w-full bg-amber-600 hover:bg-amber-700 text-white py-4 px-6 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg"
                        >
                            Pesan Sekarang
                        </button>

                        <p class="text-center text-sm text-gray-500 mt-4">
                            Dengan memesan, Anda menyetujui <a
                                href="#"
                                class="text-amber-600 hover:underline"
                            >syarat dan ketentuan</a> kami
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Security & Trust Section -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-8">Kenapa Memilih Kami?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <svg
                            class="w-8 h-8 text-green-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">100% Original</h4>
                    <p class="text-gray-600 text-sm">Produk asli langsung dari Inggris dengan sertifikat keaslian</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <svg
                            class="w-8 h-8 text-blue-600"
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
                    <h4 class="font-semibold text-gray-900 mb-2">Terpercaya</h4>
                    <p class="text-gray-600 text-sm">Dipercaya 10,000+ keluarga Indonesia dengan rating 4.9/5</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <svg
                            class="w-8 h-8 text-purple-600"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"
                            />
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Layanan 24/7</h4>
                    <p class="text-gray-600 text-sm">Customer service siap membantu Anda kapan saja</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceData = {
                1: {
                    price: 250000,
                    original: 250000,
                    savings: 0
                },
                3: {
                    price: 217000,
                    original: 250000,
                    savings: 99000
                },
                5: {
                    price: 198000,
                    original: 250000,
                    savings: 260000
                },
                10: {
                    price: 180000,
                    original: 250000,
                    savings: 700000
                }
            };

            const quantityInputs = document.querySelectorAll('input[name="quantity"]');

            function formatPrice(price) {
                return 'Rp ' + price.toLocaleString('id-ID');
            }

            function updatePriceDisplay() {
                const selectedQuantity = document.querySelector('input[name="quantity"]:checked').value;
                const data = priceData[selectedQuantity];
                const quantity = parseInt(selectedQuantity);

                const subtotal = data.original * quantity;
                const totalPrice = data.price * quantity;

                document.getElementById('qty-display').textContent = quantity;
                document.getElementById('subtotal').textContent = formatPrice(subtotal);
                document.getElementById('savings').textContent = '- ' + formatPrice(data.savings);
                document.getElementById('total-price').textContent = formatPrice(totalPrice);
            }

            quantityInputs.forEach(input => {
                input.addEventListener('change', updatePriceDisplay);
            });

            // Initial update
            updatePriceDisplay();
        });
    </script>
@endsection
