<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between items-center">

                    {{ __('Account Data') }}

                    <a href="{{ route('account.create') }}"
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

                    <h3 class="text-lg font-medium text-gray-900">Welcome to your Data Account Dashboard!</h3>
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
                                        <th class="py-3 px-6 text-left">Number</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm">
                                    @foreach ($users as $user)
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-6 d-flex">{{ $user->name }} <br> <a
                                                    href="{{ route('account.edit', $user) }}">
                                                    <button
                                                        class="dark:bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 px-10 py-1 my-1 rounded-md font-semibold mb-2 transition ease-in-out duration-150">Edit</button>
                                                </a>
                                                <button>@include('account.partials.delete-account')</button>
                                            </td>
                                            <td class="py-3 px-6">{{ $user->email }}</td>
                                            <td class="py-3 px-6">User</td>
                                            <td>89090872637</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4 mb-8 text-white">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</x-app-layout>
