@extends('layouts.default')

@section('main')
    <!-- center-->
    <div class="center">
        <!-- content-->
        <div class="content">
            <h1 class="content__title title">{{$page->t('title')}}</h1>
            <div class="content__row">
                <div class="content__col">{!! $page->t('description') !!}</div>
                <div class="content__col">
                    <div class="content__figure">
                        <img src="{{$page->getImgPath("570", "777")}}" alt="{{$page->t('title')}}">
                    </div>
                </div>
            </div>
            @include('partials.info_blocks.info_blocks')
        </div>
    </div>
@stop
