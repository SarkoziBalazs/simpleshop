<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-purple-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-600 active:bg-purple-900 focus:outline-none focus:border-purple-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
