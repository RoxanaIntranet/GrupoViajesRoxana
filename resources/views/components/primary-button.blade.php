<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-20 py-1 bg-red-rv border border-transparent 
rounded-md font-medium text-white hover:bg-gray-rv active:bg-gray-rv transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
