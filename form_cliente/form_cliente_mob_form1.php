<div id="form_cliente_mob_form1" style='<?php echo ($this->tabCssClass["form_cliente_mob_form1"]['class'] == 'scTabInactive' ? 'display: none; width: 1px; height: 0px; overflow: scroll' : ''); ?>'>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idcliente']))
           {
               $this->nmgp_cmp_readonly['idcliente'] = 'on';
           }
?>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf2\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?>Contato<?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cliente_telefone']))
    {
        $this->nm_new_label['cliente_telefone'] = "cliente_telefone";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cliente_telefone = $this->cliente_telefone;
   $sStyleHidden_cliente_telefone = '';
   if (isset($this->nmgp_cmp_hidden['cliente_telefone']) && $this->nmgp_cmp_hidden['cliente_telefone'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cliente_telefone']);
       $sStyleHidden_cliente_telefone = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cliente_telefone = 'display: none;';
   $sStyleReadInp_cliente_telefone = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cliente_telefone']) && $this->nmgp_cmp_readonly['cliente_telefone'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cliente_telefone']);
       $sStyleReadLab_cliente_telefone = '';
       $sStyleReadInp_cliente_telefone = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cliente_telefone']) && $this->nmgp_cmp_hidden['cliente_telefone'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cliente_telefone" value="<?php echo $this->form_encode_input($cliente_telefone) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cliente_telefone_line" id="hidden_field_data_cliente_telefone" style="<?php echo $sStyleHidden_cliente_telefone; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_cliente_telefone_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cliente_telefone'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cliente_telefone'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cliente_telefone'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['foreign_key']['idcliente'] = $this->nmgp_dados_form['idcliente'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['where_filter'] = "idcliente = " . $this->nmgp_dados_form['idcliente'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['where_detal']  = "idcliente = " . $this->nmgp_dados_form['idcliente'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_cliente_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_cliente_mob_empty.htm' : $this->Ini->link_form_telefone_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init'] ]['form_telefone'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_cliente_telefone']) && 'nmsc_iframe_liga_form_telefone_mob' != $this->Ini->sc_lig_target['C_@scinf_cliente_telefone'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_cliente_telefone'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_mob']['form_telefone_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_cliente_telefone'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_telefone_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_telefone_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cliente_telefone_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cliente_telefone_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </tr>
</TABLE></div><!-- bloco_f -->
   </td></tr></table>
   </div>
