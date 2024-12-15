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
                    <form action="{{ route('reports.new') }}" method="GET">
                        <button class="p-6 bg-slate-200 rounded-md p-3 hover:bg-slate-400 transition" type="submit">создать заявление</button>
                    </form>
                    @include('layouts.flash-messages')
                    <div class='w-full sm:p-5 md:p-10 lg:p-20'>
                        <div class="grid grid-cols-1 lg:grid-cols-[6rem_minmax(0,1fr)_10rem_7rem]">
                            <p class="font-bold hidden lg:block pr-4">Номер</p>
                            <p class="font-bold hidden lg:block pr-4">Описание</p>
                            <p class="font-bold hidden lg:block pr-4">Дата создания</p>
                            <p class="font-bold hidden lg:block pr-4">Статус</p>
                            @foreach ($reports as $report)
                                <p @class([
                                    'pr-4',
                                    'text-base',
                                    'underline',
                                    'lg:no-underline',
                                    'bg-gray-100' => $loop->odd
                                    ])>{{$report['number']}}</p>
                                <p @class([
                                    'pr-4',
                                    'text-base',
                                    'break-words',
                                    'bg-slate-100',
                                    'lg:bg-inherit' => $loop->even,
                                    'lg:bg-gray-100' => $loop->odd
                                    ])>{{$report['description']}}</p>
                                <p @class([
                                    'pr-4',
                                    'text-base',
                                    'bg-gray-100' => $loop->odd
                                    ])>{{$report['created_at']}}</p>
                                <p @class([
                                    'pr-4',
                                    'text-base',
                                    $colors[$report->status_id],
                                    'border-gray-500',
                                    'border-b-2',
                                    'lg:border-0',
                                    'bg-gray-100' => $loop->odd
                                    ])">{{$statuses->find($report->status_id)->name}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{ $reports->links() }}
        </div>
    </div>
</x-app-layout>
