@extends('layouts.default')

@section('main')
    <!-- center-->
    <div class="center">
        <!-- catalog-->
        <div class="catalog">
            <div class="catalog__title title">{{$page->t('title')}}</div>
            <div class="catalog__layout">
                @include('products.partials.catalog_sidebar')
                <div class="catalog__container">
                    <div class="catalog__sort">
                        <!-- select-->
                        @include('products.partials.catalog_mobile')
                        <!-- select-->
                        <div class="select select_sm js-select url_sorting_select">
                            <div class="select__head js-select-head">
                                <span class="url_sorting_head">{{__t('от А до Я')}}</span>
                                <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </div>
                            <div class="select__drop js-select-drop">
                                <a class="select__option url_sorting_option {{request()->input('title') == 'asc' ? 'active' : ''}}" href="{{url_filter_generate('title', 'asc')}}">{{__t('от А до Я')}}</a>
                                <a class="select__option url_sorting_option {{request()->input('title') == 'desc' ? 'active' : ''}}" href="{{url_filter_generate('title', 'desc')}}">{{__t('от Я до А')}}</a></div>
                        </div>
                        <!-- select-->
                        <div class="select select_sm js-select url_sorting_select">
                            <div class="select__head js-select-head">
                                <span class="url_sorting_head">{{__t('По цене')}}</span>
                                <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </div>
                            <div class="select__drop js-select-drop">
                                <a class="select__option url_sorting_option {{request()->input('price') == 'desc' ? 'active' : ''}}"
                                   href="{{url_filter_generate('price', 'desc')}}"
                                >{{__t('по убиванию')}}</a>
                                <a class="select__option url_sorting_option {{request()->input('price') == 'asc' ? 'active' : ''}}"
                                   href="{{url_filter_generate('price', 'asc')}}"
                                >{{__t('по возрастанию')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__products">
                        @if($products->count())
                            @foreach($products as $product)
                                @include('products.partials.product')
                            @endforeach
                        @endif
                    </div>

                    {!! $products->links() !!}

                </div>
            </div>
        </div>
    </div>
@stop

@section('after_script')
    <script>
        $('.url_sorting_select').each(function () {
            let select = this,
                selectedOption = $(select).find('.url_sorting_option.active');
            if (selectedOption.length) {
                $(select).find('.url_sorting_head').html(selectedOption.html());
            }
        });
    </script>
@stop
