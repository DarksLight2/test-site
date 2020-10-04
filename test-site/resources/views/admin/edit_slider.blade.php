@if(Auth::check() && Auth::user()->admin === '1')

@extends('layouts.app')

@section('content')

    @foreach($SliderData as $Slider)
        {{ $Slider->id }}
        <br>
        {{ $Slider->name }}
        <br>
        <img src="/slider/images/{{ $Slider->image }}" alt="Картинка">
        <br>
        <br>
        <a href="{{ route('slider', $Slider->id) }}" class="btn btn-outline-info btn-lg btn-block">Редактировать слайдер</a>
        <br>
        <br>
    @endforeach

@endsection

@else
    Access denied
@endif