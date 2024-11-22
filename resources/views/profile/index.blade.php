<x-app-layout>
    <div class="flex flex-col lg:flex-row gap-6 p-6 bg-gray-50 min-h-screen">
        <!-- Sidebar -->
        <aside class="w-full lg:w-1/4 bg-white shadow-md rounded-lg p-4">
            <div class="flex flex-col items-center text-center">
                <img src="https://via.placeholder.com/100" alt="Profile" class="w-24 h-24 rounded-full">
                <h2 class="text-lg font-semibold mt-4">{{ auth()->user()->name }}</h2>
                <p class="text-sm text-gray-500">Saldo: Rp0</p>
            </div>
            <div class="mt-6">
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-gray-600">
                        <span>GoPay</span>
                        <span class="ml-auto">Rp0</span>
                    </li>
                    <li class="flex items-center gap-2 text-gray-600">
                        <span>Tokopedia Card</span>
                        <span class="ml-auto text-blue-500">Daftar Sekarang</span>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Content -->
        <main class="w-full lg:w-3/4 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-lg font-semibold text-gray-700 border-b pb-2">Biodata Diri</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                        <div>
                            <h3 class="text-sm text-gray-600">Your Name</h3>
                            <p class="text-gray-800 font-medium flex items-center">
                                {{ auth()->user()->name }}
                                <a href="#" class="ml-2 text-blue-500 text-sm">Edit</a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm text-gray-600">Birth Date</h3>
                            <p class="text-gray-800 font-medium flex items-center">
                                Add Birth Date
                                <a href="#" class="ml-2 text-blue-500 text-sm">Edit</a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm text-gray-600">Gender</h3>
                            <p class="text-gray-800 font-medium flex items-center">
                                Pria
                                <a href="#" class="ml-2 text-blue-500 text-sm">Edit</a>
                            </p>
                        </div>
                    </div>
                    <h2 class="text-lg font-semibold text-gray-700 border-b pb-2 mt-6">Contact</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                        <div>
                            <h3 class="text-sm text-gray-600">Email</h3>
                            <p class="text-gray-800 font-medium flex items-center">
                                {{ auth()->user()->email }}
                                <span
                                    class="ml-2 bg-green-100 text-green-500 text-xs font-semibold px-2 py-1 rounded">Verified</span>
                                <a href="#" class="ml-2 text-blue-500 text-sm">Edit</a>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm text-gray-600">Mobile Number</h3>
                            <p class="text-gray-800 font-medium flex items-center">
                                6289519099913
                                <span
                                    class="ml-2 bg-green-100 text-green-500 text-xs font-semibold px-2 py-1 rounded">Verified</span>
                                <a href="#" class="ml-2 text-blue-500 text-sm">Edit</a>
                            </p>
                        </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
