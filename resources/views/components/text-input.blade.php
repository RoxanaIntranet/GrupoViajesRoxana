@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-1 border-gray-300  focus:border-red-rv py-2 
focus:ring-red-rv focus:border  rounded-lg shadow-sm hover:ring-red-rv hover:border hover:border-red-rv']) !!}>
