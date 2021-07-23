@if($categories->count())
    <div class="catalog__sidebar">
        <div class="catalog__categories">
            @foreach($categories as $category)
                <a class="active" href="{{$category->getUrl()}}">{{$category->t('title')}}</a>
                @if($category->subCategories->count())
                    <div class="catalog__sub">
                        @foreach($category->subCategories as $subCategory)
                        <a {{--class="active"--}} href="{{$subCategory->getUrl()}}">{{$subCategory->t('title')}}</a>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endif
