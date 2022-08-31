<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("NOVO REGISTRO DE CONTAS RECEBER"); } else { echo strip_tags("CONTAS RECEBER"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
            <meta name="viewport" content="minimal-ui, width=300, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="apple-touch-icon"   sizes="57x57" href="">
            <link rel="apple-touch-icon"   sizes="60x60" href="">
            <link rel="apple-touch-icon"   sizes="72x72" href="">
            <link rel="apple-touch-icon"   sizes="76x76" href="">
            <link rel="apple-touch-icon" sizes="114x114" href="">
            <link rel="apple-touch-icon" sizes="120x120" href="">
            <link rel="apple-touch-icon" sizes="144x144" href="">
            <link rel="apple-touch-icon" sizes="152x152" href="">
            <link rel="apple-touch-icon" sizes="180x180" href="">
            <link rel="icon" type="image/png" sizes="192x192" href="">
            <link rel="icon" type="image/png"   sizes="32x32" href="">
            <link rel="icon" type="image/png"   sizes="96x96" href="">
            <link rel="icon" type="image/png"   sizes="16x16" href="">
            <meta name="msapplication-TileColor" content="___">
            <meta name="msapplication-TileImage" content="">
            <meta name="theme-color" content="___">
            <meta name="apple-mobile-web-app-status-bar-style" content="___">
            <link rel="shortcut icon" href=""> <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
            <?php
               if ($_SESSION['scriptcase']['display_mobile'] && $_SESSION['scriptcase']['device_mobile']) {
                   $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
                   $sc_app_data   = json_encode([
                       'forceMobile' => $forced_mobile,
                       'appType' => 'form',
                       'improvements' => true,
                       'displayOptionsButton' => false,
                       'displayScrollUp' => true,
                       'scrollUpPosition' => 'R',
                       'toolbarOrientation' => 'H',
                       'mobilePanes' => 'true',
                       'navigationBarButtons' => unserialize('a:3:{i:0;s:2:"NP";i:1;s:2:"FL";i:2;s:2:"RC";}'),
                       'mobileSimpleToolbar' => true,
                       'bottomToolbarFixed' => true
                   ]); ?>
            <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
            <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
            <script type="text/javascript" src="../_lib/lib/js/nm_form_mobile.js"></script>
            <link rel='stylesheet' href='../_lib/lib/css/nm_form_mobile.css' type='text/css'/>
            <script>
                $(document).ready(function(){

                    bootstrapMobile();

                });
            </script>
            <?php } ?> <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
<style type="text/css">
.ui-datepicker { z-index: 6 !important }
</style>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/viewerjs/viewer.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/viewerjs/viewer.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_data_emissao button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_data_vencimento button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_data_pagamento button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_data_insercao button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_data_alteracao button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
 <style type="text/css">
  .scSpin_sc_field_0_obj {
   border: 0 !important;
   margin: 0 20px 0 0 !important;
  }
  .scSpin_sc_field_1_obj {
   border: 0 !important;
   margin: 0 20px 0 0 !important;
  }
 </style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_contas_receber_criar_titulo/form_contas_receber_criar_titulo_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_contas_receber_criar_titulo_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['last'] : 'off'); ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       if ("off" == Nav_binicio_macro_disabled) { $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       if ("off" == Nav_bretorna_macro_disabled) { $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       if ("off" == Nav_bfinal_macro_disabled) { $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       if ("off" == Nav_bavanca_macro_disabled) { $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}

 function reload() {
  location.reload();
 } // reload

 function nm_field_disabled(Fields, Opt) {
  opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     if (F_name == "data_pagamento")
     {
        $('input[name="data_pagamento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="data_pagamento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="data_pagamento"]').removeClass("scFormInputDisabled");
        }
        $('input[id="calendar_data_pagamento"]').prop("disabled", F_opc);
        if (F_opc) {
            $("#id_sc_field_data_pagamento").datepicker("destroy");
        }
        else {
            scJQCalendarAdd("");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_contas_receber_criar_titulo_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $("#hidden_bloco_0,#hidden_bloco_1,#hidden_bloco_2,#hidden_bloco_3,#hidden_bloco_4").each(function() {
   $(this.rows[0]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
  });

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
    "hidden_bloco_0": true,
    "hidden_bloco_1": true,
    "hidden_bloco_2": true,
    "hidden_bloco_3": true,
    "hidden_bloco_4": true
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_contas_receber_criar_titulo']['error_buffer']) && '' != $_SESSION['scriptcase']['form_contas_receber_criar_titulo']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_contas_receber_criar_titulo']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
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
 include_once("form_contas_receber_criar_titulo_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="form_contas_receber_criar_titulo_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_contas_receber_criar_titulo_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_contas_receber_criar_titulo_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
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
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="30%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
$this->displayAppHeader();
?>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R")
{
    if ($opcao_botoes == "novo") {
        $sCondStyle = ($this->nmgp_botoes['Salvar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['salvar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['salvar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['salvar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['salvar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['salvar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "salvar", "scBtnFn_Salvar()", "scBtnFn_Salvar()", "sc_Salvar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idcontas_receber']))
           {
               $this->nmgp_cmp_readonly['idcontas_receber'] = 'on';
           }
?>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf0\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idcontas_receber']))
    {
        $this->nm_new_label['idcontas_receber'] = "ID";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idcontas_receber = $this->idcontas_receber;
   $sStyleHidden_idcontas_receber = '';
   if (isset($this->nmgp_cmp_hidden['idcontas_receber']) && $this->nmgp_cmp_hidden['idcontas_receber'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idcontas_receber']);
       $sStyleHidden_idcontas_receber = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idcontas_receber = 'display: none;';
   $sStyleReadInp_idcontas_receber = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["idcontas_receber"]) &&  $this->nmgp_cmp_readonly["idcontas_receber"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idcontas_receber']);
       $sStyleReadLab_idcontas_receber = '';
       $sStyleReadInp_idcontas_receber = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idcontas_receber']) && $this->nmgp_cmp_hidden['idcontas_receber'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idcontas_receber" value="<?php echo $this->form_encode_input($idcontas_receber) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_idcontas_receber_line" id="hidden_field_data_idcontas_receber" style="<?php echo $sStyleHidden_idcontas_receber; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idcontas_receber_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_idcontas_receber_label" style=""><span id="id_label_idcontas_receber"><?php echo $this->nm_new_label['idcontas_receber']; ?></span></span><br><span id="id_read_on_idcontas_receber" class="css_idcontas_receber_line" style="<?php echo $sStyleReadLab_idcontas_receber; ?>"><?php echo $this->form_format_readonly("idcontas_receber", $this->form_encode_input($this->idcontas_receber)); ?></span><span id="id_read_off_idcontas_receber" class="css_read_off_idcontas_receber" style="<?php echo $sStyleReadInp_idcontas_receber; ?>"><input type="hidden" name="idcontas_receber" value="<?php echo $this->form_encode_input($idcontas_receber) . "\">"?><span id="id_ajax_label_idcontas_receber"><?php echo nl2br($idcontas_receber); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idcontas_receber_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idcontas_receber_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['idcliente']))
   {
       $this->nm_new_label['idcliente'] = "CLIENTE";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idcliente = $this->idcliente;
   $sStyleHidden_idcliente = '';
   if (isset($this->nmgp_cmp_hidden['idcliente']) && $this->nmgp_cmp_hidden['idcliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idcliente']);
       $sStyleHidden_idcliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idcliente = 'display: none;';
   $sStyleReadInp_idcliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idcliente']) && $this->nmgp_cmp_readonly['idcliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idcliente']);
       $sStyleReadLab_idcliente = '';
       $sStyleReadInp_idcliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idcliente']) && $this->nmgp_cmp_hidden['idcliente'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="idcliente" value="<?php echo $this->form_encode_input($this->idcliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_idcliente_line" id="hidden_field_data_idcliente" style="<?php echo $sStyleHidden_idcliente; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idcliente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_idcliente_label" style=""><span id="id_label_idcliente"><?php echo $this->nm_new_label['idcliente']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['php_cmp_required']['idcliente']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['php_cmp_required']['idcliente'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idcliente"]) &&  $this->nmgp_cmp_readonly["idcliente"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente'] = array(); 
    }

   $old_value_idcontas_receber = $this->idcontas_receber;
   $old_value_competencia = $this->competencia;
   $old_value_valor_a_receber = $this->valor_a_receber;
   $old_value_idnota_fiscal = $this->idnota_fiscal;
   $old_value_data_emissao = $this->data_emissao;
   $old_value_data_vencimento = $this->data_vencimento;
   $old_value_sc_field_0 = $this->sc_field_0;
   $old_value_sc_field_1 = $this->sc_field_1;
   $old_value_data_pagamento = $this->data_pagamento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idcontas_receber = $this->idcontas_receber;
   $unformatted_value_competencia = $this->competencia;
   $unformatted_value_valor_a_receber = $this->valor_a_receber;
   $unformatted_value_idnota_fiscal = $this->idnota_fiscal;
   $unformatted_value_data_emissao = $this->data_emissao;
   $unformatted_value_data_vencimento = $this->data_vencimento;
   $unformatted_value_sc_field_0 = $this->sc_field_0;
   $unformatted_value_sc_field_1 = $this->sc_field_1;
   $unformatted_value_data_pagamento = $this->data_pagamento;

   $sc_field_2_val_str = "''";
   if (!empty($this->sc_field_2))
   {
       if (is_array($this->sc_field_2))
       {
           $Tmp_array = $this->sc_field_2;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_2);
       }
       $sc_field_2_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_2_val_str)
          {
             $sc_field_2_val_str .= ", ";
          }
          $sc_field_2_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_3_val_str = "''";
   if (!empty($this->sc_field_3))
   {
       if (is_array($this->sc_field_3))
       {
           $Tmp_array = $this->sc_field_3;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_3);
       }
       $sc_field_3_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_3_val_str)
          {
             $sc_field_3_val_str .= ", ";
          }
          $sc_field_3_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_4_val_str = "''";
   if (!empty($this->sc_field_4))
   {
       if (is_array($this->sc_field_4))
       {
           $Tmp_array = $this->sc_field_4;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_4);
       }
       $sc_field_4_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_4_val_str)
          {
             $sc_field_4_val_str .= ", ";
          }
          $sc_field_4_val_str .= "'$Tmp_val_cmp'";
       }
   }
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
   {
       $nm_comando = "SELECT idcliente, concat(cpf_cnpj, ' - ', nome_fantasia)  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj&' - '&nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }
   else
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }

   $this->idcontas_receber = $old_value_idcontas_receber;
   $this->competencia = $old_value_competencia;
   $this->valor_a_receber = $old_value_valor_a_receber;
   $this->idnota_fiscal = $old_value_idnota_fiscal;
   $this->data_emissao = $old_value_data_emissao;
   $this->data_vencimento = $old_value_data_vencimento;
   $this->sc_field_0 = $old_value_sc_field_0;
   $this->sc_field_1 = $old_value_sc_field_1;
   $this->data_pagamento = $old_value_data_pagamento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $idcliente_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idcliente_1))
          {
              foreach ($this->idcliente_1 as $tmp_idcliente)
              {
                  if (trim($tmp_idcliente) === trim($cadaselect[1])) { $idcliente_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idcliente) === trim($cadaselect[1])) { $idcliente_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="idcliente" value="<?php echo $this->form_encode_input($idcliente) . "\">" . $idcliente_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_idcliente();
   $x = 0 ; 
   $idcliente_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idcliente_1))
          {
              foreach ($this->idcliente_1 as $tmp_idcliente)
              {
                  if (trim($tmp_idcliente) === trim($cadaselect[1])) { $idcliente_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idcliente) === trim($cadaselect[1])) { $idcliente_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($idcliente_look))
          {
              $idcliente_look = $this->idcliente;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_idcliente\" class=\"css_idcliente_line\" style=\"" .  $sStyleReadLab_idcliente . "\">" . $this->form_format_readonly("idcliente", $this->form_encode_input($idcliente_look)) . "</span><span id=\"id_read_off_idcliente\" class=\"css_read_off_idcliente" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_idcliente . "\">";
   echo " <span id=\"idAjaxSelect_idcliente\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_idcliente_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_idcliente\" name=\"idcliente\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idcliente'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;"," ") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->idcliente) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->idcliente)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idcliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idcliente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['competencia']))
    {
        $this->nm_new_label['competencia'] = "COMPETÊNCIA";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $competencia = $this->competencia;
   $sStyleHidden_competencia = '';
   if (isset($this->nmgp_cmp_hidden['competencia']) && $this->nmgp_cmp_hidden['competencia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['competencia']);
       $sStyleHidden_competencia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_competencia = 'display: none;';
   $sStyleReadInp_competencia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['competencia']) && $this->nmgp_cmp_readonly['competencia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['competencia']);
       $sStyleReadLab_competencia = '';
       $sStyleReadInp_competencia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['competencia']) && $this->nmgp_cmp_hidden['competencia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="competencia" value="<?php echo $this->form_encode_input($competencia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_competencia_line" id="hidden_field_data_competencia" style="<?php echo $sStyleHidden_competencia; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_competencia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_competencia_label" style=""><span id="id_label_competencia"><?php echo $this->nm_new_label['competencia']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['php_cmp_required']['competencia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['php_cmp_required']['competencia'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["competencia"]) &&  $this->nmgp_cmp_readonly["competencia"] == "on") { 

 ?>
<input type="hidden" name="competencia" value="<?php echo $this->form_encode_input($competencia) . "\">" . $competencia . ""; ?>
<?php } else { ?>
<span id="id_read_on_competencia" class="sc-ui-readonly-competencia css_competencia_line" style="<?php echo $sStyleReadLab_competencia; ?>"><?php echo $this->form_format_readonly("competencia", $this->form_encode_input($this->competencia)); ?></span><span id="id_read_off_competencia" class="css_read_off_competencia<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_competencia; ?>">
 <input class="sc-js-input scFormObjectOdd css_competencia_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_competencia" type=text name="competencia" value="<?php echo $this->form_encode_input($competencia) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=7"; } ?> maxlength=14 alt="{datatype: 'mask', maxLength: 7, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', maskList: '99/9999', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_competencia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_competencia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valor_a_receber']))
    {
        $this->nm_new_label['valor_a_receber'] = "VALOR A RECEBER";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor_a_receber = $this->valor_a_receber;
   $sStyleHidden_valor_a_receber = '';
   if (isset($this->nmgp_cmp_hidden['valor_a_receber']) && $this->nmgp_cmp_hidden['valor_a_receber'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor_a_receber']);
       $sStyleHidden_valor_a_receber = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor_a_receber = 'display: none;';
   $sStyleReadInp_valor_a_receber = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valor_a_receber']) && $this->nmgp_cmp_readonly['valor_a_receber'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor_a_receber']);
       $sStyleReadLab_valor_a_receber = '';
       $sStyleReadInp_valor_a_receber = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor_a_receber']) && $this->nmgp_cmp_hidden['valor_a_receber'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_a_receber" value="<?php echo $this->form_encode_input($valor_a_receber) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_valor_a_receber_line" id="hidden_field_data_valor_a_receber" style="<?php echo $sStyleHidden_valor_a_receber; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_a_receber_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_valor_a_receber_label" style=""><span id="id_label_valor_a_receber"><?php echo $this->nm_new_label['valor_a_receber']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['php_cmp_required']['valor_a_receber']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['php_cmp_required']['valor_a_receber'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor_a_receber"]) &&  $this->nmgp_cmp_readonly["valor_a_receber"] == "on") { 

 ?>
<input type="hidden" name="valor_a_receber" value="<?php echo $this->form_encode_input($valor_a_receber) . "\">" . $valor_a_receber . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor_a_receber" class="sc-ui-readonly-valor_a_receber css_valor_a_receber_line" style="<?php echo $sStyleReadLab_valor_a_receber; ?>"><?php echo $this->form_format_readonly("valor_a_receber", $this->form_encode_input($this->valor_a_receber)); ?></span><span id="id_read_off_valor_a_receber" class="css_read_off_valor_a_receber<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_valor_a_receber; ?>">
 <input class="sc-js-input scFormObjectOdd css_valor_a_receber_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_valor_a_receber" type=text name="valor_a_receber" value="<?php echo $this->form_encode_input($valor_a_receber) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'currency', currencySymbol: '<?php echo $this->field_config['valor_a_receber']['symbol_mon']; ?>', currencyPosition: '<?php echo ((1 == $this->field_config['valor_a_receber']['format_pos'] || 3 == $this->field_config['valor_a_receber']['format_pos']) ? 'left' : 'right'); ?>', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_a_receber']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_a_receber']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor_a_receber']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor_a_receber']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_a_receber_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_a_receber_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_valor_a_receber_dumb = ('' == $sStyleHidden_valor_a_receber) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_valor_a_receber_dumb" style="<?php echo $sStyleHidden_valor_a_receber_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf1\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['idforma_pagamento_prevista']))
   {
       $this->nm_new_label['idforma_pagamento_prevista'] = "FORMA DE PAGAMENTO";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idforma_pagamento_prevista = $this->idforma_pagamento_prevista;
   $sStyleHidden_idforma_pagamento_prevista = '';
   if (isset($this->nmgp_cmp_hidden['idforma_pagamento_prevista']) && $this->nmgp_cmp_hidden['idforma_pagamento_prevista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idforma_pagamento_prevista']);
       $sStyleHidden_idforma_pagamento_prevista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idforma_pagamento_prevista = 'display: none;';
   $sStyleReadInp_idforma_pagamento_prevista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idforma_pagamento_prevista']) && $this->nmgp_cmp_readonly['idforma_pagamento_prevista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idforma_pagamento_prevista']);
       $sStyleReadLab_idforma_pagamento_prevista = '';
       $sStyleReadInp_idforma_pagamento_prevista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idforma_pagamento_prevista']) && $this->nmgp_cmp_hidden['idforma_pagamento_prevista'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="idforma_pagamento_prevista" value="<?php echo $this->form_encode_input($this->idforma_pagamento_prevista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_idforma_pagamento_prevista_line" id="hidden_field_data_idforma_pagamento_prevista" style="<?php echo $sStyleHidden_idforma_pagamento_prevista; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idforma_pagamento_prevista_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_idforma_pagamento_prevista_label" style=""><span id="id_label_idforma_pagamento_prevista"><?php echo $this->nm_new_label['idforma_pagamento_prevista']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idforma_pagamento_prevista"]) &&  $this->nmgp_cmp_readonly["idforma_pagamento_prevista"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista'] = array(); 
    }

   $old_value_idcontas_receber = $this->idcontas_receber;
   $old_value_competencia = $this->competencia;
   $old_value_valor_a_receber = $this->valor_a_receber;
   $old_value_idnota_fiscal = $this->idnota_fiscal;
   $old_value_data_emissao = $this->data_emissao;
   $old_value_data_vencimento = $this->data_vencimento;
   $old_value_sc_field_0 = $this->sc_field_0;
   $old_value_sc_field_1 = $this->sc_field_1;
   $old_value_data_pagamento = $this->data_pagamento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idcontas_receber = $this->idcontas_receber;
   $unformatted_value_competencia = $this->competencia;
   $unformatted_value_valor_a_receber = $this->valor_a_receber;
   $unformatted_value_idnota_fiscal = $this->idnota_fiscal;
   $unformatted_value_data_emissao = $this->data_emissao;
   $unformatted_value_data_vencimento = $this->data_vencimento;
   $unformatted_value_sc_field_0 = $this->sc_field_0;
   $unformatted_value_sc_field_1 = $this->sc_field_1;
   $unformatted_value_data_pagamento = $this->data_pagamento;

   $sc_field_2_val_str = "''";
   if (!empty($this->sc_field_2))
   {
       if (is_array($this->sc_field_2))
       {
           $Tmp_array = $this->sc_field_2;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_2);
       }
       $sc_field_2_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_2_val_str)
          {
             $sc_field_2_val_str .= ", ";
          }
          $sc_field_2_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_3_val_str = "''";
   if (!empty($this->sc_field_3))
   {
       if (is_array($this->sc_field_3))
       {
           $Tmp_array = $this->sc_field_3;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_3);
       }
       $sc_field_3_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_3_val_str)
          {
             $sc_field_3_val_str .= ", ";
          }
          $sc_field_3_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_4_val_str = "''";
   if (!empty($this->sc_field_4))
   {
       if (is_array($this->sc_field_4))
       {
           $Tmp_array = $this->sc_field_4;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_4);
       }
       $sc_field_4_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_4_val_str)
          {
             $sc_field_4_val_str .= ", ";
          }
          $sc_field_4_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT idforma_pagamento, descricao  FROM forma_pagamento  ORDER BY descricao";

   $this->idcontas_receber = $old_value_idcontas_receber;
   $this->competencia = $old_value_competencia;
   $this->valor_a_receber = $old_value_valor_a_receber;
   $this->idnota_fiscal = $old_value_idnota_fiscal;
   $this->data_emissao = $old_value_data_emissao;
   $this->data_vencimento = $old_value_data_vencimento;
   $this->sc_field_0 = $old_value_sc_field_0;
   $this->sc_field_1 = $old_value_sc_field_1;
   $this->data_pagamento = $old_value_data_pagamento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idforma_pagamento_prevista'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $idforma_pagamento_prevista_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idforma_pagamento_prevista_1))
          {
              foreach ($this->idforma_pagamento_prevista_1 as $tmp_idforma_pagamento_prevista)
              {
                  if (trim($tmp_idforma_pagamento_prevista) === trim($cadaselect[1])) { $idforma_pagamento_prevista_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idforma_pagamento_prevista) === trim($cadaselect[1])) { $idforma_pagamento_prevista_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="idforma_pagamento_prevista" value="<?php echo $this->form_encode_input($idforma_pagamento_prevista) . "\">" . $idforma_pagamento_prevista_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_idforma_pagamento_prevista();
   $x = 0 ; 
   $idforma_pagamento_prevista_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idforma_pagamento_prevista_1))
          {
              foreach ($this->idforma_pagamento_prevista_1 as $tmp_idforma_pagamento_prevista)
              {
                  if (trim($tmp_idforma_pagamento_prevista) === trim($cadaselect[1])) { $idforma_pagamento_prevista_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idforma_pagamento_prevista) === trim($cadaselect[1])) { $idforma_pagamento_prevista_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($idforma_pagamento_prevista_look))
          {
              $idforma_pagamento_prevista_look = $this->idforma_pagamento_prevista;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_idforma_pagamento_prevista\" class=\"css_idforma_pagamento_prevista_line\" style=\"" .  $sStyleReadLab_idforma_pagamento_prevista . "\">" . $this->form_format_readonly("idforma_pagamento_prevista", $this->form_encode_input($idforma_pagamento_prevista_look)) . "</span><span id=\"id_read_off_idforma_pagamento_prevista\" class=\"css_read_off_idforma_pagamento_prevista" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_idforma_pagamento_prevista . "\">";
   echo " <span id=\"idAjaxSelect_idforma_pagamento_prevista\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_idforma_pagamento_prevista_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_idforma_pagamento_prevista\" name=\"idforma_pagamento_prevista\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->idforma_pagamento_prevista) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->idforma_pagamento_prevista)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idforma_pagamento_prevista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idforma_pagamento_prevista_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['idtipos_receitas']))
   {
       $this->nm_new_label['idtipos_receitas'] = "TIPO DE RECEITAS";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idtipos_receitas = $this->idtipos_receitas;
   $sStyleHidden_idtipos_receitas = '';
   if (isset($this->nmgp_cmp_hidden['idtipos_receitas']) && $this->nmgp_cmp_hidden['idtipos_receitas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idtipos_receitas']);
       $sStyleHidden_idtipos_receitas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idtipos_receitas = 'display: none;';
   $sStyleReadInp_idtipos_receitas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idtipos_receitas']) && $this->nmgp_cmp_readonly['idtipos_receitas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idtipos_receitas']);
       $sStyleReadLab_idtipos_receitas = '';
       $sStyleReadInp_idtipos_receitas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idtipos_receitas']) && $this->nmgp_cmp_hidden['idtipos_receitas'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="idtipos_receitas" value="<?php echo $this->form_encode_input($this->idtipos_receitas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_idtipos_receitas_line" id="hidden_field_data_idtipos_receitas" style="<?php echo $sStyleHidden_idtipos_receitas; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idtipos_receitas_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_idtipos_receitas_label" style=""><span id="id_label_idtipos_receitas"><?php echo $this->nm_new_label['idtipos_receitas']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idtipos_receitas"]) &&  $this->nmgp_cmp_readonly["idtipos_receitas"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas'] = array(); 
    }

   $old_value_idcontas_receber = $this->idcontas_receber;
   $old_value_competencia = $this->competencia;
   $old_value_valor_a_receber = $this->valor_a_receber;
   $old_value_idnota_fiscal = $this->idnota_fiscal;
   $old_value_data_emissao = $this->data_emissao;
   $old_value_data_vencimento = $this->data_vencimento;
   $old_value_sc_field_0 = $this->sc_field_0;
   $old_value_sc_field_1 = $this->sc_field_1;
   $old_value_data_pagamento = $this->data_pagamento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idcontas_receber = $this->idcontas_receber;
   $unformatted_value_competencia = $this->competencia;
   $unformatted_value_valor_a_receber = $this->valor_a_receber;
   $unformatted_value_idnota_fiscal = $this->idnota_fiscal;
   $unformatted_value_data_emissao = $this->data_emissao;
   $unformatted_value_data_vencimento = $this->data_vencimento;
   $unformatted_value_sc_field_0 = $this->sc_field_0;
   $unformatted_value_sc_field_1 = $this->sc_field_1;
   $unformatted_value_data_pagamento = $this->data_pagamento;

   $sc_field_2_val_str = "''";
   if (!empty($this->sc_field_2))
   {
       if (is_array($this->sc_field_2))
       {
           $Tmp_array = $this->sc_field_2;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_2);
       }
       $sc_field_2_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_2_val_str)
          {
             $sc_field_2_val_str .= ", ";
          }
          $sc_field_2_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_3_val_str = "''";
   if (!empty($this->sc_field_3))
   {
       if (is_array($this->sc_field_3))
       {
           $Tmp_array = $this->sc_field_3;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_3);
       }
       $sc_field_3_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_3_val_str)
          {
             $sc_field_3_val_str .= ", ";
          }
          $sc_field_3_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_4_val_str = "''";
   if (!empty($this->sc_field_4))
   {
       if (is_array($this->sc_field_4))
       {
           $Tmp_array = $this->sc_field_4;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_4);
       }
       $sc_field_4_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_4_val_str)
          {
             $sc_field_4_val_str .= ", ";
          }
          $sc_field_4_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT idtipos_receitas, descricao  FROM tipos_receitas ORDER BY descricao";

   $this->idcontas_receber = $old_value_idcontas_receber;
   $this->competencia = $old_value_competencia;
   $this->valor_a_receber = $old_value_valor_a_receber;
   $this->idnota_fiscal = $old_value_idnota_fiscal;
   $this->data_emissao = $old_value_data_emissao;
   $this->data_vencimento = $old_value_data_vencimento;
   $this->sc_field_0 = $old_value_sc_field_0;
   $this->sc_field_1 = $old_value_sc_field_1;
   $this->data_pagamento = $old_value_data_pagamento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_idtipos_receitas'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $idtipos_receitas_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idtipos_receitas_1))
          {
              foreach ($this->idtipos_receitas_1 as $tmp_idtipos_receitas)
              {
                  if (trim($tmp_idtipos_receitas) === trim($cadaselect[1])) { $idtipos_receitas_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idtipos_receitas) === trim($cadaselect[1])) { $idtipos_receitas_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="idtipos_receitas" value="<?php echo $this->form_encode_input($idtipos_receitas) . "\">" . $idtipos_receitas_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_idtipos_receitas();
   $x = 0 ; 
   $idtipos_receitas_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idtipos_receitas_1))
          {
              foreach ($this->idtipos_receitas_1 as $tmp_idtipos_receitas)
              {
                  if (trim($tmp_idtipos_receitas) === trim($cadaselect[1])) { $idtipos_receitas_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idtipos_receitas) === trim($cadaselect[1])) { $idtipos_receitas_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($idtipos_receitas_look))
          {
              $idtipos_receitas_look = $this->idtipos_receitas;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_idtipos_receitas\" class=\"css_idtipos_receitas_line\" style=\"" .  $sStyleReadLab_idtipos_receitas . "\">" . $this->form_format_readonly("idtipos_receitas", $this->form_encode_input($idtipos_receitas_look)) . "</span><span id=\"id_read_off_idtipos_receitas\" class=\"css_read_off_idtipos_receitas" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_idtipos_receitas . "\">";
   echo " <span id=\"idAjaxSelect_idtipos_receitas\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_idtipos_receitas_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_idtipos_receitas\" name=\"idtipos_receitas\" size=\"7\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->idtipos_receitas) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->idtipos_receitas)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idtipos_receitas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idtipos_receitas_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idnota_fiscal']))
    {
        $this->nm_new_label['idnota_fiscal'] = "NOTA FISCAL VINCULADA";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idnota_fiscal = $this->idnota_fiscal;
   $sStyleHidden_idnota_fiscal = '';
   if (isset($this->nmgp_cmp_hidden['idnota_fiscal']) && $this->nmgp_cmp_hidden['idnota_fiscal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idnota_fiscal']);
       $sStyleHidden_idnota_fiscal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idnota_fiscal = 'display: none;';
   $sStyleReadInp_idnota_fiscal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idnota_fiscal']) && $this->nmgp_cmp_readonly['idnota_fiscal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idnota_fiscal']);
       $sStyleReadLab_idnota_fiscal = '';
       $sStyleReadInp_idnota_fiscal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idnota_fiscal']) && $this->nmgp_cmp_hidden['idnota_fiscal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idnota_fiscal" value="<?php echo $this->form_encode_input($idnota_fiscal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_idnota_fiscal_line" id="hidden_field_data_idnota_fiscal" style="<?php echo $sStyleHidden_idnota_fiscal; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idnota_fiscal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_idnota_fiscal_label" style=""><span id="id_label_idnota_fiscal"><?php echo $this->nm_new_label['idnota_fiscal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idnota_fiscal"]) &&  $this->nmgp_cmp_readonly["idnota_fiscal"] == "on") { 

 ?>
<input type="hidden" name="idnota_fiscal" value="<?php echo $this->form_encode_input($idnota_fiscal) . "\">" . $idnota_fiscal . ""; ?>
<?php } else { ?>
<span id="id_read_on_idnota_fiscal" class="sc-ui-readonly-idnota_fiscal css_idnota_fiscal_line" style="<?php echo $sStyleReadLab_idnota_fiscal; ?>"><?php echo $this->form_format_readonly("idnota_fiscal", $this->form_encode_input($this->idnota_fiscal)); ?></span><span id="id_read_off_idnota_fiscal" class="css_read_off_idnota_fiscal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_idnota_fiscal; ?>">
 <input class="sc-js-input scFormObjectOdd css_idnota_fiscal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_idnota_fiscal" type=text name="idnota_fiscal" value="<?php echo $this->form_encode_input($idnota_fiscal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['idnota_fiscal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['idnota_fiscal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['idnota_fiscal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idnota_fiscal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idnota_fiscal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_idnota_fiscal_dumb = ('' == $sStyleHidden_idnota_fiscal) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_idnota_fiscal_dumb" style="<?php echo $sStyleHidden_idnota_fiscal_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf2\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_emissao']))
    {
        $this->nm_new_label['data_emissao'] = "DATA DE EMISSÃO";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_emissao = $this->data_emissao;
   $sStyleHidden_data_emissao = '';
   if (isset($this->nmgp_cmp_hidden['data_emissao']) && $this->nmgp_cmp_hidden['data_emissao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_emissao']);
       $sStyleHidden_data_emissao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_emissao = 'display: none;';
   $sStyleReadInp_data_emissao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_emissao']) && $this->nmgp_cmp_readonly['data_emissao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_emissao']);
       $sStyleReadLab_data_emissao = '';
       $sStyleReadInp_data_emissao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_emissao']) && $this->nmgp_cmp_hidden['data_emissao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_emissao" value="<?php echo $this->form_encode_input($data_emissao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_data_emissao_line" id="hidden_field_data_data_emissao" style="<?php echo $sStyleHidden_data_emissao; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_emissao_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_data_emissao_label" style=""><span id="id_label_data_emissao"><?php echo $this->nm_new_label['data_emissao']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_emissao"]) &&  $this->nmgp_cmp_readonly["data_emissao"] == "on") { 

 ?>
<input type="hidden" name="data_emissao" value="<?php echo $this->form_encode_input($data_emissao) . "\">" . $data_emissao . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_emissao" class="sc-ui-readonly-data_emissao css_data_emissao_line" style="<?php echo $sStyleReadLab_data_emissao; ?>"><?php echo $this->form_format_readonly("data_emissao", $this->form_encode_input($data_emissao)); ?></span><span id="id_read_off_data_emissao" class="css_read_off_data_emissao<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_emissao; ?>"><?php
$tmp_form_data = $this->field_config['data_emissao']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_data_emissao_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_emissao" type=text name="data_emissao" value="<?php echo $this->form_encode_input($data_emissao) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=18"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_emissao']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_emissao']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_emissao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_emissao_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_vencimento']))
    {
        $this->nm_new_label['data_vencimento'] = "DATA DE VENCIMENTO";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_vencimento = $this->data_vencimento;
   $sStyleHidden_data_vencimento = '';
   if (isset($this->nmgp_cmp_hidden['data_vencimento']) && $this->nmgp_cmp_hidden['data_vencimento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_vencimento']);
       $sStyleHidden_data_vencimento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_vencimento = 'display: none;';
   $sStyleReadInp_data_vencimento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_vencimento']) && $this->nmgp_cmp_readonly['data_vencimento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_vencimento']);
       $sStyleReadLab_data_vencimento = '';
       $sStyleReadInp_data_vencimento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_vencimento']) && $this->nmgp_cmp_hidden['data_vencimento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_vencimento" value="<?php echo $this->form_encode_input($data_vencimento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_data_vencimento_line" id="hidden_field_data_data_vencimento" style="<?php echo $sStyleHidden_data_vencimento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_vencimento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_data_vencimento_label" style=""><span id="id_label_data_vencimento"><?php echo $this->nm_new_label['data_vencimento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_vencimento"]) &&  $this->nmgp_cmp_readonly["data_vencimento"] == "on") { 

 ?>
<input type="hidden" name="data_vencimento" value="<?php echo $this->form_encode_input($data_vencimento) . "\">" . $data_vencimento . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_vencimento" class="sc-ui-readonly-data_vencimento css_data_vencimento_line" style="<?php echo $sStyleReadLab_data_vencimento; ?>"><?php echo $this->form_format_readonly("data_vencimento", $this->form_encode_input($data_vencimento)); ?></span><span id="id_read_off_data_vencimento" class="css_read_off_data_vencimento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_vencimento; ?>"><?php
$tmp_form_data = $this->field_config['data_vencimento']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_data_vencimento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_vencimento" type=text name="data_vencimento" value="<?php echo $this->form_encode_input($data_vencimento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=18"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_vencimento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_vencimento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_vencimento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_vencimento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_data_vencimento_dumb = ('' == $sStyleHidden_data_vencimento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_data_vencimento_dumb" style="<?php echo $sStyleHidden_data_vencimento_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf3\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>DADOS DE PARCELAMENTO<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sc_field_0']))
    {
        $this->nm_new_label['sc_field_0'] = "PARCELAS";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sc_field_0 = $this->sc_field_0;
   $sStyleHidden_sc_field_0 = '';
   if (isset($this->nmgp_cmp_hidden['sc_field_0']) && $this->nmgp_cmp_hidden['sc_field_0'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sc_field_0']);
       $sStyleHidden_sc_field_0 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sc_field_0 = 'display: none;';
   $sStyleReadInp_sc_field_0 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sc_field_0']) && $this->nmgp_cmp_readonly['sc_field_0'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sc_field_0']);
       $sStyleReadLab_sc_field_0 = '';
       $sStyleReadInp_sc_field_0 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sc_field_0']) && $this->nmgp_cmp_hidden['sc_field_0'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sc_field_0" value="<?php echo $this->form_encode_input($sc_field_0) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sc_field_0_line" id="hidden_field_data_sc_field_0" style="<?php echo $sStyleHidden_sc_field_0; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sc_field_0_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sc_field_0_label" style=""><span id="id_label_sc_field_0"><?php echo $this->nm_new_label['sc_field_0']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sc_field_0"]) &&  $this->nmgp_cmp_readonly["sc_field_0"] == "on") { 

 ?>
<input type="hidden" name="sc_field_0" value="<?php echo $this->form_encode_input($sc_field_0) . "\">" . $sc_field_0 . ""; ?>
<?php } else { ?>
<span id="id_read_on_sc_field_0" class="sc-ui-readonly-sc_field_0 css_sc_field_0_line" style="<?php echo $sStyleReadLab_sc_field_0; ?>"><?php echo $this->form_format_readonly("sc_field_0", $this->form_encode_input($this->sc_field_0)); ?></span><span id="id_read_off_sc_field_0" class="css_read_off_sc_field_0<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sc_field_0; ?>">
 <input class="sc-js-input scFormObjectOdd scFormObjectOddSpin scSpin_sc_field_0_obj css_sc_field_0_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sc_field_0" type=text name="sc_field_0" value="<?php echo $this->form_encode_input($sc_field_0) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 20, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['sc_field_0']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['sc_field_0']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sc_field_0']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sc_field_0_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sc_field_0_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sc_field_1']))
    {
        $this->nm_new_label['sc_field_1'] = "INTERVALO";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sc_field_1 = $this->sc_field_1;
   $sStyleHidden_sc_field_1 = '';
   if (isset($this->nmgp_cmp_hidden['sc_field_1']) && $this->nmgp_cmp_hidden['sc_field_1'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sc_field_1']);
       $sStyleHidden_sc_field_1 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sc_field_1 = 'display: none;';
   $sStyleReadInp_sc_field_1 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sc_field_1']) && $this->nmgp_cmp_readonly['sc_field_1'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sc_field_1']);
       $sStyleReadLab_sc_field_1 = '';
       $sStyleReadInp_sc_field_1 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sc_field_1']) && $this->nmgp_cmp_hidden['sc_field_1'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sc_field_1" value="<?php echo $this->form_encode_input($sc_field_1) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_sc_field_1_line" id="hidden_field_data_sc_field_1" style="<?php echo $sStyleHidden_sc_field_1; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sc_field_1_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sc_field_1_label" style=""><span id="id_label_sc_field_1"><?php echo $this->nm_new_label['sc_field_1']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sc_field_1"]) &&  $this->nmgp_cmp_readonly["sc_field_1"] == "on") { 

 ?>
<input type="hidden" name="sc_field_1" value="<?php echo $this->form_encode_input($sc_field_1) . "\">" . $sc_field_1 . ""; ?>
<?php } else { ?>
<span id="id_read_on_sc_field_1" class="sc-ui-readonly-sc_field_1 css_sc_field_1_line" style="<?php echo $sStyleReadLab_sc_field_1; ?>"><?php echo $this->form_format_readonly("sc_field_1", $this->form_encode_input($this->sc_field_1)); ?></span><span id="id_read_off_sc_field_1" class="css_read_off_sc_field_1<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sc_field_1; ?>">
 <input class="sc-js-input scFormObjectOdd scFormObjectOddSpin scSpin_sc_field_1_obj css_sc_field_1_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sc_field_1" type=text name="sc_field_1" value="<?php echo $this->form_encode_input($sc_field_1) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 20, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['sc_field_1']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['sc_field_1']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sc_field_1']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sc_field_1_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sc_field_1_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sc_field_2']))
   {
       $this->nm_new_label['sc_field_2'] = "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sc_field_2 = $this->sc_field_2;
   $sStyleHidden_sc_field_2 = '';
   if (isset($this->nmgp_cmp_hidden['sc_field_2']) && $this->nmgp_cmp_hidden['sc_field_2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sc_field_2']);
       $sStyleHidden_sc_field_2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sc_field_2 = 'display: none;';
   $sStyleReadInp_sc_field_2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sc_field_2']) && $this->nmgp_cmp_readonly['sc_field_2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sc_field_2']);
       $sStyleReadLab_sc_field_2 = '';
       $sStyleReadInp_sc_field_2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sc_field_2']) && $this->nmgp_cmp_hidden['sc_field_2'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sc_field_2" value="<?php echo $this->form_encode_input($this->sc_field_2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->sc_field_2_1 = explode(";", trim($this->sc_field_2));
  } 
  else
  {
      if (empty($this->sc_field_2))
      {
          $this->sc_field_2_1= array(); 
          $this->sc_field_2= "F";
      } 
      else
      {
          $this->sc_field_2_1= $this->sc_field_2; 
          $this->sc_field_2= ""; 
          foreach ($this->sc_field_2_1 as $cada_sc_field_2)
          {
             if (!empty($sc_field_2))
             {
                 $this->sc_field_2.= ";"; 
             } 
             $this->sc_field_2.= $cada_sc_field_2; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_sc_field_2_line" id="hidden_field_data_sc_field_2" style="<?php echo $sStyleHidden_sc_field_2; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sc_field_2_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sc_field_2_label" style=""><span id="id_label_sc_field_2"><?php echo $this->nm_new_label['sc_field_2']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sc_field_2"]) &&  $this->nmgp_cmp_readonly["sc_field_2"] == "on") { 

$sc_field_2_look = "";
 if ($this->sc_field_2 == "T") { $sc_field_2_look .= "DIVIDIR O VALOR NAS PARCELAS" ;} 
 if (empty($sc_field_2_look)) { $sc_field_2_look = $this->sc_field_2; }
?>
<input type="hidden" name="sc_field_2" value="<?php echo $this->form_encode_input($sc_field_2) . "\">" . $sc_field_2_look . ""; ?>
<?php } else { ?>

<?php

$sc_field_2_look = "";
 if ($this->sc_field_2 == "T") { $sc_field_2_look .= "DIVIDIR O VALOR NAS PARCELAS" ;} 
 if (empty($sc_field_2_look)) { $sc_field_2_look = $this->sc_field_2; }
?>
<span id="id_read_on_sc_field_2" class="css_sc_field_2_line" style="<?php echo $sStyleReadLab_sc_field_2; ?>"><?php echo $this->form_format_readonly("sc_field_2", $this->form_encode_input($sc_field_2_look)); ?></span><span id="id_read_off_sc_field_2" class="css_read_off_sc_field_2 css_sc_field_2_line" style="<?php echo $sStyleReadInp_sc_field_2; ?>"><?php echo "<div id=\"idAjaxCheckbox_sc_field_2\" style=\"display: inline-block\" class=\"css_sc_field_2_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_sc_field_2_line"><?php $tempOptionId = "id-opt-sc_field_2" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-sc_field_2 sc-ui-checkbox-sc_field_2" name="sc_field_2[]" value="T"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_sc_field_2'][] = 'T'; ?>
<?php  if (in_array("T", $this->sc_field_2_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">DIVIDIR O VALOR NAS PARCELAS</label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sc_field_2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sc_field_2_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sc_field_3']))
   {
       $this->nm_new_label['sc_field_3'] = "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sc_field_3 = $this->sc_field_3;
   $sStyleHidden_sc_field_3 = '';
   if (isset($this->nmgp_cmp_hidden['sc_field_3']) && $this->nmgp_cmp_hidden['sc_field_3'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sc_field_3']);
       $sStyleHidden_sc_field_3 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sc_field_3 = 'display: none;';
   $sStyleReadInp_sc_field_3 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sc_field_3']) && $this->nmgp_cmp_readonly['sc_field_3'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sc_field_3']);
       $sStyleReadLab_sc_field_3 = '';
       $sStyleReadInp_sc_field_3 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sc_field_3']) && $this->nmgp_cmp_hidden['sc_field_3'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sc_field_3" value="<?php echo $this->form_encode_input($this->sc_field_3) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->sc_field_3_1 = explode(";", trim($this->sc_field_3));
  } 
  else
  {
      if (empty($this->sc_field_3))
      {
          $this->sc_field_3_1= array(); 
          $this->sc_field_3= "F";
      } 
      else
      {
          $this->sc_field_3_1= $this->sc_field_3; 
          $this->sc_field_3= ""; 
          foreach ($this->sc_field_3_1 as $cada_sc_field_3)
          {
             if (!empty($sc_field_3))
             {
                 $this->sc_field_3.= ";"; 
             } 
             $this->sc_field_3.= $cada_sc_field_3; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_sc_field_3_line" id="hidden_field_data_sc_field_3" style="<?php echo $sStyleHidden_sc_field_3; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sc_field_3_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sc_field_3_label" style=""><span id="id_label_sc_field_3"><?php echo $this->nm_new_label['sc_field_3']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sc_field_3"]) &&  $this->nmgp_cmp_readonly["sc_field_3"] == "on") { 

$sc_field_3_look = "";
 if ($this->sc_field_3 == "T") { $sc_field_3_look .= "VENCIMENTO FIXO " ;} 
 if (empty($sc_field_3_look)) { $sc_field_3_look = $this->sc_field_3; }
?>
<input type="hidden" name="sc_field_3" value="<?php echo $this->form_encode_input($sc_field_3) . "\">" . $sc_field_3_look . ""; ?>
<?php } else { ?>

<?php

$sc_field_3_look = "";
 if ($this->sc_field_3 == "T") { $sc_field_3_look .= "VENCIMENTO FIXO " ;} 
 if (empty($sc_field_3_look)) { $sc_field_3_look = $this->sc_field_3; }
?>
<span id="id_read_on_sc_field_3" class="css_sc_field_3_line" style="<?php echo $sStyleReadLab_sc_field_3; ?>"><?php echo $this->form_format_readonly("sc_field_3", $this->form_encode_input($sc_field_3_look)); ?></span><span id="id_read_off_sc_field_3" class="css_read_off_sc_field_3 css_sc_field_3_line" style="<?php echo $sStyleReadInp_sc_field_3; ?>"><?php echo "<div id=\"idAjaxCheckbox_sc_field_3\" style=\"display: inline-block\" class=\"css_sc_field_3_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_sc_field_3_line"><?php $tempOptionId = "id-opt-sc_field_3" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-sc_field_3 sc-ui-checkbox-sc_field_3" name="sc_field_3[]" value="T"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_sc_field_3'][] = 'T'; ?>
<?php  if (in_array("T", $this->sc_field_3_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">VENCIMENTO FIXO </label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sc_field_3_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sc_field_3_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sc_field_4']))
   {
       $this->nm_new_label['sc_field_4'] = "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sc_field_4 = $this->sc_field_4;
   $sStyleHidden_sc_field_4 = '';
   if (isset($this->nmgp_cmp_hidden['sc_field_4']) && $this->nmgp_cmp_hidden['sc_field_4'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sc_field_4']);
       $sStyleHidden_sc_field_4 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sc_field_4 = 'display: none;';
   $sStyleReadInp_sc_field_4 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sc_field_4']) && $this->nmgp_cmp_readonly['sc_field_4'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sc_field_4']);
       $sStyleReadLab_sc_field_4 = '';
       $sStyleReadInp_sc_field_4 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sc_field_4']) && $this->nmgp_cmp_hidden['sc_field_4'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sc_field_4" value="<?php echo $this->form_encode_input($this->sc_field_4) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->sc_field_4_1 = explode(";", trim($this->sc_field_4));
  } 
  else
  {
      if (empty($this->sc_field_4))
      {
          $this->sc_field_4_1= array(); 
          $this->sc_field_4= "F";
      } 
      else
      {
          $this->sc_field_4_1= $this->sc_field_4; 
          $this->sc_field_4= ""; 
          foreach ($this->sc_field_4_1 as $cada_sc_field_4)
          {
             if (!empty($sc_field_4))
             {
                 $this->sc_field_4.= ";"; 
             } 
             $this->sc_field_4.= $cada_sc_field_4; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_sc_field_4_line" id="hidden_field_data_sc_field_4" style="<?php echo $sStyleHidden_sc_field_4; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sc_field_4_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_sc_field_4_label" style=""><span id="id_label_sc_field_4"><?php echo $this->nm_new_label['sc_field_4']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sc_field_4"]) &&  $this->nmgp_cmp_readonly["sc_field_4"] == "on") { 

$sc_field_4_look = "";
 if ($this->sc_field_4 == "T") { $sc_field_4_look .= "ALTERAR COMPETENCIA" ;} 
 if (empty($sc_field_4_look)) { $sc_field_4_look = $this->sc_field_4; }
?>
<input type="hidden" name="sc_field_4" value="<?php echo $this->form_encode_input($sc_field_4) . "\">" . $sc_field_4_look . ""; ?>
<?php } else { ?>

<?php

$sc_field_4_look = "";
 if ($this->sc_field_4 == "T") { $sc_field_4_look .= "ALTERAR COMPETENCIA" ;} 
 if (empty($sc_field_4_look)) { $sc_field_4_look = $this->sc_field_4; }
?>
<span id="id_read_on_sc_field_4" class="css_sc_field_4_line" style="<?php echo $sStyleReadLab_sc_field_4; ?>"><?php echo $this->form_format_readonly("sc_field_4", $this->form_encode_input($sc_field_4_look)); ?></span><span id="id_read_off_sc_field_4" class="css_read_off_sc_field_4 css_sc_field_4_line" style="<?php echo $sStyleReadInp_sc_field_4; ?>"><?php echo "<div id=\"idAjaxCheckbox_sc_field_4\" style=\"display: inline-block\" class=\"css_sc_field_4_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_sc_field_4_line"><?php $tempOptionId = "id-opt-sc_field_4" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-sc_field_4 sc-ui-checkbox-sc_field_4" name="sc_field_4[]" value="T"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_sc_field_4'][] = 'T'; ?>
<?php  if (in_array("T", $this->sc_field_4_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">ALTERAR COMPETENCIA</label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sc_field_4_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sc_field_4_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_sc_field_4_dumb = ('' == $sStyleHidden_sc_field_4) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_sc_field_4_dumb" style="<?php echo $sStyleHidden_sc_field_4_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf4\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['pago']))
   {
       $this->nm_new_label['pago'] = "STATUS PAGAMENTO";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pago = $this->pago;
   $sStyleHidden_pago = '';
   if (isset($this->nmgp_cmp_hidden['pago']) && $this->nmgp_cmp_hidden['pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pago']);
       $sStyleHidden_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pago = 'display: none;';
   $sStyleReadInp_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pago']) && $this->nmgp_cmp_readonly['pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pago']);
       $sStyleReadLab_pago = '';
       $sStyleReadInp_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pago']) && $this->nmgp_cmp_hidden['pago'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="pago" value="<?php echo $this->form_encode_input($this->pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pago_line" id="hidden_field_data_pago" style="<?php echo $sStyleHidden_pago; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pago_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pago_label" style=""><span id="id_label_pago"><?php echo $this->nm_new_label['pago']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pago"]) &&  $this->nmgp_cmp_readonly["pago"] == "on") { 

$pago_look = "";
 if ($this->pago == "F") { $pago_look .= "A RECEBER" ;} 
 if ($this->pago == "T") { $pago_look .= "RECEBIDO" ;} 
 if (empty($pago_look)) { $pago_look = $this->pago; }
?>
<input type="hidden" name="pago" value="<?php echo $this->form_encode_input($pago) . "\">" . $pago_look . ""; ?>
<?php } else { ?>
<?php

$pago_look = "";
 if ($this->pago == "F") { $pago_look .= "A RECEBER" ;} 
 if ($this->pago == "T") { $pago_look .= "RECEBIDO" ;} 
 if (empty($pago_look)) { $pago_look = $this->pago; }
?>
<span id="id_read_on_pago" class="css_pago_line"  style="<?php echo $sStyleReadLab_pago; ?>"><?php echo $this->form_format_readonly("pago", $this->form_encode_input($pago_look)); ?></span><span id="id_read_off_pago" class="css_read_off_pago<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap; <?php echo $sStyleReadInp_pago; ?>">
 <span id="idAjaxSelect_pago" class="<?php echo $this->classes_100perc_fields['span_select'] ?>"><select class="sc-js-input scFormObjectOdd css_pago_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pago" name="pago" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="F" <?php  if ($this->pago == "F") { echo " selected" ;} ?>>A RECEBER</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_pago'][] = 'F'; ?>
 <option  value="T" <?php  if ($this->pago == "T") { echo " selected" ;} ?>>RECEBIDO</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['Lookup_pago'][] = 'T'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pago_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_pagamento']))
    {
        $this->nm_new_label['data_pagamento'] = "DATA RECEBIMENTO";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_pagamento = $this->data_pagamento;
   $sStyleHidden_data_pagamento = '';
   if (isset($this->nmgp_cmp_hidden['data_pagamento']) && $this->nmgp_cmp_hidden['data_pagamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_pagamento']);
       $sStyleHidden_data_pagamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_pagamento = 'display: none;';
   $sStyleReadInp_data_pagamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_pagamento']) && $this->nmgp_cmp_readonly['data_pagamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_pagamento']);
       $sStyleReadLab_data_pagamento = '';
       $sStyleReadInp_data_pagamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_pagamento']) && $this->nmgp_cmp_hidden['data_pagamento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_pagamento" value="<?php echo $this->form_encode_input($data_pagamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_data_pagamento_line" id="hidden_field_data_data_pagamento" style="<?php echo $sStyleHidden_data_pagamento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_pagamento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_data_pagamento_label" style=""><span id="id_label_data_pagamento"><?php echo $this->nm_new_label['data_pagamento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_pagamento"]) &&  $this->nmgp_cmp_readonly["data_pagamento"] == "on") { 

 ?>
<input type="hidden" name="data_pagamento" value="<?php echo $this->form_encode_input($data_pagamento) . "\">" . $data_pagamento . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_pagamento" class="sc-ui-readonly-data_pagamento css_data_pagamento_line" style="<?php echo $sStyleReadLab_data_pagamento; ?>"><?php echo $this->form_format_readonly("data_pagamento", $this->form_encode_input($data_pagamento)); ?></span><span id="id_read_off_data_pagamento" class="css_read_off_data_pagamento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_pagamento; ?>"><?php
$tmp_form_data = $this->field_config['data_pagamento']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_data_pagamento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_pagamento" type=text name="data_pagamento" value="<?php echo $this->form_encode_input($data_pagamento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=18"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_pagamento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_pagamento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_pagamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_pagamento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['observacoes']))
    {
        $this->nm_new_label['observacoes'] = "OBSERVAÇÕES";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $observacoes = $this->observacoes;
   $sStyleHidden_observacoes = '';
   if (isset($this->nmgp_cmp_hidden['observacoes']) && $this->nmgp_cmp_hidden['observacoes'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['observacoes']);
       $sStyleHidden_observacoes = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_observacoes = 'display: none;';
   $sStyleReadInp_observacoes = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['observacoes']) && $this->nmgp_cmp_readonly['observacoes'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['observacoes']);
       $sStyleReadLab_observacoes = '';
       $sStyleReadInp_observacoes = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['observacoes']) && $this->nmgp_cmp_hidden['observacoes'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="observacoes" value="<?php echo $this->form_encode_input($observacoes) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_observacoes_line" id="hidden_field_data_observacoes" style="<?php echo $sStyleHidden_observacoes; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_observacoes_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_observacoes_label" style=""><span id="id_label_observacoes"><?php echo $this->nm_new_label['observacoes']; ?></span></span><br>
<?php
$observacoes_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($observacoes));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["observacoes"]) &&  $this->nmgp_cmp_readonly["observacoes"] == "on") { 

 ?>
<input type="hidden" name="observacoes" value="<?php echo $this->form_encode_input($observacoes) . "\">" . $observacoes_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_observacoes" class="sc-ui-readonly-observacoes css_observacoes_line" style="<?php echo $sStyleReadLab_observacoes; ?>"><?php echo $this->form_format_readonly("observacoes", $this->form_encode_input($observacoes_val)); ?></span><span id="id_read_off_observacoes" class="css_read_off_observacoes<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_observacoes; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_observacoes_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;" name="observacoes" id="id_sc_field_observacoes" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $observacoes; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_observacoes_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_observacoes_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R")
{
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_contas_receber_criar_titulo_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_contas_receber_criar_titulo_mob");
 parent.scAjaxDetailHeight("form_contas_receber_criar_titulo_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_contas_receber_criar_titulo_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_contas_receber_criar_titulo_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if (isset($this->scFormFocusErrorName) && '' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['sc_modal'])
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
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_Salvar() {
		if ($("#sc_Salvar_top").length && $("#sc_Salvar_top").is(":visible")) {
		    if ($("#sc_Salvar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Salvar()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-6").length && $("#sc_b_new_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-7").length && $("#sc_b_ins_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-5").length && $("#sc_b_sai_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			toggleToolbar(event, true); return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_receber_criar_titulo_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
