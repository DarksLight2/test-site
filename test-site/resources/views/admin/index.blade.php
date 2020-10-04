@if(Auth::check() && Auth::user()->admin === '1')

@extends('layouts.app')

@section('content')

<div style="text-align: center;padding-top: 100px;">
    <a href="{{ route('section', 1) }}" class="footer__button">Редактирование первой секции</a>
    <a href="{{ route('section', 2) }}" class="footer__button">Редактирование второй секции</a>
    <a href="{{ route('section', 3) }}" class="footer__button">Редактирование третьей секции</a>
</div>
<div style="text-align: center;padding-top: 100px;">
<a href="{{ route('section', 4) }}" class="footer__button">Редактирование четвёртой секции</a>
<a href="{{ route('section', 5) }}" class="footer__button">Редактирование пятой секции</a>
<a href="{{ route('section', 6) }}" class="footer__button">Редактирование шестой секции</a>
</div>
<div style="text-align: center;padding-top: 100px;">
    <a href="/admin/edit_slider" class="footer__button">Редактирование слайдеров</a>
</div>

@endsection

@else
    Access denied
@endif