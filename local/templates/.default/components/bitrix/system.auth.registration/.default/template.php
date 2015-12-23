<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>




<?if($USER->IsAuthorized()):?>
	<div class="alert alert-success" role="alert">
		<?echo GetMessage("MAIN_REGISTER_AUTH")?>
	</div>
<?else:?>



	<?if (count($arResult["ERRORS"]) > 0):
		foreach ($arResult["ERRORS"] as $key => $error)
			if (intval($key) == 0 && $key !== 0)
				$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);
		?>
		<div class="alert alert-danger" role="alert">
			<?=ShowError(implode("<br />", $arResult["ERRORS"]))?>
		</div>
	<?elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
		<div class="alert alert-success" role="alert">
			<?=GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?>
		</div>
	<?endif?>



	<form class="form-horizontal" role="form" method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">

		<?if($arResult["BACKURL"] <> ''):?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<?endif;?>
		<div class="form-group">
			<label class="col-sm-2 control-label">Логин (имя пользователя)</label>
			<div class="col-sm-3">
				<input class="form-control" type="text" name="REGISTER[LOGIN]" value="" >
				<p class="f-light f-XS">Логин должен быть не менее 3-х символов длиной</p>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Пароль</label>
			<div class="col-sm-3">
				<input class="form-control" type="password" name="REGISTER[PASSWORD]" value="" autocomplete="off" >
				<p class="f-light f-XS">Пароль должен быть не менее 6-ти символов длиной</p>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Подтверждение пароля</label>
			<div class="col-sm-3">
				<input class="form-control" type="password" name="REGISTER[CONFIRM_PASSWORD]" value="" autocomplete="off" >
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">Электронная почта</label>
			<div class="col-sm-3">
				<input class="form-control" type="text" name="REGISTER[EMAIL]" value="" autocomplete="off" >
			</div>
		</div>

		<?if($arResult["USE_CAPTCHA"] == "Y"):?>
			<tr>
				<td colspan="2"><b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
				</td>
			</tr>
			<tr>
				<td><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></td>
				<td><input type="text" name="captcha_word" maxlength="50" value="" /></td>
			</tr>
		<?endif?>



		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input class="btn btn-default" type="submit" name="register_submit_button" value="Регистрация" />
			</div>
		</div>
	</form>
<?endif?>