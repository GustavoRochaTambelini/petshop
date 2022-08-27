<?php

  $arr_buttons = array();
  if(isset($this->Ini->Nm_lang))
  {
      $Nm_lang = $this->Ini->Nm_lang;
  }
  else
  {
      $Nm_lang = $this->Nm_lang;
  }
  $this->arr_buttons['bcons_inicio']['hint']             = $Nm_lang['lang_btns_frst_hint'];
  $this->arr_buttons['bcons_inicio']['type']             = 'button';
  $this->arr_buttons['bcons_inicio']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['bcons_inicio']['display']          = 'only_text';
  $this->arr_buttons['bcons_inicio']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_inicio']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_inicio']['style'] = 'onmouseover';
  $this->arr_buttons['bcons_inicio']['image'] = 'new__NM__nm_btn1410380071_bcons_inicio.gif';

  $this->arr_buttons['bcons_retorna']['hint']             = $Nm_lang['lang_btns_prev_hint'];
  $this->arr_buttons['bcons_retorna']['type']             = 'button';
  $this->arr_buttons['bcons_retorna']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bcons_retorna']['display']          = 'only_text';
  $this->arr_buttons['bcons_retorna']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_retorna']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_retorna']['style'] = 'default';
  $this->arr_buttons['bcons_retorna']['image'] = 'new__NM__nm_btn1410380071_bcons_retorna.gif';

  $this->arr_buttons['bcons_avanca']['hint']             = $Nm_lang['lang_btns_next_hint'];
  $this->arr_buttons['bcons_avanca']['type']             = 'button';
  $this->arr_buttons['bcons_avanca']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bcons_avanca']['display']          = 'only_text';
  $this->arr_buttons['bcons_avanca']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_avanca']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_avanca']['style'] = 'default';
  $this->arr_buttons['bcons_avanca']['image'] = 'new__NM__nm_btn1410380071_bcons_avanca.gif';

  $this->arr_buttons['bcons_final']['hint']             = $Nm_lang['lang_btns_last_hint'];
  $this->arr_buttons['bcons_final']['type']             = 'button';
  $this->arr_buttons['bcons_final']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bcons_final']['display']          = 'only_text';
  $this->arr_buttons['bcons_final']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_final']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_final']['style'] = 'default';
  $this->arr_buttons['bcons_final']['image'] = 'new__NM__nm_btn1410380071_bcons_final.gif';

  $this->arr_buttons['birpara']['hint']             = $Nm_lang['lang_btns_jump_hint'];
  $this->arr_buttons['birpara']['type']             = 'button';
  $this->arr_buttons['birpara']['value']            = $Nm_lang['lang_btns_jump'];
  $this->arr_buttons['birpara']['display']          = 'only_text';
  $this->arr_buttons['birpara']['display_position'] = 'text_right';
  $this->arr_buttons['birpara']['fontawesomeicon']  = '';
  $this->arr_buttons['birpara']['style'] = 'default';
  $this->arr_buttons['birpara']['image'] = 'new__NM__nm_btn1410380071_birpara.gif';

  $this->arr_buttons['bprint']['hint']             = $Nm_lang['lang_btns_prnt_hint'];
  $this->arr_buttons['bprint']['type']             = 'button';
  $this->arr_buttons['bprint']['value']            = $Nm_lang['lang_btns_prnt'];
  $this->arr_buttons['bprint']['display']          = 'only_text';
  $this->arr_buttons['bprint']['display_position'] = 'text_right';
  $this->arr_buttons['bprint']['fontawesomeicon']  = '';
  $this->arr_buttons['bprint']['style'] = 'default';
  $this->arr_buttons['bprint']['image'] = 'new__NM__nm_btn1410380071_bprint.gif';

  $this->arr_buttons['bresumo']['hint']             = $Nm_lang['lang_btns_smry_hint'];
  $this->arr_buttons['bresumo']['type']             = 'button';
  $this->arr_buttons['bresumo']['value']            = $Nm_lang['lang_btns_smry'];
  $this->arr_buttons['bresumo']['display']          = 'only_text';
  $this->arr_buttons['bresumo']['display_position'] = 'text_right';
  $this->arr_buttons['bresumo']['fontawesomeicon']  = '';
  $this->arr_buttons['bresumo']['style'] = 'default';
  $this->arr_buttons['bresumo']['image'] = 'new__NM__nm_btn1410380071_bresumo.gif';

  $this->arr_buttons['bsort']['hint']             = $Nm_lang['lang_btns_sort_hint'];
  $this->arr_buttons['bsort']['type']             = 'button';
  $this->arr_buttons['bsort']['value']            = $Nm_lang['lang_btns_sort'];
  $this->arr_buttons['bsort']['display']          = 'only_text';
  $this->arr_buttons['bsort']['display_position'] = 'text_right';
  $this->arr_buttons['bsort']['fontawesomeicon']  = '';
  $this->arr_buttons['bsort']['style'] = 'default';
  $this->arr_buttons['bsort']['image'] = 'new__NM__nm_btn1410380071_bsort.gif';

  $this->arr_buttons['bcolumns']['hint']             = $Nm_lang['lang_btns_clmn_hint'];
  $this->arr_buttons['bcolumns']['type']             = 'button';
  $this->arr_buttons['bcolumns']['value']            = $Nm_lang['lang_btns_clmn'];
  $this->arr_buttons['bcolumns']['display']          = 'only_text';
  $this->arr_buttons['bcolumns']['display_position'] = 'text_right';
  $this->arr_buttons['bcolumns']['fontawesomeicon']  = '';
  $this->arr_buttons['bcolumns']['style'] = 'default';
  $this->arr_buttons['bcolumns']['image'] = 'new__NM__nm_btn1410380071_bcolumns.gif';

  $this->arr_buttons['bdynamicsearch']['hint']             = $Nm_lang['lang_btns_dynamicsearch_hint'];
  $this->arr_buttons['bdynamicsearch']['type']             = 'button';
  $this->arr_buttons['bdynamicsearch']['value']            = $Nm_lang['lang_btns_dynamicsearch'];
  $this->arr_buttons['bdynamicsearch']['display']          = 'only_text';
  $this->arr_buttons['bdynamicsearch']['display_position'] = 'text_right';
  $this->arr_buttons['bdynamicsearch']['fontawesomeicon']  = '';
  $this->arr_buttons['bdynamicsearch']['style'] = 'default';
  $this->arr_buttons['bdynamicsearch']['image'] = 'sys__NM__nm_Soft_Orange_pm_bdynamicsearch.gif';

  $this->arr_buttons['bgridsave']['hint']             = $Nm_lang['lang_btns_gridsave_hint'];
  $this->arr_buttons['bgridsave']['type']             = 'button';
  $this->arr_buttons['bgridsave']['value']            = $Nm_lang['lang_btns_gridsave'];
  $this->arr_buttons['bgridsave']['display']          = 'only_text';
  $this->arr_buttons['bgridsave']['display_position'] = 'text_right';
  $this->arr_buttons['bgridsave']['fontawesomeicon']  = '';
  $this->arr_buttons['bgridsave']['style'] = 'default';
  $this->arr_buttons['bgridsave']['image'] = 'sys__NM__nm_Soft_Orange_pm_bgridsave.gif';

  $this->arr_buttons['bgroupby']['hint']             = $Nm_lang['lang_btns_gbrl_hint'];
  $this->arr_buttons['bgroupby']['type']             = 'button';
  $this->arr_buttons['bgroupby']['value']            = $Nm_lang['lang_btns_gbrl'];
  $this->arr_buttons['bgroupby']['display']          = 'only_text';
  $this->arr_buttons['bgroupby']['display_position'] = 'text_right';
  $this->arr_buttons['bgroupby']['fontawesomeicon']  = '';
  $this->arr_buttons['bgroupby']['style'] = 'default';
  $this->arr_buttons['bgroupby']['image'] = 'new__NM__nm_btn1410380071_bgroupby.gif';

  $this->arr_buttons['bcons_detalhes']['hint']             = $Nm_lang['lang_btns_lens_hint'];
  $this->arr_buttons['bcons_detalhes']['type']             = 'button';
  $this->arr_buttons['bcons_detalhes']['value']            = 'Detalle';
  $this->arr_buttons['bcons_detalhes']['display']          = 'only_text';
  $this->arr_buttons['bcons_detalhes']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_detalhes']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_detalhes']['style'] = 'default';
  $this->arr_buttons['bcons_detalhes']['image'] = 'new__NM__nm_btn1410380071_bcons_detalhes.gif';

  $this->arr_buttons['bqt_linhas']['hint']             = $Nm_lang['lang_btns_rows_hint'];
  $this->arr_buttons['bqt_linhas']['type']             = 'button';
  $this->arr_buttons['bqt_linhas']['value']            = $Nm_lang['lang_btns_rows'];
  $this->arr_buttons['bqt_linhas']['display']          = 'only_text';
  $this->arr_buttons['bqt_linhas']['display_position'] = 'text_right';
  $this->arr_buttons['bqt_linhas']['fontawesomeicon']  = '';
  $this->arr_buttons['bqt_linhas']['style'] = 'default';
  $this->arr_buttons['bqt_linhas']['image'] = 'new__NM__nm_btn1410380071_bqt_linhas.gif';

  $this->arr_buttons['bgraf']['hint']             = $Nm_lang['lang_btns_chrt_hint'];
  $this->arr_buttons['bgraf']['type']             = 'button';
  $this->arr_buttons['bgraf']['value']            = $Nm_lang['lang_btns_chrt'];
  $this->arr_buttons['bgraf']['display']          = 'only_text';
  $this->arr_buttons['bgraf']['display_position'] = 'text_right';
  $this->arr_buttons['bgraf']['fontawesomeicon']  = '';
  $this->arr_buttons['bgraf']['style'] = 'default';
  $this->arr_buttons['bgraf']['image'] = 'new__NM__nm_btn1410380071_bgraf.gif';

  $this->arr_buttons['bconf_graf']['hint']             = $Nm_lang['lang_btns_chrt_stng_hint'];
  $this->arr_buttons['bconf_graf']['type']             = 'button';
  $this->arr_buttons['bconf_graf']['value']            = $Nm_lang['lang_btns_chrt_stng'];
  $this->arr_buttons['bconf_graf']['display']          = 'only_text';
  $this->arr_buttons['bconf_graf']['display_position'] = 'text_right';
  $this->arr_buttons['bconf_graf']['fontawesomeicon']  = '';
  $this->arr_buttons['bconf_graf']['style'] = 'default';
  $this->arr_buttons['bconf_graf']['image'] = 'new__NM__nm_btn1410380071_bconf_graf.gif';

  $this->arr_buttons['bqtd_bytes']['hint']             = '';
  $this->arr_buttons['bqtd_bytes']['type']             = 'button';
  $this->arr_buttons['bqtd_bytes']['value']            = $Nm_lang['lang_btns_qtch'];
  $this->arr_buttons['bqtd_bytes']['display']          = 'only_text';
  $this->arr_buttons['bqtd_bytes']['display_position'] = 'text_right';
  $this->arr_buttons['bqtd_bytes']['fontawesomeicon']  = '';
  $this->arr_buttons['bqtd_bytes']['style'] = 'default';
  $this->arr_buttons['bqtd_bytes']['image'] = 'new__NM__nm_btn1410380071_bqtd_bytes.gif';

  $this->arr_buttons['blink_resumogrid']['hint']             = $Nm_lang['lang_btns_smry_drll_hint'];
  $this->arr_buttons['blink_resumogrid']['type']             = 'button';
  $this->arr_buttons['blink_resumogrid']['value']            = $Nm_lang['lang_btns_smry_drll'];
  $this->arr_buttons['blink_resumogrid']['display']          = 'only_text';
  $this->arr_buttons['blink_resumogrid']['display_position'] = 'text_right';
  $this->arr_buttons['blink_resumogrid']['fontawesomeicon']  = '';
  $this->arr_buttons['blink_resumogrid']['style'] = 'default';
  $this->arr_buttons['blink_resumogrid']['image'] = 'new__NM__nm_btn1410380071_blink_resumogrid.gif';

  $this->arr_buttons['brot_resumo']['hint']             = $Nm_lang['lang_btns_smry_rtte_hint'];
  $this->arr_buttons['brot_resumo']['type']             = 'button';
  $this->arr_buttons['brot_resumo']['value']            = $Nm_lang['lang_btns_smry_rtte'];
  $this->arr_buttons['brot_resumo']['display']          = 'only_text';
  $this->arr_buttons['brot_resumo']['display_position'] = 'text_right';
  $this->arr_buttons['brot_resumo']['fontawesomeicon']  = '';
  $this->arr_buttons['brot_resumo']['style'] = 'default';
  $this->arr_buttons['brot_resumo']['image'] = 'new__NM__nm_btn1410380071_brot_resumo.gif';

  $this->arr_buttons['smry_conf']['hint']             = $Nm_lang['lang_btns_smry_conf_hint'];
  $this->arr_buttons['smry_conf']['type']             = 'button';
  $this->arr_buttons['smry_conf']['value']            = $Nm_lang['lang_btns_smry_conf'];
  $this->arr_buttons['smry_conf']['display']          = 'only_text';
  $this->arr_buttons['smry_conf']['display_position'] = 'text_right';
  $this->arr_buttons['smry_conf']['fontawesomeicon']  = '';
  $this->arr_buttons['smry_conf']['style'] = 'default';
  $this->arr_buttons['smry_conf']['image'] = 'new__NM__nm_btn1410380071_smry_conf.gif';

  $this->arr_buttons['gantt_chart']['hint']             = $Nm_lang['lang_btns_chrt_gantt_hint'];
  $this->arr_buttons['gantt_chart']['type']             = 'button';
  $this->arr_buttons['gantt_chart']['value']            = $Nm_lang['lang_btns_chrt_gantt'];
  $this->arr_buttons['gantt_chart']['display']          = 'only_text';
  $this->arr_buttons['gantt_chart']['display_position'] = 'text_right';
  $this->arr_buttons['gantt_chart']['fontawesomeicon']  = '';
  $this->arr_buttons['gantt_chart']['style'] = 'default';
  $this->arr_buttons['gantt_chart']['image'] = 'new__NM__nm_btn1410380071_gantt_chart.gif';

  $this->arr_buttons['bcons_apply']['hint']             = $Nm_lang['lang_btns_apply_hint'];
  $this->arr_buttons['bcons_apply']['type']             = 'button';
  $this->arr_buttons['bcons_apply']['value']            = $Nm_lang['lang_btns_apply'];
  $this->arr_buttons['bcons_apply']['display']          = 'only_text';
  $this->arr_buttons['bcons_apply']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_apply']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_apply']['style'] = 'default';
  $this->arr_buttons['bcons_apply']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcons_apply.gif';

  $this->arr_buttons['bcons_cancel']['hint']             = $Nm_lang['lang_btns_cncl_hint'];
  $this->arr_buttons['bcons_cancel']['type']             = 'button';
  $this->arr_buttons['bcons_cancel']['value']            = $Nm_lang['lang_btns_cncl'];
  $this->arr_buttons['bcons_cancel']['display']          = 'only_text';
  $this->arr_buttons['bcons_cancel']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_cancel']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_cancel']['style'] = 'default';
  $this->arr_buttons['bcons_cancel']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcons_cancel.gif';

  $this->arr_buttons['bmultiselect']['hint']             = $Nm_lang['lang_btns_multiselect_hint'];
  $this->arr_buttons['bmultiselect']['type']             = 'button';
  $this->arr_buttons['bmultiselect']['value']            = $Nm_lang['lang_btns_multiselect'];
  $this->arr_buttons['bmultiselect']['display']          = 'only_text';
  $this->arr_buttons['bmultiselect']['display_position'] = 'text_right';
  $this->arr_buttons['bmultiselect']['fontawesomeicon']  = '';
  $this->arr_buttons['bmultiselect']['style'] = 'default';
  $this->arr_buttons['bmultiselect']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmultiselect.gif';

  $this->arr_buttons['bcons_inicio_off']['hint']             = $Nm_lang['lang_btns_frst_hint'];
  $this->arr_buttons['bcons_inicio_off']['type']             = 'button';
  $this->arr_buttons['bcons_inicio_off']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['bcons_inicio_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_inicio_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_inicio_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_inicio_off']['style'] = 'default';
  $this->arr_buttons['bcons_inicio_off']['image'] = 'new__NM__nm_btn1410380071_bcons_inicio_off.gif';

  $this->arr_buttons['bcons_retorna_off']['hint']             = $Nm_lang['lang_btns_prev_hint'];
  $this->arr_buttons['bcons_retorna_off']['type']             = 'button';
  $this->arr_buttons['bcons_retorna_off']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bcons_retorna_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_retorna_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_retorna_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_retorna_off']['style'] = 'default';
  $this->arr_buttons['bcons_retorna_off']['image'] = 'new__NM__nm_btn1410380071_bcons_retorna_off.gif';

  $this->arr_buttons['bcons_avanca_off']['hint']             = $Nm_lang['lang_btns_next_hint'];
  $this->arr_buttons['bcons_avanca_off']['type']             = 'button';
  $this->arr_buttons['bcons_avanca_off']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bcons_avanca_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_avanca_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_avanca_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_avanca_off']['style'] = 'default';
  $this->arr_buttons['bcons_avanca_off']['image'] = 'new__NM__nm_btn1410380071_bcons_avanca_off.gif';

  $this->arr_buttons['bcons_final_off']['hint']             = $Nm_lang['lang_btns_last_hint'];
  $this->arr_buttons['bcons_final_off']['type']             = 'button';
  $this->arr_buttons['bcons_final_off']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bcons_final_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_final_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_final_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_final_off']['style'] = 'default';
  $this->arr_buttons['bcons_final_off']['image'] = 'new__NM__nm_btn1410380071_bcons_final_off.gif';

  $this->arr_buttons['bpdf']['hint']             = $Nm_lang['lang_btns_pdfc_hint'];
  $this->arr_buttons['bpdf']['type']             = 'button';
  $this->arr_buttons['bpdf']['value']            = $Nm_lang['lang_btns_pdfc'];
  $this->arr_buttons['bpdf']['display']          = 'only_text';
  $this->arr_buttons['bpdf']['display_position'] = 'text_right';
  $this->arr_buttons['bpdf']['fontawesomeicon']  = '';
  $this->arr_buttons['bpdf']['style'] = 'default';
  $this->arr_buttons['bpdf']['image'] = 'new__NM__nm_btn1410380071_bpdf.gif';

  $this->arr_buttons['brtf']['hint']             = $Nm_lang['lang_btns_rtff_hint'];
  $this->arr_buttons['brtf']['type']             = 'button';
  $this->arr_buttons['brtf']['value']            = $Nm_lang['lang_btns_rtff'];
  $this->arr_buttons['brtf']['display']          = 'only_text';
  $this->arr_buttons['brtf']['display_position'] = 'text_right';
  $this->arr_buttons['brtf']['fontawesomeicon']  = '';
  $this->arr_buttons['brtf']['style'] = 'default';
  $this->arr_buttons['brtf']['image'] = 'new__NM__nm_btn1410380071_brtf.gif';

  $this->arr_buttons['bexcel']['hint']             = $Nm_lang['lang_btns_xlsf_hint'];
  $this->arr_buttons['bexcel']['type']             = 'button';
  $this->arr_buttons['bexcel']['value']            = $Nm_lang['lang_btns_xlsf'];
  $this->arr_buttons['bexcel']['display']          = 'only_text';
  $this->arr_buttons['bexcel']['display_position'] = 'text_right';
  $this->arr_buttons['bexcel']['fontawesomeicon']  = '';
  $this->arr_buttons['bexcel']['style'] = 'default';
  $this->arr_buttons['bexcel']['image'] = 'new__NM__nm_btn1410380071_bexcel.gif';

  $this->arr_buttons['bxml']['hint']             = $Nm_lang['lang_btns_xmlf_hint'];
  $this->arr_buttons['bxml']['type']             = 'button';
  $this->arr_buttons['bxml']['value']            = $Nm_lang['lang_btns_xmlf'];
  $this->arr_buttons['bxml']['display']          = 'only_text';
  $this->arr_buttons['bxml']['display_position'] = 'text_right';
  $this->arr_buttons['bxml']['fontawesomeicon']  = '';
  $this->arr_buttons['bxml']['style'] = 'default';
  $this->arr_buttons['bxml']['image'] = 'new__NM__nm_btn1410380071_bxml.gif';

  $this->arr_buttons['bcsv']['hint']             = $Nm_lang['lang_btns_csvf_hint'];
  $this->arr_buttons['bcsv']['type']             = 'button';
  $this->arr_buttons['bcsv']['value']            = $Nm_lang['lang_btns_csvf'];
  $this->arr_buttons['bcsv']['display']          = 'only_text';
  $this->arr_buttons['bcsv']['display_position'] = 'text_right';
  $this->arr_buttons['bcsv']['fontawesomeicon']  = '';
  $this->arr_buttons['bcsv']['style'] = 'default';
  $this->arr_buttons['bcsv']['image'] = 'new__NM__nm_btn1410380071_bcsv.gif';

  $this->arr_buttons['bword']['hint']             = $Nm_lang['lang_btns_word_hint'];
  $this->arr_buttons['bword']['type']             = 'button';
  $this->arr_buttons['bword']['value']            = $Nm_lang['lang_btns_word'];
  $this->arr_buttons['bword']['display']          = 'only_text';
  $this->arr_buttons['bword']['display_position'] = 'text_right';
  $this->arr_buttons['bword']['fontawesomeicon']  = '';
  $this->arr_buttons['bword']['style'] = 'default';
  $this->arr_buttons['bword']['image'] = 'new__NM__nm_btn1410380071_bword.gif';

  $this->arr_buttons['bexport']['hint']             = $Nm_lang['lang_btns_expo_hint'];
  $this->arr_buttons['bexport']['type']             = 'button';
  $this->arr_buttons['bexport']['value']            = $Nm_lang['lang_btns_expo'];
  $this->arr_buttons['bexport']['display']          = 'only_text';
  $this->arr_buttons['bexport']['display_position'] = 'text_right';
  $this->arr_buttons['bexport']['fontawesomeicon']  = '';
  $this->arr_buttons['bexport']['style'] = 'default';
  $this->arr_buttons['bexport']['image'] = 'new__NM__nm_btn1410380071_bexport.gif';

  $this->arr_buttons['bexportview']['hint']             = $Nm_lang['lang_btns_expv_hint'];
  $this->arr_buttons['bexportview']['type']             = 'button';
  $this->arr_buttons['bexportview']['value']            = $Nm_lang['lang_btns_expv'];
  $this->arr_buttons['bexportview']['display']          = 'only_text';
  $this->arr_buttons['bexportview']['display_position'] = 'text_right';
  $this->arr_buttons['bexportview']['fontawesomeicon']  = '';
  $this->arr_buttons['bexportview']['style'] = 'default';
  $this->arr_buttons['bexportview']['image'] = 'new__NM__nm_btn1410380071_bexportview.gif';

  $this->arr_buttons['bdownload']['hint']             = $Nm_lang['lang_btns_down_hint'];
  $this->arr_buttons['bdownload']['type']             = 'button';
  $this->arr_buttons['bdownload']['value']            = $Nm_lang['lang_btns_down'];
  $this->arr_buttons['bdownload']['display']          = 'only_text';
  $this->arr_buttons['bdownload']['display_position'] = 'text_right';
  $this->arr_buttons['bdownload']['fontawesomeicon']  = '';
  $this->arr_buttons['bdownload']['style'] = 'default';
  $this->arr_buttons['bdownload']['image'] = 'new__NM__nm_btn1410380071_bdownload.gif';

  $this->arr_buttons['binicio']['hint']             = $Nm_lang['lang_btns_frst_hint'];
  $this->arr_buttons['binicio']['type']             = 'button';
  $this->arr_buttons['binicio']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['binicio']['display']          = 'only_text';
  $this->arr_buttons['binicio']['display_position'] = 'text_right';
  $this->arr_buttons['binicio']['fontawesomeicon']  = '';
  $this->arr_buttons['binicio']['style'] = 'default';
  $this->arr_buttons['binicio']['image'] = 'new__NM__nm_btn1410380071_binicio.gif';

  $this->arr_buttons['bretorna']['hint']             = $Nm_lang['lang_btns_prev_hint'];
  $this->arr_buttons['bretorna']['type']             = 'button';
  $this->arr_buttons['bretorna']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bretorna']['display']          = 'only_text';
  $this->arr_buttons['bretorna']['display_position'] = 'text_right';
  $this->arr_buttons['bretorna']['fontawesomeicon']  = '';
  $this->arr_buttons['bretorna']['style'] = 'default';
  $this->arr_buttons['bretorna']['image'] = 'new__NM__nm_btn1410380071_bretorna.gif';

  $this->arr_buttons['bavanca']['hint']             = $Nm_lang['lang_btns_next_hint'];
  $this->arr_buttons['bavanca']['type']             = 'button';
  $this->arr_buttons['bavanca']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bavanca']['display']          = 'only_text';
  $this->arr_buttons['bavanca']['display_position'] = 'text_right';
  $this->arr_buttons['bavanca']['fontawesomeicon']  = '';
  $this->arr_buttons['bavanca']['style'] = 'default';
  $this->arr_buttons['bavanca']['image'] = 'new__NM__nm_btn1410380071_bavanca.gif';

  $this->arr_buttons['bfinal']['hint']             = $Nm_lang['lang_btns_last_hint'];
  $this->arr_buttons['bfinal']['type']             = 'button';
  $this->arr_buttons['bfinal']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bfinal']['display']          = 'only_text';
  $this->arr_buttons['bfinal']['display_position'] = 'text_right';
  $this->arr_buttons['bfinal']['fontawesomeicon']  = '';
  $this->arr_buttons['bfinal']['style'] = 'default';
  $this->arr_buttons['bfinal']['image'] = 'new__NM__nm_btn1410380071_bfinal.gif';

  $this->arr_buttons['bincluir']['hint']             = $Nm_lang['lang_btns_inst_hint'];
  $this->arr_buttons['bincluir']['type']             = 'button';
  $this->arr_buttons['bincluir']['value']            = $Nm_lang['lang_btns_inst'];
  $this->arr_buttons['bincluir']['display']          = 'only_text';
  $this->arr_buttons['bincluir']['display_position'] = 'text_right';
  $this->arr_buttons['bincluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bincluir']['style'] = 'default';
  $this->arr_buttons['bincluir']['image'] = 'new__NM__nm_btn1410380071_bincluir.gif';

  $this->arr_buttons['bexcluir']['hint']             = $Nm_lang['lang_btns_dele_hint'];
  $this->arr_buttons['bexcluir']['type']             = 'button';
  $this->arr_buttons['bexcluir']['value']            = $Nm_lang['lang_btns_dele'];
  $this->arr_buttons['bexcluir']['display']          = 'only_text';
  $this->arr_buttons['bexcluir']['display_position'] = 'text_right';
  $this->arr_buttons['bexcluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bexcluir']['style'] = 'default';
  $this->arr_buttons['bexcluir']['image'] = 'new__NM__nm_btn1410380071_bexcluir.gif';

  $this->arr_buttons['balterar']['hint']             = $Nm_lang['lang_btns_updt_hint'];
  $this->arr_buttons['balterar']['type']             = 'button';
  $this->arr_buttons['balterar']['value']            = $Nm_lang['lang_btns_updt'];
  $this->arr_buttons['balterar']['display']          = 'only_text';
  $this->arr_buttons['balterar']['display_position'] = 'text_right';
  $this->arr_buttons['balterar']['fontawesomeicon']  = '';
  $this->arr_buttons['balterar']['style'] = 'default';
  $this->arr_buttons['balterar']['image'] = 'new__NM__nm_btn1410380071_balterar.gif';

  $this->arr_buttons['bexcluirsel']['hint']             = $Nm_lang['lang_btns_dl_sel_hint'];
  $this->arr_buttons['bexcluirsel']['type']             = 'button';
  $this->arr_buttons['bexcluirsel']['value']            = $Nm_lang['lang_btns_dl_sel'];
  $this->arr_buttons['bexcluirsel']['display']          = 'only_text';
  $this->arr_buttons['bexcluirsel']['display_position'] = 'text_right';
  $this->arr_buttons['bexcluirsel']['fontawesomeicon']  = '';
  $this->arr_buttons['bexcluirsel']['style'] = 'default';
  $this->arr_buttons['bexcluirsel']['image'] = 'new__NM__nm_btn1410380071_bexcluirsel.gif';

  $this->arr_buttons['balterarsel']['hint']             = $Nm_lang['lang_btns_sv_sel_hint'];
  $this->arr_buttons['balterarsel']['type']             = 'button';
  $this->arr_buttons['balterarsel']['value']            = $Nm_lang['lang_btns_sv_sel'];
  $this->arr_buttons['balterarsel']['display']          = 'only_text';
  $this->arr_buttons['balterarsel']['display_position'] = 'text_right';
  $this->arr_buttons['balterarsel']['fontawesomeicon']  = '';
  $this->arr_buttons['balterarsel']['style'] = 'default';
  $this->arr_buttons['balterarsel']['image'] = 'new__NM__nm_btn1410380071_balterarsel.gif';

  $this->arr_buttons['bnovo']['hint']             = $Nm_lang['lang_btns_neww_hint'];
  $this->arr_buttons['bnovo']['type']             = 'button';
  $this->arr_buttons['bnovo']['value']            = $Nm_lang['lang_btns_neww'];
  $this->arr_buttons['bnovo']['display']          = 'only_text';
  $this->arr_buttons['bnovo']['display_position'] = 'text_right';
  $this->arr_buttons['bnovo']['fontawesomeicon']  = '';
  $this->arr_buttons['bnovo']['style'] = 'default';
  $this->arr_buttons['bnovo']['image'] = 'new__NM__nm_btn1410380071_bnovo.gif';

  $this->arr_buttons['bform_editar']['hint']             = $Nm_lang['lang_btns_pncl_hint'];
  $this->arr_buttons['bform_editar']['type']             = 'button';
  $this->arr_buttons['bform_editar']['value']            = $Nm_lang['lang_btns_pncl'];
  $this->arr_buttons['bform_editar']['display']          = 'only_text';
  $this->arr_buttons['bform_editar']['display_position'] = 'text_right';
  $this->arr_buttons['bform_editar']['fontawesomeicon']  = '';
  $this->arr_buttons['bform_editar']['style'] = 'default';
  $this->arr_buttons['bform_editar']['image'] = 'new__NM__nm_btn1410380071_bform_editar.gif';

  $this->arr_buttons['bform_captura']['hint']             = $Nm_lang['lang_btns_rtrv_grid_hint'];
  $this->arr_buttons['bform_captura']['type']             = 'button';
  $this->arr_buttons['bform_captura']['value']            = $Nm_lang['lang_btns_rtrv_grid'];
  $this->arr_buttons['bform_captura']['display']          = 'only_text';
  $this->arr_buttons['bform_captura']['display_position'] = 'text_right';
  $this->arr_buttons['bform_captura']['fontawesomeicon']  = '';
  $this->arr_buttons['bform_captura']['style'] = 'default';
  $this->arr_buttons['bform_captura']['image'] = 'new__NM__nm_btn1410380071_bform_captura.gif';

  $this->arr_buttons['bform_lookuplink']['hint']             = $Nm_lang['lang_btns_rtrv_form_hint'];
  $this->arr_buttons['bform_lookuplink']['type']             = 'button';
  $this->arr_buttons['bform_lookuplink']['value']            = $Nm_lang['lang_btns_rtrv_form'];
  $this->arr_buttons['bform_lookuplink']['display']          = 'only_text';
  $this->arr_buttons['bform_lookuplink']['display_position'] = 'text_right';
  $this->arr_buttons['bform_lookuplink']['fontawesomeicon']  = '';
  $this->arr_buttons['bform_lookuplink']['style'] = 'default';
  $this->arr_buttons['bform_lookuplink']['image'] = 'new__NM__nm_btn1410380071_bform_lookuplink.gif';

  $this->arr_buttons['bok']['hint']             = $Nm_lang['lang_btns_cfrm_hint'];
  $this->arr_buttons['bok']['type']             = 'button';
  $this->arr_buttons['bok']['value']            = $Nm_lang['lang_btns_cfrm'];
  $this->arr_buttons['bok']['display']          = 'only_text';
  $this->arr_buttons['bok']['display_position'] = 'text_right';
  $this->arr_buttons['bok']['fontawesomeicon']  = '';
  $this->arr_buttons['bok']['style'] = 'default';
  $this->arr_buttons['bok']['image'] = 'new__NM__nm_btn1410380071_bok.gif';

  $this->arr_buttons['bcalendario']['hint']             = $Nm_lang['lang_btns_cldr_hint'];
  $this->arr_buttons['bcalendario']['type']             = 'image';
  $this->arr_buttons['bcalendario']['value']            = $Nm_lang['lang_btns_cldr'];
  $this->arr_buttons['bcalendario']['display']          = 'only_img';
  $this->arr_buttons['bcalendario']['display_position'] = 'text_right';
  $this->arr_buttons['bcalendario']['fontawesomeicon']  = '';
  $this->arr_buttons['bcalendario']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcalendario']['image'] = 'scriptcase__NM__minimalist_calendar.png';

  $this->arr_buttons['bcalculadora']['hint']             = $Nm_lang['lang_btns_calc_hint'];
  $this->arr_buttons['bcalculadora']['type']             = 'image';
  $this->arr_buttons['bcalculadora']['value']            = $Nm_lang['lang_btns_calc'];
  $this->arr_buttons['bcalculadora']['display']          = 'only_img';
  $this->arr_buttons['bcalculadora']['display_position'] = 'text_right';
  $this->arr_buttons['bcalculadora']['fontawesomeicon']  = '';
  $this->arr_buttons['bcalculadora']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcalculadora']['image'] = 'scriptcase__NM__calculator.png';

  $this->arr_buttons['bajaxcapt']['hint']             = $Nm_lang['lang_btns_ajax_hint'];
  $this->arr_buttons['bajaxcapt']['type']             = 'button';
  $this->arr_buttons['bajaxcapt']['value']            = $Nm_lang['lang_btns_ajax'];
  $this->arr_buttons['bajaxcapt']['display']          = 'only_text';
  $this->arr_buttons['bajaxcapt']['display_position'] = 'text_right';
  $this->arr_buttons['bajaxcapt']['fontawesomeicon']  = '';
  $this->arr_buttons['bajaxcapt']['style'] = 'default';
  $this->arr_buttons['bajaxcapt']['image'] = 'sys__NM__nm_Soft_Orange_pm_bajaxcapt.gif';

  $this->arr_buttons['bajaxclose']['hint']             = $Nm_lang['lang_btns_ajax_close_hint'];
  $this->arr_buttons['bajaxclose']['type']             = 'button';
  $this->arr_buttons['bajaxclose']['value']            = $Nm_lang['lang_btns_ajax_close'];
  $this->arr_buttons['bajaxclose']['display']          = 'only_text';
  $this->arr_buttons['bajaxclose']['display_position'] = 'text_right';
  $this->arr_buttons['bajaxclose']['fontawesomeicon']  = '';
  $this->arr_buttons['bajaxclose']['style'] = 'default';
  $this->arr_buttons['bajaxclose']['image'] = 'sys__NM__nm_Soft_Orange_pm_bajaxclose.gif';

  $this->arr_buttons['bcaptchareload']['hint']             = $Nm_lang['lang_btns_cptc_rfim_hint'];
  $this->arr_buttons['bcaptchareload']['type']             = 'button';
  $this->arr_buttons['bcaptchareload']['value']            = $Nm_lang['lang_btns_cptc_rfim'];
  $this->arr_buttons['bcaptchareload']['display']          = 'only_text';
  $this->arr_buttons['bcaptchareload']['display_position'] = 'text_right';
  $this->arr_buttons['bcaptchareload']['fontawesomeicon']  = '';
  $this->arr_buttons['bcaptchareload']['style'] = 'default';
  $this->arr_buttons['bcaptchareload']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcaptchareload.gif';

  $this->arr_buttons['bsrch_mtmf']['hint']             = $Nm_lang['lang_btns_srch_mtmf_hint'];
  $this->arr_buttons['bsrch_mtmf']['type']             = 'button';
  $this->arr_buttons['bsrch_mtmf']['value']            = $Nm_lang['lang_btns_srch_mtmf'];
  $this->arr_buttons['bsrch_mtmf']['display']          = 'only_text';
  $this->arr_buttons['bsrch_mtmf']['display_position'] = 'text_right';
  $this->arr_buttons['bsrch_mtmf']['fontawesomeicon']  = '';
  $this->arr_buttons['bsrch_mtmf']['style'] = 'default';
  $this->arr_buttons['bsrch_mtmf']['image'] = 'sys__NM__nm_Soft_Orange_pm_bsrch_mtmf.gif';

  $this->arr_buttons['bcopy']['hint']             = $Nm_lang['lang_btns_copy_hint'];
  $this->arr_buttons['bcopy']['type']             = 'button';
  $this->arr_buttons['bcopy']['value']            = $Nm_lang['lang_btns_copy'];
  $this->arr_buttons['bcopy']['display']          = 'only_text';
  $this->arr_buttons['bcopy']['display_position'] = 'text_right';
  $this->arr_buttons['bcopy']['fontawesomeicon']  = '';
  $this->arr_buttons['bcopy']['style'] = 'default';
  $this->arr_buttons['bcopy']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcopy.gif';

  $this->arr_buttons['binicio_off']['hint']             = $Nm_lang['lang_btns_frst_hint'];
  $this->arr_buttons['binicio_off']['type']             = 'button';
  $this->arr_buttons['binicio_off']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['binicio_off']['display']          = 'only_text';
  $this->arr_buttons['binicio_off']['display_position'] = 'text_right';
  $this->arr_buttons['binicio_off']['fontawesomeicon']  = '';
  $this->arr_buttons['binicio_off']['style'] = 'default';
  $this->arr_buttons['binicio_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_binicio_off.gif';

  $this->arr_buttons['bretorna_off']['hint']             = $Nm_lang['lang_btns_prev_hint'];
  $this->arr_buttons['bretorna_off']['type']             = 'button';
  $this->arr_buttons['bretorna_off']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bretorna_off']['display']          = 'only_text';
  $this->arr_buttons['bretorna_off']['display_position'] = 'text_right';
  $this->arr_buttons['bretorna_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bretorna_off']['style'] = 'default';
  $this->arr_buttons['bretorna_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bretorna_off.gif';

  $this->arr_buttons['bavanca_off']['hint']             = $Nm_lang['lang_btns_next_hint'];
  $this->arr_buttons['bavanca_off']['type']             = 'button';
  $this->arr_buttons['bavanca_off']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bavanca_off']['display']          = 'only_text';
  $this->arr_buttons['bavanca_off']['display_position'] = 'text_right';
  $this->arr_buttons['bavanca_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bavanca_off']['style'] = 'default';
  $this->arr_buttons['bavanca_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bavanca_off.gif';

  $this->arr_buttons['bfinal_off']['hint']             = $Nm_lang['lang_btns_last_hint'];
  $this->arr_buttons['bfinal_off']['type']             = 'button';
  $this->arr_buttons['bfinal_off']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bfinal_off']['display']          = 'only_text';
  $this->arr_buttons['bfinal_off']['display_position'] = 'text_right';
  $this->arr_buttons['bfinal_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bfinal_off']['style'] = 'default';
  $this->arr_buttons['bfinal_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bfinal_off.gif';

  $this->arr_buttons['bcresumo']['hint']             = $Nm_lang['lang_btns_smry_hint'];
  $this->arr_buttons['bcresumo']['type']             = 'button';
  $this->arr_buttons['bcresumo']['value']            = $Nm_lang['lang_btns_smry'];
  $this->arr_buttons['bcresumo']['display']          = 'only_text';
  $this->arr_buttons['bcresumo']['display_position'] = 'text_right';
  $this->arr_buttons['bcresumo']['fontawesomeicon']  = '';
  $this->arr_buttons['bcresumo']['style'] = 'default';
  $this->arr_buttons['bcresumo']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcresumo.gif';

  $this->arr_buttons['bcsort']['hint']             = $Nm_lang['lang_btns_sort_hint'];
  $this->arr_buttons['bcsort']['type']             = 'button';
  $this->arr_buttons['bcsort']['value']            = $Nm_lang['lang_btns_sort'];
  $this->arr_buttons['bcsort']['display']          = 'only_text';
  $this->arr_buttons['bcsort']['display_position'] = 'text_right';
  $this->arr_buttons['bcsort']['fontawesomeicon']  = '';
  $this->arr_buttons['bcsort']['style'] = 'default';
  $this->arr_buttons['bcsort']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcsort.gif';

  $this->arr_buttons['bctype']['hint']             = $Nm_lang['lang_btns_ctype_hint'];
  $this->arr_buttons['bctype']['type']             = 'button';
  $this->arr_buttons['bctype']['value']            = $Nm_lang['lang_btns_ctype'];
  $this->arr_buttons['bctype']['display']          = 'only_text';
  $this->arr_buttons['bctype']['display_position'] = 'text_right';
  $this->arr_buttons['bctype']['fontawesomeicon']  = '';
  $this->arr_buttons['bctype']['style'] = 'default';
  $this->arr_buttons['bctype']['image'] = 'sys__NM__nm_Soft_Orange_pm_bctype.gif';

  $this->arr_buttons['bcpersonalite']['hint']             = $Nm_lang['lang_btns_ctpersonalite_hint'];
  $this->arr_buttons['bcpersonalite']['type']             = 'button';
  $this->arr_buttons['bcpersonalite']['value']            = $Nm_lang['lang_btns_ctpersonalite'];
  $this->arr_buttons['bcpersonalite']['display']          = 'only_text';
  $this->arr_buttons['bcpersonalite']['display_position'] = 'text_right';
  $this->arr_buttons['bcpersonalite']['fontawesomeicon']  = '';
  $this->arr_buttons['bcpersonalite']['style'] = 'default';
  $this->arr_buttons['bcpersonalite']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcpersonalite.gif';

  $this->arr_buttons['bchart_bar']['hint']             = $Nm_lang['lang_btns_ctbar_hint'];
  $this->arr_buttons['bchart_bar']['type']             = 'button';
  $this->arr_buttons['bchart_bar']['value']            = $Nm_lang['lang_btns_ctbar'];
  $this->arr_buttons['bchart_bar']['display']          = 'only_text';
  $this->arr_buttons['bchart_bar']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_bar']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_bar']['style'] = 'default';
  $this->arr_buttons['bchart_bar']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_bar.gif';

  $this->arr_buttons['bchart_line']['hint']             = $Nm_lang['lang_btns_ctline_hint'];
  $this->arr_buttons['bchart_line']['type']             = 'button';
  $this->arr_buttons['bchart_line']['value']            = $Nm_lang['lang_btns_ctline'];
  $this->arr_buttons['bchart_line']['display']          = 'only_text';
  $this->arr_buttons['bchart_line']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_line']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_line']['style'] = 'default';
  $this->arr_buttons['bchart_line']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_line.gif';

  $this->arr_buttons['bchart_area']['hint']             = $Nm_lang['lang_btns_ctarea_hint'];
  $this->arr_buttons['bchart_area']['type']             = 'button';
  $this->arr_buttons['bchart_area']['value']            = $Nm_lang['lang_btns_ctarea'];
  $this->arr_buttons['bchart_area']['display']          = 'only_text';
  $this->arr_buttons['bchart_area']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_area']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_area']['style'] = 'default';
  $this->arr_buttons['bchart_area']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_area.gif';

  $this->arr_buttons['bchart_pizza']['hint']             = $Nm_lang['lang_btns_ctpizza_hint'];
  $this->arr_buttons['bchart_pizza']['type']             = 'button';
  $this->arr_buttons['bchart_pizza']['value']            = $Nm_lang['lang_btns_ctpizza'];
  $this->arr_buttons['bchart_pizza']['display']          = 'only_text';
  $this->arr_buttons['bchart_pizza']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_pizza']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_pizza']['style'] = 'default';
  $this->arr_buttons['bchart_pizza']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_pizza.gif';

  $this->arr_buttons['bchart_combo']['hint']             = $Nm_lang['lang_btns_ctcombo_hint'];
  $this->arr_buttons['bchart_combo']['type']             = 'button';
  $this->arr_buttons['bchart_combo']['value']            = $Nm_lang['lang_btns_ctcombo'];
  $this->arr_buttons['bchart_combo']['display']          = 'only_text';
  $this->arr_buttons['bchart_combo']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_combo']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_combo']['style'] = 'default';
  $this->arr_buttons['bchart_combo']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_combo.gif';

  $this->arr_buttons['bchart_stack']['hint']             = $Nm_lang['lang_btns_ctstack_hint'];
  $this->arr_buttons['bchart_stack']['type']             = 'button';
  $this->arr_buttons['bchart_stack']['value']            = $Nm_lang['lang_btns_ctstack'];
  $this->arr_buttons['bchart_stack']['display']          = 'only_text';
  $this->arr_buttons['bchart_stack']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_stack']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_stack']['style'] = 'default';
  $this->arr_buttons['bchart_stack']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_stack.gif';

  $this->arr_buttons['bcsort_on']['hint']             = $Nm_lang['lang_btns_sort_hint'];
  $this->arr_buttons['bcsort_on']['type']             = 'button';
  $this->arr_buttons['bcsort_on']['value']            = $Nm_lang['lang_btns_sort'];
  $this->arr_buttons['bcsort_on']['display']          = 'only_text';
  $this->arr_buttons['bcsort_on']['display_position'] = 'text_right';
  $this->arr_buttons['bcsort_on']['fontawesomeicon']  = '';
  $this->arr_buttons['bcsort_on']['style'] = 'default';
  $this->arr_buttons['bcsort_on']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcsort_on.gif';

  $this->arr_buttons['bchart_bar_on']['hint']             = $Nm_lang['lang_btns_ctbar_hint'];
  $this->arr_buttons['bchart_bar_on']['type']             = 'button';
  $this->arr_buttons['bchart_bar_on']['value']            = $Nm_lang['lang_btns_ctbar'];
  $this->arr_buttons['bchart_bar_on']['display']          = 'only_text';
  $this->arr_buttons['bchart_bar_on']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_bar_on']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_bar_on']['style'] = 'default';
  $this->arr_buttons['bchart_bar_on']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_bar_on.gif';

  $this->arr_buttons['bchart_line_on']['hint']             = $Nm_lang['lang_btns_ctline_hint'];
  $this->arr_buttons['bchart_line_on']['type']             = 'button';
  $this->arr_buttons['bchart_line_on']['value']            = $Nm_lang['lang_btns_ctline'];
  $this->arr_buttons['bchart_line_on']['display']          = 'only_text';
  $this->arr_buttons['bchart_line_on']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_line_on']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_line_on']['style'] = 'default';
  $this->arr_buttons['bchart_line_on']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_line_on.gif';

  $this->arr_buttons['bchart_area_on']['hint']             = $Nm_lang['lang_btns_ctarea_hint'];
  $this->arr_buttons['bchart_area_on']['type']             = 'button';
  $this->arr_buttons['bchart_area_on']['value']            = $Nm_lang['lang_btns_ctarea'];
  $this->arr_buttons['bchart_area_on']['display']          = 'only_text';
  $this->arr_buttons['bchart_area_on']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_area_on']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_area_on']['style'] = 'default';
  $this->arr_buttons['bchart_area_on']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_area_on.gif';

  $this->arr_buttons['bchart_pizza_on']['hint']             = $Nm_lang['lang_btns_ctpizza_hint'];
  $this->arr_buttons['bchart_pizza_on']['type']             = 'button';
  $this->arr_buttons['bchart_pizza_on']['value']            = $Nm_lang['lang_btns_ctpizza'];
  $this->arr_buttons['bchart_pizza_on']['display']          = 'only_text';
  $this->arr_buttons['bchart_pizza_on']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_pizza_on']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_pizza_on']['style'] = 'default';
  $this->arr_buttons['bchart_pizza_on']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_pizza_on.gif';

  $this->arr_buttons['bchart_combo_on']['hint']             = $Nm_lang['lang_btns_ctcombo_hint'];
  $this->arr_buttons['bchart_combo_on']['type']             = 'button';
  $this->arr_buttons['bchart_combo_on']['value']            = $Nm_lang['lang_btns_ctcombo'];
  $this->arr_buttons['bchart_combo_on']['display']          = 'only_text';
  $this->arr_buttons['bchart_combo_on']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_combo_on']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_combo_on']['style'] = 'default';
  $this->arr_buttons['bchart_combo_on']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_combo_on.gif';

  $this->arr_buttons['bchart_stack_on']['hint']             = $Nm_lang['lang_btns_ctstack_hint'];
  $this->arr_buttons['bchart_stack_on']['type']             = 'button';
  $this->arr_buttons['bchart_stack_on']['value']            = $Nm_lang['lang_btns_ctstack'];
  $this->arr_buttons['bchart_stack_on']['display']          = 'only_text';
  $this->arr_buttons['bchart_stack_on']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_stack_on']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_stack_on']['style'] = 'default';
  $this->arr_buttons['bchart_stack_on']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_stack_on.gif';

  $this->arr_buttons['bcsort_off']['hint']             = $Nm_lang['lang_btns_sort_hint'];
  $this->arr_buttons['bcsort_off']['type']             = 'button';
  $this->arr_buttons['bcsort_off']['value']            = $Nm_lang['lang_btns_sort'];
  $this->arr_buttons['bcsort_off']['display']          = 'only_text';
  $this->arr_buttons['bcsort_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcsort_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcsort_off']['style'] = 'default';
  $this->arr_buttons['bcsort_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcsort_off.gif';

  $this->arr_buttons['bchart_bar_off']['hint']             = $Nm_lang['lang_btns_ctbar_hint'];
  $this->arr_buttons['bchart_bar_off']['type']             = 'button';
  $this->arr_buttons['bchart_bar_off']['value']            = $Nm_lang['lang_btns_ctbar'];
  $this->arr_buttons['bchart_bar_off']['display']          = 'only_text';
  $this->arr_buttons['bchart_bar_off']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_bar_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_bar_off']['style'] = 'default';
  $this->arr_buttons['bchart_bar_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_bar_off.gif';

  $this->arr_buttons['bchart_line_off']['hint']             = $Nm_lang['lang_btns_ctline_hint'];
  $this->arr_buttons['bchart_line_off']['type']             = 'button';
  $this->arr_buttons['bchart_line_off']['value']            = $Nm_lang['lang_btns_ctline'];
  $this->arr_buttons['bchart_line_off']['display']          = 'only_text';
  $this->arr_buttons['bchart_line_off']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_line_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_line_off']['style'] = 'default';
  $this->arr_buttons['bchart_line_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_line_off.gif';

  $this->arr_buttons['bchart_area_off']['hint']             = $Nm_lang['lang_btns_ctarea_hint'];
  $this->arr_buttons['bchart_area_off']['type']             = 'button';
  $this->arr_buttons['bchart_area_off']['value']            = $Nm_lang['lang_btns_ctarea'];
  $this->arr_buttons['bchart_area_off']['display']          = 'only_text';
  $this->arr_buttons['bchart_area_off']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_area_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_area_off']['style'] = 'default';
  $this->arr_buttons['bchart_area_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_area_off.gif';

  $this->arr_buttons['bchart_pizza_off']['hint']             = $Nm_lang['lang_btns_ctpizza_hint'];
  $this->arr_buttons['bchart_pizza_off']['type']             = 'button';
  $this->arr_buttons['bchart_pizza_off']['value']            = $Nm_lang['lang_btns_ctpizza'];
  $this->arr_buttons['bchart_pizza_off']['display']          = 'only_text';
  $this->arr_buttons['bchart_pizza_off']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_pizza_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_pizza_off']['style'] = 'default';
  $this->arr_buttons['bchart_pizza_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_pizza_off.gif';

  $this->arr_buttons['bchart_combo_off']['hint']             = $Nm_lang['lang_btns_ctcombo_hint'];
  $this->arr_buttons['bchart_combo_off']['type']             = 'button';
  $this->arr_buttons['bchart_combo_off']['value']            = $Nm_lang['lang_btns_ctcombo'];
  $this->arr_buttons['bchart_combo_off']['display']          = 'only_text';
  $this->arr_buttons['bchart_combo_off']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_combo_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_combo_off']['style'] = 'default';
  $this->arr_buttons['bchart_combo_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_combo_off.gif';

  $this->arr_buttons['bchart_stack_off']['hint']             = $Nm_lang['lang_btns_ctstack_hint'];
  $this->arr_buttons['bchart_stack_off']['type']             = 'button';
  $this->arr_buttons['bchart_stack_off']['value']            = $Nm_lang['lang_btns_ctstack'];
  $this->arr_buttons['bchart_stack_off']['display']          = 'only_text';
  $this->arr_buttons['bchart_stack_off']['display_position'] = 'text_right';
  $this->arr_buttons['bchart_stack_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bchart_stack_off']['style'] = 'default';
  $this->arr_buttons['bchart_stack_off']['image'] = 'sys__NM__nm_Soft_Orange_pm_bchart_stack_off.gif';

  $this->arr_buttons['bpesquisa']['hint']             = $Nm_lang['lang_btns_srch_hint'];
  $this->arr_buttons['bpesquisa']['type']             = 'button';
  $this->arr_buttons['bpesquisa']['value']            = $Nm_lang['lang_btns_srch'];
  $this->arr_buttons['bpesquisa']['display']          = 'only_text';
  $this->arr_buttons['bpesquisa']['display_position'] = 'text_right';
  $this->arr_buttons['bpesquisa']['fontawesomeicon']  = '';
  $this->arr_buttons['bpesquisa']['style'] = 'default';
  $this->arr_buttons['bpesquisa']['image'] = 'sys__NM__nm_Soft_Orange_pm_bpesquisa.gif';

  $this->arr_buttons['blimpar']['hint']             = $Nm_lang['lang_btns_clea_hint'];
  $this->arr_buttons['blimpar']['type']             = 'button';
  $this->arr_buttons['blimpar']['value']            = $Nm_lang['lang_btns_clea'];
  $this->arr_buttons['blimpar']['display']          = 'only_text';
  $this->arr_buttons['blimpar']['display_position'] = 'text_right';
  $this->arr_buttons['blimpar']['fontawesomeicon']  = '';
  $this->arr_buttons['blimpar']['style'] = 'default';
  $this->arr_buttons['blimpar']['image'] = 'sys__NM__nm_Soft_Orange_pm_blimpar.gif';

  $this->arr_buttons['bsalvar']['hint']             = $Nm_lang['lang_btns_save_hint'];
  $this->arr_buttons['bsalvar']['type']             = 'button';
  $this->arr_buttons['bsalvar']['value']            = $Nm_lang['lang_btns_save'];
  $this->arr_buttons['bsalvar']['display']          = 'only_text';
  $this->arr_buttons['bsalvar']['display_position'] = 'text_right';
  $this->arr_buttons['bsalvar']['fontawesomeicon']  = '';
  $this->arr_buttons['bsalvar']['style'] = 'default';
  $this->arr_buttons['bsalvar']['image'] = 'sys__NM__nm_Soft_Orange_pm_bsalvar.gif';

  $this->arr_buttons['bedit_filter']['hint']             = $Nm_lang['lang_btns_srch_edit_hint'];
  $this->arr_buttons['bedit_filter']['type']             = 'button';
  $this->arr_buttons['bedit_filter']['value']            = $Nm_lang['lang_btns_srch_edit'];
  $this->arr_buttons['bedit_filter']['display']          = 'only_text';
  $this->arr_buttons['bedit_filter']['display_position'] = 'text_right';
  $this->arr_buttons['bedit_filter']['fontawesomeicon']  = '';
  $this->arr_buttons['bedit_filter']['style'] = 'default';
  $this->arr_buttons['bedit_filter']['image'] = 'sys__NM__nm_Soft_Orange_pm_bedit_filter.gif';

  $this->arr_buttons['bquick_search']['hint']             = $Nm_lang['lang_btns_quck_srch_hint'];
  $this->arr_buttons['bquick_search']['type']             = 'button';
  $this->arr_buttons['bquick_search']['value']            = $Nm_lang['lang_btns_quck_srch'];
  $this->arr_buttons['bquick_search']['display']          = 'only_text';
  $this->arr_buttons['bquick_search']['display_position'] = 'text_right';
  $this->arr_buttons['bquick_search']['fontawesomeicon']  = '';
  $this->arr_buttons['bquick_search']['style'] = 'default';
  $this->arr_buttons['bquick_search']['image'] = 'sys__NM__nm_Soft_Orange_pm_bquick_search.gif';

  $this->arr_buttons['bmd_incluir']['hint']             = $Nm_lang['lang_btns_mdtl_inst_hint'];
  $this->arr_buttons['bmd_incluir']['type']             = 'button';
  $this->arr_buttons['bmd_incluir']['value']            = $Nm_lang['lang_btns_mdtl_inst'];
  $this->arr_buttons['bmd_incluir']['display']          = 'only_text';
  $this->arr_buttons['bmd_incluir']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_incluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_incluir']['style'] = 'default';
  $this->arr_buttons['bmd_incluir']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmd_incluir.gif';

  $this->arr_buttons['bmd_excluir']['hint']             = $Nm_lang['lang_btns_mdtl_dele_hint'];
  $this->arr_buttons['bmd_excluir']['type']             = 'button';
  $this->arr_buttons['bmd_excluir']['value']            = $Nm_lang['lang_btns_mdtl_dele'];
  $this->arr_buttons['bmd_excluir']['display']          = 'only_text';
  $this->arr_buttons['bmd_excluir']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_excluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_excluir']['style'] = 'default';
  $this->arr_buttons['bmd_excluir']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmd_excluir.gif';

  $this->arr_buttons['bmd_alterar']['hint']             = $Nm_lang['lang_btns_mdtl_updt_hint'];
  $this->arr_buttons['bmd_alterar']['type']             = 'button';
  $this->arr_buttons['bmd_alterar']['value']            = $Nm_lang['lang_btns_mdtl_updt'];
  $this->arr_buttons['bmd_alterar']['display']          = 'only_text';
  $this->arr_buttons['bmd_alterar']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_alterar']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_alterar']['style'] = 'default';
  $this->arr_buttons['bmd_alterar']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmd_alterar.gif';

  $this->arr_buttons['bmd_novo']['hint']             = $Nm_lang['lang_btns_copy_hint'];
  $this->arr_buttons['bmd_novo']['type']             = 'button';
  $this->arr_buttons['bmd_novo']['value']            = $Nm_lang['lang_btns_copy'];
  $this->arr_buttons['bmd_novo']['display']          = 'only_text';
  $this->arr_buttons['bmd_novo']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_novo']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_novo']['style'] = 'default';
  $this->arr_buttons['bmd_novo']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmd_novo.gif';

  $this->arr_buttons['bmd_cancelar']['hint']             = $Nm_lang['lang_btns_mdtl_cncl_hint'];
  $this->arr_buttons['bmd_cancelar']['type']             = 'button';
  $this->arr_buttons['bmd_cancelar']['value']            = $Nm_lang['lang_btns_mdtl_cncl'];
  $this->arr_buttons['bmd_cancelar']['display']          = 'only_text';
  $this->arr_buttons['bmd_cancelar']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_cancelar']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_cancelar']['style'] = 'default';
  $this->arr_buttons['bmd_cancelar']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmd_cancelar.gif';

  $this->arr_buttons['bmd_edit']['hint']             = $Nm_lang['lang_btns_mdtl_edit_hint'];
  $this->arr_buttons['bmd_edit']['type']             = 'button';
  $this->arr_buttons['bmd_edit']['value']            = $Nm_lang['lang_btns_mdtl_edit'];
  $this->arr_buttons['bmd_edit']['display']          = 'only_text';
  $this->arr_buttons['bmd_edit']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_edit']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_edit']['style'] = 'default';
  $this->arr_buttons['bmd_edit']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmd_edit.gif';

  $this->arr_buttons['bfacebook']['hint']             = '{Facebook_hint}';
  $this->arr_buttons['bfacebook']['type']             = 'button';
  $this->arr_buttons['bfacebook']['value']            = '{Facebook}';
  $this->arr_buttons['bfacebook']['display']          = 'only_text';
  $this->arr_buttons['bfacebook']['display_position'] = 'text_right';
  $this->arr_buttons['bfacebook']['fontawesomeicon']  = '';
  $this->arr_buttons['bfacebook']['style'] = 'default';
  $this->arr_buttons['bfacebook']['image'] = 'sys__NM__nm_Soft_Orange_pm_bfacebook.gif';

  $this->arr_buttons['bgoogle']['hint']             = '{Google_hint}';
  $this->arr_buttons['bgoogle']['type']             = 'button';
  $this->arr_buttons['bgoogle']['value']            = '{Google}';
  $this->arr_buttons['bgoogle']['display']          = 'only_text';
  $this->arr_buttons['bgoogle']['display_position'] = 'text_right';
  $this->arr_buttons['bgoogle']['fontawesomeicon']  = '';
  $this->arr_buttons['bgoogle']['style'] = 'default';
  $this->arr_buttons['bgoogle']['image'] = 'sys__NM__nm_Soft_Orange_pm_bgoogle.gif';

  $this->arr_buttons['bpaypal']['hint']             = '{Paypal_hint}';
  $this->arr_buttons['bpaypal']['type']             = 'button';
  $this->arr_buttons['bpaypal']['value']            = '{Paypal}';
  $this->arr_buttons['bpaypal']['display']          = 'only_text';
  $this->arr_buttons['bpaypal']['display_position'] = 'text_right';
  $this->arr_buttons['bpaypal']['fontawesomeicon']  = '';
  $this->arr_buttons['bpaypal']['style'] = 'default';
  $this->arr_buttons['bpaypal']['image'] = 'sys__NM__nm_Soft_Orange_pm_bpaypal.gif';

  $this->arr_buttons['btwitter']['hint']             = '{Twitter_hint}';
  $this->arr_buttons['btwitter']['type']             = 'button';
  $this->arr_buttons['btwitter']['value']            = '{Twitter}';
  $this->arr_buttons['btwitter']['display']          = 'only_text';
  $this->arr_buttons['btwitter']['display_position'] = 'text_right';
  $this->arr_buttons['btwitter']['fontawesomeicon']  = '';
  $this->arr_buttons['btwitter']['style'] = 'default';
  $this->arr_buttons['btwitter']['image'] = 'sys__NM__nm_Soft_Orange_pm_btwitter.gif';

  $this->arr_buttons['bmenu']['hint']             = '{Menu_hint}';
  $this->arr_buttons['bmenu']['type']             = 'image';
  $this->arr_buttons['bmenu']['value']            = '{Menu}';
  $this->arr_buttons['bmenu']['display']          = 'only_img';
  $this->arr_buttons['bmenu']['display_position'] = 'text_right';
  $this->arr_buttons['bmenu']['fontawesomeicon']  = '';
  $this->arr_buttons['bmenu']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmenu']['image'] = 'scriptcase__NM__img_btn_menu.png';

  $this->arr_buttons['bhelp']['hint']             = $Nm_lang['lang_btns_help_hint'];
  $this->arr_buttons['bhelp']['type']             = 'button';
  $this->arr_buttons['bhelp']['value']            = $Nm_lang['lang_btns_help'];
  $this->arr_buttons['bhelp']['display']          = 'only_text';
  $this->arr_buttons['bhelp']['display_position'] = 'text_right';
  $this->arr_buttons['bhelp']['fontawesomeicon']  = '';
  $this->arr_buttons['bhelp']['style'] = 'default';
  $this->arr_buttons['bhelp']['image'] = 'sys__NM__nm_Soft_Orange_pm_bhelp.gif';

  $this->arr_buttons['bsair']['hint']             = $Nm_lang['lang_btns_exit_hint'];
  $this->arr_buttons['bsair']['type']             = 'button';
  $this->arr_buttons['bsair']['value']            = $Nm_lang['lang_btns_exit'];
  $this->arr_buttons['bsair']['display']          = 'only_text';
  $this->arr_buttons['bsair']['display_position'] = 'text_right';
  $this->arr_buttons['bsair']['fontawesomeicon']  = '';
  $this->arr_buttons['bsair']['style'] = 'default';
  $this->arr_buttons['bsair']['image'] = 'sys__NM__nm_Soft_Orange_pm_bsair.gif';

  $this->arr_buttons['bvoltar']['hint']             = $Nm_lang['lang_btns_back_hint'];
  $this->arr_buttons['bvoltar']['type']             = 'button';
  $this->arr_buttons['bvoltar']['value']            = $Nm_lang['lang_btns_back'];
  $this->arr_buttons['bvoltar']['display']          = 'only_text';
  $this->arr_buttons['bvoltar']['display_position'] = 'text_right';
  $this->arr_buttons['bvoltar']['fontawesomeicon']  = '';
  $this->arr_buttons['bvoltar']['style'] = 'default';
  $this->arr_buttons['bvoltar']['image'] = 'sys__NM__nm_Soft_Orange_pm_bvoltar.gif';

  $this->arr_buttons['bcancelar']['hint']             = $Nm_lang['lang_btns_cncl_hint'];
  $this->arr_buttons['bcancelar']['type']             = 'button';
  $this->arr_buttons['bcancelar']['value']            = $Nm_lang['lang_btns_cncl'];
  $this->arr_buttons['bcancelar']['display']          = 'only_text';
  $this->arr_buttons['bcancelar']['display_position'] = 'text_right';
  $this->arr_buttons['bcancelar']['fontawesomeicon']  = '';
  $this->arr_buttons['bcancelar']['style'] = 'default';
  $this->arr_buttons['bcancelar']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcancelar.gif';

  $this->arr_buttons['bapply']['hint']             = $Nm_lang['lang_btns_apply_hint'];
  $this->arr_buttons['bapply']['type']             = 'button';
  $this->arr_buttons['bapply']['value']            = $Nm_lang['lang_btns_apply'];
  $this->arr_buttons['bapply']['display']          = 'only_text';
  $this->arr_buttons['bapply']['display_position'] = 'text_right';
  $this->arr_buttons['bapply']['fontawesomeicon']  = '';
  $this->arr_buttons['bapply']['style'] = 'default';
  $this->arr_buttons['bapply']['image'] = 'sys__NM__nm_Soft_Orange_pm_bapply.gif';

  $this->arr_buttons['brestore']['hint']             = $Nm_lang['lang_btns_restore_hint'];
  $this->arr_buttons['brestore']['type']             = 'button';
  $this->arr_buttons['brestore']['value']            = $Nm_lang['lang_btns_restore'];
  $this->arr_buttons['brestore']['display']          = 'only_text';
  $this->arr_buttons['brestore']['display_position'] = 'text_right';
  $this->arr_buttons['brestore']['fontawesomeicon']  = '';
  $this->arr_buttons['brestore']['style'] = 'default';
  $this->arr_buttons['brestore']['image'] = 'sys__NM__nm_Soft_Orange_pm_brestore.gif';

  $this->arr_buttons['blink']['hint']             = $Nm_lang['lang_btns_iurl_hint'];
  $this->arr_buttons['blink']['type']             = 'button';
  $this->arr_buttons['blink']['value']            = $Nm_lang['lang_btns_iurl'];
  $this->arr_buttons['blink']['display']          = 'only_text';
  $this->arr_buttons['blink']['display_position'] = 'text_right';
  $this->arr_buttons['blink']['fontawesomeicon']  = '';
  $this->arr_buttons['blink']['style'] = 'default';
  $this->arr_buttons['blink']['image'] = 'sys__NM__nm_Soft_Orange_pm_blink.gif';

  $this->arr_buttons['blanguage']['hint']             = $Nm_lang['lang_btns_lang_hint'];
  $this->arr_buttons['blanguage']['type']             = 'button';
  $this->arr_buttons['blanguage']['value']            = $Nm_lang['lang_btns_lang'];
  $this->arr_buttons['blanguage']['display']          = 'only_text';
  $this->arr_buttons['blanguage']['display_position'] = 'text_right';
  $this->arr_buttons['blanguage']['fontawesomeicon']  = '';
  $this->arr_buttons['blanguage']['style'] = 'default';
  $this->arr_buttons['blanguage']['image'] = 'sys__NM__nm_Soft_Orange_pm_blanguage.gif';

  $this->arr_buttons['bfieldhelp']['hint']             = $Nm_lang['lang_btns_hlpf_hint'];
  $this->arr_buttons['bfieldhelp']['type']             = 'button';
  $this->arr_buttons['bfieldhelp']['value']            = $Nm_lang['lang_btns_hlpf'];
  $this->arr_buttons['bfieldhelp']['display']          = 'only_text';
  $this->arr_buttons['bfieldhelp']['display_position'] = 'text_right';
  $this->arr_buttons['bfieldhelp']['fontawesomeicon']  = '';
  $this->arr_buttons['bfieldhelp']['style'] = 'default';
  $this->arr_buttons['bfieldhelp']['image'] = 'sys__NM__nm_Soft_Orange_pm_bfieldhelp.gif';

  $this->arr_buttons['bsrgb']['hint']             = $Nm_lang['lang_btns_srgb_hint'];
  $this->arr_buttons['bsrgb']['type']             = 'image';
  $this->arr_buttons['bsrgb']['value']            = $Nm_lang['lang_btns_srgb'];
  $this->arr_buttons['bsrgb']['display']          = 'only_text';
  $this->arr_buttons['bsrgb']['display_position'] = 'text_right';
  $this->arr_buttons['bsrgb']['fontawesomeicon']  = '';
  $this->arr_buttons['bsrgb']['style'] = 'disabledSCImage';
  $this->arr_buttons['bsrgb']['image'] = 'sys__NM__nm_Soft_Orange_pm_bsrgb.gif';

  $this->arr_buttons['berrm_clse']['hint']             = $Nm_lang['lang_btns_errm_clse_hint'];
  $this->arr_buttons['berrm_clse']['type']             = 'button';
  $this->arr_buttons['berrm_clse']['value']            = $Nm_lang['lang_btns_errm_clse'];
  $this->arr_buttons['berrm_clse']['display']          = 'only_text';
  $this->arr_buttons['berrm_clse']['display_position'] = 'text_right';
  $this->arr_buttons['berrm_clse']['fontawesomeicon']  = '';
  $this->arr_buttons['berrm_clse']['style'] = 'default';
  $this->arr_buttons['berrm_clse']['image'] = 'sys__NM__nm_Soft_Orange_pm_berrm_clse.gif';

  $this->arr_buttons['bemail']['hint']             = $Nm_lang['lang_btns_emai_hint'];
  $this->arr_buttons['bemail']['type']             = 'button';
  $this->arr_buttons['bemail']['value']            = $Nm_lang['lang_btns_emai'];
  $this->arr_buttons['bemail']['display']          = 'only_text';
  $this->arr_buttons['bemail']['display_position'] = 'text_right';
  $this->arr_buttons['bemail']['fontawesomeicon']  = '';
  $this->arr_buttons['bemail']['style'] = 'default';
  $this->arr_buttons['bemail']['image'] = 'sys__NM__nm_Soft_Orange_pm_bemail.gif';

  $this->arr_buttons['bcapture']['hint']             = $Nm_lang['lang_btns_pick_hint'];
  $this->arr_buttons['bcapture']['type']             = 'button';
  $this->arr_buttons['bcapture']['value']            = $Nm_lang['lang_btns_pick'];
  $this->arr_buttons['bcapture']['display']          = 'only_text';
  $this->arr_buttons['bcapture']['display_position'] = 'text_right';
  $this->arr_buttons['bcapture']['fontawesomeicon']  = '';
  $this->arr_buttons['bcapture']['style'] = 'default';
  $this->arr_buttons['bcapture']['image'] = 'sys__NM__nm_Soft_Orange_pm_bcapture.gif';

  $this->arr_buttons['bmessageclose']['hint']             = $Nm_lang['lang_btns_mess_clse_hint'];
  $this->arr_buttons['bmessageclose']['type']             = 'button';
  $this->arr_buttons['bmessageclose']['value']            = $Nm_lang['lang_btns_mess_clse'];
  $this->arr_buttons['bmessageclose']['display']          = 'only_text';
  $this->arr_buttons['bmessageclose']['display_position'] = 'text_right';
  $this->arr_buttons['bmessageclose']['fontawesomeicon']  = '';
  $this->arr_buttons['bmessageclose']['style'] = 'default';
  $this->arr_buttons['bmessageclose']['image'] = 'sys__NM__nm_Soft_Orange_pm_bmessageclose.gif';

  $this->arr_buttons['bgooglemaps']['hint']             = $Nm_lang['lang_btns_maps_hint'];
  $this->arr_buttons['bgooglemaps']['type']             = 'button';
  $this->arr_buttons['bgooglemaps']['value']            = $Nm_lang['lang_btns_maps'];
  $this->arr_buttons['bgooglemaps']['display']          = 'only_text';
  $this->arr_buttons['bgooglemaps']['display_position'] = 'text_right';
  $this->arr_buttons['bgooglemaps']['fontawesomeicon']  = '';
  $this->arr_buttons['bgooglemaps']['style'] = 'default';
  $this->arr_buttons['bgooglemaps']['image'] = 'sys__NM__nm_Soft_Orange_pm_bgooglemaps.gif';

  $this->arr_buttons['byoutube']['hint']             = $Nm_lang['lang_btns_yutb_hint'];
  $this->arr_buttons['byoutube']['type']             = 'button';
  $this->arr_buttons['byoutube']['value']            = $Nm_lang['lang_btns_yutb'];
  $this->arr_buttons['byoutube']['display']          = 'only_text';
  $this->arr_buttons['byoutube']['display_position'] = 'text_right';
  $this->arr_buttons['byoutube']['fontawesomeicon']  = '';
  $this->arr_buttons['byoutube']['style'] = 'default';
  $this->arr_buttons['byoutube']['image'] = 'sys__NM__nm_Soft_Orange_pm_byoutube.gif';

  $this->arr_buttons['bpassfld_up']['hint']             = $Nm_lang['lang_btns_bpassfld_up_hint'];
  $this->arr_buttons['bpassfld_up']['type']             = 'image';
  $this->arr_buttons['bpassfld_up']['value']            = $Nm_lang['lang_btns_bpassfld_up'];
  $this->arr_buttons['bpassfld_up']['display']          = 'only_img';
  $this->arr_buttons['bpassfld_up']['display_position'] = 'text_right';
  $this->arr_buttons['bpassfld_up']['fontawesomeicon']  = '';
  $this->arr_buttons['bpassfld_up']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpassfld_up']['image'] = 'scriptcase__NM__img_move_bpassfld_up.png';

  $this->arr_buttons['bpassfld_down']['hint']             = $Nm_lang['lang_btns_bpassfld_down_hint'];
  $this->arr_buttons['bpassfld_down']['type']             = 'image';
  $this->arr_buttons['bpassfld_down']['value']            = $Nm_lang['lang_btns_bpassfld_down'];
  $this->arr_buttons['bpassfld_down']['display']          = 'only_img';
  $this->arr_buttons['bpassfld_down']['display_position'] = 'text_right';
  $this->arr_buttons['bpassfld_down']['fontawesomeicon']  = '';
  $this->arr_buttons['bpassfld_down']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpassfld_down']['image'] = 'scriptcase__NM__img_move_bpassfld_down.png';

  $this->arr_buttons['bpassfld_rightall']['hint']             = $Nm_lang['lang_btns_bpassfld_rightall_hint'];
  $this->arr_buttons['bpassfld_rightall']['type']             = 'image';
  $this->arr_buttons['bpassfld_rightall']['value']            = $Nm_lang['lang_btns_bpassfld_rightall'];
  $this->arr_buttons['bpassfld_rightall']['display']          = 'only_img';
  $this->arr_buttons['bpassfld_rightall']['display_position'] = 'text_right';
  $this->arr_buttons['bpassfld_rightall']['fontawesomeicon']  = '';
  $this->arr_buttons['bpassfld_rightall']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpassfld_rightall']['image'] = 'scriptcase__NM__img_move_bpassfld_rightall.png';

  $this->arr_buttons['bpassfld_right']['hint']             = $Nm_lang['lang_btns_bpassfld_right_hint'];
  $this->arr_buttons['bpassfld_right']['type']             = 'image';
  $this->arr_buttons['bpassfld_right']['value']            = $Nm_lang['lang_btns_bpassfld_right'];
  $this->arr_buttons['bpassfld_right']['display']          = 'only_img';
  $this->arr_buttons['bpassfld_right']['display_position'] = 'text_right';
  $this->arr_buttons['bpassfld_right']['fontawesomeicon']  = '';
  $this->arr_buttons['bpassfld_right']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpassfld_right']['image'] = 'scriptcase__NM__img_move_bpassfld_right.png';

  $this->arr_buttons['bpassfld_leftall']['hint']             = $Nm_lang['lang_btns_bpassfld_leftall_hint'];
  $this->arr_buttons['bpassfld_leftall']['type']             = 'image';
  $this->arr_buttons['bpassfld_leftall']['value']            = $Nm_lang['lang_btns_bpassfld_leftall'];
  $this->arr_buttons['bpassfld_leftall']['display']          = 'only_img';
  $this->arr_buttons['bpassfld_leftall']['display_position'] = 'text_right';
  $this->arr_buttons['bpassfld_leftall']['fontawesomeicon']  = '';
  $this->arr_buttons['bpassfld_leftall']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpassfld_leftall']['image'] = 'scriptcase__NM__img_move_bpassfld_leftall.png';

  $this->arr_buttons['bpassfld_left']['hint']             = $Nm_lang['lang_btns_bpassfld_left_hint'];
  $this->arr_buttons['bpassfld_left']['type']             = 'image';
  $this->arr_buttons['bpassfld_left']['value']            = $Nm_lang['lang_btns_bpassfld_left'];
  $this->arr_buttons['bpassfld_left']['display']          = 'only_img';
  $this->arr_buttons['bpassfld_left']['display_position'] = 'text_right';
  $this->arr_buttons['bpassfld_left']['fontawesomeicon']  = '';
  $this->arr_buttons['bpassfld_left']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpassfld_left']['image'] = 'scriptcase__NM__img_move_bpassfld_left.png';

  $this->arr_buttons['breload']['hint']             = $Nm_lang['lang_btns_reload_hint'];
  $this->arr_buttons['breload']['type']             = 'button';
  $this->arr_buttons['breload']['value']            = $Nm_lang['lang_btns_reload'];
  $this->arr_buttons['breload']['display']          = 'only_text';
  $this->arr_buttons['breload']['display_position'] = 'text_right';
  $this->arr_buttons['breload']['fontawesomeicon']  = '';
  $this->arr_buttons['breload']['style'] = 'default';
  $this->arr_buttons['breload']['image'] = 'sys__NM__nm_Soft_Orange_pm_brestore.gif';

  $this->arr_buttons['bquick_clean']['hint']             = $Nm_lang['lang_btns_quck_clean_hint'];
  $this->arr_buttons['bquick_clean']['type']             = '';
  $this->arr_buttons['bquick_clean']['value']            = $Nm_lang['lang_btns_quck_clean'];
  $this->arr_buttons['bquick_clean']['display']          = '';
  $this->arr_buttons['bquick_clean']['display_position'] = '';
  $this->arr_buttons['bquick_clean']['fontawesomeicon']  = '';
  $this->arr_buttons['bquick_clean']['style'] = '';
  $this->arr_buttons['bquick_clean']['image'] = '';

  $this->arr_buttons['bgridsavesession']['hint']             = $Nm_lang['lang_btns_gridsavesession_hint'];
  $this->arr_buttons['bgridsavesession']['type']             = 'button';
  $this->arr_buttons['bgridsavesession']['value']            = $Nm_lang['lang_btns_gridsavesession'];
  $this->arr_buttons['bgridsavesession']['display']          = 'only_text';
  $this->arr_buttons['bgridsavesession']['display_position'] = 'text_right';
  $this->arr_buttons['bgridsavesession']['fontawesomeicon']  = 'fas fa-thumbtack';
  $this->arr_buttons['bgridsavesession']['style'] = 'default';
  $this->arr_buttons['bgridsavesession']['image'] = 'sys__NM__nm_Soft_Orange_pm_bgridsave.gif';

  $this->arr_buttons['bstepretorna']['hint']             = $Nm_lang['lang_btns_stepprev_hint'];
  $this->arr_buttons['bstepretorna']['type']             = 'button';
  $this->arr_buttons['bstepretorna']['value']            = $Nm_lang['lang_btns_stepprev'];
  $this->arr_buttons['bstepretorna']['display']          = 'only_text';
  $this->arr_buttons['bstepretorna']['display_position'] = 'text_right';
  $this->arr_buttons['bstepretorna']['fontawesomeicon']  = 'fas fa-arrow-left';
  $this->arr_buttons['bstepretorna']['style'] = 'default';
  $this->arr_buttons['bstepretorna']['image'] = 'new__NM__nm_btn1410380071_bretorna.gif';

  $this->arr_buttons['bstepavanca']['hint']             = $Nm_lang['lang_btns_stepnext_hint'];
  $this->arr_buttons['bstepavanca']['type']             = 'button';
  $this->arr_buttons['bstepavanca']['value']            = $Nm_lang['lang_btns_stepnext'];
  $this->arr_buttons['bstepavanca']['display']          = 'only_text';
  $this->arr_buttons['bstepavanca']['display_position'] = 'text_right';
  $this->arr_buttons['bstepavanca']['fontawesomeicon']  = 'fas fa-arrow-right';
  $this->arr_buttons['bstepavanca']['style'] = 'default';
  $this->arr_buttons['bstepavanca']['image'] = 'new__NM__nm_btn1410380071_bavanca.gif';

  $this->arr_buttons['bfilref_apply']['hint']             = $Nm_lang['lang_btns_bfilref_apply_hint'];
  $this->arr_buttons['bfilref_apply']['type']             = 'button';
  $this->arr_buttons['bfilref_apply']['value']            = $Nm_lang['lang_btns_bfilref_apply'];
  $this->arr_buttons['bfilref_apply']['display']          = 'only_text';
  $this->arr_buttons['bfilref_apply']['display_position'] = 'text_right';
  $this->arr_buttons['bfilref_apply']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_apply']['style'] = 'default';
  $this->arr_buttons['bfilref_apply']['image'] = 'sys__NM__nm_Soft_Orange_pm_bpesquisa.gif';

  $this->arr_buttons['bfilref_limpar']['hint']             = $Nm_lang['lang_btns_bfilref_limpar_hint'];
  $this->arr_buttons['bfilref_limpar']['type']             = 'button';
  $this->arr_buttons['bfilref_limpar']['value']            = $Nm_lang['lang_btns_bfilref_limpar'];
  $this->arr_buttons['bfilref_limpar']['display']          = 'only_text';
  $this->arr_buttons['bfilref_limpar']['display_position'] = 'text_right';
  $this->arr_buttons['bfilref_limpar']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_limpar']['style'] = 'default';
  $this->arr_buttons['bfilref_limpar']['image'] = 'sys__NM__nm_Soft_Orange_pm_blimpar.gif';

  $this->arr_buttons['bfilref_close']['hint']             = $Nm_lang['lang_btns_bfilref_close_hint'];
  $this->arr_buttons['bfilref_close']['type']             = 'button';
  $this->arr_buttons['bfilref_close']['value']            = $Nm_lang['lang_btns_bfilref_close'];
  $this->arr_buttons['bfilref_close']['display']          = 'only_text';
  $this->arr_buttons['bfilref_close']['display_position'] = 'text_right';
  $this->arr_buttons['bfilref_close']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_close']['style'] = 'default';
  $this->arr_buttons['bfilref_close']['image'] = 'sys__NM__nm_Soft_Orange_pm_bajaxclose.gif';

  $this->arr_buttons['bemailjson']['hint']             = $Nm_lang['lang_btns_email_json_hint'];
  $this->arr_buttons['bemailjson']['type']             = '';
  $this->arr_buttons['bemailjson']['value']            = $Nm_lang['lang_btns_email_json'];
  $this->arr_buttons['bemailjson']['display']          = '';
  $this->arr_buttons['bemailjson']['display_position'] = '';
  $this->arr_buttons['bemailjson']['fontawesomeicon']  = '';
  $this->arr_buttons['bemailjson']['style'] = '';
  $this->arr_buttons['bemailjson']['image'] = '';

  $this->arr_buttons['bjson']['hint']             = $Nm_lang['lang_btns_json_hint'];
  $this->arr_buttons['bjson']['type']             = 'button';
  $this->arr_buttons['bjson']['value']            = $Nm_lang['lang_btns_json'];
  $this->arr_buttons['bjson']['display']          = 'only_text';
  $this->arr_buttons['bjson']['display_position'] = 'text_right';
  $this->arr_buttons['bjson']['fontawesomeicon']  = '';
  $this->arr_buttons['bjson']['style'] = 'default';
  $this->arr_buttons['bjson']['image'] = 'new__NM__nm_btn1410380071_bxml.gif';

?>