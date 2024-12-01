<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Список заявок') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-nav-link :href="route('reports.new')">
                        {{ __('создать заявление') }}
                    </x-nav-link>
                    @include('layouts.flash-messages')
                    <div class='w-full p-20'>
                        <div class="grid grid-cols-[10%_60%_15%_15%] gap-4 place-content-around">
                            <p class="font-bold">Номер</p>
                            <p class="font-bold">Описание</p>
                            <p class="font-bold">Дата создания</p>
                            <p class="font-bold">Статус</p>
                            @foreach ($reports as $report)
                                <p class="text-base">{{$report['number']}}</p>
                                <p class="text-base">{{$report['description']}}</p>
                                <p class="text-base">{{$report['created_at']}}</p>
                                <p class="text-base {{$colors[$report->status_id]}}">{{$statuses->find($report->status_id)->name}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
