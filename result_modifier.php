<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?
$arResult['SECTIONS'] = array();
$arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter);
while($ar_result = $db_list->GetNext())
{
    $arResult['SECTIONS'][] = array('ID' => $ar_result['ID'], "NAME" => $ar_result['NAME']);
}
?>