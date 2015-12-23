<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$arResult = array_reverse($arResult);
$title = '';
$arTitle = [];
foreach ($arResult as $v) {
	$arTitle[] = $v['TITLE'];
}
$title = implode(" | ", $arTitle); return $title;