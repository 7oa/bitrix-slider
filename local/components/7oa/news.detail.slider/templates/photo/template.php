<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>
<div class="detail__slider">
    <div class="detail-slider">
        <div class="swiper-wrapper">
            <?foreach ($arParams["DATA"] as $slide):?>
                <div class="swiper-slide">
                    <div class="detail-slider__item">
                        <div class="detail-slider__img" style="background-image:url('<?=$slide["SRC"]?>');"></div>
                        <div class="detail-slider__ttl"><?=$slide["DESCRIPTION"]?></div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
        <?if(count($arParams["DATA"])>1):?>
            <div class="detail-slider__pagination"></div>
            <div class="swiper-button-next detail-slider__next"></div>
            <div class="swiper-button-prev detail-slider__prev"></div>
        <?endif;?>
    </div>
</div>