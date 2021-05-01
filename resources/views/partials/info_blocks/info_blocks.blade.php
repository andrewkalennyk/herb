@if($blocks->count())
    @foreach($blocks as $block)
        @include('partials.info_blocks.'.$block->template)
    @endforeach
@endif
