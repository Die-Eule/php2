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
                    <div class='w-full sm:p-5 md:p-10 lg:p-20'>
                        <div class="grid grid-cols-1 lg:grid-cols-[6rem_minmax(0,1fr)_10rem_7rem] gap-4">
                            <p class="font-bold hidden lg:block">Номер</p>
                            <p class="font-bold hidden lg:block">Описание</p>
                            <p class="font-bold hidden lg:block">Дата создания</p>
                            <p class="font-bold hidden lg:block">Статус</p>
                            @foreach ($reports as $report)
                                <p class="text-base underline lg:no-underline">{{$report['number']}}</p>
                                <p class="text-base break-words bg-slate-100 lg:bg-inherit">{{$report['description']}}</p>
                                <p class="text-base">{{$report['created_at']}}</p>
                                <p class="text-base {{$colors[$report->status_id]}} border-gray-500 border-b-2 lg:border-0">{{$statuses->find($report->status_id)->name}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{ $reports->links() }}
        </div>
    </div>
</x-app-layout>
