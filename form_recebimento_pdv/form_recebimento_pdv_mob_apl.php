<?php
//
class form_recebimento_pdv_mob_apl
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
   var $idcontas_receber;
   var $idcliente;
   var $idcliente_1;
   var $idforma_pagamento_prevista;
   var $idforma_pagamento_prevista_1;
   var $idforma_pagamento;
   var $idforma_pagamento_1;
   var $idgrupos_receitas;
   var $idgrupos_receitas_1;
   var $idtipos_receitas;
   var $idtipos_receitas_1;
   var $idorcamento;
   var $idorcamento_1;
   var $idnota_fiscal;
   var $numero_conta;
   var $data_emissao;
   var $data_vencimento;
   var $valor_a_receber;
   var $data_pagamento;
   var $valor_recebido;
   var $pago;
   var $pago_1;
   var $observacoes;
   var $situacao;
   var $juros;
   var $competencia;
   var $data_insercao;
   var $data_insercao_hora;
   var $data_alteracao;
   var $data_alteracao_hora;
   var $taxa_administrativa;
   var $troco;
   var $sc_field_0;
   var $sc_field_1;
   var $sc_field_2;
   var $sc_field_2_1;
   var $sc_field_3;
   var $sc_field_3_1;
   var $sc_field_4;
   var $sc_field_4_1;
   var $valor_parcelas;
   var $desconto;
   var $desconto_porcento;
   var $valor_original;
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
          if (isset($this->NM_ajax_info['param']['data_emissao']))
          {
              $this->data_emissao = $this->NM_ajax_info['param']['data_emissao'];
          }
          if (isset($this->NM_ajax_info['param']['data_pagamento']))
          {
              $this->data_pagamento = $this->NM_ajax_info['param']['data_pagamento'];
          }
          if (isset($this->NM_ajax_info['param']['data_vencimento']))
          {
              $this->data_vencimento = $this->NM_ajax_info['param']['data_vencimento'];
          }
          if (isset($this->NM_ajax_info['param']['desconto']))
          {
              $this->desconto = $this->NM_ajax_info['param']['desconto'];
          }
          if (isset($this->NM_ajax_info['param']['desconto_porcento']))
          {
              $this->desconto_porcento = $this->NM_ajax_info['param']['desconto_porcento'];
          }
          if (isset($this->NM_ajax_info['param']['idcliente']))
          {
              $this->idcliente = $this->NM_ajax_info['param']['idcliente'];
          }
          if (isset($this->NM_ajax_info['param']['idcontas_receber']))
          {
              $this->idcontas_receber = $this->NM_ajax_info['param']['idcontas_receber'];
          }
          if (isset($this->NM_ajax_info['param']['idforma_pagamento_prevista']))
          {
              $this->idforma_pagamento_prevista = $this->NM_ajax_info['param']['idforma_pagamento_prevista'];
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
          if (isset($this->NM_ajax_info['param']['observacoes']))
          {
              $this->observacoes = $this->NM_ajax_info['param']['observacoes'];
          }
          if (isset($this->NM_ajax_info['param']['pago']))
          {
              $this->pago = $this->NM_ajax_info['param']['pago'];
          }
          if (isset($this->NM_ajax_info['param']['sc_field_0']))
          {
              $this->sc_field_0 = $this->NM_ajax_info['param']['sc_field_0'];
          }
          if (isset($this->NM_ajax_info['param']['sc_field_1']))
          {
              $this->sc_field_1 = $this->NM_ajax_info['param']['sc_field_1'];
          }
          if (isset($this->NM_ajax_info['param']['sc_field_3']))
          {
              $this->sc_field_3 = $this->NM_ajax_info['param']['sc_field_3'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['valor_a_receber']))
          {
              $this->valor_a_receber = $this->NM_ajax_info['param']['valor_a_receber'];
          }
          if (isset($this->NM_ajax_info['param']['valor_parcelas']))
          {
              $this->valor_parcelas = $this->NM_ajax_info['param']['valor_parcelas'];
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
      $this->sc_conv_var['n?? de parcelas'] = "sc_field_0";
      $this->sc_conv_var['intervalo parcelas'] = "sc_field_1";
      $this->sc_conv_var['altera competencia'] = "sc_field_2";
      $this->sc_conv_var['vencimento fixo'] = "sc_field_3";
      $this->sc_conv_var['alterar competencia'] = "sc_field_4";
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
      if (isset($this->v_valor_a_receber) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['v_valor_a_receber'] = $this->v_valor_a_receber;
      }
      if (isset($this->v_idcliente) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['v_idcliente'] = $this->v_idcliente;
      }
      if (isset($this->v_idgrupos_receitas) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['v_idgrupos_receitas'] = $this->v_idgrupos_receitas;
      }
      if (isset($this->v_idtipos_receitas) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['v_idtipos_receitas'] = $this->v_idtipos_receitas;
      }
      if (isset($this->v_idorcamento) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['v_idorcamento'] = $this->v_idorcamento;
      }
      if (isset($_POST["v_valor_a_receber"]) && isset($this->v_valor_a_receber)) 
      {
          $_SESSION['v_valor_a_receber'] = $this->v_valor_a_receber;
      }
      if (isset($_POST["v_idcliente"]) && isset($this->v_idcliente)) 
      {
          $_SESSION['v_idcliente'] = $this->v_idcliente;
      }
      if (isset($_POST["v_idgrupos_receitas"]) && isset($this->v_idgrupos_receitas)) 
      {
          $_SESSION['v_idgrupos_receitas'] = $this->v_idgrupos_receitas;
      }
      if (isset($_POST["v_idtipos_receitas"]) && isset($this->v_idtipos_receitas)) 
      {
          $_SESSION['v_idtipos_receitas'] = $this->v_idtipos_receitas;
      }
      if (isset($_POST["v_idorcamento"]) && isset($this->v_idorcamento)) 
      {
          $_SESSION['v_idorcamento'] = $this->v_idorcamento;
      }
      if (isset($_GET["v_valor_a_receber"]) && isset($this->v_valor_a_receber)) 
      {
          $_SESSION['v_valor_a_receber'] = $this->v_valor_a_receber;
      }
      if (isset($_GET["v_idcliente"]) && isset($this->v_idcliente)) 
      {
          $_SESSION['v_idcliente'] = $this->v_idcliente;
      }
      if (isset($_GET["v_idgrupos_receitas"]) && isset($this->v_idgrupos_receitas)) 
      {
          $_SESSION['v_idgrupos_receitas'] = $this->v_idgrupos_receitas;
      }
      if (isset($_GET["v_idtipos_receitas"]) && isset($this->v_idtipos_receitas)) 
      {
          $_SESSION['v_idtipos_receitas'] = $this->v_idtipos_receitas;
      }
      if (isset($_GET["v_idorcamento"]) && isset($this->v_idorcamento)) 
      {
          $_SESSION['v_idorcamento'] = $this->v_idorcamento;
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['embutida_parms']);
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
                 nm_limpa_str_form_recebimento_pdv_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->v_valor_a_receber)) 
          {
              $_SESSION['v_valor_a_receber'] = $this->v_valor_a_receber;
          }
          if (isset($this->v_idcliente)) 
          {
              $_SESSION['v_idcliente'] = $this->v_idcliente;
          }
          if (isset($this->v_idgrupos_receitas)) 
          {
              $_SESSION['v_idgrupos_receitas'] = $this->v_idgrupos_receitas;
          }
          if (isset($this->v_idtipos_receitas)) 
          {
              $_SESSION['v_idtipos_receitas'] = $this->v_idtipos_receitas;
          }
          if (isset($this->v_idorcamento)) 
          {
              $_SESSION['v_idorcamento'] = $this->v_idorcamento;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->v_valor_a_receber)) 
          {
              $_SESSION['v_valor_a_receber'] = $this->v_valor_a_receber;
          }
          if (isset($this->v_idcliente)) 
          {
              $_SESSION['v_idcliente'] = $this->v_idcliente;
          }
          if (isset($this->v_idgrupos_receitas)) 
          {
              $_SESSION['v_idgrupos_receitas'] = $this->v_idgrupos_receitas;
          }
          if (isset($this->v_idtipos_receitas)) 
          {
              $_SESSION['v_idtipos_receitas'] = $this->v_idtipos_receitas;
          }
          if (isset($this->v_idorcamento)) 
          {
              $_SESSION['v_idorcamento'] = $this->v_idorcamento;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_recebimento_pdv_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_recebimento_pdv_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_recebimento_pdv_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_recebimento_pdv_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_recebimento_pdv_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_recebimento_pdv_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_recebimento_pdv_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_recebimento_pdv_mob']['label'] = "CONTAS RECEBER";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_recebimento_pdv_mob")
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


      $this->arr_buttons['salvar']['hint']             = "";
      $this->arr_buttons['salvar']['type']             = "button";
      $this->arr_buttons['salvar']['value']            = "Salvar";
      $this->arr_buttons['salvar']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['salvar']['display_position'] = "text_right";
      $this->arr_buttons['salvar']['style']            = "default";
      $this->arr_buttons['salvar']['image']            = "";
      $this->arr_buttons['salvar']['has_fa']            = "true";
      $this->arr_buttons['salvar']['fontawesomeicon']            = "fas fa-save";


      $_SESSION['scriptcase']['error_icon']['form_recebimento_pdv_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_recebimento_pdv_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      $this->nmgp_botoes['Salvar'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recebimento_pdv_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_recebimento_pdv_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_recebimento_pdv_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_form'];
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['idcontas_receber'] != "null"){$this->idcontas_receber = $this->nmgp_dados_form['idcontas_receber'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['idcliente'] != "null"){$this->idcliente = $this->nmgp_dados_form['idcliente'];} 
          if (!isset($this->idforma_pagamento)){$this->idforma_pagamento = $this->nmgp_dados_form['idforma_pagamento'];} 
          if (!isset($this->idgrupos_receitas)){$this->idgrupos_receitas = $this->nmgp_dados_form['idgrupos_receitas'];} 
          if (!isset($this->idtipos_receitas)){$this->idtipos_receitas = $this->nmgp_dados_form['idtipos_receitas'];} 
          if (!isset($this->idorcamento)){$this->idorcamento = $this->nmgp_dados_form['idorcamento'];} 
          if (!isset($this->idnota_fiscal)){$this->idnota_fiscal = $this->nmgp_dados_form['idnota_fiscal'];} 
          if (!isset($this->numero_conta)){$this->numero_conta = $this->nmgp_dados_form['numero_conta'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['valor_a_receber'] != "null"){$this->valor_a_receber = $this->nmgp_dados_form['valor_a_receber'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['data_pagamento'] != "null"){
              $this->data_pagamento = $this->nmgp_dados_form['data_pagamento'];
              $this->data_pagamento = $this->nm_conv_data_db($this->data_pagamento, 'yyyy-mm-dd', $this->field_config['data_pagamento']['date_format']);
          }
          if (!isset($this->valor_recebido)){$this->valor_recebido = $this->nmgp_dados_form['valor_recebido'];} 
          if (!isset($this->situacao)){$this->situacao = $this->nmgp_dados_form['situacao'];} 
          if (!isset($this->juros)){$this->juros = $this->nmgp_dados_form['juros'];} 
          if (!isset($this->competencia)){$this->competencia = $this->nmgp_dados_form['competencia'];} 
          if (!isset($this->data_insercao)){$this->data_insercao = $this->nmgp_dados_form['data_insercao'];} 
          if (!isset($this->data_alteracao)){$this->data_alteracao = $this->nmgp_dados_form['data_alteracao'];} 
          if (!isset($this->taxa_administrativa)){$this->taxa_administrativa = $this->nmgp_dados_form['taxa_administrativa'];} 
          if (!isset($this->troco)){$this->troco = $this->nmgp_dados_form['troco'];} 
          if (!isset($this->sc_field_2)){$this->sc_field_2 = $this->nmgp_dados_form['sc_field_2'];} 
          if (!isset($this->sc_field_4)){$this->sc_field_4 = $this->nmgp_dados_form['sc_field_4'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['valor_parcelas'] != "null"){$this->valor_parcelas = $this->nmgp_dados_form['valor_parcelas'];} 
          if (!isset($this->valor_original)){$this->valor_original = $this->nmgp_dados_form['valor_original'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_recebimento_pdv_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_recebimento_pdv/form_recebimento_pdv_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_recebimento_pdv_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_recebimento_pdv_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_recebimento_pdv_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_recebimento_pdv/form_recebimento_pdv_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_recebimento_pdv_mob_erro.class.php"); 
      }
      $this->Erro      = new form_recebimento_pdv_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao']))
         { 
             if ($this->idcontas_receber != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_recebimento_pdv_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['Salvar'] = "on";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['Salvar'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['botoes']['Salvar'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_form'];
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
      if (!isset($this->NM_ajax_flag) || ('validate_' != substr($this->NM_ajax_opcao, 0, 9) && 'add_new_line' != $this->NM_ajax_opcao && 'autocomp_' != substr($this->NM_ajax_opcao, 0, 9)))
      {
      $_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
  


$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off'; 
      }
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
            }            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
      if (isset($this->idcontas_receber)) { $this->nm_limpa_alfa($this->idcontas_receber); }
      if (isset($this->idcliente)) { $this->nm_limpa_alfa($this->idcliente); }
      if (isset($this->idforma_pagamento_prevista)) { $this->nm_limpa_alfa($this->idforma_pagamento_prevista); }
      if (isset($this->valor_a_receber)) { $this->nm_limpa_alfa($this->valor_a_receber); }
      if (isset($this->pago)) { $this->nm_limpa_alfa($this->pago); }
      if (isset($this->observacoes)) { $this->nm_limpa_alfa($this->observacoes); }
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "Salvar")
          { 
              $this->sc_btn_Salvar();
          } 
          $this->NM_close_db(); 
          exit;
      } 
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- idcontas_receber
      $this->field_config['idcontas_receber']               = array();
      $this->field_config['idcontas_receber']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idcontas_receber']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idcontas_receber']['symbol_dec'] = '';
      $this->field_config['idcontas_receber']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idcontas_receber']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- valor_a_receber
      $this->field_config['valor_a_receber']               = array();
      $this->field_config['valor_a_receber']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['valor_a_receber']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['valor_a_receber']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['valor_a_receber']['symbol_mon'] = $_SESSION['scriptcase']['reg_conf']['monet_simb'];
      $this->field_config['valor_a_receber']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['valor_a_receber']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- desconto
      $this->field_config['desconto']               = array();
      $this->field_config['desconto']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['desconto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['desconto']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['desconto']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['desconto']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- desconto_porcento
      $this->field_config['desconto_porcento']               = array();
      $this->field_config['desconto_porcento']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['desconto_porcento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['desconto_porcento']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['desconto_porcento']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['desconto_porcento']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- data_emissao
      $this->field_config['data_emissao']                 = array();
      $this->field_config['data_emissao']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['data_emissao']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_emissao']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'data_emissao');
      //-- data_vencimento
      $this->field_config['data_vencimento']                 = array();
      $this->field_config['data_vencimento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['data_vencimento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_vencimento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'data_vencimento');
      //-- sc_field_0
      $this->field_config['sc_field_0']               = array();
      $this->field_config['sc_field_0']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['sc_field_0']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['sc_field_0']['symbol_dec'] = '';
      $this->field_config['sc_field_0']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['sc_field_0']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- sc_field_1
      $this->field_config['sc_field_1']               = array();
      $this->field_config['sc_field_1']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['sc_field_1']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['sc_field_1']['symbol_dec'] = '';
      $this->field_config['sc_field_1']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['sc_field_1']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- data_pagamento
      $this->field_config['data_pagamento']                 = array();
      $this->field_config['data_pagamento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['data_pagamento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_pagamento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'data_pagamento');
      //-- idnota_fiscal
      $this->field_config['idnota_fiscal']               = array();
      $this->field_config['idnota_fiscal']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idnota_fiscal']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idnota_fiscal']['symbol_dec'] = '';
      $this->field_config['idnota_fiscal']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idnota_fiscal']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- valor_recebido
      $this->field_config['valor_recebido']               = array();
      $this->field_config['valor_recebido']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['valor_recebido']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['valor_recebido']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['valor_recebido']['symbol_mon'] = '';
      $this->field_config['valor_recebido']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['valor_recebido']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- juros
      $this->field_config['juros']               = array();
      $this->field_config['juros']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['juros']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['juros']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['juros']['symbol_mon'] = '';
      $this->field_config['juros']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['juros']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
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
      //-- taxa_administrativa
      $this->field_config['taxa_administrativa']               = array();
      $this->field_config['taxa_administrativa']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['taxa_administrativa']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['taxa_administrativa']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['taxa_administrativa']['symbol_mon'] = '';
      $this->field_config['taxa_administrativa']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['taxa_administrativa']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- troco
      $this->field_config['troco']               = array();
      $this->field_config['troco']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['troco']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['troco']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['troco']['symbol_mon'] = '';
      $this->field_config['troco']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['troco']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- valor_original
      $this->field_config['valor_original']               = array();
      $this->field_config['valor_original']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['valor_original']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['valor_original']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['valor_original']['symbol_mon'] = '';
      $this->field_config['valor_original']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['valor_original']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
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
          if ('validate_idcontas_receber' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idcontas_receber');
          }
          if ('validate_idcliente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idcliente');
          }
          if ('validate_valor_a_receber' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'valor_a_receber');
          }
          if ('validate_desconto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'desconto');
          }
          if ('validate_desconto_porcento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'desconto_porcento');
          }
          if ('validate_idforma_pagamento_prevista' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idforma_pagamento_prevista');
          }
          if ('validate_data_emissao' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'data_emissao');
          }
          if ('validate_data_vencimento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'data_vencimento');
          }
          if ('validate_sc_field_0' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sc_field_0');
          }
          if ('validate_sc_field_1' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sc_field_1');
          }
          if ('validate_sc_field_3' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sc_field_3');
          }
          if ('validate_valor_parcelas' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'valor_parcelas');
          }
          if ('validate_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pago');
          }
          if ('validate_data_pagamento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'data_pagamento');
          }
          if ('validate_observacoes' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'observacoes');
          }
          form_recebimento_pdv_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_desconto_porcento_onblur' == $this->NM_ajax_opcao)
          {
              $this->DESCONTO_PORCENTO_onBlur();
          }
          if ('event_desconto_onblur' == $this->NM_ajax_opcao)
          {
              $this->DESCONTO_onBlur();
          }
          if ('event_sc_field_0_onchange' == $this->NM_ajax_opcao)
          {
              $this->sc_field_0_onChange();
          }
          if ('event_scajaxbutton_salvar_onclick' == $this->NM_ajax_opcao)
          {
              $this->scajaxbutton_Salvar_onClick();
          }
          form_recebimento_pdv_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->sc_field_2))
          {
              $x = 0; 
              $this->sc_field_2_1 = $this->sc_field_2;
              $this->sc_field_2 = ""; 
              if ($this->sc_field_2_1 != "") 
              { 
                  foreach ($this->sc_field_2_1 as $dados_sc_field_2_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->sc_field_2 .= ";";
                      } 
                      $this->sc_field_2 .= $dados_sc_field_2_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->sc_field_3))
          {
              $x = 0; 
              $this->sc_field_3_1 = $this->sc_field_3;
              $this->sc_field_3 = ""; 
              if ($this->sc_field_3_1 != "") 
              { 
                  foreach ($this->sc_field_3_1 as $dados_sc_field_3_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->sc_field_3 .= ";";
                      } 
                      $this->sc_field_3 .= $dados_sc_field_3_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->sc_field_4))
          {
              $x = 0; 
              $this->sc_field_4_1 = $this->sc_field_4;
              $this->sc_field_4 = ""; 
              if ($this->sc_field_4_1 != "") 
              { 
                  foreach ($this->sc_field_4_1 as $dados_sc_field_4_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->sc_field_4 .= ";";
                      } 
                      $this->sc_field_4 .= $dados_sc_field_4_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['idcliente']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->idcliente = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['idcliente'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['valor_a_receber']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->valor_a_receber = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['valor_a_receber'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['valor_parcelas']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->valor_parcelas = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['valor_parcelas'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['data_pagamento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->data_pagamento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select']['data_pagamento'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_recebimento_pdv_mob_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_recebimento_pdv_mob_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_recebimento_pdv_mob_pack_ajax_response();
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
          form_recebimento_pdv_mob_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_recebimento_pdv_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("CONTAS RECEBER") ?></TITLE>
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
<form name="Fdown" method="get" action="form_recebimento_pdv_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_recebimento_pdv_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_recebimento_pdv_mob.php" target="_self" style="display: none"> 
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
           case 'idcontas_receber':
               return "ID";
               break;
           case 'idcliente':
               return "CLIENTE";
               break;
           case 'valor_a_receber':
               return "VALOR A RECEBER";
               break;
           case 'desconto':
               return "DESCONTO(R$)";
               break;
           case 'desconto_porcento':
               return "%";
               break;
           case 'idforma_pagamento_prevista':
               return "FORMA DE PAGAMENTO";
               break;
           case 'data_emissao':
               return "DATA DE EMISS??O";
               break;
           case 'data_vencimento':
               return "DATA DE VENCIMENTO";
               break;
           case 'sc_field_0':
               return "PARCELAS";
               break;
           case 'sc_field_1':
               return "INTERVALO";
               break;
           case 'sc_field_3':
               return "";
               break;
           case 'valor_parcelas':
               return "valor_parcelas";
               break;
           case 'pago':
               return "STATUS PAGAMENTO";
               break;
           case 'data_pagamento':
               return "DATA RECEBIMENTO";
               break;
           case 'observacoes':
               return "OBSERVA????ES";
               break;
           case 'idforma_pagamento':
               return "Idforma Pagamento";
               break;
           case 'idgrupos_receitas':
               return "GRUPO DE RECEITAS";
               break;
           case 'idtipos_receitas':
               return "TIPO DE RECEITAS";
               break;
           case 'idorcamento':
               return "Idorcamento";
               break;
           case 'idnota_fiscal':
               return "NOTA FISCAL VINCULADA";
               break;
           case 'numero_conta':
               return "Numero Conta";
               break;
           case 'valor_recebido':
               return "Valor Recebido";
               break;
           case 'situacao':
               return "Situacao";
               break;
           case 'juros':
               return "Juros";
               break;
           case 'competencia':
               return "COMPET??NCIA";
               break;
           case 'data_insercao':
               return "Data Insercao";
               break;
           case 'data_alteracao':
               return "Data Alteracao";
               break;
           case 'taxa_administrativa':
               return "Taxa Administrativa";
               break;
           case 'troco':
               return "Troco";
               break;
           case 'sc_field_2':
               return "";
               break;
           case 'sc_field_4':
               return "";
               break;
           case 'valor_original':
               return "valor_original";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_recebimento_pdv_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_recebimento_pdv_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_recebimento_pdv_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_recebimento_pdv_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'idcontas_receber' == $filtro)) || (is_array($filtro) && in_array('idcontas_receber', $filtro)))
        $this->ValidateField_idcontas_receber($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idcliente' == $filtro)) || (is_array($filtro) && in_array('idcliente', $filtro)))
        $this->ValidateField_idcliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'valor_a_receber' == $filtro)) || (is_array($filtro) && in_array('valor_a_receber', $filtro)))
        $this->ValidateField_valor_a_receber($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'desconto' == $filtro)) || (is_array($filtro) && in_array('desconto', $filtro)))
        $this->ValidateField_desconto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'desconto_porcento' == $filtro)) || (is_array($filtro) && in_array('desconto_porcento', $filtro)))
        $this->ValidateField_desconto_porcento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idforma_pagamento_prevista' == $filtro)) || (is_array($filtro) && in_array('idforma_pagamento_prevista', $filtro)))
        $this->ValidateField_idforma_pagamento_prevista($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'data_emissao' == $filtro)) || (is_array($filtro) && in_array('data_emissao', $filtro)))
        $this->ValidateField_data_emissao($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'data_vencimento' == $filtro)) || (is_array($filtro) && in_array('data_vencimento', $filtro)))
        $this->ValidateField_data_vencimento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'sc_field_0' == $filtro)) || (is_array($filtro) && in_array('sc_field_0', $filtro)))
        $this->ValidateField_sc_field_0($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'sc_field_1' == $filtro)) || (is_array($filtro) && in_array('sc_field_1', $filtro)))
        $this->ValidateField_sc_field_1($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'sc_field_3' == $filtro)) || (is_array($filtro) && in_array('sc_field_3', $filtro)))
        $this->ValidateField_sc_field_3($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'valor_parcelas' == $filtro)) || (is_array($filtro) && in_array('valor_parcelas', $filtro)))
        $this->ValidateField_valor_parcelas($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'pago' == $filtro)) || (is_array($filtro) && in_array('pago', $filtro)))
        $this->ValidateField_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'data_pagamento' == $filtro)) || (is_array($filtro) && in_array('data_pagamento', $filtro)))
        $this->ValidateField_data_pagamento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'observacoes' == $filtro)) || (is_array($filtro) && in_array('observacoes', $filtro)))
        $this->ValidateField_observacoes($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

      if (empty($Campos_Crit) && empty($Campos_Falta) && empty($this->Campos_Mens_erro))
      {
          if (!isset($this->NM_ajax_flag) || 'validate_' != substr($this->NM_ajax_opcao, 0, 9))
          {
              $_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
  $this->sc_ajax_javascript(reload);
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off'; 
          }
      }
   }

    function ValidateField_idcontas_receber(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->idcontas_receber === "" || is_null($this->idcontas_receber))  
      { 
          $this->idcontas_receber = 0;
      } 
      nm_limpa_numero($this->idcontas_receber, $this->field_config['idcontas_receber']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->idcontas_receber != '')  
          { 
              $iTestSize = 10;
              if (strlen($this->idcontas_receber) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['idcontas_receber']))
                  {
                      $Campos_Erros['idcontas_receber'] = array();
                  }
                  $Campos_Erros['idcontas_receber'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['idcontas_receber']) || !is_array($this->NM_ajax_info['errList']['idcontas_receber']))
                  {
                      $this->NM_ajax_info['errList']['idcontas_receber'] = array();
                  }
                  $this->NM_ajax_info['errList']['idcontas_receber'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->idcontas_receber, 10, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID; " ; 
                  if (!isset($Campos_Erros['idcontas_receber']))
                  {
                      $Campos_Erros['idcontas_receber'] = array();
                  }
                  $Campos_Erros['idcontas_receber'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['idcontas_receber']) || !is_array($this->NM_ajax_info['errList']['idcontas_receber']))
                  {
                      $this->NM_ajax_info['errList']['idcontas_receber'] = array();
                  }
                  $this->NM_ajax_info['errList']['idcontas_receber'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idcontas_receber';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idcontas_receber

    function ValidateField_idcliente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->idcliente == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['php_cmp_required']['idcliente']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['php_cmp_required']['idcliente'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "CLIENTE" ; 
          if (!isset($Campos_Erros['idcliente']))
          {
              $Campos_Erros['idcliente'] = array();
          }
          $Campos_Erros['idcliente'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['idcliente']) || !is_array($this->NM_ajax_info['errList']['idcliente']))
          {
              $this->NM_ajax_info['errList']['idcliente'] = array();
          }
          $this->NM_ajax_info['errList']['idcliente'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->idcliente) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']) && !in_array($this->idcliente, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']))
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

    function ValidateField_valor_a_receber(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (!empty($this->field_config['valor_a_receber']['symbol_dec']))
      {
          $this->sc_remove_currency($this->valor_a_receber, $this->field_config['valor_a_receber']['symbol_dec'], $this->field_config['valor_a_receber']['symbol_grp'], $this->field_config['valor_a_receber']['symbol_mon']); 
          nm_limpa_valor($this->valor_a_receber, $this->field_config['valor_a_receber']['symbol_dec'], $this->field_config['valor_a_receber']['symbol_grp']) ; 
          if ('.' == substr($this->valor_a_receber, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->valor_a_receber, 1)))
              {
                  $this->valor_a_receber = '';
              }
              else
              {
                  $this->valor_a_receber = '0' . $this->valor_a_receber;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->valor_a_receber != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->valor_a_receber) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VALOR A RECEBER: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['valor_a_receber']))
                  {
                      $Campos_Erros['valor_a_receber'] = array();
                  }
                  $Campos_Erros['valor_a_receber'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['valor_a_receber']) || !is_array($this->NM_ajax_info['errList']['valor_a_receber']))
                  {
                      $this->NM_ajax_info['errList']['valor_a_receber'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_a_receber'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->valor_a_receber, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "VALOR A RECEBER; " ; 
                  if (!isset($Campos_Erros['valor_a_receber']))
                  {
                      $Campos_Erros['valor_a_receber'] = array();
                  }
                  $Campos_Erros['valor_a_receber'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['valor_a_receber']) || !is_array($this->NM_ajax_info['errList']['valor_a_receber']))
                  {
                      $this->NM_ajax_info['errList']['valor_a_receber'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_a_receber'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['php_cmp_required']['valor_a_receber']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['php_cmp_required']['valor_a_receber'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "VALOR A RECEBER" ; 
              if (!isset($Campos_Erros['valor_a_receber']))
              {
                  $Campos_Erros['valor_a_receber'] = array();
              }
              $Campos_Erros['valor_a_receber'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['valor_a_receber']) || !is_array($this->NM_ajax_info['errList']['valor_a_receber']))
                  {
                      $this->NM_ajax_info['errList']['valor_a_receber'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_a_receber'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'valor_a_receber';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_valor_a_receber

    function ValidateField_desconto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->desconto === "" || is_null($this->desconto))  
      { 
          $this->desconto = 0;
          $this->sc_force_zero[] = 'desconto';
      } 
      if (!empty($this->field_config['desconto']['symbol_dec']))
      {
          nm_limpa_valor($this->desconto, $this->field_config['desconto']['symbol_dec'], $this->field_config['desconto']['symbol_grp']) ; 
          if ('.' == substr($this->desconto, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->desconto, 1)))
              {
                  $this->desconto = '';
              }
              else
              {
                  $this->desconto = '0' . $this->desconto;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->desconto != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->desconto, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->desconto, -1))
              {
                  $iTestSize++;
                  $this->desconto = '-' . substr($this->desconto, 0, -1);
              }
              if (strlen($this->desconto) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "DESCONTO(R$): " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['desconto']))
                  {
                      $Campos_Erros['desconto'] = array();
                  }
                  $Campos_Erros['desconto'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['desconto']) || !is_array($this->NM_ajax_info['errList']['desconto']))
                  {
                      $this->NM_ajax_info['errList']['desconto'] = array();
                  }
                  $this->NM_ajax_info['errList']['desconto'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->desconto, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "DESCONTO(R$); " ; 
                  if (!isset($Campos_Erros['desconto']))
                  {
                      $Campos_Erros['desconto'] = array();
                  }
                  $Campos_Erros['desconto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['desconto']) || !is_array($this->NM_ajax_info['errList']['desconto']))
                  {
                      $this->NM_ajax_info['errList']['desconto'] = array();
                  }
                  $this->NM_ajax_info['errList']['desconto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'desconto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_desconto

    function ValidateField_desconto_porcento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->desconto_porcento === "" || is_null($this->desconto_porcento))  
      { 
          $this->desconto_porcento = 0;
          $this->sc_force_zero[] = 'desconto_porcento';
      } 
      if (!empty($this->field_config['desconto_porcento']['symbol_dec']))
      {
          nm_limpa_valor($this->desconto_porcento, $this->field_config['desconto_porcento']['symbol_dec'], $this->field_config['desconto_porcento']['symbol_grp']) ; 
          if ('.' == substr($this->desconto_porcento, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->desconto_porcento, 1)))
              {
                  $this->desconto_porcento = '';
              }
              else
              {
                  $this->desconto_porcento = '0' . $this->desconto_porcento;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->desconto_porcento != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->desconto_porcento, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->desconto_porcento, -1))
              {
                  $iTestSize++;
                  $this->desconto_porcento = '-' . substr($this->desconto_porcento, 0, -1);
              }
              if (strlen($this->desconto_porcento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "%: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['desconto_porcento']))
                  {
                      $Campos_Erros['desconto_porcento'] = array();
                  }
                  $Campos_Erros['desconto_porcento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['desconto_porcento']) || !is_array($this->NM_ajax_info['errList']['desconto_porcento']))
                  {
                      $this->NM_ajax_info['errList']['desconto_porcento'] = array();
                  }
                  $this->NM_ajax_info['errList']['desconto_porcento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->desconto_porcento, 17, 3, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "%; " ; 
                  if (!isset($Campos_Erros['desconto_porcento']))
                  {
                      $Campos_Erros['desconto_porcento'] = array();
                  }
                  $Campos_Erros['desconto_porcento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['desconto_porcento']) || !is_array($this->NM_ajax_info['errList']['desconto_porcento']))
                  {
                      $this->NM_ajax_info['errList']['desconto_porcento'] = array();
                  }
                  $this->NM_ajax_info['errList']['desconto_porcento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'desconto_porcento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_desconto_porcento

    function ValidateField_idforma_pagamento_prevista(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->idforma_pagamento_prevista) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']) && !in_array($this->idforma_pagamento_prevista, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['idforma_pagamento_prevista']))
                   {
                       $Campos_Erros['idforma_pagamento_prevista'] = array();
                   }
                   $Campos_Erros['idforma_pagamento_prevista'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['idforma_pagamento_prevista']) || !is_array($this->NM_ajax_info['errList']['idforma_pagamento_prevista']))
                   {
                       $this->NM_ajax_info['errList']['idforma_pagamento_prevista'] = array();
                   }
                   $this->NM_ajax_info['errList']['idforma_pagamento_prevista'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idforma_pagamento_prevista';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idforma_pagamento_prevista

    function ValidateField_data_emissao(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->data_emissao, $this->field_config['data_emissao']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['data_emissao']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['data_emissao']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['data_emissao']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['data_emissao']['date_sep']) ; 
          if (trim($this->data_emissao) != "")  
          { 
              if ($teste_validade->Data($this->data_emissao, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "DATA DE EMISS??O; " ; 
                  if (!isset($Campos_Erros['data_emissao']))
                  {
                      $Campos_Erros['data_emissao'] = array();
                  }
                  $Campos_Erros['data_emissao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_emissao']) || !is_array($this->NM_ajax_info['errList']['data_emissao']))
                  {
                      $this->NM_ajax_info['errList']['data_emissao'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_emissao'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['data_emissao']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'data_emissao';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_data_emissao

    function ValidateField_data_vencimento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->data_vencimento, $this->field_config['data_vencimento']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['data_vencimento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['data_vencimento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['data_vencimento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['data_vencimento']['date_sep']) ; 
          if (trim($this->data_vencimento) != "")  
          { 
              if ($teste_validade->Data($this->data_vencimento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "DATA DE VENCIMENTO; " ; 
                  if (!isset($Campos_Erros['data_vencimento']))
                  {
                      $Campos_Erros['data_vencimento'] = array();
                  }
                  $Campos_Erros['data_vencimento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_vencimento']) || !is_array($this->NM_ajax_info['errList']['data_vencimento']))
                  {
                      $this->NM_ajax_info['errList']['data_vencimento'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_vencimento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['data_vencimento']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'data_vencimento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_data_vencimento

    function ValidateField_sc_field_0(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->sc_field_0 === "" || is_null($this->sc_field_0))  
      { 
          $this->sc_field_0 = 0;
          $this->sc_force_zero[] = 'sc_field_0';
      } 
      nm_limpa_numero($this->sc_field_0, $this->field_config['sc_field_0']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->sc_field_0 != '')  
          { 
              $iTestSize = 20;
              if (strlen($this->sc_field_0) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "PARCELAS: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['sc_field_0']))
                  {
                      $Campos_Erros['sc_field_0'] = array();
                  }
                  $Campos_Erros['sc_field_0'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['sc_field_0']) || !is_array($this->NM_ajax_info['errList']['sc_field_0']))
                  {
                      $this->NM_ajax_info['errList']['sc_field_0'] = array();
                  }
                  $this->NM_ajax_info['errList']['sc_field_0'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->sc_field_0, 20, 0, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "PARCELAS; " ; 
                  if (!isset($Campos_Erros['sc_field_0']))
                  {
                      $Campos_Erros['sc_field_0'] = array();
                  }
                  $Campos_Erros['sc_field_0'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sc_field_0']) || !is_array($this->NM_ajax_info['errList']['sc_field_0']))
                  {
                      $this->NM_ajax_info['errList']['sc_field_0'] = array();
                  }
                  $this->NM_ajax_info['errList']['sc_field_0'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'sc_field_0';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_sc_field_0

    function ValidateField_sc_field_1(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->sc_field_1 === "" || is_null($this->sc_field_1))  
      { 
          $this->sc_field_1 = 0;
          $this->sc_force_zero[] = 'sc_field_1';
      } 
      nm_limpa_numero($this->sc_field_1, $this->field_config['sc_field_1']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->sc_field_1 != '')  
          { 
              $iTestSize = 20;
              if (strlen($this->sc_field_1) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "INTERVALO: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['sc_field_1']))
                  {
                      $Campos_Erros['sc_field_1'] = array();
                  }
                  $Campos_Erros['sc_field_1'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['sc_field_1']) || !is_array($this->NM_ajax_info['errList']['sc_field_1']))
                  {
                      $this->NM_ajax_info['errList']['sc_field_1'] = array();
                  }
                  $this->NM_ajax_info['errList']['sc_field_1'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->sc_field_1, 20, 0, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "INTERVALO; " ; 
                  if (!isset($Campos_Erros['sc_field_1']))
                  {
                      $Campos_Erros['sc_field_1'] = array();
                  }
                  $Campos_Erros['sc_field_1'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['sc_field_1']) || !is_array($this->NM_ajax_info['errList']['sc_field_1']))
                  {
                      $this->NM_ajax_info['errList']['sc_field_1'] = array();
                  }
                  $this->NM_ajax_info['errList']['sc_field_1'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'sc_field_1';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_sc_field_1

    function ValidateField_sc_field_3(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->sc_field_3 == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->sc_field_3 = "F";
      } 
      else 
      { 
          if (is_array($this->sc_field_3))
          {
              $x = 0; 
              $this->sc_field_3_1 = array(); 
              foreach ($this->sc_field_3 as $ind => $dados_sc_field_3_1 ) 
              {
                  if ($dados_sc_field_3_1 != "") 
                  {
                      $this->sc_field_3_1[] = $dados_sc_field_3_1;
                  } 
              } 
              $this->sc_field_3 = ""; 
              foreach ($this->sc_field_3_1 as $dados_sc_field_3_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->sc_field_3 .= ";";
                   } 
                   $this->sc_field_3 .= $dados_sc_field_3_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'sc_field_3';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_sc_field_3

    function ValidateField_valor_parcelas(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->valor_parcelas) > 1000) 
          { 
              $hasError = true;
              $Campos_Crit .= "valor_parcelas " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['valor_parcelas']))
              {
                  $Campos_Erros['valor_parcelas'] = array();
              }
              $Campos_Erros['valor_parcelas'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['valor_parcelas']) || !is_array($this->NM_ajax_info['errList']['valor_parcelas']))
              {
                  $this->NM_ajax_info['errList']['valor_parcelas'] = array();
              }
              $this->NM_ajax_info['errList']['valor_parcelas'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1000 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'valor_parcelas';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_valor_parcelas

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
                  $Campos_Crit .= "DATA RECEBIMENTO; " ; 
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
    } // ValidateField_data_pagamento

    function ValidateField_observacoes(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->observacoes) > 32767) 
          { 
              $hasError = true;
              $Campos_Crit .= "OBSERVA????ES " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['observacoes']))
              {
                  $Campos_Erros['observacoes'] = array();
              }
              $Campos_Erros['observacoes'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['observacoes']) || !is_array($this->NM_ajax_info['errList']['observacoes']))
              {
                  $this->NM_ajax_info['errList']['observacoes'] = array();
              }
              $this->NM_ajax_info['errList']['observacoes'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'observacoes';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_observacoes

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
    $this->nmgp_dados_form['idcontas_receber'] = $this->idcontas_receber;
    $this->nmgp_dados_form['idcliente'] = $this->idcliente;
    $this->nmgp_dados_form['valor_a_receber'] = $this->valor_a_receber;
    $this->nmgp_dados_form['desconto'] = $this->desconto;
    $this->nmgp_dados_form['desconto_porcento'] = $this->desconto_porcento;
    $this->nmgp_dados_form['idforma_pagamento_prevista'] = $this->idforma_pagamento_prevista;
    $this->nmgp_dados_form['data_emissao'] = $this->data_emissao;
    $this->nmgp_dados_form['data_vencimento'] = $this->data_vencimento;
    $this->nmgp_dados_form['sc_field_0'] = $this->sc_field_0;
    $this->nmgp_dados_form['sc_field_1'] = $this->sc_field_1;
    $this->nmgp_dados_form['sc_field_3'] = $this->sc_field_3;
    $this->nmgp_dados_form['valor_parcelas'] = $this->valor_parcelas;
    $this->nmgp_dados_form['pago'] = $this->pago;
    $this->nmgp_dados_form['data_pagamento'] = $this->data_pagamento;
    $this->nmgp_dados_form['observacoes'] = $this->observacoes;
    $this->nmgp_dados_form['idforma_pagamento'] = $this->idforma_pagamento;
    $this->nmgp_dados_form['idgrupos_receitas'] = $this->idgrupos_receitas;
    $this->nmgp_dados_form['idtipos_receitas'] = $this->idtipos_receitas;
    $this->nmgp_dados_form['idorcamento'] = $this->idorcamento;
    $this->nmgp_dados_form['idnota_fiscal'] = $this->idnota_fiscal;
    $this->nmgp_dados_form['numero_conta'] = $this->numero_conta;
    $this->nmgp_dados_form['valor_recebido'] = $this->valor_recebido;
    $this->nmgp_dados_form['situacao'] = $this->situacao;
    $this->nmgp_dados_form['juros'] = $this->juros;
    $this->nmgp_dados_form['competencia'] = $this->competencia;
    $this->nmgp_dados_form['data_insercao'] = $this->data_insercao;
    $this->nmgp_dados_form['data_alteracao'] = $this->data_alteracao;
    $this->nmgp_dados_form['taxa_administrativa'] = $this->taxa_administrativa;
    $this->nmgp_dados_form['troco'] = $this->troco;
    $this->nmgp_dados_form['sc_field_2'] = $this->sc_field_2;
    $this->nmgp_dados_form['sc_field_4'] = $this->sc_field_4;
    $this->nmgp_dados_form['valor_original'] = $this->valor_original;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['idcontas_receber'] = $this->idcontas_receber;
      nm_limpa_numero($this->idcontas_receber, $this->field_config['idcontas_receber']['symbol_grp']) ; 
      $this->Before_unformat['valor_a_receber'] = $this->valor_a_receber;
      if (!empty($this->field_config['valor_a_receber']['symbol_dec']))
      {
         $this->sc_remove_currency($this->valor_a_receber, $this->field_config['valor_a_receber']['symbol_dec'], $this->field_config['valor_a_receber']['symbol_grp'], $this->field_config['valor_a_receber']['symbol_mon']);
         nm_limpa_valor($this->valor_a_receber, $this->field_config['valor_a_receber']['symbol_dec'], $this->field_config['valor_a_receber']['symbol_grp']);
      }
      $this->Before_unformat['desconto'] = $this->desconto;
      if (!empty($this->field_config['desconto']['symbol_dec']))
      {
         nm_limpa_valor($this->desconto, $this->field_config['desconto']['symbol_dec'], $this->field_config['desconto']['symbol_grp']);
      }
      $this->Before_unformat['desconto_porcento'] = $this->desconto_porcento;
      if (!empty($this->field_config['desconto_porcento']['symbol_dec']))
      {
         nm_limpa_valor($this->desconto_porcento, $this->field_config['desconto_porcento']['symbol_dec'], $this->field_config['desconto_porcento']['symbol_grp']);
      }
      $this->Before_unformat['data_emissao'] = $this->data_emissao;
      nm_limpa_data($this->data_emissao, $this->field_config['data_emissao']['date_sep']) ; 
      $this->Before_unformat['data_vencimento'] = $this->data_vencimento;
      nm_limpa_data($this->data_vencimento, $this->field_config['data_vencimento']['date_sep']) ; 
      $this->Before_unformat['sc_field_0'] = $this->sc_field_0;
      nm_limpa_numero($this->sc_field_0, $this->field_config['sc_field_0']['symbol_grp']) ; 
      $this->Before_unformat['sc_field_1'] = $this->sc_field_1;
      nm_limpa_numero($this->sc_field_1, $this->field_config['sc_field_1']['symbol_grp']) ; 
      $this->Before_unformat['data_pagamento'] = $this->data_pagamento;
      nm_limpa_data($this->data_pagamento, $this->field_config['data_pagamento']['date_sep']) ; 
      $this->Before_unformat['idnota_fiscal'] = $this->idnota_fiscal;
      nm_limpa_numero($this->idnota_fiscal, $this->field_config['idnota_fiscal']['symbol_grp']) ; 
      $this->Before_unformat['valor_recebido'] = $this->valor_recebido;
      if (!empty($this->field_config['valor_recebido']['symbol_dec']))
      {
         $this->sc_remove_currency($this->valor_recebido, $this->field_config['valor_recebido']['symbol_dec'], $this->field_config['valor_recebido']['symbol_grp'], $this->field_config['valor_recebido']['symbol_mon']);
         nm_limpa_valor($this->valor_recebido, $this->field_config['valor_recebido']['symbol_dec'], $this->field_config['valor_recebido']['symbol_grp']);
      }
      $this->Before_unformat['juros'] = $this->juros;
      if (!empty($this->field_config['juros']['symbol_dec']))
      {
         $this->sc_remove_currency($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp'], $this->field_config['juros']['symbol_mon']);
         nm_limpa_valor($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp']);
      }
      $this->Before_unformat['competencia'] = $this->competencia;
      $this->nm_tira_mask($this->competencia, "99/9999", "(){}[].,;:-+/ "); 
      $this->Before_unformat['data_insercao'] = $this->data_insercao;
      $this->Before_unformat['data_insercao_hora'] = $this->data_insercao_hora;
      nm_limpa_data($this->data_insercao, $this->field_config['data_insercao']['date_sep']) ; 
      nm_limpa_hora($this->data_insercao_hora, $this->field_config['data_insercao']['time_sep']) ; 
      $this->Before_unformat['data_alteracao'] = $this->data_alteracao;
      $this->Before_unformat['data_alteracao_hora'] = $this->data_alteracao_hora;
      nm_limpa_data($this->data_alteracao, $this->field_config['data_alteracao']['date_sep']) ; 
      nm_limpa_hora($this->data_alteracao_hora, $this->field_config['data_alteracao']['time_sep']) ; 
      $this->Before_unformat['taxa_administrativa'] = $this->taxa_administrativa;
      if (!empty($this->field_config['taxa_administrativa']['symbol_dec']))
      {
         $this->sc_remove_currency($this->taxa_administrativa, $this->field_config['taxa_administrativa']['symbol_dec'], $this->field_config['taxa_administrativa']['symbol_grp'], $this->field_config['taxa_administrativa']['symbol_mon']);
         nm_limpa_valor($this->taxa_administrativa, $this->field_config['taxa_administrativa']['symbol_dec'], $this->field_config['taxa_administrativa']['symbol_grp']);
      }
      $this->Before_unformat['troco'] = $this->troco;
      if (!empty($this->field_config['troco']['symbol_dec']))
      {
         $this->sc_remove_currency($this->troco, $this->field_config['troco']['symbol_dec'], $this->field_config['troco']['symbol_grp'], $this->field_config['troco']['symbol_mon']);
         nm_limpa_valor($this->troco, $this->field_config['troco']['symbol_dec'], $this->field_config['troco']['symbol_grp']);
      }
      $this->Before_unformat['valor_original'] = $this->valor_original;
      if (!empty($this->field_config['valor_original']['symbol_dec']))
      {
         $this->sc_remove_currency($this->valor_original, $this->field_config['valor_original']['symbol_dec'], $this->field_config['valor_original']['symbol_grp'], $this->field_config['valor_original']['symbol_mon']);
         nm_limpa_valor($this->valor_original, $this->field_config['valor_original']['symbol_dec'], $this->field_config['valor_original']['symbol_grp']);
      }
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
      if ($Nome_Campo == "idcontas_receber")
      {
          nm_limpa_numero($this->idcontas_receber, $this->field_config['idcontas_receber']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "valor_a_receber")
      {
          if (!empty($this->field_config['valor_a_receber']['symbol_dec']))
          {
             $this->sc_remove_currency($this->valor_a_receber, $this->field_config['valor_a_receber']['symbol_dec'], $this->field_config['valor_a_receber']['symbol_grp'], $this->field_config['valor_a_receber']['symbol_mon']);
             nm_limpa_valor($this->valor_a_receber, $this->field_config['valor_a_receber']['symbol_dec'], $this->field_config['valor_a_receber']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "desconto")
      {
          if (!empty($this->field_config['desconto']['symbol_dec']))
          {
             nm_limpa_valor($this->desconto, $this->field_config['desconto']['symbol_dec'], $this->field_config['desconto']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "desconto_porcento")
      {
          if (!empty($this->field_config['desconto_porcento']['symbol_dec']))
          {
             nm_limpa_valor($this->desconto_porcento, $this->field_config['desconto_porcento']['symbol_dec'], $this->field_config['desconto_porcento']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "sc_field_0")
      {
          nm_limpa_numero($this->sc_field_0, $this->field_config['sc_field_0']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "sc_field_1")
      {
          nm_limpa_numero($this->sc_field_1, $this->field_config['sc_field_1']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "idnota_fiscal")
      {
          nm_limpa_numero($this->idnota_fiscal, $this->field_config['idnota_fiscal']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "valor_recebido")
      {
          if (!empty($this->field_config['valor_recebido']['symbol_dec']))
          {
             $this->sc_remove_currency($this->valor_recebido, $this->field_config['valor_recebido']['symbol_dec'], $this->field_config['valor_recebido']['symbol_grp'], $this->field_config['valor_recebido']['symbol_mon']);
             nm_limpa_valor($this->valor_recebido, $this->field_config['valor_recebido']['symbol_dec'], $this->field_config['valor_recebido']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "juros")
      {
          if (!empty($this->field_config['juros']['symbol_dec']))
          {
             $this->sc_remove_currency($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp'], $this->field_config['juros']['symbol_mon']);
             nm_limpa_valor($this->juros, $this->field_config['juros']['symbol_dec'], $this->field_config['juros']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "competencia")
      {
          $this->nm_tira_mask($this->competencia, "99/9999", "(){}[].,;:-+/ "); 
      }
      if ($Nome_Campo == "taxa_administrativa")
      {
          if (!empty($this->field_config['taxa_administrativa']['symbol_dec']))
          {
             $this->sc_remove_currency($this->taxa_administrativa, $this->field_config['taxa_administrativa']['symbol_dec'], $this->field_config['taxa_administrativa']['symbol_grp'], $this->field_config['taxa_administrativa']['symbol_mon']);
             nm_limpa_valor($this->taxa_administrativa, $this->field_config['taxa_administrativa']['symbol_dec'], $this->field_config['taxa_administrativa']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "troco")
      {
          if (!empty($this->field_config['troco']['symbol_dec']))
          {
             $this->sc_remove_currency($this->troco, $this->field_config['troco']['symbol_dec'], $this->field_config['troco']['symbol_grp'], $this->field_config['troco']['symbol_mon']);
             nm_limpa_valor($this->troco, $this->field_config['troco']['symbol_dec'], $this->field_config['troco']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "valor_original")
      {
          if (!empty($this->field_config['valor_original']['symbol_dec']))
          {
             $this->sc_remove_currency($this->valor_original, $this->field_config['valor_original']['symbol_dec'], $this->field_config['valor_original']['symbol_grp'], $this->field_config['valor_original']['symbol_mon']);
             nm_limpa_valor($this->valor_original, $this->field_config['valor_original']['symbol_dec'], $this->field_config['valor_original']['symbol_grp']);
          }
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
      if ('' !== $this->idcontas_receber || (!empty($format_fields) && isset($format_fields['idcontas_receber'])))
      {
          nmgp_Form_Num_Val($this->idcontas_receber, $this->field_config['idcontas_receber']['symbol_grp'], $this->field_config['idcontas_receber']['symbol_dec'], "0", "S", $this->field_config['idcontas_receber']['format_neg'], "", "", "-", $this->field_config['idcontas_receber']['symbol_fmt']) ; 
      }
      if ('' !== $this->valor_a_receber || (!empty($format_fields) && isset($format_fields['valor_a_receber'])))
      {
          nmgp_Form_Num_Val($this->valor_a_receber, $this->field_config['valor_a_receber']['symbol_grp'], $this->field_config['valor_a_receber']['symbol_dec'], "2", "S", $this->field_config['valor_a_receber']['format_neg'], "", "", "-", $this->field_config['valor_a_receber']['symbol_fmt']) ; 
          $sMonSymb = $this->field_config['valor_a_receber']['symbol_mon'];
          $this->sc_add_currency($this->valor_a_receber, $sMonSymb, $this->field_config['valor_a_receber']['format_pos']); 
      }
      if ('' !== $this->desconto || (!empty($format_fields) && isset($format_fields['desconto'])))
      {
          nmgp_Form_Num_Val($this->desconto, $this->field_config['desconto']['symbol_grp'], $this->field_config['desconto']['symbol_dec'], "2", "S", $this->field_config['desconto']['format_neg'], "", "", "-", $this->field_config['desconto']['symbol_fmt']) ; 
      }
      if ('' !== $this->desconto_porcento || (!empty($format_fields) && isset($format_fields['desconto_porcento'])))
      {
          nmgp_Form_Num_Val($this->desconto_porcento, $this->field_config['desconto_porcento']['symbol_grp'], $this->field_config['desconto_porcento']['symbol_dec'], "3", "S", $this->field_config['desconto_porcento']['format_neg'], "", "", "-", $this->field_config['desconto_porcento']['symbol_fmt']) ; 
      }
      if ((!empty($this->data_emissao) && 'null' != $this->data_emissao) || (!empty($format_fields) && isset($format_fields['data_emissao'])))
      {
          nm_volta_data($this->data_emissao, $this->field_config['data_emissao']['date_format']) ; 
          nmgp_Form_Datas($this->data_emissao, $this->field_config['data_emissao']['date_format'], $this->field_config['data_emissao']['date_sep']) ;  
      }
      elseif ('null' == $this->data_emissao || '' == $this->data_emissao)
      {
          $this->data_emissao = '';
      }
      if ((!empty($this->data_vencimento) && 'null' != $this->data_vencimento) || (!empty($format_fields) && isset($format_fields['data_vencimento'])))
      {
          nm_volta_data($this->data_vencimento, $this->field_config['data_vencimento']['date_format']) ; 
          nmgp_Form_Datas($this->data_vencimento, $this->field_config['data_vencimento']['date_format'], $this->field_config['data_vencimento']['date_sep']) ;  
      }
      elseif ('null' == $this->data_vencimento || '' == $this->data_vencimento)
      {
          $this->data_vencimento = '';
      }
      if ('' !== $this->sc_field_0 || (!empty($format_fields) && isset($format_fields['sc_field_0'])))
      {
          nmgp_Form_Num_Val($this->sc_field_0, $this->field_config['sc_field_0']['symbol_grp'], $this->field_config['sc_field_0']['symbol_dec'], "0", "S", $this->field_config['sc_field_0']['format_neg'], "", "", "-", $this->field_config['sc_field_0']['symbol_fmt']) ; 
      }
      if ('' !== $this->sc_field_1 || (!empty($format_fields) && isset($format_fields['sc_field_1'])))
      {
          nmgp_Form_Num_Val($this->sc_field_1, $this->field_config['sc_field_1']['symbol_grp'], $this->field_config['sc_field_1']['symbol_dec'], "0", "S", $this->field_config['sc_field_1']['format_neg'], "", "", "-", $this->field_config['sc_field_1']['symbol_fmt']) ; 
      }
      if ((!empty($this->data_pagamento) && 'null' != $this->data_pagamento) || (!empty($format_fields) && isset($format_fields['data_pagamento'])))
      {
          nm_volta_data($this->data_pagamento, $this->field_config['data_pagamento']['date_format']) ; 
          nmgp_Form_Datas($this->data_pagamento, $this->field_config['data_pagamento']['date_format'], $this->field_config['data_pagamento']['date_sep']) ;  
      }
      elseif ('null' == $this->data_pagamento || '' == $this->data_pagamento)
      {
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
      $guarda_format_hora = $this->field_config['data_emissao']['date_format'];
      if ($this->data_emissao != "")  
      { 
          nm_conv_data($this->data_emissao, $this->field_config['data_emissao']['date_format']) ; 
          $this->data_emissao_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->data_emissao_hora = substr($this->data_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->data_emissao_hora = substr($this->data_emissao_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->data_emissao_hora = substr($this->data_emissao_hora, 0, -4);
          }
          $this->data_emissao .= " " . $this->data_emissao_hora ; 
      } 
      if ($this->data_emissao == "" && $use_null)  
      { 
          $this->data_emissao = "null" ; 
      } 
      $this->field_config['data_emissao']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['data_vencimento']['date_format'];
      if ($this->data_vencimento != "")  
      { 
          nm_conv_data($this->data_vencimento, $this->field_config['data_vencimento']['date_format']) ; 
          $this->data_vencimento_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->data_vencimento_hora = substr($this->data_vencimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->data_vencimento_hora = substr($this->data_vencimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->data_vencimento_hora = substr($this->data_vencimento_hora, 0, -4);
          }
          $this->data_vencimento .= " " . $this->data_vencimento_hora ; 
      } 
      if ($this->data_vencimento == "" && $use_null)  
      { 
          $this->data_vencimento = "null" ; 
      } 
      $this->field_config['data_vencimento']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['data_pagamento']['date_format'];
      if ($this->data_pagamento != "")  
      { 
          nm_conv_data($this->data_pagamento, $this->field_config['data_pagamento']['date_format']) ; 
          $this->data_pagamento_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
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
          $this->data_pagamento .= " " . $this->data_pagamento_hora ; 
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
          $this->ajax_return_values_idcontas_receber();
          $this->ajax_return_values_idcliente();
          $this->ajax_return_values_valor_a_receber();
          $this->ajax_return_values_desconto();
          $this->ajax_return_values_desconto_porcento();
          $this->ajax_return_values_idforma_pagamento_prevista();
          $this->ajax_return_values_data_emissao();
          $this->ajax_return_values_data_vencimento();
          $this->ajax_return_values_sc_field_0();
          $this->ajax_return_values_sc_field_1();
          $this->ajax_return_values_sc_field_3();
          $this->ajax_return_values_valor_parcelas();
          $this->ajax_return_values_pago();
          $this->ajax_return_values_data_pagamento();
          $this->ajax_return_values_observacoes();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['idcontas_receber']['keyVal'] = form_recebimento_pdv_mob_pack_protect_string($this->nmgp_dados_form['idcontas_receber']);
          }
   } // ajax_return_values

          //----- idcontas_receber
   function ajax_return_values_idcontas_receber($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idcontas_receber", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idcontas_receber);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idcontas_receber'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("idcontas_receber", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- idcliente
   function ajax_return_values_idcliente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idcliente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idcliente);
              $aLookup = array();
              $this->_tmp_lookup_idcliente = $this->idcliente;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'] = array(); 
}
$aLookup[] = array(form_recebimento_pdv_mob_pack_protect_string('') => str_replace('<', '&lt;',form_recebimento_pdv_mob_pack_protect_string(' ')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_idcontas_receber = $this->idcontas_receber;
   $old_value_valor_a_receber = $this->valor_a_receber;
   $old_value_desconto = $this->desconto;
   $old_value_desconto_porcento = $this->desconto_porcento;
   $old_value_data_emissao = $this->data_emissao;
   $old_value_data_vencimento = $this->data_vencimento;
   $old_value_sc_field_0 = $this->sc_field_0;
   $old_value_sc_field_1 = $this->sc_field_1;
   $old_value_data_pagamento = $this->data_pagamento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idcontas_receber = $this->idcontas_receber;
   $unformatted_value_valor_a_receber = $this->valor_a_receber;
   $unformatted_value_desconto = $this->desconto;
   $unformatted_value_desconto_porcento = $this->desconto_porcento;
   $unformatted_value_data_emissao = $this->data_emissao;
   $unformatted_value_data_vencimento = $this->data_vencimento;
   $unformatted_value_sc_field_0 = $this->sc_field_0;
   $unformatted_value_sc_field_1 = $this->sc_field_1;
   $unformatted_value_data_pagamento = $this->data_pagamento;

   $sc_field_2_val_str = "''";
   if (!empty($this->sc_field_2))
   {
       if (is_array($this->sc_field_2))
       {
           $Tmp_array = $this->sc_field_2;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_2);
       }
       $sc_field_2_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_2_val_str)
          {
             $sc_field_2_val_str .= ", ";
          }
          $sc_field_2_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_3_val_str = "''";
   if (!empty($this->sc_field_3))
   {
       if (is_array($this->sc_field_3))
       {
           $Tmp_array = $this->sc_field_3;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_3);
       }
       $sc_field_3_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_3_val_str)
          {
             $sc_field_3_val_str .= ", ";
          }
          $sc_field_3_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_4_val_str = "''";
   if (!empty($this->sc_field_4))
   {
       if (is_array($this->sc_field_4))
       {
           $Tmp_array = $this->sc_field_4;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_4);
       }
       $sc_field_4_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_4_val_str)
          {
             $sc_field_4_val_str .= ", ";
          }
          $sc_field_4_val_str .= "'$Tmp_val_cmp'";
       }
   }
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

   $this->idcontas_receber = $old_value_idcontas_receber;
   $this->valor_a_receber = $old_value_valor_a_receber;
   $this->desconto = $old_value_desconto;
   $this->desconto_porcento = $old_value_desconto_porcento;
   $this->data_emissao = $old_value_data_emissao;
   $this->data_vencimento = $old_value_data_vencimento;
   $this->sc_field_0 = $old_value_sc_field_0;
   $this->sc_field_1 = $old_value_sc_field_1;
   $this->data_pagamento = $old_value_data_pagamento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_recebimento_pdv_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_recebimento_pdv_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'][] = $rs->fields[0];
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
              $this->NM_ajax_info['fldList']['idcliente']['valList'][$i] = form_recebimento_pdv_mob_pack_protect_string($v);
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

          //----- valor_a_receber
   function ajax_return_values_valor_a_receber($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("valor_a_receber", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->valor_a_receber);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['valor_a_receber'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- desconto
   function ajax_return_values_desconto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("desconto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->desconto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['desconto'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- desconto_porcento
   function ajax_return_values_desconto_porcento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("desconto_porcento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->desconto_porcento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['desconto_porcento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- idforma_pagamento_prevista
   function ajax_return_values_idforma_pagamento_prevista($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idforma_pagamento_prevista", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idforma_pagamento_prevista);
              $aLookup = array();
              $this->_tmp_lookup_idforma_pagamento_prevista = $this->idforma_pagamento_prevista;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_idcontas_receber = $this->idcontas_receber;
   $old_value_valor_a_receber = $this->valor_a_receber;
   $old_value_desconto = $this->desconto;
   $old_value_desconto_porcento = $this->desconto_porcento;
   $old_value_data_emissao = $this->data_emissao;
   $old_value_data_vencimento = $this->data_vencimento;
   $old_value_sc_field_0 = $this->sc_field_0;
   $old_value_sc_field_1 = $this->sc_field_1;
   $old_value_data_pagamento = $this->data_pagamento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idcontas_receber = $this->idcontas_receber;
   $unformatted_value_valor_a_receber = $this->valor_a_receber;
   $unformatted_value_desconto = $this->desconto;
   $unformatted_value_desconto_porcento = $this->desconto_porcento;
   $unformatted_value_data_emissao = $this->data_emissao;
   $unformatted_value_data_vencimento = $this->data_vencimento;
   $unformatted_value_sc_field_0 = $this->sc_field_0;
   $unformatted_value_sc_field_1 = $this->sc_field_1;
   $unformatted_value_data_pagamento = $this->data_pagamento;

   $sc_field_2_val_str = "''";
   if (!empty($this->sc_field_2))
   {
       if (is_array($this->sc_field_2))
       {
           $Tmp_array = $this->sc_field_2;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_2);
       }
       $sc_field_2_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_2_val_str)
          {
             $sc_field_2_val_str .= ", ";
          }
          $sc_field_2_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_3_val_str = "''";
   if (!empty($this->sc_field_3))
   {
       if (is_array($this->sc_field_3))
       {
           $Tmp_array = $this->sc_field_3;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_3);
       }
       $sc_field_3_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_3_val_str)
          {
             $sc_field_3_val_str .= ", ";
          }
          $sc_field_3_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_4_val_str = "''";
   if (!empty($this->sc_field_4))
   {
       if (is_array($this->sc_field_4))
       {
           $Tmp_array = $this->sc_field_4;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_4);
       }
       $sc_field_4_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_4_val_str)
          {
             $sc_field_4_val_str .= ", ";
          }
          $sc_field_4_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT idforma_pagamento, descricao  FROM forma_pagamento  ORDER BY descricao";

   $this->idcontas_receber = $old_value_idcontas_receber;
   $this->valor_a_receber = $old_value_valor_a_receber;
   $this->desconto = $old_value_desconto;
   $this->desconto_porcento = $old_value_desconto_porcento;
   $this->data_emissao = $old_value_data_emissao;
   $this->data_vencimento = $old_value_data_vencimento;
   $this->sc_field_0 = $old_value_sc_field_0;
   $this->sc_field_1 = $old_value_sc_field_1;
   $this->data_pagamento = $old_value_data_pagamento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_recebimento_pdv_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_recebimento_pdv_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'][] = $rs->fields[0];
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
          $sSelComp = "name=\"idforma_pagamento_prevista\"";
          if (isset($this->NM_ajax_info['select_html']['idforma_pagamento_prevista']) && !empty($this->NM_ajax_info['select_html']['idforma_pagamento_prevista']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['idforma_pagamento_prevista']);
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

                  if ($this->idforma_pagamento_prevista == $sValue)
                  {
                      $this->_tmp_lookup_idforma_pagamento_prevista = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['idforma_pagamento_prevista'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['idforma_pagamento_prevista']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['idforma_pagamento_prevista']['valList'][$i] = form_recebimento_pdv_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['idforma_pagamento_prevista']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['idforma_pagamento_prevista']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['idforma_pagamento_prevista']['labList'] = $aLabel;
          }
   }

          //----- data_emissao
   function ajax_return_values_data_emissao($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("data_emissao", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->data_emissao);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['data_emissao'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- data_vencimento
   function ajax_return_values_data_vencimento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("data_vencimento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->data_vencimento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['data_vencimento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sc_field_0
   function ajax_return_values_sc_field_0($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sc_field_0", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sc_field_0);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sc_field_0'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sc_field_1
   function ajax_return_values_sc_field_1($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sc_field_1", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sc_field_1);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['sc_field_1'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- sc_field_3
   function ajax_return_values_sc_field_3($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sc_field_3", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sc_field_3);
              $aLookup = array();
              $this->_tmp_lookup_sc_field_3 = $this->sc_field_3;

$aLookup[] = array(form_recebimento_pdv_mob_pack_protect_string('T') => str_replace('<', '&lt;',form_recebimento_pdv_mob_pack_protect_string("VENCIMENTO FIXO ")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_sc_field_3'][] = 'T';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['sc_field_3']) && !empty($this->NM_ajax_info['select_html']['sc_field_3']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['sc_field_3']);
          }
          $this->NM_ajax_info['fldList']['sc_field_3'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => false,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-sc_field_3',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['sc_field_3']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['sc_field_3']['valList'][$i] = form_recebimento_pdv_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['sc_field_3']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['sc_field_3']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['sc_field_3']['labList'] = $aLabel;
          }
   }

          //----- valor_parcelas
   function ajax_return_values_valor_parcelas($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("valor_parcelas", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->valor_parcelas);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['valor_parcelas'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
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

$aLookup[] = array(form_recebimento_pdv_mob_pack_protect_string('F') => str_replace('<', '&lt;',form_recebimento_pdv_mob_pack_protect_string("A RECEBER")));
$aLookup[] = array(form_recebimento_pdv_mob_pack_protect_string('T') => str_replace('<', '&lt;',form_recebimento_pdv_mob_pack_protect_string("RECEBIDO")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_pago'][] = 'F';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_pago'][] = 'T';
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
              $this->NM_ajax_info['fldList']['pago']['valList'][$i] = form_recebimento_pdv_mob_pack_protect_string($v);
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
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- observacoes
   function ajax_return_values_observacoes($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("observacoes", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->observacoes);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['observacoes'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['upload_dir'][$fieldName][] = $newName;
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
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_idcliente = $this->idcliente;
    $original_valor_a_receber = $this->valor_a_receber;
    $original_valor_parcelas = $this->valor_parcelas;
}
if (!isset($this->sc_temp_v_idorcamento)) {$this->sc_temp_v_idorcamento = (isset($_SESSION['v_idorcamento'])) ? $_SESSION['v_idorcamento'] : "";}
if (!isset($this->sc_temp_v_idtipos_receitas)) {$this->sc_temp_v_idtipos_receitas = (isset($_SESSION['v_idtipos_receitas'])) ? $_SESSION['v_idtipos_receitas'] : "";}
if (!isset($this->sc_temp_v_idgrupos_receitas)) {$this->sc_temp_v_idgrupos_receitas = (isset($_SESSION['v_idgrupos_receitas'])) ? $_SESSION['v_idgrupos_receitas'] : "";}
if (!isset($this->sc_temp_v_valor_a_receber)) {$this->sc_temp_v_valor_a_receber = (isset($_SESSION['v_valor_a_receber'])) ? $_SESSION['v_valor_a_receber'] : "";}
if (!isset($this->sc_temp_v_idcliente)) {$this->sc_temp_v_idcliente = (isset($_SESSION['v_idcliente'])) ? $_SESSION['v_idcliente'] : "";}
  
	$this->idcliente  = $this->sc_temp_v_idcliente;
	$this->competencia  = date('mY');
	$this->valor_a_receber  = $this->sc_temp_v_valor_a_receber;
	$this->valor_original  = $this->valor_a_receber ;
	$this->idgrupos_receitas  = $this->sc_temp_v_idgrupos_receitas;
	$this->idtipos_receitas  = $this->sc_temp_v_idtipos_receitas;
	$this->idorcamento  = $this->sc_temp_v_idorcamento;
	$this->sc_field_2  = 'T';
	$this->sc_field_4  = 'T';



	$this->valor_parcelas  = '1?? R$ '.$this->valor_a_receber ;





if (isset($this->sc_temp_v_idcliente)) { $_SESSION['v_idcliente'] = $this->sc_temp_v_idcliente;}
if (isset($this->sc_temp_v_valor_a_receber)) { $_SESSION['v_valor_a_receber'] = $this->sc_temp_v_valor_a_receber;}
if (isset($this->sc_temp_v_idgrupos_receitas)) { $_SESSION['v_idgrupos_receitas'] = $this->sc_temp_v_idgrupos_receitas;}
if (isset($this->sc_temp_v_idtipos_receitas)) { $_SESSION['v_idtipos_receitas'] = $this->sc_temp_v_idtipos_receitas;}
if (isset($this->sc_temp_v_idorcamento)) { $_SESSION['v_idorcamento'] = $this->sc_temp_v_idorcamento;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_idcliente != $this->idcliente || (isset($bFlagRead_idcliente) && $bFlagRead_idcliente)))
    {
        $this->ajax_return_values_idcliente(true);
    }
    if (($original_valor_a_receber != $this->valor_a_receber || (isset($bFlagRead_valor_a_receber) && $bFlagRead_valor_a_receber)))
    {
        $this->ajax_return_values_valor_a_receber(true);
    }
    if (($original_valor_parcelas != $this->valor_parcelas || (isset($bFlagRead_valor_parcelas) && $bFlagRead_valor_parcelas)))
    {
        $this->ajax_return_values_valor_parcelas(true);
    }
}
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off'; 
      }
      if (empty($this->data_insercao))
      {
          $this->data_insercao_hora = $this->data_insercao;
      }
      if (empty($this->data_alteracao))
      {
          $this->data_alteracao_hora = $this->data_alteracao;
      }
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
      $this->valor_a_receber = str_replace($sc_parm1, $sc_parm2, $this->valor_a_receber); 
      $this->desconto = str_replace($sc_parm1, $sc_parm2, $this->desconto); 
      $this->desconto_porcento = str_replace($sc_parm1, $sc_parm2, $this->desconto_porcento); 
      $this->valor_recebido = str_replace($sc_parm1, $sc_parm2, $this->valor_recebido); 
      $this->juros = str_replace($sc_parm1, $sc_parm2, $this->juros); 
      $this->taxa_administrativa = str_replace($sc_parm1, $sc_parm2, $this->taxa_administrativa); 
      $this->troco = str_replace($sc_parm1, $sc_parm2, $this->troco); 
      $this->valor_original = str_replace($sc_parm1, $sc_parm2, $this->valor_original); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->valor_a_receber = "'" . $this->valor_a_receber . "'";
      $this->desconto = "'" . $this->desconto . "'";
      $this->desconto_porcento = "'" . $this->desconto_porcento . "'";
      $this->valor_recebido = "'" . $this->valor_recebido . "'";
      $this->juros = "'" . $this->juros . "'";
      $this->taxa_administrativa = "'" . $this->taxa_administrativa . "'";
      $this->troco = "'" . $this->troco . "'";
      $this->valor_original = "'" . $this->valor_original . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->valor_a_receber = str_replace("'", "", $this->valor_a_receber); 
      $this->desconto = str_replace("'", "", $this->desconto); 
      $this->desconto_porcento = str_replace("'", "", $this->desconto_porcento); 
      $this->valor_recebido = str_replace("'", "", $this->valor_recebido); 
      $this->juros = str_replace("'", "", $this->juros); 
      $this->taxa_administrativa = str_replace("'", "", $this->taxa_administrativa); 
      $this->troco = str_replace("'", "", $this->troco); 
      $this->valor_original = str_replace("'", "", $this->valor_original); 
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
      $_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_idcontas_receber = $this->idcontas_receber;
}
              /* recebimento_parcial */
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM recebimento_parcial WHERE idcontas_receber = " . $this->idcontas_receber ;
      }
      else
      {
          $sc_cmd_dependency = "SELECT COUNT(*) AS countTest FROM recebimento_parcial WHERE idcontas_receber = " . $this->idcontas_receber ;
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
   $sErrorIndex = 'geral_form_recebimento_pdv_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_recebimento_pdv_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "" . $this->Ini->Nm_lang['lang_errm_dele_rhcr'] . "";
 }
;
      }
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_idcontas_receber != $this->idcontas_receber || (isset($bFlagRead_idcontas_receber) && $bFlagRead_idcontas_receber)))
    {
        $this->ajax_return_values_idcontas_receber(true);
    }
}
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off'; 
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
      $NM_val_form['idcontas_receber'] = $this->idcontas_receber;
      $NM_val_form['idcliente'] = $this->idcliente;
      $NM_val_form['valor_a_receber'] = $this->valor_a_receber;
      $NM_val_form['desconto'] = $this->desconto;
      $NM_val_form['desconto_porcento'] = $this->desconto_porcento;
      $NM_val_form['idforma_pagamento_prevista'] = $this->idforma_pagamento_prevista;
      $NM_val_form['data_emissao'] = $this->data_emissao;
      $NM_val_form['data_vencimento'] = $this->data_vencimento;
      $NM_val_form['sc_field_0'] = $this->sc_field_0;
      $NM_val_form['sc_field_1'] = $this->sc_field_1;
      $NM_val_form['sc_field_3'] = $this->sc_field_3;
      $NM_val_form['valor_parcelas'] = $this->valor_parcelas;
      $NM_val_form['pago'] = $this->pago;
      $NM_val_form['data_pagamento'] = $this->data_pagamento;
      $NM_val_form['observacoes'] = $this->observacoes;
      $NM_val_form['idforma_pagamento'] = $this->idforma_pagamento;
      $NM_val_form['idgrupos_receitas'] = $this->idgrupos_receitas;
      $NM_val_form['idtipos_receitas'] = $this->idtipos_receitas;
      $NM_val_form['idorcamento'] = $this->idorcamento;
      $NM_val_form['idnota_fiscal'] = $this->idnota_fiscal;
      $NM_val_form['numero_conta'] = $this->numero_conta;
      $NM_val_form['valor_recebido'] = $this->valor_recebido;
      $NM_val_form['situacao'] = $this->situacao;
      $NM_val_form['juros'] = $this->juros;
      $NM_val_form['competencia'] = $this->competencia;
      $NM_val_form['data_insercao'] = $this->data_insercao;
      $NM_val_form['data_alteracao'] = $this->data_alteracao;
      $NM_val_form['taxa_administrativa'] = $this->taxa_administrativa;
      $NM_val_form['troco'] = $this->troco;
      $NM_val_form['sc_field_2'] = $this->sc_field_2;
      $NM_val_form['sc_field_4'] = $this->sc_field_4;
      $NM_val_form['valor_original'] = $this->valor_original;
      if ($this->idcontas_receber === "" || is_null($this->idcontas_receber))  
      { 
          $this->idcontas_receber = 0;
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
      if ($this->idgrupos_receitas === "" || is_null($this->idgrupos_receitas))  
      { 
          $this->idgrupos_receitas = 0;
          $this->sc_force_zero[] = 'idgrupos_receitas';
      } 
      if ($this->idtipos_receitas === "" || is_null($this->idtipos_receitas))  
      { 
          $this->idtipos_receitas = 0;
          $this->sc_force_zero[] = 'idtipos_receitas';
      } 
      if ($this->idorcamento === "" || is_null($this->idorcamento))  
      { 
          $this->idorcamento = 0;
          $this->sc_force_zero[] = 'idorcamento';
      } 
      if ($this->idnota_fiscal === "" || is_null($this->idnota_fiscal))  
      { 
          $this->idnota_fiscal = 0;
          $this->sc_force_zero[] = 'idnota_fiscal';
      } 
      if ($this->valor_a_receber === "" || is_null($this->valor_a_receber))  
      { 
          $this->valor_a_receber = 0;
          $this->sc_force_zero[] = 'valor_a_receber';
      } 
      if ($this->valor_recebido === "" || is_null($this->valor_recebido))  
      { 
          $this->valor_recebido = 0;
          $this->sc_force_zero[] = 'valor_recebido';
      } 
      if ($this->juros === "" || is_null($this->juros))  
      { 
          $this->juros = 0;
          $this->sc_force_zero[] = 'juros';
      } 
      if ($this->nmgp_opcao == "alterar")
      {
      }
      if ($this->taxa_administrativa === "" || is_null($this->taxa_administrativa))  
      { 
          $this->taxa_administrativa = 0;
          $this->sc_force_zero[] = 'taxa_administrativa';
      } 
      if ($this->troco === "" || is_null($this->troco))  
      { 
          $this->troco = 0;
          $this->sc_force_zero[] = 'troco';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_ibase, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite);
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->numero_conta_before_qstr = $this->numero_conta;
          $this->numero_conta = substr($this->Db->qstr($this->numero_conta), 1, -1); 
          if ($this->numero_conta == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->numero_conta = "null"; 
              $NM_val_null[] = "numero_conta";
          } 
          if ($this->data_emissao == "")  
          { 
              $this->data_emissao = "null"; 
              $NM_val_null[] = "data_emissao";
          } 
          if ($this->data_vencimento == "")  
          { 
              $this->data_vencimento = "null"; 
              $NM_val_null[] = "data_vencimento";
          } 
          if ($this->data_pagamento == "")  
          { 
              $this->data_pagamento = "null"; 
              $NM_val_null[] = "data_pagamento";
          } 
          $this->pago_before_qstr = $this->pago;
          $this->pago = substr($this->Db->qstr($this->pago), 1, -1); 
          if ($this->pago == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pago = "null"; 
              $NM_val_null[] = "pago";
          } 
          $this->observacoes_before_qstr = $this->observacoes;
          $this->observacoes = substr($this->Db->qstr($this->observacoes), 1, -1); 
          if ($this->observacoes == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->observacoes = "null"; 
              $NM_val_null[] = "observacoes";
          } 
          if ($this->situacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->situacao = "null"; 
              $NM_val_null[] = "situacao";
          } 
          $this->competencia_before_qstr = $this->competencia;
          $this->competencia = substr($this->Db->qstr($this->competencia), 1, -1); 
          if ($this->competencia == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->competencia = "null"; 
              $NM_val_null[] = "competencia";
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
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_recebimento_pdv_mob_pack_ajax_response();
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
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento_prevista = $this->idforma_pagamento_prevista, data_emissao = '$this->data_emissao', data_vencimento = '$this->data_vencimento', valor_a_receber = $this->valor_a_receber, data_pagamento = '$this->data_pagamento', pago = '$this->pago', observacoes = '$this->observacoes'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento_prevista = $this->idforma_pagamento_prevista, data_emissao = '$this->data_emissao', data_vencimento = '$this->data_vencimento', valor_a_receber = $this->valor_a_receber, data_pagamento = '$this->data_pagamento', pago = '$this->pago', observacoes = '$this->observacoes'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento_prevista = $this->idforma_pagamento_prevista, data_emissao = '$this->data_emissao', data_vencimento = '$this->data_vencimento', valor_a_receber = $this->valor_a_receber, data_pagamento = '$this->data_pagamento', pago = '$this->pago'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idforma_pagamento_prevista = $this->idforma_pagamento_prevista, data_emissao = '$this->data_emissao', data_vencimento = '$this->data_vencimento', valor_a_receber = $this->valor_a_receber, data_pagamento = '$this->data_pagamento', pago = '$this->pago', observacoes = '$this->observacoes'"; 
              } 
              if (isset($NM_val_form['idforma_pagamento']) && $NM_val_form['idforma_pagamento'] != $this->nmgp_dados_select['idforma_pagamento']) 
              { 
                  $SC_fields_update[] = "idforma_pagamento = $this->idforma_pagamento"; 
              } 
              if (isset($NM_val_form['idgrupos_receitas']) && $NM_val_form['idgrupos_receitas'] != $this->nmgp_dados_select['idgrupos_receitas']) 
              { 
                  $SC_fields_update[] = "idgrupos_receitas = $this->idgrupos_receitas"; 
              } 
              if (isset($NM_val_form['idtipos_receitas']) && $NM_val_form['idtipos_receitas'] != $this->nmgp_dados_select['idtipos_receitas']) 
              { 
                  $SC_fields_update[] = "idtipos_receitas = $this->idtipos_receitas"; 
              } 
              if (isset($NM_val_form['idorcamento']) && $NM_val_form['idorcamento'] != $this->nmgp_dados_select['idorcamento']) 
              { 
                  $SC_fields_update[] = "idorcamento = $this->idorcamento"; 
              } 
              if (isset($NM_val_form['idnota_fiscal']) && $NM_val_form['idnota_fiscal'] != $this->nmgp_dados_select['idnota_fiscal']) 
              { 
                  $SC_fields_update[] = "idnota_fiscal = $this->idnota_fiscal"; 
              } 
              if (isset($NM_val_form['numero_conta']) && $NM_val_form['numero_conta'] != $this->nmgp_dados_select['numero_conta']) 
              { 
                  $SC_fields_update[] = "numero_conta = '$this->numero_conta'"; 
              } 
              if (isset($NM_val_form['valor_recebido']) && $NM_val_form['valor_recebido'] != $this->nmgp_dados_select['valor_recebido']) 
              { 
                  $SC_fields_update[] = "valor_recebido = $this->valor_recebido"; 
              } 
              if (isset($NM_val_form['situacao']) && $NM_val_form['situacao'] != $this->nmgp_dados_select['situacao']) 
              { 
                  $SC_fields_update[] = "situacao = '$this->situacao'"; 
              } 
              if (isset($NM_val_form['juros']) && $NM_val_form['juros'] != $this->nmgp_dados_select['juros']) 
              { 
                  $SC_fields_update[] = "juros = $this->juros"; 
              } 
              if (isset($NM_val_form['competencia']) && $NM_val_form['competencia'] != $this->nmgp_dados_select['competencia']) 
              { 
                  $SC_fields_update[] = "competencia = '$this->competencia'"; 
              } 
              if (isset($NM_val_form['data_insercao']) && $NM_val_form['data_insercao'] != $this->nmgp_dados_select['data_insercao']) 
              { 
                  $SC_fields_update[] = "data_insercao = '$this->data_insercao'"; 
              } 
              if (isset($NM_val_form['data_alteracao']) && $NM_val_form['data_alteracao'] != $this->nmgp_dados_select['data_alteracao']) 
              { 
                  $SC_fields_update[] = "data_alteracao = '$this->data_alteracao'"; 
              } 
              if (isset($NM_val_form['taxa_administrativa']) && $NM_val_form['taxa_administrativa'] != $this->nmgp_dados_select['taxa_administrativa']) 
              { 
                  $SC_fields_update[] = "taxa_administrativa = $this->taxa_administrativa"; 
              } 
              if (isset($NM_val_form['troco']) && $NM_val_form['troco'] != $this->nmgp_dados_select['troco']) 
              { 
                  $SC_fields_update[] = "troco = $this->troco"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE idcontas_receber = $this->idcontas_receber ";  
              }  
              else  
              {
                  $comando .= " WHERE idcontas_receber = $this->idcontas_receber ";  
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
                                  form_recebimento_pdv_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->numero_conta = $this->numero_conta_before_qstr;
              $this->pago = $this->pago_before_qstr;
              $this->observacoes = $this->observacoes_before_qstr;
              $this->competencia = $this->competencia_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if (isset($NM_val_form['observacoes']) && $NM_val_form['observacoes'] != $this->nmgp_dados_select['observacoes']) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  observacoes , $this->observacoes,  \"idcontas_receber = $this->idcontas_receber\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "observacoes", $this->observacoes,  "idcontas_receber = $this->idcontas_receber"); 
                      if ($rs === false) 
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_recebimento_pdv_mob_pack_ajax_response();
                          }
                          exit;  
                      }   
                  }   
              }   
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['idcontas_receber'])) { $this->idcontas_receber = $NM_val_form['idcontas_receber']; }
              elseif (isset($this->idcontas_receber)) { $this->nm_limpa_alfa($this->idcontas_receber); }
              if     (isset($NM_val_form) && isset($NM_val_form['idcliente'])) { $this->idcliente = $NM_val_form['idcliente']; }
              elseif (isset($this->idcliente)) { $this->nm_limpa_alfa($this->idcliente); }
              if     (isset($NM_val_form) && isset($NM_val_form['idforma_pagamento_prevista'])) { $this->idforma_pagamento_prevista = $NM_val_form['idforma_pagamento_prevista']; }
              elseif (isset($this->idforma_pagamento_prevista)) { $this->nm_limpa_alfa($this->idforma_pagamento_prevista); }
              if     (isset($NM_val_form) && isset($NM_val_form['valor_a_receber'])) { $this->valor_a_receber = $NM_val_form['valor_a_receber']; }
              elseif (isset($this->valor_a_receber)) { $this->nm_limpa_alfa($this->valor_a_receber); }
              if     (isset($NM_val_form) && isset($NM_val_form['pago'])) { $this->pago = $NM_val_form['pago']; }
              elseif (isset($this->pago)) { $this->nm_limpa_alfa($this->pago); }
              if     (isset($NM_val_form) && isset($NM_val_form['observacoes'])) { $this->observacoes = $NM_val_form['observacoes']; }
              elseif (isset($this->observacoes)) { $this->nm_limpa_alfa($this->observacoes); }

              $this->nm_formatar_campos();

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('idcontas_receber', 'idcliente', 'valor_a_receber', 'desconto', 'desconto_porcento', 'idforma_pagamento_prevista', 'data_emissao', 'data_vencimento', 'sc_field_0', 'sc_field_1', 'sc_field_3', 'valor_parcelas', 'pago', 'data_pagamento', 'observacoes'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "idcontas_receber, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_recebimento_pdv_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $compl_insert     = ""; 
                  $compl_insert_val = ""; 
                  if ($this->data_insercao != "")
                  { 
                       $compl_insert     .= ", data_insercao";
                       $compl_insert_val .= ", '$this->data_insercao'";
                  } 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (idcliente, idforma_pagamento_prevista, idforma_pagamento, idgrupos_receitas, idtipos_receitas, idorcamento, idnota_fiscal, numero_conta, data_emissao, data_vencimento, valor_a_receber, data_pagamento, valor_recebido, pago, observacoes, situacao, juros, competencia, data_alteracao, taxa_administrativa, troco $compl_insert) VALUES ($this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idgrupos_receitas, $this->idtipos_receitas, $this->idorcamento, $this->idnota_fiscal, '$this->numero_conta', '$this->data_emissao', '$this->data_vencimento', $this->valor_a_receber, '$this->data_pagamento', $this->valor_recebido, '$this->pago', '$this->observacoes', '$this->situacao', $this->juros, '$this->competencia', '$this->data_alteracao', $this->taxa_administrativa, $this->troco $compl_insert_val)"; 
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
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idforma_pagamento_prevista, idforma_pagamento, idgrupos_receitas, idtipos_receitas, idorcamento, idnota_fiscal, numero_conta, data_emissao, data_vencimento, valor_a_receber, data_pagamento, valor_recebido, pago, observacoes, situacao, juros, competencia, data_alteracao, taxa_administrativa, troco $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idgrupos_receitas, $this->idtipos_receitas, $this->idorcamento, $this->idnota_fiscal, '$this->numero_conta', '$this->data_emissao', '$this->data_vencimento', $this->valor_a_receber, '$this->data_pagamento', $this->valor_recebido, '$this->pago', '', '$this->situacao', $this->juros, '$this->competencia', '$this->data_alteracao', $this->taxa_administrativa, $this->troco $compl_insert_val)"; 
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
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idforma_pagamento_prevista, idforma_pagamento, idgrupos_receitas, idtipos_receitas, idorcamento, idnota_fiscal, numero_conta, data_emissao, data_vencimento, valor_a_receber, data_pagamento, valor_recebido, pago, observacoes, situacao, juros, competencia, data_alteracao, taxa_administrativa, troco $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idgrupos_receitas, $this->idtipos_receitas, $this->idorcamento, $this->idnota_fiscal, '$this->numero_conta', '$this->data_emissao', '$this->data_vencimento', $this->valor_a_receber, '$this->data_pagamento', $this->valor_recebido, '$this->pago', '', '$this->situacao', $this->juros, '$this->competencia', '$this->data_alteracao', $this->taxa_administrativa, $this->troco $compl_insert_val)"; 
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
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idforma_pagamento_prevista, idforma_pagamento, idgrupos_receitas, idtipos_receitas, idorcamento, idnota_fiscal, numero_conta, data_emissao, data_vencimento, valor_a_receber, data_pagamento, valor_recebido, pago, observacoes, situacao, juros, competencia, data_alteracao, taxa_administrativa, troco $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idgrupos_receitas, $this->idtipos_receitas, $this->idorcamento, $this->idnota_fiscal, '$this->numero_conta', '$this->data_emissao', '$this->data_vencimento', $this->valor_a_receber, '$this->data_pagamento', $this->valor_recebido, '$this->pago', '', '$this->situacao', $this->juros, '$this->competencia', '$this->data_alteracao', $this->taxa_administrativa, $this->troco $compl_insert_val)"; 
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
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idforma_pagamento_prevista, idforma_pagamento, idgrupos_receitas, idtipos_receitas, idorcamento, idnota_fiscal, numero_conta, data_emissao, data_vencimento, valor_a_receber, data_pagamento, valor_recebido, pago, observacoes, situacao, juros, competencia, data_alteracao, taxa_administrativa, troco $compl_insert) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idforma_pagamento_prevista, $this->idforma_pagamento, $this->idgrupos_receitas, $this->idtipos_receitas, $this->idorcamento, $this->idnota_fiscal, '$this->numero_conta', '$this->data_emissao', '$this->data_vencimento', $this->valor_a_receber, '$this->data_pagamento', $this->valor_recebido, '$this->pago', '$this->observacoes', '$this->situacao', $this->juros, '$this->competencia', '$this->data_alteracao', $this->taxa_administrativa, $this->troco $compl_insert_val)"; 
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
                              form_recebimento_pdv_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_recebimento_pdv_mob_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->idcontas_receber =  $rsy->fields[0];
                 $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_id()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->idcontas_receber = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select CURRVAL('')"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->idcontas_receber = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select gen_id(, 0) from " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->idcontas_receber = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select last_insert_rowid()"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->idcontas_receber = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              $this->numero_conta = $this->numero_conta_before_qstr;
              $this->pago = $this->pago_before_qstr;
              $this->observacoes = $this->observacoes_before_qstr;
              $this->competencia = $this->competencia_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if (trim($this->observacoes ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  observacoes , $this->observacoes,  \"idcontas_receber = $this->idcontas_receber\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "observacoes", $this->observacoes,  "idcontas_receber = $this->idcontas_receber"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_recebimento_pdv_mob_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
              }  
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->numero_conta = $this->numero_conta_before_qstr;
              $this->pago = $this->pago_before_qstr;
              $this->observacoes = $this->observacoes_before_qstr;
              $this->competencia = $this->competencia_before_qstr;
              $this->sc_insert_on = true; 
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->idcontas_receber = substr($this->Db->qstr($this->idcontas_receber), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idcontas_receber = $this->idcontas_receber "); 
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
                          form_recebimento_pdv_mob_pack_ajax_response();
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total']);
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
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['parms'] = "idcontas_receber?#?$this->idcontas_receber?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->idcontas_receber = null === $this->idcontas_receber ? null : substr($this->Db->qstr($this->idcontas_receber), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          $nmgp_select = "SELECT idcontas_receber, idcliente, idforma_pagamento_prevista, idforma_pagamento, idgrupos_receitas, idtipos_receitas, idorcamento, idnota_fiscal, numero_conta, data_emissao, data_vencimento, valor_a_receber, data_pagamento, valor_recebido, pago, observacoes, situacao, juros, competencia, data_insercao, data_alteracao, taxa_administrativa, troco from " . $this->Ini->nm_tabela ; 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "idcontas_receber = $this->idcontas_receber"; 
              }  
              else  
              {
                  $aWhere[] = "idcontas_receber = $this->idcontas_receber"; 
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
          $sc_order_by = "idcontas_receber";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start']) ;  
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['Salvar'] = $this->nmgp_botoes['Salvar'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter'] = true;
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
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              $this->NM_ajax_info['buttonDisplay']['Salvar'] = $this->nmgp_botoes['Salvar'] = "on";
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->idcontas_receber = $rs->fields[0] ; 
              $this->nmgp_dados_select['idcontas_receber'] = $this->idcontas_receber;
              $this->idcliente = $rs->fields[1] ; 
              $this->nmgp_dados_select['idcliente'] = $this->idcliente;
              $this->idforma_pagamento_prevista = $rs->fields[2] ; 
              $this->nmgp_dados_select['idforma_pagamento_prevista'] = $this->idforma_pagamento_prevista;
              $this->idforma_pagamento = $rs->fields[3] ; 
              $this->nmgp_dados_select['idforma_pagamento'] = $this->idforma_pagamento;
              $this->idgrupos_receitas = $rs->fields[4] ; 
              $this->nmgp_dados_select['idgrupos_receitas'] = $this->idgrupos_receitas;
              $this->idtipos_receitas = $rs->fields[5] ; 
              $this->nmgp_dados_select['idtipos_receitas'] = $this->idtipos_receitas;
              $this->idorcamento = $rs->fields[6] ; 
              $this->nmgp_dados_select['idorcamento'] = $this->idorcamento;
              $this->idnota_fiscal = $rs->fields[7] ; 
              $this->nmgp_dados_select['idnota_fiscal'] = $this->idnota_fiscal;
              $this->numero_conta = $rs->fields[8] ; 
              $this->nmgp_dados_select['numero_conta'] = $this->numero_conta;
              $this->data_emissao = $rs->fields[9] ; 
              if (substr($this->data_emissao, 10, 1) == "-") 
              { 
                 $this->data_emissao = substr($this->data_emissao, 0, 10) . " " . substr($this->data_emissao, 11);
              } 
              if (substr($this->data_emissao, 13, 1) == ".") 
              { 
                 $this->data_emissao = substr($this->data_emissao, 0, 13) . ":" . substr($this->data_emissao, 14, 2) . ":" . substr($this->data_emissao, 17);
              } 
              $this->nmgp_dados_select['data_emissao'] = $this->data_emissao;
              $this->data_vencimento = $rs->fields[10] ; 
              if (substr($this->data_vencimento, 10, 1) == "-") 
              { 
                 $this->data_vencimento = substr($this->data_vencimento, 0, 10) . " " . substr($this->data_vencimento, 11);
              } 
              if (substr($this->data_vencimento, 13, 1) == ".") 
              { 
                 $this->data_vencimento = substr($this->data_vencimento, 0, 13) . ":" . substr($this->data_vencimento, 14, 2) . ":" . substr($this->data_vencimento, 17);
              } 
              $this->nmgp_dados_select['data_vencimento'] = $this->data_vencimento;
              $this->valor_a_receber = $rs->fields[11] ; 
              $this->nmgp_dados_select['valor_a_receber'] = $this->valor_a_receber;
              $this->data_pagamento = $rs->fields[12] ; 
              if (substr($this->data_pagamento, 10, 1) == "-") 
              { 
                 $this->data_pagamento = substr($this->data_pagamento, 0, 10) . " " . substr($this->data_pagamento, 11);
              } 
              if (substr($this->data_pagamento, 13, 1) == ".") 
              { 
                 $this->data_pagamento = substr($this->data_pagamento, 0, 13) . ":" . substr($this->data_pagamento, 14, 2) . ":" . substr($this->data_pagamento, 17);
              } 
              $this->nmgp_dados_select['data_pagamento'] = $this->data_pagamento;
              $this->valor_recebido = $rs->fields[13] ; 
              $this->nmgp_dados_select['valor_recebido'] = $this->valor_recebido;
              $this->pago = $rs->fields[14] ; 
              $this->nmgp_dados_select['pago'] = $this->pago;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->observacoes = $this->Db->BlobDecode($rs->fields[15]) ; 
              } 
              else
              { 
                  $this->observacoes = $rs->fields[15] ; 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $this->observacoes = str_replace(array('\r', '\n'), array("\r", "\n"), $this->observacoes);
              }
              $this->nmgp_dados_select['observacoes'] = $this->observacoes;
              $this->situacao = $rs->fields[16] ; 
              $this->nmgp_dados_select['situacao'] = $this->situacao;
              $this->juros = $rs->fields[17] ; 
              $this->nmgp_dados_select['juros'] = $this->juros;
              $this->competencia = $rs->fields[18] ; 
              $this->nmgp_dados_select['competencia'] = $this->competencia;
              $this->data_insercao = $rs->fields[19] ; 
              if (substr($this->data_insercao, 10, 1) == "-") 
              { 
                 $this->data_insercao = substr($this->data_insercao, 0, 10) . " " . substr($this->data_insercao, 11);
              } 
              if (substr($this->data_insercao, 13, 1) == ".") 
              { 
                 $this->data_insercao = substr($this->data_insercao, 0, 13) . ":" . substr($this->data_insercao, 14, 2) . ":" . substr($this->data_insercao, 17);
              } 
              $this->nmgp_dados_select['data_insercao'] = $this->data_insercao;
              $this->data_alteracao = $rs->fields[20] ; 
              if (substr($this->data_alteracao, 10, 1) == "-") 
              { 
                 $this->data_alteracao = substr($this->data_alteracao, 0, 10) . " " . substr($this->data_alteracao, 11);
              } 
              if (substr($this->data_alteracao, 13, 1) == ".") 
              { 
                 $this->data_alteracao = substr($this->data_alteracao, 0, 13) . ":" . substr($this->data_alteracao, 14, 2) . ":" . substr($this->data_alteracao, 17);
              } 
              $this->nmgp_dados_select['data_alteracao'] = $this->data_alteracao;
              $this->taxa_administrativa = $rs->fields[21] ; 
              $this->nmgp_dados_select['taxa_administrativa'] = $this->taxa_administrativa;
              $this->troco = $rs->fields[22] ; 
              $this->nmgp_dados_select['troco'] = $this->troco;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->idcontas_receber = (string)$this->idcontas_receber; 
              $this->idcliente = (string)$this->idcliente; 
              $this->idforma_pagamento_prevista = (string)$this->idforma_pagamento_prevista; 
              $this->idforma_pagamento = (string)$this->idforma_pagamento; 
              $this->idgrupos_receitas = (string)$this->idgrupos_receitas; 
              $this->idtipos_receitas = (string)$this->idtipos_receitas; 
              $this->idorcamento = (string)$this->idorcamento; 
              $this->idnota_fiscal = (string)$this->idnota_fiscal; 
              $this->valor_a_receber = (string)$this->valor_a_receber; 
              $this->valor_recebido = (string)$this->valor_recebido; 
              $this->juros = (string)$this->juros; 
              $this->taxa_administrativa = (string)$this->taxa_administrativa; 
              $this->troco = (string)$this->troco; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['parms'] = "idcontas_receber?#?$this->idcontas_receber?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['reg_start'] < $qt_geral_reg_form_recebimento_pdv_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao']   = '';
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
              $this->idcontas_receber = "";  
              $this->nmgp_dados_form["idcontas_receber"] = $this->idcontas_receber;
              $this->idcliente = "";  
              $this->nmgp_dados_form["idcliente"] = $this->idcliente;
              $this->idforma_pagamento_prevista = "";  
              $this->nmgp_dados_form["idforma_pagamento_prevista"] = $this->idforma_pagamento_prevista;
              $this->idforma_pagamento = "";  
              $this->nmgp_dados_form["idforma_pagamento"] = $this->idforma_pagamento;
              $this->idgrupos_receitas = "";  
              $this->nmgp_dados_form["idgrupos_receitas"] = $this->idgrupos_receitas;
              $this->idtipos_receitas = "";  
              $this->nmgp_dados_form["idtipos_receitas"] = $this->idtipos_receitas;
              $this->idorcamento = "";  
              $this->nmgp_dados_form["idorcamento"] = $this->idorcamento;
              $this->idnota_fiscal = "";  
              $this->nmgp_dados_form["idnota_fiscal"] = $this->idnota_fiscal;
              $this->numero_conta = "";  
              $this->nmgp_dados_form["numero_conta"] = $this->numero_conta;
              $this->data_emissao =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->nmgp_dados_form["data_emissao"] = $this->data_emissao;
              $this->data_vencimento =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->nmgp_dados_form["data_vencimento"] = $this->data_vencimento;
              $this->valor_a_receber = "";  
              $this->nmgp_dados_form["valor_a_receber"] = $this->valor_a_receber;
              $this->data_pagamento = "";  
              $this->data_pagamento_hora = "" ;  
              $this->nmgp_dados_form["data_pagamento"] = $this->data_pagamento;
              $this->valor_recebido = "";  
              $this->nmgp_dados_form["valor_recebido"] = $this->valor_recebido;
              $this->pago = "";  
              $this->nmgp_dados_form["pago"] = $this->pago;
              $this->observacoes = "";  
              $this->nmgp_dados_form["observacoes"] = $this->observacoes;
              $this->situacao = "";  
              $this->nmgp_dados_form["situacao"] = $this->situacao;
              $this->juros = "";  
              $this->nmgp_dados_form["juros"] = $this->juros;
              $this->competencia = "";  
              $this->nmgp_dados_form["competencia"] = $this->competencia;
              $this->data_insercao = "";  
              $this->data_insercao_hora = "" ;  
              $this->nmgp_dados_form["data_insercao"] = $this->data_insercao;
              $this->data_alteracao = "";  
              $this->data_alteracao_hora = "" ;  
              $this->nmgp_dados_form["data_alteracao"] = $this->data_alteracao;
              $this->taxa_administrativa = "";  
              $this->nmgp_dados_form["taxa_administrativa"] = $this->taxa_administrativa;
              $this->troco = "";  
              $this->nmgp_dados_form["troco"] = $this->troco;
              $this->sc_field_0 = "1";  
              $this->nmgp_dados_form["sc_field_0"] = $this->sc_field_0;
              $this->sc_field_1 = "30";  
              $this->nmgp_dados_form["sc_field_1"] = $this->sc_field_1;
              $this->sc_field_2 = "";  
              $this->nmgp_dados_form["sc_field_2"] = $this->sc_field_2;
              $this->sc_field_3 = "";  
              $this->nmgp_dados_form["sc_field_3"] = $this->sc_field_3;
              $this->sc_field_4 = "";  
              $this->nmgp_dados_form["sc_field_4"] = $this->sc_field_4;
              $this->valor_parcelas = "";  
              $this->nmgp_dados_form["valor_parcelas"] = $this->valor_parcelas;
              $this->desconto = "";  
              $this->nmgp_dados_form["desconto"] = $this->desconto;
              $this->desconto_porcento = "";  
              $this->nmgp_dados_form["desconto_porcento"] = $this->desconto_porcento;
              $this->valor_original = "";  
              $this->nmgp_dados_form["valor_original"] = $this->valor_original;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['foreign_key'] as $sFKName => $sFKValue)
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function DESCONTO_PORCENTO_onBlur()
{
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_v_valor_a_receber)) {$this->sc_temp_v_valor_a_receber = (isset($_SESSION['v_valor_a_receber'])) ? $_SESSION['v_valor_a_receber'] : "";}
  
$original_desconto_porcento = $this->desconto_porcento;
$original_desconto = $this->desconto;
$original_valor_a_receber = $this->valor_a_receber;
$original_sc_field_0 = $this->sc_field_0;
$original_valor_parcelas = $this->valor_parcelas;

$v_receber = $this->sc_temp_v_valor_a_receber;
$p_desconto = $this->desconto_porcento ;
$v_desconto = $this->desconto ;

$v_desconto = ($v_receber * ($p_desconto / 100));
$v_novo_a_receber = ($v_receber - $v_desconto);

$this->valor_a_receber  = $v_novo_a_receber;
$this->desconto  = $v_desconto;

$xValorParcela =  round(($this->valor_a_receber  / $this->sc_field_0 ),2)   ;
	
$xValorArredondamento =  $this->valor_a_receber  - ($xValorParcela * $this->sc_field_0 )  ;

$this->valor_parcelas  = '';

for ($i = 1; $i <= $this->sc_field_0 ; $i++) {
	
	$xValorParcelaArredondada = $xValorParcela + ($xValorArredondamento);
	
	$this->valor_parcelas  = $this->valor_parcelas .$i.'??R$ '.sprintf('%.2f', $xValorParcelaArredondada).'   -   ';
	
	$xValorArredondamento = 0;
	
}


if (isset($this->sc_temp_v_valor_a_receber)) { $_SESSION['v_valor_a_receber'] = $this->sc_temp_v_valor_a_receber;}
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off';
$modificado_desconto_porcento = $this->desconto_porcento;
$modificado_desconto = $this->desconto;
$modificado_valor_a_receber = $this->valor_a_receber;
$modificado_sc_field_0 = $this->sc_field_0;
$modificado_valor_parcelas = $this->valor_parcelas;
$this->nm_formatar_campos('desconto_porcento', 'desconto', 'valor_a_receber', 'sc_field_0', 'valor_parcelas');
if ($original_desconto_porcento !== $modificado_desconto_porcento || isset($this->nmgp_cmp_readonly['desconto_porcento']) || (isset($bFlagRead_desconto_porcento) && $bFlagRead_desconto_porcento))
{
    $this->ajax_return_values_desconto_porcento(true);
}
if ($original_desconto !== $modificado_desconto || isset($this->nmgp_cmp_readonly['desconto']) || (isset($bFlagRead_desconto) && $bFlagRead_desconto))
{
    $this->ajax_return_values_desconto(true);
}
if ($original_valor_a_receber !== $modificado_valor_a_receber || isset($this->nmgp_cmp_readonly['valor_a_receber']) || (isset($bFlagRead_valor_a_receber) && $bFlagRead_valor_a_receber))
{
    $this->ajax_return_values_valor_a_receber(true);
}
if ($original_sc_field_0 !== $modificado_sc_field_0 || isset($this->nmgp_cmp_readonly['sc_field_0']) || (isset($bFlagRead_sc_field_0) && $bFlagRead_sc_field_0))
{
    $this->ajax_return_values_sc_field_0(true);
}
if ($original_valor_parcelas !== $modificado_valor_parcelas || isset($this->nmgp_cmp_readonly['valor_parcelas']) || (isset($bFlagRead_valor_parcelas) && $bFlagRead_valor_parcelas))
{
    $this->ajax_return_values_valor_parcelas(true);
}
$this->NM_ajax_info['event_field'] = 'DESCONTO';
form_recebimento_pdv_mob_pack_ajax_response();
exit;
}
function DESCONTO_onBlur()
{
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_v_valor_a_receber)) {$this->sc_temp_v_valor_a_receber = (isset($_SESSION['v_valor_a_receber'])) ? $_SESSION['v_valor_a_receber'] : "";}
  
$original_desconto_porcento = $this->desconto_porcento;
$original_desconto = $this->desconto;
$original_valor_a_receber = $this->valor_a_receber;
$original_sc_field_0 = $this->sc_field_0;
$original_valor_parcelas = $this->valor_parcelas;

$v_receber = $this->sc_temp_v_valor_a_receber;
$p_desconto = $this->desconto_porcento ;
$v_desconto = $this->desconto ;

$p_desconto = (($v_desconto * 100) / $v_receber);
$v_novo_a_receber = ($v_receber - $v_desconto);

$this->valor_a_receber  = $v_novo_a_receber;
$this->desconto_porcento  = $p_desconto;



$xValorParcela =  round(($this->valor_a_receber  / $this->sc_field_0 ),2)   ;
	
$xValorArredondamento =  $this->valor_a_receber  - ($xValorParcela * $this->sc_field_0 )  ;

$this->valor_parcelas  = '';

for ($i = 1; $i <= $this->sc_field_0 ; $i++) {
	
	$xValorParcelaArredondada = $xValorParcela + ($xValorArredondamento);
	
	$this->valor_parcelas  = $this->valor_parcelas .$i.'??R$ '.$xValorParcelaArredondada.'   -   ';
	
	$xValorArredondamento = 0;
	
}


if (isset($this->sc_temp_v_valor_a_receber)) { $_SESSION['v_valor_a_receber'] = $this->sc_temp_v_valor_a_receber;}
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off';
$modificado_desconto_porcento = $this->desconto_porcento;
$modificado_desconto = $this->desconto;
$modificado_valor_a_receber = $this->valor_a_receber;
$modificado_sc_field_0 = $this->sc_field_0;
$modificado_valor_parcelas = $this->valor_parcelas;
$this->nm_formatar_campos('desconto_porcento', 'desconto', 'valor_a_receber', 'sc_field_0', 'valor_parcelas');
if ($original_desconto_porcento !== $modificado_desconto_porcento || isset($this->nmgp_cmp_readonly['desconto_porcento']) || (isset($bFlagRead_desconto_porcento) && $bFlagRead_desconto_porcento))
{
    $this->ajax_return_values_desconto_porcento(true);
}
if ($original_desconto !== $modificado_desconto || isset($this->nmgp_cmp_readonly['desconto']) || (isset($bFlagRead_desconto) && $bFlagRead_desconto))
{
    $this->ajax_return_values_desconto(true);
}
if ($original_valor_a_receber !== $modificado_valor_a_receber || isset($this->nmgp_cmp_readonly['valor_a_receber']) || (isset($bFlagRead_valor_a_receber) && $bFlagRead_valor_a_receber))
{
    $this->ajax_return_values_valor_a_receber(true);
}
if ($original_sc_field_0 !== $modificado_sc_field_0 || isset($this->nmgp_cmp_readonly['sc_field_0']) || (isset($bFlagRead_sc_field_0) && $bFlagRead_sc_field_0))
{
    $this->ajax_return_values_sc_field_0(true);
}
if ($original_valor_parcelas !== $modificado_valor_parcelas || isset($this->nmgp_cmp_readonly['valor_parcelas']) || (isset($bFlagRead_valor_parcelas) && $bFlagRead_valor_parcelas))
{
    $this->ajax_return_values_valor_parcelas(true);
}
$this->NM_ajax_info['event_field'] = 'DESCONTO';
form_recebimento_pdv_mob_pack_ajax_response();
exit;
}
function sc_field_0_onChange()
{
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
  
$original_valor_a_receber = $this->valor_a_receber;
$original_sc_field_0 = $this->sc_field_0;
$original_valor_parcelas = $this->valor_parcelas;

$xValorParcela =  round(($this->valor_a_receber  / $this->sc_field_0 ),2)   ;
	
$xValorArredondamento =  $this->valor_a_receber  - ($xValorParcela * $this->sc_field_0 )  ;

$this->valor_parcelas  = '';

for ($i = 1; $i <= $this->sc_field_0 ; $i++) {
	
	$xValorParcelaArredondada = $xValorParcela + ($xValorArredondamento);
	
	$this->valor_parcelas  = $this->valor_parcelas .$i.'??R$ '.$xValorParcelaArredondada.'   -   ';
	
	$xValorArredondamento = 0;
	
}

$modificado_valor_a_receber = $this->valor_a_receber;
$modificado_sc_field_0 = $this->sc_field_0;
$modificado_valor_parcelas = $this->valor_parcelas;
$this->nm_formatar_campos('valor_a_receber', 'sc_field_0', 'valor_parcelas');
if ($original_valor_a_receber !== $modificado_valor_a_receber || isset($this->nmgp_cmp_readonly['valor_a_receber']) || (isset($bFlagRead_valor_a_receber) && $bFlagRead_valor_a_receber))
{
    $this->ajax_return_values_valor_a_receber(true);
}
if ($original_sc_field_0 !== $modificado_sc_field_0 || isset($this->nmgp_cmp_readonly['sc_field_0']) || (isset($bFlagRead_sc_field_0) && $bFlagRead_sc_field_0))
{
    $this->ajax_return_values_sc_field_0(true);
}
if ($original_valor_parcelas !== $modificado_valor_parcelas || isset($this->nmgp_cmp_readonly['valor_parcelas']) || (isset($bFlagRead_valor_parcelas) && $bFlagRead_valor_parcelas))
{
    $this->ajax_return_values_valor_parcelas(true);
}
$this->NM_ajax_info['event_field'] = 'sc';
form_recebimento_pdv_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off';
}
function gravar_contas_receber()
{
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
  
$xValorParcela = $this->valor_a_receber ;

if($this->sc_field_2  == 'T'){
	$xValorParcela =  round(($this->valor_a_receber  / $this->sc_field_0 ),2)   ;
	
    $xValorArredondamento =  $this->valor_a_receber  - ($xValorParcela * $this->sc_field_0 )  ;
	
	
}
$check_sql = "SELECT max(idcontas_receber)"
   . " FROM contas_receber";

 
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

if (isset($this->rs[0][0])){
    $v_idcontas_receber = $this->rs[0][0];
	
	$v_idcontas_receber = ($v_idcontas_receber + 1);
}else{
    $v_idcontas_receber = 1;
}

$v_vencimento = $this->data_vencimento ;
$v_competencia = $this->competencia ;

$data_termino = new DateTime($v_competencia);
$v_competencia = $data_termino->format('Y-m');	
$v_competenciaFormatada = $data_termino->format('m/Y');	


$procedure_name = 'sp_insert_contas_receber'; 

for ($i = 1; $i <= $this->sc_field_0 ; $i++) {
	
	$xValorParcelaArredondada = $xValorParcela + ($xValorArredondamento);
	
$procedure_fields = array(  
     "'".$this->idcliente ."'",
     "'".$this->idforma_pagamento_prevista ."'",
	 "'".$this->idforma_pagamento ."'",
	 "'".$this->idgrupos_receitas ."'",
	 "'".$this->idtipos_receitas ."'",
	 "'".$this->idorcamento ."'",
	 "'".$this->idnota_fiscal ."'",
	 "'".sprintf("%06s",$this->idorcamento )."-".$i."'",
	 "'".$this->data_emissao ."'",
	 "'".$v_vencimento."'",
	 "'".$xValorParcelaArredondada."'",
	 "'".$this->data_pagamento ."'",
	 "'".$this->valor_recebido ."'",
	 "'".$this->pago ."'",
	 "'ATIVO'",
	 "'".$this->observacoes ."'",
	 "'".$this->juros ."'",
	 "'".$v_competenciaFormatada."'",
	 "'".$this->data_insercao ."'",
	 "'".$this->data_alteracao ."'",
	 "'".$this->taxa_administrativa ."'",
	 "'".$this->troco ."'",
 );
	
$procedure_sql = 'CALL ' . $procedure_name
    . '('   . implode(', ', $procedure_fields)
    . ')';
	

     $nm_select = $procedure_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recebimento_pdv_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
	
	
	if($this->sc_field_3  !== 'T'){
		$parcelas= $this->sc_field_1 ;
        $data_termino = new DateTime($v_vencimento);
        $data_termino->add(new DateInterval('P'.$parcelas.'D'));
        $v_vencimento= $data_termino->format('Y-m-d');
	}else {
		$parcelas=1;
        $data_termino = new DateTime($v_vencimento);
        $data_termino->add(new DateInterval('P'.$parcelas.'M'));
        $v_vencimento= $data_termino->format('Y-m-d');
	}
	
	
	if($this->sc_field_4  == 'T'){
		$parcelas=1;
        $data_termino = new DateTime($v_competencia);
        $data_termino->add(new DateInterval('P'.$parcelas.'M'));
		$v_competencia = $data_termino->format('Y-m');	
        $v_competenciaFormatada = $data_termino->format('m/Y');	
	}
	
	$xValorArredondamento = 0;
}


$update_table  = 'orcamento';      
$update_where  = "idorcamento = '".$this->idorcamento ."'"; 
$update_fields = array(   
     "valor_total = '".$this->valor_a_receber ."'",
 );

$update_sql = 'UPDATE ' . $update_table
    . ' SET '   . implode(', ', $update_fields)
    . ' WHERE ' . $update_where;

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recebimento_pdv_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off';
}
function scajaxbutton_Salvar_onClick()
{
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'on';
  
$original_idcliente = $this->idcliente;
$original_valor_a_receber = $this->valor_a_receber;
$original_pago = $this->pago;
$original_data_pagamento = $this->data_pagamento;
$original_sc_field_0 = $this->sc_field_0;
$original_data_vencimento = $this->data_vencimento;
$original_idforma_pagamento_prevista = $this->idforma_pagamento_prevista;
$original_data_emissao = $this->data_emissao;
$original_observacoes = $this->observacoes;
$original_sc_field_3 = $this->sc_field_3;
$original_sc_field_1 = $this->sc_field_1;

if($this->idcliente  == ''){
	$this->nm_mens_alert[] = "Selecione um cliente!"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Selecione um cliente!"); }}else if(($this->competencia  == '') or ($this->competencia  == 'MM/AAAA')){
	$this->nm_mens_alert[] = "Coloque o m??s e ano de compet??ncia!"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Coloque o m??s e ano de compet??ncia!"); }}else if(($this->valor_a_receber  == '') or ($this->valor_a_receber  == 0.00)){
	$this->nm_mens_alert[] = "Informe o valor a receber!"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Informe o valor a receber!"); }}else if($this->idgrupos_receitas  == ''){
	$this->nm_mens_alert[] = "Informe o grupo de receitas!"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Informe o grupo de receitas!"); }}else if(($this->pago  == 'T') && ($this->data_pagamento  == '')){
	$this->nm_mens_alert[] = "Informe a data de recebimento!"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Informe a data de recebimento!"); }}else {
	$this->gravar_contas_receber();	
	$this->sc_ajax_javascript('reload');
	$this->nm_mens_alert[] = "Registro incluido com sucesso!"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Registro incluido com sucesso!"); } if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('cliente_pdv') . "/", $this->nm_location, "", "_self", "ret_self", 440, 630);
 };
}


$modificado_idcliente = $this->idcliente;
$modificado_valor_a_receber = $this->valor_a_receber;
$modificado_pago = $this->pago;
$modificado_data_pagamento = $this->data_pagamento;
$modificado_sc_field_0 = $this->sc_field_0;
$modificado_data_vencimento = $this->data_vencimento;
$modificado_idforma_pagamento_prevista = $this->idforma_pagamento_prevista;
$modificado_data_emissao = $this->data_emissao;
$modificado_observacoes = $this->observacoes;
$modificado_sc_field_3 = $this->sc_field_3;
$modificado_sc_field_1 = $this->sc_field_1;
$this->nm_formatar_campos('idcliente', 'valor_a_receber', 'pago', 'data_pagamento', 'sc_field_0', 'data_vencimento', 'idforma_pagamento_prevista', 'data_emissao', 'observacoes', 'sc_field_3', 'sc_field_1');
if ($original_idcliente !== $modificado_idcliente || isset($this->nmgp_cmp_readonly['idcliente']) || (isset($bFlagRead_idcliente) && $bFlagRead_idcliente))
{
    $this->ajax_return_values_idcliente(true);
}
if ($original_valor_a_receber !== $modificado_valor_a_receber || isset($this->nmgp_cmp_readonly['valor_a_receber']) || (isset($bFlagRead_valor_a_receber) && $bFlagRead_valor_a_receber))
{
    $this->ajax_return_values_valor_a_receber(true);
}
if ($original_pago !== $modificado_pago || isset($this->nmgp_cmp_readonly['pago']) || (isset($bFlagRead_pago) && $bFlagRead_pago))
{
    $this->ajax_return_values_pago(true);
}
if ($original_data_pagamento !== $modificado_data_pagamento || isset($this->nmgp_cmp_readonly['data_pagamento']) || (isset($bFlagRead_data_pagamento) && $bFlagRead_data_pagamento))
{
    $this->ajax_return_values_data_pagamento(true);
}
if ($original_sc_field_0 !== $modificado_sc_field_0 || isset($this->nmgp_cmp_readonly['sc_field_0']) || (isset($bFlagRead_sc_field_0) && $bFlagRead_sc_field_0))
{
    $this->ajax_return_values_sc_field_0(true);
}
if ($original_data_vencimento !== $modificado_data_vencimento || isset($this->nmgp_cmp_readonly['data_vencimento']) || (isset($bFlagRead_data_vencimento) && $bFlagRead_data_vencimento))
{
    $this->ajax_return_values_data_vencimento(true);
}
if ($original_idforma_pagamento_prevista !== $modificado_idforma_pagamento_prevista || isset($this->nmgp_cmp_readonly['idforma_pagamento_prevista']) || (isset($bFlagRead_idforma_pagamento_prevista) && $bFlagRead_idforma_pagamento_prevista))
{
    $this->ajax_return_values_idforma_pagamento_prevista(true);
}
if ($original_data_emissao !== $modificado_data_emissao || isset($this->nmgp_cmp_readonly['data_emissao']) || (isset($bFlagRead_data_emissao) && $bFlagRead_data_emissao))
{
    $this->ajax_return_values_data_emissao(true);
}
if ($original_observacoes !== $modificado_observacoes || isset($this->nmgp_cmp_readonly['observacoes']) || (isset($bFlagRead_observacoes) && $bFlagRead_observacoes))
{
    $this->ajax_return_values_observacoes(true);
}
if ($original_sc_field_3 !== $modificado_sc_field_3 || isset($this->nmgp_cmp_readonly['sc_field_3']) || (isset($bFlagRead_sc_field_3) && $bFlagRead_sc_field_3))
{
    $this->ajax_return_values_sc_field_3(true);
}
if ($original_sc_field_1 !== $modificado_sc_field_1 || isset($this->nmgp_cmp_readonly['sc_field_1']) || (isset($bFlagRead_sc_field_1) && $bFlagRead_sc_field_1))
{
    $this->ajax_return_values_sc_field_1(true);
}
$this->NM_ajax_info['event_field'] = 'scajaxbutton';
form_recebimento_pdv_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_recebimento_pdv_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_recebimento_pdv_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_recebimento_pdv_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("idcontas_receber", "idcliente", "valor_a_receber", "idforma_pagamento_prevista", "data_emissao", "data_vencimento", "pago", "data_pagamento", "observacoes"))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array("idcontas_receber", "idcliente", "valor_a_receber", "idforma_pagamento_prevista", "data_emissao", "data_vencimento", "pago", "data_pagamento", "observacoes"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['csrf_token'];
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'] = array(); 
    }

   $old_value_idcontas_receber = $this->idcontas_receber;
   $old_value_valor_a_receber = $this->valor_a_receber;
   $old_value_desconto = $this->desconto;
   $old_value_desconto_porcento = $this->desconto_porcento;
   $old_value_data_emissao = $this->data_emissao;
   $old_value_data_vencimento = $this->data_vencimento;
   $old_value_sc_field_0 = $this->sc_field_0;
   $old_value_sc_field_1 = $this->sc_field_1;
   $old_value_data_pagamento = $this->data_pagamento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idcontas_receber = $this->idcontas_receber;
   $unformatted_value_valor_a_receber = $this->valor_a_receber;
   $unformatted_value_desconto = $this->desconto;
   $unformatted_value_desconto_porcento = $this->desconto_porcento;
   $unformatted_value_data_emissao = $this->data_emissao;
   $unformatted_value_data_vencimento = $this->data_vencimento;
   $unformatted_value_sc_field_0 = $this->sc_field_0;
   $unformatted_value_sc_field_1 = $this->sc_field_1;
   $unformatted_value_data_pagamento = $this->data_pagamento;

   $sc_field_2_val_str = "''";
   if (!empty($this->sc_field_2))
   {
       if (is_array($this->sc_field_2))
       {
           $Tmp_array = $this->sc_field_2;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_2);
       }
       $sc_field_2_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_2_val_str)
          {
             $sc_field_2_val_str .= ", ";
          }
          $sc_field_2_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_3_val_str = "''";
   if (!empty($this->sc_field_3))
   {
       if (is_array($this->sc_field_3))
       {
           $Tmp_array = $this->sc_field_3;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_3);
       }
       $sc_field_3_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_3_val_str)
          {
             $sc_field_3_val_str .= ", ";
          }
          $sc_field_3_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_4_val_str = "''";
   if (!empty($this->sc_field_4))
   {
       if (is_array($this->sc_field_4))
       {
           $Tmp_array = $this->sc_field_4;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_4);
       }
       $sc_field_4_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_4_val_str)
          {
             $sc_field_4_val_str .= ", ";
          }
          $sc_field_4_val_str .= "'$Tmp_val_cmp'";
       }
   }
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

   $this->idcontas_receber = $old_value_idcontas_receber;
   $this->valor_a_receber = $old_value_valor_a_receber;
   $this->desconto = $old_value_desconto;
   $this->desconto_porcento = $old_value_desconto_porcento;
   $this->data_emissao = $old_value_data_emissao;
   $this->data_vencimento = $old_value_data_vencimento;
   $this->sc_field_0 = $old_value_sc_field_0;
   $this->sc_field_1 = $old_value_sc_field_1;
   $this->data_pagamento = $old_value_data_pagamento;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idcliente'][] = $rs->fields[0];
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
   function Form_lookup_idforma_pagamento_prevista()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'] = array(); 
    }

   $old_value_idcontas_receber = $this->idcontas_receber;
   $old_value_valor_a_receber = $this->valor_a_receber;
   $old_value_desconto = $this->desconto;
   $old_value_desconto_porcento = $this->desconto_porcento;
   $old_value_data_emissao = $this->data_emissao;
   $old_value_data_vencimento = $this->data_vencimento;
   $old_value_sc_field_0 = $this->sc_field_0;
   $old_value_sc_field_1 = $this->sc_field_1;
   $old_value_data_pagamento = $this->data_pagamento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idcontas_receber = $this->idcontas_receber;
   $unformatted_value_valor_a_receber = $this->valor_a_receber;
   $unformatted_value_desconto = $this->desconto;
   $unformatted_value_desconto_porcento = $this->desconto_porcento;
   $unformatted_value_data_emissao = $this->data_emissao;
   $unformatted_value_data_vencimento = $this->data_vencimento;
   $unformatted_value_sc_field_0 = $this->sc_field_0;
   $unformatted_value_sc_field_1 = $this->sc_field_1;
   $unformatted_value_data_pagamento = $this->data_pagamento;

   $sc_field_2_val_str = "''";
   if (!empty($this->sc_field_2))
   {
       if (is_array($this->sc_field_2))
       {
           $Tmp_array = $this->sc_field_2;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_2);
       }
       $sc_field_2_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_2_val_str)
          {
             $sc_field_2_val_str .= ", ";
          }
          $sc_field_2_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_3_val_str = "''";
   if (!empty($this->sc_field_3))
   {
       if (is_array($this->sc_field_3))
       {
           $Tmp_array = $this->sc_field_3;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_3);
       }
       $sc_field_3_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_3_val_str)
          {
             $sc_field_3_val_str .= ", ";
          }
          $sc_field_3_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $sc_field_4_val_str = "''";
   if (!empty($this->sc_field_4))
   {
       if (is_array($this->sc_field_4))
       {
           $Tmp_array = $this->sc_field_4;
       }
       else
       {
           $Tmp_array = explode(";", $this->sc_field_4);
       }
       $sc_field_4_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $sc_field_4_val_str)
          {
             $sc_field_4_val_str .= ", ";
          }
          $sc_field_4_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT idforma_pagamento, descricao  FROM forma_pagamento  ORDER BY descricao";

   $this->idcontas_receber = $old_value_idcontas_receber;
   $this->valor_a_receber = $old_value_valor_a_receber;
   $this->desconto = $old_value_desconto;
   $this->desconto_porcento = $old_value_desconto_porcento;
   $this->data_emissao = $old_value_data_emissao;
   $this->data_vencimento = $old_value_data_vencimento;
   $this->sc_field_0 = $old_value_sc_field_0;
   $this->sc_field_1 = $old_value_sc_field_1;
   $this->data_pagamento = $old_value_data_pagamento;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['Lookup_idforma_pagamento_prevista'][] = $rs->fields[0];
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
   function Form_lookup_sc_field_3()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "VENCIMENTO FIXO ?#?T?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pago()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "A RECEBER?#?F?#?N?@?";
       $nmgp_def_dados .= "RECEBIDO?#?T?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_recebimento_pdv_mob_pack_ajax_response();
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
          if ($field == "SC_all_Cmp" || $field == "idcontas_receber") 
          {
              $this->SC_monta_condicao($comando, "idcontas_receber", $arg_search, str_replace(",", ".", $data_search), "INT", false);
          }
          if ($field == "SC_all_Cmp" || $field == "idcliente") 
          {
              $data_lookup = $this->SC_lookup_idcliente($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "idcliente", $arg_search, $data_lookup, "INT", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "valor_a_receber") 
          {
              $this->SC_monta_condicao($comando, "valor_a_receber", $arg_search, str_replace(",", ".", $data_search), "DECIMAL", false);
          }
          if ($field == "SC_all_Cmp" || $field == "idforma_pagamento_prevista") 
          {
              $data_lookup = $this->SC_lookup_idforma_pagamento_prevista($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "idforma_pagamento_prevista", $arg_search, $data_lookup, "INT", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "data_emissao") 
          {
              $this->SC_monta_condicao($comando, "data_emissao", $arg_search, $data_search, "TIMESTAMP", false);
          }
          if ($field == "SC_all_Cmp" || $field == "data_vencimento") 
          {
              $this->SC_monta_condicao($comando, "data_vencimento", $arg_search, $data_search, "TIMESTAMP", false);
          }
          if ($field == "SC_all_Cmp" || $field == "pago") 
          {
              $data_lookup = $this->SC_lookup_pago($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "pago", $arg_search, $data_lookup, "CHAR", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "data_pagamento") 
          {
              $this->SC_monta_condicao($comando, "data_pagamento", $arg_search, $data_search, "TIMESTAMP", false);
          }
          if ($field == "SC_all_Cmp" || $field == "observacoes") 
          {
              $this->SC_monta_condicao($comando, "observacoes", $arg_search, $data_search, "BLOB", false);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_recebimento_pdv_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['total'] = $qt_geral_reg_form_recebimento_pdv_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_recebimento_pdv_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_recebimento_pdv_mob_pack_ajax_response();
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
      $nm_numeric[] = "idcontas_receber";$nm_numeric[] = "idcliente";$nm_numeric[] = "idforma_pagamento_prevista";$nm_numeric[] = "idforma_pagamento";$nm_numeric[] = "idgrupos_receitas";$nm_numeric[] = "idtipos_receitas";$nm_numeric[] = "idorcamento";$nm_numeric[] = "idnota_fiscal";$nm_numeric[] = "valor_a_receber";$nm_numeric[] = "valor_recebido";$nm_numeric[] = "juros";$nm_numeric[] = "taxa_administrativa";$nm_numeric[] = "troco";$nm_numeric[] = "";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['decimal_db'] == ".")
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
      $Nm_datas["data_emissao"] = "timestamp";$Nm_datas["data_vencimento"] = "timestamp";$Nm_datas["data_pagamento"] = "timestamp";$Nm_datas["data_insercao"] = "timestamp";$Nm_datas["data_alteracao"] = "timestamp";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['SC_sep_date1'];
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
   function SC_lookup_idforma_pagamento_prevista($condicao, $campo)
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
       $data_look['F'] = "A RECEBER";
       $data_look['T'] = "RECEBIDO";
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
       $nmgp_saida_form = "form_recebimento_pdv_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_recebimento_pdv_mob_fim.php";
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
       form_recebimento_pdv_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['masterValue']);
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
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_recebimento_pdv_mob_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       }
       form_recebimento_pdv_mob_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
   if ($nm_target == "_blank")
   {
?>
<form name="Fredir" method="post" target="_blank" action="<?php echo $nm_apl_dest; ?>">
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
</form>
<script type="text/javascript">
setTimeout(function() { document.Fredir.submit(); }, 250);
</script>
<?php
    return;
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
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
    <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
   </HEAD>
   <BODY>
<?php
   }
?>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
    $(function() {
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
    });
<?php
   }
?>
   </SCRIPT>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
   </BODY>
   </HTML>
<?php
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       exit;
   }
}
    function sc_ajax_alert($sMessage, $params = array())
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxAlert']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxAlert']['params']  = $this->sc_ajax_alert_params($params);
        }
    } // sc_ajax_alert

    function sc_ajax_alert_params($params)
    {
        $paramList = array();
        foreach ($params as $paramName => $paramValue)
        {
            if (in_array($paramName, array('title', 'timer', 'confirmButtonText', 'confirmButtonFA', 'confirmButtonFAPos', 'cancelButtonText', 'cancelButtonFA', 'cancelButtonFAPos', 'footer', 'width', 'padding', 'position')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif (in_array($paramName, array('showConfirmButton', 'showCancelButton', 'toast')) && in_array($paramValue, array(true, false)))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('position' == $paramName && in_array($paramValue, array('top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('type' == $paramName && in_array($paramValue, array('warning', 'error', 'success', 'info', 'question')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('background' == $paramName)
            {
                $paramList[$paramName] = $this->sc_ajax_alert_image(NM_charset_to_utf8($paramValue));
            }
        }
        return $paramList;
    } // sc_ajax_alert_params

    function sc_ajax_alert_image($background)
    {
        $image_param = $background;
        preg_match_all('/url\(([\s])?(["|\'])?(.*?)(["|\'])?([\s])?\)/i', $background, $matches, PREG_PATTERN_ORDER);
        if (isset($matches[3])) {
            foreach ($matches[3] as $match) {
                if ('http:' != substr($match, 0, 5) && 'https:' != substr($match, 0, 6) && '/' != substr($match, 0, 1)) {
                    $image_param = str_replace($match, "{$this->Ini->path_img_global}/{$match}", $image_param);
                }
            }
        }
        return $image_param;
    } // sc_ajax_alert_image
    function sc_ajax_javascript($sJsFunc, $aParam = array())
    {
        if ($this->NM_ajax_flag)
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = NM_charset_to_utf8($v);
            }
            $this->NM_ajax_info['ajaxJavascript'][] = array(NM_charset_to_utf8($sJsFunc), $aParam);
        }
        else
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = '"' . str_replace('"', '\"', $v) . '"';
            }
            $this->NM_non_ajax_info['ajaxJavascript'][] = array($sJsFunc, $aParam);
        }
    } // sc_ajax_javascript
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "salvar":
                return array("sc_Salvar_top");
                break;
            case "new":
                return array("sc_b_new_t.sc-unique-btn-1", "sc_b_new_t.sc-unique-btn-8");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-2", "sc_b_ins_t.sc-unique-btn-9");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-3", "sc_b_upd_t.sc-unique-btn-10");
                break;
            case "delete":
                return array("sc_b_del_t.sc-unique-btn-4", "sc_b_del_t.sc-unique-btn-11");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-5", "sc_b_sai_t.sc-unique-btn-7", "sc_b_sai_t.sc-unique-btn-12", "sc_b_sai_t.sc-unique-btn-14", "sc_b_sai_t.sc-unique-btn-6", "sc_b_sai_t.sc-unique-btn-13");
                break;
            case "first":
                return array("sc_b_ini_b.sc-unique-btn-15");
                break;
            case "back":
                return array("sc_b_ret_b.sc-unique-btn-16");
                break;
            case "forward":
                return array("sc_b_avc_b.sc-unique-btn-17");
                break;
            case "last":
                return array("sc_b_fim_b.sc-unique-btn-18");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-header">
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "NOVO REGISTRO DE CONTAS RECEBER"; } else { echo "CONTAS RECEBER"; } ?></div>
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recebimento_pdv_mob']['ordem_ord'] == " desc") {
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
            case "idcontas_receber":
                return true;
            case "valor_a_receber":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "idnota_fiscal":
                return true;
            case "valor_recebido":
                return true;
            case "juros":
                return true;
            case "taxa_administrativa":
                return true;
            case "troco":
                return true;
            case "":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "idcontas_receber":
                return 'desc';
            case "idcliente":
                return 'desc';
            case "valor_a_receber":
                return 'desc';
            case "idforma_pagamento_prevista":
                return 'desc';
            case "data_emissao":
                return 'desc';
            case "data_vencimento":
                return 'desc';
            case "data_pagamento":
                return 'desc';
            case "idforma_pagamento":
                return 'desc';
            case "idgrupos_receitas":
                return 'desc';
            case "idtipos_receitas":
                return 'desc';
            case "idorcamento":
                return 'desc';
            case "idnota_fiscal":
                return 'desc';
            case "valor_recebido":
                return 'desc';
            case "juros":
                return 'desc';
            case "data_insercao":
                return 'desc';
            case "data_alteracao":
                return 'desc';
            case "taxa_administrativa":
                return 'desc';
            case "troco":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
