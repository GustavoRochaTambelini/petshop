<?php
//
class nfce_form_mob_apl
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
   var $idorcamento;
   var $idcliente;
   var $data_venda;
   var $data_venda_hora;
   var $observacao;
   var $status;
   var $valor;
   var $desconto;
   var $valor_total;
   var $f2;
   var $f2_1;
   var $f4;
   var $f4_1;
   var $f7;
   var $f7_1;
   var $f9;
   var $f9_1;
   var $barra;
   var $bt_cancelar;
   var $bt_clientes;
   var $bt_desconto;
   var $bt_finalizar;
   var $bt_menu;
   var $bt_quantidade;
   var $chk_f2;
   var $chk_f2_1;
   var $chk_fecha;
   var $chk_fecha_1;
   var $chk_nfce;
   var $chk_nfce_1;
   var $chk_orcamento;
   var $chk_orcamento_1;
   var $chk_tecla;
   var $chk_tecla_1;
   var $cod_barra;
   var $fechamento;
   var $imagem;
   var $inclui;
   var $inclui_1;
   var $sc_field_0;
   var $lbl_nfce;
   var $lbl_orcamento;
   var $num_itens;
   var $pra_pular;
   var $pra_pular1;
   var $qtde_item;
   var $quantidade;
   var $receb_total;
   var $rotina;
   var $tecla;
   var $nfce_detalhe;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
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
          if (isset($this->NM_ajax_info['param']['chk_f2']))
          {
              $this->chk_f2 = $this->NM_ajax_info['param']['chk_f2'];
          }
          if (isset($this->NM_ajax_info['param']['cod_barra']))
          {
              $this->cod_barra = $this->NM_ajax_info['param']['cod_barra'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['f2']))
          {
              $this->f2 = $this->NM_ajax_info['param']['f2'];
          }
          if (isset($this->NM_ajax_info['param']['f4']))
          {
              $this->f4 = $this->NM_ajax_info['param']['f4'];
          }
          if (isset($this->NM_ajax_info['param']['f7']))
          {
              $this->f7 = $this->NM_ajax_info['param']['f7'];
          }
          if (isset($this->NM_ajax_info['param']['f9']))
          {
              $this->f9 = $this->NM_ajax_info['param']['f9'];
          }
          if (isset($this->NM_ajax_info['param']['idorcamento']))
          {
              $this->idorcamento = $this->NM_ajax_info['param']['idorcamento'];
          }
          if (isset($this->NM_ajax_info['param']['imagem']))
          {
              $this->imagem = $this->NM_ajax_info['param']['imagem'];
          }
          if (isset($this->NM_ajax_info['param']['nfce_detalhe']))
          {
              $this->nfce_detalhe = $this->NM_ajax_info['param']['nfce_detalhe'];
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
          if (isset($this->NM_ajax_info['param']['pra_pular']))
          {
              $this->pra_pular = $this->NM_ajax_info['param']['pra_pular'];
          }
          if (isset($this->NM_ajax_info['param']['qtde_item']))
          {
              $this->qtde_item = $this->NM_ajax_info['param']['qtde_item'];
          }
          if (isset($this->NM_ajax_info['param']['quantidade']))
          {
              $this->quantidade = $this->NM_ajax_info['param']['quantidade'];
          }
          if (isset($this->NM_ajax_info['param']['sc_field_0']))
          {
              $this->sc_field_0 = $this->NM_ajax_info['param']['sc_field_0'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['tecla']))
          {
              $this->tecla = $this->NM_ajax_info['param']['tecla'];
          }
          if (isset($this->NM_ajax_info['param']['valor_total']))
          {
              $this->valor_total = $this->NM_ajax_info['param']['valor_total'];
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
      $this->sc_conv_var['item'] = "sc_field_0";
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
      if (isset($this->vg_tipo_ambiente) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['vg_tipo_ambiente'] = $this->vg_tipo_ambiente;
      }
      if (isset($this->pdv_global) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['pdv_global'] = $this->pdv_global;
      }
      if (isset($_POST["vg_tipo_ambiente"]) && isset($this->vg_tipo_ambiente)) 
      {
          $_SESSION['vg_tipo_ambiente'] = $this->vg_tipo_ambiente;
      }
      if (isset($_POST["pdv_global"]) && isset($this->pdv_global)) 
      {
          $_SESSION['pdv_global'] = $this->pdv_global;
      }
      if (isset($_GET["vg_tipo_ambiente"]) && isset($this->vg_tipo_ambiente)) 
      {
          $_SESSION['vg_tipo_ambiente'] = $this->vg_tipo_ambiente;
      }
      if (isset($_GET["pdv_global"]) && isset($this->pdv_global)) 
      {
          $_SESSION['pdv_global'] = $this->pdv_global;
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['embutida_parms']);
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
                 nm_limpa_str_nfce_form_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->vg_tipo_ambiente)) 
          {
              $_SESSION['vg_tipo_ambiente'] = $this->vg_tipo_ambiente;
          }
          if (isset($this->pdv_global)) 
          {
              $_SESSION['pdv_global'] = $this->pdv_global;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->vg_tipo_ambiente)) 
          {
              $_SESSION['vg_tipo_ambiente'] = $this->vg_tipo_ambiente;
          }
          if (isset($this->pdv_global)) 
          {
              $_SESSION['pdv_global'] = $this->pdv_global;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new nfce_form_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['nfce_form'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['nfce_form_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['nfce_form_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['nfce_form_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['nfce_form_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['nfce_form_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('nfce_form_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['nfce_form_mob']['label'] = "Emissão de Documento Fiscal de Venda";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "nfce_form_mob")
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


      $this->arr_buttons['btn_f9']['hint']             = "";
      $this->arr_buttons['btn_f9']['type']             = "button";
      $this->arr_buttons['btn_f9']['value']            = "Cancela a Venda";
      $this->arr_buttons['btn_f9']['display']          = "only_text";
      $this->arr_buttons['btn_f9']['display_position'] = "text_right";
      $this->arr_buttons['btn_f9']['style']            = "default";
      $this->arr_buttons['btn_f9']['image']            = "";

      $this->arr_buttons['btn_f7']['hint']             = "";
      $this->arr_buttons['btn_f7']['type']             = "button";
      $this->arr_buttons['btn_f7']['value']            = "Pagamento";
      $this->arr_buttons['btn_f7']['display']          = "only_text";
      $this->arr_buttons['btn_f7']['display_position'] = "text_right";
      $this->arr_buttons['btn_f7']['style']            = "default";
      $this->arr_buttons['btn_f7']['image']            = "";


      $_SESSION['scriptcase']['error_icon']['nfce_form_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['nfce_form_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "off";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      $this->nmgp_botoes['btn_F9'] = "on";
      $this->nmgp_botoes['btn_F7'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['nfce_form_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['nfce_form_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['nfce_form_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form'];
          if (!isset($this->idorcamento)){$this->idorcamento = $this->nmgp_dados_form['idorcamento'];} 
          if (!isset($this->idcliente)){$this->idcliente = $this->nmgp_dados_form['idcliente'];} 
          if (!isset($this->data_venda)){$this->data_venda = $this->nmgp_dados_form['data_venda'];} 
          if (!isset($this->observacao)){$this->observacao = $this->nmgp_dados_form['observacao'];} 
          if (!isset($this->status)){$this->status = $this->nmgp_dados_form['status'];} 
          if (!isset($this->valor)){$this->valor = $this->nmgp_dados_form['valor'];} 
          if (!isset($this->desconto)){$this->desconto = $this->nmgp_dados_form['desconto'];} 
          if (!isset($this->barra)){$this->barra = $this->nmgp_dados_form['barra'];} 
          if (!isset($this->bt_cancelar)){$this->bt_cancelar = $this->nmgp_dados_form['bt_cancelar'];} 
          if (!isset($this->bt_clientes)){$this->bt_clientes = $this->nmgp_dados_form['bt_clientes'];} 
          if (!isset($this->bt_desconto)){$this->bt_desconto = $this->nmgp_dados_form['bt_desconto'];} 
          if (!isset($this->bt_finalizar)){$this->bt_finalizar = $this->nmgp_dados_form['bt_finalizar'];} 
          if (!isset($this->bt_menu)){$this->bt_menu = $this->nmgp_dados_form['bt_menu'];} 
          if (!isset($this->bt_quantidade)){$this->bt_quantidade = $this->nmgp_dados_form['bt_quantidade'];} 
          if (!isset($this->chk_fecha)){$this->chk_fecha = $this->nmgp_dados_form['chk_fecha'];} 
          if (!isset($this->chk_nfce)){$this->chk_nfce = $this->nmgp_dados_form['chk_nfce'];} 
          if (!isset($this->chk_orcamento)){$this->chk_orcamento = $this->nmgp_dados_form['chk_orcamento'];} 
          if (!isset($this->chk_tecla)){$this->chk_tecla = $this->nmgp_dados_form['chk_tecla'];} 
          if (!isset($this->fechamento)){$this->fechamento = $this->nmgp_dados_form['fechamento'];} 
          if (!isset($this->inclui)){$this->inclui = $this->nmgp_dados_form['inclui'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['sc_field_0'] != "null"){$this->sc_field_0 = $this->nmgp_dados_form['sc_field_0'];} 
          if (!isset($this->lbl_nfce)){$this->lbl_nfce = $this->nmgp_dados_form['lbl_nfce'];} 
          if (!isset($this->lbl_orcamento)){$this->lbl_orcamento = $this->nmgp_dados_form['lbl_orcamento'];} 
          if (!isset($this->num_itens)){$this->num_itens = $this->nmgp_dados_form['num_itens'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['pra_pular'] != "null"){$this->pra_pular = $this->nmgp_dados_form['pra_pular'];} 
          if (!isset($this->pra_pular1)){$this->pra_pular1 = $this->nmgp_dados_form['pra_pular1'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['qtde_item'] != "null"){$this->qtde_item = $this->nmgp_dados_form['qtde_item'];} 
          if (!isset($this->receb_total)){$this->receb_total = $this->nmgp_dados_form['receb_total'];} 
          if (!isset($this->rotina)){$this->rotina = $this->nmgp_dados_form['rotina'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("nfce_form_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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

      if (is_file($this->Ini->path_aplicacao . 'nfce_form_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'nfce_form_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'nfce_form/nfce_form_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "nfce_form_mob_erro.class.php"); 
      }
      $this->Erro      = new nfce_form_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao']))
         { 
             if ($this->idorcamento != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['nfce_form_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['btn_F9'] = "off";
          $this->nmgp_botoes['btn_F7'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['btn_F9'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['botoes']['btn_F9'];
          $this->nmgp_botoes['btn_F7'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['botoes']['btn_F7'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      if ($this->nmgp_opcao == "excluir")
      {
          $GLOBALS['script_case_init'] = $this->Ini->sc_page;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('nfce_detalhe_mob') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('nfce_detalhe_mob') . "/nfce_detalhe_mob_apl.php");
          $this->nfce_detalhe_mob = new nfce_detalhe_mob_apl;
      }
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
      if (!isset($this->NM_ajax_flag) || ('validate_' != substr($this->NM_ajax_opcao, 0, 9) && 'add_new_line' != $this->NM_ajax_opcao && 'autocomp_' != substr($this->NM_ajax_opcao, 0, 9)))
      {
      $_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_vg_tipo_ambiente)) {$this->sc_temp_vg_tipo_ambiente = (isset($_SESSION['vg_tipo_ambiente'])) ? $_SESSION['vg_tipo_ambiente'] : "";}
if (!isset($this->sc_temp_pdv_global)) {$this->sc_temp_pdv_global = (isset($_SESSION['pdv_global'])) ? $_SESSION['pdv_global'] : "";}
  
if ($this->sc_temp_pdv_global['ambiente'] == 1) {
	$this->sc_temp_vg_tipo_ambiente = 'Sistema rodando em ambiente de Produção';
} else {
	$this->sc_temp_vg_tipo_ambiente = 'Sistema rodando em ambiente de Homologação';
}

if (isset($this->sc_temp_pdv_global)) { $_SESSION['pdv_global'] = $this->sc_temp_pdv_global;}
if (isset($this->sc_temp_vg_tipo_ambiente)) { $_SESSION['vg_tipo_ambiente'] = $this->sc_temp_vg_tipo_ambiente;}
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off'; 
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
      if (isset($this->valor_total)) { $this->nm_limpa_alfa($this->valor_total); }
      if (isset($this->nfce_detalhe)) { $this->nm_limpa_alfa($this->nfce_detalhe); }
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "btn_F7")
          { 
              $this->sc_btn_btn_F7();
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- tecla
      $this->field_config['tecla']               = array();
      $this->field_config['tecla']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['tecla']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['tecla']['symbol_dec'] = '';
      $this->field_config['tecla']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['tecla']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- quantidade
      $this->field_config['quantidade']               = array();
      $this->field_config['quantidade']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['quantidade']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['quantidade']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['quantidade']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['quantidade']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- valor_total
      $this->field_config['valor_total']               = array();
      $this->field_config['valor_total']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['valor_total']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['valor_total']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['valor_total']['symbol_mon'] = '';
      $this->field_config['valor_total']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['valor_total']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- idorcamento
      $this->field_config['idorcamento']               = array();
      $this->field_config['idorcamento']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idorcamento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idorcamento']['symbol_dec'] = '';
      $this->field_config['idorcamento']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idorcamento']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- idcliente
      $this->field_config['idcliente']               = array();
      $this->field_config['idcliente']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idcliente']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idcliente']['symbol_dec'] = '';
      $this->field_config['idcliente']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idcliente']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- data_venda
      $this->field_config['data_venda']                 = array();
      $this->field_config['data_venda']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'] . ';' . $_SESSION['scriptcase']['reg_conf']['time_format'];
      $this->field_config['data_venda']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_venda']['time_sep']     = $_SESSION['scriptcase']['reg_conf']['time_sep'];
      $this->field_config['data_venda']['date_display'] = "ddmmaaaa;hhiiss";
      $this->new_date_format('DH', 'data_venda');
      //-- valor
      $this->field_config['valor']               = array();
      $this->field_config['valor']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['valor']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['valor']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['valor']['symbol_mon'] = '';
      $this->field_config['valor']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['valor']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- desconto
      $this->field_config['desconto']               = array();
      $this->field_config['desconto']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['desconto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['desconto']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['desconto']['symbol_mon'] = '';
      $this->field_config['desconto']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['desconto']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- num_itens
      $this->field_config['num_itens']               = array();
      $this->field_config['num_itens']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['num_itens']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['num_itens']['symbol_dec'] = '';
      $this->field_config['num_itens']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['num_itens']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- receb_total
      $this->field_config['receb_total']               = array();
      $this->field_config['receb_total']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['receb_total']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['receb_total']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['receb_total']['symbol_mon'] = '';
      $this->field_config['receb_total']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['receb_total']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
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
         $this->imagem = "";
         $this->barra = ">> T O T A I S <<";
         $this->fechamento = "<a 

href=# onclick=do_ajax_erp_pdv_event_chk_fecha_onclick()>
<img src=../_lib/img/sys__NM__fecha_venda.png></img>

</a>";
         $this->lbl_nfce = "<a 

href=# onclick=do_ajax_erp_pdv_event_chk_nfce_onclick()>
<img src=../_lib/img/sys__NM__btn_nfce.png></img>

</a>";
         $this->lbl_orcamento = "<a 

href=# onclick=do_ajax_erp_pdv_event_chk_orcamento_onclick()>
<img src=../_lib/img/sys__NM__btn_orcamento.png></img>

</a>";
         $this->rotina = "";
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_qtde_item' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'qtde_item');
          }
          if ('validate_nfce_detalhe' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nfce_detalhe');
          }
          if ('validate_cod_barra' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cod_barra');
          }
          if ('validate_tecla' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tecla');
          }
          if ('validate_f2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'f2');
          }
          if ('validate_f4' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'f4');
          }
          if ('validate_f7' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'f7');
          }
          if ('validate_f9' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'f9');
          }
          if ('validate_chk_f2' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'chk_f2');
          }
          if ('validate_quantidade' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'quantidade');
          }
          if ('validate_sc_field_0' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sc_field_0');
          }
          if ('validate_valor_total' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'valor_total');
          }
          if ('validate_pra_pular' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pra_pular');
          }
          nfce_form_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_qtde_item_onblur' == $this->NM_ajax_opcao)
          {
              $this->qtde_item_onBlur();
          }
          nfce_form_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->f2))
          {
              $x = 0; 
              $this->f2_1 = $this->f2;
              $this->f2 = ""; 
              if ($this->f2_1 != "") 
              { 
                  foreach ($this->f2_1 as $dados_f2_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->f2 .= ";";
                      } 
                      $this->f2 .= $dados_f2_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->f4))
          {
              $x = 0; 
              $this->f4_1 = $this->f4;
              $this->f4 = ""; 
              if ($this->f4_1 != "") 
              { 
                  foreach ($this->f4_1 as $dados_f4_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->f4 .= ";";
                      } 
                      $this->f4 .= $dados_f4_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->f7))
          {
              $x = 0; 
              $this->f7_1 = $this->f7;
              $this->f7 = ""; 
              if ($this->f7_1 != "") 
              { 
                  foreach ($this->f7_1 as $dados_f7_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->f7 .= ";";
                      } 
                      $this->f7 .= $dados_f7_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->f9))
          {
              $x = 0; 
              $this->f9_1 = $this->f9;
              $this->f9 = ""; 
              if ($this->f9_1 != "") 
              { 
                  foreach ($this->f9_1 as $dados_f9_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->f9 .= ";";
                      } 
                      $this->f9 .= $dados_f9_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->chk_f2))
          {
              $x = 0; 
              $this->chk_f2_1 = $this->chk_f2;
              $this->chk_f2 = ""; 
              if ($this->chk_f2_1 != "") 
              { 
                  foreach ($this->chk_f2_1 as $dados_chk_f2_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->chk_f2 .= ";";
                      } 
                      $this->chk_f2 .= $dados_chk_f2_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->chk_fecha))
          {
              $x = 0; 
              $this->chk_fecha_1 = $this->chk_fecha;
              $this->chk_fecha = ""; 
              if ($this->chk_fecha_1 != "") 
              { 
                  foreach ($this->chk_fecha_1 as $dados_chk_fecha_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->chk_fecha .= ";";
                      } 
                      $this->chk_fecha .= $dados_chk_fecha_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->chk_nfce))
          {
              $x = 0; 
              $this->chk_nfce_1 = $this->chk_nfce;
              $this->chk_nfce = ""; 
              if ($this->chk_nfce_1 != "") 
              { 
                  foreach ($this->chk_nfce_1 as $dados_chk_nfce_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->chk_nfce .= ";";
                      } 
                      $this->chk_nfce .= $dados_chk_nfce_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->chk_orcamento))
          {
              $x = 0; 
              $this->chk_orcamento_1 = $this->chk_orcamento;
              $this->chk_orcamento = ""; 
              if ($this->chk_orcamento_1 != "") 
              { 
                  foreach ($this->chk_orcamento_1 as $dados_chk_orcamento_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->chk_orcamento .= ";";
                      } 
                      $this->chk_orcamento .= $dados_chk_orcamento_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->chk_tecla))
          {
              $x = 0; 
              $this->chk_tecla_1 = $this->chk_tecla;
              $this->chk_tecla = ""; 
              if ($this->chk_tecla_1 != "") 
              { 
                  foreach ($this->chk_tecla_1 as $dados_chk_tecla_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->chk_tecla .= ";";
                      } 
                      $this->chk_tecla .= $dados_chk_tecla_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->inclui))
          {
              $x = 0; 
              $this->inclui_1 = $this->inclui;
              $this->inclui = ""; 
              if ($this->inclui_1 != "") 
              { 
                  foreach ($this->inclui_1 as $dados_inclui_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->inclui .= ";";
                      } 
                      $this->inclui .= $dados_inclui_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->nm_tira_formatacao();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select']['qtde_item']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->qtde_item = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select']['qtde_item'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select']['sc_field_0']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->sc_field_0 = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select']['sc_field_0'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select']['pra_pular']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->pra_pular = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select']['pra_pular'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              nfce_form_mob_pack_ajax_response();
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
          $this->sc_field_0 = sc_strip_script($this->sc_field_0, $_SESSION['scriptcase']['charset']);
          $this->sc_field_0 = sc_strip_tags($this->sc_field_0, $_SESSION['scriptcase']['charset']);
          $this->qtde_item = sc_strip_script($this->qtde_item, $_SESSION['scriptcase']['charset']);
          $this->qtde_item = sc_strip_tags($this->qtde_item, $_SESSION['scriptcase']['charset']);
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          if ($this->nmgp_opcao != "incluir")
          {
              $this->scFormFocusErrorName = '';
          }
          $_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  nfce_form_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          nfce_form_mob_pack_ajax_response();
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
          nfce_form_mob_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "nfce_form_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("Emissão de Documento Fiscal de Venda") ?></TITLE>
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
<form name="Fdown" method="get" action="nfce_form_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="nfce_form_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="nfce_form_mob.php" target="_self" style="display: none"> 
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
   function sc_btn_btn_F7() 
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;
 
     ob_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
 <head>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

      if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
      {
?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
      }

?>
        <link rel="shortcut icon" href="../_lib/img/scriptcase__NM__ico__NM__favicon.ico">
    <SCRIPT type="text/javascript">
      var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
      var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_userSweetAlertDisplayed = false;
    </SCRIPT>
    <SCRIPT type="text/javascript" src="../_lib/lib/js/jquery-3.6.0.min.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<?php
include_once("nfce_form_mob_sajax_js.php");
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
    <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 </head>
  <body class="scFormPage">
      <table class="scFormTabela" align="center"><tr><td>
<?php
      $varloc_btn_php = array();
      $nmgp_opcao_saida_php = "igual";
      $nmgp_opc_ant_saida_php = "";
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      else
      {
          if (!isset($this->total_mercadorias) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form']['total_mercadorias']))
          {
              $varloc_btn_php['total_mercadorias'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form']['total_mercadorias'];
          }
          if (!isset($this->total_mercadorias) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form']['total_mercadorias']))
          {
              $varloc_btn_php['total_mercadorias'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form']['total_mercadorias'];
          }
          if (!isset($this->total_mercadorias) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form']['total_mercadorias']))
          {
              $varloc_btn_php['total_mercadorias'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form']['total_mercadorias'];
          }
      }
      $nm_f_saida = "nfce_form_mob.php";
      nm_limpa_numero($this->tecla, $this->field_config['tecla']['symbol_grp']) ; 
      if (!empty($this->field_config['quantidade']['symbol_dec']))
      {
          nm_limpa_valor($this->quantidade, $this->field_config['quantidade']['symbol_dec'], $this->field_config['quantidade']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['valor_total']['symbol_dec']))
      {
          $this->sc_remove_currency($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp'], $this->field_config['valor_total']['symbol_mon']); 
          nm_limpa_valor($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp']) ; 
      }
      foreach ($varloc_btn_php as $cmp => $val_cmp)
      {
          $this->$cmp = $val_cmp;
      }
      $_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
  $total_mercadorias  = $this->total_itens();
$__total = $total_mercadorias ;

if ($total_mercadorias  > 0) {

	$this->fecha_venda();
} else {
	echo "<br>Precisa incluir ao menos um ítem à Venda......<br>";
}




$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off'; 
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="idorcamento" value="<?php echo $this->form_encode_input($this->idorcamento) ?>"/>
      <input type=hidden name="nmgp_opcao" value="<?php echo $this->form_encode_input($nmgp_opcao_saida_php); ?>"/>
      <input type=hidden name="nmgp_opc_ant" value="<?php echo $this->form_encode_input($nmgp_opc_ant_saida_php); ?>"/>
      <input type=submit name="nmgp_bok" value="<?php echo $this->Ini->Nm_lang['lang_btns_cfrm'] ?>"/>
      </form>
      </td></tr></table>
      </body>
      </html>
<?php
       if (isset($this->redir_modal) && !empty($this->redir_modal))
       {
           echo "<script type=\"text/javascript\">" . $this->redir_modal . "</script>";
           $this->redir_modal = "";
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
           case 'qtde_item':
               return "Produto";
               break;
           case 'nfce_detalhe':
               return "nfce_detalhe";
               break;
           case 'imagem':
               return "";
               break;
           case 'cod_barra':
               return "cod_barra";
               break;
           case 'tecla':
               return "tecla";
               break;
           case 'f2':
               return "F2";
               break;
           case 'f4':
               return "F4";
               break;
           case 'f7':
               return "F7";
               break;
           case 'f9':
               return "F9";
               break;
           case 'chk_f2':
               return "chk_F2";
               break;
           case 'quantidade':
               return "Quantidade";
               break;
           case 'sc_field_0':
               return "Produto";
               break;
           case 'valor_total':
               return "Valor Total";
               break;
           case 'pra_pular':
               return "";
               break;
           case 'idorcamento':
               return "Idorcamento";
               break;
           case 'idcliente':
               return "Idcliente";
               break;
           case 'data_venda':
               return "Data Venda";
               break;
           case 'observacao':
               return "Observacao";
               break;
           case 'status':
               return "Status";
               break;
           case 'valor':
               return "Valor";
               break;
           case 'desconto':
               return "Desconto R$";
               break;
           case 'barra':
               return "";
               break;
           case 'bt_cancelar':
               return "Cancelar";
               break;
           case 'bt_clientes':
               return "Clientes";
               break;
           case 'bt_desconto':
               return "Desconto";
               break;
           case 'bt_finalizar':
               return "F2 - Pagamento";
               break;
           case 'bt_menu':
               return "Menu";
               break;
           case 'bt_quantidade':
               return "bt_quantidade";
               break;
           case 'chk_fecha':
               return "chk_fecha";
               break;
           case 'chk_nfce':
               return "chk_nfce";
               break;
           case 'chk_orcamento':
               return "chk_orcamento";
               break;
           case 'chk_tecla':
               return "chk_tecla";
               break;
           case 'fechamento':
               return "";
               break;
           case 'inclui':
               return "inclui";
               break;
           case 'lbl_nfce':
               return "";
               break;
           case 'lbl_orcamento':
               return "";
               break;
           case 'num_itens':
               return "Nº de Ítens";
               break;
           case 'pra_pular1':
               return "";
               break;
           case 'receb_total':
               return "Total Recebido R$";
               break;
           case 'rotina':
               return "EMISSÃO";
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
     $this->scFormFocusErrorName = '';
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_nfce_form_mob']) || !is_array($this->NM_ajax_info['errList']['geral_nfce_form_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_nfce_form_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_nfce_form_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'qtde_item' == $filtro)) || (is_array($filtro) && in_array('qtde_item', $filtro)))
        $this->ValidateField_qtde_item($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "qtde_item";

      if ((!is_array($filtro) && ('' == $filtro || 'nfce_detalhe' == $filtro)) || (is_array($filtro) && in_array('nfce_detalhe', $filtro)))
        $this->ValidateField_nfce_detalhe($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "nfce_detalhe";

      if ((!is_array($filtro) && ('' == $filtro || 'cod_barra' == $filtro)) || (is_array($filtro) && in_array('cod_barra', $filtro)))
        $this->ValidateField_cod_barra($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "cod_barra";

      if ((!is_array($filtro) && ('' == $filtro || 'tecla' == $filtro)) || (is_array($filtro) && in_array('tecla', $filtro)))
        $this->ValidateField_tecla($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "tecla";

      if ((!is_array($filtro) && ('' == $filtro || 'f2' == $filtro)) || (is_array($filtro) && in_array('f2', $filtro)))
        $this->ValidateField_f2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "f2";

      if ((!is_array($filtro) && ('' == $filtro || 'f4' == $filtro)) || (is_array($filtro) && in_array('f4', $filtro)))
        $this->ValidateField_f4($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "f4";

      if ((!is_array($filtro) && ('' == $filtro || 'f7' == $filtro)) || (is_array($filtro) && in_array('f7', $filtro)))
        $this->ValidateField_f7($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "f7";

      if ((!is_array($filtro) && ('' == $filtro || 'f9' == $filtro)) || (is_array($filtro) && in_array('f9', $filtro)))
        $this->ValidateField_f9($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "f9";

      if ((!is_array($filtro) && ('' == $filtro || 'chk_f2' == $filtro)) || (is_array($filtro) && in_array('chk_f2', $filtro)))
        $this->ValidateField_chk_f2($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "chk_f2";

      if ((!is_array($filtro) && ('' == $filtro || 'quantidade' == $filtro)) || (is_array($filtro) && in_array('quantidade', $filtro)))
        $this->ValidateField_quantidade($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "quantidade";

      if ((!is_array($filtro) && ('' == $filtro || 'sc_field_0' == $filtro)) || (is_array($filtro) && in_array('sc_field_0', $filtro)))
        $this->ValidateField_sc_field_0($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "sc_field_0";

      if ((!is_array($filtro) && ('' == $filtro || 'valor_total' == $filtro)) || (is_array($filtro) && in_array('valor_total', $filtro)))
        $this->ValidateField_valor_total($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "valor_total";

      if ((!is_array($filtro) && ('' == $filtro || 'pra_pular' == $filtro)) || (is_array($filtro) && in_array('pra_pular', $filtro)))
        $this->ValidateField_pra_pular($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pra_pular";

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
              $_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
  


$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off'; 
          }
      }
   }

    function ValidateField_qtde_item(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->qtde_item) > 30) 
          { 
              $hasError = true;
              $Campos_Crit .= "Produto " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['qtde_item']))
              {
                  $Campos_Erros['qtde_item'] = array();
              }
              $Campos_Erros['qtde_item'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['qtde_item']) || !is_array($this->NM_ajax_info['errList']['qtde_item']))
              {
                  $this->NM_ajax_info['errList']['qtde_item'] = array();
              }
              $this->NM_ajax_info['errList']['qtde_item'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 30 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "0123456789,*$0123456789,*$";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->qtde_item ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->qtde_item, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "Produto " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['qtde_item']))
              {
                  $Campos_Erros['qtde_item'] = array();
              }
              $Campos_Erros['qtde_item'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['qtde_item']) || !is_array($this->NM_ajax_info['errList']['qtde_item']))
              {
                  $this->NM_ajax_info['errList']['qtde_item'] = array();
              }
              $this->NM_ajax_info['errList']['qtde_item'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'qtde_item';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_qtde_item

    function ValidateField_nfce_detalhe(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->nfce_detalhe) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nfce_detalhe';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nfce_detalhe

    function ValidateField_cod_barra(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cod_barra) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "cod_barra " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cod_barra']))
              {
                  $Campos_Erros['cod_barra'] = array();
              }
              $Campos_Erros['cod_barra'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cod_barra']) || !is_array($this->NM_ajax_info['errList']['cod_barra']))
              {
                  $this->NM_ajax_info['errList']['cod_barra'] = array();
              }
              $this->NM_ajax_info['errList']['cod_barra'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cod_barra';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cod_barra

    function ValidateField_tecla(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->tecla === "" || is_null($this->tecla))  
      { 
          $this->tecla = 0;
          $this->sc_force_zero[] = 'tecla';
      } 
      nm_limpa_numero($this->tecla, $this->field_config['tecla']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->tecla != '')  
          { 
              $iTestSize = 20;
              if (strlen($this->tecla) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "tecla: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['tecla']))
                  {
                      $Campos_Erros['tecla'] = array();
                  }
                  $Campos_Erros['tecla'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['tecla']) || !is_array($this->NM_ajax_info['errList']['tecla']))
                  {
                      $this->NM_ajax_info['errList']['tecla'] = array();
                  }
                  $this->NM_ajax_info['errList']['tecla'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->tecla, 20, 0, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "tecla; " ; 
                  if (!isset($Campos_Erros['tecla']))
                  {
                      $Campos_Erros['tecla'] = array();
                  }
                  $Campos_Erros['tecla'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['tecla']) || !is_array($this->NM_ajax_info['errList']['tecla']))
                  {
                      $this->NM_ajax_info['errList']['tecla'] = array();
                  }
                  $this->NM_ajax_info['errList']['tecla'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tecla';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tecla

    function ValidateField_f2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->f2 == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      else 
      { 
          if (is_array($this->f2))
          {
              $x = 0; 
              $this->f2_1 = array(); 
              foreach ($this->f2 as $ind => $dados_f2_1 ) 
              {
                  if ($dados_f2_1 != "") 
                  {
                      $this->f2_1[] = $dados_f2_1;
                  } 
              } 
              $this->f2 = ""; 
              foreach ($this->f2_1 as $dados_f2_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->f2 .= ";";
                   } 
                   $this->f2 .= $dados_f2_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'f2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_f2

    function ValidateField_f4(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->f4 == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      else 
      { 
          if (is_array($this->f4))
          {
              $x = 0; 
              $this->f4_1 = array(); 
              foreach ($this->f4 as $ind => $dados_f4_1 ) 
              {
                  if ($dados_f4_1 != "") 
                  {
                      $this->f4_1[] = $dados_f4_1;
                  } 
              } 
              $this->f4 = ""; 
              foreach ($this->f4_1 as $dados_f4_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->f4 .= ";";
                   } 
                   $this->f4 .= $dados_f4_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'f4';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_f4

    function ValidateField_f7(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->f7 == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      else 
      { 
          if (is_array($this->f7))
          {
              $x = 0; 
              $this->f7_1 = array(); 
              foreach ($this->f7 as $ind => $dados_f7_1 ) 
              {
                  if ($dados_f7_1 != "") 
                  {
                      $this->f7_1[] = $dados_f7_1;
                  } 
              } 
              $this->f7 = ""; 
              foreach ($this->f7_1 as $dados_f7_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->f7 .= ";";
                   } 
                   $this->f7 .= $dados_f7_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'f7';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_f7

    function ValidateField_f9(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->f9 == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      else 
      { 
          if (is_array($this->f9))
          {
              $x = 0; 
              $this->f9_1 = array(); 
              foreach ($this->f9 as $ind => $dados_f9_1 ) 
              {
                  if ($dados_f9_1 != "") 
                  {
                      $this->f9_1[] = $dados_f9_1;
                  } 
              } 
              $this->f9 = ""; 
              foreach ($this->f9_1 as $dados_f9_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->f9 .= ";";
                   } 
                   $this->f9 .= $dados_f9_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'f9';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_f9

    function ValidateField_chk_f2(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->chk_f2 == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
      else 
      { 
          if (is_array($this->chk_f2))
          {
              $x = 0; 
              $this->chk_f2_1 = array(); 
              foreach ($this->chk_f2 as $ind => $dados_chk_f2_1 ) 
              {
                  if ($dados_chk_f2_1 != "") 
                  {
                      $this->chk_f2_1[] = $dados_chk_f2_1;
                  } 
              } 
              $this->chk_f2 = ""; 
              foreach ($this->chk_f2_1 as $dados_chk_f2_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->chk_f2 .= ";";
                   } 
                   $this->chk_f2 .= $dados_chk_f2_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'chk_f2';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_chk_f2

    function ValidateField_quantidade(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->quantidade === "" || is_null($this->quantidade))  
      { 
          $this->quantidade = 0;
          $this->sc_force_zero[] = 'quantidade';
      } 
      if (!empty($this->field_config['quantidade']['symbol_dec']))
      {
          nm_limpa_valor($this->quantidade, $this->field_config['quantidade']['symbol_dec'], $this->field_config['quantidade']['symbol_grp']) ; 
          if ('.' == substr($this->quantidade, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->quantidade, 1)))
              {
                  $this->quantidade = '';
              }
              else
              {
                  $this->quantidade = '0' . $this->quantidade;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->quantidade != '')  
          { 
              $iTestSize = 7;
              if (strlen($this->quantidade) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Quantidade: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['quantidade']))
                  {
                      $Campos_Erros['quantidade'] = array();
                  }
                  $Campos_Erros['quantidade'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['quantidade']) || !is_array($this->NM_ajax_info['errList']['quantidade']))
                  {
                      $this->NM_ajax_info['errList']['quantidade'] = array();
                  }
                  $this->NM_ajax_info['errList']['quantidade'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->quantidade, 3, 3, -0, 999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Quantidade; " ; 
                  if (!isset($Campos_Erros['quantidade']))
                  {
                      $Campos_Erros['quantidade'] = array();
                  }
                  $Campos_Erros['quantidade'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['quantidade']) || !is_array($this->NM_ajax_info['errList']['quantidade']))
                  {
                      $this->NM_ajax_info['errList']['quantidade'] = array();
                  }
                  $this->NM_ajax_info['errList']['quantidade'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'quantidade';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_quantidade

    function ValidateField_sc_field_0(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->sc_field_0) > 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "Produto " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['sc_field_0']))
              {
                  $Campos_Erros['sc_field_0'] = array();
              }
              $Campos_Erros['sc_field_0'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['sc_field_0']) || !is_array($this->NM_ajax_info['errList']['sc_field_0']))
              {
                  $this->NM_ajax_info['errList']['sc_field_0'] = array();
              }
              $this->NM_ajax_info['errList']['sc_field_0'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "01234567890123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->sc_field_0 ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->sc_field_0, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "Produto " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['sc_field_0']))
              {
                  $Campos_Erros['sc_field_0'] = array();
              }
              $Campos_Erros['sc_field_0'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['sc_field_0']) || !is_array($this->NM_ajax_info['errList']['sc_field_0']))
              {
                  $this->NM_ajax_info['errList']['sc_field_0'] = array();
              }
              $this->NM_ajax_info['errList']['sc_field_0'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
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

    function ValidateField_valor_total(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->valor_total === "" || is_null($this->valor_total))  
      { 
          $this->valor_total = 0;
          $this->sc_force_zero[] = 'valor_total';
      } 
      if (!empty($this->field_config['valor_total']['symbol_dec']))
      {
          $this->sc_remove_currency($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp'], $this->field_config['valor_total']['symbol_mon']); 
          nm_limpa_valor($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp']) ; 
          if ('.' == substr($this->valor_total, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->valor_total, 1)))
              {
                  $this->valor_total = '';
              }
              else
              {
                  $this->valor_total = '0' . $this->valor_total;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->valor_total != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->valor_total) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor Total: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['valor_total']))
                  {
                      $Campos_Erros['valor_total'] = array();
                  }
                  $Campos_Erros['valor_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['valor_total']) || !is_array($this->NM_ajax_info['errList']['valor_total']))
                  {
                      $this->NM_ajax_info['errList']['valor_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->valor_total, 13, 2, -0, 1.0E+15, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Valor Total; " ; 
                  if (!isset($Campos_Erros['valor_total']))
                  {
                      $Campos_Erros['valor_total'] = array();
                  }
                  $Campos_Erros['valor_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['valor_total']) || !is_array($this->NM_ajax_info['errList']['valor_total']))
                  {
                      $this->NM_ajax_info['errList']['valor_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'valor_total';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_valor_total

    function ValidateField_pra_pular(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pra_pular) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pra_pular']))
              {
                  $Campos_Erros['pra_pular'] = array();
              }
              $Campos_Erros['pra_pular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pra_pular']) || !is_array($this->NM_ajax_info['errList']['pra_pular']))
              {
                  $this->NM_ajax_info['errList']['pra_pular'] = array();
              }
              $this->NM_ajax_info['errList']['pra_pular'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pra_pular';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pra_pular

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
    $this->nmgp_dados_form['qtde_item'] = $this->qtde_item;
    $this->nmgp_dados_form['nfce_detalhe'] = $this->nfce_detalhe;
    $this->nmgp_dados_form['imagem'] = $this->imagem;
    $this->nmgp_dados_form['cod_barra'] = $this->cod_barra;
    $this->nmgp_dados_form['tecla'] = $this->tecla;
    $this->nmgp_dados_form['f2'] = $this->f2;
    $this->nmgp_dados_form['f4'] = $this->f4;
    $this->nmgp_dados_form['f7'] = $this->f7;
    $this->nmgp_dados_form['f9'] = $this->f9;
    $this->nmgp_dados_form['chk_f2'] = $this->chk_f2;
    $this->nmgp_dados_form['quantidade'] = $this->quantidade;
    $this->nmgp_dados_form['sc_field_0'] = $this->sc_field_0;
    $this->nmgp_dados_form['valor_total'] = $this->valor_total;
    $this->nmgp_dados_form['pra_pular'] = $this->pra_pular;
    $this->nmgp_dados_form['idorcamento'] = $this->idorcamento;
    $this->nmgp_dados_form['idcliente'] = $this->idcliente;
    $this->nmgp_dados_form['data_venda'] = $this->data_venda;
    $this->nmgp_dados_form['observacao'] = $this->observacao;
    $this->nmgp_dados_form['status'] = $this->status;
    $this->nmgp_dados_form['valor'] = $this->valor;
    $this->nmgp_dados_form['desconto'] = $this->desconto;
    $this->nmgp_dados_form['barra'] = $this->barra;
    $this->nmgp_dados_form['bt_cancelar'] = $this->bt_cancelar;
    $this->nmgp_dados_form['bt_clientes'] = $this->bt_clientes;
    $this->nmgp_dados_form['bt_desconto'] = $this->bt_desconto;
    $this->nmgp_dados_form['bt_finalizar'] = $this->bt_finalizar;
    $this->nmgp_dados_form['bt_menu'] = $this->bt_menu;
    $this->nmgp_dados_form['bt_quantidade'] = $this->bt_quantidade;
    $this->nmgp_dados_form['chk_fecha'] = $this->chk_fecha;
    $this->nmgp_dados_form['chk_nfce'] = $this->chk_nfce;
    $this->nmgp_dados_form['chk_orcamento'] = $this->chk_orcamento;
    $this->nmgp_dados_form['chk_tecla'] = $this->chk_tecla;
    $this->nmgp_dados_form['fechamento'] = $this->fechamento;
    $this->nmgp_dados_form['inclui'] = $this->inclui;
    $this->nmgp_dados_form['lbl_nfce'] = $this->lbl_nfce;
    $this->nmgp_dados_form['lbl_orcamento'] = $this->lbl_orcamento;
    $this->nmgp_dados_form['num_itens'] = $this->num_itens;
    $this->nmgp_dados_form['pra_pular1'] = $this->pra_pular1;
    $this->nmgp_dados_form['receb_total'] = $this->receb_total;
    $this->nmgp_dados_form['rotina'] = $this->rotina;
    $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['tecla'] = $this->tecla;
      nm_limpa_numero($this->tecla, $this->field_config['tecla']['symbol_grp']) ; 
      $this->Before_unformat['quantidade'] = $this->quantidade;
      if (!empty($this->field_config['quantidade']['symbol_dec']))
      {
         nm_limpa_valor($this->quantidade, $this->field_config['quantidade']['symbol_dec'], $this->field_config['quantidade']['symbol_grp']);
      }
      $this->Before_unformat['valor_total'] = $this->valor_total;
      if (!empty($this->field_config['valor_total']['symbol_dec']))
      {
         $this->sc_remove_currency($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp'], $this->field_config['valor_total']['symbol_mon']);
         nm_limpa_valor($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp']);
      }
      $this->Before_unformat['idorcamento'] = $this->idorcamento;
      nm_limpa_numero($this->idorcamento, $this->field_config['idorcamento']['symbol_grp']) ; 
      $this->Before_unformat['idcliente'] = $this->idcliente;
      nm_limpa_numero($this->idcliente, $this->field_config['idcliente']['symbol_grp']) ; 
      $this->Before_unformat['data_venda'] = $this->data_venda;
      $this->Before_unformat['data_venda_hora'] = $this->data_venda_hora;
      nm_limpa_data($this->data_venda, $this->field_config['data_venda']['date_sep']) ; 
      nm_limpa_hora($this->data_venda_hora, $this->field_config['data_venda']['time_sep']) ; 
      $this->Before_unformat['valor'] = $this->valor;
      if (!empty($this->field_config['valor']['symbol_dec']))
      {
         $this->sc_remove_currency($this->valor, $this->field_config['valor']['symbol_dec'], $this->field_config['valor']['symbol_grp'], $this->field_config['valor']['symbol_mon']);
         nm_limpa_valor($this->valor, $this->field_config['valor']['symbol_dec'], $this->field_config['valor']['symbol_grp']);
      }
      $this->Before_unformat['desconto'] = $this->desconto;
      if (!empty($this->field_config['desconto']['symbol_dec']))
      {
         $this->sc_remove_currency($this->desconto, $this->field_config['desconto']['symbol_dec'], $this->field_config['desconto']['symbol_grp'], $this->field_config['desconto']['symbol_mon']);
         nm_limpa_valor($this->desconto, $this->field_config['desconto']['symbol_dec'], $this->field_config['desconto']['symbol_grp']);
      }
      $this->Before_unformat['num_itens'] = $this->num_itens;
      nm_limpa_numero($this->num_itens, $this->field_config['num_itens']['symbol_grp']) ; 
      $this->Before_unformat['receb_total'] = $this->receb_total;
      if (!empty($this->field_config['receb_total']['symbol_dec']))
      {
         $this->sc_remove_currency($this->receb_total, $this->field_config['receb_total']['symbol_dec'], $this->field_config['receb_total']['symbol_grp'], $this->field_config['receb_total']['symbol_mon']);
         nm_limpa_valor($this->receb_total, $this->field_config['receb_total']['symbol_dec'], $this->field_config['receb_total']['symbol_grp']);
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
      if ($Nome_Campo == "tecla")
      {
          nm_limpa_numero($this->tecla, $this->field_config['tecla']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "quantidade")
      {
          if (!empty($this->field_config['quantidade']['symbol_dec']))
          {
             nm_limpa_valor($this->quantidade, $this->field_config['quantidade']['symbol_dec'], $this->field_config['quantidade']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "valor_total")
      {
          if (!empty($this->field_config['valor_total']['symbol_dec']))
          {
             $this->sc_remove_currency($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp'], $this->field_config['valor_total']['symbol_mon']);
             nm_limpa_valor($this->valor_total, $this->field_config['valor_total']['symbol_dec'], $this->field_config['valor_total']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "idorcamento")
      {
          nm_limpa_numero($this->idorcamento, $this->field_config['idorcamento']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "idcliente")
      {
          nm_limpa_numero($this->idcliente, $this->field_config['idcliente']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "valor")
      {
          if (!empty($this->field_config['valor']['symbol_dec']))
          {
             $this->sc_remove_currency($this->valor, $this->field_config['valor']['symbol_dec'], $this->field_config['valor']['symbol_grp'], $this->field_config['valor']['symbol_mon']);
             nm_limpa_valor($this->valor, $this->field_config['valor']['symbol_dec'], $this->field_config['valor']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "desconto")
      {
          if (!empty($this->field_config['desconto']['symbol_dec']))
          {
             $this->sc_remove_currency($this->desconto, $this->field_config['desconto']['symbol_dec'], $this->field_config['desconto']['symbol_grp'], $this->field_config['desconto']['symbol_mon']);
             nm_limpa_valor($this->desconto, $this->field_config['desconto']['symbol_dec'], $this->field_config['desconto']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "num_itens")
      {
          nm_limpa_numero($this->num_itens, $this->field_config['num_itens']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "receb_total")
      {
          if (!empty($this->field_config['receb_total']['symbol_dec']))
          {
             $this->sc_remove_currency($this->receb_total, $this->field_config['receb_total']['symbol_dec'], $this->field_config['receb_total']['symbol_grp'], $this->field_config['receb_total']['symbol_mon']);
             nm_limpa_valor($this->receb_total, $this->field_config['receb_total']['symbol_dec'], $this->field_config['receb_total']['symbol_grp']);
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
      if ('' !== $this->tecla || (!empty($format_fields) && isset($format_fields['tecla'])))
      {
          nmgp_Form_Num_Val($this->tecla, $this->field_config['tecla']['symbol_grp'], $this->field_config['tecla']['symbol_dec'], "0", "S", $this->field_config['tecla']['format_neg'], "", "", "-", $this->field_config['tecla']['symbol_fmt']) ; 
      }
      if ('' !== $this->quantidade || (!empty($format_fields) && isset($format_fields['quantidade'])))
      {
          nmgp_Form_Num_Val($this->quantidade, $this->field_config['quantidade']['symbol_grp'], $this->field_config['quantidade']['symbol_dec'], "3", "S", $this->field_config['quantidade']['format_neg'], "", "", "-", $this->field_config['quantidade']['symbol_fmt']) ; 
      }
      if ('' !== $this->valor_total || (!empty($format_fields) && isset($format_fields['valor_total'])))
      {
          nmgp_Form_Num_Val($this->valor_total, $this->field_config['valor_total']['symbol_grp'], $this->field_config['valor_total']['symbol_dec'], "2", "S", $this->field_config['valor_total']['format_neg'], "", "", "-", $this->field_config['valor_total']['symbol_fmt']) ; 
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
          $this->ajax_return_values_qtde_item();
          $this->ajax_return_values_nfce_detalhe();
          $this->ajax_return_values_imagem();
          $this->ajax_return_values_cod_barra();
          $this->ajax_return_values_tecla();
          $this->ajax_return_values_f2();
          $this->ajax_return_values_f4();
          $this->ajax_return_values_f7();
          $this->ajax_return_values_f9();
          $this->ajax_return_values_chk_f2();
          $this->ajax_return_values_quantidade();
          $this->ajax_return_values_sc_field_0();
          $this->ajax_return_values_valor_total();
          $this->ajax_return_values_pra_pular();
          $this->ajax_return_values_idorcamento();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['idorcamento']['keyVal'] = nfce_form_mob_pack_protect_string($this->nmgp_dados_form['idorcamento']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['foreign_key']['idorcamento'] = $this->nmgp_dados_form['idorcamento'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['where_filter'] = "idorcamento = " . $this->nmgp_dados_form['idorcamento'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['where_detal']  = "idorcamento = " . $this->nmgp_dados_form['idorcamento'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nfce_detalhe_mob_script_case_init'] ]['nfce_detalhe_mob']['total']);
              }
          }
   } // ajax_return_values

          //----- qtde_item
   function ajax_return_values_qtde_item($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("qtde_item", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->qtde_item);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['qtde_item'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- nfce_detalhe
   function ajax_return_values_nfce_detalhe($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nfce_detalhe", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nfce_detalhe);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nfce_detalhe'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- imagem
   function ajax_return_values_imagem($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("imagem", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->imagem);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['imagem'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cod_barra
   function ajax_return_values_cod_barra($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cod_barra", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cod_barra);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cod_barra'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- tecla
   function ajax_return_values_tecla($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tecla", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tecla);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tecla'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- f2
   function ajax_return_values_f2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("f2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->f2);
              $aLookup = array();
              $this->_tmp_lookup_f2 = $this->f2;

$aLookup[] = array(nfce_form_mob_pack_protect_string('a') => str_replace('<', '&lt;',nfce_form_mob_pack_protect_string("a")));
$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f2'][] = 'a';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['f2']) && !empty($this->NM_ajax_info['select_html']['f2']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['f2']);
          }
          $this->NM_ajax_info['fldList']['f2'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => false,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-f2',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['f2']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['f2']['valList'][$i] = nfce_form_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['f2']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['f2']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['f2']['labList'] = $aLabel;
          }
   }

          //----- f4
   function ajax_return_values_f4($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("f4", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->f4);
              $aLookup = array();
              $this->_tmp_lookup_f4 = $this->f4;

$aLookup[] = array(nfce_form_mob_pack_protect_string('a') => str_replace('<', '&lt;',nfce_form_mob_pack_protect_string("a")));
$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f4'][] = 'a';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['f4']) && !empty($this->NM_ajax_info['select_html']['f4']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['f4']);
          }
          $this->NM_ajax_info['fldList']['f4'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => false,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-f4',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['f4']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['f4']['valList'][$i] = nfce_form_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['f4']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['f4']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['f4']['labList'] = $aLabel;
          }
   }

          //----- f7
   function ajax_return_values_f7($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("f7", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->f7);
              $aLookup = array();
              $this->_tmp_lookup_f7 = $this->f7;

$aLookup[] = array(nfce_form_mob_pack_protect_string('a') => str_replace('<', '&lt;',nfce_form_mob_pack_protect_string("a")));
$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f7'][] = 'a';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['f7']) && !empty($this->NM_ajax_info['select_html']['f7']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['f7']);
          }
          $this->NM_ajax_info['fldList']['f7'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => false,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-f7',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['f7']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['f7']['valList'][$i] = nfce_form_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['f7']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['f7']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['f7']['labList'] = $aLabel;
          }
   }

          //----- f9
   function ajax_return_values_f9($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("f9", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->f9);
              $aLookup = array();
              $this->_tmp_lookup_f9 = $this->f9;

$aLookup[] = array(nfce_form_mob_pack_protect_string('a') => str_replace('<', '&lt;',nfce_form_mob_pack_protect_string("a")));
$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_f9'][] = 'a';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['f9']) && !empty($this->NM_ajax_info['select_html']['f9']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['f9']);
          }
          $this->NM_ajax_info['fldList']['f9'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => false,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-f9',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['f9']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['f9']['valList'][$i] = nfce_form_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['f9']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['f9']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['f9']['labList'] = $aLabel;
          }
   }

          //----- chk_f2
   function ajax_return_values_chk_f2($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("chk_f2", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->chk_f2);
              $aLookup = array();
              $this->_tmp_lookup_chk_f2 = $this->chk_f2;

$aLookup[] = array(nfce_form_mob_pack_protect_string('a') => str_replace('<', '&lt;',nfce_form_mob_pack_protect_string("a")));
$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['Lookup_chk_f2'][] = 'a';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['chk_f2']) && !empty($this->NM_ajax_info['select_html']['chk_f2']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['chk_f2']);
          }
          $this->NM_ajax_info['fldList']['chk_f2'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => false,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-chk_f2',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['chk_f2']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['chk_f2']['valList'][$i] = nfce_form_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['chk_f2']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['chk_f2']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['chk_f2']['labList'] = $aLabel;
          }
   }

          //----- quantidade
   function ajax_return_values_quantidade($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("quantidade", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->quantidade);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['quantidade'] = array(
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
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- valor_total
   function ajax_return_values_valor_total($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("valor_total", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->valor_total);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['valor_total'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pra_pular
   function ajax_return_values_pra_pular($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pra_pular", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pra_pular);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pra_pular'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- idorcamento
   function ajax_return_values_idorcamento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idorcamento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idorcamento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idorcamento'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("idorcamento", $this->form_encode_input($sTmpValue))),
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['upload_dir'][$fieldName][] = $newName;
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
       $this->NM_ajax_info['btnVars']['var_btn_btn_F9_codempresa'] = $this->form_encode_input($this->nmgp_dados_form['empresa_id']);
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_imagem = $this->imagem;
    $original_quantidade = $this->quantidade;
    $original_sc_field_0 = $this->sc_field_0;
}
  $this->imagem  = "<img border=0 height='195px' width='195px' src='../_lib/img/grp__NM__img__NM__icentro.jpg' class='borda' >"; 
$this->quantidade  = 10;
$this->sc_field_0  = 10;


$this->NM_ajax_info['buttonDisplay']['alterar'] = $this->nmgp_botoes["alterar"] = "off";$this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes["exit"] = "off";$this->quantidade  = 1;
$this->nmgp_cmp_hidden["quantidade"] = "off"; $this->NM_ajax_info['fieldDisplay']['quantidade'] = 'off';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_imagem != $this->imagem || (isset($bFlagRead_imagem) && $bFlagRead_imagem)))
    {
        $this->ajax_return_values_imagem(true);
    }
    if (($original_quantidade != $this->quantidade || (isset($bFlagRead_quantidade) && $bFlagRead_quantidade)))
    {
        $this->ajax_return_values_quantidade(true);
    }
    if (($original_sc_field_0 != $this->sc_field_0 || (isset($bFlagRead_sc_field_0) && $bFlagRead_sc_field_0)))
    {
        $this->ajax_return_values_sc_field_0(true);
    }
}
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off'; 
      }
      if (empty($this->data_venda))
      {
          $this->data_venda_hora = $this->data_venda;
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
      $this->quantidade = str_replace($sc_parm1, $sc_parm2, $this->quantidade); 
      $this->valor_total = str_replace($sc_parm1, $sc_parm2, $this->valor_total); 
      $this->valor = str_replace($sc_parm1, $sc_parm2, $this->valor); 
      $this->desconto = str_replace($sc_parm1, $sc_parm2, $this->desconto); 
      $this->receb_total = str_replace($sc_parm1, $sc_parm2, $this->receb_total); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->quantidade = "'" . $this->quantidade . "'";
      $this->valor_total = "'" . $this->valor_total . "'";
      $this->valor = "'" . $this->valor . "'";
      $this->desconto = "'" . $this->desconto . "'";
      $this->receb_total = "'" . $this->receb_total . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->quantidade = str_replace("'", "", $this->quantidade); 
      $this->valor_total = str_replace("'", "", $this->valor_total); 
      $this->valor = str_replace("'", "", $this->valor); 
      $this->desconto = str_replace("'", "", $this->desconto); 
      $this->receb_total = str_replace("'", "", $this->receb_total); 
   } 
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']))
          {
               $sc_where_pos = " WHERE ((idorcamento < $this->idorcamento))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->idorcamento)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] = '';

   }

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
      $NM_val_form['qtde_item'] = $this->qtde_item;
      $NM_val_form['nfce_detalhe'] = $this->nfce_detalhe;
      $NM_val_form['imagem'] = $this->imagem;
      $NM_val_form['cod_barra'] = $this->cod_barra;
      $NM_val_form['tecla'] = $this->tecla;
      $NM_val_form['f2'] = $this->f2;
      $NM_val_form['f4'] = $this->f4;
      $NM_val_form['f7'] = $this->f7;
      $NM_val_form['f9'] = $this->f9;
      $NM_val_form['chk_f2'] = $this->chk_f2;
      $NM_val_form['quantidade'] = $this->quantidade;
      $NM_val_form['sc_field_0'] = $this->sc_field_0;
      $NM_val_form['valor_total'] = $this->valor_total;
      $NM_val_form['pra_pular'] = $this->pra_pular;
      $NM_val_form['idorcamento'] = $this->idorcamento;
      $NM_val_form['idcliente'] = $this->idcliente;
      $NM_val_form['data_venda'] = $this->data_venda;
      $NM_val_form['observacao'] = $this->observacao;
      $NM_val_form['status'] = $this->status;
      $NM_val_form['valor'] = $this->valor;
      $NM_val_form['desconto'] = $this->desconto;
      $NM_val_form['barra'] = $this->barra;
      $NM_val_form['bt_cancelar'] = $this->bt_cancelar;
      $NM_val_form['bt_clientes'] = $this->bt_clientes;
      $NM_val_form['bt_desconto'] = $this->bt_desconto;
      $NM_val_form['bt_finalizar'] = $this->bt_finalizar;
      $NM_val_form['bt_menu'] = $this->bt_menu;
      $NM_val_form['bt_quantidade'] = $this->bt_quantidade;
      $NM_val_form['chk_fecha'] = $this->chk_fecha;
      $NM_val_form['chk_nfce'] = $this->chk_nfce;
      $NM_val_form['chk_orcamento'] = $this->chk_orcamento;
      $NM_val_form['chk_tecla'] = $this->chk_tecla;
      $NM_val_form['fechamento'] = $this->fechamento;
      $NM_val_form['inclui'] = $this->inclui;
      $NM_val_form['lbl_nfce'] = $this->lbl_nfce;
      $NM_val_form['lbl_orcamento'] = $this->lbl_orcamento;
      $NM_val_form['num_itens'] = $this->num_itens;
      $NM_val_form['pra_pular1'] = $this->pra_pular1;
      $NM_val_form['receb_total'] = $this->receb_total;
      $NM_val_form['rotina'] = $this->rotina;
      if ($this->idorcamento === "" || is_null($this->idorcamento))  
      { 
          $this->idorcamento = 0;
      } 
      if ($this->idcliente === "" || is_null($this->idcliente))  
      { 
          $this->idcliente = 0;
          $this->sc_force_zero[] = 'idcliente';
      } 
      if ($this->valor === "" || is_null($this->valor))  
      { 
          $this->valor = 0;
          $this->sc_force_zero[] = 'valor';
      } 
      if ($this->desconto === "" || is_null($this->desconto))  
      { 
          $this->desconto = 0;
          $this->sc_force_zero[] = 'desconto';
      } 
      if ($this->valor_total === "" || is_null($this->valor_total))  
      { 
          $this->valor_total = 0;
          $this->sc_force_zero[] = 'valor_total';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          if ($this->data_venda == "")  
          { 
              $this->data_venda = "null"; 
              $NM_val_null[] = "data_venda";
          } 
          $this->observacao_before_qstr = $this->observacao;
          $this->observacao = substr($this->Db->qstr($this->observacao), 1, -1); 
          if ($this->observacao == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->observacao = "null"; 
              $NM_val_null[] = "observacao";
          } 
          $this->status_before_qstr = $this->status;
          $this->status = substr($this->Db->qstr($this->status), 1, -1); 
          if ($this->status == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->status = "null"; 
              $NM_val_null[] = "status";
          } 
          $this->nfce_detalhe_before_qstr = $this->nfce_detalhe;
          $this->nfce_detalhe = substr($this->Db->qstr($this->nfce_detalhe), 1, -1); 
          if ($this->nfce_detalhe == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nfce_detalhe = "null"; 
              $NM_val_null[] = "nfce_detalhe";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 nfce_form_mob_pack_ajax_response();
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
                  $SC_fields_update[] = "valor_total = $this->valor_total"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "valor_total = $this->valor_total"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "valor_total = $this->valor_total"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "valor_total = $this->valor_total"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "valor_total = $this->valor_total"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "valor_total = $this->valor_total"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "valor_total = $this->valor_total"; 
              } 
              if (isset($NM_val_form['idcliente']) && $NM_val_form['idcliente'] != $this->nmgp_dados_select['idcliente']) 
              { 
                  $SC_fields_update[] = "idcliente = $this->idcliente"; 
              } 
              if (isset($NM_val_form['data_venda']) && $NM_val_form['data_venda'] != $this->nmgp_dados_select['data_venda']) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $SC_fields_update[] = "data_venda = #$this->data_venda#"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $SC_fields_update[] = "data_venda = EXTEND('" . $this->data_venda . "', YEAR TO FRACTION)"; 
                  } 
                  else
                  { 
                      $SC_fields_update[] = "data_venda = " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ""; 
                  } 
              } 
              if (isset($NM_val_form['observacao']) && $NM_val_form['observacao'] != $this->nmgp_dados_select['observacao']) 
              { 
                  $SC_fields_update[] = "observacao = '$this->observacao'"; 
              } 
              if (isset($NM_val_form['status']) && $NM_val_form['status'] != $this->nmgp_dados_select['status']) 
              { 
                  $SC_fields_update[] = "status = '$this->status'"; 
              } 
              if (isset($NM_val_form['valor']) && $NM_val_form['valor'] != $this->nmgp_dados_select['valor']) 
              { 
                  $SC_fields_update[] = "valor = $this->valor"; 
              } 
              if (isset($NM_val_form['desconto']) && $NM_val_form['desconto'] != $this->nmgp_dados_select['desconto']) 
              { 
                  $SC_fields_update[] = "desconto = $this->desconto"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE idorcamento = $this->idorcamento ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE idorcamento = $this->idorcamento ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE idorcamento = $this->idorcamento ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE idorcamento = $this->idorcamento ";  
              }  
              else  
              {
                  $comando .= " WHERE idorcamento = $this->idorcamento ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
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
                                  nfce_form_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->observacao = $this->observacao_before_qstr;
              $this->status = $this->status_before_qstr;
              $this->nfce_detalhe = $this->nfce_detalhe_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['idorcamento'])) { $this->idorcamento = $NM_val_form['idorcamento']; }
              elseif (isset($this->idorcamento)) { $this->nm_limpa_alfa($this->idorcamento); }
              if     (isset($NM_val_form) && isset($NM_val_form['valor_total'])) { $this->valor_total = $NM_val_form['valor_total']; }
              elseif (isset($this->valor_total)) { $this->nm_limpa_alfa($this->valor_total); }
              if     (isset($NM_val_form) && isset($NM_val_form['nfce_detalhe'])) { $this->nfce_detalhe = $NM_val_form['nfce_detalhe']; }
              elseif (isset($this->nfce_detalhe)) { $this->nm_limpa_alfa($this->nfce_detalhe); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('qtde_item', 'nfce_detalhe', 'imagem', 'cod_barra', 'tecla', 'f2', 'f4', 'f7', 'f9', 'chk_f2', 'quantidade', 'sc_field_0', 'valor_total', 'pra_pular'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      nfce_form_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES ($this->idorcamento, $this->idcliente, #$this->data_venda#, '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ", '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ", '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ", '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, EXTEND('$this->data_venda', YEAR TO FRACTION), '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ", '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ", '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ", '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total) VALUES (" . $NM_seq_auto . "$this->idorcamento, $this->idcliente, " . $this->Ini->date_delim . $this->data_venda . $this->Ini->date_delim1 . ", '$this->observacao', '$this->status', $this->valor, $this->desconto, $this->valor_total)"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
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
                              nfce_form_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->observacao = $this->observacao_before_qstr;
              $this->status = $this->status_before_qstr;
              $this->nfce_detalhe = $this->nfce_detalhe_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->observacao = $this->observacao_before_qstr;
              $this->status = $this->status_before_qstr;
              $this->nfce_detalhe = $this->nfce_detalhe_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['btn_F9'] = "on";
              $this->nmgp_botoes['btn_F7'] = "on";
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->idorcamento = substr($this->Db->qstr($this->idorcamento), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "idorcamento = " . $this->idorcamento . "";
              $this->nfce_detalhe_mob->ini_controle();
              if ($this->nfce_detalhe_mob->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idorcamento = $this->idorcamento "); 
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
                          nfce_form_mob_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['parms'] = "idorcamento?#?$this->idorcamento?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->idorcamento = null === $this->idorcamento ? null : substr($this->Db->qstr($this->idorcamento), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT idorcamento, idcliente, str_replace (convert(char(10),data_venda,102), '.', '-') + ' ' + convert(char(8),data_venda,20), observacao, status, valor, desconto, valor_total from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT idorcamento, idcliente, convert(char(23),data_venda,121), observacao, status, valor, desconto, valor_total from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT idorcamento, idcliente, EXTEND(data_venda, YEAR TO FRACTION), observacao, status, valor, desconto, valor_total from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT idorcamento, idcliente, data_venda, observacao, status, valor, desconto, valor_total from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "idorcamento = $this->idorcamento"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "idorcamento = $this->idorcamento"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "idorcamento = $this->idorcamento"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "idorcamento = $this->idorcamento"; 
              }  
              else  
              {
                  $aWhere[] = "idorcamento = $this->idorcamento"; 
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
          $sc_order_by = "idorcamento";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
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
              $this->NM_ajax_info['navSummary']['reg_ini'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 0; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['btn_F9'] = $this->nmgp_botoes['btn_F9'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['btn_F7'] = $this->nmgp_botoes['btn_F7'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter'] = true;
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
          else 
          { 
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = 1; 
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->idorcamento = $rs->fields[0] ; 
              $this->nmgp_dados_select['idorcamento'] = $this->idorcamento;
              $this->idcliente = $rs->fields[1] ; 
              $this->nmgp_dados_select['idcliente'] = $this->idcliente;
              $this->data_venda = $rs->fields[2] ; 
              if (substr($this->data_venda, 10, 1) == "-") 
              { 
                 $this->data_venda = substr($this->data_venda, 0, 10) . " " . substr($this->data_venda, 11);
              } 
              if (substr($this->data_venda, 13, 1) == ".") 
              { 
                 $this->data_venda = substr($this->data_venda, 0, 13) . ":" . substr($this->data_venda, 14, 2) . ":" . substr($this->data_venda, 17);
              } 
              $this->nmgp_dados_select['data_venda'] = $this->data_venda;
              $this->observacao = $rs->fields[3] ; 
              $this->nmgp_dados_select['observacao'] = $this->observacao;
              $this->status = $rs->fields[4] ; 
              $this->nmgp_dados_select['status'] = $this->status;
              $this->valor = $rs->fields[5] ; 
              $this->nmgp_dados_select['valor'] = $this->valor;
              $this->desconto = $rs->fields[6] ; 
              $this->nmgp_dados_select['desconto'] = $this->desconto;
              $this->valor_total = $rs->fields[7] ; 
              $this->nmgp_dados_select['valor_total'] = $this->valor_total;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->idorcamento = (string)$this->idorcamento; 
              $this->idcliente = (string)$this->idcliente; 
              $this->valor = (string)$this->valor; 
              $this->desconto = (string)$this->desconto; 
              $this->valor_total = (string)$this->valor_total; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['parms'] = "idorcamento?#?$this->idorcamento?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
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
              $this->idorcamento = "";  
              $this->nmgp_dados_form["idorcamento"] = $this->idorcamento;
              $this->idcliente = "";  
              $this->nmgp_dados_form["idcliente"] = $this->idcliente;
              $this->data_venda = "";  
              $this->data_venda_hora = "" ;  
              $this->nmgp_dados_form["data_venda"] = $this->data_venda;
              $this->observacao = "";  
              $this->nmgp_dados_form["observacao"] = $this->observacao;
              $this->status = "";  
              $this->nmgp_dados_form["status"] = $this->status;
              $this->valor = "";  
              $this->nmgp_dados_form["valor"] = $this->valor;
              $this->desconto = "";  
              $this->nmgp_dados_form["desconto"] = $this->desconto;
              $this->valor_total = "";  
              $this->nmgp_dados_form["valor_total"] = $this->valor_total;
              $this->f2 = "";  
              $this->nmgp_dados_form["f2"] = $this->f2;
              $this->f4 = "";  
              $this->nmgp_dados_form["f4"] = $this->f4;
              $this->f7 = "";  
              $this->nmgp_dados_form["f7"] = $this->f7;
              $this->f9 = "";  
              $this->nmgp_dados_form["f9"] = $this->f9;
              $this->nmgp_dados_form["barra"] = $this->barra;
              $this->bt_cancelar = "";  
              $this->nmgp_dados_form["bt_cancelar"] = $this->bt_cancelar;
              $this->bt_clientes = "";  
              $this->nmgp_dados_form["bt_clientes"] = $this->bt_clientes;
              $this->bt_desconto = "";  
              $this->nmgp_dados_form["bt_desconto"] = $this->bt_desconto;
              $this->bt_finalizar = "";  
              $this->nmgp_dados_form["bt_finalizar"] = $this->bt_finalizar;
              $this->bt_menu = "";  
              $this->nmgp_dados_form["bt_menu"] = $this->bt_menu;
              $this->bt_quantidade = "";  
              $this->nmgp_dados_form["bt_quantidade"] = $this->bt_quantidade;
              $this->chk_f2 = "";  
              $this->nmgp_dados_form["chk_f2"] = $this->chk_f2;
              $this->chk_fecha = "";  
              $this->nmgp_dados_form["chk_fecha"] = $this->chk_fecha;
              $this->chk_nfce = "";  
              $this->nmgp_dados_form["chk_nfce"] = $this->chk_nfce;
              $this->chk_orcamento = "";  
              $this->nmgp_dados_form["chk_orcamento"] = $this->chk_orcamento;
              $this->chk_tecla = "";  
              $this->nmgp_dados_form["chk_tecla"] = $this->chk_tecla;
              $this->cod_barra = "";  
              $this->nmgp_dados_form["cod_barra"] = $this->cod_barra;
              $this->nmgp_dados_form["fechamento"] = $this->fechamento;
              $this->nmgp_dados_form["imagem"] = $this->imagem;
              $this->inclui = "";  
              $this->nmgp_dados_form["inclui"] = $this->inclui;
              $this->sc_field_0 = "";  
              $this->nmgp_dados_form["sc_field_0"] = $this->sc_field_0;
              $this->nmgp_dados_form["lbl_nfce"] = $this->lbl_nfce;
              $this->nmgp_dados_form["lbl_orcamento"] = $this->lbl_orcamento;
              $this->num_itens = "";  
              $this->nmgp_dados_form["num_itens"] = $this->num_itens;
              $this->pra_pular = "";  
              $this->nmgp_dados_form["pra_pular"] = $this->pra_pular;
              $this->pra_pular1 = "";  
              $this->nmgp_dados_form["pra_pular1"] = $this->pra_pular1;
              $this->qtde_item = "";  
              $this->nmgp_dados_form["qtde_item"] = $this->qtde_item;
              $this->quantidade = "";  
              $this->nmgp_dados_form["quantidade"] = $this->quantidade;
              $this->receb_total = "";  
              $this->nmgp_dados_form["receb_total"] = $this->receb_total;
              $this->nmgp_dados_form["rotina"] = $this->rotina;
              $this->tecla = "";  
              $this->nmgp_dados_form["tecla"] = $this->tecla;
              $this->nfce_detalhe = "";  
              $this->nmgp_dados_form["nfce_detalhe"] = $this->nfce_detalhe;
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe_mob']['embutida_parms'] = "idorcamento*scin" . $this->nmgp_dados_form['idorcamento'] . "*scoutNM_btn_insert*scinN*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinN*scoutNM_btn_navega*scinN*scout";
  }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function fecha_venda()
{
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
  
if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}

 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('nfce_pagto') . "/", $this->nm_location, "vg_venda_id?#?" . NM_encode_input($venda_id ) . "?@?", "_self", "ret_self", 440, 630);
 };
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off';
}
function inclui_item($codigo_item, $valor_digitado)
{
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
  
if ($this->quantidade  == 0) {
	$v_qtde	 = 1;
} else {
	$v_qtde = $this->quantidade ;
}

 
      $nm_select = "SELECT 
			    idproduto, 	
				idgrupo, 
				idsubgrupo, 
				idmarca, 
				idunidade, 
				referencia,
				descricao,
				custo, 
				valor,
				estoque_minimo,
				peso_liquido,
				tipo
			FROM 
				produto
			WHERE 
				referencia = '$codigo_item'"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 $SCrx->fields[0] = str_replace(',', '.', $SCrx->fields[0]);
                 $SCrx->fields[1] = str_replace(',', '.', $SCrx->fields[1]);
                 $SCrx->fields[2] = str_replace(',', '.', $SCrx->fields[2]);
                 $SCrx->fields[3] = str_replace(',', '.', $SCrx->fields[3]);
                 $SCrx->fields[4] = str_replace(',', '.', $SCrx->fields[4]);
                 $SCrx->fields[7] = str_replace(',', '.', $SCrx->fields[7]);
                 $SCrx->fields[8] = str_replace(',', '.', $SCrx->fields[8]);
                 $SCrx->fields[9] = str_replace(',', '.', $SCrx->fields[9]);
                 $SCrx->fields[0] = (strpos(strtolower($SCrx->fields[0]), "e")) ? (float)$SCrx->fields[0] : $SCrx->fields[0];
                 $SCrx->fields[0] = (string)$SCrx->fields[0];
                 $SCrx->fields[1] = (strpos(strtolower($SCrx->fields[1]), "e")) ? (float)$SCrx->fields[1] : $SCrx->fields[1];
                 $SCrx->fields[1] = (string)$SCrx->fields[1];
                 $SCrx->fields[2] = (strpos(strtolower($SCrx->fields[2]), "e")) ? (float)$SCrx->fields[2] : $SCrx->fields[2];
                 $SCrx->fields[2] = (string)$SCrx->fields[2];
                 $SCrx->fields[3] = (strpos(strtolower($SCrx->fields[3]), "e")) ? (float)$SCrx->fields[3] : $SCrx->fields[3];
                 $SCrx->fields[3] = (string)$SCrx->fields[3];
                 $SCrx->fields[4] = (strpos(strtolower($SCrx->fields[4]), "e")) ? (float)$SCrx->fields[4] : $SCrx->fields[4];
                 $SCrx->fields[4] = (string)$SCrx->fields[4];
                 $SCrx->fields[7] = (strpos(strtolower($SCrx->fields[7]), "e")) ? (float)$SCrx->fields[7] : $SCrx->fields[7];
                 $SCrx->fields[7] = (string)$SCrx->fields[7];
                 $SCrx->fields[8] = (strpos(strtolower($SCrx->fields[8]), "e")) ? (float)$SCrx->fields[8] : $SCrx->fields[8];
                 $SCrx->fields[8] = (string)$SCrx->fields[8];
                 $SCrx->fields[9] = (strpos(strtolower($SCrx->fields[9]), "e")) ? (float)$SCrx->fields[9] : $SCrx->fields[9];
                 $SCrx->fields[9] = (string)$SCrx->fields[9];
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->dataset[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset = false;
          $this->dataset_erro = $this->Db->ErrorMsg();
      } 
;

	
if (empty($this->dataset[0][0])) { 
	$this->sc_ajax_message('Erro de consistência na tabela de Ítens!', 'Aviso:');
	$this->sc_field_0  = '';
	$this->sc_set_focus('qtde_item');
} else {
	$v_idproduto 	  = $this->dataset[0][0];
	$v_idgrupo		  = $this->dataset[0][1];
	$v_idsubgrupo	  = $this->dataset[0][2];
	$v_idunidade	  = $this->dataset[0][3];
	$v_referencia	  = $valor_digitado; 
	$v_descricao	  = $this->dataset[0][5];
	$v_custo		  = $this->dataset[0][6];
	$v_valor		  = $this->dataset[0][7];
	$v_estoque_minimo = $this->dataset[0][8];
	$v_peso_liquido	  = $this->dataset[0][9];
	$v_tipo			  = $this->dataset[0][10];
	

	$v_desconto = 0;
	$v_total = $v_qtde * ($v_valor - $v_desconto);

	$insert_table  = 'itens_orcamento';     
	$insert_fields = array(  
		'idorcamento' 			=> "'$this->idorcamento'",
		'idproduto' 			=> "'$v_idproduto'",
	    'descricao' 			=> "'$v_descricao'",
		'valor_unitario' 		=> "'$v_valor'",
		'quantidade' 			=> "'$v_qtde'",
		'unidade' 			    => "'$v_idunidade'",
		'valor_total' 			=> "'$v_total'"
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
                nfce_form_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;
	
}
if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}


$this->qtde_item  = "";
$this->quantidade  = 1;
$this->valor  = 0;
$this->desconto  =0;
$v_unidade = '';
$v_valor = 0;
$v_total = 0;
$v_desconto = 0;

$this->sc_set_focus('qtde_item');

$this->sc_ajax_javascript('atualiza_detalhe');
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off';
}
function qtde_item_onBlur()
{
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
  
$original_qtde_item = $this->qtde_item;
$original_sc_field_0 = $this->sc_field_0;
$original_quantidade = $this->quantidade;
$original_imagem = $this->imagem;

$_codigo_digitado = $this->qtde_item ;
$_codigo_digitado=str_replace(",",".", $_codigo_digitado);
	$_tem_cifrao = strpos($_codigo_digitado, "$");
	$_valor = "";

	if ($_tem_cifrao > 0) {
		$_valor = substr($_codigo_digitado, $_tem_cifrao+1);
		$_valor = trim($_valor);
		
		$_codigo_digitado = substr($_codigo_digitado, 0, $_tem_cifrao);
	} 

	$_tem_asterisco = strpos($_codigo_digitado, "*");
	$_codigo = 0;
	$_quantidade = 0;

	if ($_tem_asterisco > 0) {
		$_quantidade = substr($_codigo_digitado, 0, $_tem_asterisco);
		$_codigo = substr($_codigo_digitado, $_tem_asterisco+1);
	} else {
		$_codigo = $_codigo_digitado;
		$_quantidade = 1;
	}
	$this->sc_field_0  = $_codigo;
	$this->quantidade  = $_quantidade;

	
$check_sql = "SELECT valor, referencia, foto"
   . " FROM produto"
   . " WHERE referencia = '$this->sc_field_0'";
 
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

if (!isset($this->rs[0][0])) {
	$this->valor = 0;
	$this->quantidade  = 0;
	$_imagem = '';
} else {
	$this->valor  = $this->rs[0][0];
    $this->cod_barra = $this->rs[0][1];

	if ($_valor <> "") {
		$this->valor  = (float) $_valor;
	}

	
	$_imagem = $this->rs[0][2];
	
	if (!empty($_imagem)) {
		$varImg=base64_encode($_imagem);
		$this->imagem  = "<img border=0 height='195px' width='195px' src='data:image/jpg;base64,$varImg' class='borda' >";
	} else {
		$this->imagem  = "<img border=0 height='195px' width='195px' src='../_lib/img/grp__NM__img__NM__icentro.jpg' class='borda' >"; 
	}

	$this->inclui_item($this->cod_barra,$this->valor );
} 

$this->update_master();




$modificado_qtde_item = $this->qtde_item;
$modificado_sc_field_0 = $this->sc_field_0;
$modificado_quantidade = $this->quantidade;
$modificado_imagem = $this->imagem;
$this->nm_formatar_campos('qtde_item', 'sc_field_0', 'quantidade', 'imagem');
if ($original_qtde_item !== $modificado_qtde_item || isset($this->nmgp_cmp_readonly['qtde_item']) || (isset($bFlagRead_qtde_item) && $bFlagRead_qtde_item))
{
    $this->ajax_return_values_qtde_item(true);
}
if ($original_sc_field_0 !== $modificado_sc_field_0 || isset($this->nmgp_cmp_readonly['sc_field_0']) || (isset($bFlagRead_sc_field_0) && $bFlagRead_sc_field_0))
{
    $this->ajax_return_values_sc_field_0(true);
}
if ($original_quantidade !== $modificado_quantidade || isset($this->nmgp_cmp_readonly['quantidade']) || (isset($bFlagRead_quantidade) && $bFlagRead_quantidade))
{
    $this->ajax_return_values_quantidade(true);
}
if ($original_imagem !== $modificado_imagem || isset($this->nmgp_cmp_readonly['imagem']) || (isset($bFlagRead_imagem) && $bFlagRead_imagem))
{
    $this->ajax_return_values_imagem(true);
}
$this->NM_ajax_info['event_field'] = 'qtde';
nfce_form_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off';
}
function total_itens()
{
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
  
$retorno = 0.00;
 
      $nm_select = "
	SELECT 
		SUM(valor_total)
	FROM 
		itens_orcamento
	WHERE (
		idorcamento = $this->idorcamento 
	)
"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset = array();
     if ($this->idorcamento != "")
     { 
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 $SCrx->fields[0] = str_replace(',', '.', $SCrx->fields[0]);
                 $SCrx->fields[0] = (strpos(strtolower($SCrx->fields[0]), "e")) ? (float)$SCrx->fields[0] : $SCrx->fields[0];
                 $SCrx->fields[0] = (string)$SCrx->fields[0];
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->dataset[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset = false;
          $this->dataset_erro = $this->Db->ErrorMsg();
      } 
     } 
;
if(!empty($this->dataset[0][0])) {
	$retorno = $this->dataset[0][0];
} else {
	$retorno = 0;
}

return $retorno;
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off';
}
function update_master()
{
$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'on';
  
$_total_mercadorias = 0.00;
$_qtde_itens = 0;

 
      $nm_select = "
	SELECT 
		SUM(valor_total), count(valor_total) 
	FROM 
		itens_orcamento
	WHERE 
		idorcamento = $this->idorcamento 
"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->dataset = array();
     if ($this->idorcamento != "")
     { 
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 $SCrx->fields[0] = str_replace(',', '.', $SCrx->fields[0]);
                 $SCrx->fields[1] = str_replace(',', '.', $SCrx->fields[1]);
                 $SCrx->fields[0] = (strpos(strtolower($SCrx->fields[0]), "e")) ? (float)$SCrx->fields[0] : $SCrx->fields[0];
                 $SCrx->fields[0] = (string)$SCrx->fields[0];
                 $SCrx->fields[1] = (strpos(strtolower($SCrx->fields[1]), "e")) ? (float)$SCrx->fields[1] : $SCrx->fields[1];
                 $SCrx->fields[1] = (string)$SCrx->fields[1];
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->dataset[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->dataset = false;
          $this->dataset_erro = $this->Db->ErrorMsg();
      } 
     } 
;
if(!empty($this->dataset[0][0])) {
	$_total_mercadorias = $this->dataset[0][0];
	$_qtde_itens = $this->dataset[0][1];
}
	$total_mercadorias  = $_total_mercadorias;
	$qtde_itens  = $_qtde_itens;
	$total_venda  = $total_mercadorias ;
 

	$update_table  = 'orcamento';     
	$update_where  = "idorcamento = '$this->idorcamento'"; 
	$update_fields = array(  
		 "valor_total = '$total_venda'"
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
                nfce_form_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      ;

	if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}

$_SESSION['scriptcase']['nfce_form_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              nfce_form_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("nfce_form_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("venda_id", "empresa_id", "cliente_id", "tipomov_id", "total_mercadorias", "total_servicos", "embalagem", "frete", "despesa", "desconto", "seguro", "total_ipi", "total_icms", "total_venda", "num_doc", "serie", "tipodoc_id", "lancado", "lancamento_id", "obs", "vendedor_id", "impresso", "tipo_nf", "danfe_pdf_nome", "chave_nfe", "protocolo_nfe", "cns_nota_status", "cns_nota_status_motivo", "cns_nota_status_hr", "cns_aprovado", "canc_status", "canc_motivo", "canc_hr", "canc_eveid", "total_vbc", "total_vicms", "total_vbcst", "total_vst", "total_vprod", "total_vfrete", "total_vseg", "total_vdesc", "total_vii", "total_vipi", "total_vpis", "total_vcofins", "total_voutro", "total_vnf", "total_vretpis", "infadfisco", "infcpl", "nfe_txt_nome", "nfe_txt_processado", "nfe_xml_nome", "nfe_xml_situacao", "nfe_xml_validacao_erro", "id_lote", "nro_recibo_sefaz", "lote_status", "indpag", "natop", "tpnf", "finnfe", "txt_erro", "tipo_frete", "cce_seq_evento", "cce_status", "cce_status_motivo", "cce_hr", "cce_correcao", "emi_xnome", "emi_xfant", "emi_ie", "emi_iest", "emi_im", "emi_cnae", "emi_cnpj", "emi_cpf", "emi_xlgr", "emi_nro", "emi_cpl", "emi_bairro", "emi_cmun", "emi_xmun", "emi_uf", "emi_xuf", "emi_cep", "emi_cpais", "emi_xpais", "emi_fone", "emi_crt", "dest_xnome", "dest_ie", "dest_isuf", "dest_email", "dest_cnpj", "dest_cpf", "dest_xlgr", "dest_nro", "dest_xcpl", "dest_xbairro", "dest_cmun", "dest_xmun", "dest_uf", "dest_xuf", "dest_cep", "dest_cpais", "dest_xpais", "dest_fone", "transportador_id", "transp_xnome", "transp_cnpj", "transp_ie", "transp_xender", "transp_uf", "transp_xuf", "transp_cmun", "transp_xmun", "transp_qvol", "transp_esp", "transp_marca", "transp_nvol", "transp_pesol", "transp_pesob", "vfp", "pg_dinheiro", "pg_cheque", "nf_pdf_down", "nf_xml_down", "nf_protocolo", "nf_modelo", "nf_numero", "nf_serie", "nf_sit_cod", "nf_sit_desc", "nf_status"))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array(""))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['csrf_token'];
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

   function Form_lookup_f2()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "a?#?a?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_f4()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "a?#?a?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_f7()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "a?#?a?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_f9()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "a?#?a?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_chk_f2()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "a?#?a?#??@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              nfce_form_mob_pack_ajax_response();
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
          if ($field == "SC_all_Cmp" || $field == "desconto") 
          {
              $this->SC_monta_condicao($comando, "desconto", $arg_search, str_replace(",", ".", $data_search), "DECIMAL", false);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_nfce_form_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['total'] = $qt_geral_reg_nfce_form_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          nfce_form_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          nfce_form_mob_pack_ajax_response();
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
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2)) {
              $Nm_accent = $this->Ini->Nm_accent_db2;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) {
              $Nm_accent = $this->Ini->Nm_accent_ibase;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) {
              $Nm_accent = $this->Ini->Nm_accent_informix;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) {
              $Nm_accent = $this->Ini->Nm_accent_mssql;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) {
              $Nm_accent = $this->Ini->Nm_accent_mysql;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres)) {
              $Nm_accent = $this->Ini->Nm_accent_postgres;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle)) {
              $Nm_accent = $this->Ini->Nm_accent_oracle;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) {
              $Nm_accent = $this->Ini->Nm_accent_sqlite;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) {
              $Nm_accent = $this->Ini->Nm_accent_sybase;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_vfp)) {
              $Nm_accent = $this->Ini->Nm_accent_vfp;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_odbc)) {
              $Nm_accent = $this->Ini->Nm_accent_odbc;
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress)) {
              $Nm_accent = $this->Ini->Nm_accent_progress;
          }
      }
      $nm_numeric[] = "idorcamento";$nm_numeric[] = "idcliente";$nm_numeric[] = "valor";$nm_numeric[] = "desconto";$nm_numeric[] = "valor_total";$nm_numeric[] = "";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['decimal_db'] == ".")
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
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR(255))";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
      $Nm_datas["data_venda"] = "datetime";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['SC_sep_date1'];
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
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
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
       $nmgp_saida_form = "nfce_form_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "nfce_form_mob_fim.php";
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
       nfce_form_mob_pack_ajax_response();
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['masterValue']))
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
   $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe_mob']['reg_start'] = "";
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_detalhe_mob']['total']);
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
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob'][substr($val, 1, -1)];
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
       $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           nfce_form_mob_pack_ajax_response();
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
       nfce_form_mob_pack_ajax_response();
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
    function sc_set_focus($sFieldName)
    {
        $sFieldName = strtolower($sFieldName);
        $aFocus = array(
                        'qtde_item' => 'qtde_item',
                        'nfce_detalhe' => 'nfce_detalhe',
                        'imagem' => 'imagem',
                        'cod_barra' => 'cod_barra',
                        'tecla' => 'tecla',
                        'f2' => 'f2',
                        'f4' => 'f4',
                        'f7' => 'f7',
                        'f9' => 'f9',
                        'chk_f2' => 'chk_f2',
                        'quantidade' => 'quantidade',
                        'sc_field_0' => 'sc_field_0',
                        'valor_total' => 'valor_total',
                        'pra_pular' => 'pra_pular',
                       );
        if (isset($aFocus[$sFieldName]))
        {
            $this->NM_ajax_info['focus'] = $aFocus[$sFieldName];
        }
    } // sc_set_focus
    function sc_ajax_message($sMessage, $sTitle = '', $sParam = '', $sRedirPar = '')
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxMessage'] = array();
            if ('' != $sParam)
            {
                $aParamList = explode('&', $sParam);
                foreach ($aParamList as $sParamItem)
                {
                    $aParamData = explode('=', $sParamItem);
                    if (2 == sizeof($aParamData) &&
                        in_array($aParamData[0], array('modal', 'timeout', 'button', 'button_label', 'top', 'left', 'width', 'height', 'redir', 'redir_target', 'show_close', 'body_icon', 'toast', 'toast_pos', 'type')))
                    {
                        $this->NM_ajax_info['ajaxMessage'][$aParamData[0]] = NM_charset_to_utf8($aParamData[1]);
                    }
                }
            }
            if (isset($this->NM_ajax_info['ajaxMessage']['redir']) && '' != $this->NM_ajax_info['ajaxMessage']['redir'] && '.php' == substr($this->NM_ajax_info['ajaxMessage']['redir'], -4) && 'http' != substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, 4))
            {
                $this->NM_ajax_info['ajaxMessage']['redir'] = $this->Ini->path_link . SC_dir_app_name(substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, -4)) . '/' . $this->NM_ajax_info['ajaxMessage']['redir'];
            }
            if ('' != $sRedirPar)
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = str_replace('=', '?#?', str_replace(';', '?@?', $sRedirPar));
            }
            else
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = '';
            }
            $this->NM_ajax_info['ajaxMessage']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxMessage']['title']   = NM_charset_to_utf8($sTitle);
        }
    } // sc_ajax_message
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
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-1", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_t.sc-unique-btn-5", "sc_b_sai_t.sc-unique-btn-7", "sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_t.sc-unique-btn-6");
                break;
            case "btn_f9":
                return array("sc_btn_F9_top");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4", "sys_separator.sc-unique-btn-8");
                break;
            case "btn_f7":
                return array("sc_btn_F7_top");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-header">
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "Emissão de Documento Fiscal de Venda"; } else { echo "Emissão de Documento Fiscal de Venda"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"></div>
</div>
    </td></tr>
<?php
    }

    function displayAppFooter()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-footer">
<style>
#rod_col1 { margin:0px; padding: 3px 0 0 5px; float:left; overflow:hidden;}
#rod_col2 { margin:0px; padding: 3px 5px 0 0; float:right; overflow:hidden; text-align:right;}

</style>

<table style="width: 100%; height:20px;" cellpadding="0px" cellspacing="0px" class="scFormFooter">
    <tr>
        <td>
            <span class="scFormFooterFont" id="rod_col1"><?php echo "" . $_SESSION['vg_tipo_ambiente'] . "" ?></span>
        </td>
        <td>
            <span class="scFormFooterFont" id="rod_col2"></span>
        </td>
    </tr>
</table>
    </td></tr>
<?php
    }

    function displayAppToolbars()
    {
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['nfce_form_mob']['ordem_ord'] == " desc") {
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
            case "":
                return true;
            case "":
                return true;
            case "valor_total":
                return true;
            case "idorcamento":
                return true;
            case "idcliente":
                return true;
            case "valor":
                return true;
            case "desconto":
                return true;
            case "":
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
            case "valor_total":
                return 'desc';
            case "idorcamento":
                return 'desc';
            case "idcliente":
                return 'desc';
            case "data_venda":
                return 'desc';
            case "valor":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
