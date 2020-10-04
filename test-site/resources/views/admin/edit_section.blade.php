@if(Auth::check() && Auth::user()->admin === '1')

@extends('layouts.app')

@section('content')


<style>
    .non_style{
        border:none;
        background:none;
        outline:none;
        padding:0;
    }
</style>
<form action="{{ route('sectionPostData', $SectionData[0]->type_section) }}" method="POST">

    {!! csrf_field() !!}

@if($SectionData[0]->type_section === 1)

    <section id="section2" class="section row">
        <div class="section__image">
            <img class="wow fadeInLeft animated animated" src="/section/images/{{ $SectionData[0]['image_first'] }}" alt="" style="visibility: visible; animation-name: fadeInLeft;">
            <h2 class="wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">
                <label>
                    <input class="non_style" name="name" type="text" value="{{ $SectionData[0]->name }}">
                </label></h2>
        </div>

        <div class="section__inner">
            <div class="section__block wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">
                <h4><input class="non_style" name="title_first_block" type="text" value="{{ $SectionData[0]->title_first_block }}"></h4>
                <p class="section__text"><input class="non_style" name="content_first_block" type="text" value="{{ $SectionData[0]->content_first_block }}"></p>
            </div>

            <div class="section__block wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                <h4><input class="non_style" name="title_second_block" type="text" value="{{ $SectionData[0]->title_second_block }}"></h4>
                <p class="section__text"><input class="non_style" name="content_second_block" type="text" value="{{ $SectionData[0]->content_second_block }}"></p>
            </div>

            <div class="section__block wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">
                <h4><input class="non_style" name="title_third_block" type="text" value="{{ $SectionData[0]->title_third_block }}"></h4>
                <p class="section__text"><input class="non_style" name="content_third_block" type="text" value="{{ $SectionData[0]->content_third_block }}"> </p>
            </div>
        </div>
    </section>
@elseif($SectionData[0]->type_section === 2)
        <section id="section3" class="section grey">
            <h3 class="marg wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;"><input class="non_style" name="name" type="text" value="{{ $SectionData[0]->name }}"></h3>
            <div class="section__inner">

                @for($i = 1; $i < 7; $i++)

                    @if($i === 1)
                        @php
                            $Title = $SectionData[0]->title_first_block;
                            $Content = $SectionData[0]->content_first_block;
                            $NameContent = 'content_first_block';
                            $NameTitle = 'title_first_block';
                        @endphp
                    @elseif($i === 2)
                        @php
                            $Title = $SectionData[0]->title_second_block;
                            $Content = $SectionData[0]->content_second_block;
                            $NameContent = 'content_second_block';
                            $NameTitle = 'title_second_block';
                        @endphp
                    @elseif($i === 3)
                        @php
                            $Title = $SectionData[0]->title_third_block;
                            $Content = $SectionData[0]->content_third_block;
                            $NameContent = 'content_third_block';
                            $NameTitle = 'title_third_block';
                        @endphp
                    @elseif($i === 4)
                        @php
                            $Title = $SectionData[0]->title_fourth_block;
                            $Content = $SectionData[0]->content_fourth_block;
                            $NameContent = 'content_fourth_block';
                            $NameTitle = 'title_fourth_block';
                        @endphp
                    @elseif($i === 5)
                        @php
                            $Title = $SectionData[0]->title_fifth_block;
                            $Content = $SectionData[0]->content_fifth_block;
                            $NameContent = 'content_fifth_block';
                            $NameTitle = 'title_fifth_block';
                        @endphp
                    @elseif($i === 6)
                        @php
                            $Title = $SectionData[0]->title_sixth_block;
                            $Content = $SectionData[0]->content_sixth_block;
                            $NameContent = 'content_sixth_block';
                            $NameTitle = 'title_sixth_block';
                        @endphp
                    @endif
                    <div class="section__block wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="section__asset">
                            <img class="svg" src="/src/img/section_block{{ $i }}.svg" alt="">
                        </div>
                        <div class="section__description">
                            <h4><input class="non_style" name="{{ $NameTitle }}" type="text" value="{{ $Title }}"></h4>
                            <p class="section__text"><input class="non_style" name="{{ $NameContent }}" type="text" value="{{ $Content }}"></p>
                        </div>
                    </div>

                @endfor
        </section>
@elseif($SectionData[0]->type_section === 3)
        <section id="section4" class="section no-marg">
            <h2 class="marg wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;"><input class="non_style" name="name" type="text" value="{{ $SectionData[0]->name }}"></h2>
            <div class="section__inner">
                <div class="section__block wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="section__asset">
                        <h3>01</h3>
                    </div>
                    <div class="section__description">
                        <h4><input class="non_style" name="title_first_block" type="text" value="{{ $SectionData[0]->title_first_block }}"></h4>
                        <p class="section__text"><input class="non_style" name="content_first_block" type="text" value="{{ $SectionData[0]->content_first_block }}"></p>
                    </div>
                </div>
                <div class="section__block wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                    <div class="section__asset">
                        <h3>02</h3>
                    </div>
                    <div class="section__description">
                        <h4><input class="non_style" name="title_second_block" type="text" value="{{ $SectionData[0]->title_second_block }}"></h4>
                        <p class="section__text"><input class="non_style" name="content_second_block" type="text" value="{{ $SectionData[0]->content_second_block }}"></p>
                    </div>
                </div>
                <div class="section__block wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="section__asset">
                        <h3>03</h3>
                    </div>
                    <div class="section__description">
                        <h4><input class="non_style" name="title_third_block" type="text" value="{{ $SectionData[0]->title_third_block }}"></h4>
                        <p class="section__text"><input class="non_style" name="content_third_block" type="text" value="{{ $SectionData[0]->content_third_block }}"></p>
                    </div>
                </div>
            </div>
        </section>
@elseif($SectionData[0]->type_section === 4)
        <section id="section5" class="section full grey">
            <div class="section__image wow fadeInDowm animated animated" style="visibility: visible;">
                <img src="/section/images/{{ $SectionData[0]->image_first }}" alt="">
            </div>
            <div class="section__inner">
                <h4 class="marg wow fadeInDowm animated animated" style="visibility: visible;"><input class="non_style" name="name" type="text" value="{{ $SectionData[0]->name }}"></h4>
                <h3 class="wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;"><input class="non_style" name="title_first_block" type="text" value="{{ $SectionData[0]->title_first_block }}"></h3>
                <p class="section__text wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <textarea class="non_style" name="content_first_block" type="text" style="width: 400px; height: 300px;">
                        {{ $SectionData[0]->content_first_block }}
                    </textarea>
                </p>
            </div>
            <div class="section__image wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                <img src="/section/images/{{ $SectionData[0]->image_second }}" alt="">
            </div>
        </section>
@endif

    <button type="submit" name="button" class="footer__button">Сохранить</button>
    <a class="footer__button" href="/admin/">Вернутся назад</a>
</form>
<br>
@if($SectionData[0]->type_section === 1 || $SectionData[0]->type_section === 4)
    <form action="{{ route('changeImageSection', ['id' => $SectionData[0]->id]) }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <input type="file" name="file">
        <input type="hidden" name="image" value="first">
        <button type="submit" name="button" class="footer__button">Сменить первое изображение секции</button>
    </form>
    <br>
@endif

@if($SectionData[0]->type_section === 4)
    <form action="{{ route('changeImageSection', ['id' => $SectionData[0]->id]) }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <input type="file" name="file">
        <input type="hidden" name="image" value="second">
        <button type="submit" name="button" class="footer__button">Сменить второе изображение секции</button>
    </form>
    <br>
@endif

@endsection

@else
    Access denied
@endif