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