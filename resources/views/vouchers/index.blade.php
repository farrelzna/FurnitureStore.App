<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                    {{ __('Vouchers Data') }}

                    <a href="{{ route('vouchers.create') }}"
                        class="p-6 items-center dark:bg-gray-800 text-white hover:bg-gray-700 px-10 py-2 rounded-md font-semibold">+
                        Add</a>

                </div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <x-alert message="{{ session('success') }}" />
    @endif

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-12 ">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h3 class="text-lg font-medium text-gray-900">Welcome to your Data Vouchers Dashboard!</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Here you can manage your Voucher, view stats, and more.
                    </p>

                    <div class="mt-8">
                        <h4 class="text-lg font-medium text-gray-900 mb-4">Recent Vouchers</h4>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead class="rounded">
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal rounded">
                                        <th class="py-3 px-6 text-left">Name</th>
                                        <th class="py-3 px-6 text-left">Type</th>
                                        <th class="py-3 px-6 text-left">Stock</th>
                                        <th class="py-3 px-6 text-left">Price</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm">
                                    @foreach ($voucher as $item)
                                        {{-- @dd($item) --}}
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6">{{ $item->name }} <br> <a
                                                    href="{{ route('vouchers.edit', $item) }}">
                                                    <button
                                                        class="dark:bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 px-10 py-1 my-1 rounded-md font-semibold mb-2 transition ease-in-out duration-150">Edit</button>
                                                </a>
                                                <button>@include('vouchers.partials.delete-vouchers')</button>
                                                </a>
                                            </td>
                                            <td>{{ $item->type }}</td>
                                            <td class="py-3 px-6">{{ $item->stock }}</td>
                                            <td class="py-3 px-6">Rp.
                                                {{ number_format($item->discount, '0', ',', '.') }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4 mb-8 text-white">
                                {{ $voucher->links() }}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
                <div class="grid gap-6">
                    @foreach ($voucher as $item)
                        <div
                            class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex duration-300 form ease-in-out filter transition hover:shadow-lg">
                            <!-- Bagian Gambar -->
                            <img src="{{ asset('/' . $item->image) }}" class="h-fill w-48 object-cover sm:rounded-l-lg">

                            <!-- Bagian Detail -->
                            <div class="p-6 flex flex-col justify-between w-full">
                                <div>
                                    <p class="text-xl font-semibold">{{ $item->name }}</p>
                                    <p class="mt-2 font-semibold text-gray-500">Rp.
                                        {{ number_format($item->discount) }}</p>
                                    <p class="text-sm text-gray-400 font-semibold">Stock : {{ $item->stock }}</p>
                                    <p class="mt-3 text-justify text-sm text-gray-600">{{ $item->description }}</p>
                                </div>

                                <!-- Tombol Add Cart -->
                                <div class="p-6 flex items-center justify-between">
                                    <div class="flex items-center mt-2.5 mb-5">
                                        <span
                                            class="bg-gray-200 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded">5.0</span>
                                    </div>
                                    <a href="#"
                                        class="flex items-center gap-2 dark:bg-gray-800 text-white hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
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

</x-app-layout>
