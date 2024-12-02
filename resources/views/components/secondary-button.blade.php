<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center bg-white border border-gray-400 rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 px-5 py-1 my-1 font-semibold mb-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>