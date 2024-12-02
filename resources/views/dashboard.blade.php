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
                            <h4 class="text-lg font-semibold">Total Users</h4>
                            <p class="mt-2 text-2xl">{{ $emailCount }}</p>
                        </div>
                        <div class="p-4 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow">
                            <h4 class="text-lg font-semibold">Total Products</h4>
                            <p class="mt-2 text-2xl">{{ $productCount }}</p>
                        </div>
                        <div class="p-4 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow">
                            <h4 class="text-lg font-semibold">Total Vouchers</h4>
                            <p class="mt-2 text-2xl">{{ $voucherCount }}</p>
                        </div>
                        <div class="p-4 dark:bg-gray-800 text-white hover:bg-gray-700 rounded-lg shadow">
                            <h4 class="text-lg font-semibold">Pending Tasks</h4>
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
