<?php
class nfce_detalhe_form extends nfce_detalhe_apl
{
function Form_Init()
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
?>
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_titl'] . " - erp_nfce0"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_titl'] . " - erp_nfce0"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
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
<?php
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['sc_redir_atualiz'] == 'ok')
{
?>
  var sc_closeChange = true;
<?php
}
else
{
?>
  var sc_closeChange = false;
<?php
}
?>
 </SCRIPT>
        <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
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
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['embutida_pdf']))
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
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>nfce_detalhe/nfce_detalhe_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("nfce_detalhe_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['last'] : 'off'); ?>";
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
<?php

include_once('nfce_detalhe_jquery.php');

?>

 var Dyn_Ini  = true;
 $(function() {


  scJQGeneralAdd();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

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
$str_iframe_body = 'margin-top: 0px;';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['link_info']['remove_border']) {
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
 include_once("nfce_detalhe_js0.php");
?>
<script type="text/javascript"> 
nmdg_enter_tab = true;
  sc_quant_excl = <?php if (!isset($sc_check_excl)) {$sc_check_excl = array();} echo count($sc_check_excl); ?>; 
  <?php if (!isset($sc_check_incl)) {$sc_check_incl = array();}?>; 
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
               action="./" 
               onsubmit="return false;" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
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
<?php
$_SESSION['scriptcase']['error_span_title']['nfce_detalhe'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['nfce_detalhe'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="100%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_iframe'] != "R")
{
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ('total' != $this->form_paginacao)) {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai_modal()", "scBtnFn_sys_format_sai_modal()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_iframe'] != "R")
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
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['empty_filter'] = true;
       }
       echo "<tr><td>";
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
     <div id="SC_tab_mult_reg">
<?php
}

function Form_Table($Table_refresh = false)
{
   global $sc_seq_vert, $nm_apl_dependente, $opcao_botoes, $nm_url_saida; 
   if ($Table_refresh) 
   { 
       ob_start();
   }
?>
<?php
   if (!isset($this->nmgp_cmp_hidden['iditens_orcamento_']))
   {
       $this->nmgp_cmp_hidden['iditens_orcamento_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
$labelRowCount = 0;
?>
   <tr class="sc-ui-header-row" id="sc-id-fixed-headers-row-<?php echo $labelRowCount++ ?>">
<?php
$orderColName = '';
$orderColOrient = '';
$orderColRule = '';
?>
    <script type="text/javascript">
     var orderImgAsc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc ?>";
     var orderImgDesc = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc ?>";
     var orderImgNone = "<?php echo $this->Ini->path_img_global . "/" . $this->Ini->Label_sort ?>";
     var orderColName = "";
     function scSetOrderColumn(clickedColumn) {
      $(".sc-ui-img-order-column").attr("src", orderImgNone);
      if (clickedColumn != orderColName) {
       orderColName = clickedColumn;
       orderColOrient = orderImgAsc;
      }
      else if ("" != orderColName) {
       orderColOrient = orderColOrient == orderImgAsc ? orderImgDesc : orderImgAsc;
      }
      else {
       orderColName = "";
       orderColOrient = "";
      }
      $("#sc-id-img-order-" + orderColName).attr("src", orderColOrient);
     }
    </script>
<?php
     $Col_span = "";


    ?>

    <TD class="scFormLabelOddMult sc-col-title" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="<?php echo '' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="<?php echo '' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php
    $sStyleHidden_idproduto_ = '';
    if (isset($this->nmgp_cmp_hidden['idproduto_']) && $this->nmgp_cmp_hidden['idproduto_'] == 'off') {
        $sStyleHidden_idproduto_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['idproduto_']) || $this->nmgp_cmp_hidden['idproduto_'] == 'on') {
        if (!isset($this->nm_new_label['idproduto_'])) {
            $this->nm_new_label['idproduto_'] = "Idproduto";
        }
        $SC_Label = "" . $this->nm_new_label['idproduto_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("idproduto", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("idproduto", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'idproduto')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_idproduto__label sc-col-title" id="hidden_field_label_idproduto_" style="<?php echo $sStyleHidden_idproduto_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_quantidade_ = '';
    if (isset($this->nmgp_cmp_hidden['quantidade_']) && $this->nmgp_cmp_hidden['quantidade_'] == 'off') {
        $sStyleHidden_quantidade_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['quantidade_']) || $this->nmgp_cmp_hidden['quantidade_'] == 'on') {
        if (!isset($this->nm_new_label['quantidade_'])) {
            $this->nm_new_label['quantidade_'] = "Qtde";
        }
        $SC_Label = "" . $this->nm_new_label['quantidade_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_quantidade__label sc-col-title" id="hidden_field_label_quantidade_" style="<?php echo $sStyleHidden_quantidade_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_descricao_ = '';
    if (isset($this->nmgp_cmp_hidden['descricao_']) && $this->nmgp_cmp_hidden['descricao_'] == 'off') {
        $sStyleHidden_descricao_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['descricao_']) || $this->nmgp_cmp_hidden['descricao_'] == 'on') {
        if (!isset($this->nm_new_label['descricao_'])) {
            $this->nm_new_label['descricao_'] = "Descricao";
        }
        $SC_Label = "" . $this->nm_new_label['descricao_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("descricao", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("descricao", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'descricao')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_descricao__label sc-col-title" id="hidden_field_label_descricao_" style="<?php echo $sStyleHidden_descricao_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_qtde_ = '';
    if (isset($this->nmgp_cmp_hidden['qtde_']) && $this->nmgp_cmp_hidden['qtde_'] == 'off') {
        $sStyleHidden_qtde_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['qtde_']) || $this->nmgp_cmp_hidden['qtde_'] == 'on') {
        if (!isset($this->nm_new_label['qtde_'])) {
            $this->nm_new_label['qtde_'] = "Quantidade";
        }
        $SC_Label = "" . $this->nm_new_label['qtde_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_qtde__label sc-col-title" id="hidden_field_label_qtde_" style="<?php echo $sStyleHidden_qtde_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_valor_unitario_ = '';
    if (isset($this->nmgp_cmp_hidden['valor_unitario_']) && $this->nmgp_cmp_hidden['valor_unitario_'] == 'off') {
        $sStyleHidden_valor_unitario_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['valor_unitario_']) || $this->nmgp_cmp_hidden['valor_unitario_'] == 'on') {
        if (!isset($this->nm_new_label['valor_unitario_'])) {
            $this->nm_new_label['valor_unitario_'] = "Valor Unitario";
        }
        $SC_Label = "" . $this->nm_new_label['valor_unitario_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("valor_unitario", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("valor_unitario", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'valor_unitario')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_valor_unitario__label sc-col-title" id="hidden_field_label_valor_unitario_" style="<?php echo $sStyleHidden_valor_unitario_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_valor_total_ = '';
    if (isset($this->nmgp_cmp_hidden['valor_total_']) && $this->nmgp_cmp_hidden['valor_total_'] == 'off') {
        $sStyleHidden_valor_total_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['valor_total_']) || $this->nmgp_cmp_hidden['valor_total_'] == 'on') {
        if (!isset($this->nm_new_label['valor_total_'])) {
            $this->nm_new_label['valor_total_'] = "Valor Total";
        }
        $SC_Label = "" . $this->nm_new_label['valor_total_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("valor_total", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("valor_total", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'valor_total')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_valor_total__label sc-col-title" id="hidden_field_label_valor_total_" style="<?php echo $sStyleHidden_valor_total_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_unidade_ = '';
    if (isset($this->nmgp_cmp_hidden['unidade_']) && $this->nmgp_cmp_hidden['unidade_'] == 'off') {
        $sStyleHidden_unidade_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['unidade_']) || $this->nmgp_cmp_hidden['unidade_'] == 'on') {
        if (!isset($this->nm_new_label['unidade_'])) {
            $this->nm_new_label['unidade_'] = "Und";
        }
        $SC_Label = "" . $this->nm_new_label['unidade_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_labelContent = $label_fieldName;
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_unidade__label sc-col-title" id="hidden_field_label_unidade_" style="<?php echo $sStyleHidden_unidade_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_iditens_orcamento_ = '';
    if (isset($this->nmgp_cmp_hidden['iditens_orcamento_']) && $this->nmgp_cmp_hidden['iditens_orcamento_'] == 'off') {
        $sStyleHidden_iditens_orcamento_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['iditens_orcamento_']) || $this->nmgp_cmp_hidden['iditens_orcamento_'] == 'on') {
        if (!isset($this->nm_new_label['iditens_orcamento_'])) {
            $this->nm_new_label['iditens_orcamento_'] = "Iditens Orcamento";
        }
        $SC_Label = "" . $this->nm_new_label['iditens_orcamento_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $label_fieldName .= "&nbsp;<span class=\"scFormRequiredOddMult\">*</span>&nbsp;";
        $fieldSortRule = $this->scGetColumnOrderRule("iditens_orcamento", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("iditens_orcamento", $fieldSortRule);

        if (empty($this->Ini->Label_sort_pos)) {
            $this->Ini->Label_sort_pos = "right_field";
        }

        if (empty($fieldSortIcon)) {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\"><div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_field') {
            $label_labelContent = "<div style=\"display: flex" . $divLabelStyle . "\">" . $fieldSortIcon . "\<div style=\"display: flex; white-space: nowrap\">" . $label_fieldName . "</div></div>";
        } elseif ($this->Ini->Label_sort_pos == 'right_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\"><div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>" . $fieldSortIcon . "</div>";
        } elseif ($this->Ini->Label_sort_pos == 'left_cell') {
            $label_labelContent = "<div style=\"display: flex; justify-content: space-between\">" . $fieldSortIcon . "<div style=\"display: flex; flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div></div>";
        } else {
            $label_labelContent = "<div style=\"flex-grow: 1; white-space: nowrap" . $divLabelStyle . "\">" . $label_fieldName . "</div>";
        }
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'iditens_orcamento')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo '' ?>scFormLabelOddMult css_iditens_orcamento__label sc-col-title" id="hidden_field_label_iditens_orcamento_" style="<?php echo $sStyleHidden_iditens_orcamento_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>





    <script type="text/javascript">
     var orderColOrient = "<?php echo $orderColOrient ?>";
     orderColRule = "<?php echo $orderColRule ?>";
     scSetOrderColumn("<?php echo $orderColName ?>");
    </script>
   </tr>
<?php   
} 
function Form_Corpo($Line_Add = false, $Table_refresh = false) 
{ 
   global $sc_seq_vert, $sc_check_incl, $sc_check_excl; 
   $sc_hidden_no = 1; $sc_hidden_yes = 0;
   if ($Line_Add) 
   { 
       ob_start();
       $iStart = sizeof($this->form_vert_nfce_detalhe);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_nfce_detalhe = $this->form_vert_nfce_detalhe;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_nfce_detalhe))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['iditens_orcamento_']))
           {
               $this->nmgp_cmp_readonly['iditens_orcamento_'] = 'on';
           }
   foreach ($this->form_vert_nfce_detalhe as $sc_seq_vert => $sc_lixo)
   {
       $this->form_fixed_column_no = 0;
       $this->loadRecordState($sc_seq_vert);
       $this->idorcamento_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['idorcamento_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['idproduto_'] = true;
           $this->nmgp_cmp_readonly['quantidade_'] = true;
           $this->nmgp_cmp_readonly['descricao_'] = true;
           $this->nmgp_cmp_readonly['qtde_'] = true;
           $this->nmgp_cmp_readonly['valor_unitario_'] = true;
           $this->nmgp_cmp_readonly['valor_total_'] = true;
           $this->nmgp_cmp_readonly['unidade_'] = true;
           $this->nmgp_cmp_readonly['iditens_orcamento_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['idproduto_']) || $this->nmgp_cmp_readonly['idproduto_'] != "on") {$this->nmgp_cmp_readonly['idproduto_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['quantidade_']) || $this->nmgp_cmp_readonly['quantidade_'] != "on") {$this->nmgp_cmp_readonly['quantidade_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['descricao_']) || $this->nmgp_cmp_readonly['descricao_'] != "on") {$this->nmgp_cmp_readonly['descricao_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['qtde_']) || $this->nmgp_cmp_readonly['qtde_'] != "on") {$this->nmgp_cmp_readonly['qtde_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['valor_unitario_']) || $this->nmgp_cmp_readonly['valor_unitario_'] != "on") {$this->nmgp_cmp_readonly['valor_unitario_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['valor_total_']) || $this->nmgp_cmp_readonly['valor_total_'] != "on") {$this->nmgp_cmp_readonly['valor_total_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['unidade_']) || $this->nmgp_cmp_readonly['unidade_'] != "on") {$this->nmgp_cmp_readonly['unidade_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['iditens_orcamento_']) || $this->nmgp_cmp_readonly['iditens_orcamento_'] != "on") {$this->nmgp_cmp_readonly['iditens_orcamento_'] = false;}
       }
            if (isset($this->form_vert_form_preenchimento[$sc_seq_vert])) {
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
            }
        $this->idproduto_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['idproduto_']; 
       $idproduto_ = $this->idproduto_; 
       $sStyleHidden_idproduto_ = '';
       if (isset($sCheckRead_idproduto_))
       {
           unset($sCheckRead_idproduto_);
       }
       if (isset($this->nmgp_cmp_readonly['idproduto_']))
       {
           $sCheckRead_idproduto_ = $this->nmgp_cmp_readonly['idproduto_'];
       }
       if (isset($this->nmgp_cmp_hidden['idproduto_']) && $this->nmgp_cmp_hidden['idproduto_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['idproduto_']);
           $sStyleHidden_idproduto_ = 'display: none;';
       }
       $bTestReadOnly_idproduto_ = true;
       $sStyleReadLab_idproduto_ = 'display: none;';
       $sStyleReadInp_idproduto_ = '';
       if (isset($this->nmgp_cmp_readonly['idproduto_']) && $this->nmgp_cmp_readonly['idproduto_'] == 'on')
       {
           $bTestReadOnly_idproduto_ = false;
           unset($this->nmgp_cmp_readonly['idproduto_']);
           $sStyleReadLab_idproduto_ = '';
           $sStyleReadInp_idproduto_ = 'display: none;';
       }
       $this->quantidade_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['quantidade_']; 
       $quantidade_ = $this->quantidade_; 
       $sStyleHidden_quantidade_ = '';
       if (isset($sCheckRead_quantidade_))
       {
           unset($sCheckRead_quantidade_);
       }
       if (isset($this->nmgp_cmp_readonly['quantidade_']))
       {
           $sCheckRead_quantidade_ = $this->nmgp_cmp_readonly['quantidade_'];
       }
       if (isset($this->nmgp_cmp_hidden['quantidade_']) && $this->nmgp_cmp_hidden['quantidade_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['quantidade_']);
           $sStyleHidden_quantidade_ = 'display: none;';
       }
       $bTestReadOnly_quantidade_ = true;
       $sStyleReadLab_quantidade_ = 'display: none;';
       $sStyleReadInp_quantidade_ = '';
       if (isset($this->nmgp_cmp_readonly['quantidade_']) && $this->nmgp_cmp_readonly['quantidade_'] == 'on')
       {
           $bTestReadOnly_quantidade_ = false;
           unset($this->nmgp_cmp_readonly['quantidade_']);
           $sStyleReadLab_quantidade_ = '';
           $sStyleReadInp_quantidade_ = 'display: none;';
       }
       $this->descricao_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['descricao_']; 
       $descricao_ = $this->descricao_; 
       $sStyleHidden_descricao_ = '';
       if (isset($sCheckRead_descricao_))
       {
           unset($sCheckRead_descricao_);
       }
       if (isset($this->nmgp_cmp_readonly['descricao_']))
       {
           $sCheckRead_descricao_ = $this->nmgp_cmp_readonly['descricao_'];
       }
       if (isset($this->nmgp_cmp_hidden['descricao_']) && $this->nmgp_cmp_hidden['descricao_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['descricao_']);
           $sStyleHidden_descricao_ = 'display: none;';
       }
       $bTestReadOnly_descricao_ = true;
       $sStyleReadLab_descricao_ = 'display: none;';
       $sStyleReadInp_descricao_ = '';
       if (isset($this->nmgp_cmp_readonly['descricao_']) && $this->nmgp_cmp_readonly['descricao_'] == 'on')
       {
           $bTestReadOnly_descricao_ = false;
           unset($this->nmgp_cmp_readonly['descricao_']);
           $sStyleReadLab_descricao_ = '';
           $sStyleReadInp_descricao_ = 'display: none;';
       }
       $this->qtde_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['qtde_']; 
       $qtde_ = $this->qtde_; 
       $sStyleHidden_qtde_ = '';
       if (isset($sCheckRead_qtde_))
       {
           unset($sCheckRead_qtde_);
       }
       if (isset($this->nmgp_cmp_readonly['qtde_']))
       {
           $sCheckRead_qtde_ = $this->nmgp_cmp_readonly['qtde_'];
       }
       if (isset($this->nmgp_cmp_hidden['qtde_']) && $this->nmgp_cmp_hidden['qtde_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['qtde_']);
           $sStyleHidden_qtde_ = 'display: none;';
       }
       $bTestReadOnly_qtde_ = true;
       $sStyleReadLab_qtde_ = 'display: none;';
       $sStyleReadInp_qtde_ = '';
       if (isset($this->nmgp_cmp_readonly['qtde_']) && $this->nmgp_cmp_readonly['qtde_'] == 'on')
       {
           $bTestReadOnly_qtde_ = false;
           unset($this->nmgp_cmp_readonly['qtde_']);
           $sStyleReadLab_qtde_ = '';
           $sStyleReadInp_qtde_ = 'display: none;';
       }
       $this->valor_unitario_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['valor_unitario_']; 
       $valor_unitario_ = $this->valor_unitario_; 
       $sStyleHidden_valor_unitario_ = '';
       if (isset($sCheckRead_valor_unitario_))
       {
           unset($sCheckRead_valor_unitario_);
       }
       if (isset($this->nmgp_cmp_readonly['valor_unitario_']))
       {
           $sCheckRead_valor_unitario_ = $this->nmgp_cmp_readonly['valor_unitario_'];
       }
       if (isset($this->nmgp_cmp_hidden['valor_unitario_']) && $this->nmgp_cmp_hidden['valor_unitario_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['valor_unitario_']);
           $sStyleHidden_valor_unitario_ = 'display: none;';
       }
       $bTestReadOnly_valor_unitario_ = true;
       $sStyleReadLab_valor_unitario_ = 'display: none;';
       $sStyleReadInp_valor_unitario_ = '';
       if (isset($this->nmgp_cmp_readonly['valor_unitario_']) && $this->nmgp_cmp_readonly['valor_unitario_'] == 'on')
       {
           $bTestReadOnly_valor_unitario_ = false;
           unset($this->nmgp_cmp_readonly['valor_unitario_']);
           $sStyleReadLab_valor_unitario_ = '';
           $sStyleReadInp_valor_unitario_ = 'display: none;';
       }
       $this->valor_total_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['valor_total_']; 
       $valor_total_ = $this->valor_total_; 
       $sStyleHidden_valor_total_ = '';
       if (isset($sCheckRead_valor_total_))
       {
           unset($sCheckRead_valor_total_);
       }
       if (isset($this->nmgp_cmp_readonly['valor_total_']))
       {
           $sCheckRead_valor_total_ = $this->nmgp_cmp_readonly['valor_total_'];
       }
       if (isset($this->nmgp_cmp_hidden['valor_total_']) && $this->nmgp_cmp_hidden['valor_total_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['valor_total_']);
           $sStyleHidden_valor_total_ = 'display: none;';
       }
       $bTestReadOnly_valor_total_ = true;
       $sStyleReadLab_valor_total_ = 'display: none;';
       $sStyleReadInp_valor_total_ = '';
       if (isset($this->nmgp_cmp_readonly['valor_total_']) && $this->nmgp_cmp_readonly['valor_total_'] == 'on')
       {
           $bTestReadOnly_valor_total_ = false;
           unset($this->nmgp_cmp_readonly['valor_total_']);
           $sStyleReadLab_valor_total_ = '';
           $sStyleReadInp_valor_total_ = 'display: none;';
       }
       $this->unidade_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['unidade_']; 
       $unidade_ = $this->unidade_; 
       $sStyleHidden_unidade_ = '';
       if (isset($sCheckRead_unidade_))
       {
           unset($sCheckRead_unidade_);
       }
       if (isset($this->nmgp_cmp_readonly['unidade_']))
       {
           $sCheckRead_unidade_ = $this->nmgp_cmp_readonly['unidade_'];
       }
       if (isset($this->nmgp_cmp_hidden['unidade_']) && $this->nmgp_cmp_hidden['unidade_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['unidade_']);
           $sStyleHidden_unidade_ = 'display: none;';
       }
       $bTestReadOnly_unidade_ = true;
       $sStyleReadLab_unidade_ = 'display: none;';
       $sStyleReadInp_unidade_ = '';
       if (isset($this->nmgp_cmp_readonly['unidade_']) && $this->nmgp_cmp_readonly['unidade_'] == 'on')
       {
           $bTestReadOnly_unidade_ = false;
           unset($this->nmgp_cmp_readonly['unidade_']);
           $sStyleReadLab_unidade_ = '';
           $sStyleReadInp_unidade_ = 'display: none;';
       }
       $this->iditens_orcamento_ = $this->form_vert_nfce_detalhe[$sc_seq_vert]['iditens_orcamento_']; 
       $iditens_orcamento_ = $this->iditens_orcamento_; 
       if (!isset($this->nmgp_cmp_hidden['iditens_orcamento_']))
       {
           $this->nmgp_cmp_hidden['iditens_orcamento_'] = 'off';
       }
       $sStyleHidden_iditens_orcamento_ = '';
       if (isset($sCheckRead_iditens_orcamento_))
       {
           unset($sCheckRead_iditens_orcamento_);
       }
       if (isset($this->nmgp_cmp_readonly['iditens_orcamento_']))
       {
           $sCheckRead_iditens_orcamento_ = $this->nmgp_cmp_readonly['iditens_orcamento_'];
       }
       if (isset($this->nmgp_cmp_hidden['iditens_orcamento_']) && $this->nmgp_cmp_hidden['iditens_orcamento_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['iditens_orcamento_']);
           $sStyleHidden_iditens_orcamento_ = 'display: none;';
       }
       $bTestReadOnly_iditens_orcamento_ = true;
       $sStyleReadLab_iditens_orcamento_ = 'display: none;';
       $sStyleReadInp_iditens_orcamento_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["iditens_orcamento_"]) &&  $this->nmgp_cmp_readonly["iditens_orcamento_"] == "on"))
       {
           $bTestReadOnly_iditens_orcamento_ = false;
           unset($this->nmgp_cmp_readonly['iditens_orcamento_']);
           $sStyleReadLab_iditens_orcamento_ = '';
           $sStyleReadInp_iditens_orcamento_ = 'display: none;';
       }

       $nm_cor_fun_vert = (isset($nm_cor_fun_vert) && $nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = (isset($nm_img_fun_cel)  && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?> class="sc-row" data-sc-row-number="<?php echo $sc_seq_vert; ?>">


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if ($this->Embutida_form) {?>
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_actions<?php echo $sc_seq_vert; ?>" NOWRAP> <?php if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['delete'] == "off") {
        $sDisplayDelete = 'display: none';
    }
    else {
        $sDisplayDelete = '';
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayDelete. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php
if ($this->nmgp_opcao != "novo") {
    if ($this->nmgp_botoes['update'] == "off") {
        $sDisplayUpdate = 'display: none';
    }
    else {
        $sDisplayUpdate = '';
    }
    if ($this->Embutida_ronly) {
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "" . $sDisplayUpdate. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
        $sButDisp = 'display: none';
    }
    else
    {
        $sButDisp = $sDisplayUpdate;
    }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "" . $sButDisp. "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php
}
?>

<?php if ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_opcao == "novo") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_incluir", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('incluir', " . $sc_seq_vert . ")", "sc_ins_line_" . $sc_seq_vert . "", "", "", "display: ''", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php if ($this->nmgp_botoes['delete'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_excluir", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "nm_atualiza_line('excluir', " . $sc_seq_vert . ")", "sc_exc_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($Line_Add && $this->Embutida_ronly) {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_edit", "mdOpenLine(" . $sc_seq_vert . ")", "mdOpenLine(" . $sc_seq_vert . ")", "sc_open_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>

<?php if ($this->nmgp_botoes['update'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_alterar", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "findPos(this); nm_atualiza_line('alterar', " . $sc_seq_vert . ")", "sc_upd_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php }?>
<?php if ($this->nmgp_botoes['insert'] == "on") {?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_nfce_detalhe_add_new_line(" . $sc_seq_vert . ")", "do_ajax_nfce_detalhe_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_nfce_detalhe_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_nfce_detalhe_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_nfce_detalhe_cancel_update(" . $sc_seq_vert . ")", "do_ajax_nfce_detalhe_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['idproduto_']) && $this->nmgp_cmp_hidden['idproduto_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idproduto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idproduto_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_idproduto__line" id="hidden_field_data_idproduto_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_idproduto_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_idproduto__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_idproduto_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idproduto_"]) &&  $this->nmgp_cmp_readonly["idproduto_"] == "on") { 

 ?>
<input type="hidden" name="idproduto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idproduto_) . "\">" . $idproduto_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_idproduto_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-idproduto_<?php echo $sc_seq_vert ?> css_idproduto__line" style="<?php echo $sStyleReadLab_idproduto_; ?>"><?php echo $this->form_format_readonly("idproduto_", $this->form_encode_input($this->idproduto_)); ?></span><span id="id_read_off_idproduto_<?php echo $sc_seq_vert ?>" class="css_read_off_idproduto_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_idproduto_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_idproduto__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_idproduto_<?php echo $sc_seq_vert ?>" type=text name="idproduto_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idproduto_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['idproduto_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['idproduto_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['idproduto_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idproduto_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idproduto_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['quantidade_']) && $this->nmgp_cmp_hidden['quantidade_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="quantidade_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($quantidade_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_quantidade__line" id="hidden_field_data_quantidade_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_quantidade_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_quantidade__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_quantidade_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["quantidade_"]) &&  $this->nmgp_cmp_readonly["quantidade_"] == "on") { 

 ?>
<input type="hidden" name="quantidade_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($quantidade_) . "\">" . $quantidade_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_quantidade_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-quantidade_<?php echo $sc_seq_vert ?> css_quantidade__line" style="<?php echo $sStyleReadLab_quantidade_; ?>"><?php echo $this->form_format_readonly("quantidade_", $this->form_encode_input($this->quantidade_)); ?></span><span id="id_read_off_quantidade_<?php echo $sc_seq_vert ?>" class="css_read_off_quantidade_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_quantidade_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_quantidade__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_quantidade_<?php echo $sc_seq_vert ?>" type=text name="quantidade_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($quantidade_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=7"; } ?> alt="{datatype: 'decimal', maxLength: 7, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['quantidade_']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['quantidade_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['quantidade_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['quantidade_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_quantidade_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_quantidade_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['descricao_']) && $this->nmgp_cmp_hidden['descricao_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="descricao_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($descricao_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_descricao__line" id="hidden_field_data_descricao_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_descricao_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_descricao__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_descricao_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["descricao_"]) &&  $this->nmgp_cmp_readonly["descricao_"] == "on") { 

 ?>
<input type="hidden" name="descricao_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($descricao_) . "\">" . $descricao_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_descricao_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-descricao_<?php echo $sc_seq_vert ?> css_descricao__line" style="<?php echo $sStyleReadLab_descricao_; ?>"><?php echo $this->form_format_readonly("descricao_", $this->form_encode_input($this->descricao_)); ?></span><span id="id_read_off_descricao_<?php echo $sc_seq_vert ?>" class="css_read_off_descricao_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_descricao_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_descricao__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_descricao_<?php echo $sc_seq_vert ?>" type=text name="descricao_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($descricao_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=45"; } ?> maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_descricao_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_descricao_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['qtde_']) && $this->nmgp_cmp_hidden['qtde_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qtde_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($qtde_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_qtde__line" id="hidden_field_data_qtde_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_qtde_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_qtde__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_qtde_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qtde_"]) &&  $this->nmgp_cmp_readonly["qtde_"] == "on") { 

 ?>
<input type="hidden" name="qtde_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($qtde_) . "\">" . $qtde_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_qtde_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-qtde_<?php echo $sc_seq_vert ?> css_qtde__line" style="<?php echo $sStyleReadLab_qtde_; ?>"><?php echo $this->form_format_readonly("qtde_", $this->form_encode_input($this->qtde_)); ?></span><span id="id_read_off_qtde_<?php echo $sc_seq_vert ?>" class="css_read_off_qtde_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_qtde_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_qtde__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_qtde_<?php echo $sc_seq_vert ?>" type=text name="qtde_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($qtde_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qtde_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qtde_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['valor_unitario_']) && $this->nmgp_cmp_hidden['valor_unitario_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_unitario_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valor_unitario_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_valor_unitario__line" id="hidden_field_data_valor_unitario_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_valor_unitario_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_valor_unitario__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_valor_unitario_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor_unitario_"]) &&  $this->nmgp_cmp_readonly["valor_unitario_"] == "on") { 

 ?>
<input type="hidden" name="valor_unitario_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valor_unitario_) . "\">" . $valor_unitario_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor_unitario_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-valor_unitario_<?php echo $sc_seq_vert ?> css_valor_unitario__line" style="<?php echo $sStyleReadLab_valor_unitario_; ?>"><?php echo $this->form_format_readonly("valor_unitario_", $this->form_encode_input($this->valor_unitario_)); ?></span><span id="id_read_off_valor_unitario_<?php echo $sc_seq_vert ?>" class="css_read_off_valor_unitario_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_valor_unitario_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_valor_unitario__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_valor_unitario_<?php echo $sc_seq_vert ?>" type=text name="valor_unitario_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valor_unitario_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_unitario_']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_unitario_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor_unitario_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor_unitario_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_unitario_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_unitario_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['valor_total_']) && $this->nmgp_cmp_hidden['valor_total_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_total_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valor_total_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_valor_total__line" id="hidden_field_data_valor_total_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_valor_total_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_valor_total__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_valor_total_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor_total_"]) &&  $this->nmgp_cmp_readonly["valor_total_"] == "on") { 

 ?>
<input type="hidden" name="valor_total_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valor_total_) . "\">" . $valor_total_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor_total_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-valor_total_<?php echo $sc_seq_vert ?> css_valor_total__line" style="<?php echo $sStyleReadLab_valor_total_; ?>"><?php echo $this->form_format_readonly("valor_total_", $this->form_encode_input($this->valor_total_)); ?></span><span id="id_read_off_valor_total_<?php echo $sc_seq_vert ?>" class="css_read_off_valor_total_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_valor_total_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_valor_total__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_valor_total_<?php echo $sc_seq_vert ?>" type=text name="valor_total_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($valor_total_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_total_']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_total_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor_total_']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor_total_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_total_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_total_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['unidade_']) && $this->nmgp_cmp_hidden['unidade_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="unidade_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($unidade_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_unidade__line" id="hidden_field_data_unidade_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_unidade_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_unidade__line" style="vertical-align: top;padding: 0px"><input type="hidden" name="unidade_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($unidade_); ?>"><span id="id_ajax_label_unidade_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($unidade_); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_unidade_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_unidade_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['iditens_orcamento_']) && $this->nmgp_cmp_hidden['iditens_orcamento_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="iditens_orcamento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($iditens_orcamento_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_iditens_orcamento__line" id="hidden_field_data_iditens_orcamento_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_iditens_orcamento_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_iditens_orcamento__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_iditens_orcamento_ && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["iditens_orcamento_"]) &&  $this->nmgp_cmp_readonly["iditens_orcamento_"] == "on")) { 

 ?>
<input type="hidden" name="iditens_orcamento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($iditens_orcamento_) . "\"><span id=\"id_ajax_label_iditens_orcamento_" . $sc_seq_vert . "\">" . $iditens_orcamento_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_iditens_orcamento_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-iditens_orcamento_<?php echo $sc_seq_vert ?> css_iditens_orcamento__line" style="<?php echo $sStyleReadLab_iditens_orcamento_; ?>"><?php echo $this->form_format_readonly("iditens_orcamento_", $this->form_encode_input($this->iditens_orcamento_)); ?></span><span id="id_read_off_iditens_orcamento_<?php echo $sc_seq_vert ?>" class="css_read_off_iditens_orcamento_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_iditens_orcamento_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_iditens_orcamento__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_iditens_orcamento_<?php echo $sc_seq_vert ?>" type=text name="iditens_orcamento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($iditens_orcamento_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 10, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['iditens_orcamento_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['iditens_orcamento_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['iditens_orcamento_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_iditens_orcamento_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_iditens_orcamento_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_idproduto_))
       {
           $this->nmgp_cmp_readonly['idproduto_'] = $sCheckRead_idproduto_;
       }
       if ('display: none;' == $sStyleHidden_idproduto_)
       {
           $this->nmgp_cmp_hidden['idproduto_'] = 'off';
       }
       if (isset($sCheckRead_quantidade_))
       {
           $this->nmgp_cmp_readonly['quantidade_'] = $sCheckRead_quantidade_;
       }
       if ('display: none;' == $sStyleHidden_quantidade_)
       {
           $this->nmgp_cmp_hidden['quantidade_'] = 'off';
       }
       if (isset($sCheckRead_descricao_))
       {
           $this->nmgp_cmp_readonly['descricao_'] = $sCheckRead_descricao_;
       }
       if ('display: none;' == $sStyleHidden_descricao_)
       {
           $this->nmgp_cmp_hidden['descricao_'] = 'off';
       }
       if (isset($sCheckRead_qtde_))
       {
           $this->nmgp_cmp_readonly['qtde_'] = $sCheckRead_qtde_;
       }
       if ('display: none;' == $sStyleHidden_qtde_)
       {
           $this->nmgp_cmp_hidden['qtde_'] = 'off';
       }
       if (isset($sCheckRead_valor_unitario_))
       {
           $this->nmgp_cmp_readonly['valor_unitario_'] = $sCheckRead_valor_unitario_;
       }
       if ('display: none;' == $sStyleHidden_valor_unitario_)
       {
           $this->nmgp_cmp_hidden['valor_unitario_'] = 'off';
       }
       if (isset($sCheckRead_valor_total_))
       {
           $this->nmgp_cmp_readonly['valor_total_'] = $sCheckRead_valor_total_;
       }
       if ('display: none;' == $sStyleHidden_valor_total_)
       {
           $this->nmgp_cmp_hidden['valor_total_'] = 'off';
       }
       if (isset($sCheckRead_unidade_))
       {
           $this->nmgp_cmp_readonly['unidade_'] = $sCheckRead_unidade_;
       }
       if ('display: none;' == $sStyleHidden_unidade_)
       {
           $this->nmgp_cmp_hidden['unidade_'] = 'off';
       }
       if (isset($sCheckRead_iditens_orcamento_))
       {
           $this->nmgp_cmp_readonly['iditens_orcamento_'] = $sCheckRead_iditens_orcamento_;
       }
       if ('display: none;' == $sStyleHidden_iditens_orcamento_)
       {
           $this->nmgp_cmp_hidden['iditens_orcamento_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_nfce_detalhe = $guarda_form_vert_nfce_detalhe;
   } 
   if ($Table_refresh) 
   { 
       $this->Table_refresh = ob_get_contents();
       ob_end_clean();
   } 
}

function Form_Fim() 
{
   global $sc_seq_vert, $opcao_botoes, $nm_url_saida; 
?>   
</TABLE></div><!-- bloco_f -->
 </div>
<?php
$iContrVert = $this->Embutida_form ? $sc_seq_vert + 1 : $sc_seq_vert + 1;
if ($sc_seq_vert < $this->sc_max_reg)
{
    echo " <script type=\"text/javascript\">";
    echo "    bRefreshTable = true;";
    echo "</script>";
}
?>
<input type="hidden" name="sc_contr_vert" value="<?php echo $this->form_encode_input($iContrVert); ?>">
<?php
    $sEmptyStyle = 0 == $sc_seq_vert ? '' : 'display: none;';
?>
</td></tr>
<tr id="sc-ui-empty-form" style="<?php echo $sEmptyStyle; ?>"><td class="scFormPageText" style="padding: 10px; font-weight: bold">
<?php echo "Nenhum produto lançado!";
?>
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColorMult">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
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
<script>
 var iAjaxNewLine = <?php echo $sc_seq_vert; ?>;
<?php
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['run_modal'])
{
?>
 for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) {
  scJQElementsAdd(iLine);
 }
<?php
}
else
{
?>
 $(function() {
  setTimeout(function() { for (var iLine = 1; iLine <= iAjaxNewLine; iLine++) { scJQElementsAdd(iLine); } }, 250);
 });
<?php
}
?>
</script>
<div id="new_line_dummy" style="display: none">
</div>

</form> 
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
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("nfce_detalhe");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("nfce_detalhe");
 parent.scAjaxDetailHeight("nfce_detalhe", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("nfce_detalhe", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("nfce_detalhe", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['sc_modal'])
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
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_t.sc-unique-btn-1").length && $("#sc_b_ini_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_ini_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_t.sc-unique-btn-2").length && $("#sc_b_ret_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ret_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_t.sc-unique-btn-3").length && $("#sc_b_avc_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_avc_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_t.sc-unique-btn-4").length && $("#sc_b_fim_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_fim_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_sai_modal() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe']['buttonStatus'] = $this->nmgp_botoes;
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
<?php 
 } 
} 
?> 
