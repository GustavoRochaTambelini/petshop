<?php
class form_pet_cliente_form extends form_pet_cliente_apl
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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Pet`s"); } else { echo strip_tags("Pet`s"); } ?></TITLE>
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
if ($this->Embutida_form && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['sc_modal'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['sc_redir_atualiz'] == 'ok')
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
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_desc ?>'], 
   .scFormLabelOddMult a img[src$='<?php echo $this->Ini->Label_sort_asc ?>']{opacity:1!important;} 
   .scFormLabelOddMult a img{opacity:0;transition:all .2s;} 
   .scFormLabelOddMult:HOVER a img{opacity:1;transition:all .2s;} 
 </style>
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
.css_read_off_data_nascimento_ button {
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_pet_cliente/form_pet_cliente_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_pet_cliente_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['last'] : 'off'); ?>";
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

include_once('form_pet_cliente_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['recarga'];
}
if ('novo' == $opcao_botoes && $this->Embutida_form)
{
    $opcao_botoes = 'inicio';
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['link_info']['remove_border']) {
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
 include_once("form_pet_cliente_js0.php");
?>
<script type="text/javascript"> 
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
<form  name="F1" method="post" enctype="multipart/form-data" 
               action="./" 
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
<input type="hidden" name="upload_file_flag" value="">
<input type="hidden" name="upload_file_check" value="">
<input type="hidden" name="upload_file_name" value="">
<input type="hidden" name="upload_file_temp" value="">
<input type="hidden" name="upload_file_libs" value="">
<input type="hidden" name="upload_file_height" value="">
<input type="hidden" name="upload_file_width" value="">
<input type="hidden" name="upload_file_aspect" value="">
<input type="hidden" name="upload_file_type" value="">
<input type="hidden" name="upload_file_row" value="">
<?php
$_SESSION['scriptcase']['error_span_title']['form_pet_cliente'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_pet_cliente'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe'] != "R")
{
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($this->Embutida_form) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!isset($this->Grid_editavel) || !$this->Grid_editavel) && (!$this->Embutida_form) && (!$this->Embutida_call || $this->Embutida_multi)) {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['update'];
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
    if (isset($this->NMSC_modal) && $this->NMSC_modal == "ok") {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai_modal()", "scBtnFn_sys_format_sai_modal()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['empty_filter'] = true;
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
   if (!isset($this->nmgp_cmp_hidden['idpet_']))
   {
       $this->nmgp_cmp_hidden['idpet_'] = 'off';
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


       if (!$this->Embutida_form && $this->nmgp_opcao == "novo") { $Col_span = " colspan=2"; }
 ?>

    <TD class="scFormLabelOddMult sc-col-title" style="display: none;" <?php echo $Col_span ?>> &nbsp; </TD>
   
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] == "on") {?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php if ($this->Embutida_form && $this->nmgp_botoes['insert'] != "on") {?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult sc-col-title"  width="10"> &nbsp; </TD>
   <?php }?>
   <?php
    $sStyleHidden_foto_pet_ = '';
    if (isset($this->nmgp_cmp_hidden['foto_pet_']) && $this->nmgp_cmp_hidden['foto_pet_'] == 'off') {
        $sStyleHidden_foto_pet_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['foto_pet_']) || $this->nmgp_cmp_hidden['foto_pet_'] == 'on') {
        if (!isset($this->nm_new_label['foto_pet_'])) {
            $this->nm_new_label['foto_pet_'] = "FOTO";
        }
        $SC_Label = "" . $this->nm_new_label['foto_pet_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("foto_pet", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("foto_pet", $fieldSortRule);

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
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'foto_pet')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_foto_pet__label sc-col-title" id="hidden_field_label_foto_pet_" style="<?php echo $sStyleHidden_foto_pet_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_nome_ = '';
    if (isset($this->nmgp_cmp_hidden['nome_']) && $this->nmgp_cmp_hidden['nome_'] == 'off') {
        $sStyleHidden_nome_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['nome_']) || $this->nmgp_cmp_hidden['nome_'] == 'on') {
        if (!isset($this->nm_new_label['nome_'])) {
            $this->nm_new_label['nome_'] = "NOME";
        }
        $SC_Label = "" . $this->nm_new_label['nome_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("nome", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("nome", $fieldSortRule);

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
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'nome')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_nome__label sc-col-title" id="hidden_field_label_nome_" style="<?php echo $sStyleHidden_nome_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_idpet_raca_ = '';
    if (isset($this->nmgp_cmp_hidden['idpet_raca_']) && $this->nmgp_cmp_hidden['idpet_raca_'] == 'off') {
        $sStyleHidden_idpet_raca_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['idpet_raca_']) || $this->nmgp_cmp_hidden['idpet_raca_'] == 'on') {
        if (!isset($this->nm_new_label['idpet_raca_'])) {
            $this->nm_new_label['idpet_raca_'] = "RAÇA";
        }
        $SC_Label = "" . $this->nm_new_label['idpet_raca_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("idpet_raca", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("idpet_raca", $fieldSortRule);

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
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'idpet_raca')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_idpet_raca__label sc-col-title" id="hidden_field_label_idpet_raca_" style="<?php echo $sStyleHidden_idpet_raca_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_data_nascimento_ = '';
    if (isset($this->nmgp_cmp_hidden['data_nascimento_']) && $this->nmgp_cmp_hidden['data_nascimento_'] == 'off') {
        $sStyleHidden_data_nascimento_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['data_nascimento_']) || $this->nmgp_cmp_hidden['data_nascimento_'] == 'on') {
        if (!isset($this->nm_new_label['data_nascimento_'])) {
            $this->nm_new_label['data_nascimento_'] = "DATA NASCIMENTO";
        }
        $SC_Label = "" . $this->nm_new_label['data_nascimento_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("data_nascimento", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("data_nascimento", $fieldSortRule);

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
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'data_nascimento')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_data_nascimento__label sc-col-title" id="hidden_field_label_data_nascimento_" style="<?php echo $sStyleHidden_data_nascimento_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_sexo_ = '';
    if (isset($this->nmgp_cmp_hidden['sexo_']) && $this->nmgp_cmp_hidden['sexo_'] == 'off') {
        $sStyleHidden_sexo_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['sexo_']) || $this->nmgp_cmp_hidden['sexo_'] == 'on') {
        if (!isset($this->nm_new_label['sexo_'])) {
            $this->nm_new_label['sexo_'] = "SEXO";
        }
        $SC_Label = "" . $this->nm_new_label['sexo_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("sexo", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("sexo", $fieldSortRule);

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
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'sexo')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_sexo__label sc-col-title" id="hidden_field_label_sexo_" style="<?php echo $sStyleHidden_sexo_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_idpet_especie_ = '';
    if (isset($this->nmgp_cmp_hidden['idpet_especie_']) && $this->nmgp_cmp_hidden['idpet_especie_'] == 'off') {
        $sStyleHidden_idpet_especie_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['idpet_especie_']) || $this->nmgp_cmp_hidden['idpet_especie_'] == 'on') {
        if (!isset($this->nm_new_label['idpet_especie_'])) {
            $this->nm_new_label['idpet_especie_'] = "ESPECIE";
        }
        $SC_Label = "" . $this->nm_new_label['idpet_especie_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("idpet_especie", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("idpet_especie", $fieldSortRule);

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
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'idpet_especie')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_idpet_especie__label sc-col-title" id="hidden_field_label_idpet_especie_" style="<?php echo $sStyleHidden_idpet_especie_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php
    $sStyleHidden_idpet_pelagem_ = '';
    if (isset($this->nmgp_cmp_hidden['idpet_pelagem_']) && $this->nmgp_cmp_hidden['idpet_pelagem_'] == 'off') {
        $sStyleHidden_idpet_pelagem_ = 'display: none';
    }
    if (1 || !isset($this->nmgp_cmp_hidden['idpet_pelagem_']) || $this->nmgp_cmp_hidden['idpet_pelagem_'] == 'on') {
        if (!isset($this->nm_new_label['idpet_pelagem_'])) {
            $this->nm_new_label['idpet_pelagem_'] = "PELAGEM";
        }
        $SC_Label = "" . $this->nm_new_label['idpet_pelagem_']  . "";
        $label_fieldName = nl2br($SC_Label);

        // label & order
        $divLabelStyle = '; justify-content: left';
        $fieldSortRule = $this->scGetColumnOrderRule("idpet_pelagem", $orderColName, $orderColOrient, $orderColRule);
        $fieldSortIcon = $this->scGetColumnOrderIcon("idpet_pelagem", $fieldSortRule);

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
        $label_labelContent = "<a href=\"javascript:nm_move('ordem', 'idpet_pelagem')\" class=\"scFormLabelLink scFormLabelLinkOddMult\">" . $label_labelContent . "</a>";
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_chart . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;
?>
    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_idpet_pelagem__label sc-col-title" id="hidden_field_label_idpet_pelagem_" style="<?php echo $sStyleHidden_idpet_pelagem_; ?>" > <?php echo $label_final ?> </TD>
   <?php
        $this->form_fixed_column_no++;
    }
?>

   <?php if ((!isset($this->nmgp_cmp_hidden['idpet_']) || $this->nmgp_cmp_hidden['idpet_'] == 'on') && ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir"))) { 
      if (!isset($this->nm_new_label['idpet_'])) {
          $this->nm_new_label['idpet_'] = "ID"; } ?>
<?php
        $classColFld = " sc-col-fld sc-col-fld-" . $this->form_fixed_column_no;

        // label
        $label_labelContent = $this->nm_new_label['idpet_'];
        $label_divLabel = "<div style=\"flex-grow: 1\">". $label_labelContent . "</div>";

        // controls
        $label_fixedColumn = '';
        $label_divControl = '<div style="display: flex; flex-wrap: nowrap; align-items: baseline">' . $label_fixedColumn . '</div>';

        // final label
        $label_final = '<div style="display: flex; flex-direction: row; flex-wrap: nowrap; justify-content: space-between; align-items: baseline">' . $label_divLabel . $label_divControl . '</div>';
?>

    <TD class="<?php echo $this->css_inherit_bg . ' ' ?>scFormLabelOddMult css_idpet__label sc-col-title" id="hidden_field_label_idpet_" style="<?php echo $sStyleHidden_idpet_; ?>" > <?php echo $label_final ?> </TD>
   <?php $this->form_fixed_column_no++;}?>





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
       $iStart = sizeof($this->form_vert_form_pet_cliente);
       $guarda_nmgp_opcao = $this->nmgp_opcao;
       $guarda_form_vert_form_pet_cliente = $this->form_vert_form_pet_cliente;
       $this->nmgp_opcao = 'novo';
   } 
   if ($this->Embutida_form && empty($this->form_vert_form_pet_cliente))
   {
       $sc_seq_vert = 0;
   }
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idpet_']))
           {
               $this->nmgp_cmp_readonly['idpet_'] = 'on';
           }
   foreach ($this->form_vert_form_pet_cliente as $sc_seq_vert => $sc_lixo)
   {
       $this->form_fixed_column_no = 0;
       $this->loadRecordState($sc_seq_vert);
       $this->idcliente_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['idcliente_'];
       $this->foto_carteirinha_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['foto_carteirinha_'];
       if (isset($this->Embutida_ronly) && $this->Embutida_ronly && !$Line_Add)
       {
           $this->nmgp_cmp_readonly['foto_pet_'] = true;
           $this->nmgp_cmp_readonly['nome_'] = true;
           $this->nmgp_cmp_readonly['idpet_raca_'] = true;
           $this->nmgp_cmp_readonly['data_nascimento_'] = true;
           $this->nmgp_cmp_readonly['sexo_'] = true;
           $this->nmgp_cmp_readonly['idpet_especie_'] = true;
           $this->nmgp_cmp_readonly['idpet_pelagem_'] = true;
           $this->nmgp_cmp_readonly['idpet_'] = true;
       }
       elseif ($Line_Add)
       {
           if (!isset($this->nmgp_cmp_readonly['foto_pet_']) || $this->nmgp_cmp_readonly['foto_pet_'] != "on") {$this->nmgp_cmp_readonly['foto_pet_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['nome_']) || $this->nmgp_cmp_readonly['nome_'] != "on") {$this->nmgp_cmp_readonly['nome_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['idpet_raca_']) || $this->nmgp_cmp_readonly['idpet_raca_'] != "on") {$this->nmgp_cmp_readonly['idpet_raca_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['data_nascimento_']) || $this->nmgp_cmp_readonly['data_nascimento_'] != "on") {$this->nmgp_cmp_readonly['data_nascimento_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['sexo_']) || $this->nmgp_cmp_readonly['sexo_'] != "on") {$this->nmgp_cmp_readonly['sexo_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['idpet_especie_']) || $this->nmgp_cmp_readonly['idpet_especie_'] != "on") {$this->nmgp_cmp_readonly['idpet_especie_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['idpet_pelagem_']) || $this->nmgp_cmp_readonly['idpet_pelagem_'] != "on") {$this->nmgp_cmp_readonly['idpet_pelagem_'] = false;}
           if (!isset($this->nmgp_cmp_readonly['idpet_']) || $this->nmgp_cmp_readonly['idpet_'] != "on") {$this->nmgp_cmp_readonly['idpet_'] = false;}
       }
            if (isset($this->form_vert_form_preenchimento[$sc_seq_vert])) {
              foreach ($this->form_vert_form_preenchimento[$sc_seq_vert] as $sCmpNome => $mCmpVal)
              {
                  eval("\$this->" . $sCmpNome . " = \$mCmpVal;");
              }
            }
        $this->foto_pet_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['foto_pet_']; 
       $foto_pet_ = $this->foto_pet_; 
       $this->foto_pet__limpa = $this->form_vert_form_pet_cliente[$sc_seq_vert]['foto_pet__limpa']; 
       $foto_pet__limpa = $this->foto_pet__limpa; 
       $sStyleHidden_foto_pet_ = '';
       if (isset($sCheckRead_foto_pet_))
       {
           unset($sCheckRead_foto_pet_);
       }
       if (isset($this->nmgp_cmp_readonly['foto_pet_']))
       {
           $sCheckRead_foto_pet_ = $this->nmgp_cmp_readonly['foto_pet_'];
       }
       if (isset($this->nmgp_cmp_hidden['foto_pet_']) && $this->nmgp_cmp_hidden['foto_pet_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['foto_pet_']);
           $sStyleHidden_foto_pet_ = 'display: none;';
       }
       $bTestReadOnly_foto_pet_ = true;
       $sStyleReadLab_foto_pet_ = 'display: none;';
       $sStyleReadInp_foto_pet_ = '';
       if (isset($this->nmgp_cmp_readonly['foto_pet_']) && $this->nmgp_cmp_readonly['foto_pet_'] == 'on')
       {
           $bTestReadOnly_foto_pet_ = false;
           unset($this->nmgp_cmp_readonly['foto_pet_']);
           $sStyleReadLab_foto_pet_ = '';
           $sStyleReadInp_foto_pet_ = 'display: none;';
       }
       $this->nome_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['nome_']; 
       $nome_ = $this->nome_; 
       $sStyleHidden_nome_ = '';
       if (isset($sCheckRead_nome_))
       {
           unset($sCheckRead_nome_);
       }
       if (isset($this->nmgp_cmp_readonly['nome_']))
       {
           $sCheckRead_nome_ = $this->nmgp_cmp_readonly['nome_'];
       }
       if (isset($this->nmgp_cmp_hidden['nome_']) && $this->nmgp_cmp_hidden['nome_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['nome_']);
           $sStyleHidden_nome_ = 'display: none;';
       }
       $bTestReadOnly_nome_ = true;
       $sStyleReadLab_nome_ = 'display: none;';
       $sStyleReadInp_nome_ = '';
       if (isset($this->nmgp_cmp_readonly['nome_']) && $this->nmgp_cmp_readonly['nome_'] == 'on')
       {
           $bTestReadOnly_nome_ = false;
           unset($this->nmgp_cmp_readonly['nome_']);
           $sStyleReadLab_nome_ = '';
           $sStyleReadInp_nome_ = 'display: none;';
       }
       $this->idpet_raca_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['idpet_raca_']; 
       $idpet_raca_ = $this->idpet_raca_; 
       $sStyleHidden_idpet_raca_ = '';
       if (isset($sCheckRead_idpet_raca_))
       {
           unset($sCheckRead_idpet_raca_);
       }
       if (isset($this->nmgp_cmp_readonly['idpet_raca_']))
       {
           $sCheckRead_idpet_raca_ = $this->nmgp_cmp_readonly['idpet_raca_'];
       }
       if (isset($this->nmgp_cmp_hidden['idpet_raca_']) && $this->nmgp_cmp_hidden['idpet_raca_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['idpet_raca_']);
           $sStyleHidden_idpet_raca_ = 'display: none;';
       }
       $bTestReadOnly_idpet_raca_ = true;
       $sStyleReadLab_idpet_raca_ = 'display: none;';
       $sStyleReadInp_idpet_raca_ = '';
       if (isset($this->nmgp_cmp_readonly['idpet_raca_']) && $this->nmgp_cmp_readonly['idpet_raca_'] == 'on')
       {
           $bTestReadOnly_idpet_raca_ = false;
           unset($this->nmgp_cmp_readonly['idpet_raca_']);
           $sStyleReadLab_idpet_raca_ = '';
           $sStyleReadInp_idpet_raca_ = 'display: none;';
       }
       $this->data_nascimento_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['data_nascimento_']; 
       $data_nascimento_ = $this->data_nascimento_; 
       $sStyleHidden_data_nascimento_ = '';
       if (isset($sCheckRead_data_nascimento_))
       {
           unset($sCheckRead_data_nascimento_);
       }
       if (isset($this->nmgp_cmp_readonly['data_nascimento_']))
       {
           $sCheckRead_data_nascimento_ = $this->nmgp_cmp_readonly['data_nascimento_'];
       }
       if (isset($this->nmgp_cmp_hidden['data_nascimento_']) && $this->nmgp_cmp_hidden['data_nascimento_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['data_nascimento_']);
           $sStyleHidden_data_nascimento_ = 'display: none;';
       }
       $bTestReadOnly_data_nascimento_ = true;
       $sStyleReadLab_data_nascimento_ = 'display: none;';
       $sStyleReadInp_data_nascimento_ = '';
       if (isset($this->nmgp_cmp_readonly['data_nascimento_']) && $this->nmgp_cmp_readonly['data_nascimento_'] == 'on')
       {
           $bTestReadOnly_data_nascimento_ = false;
           unset($this->nmgp_cmp_readonly['data_nascimento_']);
           $sStyleReadLab_data_nascimento_ = '';
           $sStyleReadInp_data_nascimento_ = 'display: none;';
       }
       $this->sexo_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['sexo_']; 
       $sexo_ = $this->sexo_; 
       $sStyleHidden_sexo_ = '';
       if (isset($sCheckRead_sexo_))
       {
           unset($sCheckRead_sexo_);
       }
       if (isset($this->nmgp_cmp_readonly['sexo_']))
       {
           $sCheckRead_sexo_ = $this->nmgp_cmp_readonly['sexo_'];
       }
       if (isset($this->nmgp_cmp_hidden['sexo_']) && $this->nmgp_cmp_hidden['sexo_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['sexo_']);
           $sStyleHidden_sexo_ = 'display: none;';
       }
       $bTestReadOnly_sexo_ = true;
       $sStyleReadLab_sexo_ = 'display: none;';
       $sStyleReadInp_sexo_ = '';
       if (isset($this->nmgp_cmp_readonly['sexo_']) && $this->nmgp_cmp_readonly['sexo_'] == 'on')
       {
           $bTestReadOnly_sexo_ = false;
           unset($this->nmgp_cmp_readonly['sexo_']);
           $sStyleReadLab_sexo_ = '';
           $sStyleReadInp_sexo_ = 'display: none;';
       }
       $this->idpet_especie_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['idpet_especie_']; 
       $idpet_especie_ = $this->idpet_especie_; 
       $sStyleHidden_idpet_especie_ = '';
       if (isset($sCheckRead_idpet_especie_))
       {
           unset($sCheckRead_idpet_especie_);
       }
       if (isset($this->nmgp_cmp_readonly['idpet_especie_']))
       {
           $sCheckRead_idpet_especie_ = $this->nmgp_cmp_readonly['idpet_especie_'];
       }
       if (isset($this->nmgp_cmp_hidden['idpet_especie_']) && $this->nmgp_cmp_hidden['idpet_especie_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['idpet_especie_']);
           $sStyleHidden_idpet_especie_ = 'display: none;';
       }
       $bTestReadOnly_idpet_especie_ = true;
       $sStyleReadLab_idpet_especie_ = 'display: none;';
       $sStyleReadInp_idpet_especie_ = '';
       if (isset($this->nmgp_cmp_readonly['idpet_especie_']) && $this->nmgp_cmp_readonly['idpet_especie_'] == 'on')
       {
           $bTestReadOnly_idpet_especie_ = false;
           unset($this->nmgp_cmp_readonly['idpet_especie_']);
           $sStyleReadLab_idpet_especie_ = '';
           $sStyleReadInp_idpet_especie_ = 'display: none;';
       }
       $this->idpet_pelagem_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['idpet_pelagem_']; 
       $idpet_pelagem_ = $this->idpet_pelagem_; 
       $sStyleHidden_idpet_pelagem_ = '';
       if (isset($sCheckRead_idpet_pelagem_))
       {
           unset($sCheckRead_idpet_pelagem_);
       }
       if (isset($this->nmgp_cmp_readonly['idpet_pelagem_']))
       {
           $sCheckRead_idpet_pelagem_ = $this->nmgp_cmp_readonly['idpet_pelagem_'];
       }
       if (isset($this->nmgp_cmp_hidden['idpet_pelagem_']) && $this->nmgp_cmp_hidden['idpet_pelagem_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['idpet_pelagem_']);
           $sStyleHidden_idpet_pelagem_ = 'display: none;';
       }
       $bTestReadOnly_idpet_pelagem_ = true;
       $sStyleReadLab_idpet_pelagem_ = 'display: none;';
       $sStyleReadInp_idpet_pelagem_ = '';
       if (isset($this->nmgp_cmp_readonly['idpet_pelagem_']) && $this->nmgp_cmp_readonly['idpet_pelagem_'] == 'on')
       {
           $bTestReadOnly_idpet_pelagem_ = false;
           unset($this->nmgp_cmp_readonly['idpet_pelagem_']);
           $sStyleReadLab_idpet_pelagem_ = '';
           $sStyleReadInp_idpet_pelagem_ = 'display: none;';
       }
       $this->idpet_ = $this->form_vert_form_pet_cliente[$sc_seq_vert]['idpet_']; 
       $idpet_ = $this->idpet_; 
       if (!isset($this->nmgp_cmp_hidden['idpet_']))
       {
           $this->nmgp_cmp_hidden['idpet_'] = 'off';
       }
       $sStyleHidden_idpet_ = '';
       if (isset($sCheckRead_idpet_))
       {
           unset($sCheckRead_idpet_);
       }
       if (isset($this->nmgp_cmp_readonly['idpet_']))
       {
           $sCheckRead_idpet_ = $this->nmgp_cmp_readonly['idpet_'];
       }
       if (isset($this->nmgp_cmp_hidden['idpet_']) && $this->nmgp_cmp_hidden['idpet_'] == 'off')
       {
           unset($this->nmgp_cmp_hidden['idpet_']);
           $sStyleHidden_idpet_ = 'display: none;';
       }
       $bTestReadOnly_idpet_ = true;
       $sStyleReadLab_idpet_ = 'display: none;';
       $sStyleReadInp_idpet_ = '';
       if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["idpet_"]) &&  $this->nmgp_cmp_readonly["idpet_"] == "on"))
       {
           $bTestReadOnly_idpet_ = false;
           unset($this->nmgp_cmp_readonly['idpet_']);
           $sStyleReadLab_idpet_ = '';
           $sStyleReadInp_idpet_ = 'display: none;';
       }

       if ($this->nmgp_opcao == "novo")
       { 
           $out_foto_pet_   = "";  
           $this->foto_pet_ = "";  
       } 
       else 
       { 
           $out_foto_pet_ = $this->foto_pet_;  
       } 
       if ($this->foto_pet_ != "" && $this->foto_pet_ != "none")   
       { 
           $out_foto_pet_ = $this->Ini->path_imag_temp . "/sc_foto_pet__" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
           $_SESSION['scriptcase']['sc_num_img']++ ; 
           $arq_foto_pet_ = fopen($this->Ini->root . $out_foto_pet_, "w") ;  
           if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
           { 
               $nm_tmp = nm_conv_img_access(substr($this->foto_pet_, 0, 12));
               if (is_string($this->foto_pet_) && substr($this->foto_pet_, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
               { 
                   $this->foto_pet_ = nm_conv_img_access($this->foto_pet_);
               } 
           } 
           if (is_string($this->foto_pet_) && substr($this->foto_pet_, 0, 4) == "*nm*") 
           { 
               $this->foto_pet_ = substr($this->foto_pet_, 4) ; 
               $this->foto_pet_ = base64_decode($this->foto_pet_) ; 
           } 
           $img_pos_bm = (is_string($this->foto_pet_)) ? strpos($this->foto_pet_, "BM") : false; 
           if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
           { 
               $this->foto_pet_ = substr($this->foto_pet_, $img_pos_bm) ; 
           } 
           fwrite($arq_foto_pet_, (string)$this->foto_pet_) ;  
           fclose($arq_foto_pet_) ;  
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto_pet_, true);
           $this->nmgp_return_img['foto_pet_'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['foto_pet_'][1] = $sc_obj_img->getWidth();
           $out1_foto_pet_ = $out_foto_pet_; 
           $out_foto_pet_ = $this->Ini->path_imag_temp . "/sc_" . "foto_pet__" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ; 
           $_SESSION['scriptcase']['sc_num_img']++ ; 
           if (!$this->Ini->Gd_missing)
           { 
               $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto_pet_, true);
               $sc_obj_img->setWidth(100);
               $sc_obj_img->setHeight(100);
               $sc_obj_img->setManterAspecto(true);
               $sc_obj_img->createImg($this->Ini->root . $out_foto_pet_);
           } 
           else 
           { 
               $out_foto_pet_ = $out1_foto_pet_;
           } 
       } 
       $nm_cor_fun_vert = (isset($nm_cor_fun_vert) && $nm_cor_fun_vert == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
       $nm_img_fun_cel  = (isset($nm_img_fun_cel)  && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);

       $sHideNewLine = '';
?>   
   <tr id="idVertRow<?php echo $sc_seq_vert; ?>"<?php echo $sHideNewLine; ?> class="sc-row" data-sc-row-number="<?php echo $sc_seq_vert; ?>">
<input type="hidden" name="foto_pet__ul_name<?php echo $sc_seq_vert; ?>" id="id_sc_field_foto_pet__ul_name<?php echo $sc_seq_vert; ?>" value="<?php echo $this->form_encode_input($this->foto_pet__ul_name);?>">
<input type="hidden" name="foto_pet__ul_type<?php echo $sc_seq_vert; ?>" id="id_sc_field_foto_pet__ul_type<?php echo $sc_seq_vert; ?>" value="<?php echo $this->form_encode_input($this->foto_pet__ul_type);?>">


   
    <TD class="scFormDataOddMult"  id="hidden_field_data_sc_seq<?php echo $sc_seq_vert; ?>"  style="display: none;"> <?php echo $sc_seq_vert; ?> </TD>
   
   <?php if (!$this->Embutida_form && $this->nmgp_opcao == "novo") {?>
    <TD class="scFormDataOddMult" > 
<input type="checkbox" name="sc_check_vert[<?php echo $sc_seq_vert ?>]" value="<?php echo $sc_seq_vert . "\"" ; if (in_array($sc_seq_vert, $sc_check_incl) || !empty($this->nm_todas_criticas)) { echo " checked ";} ?> class="sc-js-input" alt="{type: 'checkbox', enterTab: false}"> </TD>
   <?php }?>
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
<?php echo nmButtonOutput($this->arr_buttons, "bmd_novo", "do_ajax_form_pet_cliente_add_new_line(" . $sc_seq_vert . ")", "do_ajax_form_pet_cliente_add_new_line(" . $sc_seq_vert . ")", "sc_new_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php }?>
<?php
  $Style_add_line = (!$Line_Add) ? "display: none" : "";
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_pet_cliente_cancel_insert(" . $sc_seq_vert . ")", "do_ajax_form_pet_cliente_cancel_insert(" . $sc_seq_vert . ")", "sc_canceli_line_" . $sc_seq_vert . "", "", "", "" . $Style_add_line . "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php echo nmButtonOutput($this->arr_buttons, "bmd_cancelar", "do_ajax_form_pet_cliente_cancel_update(" . $sc_seq_vert . ")", "do_ajax_form_pet_cliente_cancel_update(" . $sc_seq_vert . ")", "sc_cancelu_line_" . $sc_seq_vert . "", "", "", "display: none", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
 </TD>
   <?php }?>
   <?php if (isset($this->nmgp_cmp_hidden['foto_pet_']) && $this->nmgp_cmp_hidden['foto_pet_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="foto_pet_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($foto_pet_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_foto_pet__line" id="hidden_field_data_foto_pet_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_foto_pet_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_foto_pet__line" style="vertical-align: top;padding: 0px">
 <?php $this->NM_ajax_info['varList'][] = array("var_ajax_img_foto_pet_" . $sc_seq_vert . "" => $out1_foto_pet_); ?><script>var var_ajax_img_foto_pet_<?php echo $sc_seq_vert; ?> = '<?php echo $out1_foto_pet_; ?>';</script><input type="hidden" name="temp_out_foto_pet_" value="<?php echo $this->form_encode_input($out_foto_pet_); ?>" /><input type="hidden" name="temp_out1_foto_pet_" value="<?php echo $this->form_encode_input($out1_foto_pet_); ?>" /><?php if (!empty($out_foto_pet_)) {  echo "<a  href=\"javascript:nm_mostra_img(var_ajax_img_foto_pet_" . $sc_seq_vert . ", '" . $this->nmgp_return_img['foto_pet_'][0] . "', '" . $this->nmgp_return_img['foto_pet_'][1] . "')\"><img id=\"id_ajax_img_foto_pet_" . $sc_seq_vert . "\"  border=\"0\" src=\"$out_foto_pet_\"></a>"; } else {  echo "<img id=\"id_ajax_img_foto_pet_" . $sc_seq_vert . "\" border=\"0\" style=\"display: none\">"; } ?><br>
<?php if ($bTestReadOnly_foto_pet_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["foto_pet_"]) &&  $this->nmgp_cmp_readonly["foto_pet_"] == "on") { 

 ?>
<img id=\"foto_pet_<?php echo $sc_seq_vert ?><?php echo $sc_seq_vert; ?>_img_uploading\" style=\"display: none\" border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" /><input type="hidden" name="foto_pet_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($foto_pet_) . "\">" . $foto_pet_ . ""; ?>
<?php } else { ?>
<span id="id_read_off_foto_pet_<?php echo $sc_seq_vert ?>" class="css_read_off_foto_pet_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_foto_pet_; ?>"><span style="display:inline-block"><span id="sc-id-upload-select-foto_pet_<?php echo $sc_seq_vert ?>" class="fileinput-button fileinput-button-padding scButton_default">
 <span><?php echo $this->Ini->Nm_lang['lang_select_file'] ?></span>

 <input class="sc-js-input scFormObjectOddMult css_foto_pet__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" type="file" name="foto_pet_<?php echo $sc_seq_vert ?>[]" id="id_sc_field_foto_pet_<?php echo $sc_seq_vert ?>" onchange="<?php if ($this->nmgp_opcao == "novo") {echo "if (document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]']) { document.F1.elements['sc_check_vert[" . $sc_seq_vert . "]'].checked = true }"; }?>"></span></span>
<?php
   $sCheckInsert = "";
   if ('novo' == $this->nmgp_opcao)
   {
      $sCheckInsert = "nm_check_insert(" . $sc_seq_vert . ");";
   }
?>
<span id="chk_ajax_img_foto_pet_<?php echo $sc_seq_vert; ?>"<?php if ($this->nmgp_opcao == "novo" || empty($foto_pet_)) { echo " style=\"display: none\""; } ?>> <input type=checkbox name="foto_pet__limpa<?php echo $sc_seq_vert ?>" value="<?php echo $foto_pet__limpa . '" '; if ($foto_pet__limpa == "S"){echo "checked ";} ?> onclick="this.value = ''; if (this.checked){ this.value = 'S'};<?php echo $sCheckInsert ?>"><?php echo $this->Ini->Nm_lang['lang_btns_dele_hint']; ?> &nbsp;</span><img id="foto_pet_<?php echo $sc_seq_vert ?><?php echo $sc_seq_vert; ?>_img_uploading" style="display: none" border="0" src="<?php echo $this->Ini->path_icones; ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" /><div id="id_img_loader_foto_pet_<?php echo $sc_seq_vert; ?>" class="progress progress-success progress-striped active scProgressBarStart" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="display: none"><div class="bar scProgressBarLoading">&nbsp;</div></div><img id="id_ajax_loader_foto_pet_<?php echo $sc_seq_vert; ?>" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" style="display: none" /></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_foto_pet_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_foto_pet_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['nome_']) && $this->nmgp_cmp_hidden['nome_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nome_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($nome_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_nome__line" id="hidden_field_data_nome_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_nome_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_nome__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_nome_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["nome_"]) &&  $this->nmgp_cmp_readonly["nome_"] == "on") { 

 ?>
<input type="hidden" name="nome_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($nome_) . "\">" . $nome_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_nome_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-nome_<?php echo $sc_seq_vert ?> css_nome__line" style="<?php echo $sStyleReadLab_nome_; ?>"><?php echo $this->form_format_readonly("nome_", $this->form_encode_input($this->nome_)); ?></span><span id="id_read_off_nome_<?php echo $sc_seq_vert ?>" class="css_read_off_nome_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_nome_; ?>">
 <input class="sc-js-input scFormObjectOddMult css_nome__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_nome_<?php echo $sc_seq_vert ?>" type=text name="nome_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($nome_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=45"; } ?> maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nome_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nome_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['idpet_raca_']) && $this->nmgp_cmp_hidden['idpet_raca_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="idpet_raca_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->idpet_raca_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_idpet_raca__line" id="hidden_field_data_idpet_raca_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_idpet_raca_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_idpet_raca__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_idpet_raca_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idpet_raca_"]) &&  $this->nmgp_cmp_readonly["idpet_raca_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_'] = array(); 
    }

   $old_value_data_nascimento_ = $this->data_nascimento_;
   $old_value_idpet_ = $this->idpet_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_nascimento_ = $this->data_nascimento_;
   $unformatted_value_idpet_ = $this->idpet_;

   $nm_comando = "SELECT idpet_raca, descricao  FROM pet_raca  ORDER BY descricao";

   $this->data_nascimento_ = $old_value_data_nascimento_;
   $this->idpet_ = $old_value_idpet_;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_raca_'][] = $rs->fields[0];
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
   $idpet_raca__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idpet_raca__1))
          {
              foreach ($this->idpet_raca__1 as $tmp_idpet_raca_)
              {
                  if (trim($tmp_idpet_raca_) === trim($cadaselect[1])) { $idpet_raca__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idpet_raca_) === trim($cadaselect[1])) { $idpet_raca__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="idpet_raca_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idpet_raca_) . "\">" . $idpet_raca__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_idpet_raca_();
   $x = 0 ; 
   $idpet_raca__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idpet_raca__1))
          {
              foreach ($this->idpet_raca__1 as $tmp_idpet_raca_)
              {
                  if (trim($tmp_idpet_raca_) === trim($cadaselect[1])) { $idpet_raca__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idpet_raca_) === trim($cadaselect[1])) { $idpet_raca__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($idpet_raca__look))
          {
              $idpet_raca__look = $this->idpet_raca_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_idpet_raca_" . $sc_seq_vert . "\" class=\"css_idpet_raca__line\" style=\"" .  $sStyleReadLab_idpet_raca_ . "\">" . $this->form_format_readonly("idpet_raca_", $this->form_encode_input($idpet_raca__look)) . "</span><span id=\"id_read_off_idpet_raca_" . $sc_seq_vert . "\" class=\"css_read_off_idpet_raca_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_idpet_raca_ . "\">";
   echo " <span id=\"idAjaxSelect_idpet_raca_" .  $sc_seq_vert . "\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOddMult css_idpet_raca__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_idpet_raca_" . $sc_seq_vert . "\" name=\"idpet_raca_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->idpet_raca_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->idpet_raca_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idpet_raca_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idpet_raca_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['data_nascimento_']) && $this->nmgp_cmp_hidden['data_nascimento_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_nascimento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($data_nascimento_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_data_nascimento__line" id="hidden_field_data_data_nascimento_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_data_nascimento_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_data_nascimento__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_data_nascimento_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_nascimento_"]) &&  $this->nmgp_cmp_readonly["data_nascimento_"] == "on") { 

 ?>
<input type="hidden" name="data_nascimento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($data_nascimento_) . "\">" . $data_nascimento_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_nascimento_<?php echo $sc_seq_vert ?>" class="sc-ui-readonly-data_nascimento_<?php echo $sc_seq_vert ?> css_data_nascimento__line" style="<?php echo $sStyleReadLab_data_nascimento_; ?>"><?php echo $this->form_format_readonly("data_nascimento_", $this->form_encode_input($data_nascimento_)); ?></span><span id="id_read_off_data_nascimento_<?php echo $sc_seq_vert ?>" class="css_read_off_data_nascimento_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_nascimento_; ?>"><?php
$tmp_form_data = $this->field_config['data_nascimento_']['date_format'];
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

 <input class="sc-js-input scFormObjectOddMult css_data_nascimento__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_nascimento_<?php echo $sc_seq_vert ?>" type=text name="data_nascimento_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($data_nascimento_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_nascimento_']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_nascimento_']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddMultWm', maskChars: '(){}[].,;:-+/ '}" ></span>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_nascimento_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_nascimento_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['sexo_']) && $this->nmgp_cmp_hidden['sexo_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sexo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->sexo_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_sexo__line" id="hidden_field_data_sexo_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_sexo_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_sexo__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_sexo_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sexo_"]) &&  $this->nmgp_cmp_readonly["sexo_"] == "on") { 

$sexo__look = "";
 if ($this->sexo_ == "MACHO") { $sexo__look .= "MACHO" ;} 
 if ($this->sexo_ == "FEMEA") { $sexo__look .= "FEMEA" ;} 
 if (empty($sexo__look)) { $sexo__look = $this->sexo_; }
?>
<input type="hidden" name="sexo_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($sexo_) . "\">" . $sexo__look . ""; ?>
<?php } else { ?>
<?php

$sexo__look = "";
 if ($this->sexo_ == "MACHO") { $sexo__look .= "MACHO" ;} 
 if ($this->sexo_ == "FEMEA") { $sexo__look .= "FEMEA" ;} 
 if (empty($sexo__look)) { $sexo__look = $this->sexo_; }
?>
<span id="id_read_on_sexo_<?php echo $sc_seq_vert ; ?>" class="css_sexo__line"  style="<?php echo $sStyleReadLab_sexo_; ?>"><?php echo $this->form_format_readonly("sexo_", $this->form_encode_input($sexo__look)); ?></span><span id="id_read_off_sexo_<?php echo $sc_seq_vert ; ?>" class="css_read_off_sexo_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap; <?php echo $sStyleReadInp_sexo_; ?>">
 <span id="idAjaxSelect_sexo_<?php echo $sc_seq_vert ?>" class="<?php echo $this->classes_100perc_fields['span_select'] ?>"><select class="sc-js-input scFormObjectOddMult css_sexo__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sexo_<?php echo $sc_seq_vert ?>" name="sexo_<?php echo $sc_seq_vert ?>" size="1" alt="{type: 'select', enterTab: false}">
 <option  value="MACHO" <?php  if ($this->sexo_ == "MACHO") { echo " selected" ;} ?>>MACHO</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_sexo_'][] = 'MACHO'; ?>
 <option  value="FEMEA" <?php  if ($this->sexo_ == "FEMEA") { echo " selected" ;} ?>>FEMEA</option>
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_sexo_'][] = 'FEMEA'; ?>
 </select></span>
</span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sexo_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sexo_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['idpet_especie_']) && $this->nmgp_cmp_hidden['idpet_especie_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="idpet_especie_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->idpet_especie_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_idpet_especie__line" id="hidden_field_data_idpet_especie_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_idpet_especie_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_idpet_especie__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_idpet_especie_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idpet_especie_"]) &&  $this->nmgp_cmp_readonly["idpet_especie_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_'] = array(); 
    }

   $old_value_data_nascimento_ = $this->data_nascimento_;
   $old_value_idpet_ = $this->idpet_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_nascimento_ = $this->data_nascimento_;
   $unformatted_value_idpet_ = $this->idpet_;

   $nm_comando = "SELECT idpet_especie, descricao  FROM pet_especie  ORDER BY descricao";

   $this->data_nascimento_ = $old_value_data_nascimento_;
   $this->idpet_ = $old_value_idpet_;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_especie_'][] = $rs->fields[0];
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
   $idpet_especie__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idpet_especie__1))
          {
              foreach ($this->idpet_especie__1 as $tmp_idpet_especie_)
              {
                  if (trim($tmp_idpet_especie_) === trim($cadaselect[1])) { $idpet_especie__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idpet_especie_) === trim($cadaselect[1])) { $idpet_especie__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="idpet_especie_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idpet_especie_) . "\">" . $idpet_especie__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_idpet_especie_();
   $x = 0 ; 
   $idpet_especie__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idpet_especie__1))
          {
              foreach ($this->idpet_especie__1 as $tmp_idpet_especie_)
              {
                  if (trim($tmp_idpet_especie_) === trim($cadaselect[1])) { $idpet_especie__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idpet_especie_) === trim($cadaselect[1])) { $idpet_especie__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($idpet_especie__look))
          {
              $idpet_especie__look = $this->idpet_especie_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_idpet_especie_" . $sc_seq_vert . "\" class=\"css_idpet_especie__line\" style=\"" .  $sStyleReadLab_idpet_especie_ . "\">" . $this->form_format_readonly("idpet_especie_", $this->form_encode_input($idpet_especie__look)) . "</span><span id=\"id_read_off_idpet_especie_" . $sc_seq_vert . "\" class=\"css_read_off_idpet_especie_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_idpet_especie_ . "\">";
   echo " <span id=\"idAjaxSelect_idpet_especie_" .  $sc_seq_vert . "\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOddMult css_idpet_especie__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_idpet_especie_" . $sc_seq_vert . "\" name=\"idpet_especie_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->idpet_especie_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->idpet_especie_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idpet_especie_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idpet_especie_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['idpet_pelagem_']) && $this->nmgp_cmp_hidden['idpet_pelagem_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="idpet_pelagem_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($this->idpet_pelagem_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOddMult css_idpet_pelagem__line" id="hidden_field_data_idpet_pelagem_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_idpet_pelagem_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_idpet_pelagem__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly_idpet_pelagem_ && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["idpet_pelagem_"]) &&  $this->nmgp_cmp_readonly["idpet_pelagem_"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_'] = array(); 
    }

   $old_value_data_nascimento_ = $this->data_nascimento_;
   $old_value_idpet_ = $this->idpet_;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_data_nascimento_ = $this->data_nascimento_;
   $unformatted_value_idpet_ = $this->idpet_;

   $nm_comando = "SELECT idpet_pelagem, descricao  FROM pet_pelagem  ORDER BY descricao";

   $this->data_nascimento_ = $old_value_data_nascimento_;
   $this->idpet_ = $old_value_idpet_;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['Lookup_idpet_pelagem_'][] = $rs->fields[0];
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
   $idpet_pelagem__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idpet_pelagem__1))
          {
              foreach ($this->idpet_pelagem__1 as $tmp_idpet_pelagem_)
              {
                  if (trim($tmp_idpet_pelagem_) === trim($cadaselect[1])) { $idpet_pelagem__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idpet_pelagem_) === trim($cadaselect[1])) { $idpet_pelagem__look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="idpet_pelagem_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idpet_pelagem_) . "\">" . $idpet_pelagem__look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_idpet_pelagem_();
   $x = 0 ; 
   $idpet_pelagem__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->idpet_pelagem__1))
          {
              foreach ($this->idpet_pelagem__1 as $tmp_idpet_pelagem_)
              {
                  if (trim($tmp_idpet_pelagem_) === trim($cadaselect[1])) { $idpet_pelagem__look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->idpet_pelagem_) === trim($cadaselect[1])) { $idpet_pelagem__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($idpet_pelagem__look))
          {
              $idpet_pelagem__look = $this->idpet_pelagem_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_idpet_pelagem_" . $sc_seq_vert . "\" class=\"css_idpet_pelagem__line\" style=\"" .  $sStyleReadLab_idpet_pelagem_ . "\">" . $this->form_format_readonly("idpet_pelagem_", $this->form_encode_input($idpet_pelagem__look)) . "</span><span id=\"id_read_off_idpet_pelagem_" . $sc_seq_vert . "\" class=\"css_read_off_idpet_pelagem_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_idpet_pelagem_ . "\">";
   echo " <span id=\"idAjaxSelect_idpet_pelagem_" .  $sc_seq_vert . "\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOddMult css_idpet_pelagem__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_idpet_pelagem_" . $sc_seq_vert . "\" name=\"idpet_pelagem_" . $sc_seq_vert . "\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->idpet_pelagem_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->idpet_pelagem_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idpet_pelagem_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idpet_pelagem_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php if (isset($this->nmgp_cmp_hidden['idpet_']) && $this->nmgp_cmp_hidden['idpet_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idpet_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idpet_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOddMult css_idpet__line" id="hidden_field_data_idpet_<?php echo $sc_seq_vert; ?>" style="<?php echo $sStyleHidden_idpet_; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOddMult css_idpet__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_idpet_<?php echo $sc_seq_vert ?>" class="css_idpet__line" style="<?php echo $sStyleReadLab_idpet_; ?>"><?php echo $this->form_format_readonly("idpet_", $this->form_encode_input($this->idpet_)); ?></span><span id="id_read_off_idpet_<?php echo $sc_seq_vert ?>" class="css_read_off_idpet_" style="<?php echo $sStyleReadInp_idpet_; ?>"><input type="hidden" id="id_sc_field_idpet_<?php echo $sc_seq_vert ?>" name="idpet_<?php echo $sc_seq_vert ?>" value="<?php echo $this->form_encode_input($idpet_) . "\">"?>
<span id="id_ajax_label_idpet_<?php echo $sc_seq_vert; ?>"><?php echo nl2br($idpet_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idpet_<?php echo $sc_seq_vert; ?>_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idpet_<?php echo $sc_seq_vert; ?>_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php }?>





   </tr>
<?php   
        if (isset($sCheckRead_foto_pet_))
       {
           $this->nmgp_cmp_readonly['foto_pet_'] = $sCheckRead_foto_pet_;
       }
       if ('display: none;' == $sStyleHidden_foto_pet_)
       {
           $this->nmgp_cmp_hidden['foto_pet_'] = 'off';
       }
       if (isset($sCheckRead_nome_))
       {
           $this->nmgp_cmp_readonly['nome_'] = $sCheckRead_nome_;
       }
       if ('display: none;' == $sStyleHidden_nome_)
       {
           $this->nmgp_cmp_hidden['nome_'] = 'off';
       }
       if (isset($sCheckRead_idpet_raca_))
       {
           $this->nmgp_cmp_readonly['idpet_raca_'] = $sCheckRead_idpet_raca_;
       }
       if ('display: none;' == $sStyleHidden_idpet_raca_)
       {
           $this->nmgp_cmp_hidden['idpet_raca_'] = 'off';
       }
       if (isset($sCheckRead_data_nascimento_))
       {
           $this->nmgp_cmp_readonly['data_nascimento_'] = $sCheckRead_data_nascimento_;
       }
       if ('display: none;' == $sStyleHidden_data_nascimento_)
       {
           $this->nmgp_cmp_hidden['data_nascimento_'] = 'off';
       }
       if (isset($sCheckRead_sexo_))
       {
           $this->nmgp_cmp_readonly['sexo_'] = $sCheckRead_sexo_;
       }
       if ('display: none;' == $sStyleHidden_sexo_)
       {
           $this->nmgp_cmp_hidden['sexo_'] = 'off';
       }
       if (isset($sCheckRead_idpet_especie_))
       {
           $this->nmgp_cmp_readonly['idpet_especie_'] = $sCheckRead_idpet_especie_;
       }
       if ('display: none;' == $sStyleHidden_idpet_especie_)
       {
           $this->nmgp_cmp_hidden['idpet_especie_'] = 'off';
       }
       if (isset($sCheckRead_idpet_pelagem_))
       {
           $this->nmgp_cmp_readonly['idpet_pelagem_'] = $sCheckRead_idpet_pelagem_;
       }
       if ('display: none;' == $sStyleHidden_idpet_pelagem_)
       {
           $this->nmgp_cmp_hidden['idpet_pelagem_'] = 'off';
       }
       if (isset($sCheckRead_idpet_))
       {
           $this->nmgp_cmp_readonly['idpet_'] = $sCheckRead_idpet_;
       }
       if ('display: none;' == $sStyleHidden_idpet_)
       {
           $this->nmgp_cmp_hidden['idpet_'] = 'off';
       }

   }
   if ($Line_Add) 
   { 
       $this->New_Line = ob_get_contents();
       ob_end_clean();
       $this->nmgp_opcao = $guarda_nmgp_opcao;
       $this->form_vert_form_pet_cliente = $guarda_form_vert_form_pet_cliente;
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
 <div id="sc-id-fixedheaders-placeholder" style="display: none; position: fixed; top: 0; z-index: 500"></div>
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
<?php echo $this->Ini->Nm_lang['lang_errm_empt'];
?>
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
if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_modal']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['run_modal'])
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
   </td></tr></table>
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_pet_cliente");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_pet_cliente");
 parent.scAjaxDetailHeight("form_pet_cliente", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_pet_cliente", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_pet_cliente", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['sc_modal'])
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
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			do_ajax_form_pet_cliente_add_new_line(); return false;
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_sai_modal() {
		if ($("#sc_b_sai_t.sc-unique-btn-5").length && $("#sc_b_sai_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet_cliente']['buttonStatus'] = $this->nmgp_botoes;
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
