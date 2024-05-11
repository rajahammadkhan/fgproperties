<style type="text/css">
    .js-cookie-consent{
        position: fixed;
        bottom: 0rem;
        border: solid 1px #D2AC47;
        width: 100%;
        text-align: center;
        z-index: 9999;
        background-color: rgb(237,252,250,1);
        font-size: 20px;
        padding: 10px;
        border-left: none;
        border-right: none;
    }
    .js-cookie-consent-agree{
        background-color: #D2AC47;
        font-size: 15px;
        color: white;
        border-radius: 5px;
        padding: 5px;
    }

@media (max-width: 800px) {
    
    .js-cookie-consent-agree{
        background-color: #D2AC47;
        font-size: 15px;
        color: white;
        border-radius: 5px;
        padding: 5px;
        width: 100%;
    }   
    .js-cookie-consent{
        position: fixed;
        bottom: 0rem;
        border: solid 1px #D2AC47;
        width: 100%;
        text-align: center;
        z-index: 9999;
        background-color: rgb(237,252,250,1);
        font-size: 15px;
        padding: 10px;
        border-left: none;
        border-right: none;
    } 
}

</style>

<div class="js-cookie-consent cookie-consent">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

</div>
