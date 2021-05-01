<div class="content__row reverse">
    <div class="content__col">
        <h3>{{$block->t('title')}}</h3>
        {!! $block->t('description') !!}
    </div>
    <div class="content__col">

        <div class="content__figure">
            {!! $block->getImg("480", "380"); !!}
        </div>
    </div>
</div>
