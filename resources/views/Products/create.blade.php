<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                    {{ __('Create Product Data') }}

                </div>
            </div>
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between items-center p-6 text-gray-900" x-data="{ imageUrl: '../no-image.png' }">
                    <!-- Tambahkan class w-full untuk form -->
                    <form enctype="multipart/form-data" method="POST" action="{{ route('products.store') }}"
                        class="flex gap-8 w-full">

                        @csrf

                        <div class="w-1/2">
                            <img :src="imageUrl" class="rounded-md">
                        </div>

                        <div class="w-1/2">
                            <div class="mt-4">
                                <h1 class="py-6 font-semibold">Create Product Data</h1>
                                <x-input-label for="image" :value="__('Image')" />
                                <x-text-input accept="image/*" id="image" class="block mt-1 w-full border p-2"
                                    type="file" name="image"
                                    @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="type" :value="__('Category')" />
                                <select id="type" name="type"
                                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md w-full"
                                    required autofocus>
                                    <option value="" disabled selected>Select Type of Product</option>
                                    <option value="Chair">Chair</option>
                                    <option value="Sofa">Sofa</option>
                                    <option value="Table">Table</option>
                                    <option value="Bed">Bed</option>
                                    <option value="Lamp">Lamp</option>
                                    <option value="Wardrobe">Wardrobe</option>
                                    <option value="Storage Rack">Storage Rack</option>
                                    <option value="Other">Other</option>
                                </select>
                                <x-input-error :messages="$errors->get('type')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="stock" :value="__('Stock')" />
                                <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock"
                                    :value="old('stock')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="price" :value="__('Price')" />
                                <x-text-input id="price" class="block mt-1 w-full" type="number" name="price"
                                    :value="old('price')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            </div>
                            
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-area id="description" class="block mt-1 w-full" type="text"
                                    name="description" required autofocus
                                    autocomplete="username">{{ old('description') }}</x-text-area>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>

                            <div class="mt-4 flex justify-between">
                                <x-primary-button>
                                    {{ __('Submit') }}
                                </x-primary-button>

                                <a href="{{ route('products.index') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'">Back</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
