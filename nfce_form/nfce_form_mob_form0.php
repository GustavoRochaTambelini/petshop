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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("Emissão de Documento Fiscal de Venda"); } else { echo strip_tags("Emissão de Documento Fiscal de Venda"); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>nfce_form/nfce_form_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("nfce_form_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['last'] : 'off'); ?>";
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

 function atualiza_detalhe() {
  var fram = document.getElementById('nmsc_iframe_liga_nfce_detalhe');
  var srcant = fram.src;
  fram.src='';
  fram.src = srcant;
  
  
  
 } // atualiza_detalhe

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
     if (F_name == "qtde_item")
     {
        $('input[name="qtde_item"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="qtde_item"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="qtde_item"]').removeClass("scFormInputDisabled");
        }
        $('input[id="cap_qtde_item"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('#cap_qtde_item').hide();
        }
        else {
            $('#cap_qtde_item').show();
        }
     }
     if (F_name == "sc_field_0")
     {
        $('input[name="sc_field_0"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="sc_field_0"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="sc_field_0"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "pra_pular")
     {
        $('input[name="pra_pular"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="pra_pular"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="pra_pular"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('nfce_form_mob_jquery.php');

?>
var applicationKeys = "";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
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
    return false;
}

 var Dyn_Ini  = true;
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

<?php
if (!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName)
{
?>
  scFocusField('qtde_item');

<?php
}
?>
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['nfce_form']['error_buffer']) && '' != $_SESSION['scriptcase']['nfce_form']['error_buffer'])
{
    echo $_SESSION['scriptcase']['nfce_form']['error_buffer'];
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
 include_once("nfce_form_mob_js0.php");
?>
<script type="text/javascript"> 
nmdg_enter_tab = true;
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
               action="nfce_form_mob.php" 
               onsubmit="return false;" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['insert_validation']; ?>">
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
<input type="hidden" name="idorcamento" value="<?php  echo $this->form_encode_input($this->idorcamento) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['nfce_form_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['nfce_form_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><td class="scFormErrorMessage scFormToastMessage"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorMessageFont" style="padding: 0px; vertical-align: top; width: 100%"><span id="id_error_display_table_text"></span></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
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
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['btn_F9'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['btn_f9']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['btn_f9']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['btn_f9']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['btn_f9']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['btn_f9'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "btn_f9", "scBtnFn_btn_F9()", "scBtnFn_btn_F9()", "sc_btn_F9_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_2";
        echo "<img id=\"NM_sep_2\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['btn_F7'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['btn_f7']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_disabled']['btn_f7']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['btn_f7']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['btn_f7']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['btn_label']['btn_f7'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "btn_f7", "scBtnFn_btn_F7()", "scBtnFn_btn_F7()", "sc_btn_F7_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['f2']))
   {
       $this->nmgp_cmp_hidden['f2'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['f4']))
   {
       $this->nmgp_cmp_hidden['f4'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['f7']))
   {
       $this->nmgp_cmp_hidden['f7'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['f9']))
   {
       $this->nmgp_cmp_hidden['f9'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['chk_f2']))
   {
       $this->nmgp_cmp_hidden['chk_f2'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['cod_barra']))
   {
       $this->nmgp_cmp_hidden['cod_barra'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['sc_field_0']))
   {
       $this->nmgp_cmp_hidden['sc_field_0'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['quantidade']))
   {
       $this->nmgp_cmp_hidden['quantidade'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['tecla']))
   {
       $this->nmgp_cmp_hidden['tecla'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['qtde_item']))
    {
        $this->nm_new_label['qtde_item'] = "Produto";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $qtde_item = $this->qtde_item;
   $sStyleHidden_qtde_item = '';
   if (isset($this->nmgp_cmp_hidden['qtde_item']) && $this->nmgp_cmp_hidden['qtde_item'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['qtde_item']);
       $sStyleHidden_qtde_item = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_qtde_item = 'display: none;';
   $sStyleReadInp_qtde_item = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['qtde_item']) && $this->nmgp_cmp_readonly['qtde_item'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['qtde_item']);
       $sStyleReadLab_qtde_item = '';
       $sStyleReadInp_qtde_item = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['qtde_item']) && $this->nmgp_cmp_hidden['qtde_item'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="qtde_item" value="<?php echo $this->form_encode_input($qtde_item) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_qtde_item_line" id="hidden_field_data_qtde_item" style="<?php echo $sStyleHidden_qtde_item; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_qtde_item_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_qtde_item_label" style=""><span id="id_label_qtde_item"><?php echo $this->nm_new_label['qtde_item']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["qtde_item"]) &&  $this->nmgp_cmp_readonly["qtde_item"] == "on") { 

 ?>
<input type="hidden" name="qtde_item" value="<?php echo $this->form_encode_input($qtde_item) . "\">" . $qtde_item . ""; ?>
<?php } else { ?>
<span id="id_read_on_qtde_item" class="sc-ui-readonly-qtde_item css_qtde_item_line" style="<?php echo $sStyleReadLab_qtde_item; ?>"><?php echo $this->form_format_readonly("qtde_item", $this->form_encode_input($this->qtde_item)); ?></span><span id="id_read_off_qtde_item" class="css_read_off_qtde_item<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_qtde_item; ?>">
 <input class="sc-js-input scFormObjectOdd css_qtde_item_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_qtde_item" type=text name="qtde_item" value="<?php echo $this->form_encode_input($qtde_item) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=30"; } ?> maxlength=30 alt="{datatype: 'text', maxLength: 30, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789,*$") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php
   $Sc_iframe_master = ($this->Embutida_call) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_nfce_form_mob*scout' : '';
   if (isset($this->Ini->sc_lig_md5["itens_captura"]) && $this->Ini->sc_lig_md5["itens_captura"] == "S") {
       $Parms_Lig  = "SC_glo_par_vg_empresa_id*scinvg_empresa_id*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutnmgp_parms_ret*scinF1,qtde_item,codigo_barras*scoutnm_evt_ret_busca*scin*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@nfce_form_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "SC_glo_par_vg_empresa_id*scinvg_empresa_id*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutnmgp_parms_ret*scinF1,qtde_item,codigo_barras*scoutnm_evt_ret_busca*scin*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
   }
?>

<?php if (!$this->Ini->Export_img_zip) { ?><?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "scModalCapture('" . $this->Ini->link_itens_captura_cons_psq . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=nfce_form_mob&KeepThis=true&TB_iframe=true&height=600&width=700&modal=true')", "scModalCapture('" . $this->Ini->link_itens_captura_cons_psq . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=nfce_form_mob&KeepThis=true&TB_iframe=true&height=600&width=700&modal=true')", "cap_qtde_item", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_qtde_item_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_qtde_item_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_qtde_item_dumb = ('' == $sStyleHidden_qtde_item) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_qtde_item_dumb" style="<?php echo $sStyleHidden_qtde_item_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont">Listagem</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['nfce_detalhe']))
    {
        $this->nm_new_label['nfce_detalhe'] = "nfce_detalhe";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $nfce_detalhe = $this->nfce_detalhe;
   $sStyleHidden_nfce_detalhe = '';
   if (isset($this->nmgp_cmp_hidden['nfce_detalhe']) && $this->nmgp_cmp_hidden['nfce_detalhe'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['nfce_detalhe']);
       $sStyleHidden_nfce_detalhe = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_nfce_detalhe = 'display: none;';
   $sStyleReadInp_nfce_detalhe = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['nfce_detalhe']) && $this->nmgp_cmp_readonly['nfce_detalhe'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['nfce_detalhe']);
       $sStyleReadLab_nfce_detalhe = '';
       $sStyleReadInp_nfce_detalhe = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['nfce_detalhe']) && $this->nmgp_cmp_hidden['nfce_detalhe'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="nfce_detalhe" value="<?php echo $this->form_encode_input($nfce_detalhe) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_nfce_detalhe_line" id="hidden_field_data_nfce_detalhe" style="<?php echo $sStyleHidden_nfce_detalhe; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_nfce_detalhe_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_nfce_detalhe'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_nfce_detalhe'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_nfce_detalhe'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_form_insert'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_form_delete'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_qtd_reg'] = '11';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_parms'] = "idorcamento*scin" . $this->nmgp_dados_form['idorcamento'] . "*scoutNM_btn_insert*scinN*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinN*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['foreign_key']['idorcamento'] = $this->nmgp_dados_form['idorcamento'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['where_filter'] = "idorcamento = " . $this->nmgp_dados_form['idorcamento'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['where_detal']  = "idorcamento = " . $this->nmgp_dados_form['idorcamento'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_form_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'nfce_form_mob_empty.htm' : $this->Ini->link_nfce_detalhe_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=320';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_nfce_detalhe']) && 'nmsc_iframe_liga_nfce_detalhe_mob' != $this->Ini->sc_lig_target['C_@scinf_nfce_detalhe'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_nfce_detalhe'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_nfce_detalhe'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_nfce_detalhe_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="320" width="770" name="nmsc_iframe_liga_nfce_detalhe_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_nfce_detalhe_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_nfce_detalhe_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_nfce_detalhe_dumb = ('' == $sStyleHidden_nfce_detalhe) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_nfce_detalhe_dumb" style="<?php echo $sStyleHidden_nfce_detalhe_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%; border-color: #fff;">   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont">Valores</TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['imagem']))
    {
        $this->nm_new_label['imagem'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $imagem = $this->imagem;
   $sStyleHidden_imagem = '';
   if (isset($this->nmgp_cmp_hidden['imagem']) && $this->nmgp_cmp_hidden['imagem'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['imagem']);
       $sStyleHidden_imagem = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_imagem = 'display: none;';
   $sStyleReadInp_imagem = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['imagem']) && $this->nmgp_cmp_readonly['imagem'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['imagem']);
       $sStyleReadLab_imagem = '';
       $sStyleReadInp_imagem = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['imagem']) && $this->nmgp_cmp_hidden['imagem'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="imagem" value="<?php echo $this->form_encode_input($imagem) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_imagem_line" id="hidden_field_data_imagem" style="<?php echo $sStyleHidden_imagem; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_imagem_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_imagem_label" style=""><span id="id_label_imagem"><?php echo $this->nm_new_label['imagem']; ?></span></span><br><span id="id_ajax_label_imagem"><?php echo $imagem?></span>
<input type="hidden" name="imagem" value="<?php echo $this->form_encode_input($imagem); ?>">
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_imagem_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_imagem_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cod_barra']))
    {
        $this->nm_new_label['cod_barra'] = "cod_barra";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cod_barra = $this->cod_barra;
   if (!isset($this->nmgp_cmp_hidden['cod_barra']))
   {
       $this->nmgp_cmp_hidden['cod_barra'] = 'off';
   }
   $sStyleHidden_cod_barra = '';
   if (isset($this->nmgp_cmp_hidden['cod_barra']) && $this->nmgp_cmp_hidden['cod_barra'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cod_barra']);
       $sStyleHidden_cod_barra = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cod_barra = 'display: none;';
   $sStyleReadInp_cod_barra = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cod_barra']) && $this->nmgp_cmp_readonly['cod_barra'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cod_barra']);
       $sStyleReadLab_cod_barra = '';
       $sStyleReadInp_cod_barra = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cod_barra']) && $this->nmgp_cmp_hidden['cod_barra'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cod_barra" value="<?php echo $this->form_encode_input($cod_barra) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cod_barra_line" id="hidden_field_data_cod_barra" style="<?php echo $sStyleHidden_cod_barra; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cod_barra_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cod_barra_label" style=""><span id="id_label_cod_barra"><?php echo $this->nm_new_label['cod_barra']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cod_barra"]) &&  $this->nmgp_cmp_readonly["cod_barra"] == "on") { 

 ?>
<input type="hidden" name="cod_barra" value="<?php echo $this->form_encode_input($cod_barra) . "\">" . $cod_barra . ""; ?>
<?php } else { ?>
<span id="id_read_on_cod_barra" class="sc-ui-readonly-cod_barra css_cod_barra_line" style="<?php echo $sStyleReadLab_cod_barra; ?>"><?php echo $this->form_format_readonly("cod_barra", $this->form_encode_input($this->cod_barra)); ?></span><span id="id_read_off_cod_barra" class="css_read_off_cod_barra<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cod_barra; ?>">
 <input class="sc-js-input scFormObjectOdd css_cod_barra_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cod_barra" type=text name="cod_barra" value="<?php echo $this->form_encode_input($cod_barra) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cod_barra_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cod_barra_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['tecla']))
    {
        $this->nm_new_label['tecla'] = "tecla";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tecla = $this->tecla;
   if (!isset($this->nmgp_cmp_hidden['tecla']))
   {
       $this->nmgp_cmp_hidden['tecla'] = 'off';
   }
   $sStyleHidden_tecla = '';
   if (isset($this->nmgp_cmp_hidden['tecla']) && $this->nmgp_cmp_hidden['tecla'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tecla']);
       $sStyleHidden_tecla = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tecla = 'display: none;';
   $sStyleReadInp_tecla = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tecla']) && $this->nmgp_cmp_readonly['tecla'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tecla']);
       $sStyleReadLab_tecla = '';
       $sStyleReadInp_tecla = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tecla']) && $this->nmgp_cmp_hidden['tecla'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="tecla" value="<?php echo $this->form_encode_input($tecla) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tecla_line" id="hidden_field_data_tecla" style="<?php echo $sStyleHidden_tecla; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tecla_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tecla_label" style=""><span id="id_label_tecla"><?php echo $this->nm_new_label['tecla']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tecla"]) &&  $this->nmgp_cmp_readonly["tecla"] == "on") { 

 ?>
<input type="hidden" name="tecla" value="<?php echo $this->form_encode_input($tecla) . "\">" . $tecla . ""; ?>
<?php } else { ?>
<span id="id_read_on_tecla" class="sc-ui-readonly-tecla css_tecla_line" style="<?php echo $sStyleReadLab_tecla; ?>"><?php echo $this->form_format_readonly("tecla", $this->form_encode_input($this->tecla)); ?></span><span id="id_read_off_tecla" class="css_read_off_tecla<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_tecla; ?>">
 <input class="sc-js-input scFormObjectOdd css_tecla_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_tecla" type=text name="tecla" value="<?php echo $this->form_encode_input($tecla) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'integer', maxLength: 20, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['tecla']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['tecla']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['tecla']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tecla_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tecla_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['f2']))
   {
       $this->nm_new_label['f2'] = "F2";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $f2 = $this->f2;
   if (!isset($this->nmgp_cmp_hidden['f2']))
   {
       $this->nmgp_cmp_hidden['f2'] = 'off';
   }
   $sStyleHidden_f2 = '';
   if (isset($this->nmgp_cmp_hidden['f2']) && $this->nmgp_cmp_hidden['f2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['f2']);
       $sStyleHidden_f2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_f2 = 'display: none;';
   $sStyleReadInp_f2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['f2']) && $this->nmgp_cmp_readonly['f2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['f2']);
       $sStyleReadLab_f2 = '';
       $sStyleReadInp_f2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['f2']) && $this->nmgp_cmp_hidden['f2'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="f2" value="<?php echo $this->form_encode_input($this->f2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->f2_1 = explode(";", trim($this->f2));
  } 
  else
  {
      if (empty($this->f2))
      {
          $this->f2_1= array(); 
      } 
      else
      {
          $this->f2_1= $this->f2; 
          $this->f2= ""; 
          foreach ($this->f2_1 as $cada_f2)
          {
             if (!empty($f2))
             {
                 $this->f2.= ";"; 
             } 
             $this->f2.= $cada_f2; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_f2_line" id="hidden_field_data_f2" style="<?php echo $sStyleHidden_f2; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_f2_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_f2_label" style=""><span id="id_label_f2"><?php echo $this->nm_new_label['f2']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["f2"]) &&  $this->nmgp_cmp_readonly["f2"] == "on") { 

$f2_look = "";
 if (in_array("a", $this->f2_1))  { $f2_look .= "a<br />";} 
?>
<input type="hidden" name="f2" value="<?php echo $this->form_encode_input($f2) . "\">" . $f2_look . ""; ?>
<?php } else { ?>

<?php

$f2_look = "";
 if (in_array("a", $this->f2_1))  { $f2_look .= "a<br />";} 
?>
<span id="id_read_on_f2" class="css_f2_line" style="<?php echo $sStyleReadLab_f2; ?>"><?php echo $this->form_format_readonly("f2", $this->form_encode_input($f2_look)); ?></span><span id="id_read_off_f2" class="css_read_off_f2 css_f2_line" style="<?php echo $sStyleReadInp_f2; ?>"><?php echo "<div id=\"idAjaxCheckbox_f2\" style=\"display: inline-block\" class=\"css_f2_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_f2_line"><?php $tempOptionId = "id-opt-f2" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-f2 sc-ui-checkbox-f2 sc-js-input" name="f2[]" value="a"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f2'][] = 'a'; ?>
<?php  if (in_array("a", $this->f2_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">a</label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_f2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_f2_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['f4']))
   {
       $this->nm_new_label['f4'] = "F4";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $f4 = $this->f4;
   if (!isset($this->nmgp_cmp_hidden['f4']))
   {
       $this->nmgp_cmp_hidden['f4'] = 'off';
   }
   $sStyleHidden_f4 = '';
   if (isset($this->nmgp_cmp_hidden['f4']) && $this->nmgp_cmp_hidden['f4'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['f4']);
       $sStyleHidden_f4 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_f4 = 'display: none;';
   $sStyleReadInp_f4 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['f4']) && $this->nmgp_cmp_readonly['f4'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['f4']);
       $sStyleReadLab_f4 = '';
       $sStyleReadInp_f4 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['f4']) && $this->nmgp_cmp_hidden['f4'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="f4" value="<?php echo $this->form_encode_input($this->f4) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->f4_1 = explode(";", trim($this->f4));
  } 
  else
  {
      if (empty($this->f4))
      {
          $this->f4_1= array(); 
      } 
      else
      {
          $this->f4_1= $this->f4; 
          $this->f4= ""; 
          foreach ($this->f4_1 as $cada_f4)
          {
             if (!empty($f4))
             {
                 $this->f4.= ";"; 
             } 
             $this->f4.= $cada_f4; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_f4_line" id="hidden_field_data_f4" style="<?php echo $sStyleHidden_f4; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_f4_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_f4_label" style=""><span id="id_label_f4"><?php echo $this->nm_new_label['f4']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["f4"]) &&  $this->nmgp_cmp_readonly["f4"] == "on") { 

$f4_look = "";
 if (in_array("a", $this->f4_1))  { $f4_look .= "a<br />";} 
?>
<input type="hidden" name="f4" value="<?php echo $this->form_encode_input($f4) . "\">" . $f4_look . ""; ?>
<?php } else { ?>

<?php

$f4_look = "";
 if (in_array("a", $this->f4_1))  { $f4_look .= "a<br />";} 
?>
<span id="id_read_on_f4" class="css_f4_line" style="<?php echo $sStyleReadLab_f4; ?>"><?php echo $this->form_format_readonly("f4", $this->form_encode_input($f4_look)); ?></span><span id="id_read_off_f4" class="css_read_off_f4 css_f4_line" style="<?php echo $sStyleReadInp_f4; ?>"><?php echo "<div id=\"idAjaxCheckbox_f4\" style=\"display: inline-block\" class=\"css_f4_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_f4_line"><?php $tempOptionId = "id-opt-f4" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-f4 sc-ui-checkbox-f4 sc-js-input" name="f4[]" value="a"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f4'][] = 'a'; ?>
<?php  if (in_array("a", $this->f4_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">a</label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_f4_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_f4_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['f7']))
   {
       $this->nm_new_label['f7'] = "F7";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $f7 = $this->f7;
   if (!isset($this->nmgp_cmp_hidden['f7']))
   {
       $this->nmgp_cmp_hidden['f7'] = 'off';
   }
   $sStyleHidden_f7 = '';
   if (isset($this->nmgp_cmp_hidden['f7']) && $this->nmgp_cmp_hidden['f7'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['f7']);
       $sStyleHidden_f7 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_f7 = 'display: none;';
   $sStyleReadInp_f7 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['f7']) && $this->nmgp_cmp_readonly['f7'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['f7']);
       $sStyleReadLab_f7 = '';
       $sStyleReadInp_f7 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['f7']) && $this->nmgp_cmp_hidden['f7'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="f7" value="<?php echo $this->form_encode_input($this->f7) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->f7_1 = explode(";", trim($this->f7));
  } 
  else
  {
      if (empty($this->f7))
      {
          $this->f7_1= array(); 
      } 
      else
      {
          $this->f7_1= $this->f7; 
          $this->f7= ""; 
          foreach ($this->f7_1 as $cada_f7)
          {
             if (!empty($f7))
             {
                 $this->f7.= ";"; 
             } 
             $this->f7.= $cada_f7; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_f7_line" id="hidden_field_data_f7" style="<?php echo $sStyleHidden_f7; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_f7_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_f7_label" style=""><span id="id_label_f7"><?php echo $this->nm_new_label['f7']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["f7"]) &&  $this->nmgp_cmp_readonly["f7"] == "on") { 

$f7_look = "";
 if (in_array("a", $this->f7_1))  { $f7_look .= "a<br />";} 
?>
<input type="hidden" name="f7" value="<?php echo $this->form_encode_input($f7) . "\">" . $f7_look . ""; ?>
<?php } else { ?>

<?php

$f7_look = "";
 if (in_array("a", $this->f7_1))  { $f7_look .= "a<br />";} 
?>
<span id="id_read_on_f7" class="css_f7_line" style="<?php echo $sStyleReadLab_f7; ?>"><?php echo $this->form_format_readonly("f7", $this->form_encode_input($f7_look)); ?></span><span id="id_read_off_f7" class="css_read_off_f7 css_f7_line" style="<?php echo $sStyleReadInp_f7; ?>"><?php echo "<div id=\"idAjaxCheckbox_f7\" style=\"display: inline-block\" class=\"css_f7_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_f7_line"><?php $tempOptionId = "id-opt-f7" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-f7 sc-ui-checkbox-f7 sc-js-input" name="f7[]" value="a"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f7'][] = 'a'; ?>
<?php  if (in_array("a", $this->f7_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">a</label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_f7_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_f7_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['f9']))
   {
       $this->nm_new_label['f9'] = "F9";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $f9 = $this->f9;
   if (!isset($this->nmgp_cmp_hidden['f9']))
   {
       $this->nmgp_cmp_hidden['f9'] = 'off';
   }
   $sStyleHidden_f9 = '';
   if (isset($this->nmgp_cmp_hidden['f9']) && $this->nmgp_cmp_hidden['f9'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['f9']);
       $sStyleHidden_f9 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_f9 = 'display: none;';
   $sStyleReadInp_f9 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['f9']) && $this->nmgp_cmp_readonly['f9'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['f9']);
       $sStyleReadLab_f9 = '';
       $sStyleReadInp_f9 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['f9']) && $this->nmgp_cmp_hidden['f9'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="f9" value="<?php echo $this->form_encode_input($this->f9) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->f9_1 = explode(";", trim($this->f9));
  } 
  else
  {
      if (empty($this->f9))
      {
          $this->f9_1= array(); 
      } 
      else
      {
          $this->f9_1= $this->f9; 
          $this->f9= ""; 
          foreach ($this->f9_1 as $cada_f9)
          {
             if (!empty($f9))
             {
                 $this->f9.= ";"; 
             } 
             $this->f9.= $cada_f9; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_f9_line" id="hidden_field_data_f9" style="<?php echo $sStyleHidden_f9; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_f9_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_f9_label" style=""><span id="id_label_f9"><?php echo $this->nm_new_label['f9']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["f9"]) &&  $this->nmgp_cmp_readonly["f9"] == "on") { 

$f9_look = "";
 if (in_array("a", $this->f9_1))  { $f9_look .= "a<br />";} 
?>
<input type="hidden" name="f9" value="<?php echo $this->form_encode_input($f9) . "\">" . $f9_look . ""; ?>
<?php } else { ?>

<?php

$f9_look = "";
 if (in_array("a", $this->f9_1))  { $f9_look .= "a<br />";} 
?>
<span id="id_read_on_f9" class="css_f9_line" style="<?php echo $sStyleReadLab_f9; ?>"><?php echo $this->form_format_readonly("f9", $this->form_encode_input($f9_look)); ?></span><span id="id_read_off_f9" class="css_read_off_f9 css_f9_line" style="<?php echo $sStyleReadInp_f9; ?>"><?php echo "<div id=\"idAjaxCheckbox_f9\" style=\"display: inline-block\" class=\"css_f9_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_f9_line"><?php $tempOptionId = "id-opt-f9" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-f9 sc-ui-checkbox-f9 sc-js-input" name="f9[]" value="a"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f9'][] = 'a'; ?>
<?php  if (in_array("a", $this->f9_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">a</label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_f9_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_f9_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['chk_f2']))
   {
       $this->nm_new_label['chk_f2'] = "chk_F2";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $chk_f2 = $this->chk_f2;
   if (!isset($this->nmgp_cmp_hidden['chk_f2']))
   {
       $this->nmgp_cmp_hidden['chk_f2'] = 'off';
   }
   $sStyleHidden_chk_f2 = '';
   if (isset($this->nmgp_cmp_hidden['chk_f2']) && $this->nmgp_cmp_hidden['chk_f2'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['chk_f2']);
       $sStyleHidden_chk_f2 = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_chk_f2 = 'display: none;';
   $sStyleReadInp_chk_f2 = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['chk_f2']) && $this->nmgp_cmp_readonly['chk_f2'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['chk_f2']);
       $sStyleReadLab_chk_f2 = '';
       $sStyleReadInp_chk_f2 = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['chk_f2']) && $this->nmgp_cmp_hidden['chk_f2'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="chk_f2" value="<?php echo $this->form_encode_input($this->chk_f2) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->chk_f2_1 = explode(";", trim($this->chk_f2));
  } 
  else
  {
      if (empty($this->chk_f2))
      {
          $this->chk_f2_1= array(); 
      } 
      else
      {
          $this->chk_f2_1= $this->chk_f2; 
          $this->chk_f2= ""; 
          foreach ($this->chk_f2_1 as $cada_chk_f2)
          {
             if (!empty($chk_f2))
             {
                 $this->chk_f2.= ";"; 
             } 
             $this->chk_f2.= $cada_chk_f2; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_chk_f2_line" id="hidden_field_data_chk_f2" style="<?php echo $sStyleHidden_chk_f2; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_chk_f2_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_chk_f2_label" style=""><span id="id_label_chk_f2"><?php echo $this->nm_new_label['chk_f2']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["chk_f2"]) &&  $this->nmgp_cmp_readonly["chk_f2"] == "on") { 

$chk_f2_look = "";
 if (in_array("a", $this->chk_f2_1))  { $chk_f2_look .= "a<br />";} 
?>
<input type="hidden" name="chk_f2" value="<?php echo $this->form_encode_input($chk_f2) . "\">" . $chk_f2_look . ""; ?>
<?php } else { ?>

<?php

$chk_f2_look = "";
 if (in_array("a", $this->chk_f2_1))  { $chk_f2_look .= "a<br />";} 
?>
<span id="id_read_on_chk_f2" class="css_chk_f2_line" style="<?php echo $sStyleReadLab_chk_f2; ?>"><?php echo $this->form_format_readonly("chk_f2", $this->form_encode_input($chk_f2_look)); ?></span><span id="id_read_off_chk_f2" class="css_read_off_chk_f2 css_chk_f2_line" style="<?php echo $sStyleReadInp_chk_f2; ?>"><?php echo "<div id=\"idAjaxCheckbox_chk_f2\" style=\"display: inline-block\" class=\"css_chk_f2_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_chk_f2_line"><?php $tempOptionId = "id-opt-chk_f2" . $sc_seq_vert . "-1"; ?>
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-chk_f2 sc-ui-checkbox-chk_f2 sc-js-input" name="chk_f2[]" value="a"
 alt="{type: 'checkbox', enterTab: true}"<?php $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_chk_f2'][] = 'a'; ?>
<?php  if (in_array("a", $this->chk_f2_1))  { echo " checked" ;} ?> onClick="" ><label for="<?php echo $tempOptionId ?>">a</label></TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_chk_f2_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_chk_f2_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['quantidade']))
    {
        $this->nm_new_label['quantidade'] = "Quantidade";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $quantidade = $this->quantidade;
   if (!isset($this->nmgp_cmp_hidden['quantidade']))
   {
       $this->nmgp_cmp_hidden['quantidade'] = 'off';
   }
   $sStyleHidden_quantidade = '';
   if (isset($this->nmgp_cmp_hidden['quantidade']) && $this->nmgp_cmp_hidden['quantidade'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['quantidade']);
       $sStyleHidden_quantidade = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_quantidade = 'display: none;';
   $sStyleReadInp_quantidade = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['quantidade']) && $this->nmgp_cmp_readonly['quantidade'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['quantidade']);
       $sStyleReadLab_quantidade = '';
       $sStyleReadInp_quantidade = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['quantidade']) && $this->nmgp_cmp_hidden['quantidade'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="quantidade" value="<?php echo $this->form_encode_input($quantidade) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_quantidade_line" id="hidden_field_data_quantidade" style="<?php echo $sStyleHidden_quantidade; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_quantidade_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_quantidade_label" style=""><span id="id_label_quantidade"><?php echo $this->nm_new_label['quantidade']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["quantidade"]) &&  $this->nmgp_cmp_readonly["quantidade"] == "on") { 

 ?>
<input type="hidden" name="quantidade" value="<?php echo $this->form_encode_input($quantidade) . "\">" . $quantidade . ""; ?>
<?php } else { ?>
<span id="id_read_on_quantidade" class="sc-ui-readonly-quantidade css_quantidade_line" style="<?php echo $sStyleReadLab_quantidade; ?>"><?php echo $this->form_format_readonly("quantidade", $this->form_encode_input($this->quantidade)); ?></span><span id="id_read_off_quantidade" class="css_read_off_quantidade<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_quantidade; ?>">
 <input class="sc-js-input scFormObjectOdd css_quantidade_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_quantidade" type=text name="quantidade" value="<?php echo $this->form_encode_input($quantidade) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=6"; } ?> alt="{datatype: 'decimal', maxLength: 6, precision: 3, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['quantidade']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['quantidade']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['quantidade']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['quantidade']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_quantidade_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_quantidade_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sc_field_0']))
    {
        $this->nm_new_label['sc_field_0'] = "Produto";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sc_field_0 = $this->sc_field_0;
   if (!isset($this->nmgp_cmp_hidden['sc_field_0']))
   {
       $this->nmgp_cmp_hidden['sc_field_0'] = 'off';
   }
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

    <TD class="scFormDataOdd css_sc_field_0_line" id="hidden_field_data_sc_field_0" style="<?php echo $sStyleHidden_sc_field_0; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sc_field_0_line" style="padding: 0px"><span class="scFormLabelOddFormat css_sc_field_0_label" style=""><span id="id_label_sc_field_0"><?php echo $this->nm_new_label['sc_field_0']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sc_field_0"]) &&  $this->nmgp_cmp_readonly["sc_field_0"] == "on") { 

 ?>
<input type="hidden" name="sc_field_0" value="<?php echo $this->form_encode_input($sc_field_0) . "\">" . $sc_field_0 . ""; ?>
<?php } else { ?>
<span id="id_read_on_sc_field_0" class="sc-ui-readonly-sc_field_0 css_sc_field_0_line" style="<?php echo $sStyleReadLab_sc_field_0; ?>"><?php echo $this->form_format_readonly("sc_field_0", $this->form_encode_input($this->sc_field_0)); ?></span><span id="id_read_off_sc_field_0" class="css_read_off_sc_field_0<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sc_field_0; ?>">
 <input class="sc-js-input scFormObjectOdd css_sc_field_0_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sc_field_0" type=text name="sc_field_0" value="<?php echo $this->form_encode_input($sc_field_0) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sc_field_0_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sc_field_0_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['valor_total']))
    {
        $this->nm_new_label['valor_total'] = "Valor Total";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor_total = $this->valor_total;
   $sStyleHidden_valor_total = '';
   if (isset($this->nmgp_cmp_hidden['valor_total']) && $this->nmgp_cmp_hidden['valor_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor_total']);
       $sStyleHidden_valor_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor_total = 'display: none;';
   $sStyleReadInp_valor_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valor_total']) && $this->nmgp_cmp_readonly['valor_total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor_total']);
       $sStyleReadLab_valor_total = '';
       $sStyleReadInp_valor_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor_total']) && $this->nmgp_cmp_hidden['valor_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_total" value="<?php echo $this->form_encode_input($valor_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_valor_total_line" id="hidden_field_data_valor_total" style="<?php echo $sStyleHidden_valor_total; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_total_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_valor_total_label" style=""><span id="id_label_valor_total"><?php echo $this->nm_new_label['valor_total']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["valor_total"]) &&  $this->nmgp_cmp_readonly["valor_total"] == "on") { 

 ?>
<input type="hidden" name="valor_total" value="<?php echo $this->form_encode_input($valor_total) . "\">" . $valor_total . ""; ?>
<?php } else { ?>
<span id="id_read_on_valor_total" class="sc-ui-readonly-valor_total css_valor_total_line" style="<?php echo $sStyleReadLab_valor_total; ?>"><?php echo $this->form_format_readonly("valor_total", $this->form_encode_input($this->valor_total)); ?></span><span id="id_read_off_valor_total" class="css_read_off_valor_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_valor_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_valor_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_valor_total" type=text name="valor_total" value="<?php echo $this->form_encode_input($valor_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_total']['symbol_dec']); ?>', thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['valor_total']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['valor_total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['valor_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['pra_pular']))
    {
        $this->nm_new_label['pra_pular'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $pra_pular = $this->pra_pular;
   $sStyleHidden_pra_pular = '';
   if (isset($this->nmgp_cmp_hidden['pra_pular']) && $this->nmgp_cmp_hidden['pra_pular'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['pra_pular']);
       $sStyleHidden_pra_pular = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_pra_pular = 'display: none;';
   $sStyleReadInp_pra_pular = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['pra_pular']) && $this->nmgp_cmp_readonly['pra_pular'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['pra_pular']);
       $sStyleReadLab_pra_pular = '';
       $sStyleReadInp_pra_pular = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['pra_pular']) && $this->nmgp_cmp_hidden['pra_pular'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="pra_pular" value="<?php echo $this->form_encode_input($pra_pular) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_pra_pular_line" id="hidden_field_data_pra_pular" style="<?php echo $sStyleHidden_pra_pular; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_pra_pular_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_pra_pular_label" style=""><span id="id_label_pra_pular"><?php echo $this->nm_new_label['pra_pular']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["pra_pular"]) &&  $this->nmgp_cmp_readonly["pra_pular"] == "on") { 

 ?>
<input type="hidden" name="pra_pular" value="<?php echo $this->form_encode_input($pra_pular) . "\">" . $pra_pular . ""; ?>
<?php } else { ?>
<span id="id_read_on_pra_pular" class="sc-ui-readonly-pra_pular css_pra_pular_line" style="<?php echo $sStyleReadLab_pra_pular; ?>"><?php echo $this->form_format_readonly("pra_pular", $this->form_encode_input($this->pra_pular)); ?></span><span id="id_read_off_pra_pular" class="css_read_off_pra_pular<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_pra_pular; ?>">
 <input class="sc-js-input scFormObjectOdd css_pra_pular_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_pra_pular" type=text name="pra_pular" value="<?php echo $this->form_encode_input($pra_pular) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: true, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_pra_pular_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_pra_pular_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<?php
$this->displayAppFooter();
?>
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
   function scModalCapture(sUrl)
   {
<?php
   $Parent = ($this->Embutida_call) ? 'parent.' : '';
?>
    <?php echo $Parent ?>tb_show('', sUrl, '');
   }
  </script>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = 'hidden';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
$(window).bind("load", function() {
<?php
  $nm_sc_blocos_da_pag = array(0,1,2);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = '';";
      }
  }
?>
});
</script> 
<script>
<?php
if (isset($this->NM_ajax_info['focus']) && '' != $this->NM_ajax_info['focus'])
{
?>
scFocusField('<?php echo $this->NM_ajax_info['focus']; ?>');
<?php
}
?>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("nfce_form_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("nfce_form_mob");
 parent.scAjaxDetailHeight("nfce_form_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("nfce_form_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("nfce_form_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['sc_modal'])
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
		if ($("#sc_b_sai_t.sc-unique-btn-1").length && $("#sc_b_sai_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
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
		if ($("#sc_b_sai_t.sc-unique-btn-5").length && $("#sc_b_sai_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_btn_F9() {
		if ($("#sc_btn_F9_top").length && $("#sc_btn_F9_top").is(":visible")) {
		    if ($("#sc_btn_F9_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_btn_F9()
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-4").length && $("#sys_separator.sc-unique-btn-4").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-8").length && $("#sys_separator.sc-unique-btn-8").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
	}
	function scBtnFn_btn_F7() {
		if ($("#sc_btn_F7_top").length && $("#sc_btn_F7_top").is(":visible")) {
		    if ($("#sc_btn_F7_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_btn_F7()
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
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['buttonStatus'] = $this->nmgp_botoes;
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
