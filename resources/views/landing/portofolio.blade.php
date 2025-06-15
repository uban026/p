@extends('layouts.layouts-landing')

@section('title', 'Portofolio')
@section('portofolio', 'active')

@section('content')

<!-- Portofolio Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800">Portofolio Kami</h2>
            <p class="mt-2 text-gray-600">Berikut adalah beberapa produk kami yang telah kami hasilkan dengan desain
                unik.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Item 1 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/kaos_anime.jpg') }}" alt="Kaos Anime"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Kaos Anime</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/lanyard_nct.jpg') }}" alt="Lanyard NCT"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Lanyar NCT</p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/lanyard_nct_dream.jpg') }}" alt="Lanyard NCT Dream"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Lanyard NCT Dream</p>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/Lanyard_ENHYPEN.jpg ') }}" alt="Lanyard Enhypen"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Lanyard Enhypen</p>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/lanyard_bts.jpg') }}" alt="Lanyard BTS"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Lanyard BTS</p>
                </div>
            </div>
            <!-- Item 6 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/kaos_yoasobi.jpg') }}" alt="Kaos Yoasobi"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Kaos Yoasobi</p>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/kaos_squid_game.jpg') }}" alt="Kaos Squid Game"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Kaos Squad Game</p>
                </div>
            </div>

            <!-- Item 8 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/Kaos_reg_aespa_armageddon.jpg') }}"
                    alt="Kaos Reg Aespa Armageddon" class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Kaos Reg Aespa Armageddon</p>
                </div>
            </div>

            <!-- Item 9 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/kaos_kaki_kdrama_1988.jpg') }}" alt="Kaos Kaki KDrama 1988"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Kaos Kaki KDrama 1988</p>
                </div>
            </div>


            <!-- Item 10 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/kaos_jennie.jpg') }}" alt="Kaos Jennie"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Kaos Jennie</p>
                </div>
            </div>

            <!-- Item 11 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/kaos_baby_monster.jpg') }}" alt="Kaos Baby Monster"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Kaos Baby Monster</p>
                </div>
            </div>

            <!-- Item 12 -->
            <div class="relative group">
                <img src="{{ asset('assets/img/portofolio/crop_top_black_pink.jpg') }}" alt="Crop Top Black Pink"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition"></div>
                <div
                    class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition">
                    <p class="text-lg text-yellow-400 font-semibold">Crop Top Black Pink</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
