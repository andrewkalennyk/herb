@extends('layouts.default')

@section('main')
    <div class="center">
        <!-- search-->
        <div class="search">
            <h1 class="search__title title">{{__t('Результаты поиска')}}</h1>
            <form class="search__form" action="{{route('search')}}">
                <input type="search" value="{{request()->input('s')}}" placeholder="{{__t('Введите название товара')}}">
                <button type="submit">
                    <svg class="icon icon-search-small">
                        <use xlink:href="#icon-search-small"></use>
                    </svg>
                </button>
            </form>
            <div class="search__request">
                <strong>{{__t('Вы искали')}}:</strong> {{request()->input('s')}}
            </div>
            @if($products->count())
                <div class="search__products">
                    @foreach($products as $product)
                        @include('products.partials.product')
                    @endforeach
                </div>
            @else
                <div class="search__products" style="justify-content: center">
                    <h2>{{__t('Ничего не найдено')}}</h2>
                </div>
            @endif
        </div>
    </div>
@stop
