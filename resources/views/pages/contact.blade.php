@extends('layouts.default')

@section('main')
<!-- center-->
<div class="center">
    <!-- content-->
    <div class="content">
        <h1 class="content__title title">{{$page->t('title')}}</h1>
        <div class="content__contacts">
            {!! $page->t('description') !!}
        </div>
        <div class="content__preview">
            {!! $page->getImgLang("607", "210") !!}
        </div>
    </div>
</div>
@stop
