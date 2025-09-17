<section class="flex flex-col gap-4">
    <div class="flex flex-col lg:flex-row gap-0">
        {{-- Kolom Kiri: "One Stop Solution" --}}
        <div class="px-8 flex-1 text-4xl font-bold justify-center">
            <p>One</p>
            <p>Stop</p>
            <p>Solution</p>
        </div>

        {{-- Kolom Kanan: Konten utama --}}
        <div class="flex-5 text-justify text-lg">
            {{-- 1. Paragraf yang selalu terlihat --}}
            <p>
                <span class="text-4xl font-bold">Baliyoni Group</span>
                adalah group Perusahaan yang telah eksis dalam industri Teknologi
                Informasi (TI) khususnya di Bali yang didirikan pada tanggal 3 Mei
                2000. Agar dapat melayani pelanggan dan mitra Kerja serta
                mengembangkan Perusahaan menjadi lebih baik, kami telah melakukan
                refocusing bisnis untuk menghasilkan Perusahaan yang mampu
                beradaptasi dengan tuntutan pelanggan dan mitra kerja. Teknologi dan
                produk berbasis TI yang kami kembangkan secara sukses dan konsisten
                telah digunakan dalam sistem pelayanan oleh pelanggan kami. Prestasi
                dan capaian ini semakin menambah keyakinan kami untuk terus
                berkarya, bukan hanya Solusi tetapi kami juga ingin memberikan nilai
                tambah dan kebanggaan akan produk dalam negeri dari setiap karya
                anak bangsa yang dihasilkan. Kami siap melangkah dengan semangat
                kreativitas, inovasi, legalitas, optimisme serta komitmen untuk
                memberikan yang terbaik.
            </p>

            <div id="more-content" class="hidden transition-all duration-500 text-lg">
                <p class="pb-2">
                    <span class="ml-10">Seiring</span> dengan perkembangan inovasi
                    bisnis dalam bidang pengadaan barang dan jasa pemerintahan, Baliyoni
                    Group telah mengembangkan jangkauan bisnisnya ke berbagai jenis
                    pengadaan barang dan jasa selain Peralatan Elektronik dan
                    Pendukungnya seperti, Furniture dan Office Equipment, Perkakas, Air
                    Conditioner, Internet Service Provider, Lisensi Perangkat Lunak,
                    Alat Tulis Kantor, Jasa Penyewaan Peralatan Elektronik dan
                    Pendukungnya, Peralatan Olahraga, Peralatan Pendidikan dan
                    lain-lain. Dengan begitu banyaknya perkembangan inovasi bisnis yang
                    dilakukan, Baliyoni Group telah memiliki sejumlah 50 anak perusahaan
                    yang dapat berjalan dalam proses pengadaan barang dan jasa
                    pemerintahan dalam skala Regional dan Nasional. Kami juga
                    mengembangkan sebuah platform marketplace online bernama
                    Balimall.id, dimana marketplace ini dapat membantu mengatasi
                    permasalahan ekonomi dan mendukung program pemerintah khususnya
                    Pemerintah Provinsi Bali. Balimall.id berfokus untuk memasarkan
                    produk-produk UMKM Bali sehingga dapat dipasarkan secara online
                    dengan mudah, cepat dan efisien.
                </p>
                <p>
                    <span class="ml-10 text-lg">Layanan</span> purna jual dari Baliyoni
                    Group telah mengembangkan Divisi Service dari berbagai brand yang
                    dapat membantu pelanggan agar lebih mudah dalam melakukan service.
                    Kami sudah menjadi Authorized Service Point dari berbagai brand
                    seperti, Hewlett Packard (HP). Acer, Axioo, Asus, Epson, Panasonic,
                    Daikin, Mitsubishi dan yang lainnya.
                </p>
            </div>

            <button id="toggle-button" class="text-black font-semibold flex items-center gap-2">
                <span>Selengkapnya</span>
                <svg id="arrow-icon" class="w-3 h-3 shrink-0 transition-transform duration-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </div>
    </div>
</section>

{{-- Kode JavaScript Anda sudah benar dan tidak perlu diubah --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggle-button');
        const moreContent = document.getElementById('more-content');
        const arrowIcon = document.getElementById('arrow-icon');
        const buttonText = toggleButton.querySelector('span');

        // Atur posisi awal panah (menunjuk ke bawah)
        arrowIcon.classList.add('rotate-180');

        toggleButton.addEventListener('click', function() {
            // Tampilkan atau sembunyikan konten
            moreContent.classList.toggle('hidden');
            
            // Putar ikon panah
            arrowIcon.classList.toggle('rotate-180');

            // Ubah teks tombol
            if (moreContent.classList.contains('hidden')) {
                buttonText.textContent = 'Selengkapnya';
            } else {
                buttonText.textContent = 'Sembunyikan';
            }
        });
    });
</script>