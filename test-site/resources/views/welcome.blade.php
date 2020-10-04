@extends('layouts.app')

@section('content')
<nav  id="cd-vertical-nav" >
    <ul>
        <li>
            <a class="navlink" href="#section1" data-number="1">
                <span class="cd-dot"></span>
                <span class="cd-label">01</span>
            </a>
            <a class="navlink" href="#section2" data-number="2">
                <span class="cd-dot"></span>
                <span class="cd-label">02</span>
            </a>
            <a class="navlink" href="#section3" data-number="3">
                <span class="cd-dot"></span>
                <span class="cd-label">03</span>
            </a>
            <a class="navlink" href="#section4" data-number="4">
                <span class="cd-dot"></span>
                <span class="cd-label">04</span>
            </a>
            <a class="navlink" href="#section5" data-number="5">
                <span class="cd-dot"></span>
                <span class="cd-label">05</span>
            </a>
            <a class="navlink" href="#section6" data-number="6">
                <span class="cd-dot"></span>
                <span class="cd-label">06</span>
            </a>
        </li>
    </ul>
</nav>

<section id="section1" class="slider__wrap">
    <div class="slider__info">
        <h1 class="wow fadeInDown animated">Launching Soon</h1>
        <button type="button" name="button" class="wow fadeInUp animated">register interest</button>
    </div>
    <div class="slider single-item">
        @foreach($SliderTop as $El)
            <div class="">
                @if(Auth::check() && Auth::user()->admin === '1')
                    <a href="javascript:void(0)" onclick="window.open('/admin/edit_bottom_slider/{{ $El->id }}','plain');">
                        <img style="width:20px" src="/img/settings.png" target="_blank" alt="Редактирование">
                    </a>
                @endif
                <img src="/slider/images/{{ $El->image }}" alt="">
            </div>
        @endforeach
    </div>
</section>

@if( ! empty($Blocks))
    @foreach ($Blocks as $El)
        @if($El->type_section === 1)

            <section id="section2" class="section row">
                <div class="section__image">
                    <img class="wow fadeInLeft animated animated" src="/section/images/{{ $El->image_first }}" alt="" style="visibility: visible; animation-name: fadeInLeft;">
                    <h2 class="wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">{{ $El->name }}</h2>
                </div>

                <div class="section__inner">
                    <div class="section__block wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">
                        <h4>{{ $El->title_first_block }}</h4>
                        <p class="section__text">{{ $El->content_first_block }}</p>
                    </div>

                    <div class="section__block wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">
                        <h4>{{ $El->title_second_block }}</h4>
                        <p class="section__text">{{ $El->content_second_block }}</p>
                    </div>

                    <div class="section__block wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">
                        <h4>{{ $El->title_third_block }}</h4>
                        <p class="section__text">{{ $El->content_third_block }} </p>
                    </div>
                </div>
            </section>

        @elseif($El->type_section === 2)
            <section id="section3" class="section grey">
                <h3 class="marg wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">{{ $El->name }}</h3>
                <div class="section__inner">

                    @for($i = 1; $i < 7; $i++)

                        @if($i === 1)
                            @php
                                $Title = $El->title_first_block;
                                $Content = $El->content_first_block;
                            @endphp
                        @elseif($i === 2)
                            @php
                                $Title = $El->title_second_block;
                                $Content = $El->content_second_block;
                            @endphp
                        @elseif($i === 3)
                            @php
                                $Title = $El->title_third_block;
                                $Content = $El->content_third_block;
                            @endphp
                        @elseif($i === 4)
                            @php
                                $Title = $El->title_fourth_block;
                                $Content = $El->content_fourth_block;
                            @endphp
                        @elseif($i === 5)
                            @php
                                $Title = $El->title_fifth_block;
                                $Content = $El->content_fifth_block;
                            @endphp
                        @elseif($i === 6)
                            @php
                                $Title = $El->title_sixth_block;
                                $Content = $El->content_sixth_block;
                            @endphp
                        @endif

                        <div class="section__block wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                            <div class="section__asset">
                                <img class="svg" src="/src/img/section_block{{ $i }}.svg" alt="">
                            </div>
                            <div class="section__description">
                                <h4>{{ $Title }}</h4>
                                <p class="section__text">{{ $Content }}</p>
                            </div>
                        </div>

                    @endfor

                </div>
            </section>
        @elseif($El->type_section === 3)
            <section id="section4" class="section no-marg">
                <h2 class="marg wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">{{ $El->name }}</h2>
                <div class="section__inner">
                    <div class="section__block wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="section__asset">
                            <h3>01</h3>
                        </div>
                        <div class="section__description">
                            <h4>{{ $El->title_first_block }}</h4>
                            <p class="section__text">{{ $El->content_first_block }}</p>
                        </div>
                    </div>
                    <div class="section__block wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="section__asset">
                            <h3>02</h3>
                        </div>
                        <div class="section__description">
                            <h4>{{ $El->title_second_block }}</h4>
                            <p class="section__text">{{ $El->content_second_block }}</p>
                        </div>
                    </div>
                    <div class="section__block wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="section__asset">
                            <h3>03</h3>
                        </div>
                        <div class="section__description">
                            <h4>{{ $El->title_third_block }}</h4>
                            <p class="section__text">{{ $El->content_third_block }}</p>
                        </div>
                    </div>
                </div>
            </section>
        @elseif($El->type_section === 4)
            <section id="section5" class="section full grey">
                <div class="section__image wow fadeInDowm animated animated" style="visibility: visible;">
                    <img src="/section/images/{{ $El->image_first }}" alt="">
                </div>
                <div class="section__inner">
                    <h4 class="marg wow fadeInDowm animated animated" style="visibility: visible;">{{ $El->name }}</h4>
                    <h3 class="wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">{{ $El->title_first_block }}</h3>
                    <p class="section__text wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;">{{ $El->content_first_block }}</p>
                </div>
                <div class="section__image wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                    <img src="/section/images/{{ $El->image_second }}" alt="">
                </div>
            </section>
        @endif
    @endforeach
@endif



<section id="section6" class="section slides no-marg">
    <h2 class="marg wow fadeInDown animated animated" style="visibility: visible; animation-name: fadeInDown;">How Test Works</h2>
    <div class="section__inner owl-carousel owl-loaded owl-drag">
        @foreach($SliderBottom as $El)
            <div class="wow fadeInUp animated section__block person animated" style="visibility: visible;">
                @if(Auth::check() && Auth::user()->admin === '1')
                    <a href="javascript:void(0)" onclick="window.open('/admin/edit_bottom_slider/{{ $El->id }}','plain');">
                        <img style="width:20px" src="/img/settings.png" target="_blank" alt="Редактирование">
                    </a>
                @endif
                <br>
                <div class="avatar">
                    <img src="/slider/images/{{ $El->image }}" alt="">
                </div>
                <h4>{{ $El->name }}</h4>
                <p class="section__text">{{ $El->content }}</p>
                <h3>❚❚</h3>
            </div>
        @endforeach
</section>
@endsection