@props([
    'desc' => '',
    'active' => false,
])


<div class="group w-full sm:w-auto flex-1 h-32 [perspective:1000px] cursor-pointer">
    {{-- 
        Wrapper Flipper dengan scale effect
        Scale up dan rotasi terjadi bersamaan saat hover
    --}}
    <div class="relative w-full h-full transition-all duration-700 ease-in-out [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)_scale(1.05)] {{ $active ? 'ring-2 ring-red-500 ring-opacity-50' : '' }}">

        {{-- SISI DEPAN (FRONT) --}}
        <div class="absolute inset-0 w-full h-full rounded-xl bg-white shadow-lg hover:shadow-xl p-5 flex flex-col [backface-visibility:hidden] border border-gray-200 transition-shadow duration-300">
            {{-- Wrapper Ikon --}}
            <div class="mb-2 text-gray-700 group-hover:text-gray-900 transition-colors duration-300">
                {{ $icon }}
            </div>
            {{-- Deskripsi --}}
            <p class="font-medium text-sm flex-grow text-gray-800 leading-relaxed">
                {!! $desc !!}
            </p>
        </div>

        {{-- SISI BELAKANG (BACK) --}}
        {{-- <div class="absolute inset-0 w-64 h-64 rounded-xl bg-gradient-to-br from-red-500 via-red-600 to-red-700 text-white p-5 flex flex-col [backface-visibility:hidden] [transform:rotateY(180deg)] shadow-xl">
            {{ $back }}
        </div> --}}
             <div class="absolute top-1/2 w-64 h-64 rounded-xl bg-gradient-to-br from-red-500 via-red-600 to-red-700 text-white p-5 flex flex-col [backface-visibility:hidden] [transform:rotateY(180deg)_translateY(-50%)] shadow-xl transition-all duration-500 ease-in-out">
            {{ $back }}
        </div>
        

    </div>
</div>