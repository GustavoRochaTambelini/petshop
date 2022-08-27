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
  $this->arr_buttons['bgridsavesession']['fontawesomeicon']  = 'fas fa-thumbtack';
  $this->arr_buttons['bgridsavesession']['style'] = '';
  $this->arr_buttons['bgridsavesession']['image'] = '';

  $this->arr_buttons['bstepretorna']['hint']             = $Nm_lang['lang_btns_stepprev_hint'];
  $this->arr_buttons['bstepretorna']['type']             = 'button';
  $this->arr_buttons['bstepretorna']['value']            = $Nm_lang['lang_btns_stepprev'];
  $this->arr_buttons['bstepretorna']['display']          = 'only_text';
  $this->arr_buttons['bstepretorna']['display_position'] = '';
  $this->arr_buttons['bstepretorna']['fontawesomeicon']  = 'fas fa-arrow-left';
  $this->arr_buttons['bstepretorna']['style'] = 'default';
  $this->arr_buttons['bstepretorna']['image'] = 'sys__NM__nm_txt_btn_negociacao_container_bstepretorna.gif';

  $this->arr_buttons['bstepavanca']['hint']             = $Nm_lang['lang_btns_stepnext_hint'];
  $this->arr_buttons['bstepavanca']['type']             = 'button';
  $this->arr_buttons['bstepavanca']['value']            = $Nm_lang['lang_btns_stepnext'];
  $this->arr_buttons['bstepavanca']['display']          = 'only_text';
  $this->arr_buttons['bstepavanca']['display_position'] = '';
  $this->arr_buttons['bstepavanca']['fontawesomeicon']  = 'fas fa-arrow-right';
  $this->arr_buttons['bstepavanca']['style'] = 'default';
  $this->arr_buttons['bstepavanca']['image'] = 'sys__NM__nm_txt_btn_negociacao_container_bstepavanca.gif';

  $this->arr_buttons['bfilref_apply']['hint']             = $Nm_lang['lang_btns_bfilref_apply_hint'];
  $this->arr_buttons['bfilref_apply']['type']             = '';
  $this->arr_buttons['bfilref_apply']['value']            = $Nm_lang['lang_btns_bfilref_apply'];
  $this->arr_buttons['bfilref_apply']['display']          = '';
  $this->arr_buttons['bfilref_apply']['display_position'] = '';
  $this->arr_buttons['bfilref_apply']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_apply']['style'] = '';
  $this->arr_buttons['bfilref_apply']['image'] = '';

  $this->arr_buttons['bfilref_limpar']['hint']             = $Nm_lang['lang_btns_bfilref_limpar_hint'];
  $this->arr_buttons['bfilref_limpar']['type']             = '';
  $this->arr_buttons['bfilref_limpar']['value']            = $Nm_lang['lang_btns_bfilref_limpar'];
  $this->arr_buttons['bfilref_limpar']['display']          = '';
  $this->arr_buttons['bfilref_limpar']['display_position'] = '';
  $this->arr_buttons['bfilref_limpar']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_limpar']['style'] = '';
  $this->arr_buttons['bfilref_limpar']['image'] = '';

  $this->arr_buttons['bfilref_close']['hint']             = $Nm_lang['lang_btns_bfilref_close_hint'];
  $this->arr_buttons['bfilref_close']['type']             = '';
  $this->arr_buttons['bfilref_close']['value']            = $Nm_lang['lang_btns_bfilref_close'];
  $this->arr_buttons['bfilref_close']['display']          = '';
  $this->arr_buttons['bfilref_close']['display_position'] = '';
  $this->arr_buttons['bfilref_close']['fontawesomeicon']  = '';
  $this->arr_buttons['bfilref_close']['style'] = '';
  $this->arr_buttons['bfilref_close']['image'] = '';

  $this->arr_buttons['bemailjson']['hint']             = $Nm_lang['lang_btns_email_json_hint'];
  $this->arr_buttons['bemailjson']['type']             = '';
  $this->arr_buttons['bemailjson']['value']            = $Nm_lang['lang_btns_email_json'];
  $this->arr_buttons['bemailjson']['display']          = '';
  $this->arr_buttons['bemailjson']['display_position'] = '';
  $this->arr_buttons['bemailjson']['fontawesomeicon']  = '';
  $this->arr_buttons['bemailjson']['style'] = '';
  $this->arr_buttons['bemailjson']['image'] = '';

  $this->arr_buttons['bjson']['hint']             = $Nm_lang['lang_btns_json_hint'];
  $this->arr_buttons['bjson']['type']             = '';
  $this->arr_buttons['bjson']['value']            = $Nm_lang['lang_btns_json'];
  $this->arr_buttons['bjson']['display']          = '';
  $this->arr_buttons['bjson']['display_position'] = '';
  $this->arr_buttons['bjson']['fontawesomeicon']  = '';
  $this->arr_buttons['bjson']['style'] = '';
  $this->arr_buttons['bjson']['image'] = '';

?>