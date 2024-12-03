@php
    // Periksa apakah user sudah login
    $isLoggedIn = Auth::check(); // Auth::check() mengembalikan true jika user login
@endphp

<x-app-layout>
    <!-- Hero Section -->
    <section class="flex items-center justify-center h-[60vh] bg-gray-100"
        style="background-image: url('../assets/img/Bgimg.jpg')">

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
                <!-- Item 6 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Product/SetDiningChair1.jpeg') }}"
                        class="absolute block w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="">
                </div>
                <!-- Item 7 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Product/chair3.jpg') }}"
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
            <h1 class="text-3xl md:text-5xl font-bold mb-4 text-gray-100">Discover Your Dream Furniture</h1>
            <p class="text-lg mb-6 text-gray-400">Elegant and durable designs for every space.</p>
            <a href="{{ $isLoggedIn ? url('/products') : route('login') }}"
                class="bg-gray-800 text-white font-bold px-6 py-3 rounded-md hover:bg-gray-700 transition">Shop
                Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <div class="relative">
        <div class="bg-gradient-to-b to-gray-800 from-transparent w-full h-full absolute top-30 left-0"></div>
        <p
            class="max-w-2xl left-20 absolute text-2xl font-semibold leading-relaxed text-gray-900 dark:text-white absolute -translate-y-1 -translate-x-1 right-auto left-0 top-2/4">
            Welcome to TOMO App. The best furniture app for your home needs! Find, select and organize your dream
            furniture with ease. We invest in the potential of your home world.</p>
        <div
            class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 absolute translate-y-40 -translate-x-20 right-auto left-40 top-2/4">
            <a href="{{ $isLoggedIn ? url('/products') : route('login') }}"
                class="bg-gray-800 text-sm text-gray-200 px-10 py-2 font-bold rounded-md hover:bg-gray-200 hover:text-gray-800 transition">See
                More</a>
        </div>
        <p
            class="max-w-2xl absolute bottom-20 right-20 text-2xl font-semibold leading-relaxed text-gray-900 dark:text-white text-justify">
            We offer a wide selection of furniture for every room, from modern chairs to beautiful wooden tables.
            beautiful wooden tables,
            at affordable prices. Make your home more comfortable and stylish with our best products. Shop
            now and transform your space into the perfect place!</p>

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
            class="py-12 g-white rounded-xl dark:bg-gray-900 bg-[url('../assets/img/Bgimg.jpg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold text-center mb-6 text-gray-100">Our Popular Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($products as $item)
                        <div class="bg-white rounded-md shadow-md mt-4">
                            <img src="{{ asset('/' . $item->image) }}" class="h-96 w-full object-cover rounded mb-4">
                            <h3 class="text-lg font-semibold mb-2 px-4 text-gray-800">{{ $item->name }}</h3>
                            <p class="text-gray-600 mb-4 px-4">Rp. {{ number_format($item->price) }}</p>
                            <p class="text-gray-600 mb-4 px-4">{{ $item->description }}</p>

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

    <div class="w-full bg-white border border-gray-200 rounded-b-xl shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">Select tab</label>
            <select id="tabs"
                class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Statistics</option>
                <option>Services</option>
                <option>FAQ</option>
            </select>
        </div>
        <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse"
            id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
                <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                    aria-controls="stats" aria-selected="true"
                    class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-600">Statistics</button>
            </li>
            <li class="w-full">
                <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                    aria-controls="about" aria-selected="false"
                    class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-600">Services</button>
            </li>
            <li class="w-full">
                <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                    aria-selected="false"
                    class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-600">FAQ</button>
            </li>
        </ul>
        <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                aria-labelledby="stats-tab">
                <dl
                    class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Contributors</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Top Forbes companies</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                        <dd class="text-gray-500 dark:text-gray-400">Organizations</dd>
                    </div>
                </dl>
            </div>
            <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                aria-labelledby="about-tab">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">We invest in the
                    world’s potential</h2>
                <!-- List -->
                <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">Wide Range of Furniture Options"</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">3D Room Visualization</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">Fast & Reliable Delivery</span>
                    </li>
                    <li class="flex space-x-2 rtl:space-x-reverse items-center">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="leading-tight">24/7 Customer Support</span>
                    </li>
                </ul>
            </div>
            <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel"
                aria-labelledby="faq-tab">
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                    data-inactive-classes="text-gray-500 dark:text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span>Why Choose Us?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">We provide a wide selection of
                                high-quality home furniture, modern designs, and affordable prices to meet your needs.
                            </p>
                            <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                    href="/docs/getting-started/introduction/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                                developing websites even faster with components on top of Tailwind CSS.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                            <span>Key Features?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400"> Our app comes with features such as a 3D
                                catalog, filters by room, and recommendations according to your home needs.</p>
                            <p class="text-gray-500 dark:text-gray-400">Check out the <a
                                    href="https://flowbite.com/figma/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                                based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                            aria-controls="accordion-flush-body-3">
                            <span>Quality Assurance?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">All our products come with an official
                                warranty and 24/7 customer service to ensure your satisfaction.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                                Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping
                                you from using the best of two worlds.</p>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                            <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                <li><a href="https://flowbite.com/pro/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Discounts Section -->
    <section id="discounts" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Special Discounts</h2>
            <div class="relative flex gap-16">
                <!-- Slider Container -->
                <div>
                    <div class="max-w-7xl mx-auto sm:pe-6 lg:pe-8">
                        <div class="grid gap-6 mb-10">
                            @foreach ($voucher as $item)
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex hover:shadow-xl">
                                    <!-- Bagian Gambar -->
                                    <img src="{{ asset('/' . $item->image) }}"
                                        class="h-auto w-48 object-cover duration-300 sm:rounded-l-lg filter grayscale hover:grayscale-0">

                                    <!-- Bagian Detail -->
                                    <div class="p-6 flex flex-col justify-between w-full">
                                        <div>
                                            <p class="text-xl font-semibold">{{ $item->name }}</p>
                                            <p class="mt-2 font-semibold text-gray-500">Rp.
                                                {{ number_format($item->discount) }}</p>
                                            <p class="text-sm text-gray-400 font-semibold">Stock : {{ $item->stock }}
                                            </p>
                                            <p class="mt-3 text-justify text-sm text-gray-600">
                                                {{ $item->description }}</p>
                                        </div>

                                        <!-- Tombol Add Cart -->
                                        <div class="mt-4 flex justify-end">
                                            <a href="#"
                                                class="flex items-center gap-2 dark:bg-gray-800 text-white hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M3 10h18M6 14h2m3 0h5M3 7v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Z" />
                                                </svg>
                                                Use Voucher
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="relative flex justify-center">
                    <figure class="max-w-sm transition-all">
                        <a href="{{ $isLoggedIn ? url('/products') : route('login') }}">
                            <img class="mb-4 duration-300 cursor-pointer filter rounded-lg grayscale hover:grayscale-0"
                                src="{{ asset('assets/img/sale/sale2.png') }}" alt="image description">
                            <div
                                class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
                                <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                                    Connect wallet
                                </h5>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Connect with one of our
                                    available wallet providers or create a new one.</p>
                                <ul class="my-4 space-y-3">
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                            <svg aria-hidden="true" class="h-4" viewBox="0 0 40 38"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M39.0728 0L21.9092 12.6999L25.1009 5.21543L39.0728 0Z"
                                                    fill="#E17726" />
                                                <path
                                                    d="M0.966797 0.0151367L14.9013 5.21656L17.932 12.7992L0.966797 0.0151367Z"
                                                    fill="#E27625" />
                                                <path
                                                    d="M32.1656 27.0093L39.7516 27.1537L37.1004 36.1603L27.8438 33.6116L32.1656 27.0093Z"
                                                    fill="#E27625" />
                                                <path
                                                    d="M7.83409 27.0093L12.1399 33.6116L2.89876 36.1604L0.263672 27.1537L7.83409 27.0093Z"
                                                    fill="#E27625" />
                                                <path
                                                    d="M17.5203 10.8677L17.8304 20.8807L8.55371 20.4587L11.1924 16.4778L11.2258 16.4394L17.5203 10.8677Z"
                                                    fill="#E27625" />
                                                <path
                                                    d="M22.3831 10.7559L28.7737 16.4397L28.8067 16.4778L31.4455 20.4586L22.1709 20.8806L22.3831 10.7559Z"
                                                    fill="#E27625" />
                                                <path
                                                    d="M12.4115 27.0381L17.4768 30.9848L11.5928 33.8257L12.4115 27.0381Z"
                                                    fill="#E27625" />
                                                <path
                                                    d="M27.5893 27.0376L28.391 33.8258L22.5234 30.9847L27.5893 27.0376Z"
                                                    fill="#E27625" />
                                                <path
                                                    d="M22.6523 30.6128L28.6066 33.4959L23.0679 36.1282L23.1255 34.3884L22.6523 30.6128Z"
                                                    fill="#D5BFB2" />
                                                <path
                                                    d="M17.3458 30.6143L16.8913 34.3601L16.9286 36.1263L11.377 33.4961L17.3458 30.6143Z"
                                                    fill="#D5BFB2" />
                                                <path
                                                    d="M15.6263 22.1875L17.1822 25.4575L11.8848 23.9057L15.6263 22.1875Z"
                                                    fill="#233447" />
                                                <path
                                                    d="M24.3739 22.1875L28.133 23.9053L22.8184 25.4567L24.3739 22.1875Z"
                                                    fill="#233447" />
                                                <path
                                                    d="M12.8169 27.0049L11.9606 34.0423L7.37109 27.1587L12.8169 27.0049Z"
                                                    fill="#CC6228" />
                                                <path
                                                    d="M27.1836 27.0049L32.6296 27.1587L28.0228 34.0425L27.1836 27.0049Z"
                                                    fill="#CC6228" />
                                                <path
                                                    d="M31.5799 20.0605L27.6165 24.0998L24.5608 22.7034L23.0978 25.779L22.1387 20.4901L31.5799 20.0605Z"
                                                    fill="#CC6228" />
                                                <path
                                                    d="M8.41797 20.0605L17.8608 20.4902L16.9017 25.779L15.4384 22.7038L12.3988 24.0999L8.41797 20.0605Z"
                                                    fill="#CC6228" />
                                                <path
                                                    d="M8.15039 19.2314L12.6345 23.7816L12.7899 28.2736L8.15039 19.2314Z"
                                                    fill="#E27525" />
                                                <path
                                                    d="M31.8538 19.2236L27.2061 28.2819L27.381 23.7819L31.8538 19.2236Z"
                                                    fill="#E27525" />
                                                <path
                                                    d="M17.6412 19.5088L17.8217 20.6447L18.2676 23.4745L17.9809 32.166L16.6254 25.1841L16.625 25.1119L17.6412 19.5088Z"
                                                    fill="#E27525" />
                                                <path
                                                    d="M22.3562 19.4932L23.3751 25.1119L23.3747 25.1841L22.0158 32.1835L21.962 30.4328L21.75 23.4231L22.3562 19.4932Z"
                                                    fill="#E27525" />
                                                <path
                                                    d="M27.7797 23.6011L27.628 27.5039L22.8977 31.1894L21.9414 30.5138L23.0133 24.9926L27.7797 23.6011Z"
                                                    fill="#F5841F" />
                                                <path
                                                    d="M12.2373 23.6011L16.9873 24.9926L18.0591 30.5137L17.1029 31.1893L12.3723 27.5035L12.2373 23.6011Z"
                                                    fill="#F5841F" />
                                                <path
                                                    d="M10.4717 32.6338L16.5236 35.5013L16.4979 34.2768L17.0043 33.8323H22.994L23.5187 34.2753L23.48 35.4989L29.4935 32.641L26.5673 35.0591L23.0289 37.4894H16.9558L13.4197 35.0492L10.4717 32.6338Z"
                                                    fill="#C0AC9D" />
                                                <path
                                                    d="M22.2191 30.231L23.0748 30.8354L23.5763 34.8361L22.8506 34.2234H17.1513L16.4395 34.8485L16.9244 30.8357L17.7804 30.231H22.2191Z"
                                                    fill="#161616" />
                                                <path
                                                    d="M37.9395 0.351562L39.9998 6.53242L38.7131 12.7819L39.6293 13.4887L38.3895 14.4346L39.3213 15.1542L38.0875 16.2779L38.8449 16.8264L36.8347 19.1742L28.5894 16.7735L28.5179 16.7352L22.5762 11.723L37.9395 0.351562Z"
                                                    fill="#763E1A" />
                                                <path
                                                    d="M2.06031 0.351562L17.4237 11.723L11.4819 16.7352L11.4105 16.7735L3.16512 19.1742L1.15488 16.8264L1.91176 16.2783L0.678517 15.1542L1.60852 14.4354L0.350209 13.4868L1.30098 12.7795L0 6.53265L2.06031 0.351562Z"
                                                    fill="#763E1A" />
                                                <path
                                                    d="M28.1861 16.2485L36.9226 18.7921L39.7609 27.5398L32.2728 27.5398L27.1133 27.6049L30.8655 20.2912L28.1861 16.2485Z"
                                                    fill="#F5841F" />
                                                <path
                                                    d="M11.8139 16.2485L9.13399 20.2912L12.8867 27.6049L7.72971 27.5398H0.254883L3.07728 18.7922L11.8139 16.2485Z"
                                                    fill="#F5841F" />
                                                <path
                                                    d="M25.5283 5.17383L23.0847 11.7736L22.5661 20.6894L22.3677 23.4839L22.352 30.6225H17.6471L17.6318 23.4973L17.4327 20.6869L16.9139 11.7736L14.4707 5.17383H25.5283Z"
                                                    fill="#F5841F" />
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">MetaMask</span>
                                            <span
                                                class="inline-flex items-center justify-center px-2 py-0.5 ms-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                            <svg aria-hidden="true" class="h-5" viewBox="0 0 292 292"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M145.7 291.66C226.146 291.66 291.36 226.446 291.36 146C291.36 65.5541 226.146 0.339844 145.7 0.339844C65.2542 0.339844 0.0400391 65.5541 0.0400391 146C0.0400391 226.446 65.2542 291.66 145.7 291.66Z"
                                                    fill="#3259A5" />
                                                <path
                                                    d="M195.94 155.5C191.49 179.08 170.8 196.91 145.93 196.91C117.81 196.91 95.0204 174.12 95.0204 146C95.0204 117.88 117.81 95.0897 145.93 95.0897C170.8 95.0897 191.49 112.93 195.94 136.5H247.31C242.52 84.7197 198.96 44.1797 145.93 44.1797C89.6904 44.1797 44.1104 89.7697 44.1104 146C44.1104 202.24 89.7004 247.82 145.93 247.82C198.96 247.82 242.52 207.28 247.31 155.5H195.94Z"
                                                    fill="white" />
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Coinbase Wallet</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                            <svg aria-hidden="true" svg class="h-5"viewBox="0 0 75.591 75.591"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <linearGradient id="a"
                                                    gradientTransform="matrix(0 -54.944 -54.944 0 23.62 79.474)"
                                                    gradientUnits="userSpaceOnUse" x2="1">
                                                    <stop offset="0" stop-color="#ff1b2d" />
                                                    <stop offset=".3" stop-color="#ff1b2d" />
                                                    <stop offset=".614" stop-color="#ff1b2d" />
                                                    <stop offset="1" stop-color="#a70014" />
                                                </linearGradient>
                                                <linearGradient id="b"
                                                    gradientTransform="matrix(0 -48.595 -48.595 0 37.854 76.235)"
                                                    gradientUnits="userSpaceOnUse" x2="1">
                                                    <stop offset="0" stop-color="#9c0000" />
                                                    <stop offset=".7" stop-color="#ff4b4b" />
                                                    <stop offset="1" stop-color="#ff4b4b" />
                                                </linearGradient>
                                                <g transform="matrix(1.3333 0 0 -1.3333 0 107.2)">
                                                    <path
                                                        d="m28.346 80.398c-15.655 0-28.346-12.691-28.346-28.346 0-15.202 11.968-27.609 26.996-28.313.44848-.02115.89766-.03314 1.3504-.03314 7.2574 0 13.876 2.7289 18.891 7.2137-3.3227-2.2036-7.2074-3.4715-11.359-3.4715-6.7504 0-12.796 3.3488-16.862 8.6297-3.1344 3.6999-5.1645 9.1691-5.3028 15.307v1.3349c.13821 6.1377 2.1683 11.608 5.302 15.307 4.0666 5.2809 10.112 8.6297 16.862 8.6297 4.1526 0 8.038-1.2679 11.361-3.4729-4.9904 4.4643-11.569 7.1876-18.786 7.2144-.03596 0-.07122.0014-.10718.0014z"
                                                        fill="url(#a)" />
                                                    <path
                                                        d="m19.016 68.025c2.6013 3.0709 5.9607 4.9227 9.631 4.9227 8.2524 0 14.941-9.356 14.941-20.897s-6.6891-20.897-14.941-20.897c-3.6703 0-7.0297 1.851-9.6303 4.922 4.0659-5.2809 10.111-8.6297 16.862-8.6297 4.1519 0 8.0366 1.2679 11.359 3.4715 5.802 5.1906 9.4554 12.735 9.4554 21.133 0 8.397-3.6527 15.941-9.4533 21.131-3.3234 2.205-7.2088 3.4729-11.361 3.4729-6.7504 0-12.796-3.3488-16.862-8.6297"
                                                        fill="url(#b)" />
                                                </g>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Opera Wallet</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                            <svg aria-hidden="true" class="h-5" viewBox="0 0 512 512"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <radialGradient cx="0%" cy="50%" fx="0%"
                                                        fy="50%" r="100%" id="radialGradient-1">
                                                        <stop stop-color="#5D9DF6" offset="0%"></stop>
                                                        <stop stop-color="#006FFF" offset="100%"></stop>
                                                    </radialGradient>
                                                </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="logo">
                                                        <rect id="base" fill="url(#radialGradient-1)" x="0" y="0"
                                                            width="512" height="512" rx="256"></rect>
                                                        <path
                                                            d="M169.209772,184.531136 C217.142772,137.600733 294.857519,137.600733 342.790517,184.531136 L348.559331,190.179285 C350.955981,192.525805 350.955981,196.330266 348.559331,198.676787 L328.82537,217.99798 C327.627045,219.171241 325.684176,219.171241 324.485851,217.99798 L316.547278,210.225455 C283.10802,177.485633 228.89227,177.485633 195.453011,210.225455 L186.951456,218.549188 C185.75313,219.722448 183.810261,219.722448 182.611937,218.549188 L162.877976,199.227995 C160.481326,196.881474 160.481326,193.077013 162.877976,190.730493 L169.209772,184.531136 Z M383.602212,224.489406 L401.165475,241.685365 C403.562113,244.031874 403.562127,247.836312 401.165506,250.182837 L321.971538,327.721548 C319.574905,330.068086 315.689168,330.068112 313.292501,327.721609 C313.292491,327.721599 313.29248,327.721588 313.29247,327.721578 L257.08541,272.690097 C256.486248,272.103467 255.514813,272.103467 254.915651,272.690097 C254.915647,272.690101 254.915644,272.690105 254.91564,272.690108 L198.709777,327.721548 C196.313151,330.068092 192.427413,330.068131 190.030739,327.721634 C190.030725,327.72162 190.03071,327.721606 190.030695,327.721591 L110.834524,250.181849 C108.437875,247.835329 108.437875,244.030868 110.834524,241.684348 L128.397819,224.488418 C130.794468,222.141898 134.680206,222.141898 137.076856,224.488418 L193.284734,279.520668 C193.883897,280.107298 194.85533,280.107298 195.454493,279.520668 C195.454502,279.520659 195.45451,279.520651 195.454519,279.520644 L251.65958,224.488418 C254.056175,222.141844 257.941913,222.141756 260.338618,224.488222 C260.338651,224.488255 260.338684,224.488288 260.338717,224.488321 L316.546521,279.520644 C317.145683,280.107273 318.117118,280.107273 318.71628,279.520644 L374.923175,224.489406 C377.319825,222.142885 381.205562,222.142885 383.602212,224.489406 Z"
                                                            id="WalletConnect" fill="#FFFFFF" fill-rule="nonzero">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">WalletConnect</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                            <svg aria-hidden="true" class="h-4" viewBox="0 0 96 96"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M72.0998 0.600098H48.3998H24.5998H0.799805V24.4001V48.2001V49.7001V71.8001V71.9001V95.5001H24.5998V72.0001V71.9001V49.8001V48.3001V24.5001H48.3998H72.1998H95.9998V0.700104H72.0998V0.600098Z"
                                                    fill="#617BFF" />
                                                <path
                                                    d="M48.5 71.8002H72.1V95.6002H73C79.1 95.6002 84.9 93.2002 89.2 88.9002C93.5 84.6002 95.9 78.8002 95.9 72.7002V48.2002H48.5V71.8002Z"
                                                    fill="#617BFF" />
                                            </svg>
                                            <span class="flex-1 ms-3 whitespace-nowrap">Fortmatic</span>
                                        </a>
                                    </li>
                                </ul>
                                <div>
                                    <a href="#"
                                        class="inline-flex items-center text-xs font-normal text-gray-500 hover:underline dark:text-gray-400">
                                        <svg class="w-3 h-3 me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        Why do I need to connect with my wallet?</a>
                                </div>
                            </div>

                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
