@extends('layouts.main')

@section('title')
Нарушений.нет
@stop

@section('content')
<div class='w-full p-20'>
    <div class="grid grid-cols-4 gap-4 place-content-around">
        <p class="font-bold">Номер</p>
        <p class="font-bold">Описание</p>
        <p class="font-bold">Дата создания</p>
        <p></p>
        @foreach ($reports as $report)
            <p class="text-base">{{$report['number']}}</p>
            <p class="text-base">{{$report['description']}}</p>
            <p class="text-base">{{$report['created_at']}}</p>
            <div class="grid grid-cols-2 gap-4">
                <form method="GET" action="{{ route('reports.show', $report) }}">
                    @csrf
                    <input type="submit" value="Изменить" class="bg-yellow-100 w-full hover:bg-yellow-200">
                </form>
                <form method="POST" action="{{ route('reports.destroy', $report) }}">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Удалить" class="bg-red-100 w-full hover:bg-red-200">
                </form>
            </div>
        @endforeach
    </div>
    <form method="POST" action="{{ route('reports.add') }}">
        @csrf
        <div class="grid grid-cols-4 gap-4 place-content-around mt-4">
            <input type="text" name="number" placeholder="номер авто" required class="border">
            <input type="text" name="description" placeholder="описание заявки" required class="border">
            <input type="submit" value="Добавить" class="bg-green-100 hover:bg-green-200">
            <p></p>
        </div>
    </form>
</div>
@stop
