<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
$siteAddr = $_SERVER['HTTPS'] === "on" ? 'https://' : 'http://';
$siteAddr .= $_SERVER['SERVER_NAME'];
?>
<yml_catalog date="<?=date(DATE_RFC3339);?>">
	<shop>
		<name><?=$arParams['NAME']?></name> <?//название магазина?>
		<company><?=$arParams['COMPANY']?></company> <?//название компании?>
		<url><?=$siteAddr;?></url>
		<?if ($arParams['CURRENCY_ID']):?>
		<currencies>
			<currency id="<?=$arParams['CURRENCY_ID']?>" rate="1"/>
		</currencies>
		<?endif;?>
		<categories>
		<?foreach($arResult["SECTIONS"] as $arSection):?>
			<category id="<?=$arSection['ID']?>"><?=$arSection['NAME']?></category>
		<?endforeach;?>
		</categories>
		<?/*
		<delivery-options>
			<option cost="200" days="1"/>
		</delivery-options>
		*/?>

		<offers>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>

			<offer id="<?=$arItem["ID"]?>"> <?//availble?>
				<url><?=$siteAddr.$arItem["DETAIL_PAGE_URL"]?></url>
				<name><?=$arItem["NAME"]?></name>
				<?if ($arParams['PRICE'] && $arItem["PROPERTIES"][$arParams['PRICE']]["VALUE"]):?>
				<price><?=$arItem["PROPERTIES"][$arParams['PRICE']]["VALUE"]?></price>
				<?endif;?>
				<?if ($arParams['OLD_PRICE'] && $arItem["PROPERTIES"][$arParams['OLD_PRICE']]["VALUE"]):?>
				<oldprice><?=$arItem["PROPERTIES"][$arParams['OLD_PRICE']]["VALUE"]?></oldprice>
				<?endif;?>
				<?if ($arParams['CURRENCY_ID']):?>
				<currencyId><?=$arParams['CURRENCY_ID']?></currencyId>
				<?endif;?>
				<categoryId><?=$arItem["IBLOCK_SECTION_ID"]?></categoryId>
				<?if ($arItem["DETAIL_PICTURE"]["SRC"]):?>
				<picture><?=$siteAddr.$arItem["DETAIL_PICTURE"]["SRC"]?></picture>
				<?endif;?>
				<?if ($arItem["PREVIEW_PICTURE"]["SRC"]):?>
				<picture><?=$siteAddr.$arItem["PREVIEW_PICTURE"]["SRC"]?></picture>
				<?endif;?>
				<?if ($arParams['STORE'] && $arItem["PROPERTIES"][$arParams["STORE"]]["VALUE"]):?>
				<store><?=$arItem["PROPERTIES"][$arParams["STORE"]]["VALUE"]?></store>
				<?endif;?>
				<?if ($arParams['PICKUP'] && $arItem["PROPERTIES"][$arParams["PICKUP"]]["VALUE"]):?>
				<pickup><?=$arItem["PROPERTIES"][$arParams["PICKUP"]]["VALUE"]?></pickup>
				<?endif;?>
				<?if ($arParams['DELIVERY'] && $arItem["PROPERTIES"][$arParams["DELIVERY"]]["VALUE"]):?>
				<delivery><?=$arItem["PROPERTIES"][$arParams["DELIVERY"]]["VALUE"]?></delivery>
				<?endif;?>
				<?if ($arParams['VENDOR'] && $arItem["PROPERTIES"][$arParams["VENDOR"]]["VALUE"]):?>
				<vendor><?=$arItem["PROPERTIES"][$arParams["VENDOR"]]["VALUE"]?></vendor>
				<?endif;?>
				<?if ($arParams['VENDOR_CODE'] && $arItem["PROPERTIES"][$arParams["VENDOR_CODE"]]["VALUE"]):?>
				<vendorCode><?=$arItem["PROPERTIES"][$arParams["VENDOR_CODE"]]["VALUE"]?></vendorCode>
				<?endif;?>
				<?if ($arParams['DESCRIPTION'] && $arItem["PROPERTIES"][$arParams["DESCRIPTION"]]["VALUE"]):?>
				<description><?=$arItem["PROPERTIES"][$arParams["DESCRIPTION"]]["VALUE"]?></description>
				<?else:?>
				<description><?=$arItem["PROPERTIES"]["META_DESCRIPTION"]["VALUE"]?></description>
				<?endif;?>
				<?if ($arParams['SALES_NOTES'] && $arItem["PROPERTIES"][$arParams["SALES_NOTES"]]["VALUE"]):?>
				<sales_notes><?=$arItem["PROPERTIES"][$arParams["SALES_NOTES"]]["VALUE"]?></sales_notes>
				<?endif;?>
				<?if ($arParams['MANUFACTURER_WARRANTY'] && $arItem["PROPERTIES"][$arParams["MANUFACTURER_WARRANTY"]]["VALUE"]):?>
				<manufacturer_warranty><?=$arItem["PROPERTIES"][$arParams["MANUFACTURER_WARRANTY"]]["VALUE"]?></manufacturer_warranty>
				<?endif;?>
				<?if ($arParams['COUNTRY_OF_ORIGIN'] && $arItem["PROPERTIES"][$arParams["COUNTRY_OF_ORIGIN"]]["VALUE"]):?>
				<country_of_origin><?=$arItem["PROPERTIES"][$arParams["COUNTRY_OF_ORIGIN"]]["VALUE"]?></country_of_origin>
				<?endif;?>
				<?if ($arParams['AGE'] && $arItem["PROPERTIES"][$arParams["AGE"]]["VALUE"]):?>
				<age unit="year"><?=$arItem["PROPERTIES"][$arParams["AGE"]]["VALUE"]?></age>
				<?endif;?>
				<?if ($arParams['DOWNLOADABLE'] && $arItem["PROPERTIES"][$arParams["DOWNLOADABLE"]]["VALUE"]):?>
				<downloadable><?=$arItem["PROPERTIES"][$arParams["DOWNLOADABLE"]]["VALUE"]?></downloadable>
				<?endif;?>

			</offer>
		<?endforeach;?>
		</offers>
	</shop>
</yml_catalog>