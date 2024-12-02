<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                    {{ __('Create Account Data') }}

                </div>
            </div>
            <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-6 font-semibold">Create Account Data</h1>
                <div class="flex justify-between items-center p-6 text-gray-900">
                    <!-- Tambahkan class w-full untuk form -->
                    <form enctype="multipart/form-data" method="POST" action="{{ route('account.store') }}"
                        class="flex gap-8 w-full">
                        @csrf

                        <div class="w-full">
                            <div class="">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    :value="old('password')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-between mt-4">
                                <div class="flex">
                                    <x-primary-button>
                                        {{ __('Submit') }}
                                    </x-primary-button>
                                </div>

                                <a href="{{ route('account.index') }}"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'">Back</a>

                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
