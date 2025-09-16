<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

        {{-- Hero Section --}}
        <div class="relative w-full">
            {{-- Slider as background --}}
            @include('partials._slider', ['sliders' => $sliders])

            {{-- Overlay for content --}}
            <div class="absolute inset-0 z-20 flex flex-col items-center justify-center p-4 text-center text-white">
                {{-- Tombol "Try It Now!" --}}

                {{-- <a href="/project-hand-gesture-main/landing.html" class="text-xl font-bold md:text-xl bg-blue-900 text-white px-10 py-2 mb-8">Try It Now!</a> --}}

                {{-- <div class="relative z-20 max-w-4xl">
                <h1 data-aos="fade-up" class="text-3xl font-bold md:text-3xl bg-yellow-500 text-blue-700 px-10 py-4 ">
                    UDAYANA CENTER OF <br>
                    EXCELENT AI INNOVATION
                </h1>
            </div> --}}
            </div>
        </div>

        <div class="py-24">
            @include('partials._about-us',[
            'img1_url' => asset('asset/abc.jpg'),
            'img2_url' => asset('asset/def.jpg')
            ])
        </div>

        {{-- @include('partials.roadmaps') --}}
        {{-- @include('partials._product-multiple') --}}
        @include('partials._visi')

        <div id="product" class="bg-gray-100 pt-16 pb-16 sm:pb-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="relative px-4">
                <h2 class="text-5xl font-bold text-red-600 text-center">Misi Kami.</h2>
                {{-- <div class="absolute bottom-1 left-0 w-full h-px bg-red-600"></div>
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-1/3 h-1.5 bg-red-600"></div> --}}
            </div>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mt-24">

                    {{-- Kartu 1: Lihat Properti --}}
                    <x-product-card desc="Посмотреть<br>дома">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </x-slot>
                        <x-slot name="back">
                            <h3 class="font-bold text-lg mb-2 text-white">Lihat Properti</h3>
                            <p class="text-sm flex-grow text-white/90 leading-relaxed">
                                Jadwalkan kunjungan untuk melihat langsung rumah impian Anda dengan guide profesional.
                            </p>
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-white/80 transition-colors duration-200 mt-2">
                                Selengkapnya
                                <svg class="ml-1 h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </x-slot>
                    </x-product-card>

                    {{-- Kartu 2: Tur Kompleks --}}
                    <x-product-card desc="Экскурсия<br>по комплексу">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </x-slot>
                        <x-slot name="back">
                            <h3 class="font-bold text-lg mb-2 text-white">Tur Kompleks</h3>
                            <p class="text-sm flex-grow text-white/90 leading-relaxed">
                                Dapatkan tur lengkap fasilitas dan lingkungan kompleks properti dengan pemandu ahli.
                            </p>
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-white/80 transition-colors duration-200 mt-2">
                                Selengkapnya
                                <svg class="ml-1 h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </x-slot>
                    </x-product-card>

                    {{-- Kartu 3: Kalkulator KPR (Aktif) --}}
                    <x-product-card desc="Рассчитать<br>ипотеку" :active="true">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </x-slot>
                        <x-slot name="back">
                            <h3 class="font-bold text-lg mb-2 text-white">Kalkulator KPR</h3>
                            <p class="text-sm flex-grow text-white/90 leading-relaxed">
                                Hitung cicilan dan simulasi kredit untuk properti yang Anda inginkan dengan mudah.
                            </p>
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-white/80 transition-colors duration-200 mt-2">
                                Mulai Hitung
                                <svg class="ml-1 h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </x-slot>
                    </x-product-card>

                    {{-- Kartu 4: Download Brosur --}}
                    <x-product-card desc="Скачать<br>буклет">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </x-slot>
                        <x-slot name="back">
                            <h3 class="font-bold text-lg mb-2 text-white">Download Brosur</h3>
                            <p class="text-sm flex-grow text-white/90 leading-relaxed">
                                Unduh brosur lengkap dengan detail properti, harga, dan informasi pembayaran.
                            </p>
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-white/80 transition-colors duration-200 mt-2">
                                Download PDF
                                <svg class="ml-1 h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </x-slot>
                    </x-product-card>

                    {{-- Kartu 5: Transportasi Gratis --}}
                    <x-product-card desc="Заказать такси<br>в отдел продаж">
                        <x-slot name="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </x-slot>
                        <x-slot name="back">
                            <h3 class="font-bold text-lg mb-2 text-white">Transportasi Gratis</h3>
                            <p class="text-sm flex-grow text-white/90 leading-relaxed">
                                Kami sediakan transportasi gratis langsung ke kantor penjualan atau lokasi properti.
                            </p>
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-white/80 transition-colors duration-200 mt-2">
                                Pesan Sekarang
                                <svg class="ml-1 h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </x-slot>
                    </x-product-card>

                </div>

                {{-- Call to Action Section --}}

            </div>
        </div>

        {{-- Main Content --}}


        {{-- Main Content Wrapper with consistent padding and spacing --}}
        <div class="space-y-20 px-4 sm:px-6 lg:px-8">

            @include('article_news.catalog_article', ['article' => $articles])

        </div>
        @include('partials._people', ['people' => $peoples])
        @include('partials._focus', ['focuses' => $focuses])
        @include('partials._portfolios', ['portfolios' => $portfolios])
        @include('partials._partner', ['partnerships' => $partnerships])
</x-layout>
