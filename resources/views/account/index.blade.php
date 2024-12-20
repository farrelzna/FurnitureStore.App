<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                    {{ __('Account Data') }}

                    <div class="flex items-center gap-2">
                        <form class="flex max-w-sm mx-auto items-center" role="search" action="{{ request()->route('account')}}" method="GET">   
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="h-9 w-80 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Search branch name..." aria-label="Search" name="search" required />
                            </div>
                            <button type="submit" class="p-4 ms-2 h-9 w-9 text-sm font-medium text-white bg-gray-800 flex items-center justify-center rounded-full border border-gray-800 hover:bg-gray-600 hover:border-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300">
                                <span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </span>
                            </button>
                        </form>
                        
                        <a href="{{ route('account.create') }}"
                        class="p-6 items-center dark:bg-gray-800 text-white hover:bg-gray-700 px-10 py-2 rounded-md font-semibold">+
                        Add</a>
                    </div>

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

                    <div class="flex justify-between">
                        <h3 class="text-lg font-medium text-gray-900">Welcome to your Data Users Account Dashboard!</h3>
                        <a href="{{ route('users.export.excel') }}" class="p-6 items-center dark:bg-gray-800 text-white hover:bg-gray-700 px-10 py-2 rounded-md font-semibold">Export</a>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">
                        Here you can manage your profile, view stats, and more.
                    </p>

                    <div class="mt-8">
                        <h4 class="text-lg font-medium text-gray-900 mb-4">Recent Activity</h4>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead class="rounded">
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal rounded">
                                        <th class="py-3 px-6 text-left">Name</th>
                                        <th class="py-3 px-6 text-left">Email</th>
                                        <th class="py-3 px-6 text-left">Role</th>
                                        <th class="py-3 px-6 text-left">Gender</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm">
                                    @foreach ($users as $user)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 d-flex">{{ $user->name }} <br> 
                                                <div class="flex gap-2">
                                                    <a href="{{ route('account.edit', $user) }}">
                                                        <button class="flex items-center dark:bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 px-10 py-1 rounded-md font-semibold transition ease-in-out duration-150">
                                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                            </svg>                                                              
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('account.delete', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="dark:bg-red-500 text-white hover:bg-red-400 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 px-5 py-1 rounded-md font-semibold mb-2 transition ease-in-out duration-150">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="py-3 px-6">{{ $user->email }}</td>
                                            <td class="py-3 px-6">{{ $user->role }}</td>
                                            <td>{{ $user->gender }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4">

                                <button id="refresh-btn" class="text-gray-800 text-sm font-semibold">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"/>
                                        </svg>                                  
                                        Refresh
                                    </div>
                                </button>
                                
                                <script>
                                    document.getElementById('refresh-btn').addEventListener('click', () => {
                                        const baseUrl = "{{ route('products.index') }}"; // URL ke data awal tanpa parameter
                                        window.location.href = baseUrl; // Arahkan ulang ke URL dasar
                                    });
                                </script>

                            </div>

                            <div class="mt-4 mb-8 text-white">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</x-app-layout>
