@props([
    'desc' => '',
])


<div class="group w-full sm:w-auto flex-1 h-32 [perspective:1000px] cursor-pointer">
    {{-- 
        Wrapper Flipper dengan scale effect
        Scale up dan rotasi terjadi bersamaan saat hover
    --}}
    <div class="items-center justify-center relative w-full h-[200px] transition-all duration-700 ease-in-out [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)_scale(1.05)] ">

        {{-- SISI DEPAN (FRONT) --}}
        <div class="absolute itemsce justify-center inset-0 w-full h-full rounded-xl bg-white shadow-lg hover:shadow-xl p-5 flex flex-col [backface-visibility:hidden] border border-gray-200 transition-shadow duration-300">
            {{-- Wrapper Ikon --}}
            <div class="mb-4 text-gray-700 text-xl group-hover:text-gray-900 transition-colors duration-300 items-center justify-center flex">
                {{ $icon }}
            </div>
            {{-- Deskripsi --}}
            <p class="font-medium text-xl text-gray-800 break-words text-center">
                {{ $desc }}
            </p>
        </div>

        {{-- SISI BELAKANG (BACK) --}}
        {{-- <div class="absolute inset-0 w-64 h-64 rounded-xl bg-gradient-to-br from-red-500 via-red-600 to-red-700 text-white p-5 flex flex-col [backface-visibility:hidden] [transform:rotateY(180deg)] shadow-xl">
            {{ $back }}
        </div> --}}
             <div class="absolute  top-1/2 w-64 h-64 rounded-xl bg-gradient-to-br from-red-500 via-red-600 to-red-700 text-white p-5 flex flex-col [backface-visibility:hidden] [transform:rotateY(180deg)_translateY(-50%)] shadow-xl transition-all duration-500 ease-in-out">
            {!! $back !!}
        </div>
        

    </div>
</div>