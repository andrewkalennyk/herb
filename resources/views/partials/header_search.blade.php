<form class="header__search js-header-search" action="{{route('search')}}">
    <input type="search" name="s" id="search_input">

    <div class="header__results" style="display: none" data-not-found="{{__t('Ничего не найдено')}}"></div>
</form>
