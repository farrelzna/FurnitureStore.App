<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                    {{ __("You're logged in!") }}

                    <a href="{{ route('products.index') }}"
                        class="p-6 items-center dark:bg-gray-800 text-white hover:bg-gray-700 px-10 py-2 rounded-md font-semibold">
                        Start</a>

                </div>
            </div>
        </div>
    </div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Welcome Section -->
                    <h3 class="text-lg font-medium text-gray-900">Welcome to your dashboard!</h3>
                    <p class="mt-2 text-sm text-gray-600">
                        Here you can manage your profile, view stats, and more.
                    </p>

                    <!-- Example Dashboard Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-6">
                        <div class="p-4 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                    <h4 class="text-lg font-semibold">Total Users</h4>
                                </svg>                                                       
                            </div>
                            <p class="mt-2 text-2xl">{{ $emailCount }}</p>
                        </div>
                        <div class="p-4 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z" clip-rule="evenodd"/>
                                    <h4 class="text-lg font-semibold">Total Products</h4>
                                </svg>  
                            </div>
                            <p class="mt-2 text-2xl">{{ $productCount }}</p>
                        </div>
                        <div class="p-4 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M20.29 8.567c.133.323.334.613.59.85v.002a3.536 3.536 0 0 1 0 5.166 2.442 2.442 0 0 0-.776 1.868 3.534 3.534 0 0 1-3.651 3.653 2.483 2.483 0 0 0-1.87.776 3.537 3.537 0 0 1-5.164 0 2.44 2.44 0 0 0-1.87-.776 3.533 3.533 0 0 1-3.653-3.654 2.44 2.44 0 0 0-.775-1.868 3.537 3.537 0 0 1 0-5.166 2.44 2.44 0 0 0 .775-1.87 3.55 3.55 0 0 1 1.033-2.62 3.594 3.594 0 0 1 2.62-1.032 2.401 2.401 0 0 0 1.87-.775 3.535 3.535 0 0 1 5.165 0 2.444 2.444 0 0 0 1.869.775 3.532 3.532 0 0 1 3.652 3.652c-.012.35.051.697.184 1.02ZM9.927 7.371a1 1 0 1 0 0 2h.01a1 1 0 0 0 0-2h-.01Zm5.889 2.226a1 1 0 0 0-1.414-1.415L8.184 14.4a1 1 0 0 0 1.414 1.414l6.218-6.217Zm-2.79 5.028a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01Z" clip-rule="evenodd"/>
                                    <h4 class="text-lg font-semibold">Total Vouchers</h4>
                                </svg>                              
                            </div>
                            <p class="mt-2 text-2xl">{{ $voucherCount }}</p>
                        </div>
                        <div class="p-4 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                                    <h4 class="text-lg font-semibold">Pending Tasks</h4>
                                </svg>
                            </div>                                  
                            <p class="mt-2 text-2xl">89</p>
                        </div>
                    </div>

                    <!-- Recent Activity Table Example -->
                    <div class="mt-8">
                        <h4 class="text-lg font-medium text-gray-900 mb-4">Recent Activity</h4>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Date</th>
                                        <th class="py-3 px-6 text-left">Description</th>
                                        <th class="py-3 px-6 text-left">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm">
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6">2024-10-17</td>
                                        <td class="py-3 px-6">User John Doe registered</td>
                                        <td class="py-3 px-6 text-green-500">Completed</td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6">2024-10-16</td>
                                        <td class="py-3 px-6">Order #1234 shipped</td>
                                        <td class="py-3 px-6 text-yellow-500">Pending</td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6">2024-10-15</td>
                                        <td class="py-3 px-6">Payment processed</td>
                                        <td class="py-3 px-6 text-green-500">Completed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Sold Items Section -->
                    <div class="mt-12">
                        <h4 class="text-lg font-medium text-gray-900 mb-4">Items That Have Already Been Sold</h4>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white ">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Name Account</th>
                                        <th class="py-3 px-6 text-left">Email</th>
                                        <th class="py-3 px-6 text-left">Role</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm">
                                    @foreach ($users as $user)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6">{{ $user->name }}</td>
                                            <td class="py-3 px-6">{{ $user->email }}</td>
                                            <td class="py-3 px-6">Role</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
