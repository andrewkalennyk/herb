<div class="select js-select">
    <div class="select__head js-select-head">
        <span>{{ucfirst(app()->getLocale())}}</span>
        <svg class="icon icon-arrow">
            <use xlink:href="#icon-arrow"></use>
        </svg>
    </div>
    <div class="select__drop js-select-drop">
        @foreach($langs as $slug => $title)
            <a class="select__option" href="{{geturl(request()->fullUrl(), $slug)}}">{{ucfirst($title)}}</a>
        @endforeach
    </div>
</div>
