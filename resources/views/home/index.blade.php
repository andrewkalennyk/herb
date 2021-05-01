@extends('layouts.default')

@section('header_class')
    header_home
@stop

@section('main')
    <!-- hero-->
    <div class="hero" style="background-image: url('/img/hero.jpg')">
        <div class="hero__center center">
            <div class="hero__logo"><img src="/img/herbarius-white.svg" alt="Herbarius"></div>
            <div class="hero__slogan"><img src="/img/slogan.png" alt="Slogan"></div>
        </div>
    </div>
    <!--categories-->
    <div class="categories">
        <!-- center-->
        <div class="center">
            @include('home.partials.new_items')

            @include('home.partials.hits')
        </div>
    </div>
    <!-- collection-->
    <div class="collection js-collection">
        @include('home.partials.slider')
    </div>
    <!-- center-->
    <div class="center">
        <!-- content-->
        <div class="content">
            <div class="content__decor"><img src="{{asset('/img/decor.svg')}}" alt="Decor"></div>
            <div class="content__title title">{{__('О HERBARIUS')}}</div>
            <div class="content__row">
                <div class="content__col">{!! $page->t('description') !!}</div>
                <div class="content__col">
                    <div class="content__figure"><img src="{{$page->getImgPath("570", "777")}}" alt="Image"></div>
                </div>
            </div>
        </div>
    </div>
@stop
