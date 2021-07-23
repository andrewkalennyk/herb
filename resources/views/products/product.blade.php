@extends('layouts.default')

@section('main')
    <div class="center">
        <!-- back--><a class="back" href="{{ url()->previous() }}">
            <svg class="icon icon-prev">
                <use xlink:href="#icon-prev"></use>
            </svg>{{__t('В каталог товаров')}}</a>
        <!-- card-->
        <div class="card">
            <div class="card__topper">
                <div class="card__title title">{{$page->t('title')}}</div>
                <div class="card__code">{{__t('Артикул')}}: {{$page->article}}</div>
            </div>
            <div class="card__row">
                <div class="card__col">
                    @if(count($pictures))
                    <!-- gallery-->
                        <div class="gallery js-gallery">
                            <div class="gallery__carousel js-gallery-carousel">
                                @foreach($pictures as $picture)
                                    <img src="{{substr($picture, 1)}}" alt="Preview">
                                @endforeach
                            </div>
                            <div class="gallery__thumbs js-gallery-thumbs">
                                @foreach($pictures as $picture)
                                    <img src="{{substr($picture, 1)}}" alt="Thumb">
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if($page->video_url)
                        <!-- video-->
                        <a class="video" data-fancybox
                           href="{{$page->video_url}}">
                            {!! $page->getImg('840','460', ['image_title' => 'vide_cover_image']) !!}
                            {{--<img src="/img/content/cover.jpg" alt="Cover">--}}
                            <svg class="icon icon-play">
                                <use xlink:href="#icon-play"></use>
                            </svg>
                            <div class="video__title">{{__t('Смотреть видео')}}</div>
                        </a>
                    @endif
                </div>
                <div class="card__col">
                    <div class="card__head">
                        <div class="card__title title title_md">{{$page->t('title')}}</div>
                        <div class="card__code">{{__t('Артикул')}}: {{$page->article}}</div>
                    </div>
                    <div class="card__short">{!! $page->t('short_description') !!}</div>
                    @if($productPrices->count())
                        <div class="card__details">
                            <div class="card__field">
                                <div class="card__label">{{__t('Объем')}}</div>
                                <!-- select-->
                                <div class="select js-select">
                                    <div class="select__head js-select-head">
                                        <span>{{$defaultPrice->unitVal()}}</span>
                                        <svg class="icon icon-arrow">
                                            <use xlink:href="#icon-arrow"></use>
                                        </svg>
                                    </div>
                                    <div class="select__drop js-select-drop">
                                        @foreach($productPrices as $price)
                                            <div class="select__option js-select-option select-unit-price-option"
                                                 data-price="{{$price->price}}"
                                                 data-priceId="{{$price->id}}"
                                                 data-qty="{{$price->qty}}"
                                                 data-rowId="{{$price->rowId}}"
                                            >{{$price->unitVal()}}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card__price">
                                <span class="card_unit_price">{{$defaultPrice->price}}</span> {{__t('грн')}}
                            </div>

                            @include('products.partials.buy_btn')

                        </div>
                    @endif
                    <div class="card__section">
                        <div class="card__caption title title_sm">{{__t('Состав')}}:</div>
                        {!! $page->t('composition') !!}
                    </div>
                    <div class="card__section">
                        <div class="card__caption title title_sm">{{__t('Описание товара')}}:</div>
                        <div class="card__content">{!! $page->t('description') !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('after_script')
    <script>
        $('.select-unit-price-option').click(function () {
            $('.card_unit_price').html($(this).attr('data-price'));
            $('.cart_value .value__input').val($(this).attr('data-qty'));
            $('.cart_value .value_cart_row_id').val($(this).attr('data-rowId'));
            $('.card__btn').attr('data-price-id', $(this).attr('data-priceId'));

            if ($(this).attr('data-rowId'))  {
                $('.card__btn').hide();
                $('.cart_value').show();
            } else {
                $('.card__btn').show();
                $('.cart_value').hide();
            }
        })
    </script>
@stop
