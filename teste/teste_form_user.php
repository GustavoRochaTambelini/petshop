<!DOCTYPE html>
<html lang="en"
	class=" svg localstorage sessionstorage websqldatabase svgfilters bgpositionshorthand multiplebgs preserve3d inlinesvg csscalc supports svgclippaths svgforeignobject smil no-touchevents fontface svgasimg no-forcetouch matchmedia cssanimations bgpositionxy bgrepeatround bgrepeatspace bgsizecover borderradius no-flexboxtweener csstransforms csstransforms3d csstransitions">

<head>
	<META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
	 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
        <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/viewerjs/viewer.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/viewerjs/viewer.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("teste_sajax_js.php");
?>
<script type="text/javascript">
var Nm_Proc_Atualiz = false;
</script>
<script type="text/javascript">
<?php

include_once('teste_jquery.php');

?>
</script>
<script type="text/javascript">
 $(function() {
  scJQElementsAdd('');
  scJQGeneralAdd();
 });

</script>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("teste_js0.php");
?>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->sc_page; ?>";
</script>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['teste']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['teste']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
$sIconTitle = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
$sErrorIcon = (isset($_SESSION['scriptcase']['error_icon']['app_Login']) && '' != $_SESSION['scriptcase']['error_icon']['app_Login']) ? $_SESSION['scriptcase']['error_icon']['app_Login']  : "";
$sCloseIcon = (isset($_SESSION['scriptcase']['error_close']['app_Login']) && '' != trim($_SESSION['scriptcase']['error_close']['app_Login'])) ? $_SESSION['scriptcase']['error_close']['app_Login'] : "<td><input class=\"scButton_default\" type=\"button\" onClick=\"document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false\" value=\"X\" /></td>";
if ('' != $sIconTitle && '' != $sErrorIcon) {
    $sErrorIcon = '';
}
?>
<script type="text/javascript">
$(function() {
    $(document.F1).on("submit", function (e) {
        e.preventDefault();
    });
});

if (typeof scDisplayUserError === "undefined") {
    function scDisplayUserError(errorMessage) {
        scJs_alert("ERROR:\r\n" + errorMessage.replace(/<br \/>/gi, "<!--SC_NL-->"), function() {}, {type: "error"});
    }
}
if (typeof scDisplayUserDebug === "undefined") {
    function scDisplayUserDebug(debugMessage) {
        scJs_alert("DEBUG:\r\n" + debugMessage.replace(/<br \/>/gi, "<!--SC_NL-->"), function() {}, {type: "warning"});
    }
}
if (typeof scDisplayUserMessage === "undefined") {
    function scDisplayUserMessage(userMessage) {
        scJs_alert("MESSAGE:\r\n" + userMessage.replace(/<br \/>/gi, "<!--SC_NL-->"), function() {}, {type: "info"});
    }
}
</script>

<script>
$(function() {
<?php
if (isset($this->nmgp_cmp_hidden) && !empty($this->nmgp_cmp_hidden)) {
    foreach($this->nmgp_cmp_hidden as $fieldDisplayFieldName => $fieldDisplayFieldStatus) {
        if ('on' == $fieldDisplayFieldStatus) {
?>
if (typeof scShowUserField === "function") {
    scShowUserField("<?php echo $fieldDisplayFieldName ?>");
}
<?php
        }
        if ('off' == $fieldDisplayFieldStatus) {
?>
if (typeof scHideUserField === "function") {
    scHideUserField("<?php echo $fieldDisplayFieldName ?>");
}
<?php
        }
    }
}
?>
<?php
?>
});
</script>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?php echo "" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . ""; ?>
	</title>

	<link href="../_lib/libraries/grp/quantum/assets/css" rel="stylesheet">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/bootstrap.css">
	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/metisMenu.css">
	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/index.css">
	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/jquery.mCustomScrollbar.css">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/line-awesome.min.css">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/dripicons.min.css">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/material-design-iconic-font.min.css">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/main.bundle.css">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/main.css">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/default.css">

	<link rel="stylesheet" href="../_lib/libraries/grp/quantum/assets/theme-a.css">

	<link rel="stylesheet" type="text/css" href="teste.css" />
	<script type="text/javascript" src="teste.js"></script>
</head>

<body class="  pace-done">
	<div class="pace  pace-inactive">
		<div class="pace-progress" data-progress-text="100%" data-progress="99"
			style="transform: translate3d(100%, 0px, 0px);">
			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>
	<div class="container">
		<form class="sign-in-form"  name="F1" method="post" 
               action="./" 
               target="_self">
			<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nmgp_url_saida); ?>">
