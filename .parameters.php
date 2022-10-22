<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array();

$arYmlParams = array(
	"NAME" => Array(
		"NAME" => "Название магазина (name)",
		"TYPE" => "STRING",
	),
	"COMPANY" => Array(
		"NAME" => "Название компании (company)",
		"TYPE" => "STRING",
	),
	"CURRENCY_ID" => Array(
		"NAME" => "Значение currencyId",
		"TYPE" => "STRING",
		"DEFAULT" => "RUB",
	),
	"CURRENCY_ID" => Array(
		"NAME" => "Значение currencyId",
		"TYPE" => "STRING",
		"DEFAULT" => "RUB",
	),
	"PRICE" => Array(
		"NAME" => "Свойство pice",
		"TYPE" => "STRING",
	),
	"OLD_PRICE" => Array(
		"NAME" => "Свойство oldprice",
		"TYPE" => "STRING",
	),
	"AVAILABLE" => Array(
		"NAME" => "Свойство available",
		"TYPE" => "STRING",
	),
	"MODEL" => Array(
		"NAME" => "Свойство model",
		"TYPE" => "STRING",
	),
	"VENDOR" => Array(
		"NAME" => "Свойство vendor",
		"TYPE" => "STRING",
	),
	"VENDOR_CODE" => Array(
		"NAME" => "Свойство vendorCode",
		"TYPE" => "STRING",
	),
	"DESCRIPTION" => Array(
		"NAME" => "Свойство description (если пустое значение, то используется текст из метатега description)",
		"TYPE" => "STRING",
		"DEFAULT" => "META_DESCRIPTION"
	),
	"MARKET_CATEGORY" => Array(
		"NAME" => "Свойство market_category",
		"TYPE" => "STRING",
	),
	"STORE" => Array(
		"NAME" => "Свойство store",
		"TYPE" => "STRING",
	),
	"PICKUP" => Array(
		"NAME" => "Свойство pickup",
		"TYPE" => "STRING",
	),
	"DELIVERY" => Array(
		"NAME" => "Свойство delivery",
		"TYPE" => "STRING",
	),
	"SALES_NOTES" => Array(
		"NAME" => "Свойство sales_notes",
		"TYPE" => "STRING",
	),
	"MANUFACTURER_WARRANTY" => Array(
		"NAME" => "Свойство manufacturer_warranty",
		"TYPE" => "STRING",
	),
	"COUNTRY_OF_ORIGIN" => Array(
		"NAME" => "Свойство country_of_origin",
		"TYPE" => "STRING",
	),
	"ADULT" => Array(
		"NAME" => "Свойство adult",
		"TYPE" => "STRING",
	),
	"AGE" => Array(
		"NAME" => "Свойство age",
		"TYPE" => "STRING",
	),
	"DOWNLOADABLE" => Array(
		"NAME" => "Свойство downloadable",
		"TYPE" => "STRING",
	),
);

$arTemplateParameters = array_merge($arTemplateParameters, $arYmlParams);?>