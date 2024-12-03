<footer class="bg-gray-800 text-white py-8">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">About Us</h4>
                <p class="text-sm text-gray-400">
                    Kami adalah aplikasi penjualan barang yang memberikan kemudahan dalam mengelola dan membeli produk
                    secara online dengan berbagai fitur yang user-friendly.
                </p>
            </div>

            <!-- Contact Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact</h4>
                <ul class="text-sm text-gray-400">
                    <li>Email: <a href="mailto:TomoApp@gmail.com" class="text-blue-400">TomoApp@gmail.co</a></li>
                    <li>Phone: +62 123 456 789</li>
                    <li>Address: Jl. Pejuang No. 1, Jakarta</li>
                </ul>
            </div>

            <!-- Privacy Policy Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Kebijakan Privasi</h4>
                <ul class="text-sm text-gray-400">
                    <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:underline">Syarat dan Ketentuan</a></li>
                    <li><a href="#" class="hover:underline">Hak Cipta</a></li>
                </ul>
            </div>

            <!-- Quick Links Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="text-sm text-gray-400">
                    <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:underline">Produk</a></li>
                    <li><a href="{{ route('vouchers.index') }}" class="hover:underline">Promo</a></li>
                    <li><a href="#" class="hover:underline">Bantuan</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright Section -->

        <div class="w-full mt-10 mx-auto max-w-screen-xl md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                    href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <ul
                class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="{{ route('home') }}" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>

    </div>

</footer>
