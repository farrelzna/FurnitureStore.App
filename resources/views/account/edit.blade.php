<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                        {{ __('Edit Data Account') }}
                        @include('account.partials.delete-account')

                </div>
            </div>

            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-6 font-semibold">Edit Data Account</h1>
                <div class="flex justify-between items-center p-6 text-gray-900">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('account.update' , $user->id) }}"
                        class="flex w-full gap-8">
                        @csrf
                        @method('PUT')

                        <div class="w-full">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full border p-2" type="email" name="email" required  />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required  />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-4 flex justify-between">
                                <x-primary-button>
                                    {{ __('Submit') }}
                                </x-primary-button>

                                <a href="{{ route('account.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'">Back</a>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="flex mt-6">
                <h2 class="font-semibold text-xl text-white mb-7">Edit Account</h2>
            </div>
            <form enctype="multipart/form-data" action="{{ route('account.update', $user->id) }}" method="POST"
                class="gap-8">

                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 w-1/2">
                    <div>
                        <label for="name" class="block text-sm font-medium text-white">Name : </label>
                        <input type="text" name="name" id="name" required
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            value="{{ $user->name }}" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-white">Email :</label>
                        <input type="email" name="email" id="email" required
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                            value="{{ $user->email }}" />
                    </div>
                    

            </form>

        </div>
    </div>

    @if (session()->has('success'))
        <x-alert message="{{ session('success') }}" />
    @endif


</x-app-layout>
