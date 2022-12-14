<?php
//
class form_contas_pagas_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $use_100perc_fields = false;
   var $classes_100perc_fields = array();
   var $close_modal_after_insert = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'navSummary'        => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $idcontas_pagar;
   var $idcliente;
   var $idcliente_1;
   var $idforma_pagamento_prevista;
   var $idforma_pagamento_prevista_1;
   var $idforma_pagamento;
   var $idforma_pagamento_1;
   var $idtipo_contas;
   var $idgrupo_contas;
   var $idbaixa_conta_corrente;
   var $valor_a_pagar;
   var $valor_pago;
   var $pago;
   var $pago_1;
   var $juros;
   var $competencia;
   var $data_emissao;
   var $data_emissao_hora;
   var $data_vencimanto;
   var $data_vencimanto_hora;
   var $data_insercao;
   var $data_insercao_hora;
   var $data_alteracao;
   var $data_alteracao_hora;
   var $data_pagamento;
   var $data_pagamento_hora;
   var $nota_fiscal;
   var $observacao;
   var $observacao_scfile_name;
   var $observacao_ul_name;
   var $observacao_scfile_type;
   var $observacao_ul_type;
   var $observacao_limpa;
   var $observacao_salva;
   var $out_observacao;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['data_pagamento']))
          {
              $this->data_pagamento = $this->NM_ajax_info['param']['data_pagamento'];
          }
          if (isset($this->NM_ajax_info['param']['data_vencimanto']))
          {
              $this->data_vencimanto = $this->NM_ajax_info['param']['data_vencimanto'];
          }
          if (isset($this->NM_ajax_info['param']['idbaixa_conta_corrente']))
          {
              $this->idbaixa_conta_corrente = $this->NM_ajax_info['param']['idbaixa_conta_corrente'];
          }
          if (isset($this->NM_ajax_info['param']['idcliente']))
          {
              $this->idcliente = $this->NM_ajax_info['param']['idcliente'];
          }
          if (isset($this->NM_ajax_info['param']['idcontas_pagar']))
          {
              $this->idcontas_pagar = $this->NM_ajax_info['param']['idcontas_pagar'];
          }
          if (isset($this->NM_ajax_info['param']['idforma_pagamento']))
          {
              $this->idforma_pagamento = $this->NM_ajax_info['param']['idforma_pagamento'];
          }
          if (isset($this->NM_ajax_info['param']['idgrupo_contas']))
          {
              $this->idgrupo_contas = $this->NM_ajax_info['param']['idgrupo_contas'];
          }
          if (isset($this->NM_ajax_info['param']['idtipo_contas']))
          {
              $this->idtipo_contas = $this->NM_ajax_info['param']['idtipo_contas'];
          }
          if (isset($this->NM_ajax_info['param']['juros']))
          {
              $this->juros = $this->NM_ajax_info['param']['juros'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['nota_fiscal']))
          {
              $this->nota_fiscal = $this->NM_ajax_info['param']['nota_fiscal'];
          }
          if (isset($this->NM_ajax_info['param']['observacao']))
          {
              $this->observacao = $this->NM_ajax_info['param']['observacao'];
          }
          if (isset($this->NM_ajax_info['param']['observacao_limpa']))
          {
              $this->observacao_limpa = $this->NM_ajax_info['param']['observacao_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['observacao_ul_name']))
          {
              $this->observacao_ul_name = $this->NM_ajax_info['param']['observacao_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['observacao_ul_type']))
          {
              $this->observacao_ul_type = $this->NM_ajax_info['param']['observacao_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['pago']))
          {
              $this->pago = $this->NM_ajax_info['param']['pago'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['valor_a_pagar']))
          {
              $this->valor_a_pagar = $this->NM_ajax_info['param']['valor_a_pagar'];
          }
          if (isset($this->NM_ajax_info['param']['valor_pago']))
          {
              $this->valor_pago = $this->NM_ajax_info['param']['valor_pago'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->scSajaxReservedWords = array('rs', 'rst', 'rsrnd', 'rsargs');
      $this->sc_conv_var = array();
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (!in_array(strtolower($nmgp_campo), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_campo]))
                   {
                       $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
                   {
                       $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
                   }
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_contas_pagas_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['nm_run_menu'] = 1;
      } 
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->data_vencimanto);
          $this->data_vencimanto      = (isset($aDtParts[0])) ? $aDtParts[0] : "";
          $this->data_vencimanto_hora = (isset($aDtParts[1])) ? $aDtParts[1] : "";
      }
      if (($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao) || (isset($this->nmgp_opcao) && $this->nmgp_opcao == "igual"))
      { }
      else
      {
          $aDtParts = explode(' ', $this->data_pagamento);
          $this->data_pagamento      = (isset($aDtParts[0])) ? $aDtParts[0] : "";
          $this->data_pagamento_hora = (isset($aDtParts[1])) ? $aDtParts[1] : "";
      }
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_contas_pagas_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_contas_pagas_mob']['upload_field_info']['observacao'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_contas_pagas_mob',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_contas_pagas_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_contas_pagas_mob'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_contas_pagas_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_contas_pagas_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_contas_pagas_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_contas_pagas_mob']['label'] = "CONTA RECEBIDA";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_contas_pagas_mob")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form    = trim($str_button);
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $_SESSION['scriptcase']['css_form_help'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form.css";
      $_SESSION['scriptcase']['css_form_help_dir'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->Db = $this->Ini->Db; 
      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = !isset($str_ajax_bg)         || "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = !isset($str_ajax_border_c)   || "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = !isset($str_ajax_border_s)   || "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = !isset($str_ajax_border_w)   || "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = !isset($str_block_exp)       || "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = !isset($str_block_col)       || "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = !isset($str_msg_ico_title)   || "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = !isset($str_msg_ico_body)    || "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = !isset($str_err_ico_title)   || "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = !isset($str_err_ico_body)    || "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = !isset($str_cal_ico_back)    || "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = !isset($str_cal_ico_for)     || "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = !isset($str_cal_ico_close)   || "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = !isset($str_tab_space)       || "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = !isset($str_bubble_tail)     || "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = !isset($str_label_sort_pos)  || "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = !isset($str_label_sort)      || "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = !isset($str_label_sort_asc)  || "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = !isset($str_label_sort_desc) || "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok       = !isset($str_img_status_ok)  || "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err      = !isset($str_img_status_err) || "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status          = "scFormInputError";
      $this->Ini->Css_status_pwd_box  = "scFormInputErrorPwdBox";
      $this->Ini->Css_status_pwd_text = "scFormInputErrorPwdText";
      $this->Ini->Error_icon_span      = !isset($str_error_icon_span)  || "" == trim($str_error_icon_span)  ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = !isset($img_qs_search)        || "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = !isset($img_qs_clean)         || "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = !isset($str_qs_image_padding) || "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';

        $this->classes_100perc_fields['table'] = '';
        $this->classes_100perc_fields['input'] = '';
        $this->classes_100perc_fields['span_input'] = '';
        $this->classes_100perc_fields['span_select'] = '';
        $this->classes_100perc_fields['style_category'] = '';
        $this->classes_100perc_fields['keep_field_size'] = true;



      $_SESSION['scriptcase']['error_icon']['form_contas_pagas_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_contas_pagas_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['observacao_ul_name']) && '' != $this->NM_ajax_info['param']['observacao_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_field_ul_name'][$this->observacao_ul_name]))
          {
              $this->NM_ajax_info['param']['observacao_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_field_ul_name'][$this->observacao_ul_name];
          }
          $this->observacao = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['observacao_ul_name'];
          $this->observacao_scfile_name = substr($this->NM_ajax_info['param']['observacao_ul_name'], 12);
          $this->observacao_scfile_type = $this->NM_ajax_info['param']['observacao_ul_type'];
          $this->observacao_ul_name = $this->NM_ajax_info['param']['observacao_ul_name'];
          $this->observacao_ul_type = $this->NM_ajax_info['param']['observacao_ul_type'];
      }
      elseif (isset($this->observacao_ul_name) && '' != $this->observacao_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_field_ul_name'][$this->observacao_ul_name]))
          {
              $this->observacao_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_field_ul_name'][$this->observacao_ul_name];
          }
          $this->observacao = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->observacao_ul_name;
          $this->observacao_scfile_name = substr($this->observacao_ul_name, 12);
          $this->observacao_scfile_type = $this->observacao_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_contas_pagas_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_contas_pagas_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_contas_pagas_mob'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
              $this->nmgp_botoes['reload']     = $tmpDashboardButtons['form_reload']    ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form'];
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['idcliente'] != "null"){$this->idcliente = $this->nmgp_dados_form['idcliente'];} 
          if (!isset($this->idforma_pagamento_prevista)){$this->idforma_pagamento_prevista = $this->nmgp_dados_form['idforma_pagamento_prevista'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['idforma_pagamento'] != "null"){$this->idforma_pagamento = $this->nmgp_dados_form['idforma_pagamento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['juros'] != "null"){$this->juros = $this->nmgp_dados_form['juros'];} 
          if (!isset($this->competencia)){$this->competencia = $this->nmgp_dados_form['competencia'];} 
          if (!isset($this->data_emissao)){$this->data_emissao = $this->nmgp_dados_form['data_emissao'];} 
          if (!isset($this->data_insercao)){$this->data_insercao = $this->nmgp_dados_form['data_insercao'];} 
          if (!isset($this->data_alteracao)){$this->data_alteracao = $this->nmgp_dados_form['data_alteracao'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_contas_pagas_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                      $this->Ini->Nm_lang['lang_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_mnth_june'],
                                      $this->Ini->Nm_lang['lang_mnth_july'],
                                      $this->Ini->Nm_lang['lang_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                      $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                      $this->Ini->Nm_lang['lang_days_sund'],
                                      $this->Ini->Nm_lang['lang_days_mond'],
                                      $this->Ini->Nm_lang['lang_days_tued'],
                                      $this->Ini->Nm_lang['lang_days_wend'],
                                      $this->Ini->Nm_lang['lang_days_thud'],
                                      $this->Ini->Nm_lang['lang_days_frid'],
                                      $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                      $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                      $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                      $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                      $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                      $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                      $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                      $this->Ini->Nm_lang['lang_shrt_days_satd']);
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'form_contas_pagas_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_contas_pagas_mob_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_contas_pagas/form_contas_pagas_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_contas_pagas_mob_erro.class.php"); 
      }
      $this->Erro      = new form_contas_pagas_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao']))
         { 
             if ($this->idcontas_pagar != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_contas_pagas_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            $sc_obj_img = new nm_trata_img($_SERVER['DOCUMENT_ROOT'].$out1_img_cache, true);

            if(!empty($img_width) && !empty($img_height)){
                $sc_obj_img->setWidth($img_width);
                $sc_obj_img->setHeight($img_height);
            }
                $sc_obj_img->setManterAspecto(true);
            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
      if (isset($this->idcontas_pagar)) { $this->nm_limpa_alfa($this->idcontas_pagar); }
      if (isset($this->idcliente)) { $this->nm_limpa_alfa($this->idcliente); }
      if (isset($this->idforma_pagamento)) { $this->nm_limpa_alfa($this->idforma_pagamento); }
      if (isset($this->idtipo_contas)) { $this->nm_limpa_alfa($this->idtipo_contas); }
      if (isset($this->idgrupo_contas)) { $this->nm_limpa_alfa($this->idgrupo_contas); }
      if (isset($this->idbaixa_conta_corrente)) { $this->nm_limpa_alfa($this->idbaixa_conta_corrente); }
      if (isset($this->valor_a_pagar)) { $this->nm_limpa_alfa($this->valor_a_pagar); }
      if (isset($this->valor_pago)) { $this->nm_limpa_alfa($this->valor_pago); }
      if (isset($this->pago)) { $this->nm_limpa_alfa($this->pago); }
      if (isset($this->juros)) { $this->nm_limpa_alfa($this->juros); }
      if (isset($this->nota_fiscal)) { $this->nm_limpa_alfa($this->nota_fiscal); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- juros
      $this->field_config['juros']               = array();
      $this->field_config['juros']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['juros']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['juros']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['juros']['symbol_mon'] = $_SESSION['scriptcase']['reg_conf']['monet_simb'];
      $this->field_config['juros']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['juros']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- idcontas_pagar
      $this->field_config['idcontas_pagar']               = array();
      $this->field_config['idcontas_pagar']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idcontas_pagar']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idcontas_pagar']['symbol_dec'] = '';
      $this->field_config['idcontas_pagar']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idcontas_pagar']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- idtipo_contas
      $this->field_config['idtipo_contas']               = array();
      $this->field_config['idtipo_contas']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idtipo_contas']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idtipo_contas']['symbol_dec'] = '';
      $this->field_config['idtipo_contas']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idtipo_contas']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- idgrupo_contas
      $this->field_config['idgrupo_contas']               = array();
      $this->field_config['idgrupo_contas']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idgrupo_contas']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idgrupo_contas']['symbol_dec'] = '';
      $this->field_config['idgrupo_contas']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idgrupo_contas']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- idbaixa_conta_corrente
      $this->field_config['idbaixa_conta_corrente']               = array();
      $this->field_config['idbaixa_conta_corrente']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idbaixa_conta_corrente']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idbaixa_conta_corrente']['symbol_dec'] = '';
      $this->field_config['idbaixa_conta_corrente']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idbaixa_conta_corrente']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- valor_a_pagar
      $this->field_config['valor_a_pagar']               = array();
      $this->field_config['valor_a_pagar']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['valor_a_pagar']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['valor_a_pagar']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['valor_a_pagar']['symbol_mon'] = '';
      $this->field_config['valor_a_pagar']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['valor_a_pagar']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- valor_pago
      $this->field_config['valor_pago']               = array();
      $this->field_config['valor_pago']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['valor_pago']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['valor_pago']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['valor_pago']['symbol_mon'] = '';
      $this->field_config['valor_pago']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['valor_pago']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- data_vencimanto
      $this->field_config['data_vencimanto']                 = array();
      $this->field_config['data_vencimanto']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['data_vencimanto']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_vencimanto']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['data_vencimanto']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'data_vencimanto');
      //-- nota_fiscal
      $this->field_config['nota_fiscal']               = array();
      $this->field_config['nota_fiscal']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['nota_fiscal']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['nota_fiscal']['symbol_dec'] = '';
      $this->field_config['nota_fiscal']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['nota_fiscal']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- data_pagamento
      $this->field_config['data_pagamento']                 = array();
      $this->field_config['data_pagamento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['data_pagamento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_pagamento']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['data_pagamento']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'data_pagamento');
      //-- data_emissao
      $this->field_config['data_emissao']                 = array();
      $this->field_config['data_emissao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['data_emissao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_emissao']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['data_emissao']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'data_emissao');
      //-- data_insercao
      $this->field_config['data_insercao']                 = array();
      $this->field_config['data_insercao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['data_insercao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_insercao']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['data_insercao']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'data_insercao');
      //-- data_alteracao
      $this->field_config['data_alteracao']                 = array();
      $this->field_config['data_alteracao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['data_alteracao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_alteracao']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['data_alteracao']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'data_alteracao');
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();

      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_idcliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idcliente');
          }
          if ('validate_idforma_pagamento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idforma_pagamento');
          }
          if ('validate_juros' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'juros');
          }
          if ('validate_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pago');
          }
          if ('validate_idcontas_pagar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idcontas_pagar');
          }
          if ('validate_idtipo_contas' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idtipo_contas');
          }
          if ('validate_idgrupo_contas' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idgrupo_contas');
          }
          if ('validate_idbaixa_conta_corrente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idbaixa_conta_corrente');
          }
          if ('validate_valor_a_pagar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'valor_a_pagar');
          }
          if ('validate_valor_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'valor_pago');
          }
          if ('validate_data_vencimanto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'data_vencimanto');
          }
          if ('validate_nota_fiscal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nota_fiscal');
          }
          if ('validate_observacao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'observacao');
          }
          if ('validate_data_pagamento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'data_pagamento');
          }
          form_contas_pagas_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select']['idcliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->idcliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select']['idcliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select']['idforma_pagamento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->idforma_pagamento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select']['idforma_pagamento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select']['juros']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->juros = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select']['juros'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_contas_pagas_mob_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_contas_pagas_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_contas_pagas_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, 4);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro); 
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_contas_pagas_mob_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_contas_pagas_mob_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_contas_pagas_mob.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("CONTA RECEBIDA") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_contas_pagas_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_contas_pagas_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_contas_pagas_mob.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'idcliente':
               return "CLIENTE";
               break;
           case 'idforma_pagamento':
               return "FORMA RECEBIMENTO";
               break;
           case 'juros':
               return "JUROS";
               break;
           case 'pago':
               return "STATUS RECEBIMENTO";
               break;
           case 'idcontas_pagar':
               return "Idcontas Pagar";
               break;
           case 'idtipo_contas':
               return "Idtipo Contas";
               break;
           case 'idgrupo_contas':
               return "Idgrupo Contas";
               break;
           case 'idbaixa_conta_corrente':
               return "Idbaixa Conta Corrente";
               break;
           case 'valor_a_pagar':
               return "Valor A Pagar";
               break;
           case 'valor_pago':
               return "Valor Pago";
               break;
           case 'data_vencimanto':
               return "Data Vencimanto";
               break;
           case 'nota_fiscal':
               return "Nota Fiscal";
               break;
           case 'observacao':
               return "Observacao";
               break;
           case 'data_pagamento':
               return "Data Pagamento";
               break;
           case 'idforma_pagamento_prevista':
               return "FORMA PREVISTA";
               break;
           case 'competencia':
               return "Competencia";
               break;
           case 'data_emissao':
               return "DATA";
               break;
           case 'data_insercao':
               return "Data Insercao";
               break;
           case 'data_alteracao':
               return "Data Alteracao";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
     if (is_array($filtro) && empty($filtro)) {
         $filtro = '';
     }
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_contas_pagas_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_contas_pagas_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_contas_pagas_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_contas_pagas_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'idcliente' == $filtro)) || (is_array($filtro) && in_array('idcliente', $filtro)))
        $this->ValidateField_idcliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idforma_pagamento' == $filtro)) || (is_array($filtro) && in_array('idforma_pagamento', $filtro)))
        $this->ValidateField_idforma_pagamento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'juros' == $filtro)) || (is_array($filtro) && in_array('juros', $filtro)))
        $this->ValidateField_juros($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'pago' == $filtro)) || (is_array($filtro) && in_array('pago', $filtro)))
        $this->ValidateField_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idcontas_pagar' == $filtro)) || (is_array($filtro) && in_array('idcontas_pagar', $filtro)))
        $this->ValidateField_idcontas_pagar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idtipo_contas' == $filtro)) || (is_array($filtro) && in_array('idtipo_contas', $filtro)))
        $this->ValidateField_idtipo_contas($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idgrupo_contas' == $filtro)) || (is_array($filtro) && in_array('idgrupo_contas', $filtro)))
        $this->ValidateField_idgrupo_contas($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idbaixa_conta_corrente' == $filtro)) || (is_array($filtro) && in_array('idbaixa_conta_corrente', $filtro)))
        $this->ValidateField_idbaixa_conta_corrente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'valor_a_pagar' == $filtro)) || (is_array($filtro) && in_array('valor_a_pagar', $filtro)))
        $this->ValidateField_valor_a_pagar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'valor_pago' == $filtro)) || (is_array($filtro) && in_array('valor_pago', $filtro)))
        $this->ValidateField_valor_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'data_vencimanto' == $filtro)) || (is_array($filtro) && in_array('data_vencimanto', $filtro)))
        $this->ValidateField_data_vencimanto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nota_fiscal' == $filtro)) || (is_array($filtro) && in_array('nota_fiscal', $filtro)))
        $this->ValidateField_nota_fiscal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'observacao' == $filtro)) || (is_array($filtro) && in_array('observacao', $filtro)))
        $this->ValidateField_observacao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'data_pagamento' == $filtro)) || (is_array($filtro) && in_array('data_pagamento', $filtro)))
        $this->ValidateField_data_pagamento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros);
