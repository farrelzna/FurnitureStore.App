<button {{ $attributes->merge(['type' => 'submit', 'class' => 'dark:bg-red-500 text-white hover:bg-red-400 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 px-5 py-1 my-1 rounded-md font-semibold mb-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
