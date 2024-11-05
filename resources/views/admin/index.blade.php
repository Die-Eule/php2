@extends('layouts.main')

@section('title')
админ панель
@stop

@section('content')
<div class='w-full p-20'>
    <div class="grid grid-cols-3 gap-4 place-content-around">
        <p class="font-bold">Номер заявления</p>
        <p class="font-bold">Номер авто</p>
        <p class="font-bold">Текст заявления</p>
        @foreach ($reports as $report)
            <p class="text-base">{{$report['id']}}</p>
            <p class="text-base">{{$report['number']}}</p>
            <p class="text-base">{{$report['description']}}</p>
        @endforeach
    </div>
</div>
@stop
