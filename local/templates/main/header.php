<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
<head>
<? require $_SERVER['DOCUMENT_ROOT']."/inc/tmpl/head.php"; ?>
</head>
<body>
<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>
<? require $_SERVER['DOCUMENT_ROOT']."/inc/tmpl/header.php"; ?>
<div class="container">
	<? $APPLICATION->IncludeComponent('bitrix:breadcrumb', '', array())?>
	<? $APPLICATION->AddBufferContent('ShowCustomTitle'); ?>
    <? if($APPLICATION->GetFileRecursive('.left.menu.php')){
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "left",
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "ROOT_MENU_TYPE" => "left",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ),
            false
        );
    }?>