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
  $this->arr_buttons['bcons_inicio']['hint']             = 'Ir para o primeira página';
  $this->arr_buttons['bcons_inicio']['type']             = 'image';
  $this->arr_buttons['bcons_inicio']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['bcons_inicio']['display']          = 'only_text';
  $this->arr_buttons['bcons_inicio']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_inicio']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_inicio']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_inicio']['image'] = 'sys__NM__nm_Versao2_bcons_inicio.gif';

  $this->arr_buttons['bcons_retorna']['hint']             = 'Página Anterior';
  $this->arr_buttons['bcons_retorna']['type']             = 'image';
  $this->arr_buttons['bcons_retorna']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bcons_retorna']['display']          = 'only_text';
  $this->arr_buttons['bcons_retorna']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_retorna']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_retorna']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_retorna']['image'] = 'sys__NM__nm_Versao2_bcons_retorna.gif';

  $this->arr_buttons['bcons_avanca']['hint']             = 'Página Seguinte';
  $this->arr_buttons['bcons_avanca']['type']             = 'image';
  $this->arr_buttons['bcons_avanca']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bcons_avanca']['display']          = 'only_text';
  $this->arr_buttons['bcons_avanca']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_avanca']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_avanca']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_avanca']['image'] = 'sys__NM__nm_Versao2_bcons_avanca.gif';

  $this->arr_buttons['bcons_final']['hint']             = 'Ir para ùltima página';
  $this->arr_buttons['bcons_final']['type']             = 'image';
  $this->arr_buttons['bcons_final']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bcons_final']['display']          = 'only_text';
  $this->arr_buttons['bcons_final']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_final']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_final']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_final']['image'] = 'sys__NM__nm_Versao2_bcons_final.gif';

  $this->arr_buttons['birpara']['hint']             = 'Ir para linha:';
  $this->arr_buttons['birpara']['type']             = 'image';
  $this->arr_buttons['birpara']['value']            = $Nm_lang['lang_btns_jump'];
  $this->arr_buttons['birpara']['display']          = 'only_text';
  $this->arr_buttons['birpara']['display_position'] = 'text_right';
  $this->arr_buttons['birpara']['fontawesomeicon']  = '';
  $this->arr_buttons['birpara']['style'] = 'disabledSCImage';
  $this->arr_buttons['birpara']['image'] = 'sys__NM__nm_Versao2_birpara.gif';

  $this->arr_buttons['bprint']['hint']             = 'Imprimir';
  $this->arr_buttons['bprint']['type']             = 'image';
  $this->arr_buttons['bprint']['value']            = $Nm_lang['lang_btns_prnt'];
  $this->arr_buttons['bprint']['display']          = 'only_text';
  $this->arr_buttons['bprint']['display_position'] = 'text_right';
  $this->arr_buttons['bprint']['fontawesomeicon']  = '';
  $this->arr_buttons['bprint']['style'] = 'disabledSCImage';
  $this->arr_buttons['bprint']['image'] = 'sys__NM__nm_Versao2_bprint.gif';

  $this->arr_buttons['bresumo']['hint']             = 'Exibir em Resumo';
  $this->arr_buttons['bresumo']['type']             = 'image';
  $this->arr_buttons['bresumo']['value']            = $Nm_lang['lang_btns_smry'];
  $this->arr_buttons['bresumo']['display']          = 'only_text';
  $this->arr_buttons['bresumo']['display_position'] = 'text_right';
  $this->arr_buttons['bresumo']['fontawesomeicon']  = '';
  $this->arr_buttons['bresumo']['style'] = 'disabledSCImage';
  $this->arr_buttons['bresumo']['image'] = 'sys__NM__nm_Versao2_bresumo.gif';

  $this->arr_buttons['bsort']['hint']             = $Nm_lang['lang_btns_sort_hint'];
  $this->arr_buttons['bsort']['type']             = 'image';
  $this->arr_buttons['bsort']['value']            = $Nm_lang['lang_btns_sort'];
  $this->arr_buttons['bsort']['display']          = 'only_text';
  $this->arr_buttons['bsort']['display_position'] = 'text_right';
  $this->arr_buttons['bsort']['fontawesomeicon']  = '';
  $this->arr_buttons['bsort']['style'] = 'disabledSCImage';
  $this->arr_buttons['bsort']['image'] = 'sys__NM__nm_Versao2_bsort.gif';

  $this->arr_buttons['bcolumns']['hint']             = $Nm_lang['lang_btns_clmn_hint'];
  $this->arr_buttons['bcolumns']['type']             = 'image';
  $this->arr_buttons['bcolumns']['value']            = $Nm_lang['lang_btns_clmn'];
  $this->arr_buttons['bcolumns']['display']          = 'only_text';
  $this->arr_buttons['bcolumns']['display_position'] = 'text_right';
  $this->arr_buttons['bcolumns']['fontawesomeicon']  = '';
  $this->arr_buttons['bcolumns']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcolumns']['image'] = 'sys__NM__nm_Versao2_bcolumns.gif';

  $this->arr_buttons['bgroupby']['hint']             = $Nm_lang['lang_btns_gbrl_hint'];
  $this->arr_buttons['bgroupby']['type']             = 'image';
  $this->arr_buttons['bgroupby']['value']            = $Nm_lang['lang_btns_gbrl'];
  $this->arr_buttons['bgroupby']['display']          = 'only_text';
  $this->arr_buttons['bgroupby']['display_position'] = 'text_right';
  $this->arr_buttons['bgroupby']['fontawesomeicon']  = '';
  $this->arr_buttons['bgroupby']['style'] = 'disabledSCImage';
  $this->arr_buttons['bgroupby']['image'] = 'sys__NM__nm_Versao2_bgroupby.gif';

  $this->arr_buttons['bcons_detalhes']['hint']             = $Nm_lang['lang_btns_lens_hint'];
  $this->arr_buttons['bcons_detalhes']['type']             = 'image';
  $this->arr_buttons['bcons_detalhes']['value']            = $Nm_lang['lang_btns_lens'];
  $this->arr_buttons['bcons_detalhes']['display']          = 'only_text';
  $this->arr_buttons['bcons_detalhes']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_detalhes']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_detalhes']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_detalhes']['image'] = 'sys__NM__nm_Versao2_bcons_detalhes.gif';

  $this->arr_buttons['bqt_linhas']['hint']             = 'Alterar quantidade de registros por página';
  $this->arr_buttons['bqt_linhas']['type']             = 'image';
  $this->arr_buttons['bqt_linhas']['value']            = $Nm_lang['lang_btns_rows'];
  $this->arr_buttons['bqt_linhas']['display']          = 'only_text';
  $this->arr_buttons['bqt_linhas']['display_position'] = 'text_right';
  $this->arr_buttons['bqt_linhas']['fontawesomeicon']  = '';
  $this->arr_buttons['bqt_linhas']['style'] = 'disabledSCImage';
  $this->arr_buttons['bqt_linhas']['image'] = 'sys__NM__nm_Versao2_bqt_linhas.gif';

  $this->arr_buttons['bgraf']['hint']             = $Nm_lang['lang_btns_chrt_hint'];
  $this->arr_buttons['bgraf']['type']             = 'image';
  $this->arr_buttons['bgraf']['value']            = $Nm_lang['lang_btns_chrt'];
  $this->arr_buttons['bgraf']['display']          = 'only_text';
  $this->arr_buttons['bgraf']['display_position'] = 'text_right';
  $this->arr_buttons['bgraf']['fontawesomeicon']  = '';
  $this->arr_buttons['bgraf']['style'] = 'disabledSCImage';
  $this->arr_buttons['bgraf']['image'] = 'sys__NM__nm_Versao2_bgraf.gif';

  $this->arr_buttons['bconf_graf']['hint']             = 'Configurar Gráficos';
  $this->arr_buttons['bconf_graf']['type']             = 'image';
  $this->arr_buttons['bconf_graf']['value']            = $Nm_lang['lang_btns_chrt_stng'];
  $this->arr_buttons['bconf_graf']['display']          = 'only_text';
  $this->arr_buttons['bconf_graf']['display_position'] = 'text_right';
  $this->arr_buttons['bconf_graf']['fontawesomeicon']  = '';
  $this->arr_buttons['bconf_graf']['style'] = 'disabledSCImage';
  $this->arr_buttons['bconf_graf']['image'] = 'sys__NM__nm_Versao2_bconf_graf.gif';

  $this->arr_buttons['bqtd_bytes']['hint']             = '';
  $this->arr_buttons['bqtd_bytes']['type']             = 'image';
  $this->arr_buttons['bqtd_bytes']['value']            = $Nm_lang['lang_btns_qtch'];
  $this->arr_buttons['bqtd_bytes']['display']          = 'only_text';
  $this->arr_buttons['bqtd_bytes']['display_position'] = 'text_right';
  $this->arr_buttons['bqtd_bytes']['fontawesomeicon']  = '';
  $this->arr_buttons['bqtd_bytes']['style'] = 'disabledSCImage';
  $this->arr_buttons['bqtd_bytes']['image'] = 'sys__NM__nm_Versao2_bqtd_bytes.gif';

  $this->arr_buttons['blink_resumogrid']['hint']             = 'Exibir em Detalhes';
  $this->arr_buttons['blink_resumogrid']['type']             = 'image';
  $this->arr_buttons['blink_resumogrid']['value']            = $Nm_lang['lang_btns_smry_drll'];
  $this->arr_buttons['blink_resumogrid']['display']          = 'only_text';
  $this->arr_buttons['blink_resumogrid']['display_position'] = 'text_right';
  $this->arr_buttons['blink_resumogrid']['fontawesomeicon']  = '';
  $this->arr_buttons['blink_resumogrid']['style'] = 'disabledSCImage';
  $this->arr_buttons['blink_resumogrid']['image'] = 'sys__NM__nm_Versao2_blink_resumogrid.gif';

  $this->arr_buttons['brot_resumo']['hint']             = $Nm_lang['lang_btns_smry_rtte_hint'];
  $this->arr_buttons['brot_resumo']['type']             = 'image';
  $this->arr_buttons['brot_resumo']['value']            = $Nm_lang['lang_btns_smry_rtte'];
  $this->arr_buttons['brot_resumo']['display']          = 'only_text';
  $this->arr_buttons['brot_resumo']['display_position'] = 'text_right';
  $this->arr_buttons['brot_resumo']['fontawesomeicon']  = '';
  $this->arr_buttons['brot_resumo']['style'] = 'disabledSCImage';
  $this->arr_buttons['brot_resumo']['image'] = 'sys__NM__nm_Versao2_brot_resumo.gif';

  $this->arr_buttons['smry_conf']['hint']             = 'Configurar Resumo';
  $this->arr_buttons['smry_conf']['type']             = 'image';
  $this->arr_buttons['smry_conf']['value']            = $Nm_lang['lang_btns_smry_conf'];
  $this->arr_buttons['smry_conf']['display']          = 'only_text';
  $this->arr_buttons['smry_conf']['display_position'] = 'text_right';
  $this->arr_buttons['smry_conf']['fontawesomeicon']  = '';
  $this->arr_buttons['smry_conf']['style'] = 'disabledSCImage';
  $this->arr_buttons['smry_conf']['image'] = 'sys__NM__nm_Versao2_smry_conf.gif';

  $this->arr_buttons['gantt_chart']['hint']             = $Nm_lang['lang_btns_chrt_gantt_hint'];
  $this->arr_buttons['gantt_chart']['type']             = 'button';
  $this->arr_buttons['gantt_chart']['value']            = $Nm_lang['lang_btns_chrt_gantt'];
  $this->arr_buttons['gantt_chart']['display']          = 'only_text';
  $this->arr_buttons['gantt_chart']['display_position'] = 'text_right';
  $this->arr_buttons['gantt_chart']['fontawesomeicon']  = '';
  $this->arr_buttons['gantt_chart']['style'] = 'default';
  $this->arr_buttons['gantt_chart']['image'] = 'sys__NM__nm_Versao2_gantt_chart.gif';

  $this->arr_buttons['bcons_inicio_off']['hint']             = $Nm_lang['lang_btns_frst_hint'];
  $this->arr_buttons['bcons_inicio_off']['type']             = 'image';
  $this->arr_buttons['bcons_inicio_off']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['bcons_inicio_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_inicio_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_inicio_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_inicio_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_inicio_off']['image'] = 'sys__NM__nm_Versao2_bcons_inicio_off.gif';

  $this->arr_buttons['bcons_retorna_off']['hint']             = $Nm_lang['lang_btns_prev_hint'];
  $this->arr_buttons['bcons_retorna_off']['type']             = 'image';
  $this->arr_buttons['bcons_retorna_off']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bcons_retorna_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_retorna_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_retorna_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_retorna_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_retorna_off']['image'] = 'sys__NM__nm_Versao2_bcons_retorna_off.gif';

  $this->arr_buttons['bcons_avanca_off']['hint']             = $Nm_lang['lang_btns_next_hint'];
  $this->arr_buttons['bcons_avanca_off']['type']             = 'image';
  $this->arr_buttons['bcons_avanca_off']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bcons_avanca_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_avanca_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_avanca_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_avanca_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_avanca_off']['image'] = 'sys__NM__nm_Versao2_bcons_avanca_off.gif';

  $this->arr_buttons['bcons_final_off']['hint']             = $Nm_lang['lang_btns_last_hint'];
  $this->arr_buttons['bcons_final_off']['type']             = 'image';
  $this->arr_buttons['bcons_final_off']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bcons_final_off']['display']          = 'only_text';
  $this->arr_buttons['bcons_final_off']['display_position'] = 'text_right';
  $this->arr_buttons['bcons_final_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bcons_final_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcons_final_off']['image'] = 'sys__NM__nm_Versao2_bcons_final_off.gif';

  $this->arr_buttons['bpdf']['hint']             = $Nm_lang['lang_btns_pdfc_hint'];
  $this->arr_buttons['bpdf']['type']             = 'image';
  $this->arr_buttons['bpdf']['value']            = $Nm_lang['lang_btns_pdfc'];
  $this->arr_buttons['bpdf']['display']          = 'only_text';
  $this->arr_buttons['bpdf']['display_position'] = 'text_right';
  $this->arr_buttons['bpdf']['fontawesomeicon']  = '';
  $this->arr_buttons['bpdf']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpdf']['image'] = 'sys__NM__nm_Versao2_bpdf.gif';

  $this->arr_buttons['brtf']['hint']             = $Nm_lang['lang_btns_rtff_hint'];
  $this->arr_buttons['brtf']['type']             = 'image';
  $this->arr_buttons['brtf']['value']            = $Nm_lang['lang_btns_rtff'];
  $this->arr_buttons['brtf']['display']          = 'only_text';
  $this->arr_buttons['brtf']['display_position'] = 'text_right';
  $this->arr_buttons['brtf']['fontawesomeicon']  = '';
  $this->arr_buttons['brtf']['style'] = 'disabledSCImage';
  $this->arr_buttons['brtf']['image'] = 'sys__NM__nm_Versao2_brtf.gif';

  $this->arr_buttons['bexcel']['hint']             = 'Exportar para Excel';
  $this->arr_buttons['bexcel']['type']             = 'image';
  $this->arr_buttons['bexcel']['value']            = $Nm_lang['lang_btns_xlsf'];
  $this->arr_buttons['bexcel']['display']          = 'only_text';
  $this->arr_buttons['bexcel']['display_position'] = 'text_right';
  $this->arr_buttons['bexcel']['fontawesomeicon']  = '';
  $this->arr_buttons['bexcel']['style'] = 'disabledSCImage';
  $this->arr_buttons['bexcel']['image'] = 'sys__NM__nm_Versao2_bexcel.gif';

  $this->arr_buttons['bxml']['hint']             = $Nm_lang['lang_btns_xmlf_hint'];
  $this->arr_buttons['bxml']['type']             = 'image';
  $this->arr_buttons['bxml']['value']            = $Nm_lang['lang_btns_xmlf'];
  $this->arr_buttons['bxml']['display']          = 'only_text';
  $this->arr_buttons['bxml']['display_position'] = 'text_right';
  $this->arr_buttons['bxml']['fontawesomeicon']  = '';
  $this->arr_buttons['bxml']['style'] = 'disabledSCImage';
  $this->arr_buttons['bxml']['image'] = 'sys__NM__nm_Versao2_bxml.gif';

  $this->arr_buttons['bcsv']['hint']             = $Nm_lang['lang_btns_csvf_hint'];
  $this->arr_buttons['bcsv']['type']             = 'image';
  $this->arr_buttons['bcsv']['value']            = $Nm_lang['lang_btns_csvf'];
  $this->arr_buttons['bcsv']['display']          = 'only_text';
  $this->arr_buttons['bcsv']['display_position'] = 'text_right';
  $this->arr_buttons['bcsv']['fontawesomeicon']  = '';
  $this->arr_buttons['bcsv']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcsv']['image'] = 'sys__NM__nm_Versao2_bcsv.gif';

  $this->arr_buttons['bword']['hint']             = $Nm_lang['lang_btns_word_hint'];
  $this->arr_buttons['bword']['type']             = 'button';
  $this->arr_buttons['bword']['value']            = $Nm_lang['lang_btns_word'];
  $this->arr_buttons['bword']['display']          = 'only_text';
  $this->arr_buttons['bword']['display_position'] = 'text_right';
  $this->arr_buttons['bword']['fontawesomeicon']  = '';
  $this->arr_buttons['bword']['style'] = 'default';
  $this->arr_buttons['bword']['image'] = 'sys__NM__nm_Versao2_bword.gif';

  $this->arr_buttons['bexport']['hint']             = $Nm_lang['lang_btns_expo_hint'];
  $this->arr_buttons['bexport']['type']             = 'image';
  $this->arr_buttons['bexport']['value']            = $Nm_lang['lang_btns_expo'];
  $this->arr_buttons['bexport']['display']          = 'only_text';
  $this->arr_buttons['bexport']['display_position'] = 'text_right';
  $this->arr_buttons['bexport']['fontawesomeicon']  = '';
  $this->arr_buttons['bexport']['style'] = 'disabledSCImage';
  $this->arr_buttons['bexport']['image'] = 'sys__NM__nm_Versao2_bexport.gif';

  $this->arr_buttons['bexportview']['hint']             = $Nm_lang['lang_btns_expv_hint'];
  $this->arr_buttons['bexportview']['type']             = 'image';
  $this->arr_buttons['bexportview']['value']            = $Nm_lang['lang_btns_expv'];
  $this->arr_buttons['bexportview']['display']          = 'only_text';
  $this->arr_buttons['bexportview']['display_position'] = 'text_right';
  $this->arr_buttons['bexportview']['fontawesomeicon']  = '';
  $this->arr_buttons['bexportview']['style'] = 'disabledSCImage';
  $this->arr_buttons['bexportview']['image'] = 'sys__NM__nm_Versao2_bexportview.gif';

  $this->arr_buttons['bdownload']['hint']             = $Nm_lang['lang_btns_down_hint'];
  $this->arr_buttons['bdownload']['type']             = 'image';
  $this->arr_buttons['bdownload']['value']            = $Nm_lang['lang_btns_down'];
  $this->arr_buttons['bdownload']['display']          = 'only_text';
  $this->arr_buttons['bdownload']['display_position'] = 'text_right';
  $this->arr_buttons['bdownload']['fontawesomeicon']  = '';
  $this->arr_buttons['bdownload']['style'] = 'disabledSCImage';
  $this->arr_buttons['bdownload']['image'] = 'sys__NM__nm_Versao2_bdownload.gif';

  $this->arr_buttons['binicio']['hint']             = $Nm_lang['lang_btns_frst_hint'];
  $this->arr_buttons['binicio']['type']             = 'image';
  $this->arr_buttons['binicio']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['binicio']['display']          = 'only_text';
  $this->arr_buttons['binicio']['display_position'] = 'text_right';
  $this->arr_buttons['binicio']['fontawesomeicon']  = '';
  $this->arr_buttons['binicio']['style'] = 'disabledSCImage';
  $this->arr_buttons['binicio']['image'] = 'sys__NM__nm_Versao2_binicio.gif';

  $this->arr_buttons['bretorna']['hint']             = $Nm_lang['lang_btns_prev_hint'];
  $this->arr_buttons['bretorna']['type']             = 'image';
  $this->arr_buttons['bretorna']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bretorna']['display']          = 'only_text';
  $this->arr_buttons['bretorna']['display_position'] = 'text_right';
  $this->arr_buttons['bretorna']['fontawesomeicon']  = '';
  $this->arr_buttons['bretorna']['style'] = 'disabledSCImage';
  $this->arr_buttons['bretorna']['image'] = 'sys__NM__nm_Versao2_bretorna.gif';

  $this->arr_buttons['bavanca']['hint']             = $Nm_lang['lang_btns_next_hint'];
  $this->arr_buttons['bavanca']['type']             = 'image';
  $this->arr_buttons['bavanca']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bavanca']['display']          = 'only_text';
  $this->arr_buttons['bavanca']['display_position'] = 'text_right';
  $this->arr_buttons['bavanca']['fontawesomeicon']  = '';
  $this->arr_buttons['bavanca']['style'] = 'disabledSCImage';
  $this->arr_buttons['bavanca']['image'] = 'sys__NM__nm_Versao2_bavanca.gif';

  $this->arr_buttons['bfinal']['hint']             = $Nm_lang['lang_btns_last_hint'];
  $this->arr_buttons['bfinal']['type']             = 'image';
  $this->arr_buttons['bfinal']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bfinal']['display']          = 'only_text';
  $this->arr_buttons['bfinal']['display_position'] = 'text_right';
  $this->arr_buttons['bfinal']['fontawesomeicon']  = '';
  $this->arr_buttons['bfinal']['style'] = 'disabledSCImage';
  $this->arr_buttons['bfinal']['image'] = 'sys__NM__nm_Versao2_bfinal.gif';

  $this->arr_buttons['bincluir']['hint']             = $Nm_lang['lang_btns_inst_hint'];
  $this->arr_buttons['bincluir']['type']             = 'image';
  $this->arr_buttons['bincluir']['value']            = $Nm_lang['lang_btns_inst'];
  $this->arr_buttons['bincluir']['display']          = 'only_text';
  $this->arr_buttons['bincluir']['display_position'] = 'text_right';
  $this->arr_buttons['bincluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bincluir']['style'] = 'disabledSCImage';
  $this->arr_buttons['bincluir']['image'] = 'sys__NM__nm_Versao2_bincluir.gif';

  $this->arr_buttons['bexcluir']['hint']             = $Nm_lang['lang_btns_dele_hint'];
  $this->arr_buttons['bexcluir']['type']             = 'image';
  $this->arr_buttons['bexcluir']['value']            = $Nm_lang['lang_btns_dele'];
  $this->arr_buttons['bexcluir']['display']          = 'only_text';
  $this->arr_buttons['bexcluir']['display_position'] = 'text_right';
  $this->arr_buttons['bexcluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bexcluir']['style'] = 'disabledSCImage';
  $this->arr_buttons['bexcluir']['image'] = 'sys__NM__nm_Versao2_bexcluir.gif';

  $this->arr_buttons['balterar']['hint']             = $Nm_lang['lang_btns_updt_hint'];
  $this->arr_buttons['balterar']['type']             = 'image';
  $this->arr_buttons['balterar']['value']            = $Nm_lang['lang_btns_updt'];
  $this->arr_buttons['balterar']['display']          = 'only_text';
  $this->arr_buttons['balterar']['display_position'] = 'text_right';
  $this->arr_buttons['balterar']['fontawesomeicon']  = '';
  $this->arr_buttons['balterar']['style'] = 'disabledSCImage';
  $this->arr_buttons['balterar']['image'] = 'sys__NM__nm_Versao2_balterar.gif';

  $this->arr_buttons['bexcluirsel']['hint']             = $Nm_lang['lang_btns_dl_sel_hint'];
  $this->arr_buttons['bexcluirsel']['type']             = 'button';
  $this->arr_buttons['bexcluirsel']['value']            = $Nm_lang['lang_btns_dl_sel'];
  $this->arr_buttons['bexcluirsel']['display']          = 'only_text';
  $this->arr_buttons['bexcluirsel']['display_position'] = 'text_right';
  $this->arr_buttons['bexcluirsel']['fontawesomeicon']  = '';
  $this->arr_buttons['bexcluirsel']['style'] = 'default';
  $this->arr_buttons['bexcluirsel']['image'] = 'sys__NM__nm_Versao2_bexcluirsel.gif';

  $this->arr_buttons['balterarsel']['hint']             = $Nm_lang['lang_btns_sv_sel_hint'];
  $this->arr_buttons['balterarsel']['type']             = 'button';
  $this->arr_buttons['balterarsel']['value']            = $Nm_lang['lang_btns_sv_sel'];
  $this->arr_buttons['balterarsel']['display']          = 'only_text';
  $this->arr_buttons['balterarsel']['display_position'] = 'text_right';
  $this->arr_buttons['balterarsel']['fontawesomeicon']  = '';
  $this->arr_buttons['balterarsel']['style'] = 'default';
  $this->arr_buttons['balterarsel']['image'] = 'sys__NM__nm_Versao2_balterarsel.gif';

  $this->arr_buttons['bnovo']['hint']             = $Nm_lang['lang_btns_neww_hint'];
  $this->arr_buttons['bnovo']['type']             = 'image';
  $this->arr_buttons['bnovo']['value']            = $Nm_lang['lang_btns_neww'];
  $this->arr_buttons['bnovo']['display']          = 'only_text';
  $this->arr_buttons['bnovo']['display_position'] = 'text_right';
  $this->arr_buttons['bnovo']['fontawesomeicon']  = '';
  $this->arr_buttons['bnovo']['style'] = 'disabledSCImage';
  $this->arr_buttons['bnovo']['image'] = 'sys__NM__nm_Versao2_bnovo.gif';

  $this->arr_buttons['bform_editar']['hint']             = $Nm_lang['lang_btns_pncl_hint'];
  $this->arr_buttons['bform_editar']['type']             = 'image';
  $this->arr_buttons['bform_editar']['value']            = $Nm_lang['lang_btns_pncl'];
  $this->arr_buttons['bform_editar']['display']          = 'only_text';
  $this->arr_buttons['bform_editar']['display_position'] = 'text_right';
  $this->arr_buttons['bform_editar']['fontawesomeicon']  = '';
  $this->arr_buttons['bform_editar']['style'] = 'disabledSCImage';
  $this->arr_buttons['bform_editar']['image'] = 'sys__NM__nm_Versao2_bform_editar.gif';

  $this->arr_buttons['bform_captura']['hint']             = $Nm_lang['lang_btns_rtrv_grid_hint'];
  $this->arr_buttons['bform_captura']['type']             = 'image';
  $this->arr_buttons['bform_captura']['value']            = $Nm_lang['lang_btns_rtrv_grid'];
  $this->arr_buttons['bform_captura']['display']          = 'only_text';
  $this->arr_buttons['bform_captura']['display_position'] = 'text_right';
  $this->arr_buttons['bform_captura']['fontawesomeicon']  = '';
  $this->arr_buttons['bform_captura']['style'] = 'disabledSCImage';
  $this->arr_buttons['bform_captura']['image'] = 'sys__NM__nm_Versao2_bform_captura.gif';

  $this->arr_buttons['bform_lookuplink']['hint']             = $Nm_lang['lang_btns_rtrv_form_hint'];
  $this->arr_buttons['bform_lookuplink']['type']             = 'image';
  $this->arr_buttons['bform_lookuplink']['value']            = $Nm_lang['lang_btns_rtrv_form'];
  $this->arr_buttons['bform_lookuplink']['display']          = 'only_text';
  $this->arr_buttons['bform_lookuplink']['display_position'] = 'text_right';
  $this->arr_buttons['bform_lookuplink']['fontawesomeicon']  = '';
  $this->arr_buttons['bform_lookuplink']['style'] = 'disabledSCImage';
  $this->arr_buttons['bform_lookuplink']['image'] = 'sys__NM__nm_Versao2_bform_lookuplink.gif';

  $this->arr_buttons['bok']['hint']             = $Nm_lang['lang_btns_cfrm_hint'];
  $this->arr_buttons['bok']['type']             = 'image';
  $this->arr_buttons['bok']['value']            = $Nm_lang['lang_btns_cfrm'];
  $this->arr_buttons['bok']['display']          = 'only_text';
  $this->arr_buttons['bok']['display_position'] = 'text_right';
  $this->arr_buttons['bok']['fontawesomeicon']  = '';
  $this->arr_buttons['bok']['style'] = 'disabledSCImage';
  $this->arr_buttons['bok']['image'] = 'sys__NM__nm_Versao2_bok.gif';

  $this->arr_buttons['bcalendario']['hint']             = $Nm_lang['lang_btns_cldr_hint'];
  $this->arr_buttons['bcalendario']['type']             = 'image';
  $this->arr_buttons['bcalendario']['value']            = $Nm_lang['lang_btns_cldr'];
  $this->arr_buttons['bcalendario']['display']          = 'only_text';
  $this->arr_buttons['bcalendario']['display_position'] = 'text_right';
  $this->arr_buttons['bcalendario']['fontawesomeicon']  = '';
  $this->arr_buttons['bcalendario']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcalendario']['image'] = 'sys__NM__nm_Versao2_bcalendario.gif';

  $this->arr_buttons['bcalculadora']['hint']             = $Nm_lang['lang_btns_calc_hint'];
  $this->arr_buttons['bcalculadora']['type']             = 'image';
  $this->arr_buttons['bcalculadora']['value']            = $Nm_lang['lang_btns_calc'];
  $this->arr_buttons['bcalculadora']['display']          = 'only_text';
  $this->arr_buttons['bcalculadora']['display_position'] = 'text_right';
  $this->arr_buttons['bcalculadora']['fontawesomeicon']  = '';
  $this->arr_buttons['bcalculadora']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcalculadora']['image'] = 'sys__NM__nm_Versao2_bcalculadora.gif';

  $this->arr_buttons['bajaxcapt']['hint']             = $Nm_lang['lang_btns_ajax_hint'];
  $this->arr_buttons['bajaxcapt']['type']             = 'image';
  $this->arr_buttons['bajaxcapt']['value']            = $Nm_lang['lang_btns_ajax'];
  $this->arr_buttons['bajaxcapt']['display']          = 'only_text';
  $this->arr_buttons['bajaxcapt']['display_position'] = 'text_right';
  $this->arr_buttons['bajaxcapt']['fontawesomeicon']  = '';
  $this->arr_buttons['bajaxcapt']['style'] = 'disabledSCImage';
  $this->arr_buttons['bajaxcapt']['image'] = 'sys__NM__nm_Versao2_bajaxcapt.gif';

  $this->arr_buttons['bajaxclose']['hint']             = $Nm_lang['lang_btns_ajax_close_hint'];
  $this->arr_buttons['bajaxclose']['type']             = 'image';
  $this->arr_buttons['bajaxclose']['value']            = $Nm_lang['lang_btns_ajax_close'];
  $this->arr_buttons['bajaxclose']['display']          = 'only_text';
  $this->arr_buttons['bajaxclose']['display_position'] = 'text_right';
  $this->arr_buttons['bajaxclose']['fontawesomeicon']  = '';
  $this->arr_buttons['bajaxclose']['style'] = 'disabledSCImage';
  $this->arr_buttons['bajaxclose']['image'] = 'sys__NM__nm_Versao2_bajaxclose.gif';

  $this->arr_buttons['bcaptchareload']['hint']             = $Nm_lang['lang_btns_cptc_rfim_hint'];
  $this->arr_buttons['bcaptchareload']['type']             = 'image';
  $this->arr_buttons['bcaptchareload']['value']            = $Nm_lang['lang_btns_cptc_rfim'];
  $this->arr_buttons['bcaptchareload']['display']          = 'only_text';
  $this->arr_buttons['bcaptchareload']['display_position'] = 'text_right';
  $this->arr_buttons['bcaptchareload']['fontawesomeicon']  = '';
  $this->arr_buttons['bcaptchareload']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcaptchareload']['image'] = 'sys__NM__nm_Versao2_bcaptchareload.gif';

  $this->arr_buttons['bsrch_mtmf']['hint']             = $Nm_lang['lang_btns_srch_mtmf_hint'];
  $this->arr_buttons['bsrch_mtmf']['type']             = 'image';
  $this->arr_buttons['bsrch_mtmf']['value']            = $Nm_lang['lang_btns_srch_mtmf'];
  $this->arr_buttons['bsrch_mtmf']['display']          = 'only_text';
  $this->arr_buttons['bsrch_mtmf']['display_position'] = 'text_right';
  $this->arr_buttons['bsrch_mtmf']['fontawesomeicon']  = '';
  $this->arr_buttons['bsrch_mtmf']['style'] = 'disabledSCImage';
  $this->arr_buttons['bsrch_mtmf']['image'] = 'sys__NM__nm_Versao2_bsrch_mtmf.gif';

  $this->arr_buttons['bcopy']['hint']             = $Nm_lang['lang_btns_copy_hint'];
  $this->arr_buttons['bcopy']['type']             = 'button';
  $this->arr_buttons['bcopy']['value']            = $Nm_lang['lang_btns_copy'];
  $this->arr_buttons['bcopy']['display']          = 'only_text';
  $this->arr_buttons['bcopy']['display_position'] = 'text_right';
  $this->arr_buttons['bcopy']['fontawesomeicon']  = '';
  $this->arr_buttons['bcopy']['style'] = 'default';
  $this->arr_buttons['bcopy']['image'] = 'sys__NM__nm_Versao2_bcopy.gif';

  $this->arr_buttons['binicio_off']['hint']             = $Nm_lang['lang_btns_frst_hint'];
  $this->arr_buttons['binicio_off']['type']             = 'image';
  $this->arr_buttons['binicio_off']['value']            = $Nm_lang['lang_btns_frst'];
  $this->arr_buttons['binicio_off']['display']          = 'only_text';
  $this->arr_buttons['binicio_off']['display_position'] = 'text_right';
  $this->arr_buttons['binicio_off']['fontawesomeicon']  = '';
  $this->arr_buttons['binicio_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['binicio_off']['image'] = 'sys__NM__nm_Versao2_binicio_off.gif';

  $this->arr_buttons['bretorna_off']['hint']             = $Nm_lang['lang_btns_prev_hint'];
  $this->arr_buttons['bretorna_off']['type']             = 'image';
  $this->arr_buttons['bretorna_off']['value']            = $Nm_lang['lang_btns_prev'];
  $this->arr_buttons['bretorna_off']['display']          = 'only_text';
  $this->arr_buttons['bretorna_off']['display_position'] = 'text_right';
  $this->arr_buttons['bretorna_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bretorna_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['bretorna_off']['image'] = 'sys__NM__nm_Versao2_bretorna_off.gif';

  $this->arr_buttons['bavanca_off']['hint']             = $Nm_lang['lang_btns_next_hint'];
  $this->arr_buttons['bavanca_off']['type']             = 'image';
  $this->arr_buttons['bavanca_off']['value']            = $Nm_lang['lang_btns_next'];
  $this->arr_buttons['bavanca_off']['display']          = 'only_text';
  $this->arr_buttons['bavanca_off']['display_position'] = 'text_right';
  $this->arr_buttons['bavanca_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bavanca_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['bavanca_off']['image'] = 'sys__NM__nm_Versao2_bavanca_off.gif';

  $this->arr_buttons['bfinal_off']['hint']             = $Nm_lang['lang_btns_last_hint'];
  $this->arr_buttons['bfinal_off']['type']             = 'image';
  $this->arr_buttons['bfinal_off']['value']            = $Nm_lang['lang_btns_last'];
  $this->arr_buttons['bfinal_off']['display']          = 'only_text';
  $this->arr_buttons['bfinal_off']['display_position'] = 'text_right';
  $this->arr_buttons['bfinal_off']['fontawesomeicon']  = '';
  $this->arr_buttons['bfinal_off']['style'] = 'disabledSCImage';
  $this->arr_buttons['bfinal_off']['image'] = 'sys__NM__nm_Versao2_bfinal_off.gif';

  $this->arr_buttons['bpesquisa']['hint']             = $Nm_lang['lang_btns_srch_hint'];
  $this->arr_buttons['bpesquisa']['type']             = 'image';
  $this->arr_buttons['bpesquisa']['value']            = $Nm_lang['lang_btns_srch'];
  $this->arr_buttons['bpesquisa']['display']          = 'only_text';
  $this->arr_buttons['bpesquisa']['display_position'] = 'text_right';
  $this->arr_buttons['bpesquisa']['fontawesomeicon']  = '';
  $this->arr_buttons['bpesquisa']['style'] = 'disabledSCImage';
  $this->arr_buttons['bpesquisa']['image'] = 'sys__NM__nm_Versao2_bpesquisa.gif';

  $this->arr_buttons['blimpar']['hint']             = $Nm_lang['lang_btns_clea_hint'];
  $this->arr_buttons['blimpar']['type']             = 'image';
  $this->arr_buttons['blimpar']['value']            = $Nm_lang['lang_btns_clea'];
  $this->arr_buttons['blimpar']['display']          = 'only_text';
  $this->arr_buttons['blimpar']['display_position'] = 'text_right';
  $this->arr_buttons['blimpar']['fontawesomeicon']  = '';
  $this->arr_buttons['blimpar']['style'] = 'disabledSCImage';
  $this->arr_buttons['blimpar']['image'] = 'sys__NM__nm_Versao2_blimpar.gif';

  $this->arr_buttons['bsalvar']['hint']             = $Nm_lang['lang_btns_save_hint'];
  $this->arr_buttons['bsalvar']['type']             = 'image';
  $this->arr_buttons['bsalvar']['value']            = $Nm_lang['lang_btns_save'];
  $this->arr_buttons['bsalvar']['display']          = 'only_text';
  $this->arr_buttons['bsalvar']['display_position'] = 'text_right';
  $this->arr_buttons['bsalvar']['fontawesomeicon']  = '';
  $this->arr_buttons['bsalvar']['style'] = 'disabledSCImage';
  $this->arr_buttons['bsalvar']['image'] = 'sys__NM__nm_Versao2_bsalvar.gif';

  $this->arr_buttons['bedit_filter']['hint']             = $Nm_lang['lang_btns_srch_edit_hint'];
  $this->arr_buttons['bedit_filter']['type']             = 'image';
  $this->arr_buttons['bedit_filter']['value']            = $Nm_lang['lang_btns_srch_edit'];
  $this->arr_buttons['bedit_filter']['display']          = 'only_text';
  $this->arr_buttons['bedit_filter']['display_position'] = 'text_right';
  $this->arr_buttons['bedit_filter']['fontawesomeicon']  = '';
  $this->arr_buttons['bedit_filter']['style'] = 'disabledSCImage';
  $this->arr_buttons['bedit_filter']['image'] = 'sys__NM__nm_Versao2_bedit_filter.gif';

  $this->arr_buttons['bquick_search']['hint']             = $Nm_lang['lang_btns_quck_srch_hint'];
  $this->arr_buttons['bquick_search']['type']             = 'image';
  $this->arr_buttons['bquick_search']['value']            = $Nm_lang['lang_btns_quck_srch'];
  $this->arr_buttons['bquick_search']['display']          = 'only_text';
  $this->arr_buttons['bquick_search']['display_position'] = 'text_right';
  $this->arr_buttons['bquick_search']['fontawesomeicon']  = '';
  $this->arr_buttons['bquick_search']['style'] = 'disabledSCImage';
  $this->arr_buttons['bquick_search']['image'] = 'sys__NM__nm_Versao2_bquick_search.gif';

  $this->arr_buttons['bmd_incluir']['hint']             = $Nm_lang['lang_btns_mdtl_inst_hint'];
  $this->arr_buttons['bmd_incluir']['type']             = 'image';
  $this->arr_buttons['bmd_incluir']['value']            = $Nm_lang['lang_btns_mdtl_inst'];
  $this->arr_buttons['bmd_incluir']['display']          = 'only_text';
  $this->arr_buttons['bmd_incluir']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_incluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_incluir']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmd_incluir']['image'] = 'sys__NM__nm_Versao2_bmd_incluir.gif';

  $this->arr_buttons['bmd_excluir']['hint']             = $Nm_lang['lang_btns_mdtl_dele_hint'];
  $this->arr_buttons['bmd_excluir']['type']             = 'image';
  $this->arr_buttons['bmd_excluir']['value']            = $Nm_lang['lang_btns_mdtl_dele'];
  $this->arr_buttons['bmd_excluir']['display']          = 'only_text';
  $this->arr_buttons['bmd_excluir']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_excluir']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_excluir']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmd_excluir']['image'] = 'sys__NM__nm_Versao2_bmd_excluir.gif';

  $this->arr_buttons['bmd_alterar']['hint']             = $Nm_lang['lang_btns_mdtl_updt_hint'];
  $this->arr_buttons['bmd_alterar']['type']             = 'image';
  $this->arr_buttons['bmd_alterar']['value']            = $Nm_lang['lang_btns_mdtl_updt'];
  $this->arr_buttons['bmd_alterar']['display']          = 'only_text';
  $this->arr_buttons['bmd_alterar']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_alterar']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_alterar']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmd_alterar']['image'] = 'sys__NM__nm_Versao2_bmd_alterar.gif';

  $this->arr_buttons['bmd_novo']['hint']             = $Nm_lang['lang_btns_mdtl_neww_hint'];
  $this->arr_buttons['bmd_novo']['type']             = 'image';
  $this->arr_buttons['bmd_novo']['value']            = $Nm_lang['lang_btns_copy'];
  $this->arr_buttons['bmd_novo']['display']          = 'only_text';
  $this->arr_buttons['bmd_novo']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_novo']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_novo']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmd_novo']['image'] = 'sys__NM__nm_Versao2_bmd_novo.gif';

  $this->arr_buttons['bmd_cancelar']['hint']             = $Nm_lang['lang_btns_mdtl_cncl_hint'];
  $this->arr_buttons['bmd_cancelar']['type']             = 'image';
  $this->arr_buttons['bmd_cancelar']['value']            = $Nm_lang['lang_btns_mdtl_cncl'];
  $this->arr_buttons['bmd_cancelar']['display']          = 'only_text';
  $this->arr_buttons['bmd_cancelar']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_cancelar']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_cancelar']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmd_cancelar']['image'] = 'sys__NM__nm_Versao2_bmd_cancelar.gif';

  $this->arr_buttons['bmd_edit']['hint']             = $Nm_lang['lang_btns_mdtl_edit_hint'];
  $this->arr_buttons['bmd_edit']['type']             = 'image';
  $this->arr_buttons['bmd_edit']['value']            = $Nm_lang['lang_btns_mdtl_edit'];
  $this->arr_buttons['bmd_edit']['display']          = 'only_text';
  $this->arr_buttons['bmd_edit']['display_position'] = 'text_right';
  $this->arr_buttons['bmd_edit']['fontawesomeicon']  = '';
  $this->arr_buttons['bmd_edit']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmd_edit']['image'] = 'sys__NM__nm_Versao2_bmd_edit.gif';

  $this->arr_buttons['bfacebook']['hint']             = '{Facebook_hint}';
  $this->arr_buttons['bfacebook']['type']             = 'button';
  $this->arr_buttons['bfacebook']['value']            = '{Facebook}';
  $this->arr_buttons['bfacebook']['display']          = 'only_text';
  $this->arr_buttons['bfacebook']['display_position'] = 'text_right';
  $this->arr_buttons['bfacebook']['fontawesomeicon']  = '';
  $this->arr_buttons['bfacebook']['style'] = 'default';
  $this->arr_buttons['bfacebook']['image'] = 'sys__NM__nm_Versao2_bfacebook.gif';

  $this->arr_buttons['bgoogle']['hint']             = '{Google_hint}';
  $this->arr_buttons['bgoogle']['type']             = 'button';
  $this->arr_buttons['bgoogle']['value']            = '{Google}';
  $this->arr_buttons['bgoogle']['display']          = 'only_text';
  $this->arr_buttons['bgoogle']['display_position'] = 'text_right';
  $this->arr_buttons['bgoogle']['fontawesomeicon']  = '';
  $this->arr_buttons['bgoogle']['style'] = 'default';
  $this->arr_buttons['bgoogle']['image'] = 'sys__NM__nm_Versao2_bgoogle.gif';

  $this->arr_buttons['bpaypal']['hint']             = '{Paypal_hint}';
  $this->arr_buttons['bpaypal']['type']             = 'button';
  $this->arr_buttons['bpaypal']['value']            = '{Paypal}';
  $this->arr_buttons['bpaypal']['display']          = 'only_text';
  $this->arr_buttons['bpaypal']['display_position'] = 'text_right';
  $this->arr_buttons['bpaypal']['fontawesomeicon']  = '';
  $this->arr_buttons['bpaypal']['style'] = 'default';
  $this->arr_buttons['bpaypal']['image'] = 'sys__NM__nm_Versao2_bpaypal.gif';

  $this->arr_buttons['btwitter']['hint']             = '{Twitter_hint}';
  $this->arr_buttons['btwitter']['type']             = 'button';
  $this->arr_buttons['btwitter']['value']            = '{Twitter}';
  $this->arr_buttons['btwitter']['display']          = 'only_text';
  $this->arr_buttons['btwitter']['display_position'] = 'text_right';
  $this->arr_buttons['btwitter']['fontawesomeicon']  = '';
  $this->arr_buttons['btwitter']['style'] = 'default';
  $this->arr_buttons['btwitter']['image'] = 'sys__NM__nm_Versao2_btwitter.gif';

  $this->arr_buttons['bhelp']['hint']             = $Nm_lang['lang_btns_help_hint'];
  $this->arr_buttons['bhelp']['type']             = 'image';
  $this->arr_buttons['bhelp']['value']            = $Nm_lang['lang_btns_help'];
  $this->arr_buttons['bhelp']['display']          = 'only_text';
  $this->arr_buttons['bhelp']['display_position'] = 'text_right';
  $this->arr_buttons['bhelp']['fontawesomeicon']  = '';
  $this->arr_buttons['bhelp']['style'] = 'disabledSCImage';
  $this->arr_buttons['bhelp']['image'] = 'sys__NM__nm_Versao2_bhelp.gif';

  $this->arr_buttons['bsair']['hint']             = $Nm_lang['lang_btns_exit_hint'];
  $this->arr_buttons['bsair']['type']             = 'image';
  $this->arr_buttons['bsair']['value']            = $Nm_lang['lang_btns_exit'];
  $this->arr_buttons['bsair']['display']          = 'only_text';
  $this->arr_buttons['bsair']['display_position'] = 'text_right';
  $this->arr_buttons['bsair']['fontawesomeicon']  = '';
  $this->arr_buttons['bsair']['style'] = 'disabledSCImage';
  $this->arr_buttons['bsair']['image'] = 'sys__NM__nm_Versao2_bsair.gif';

  $this->arr_buttons['bvoltar']['hint']             = $Nm_lang['lang_btns_back_hint'];
  $this->arr_buttons['bvoltar']['type']             = 'image';
  $this->arr_buttons['bvoltar']['value']            = $Nm_lang['lang_btns_back'];
  $this->arr_buttons['bvoltar']['display']          = 'only_text';
  $this->arr_buttons['bvoltar']['display_position'] = 'text_right';
  $this->arr_buttons['bvoltar']['fontawesomeicon']  = '';
  $this->arr_buttons['bvoltar']['style'] = 'disabledSCImage';
  $this->arr_buttons['bvoltar']['image'] = 'sys__NM__nm_Versao2_bvoltar.gif';

  $this->arr_buttons['bcancelar']['hint']             = $Nm_lang['lang_btns_cncl_hint'];
  $this->arr_buttons['bcancelar']['type']             = 'image';
  $this->arr_buttons['bcancelar']['value']            = $Nm_lang['lang_btns_cncl'];
  $this->arr_buttons['bcancelar']['display']          = 'only_text';
  $this->arr_buttons['bcancelar']['display_position'] = 'text_right';
  $this->arr_buttons['bcancelar']['fontawesomeicon']  = '';
  $this->arr_buttons['bcancelar']['style'] = 'disabledSCImage';
  $this->arr_buttons['bcancelar']['image'] = 'sys__NM__nm_Versao2_bcancelar.gif';

  $this->arr_buttons['bzipcode']['hint']             = $Nm_lang['lang_btns_zpcd_hint'];
  $this->arr_buttons['bzipcode']['type']             = 'image';
  $this->arr_buttons['bzipcode']['value']            = $Nm_lang['lang_btns_zpcd'];
  $this->arr_buttons['bzipcode']['display']          = 'only_text';
  $this->arr_buttons['bzipcode']['display_position'] = 'text_right';
  $this->arr_buttons['bzipcode']['fontawesomeicon']  = '';
  $this->arr_buttons['bzipcode']['style'] = 'disabledSCImage';
  $this->arr_buttons['bzipcode']['image'] = 'sys__NM__nm_Versao2_bzipcode.gif';

  $this->arr_buttons['blink']['hint']             = $Nm_lang['lang_btns_iurl_hint'];
  $this->arr_buttons['blink']['type']             = 'image';
  $this->arr_buttons['blink']['value']            = $Nm_lang['lang_btns_iurl'];
  $this->arr_buttons['blink']['display']          = 'only_text';
  $this->arr_buttons['blink']['display_position'] = 'text_right';
  $this->arr_buttons['blink']['fontawesomeicon']  = '';
  $this->arr_buttons['blink']['style'] = 'disabledSCImage';
  $this->arr_buttons['blink']['image'] = 'sys__NM__nm_Versao2_blink.gif';

  $this->arr_buttons['blanguage']['hint']             = $Nm_lang['lang_btns_lang_hint'];
  $this->arr_buttons['blanguage']['type']             = 'image';
  $this->arr_buttons['blanguage']['value']            = $Nm_lang['lang_btns_lang'];
  $this->arr_buttons['blanguage']['display']          = 'only_text';
  $this->arr_buttons['blanguage']['display_position'] = 'text_right';
  $this->arr_buttons['blanguage']['fontawesomeicon']  = '';
  $this->arr_buttons['blanguage']['style'] = 'disabledSCImage';
  $this->arr_buttons['blanguage']['image'] = 'sys__NM__nm_Versao2_blanguage.gif';

  $this->arr_buttons['bfieldhelp']['hint']             = $Nm_lang['lang_btns_hlpf_hint'];
  $this->arr_buttons['bfieldhelp']['type']             = 'image';
  $this->arr_buttons['bfieldhelp']['value']            = $Nm_lang['lang_btns_hlpf'];
  $this->arr_buttons['bfieldhelp']['display']          = 'only_text';
  $this->arr_buttons['bfieldhelp']['display_position'] = 'text_right';
  $this->arr_buttons['bfieldhelp']['fontawesomeicon']  = '';
  $this->arr_buttons['bfieldhelp']['style'] = 'disabledSCImage';
  $this->arr_buttons['bfieldhelp']['image'] = 'sys__NM__nm_Versao2_bfieldhelp.gif';

  $this->arr_buttons['bsrgb']['hint']             = $Nm_lang['lang_btns_srgb_hint'];
  $this->arr_buttons['bsrgb']['type']             = 'image';
  $this->arr_buttons['bsrgb']['value']            = $Nm_lang['lang_btns_srgb'];
  $this->arr_buttons['bsrgb']['display']          = 'only_text';
  $this->arr_buttons['bsrgb']['display_position'] = 'text_right';
  $this->arr_buttons['bsrgb']['fontawesomeicon']  = '';
  $this->arr_buttons['bsrgb']['style'] = 'disabledSCImage';
  $this->arr_buttons['bsrgb']['image'] = 'sys__NM__nm_Versao2_bsrgb.gif';

  $this->arr_buttons['berrm_clse']['hint']             = $Nm_lang['lang_btns_errm_clse_hint'];
  $this->arr_buttons['berrm_clse']['type']             = 'image';
  $this->arr_buttons['berrm_clse']['value']            = $Nm_lang['lang_btns_errm_clse'];
  $this->arr_buttons['berrm_clse']['display']          = 'only_text';
  $this->arr_buttons['berrm_clse']['display_position'] = 'text_right';
  $this->arr_buttons['berrm_clse']['fontawesomeicon']  = '';
  $this->arr_buttons['berrm_clse']['style'] = 'disabledSCImage';
  $this->arr_buttons['berrm_clse']['image'] = 'sys__NM__nm_Versao2_berrm_clse.gif';

  $this->arr_buttons['bemail']['hint']             = $Nm_lang['lang_btns_emai_hint'];
  $this->arr_buttons['bemail']['type']             = 'image';
  $this->arr_buttons['bemail']['value']            = $Nm_lang['lang_btns_emai'];
  $this->arr_buttons['bemail']['display']          = 'only_text';
  $this->arr_buttons['bemail']['display_position'] = 'text_right';
  $this->arr_buttons['bemail']['fontawesomeicon']  = '';
  $this->arr_buttons['bemail']['style'] = 'disabledSCImage';
  $this->arr_buttons['bemail']['image'] = 'sys__NM__nm_Versao2_bemail.gif';

  $this->arr_buttons['bcapture']['hint']             = $Nm_lang['lang_btns_pick_hint'];
  $this->arr_buttons['bcapture']['type']             = 'link';
  $this->arr_buttons['bcapture']['value']            = $Nm_lang['lang_btns_pick'];
  $this->arr_buttons['bcapture']['display']          = 'only_text';
  $this->arr_buttons['bcapture']['display_position'] = 'text_right';
  $this->arr_buttons['bcapture']['fontawesomeicon']  = '';
  $this->arr_buttons['bcapture']['style'] = 'default';
  $this->arr_buttons['bcapture']['image'] = '';

  $this->arr_buttons['bmessageclose']['hint']             = $Nm_lang['lang_btns_mess_clse_hint'];
  $this->arr_buttons['bmessageclose']['type']             = 'image';
  $this->arr_buttons['bmessageclose']['value']            = $Nm_lang['lang_btns_mess_clse'];
  $this->arr_buttons['bmessageclose']['display']          = 'only_text';
  $this->arr_buttons['bmessageclose']['display_position'] = 'text_right';
  $this->arr_buttons['bmessageclose']['fontawesomeicon']  = '';
  $this->arr_buttons['bmessageclose']['style'] = 'disabledSCImage';
  $this->arr_buttons['bmessageclose']['image'] = 'sys__NM__nm_Versao2_bmessageclose.gif';

  $this->arr_buttons['bgooglemaps']['hint']             = $Nm_lang['lang_btns_maps_hint'];
  $this->arr_buttons['bgooglemaps']['type']             = 'image';
  $this->arr_buttons['bgooglemaps']['value']            = $Nm_lang['lang_btns_maps'];
  $this->arr_buttons['bgooglemaps']['display']          = 'only_text';
  $this->arr_buttons['bgooglemaps']['display_position'] = 'text_right';
  $this->arr_buttons['bgooglemaps']['fontawesomeicon']  = '';
  $this->arr_buttons['bgooglemaps']['style'] = 'disabledSCImage';
  $this->arr_buttons['bgooglemaps']['image'] = 'sys__NM__nm_Versao2_bgooglemaps.gif';

  $this->arr_buttons['byoutube']['hint']             = $Nm_lang['lang_btns_yutb_hint'];
  $this->arr_buttons['byoutube']['type']             = 'image';
  $this->arr_buttons['byoutube']['value']            = $Nm_lang['lang_btns_yutb'];
  $this->arr_buttons['byoutube']['display']          = 'only_text';
  $this->arr_buttons['byoutube']['display_position'] = 'text_right';
  $this->arr_buttons['byoutube']['fontawesomeicon']  = '';
  $this->arr_buttons['byoutube']['style'] = 'disabledSCImage';
  $this->arr_buttons['byoutube']['image'] = 'sys__NM__nm_Versao2_byoutube.gif';

  $this->arr_buttons['breload']['hint']             = $Nm_lang['lang_btns_reload_hint'];
  $this->arr_buttons['breload']['type']             = '';
  $this->arr_buttons['breload']['value']            = $Nm_lang['lang_btns_reload'];
  $this->arr_buttons['breload']['display']          = '';
  $this->arr_buttons['breload']['display_position'] = '';
  $this->arr_buttons['breload']['fontawesomeicon']  = '';
  $this->arr_buttons['breload']['style'] = '';
  $this->arr_buttons['breload']['image'] = '';

  $this->arr_buttons['bquick_clean']['hint']             = $Nm_lang['lang_btns_quck_clean_hint'];
  $this->arr_buttons['bquick_clean']['type']             = '';
  $this->arr_buttons['bquick_clean']['value']            = $Nm_lang['lang_btns_quck_clean'];
  $this->arr_buttons['bquick_clean']['display']          = '';
  $this->arr_buttons['bquick_clean']['display_position'] = '';
  $this->arr_buttons['bquick_clean']['fontawesomeicon']  = '';
  $this->arr_buttons['bquick_clean']['style'] = '';
  $this->arr_buttons['bquick_clean']['image'] = '';

  $this->arr_buttons['bgridsavesession']['hint']             = $Nm_lang['lang_btns_gridsavesession_hint'];
  $this->arr_buttons['bgridsavesession']['type']             = '';
  $this->arr_buttons['bgridsavesession']['value']            = $Nm_lang['lang_btns_gridsavesession'];
  $this->arr_buttons['bgridsavesession']['display']          = '';
  $this->arr_buttons['bgridsavesession']['display_position'] = '';
  $this->arr_buttons['bgridsavesession']['fontawesomeicon']  = '';
  $this->arr_buttons['bgridsavesession']['style'] = '';
  $this->arr_buttons['bgridsavesession']['image'] = '';

  $this->arr_buttons['bstepretorna']['hint']             = $Nm_lang['lang_btns_stepprev_hint'];
  $this->arr_buttons['bstepretorna']['type']             = 'button';
  $this->arr_buttons['bstepretorna']['value']            = $Nm_lang['lang_btns_stepprev'];
  $this->arr_buttons['bstepretorna']['display']          = 'only_text';
  $this->arr_buttons['bstepretorna']['display_position'] = 'text_right';
  $this->arr_buttons['bstepretorna']['fontawesomeicon']  = 'fas fa-arrow-right';
  $this->arr_buttons['bstepretorna']['style'] = 'default';
  $this->arr_buttons['bstepretorna']['image'] = 'sys__NM__nm_Versao2_bstepretorna.gif';

  $this->arr_buttons['bstepavanca']['hint']             = $Nm_lang['lang_btns_stepnext_hint'];
  $this->arr_buttons['bstepavanca']['type']             = 'button';
  $this->arr_buttons['bstepavanca']['value']            = $Nm_lang['lang_btns_stepnext'];
  $this->arr_buttons['bstepavanca']['display']          = 'only_text';
  $this->arr_buttons['bstepavanca']['display_position'] = 'text_right';
  $this->arr_buttons['bstepavanca']['fontawesomeicon']  = 'fas fa-arrow-left';
  $this->arr_buttons['bstepavanca']['style'] = 'default';
  $this->arr_buttons['bstepavanca']['image'] = 'sys__NM__nm_Versao2_bstepavanca.gif';

  $this->arr_buttons['bfilref_apply']['hint']             = $Nm_lang['lang_btns_bfilref_apply_hint'];
  $this->arr_buttons['bfilref_apply']['type']             = 'image';
  $this->arr_buttons['bfilref_apply']['value']            = $Nm_lang['lang_btns_bfilref_apply'];
  $this->arr_buttons['bfilref_apply']['display']          = 'only_text';
  $this->arr_buttons['bfilref_apply']['display_position'] = 'text_right';
  $this->arr_buttons['bfilref_apply']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_apply']['style'] = 'disabledSCImage';
  $this->arr_buttons['bfilref_apply']['image'] = 'sys__NM__nm_Versao2_bfilref_apply.gif';

  $this->arr_buttons['bfilref_limpar']['hint']             = $Nm_lang['lang_btns_bfilref_limpar_hint'];
  $this->arr_buttons['bfilref_limpar']['type']             = 'image';
  $this->arr_buttons['bfilref_limpar']['value']            = $Nm_lang['lang_btns_bfilref_limpar'];
  $this->arr_buttons['bfilref_limpar']['display']          = 'only_text';
  $this->arr_buttons['bfilref_limpar']['display_position'] = 'text_right';
  $this->arr_buttons['bfilref_limpar']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_limpar']['style'] = 'disabledSCImage';
  $this->arr_buttons['bfilref_limpar']['image'] = 'sys__NM__nm_Versao2_bfilref_limpar.gif';

  $this->arr_buttons['bfilref_close']['hint']             = $Nm_lang['lang_btns_bfilref_close_hint'];
  $this->arr_buttons['bfilref_close']['type']             = 'image';
  $this->arr_buttons['bfilref_close']['value']            = $Nm_lang['lang_btns_bfilref_close'];
  $this->arr_buttons['bfilref_close']['display']          = 'only_text';
  $this->arr_buttons['bfilref_close']['display_position'] = 'text_right';
  $this->arr_buttons['bfilref_close']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_close']['style'] = 'disabledSCImage';
  $this->arr_buttons['bfilref_close']['image'] = 'sys__NM__nm_Versao2_bfilref_close.gif';

  $this->arr_buttons['bemailjson']['hint']             = $Nm_lang['lang_btns_email_json_hint'];
  $this->arr_buttons['bemailjson']['type']             = '';
  $this->arr_buttons['bemailjson']['value']            = $Nm_lang['lang_btns_email_json'];
  $this->arr_buttons['bemailjson']['display']          = '';
  $this->arr_buttons['bemailjson']['display_position'] = '';
  $this->arr_buttons['bemailjson']['fontawesomeicon']  = '';
  $this->arr_buttons['bemailjson']['style'] = '';
  $this->arr_buttons['bemailjson']['image'] = '';

  $this->arr_buttons['bjson']['hint']             = $Nm_lang['lang_btns_json_hint'];
  $this->arr_buttons['bjson']['type']             = 'image';
  $this->arr_buttons['bjson']['value']            = $Nm_lang['lang_btns_json'];
  $this->arr_buttons['bjson']['display']          = 'only_text';
  $this->arr_buttons['bjson']['display_position'] = 'text_right';
  $this->arr_buttons['bjson']['fontawesomeicon']  = '';
  $this->arr_buttons['bjson']['style'] = 'disabledSCImage';
  $this->arr_buttons['bjson']['image'] = 'sys__NM__nm_Versao2_bjson.gif';

?>