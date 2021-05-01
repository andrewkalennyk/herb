@if($menu->count())
    <nav class="header__nav">
        @foreach($menu as $item)
            <a href="{{$item->getUrl()}}">{{$item->t('title')}}</a>
        @endforeach
    </nav>
@endif
