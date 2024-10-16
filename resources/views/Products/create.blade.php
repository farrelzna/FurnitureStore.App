<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-between items-center p-6 text-gray-900">
                    <div class="flex items-center">
                        <img src="{{ url('logo2.png') }}" class="h-20 w-20">
                        {{ __("Create Product Data") }}
                    </div>
                </div>
            </div>
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg" x-data="{ imageUrl : '/storage/noimage.png' }">
                <h1 class="p-6 font-semibold">Create Product Data</h1>
                <div class="flex justify-between items-center p-6 text-gray-900">
                    <!-- Tambahkan class w-full untuk form -->
                    <form method="POST" action="{{ route('products.store') }}" class="w-full">
                        @csrf
                
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                
                        <div class="mt-4">
                            <x-input-label for="stock" :value="__('Stock')" />
                            <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock" :value="old('stock')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" class="block mt-1 w-full" name="description" required autofocus autocomplete="username">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>