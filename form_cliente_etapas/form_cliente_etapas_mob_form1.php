<div id="form_cliente_etapas_mob_form1" style='<?php echo (1 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_etapas_mob']['form_wizard']['actual_step'] ? 'display: none; width: 1px; height: 0px; overflow: scroll' : ''); ?>'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idcliente']))
           {
               $this->nmgp_cmp_readonly['idcliente'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['razao_social']))
    {
        $this->nm_new_label['razao_social'] = "Razao Social";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $razao_social = $this->razao_social;
   $sStyleHidden_razao_social = '';
   if (isset($this->nmgp_cmp_hidden['razao_social']) && $this->nmgp_cmp_hidden['razao_social'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['razao_social']);
       $sStyleHidden_razao_social = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_razao_social = 'display: none;';
   $sStyleReadInp_razao_social = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['razao_social']) && $this->nmgp_cmp_readonly['razao_social'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['razao_social']);
       $sStyleReadLab_razao_social = '';
       $sStyleReadInp_razao_social = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['razao_social']) && $this->nmgp_cmp_hidden['razao_social'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="razao_social" value="<?php echo $this->form_encode_input($razao_social) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_razao_social_line" id="hidden_field_data_razao_social" style="<?php echo $sStyleHidden_razao_social; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_razao_social_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_razao_social_label" style=""><span id="id_label_razao_social"><?php echo $this->nm_new_label['razao_social']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["razao_social"]) &&  $this->nmgp_cmp_readonly["razao_social"] == "on") { 

 ?>
<input type="hidden" name="razao_social" value="<?php echo $this->form_encode_input($razao_social) . "\">" . $razao_social . ""; ?>
<?php } else { ?>
<span id="id_read_on_razao_social" class="sc-ui-readonly-razao_social css_razao_social_line" style="<?php echo $sStyleReadLab_razao_social; ?>"><?php echo $this->form_format_readonly("razao_social", $this->form_encode_input($this->razao_social)); ?></span><span id="id_read_off_razao_social" class="css_read_off_razao_social<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_razao_social; ?>">
 <input class="sc-js-input scFormObjectOdd css_razao_social_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_razao_social" type=text name="razao_social" value="<?php echo $this->form_encode_input($razao_social) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=45"; } ?> maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_razao_social_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_razao_social_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['data_nascimento']))
    {
        $this->nm_new_label['data_nascimento'] = "Data Nascimento";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $data_nascimento = $this->data_nascimento;
   $sStyleHidden_data_nascimento = '';
   if (isset($this->nmgp_cmp_hidden['data_nascimento']) && $this->nmgp_cmp_hidden['data_nascimento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['data_nascimento']);
       $sStyleHidden_data_nascimento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_data_nascimento = 'display: none;';
   $sStyleReadInp_data_nascimento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['data_nascimento']) && $this->nmgp_cmp_readonly['data_nascimento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['data_nascimento']);
       $sStyleReadLab_data_nascimento = '';
       $sStyleReadInp_data_nascimento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['data_nascimento']) && $this->nmgp_cmp_hidden['data_nascimento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="data_nascimento" value="<?php echo $this->form_encode_input($data_nascimento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_data_nascimento_line" id="hidden_field_data_data_nascimento" style="<?php echo $sStyleHidden_data_nascimento; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_data_nascimento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_data_nascimento_label" style=""><span id="id_label_data_nascimento"><?php echo $this->nm_new_label['data_nascimento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["data_nascimento"]) &&  $this->nmgp_cmp_readonly["data_nascimento"] == "on") { 

 ?>
<input type="hidden" name="data_nascimento" value="<?php echo $this->form_encode_input($data_nascimento) . "\">" . $data_nascimento . ""; ?>
<?php } else { ?>
<span id="id_read_on_data_nascimento" class="sc-ui-readonly-data_nascimento css_data_nascimento_line" style="<?php echo $sStyleReadLab_data_nascimento; ?>"><?php echo $this->form_format_readonly("data_nascimento", $this->form_encode_input($data_nascimento)); ?></span><span id="id_read_off_data_nascimento" class="css_read_off_data_nascimento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_data_nascimento; ?>"><?php
$tmp_form_data = $this->field_config['data_nascimento']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_data_nascimento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_data_nascimento" type=text name="data_nascimento" value="<?php echo $this->form_encode_input($data_nascimento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['data_nascimento']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['data_nascimento']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_data_nascimento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_data_nascimento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['logradouro']))
    {
        $this->nm_new_label['logradouro'] = "Logradouro";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $logradouro = $this->logradouro;
   $sStyleHidden_logradouro = '';
   if (isset($this->nmgp_cmp_hidden['logradouro']) && $this->nmgp_cmp_hidden['logradouro'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['logradouro']);
       $sStyleHidden_logradouro = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_logradouro = 'display: none;';
   $sStyleReadInp_logradouro = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['logradouro']) && $this->nmgp_cmp_readonly['logradouro'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['logradouro']);
       $sStyleReadLab_logradouro = '';
       $sStyleReadInp_logradouro = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['logradouro']) && $this->nmgp_cmp_hidden['logradouro'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="logradouro" value="<?php echo $this->form_encode_input($logradouro) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_logradouro_line" id="hidden_field_data_logradouro" style="<?php echo $sStyleHidden_logradouro; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_logradouro_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_logradouro_label" style=""><span id="id_label_logradouro"><?php echo $this->nm_new_label['logradouro']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["logradouro"]) &&  $this->nmgp_cmp_readonly["logradouro"] == "on") { 

 ?>
<input type="hidden" name="logradouro" value="<?php echo $this->form_encode_input($logradouro) . "\">" . $logradouro . ""; ?>
<?php } else { ?>
<span id="id_read_on_logradouro" class="sc-ui-readonly-logradouro css_logradouro_line" style="<?php echo $sStyleReadLab_logradouro; ?>"><?php echo $this->form_format_readonly("logradouro", $this->form_encode_input($this->logradouro)); ?></span><span id="id_read_off_logradouro" class="css_read_off_logradouro<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_logradouro; ?>">
 <input class="sc-js-input scFormObjectOdd css_logradouro_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_logradouro" type=text name="logradouro" value="<?php echo $this->form_encode_input($logradouro) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=45"; } ?> maxlength=45 alt="{datatype: 'text', maxLength: 45, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_logradouro_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_logradouro_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