//-- converter datas   
          $this->nm_converte_datas();
//---
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_idcliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->idcliente) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']) && !in_array($this->idcliente, $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['idcliente']))
                   {
                       $Campos_Erros['idcliente'] = array();
                   }
                   $Campos_Erros['idcliente'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['idcliente']) || !is_array($this->NM_ajax_info['errList']['idcliente']))
                   {
                       $this->NM_ajax_info['errList']['idcliente'] = array();
                   }
                   $this->NM_ajax_info['errList']['idcliente'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idcliente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idcliente

    function ValidateField_idforma_pagamento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->idforma_pagamento) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']) && !in_array($this->idforma_pagamento, $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['idforma_pagamento']))
                   {
                       $Campos_Erros['idforma_pagamento'] = array();
                   }
                   $Campos_Erros['idforma_pagamento'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['idforma_pagamento']) || !is_array($this->NM_ajax_info['errList']['idforma_pagamento']))
                   {
                       $this->NM_ajax_info['errList']['idforma_pagamento'] = array();
                   }
                   $this->NM_ajax_info['errList']['idforma_pagamento'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idforma_pagamento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idforma_pagamento

    function ValidateField_juros(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->juros === "" || is_null($this->juros))  
      { 
          $this->juros = 0;
          $this->sc_force_zero[] = 'juros';
      } 
      if (!empty($this->field_config['juros']['symbol_dec']))
      {
          $this->sc_remove_currency($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp'], $this->field_config['juros']['symbol_mon']); 
          nm_limpa_valor($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp']) ; 
          if ('.' == substr($this->juros, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->juros, 1)))
              {
                  $this->juros = '';
              }
              else
              {
                  $this->juros = '0' . $this->juros;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->juros != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->juros) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "JUROS: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['juros']))
                  {
                      $Campos_Erros['juros'] = array();
                  }
                  $Campos_Erros['juros'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['juros']) || !is_array($this->NM_ajax_info['errList']['juros']))
                  {
                      $this->NM_ajax_info['errList']['juros'] = array();
                  }
                  $this->NM_ajax_info['errList']['juros'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->juros, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "JUROS; " ; 
                  if (!isset($Campos_Erros['juros']))
                  {
                      $Campos_Erros['juros'] = array();
                  }
                  $Campos_Erros['juros'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['juros']) || !is_array($this->NM_ajax_info['errList']['juros']))
                  {
                      $this->NM_ajax_info['errList']['juros'] = array();
                  }
                  $this->NM_ajax_info['errList']['juros'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'juros';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_juros

    function ValidateField_pago(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->pago == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pago';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pago

    function ValidateField_idcontas_pagar(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_numero($this->idcontas_pagar, $this->field_config['idcontas_pagar']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->idcontas_pagar != '')  
          { 
              $iTestSize = 10;
              if (strlen($this->idcontas_pagar) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idcontas Pagar: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['idcontas_pagar']))
                  {
                      $Campos_Erros['idcontas_pagar'] = array();
                  }
                  $Campos_Erros['idcontas_pagar'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['idcontas_pagar']) || !is_array($this->NM_ajax_info['errList']['idcontas_pagar']))
                  {
                      $this->NM_ajax_info['errList']['idcontas_pagar'] = array();
                  }
                  $this->NM_ajax_info['errList']['idcontas_pagar'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->idcontas_pagar, 10, 0, -0, 9999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idcontas Pagar; " ; 
                  if (!isset($Campos_Erros['idcontas_pagar']))
                  {
                      $Campos_Erros['idcontas_pagar'] = array();
                  }
                  $Campos_Erros['idcontas_pagar'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['idcontas_pagar']) || !is_array($this->NM_ajax_info['errList']['idcontas_pagar']))
                  {
                      $this->NM_ajax_info['errList']['idcontas_pagar'] = array();
                  }
                  $this->NM_ajax_info['errList']['idcontas_pagar'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['php_cmp_required']['idcontas_pagar']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['php_cmp_required']['idcontas_pagar'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "Idcontas Pagar" ; 
              if (!isset($Campos_Erros['idcontas_pagar']))
              {
                  $Campos_Erros['idcontas_pagar'] = array();
              }
              $Campos_Erros['idcontas_pagar'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['idcontas_pagar']) || !is_array($this->NM_ajax_info['errList']['idcontas_pagar']))
                  {
                      $this->NM_ajax_info['errList']['idcontas_pagar'] = array();
                  }
                  $this->NM_ajax_info['errList']['idcontas_pagar'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idcontas_pagar';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idcontas_pagar

    function ValidateField_idtipo_contas(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->idtipo_contas === "" || is_null($this->idtipo_contas))  
      { 
          $this->idtipo_contas = 0;
          $this->sc_force_zero[] = 'idtipo_contas';
      } 
      nm_limpa_numero($this->idtipo_contas, $this->field_config['idtipo_contas']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->idtipo_contas != '')  
          { 
              $iTestSize = 10;
              if (strlen($this->idtipo_contas) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idtipo Contas: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['idtipo_contas']))
                  {
                      $Campos_Erros['idtipo_contas'] = array();
                  }
                  $Campos_Erros['idtipo_contas'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['idtipo_contas']) || !is_array($this->NM_ajax_info['errList']['idtipo_contas']))
                  {
                      $this->NM_ajax_info['errList']['idtipo_contas'] = array();
                  }
                  $this->NM_ajax_info['errList']['idtipo_contas'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->idtipo_contas, 10, 0, -0, 9999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idtipo Contas; " ; 
                  if (!isset($Campos_Erros['idtipo_contas']))
                  {
                      $Campos_Erros['idtipo_contas'] = array();
                  }
                  $Campos_Erros['idtipo_contas'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['idtipo_contas']) || !is_array($this->NM_ajax_info['errList']['idtipo_contas']))
                  {
                      $this->NM_ajax_info['errList']['idtipo_contas'] = array();
                  }
                  $this->NM_ajax_info['errList']['idtipo_contas'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idtipo_contas';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idtipo_contas

    function ValidateField_idgrupo_contas(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->idgrupo_contas === "" || is_null($this->idgrupo_contas))  
      { 
          $this->idgrupo_contas = 0;
          $this->sc_force_zero[] = 'idgrupo_contas';
      } 
      nm_limpa_numero($this->idgrupo_contas, $this->field_config['idgrupo_contas']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->idgrupo_contas != '')  
          { 
              $iTestSize = 10;
              if (strlen($this->idgrupo_contas) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idgrupo Contas: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['idgrupo_contas']))
                  {
                      $Campos_Erros['idgrupo_contas'] = array();
                  }
                  $Campos_Erros['idgrupo_contas'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['idgrupo_contas']) || !is_array($this->NM_ajax_info['errList']['idgrupo_contas']))
                  {
                      $this->NM_ajax_info['errList']['idgrupo_contas'] = array();
                  }
                  $this->NM_ajax_info['errList']['idgrupo_contas'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->idgrupo_contas, 10, 0, -0, 9999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idgrupo Contas; " ; 
                  if (!isset($Campos_Erros['idgrupo_contas']))
                  {
                      $Campos_Erros['idgrupo_contas'] = array();
                  }
                  $Campos_Erros['idgrupo_contas'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['idgrupo_contas']) || !is_array($this->NM_ajax_info['errList']['idgrupo_contas']))
                  {
                      $this->NM_ajax_info['errList']['idgrupo_contas'] = array();
                  }
                  $this->NM_ajax_info['errList']['idgrupo_contas'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idgrupo_contas';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idgrupo_contas

    function ValidateField_idbaixa_conta_corrente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->idbaixa_conta_corrente === "" || is_null($this->idbaixa_conta_corrente))  
      { 
          $this->idbaixa_conta_corrente = 0;
          $this->sc_force_zero[] = 'idbaixa_conta_corrente';
      } 
      nm_limpa_numero($this->idbaixa_conta_corrente, $this->field_config['idbaixa_conta_corrente']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->idbaixa_conta_corrente != '')  
          { 
              $iTestSize = 10;
              if (strlen($this->idbaixa_conta_corrente) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idbaixa Conta Corrente: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['idbaixa_conta_corrente']))
                  {
                      $Campos_Erros['idbaixa_conta_corrente'] = array();
                  }
                  $Campos_Erros['idbaixa_conta_corrente'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['idbaixa_conta_corrente']) || !is_array($this->NM_ajax_info['errList']['idbaixa_conta_corrente']))
                  {
                      $this->NM_ajax_info['errList']['idbaixa_conta_corrente'] = array();
                  }
                  $this->NM_ajax_info['errList']['idbaixa_conta_corrente'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->idbaixa_conta_corrente, 10, 0, -0, 9999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Idbaixa Conta Corrente; " ; 
                  if (!isset($Campos_Erros['idbaixa_conta_corrente']))
                  {
                      $Campos_Erros['idbaixa_conta_corrente'] = array();
                  }
                  $Campos_Erros['idbaixa_conta_corrente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['idbaixa_conta_corrente']) || !is_array($this->NM_ajax_info['errList']['idbaixa_conta_corrente']))
                  {
                      $this->NM_ajax_info['errList']['idbaixa_conta_corrente'] = array();
                  }
                  $this->NM_ajax_info['errList']['idbaixa_conta_corrente'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idbaixa_conta_corrente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idbaixa_conta_corrente

    function ValidateField_valor_a_pagar(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->valor_a_pagar === "" || is_null($this->valor_a_pagar))  
      { 
          $this->valor_a_pagar = 0;
          $this->sc_force_zero[] = 'valor_a_pagar';
      } 
      if (!empty($this->field_config['valor_a_pagar']['symbol_dec']))
      {
          $this->sc_remove_currency($this->valor_a_pagar, $this->field_config['valor_a_pagar']['symbol_dec'], $this->field_config['valor_a_pagar']['symbol_grp'], $this->field_config['valor_a_pagar']['symbol_mon']); 
          nm_limpa_valor($this->valor_a_pagar, $this->field_config['valor_a_pagar']['symbol_dec'], $this->field_config['valor_a_pagar']['symbol_grp']) ; 
          if ('.' == substr($this->valor_a_pagar, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->valor_a_pagar, 1)))
              {
                  $this->valor_a_pagar = '';
              }
              else
              {
                  $this->valor_a_pagar = '0' . $this->valor_a_pagar;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->valor_a_pagar != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->valor_a_pagar) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor A Pagar: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['valor_a_pagar']))
                  {
                      $Campos_Erros['valor_a_pagar'] = array();
                  }
                  $Campos_Erros['valor_a_pagar'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['valor_a_pagar']) || !is_array($this->NM_ajax_info['errList']['valor_a_pagar']))
                  {
                      $this->NM_ajax_info['errList']['valor_a_pagar'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_a_pagar'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->valor_a_pagar, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor A Pagar; " ; 
                  if (!isset($Campos_Erros['valor_a_pagar']))
                  {
                      $Campos_Erros['valor_a_pagar'] = array();
                  }
                  $Campos_Erros['valor_a_pagar'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['valor_a_pagar']) || !is_array($this->NM_ajax_info['errList']['valor_a_pagar']))
                  {
                      $this->NM_ajax_info['errList']['valor_a_pagar'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_a_pagar'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'valor_a_pagar';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_valor_a_pagar

    function ValidateField_valor_pago(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->valor_pago === "" || is_null($this->valor_pago))  
      { 
          $this->valor_pago = 0;
          $this->sc_force_zero[] = 'valor_pago';
      } 
      if (!empty($this->field_config['valor_pago']['symbol_dec']))
      {
          $this->sc_remove_currency($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp'], $this->field_config['valor_pago']['symbol_mon']); 
          nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']) ; 
          if ('.' == substr($this->valor_pago, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->valor_pago, 1)))
              {
                  $this->valor_pago = '';
              }
              else
              {
                  $this->valor_pago = '0' . $this->valor_pago;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->valor_pago != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->valor_pago) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor Pago: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['valor_pago']))
                  {
                      $Campos_Erros['valor_pago'] = array();
                  }
                  $Campos_Erros['valor_pago'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['valor_pago']) || !is_array($this->NM_ajax_info['errList']['valor_pago']))
                  {
                      $this->NM_ajax_info['errList']['valor_pago'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_pago'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->valor_pago, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor Pago; " ; 
                  if (!isset($Campos_Erros['valor_pago']))
                  {
                      $Campos_Erros['valor_pago'] = array();
                  }
                  $Campos_Erros['valor_pago'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['valor_pago']) || !is_array($this->NM_ajax_info['errList']['valor_pago']))
                  {
                      $this->NM_ajax_info['errList']['valor_pago'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_pago'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'valor_pago';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_valor_pago

    function ValidateField_data_vencimanto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->data_vencimanto, $this->field_config['data_vencimanto']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['data_vencimanto']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['data_vencimanto']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['data_vencimanto']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['data_vencimanto']['date_sep']) ; 
          if (trim($this->data_vencimanto) != "")  
          { 
              if ($teste_validade->Data($this->data_vencimanto, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Data Vencimanto; " ; 
                  if (!isset($Campos_Erros['data_vencimanto']))
                  {
                      $Campos_Erros['data_vencimanto'] = array();
                  }
                  $Campos_Erros['data_vencimanto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_vencimanto']) || !is_array($this->NM_ajax_info['errList']['data_vencimanto']))
                  {
                      $this->NM_ajax_info['errList']['data_vencimanto'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_vencimanto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['data_vencimanto']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'data_vencimanto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
      nm_limpa_hora($this->data_vencimanto_hora, $this->field_config['data_vencimanto_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['data_vencimanto_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['data_vencimanto_hora']['time_sep']) ; 
          if (trim($this->data_vencimanto_hora) != "")  
          { 
              if ($teste_validade->Hora($this->data_vencimanto_hora, $Format_Hora) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Data Vencimanto; " ; 
                  if (!isset($Campos_Erros['data_vencimanto_hora']))
                  {
                      $Campos_Erros['data_vencimanto_hora'] = array();
                  }
                  $Campos_Erros['data_vencimanto_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_vencimanto']) || !is_array($this->NM_ajax_info['errList']['data_vencimanto']))
                  {
                      $this->NM_ajax_info['errList']['data_vencimanto'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_vencimanto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['data_vencimanto']) && isset($Campos_Erros['data_vencimanto_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['data_vencimanto'], $Campos_Erros['data_vencimanto_hora']);
          if (empty($Campos_Erros['data_vencimanto_hora']))
          {
              unset($Campos_Erros['data_vencimanto_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['data_vencimanto']))
          {
              $this->NM_ajax_info['errList']['data_vencimanto'] = array_unique($this->NM_ajax_info['errList']['data_vencimanto']);
          }
      }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'data_vencimanto_hora';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_data_vencimanto_hora

    function ValidateField_nota_fiscal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nota_fiscal === "" || is_null($this->nota_fiscal))  
      { 
          $this->nota_fiscal = 0;
          $this->sc_force_zero[] = 'nota_fiscal';
      } 
      nm_limpa_numero($this->nota_fiscal, $this->field_config['nota_fiscal']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->nota_fiscal != '')  
          { 
              $iTestSize = 10;
              if (strlen($this->nota_fiscal) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Nota Fiscal: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['nota_fiscal']))
                  {
                      $Campos_Erros['nota_fiscal'] = array();
                  }
                  $Campos_Erros['nota_fiscal'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['nota_fiscal']) || !is_array($this->NM_ajax_info['errList']['nota_fiscal']))
                  {
                      $this->NM_ajax_info['errList']['nota_fiscal'] = array();
                  }
                  $this->NM_ajax_info['errList']['nota_fiscal'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->nota_fiscal, 10, 0, -0, 9999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Nota Fiscal; " ; 
                  if (!isset($Campos_Erros['nota_fiscal']))
                  {
                      $Campos_Erros['nota_fiscal'] = array();
                  }
                  $Campos_Erros['nota_fiscal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['nota_fiscal']) || !is_array($this->NM_ajax_info['errList']['nota_fiscal']))
                  {
                      $this->NM_ajax_info['errList']['nota_fiscal'] = array();
                  }
                  $this->NM_ajax_info['errList']['nota_fiscal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nota_fiscal';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nota_fiscal

    function ValidateField_observacao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->observacao;
            if ("" != $this->observacao && "S" != $this->observacao_limpa && !$teste_validade->ArqExtensao($this->observacao, array()))
            {
                $hasError = true;
                $Campos_Crit .= "Observacao: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['observacao']))
                {
                    $Campos_Erros['observacao'] = array();
                }
                $Campos_Erros['observacao'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['observacao']) || !is_array($this->NM_ajax_info['errList']['observacao']))
                {
                    $this->NM_ajax_info['errList']['observacao'] = array();
                }
                $this->NM_ajax_info['errList']['observacao'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'observacao';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_observacao

    function ValidateField_data_pagamento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->data_pagamento, $this->field_config['data_pagamento']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['data_pagamento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['data_pagamento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['data_pagamento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['data_pagamento']['date_sep']) ; 
          if (trim($this->data_pagamento) != "")  
          { 
              if ($teste_validade->Data($this->data_pagamento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Data Pagamento; " ; 
                  if (!isset($Campos_Erros['data_pagamento']))
                  {
                      $Campos_Erros['data_pagamento'] = array();
                  }
                  $Campos_Erros['data_pagamento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_pagamento']) || !is_array($this->NM_ajax_info['errList']['data_pagamento']))
                  {
                      $this->NM_ajax_info['errList']['data_pagamento'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_pagamento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['data_pagamento']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'data_pagamento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
      nm_limpa_hora($this->data_pagamento_hora, $this->field_config['data_pagamento_hora']['time_sep']) ; 
      if ($this->nmgp_opcao != "excluir") 
      {
          $Format_Hora = $this->field_config['data_pagamento_hora']['date_format']; 
          nm_limpa_hora($Format_Hora, $this->field_config['data_pagamento_hora']['time_sep']) ; 
          if (trim($this->data_pagamento_hora) != "")  
          { 
              if ($teste_validade->Hora($this->data_pagamento_hora, $Format_Hora) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Data Pagamento; " ; 
                  if (!isset($Campos_Erros['data_pagamento_hora']))
                  {
                      $Campos_Erros['data_pagamento_hora'] = array();
                  }
                  $Campos_Erros['data_pagamento_hora'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_pagamento']) || !is_array($this->NM_ajax_info['errList']['data_pagamento']))
                  {
                      $this->NM_ajax_info['errList']['data_pagamento'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_pagamento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
      if (isset($Campos_Erros['data_pagamento']) && isset($Campos_Erros['data_pagamento_hora']))
      {
          $this->removeDuplicateDttmError($Campos_Erros['data_pagamento'], $Campos_Erros['data_pagamento_hora']);
          if (empty($Campos_Erros['data_pagamento_hora']))
          {
              unset($Campos_Erros['data_pagamento_hora']);
          }
          if (isset($this->NM_ajax_info['errList']['data_pagamento']))
          {
              $this->NM_ajax_info['errList']['data_pagamento'] = array_unique($this->NM_ajax_info['errList']['data_pagamento']);
          }
      }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'data_pagamento_hora';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_data_pagamento_hora
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser;
     if (!empty($Campos_Crit) || !empty($Campos_Falta))
     {
          return;
     }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->observacao == "none") 
          { 
              $this->observacao = ""; 
          } 
          if ($this->observacao != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_contas_pagas_mob_doc_name.php';
              }
              $this->observacao = sc_upload_unprotect_chars($this->observacao);
              $this->observacao_scfile_name = sc_upload_unprotect_chars($this->observacao_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->observacao_scfile_type = substr($this->observacao_scfile_type, 0, strpos($this->observacao_scfile_type, ";")) ; 
              } 
              if ($this->observacao_scfile_type == "image/pjpeg" || $this->observacao_scfile_type == "image/jpeg" || $this->observacao_scfile_type == "image/gif" ||  
                  $this->observacao_scfile_type == "image/png" || $this->observacao_scfile_type == "image/x-png" || $this->observacao_scfile_type == "image/bmp")  
              { 
                  if (!is_file($this->observacao) && isset($_SESSION['scriptcase']['charset']) && $_SESSION['scriptcase']['charset'] != 'UTF-8') {
                      $mbConvertFileName = mb_convert_encoding($this->observacao, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      $mbConvertScFileName = mb_convert_encoding($this->observacao_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      if (is_file($mbConvertFileName)) {
                          $this->observacao = $mbConvertFileName;
                          $this->observacao_scfile_name = $mbConvertScFileName;
                      }
                  }
                  if (is_file($this->observacao))  
                  { 
                      $this->NM_size_docs[$this->observacao_scfile_name] = $this->sc_file_size($this->observacao);
                      $reg_observacao = file_get_contents($this->observacao); 
                      $this->observacao = $reg_observacao; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "Observacao " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->observacao = "";
                      if (!isset($Campos_Erros['observacao']))
                      {
                          $Campos_Erros['observacao'] = array();
                      }
                      $Campos_Erros['observacao'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['observacao']) || !is_array($this->NM_ajax_info['errList']['observacao']))
                      {
                          $this->NM_ajax_info['errList']['observacao'] = array();
                      }
                      $this->NM_ajax_info['errList']['observacao'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->observacao = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "Observacao " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['observacao']))
                      {
                          $Campos_Erros['observacao'] = array();
                      }
                      $Campos_Erros['observacao'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['observacao']) || !is_array($this->NM_ajax_info['errList']['observacao']))
                      {
                          $this->NM_ajax_info['errList']['observacao'] = array();
                      }
                      $this->NM_ajax_info['errList']['observacao'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form']['observacao']) && $this->observacao_limpa != "S")
          {
              $this->observacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form']['observacao'];
          }
      } 
   }

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['idcliente'] = $this->idcliente;
    $this->nmgp_dados_form['idforma_pagamento'] = $this->idforma_pagamento;
    $this->nmgp_dados_form['juros'] = $this->juros;
    $this->nmgp_dados_form['pago'] = $this->pago;
    $this->nmgp_dados_form['idcontas_pagar'] = $this->idcontas_pagar;
    $this->nmgp_dados_form['idtipo_contas'] = $this->idtipo_contas;
    $this->nmgp_dados_form['idgrupo_contas'] = $this->idgrupo_contas;
    $this->nmgp_dados_form['idbaixa_conta_corrente'] = $this->idbaixa_conta_corrente;
    $this->nmgp_dados_form['valor_a_pagar'] = $this->valor_a_pagar;
    $this->nmgp_dados_form['valor_pago'] = $this->valor_pago;
    $this->nmgp_dados_form['data_vencimanto'] = $this->data_vencimanto;
    $this->nmgp_dados_form['nota_fiscal'] = $this->nota_fiscal;
    if (empty($this->observacao))
    {
        $this->observacao = $this->nmgp_dados_form['observacao'];
    }
    $this->nmgp_dados_form['observacao'] = $this->observacao;
    $this->nmgp_dados_form['observacao_limpa'] = $this->observacao_limpa;
    $this->nmgp_dados_form['data_pagamento'] = $this->data_pagamento;
    $this->nmgp_dados_form['idforma_pagamento_prevista'] = $this->idforma_pagamento_prevista;
    $this->nmgp_dados_form['competencia'] = $this->competencia;
    $this->nmgp_dados_form['data_emissao'] = $this->data_emissao;
    $this->nmgp_dados_form['data_insercao'] = $this->data_insercao;
    $this->nmgp_dados_form['data_alteracao'] = $this->data_alteracao;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['juros'] = $this->juros;
      if (!empty($this->field_config['juros']['symbol_dec']))
      {
         $this->sc_remove_currency($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp'], $this->field_config['juros']['symbol_mon']);
         nm_limpa_valor($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp']);
      }
      $this->Before_unformat['idcontas_pagar'] = $this->idcontas_pagar;
      nm_limpa_numero($this->idcontas_pagar, $this->field_config['idcontas_pagar']['symbol_grp']) ; 
      $this->Before_unformat['idtipo_contas'] = $this->idtipo_contas;
      nm_limpa_numero($this->idtipo_contas, $this->field_config['idtipo_contas']['symbol_grp']) ; 
      $this->Before_unformat['idgrupo_contas'] = $this->idgrupo_contas;
      nm_limpa_numero($this->idgrupo_contas, $this->field_config['idgrupo_contas']['symbol_grp']) ; 
      $this->Before_unformat['idbaixa_conta_corrente'] = $this->idbaixa_conta_corrente;
      nm_limpa_numero($this->idbaixa_conta_corrente, $this->field_config['idbaixa_conta_corrente']['symbol_grp']) ; 
      $this->Before_unformat['valor_a_pagar'] = $this->valor_a_pagar;
      if (!empty($this->field_config['valor_a_pagar']['symbol_dec']))
      {
         $this->sc_remove_currency($this->valor_a_pagar, $this->field_config['valor_a_pagar']['symbol_dec'], $this->field_config['valor_a_pagar']['symbol_grp'], $this->field_config['valor_a_pagar']['symbol_mon']);
         nm_limpa_valor($this->valor_a_pagar, $this->field_config['valor_a_pagar']['symbol_dec'], $this->field_config['valor_a_pagar']['symbol_grp']);
      }
      $this->Before_unformat['valor_pago'] = $this->valor_pago;
      if (!empty($this->field_config['valor_pago']['symbol_dec']))
      {
         $this->sc_remove_currency($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp'], $this->field_config['valor_pago']['symbol_mon']);
         nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']);
      }
      $this->Before_unformat['data_vencimanto'] = $this->data_vencimanto;
      $this->Before_unformat['data_vencimanto_hora'] = $this->data_vencimanto_hora;
      nm_limpa_data($this->data_vencimanto, $this->field_config['data_vencimanto']['date_sep']) ; 
      nm_limpa_hora($this->data_vencimanto_hora, $this->field_config['data_vencimanto']['time_sep']) ; 
      $this->Before_unformat['nota_fiscal'] = $this->nota_fiscal;
      nm_limpa_numero($this->nota_fiscal, $this->field_config['nota_fiscal']['symbol_grp']) ; 
      $this->Before_unformat['data_pagamento'] = $this->data_pagamento;
      $this->Before_unformat['data_pagamento_hora'] = $this->data_pagamento_hora;
      nm_limpa_data($this->data_pagamento, $this->field_config['data_pagamento']['date_sep']) ; 
      nm_limpa_hora($this->data_pagamento_hora, $this->field_config['data_pagamento']['time_sep']) ; 
      $this->Before_unformat['data_emissao'] = $this->data_emissao;
      $this->Before_unformat['data_emissao_hora'] = $this->data_emissao_hora;
      nm_limpa_data($this->data_emissao, $this->field_config['data_emissao']['date_sep']) ; 
      nm_limpa_hora($this->data_emissao_hora, $this->field_config['data_emissao']['time_sep']) ; 
      $this->Before_unformat['data_insercao'] = $this->data_insercao;
      $this->Before_unformat['data_insercao_hora'] = $this->data_insercao_hora;
      nm_limpa_data($this->data_insercao, $this->field_config['data_insercao']['date_sep']) ; 
      nm_limpa_hora($this->data_insercao_hora, $this->field_config['data_insercao']['time_sep']) ; 
      $this->Before_unformat['data_alteracao'] = $this->data_alteracao;
      $this->Before_unformat['data_alteracao_hora'] = $this->data_alteracao_hora;
      nm_limpa_data($this->data_alteracao, $this->field_config['data_alteracao']['date_sep']) ; 
      nm_limpa_hora($this->data_alteracao_hora, $this->field_config['data_alteracao']['time_sep']) ; 
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "juros")
      {
          if (!empty($this->field_config['juros']['symbol_dec']))
          {
             $this->sc_remove_currency($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp'], $this->field_config['juros']['symbol_mon']);
             nm_limpa_valor($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "idcontas_pagar")
      {
          nm_limpa_numero($this->idcontas_pagar, $this->field_config['idcontas_pagar']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "idtipo_contas")
      {
          nm_limpa_numero($this->idtipo_contas, $this->field_config['idtipo_contas']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "idgrupo_contas")
      {
          nm_limpa_numero($this->idgrupo_contas, $this->field_config['idgrupo_contas']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "idbaixa_conta_corrente")
      {
          nm_limpa_numero($this->idbaixa_conta_corrente, $this->field_config['idbaixa_conta_corrente']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "valor_a_pagar")
      {
          if (!empty($this->field_config['valor_a_pagar']['symbol_dec']))
          {
             $this->sc_remove_currency($this->valor_a_pagar, $this->field_config['valor_a_pagar']['symbol_dec'], $this->field_config['valor_a_pagar']['symbol_grp'], $this->field_config['valor_a_pagar']['symbol_mon']);
             nm_limpa_valor($this->valor_a_pagar, $this->field_config['valor_a_pagar']['symbol_dec'], $this->field_config['valor_a_pagar']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "valor_pago")
      {
          if (!empty($this->field_config['valor_pago']['symbol_dec']))
          {
             $this->sc_remove_currency($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp'], $this->field_config['valor_pago']['symbol_mon']);
             nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "nota_fiscal")
      {
          nm_limpa_numero($this->nota_fiscal, $this->field_config['nota_fiscal']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ('' !== $this->juros || (!empty($format_fields) && isset($format_fields['juros'])))
      {
          nmgp_Form_Num_Val($this->juros, $this->field_config['juros']['symbol_grp'], $this->field_config['juros']['symbol_dec'], "2", "S", $this->field_config['juros']['format_neg'], "", "", "-", $this->field_config['juros']['symbol_fmt']) ; 
          $sMonSymb = $this->field_config['juros']['symbol_mon'];
          $this->sc_add_currency($this->juros, $sMonSymb, $this->field_config['juros']['format_pos']); 
      }
      if ('' !== $this->idcontas_pagar || (!empty($format_fields) && isset($format_fields['idcontas_pagar'])))
      {
          nmgp_Form_Num_Val($this->idcontas_pagar, $this->field_config['idcontas_pagar']['symbol_grp'], $this->field_config['idcontas_pagar']['symbol_dec'], "0", "S", $this->field_config['idcontas_pagar']['format_neg'], "", "", "-", $this->field_config['idcontas_pagar']['symbol_fmt']) ; 
      }
      if ('' !== $this->idtipo_contas || (!empty($format_fields) && isset($format_fields['idtipo_contas'])))
      {
          nmgp_Form_Num_Val($this->idtipo_contas, $this->field_config['idtipo_contas']['symbol_grp'], $this->field_config['idtipo_contas']['symbol_dec'], "0", "S", $this->field_config['idtipo_contas']['format_neg'], "", "", "-", $this->field_config['idtipo_contas']['symbol_fmt']) ; 
      }
      if ('' !== $this->idgrupo_contas || (!empty($format_fields) && isset($format_fields['idgrupo_contas'])))
      {
          nmgp_Form_Num_Val($this->idgrupo_contas, $this->field_config['idgrupo_contas']['symbol_grp'], $this->field_config['idgrupo_contas']['symbol_dec'], "0", "S", $this->field_config['idgrupo_contas']['format_neg'], "", "", "-", $this->field_config['idgrupo_contas']['symbol_fmt']) ; 
      }
      if ('' !== $this->idbaixa_conta_corrente || (!empty($format_fields) && isset($format_fields['idbaixa_conta_corrente'])))
      {
          nmgp_Form_Num_Val($this->idbaixa_conta_corrente, $this->field_config['idbaixa_conta_corrente']['symbol_grp'], $this->field_config['idbaixa_conta_corrente']['symbol_dec'], "0", "S", $this->field_config['idbaixa_conta_corrente']['format_neg'], "", "", "-", $this->field_config['idbaixa_conta_corrente']['symbol_fmt']) ; 
      }
      if ('' !== $this->valor_a_pagar || (!empty($format_fields) && isset($format_fields['valor_a_pagar'])))
      {
          nmgp_Form_Num_Val($this->valor_a_pagar, $this->field_config['valor_a_pagar']['symbol_grp'], $this->field_config['valor_a_pagar']['symbol_dec'], "2", "S", $this->field_config['valor_a_pagar']['format_neg'], "", "", "-", $this->field_config['valor_a_pagar']['symbol_fmt']) ; 
      }
      if ('' !== $this->valor_pago || (!empty($format_fields) && isset($format_fields['valor_pago'])))
      {
          nmgp_Form_Num_Val($this->valor_pago, $this->field_config['valor_pago']['symbol_grp'], $this->field_config['valor_pago']['symbol_dec'], "2", "S", $this->field_config['valor_pago']['format_neg'], "", "", "-", $this->field_config['valor_pago']['symbol_fmt']) ; 
      }
      if ((!empty($this->data_vencimanto) && 'null' != $this->data_vencimanto) || (!empty($format_fields) && isset($format_fields['data_vencimanto'])))
      {
          $nm_separa_data = strpos($this->field_config['data_vencimanto']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['data_vencimanto']['date_format'];
          $this->field_config['data_vencimanto']['date_format'] = substr($this->field_config['data_vencimanto']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->data_vencimanto, " ") ; 
          $this->data_vencimanto_hora = substr($this->data_vencimanto, $separador + 1) ; 
          $this->data_vencimanto = substr($this->data_vencimanto, 0, $separador) ; 
          nm_volta_data($this->data_vencimanto, $this->field_config['data_vencimanto']['date_format']) ; 
          nmgp_Form_Datas($this->data_vencimanto, $this->field_config['data_vencimanto']['date_format'], $this->field_config['data_vencimanto']['date_sep']) ;  
          $this->field_config['data_vencimanto']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->data_vencimanto_hora, $this->field_config['data_vencimanto']['date_format']) ; 
          nmgp_Form_Hora($this->data_vencimanto_hora, $this->field_config['data_vencimanto']['date_format'], $this->field_config['data_vencimanto']['time_sep']) ;  
          $this->field_config['data_vencimanto']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->data_vencimanto || '' == $this->data_vencimanto)
      {
          $this->data_vencimanto_hora = '';
          $this->data_vencimanto = '';
      }
      if ('' !== $this->nota_fiscal || (!empty($format_fields) && isset($format_fields['nota_fiscal'])))
      {
          nmgp_Form_Num_Val($this->nota_fiscal, $this->field_config['nota_fiscal']['symbol_grp'], $this->field_config['nota_fiscal']['symbol_dec'], "0", "S", $this->field_config['nota_fiscal']['format_neg'], "", "", "-", $this->field_config['nota_fiscal']['symbol_fmt']) ; 
      }
      if ((!empty($this->data_pagamento) && 'null' != $this->data_pagamento) || (!empty($format_fields) && isset($format_fields['data_pagamento'])))
      {
          $nm_separa_data = strpos($this->field_config['data_pagamento']['date_format'], ";") ;
          $guarda_format_hora = $this->field_config['data_pagamento']['date_format'];
          $this->field_config['data_pagamento']['date_format'] = substr($this->field_config['data_pagamento']['date_format'], 0, $nm_separa_data) ;
          $separador = strpos($this->data_pagamento, " ") ; 
          $this->data_pagamento_hora = substr($this->data_pagamento, $separador + 1) ; 
          $this->data_pagamento = substr($this->data_pagamento, 0, $separador) ; 
          nm_volta_data($this->data_pagamento, $this->field_config['data_pagamento']['date_format']) ; 
          nmgp_Form_Datas($this->data_pagamento, $this->field_config['data_pagamento']['date_format'], $this->field_config['data_pagamento']['date_sep']) ;  
          $this->field_config['data_pagamento']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_volta_hora($this->data_pagamento_hora, $this->field_config['data_pagamento']['date_format']) ; 
          nmgp_Form_Hora($this->data_pagamento_hora, $this->field_config['data_pagamento']['date_format'], $this->field_config['data_pagamento']['time_sep']) ;  
          $this->field_config['data_pagamento']['date_format'] = $guarda_format_hora ;
      }
      elseif ('null' == $this->data_pagamento || '' == $this->data_pagamento)
      {
          $this->data_pagamento_hora = '';
          $this->data_pagamento = '';
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $trab_saida;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
   }
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['data_vencimanto']['date_format'];
      if ($this->data_vencimanto != "")  
      { 
          $nm_separa_data = strpos($this->field_config['data_vencimanto']['date_format'], ";") ;
          $this->field_config['data_vencimanto']['date_format'] = substr($this->field_config['data_vencimanto']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->data_vencimanto, $this->field_config['data_vencimanto']['date_format']) ; 
          $this->field_config['data_vencimanto']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->data_vencimanto_hora, $this->field_config['data_vencimanto']['date_format']) ; 
          if ($this->data_vencimanto_hora == "" )  
          { 
              $this->data_vencimanto_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          {
              $this->data_vencimanto_hora = substr($this->data_vencimanto_hora, 0, -4) . "." . substr($this->data_vencimanto_hora, -3);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->data_vencimanto_hora = substr($this->data_vencimanto_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->data_vencimanto_hora = substr($this->data_vencimanto_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->data_vencimanto_hora = substr($this->data_vencimanto_hora, 0, -4);
          }
          if ($this->data_vencimanto != "")  
          { 
              $this->data_vencimanto .= " " . $this->data_vencimanto_hora ; 
          }
      } 
      if ($this->data_vencimanto == "" && $use_null)  
      { 
          $this->data_vencimanto = "null" ; 
      } 
      $this->field_config['data_vencimanto']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['data_pagamento']['date_format'];
      if ($this->data_pagamento != "")  
      { 
          $nm_separa_data = strpos($this->field_config['data_pagamento']['date_format'], ";") ;
          $this->field_config['data_pagamento']['date_format'] = substr($this->field_config['data_pagamento']['date_format'], 0, $nm_separa_data) ;
          nm_conv_data($this->data_pagamento, $this->field_config['data_pagamento']['date_format']) ; 
          $this->field_config['data_pagamento']['date_format'] = substr($guarda_format_hora, $nm_separa_data + 1) ;
          nm_conv_hora($this->data_pagamento_hora, $this->field_config['data_pagamento']['date_format']) ; 
          if ($this->data_pagamento_hora == "" )  
          { 
              $this->data_pagamento_hora = "00:00:00:000" ; 
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          {
              $this->data_pagamento_hora = substr($this->data_pagamento_hora, 0, -4) . "." . substr($this->data_pagamento_hora, -3);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->data_pagamento_hora = substr($this->data_pagamento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->data_pagamento_hora = substr($this->data_pagamento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->data_pagamento_hora = substr($this->data_pagamento_hora, 0, -4);
          }
          if ($this->data_pagamento != "")  
          { 
              $this->data_pagamento .= " " . $this->data_pagamento_hora ; 
          }
      } 
      if ($this->data_pagamento == "" && $use_null)  
      { 
          $this->data_pagamento = "null" ; 
      } 
      $this->field_config['data_pagamento']['date_format'] = $guarda_format_hora;
   }
//
   function nm_prep_date_change($cmp_date, $format_dt)
   {
       $vl_return  = "";
       if ($cmp_date != 'null') {
           $vl_return .= (strpos($format_dt, "yy") !== false) ? substr($cmp_date,  0, 4) : "";
           $vl_return .= (strpos($format_dt, "mm") !== false) ? substr($cmp_date,  5, 2) : "";
           $vl_return .= (strpos($format_dt, "dd") !== false) ? substr($cmp_date,  8, 2) : "";
           $vl_return .= (strpos($format_dt, "hh") !== false) ? substr($cmp_date, 11, 2) : "";
           $vl_return .= (strpos($format_dt, "ii") !== false) ? substr($cmp_date, 14, 2) : "";
           $vl_return .= (strpos($format_dt, "ss") !== false) ? substr($cmp_date, 17, 2) : "";
       }
       return $vl_return;
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT") {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT") {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "SC_FORMAT_REGION") {
           $this->nm_data->SetaData($dt_in, strtoupper($form_in));
           $prep_out  = (strpos(strtolower($form_in), "dd") !== false) ? "dd" : "";
           $prep_out .= (strpos(strtolower($form_in), "mm") !== false) ? "mm" : "";
           $prep_out .= (strpos(strtolower($form_in), "aa") !== false) ? "aaaa" : "";
           $prep_out .= (strpos(strtolower($form_in), "yy") !== false) ? "aaaa" : "";
           return $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", $prep_out));
       }
       else {
           nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
           return $dt_out;
       }
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_idcliente();
          $this->ajax_return_values_idforma_pagamento();
          $this->ajax_return_values_juros();
          $this->ajax_return_values_pago();
          $this->ajax_return_values_idcontas_pagar();
          $this->ajax_return_values_idtipo_contas();
          $this->ajax_return_values_idgrupo_contas();
          $this->ajax_return_values_idbaixa_conta_corrente();
          $this->ajax_return_values_valor_a_pagar();
          $this->ajax_return_values_valor_pago();
          $this->ajax_return_values_data_vencimanto();
          $this->ajax_return_values_nota_fiscal();
          $this->ajax_return_values_observacao();
          $this->ajax_return_values_data_pagamento();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['idcontas_pagar']['keyVal'] = form_contas_pagas_mob_pack_protect_string($this->nmgp_dados_form['idcontas_pagar']);
          }
   } // ajax_return_values

          //----- idcliente
   function ajax_return_values_idcliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idcliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idcliente);
              $aLookup = array();
              $this->_tmp_lookup_idcliente = $this->idcliente;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_contas_pagas_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_contas_pagas_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"idcliente\"";
          if (isset($this->NM_ajax_info['select_html']['idcliente']) && !empty($this->NM_ajax_info['select_html']['idcliente']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['idcliente']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->idcliente == $sValue)
                  {
                      $this->_tmp_lookup_idcliente = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['idcliente'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['idcliente']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['idcliente']['valList'][$i] = form_contas_pagas_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['idcliente']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['idcliente']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['idcliente']['labList'] = $aLabel;
          }
   }

          //----- idforma_pagamento
   function ajax_return_values_idforma_pagamento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idforma_pagamento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idforma_pagamento);
              $aLookup = array();
              $this->_tmp_lookup_idforma_pagamento = $this->idforma_pagamento;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

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
              $aLookup[] = array(form_contas_pagas_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_contas_pagas_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"idforma_pagamento\"";
          if (isset($this->NM_ajax_info['select_html']['idforma_pagamento']) && !empty($this->NM_ajax_info['select_html']['idforma_pagamento']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['idforma_pagamento']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->idforma_pagamento == $sValue)
                  {
                      $this->_tmp_lookup_idforma_pagamento = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['idforma_pagamento'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['idforma_pagamento']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['idforma_pagamento']['valList'][$i] = form_contas_pagas_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['idforma_pagamento']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['idforma_pagamento']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['idforma_pagamento']['labList'] = $aLabel;
          }
   }

          //----- juros
   function ajax_return_values_juros($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("juros", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->juros);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['juros'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pago
   function ajax_return_values_pago($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pago", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pago);
              $aLookup = array();
              $this->_tmp_lookup_pago = $this->pago;

$aLookup[] = array(form_contas_pagas_mob_pack_protect_string('T') => str_replace('<', '&lt;',form_contas_pagas_mob_pack_protect_string("PAGO")));
$aLookup[] = array(form_contas_pagas_mob_pack_protect_string('F') => str_replace('<', '&lt;',form_contas_pagas_mob_pack_protect_string("ESTORNAR PAGAMENTO")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_pago'][] = 'T';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_pago'][] = 'F';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"pago\"";
          if (isset($this->NM_ajax_info['select_html']['pago']) && !empty($this->NM_ajax_info['select_html']['pago']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pago']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->pago == $sValue)
                  {
                      $this->_tmp_lookup_pago = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pago'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pago']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pago']['valList'][$i] = form_contas_pagas_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pago']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pago']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pago']['labList'] = $aLabel;
          }
   }

          //----- idcontas_pagar
   function ajax_return_values_idcontas_pagar($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idcontas_pagar", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idcontas_pagar);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idcontas_pagar'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("idcontas_pagar", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- idtipo_contas
   function ajax_return_values_idtipo_contas($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idtipo_contas", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idtipo_contas);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idtipo_contas'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- idgrupo_contas
   function ajax_return_values_idgrupo_contas($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idgrupo_contas", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idgrupo_contas);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idgrupo_contas'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- idbaixa_conta_corrente
   function ajax_return_values_idbaixa_conta_corrente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idbaixa_conta_corrente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idbaixa_conta_corrente);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idbaixa_conta_corrente'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- valor_a_pagar
   function ajax_return_values_valor_a_pagar($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("valor_a_pagar", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->valor_a_pagar);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['valor_a_pagar'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- valor_pago
   function ajax_return_values_valor_pago($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("valor_pago", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->valor_pago);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['valor_pago'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- data_vencimanto
   function ajax_return_values_data_vencimanto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("data_vencimanto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->data_vencimanto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['data_vencimanto'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->data_vencimanto . ' ' . $this->data_vencimanto_hora),
              );
          }
   }

          //----- nota_fiscal
   function ajax_return_values_nota_fiscal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nota_fiscal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nota_fiscal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nota_fiscal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- observacao
   function ajax_return_values_observacao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("observacao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->observacao);
              $aLookup = array();
   $out_observacao = '';
   $out1_observacao = '';
   if ('' != $this->observacao_ul_name && @is_file($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->observacao_ul_name))
   {
       $this->observacao = @file_get_contents($this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->observacao_ul_name);
   }
   if ($this->observacao != "" && $this->observacao != "none")   
   { 
       $out_observacao = $this->Ini->path_imag_temp . "/sc_observacao_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_observacao = $out_observacao; 
       $arq_observacao = fopen($this->Ini->root . $out_observacao, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->observacao, 0, 12));
           if (is_string($this->observacao) && substr($this->observacao, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->observacao = nm_conv_img_access($this->observacao);
           } 
       } 
       if (is_string($this->observacao) && substr($this->observacao, 0, 4) == "*nm*") 
       { 
           $this->observacao = substr($this->observacao, 4) ; 
           $this->observacao = base64_decode($this->observacao) ; 
       } 
       $img_pos_bm = (is_string($this->observacao)) ? strpos($this->observacao, "BM") : false; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->observacao = substr($this->observacao, $img_pos_bm) ; 
       } 
       fwrite($arq_observacao, (string)$this->observacao) ;  
       fclose($arq_observacao) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_observacao, true);
       $this->nmgp_return_img['observacao'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['observacao'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['observacao'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_observacao,
               'imgOrig' => $out1_observacao,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- data_pagamento
   function ajax_return_values_data_pagamento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("data_pagamento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->data_pagamento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['data_pagamento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->data_pagamento . ' ' . $this->data_pagamento_hora),
              );
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//
   function nm_troca_decimal($sc_parm1, $sc_parm2) 
   { 
      $this->juros = str_replace($sc_parm1, $sc_parm2, $this->juros); 
      $this->valor_a_pagar = str_replace($sc_parm1, $sc_parm2, $this->valor_a_pagar); 
      $this->valor_pago = str_replace($sc_parm1, $sc_parm2, $this->valor_pago); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->juros = "'" . $this->juros . "'";
      $this->valor_a_pagar = "'" . $this->valor_a_pagar . "'";
      $this->valor_pago = "'" . $this->valor_pago . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->juros = str_replace("'", "", $this->juros); 
      $this->valor_a_pagar = str_replace("'", "", $this->valor_a_pagar); 
      $this->valor_pago = str_replace("'", "", $this->valor_pago); 
   } 
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
    if ("excluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_contas_pagas_mob']['contr_erro'] = 'on';
              /* recebimento_parcial */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM recebimento_parcial WHERE idcontas_receber = " . $idcontas_receber ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM recebimento_parcial WHERE idcontas_receber = " . $idcontas_receber ;
      }
       
      $nm_select = $sc_cmd_dependency; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset_recebimento_parcial = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->dataset_recebimento_parcial[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset_recebimento_parcial = false;
          $this->dataset_recebimento_parcial_erro = $this->Db->ErrorMsg();
      } 
;

      if($this->dataset_recebimento_parcial[0][0] > 0)
      {
          
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_contas_pagas_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_contas_pagas_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }
$_SESSION['scriptcase']['form_contas_pagas_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          else
          { 
              $this->sc_evento = ""; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if ((!isset($this->Ini->nm_bases_access) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['idcliente'] = $this->idcliente;
      $NM_val_form['idforma_pagamento'] = $this->idforma_pagamento;
      $NM_val_form['juros'] = $this->juros;
      $NM_val_form['pago'] = $this->pago;
      $NM_val_form['idcontas_pagar'] = $this->idcontas_pagar;
      $NM_val_form['idtipo_contas'] = $this->idtipo_contas;
      $NM_val_form['idgrupo_contas'] = $this->idgrupo_contas;
      $NM_val_form['idbaixa_conta_corrente'] = $this->idbaixa_conta_corrente;
      $NM_val_form['valor_a_pagar'] = $this->valor_a_pagar;
      $NM_val_form['valor_pago'] = $this->valor_pago;
      $NM_val_form['data_vencimanto'] = $this->data_vencimanto;
      $NM_val_form['nota_fiscal'] = $this->nota_fiscal;
      $NM_val_form['observacao'] = $this->observacao;
      $NM_val_form['data_pagamento'] = $this->data_pagamento;
      $NM_val_form['idforma_pagamento_prevista'] = $this->idforma_pagamento_prevista;
      $NM_val_form['competencia'] = $this->competencia;
      $NM_val_form['data_emissao'] = $this->data_emissao;
      $NM_val_form['data_insercao'] = $this->data_insercao;
      $NM_val_form['data_alteracao'] = $this->data_alteracao;
      if ($this->idcontas_pagar === "" || is_null($this->idcontas_pagar))  
      { 
          $this->idcontas_pagar = 0;
      } 
      if ($this->idcliente === "" || is_null($this->idcliente))  
      { 
          $this->idcliente = 0;
          $this->sc_force_zero[] = 'idcliente';
      } 
      if ($this->idforma_pagamento_prevista === "" || is_null($this->idforma_pagamento_prevista))  
      { 
          $this->idforma_pagamento_prevista = 0;
          $this->sc_force_zero[] = 'idforma_pagamento_prevista';
      } 
      if ($this->idforma_pagamento === "" || is_null($this->idforma_pagamento))  
      { 
          $this->idforma_pagamento = 0;
          $this->sc_force_zero[] = 'idforma_pagamento';
      } 
      if ($this->idtipo_contas === "" || is_null($this->idtipo_contas))  
      { 
          $this->idtipo_contas = 0;
          $this->sc_force_zero[] = 'idtipo_contas';
      } 
      if ($this->idgrupo_contas === "" || is_null($this->idgrupo_contas))  
      { 
          $this->idgrupo_contas = 0;
          $this->sc_force_zero[] = 'idgrupo_contas';
      } 
      if ($this->idbaixa_conta_corrente === "" || is_null($this->idbaixa_conta_corrente))  
      { 
          $this->idbaixa_conta_corrente = 0;
          $this->sc_force_zero[] = 'idbaixa_conta_corrente';
      } 
      if ($this->valor_a_pagar === "" || is_null($this->valor_a_pagar))  
      { 
          $this->valor_a_pagar = 0;
          $this->sc_force_zero[] = 'valor_a_pagar';
      } 
      if ($this->valor_pago === "" || is_null($this->valor_pago))  
      { 
          $this->valor_pago = 0;
          $this->sc_force_zero[] = 'valor_pago';
      } 
      if ($this->juros === "" || is_null($this->juros))  
      { 
          $this->juros = 0;
          $this->sc_force_zero[] = 'juros';
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->nota_fiscal === "" || is_null($this->nota_fiscal))  
      { 
          $this->nota_fiscal = 0;
          $this->sc_force_zero[] = 'nota_fiscal';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_ibase, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite);
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->pago_before_qstr = $this->pago;
          $this->pago = substr($this->Db->qstr($this->pago), 1, -1); 
          if ($this->pago == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pago = "null"; 
              $NM_val_null[] = "pago";
          } 
          $this->competencia_before_qstr = $this->competencia;
          $this->competencia = substr($this->Db->qstr($this->competencia), 1, -1); 
          if ($this->competencia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->competencia = "null"; 
              $NM_val_null[] = "competencia";
          } 
          if ($this->data_emissao == "")  
          { 
              $this->data_emissao = "null"; 
              $NM_val_null[] = "data_emissao";
          } 
          if ($this->data_vencimanto == "")  
          { 
              $this->data_vencimanto = "null"; 
              $NM_val_null[] = "data_vencimanto";
          } 
          if ($this->nmgp_opcao == "alterar") 
          {
              if ($this->data_insercao == "")  
              { 
                  $this->data_insercao = "null"; 
                  $NM_val_null[] = "data_insercao";
              } 
              if ($this->data_insercao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
              { 
                  $this->data_insercao = "null"; 
                  $NM_val_null[] = "data_insercao";
              } 
          }
          if ($this->data_alteracao == "")  
          { 
              $this->data_alteracao = "null"; 
              $NM_val_null[] = "data_alteracao";
          } 
          if ($this->data_pagamento == "")  
          { 
              $this->data_pagamento = "null"; 
              $NM_val_null[] = "data_pagamento";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->observacao, 0, 12));
              if (is_string($this->observacao) && substr($this->observacao, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->observacao = nm_conv_img_access($this->observacao);
              } 
              if (!empty($this->observacao) && $this->observacao != 'null' && substr($this->observacao, 0, 4) != "*nm*") 
              { 
                  $this->observacao = "*nm*" . base64_encode($this->observacao) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          else
          { 
              $this->observacao =  substr($this->Db->qstr($this->observacao), 1, -1);
          } 
          if ($this->observacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->observacao = "null"; 
              $NM_val_null[] = "observacao";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_contas_pagas_mob_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento = $this->idforma_pagamento, idtipo_contas = $this->idtipo_contas, idgrupo_contas = $this->idgrupo_contas, idbaixa_conta_corrente = $this->idbaixa_conta_corrente, valor_a_pagar = $this->valor_a_pagar, valor_pago = $this->valor_pago, pago = '$this->pago', juros = $this->juros, data_vencimanto = '$this->data_vencimanto', data_pagamento = '$this->data_pagamento', nota_fiscal = $this->nota_fiscal"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento = $this->idforma_pagamento, idtipo_contas = $this->idtipo_contas, idgrupo_contas = $this->idgrupo_contas, idbaixa_conta_corrente = $this->idbaixa_conta_corrente, valor_a_pagar = $this->valor_a_pagar, valor_pago = $this->valor_pago, pago = '$this->pago', juros = $this->juros, data_vencimanto = '$this->data_vencimanto', data_pagamento = '$this->data_pagamento', nota_fiscal = $this->nota_fiscal"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento = $this->idforma_pagamento, idtipo_contas = $this->idtipo_contas, idgrupo_contas = $this->idgrupo_contas, idbaixa_conta_corrente = $this->idbaixa_conta_corrente, valor_a_pagar = $this->valor_a_pagar, valor_pago = $this->valor_pago, pago = '$this->pago', juros = $this->juros, data_vencimanto = '$this->data_vencimanto', data_pagamento = '$this->data_pagamento', nota_fiscal = $this->nota_fiscal"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento = $this->idforma_pagamento, idtipo_contas = $this->idtipo_contas, idgrupo_contas = $this->idgrupo_contas, idbaixa_conta_corrente = $this->idbaixa_conta_corrente, valor_a_pagar = $this->valor_a_pagar, valor_pago = $this->valor_pago, pago = '$this->pago', juros = $this->juros, data_vencimanto = '$this->data_vencimanto', data_pagamento = '$this->data_pagamento', nota_fiscal = $this->nota_fiscal"; 
              } 
              if (isset($NM_val_form['idforma_pagamento_prevista']) && $NM_val_form['idforma_pagamento_prevista'] != $this->nmgp_dados_select['idforma_pagamento_prevista']) 
              { 
                  $SC_fields_update[] = "idforma_pagamento_prevista = $this->idforma_pagamento_prevista"; 
              } 
              if (isset($NM_val_form['competencia']) && $NM_val_form['competencia'] != $this->nmgp_dados_select['competencia']) 
              { 
                  $SC_fields_update[] = "competencia = '$this->competencia'"; 
              } 
              if (isset($NM_val_form['data_emissao']) && $NM_val_form['data_emissao'] != $this->nmgp_dados_select['data_emissao']) 
              { 
                  $SC_fields_update[] = "data_emissao = '$this->data_emissao'"; 
              } 
              if (isset($NM_val_form['data_insercao']) && $NM_val_form['data_insercao'] != $this->nmgp_dados_select['data_insercao']) 
              { 
                  $SC_fields_update[] = "data_insercao = '$this->data_insercao'"; 
              } 
              if (isset($NM_val_form['data_alteracao']) && $NM_val_form['data_alteracao'] != $this->nmgp_dados_select['data_alteracao']) 
              { 
                  $SC_fields_update[] = "data_alteracao = '$this->data_alteracao'"; 
              } 
              $temp_cmd_sql = "";
              if ($this->observacao_limpa == "S")
              {
                  if ($this->observacao != "null")
                  {
                      $this->observacao = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "observacao = '" . $this->observacao . "'";
                  }
                  $this->observacao = "";
              }
              else
              {
                  if ($this->observacao != "none" && $this->observacao != "")
                  {
                      $NM_conteudo =  $this->observacao;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " observacao = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "observacao";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              if ($this->observacao_limpa == "S" || ($this->observacao != "none" && $this->observacao != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "observacao = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "observacao = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "observacao = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "observacao = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "observacao = empty_blob()"; 
                  } 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE idcontas_pagar = $this->idcontas_pagar ";  
              }  
              else  
              {
                  $comando .= " WHERE idcontas_pagar = $this->idcontas_pagar ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_contas_pagas_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->pago = $this->pago_before_qstr;
              $this->competencia = $this->competencia_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if ($this->observacao_limpa == "S" && (!isset($this->Ini->nm_bases_oracle) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle)) && (!isset($this->Ini->nm_bases_informix) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ", \"observacao\", \"\",  \"idcontas_pagar = $this->idcontas_pagar\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "observacao", "",  "idcontas_pagar = $this->idcontas_pagar"); 
                  } 
                  else 
                  { 
                      if ($this->observacao != "none" && $this->observacao != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ", \"observacao\", $this->observacao,  \"idcontas_pagar = $this->idcontas_pagar\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "observacao", $this->observacao,  "idcontas_pagar = $this->idcontas_pagar"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_contas_pagas_mob_pack_ajax_response();
                      }
                      exit;  
                  }   
              }   
              if ($this->observacao_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['observacao_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
                  $this->NM_ajax_info['fldList']['observacao_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }


              if     (isset($NM_val_form) && isset($NM_val_form['idcontas_pagar'])) { $this->idcontas_pagar = $NM_val_form['idcontas_pagar']; }
              elseif (isset($this->idcontas_pagar)) { $this->nm_limpa_alfa($this->idcontas_pagar); }
              if     (isset($NM_val_form) && isset($NM_val_form['idcliente'])) { $this->idcliente = $NM_val_form['idcliente']; }
              elseif (isset($this->idcliente)) { $this->nm_limpa_alfa($this->idcliente); }
              if     (isset($NM_val_form) && isset($NM_val_form['idforma_pagamento'])) { $this->idforma_pagamento = $NM_val_form['idforma_pagamento']; }
              elseif (isset($this->idforma_pagamento)) { $this->nm_limpa_alfa($this->idforma_pagamento); }
              if     (isset($NM_val_form) && isset($NM_val_form['idtipo_contas'])) { $this->idtipo_contas = $NM_val_form['idtipo_contas']; }
              elseif (isset($this->idtipo_contas)) { $this->nm_limpa_alfa($this->idtipo_contas); }
              if     (isset($NM_val_form) && isset($NM_val_form['idgrupo_contas'])) { $this->idgrupo_contas = $NM_val_form['idgrupo_contas']; }
              elseif (isset($this->idgrupo_contas)) { $this->nm_limpa_alfa($this->idgrupo_contas); }
              if     (isset($NM_val_form) && isset($NM_val_form['idbaixa_conta_corrente'])) { $this->idbaixa_conta_corrente = $NM_val_form['idbaixa_conta_corrente']; }
              elseif (isset($this->idbaixa_conta_corrente)) { $this->nm_limpa_alfa($this->idbaixa_conta_corrente); }
              if     (isset($NM_val_form) && isset($NM_val_form['valor_a_pagar'])) { $this->valor_a_pagar = $NM_val_form['valor_a_pagar']; }
              elseif (isset($this->valor_a_pagar)) { $this->nm_limpa_alfa($this->valor_a_pagar); }
              if     (isset($NM_val_form) && isset($NM_val_form['valor_pago'])) { $this->valor_pago = $NM_val_form['valor_pago']; }
              elseif (isset($this->valor_pago)) { $this->nm_limpa_alfa($this->valor_pago); }
              if     (isset($NM_val_form) && isset($NM_val_form['pago'])) { $this->pago = $NM_val_form['pago']; }
              elseif (isset($this->pago)) { $this->nm_limpa_alfa($this->pago); }
              if     (isset($NM_val_form) && isset($NM_val_form['juros'])) { $this->juros = $NM_val_form['juros']; }
              elseif (isset($this->juros)) { $this->nm_limpa_alfa($this->juros); }
              if     (isset($NM_val_form) && isset($NM_val_form['nota_fiscal'])) { $this->nota_fiscal = $NM_val_form['nota_fiscal']; }
              elseif (isset($this->nota_fiscal)) { $this->nm_limpa_alfa($this->nota_fiscal); }

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('idcliente', 'idforma_pagamento', 'juros', 'pago', 'idcontas_pagar', 'idtipo_contas', 'idgrupo_contas', 'idbaixa_conta_corrente', 'valor_a_pagar', 'valor_pago', 'data_vencimanto', 'nota_fiscal', 'observacao', 'data_pagamento'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_pkey']); 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_contas_pagas_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $_test_file = $this->fetchUniqueUploadName($this->observacao_scfile_name, $dir_file, "observacao");
              if (trim($this->observacao_scfile_name) != $_test_file)
              {
                  $this->observacao_scfile_name = $_test_file;
                  $this->observacao = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->data_insercao != "")
                  { 
                       $compl_insert     .= ", data_insercao";
                       $compl_insert_val .= ", '$this->data_insercao'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (idcontas_pagar, idcliente, idforma_pagamento_prevista, idforma_pagamento, idtipo_contas, idgrupo_contas, idbaixa_conta_corrente, valor_a_pagar, valor_pago, pago, juros, competencia, data_emissao, data_vencimanto, data_alteracao, data_pagamento, nota_fiscal, observacao $compl_insert) VALUES ($this->idcontas_pagar, $this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idtipo_contas, $this->idgrupo_contas, $this->idbaixa_conta_corrente, $this->valor_a_pagar, $this->valor_pago, '$this->pago', $this->juros, '$this->competencia', '$this->data_emissao', '$this->data_vencimanto', '$this->data_alteracao', '$this->data_pagamento', $this->nota_fiscal, '$this->observacao' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->data_insercao != "")
                  { 
                       $compl_insert     .= ", data_insercao";
                       $compl_insert_val .= ", '$this->data_insercao'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcontas_pagar, idcliente, idforma_pagamento_prevista, idforma_pagamento, idtipo_contas, idgrupo_contas, idbaixa_conta_corrente, valor_a_pagar, valor_pago, pago, juros, competencia, data_emissao, data_vencimanto, data_alteracao, data_pagamento, nota_fiscal, observacao $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcontas_pagar, $this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idtipo_contas, $this->idgrupo_contas, $this->idbaixa_conta_corrente, $this->valor_a_pagar, $this->valor_pago, '$this->pago', $this->juros, '$this->competencia', '$this->data_emissao', '$this->data_vencimanto', '$this->data_alteracao', '$this->data_pagamento', $this->nota_fiscal, '' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->data_insercao != "")
                  { 
                       $compl_insert     .= ", data_insercao";
                       $compl_insert_val .= ", '$this->data_insercao'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcontas_pagar, idcliente, idforma_pagamento_prevista, idforma_pagamento, idtipo_contas, idgrupo_contas, idbaixa_conta_corrente, valor_a_pagar, valor_pago, pago, juros, competencia, data_emissao, data_vencimanto, data_alteracao, data_pagamento, nota_fiscal, observacao $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcontas_pagar, $this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idtipo_contas, $this->idgrupo_contas, $this->idbaixa_conta_corrente, $this->valor_a_pagar, $this->valor_pago, '$this->pago', $this->juros, '$this->competencia', '$this->data_emissao', '$this->data_vencimanto', '$this->data_alteracao', '$this->data_pagamento', $this->nota_fiscal, '' $compl_insert_val)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->data_insercao != "")
                  { 
                       $compl_insert     .= ", data_insercao";
                       $compl_insert_val .= ", '$this->data_insercao'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcontas_pagar, idcliente, idforma_pagamento_prevista, idforma_pagamento, idtipo_contas, idgrupo_contas, idbaixa_conta_corrente, valor_a_pagar, valor_pago, pago, juros, competencia, data_emissao, data_vencimanto, data_alteracao, data_pagamento, nota_fiscal, observacao $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcontas_pagar, $this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idtipo_contas, $this->idgrupo_contas, $this->idbaixa_conta_corrente, $this->valor_a_pagar, $this->valor_pago, '$this->pago', $this->juros, '$this->competencia', '$this->data_emissao', '$this->data_vencimanto', '$this->data_alteracao', '$this->data_pagamento', $this->nota_fiscal, '' $compl_insert_val)"; 
              }
              else
              {
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->data_insercao != "")
                  { 
                       $compl_insert     .= ", data_insercao";
                       $compl_insert_val .= ", '$this->data_insercao'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcontas_pagar, idcliente, idforma_pagamento_prevista, idforma_pagamento, idtipo_contas, idgrupo_contas, idbaixa_conta_corrente, valor_a_pagar, valor_pago, pago, juros, competencia, data_emissao, data_vencimanto, data_alteracao, data_pagamento, nota_fiscal, observacao $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcontas_pagar, $this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idtipo_contas, $this->idgrupo_contas, $this->idbaixa_conta_corrente, $this->valor_a_pagar, $this->valor_pago, '$this->pago', $this->juros, '$this->competencia', '$this->data_emissao', '$this->data_vencimanto', '$this->data_alteracao', '$this->data_pagamento', $this->nota_fiscal, '$this->observacao' $compl_insert_val)"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_contas_pagas_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->pago = $this->pago_before_qstr;
              $this->competencia = $this->competencia_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if (trim($this->observacao ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  observacao , $this->observacao,  \"idcontas_pagar = $this->idcontas_pagar\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "observacao", $this->observacao,  "idcontas_pagar = $this->idcontas_pagar"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_contas_pagas_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
              }  
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->pago = $this->pago_before_qstr;
              $this->competencia = $this->competencia_before_qstr;
              $this->sc_insert_on = true; 
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->idcontas_pagar = substr($this->Db->qstr($this->idcontas_pagar), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_pagar = $this->idcontas_pagar "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_contas_pagas_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              if (empty($this->sc_erro_delete)) {
                  $this->record_delete_ok = true;
              }
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total']);
              }

              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
    if ("update" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['decimal_db'] == ",")
        {
           $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_contas_pagas_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_data_pagamento = $this->data_pagamento;
    $original_idcliente = $this->idcliente;
    $original_idforma_pagamento = $this->idforma_pagamento;
    $original_pago = $this->pago;
    $original_valor_a_pagar = $this->valor_a_pagar;
}
  if($this->pago  == 'F'){
	$this->inclui_caixa_diario($this->valor_a_pagar );
}


if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_data_pagamento != $this->data_pagamento || (isset($bFlagRead_data_pagamento) && $bFlagRead_data_pagamento)))
    {
        $this->ajax_return_values_data_pagamento(true);
    }
    if (($original_idcliente != $this->idcliente || (isset($bFlagRead_idcliente) && $bFlagRead_idcliente)))
    {
        $this->ajax_return_values_idcliente(true);
    }
    if (($original_idforma_pagamento != $this->idforma_pagamento || (isset($bFlagRead_idforma_pagamento) && $bFlagRead_idforma_pagamento)))
    {
        $this->ajax_return_values_idforma_pagamento(true);
    }
    if (($original_pago != $this->pago || (isset($bFlagRead_pago) && $bFlagRead_pago)))
    {
        $this->ajax_return_values_pago(true);
    }
    if (($original_valor_a_pagar != $this->valor_a_pagar || (isset($bFlagRead_valor_a_pagar) && $bFlagRead_valor_a_pagar)))
    {
        $this->ajax_return_values_valor_a_pagar(true);
    }
}
$_SESSION['scriptcase']['form_contas_pagas_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $salva_opcao ; 
          if ($salva_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->sc_evento = ""; 
          $this->NM_rollback_db(); 
          return; 
      }
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['parms'] = "idcontas_pagar?#?$this->idcontas_pagar?@?"; 
      }
      $this->nmgp_dados_form['observacao'] = ""; 
      $this->observacao_limpa = ""; 
      $this->observacao_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->idcontas_pagar = null === $this->idcontas_pagar ? null : substr($this->Db->qstr($this->idcontas_pagar), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          $nmgp_select = "SELECT idcontas_pagar, idcliente, idforma_pagamento_prevista, idforma_pagamento, idtipo_contas, idgrupo_contas, idbaixa_conta_corrente, valor_a_pagar, valor_pago, pago, juros, competencia, data_emissao, data_vencimanto, data_insercao, data_alteracao, data_pagamento, nota_fiscal, observacao from " . $this->Ini->nm_tabela ; 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "idcontas_pagar = $this->idcontas_pagar"; 
              }  
              else  
              {
                  $aWhere[] = "idcontas_pagar = $this->idcontas_pagar"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "idcontas_pagar";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start']) ;  
              } 
          } 
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes['update'] = "off";
              $this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes['delete'] = "off";
              return; 
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->idcontas_pagar = $rs->fields[0] ; 
              $this->nmgp_dados_select['idcontas_pagar'] = $this->idcontas_pagar;
              $this->idcliente = $rs->fields[1] ; 
              $this->nmgp_dados_select['idcliente'] = $this->idcliente;
              $this->idforma_pagamento_prevista = $rs->fields[2] ; 
              $this->nmgp_dados_select['idforma_pagamento_prevista'] = $this->idforma_pagamento_prevista;
              $this->idforma_pagamento = $rs->fields[3] ; 
              $this->nmgp_dados_select['idforma_pagamento'] = $this->idforma_pagamento;
              $this->idtipo_contas = $rs->fields[4] ; 
              $this->nmgp_dados_select['idtipo_contas'] = $this->idtipo_contas;
              $this->idgrupo_contas = $rs->fields[5] ; 
              $this->nmgp_dados_select['idgrupo_contas'] = $this->idgrupo_contas;
              $this->idbaixa_conta_corrente = $rs->fields[6] ; 
              $this->nmgp_dados_select['idbaixa_conta_corrente'] = $this->idbaixa_conta_corrente;
              $this->valor_a_pagar = $rs->fields[7] ; 
              $this->nmgp_dados_select['valor_a_pagar'] = $this->valor_a_pagar;
              $this->valor_pago = $rs->fields[8] ; 
              $this->nmgp_dados_select['valor_pago'] = $this->valor_pago;
              $this->pago = $rs->fields[9] ; 
              $this->nmgp_dados_select['pago'] = $this->pago;
              $this->juros = $rs->fields[10] ; 
              $this->nmgp_dados_select['juros'] = $this->juros;
              $this->competencia = $rs->fields[11] ; 
              $this->nmgp_dados_select['competencia'] = $this->competencia;
              $this->data_emissao = $rs->fields[12] ; 
              if (substr($this->data_emissao, 10, 1) == "-") 
              { 
                 $this->data_emissao = substr($this->data_emissao, 0, 10) . " " . substr($this->data_emissao, 11);
              } 
              if (substr($this->data_emissao, 13, 1) == ".") 
              { 
                 $this->data_emissao = substr($this->data_emissao, 0, 13) . ":" . substr($this->data_emissao, 14, 2) . ":" . substr($this->data_emissao, 17);
              } 
              $this->nmgp_dados_select['data_emissao'] = $this->data_emissao;
              $this->data_vencimanto = $rs->fields[13] ; 
              if (substr($this->data_vencimanto, 10, 1) == "-") 
              { 
                 $this->data_vencimanto = substr($this->data_vencimanto, 0, 10) . " " . substr($this->data_vencimanto, 11);
              } 
              if (substr($this->data_vencimanto, 13, 1) == ".") 
              { 
                 $this->data_vencimanto = substr($this->data_vencimanto, 0, 13) . ":" . substr($this->data_vencimanto, 14, 2) . ":" . substr($this->data_vencimanto, 17);
              } 
              $this->nmgp_dados_select['data_vencimanto'] = $this->data_vencimanto;
              $this->data_insercao = $rs->fields[14] ; 
              if (substr($this->data_insercao, 10, 1) == "-") 
              { 
                 $this->data_insercao = substr($this->data_insercao, 0, 10) . " " . substr($this->data_insercao, 11);
              } 
              if (substr($this->data_insercao, 13, 1) == ".") 
              { 
                 $this->data_insercao = substr($this->data_insercao, 0, 13) . ":" . substr($this->data_insercao, 14, 2) . ":" . substr($this->data_insercao, 17);
              } 
              $this->nmgp_dados_select['data_insercao'] = $this->data_insercao;
              $this->data_alteracao = $rs->fields[15] ; 
              if (substr($this->data_alteracao, 10, 1) == "-") 
              { 
                 $this->data_alteracao = substr($this->data_alteracao, 0, 10) . " " . substr($this->data_alteracao, 11);
              } 
              if (substr($this->data_alteracao, 13, 1) == ".") 
              { 
                 $this->data_alteracao = substr($this->data_alteracao, 0, 13) . ":" . substr($this->data_alteracao, 14, 2) . ":" . substr($this->data_alteracao, 17);
              } 
              $this->nmgp_dados_select['data_alteracao'] = $this->data_alteracao;
              $this->data_pagamento = $rs->fields[16] ; 
              if (substr($this->data_pagamento, 10, 1) == "-") 
              { 
                 $this->data_pagamento = substr($this->data_pagamento, 0, 10) . " " . substr($this->data_pagamento, 11);
              } 
              if (substr($this->data_pagamento, 13, 1) == ".") 
              { 
                 $this->data_pagamento = substr($this->data_pagamento, 0, 13) . ":" . substr($this->data_pagamento, 14, 2) . ":" . substr($this->data_pagamento, 17);
              } 
              $this->nmgp_dados_select['data_pagamento'] = $this->data_pagamento;
              $this->nota_fiscal = $rs->fields[17] ; 
              $this->nmgp_dados_select['nota_fiscal'] = $this->nota_fiscal;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->observacao = $this->Db->BlobDecode($rs->fields[18]) ; 
              } 
              else
              { 
                  $this->observacao = $rs->fields[18] ; 
              } 
              $this->nmgp_dados_select['observacao'] = $this->observacao;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->idcontas_pagar = (string)$this->idcontas_pagar; 
              $this->idcliente = (string)$this->idcliente; 
              $this->idforma_pagamento_prevista = (string)$this->idforma_pagamento_prevista; 
              $this->idforma_pagamento = (string)$this->idforma_pagamento; 
              $this->idtipo_contas = (string)$this->idtipo_contas; 
              $this->idgrupo_contas = (string)$this->idgrupo_contas; 
              $this->idbaixa_conta_corrente = (string)$this->idbaixa_conta_corrente; 
              $this->valor_a_pagar = (string)$this->valor_a_pagar; 
              $this->valor_pago = (string)$this->valor_pago; 
              $this->juros = (string)$this->juros; 
              $this->nota_fiscal = (string)$this->nota_fiscal; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['parms'] = "idcontas_pagar?#?$this->idcontas_pagar?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['sub_dir'][0]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['reg_start'] < $qt_geral_reg_form_contas_pagas_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opcao']   = '';
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->idcontas_pagar = "";  
              $this->nmgp_dados_form["idcontas_pagar"] = $this->idcontas_pagar;
              $this->idcliente = "";  
              $this->nmgp_dados_form["idcliente"] = $this->idcliente;
              $this->idforma_pagamento_prevista = "";  
              $this->nmgp_dados_form["idforma_pagamento_prevista"] = $this->idforma_pagamento_prevista;
              $this->idforma_pagamento = "";  
              $this->nmgp_dados_form["idforma_pagamento"] = $this->idforma_pagamento;
              $this->idtipo_contas = "";  
              $this->nmgp_dados_form["idtipo_contas"] = $this->idtipo_contas;
              $this->idgrupo_contas = "";  
              $this->nmgp_dados_form["idgrupo_contas"] = $this->idgrupo_contas;
              $this->idbaixa_conta_corrente = "";  
              $this->nmgp_dados_form["idbaixa_conta_corrente"] = $this->idbaixa_conta_corrente;
              $this->valor_a_pagar = "";  
              $this->nmgp_dados_form["valor_a_pagar"] = $this->valor_a_pagar;
              $this->valor_pago = "";  
              $this->nmgp_dados_form["valor_pago"] = $this->valor_pago;
              $this->pago = "";  
              $this->nmgp_dados_form["pago"] = $this->pago;
              $this->juros = "";  
              $this->nmgp_dados_form["juros"] = $this->juros;
              $this->competencia = "";  
              $this->nmgp_dados_form["competencia"] = $this->competencia;
              $this->data_emissao = "";  
              $this->data_emissao_hora = "" ;  
              $this->nmgp_dados_form["data_emissao"] = $this->data_emissao;
              $this->data_vencimanto = "";  
              $this->data_vencimanto_hora = "" ;  
              $this->nmgp_dados_form["data_vencimanto"] = $this->data_vencimanto;
              $this->data_insercao = "";  
              $this->data_insercao_hora = "" ;  
              $this->nmgp_dados_form["data_insercao"] = $this->data_insercao;
              $this->data_alteracao = "";  
              $this->data_alteracao_hora = "" ;  
              $this->nmgp_dados_form["data_alteracao"] = $this->data_alteracao;
              $this->data_pagamento = "";  
              $this->data_pagamento_hora = "" ;  
              $this->nmgp_dados_form["data_pagamento"] = $this->data_pagamento;
              $this->nota_fiscal = "";  
              $this->nmgp_dados_form["nota_fiscal"] = $this->nota_fiscal;
              $this->observacao = "";  
              $this->observacao_ul_name = "" ;  
              $this->observacao_ul_type = "" ;  
              $this->nmgp_dados_form["observacao"] = $this->observacao;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
      }
  }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function inclui_caixa_diario($valor)
{
$_SESSION['scriptcase']['form_contas_pagas_mob']['contr_erro'] = 'on';
  
$check_sql = "SELECT idconta_corrente"
   . " FROM forma_pagamento"
   . " WHERE idforma_pagamento = '" . $this->idforma_pagamento_prevista . "'";
 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 
;

if (isset($this->rs[0][0])) 
{
    $idconta_corrente = $this->rs[0][0];
}
else 
{
	$idconta_corrente = '';
}

$insert_table  = 'caixa_diario';      
$insert_fields = array(   
     'idconta_corrente' => "'".$idconta_corrente."'",
     'idcliente' => "'".$this->idcliente ."'",
	 'idforma_pagamento' => "'".$this->idforma_pagamento ."'",
	 'data' => "'".$this->data_pagamento ."'",
	 'entrada' => "'".$valor."'",
 );

$insert_sql = 'INSERT INTO ' . $insert_table
    . ' ('   . implode(', ', array_keys($insert_fields))   . ')'
    . ' VALUES ('    . implode(', ', array_values($insert_fields)) . ')';


     $nm_select = $insert_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_contas_pagas_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
$_SESSION['scriptcase']['form_contas_pagas_mob']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_contas_pagas_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->nmgp_opcao == "novo")
   { 
       $out_observacao = "";  
   } 
   else 
   { 
       $out_observacao = $this->observacao;  
   } 
   if ($this->observacao != "" && $this->observacao != "none")   
   { 
       $out_observacao = $this->Ini->path_imag_temp . "/sc_observacao_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_observacao = fopen($this->Ini->root . $out_observacao, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->observacao, 0, 12));
           if (is_string($this->observacao) && substr($this->observacao, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->observacao = nm_conv_img_access($this->observacao);
           } 
       } 
       if (is_string($this->observacao) && substr($this->observacao, 0, 4) == "*nm*") 
       { 
           $this->observacao = substr($this->observacao, 4) ; 
           $this->observacao = base64_decode($this->observacao) ; 
       } 
       $img_pos_bm = (is_string($this->observacao)) ? strpos($this->observacao, "BM") : false; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->observacao = substr($this->observacao, $img_pos_bm) ; 
       } 
       fwrite($arq_observacao, (string)$this->observacao) ;  
       fclose($arq_observacao) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_observacao, true);
       $this->nmgp_return_img['observacao'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['observacao'][1] = $sc_obj_img->getWidth();
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_observacao;
           $out_observacao = str_replace($this->Ini->path_imag_temp . "/", "", $out_observacao);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_observacao;
       if (isset($temp_out_observacao))
       {
           $out_observacao = $temp_out_observacao;
       }
   }
        $this->initFormPages();
    include_once("form_contas_pagas_mob_form0.php");
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_format_readonly($field, $value)
    {
        $result = $value;

        $this->form_highlight_search($result, $field, $value);

        return $result;
    }

    function form_highlight_search(&$result, $field, $value)
    {
        if ($this->proc_fast_search) {
            $this->form_highlight_search_quicksearch($result, $field, $value);
        }
    }

    function form_highlight_search_quicksearch(&$result, $field, $value)
    {
        $searchOk = false;
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("idcliente", "idforma_pagamento", "juros", "pago", "idcontas_pagar", "idtipo_contas", "idgrupo_contas", "idbaixa_conta_corrente", "valor_a_pagar", "valor_pago", "data_vencimanto", "nota_fiscal", "observacao", "data_pagamento"))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array("idcliente", "idforma_pagamento", "juros", "pago", "idcontas_pagar", "idtipo_contas", "idgrupo_contas", "idbaixa_conta_corrente", "valor_a_pagar", "valor_pago", "data_vencimanto", "nota_fiscal", "observacao", "data_pagamento"))) {
            $searchOk = true;
        }

        if (!$searchOk || '' == $this->nmgp_arg_fast_search) {
            return;
        }

        $htmlIni = '<div class="highlight" style="background-color: #fafaca; display: inline-block">';
        $htmlFim = '</div>';

        if ('qp' == $this->nmgp_cond_fast_search) {
            $keywords = preg_quote($this->nmgp_arg_fast_search, '/');
            $result = preg_replace('/'. $keywords .'/i', $htmlIni . '$0' . $htmlFim, $result);
        } elseif ('eq' == $this->nmgp_cond_fast_search) {
            if (strcasecmp($this->nmgp_arg_fast_search, $value) == 0) {
                $result = $htmlIni. $result .$htmlFim;
            }
        }
    }


    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

function sc_file_size($file, $format = false)
{
    if ('' == $file) {
        return '';
    }
    if (!@is_file($file)) {
        return '';
    }
    $fileSize = @filesize($file);
    if ($format) {
        $suffix = '';
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' KB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' MB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' GB';
        }
        $fileSize = $fileSize . $suffix;
    }
    return $fileSize;
}


 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_idcliente()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idcliente'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_idforma_pagamento()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['Lookup_idforma_pagamento'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_pago()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "PAGO?#?T?#?N?@?";
       $nmgp_def_dados .= "ESTORNAR PAGAMENTO?#?F?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_contas_pagas_mob_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      foreach ($fields as $field) {
          if ($field == "SC_all_Cmp" || $field == "idcliente") 
          {
              $data_lookup = $this->SC_lookup_idcliente($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "idcliente", $arg_search, $data_lookup, "INT", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "idforma_pagamento") 
          {
              $data_lookup = $this->SC_lookup_idforma_pagamento($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "idforma_pagamento", $arg_search, $data_lookup, "INT", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "juros") 
          {
              $this->SC_monta_condicao($comando, "juros", $arg_search, str_replace(",", ".", $data_search), "DECIMAL", false);
          }
          if ($field == "SC_all_Cmp" || $field == "pago") 
          {
              $data_lookup = $this->SC_lookup_pago($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "pago", $arg_search, $data_lookup, "CHAR", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "idcontas_pagar") 
          {
              $this->SC_monta_condicao($comando, "idcontas_pagar", $arg_search, str_replace(",", ".", $data_search), "INT", false);
          }
          if ($field == "SC_all_Cmp" || $field == "idtipo_contas") 
          {
              $this->SC_monta_condicao($comando, "idtipo_contas", $arg_search, str_replace(",", ".", $data_search), "INT", false);
          }
          if ($field == "SC_all_Cmp" || $field == "idgrupo_contas") 
          {
              $this->SC_monta_condicao($comando, "idgrupo_contas", $arg_search, str_replace(",", ".", $data_search), "INT", false);
          }
          if ($field == "SC_all_Cmp" || $field == "idbaixa_conta_corrente") 
          {
              $this->SC_monta_condicao($comando, "idbaixa_conta_corrente", $arg_search, str_replace(",", ".", $data_search), "INT", false);
          }
          if ($field == "SC_all_Cmp" || $field == "valor_a_pagar") 
          {
              $this->SC_monta_condicao($comando, "valor_a_pagar", $arg_search, str_replace(",", ".", $data_search), "DECIMAL", false);
          }
          if ($field == "SC_all_Cmp" || $field == "valor_pago") 
          {
              $this->SC_monta_condicao($comando, "valor_pago", $arg_search, str_replace(",", ".", $data_search), "DECIMAL", false);
          }
          if ($field == "SC_all_Cmp" || $field == "data_vencimanto") 
          {
              $this->SC_monta_condicao($comando, "data_vencimanto", $arg_search, $data_search, "TIMESTAMP", false);
          }
          if ($field == "SC_all_Cmp" || $field == "nota_fiscal") 
          {
              $this->SC_monta_condicao($comando, "nota_fiscal", $arg_search, str_replace(",", ".", $data_search), "INT", false);
          }
          if ($field == "SC_all_Cmp" || $field == "observacao") 
          {
              $this->SC_monta_condicao($comando, "observacao", $arg_search, $data_search, "BLOB", false);
          }
          if ($field == "SC_all_Cmp" || $field == "data_pagamento") 
          {
              $this->SC_monta_condicao($comando, "data_pagamento", $arg_search, $data_search, "TIMESTAMP", false);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_contas_pagas_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['total'] = $qt_geral_reg_form_contas_pagas_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_contas_pagas_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_contas_pagas_mob_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="", $tp_unaccent=false)
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = "";
      $nm_fim_lower = "";
      $Nm_accent = array('cmp_i'=>'','cmp_f'=>'','cmp_apos'=>'','arg_i'=>'','arg_f'=>'','arg_apos'=>'');
      if ($tp_unaccent) {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) {
              $Nm_accent = $this->Ini->Nm_accent_access;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) {
              $Nm_accent = $this->Ini->Nm_accent_ibase;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) {
              $Nm_accent = $this->Ini->Nm_accent_mysql;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres)) {
              $Nm_accent = $this->Ini->Nm_accent_postgres;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) {
              $Nm_accent = $this->Ini->Nm_accent_sqlite;
          }
      }
      $nm_numeric[] = "idcontas_pagar";$nm_numeric[] = "idcliente";$nm_numeric[] = "idforma_pagamento_prevista";$nm_numeric[] = "idforma_pagamento";$nm_numeric[] = "idtipo_contas";$nm_numeric[] = "idgrupo_contas";$nm_numeric[] = "idbaixa_conta_corrente";$nm_numeric[] = "valor_a_pagar";$nm_numeric[] = "valor_pago";$nm_numeric[] = "juros";$nm_numeric[] = "nota_fiscal";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas["data_emissao"] = "timestamp";$Nm_datas["data_vencimanto"] = "timestamp";$Nm_datas["data_insercao"] = "timestamp";$Nm_datas["data_alteracao"] = "timestamp";$Nm_datas["data_pagamento"] = "timestamp";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
      }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . " not" . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
   function SC_lookup_idcliente($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nm_comando = "SELECT concat(cpf_cnpj,' - ',nome_fantasia), idcliente FROM cliente WHERE (#cmp_iconcat(cpf_cnpj,' - ',nome_fantasia)#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "SELECT cpf_cnpj&' - '&nome_fantasia, idcliente FROM cliente WHERE (#cmp_icpf_cnpj&' - '&nome_fantasia#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
      { 
          $nm_comando = "SELECT cpf_cnpj||' - '||nome_fantasia, idcliente FROM cliente WHERE (#cmp_icpf_cnpj||' - '||nome_fantasia#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
      } 
      else 
      { 
          $nm_comando = "SELECT cpf_cnpj||' - '||nome_fantasia, idcliente FROM cliente WHERE (#cmp_icpf_cnpj||' - '||nome_fantasia#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
      } 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "LIKE '#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "NOT LIKE '%#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", ">= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "< '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       $nm_comando = str_replace(array('#cmp_i','#cmp_f','#cmp_apos','#arg_i','#arg_f','#arg_apos'), array('','','','','',''), $nm_comando); 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_idforma_pagamento($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT descricao, idforma_pagamento FROM forma_pagamento WHERE (#cmp_idescricao#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "LIKE '#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "NOT LIKE '%#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", ">= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "< '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       $nm_comando = str_replace(array('#cmp_i','#cmp_f','#cmp_apos','#arg_i','#arg_f','#arg_apos'), array('','','','','',''), $nm_comando); 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_pago($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['T'] = "PAGO";
       $data_look['F'] = "ESTORNAR PAGAMENTO";
       $result = array();
       foreach ($data_look as $chave => $label) 
       {
           if ($condicao == "eq" && $campo == $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
           {
               $result[] = $chave;
           }
           if ($condicao == "qp" && strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "np" && !strstr($label, $campo))
           {
               $result[] = $chave;
           }
           if ($condicao == "df" && $campo != $label)
           {
               $result[] = $chave;
           }
           if ($condicao == "gt" && $label > $campo )
           {
               $result[] = $chave;
           }
           if ($condicao == "ge" && $label >= $campo)
            {
               $result[] = $chave;
           }
           if ($condicao == "lt" && $label < $campo)
           {
               $result[] = $chave;
           }
           if ($condicao == "le" && $label <= $campo)
           {
               $result[] = $chave;
           }
          
       }
       return $result;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_contas_pagas_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_contas_pagas_mob_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_contas_pagas_mob_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
   {
?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
   }

?>
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-1", "sc_b_upd_t.sc-unique-btn-5");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_t.sc-unique-btn-4", "sc_b_sai_t.sc-unique-btn-6", "sc_b_sai_t.sc-unique-btn-8", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_t.sc-unique-btn-7");
                break;
            case "first":
                return array("sc_b_ini_b.sc-unique-btn-9");
                break;
            case "back":
                return array("sc_b_ret_b.sc-unique-btn-10");
                break;
            case "forward":
                return array("sc_b_avc_b.sc-unique-btn-11");
                break;
            case "last":
                return array("sc_b_fim_b.sc-unique-btn-12");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-header">
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "CONTA RECEBIDA"; } else { echo "CONTA RECEBIDA"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div>
    </td></tr>
<?php
    }

    function displayAppFooter()
    {
    }

    function displayAppToolbars()
    {
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['run_iframe'] != "R") {
        } else {
            return false;
        }
        return true;
    } // displayAppToolbars

    function displayTopToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayTopToolbar

    function displayBottomToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayBottomToolbar

    function scGetColumnOrderRule($fieldName, &$orderColName, &$orderColOrient, &$orderColRule)
    {
        $sortRule = 'nosort';
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_contas_pagas_mob']['ordem_ord'] == " desc") {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
                $orderColRule = $sortRule = 'desc';
            } else {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
                $orderColRule = $sortRule = 'asc';
            }
        }
        return $sortRule;
    }

    function scGetColumnOrderIcon($fieldName, $sortRule)
    {        if ('desc' == $sortRule) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } elseif ('asc' == $sortRule) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } elseif ('' != $this->Ini->Label_sort) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } else {
            return '';
        }
    }

    function scIsFieldNumeric($fieldName)
    {
        switch ($fieldName) {
            case "juros":
                return true;
            case "idcontas_pagar":
                return true;
            case "idtipo_contas":
                return true;
            case "idgrupo_contas":
                return true;
            case "idbaixa_conta_corrente":
                return true;
            case "valor_a_pagar":
                return true;
            case "valor_pago":
                return true;
            case "nota_fiscal":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "idcliente":
                return 'desc';
            case "idforma_pagamento":
                return 'desc';
            case "juros":
                return 'desc';
            case "idcontas_pagar":
                return 'desc';
            case "idtipo_contas":
                return 'desc';
            case "idgrupo_contas":
                return 'desc';
            case "idbaixa_conta_corrente":
                return 'desc';
            case "valor_a_pagar":
                return 'desc';
            case "valor_pago":
                return 'desc';
            case "data_vencimanto":
                return 'desc';
            case "nota_fiscal":
                return 'desc';
            case "data_pagamento":
                return 'desc';
            case "idforma_pagamento_prevista":
                return 'desc';
            case "data_emissao":
                return 'desc';
            case "data_insercao":
                return 'desc';
            case "data_alteracao":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
