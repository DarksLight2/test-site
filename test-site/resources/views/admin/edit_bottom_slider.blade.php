
@if(Auth::check() && Auth::user()->admin === '1')

@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>

    <form method="post" action="{{ route('updateBottomSlider') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        Картинка: <input type="file" name="file">
        <input type="hidden" name= 'id' value="{{ $SliderData[0]['id'] }}">
        <br>
        <br>
        <input type="text" name= 'name' value="{{ $SliderData[0]['name'] }}">
        <br>
        <br>
        <textarea type="text" name= 'text' style="width: 500px;height: 300px;">
            {{ $SliderData[0]['content'] }}
        </textarea>
        <br>
        <br>
        <button type="submit" class="footer__button">Сменить данные слайдера</button>
    </form>

@endsection

@else
    Access denied
@endif