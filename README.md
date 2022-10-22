# bitrix-yml-feed
Для CMS Bitrix.
Формирует yml фид на основе шаблона компонента news.list

В параметрах компонента указываются из каких свойств инфоблока брать данные для фида.

## Как использовать

1. Добавить шаблон компонента
2. Подключить компонент на новую страницу, без использования шаблона сайта (без шапки и подвала). 
Подключить `/bitrix/modules/main/include/prolog_before.php` и  `/bitrix/modules/main/include/epilog_after.php`
3. Вывести на странице `<?xml version="1.0" encoding="UTF-8"?>` и установить тип контента `text/xml`
4. Подключить компонент на страницу, указать свойства каталога в соответсвующие парамерты компонента

Примерный код страницы
```
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
echo '<?xml version="1.0" encoding="UTF-8"?>';
header('Content-type: text/xml');
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"yml_feed", 
	array(
		"COMPONENT_TEMPLATE" => "yml_feed",
		"IBLOCK_TYPE" => "-",
		"IBLOCK_ID" => "14",
		"NEWS_COUNT" => "99999999999",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "PRICE_OLD",
			1 => "PRICE",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"CURRENCY_ID" => "RUB",
		"PRICE" => "PRICE",
		"OLD_PRICE" => "OLD_PRICE",
		"MODEL" => "",
		"VENDOR" => "",
		"VENDOR_CODE" => "",
		"DESCRIPTION" => "",
		"MARKET_CATEGORY" => "",
		"STORE" => "",
		"PICKUP" => "",
		"DELIVERY" => "",
		"SALES_NOTES" => "",
		"MANUFACTURER_WARRANTY" => "",
		"COUNTRY_OF_ORIGIN" => "",
		"ADULT" => "",
		"AGE" => "",
		"DOWNLOADABLE" => "",
		"AVAILABLE" => "",
		"NAME" => "Название магазина",
		"COMPANY" => "ООО Название компании"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>
```