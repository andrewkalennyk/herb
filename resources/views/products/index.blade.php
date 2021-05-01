@extends('layouts.default')

@section('main')
    <!-- center-->
    <div class="center">
        <!-- catalog-->
        <div class="catalog">
            <div class="catalog__title title">{{$page->t('title')}}</div>
            <div class="catalog__layout">
                <div class="catalog__sidebar">
                    <div class="catalog__categories"><a class="active" href="#">Для лица</a>
                        <div class="catalog__sub"><a class="active" href="#">Подменю</a><a href="#">Подменю</a><a href="#">Подменю</a><a href="#">Подменю</a><a href="#">Подменю</a></div><a href="#">Для тела</a><a href="#">Для волос</a><a href="#">Для ванны</a><a href="#">Для дома</a><a href="#">По типам кожи</a><a href="#">Продукция для детей</a>
                    </div>
                </div>
                <div class="catalog__container">
                    <div class="catalog__sort">
                        <!-- select-->
                        <div class="select select_sm js-select">
                            <div class="select__head js-select-head"><span>Категории</span>
                                <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </div>
                            <div class="select__drop js-select-drop"><a class="select__option" href="#">Для лица</a>
                                <div class="select__sub"><a class="select__option active" href="#">Подменю</a><a class="select__option" href="#">Подменю</a><a class="select__option" href="#">Подменю</a><a class="select__option" href="#">Подменю</a><a class="select__option" href="#">Подменю</a></div><a class="select__option" href="#">Для тела</a><a class="select__option" href="#">Для волос</a><a class="select__option" href="#">Для ванны</a><a class="select__option" href="#">Для дома</a><a class="select__option" href="#">По типам кожи</a><a class="select__option" href="#">Продукция для детей</a>
                            </div>
                        </div>
                        <!-- select-->
                        <div class="select select_sm js-select">
                            <div class="select__head js-select-head"><span>от А до Я</span>
                                <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </div>
                            <div class="select__drop js-select-drop"><a class="select__option" href="#">от А до Я</a><a class="select__option" href="#">от Я до А</a></div>
                        </div>
                        <!-- select-->
                        <div class="select select_sm js-select">
                            <div class="select__head js-select-head"><span>По цене</span>
                                <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg>
                            </div>
                            <div class="select__drop js-select-drop"><a class="select__option" href="#">по убиванию</a><a class="select__option" href="#">по возрастанию</a></div>
                        </div>
                    </div>
                    <div class="catalog__products">
                        <div class="product"><a class="product__preview" href="/product.html"><img class="product__badge" src="img/discount-50.svg" alt="-50%"/><img src="img/content/product-1.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price"><span class="product__before">350 грн	</span>350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img class="product__badge" src="img/discount-50.svg" alt="-50%"/><img src="img/content/product-2.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price"><span class="product__before">350 грн	</span>350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img class="product__badge" src="img/sold-out.svg" alt="-50%"/><img src="img/content/product-3.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Сообщить о наличии</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-4.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-1.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-2.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-3.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-4.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-1.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-2.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-3.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-4.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-1.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-2.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                        <div class="product"><a class="product__preview" href="/product.html"><img src="img/content/product-3.jpg" alt="Preview"/></a><a class="product__title" href="/product.html">Название товара</a>
                            <div class="product__details">100г.</div>
                            <div class="product__price">350 грн
                            </div><a class="product__btn btn" href="#">
                                <svg class="icon icon-branch">
                                    <use xlink:href="#icon-branch"></use>
                                </svg>Купить</a>
                        </div>
                    </div>
                    <!-- pager-->
                    <div class="pager"><a class="pager__prev" href="#">
                            <svg class="icon icon-arrow">
                                <use xlink:href="#icon-arrow"></use>
                            </svg></a>
                        <div class="pager__list"><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><a href="#">9</a></div><a class="pager__next" href="#">
                            <svg class="icon icon-arrow">
                                <use xlink:href="#icon-arrow"></use>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
