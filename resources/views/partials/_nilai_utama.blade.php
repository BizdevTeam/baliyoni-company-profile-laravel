<div id="nilai" class="bg-white py-24 sm:py-16 mb-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="relative py-8 px-4">
            <h2 class="text-5xl font-bold pb-3 text-red-600 text-center">Nilai Utama.</h2>
        </div>

        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">

            @foreach ($nilais as $nilai)
            <div class="flex flex-col bg-white rounded-xl shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                
                <div class="bg-red-600 py-4 text-center">
                    <span class="text-white text-4xl font-bold">{{ $nilai->huruf }}</span>
                </div>

                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-red-600 text-center mb-2">
                        {{ $nilai->judul }}
                    </h3>
                    <p class="text-base text-gray-700 text-center flex-grow">
                        {{ $nilai->deskripsi }}
                    </p>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</div>