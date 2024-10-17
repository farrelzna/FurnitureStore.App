<footer class="bg-gray-800 text-white py-8 mt-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <h4 class="text-lg font-semibold mb-4">About Us</h4>
                <p class="text-sm text-gray-400">
                    Kami adalah aplikasi penjualan barang yang memberikan kemudahan dalam mengelola dan membeli produk secara online dengan berbagai fitur yang user-friendly.
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
                    <li><a href="{{ route('dashboard') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:underline">Produk</a></li>
                    <li><a href="#" class="hover:underline">Promo</a></li>
                    <li><a href="#" class="hover:underline">Bantuan</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="mt-8 border-t border-gray-700 pt-4 text-center text-gray-400 text-sm">
            &copy; 2024 PenjualanBarangApp. All rights reserved.
        </div>

    </div>

</footer>