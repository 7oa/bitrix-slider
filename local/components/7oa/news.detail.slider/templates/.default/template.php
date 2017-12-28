<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arParams['DATA']['VALUE'])):?>
<div class="slider">
    <div class="owl-carousel">
        <? foreach ($arParams['DATA']['VALUE'] as $k => $imgID):?>
            <div>
                <img src="<?=CFile::GetPath($imgID)?>" alt="<?=$arParams['DATA']['DESCRIPTION'][$k]?>">
                <span> <?=$arParams['DATA']['DESCRIPTION'][$k]?></span>
            </div>
        <?endforeach;?>
    </div>
    <span class="slider-progress"></span>
</div>
<?endif;?>