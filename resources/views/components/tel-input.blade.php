@props(['disabled' => false])

<input
    x-data
    x-mask="+7(999)999-99-99"
    type=tel
    @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) }}>
