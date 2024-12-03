div<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                    {{ __('Edit Voucher Data') }}
                    @include('vouchers.partials.delete-vouchers')

                </div>
            </div>

            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between items-center p-6 text-gray-900" x-data="{ imageUrl: '{{ asset('upload-image/' . $voucher->image) }}' }">
                    <form enctype="multipart/form-data" method="POST"
                        action="{{ route('vouchers.update', $voucher->id) }}" class="flex w-full gap-8">
                        @csrf
                        @method('PUT')

                        <div class="w-1/2">
                            <div class="mt-4">
                                <!-- Tampilkan gambar jika sudah ada -->
                                <img :src="imageUrl" class="rounded-md" alt="voucher Image">
                            </div>
                        </div>

                        <div class="w-1/2">
                            <div class="mt-4">
                                <h1 class="font-semibold">Edit Voucher Data</h1>
                                <x-input-label for="image" :value="__('Image')" />
                                <x-text-input accept="image/*" id="image" class="block mt-1 w-full border p-2"
                                    type="file" name="image"
                                    @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="$voucher->name" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="stock" :value="__('Stock')" />
                                <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock"
                                    :value="$voucher->stock" required />
                                <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="discount" :value="__('Discount')" />
                                <x-text-input id="discount" class="block mt-1 w-full" type="number" name="discount"
                                    :value="$voucher->discount" required />
                                <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-area id="description" class="block mt-1 w-full" type="text"
                                    name="description">{{ $voucher->description }}</x-text-area>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>

                            <div class="mt-4 flex justify-between">
                                <x-primary-button>{{ __('Submit') }}</x-primary-button>
                                <a href="{{ route('vouchers.index') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
