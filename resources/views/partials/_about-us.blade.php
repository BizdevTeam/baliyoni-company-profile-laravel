<section id="about" class="w-full bg-white">
    <div class="max-w-screen-xl mx-auto px-6 sm:px-6 lg:px-8">
        <div class="relative mx-auto max-w-screen-xl px-4 flex items-center justify-center">
            
            {{-- Container for the two overlapping layers --}}
            <div class="relative flex items-center">

                {{-- Layer 1: Image Section (Left) --}}
                <div class="relative z-10">
                    <div id="image-slider-container" class="w-[700px] h-[650px] bg-white rounded-2xl overflow-hidden shadow-lg flex flex-col">
                        
                        <div class="h-1/2 w-full">
                            {{-- A unique ID for the first image --}}
                            <img id="image-slider-1" src="" alt="About Us Image 1" class="w-full h-full object-cover">
                        </div>
                        
                        <div class="h-1/2 w-full">
                            {{-- A unique ID for the second image --}}
                            <img id="image-slider-2" src="" alt="About Us Image 2" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                {{-- Layer 2: Text Section (Right, Overlapping) --}}
                <div class="relative z-20 -ml-24 bg-neutral-900 rounded-3xl p-8 shadow-2xl w-[500px] h-[600px] flex flex-col">
                    
                    {{-- Title --}}
                    <h2 class="text-white text-3xl font-bold mb-4">About Us</h2>

                    {{-- Description --}}
                    {{-- CHANGE: flex-grow pushes the button to the bottom --}}
                    <p class="text-gray-300 text-sm leading-relaxed mb-8 flex-grow">
                        PT Baliyoni Saguna is your trusted partner in information and communication technology solutions. We are here as a One Stop IT Solution to assist in your digital transformation.
                    </p>

                    {{-- Learn More Button --}}
                    <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-md text-sm font-medium transition-colors duration-200 self-start">
                        Learn more
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // 1. Get the image URL data from PHP (Blade) into JavaScript
        const imageUrls = @json($imageUrls);

        // 2. Target the image elements by their ID
        const img1 = document.getElementById('image-slider-1');
        const img2 = document.getElementById('image-slider-2');

        // Ensure we have at least 2 images to run the slider
        if (imageUrls.length < 2) {
            console.error('Not enough images to start the slider.');
            // Display default images if available
            if (imageUrls.length > 0) {
                img1.src = imageUrls[0];
                img2.src = imageUrls[0]; 
            }
            return;
        }

        function updateImages() {
            // --- Logic to get TWO DIFFERENT random indices ---
            let index1 = Math.floor(Math.random() * imageUrls.length);
            let index2;
            
            do {
                index2 = Math.floor(Math.random() * imageUrls.length);
            } while (index1 === index2); // Repeat if the indices are the same

            // --- Directly update the image sources without transitions ---
            img1.src = imageUrls[index1];
            img2.src = imageUrls[index2];
        }

        // Run the function for the first time on page load
        updateImages();

        // Set an interval to change the images every 5 seconds (5000 milliseconds)
        setInterval(updateImages, 5000);
    });
</script>