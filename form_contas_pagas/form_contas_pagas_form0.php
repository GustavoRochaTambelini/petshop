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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("CONTA RECEBIDA"); } else { echo strip_tags("CONTA RECEBIDA"); } ?></TITLE>
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
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
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
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
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
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_progressbar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_contas_pagas/form_contas_pagas_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_contas_pagas_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['last'] : 'off'); ?>";
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
     if (F_name == "idcliente")
     {
        $('select[name="idcliente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="idcliente"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="idcliente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "idforma_pagamento")
     {
        $('select[name="idforma_pagamento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="idforma_pagamento"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="idforma_pagamento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "juros")
     {
        $('input[name="juros"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="juros"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="juros"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_contas_pagas_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
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
 include_once("form_contas_pagas_js0.php");
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
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['insert_validation']; ?>">
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
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_contas_pagas'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_contas_pagas'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "R")
{
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><input type="hidden" name="observacao_ul_name" id="id_sc_field_observacao_ul_name" value="<?php echo $this->form_encode_input($this->observacao_ul_name);?>">
<input type="hidden" name="observacao_ul_type" id="id_sc_field_observacao_ul_type" value="<?php echo $this->form_encode_input($this->observacao_ul_type);?>">
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

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idcliente_label" id="hidden_field_label_idcliente" style="<?php echo $sStyleHidden_idcliente; ?>"><span id="id_label_idcliente"><?php echo $this->nm_new_label['idcliente']; ?></span></TD>
    <TD class="scFormDataOdd css_idcliente_line" id="hidden_field_data_idcliente" style="<?php echo $sStyleHidden_idcliente; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idcliente_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idcliente"]) &&  $this->nmgp_cmp_readonly["idcliente"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente'] = array(); 
    }

   $old_value_juros = $this->juros;
   $old_value_idcontas_pagar = $this->idcontas_pagar;
   $old_value_idtipo_contas = $this->idtipo_contas;
   $old_value_idgrupo_contas = $this->idgrupo_contas;
   $old_value_idbaixa_conta_corrente = $this->idbaixa_conta_corrente;
   $old_value_valor_a_pagar = $this->valor_a_pagar;
   $old_value_valor_pago = $this->valor_pago;
   $old_value_data_vencimanto = $this->data_vencimanto;
   $old_value_data_vencimanto_hora = $this->data_vencimanto_hora;
   $old_value_nota_fiscal = $this->nota_fiscal;
   $old_value_data_pagamento = $this->data_pagamento;
   $old_value_data_pagamento_hora = $this->data_pagamento_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_juros = $this->juros;
   $unformatted_value_idcontas_pagar = $this->idcontas_pagar;
   $unformatted_value_idtipo_contas = $this->idtipo_contas;
   $unformatted_value_idgrupo_contas = $this->idgrupo_contas;
   $unformatted_value_idbaixa_conta_corrente = $this->idbaixa_conta_corrente;
   $unformatted_value_valor_a_pagar = $this->valor_a_pagar;
   $unformatted_value_valor_pago = $this->valor_pago;
   $unformatted_value_data_vencimanto = $this->data_vencimanto;
   $unformatted_value_data_vencimanto_hora = $this->data_vencimanto_hora;
   $unformatted_value_nota_fiscal = $this->nota_fiscal;
   $unformatted_value_data_pagamento = $this->data_pagamento;
   $unformatted_value_data_pagamento_hora = $this->data_pagamento_hora;

   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj + ' - ' + nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
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
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj + ' - ' + nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }
   else
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, nome_fantasia";
   }

   $this->juros = $old_value_juros;
   $this->idcontas_pagar = $old_value_idcontas_pagar;
   $this->idtipo_contas = $old_value_idtipo_contas;
   $this->idgrupo_contas = $old_value_idgrupo_contas;
   $this->idbaixa_conta_corrente = $old_value_idbaixa_conta_corrente;
   $this->valor_a_pagar = $old_value_valor_a_pagar;
   $this->valor_pago = $old_value_valor_pago;
   $this->data_vencimanto = $old_value_data_vencimanto;
   $this->data_vencimanto_hora = $old_value_data_vencimanto_hora;
   $this->nota_fiscal = $old_value_nota_fiscal;
   $this->data_pagamento = $old_value_data_pagamento;
   $this->data_pagamento_hora = $old_value_data_pagamento_hora;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idcliente'][] = $rs->fields[0];
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idcliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idcliente_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['idforma_pagamento']))
   {
       $this->nm_new_label['idforma_pagamento'] = "FORMA RECEBIMENTO";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idforma_pagamento = $this->idforma_pagamento;
   $sStyleHidden_idforma_pagamento = '';
   if (isset($this->nmgp_cmp_hidden['idforma_pagamento']) && $this->nmgp_cmp_hidden['idforma_pagamento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idforma_pagamento']);
       $sStyleHidden_idforma_pagamento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idforma_pagamento = 'display: none;';
   $sStyleReadInp_idforma_pagamento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idforma_pagamento']) && $this->nmgp_cmp_readonly['idforma_pagamento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idforma_pagamento']);
       $sStyleReadLab_idforma_pagamento = '';
       $sStyleReadInp_idforma_pagamento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idforma_pagamento']) && $this->nmgp_cmp_hidden['idforma_pagamento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="idforma_pagamento" value="<?php echo $this->form_encode_input($this->idforma_pagamento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idforma_pagamento_label" id="hidden_field_label_idforma_pagamento" style="<?php echo $sStyleHidden_idforma_pagamento; ?>"><span id="id_label_idforma_pagamento"><?php echo $this->nm_new_label['idforma_pagamento']; ?></span></TD>
    <TD class="scFormDataOdd css_idforma_pagamento_line" id="hidden_field_data_idforma_pagamento" style="<?php echo $sStyleHidden_idforma_pagamento; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idforma_pagamento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idforma_pagamento"]) &&  $this->nmgp_cmp_readonly["idforma_pagamento"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento'] = array(); 
    }

   $old_value_juros = $this->juros;
   $old_value_idcontas_pagar = $this->idcontas_pagar;
   $old_value_idtipo_contas = $this->idtipo_contas;
   $old_value_idgrupo_contas = $this->idgrupo_contas;
   $old_value_idbaixa_conta_corrente = $this->idbaixa_conta_corrente;
   $old_value_valor_a_pagar = $this->valor_a_pagar;
   $old_value_valor_pago = $this->valor_pago;
   $old_value_data_vencimanto = $this->data_vencimanto;
   $old_value_data_vencimanto_hora = $this->data_vencimanto_hora;
   $old_value_nota_fiscal = $this->nota_fiscal;
   $old_value_data_pagamento = $this->data_pagamento;
   $old_value_data_pagamento_hora = $this->data_pagamento_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_juros = $this->juros;
   $unformatted_value_idcontas_pagar = $this->idcontas_pagar;
   $unformatted_value_idtipo_contas = $this->idtipo_contas;
   $unformatted_value_idgrupo_contas = $this->idgrupo_contas;
   $unformatted_value_idbaixa_conta_corrente = $this->idbaixa_conta_corrente;
   $unformatted_value_valor_a_pagar = $this->valor_a_pagar;
   $unformatted_value_valor_pago = $this->valor_pago;
   $unformatted_value_data_vencimanto = $this->data_vencimanto;
   $unformatted_value_data_vencimanto_hora = $this->data_vencimanto_hora;
   $unformatted_value_nota_fiscal = $this->nota_fiscal;
   $unformatted_value_data_pagamento = $this->data_pagamento;
   $unformatted_value_data_pagamento_hora = $this->data_pagamento_hora;

   $nm_comando = "SELECT idforma_pagamento, descricao  FROM forma_pagamento  ORDER BY descricao";

   $this->juros = $old_value_juros;
   $this->idcontas_pagar = $old_value_idcontas_pagar;
   $this->idtipo_contas = $old_value_idtipo_contas;
   $this->idgrupo_contas = $old_value_idgrupo_contas;
   $this->idbaixa_conta_corrente = $old_value_idbaixa_conta_corrente;
   $this->valor_a_pagar = $old_value_valor_a_pagar;
   $this->valor_pago = $old_value_valor_pago;
   $this->data_vencimanto = $old_value_data_vencimanto;
   $this->data_vencimanto_hora = $old_value_data_vencimanto_hora;
   $this->nota_fiscal = $old_value_nota_fiscal;
   $this->data_pagamento = $old_value_data_pagamento;
   $this->data_pagamento_hora = $old_value_data_pagamento_hora;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_idforma_pagamento'][] = $rs->fields[0];
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
   $idforma_pagamento_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idforma_pagamento_1))
          {
              foreach ($this->idforma_pagamento_1 as $tmp_idforma_pagamento)
              {
                  if (trim($tmp_idforma_pagamento) === trim($cadaselect[1])) { $idforma_pagamento_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idforma_pagamento) === trim($cadaselect[1])) { $idforma_pagamento_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="idforma_pagamento" value="<?php echo $this->form_encode_input($idforma_pagamento) . "\">" . $idforma_pagamento_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_idforma_pagamento();
   $x = 0 ; 
   $idforma_pagamento_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idforma_pagamento_1))
          {
              foreach ($this->idforma_pagamento_1 as $tmp_idforma_pagamento)
              {
                  if (trim($tmp_idforma_pagamento) === trim($cadaselect[1])) { $idforma_pagamento_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idforma_pagamento) === trim($cadaselect[1])) { $idforma_pagamento_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($idforma_pagamento_look))
          {
              $idforma_pagamento_look = $this->idforma_pagamento;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_idforma_pagamento\" class=\"css_idforma_pagamento_line\" style=\"" .  $sStyleReadLab_idforma_pagamento . "\">" . $this->form_format_readonly("idforma_pagamento", $this->form_encode_input($idforma_pagamento_look)) . "</span><span id=\"id_read_off_idforma_pagamento\" class=\"css_read_off_idforma_pagamento" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_idforma_pagamento . "\">";
   echo " <span id=\"idAjaxSelect_idforma_pagamento\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_idforma_pagamento_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_idforma_pagamento\" name=\"idforma_pagamento\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->idforma_pagamento) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->idforma_pagamento)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idforma_pagamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idforma_pagamento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['juros']))
    {
        $this->nm_new_label['juros'] = "JUROS";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $juros = $this->juros;
   $sStyleHidden_juros = '';
   if (isset($this->nmgp_cmp_hidden['juros']) && $this->nmgp_cmp_hidden['juros'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['juros']);
       $sStyleHidden_juros = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_juros = 'display: none;';
   $sStyleReadInp_juros = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['juros']) && $this->nmgp_cmp_readonly['juros'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['juros']);
       $sStyleReadLab_juros = '';
       $sStyleReadInp_juros = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['juros']) && $this->nmgp_cmp_hidden['juros'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="juros" value="<?php echo $this->form_encode_input($juros) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_juros_label" id="hidden_field_label_juros" style="<?php echo $sStyleHidden_juros; ?>"><span id="id_label_juros"><?php echo $this->nm_new_label['juros']; ?></span></TD>
    <TD class="scFormDataOdd css_juros_line" id="hidden_field_data_juros" style="<?php echo $sStyleHidden_juros; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_juros_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["juros"]) &&  $this->nmgp_cmp_readonly["juros"] == "on") { 

 ?>
<input type="hidden" name="juros" value="<?php echo $this->form_encode_input($juros) . "\">" . $juros . ""; ?>
<?php } else { ?>
<span id="id_read_on_juros" class="sc-ui-readonly-juros css_juros_line" style="<?php echo $sStyleReadLab_juros; ?>"><?php echo $this->form_format_readonly("juros", $this->form_encode_input($this->juros)); ?></span><span id="id_read_off_juros" class="css_read_off_juros<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_juros; ?>">
 <input class="sc-js-input scFormObjectOdd css_juros_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_juros" type=text name="juros" value="<?php echo $this->form_encode_input($juros) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'currency', currencySymbol: '<?php echo $this->field_config['juros']['symbol_mon']; ?>', currencyPosition: '<?php echo ((1 == $this->field_config['juros']['format_pos'] || 3 == $this->field_config['juros']['format_pos']) ? 'left' : 'right'); ?>', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['juros']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['juros']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['juros']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['juros']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_juros_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_juros_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idcontas_pagar']))
           {
               $this->nmgp_cmp_readonly['idcontas_pagar'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['pago']))
   {
       $this->nm_new_label['pago'] = "STATUS RECEBIMENTO";
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

    <TD class="scFormLabelOdd scUiLabelWidthFix css_pago_label" id="hidden_field_label_pago" style="<?php echo $sStyleHidden_pago; ?>"><span id="id_label_pago"><?php echo $this->nm_new_label['pago']; ?></span></TD>
    <TD class="scFormDataOdd css_pago_line" id="hidden_field_data_pago" style="<?php echo $sStyleHidden_pago; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pago_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pago"]) &&  $this->nmgp_cmp_readonly["pago"] == "on") { 

$pago_look = "";
 if ($this->pago == "T") { $pago_look .= "PAGO" ;} 
 if ($this->pago == "F") { $pago_look .= "ESTORNAR PAGAMENTO" ;} 
 if (empty($pago_look)) { $pago_look = $this->pago; }
?>
<input type="hidden" name="pago" value="<?php echo $this->form_encode_input($pago) . "\">" . $pago_look . ""; ?>
<?php } else { ?>
<?php

$pago_look = "";
 if ($this->pago == "T") { $pago_look .= "PAGO" ;} 
 if ($this->pago == "F") { $pago_look .= "ESTORNAR PAGAMENTO" ;} 
 if (empty($pago_look)) { $pago_look = $this->pago; }
?>
<span id="id_read_on_pago" class="css_pago_line"  style="<?php echo $sStyleReadLab_pago; ?>"><?php echo $this->form_format_readonly("pago", $this->form_encode_input($pago_look)); ?></span><span id="id_read_off_pago" class="css_read_off_pago<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap; <?php echo $sStyleReadInp_pago; ?>">
 <span id="idAjaxSelect_pago" class="<?php echo $this->classes_100perc_fields['span_select'] ?>"><select class="sc-js-input scFormObjectOdd css_pago_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pago" name="pago" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="T" <?php  if ($this->pago == "T") { echo " selected" ;} ?>>PAGO</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_pago'][] = 'T'; ?>
 <option  value="F" <?php  if ($this->pago == "F") { echo " selected" ;} ?>>ESTORNAR PAGAMENTO</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['Lookup_pago'][] = 'F'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pago_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idcontas_pagar']))
    {
        $this->nm_new_label['idcontas_pagar'] = "Idcontas Pagar";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idcontas_pagar = $this->idcontas_pagar;
   $sStyleHidden_idcontas_pagar = '';
   if (isset($this->nmgp_cmp_hidden['idcontas_pagar']) && $this->nmgp_cmp_hidden['idcontas_pagar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idcontas_pagar']);
       $sStyleHidden_idcontas_pagar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idcontas_pagar = 'display: none;';
   $sStyleReadInp_idcontas_pagar = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["idcontas_pagar"]) &&  $this->nmgp_cmp_readonly["idcontas_pagar"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idcontas_pagar']);
       $sStyleReadLab_idcontas_pagar = '';
       $sStyleReadInp_idcontas_pagar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idcontas_pagar']) && $this->nmgp_cmp_hidden['idcontas_pagar'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idcontas_pagar" value="<?php echo $this->form_encode_input($idcontas_pagar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idcontas_pagar_label" id="hidden_field_label_idcontas_pagar" style="<?php echo $sStyleHidden_idcontas_pagar; ?>"><span id="id_label_idcontas_pagar"><?php echo $this->nm_new_label['idcontas_pagar']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['php_cmp_required']['idcontas_pagar']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['php_cmp_required']['idcontas_pagar'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_idcontas_pagar_line" id="hidden_field_data_idcontas_pagar" style="<?php echo $sStyleHidden_idcontas_pagar; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idcontas_pagar_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["idcontas_pagar"]) &&  $this->nmgp_cmp_readonly["idcontas_pagar"] == "on")) { 

 ?>
<input type="hidden" name="idcontas_pagar" value="<?php echo $this->form_encode_input($idcontas_pagar) . "\"><span id=\"id_ajax_label_idcontas_pagar\">" . $idcontas_pagar . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_idcontas_pagar" class="sc-ui-readonly-idcontas_pagar css_idcontas_pagar_line" style="<?php echo $sStyleReadLab_idcontas_pagar; ?>"><?php echo $this->form_format_readonly("idcontas_pagar", $this->form_encode_input($this->idcontas_pagar)); ?></span><span id="id_read_off_idcontas_pagar" class="css_read_off_idcontas_pagar<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_idcontas_pagar; ?>">
 <input class="sc-js-input scFormObjectOdd css_idcontas_pagar_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_idcontas_pagar" type=text name="idcontas_pagar" value="<?php echo $this->form_encode_input($idcontas_pagar) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['idcontas_pagar']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['idcontas_pagar']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['idcontas_pagar']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idcontas_pagar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idcontas_pagar_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idtipo_contas']))
    {
        $this->nm_new_label['idtipo_contas'] = "Idtipo Contas";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idtipo_contas = $this->idtipo_contas;
   $sStyleHidden_idtipo_contas = '';
   if (isset($this->nmgp_cmp_hidden['idtipo_contas']) && $this->nmgp_cmp_hidden['idtipo_contas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idtipo_contas']);
       $sStyleHidden_idtipo_contas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idtipo_contas = 'display: none;';
   $sStyleReadInp_idtipo_contas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idtipo_contas']) && $this->nmgp_cmp_readonly['idtipo_contas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idtipo_contas']);
       $sStyleReadLab_idtipo_contas = '';
       $sStyleReadInp_idtipo_contas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idtipo_contas']) && $this->nmgp_cmp_hidden['idtipo_contas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idtipo_contas" value="<?php echo $this->form_encode_input($idtipo_contas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idtipo_contas_label" id="hidden_field_label_idtipo_contas" style="<?php echo $sStyleHidden_idtipo_contas; ?>"><span id="id_label_idtipo_contas"><?php echo $this->nm_new_label['idtipo_contas']; ?></span></TD>
    <TD class="scFormDataOdd css_idtipo_contas_line" id="hidden_field_data_idtipo_contas" style="<?php echo $sStyleHidden_idtipo_contas; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idtipo_contas_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idtipo_contas"]) &&  $this->nmgp_cmp_readonly["idtipo_contas"] == "on") { 

 ?>
<input type="hidden" name="idtipo_contas" value="<?php echo $this->form_encode_input($idtipo_contas) . "\">" . $idtipo_contas . ""; ?>
<?php } else { ?>
<span id="id_read_on_idtipo_contas" class="sc-ui-readonly-idtipo_contas css_idtipo_contas_line" style="<?php echo $sStyleReadLab_idtipo_contas; ?>"><?php echo $this->form_format_readonly("idtipo_contas", $this->form_encode_input($this->idtipo_contas)); ?></span><span id="id_read_off_idtipo_contas" class="css_read_off_idtipo_contas<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_idtipo_contas; ?>">
 <input class="sc-js-input scFormObjectOdd css_idtipo_contas_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_idtipo_contas" type=text name="idtipo_contas" value="<?php echo $this->form_encode_input($idtipo_contas) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['idtipo_contas']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['idtipo_contas']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['idtipo_contas']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idtipo_contas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idtipo_contas_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idgrupo_contas']))
    {
        $this->nm_new_label['idgrupo_contas'] = "Idgrupo Contas";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idgrupo_contas = $this->idgrupo_contas;
   $sStyleHidden_idgrupo_contas = '';
   if (isset($this->nmgp_cmp_hidden['idgrupo_contas']) && $this->nmgp_cmp_hidden['idgrupo_contas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idgrupo_contas']);
       $sStyleHidden_idgrupo_contas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idgrupo_contas = 'display: none;';
   $sStyleReadInp_idgrupo_contas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idgrupo_contas']) && $this->nmgp_cmp_readonly['idgrupo_contas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idgrupo_contas']);
       $sStyleReadLab_idgrupo_contas = '';
       $sStyleReadInp_idgrupo_contas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idgrupo_contas']) && $this->nmgp_cmp_hidden['idgrupo_contas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idgrupo_contas" value="<?php echo $this->form_encode_input($idgrupo_contas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idgrupo_contas_label" id="hidden_field_label_idgrupo_contas" style="<?php echo $sStyleHidden_idgrupo_contas; ?>"><span id="id_label_idgrupo_contas"><?php echo $this->nm_new_label['idgrupo_contas']; ?></span></TD>
    <TD class="scFormDataOdd css_idgrupo_contas_line" id="hidden_field_data_idgrupo_contas" style="<?php echo $sStyleHidden_idgrupo_contas; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idgrupo_contas_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idgrupo_contas"]) &&  $this->nmgp_cmp_readonly["idgrupo_contas"] == "on") { 

 ?>
<input type="hidden" name="idgrupo_contas" value="<?php echo $this->form_encode_input($idgrupo_contas) . "\">" . $idgrupo_contas . ""; ?>
<?php } else { ?>
<span id="id_read_on_idgrupo_contas" class="sc-ui-readonly-idgrupo_contas css_idgrupo_contas_line" style="<?php echo $sStyleReadLab_idgrupo_contas; ?>"><?php echo $this->form_format_readonly("idgrupo_contas", $this->form_encode_input($this->idgrupo_contas)); ?></span><span id="id_read_off_idgrupo_contas" class="css_read_off_idgrupo_contas<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_idgrupo_contas; ?>">
 <input class="sc-js-input scFormObjectOdd css_idgrupo_contas_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_idgrupo_contas" type=text name="idgrupo_contas" value="<?php echo $this->form_encode_input($idgrupo_contas) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['idgrupo_contas']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['idgrupo_contas']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['idgrupo_contas']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idgrupo_contas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idgrupo_contas_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idbaixa_conta_corrente']))
    {
        $this->nm_new_label['idbaixa_conta_corrente'] = "Idbaixa Conta Corrente";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idbaixa_conta_corrente = $this->idbaixa_conta_corrente;
   $sStyleHidden_idbaixa_conta_corrente = '';
   if (isset($this->nmgp_cmp_hidden['idbaixa_conta_corrente']) && $this->nmgp_cmp_hidden['idbaixa_conta_corrente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idbaixa_conta_corrente']);
       $sStyleHidden_idbaixa_conta_corrente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idbaixa_conta_corrente = 'display: none;';
   $sStyleReadInp_idbaixa_conta_corrente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['idbaixa_conta_corrente']) && $this->nmgp_cmp_readonly['idbaixa_conta_corrente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idbaixa_conta_corrente']);
       $sStyleReadLab_idbaixa_conta_corrente = '';
       $sStyleReadInp_idbaixa_conta_corrente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idbaixa_conta_corrente']) && $this->nmgp_cmp_hidden['idbaixa_conta_corrente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idbaixa_conta_corrente" value="<?php echo $this->form_encode_input($idbaixa_conta_corrente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_idbaixa_conta_corrente_label" id="hidden_field_label_idbaixa_conta_corrente" style="<?php echo $sStyleHidden_idbaixa_conta_corrente; ?>"><span id="id_label_idbaixa_conta_corrente"><?php echo $this->nm_new_label['idbaixa_conta_corrente']; ?></span></TD>
    <TD class="scFormDataOdd css_idbaixa_conta_corrente_line" id="hidden_field_data_idbaixa_conta_corrente" style="<?php echo $sStyleHidden_idbaixa_conta_corrente; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idbaixa_conta_corrente_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idbaixa_conta_corrente"]) &&  $this->nmgp_cmp_readonly["idbaixa_conta_corrente"] == "on") { 

 ?>
<input type="hidden" name="idbaixa_conta_corrente" value="<?php echo $this->form_encode_input($idbaixa_conta_corrente) . "\">" . $idbaixa_conta_corrente . ""; ?>
<?php } else { ?>
<span id="id_read_on_idbaixa_conta_corrente" class="sc-ui-readonly-idbaixa_conta_corrente css_idbaixa_conta_corrente_line" style="<?php echo $sStyleReadLab_idbaixa_conta_corrente; ?>"><?php echo $this->form_format_readonly("idbaixa_conta_corrente", $this->form_encode_input($this->idbaixa_conta_corrente)); ?></span><span id="id_read_off_idbaixa_conta_corrente" class="css_read_off_idbaixa_conta_corrente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_idbaixa_conta_corrente; ?>">
 <input class="sc-js-input scFormObjectOdd css_idbaixa_conta_corrente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_idbaixa_conta_corrente" type=text name="idbaixa_conta_corrente" value="<?php echo $this->form_encode_input($idbaixa_conta_corrente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['idbaixa_conta_corrente']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['idbaixa_conta_corrente']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['idbaixa_conta_corrente']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idbaixa_conta_corrente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idbaixa_conta_corrente_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valor_a_pagar']))
    {
        $this->nm_new_label['valor_a_pagar'] = "Valor A Pagar";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor_a_pagar = $this->valor_a_pagar;
   $sStyleHidden_valor_a_pagar = '';
   if (isset($this->nmgp_cmp_hidden['valor_a_pagar']) && $this->nmgp_cmp_hidden['valor_a_pagar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor_a_pagar']);
       $sStyleHidden_valor_a_pagar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor_a_pagar = 'display: none;';
   $sStyleReadInp_valor_a_pagar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valor_a_pagar']) && $this->nmgp_cmp_readonly['valor_a_pagar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor_a_pagar']);
       $sStyleReadLab_valor_a_pagar = '';
       $sStyleReadInp_valor_a_pagar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor_a_pagar']) && $this->nmgp_cmp_hidden['valor_a_pagar'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_a_pagar" value="<?php echo $this->form_encode_input($valor_a_pagar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_valor_a_pagar_label" id="hidden_field_label_valor_a_pagar" style="<?php echo $sStyleHidden_valor_a_pagar; ?>"><span id="id_label_valor_a_pagar"><?php echo $this->nm_new_label['valor_a_pagar']; ?></span></TD>
    <TD class="scFormDataOdd css_valor_a_pagar_line" id="hidden_field_data_valor_a_pagar" style="<?php echo $sStyleHidden_valor_a_pagar; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_a_pagar_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor_a_pagar"]) &&  $this->nmgp_cmp_readonly["valor_a_pagar"] == "on") { 

 ?>
<input type="hidden" name="valor_a_pagar" value="<?php echo $this->form_encode_input($valor_a_pagar) . "\">" . $valor_a_pagar . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor_a_pagar" class="sc-ui-readonly-valor_a_pagar css_valor_a_pagar_line" style="<?php echo $sStyleReadLab_valor_a_pagar; ?>"><?php echo $this->form_format_readonly("valor_a_pagar", $this->form_encode_input($this->valor_a_pagar)); ?></span><span id="id_read_off_valor_a_pagar" class="css_read_off_valor_a_pagar<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_valor_a_pagar; ?>">
 <input class="sc-js-input scFormObjectOdd css_valor_a_pagar_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_valor_a_pagar" type=text name="valor_a_pagar" value="<?php echo $this->form_encode_input($valor_a_pagar) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_a_pagar']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_a_pagar']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor_a_pagar']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor_a_pagar']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_a_pagar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_a_pagar_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valor_pago']))
    {
        $this->nm_new_label['valor_pago'] = "Valor Pago";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor_pago = $this->valor_pago;
   $sStyleHidden_valor_pago = '';
   if (isset($this->nmgp_cmp_hidden['valor_pago']) && $this->nmgp_cmp_hidden['valor_pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor_pago']);
       $sStyleHidden_valor_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor_pago = 'display: none;';
   $sStyleReadInp_valor_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valor_pago']) && $this->nmgp_cmp_readonly['valor_pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor_pago']);
       $sStyleReadLab_valor_pago = '';
       $sStyleReadInp_valor_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor_pago']) && $this->nmgp_cmp_hidden['valor_pago'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_pago" value="<?php echo $this->form_encode_input($valor_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_valor_pago_label" id="hidden_field_label_valor_pago" style="<?php echo $sStyleHidden_valor_pago; ?>"><span id="id_label_valor_pago"><?php echo $this->nm_new_label['valor_pago']; ?></span></TD>
    <TD class="scFormDataOdd css_valor_pago_line" id="hidden_field_data_valor_pago" style="<?php echo $sStyleHidden_valor_pago; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_pago_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor_pago"]) &&  $this->nmgp_cmp_readonly["valor_pago"] == "on") { 

 ?>
<input type="hidden" name="valor_pago" value="<?php echo $this->form_encode_input($valor_pago) . "\">" . $valor_pago . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor_pago" class="sc-ui-readonly-valor_pago css_valor_pago_line" style="<?php echo $sStyleReadLab_valor_pago; ?>"><?php echo $this->form_format_readonly("valor_pago", $this->form_encode_input($this->valor_pago)); ?></span><span id="id_read_off_valor_pago" class="css_read_off_valor_pago<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_valor_pago; ?>">
 <input class="sc-js-input scFormObjectOdd css_valor_pago_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_valor_pago" type=text name="valor_pago" value="<?php echo $this->form_encode_input($valor_pago) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_pago']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_pago']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor_pago']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor_pago']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_pago_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_vencimanto']))
    {
        $this->nm_new_label['data_vencimanto'] = "Data Vencimanto";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_data_vencimanto = $this->data_vencimanto;
   if (strlen($this->data_vencimanto_hora) > 8 ) {$this->data_vencimanto_hora = substr($this->data_vencimanto_hora, 0, 8);}
   $this->data_vencimanto .= ' ' . $this->data_vencimanto_hora;
   $this->data_vencimanto  = trim($this->data_vencimanto);
   $data_vencimanto = $this->data_vencimanto;
   $sStyleHidden_data_vencimanto = '';
   if (isset($this->nmgp_cmp_hidden['data_vencimanto']) && $this->nmgp_cmp_hidden['data_vencimanto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_vencimanto']);
       $sStyleHidden_data_vencimanto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_vencimanto = 'display: none;';
   $sStyleReadInp_data_vencimanto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_vencimanto']) && $this->nmgp_cmp_readonly['data_vencimanto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_vencimanto']);
       $sStyleReadLab_data_vencimanto = '';
       $sStyleReadInp_data_vencimanto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_vencimanto']) && $this->nmgp_cmp_hidden['data_vencimanto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_vencimanto" value="<?php echo $this->form_encode_input($data_vencimanto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_data_vencimanto_label" id="hidden_field_label_data_vencimanto" style="<?php echo $sStyleHidden_data_vencimanto; ?>"><span id="id_label_data_vencimanto"><?php echo $this->nm_new_label['data_vencimanto']; ?></span></TD>
    <TD class="scFormDataOdd css_data_vencimanto_line" id="hidden_field_data_data_vencimanto" style="<?php echo $sStyleHidden_data_vencimanto; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_vencimanto_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_vencimanto"]) &&  $this->nmgp_cmp_readonly["data_vencimanto"] == "on") { 

 ?>
<input type="hidden" name="data_vencimanto" value="<?php echo $this->form_encode_input($data_vencimanto) . "\">" . $data_vencimanto . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_vencimanto" class="sc-ui-readonly-data_vencimanto css_data_vencimanto_line" style="<?php echo $sStyleReadLab_data_vencimanto; ?>"><?php echo $this->form_format_readonly("data_vencimanto", $this->form_encode_input($data_vencimanto)); ?></span><span id="id_read_off_data_vencimanto" class="css_read_off_data_vencimanto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_vencimanto; ?>"><?php
$tmp_form_data = $this->field_config['data_vencimanto']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>

 <input class="sc-js-input scFormObjectOdd css_data_vencimanto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_vencimanto" type=text name="data_vencimanto" value="<?php echo $this->form_encode_input($data_vencimanto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=18"; } ?> alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['data_vencimanto']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_vencimanto']['date_format']; ?>', timeSep: '<?php echo $this->field_config['data_vencimanto']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_vencimanto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_vencimanto_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->data_vencimanto = $old_dt_data_vencimanto;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nota_fiscal']))
    {
        $this->nm_new_label['nota_fiscal'] = "Nota Fiscal";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nota_fiscal = $this->nota_fiscal;
   $sStyleHidden_nota_fiscal = '';
   if (isset($this->nmgp_cmp_hidden['nota_fiscal']) && $this->nmgp_cmp_hidden['nota_fiscal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nota_fiscal']);
       $sStyleHidden_nota_fiscal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nota_fiscal = 'display: none;';
   $sStyleReadInp_nota_fiscal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nota_fiscal']) && $this->nmgp_cmp_readonly['nota_fiscal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nota_fiscal']);
       $sStyleReadLab_nota_fiscal = '';
       $sStyleReadInp_nota_fiscal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nota_fiscal']) && $this->nmgp_cmp_hidden['nota_fiscal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nota_fiscal" value="<?php echo $this->form_encode_input($nota_fiscal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_nota_fiscal_label" id="hidden_field_label_nota_fiscal" style="<?php echo $sStyleHidden_nota_fiscal; ?>"><span id="id_label_nota_fiscal"><?php echo $this->nm_new_label['nota_fiscal']; ?></span></TD>
    <TD class="scFormDataOdd css_nota_fiscal_line" id="hidden_field_data_nota_fiscal" style="<?php echo $sStyleHidden_nota_fiscal; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_nota_fiscal_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nota_fiscal"]) &&  $this->nmgp_cmp_readonly["nota_fiscal"] == "on") { 

 ?>
<input type="hidden" name="nota_fiscal" value="<?php echo $this->form_encode_input($nota_fiscal) . "\">" . $nota_fiscal . ""; ?>
<?php } else { ?>
<span id="id_read_on_nota_fiscal" class="sc-ui-readonly-nota_fiscal css_nota_fiscal_line" style="<?php echo $sStyleReadLab_nota_fiscal; ?>"><?php echo $this->form_format_readonly("nota_fiscal", $this->form_encode_input($this->nota_fiscal)); ?></span><span id="id_read_off_nota_fiscal" class="css_read_off_nota_fiscal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nota_fiscal; ?>">
 <input class="sc-js-input scFormObjectOdd css_nota_fiscal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nota_fiscal" type=text name="nota_fiscal" value="<?php echo $this->form_encode_input($nota_fiscal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['nota_fiscal']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['nota_fiscal']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['nota_fiscal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nota_fiscal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nota_fiscal_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['observacao']))
    {
        $this->nm_new_label['observacao'] = "Observacao";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $observacao = $this->observacao;
   $sStyleHidden_observacao = '';
   if (isset($this->nmgp_cmp_hidden['observacao']) && $this->nmgp_cmp_hidden['observacao'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['observacao']);
       $sStyleHidden_observacao = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_observacao = 'display: none;';
   $sStyleReadInp_observacao = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['observacao']) && $this->nmgp_cmp_readonly['observacao'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['observacao']);
       $sStyleReadLab_observacao = '';
       $sStyleReadInp_observacao = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['observacao']) && $this->nmgp_cmp_hidden['observacao'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="observacao" value="<?php echo $this->form_encode_input($observacao) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_observacao_label" id="hidden_field_label_observacao" style="<?php echo $sStyleHidden_observacao; ?>"><span id="id_label_observacao"><?php echo $this->nm_new_label['observacao']; ?></span></TD>
    <TD class="scFormDataOdd css_observacao_line" id="hidden_field_data_observacao" style="<?php echo $sStyleHidden_observacao; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_observacao_line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_observacao" => $out_observacao); ?><script>var var_ajax_img_observacao = '<?php echo $out_observacao; ?>';</script><input type="hidden" name="temp_out_observacao" value="<?php echo $this->form_encode_input($out_observacao); ?>" /><?php if (!empty($out_observacao)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_observacao, '" . $this->nmgp_return_img['observacao'][0] . "', '" . $this->nmgp_return_img['observacao'][1] . "')\"><img id=\"id_ajax_img_observacao\"  border=\"0\" src=\"$out_observacao\"></a>"; } else {  echo "<img id=\"id_ajax_img_observacao\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["observacao"]) &&  $this->nmgp_cmp_readonly["observacao"] == "on") { 

 ?>
<img id=\"observacao_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="observacao" value="<?php echo $this->form_encode_input($observacao) . "\">" . $observacao . ""; ?>
<?php } else { ?>
<span id="id_read_off_observacao" class="css_read_off_observacao<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_observacao; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-observacao" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOdd css_observacao_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" title="<?php echo $this->Ini->Nm_lang['lang_select_file'] ?>" type="file" name="observacao[]" id="id_sc_field_observacao" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<?php
   $sCheckInsert = "";
?>
<span id="chk_ajax_img_observacao"<?php if ($this->nmgp_opcao == "novo" || empty($observacao)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="observacao_limpa" value="<?php echo $observacao_limpa . '" '; if ($observacao_limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};<?php echo $sCheckInsert ?>"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="observacao_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_observacao" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_observacao" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
<div id="id_sc_dragdrop_observacao" class="scFormDataDragNDrop"  style="<?php echo $sStyleReadInp_observacao ?>"><i class='fas fa-cloud-upload-alt'></i><br/>
<?php echo $this->Ini->Nm_lang['lang_errm_mu_dragimg'] ?></div>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_observacao_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_observacao_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_pagamento']))
    {
        $this->nm_new_label['data_pagamento'] = "Data Pagamento";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_data_pagamento = $this->data_pagamento;
   if (strlen($this->data_pagamento_hora) > 8 ) {$this->data_pagamento_hora = substr($this->data_pagamento_hora, 0, 8);}
   $this->data_pagamento .= ' ' . $this->data_pagamento_hora;
   $this->data_pagamento  = trim($this->data_pagamento);
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

    <TD class="scFormLabelOdd scUiLabelWidthFix css_data_pagamento_label" id="hidden_field_label_data_pagamento" style="<?php echo $sStyleHidden_data_pagamento; ?>"><span id="id_label_data_pagamento"><?php echo $this->nm_new_label['data_pagamento']; ?></span></TD>
    <TD class="scFormDataOdd css_data_pagamento_line" id="hidden_field_data_data_pagamento" style="<?php echo $sStyleHidden_data_pagamento; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_pagamento_line" style="vertical-align: top;padding: 0px">
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

 <input class="sc-js-input scFormObjectOdd css_data_pagamento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_pagamento" type=text name="data_pagamento" value="<?php echo $this->form_encode_input($data_pagamento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=18"; } ?> alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['data_pagamento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_pagamento']['date_format']; ?>', timeSep: '<?php echo $this->field_config['data_pagamento']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_pagamento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_pagamento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>
<?php
   $this->data_pagamento = $old_dt_data_pagamento;
?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
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
<?php
      $Tzone = ini_get('date.timezone');
      if (empty($Tzone))
      {
?>
<script> 
  _scAjaxShowMessage({title: '', message: "<?php echo $this->Ini->Nm_lang['lang_errm_tz']; ?>", isModal: false, timeout: 0, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: true, showBodyIcon: false, isToast: false, toastPos: ""});
</script> 
<?php
      }
?>
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_contas_pagas");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_contas_pagas");
 parent.scAjaxDetailHeight("form_contas_pagas", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_contas_pagas", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_contas_pagas", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['sc_modal'])
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
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-1").length && $("#sc_b_upd_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-2").length && $("#sc_b_sai_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
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
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['buttonStatus'] = $this->nmgp_botoes;
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
