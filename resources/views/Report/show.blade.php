@extends('layouts.main')

@section('title')
Нарушений.нет
@stop

@section('content')
<div class='w-full p-20'>
    <form method="POST" action="{{ route('reports.update', $report) }}">
        @method('PUT')
        @csrf
        <div class="grid grid-cols-3 gap-4 place-content-around">
            <p class="font-bold">Номер</p>
            <p class="font-bold">Описание</p>
            <p></p>
            <input type="text" name="number" value="{{$report['number']}}" required class="border">
            <input type="text" name="description" value="{{$report['description']}}" required class="border">
            <input type="submit" value="Обновить" class="bg-yellow-100 hover:bg-yellow-200">
        </div>
    </form>
</div>
@stop
