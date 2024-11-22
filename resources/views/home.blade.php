@php
    // Periksa apakah user sudah login
    $isLoggedIn = Auth::check(); // Auth::check() mengembalikan true jika user login
@endphp

<x-app-layout>
    <!-- Hero Section -->
    <section class="flex items-center justify-center h-[60vh] bg-gray-100">

        <div id="gallery" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-tr-lg rounded-br-lg md:h-80">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Product/chair1.jpeg') }}"
                        class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('assets/img/Product/chair2.jpeg') }}"
                        class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Product/table1.jpeg') }}"
                        class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Product/storagerack1.jpeg') }}"
                        class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Product/storagerack2.jpeg') }}"
                        class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>

            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>


        <div class="text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 text-gray-800">Discover Your Dream Furniture</h1>
            <p class="text-lg mb-6 text-gray-600">Elegant and durable designs for every space.</p>
            <a href="{{ $isLoggedIn ? url('/products') : route('login') }}"
                class="bg-gray-800 text-white px-6 py-3 rounded-md hover:bg-gray-700 transition">Shop
                Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <div class="relative">
        <div class="bg-gradient-to-b to-gray-800 from-transparent w-full h-full absolute top-30 left-0"></div>
        <p
            class="max-w-2xl absolute bottom-20 right-20 text-2xl font-semibold leading-relaxed text-gray-900 dark:text-white text-justify">
            Kami menawarkan berbagai pilihan furnitur untuk setiap ruangan, dari kursi modern hingga meja kayu yang
            indah,
            dengan harga terjangkau. Jadikan rumah Anda lebih nyaman dan stylish dengan produk terbaik kami. Belanja
            sekarang dan ubah ruang Anda menjadi tempat yang sempurna!</p>
        <a href="{{ $isLoggedIn ? url('/products') : route('login') }}"
            class="bg-gray-50 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-800 hover:text-white transition absolute bottom-16 right-20">Shop
            Now</a>
        <section id="features" class="py-12">
            <div class="container mx-auto p-4">
                <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Why Choose Us?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center mt-4">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Premium Design</h3>
                        <p class="text-gray-600">Enhance your home's aesthetics.</p>
                    </div>
                    <div class="text-center mt-4">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Quality Materials</h3>
                        <p class="text-gray-600">Durable and long-lasting furniture.</p>
                    </div>
                    <div class="text-center mt-4">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Affordable Prices</h3>
                        <p class="text-gray-600">Get the best value for your money.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products"
            class="py-12 g-white dark:bg-gray-900 bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold text-center mb-6 text-gray-100">Our Popular Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($products as $item)
                        <div class="bg-white p-4 rounded-md shadow-md mt-4">
                            <h3 class="text-lg font-semibold mb-2 text-gray-800">{{ $item->name }}</h3>
                            <p class="text-gray-600 mb-4">Rp. {{ number_format($item->price) }}</p>
                            <p class="text-gray-600 mb-4">{{ $item->description }}</p>
                            <a href="/login"
                                class="block bg-gray-800 text-white py-2 rounded-md text-center hover:bg-gray-700">Lihat
                                Lebih
                                Lanjut</a>
                        </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-16">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Discounts Section -->
    <section id="discounts" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Special Discounts</h2>
            <div class="relative flex gap-8">
                <!-- Slider Container -->
                <div id="slider" class="flex gap-4 overflow-x-hidden">
                    <div
                        class="flex-none w-64 h-40 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow p-6 rounded-md">
                        <h3 class="text-lg font-semibold mb-2 text-gray-400">30% Off Chairs</h3>
                        <p class="text-gray-500">Stylish chairs for your comfort.</p>
                    </div>
                    <div
                        class="flex-none w-64 h-40 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow p-6 rounded-md">
                        <h3 class="text-lg font-semibold mb-2 text-gray-400">20% Off Tables</h3>
                        <p class="text-gray-500">Elegant tables for every room.</p>
                    </div>
                    <div
                        class="flex-none w-64 h-40 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow p-6 rounded-md">
                        <h3 class="text-lg font-semibold mb-2 text-gray-400">15% Off Tables</h3>
                        <p class="text-gray-500">Elegant tables for Office room.</p>
                    </div>
                </div>
                <div>
                    <figure class="relative max-w-sm transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                        <a href="{{ $isLoggedIn ? url('/products') : route('login') }}">
                            <img class="rounded-lg"
                            src="{{ asset('assets/img/saleimg.png') }}"
                            alt="image description">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>



</x-app-layout>
