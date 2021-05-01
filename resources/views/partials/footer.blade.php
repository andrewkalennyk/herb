<!-- footer-->
<footer class="footer">
    <div class="footer__center center">
        <a class="footer__logo" href="{{geturl('/')}}">
            <img src="/img/herbarius.svg" alt="Herbarius">
        </a>
        @include('partials.menu_footer')

        <div class="footer__socials">
            <a href="{{setting('youtube')}}"><img src="/img/youtube.svg" alt="Youtube"></a>
            <a href="{{setting('facebook')}}"><img src="/img/facebook.svg" alt="Facebook"></a>
            <a href="{{setting('instagram')}}"><img src="/img/instagram.svg" alt="Instagram"></a>
        </div>
        <div class="footer__copyright">All rights reserved {{date('Y')}}</div>
    </div>
</footer>
