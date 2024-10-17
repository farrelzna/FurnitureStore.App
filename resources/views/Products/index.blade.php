<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">
                        
                    {{ __('Product Data') }}
               
                    <a href="{{ route('products.create') }}"
                        class="p-6 items-center dark:bg-gray-800  text-white hover:bg-gray-700 px-10 py-2 rounded-md font-semibold">+
                        Add</a>

                </div>
            </div>
        </div>
    </div>

        @if (session()->has('success'))
            <x-alert message="{{ session('success') }}" />
        @endif
        
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="grid md:grid-cols-3 grid-cols-2 gap-6">
                @foreach ($product as $item)
                    <div>
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <img src="{{ url('storage/' . $item->image) }}" class="h-96 w-full object-cover">
                            <div class="p-6">
                                <p class="text-xl font-semibold">{{ $item->name }}</p>
                                <p class="mt-2 font-semibold text-gray-500">Rp. {{ number_format($item->price) }}</p>
                                <p class="text-sm text-gray-400 font-semibold">Stock : {{ $item->stock }}</p>
                                <p class="mt-3 text-justify">{{ $item->description }}</p>
                            </div>
                            <div class="p-6 flex justify-end">
                                <a href="{{ route('products.edit', $item->id) }}"
                                    class="p-6 items-center dark:bg-gray-800 text-white hover:bg-gray-700 px-10 py-2 rounded-md font-semibold">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                {{ $product->links() }}
            </div>
            
        </div>
    </div>

</x-app-layout>