<input type="hidden" name="bok" value="OK">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />

			<div class="card">
				<div class="card-body">
					<a href="#"
						class="brand text-center d-block m-b-20">
						<img src="../_lib/libraries/grp/quantum/assets/logo_petshop.png" alt="K9 Logo">
					</a>
					<h5 class="sign-in-heading text-center m-b-20">Acesso do usuário</h5>
					<div class="form-group">
						<label for="Login" class="sr-only">
							<?php
if (!isset($this->nm_new_label['login'])) {
    $this->nm_new_label['login'] = "Login";
}
?>
<span id="id_label_login"><?php echo $this->nm_new_label['login']; ?></span>
						</label>
						<input type="text" class="form-control  sc-js-input " placeholder="Usuário"
							 name="login" id="id_sc_field_login" value="<?php echo $this->form_encode_input($login) ?>"  alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"  required="">
						<kpm-button style="position: relative !important; z-index: 3 !important;"
							class="_1mUok1yqu_fHkbNOXVoU6l kpm_input-field-button kpm_gray-key-icon">
							<div class="_12GLdmNfqjBzgAQBymfRrk"
								style="position: absolute !important; width: 20px !important; height: 24px !important; top: -29.5px !important; left: 324px !important;">
								<svg class="_1jZ1QRhwRIXZDO2Rgp_qon" viewBox="25 25 50 50"
									xmlnsXlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
									style="inset: 0px -2px !important;"></svg></div><svg width="12" height="24"
								viewBox="0 0 8 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
								xmlnsXlink="http://www.w3.org/1999/xlink"
								class="_2WQbmZpFI_2_k72D9o87Hq kpm_reset _2p2h7gYS-bpObPoQxR7lvo"
								style="position: absolute !important; width: 12px !important; height: 24px !important; top: -29.5px !important; left: 324px !important;"></svg>
						</kpm-button>
					</div>

					<div class="form-group">
						<label for="pswd" class="sr-only">Senha</label>
                         <!--SC_FIELD_INI_pswd-->
						<input type="password" class="form-control  sc-js-input " placeholder="Senha"
							 name="pswd" id="id_sc_field_pswd" value="<?php echo $this->form_encode_input($pswd) ?>"  alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}"  required="">
                         <!--SC_FIELD_END_pswd--> 
						<kpm-button style="position: relative !important; z-index: 3 !important;"
							class="_1mUok1yqu_fHkbNOXVoU6l kpm_input-field-button kpm_gray-key-icon">
							<div class="_12GLdmNfqjBzgAQBymfRrk"
								style="position: absolute !important; width: 20px !important; height: 24px !important; top: -29.5px !important; left: 324px !important;">
								<svg class="_1jZ1QRhwRIXZDO2Rgp_qon" viewBox="25 25 50 50"
									xmlnsXlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
									style="inset: 0px -2px !important;"></svg></div><svg width="12" height="24"
								viewBox="0 0 8 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
								xmlnsXlink="http://www.w3.org/1999/xlink"
								class="_2WQbmZpFI_2_k72D9o87Hq kpm_reset _2p2h7gYS-bpObPoQxR7lvo"
								style="position: absolute !important; width: 12px !important; height: 24px !important; top: -29.5px !important; left: 324px !important;"></svg>
						</kpm-button>
					</div>
					<div class="checkbox m-b-10 m-t-20">
						<div class="custom-control custom-checkbox checkbox-primary form-check">
							<input type="checkbox" class="custom-control-input" id="stateCheck1" checked="">
							<label class="custom-control-label" for="stateCheck1">{SC_FIELD_INFO_remember_me}</label>
						</div>
						<a href="#" class="float-right">{SC_FIELD_INFO_retrieve_pswd}</a>
					</div>
					<input type="button"  onclick="nm_atualiza('alterar');" 
						class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" value="Acessar" />
					<p class="text-muted m-t-25 m-b-0 p-0">Não possui conta?<a href="#"> {SC_FIELD_INFO_new_user}</a></p>
				</div>

			</div>
		</form>
	</div>


	<script src="../_lib/libraries/grp/quantum/assets/modernizr.custom.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/jquery.min.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/bootstrap.bundle.min.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/js.storage.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/js.cookie.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/pace.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/metisMenu.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/index.js.baixados"></script>
	<script src="../_lib/libraries/grp/quantum/assets/jquery.mCustomScrollbar.concat.min.js.baixados"></script>

	<script src="../_lib/libraries/grp/quantum/assets/app.js.baixados"></script>




</body>

</html>