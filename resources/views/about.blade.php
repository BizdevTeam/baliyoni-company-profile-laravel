<x-layout>
    {{-- @include('partials._slider', ['sliders' => $sliders]) --}}
    @include('partials._slider_article', ['sliders' => $sliders])

    <div data-aos-delay="200" data-aos="fade-down" class="my-12 max-w-7xl mx-auto flex flex-col gap-2 pt-24">
        <h1 class="text-5xl font-bold pb-10 flex justify-center">
            Tentang Kami.
        </h1>
        @include('about._about-desc')
    </div>
     @include('partials._visi')

</x-layout>
