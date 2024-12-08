<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Новая заявка') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class='w-full sm:p-5 md:p-10 lg:p-20'>
                        <form method="POST" action="{{ route('reports.add') }}">
                            @csrf
                            <div class="flex flex-col gap-4">
                                <x-input-label for="number" :value="__('номер авто')" />
                                <x-regnum-input
                                    id="number" 
                                    name="number"
                                    placeholder="X999XX99(9)"
                                    required class="border w-[7em] px-2" />
                                <x-input-error :messages="$errors->get('number')" class="mt-2" />
                                <textarea
                                    name="description"
                                    placeholder="Опишите нарушение"
                                    cols="80" rows="5"
                                    maxlength="300" minlength="20"
                                    required class="border"></textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                <input type="submit" value="Добавить" class="bg-green-100 hover:bg-green-200 w-40">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
