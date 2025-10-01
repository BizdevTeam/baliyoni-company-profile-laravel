{{-- <!-- Container Utama untuk Grid Logo -->
<div id="partner" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <div class="relative ">

                    <h2 class="text-2xl font-bold pb-3 text-red-600 w-32">PORTFOLIO</h2>

                    <div class="absolute bottom-1 left-0 w-32 h-0.5 bg-red-600"></div>
                    
                    <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-red-600"></div>

                </div>     
                <p class="text-red-600 leading-relaxed mt-4 text-justify">
                    We have been actively engaged in technological innovation in order to become a focal point for the development and dissemination of artificial intelligence and digital technology in Indonesia.
                </p>
            </div>

    <div class="flex flex-col sm:flex-row flex-wrap justify-center items-center gap-y-12 sm:gap-x-16 gap-x-24">

        @forelse($partnerships as $partnership)
            <div class="text-center transition-transform transform hover:scale-110">
                <img src="{{ asset('storage/' . $partnership->thumbnail) }}" 
                     alt="{{ $partnership->name }}" 
                     class="max-h-20 mx-auto object-contain">
            </div>
        @empty
        @endforelse
        </div>
    </div>
</div> --}}


<div id="partner" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-x-12 gap-y-8 items-center">
        
        <div class="md:col-span-1">
            <div class="relative">
                <h2 class="text-2xl font-bold pb-3 text-red-600 w-32">PARTNERSHIP</h2>
                <div class="absolute bottom-1 left-0 w-full h-0.5 bg-red-600"></div>
                <div class="absolute bottom-0 left-0 w-1/3 h-1.5 bg-red-600"></div>
            </div>      
            <p class="text-red-600 leading-relaxed mt-4 text-justify">
                We have been actively engaged in technological innovation in order to become a focal point for the development and dissemination of artificial intelligence and digital technology in Indonesia.
            </p>
        </div>

        <div class="md:col-span-2 marquee-wrapper flex items-center">
            <div class="marquee-content flex items-center">
                
                @forelse($partnerships as $partnership)
                    <div class="logo-item flex-shrink-0 px-8 text-center">
                        <img src="{{ asset('storage/' . $partnership->thumbnail) }}" 
                             alt="{{ $partnership->name }}" 
                             class="max-h-24 mx-auto object-contain">
                    </div>
                @empty
                @endforelse

                @forelse($partnerships as $partnership)
                    <div class="logo-item flex-shrink-0 px-8 text-center">
                        <img src="{{ asset('storage/' . $partnership->thumbnail) }}" 
                             alt="{{ $partnership->name }}" 
                             class="max-h-24 mx-auto object-contain">
                    </div>
                @empty
                @endforelse

            </div>
        </div>

    </div>
</div>

<style>
    .marquee-wrapper { overflow: hidden; position: relative; }
    .marquee-wrapper::before, .marquee-wrapper::after { content: ""; position: absolute; top: 0; bottom: 0; width: 5rem; z-index: 2; }
    .marquee-wrapper::before { left: 0; background: linear-gradient(to right, white, transparent); }
    .marquee-wrapper::after { right: 0; background: linear-gradient(to left, white, transparent); }
    .marquee-content { display: flex; animation: marquee 10s linear infinite; }
    .marquee-wrapper:hover .marquee-content { animation-play-state: paused; }
    @keyframes marquee {
        from { transform: translateX(0%); }
        to { transform: translateX(-50%); }
    }
</style>
