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

        <div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
                <div class="grid gap-6 py-10">
                    @foreach ($voucher as $item)
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex">
                            <!-- Bagian Gambar -->
                            <img src="{{ asset('/' . $item->image) }}" class="h-48 w-48 object-cover sm:rounded-l-lg">

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
                                <div class="mt-4 flex justify-end">
                                    <a href="{{ route('vouchers.edit', $item->id) }}"
                                        class="flex items-center gap-2 dark:bg-gray-800 text-white hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312" />
                                        </svg>
                                        Add Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

</x-app-layout>
