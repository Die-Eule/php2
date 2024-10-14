@extends('layouts.main')

@section('title')
Нарушений.нет
@stop

@section('content')
<div class='w-full p-20'>
    <div class="grid grid-cols-3 gap-4 place-content-around">
        <p class="font-bold">Номер</p>
        <p class="font-bold">Описание</p>
        <p class="font-bold">Дата создания</p>
        @foreach ($reports as $report)
            <p class="text-base">{{$report['number']}}</p>
            <p class="text-base">{{$report['description']}}</p>
            <p class="text-base">{{$report['created_at']}}</p>
        @endforeach
    </div>
</div>
@stop
