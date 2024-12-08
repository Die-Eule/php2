<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Административная панель') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class='w-full p-10'>
                        <div class="grid grid-cols-[10%_55%_15%_20%] gap-2">
                            <p class="font-bold">Номер</p>
                            <p class="font-bold">Описание</p>
                            <p class="font-bold">Дата создания</p>
                            <p class="font-bold">Статус</p>
                            @foreach ($reports as $report)
                                <p class="text-base">{{$report['number']}}</p>
                                <p class="text-base">{{$report['description']}}</p>
                                <p class="text-base">{{$report['created_at']}}</p>
                                @if ($report->status_id === 1)
                                    <div class="grid grid-cols-[60%_40%] gap-2">
                                        <form method="POST" action="{{ route('admin.check', $report) }}">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="status" value="2" required class="border">
                                            <input type="submit" value="{{$statuses->find(2)->name}}" class="bg-green-100 w-full hover:bg-green-200">
                                        </form>
                                        <form method="POST" action="{{ route('admin.check', $report, 3) }}">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="status" value="3" required class="border">
                                            <input type="submit" value="{{$statuses->find(3)->name}}" class="bg-red-100 w-full hover:bg-red-200">
                                        </form>
                                    </div>
                                @else
                                    <p class="text-base">{{$statuses->find($report->status_id)->name}}</p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{ $reports->links() }}
        </div>
    </div>
</x-app-layout>
