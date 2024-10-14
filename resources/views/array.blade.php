@extends('layouts.main')

@section('title')
Showcase
@stop

@section('content')
<div class='content'>
    <div class="flex flex-wrap">
        @foreach ($array as $product)
            <div class="w-[100px] h-[130px] p-[10px] m-[10px] flex flex-col box-content border border-black border-solid">
                <div class="size-[80px] self-center">
                    <img src="{{$product['path']}}" alt="{{$product['path']}}" class="size-[80px] object-contain">
                </div>
                <p class="text-base">{{$product['title']}}</p>
                <p class="text-base">{{$product['price']}} ₽</p>
            </div>
        @endforeach
    </div>
</div>
@stop
