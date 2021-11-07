<!-- popup-->
<div class="popup popup_tac" id="popup-success" style="display: none">
    <div class="popup__body">
        <div class="popup__title title">{{__t('Заказ успешно оформлен!')}}</div>
        <div class="popup__content">
            <p>{{__t('Мы свяжемся с вами для уточнения деталей заказа')}}</p>
            <p>{{__t('Номер вашего заказа')}}: <strong class="order_nmbr">№</strong></p>
        </div>
        <div class="popup__foot">
            <a class="btn btn_black" href="{{geturl('/')}}">{{__t('На главную')}}</a>
        </div>
    </div>
</div>

<a class="btn btn_black popup_success_btn"
   style="display: none"
   data-fancybox=""
   data-src="#popup-success"
   data-touch="false"
   href="javascript:void(0);">
</a>
