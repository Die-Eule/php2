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
                    <div class='w-full p-20'>
                        <form method="POST" action="{{ route('reports.add') }}">
                            @csrf
                            <div class="flex flex-col gap-4">
                                <input
                                    type="text"
                                    name="number"
                                    placeholder="номер авто"
                                    minlength="8" maxlength="9"
                                    autocapitalize required class="border w-40">
                                <textarea
                                    name="description"
                                    placeholder="Опишите нарушение"
                                    cols="80" rows="5"
                                    maxlength="300" minlength="20"
                                    required class="border"></textarea>
                                <input type="submit" value="Добавить" class="bg-green-100 hover:bg-green-200 w-40">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
