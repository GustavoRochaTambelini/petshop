<?php
//
class form_pet_apl
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
   var $idpet;
   var $idcliente;
   var $idcliente_1;
   var $idpet_raca;
   var $idpet_raca_1;
   var $idpet_especie;
   var $idpet_especie_1;
   var $idpet_pelagem;
   var $idpet_pelagem_1;
   var $nome;
   var $data_nascimento;
   var $foto_pet;
   var $foto_pet_scfile_name;
   var $foto_pet_ul_name;
   var $foto_pet_scfile_type;
   var $foto_pet_ul_type;
   var $foto_pet_limpa;
   var $foto_pet_salva;
   var $out_foto_pet;
   var $out1_foto_pet;
   var $foto_carteirinha;
   var $foto_carteirinha_scfile_name;
   var $foto_carteirinha_ul_name;
   var $foto_carteirinha_scfile_type;
   var $foto_carteirinha_ul_type;
   var $foto_carteirinha_limpa;
   var $foto_carteirinha_salva;
   var $out_foto_carteirinha;
   var $out1_foto_carteirinha;
   var $sexo;
   var $sexo_1;
   var $pet_obs;
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
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['data_nascimento']))
          {
              $this->data_nascimento = $this->NM_ajax_info['param']['data_nascimento'];
          }
          if (isset($this->NM_ajax_info['param']['foto_carteirinha']))
          {
              $this->foto_carteirinha = $this->NM_ajax_info['param']['foto_carteirinha'];
          }
          if (isset($this->NM_ajax_info['param']['foto_carteirinha_limpa']))
          {
              $this->foto_carteirinha_limpa = $this->NM_ajax_info['param']['foto_carteirinha_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['foto_carteirinha_ul_name']))
          {
              $this->foto_carteirinha_ul_name = $this->NM_ajax_info['param']['foto_carteirinha_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['foto_carteirinha_ul_type']))
          {
              $this->foto_carteirinha_ul_type = $this->NM_ajax_info['param']['foto_carteirinha_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['foto_pet']))
          {
              $this->foto_pet = $this->NM_ajax_info['param']['foto_pet'];
          }
          if (isset($this->NM_ajax_info['param']['foto_pet_limpa']))
          {
              $this->foto_pet_limpa = $this->NM_ajax_info['param']['foto_pet_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['foto_pet_ul_name']))
          {
              $this->foto_pet_ul_name = $this->NM_ajax_info['param']['foto_pet_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['foto_pet_ul_type']))
          {
              $this->foto_pet_ul_type = $this->NM_ajax_info['param']['foto_pet_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['idcliente']))
          {
              $this->idcliente = $this->NM_ajax_info['param']['idcliente'];
          }
          if (isset($this->NM_ajax_info['param']['idpet']))
          {
              $this->idpet = $this->NM_ajax_info['param']['idpet'];
          }
          if (isset($this->NM_ajax_info['param']['idpet_especie']))
          {
              $this->idpet_especie = $this->NM_ajax_info['param']['idpet_especie'];
          }
          if (isset($this->NM_ajax_info['param']['idpet_pelagem']))
          {
              $this->idpet_pelagem = $this->NM_ajax_info['param']['idpet_pelagem'];
          }
          if (isset($this->NM_ajax_info['param']['idpet_raca']))
          {
              $this->idpet_raca = $this->NM_ajax_info['param']['idpet_raca'];
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
          if (isset($this->NM_ajax_info['param']['nome']))
          {
              $this->nome = $this->NM_ajax_info['param']['nome'];
          }
          if (isset($this->NM_ajax_info['param']['pet_obs']))
          {
              $this->pet_obs = $this->NM_ajax_info['param']['pet_obs'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['sexo']))
          {
              $this->sexo = $this->NM_ajax_info['param']['sexo'];
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
          $_SESSION['sc_session'][$script_case_init]['form_pet']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_pet']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_pet']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_pet']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_pet']['embutida_parms']);
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
                 nm_limpa_str_form_pet($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_pet']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_pet']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_pet']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_pet']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_pet']['sc_redir_insert'] = $this->sc_redir_insert;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_pet']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_pet']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_pet']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_pet']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_pet']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_pet']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_pet']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_pet']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_pet']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_pet']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_pet_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("pt_br");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("pt_br");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_pet']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_pet']['upload_field_info']['foto_pet'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_pet',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '300',
          'upload_file_width'  => '300',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_pet']['upload_field_info']['foto_carteirinha'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_pet',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '300',
          'upload_file_width'  => '300',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_pet']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_pet'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_pet']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_pet']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_pet') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_pet']['label'] = "CADASTRAR PET";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_pet")
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



      $_SESSION['scriptcase']['error_icon']['form_pet']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__btn__NM__scriptcase9_Rhino__NM__nm_scriptcase9_Rhino_error.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_pet'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_call'] : $this->Embutida_call;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['foto_pet_ul_name']) && '' != $this->NM_ajax_info['param']['foto_pet_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_pet_ul_name]))
          {
              $this->NM_ajax_info['param']['foto_pet_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_pet_ul_name];
          }
          $this->foto_pet = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['foto_pet_ul_name'];
          $this->foto_pet_scfile_name = substr($this->NM_ajax_info['param']['foto_pet_ul_name'], 12);
          $this->foto_pet_scfile_type = $this->NM_ajax_info['param']['foto_pet_ul_type'];
          $this->foto_pet_ul_name = $this->NM_ajax_info['param']['foto_pet_ul_name'];
          $this->foto_pet_ul_type = $this->NM_ajax_info['param']['foto_pet_ul_type'];
      }
      elseif (isset($this->foto_pet_ul_name) && '' != $this->foto_pet_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_pet_ul_name]))
          {
              $this->foto_pet_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_pet_ul_name];
          }
          $this->foto_pet = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->foto_pet_ul_name;
          $this->foto_pet_scfile_name = substr($this->foto_pet_ul_name, 12);
          $this->foto_pet_scfile_type = $this->foto_pet_ul_type;
      }
      if (isset($this->NM_ajax_info['param']['foto_carteirinha_ul_name']) && '' != $this->NM_ajax_info['param']['foto_carteirinha_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_carteirinha_ul_name]))
          {
              $this->NM_ajax_info['param']['foto_carteirinha_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_carteirinha_ul_name];
          }
          $this->foto_carteirinha = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['foto_carteirinha_ul_name'];
          $this->foto_carteirinha_scfile_name = substr($this->NM_ajax_info['param']['foto_carteirinha_ul_name'], 12);
          $this->foto_carteirinha_scfile_type = $this->NM_ajax_info['param']['foto_carteirinha_ul_type'];
          $this->foto_carteirinha_ul_name = $this->NM_ajax_info['param']['foto_carteirinha_ul_name'];
          $this->foto_carteirinha_ul_type = $this->NM_ajax_info['param']['foto_carteirinha_ul_type'];
      }
      elseif (isset($this->foto_carteirinha_ul_name) && '' != $this->foto_carteirinha_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_carteirinha_ul_name]))
          {
              $this->foto_carteirinha_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_field_ul_name'][$this->foto_carteirinha_ul_name];
          }
          $this->foto_carteirinha = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->foto_carteirinha_ul_name;
          $this->foto_carteirinha_scfile_name = substr($this->foto_carteirinha_ul_name, 12);
          $this->foto_carteirinha_scfile_type = $this->foto_carteirinha_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_pet']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_pet'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_pet'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form'];
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_pet", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
              include_once($this->Ini->path_embutida . 'form_pet/form_pet_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_pet_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_pet_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_pet_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_pet/form_pet_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_pet_erro.class.php"); 
      }
      $this->Erro      = new form_pet_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao']))
         { 
             if ($this->idpet != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_pet']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_pet']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form'];
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
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['total']);
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_obs_pet') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_obs_pet') . "/form_obs_pet_apl.php");
          $this->form_obs_pet = new form_obs_pet_apl;
      }
      $this->NM_case_insensitive = false;
      $this->sc_evento = $this->nmgp_opcao;
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
      if (isset($this->idpet)) { $this->nm_limpa_alfa($this->idpet); }
      if (isset($this->idcliente)) { $this->nm_limpa_alfa($this->idcliente); }
      if (isset($this->idpet_raca)) { $this->nm_limpa_alfa($this->idpet_raca); }
      if (isset($this->idpet_especie)) { $this->nm_limpa_alfa($this->idpet_especie); }
      if (isset($this->idpet_pelagem)) { $this->nm_limpa_alfa($this->idpet_pelagem); }
      if (isset($this->nome)) { $this->nm_limpa_alfa($this->nome); }
      if (isset($this->pet_obs)) { $this->nm_limpa_alfa($this->pet_obs); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- idpet
      $this->field_config['idpet']               = array();
      $this->field_config['idpet']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['idpet']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['idpet']['symbol_dec'] = '';
      $this->field_config['idpet']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['idpet']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- data_nascimento
      $this->field_config['data_nascimento']                 = array();
      $this->field_config['data_nascimento']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['data_nascimento']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['data_nascimento']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'data_nascimento');
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
          if ('validate_idpet' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idpet');
          }
          if ('validate_nome' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'nome');
          }
          if ('validate_sexo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'sexo');
          }
          if ('validate_idpet_especie' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idpet_especie');
          }
          if ('validate_idpet_pelagem' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idpet_pelagem');
          }
          if ('validate_idpet_raca' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'idpet_raca');
          }
          if ('validate_data_nascimento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'data_nascimento');
          }
          if ('validate_pet_obs' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pet_obs');
          }
          if ('validate_foto_pet' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'foto_pet');
          }
          if ('validate_foto_carteirinha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'foto_carteirinha');
          }
          form_pet_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_pet_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_pet']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_pet_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_evento == "delete")
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_pet_pack_ajax_response();
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
          form_pet_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_pet.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("CADASTRAR PET") ?></TITLE>
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
<form name="Fdown" method="get" action="form_pet_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_pet"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
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
           case 'idpet':
               return "ID";
               break;
           case 'nome':
               return "NOME";
               break;
           case 'sexo':
               return "SEXO";
               break;
           case 'idpet_especie':
               return "ESPECIE";
               break;
           case 'idpet_pelagem':
               return "PELAGEM";
               break;
           case 'idpet_raca':
               return "RAÇA";
               break;
           case 'data_nascimento':
               return "DATA NASCIMENTO";
               break;
           case 'pet_obs':
               return "OBSERVAÇÃO PET";
               break;
           case 'foto_pet':
               return "FOTO PET";
               break;
           case 'foto_carteirinha':
               return "FOTO CARTEIRINHA";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_pet']) || !is_array($this->NM_ajax_info['errList']['geral_form_pet']))
              {
                  $this->NM_ajax_info['errList']['geral_form_pet'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_pet'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'idcliente' == $filtro)) || (is_array($filtro) && in_array('idcliente', $filtro)))
        $this->ValidateField_idcliente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idpet' == $filtro)) || (is_array($filtro) && in_array('idpet', $filtro)))
        $this->ValidateField_idpet($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'nome' == $filtro)) || (is_array($filtro) && in_array('nome', $filtro)))
        $this->ValidateField_nome($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'sexo' == $filtro)) || (is_array($filtro) && in_array('sexo', $filtro)))
        $this->ValidateField_sexo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idpet_especie' == $filtro)) || (is_array($filtro) && in_array('idpet_especie', $filtro)))
        $this->ValidateField_idpet_especie($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idpet_pelagem' == $filtro)) || (is_array($filtro) && in_array('idpet_pelagem', $filtro)))
        $this->ValidateField_idpet_pelagem($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'idpet_raca' == $filtro)) || (is_array($filtro) && in_array('idpet_raca', $filtro)))
        $this->ValidateField_idpet_raca($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'data_nascimento' == $filtro)) || (is_array($filtro) && in_array('data_nascimento', $filtro)))
        $this->ValidateField_data_nascimento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'pet_obs' == $filtro)) || (is_array($filtro) && in_array('pet_obs', $filtro)))
        $this->ValidateField_pet_obs($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'foto_pet' == $filtro)) || (is_array($filtro) && in_array('foto_pet', $filtro)))
        $this->ValidateField_foto_pet($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'foto_carteirinha' == $filtro)) || (is_array($filtro) && in_array('foto_carteirinha', $filtro)))
        $this->ValidateField_foto_carteirinha($Campos_Crit, $Campos_Falta, $Campos_Erros);
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
               if (!empty($this->idcliente) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']) && !in_array($this->idcliente, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']))
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

    function ValidateField_idpet(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->idpet === "" || is_null($this->idpet))  
      { 
          $this->idpet = 0;
      } 
      nm_limpa_numero($this->idpet, $this->field_config['idpet']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->idpet != '')  
          { 
              $iTestSize = 10;
              if (strlen($this->idpet) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['idpet']))
                  {
                      $Campos_Erros['idpet'] = array();
                  }
                  $Campos_Erros['idpet'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['idpet']) || !is_array($this->NM_ajax_info['errList']['idpet']))
                  {
                      $this->NM_ajax_info['errList']['idpet'] = array();
                  }
                  $this->NM_ajax_info['errList']['idpet'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->idpet, 10, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "ID; " ; 
                  if (!isset($Campos_Erros['idpet']))
                  {
                      $Campos_Erros['idpet'] = array();
                  }
                  $Campos_Erros['idpet'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['idpet']) || !is_array($this->NM_ajax_info['errList']['idpet']))
                  {
                      $this->NM_ajax_info['errList']['idpet'] = array();
                  }
                  $this->NM_ajax_info['errList']['idpet'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idpet';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idpet

    function ValidateField_nome(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      $this->nome = sc_strtoupper($this->nome); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->nome) > 45) 
          { 
              $hasError = true;
              $Campos_Crit .= "NOME " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['nome']))
              {
                  $Campos_Erros['nome'] = array();
              }
              $Campos_Erros['nome'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['nome']) || !is_array($this->NM_ajax_info['errList']['nome']))
              {
                  $this->NM_ajax_info['errList']['nome'] = array();
              }
              $this->NM_ajax_info['errList']['nome'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 45 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'nome';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_nome

    function ValidateField_sexo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->sexo == "" && $this->nmgp_opcao != "excluir")
      { 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'sexo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_sexo

    function ValidateField_idpet_especie(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->idpet_especie) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']) && !in_array($this->idpet_especie, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['idpet_especie']))
                   {
                       $Campos_Erros['idpet_especie'] = array();
                   }
                   $Campos_Erros['idpet_especie'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['idpet_especie']) || !is_array($this->NM_ajax_info['errList']['idpet_especie']))
                   {
                       $this->NM_ajax_info['errList']['idpet_especie'] = array();
                   }
                   $this->NM_ajax_info['errList']['idpet_especie'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idpet_especie';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idpet_especie

    function ValidateField_idpet_pelagem(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->idpet_pelagem) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']) && !in_array($this->idpet_pelagem, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['idpet_pelagem']))
                   {
                       $Campos_Erros['idpet_pelagem'] = array();
                   }
                   $Campos_Erros['idpet_pelagem'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['idpet_pelagem']) || !is_array($this->NM_ajax_info['errList']['idpet_pelagem']))
                   {
                       $this->NM_ajax_info['errList']['idpet_pelagem'] = array();
                   }
                   $this->NM_ajax_info['errList']['idpet_pelagem'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idpet_pelagem';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idpet_pelagem

    function ValidateField_idpet_raca(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
               if (!empty($this->idpet_raca) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']) && !in_array($this->idpet_raca, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['idpet_raca']))
                   {
                       $Campos_Erros['idpet_raca'] = array();
                   }
                   $Campos_Erros['idpet_raca'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['idpet_raca']) || !is_array($this->NM_ajax_info['errList']['idpet_raca']))
                   {
                       $this->NM_ajax_info['errList']['idpet_raca'] = array();
                   }
                   $this->NM_ajax_info['errList']['idpet_raca'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'idpet_raca';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_idpet_raca

    function ValidateField_data_nascimento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->data_nascimento, $this->field_config['data_nascimento']['date_sep']) ; 
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['data_nascimento']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['data_nascimento']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['data_nascimento']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['data_nascimento']['date_sep']) ; 
          if (trim($this->data_nascimento) != "")  
          { 
              if ($teste_validade->Data($this->data_nascimento, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "DATA NASCIMENTO; " ; 
                  if (!isset($Campos_Erros['data_nascimento']))
                  {
                      $Campos_Erros['data_nascimento'] = array();
                  }
                  $Campos_Erros['data_nascimento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['data_nascimento']) || !is_array($this->NM_ajax_info['errList']['data_nascimento']))
                  {
                      $this->NM_ajax_info['errList']['data_nascimento'] = array();
                  }
                  $this->NM_ajax_info['errList']['data_nascimento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['data_nascimento']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'data_nascimento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_data_nascimento

    function ValidateField_pet_obs(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->pet_obs) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pet_obs';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pet_obs

    function ValidateField_foto_pet(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->foto_pet;
            if ("" != $this->foto_pet && "S" != $this->foto_pet_limpa && !$teste_validade->ArqExtensao($this->foto_pet, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FOTO PET: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['foto_pet']))
                {
                    $Campos_Erros['foto_pet'] = array();
                }
                $Campos_Erros['foto_pet'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['foto_pet']) || !is_array($this->NM_ajax_info['errList']['foto_pet']))
                {
                    $this->NM_ajax_info['errList']['foto_pet'] = array();
                }
                $this->NM_ajax_info['errList']['foto_pet'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'foto_pet';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_foto_pet

    function ValidateField_foto_carteirinha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->foto_carteirinha;
            if ("" != $this->foto_carteirinha && "S" != $this->foto_carteirinha_limpa && !$teste_validade->ArqExtensao($this->foto_carteirinha, array()))
            {
                $hasError = true;
                $Campos_Crit .= "FOTO CARTEIRINHA: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['foto_carteirinha']))
                {
                    $Campos_Erros['foto_carteirinha'] = array();
                }
                $Campos_Erros['foto_carteirinha'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['foto_carteirinha']) || !is_array($this->NM_ajax_info['errList']['foto_carteirinha']))
                {
                    $this->NM_ajax_info['errList']['foto_carteirinha'] = array();
                }
                $this->NM_ajax_info['errList']['foto_carteirinha'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'foto_carteirinha';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_foto_carteirinha
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
          if ($this->foto_pet == "none") 
          { 
              $this->foto_pet = ""; 
          } 
          if ($this->foto_pet != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_pet_doc_name.php';
              }
              $this->foto_pet = sc_upload_unprotect_chars($this->foto_pet);
              $this->foto_pet_scfile_name = sc_upload_unprotect_chars($this->foto_pet_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->foto_pet_scfile_type = substr($this->foto_pet_scfile_type, 0, strpos($this->foto_pet_scfile_type, ";")) ; 
              } 
              if ($this->foto_pet_scfile_type == "image/pjpeg" || $this->foto_pet_scfile_type == "image/jpeg" || $this->foto_pet_scfile_type == "image/gif" ||  
                  $this->foto_pet_scfile_type == "image/png" || $this->foto_pet_scfile_type == "image/x-png" || $this->foto_pet_scfile_type == "image/bmp")  
              { 
                  if (!is_file($this->foto_pet) && isset($_SESSION['scriptcase']['charset']) && $_SESSION['scriptcase']['charset'] != 'UTF-8') {
                      $mbConvertFileName = mb_convert_encoding($this->foto_pet, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      $mbConvertScFileName = mb_convert_encoding($this->foto_pet_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      if (is_file($mbConvertFileName)) {
                          $this->foto_pet = $mbConvertFileName;
                          $this->foto_pet_scfile_name = $mbConvertScFileName;
                      }
                  }
                  if (is_file($this->foto_pet))  
                  { 
                      $this->NM_size_docs[$this->foto_pet_scfile_name] = $this->sc_file_size($this->foto_pet);
                      $reg_foto_pet = file_get_contents($this->foto_pet); 
                      $this->foto_pet = $reg_foto_pet; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FOTO PET " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->foto_pet = "";
                      if (!isset($Campos_Erros['foto_pet']))
                      {
                          $Campos_Erros['foto_pet'] = array();
                      }
                      $Campos_Erros['foto_pet'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['foto_pet']) || !is_array($this->NM_ajax_info['errList']['foto_pet']))
                      {
                          $this->NM_ajax_info['errList']['foto_pet'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto_pet'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->foto_pet = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FOTO PET " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['foto_pet']))
                      {
                          $Campos_Erros['foto_pet'] = array();
                      }
                      $Campos_Erros['foto_pet'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['foto_pet']) || !is_array($this->NM_ajax_info['errList']['foto_pet']))
                      {
                          $this->NM_ajax_info['errList']['foto_pet'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto_pet'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form']['foto_pet']) && $this->foto_pet_limpa != "S")
          {
              $this->foto_pet = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form']['foto_pet'];
          }
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->foto_carteirinha == "none") 
          { 
              $this->foto_carteirinha = ""; 
          } 
          if ($this->foto_carteirinha != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_pet_doc_name.php';
              }
              $this->foto_carteirinha = sc_upload_unprotect_chars($this->foto_carteirinha);
              $this->foto_carteirinha_scfile_name = sc_upload_unprotect_chars($this->foto_carteirinha_scfile_name);
              if ($nm_browser == "Opera")  
              { 
                  $this->foto_carteirinha_scfile_type = substr($this->foto_carteirinha_scfile_type, 0, strpos($this->foto_carteirinha_scfile_type, ";")) ; 
              } 
              if ($this->foto_carteirinha_scfile_type == "image/pjpeg" || $this->foto_carteirinha_scfile_type == "image/jpeg" || $this->foto_carteirinha_scfile_type == "image/gif" ||  
                  $this->foto_carteirinha_scfile_type == "image/png" || $this->foto_carteirinha_scfile_type == "image/x-png" || $this->foto_carteirinha_scfile_type == "image/bmp")  
              { 
                  if (!is_file($this->foto_carteirinha) && isset($_SESSION['scriptcase']['charset']) && $_SESSION['scriptcase']['charset'] != 'UTF-8') {
                      $mbConvertFileName = mb_convert_encoding($this->foto_carteirinha, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      $mbConvertScFileName = mb_convert_encoding($this->foto_carteirinha_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      if (is_file($mbConvertFileName)) {
                          $this->foto_carteirinha = $mbConvertFileName;
                          $this->foto_carteirinha_scfile_name = $mbConvertScFileName;
                      }
                  }
                  if (is_file($this->foto_carteirinha))  
                  { 
                      $this->NM_size_docs[$this->foto_carteirinha_scfile_name] = $this->sc_file_size($this->foto_carteirinha);
                      $reg_foto_carteirinha = file_get_contents($this->foto_carteirinha); 
                      $this->foto_carteirinha = $reg_foto_carteirinha; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "FOTO CARTEIRINHA " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->foto_carteirinha = "";
                      if (!isset($Campos_Erros['foto_carteirinha']))
                      {
                          $Campos_Erros['foto_carteirinha'] = array();
                      }
                      $Campos_Erros['foto_carteirinha'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['foto_carteirinha']) || !is_array($this->NM_ajax_info['errList']['foto_carteirinha']))
                      {
                          $this->NM_ajax_info['errList']['foto_carteirinha'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto_carteirinha'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->foto_carteirinha = "" ; 
                  } 
                  else 
                  { 
                     $Campos_Crit .= "FOTO CARTEIRINHA " . $this->Ini->Nm_lang['lang_errm_ivtp'];  
                      if (!isset($Campos_Erros['foto_carteirinha']))
                      {
                          $Campos_Erros['foto_carteirinha'] = array();
                      }
                      $Campos_Erros['foto_carteirinha'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                      if (!isset($this->NM_ajax_info['errList']['foto_carteirinha']) || !is_array($this->NM_ajax_info['errList']['foto_carteirinha']))
                      {
                          $this->NM_ajax_info['errList']['foto_carteirinha'] = array();
                      }
                      $this->NM_ajax_info['errList']['foto_carteirinha'][] = $this->Ini->Nm_lang['lang_errm_ivtp'];
                  } 
              } 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form']['foto_carteirinha']) && $this->foto_carteirinha_limpa != "S")
          {
              $this->foto_carteirinha = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form']['foto_carteirinha'];
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
    $this->nmgp_dados_form['idpet'] = $this->idpet;
    $this->nmgp_dados_form['nome'] = $this->nome;
    $this->nmgp_dados_form['sexo'] = $this->sexo;
    $this->nmgp_dados_form['idpet_especie'] = $this->idpet_especie;
    $this->nmgp_dados_form['idpet_pelagem'] = $this->idpet_pelagem;
    $this->nmgp_dados_form['idpet_raca'] = $this->idpet_raca;
    $this->nmgp_dados_form['data_nascimento'] = (strlen(trim($this->data_nascimento)) > 19) ? str_replace(".", ":", $this->data_nascimento) : trim($this->data_nascimento);
    $this->nmgp_dados_form['pet_obs'] = $this->pet_obs;
    if (empty($this->foto_pet))
    {
        $this->foto_pet = $this->nmgp_dados_form['foto_pet'];
    }
    $this->nmgp_dados_form['foto_pet'] = $this->foto_pet;
    $this->nmgp_dados_form['foto_pet_limpa'] = $this->foto_pet_limpa;
    if (empty($this->foto_carteirinha))
    {
        $this->foto_carteirinha = $this->nmgp_dados_form['foto_carteirinha'];
    }
    $this->nmgp_dados_form['foto_carteirinha'] = $this->foto_carteirinha;
    $this->nmgp_dados_form['foto_carteirinha_limpa'] = $this->foto_carteirinha_limpa;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['idpet'] = $this->idpet;
      nm_limpa_numero($this->idpet, $this->field_config['idpet']['symbol_grp']) ; 
      $this->Before_unformat['data_nascimento'] = $this->data_nascimento;
      nm_limpa_data($this->data_nascimento, $this->field_config['data_nascimento']['date_sep']) ; 
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
      if ($Nome_Campo == "idpet")
      {
          nm_limpa_numero($this->idpet, $this->field_config['idpet']['symbol_grp']) ; 
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
      if ('' !== $this->idpet || (!empty($format_fields) && isset($format_fields['idpet'])))
      {
          nmgp_Form_Num_Val($this->idpet, $this->field_config['idpet']['symbol_grp'], $this->field_config['idpet']['symbol_dec'], "0", "S", $this->field_config['idpet']['format_neg'], "", "", "-", $this->field_config['idpet']['symbol_fmt']) ; 
      }
      if ((!empty($this->data_nascimento) && 'null' != $this->data_nascimento) || (!empty($format_fields) && isset($format_fields['data_nascimento'])))
      {
          nm_volta_data($this->data_nascimento, $this->field_config['data_nascimento']['date_format']) ; 
          nmgp_Form_Datas($this->data_nascimento, $this->field_config['data_nascimento']['date_format'], $this->field_config['data_nascimento']['date_sep']) ;  
      }
      elseif ('null' == $this->data_nascimento || '' == $this->data_nascimento)
      {
          $this->data_nascimento = '';
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
      $guarda_format_hora = $this->field_config['data_nascimento']['date_format'];
      if ($this->data_nascimento != "")  
      { 
          nm_conv_data($this->data_nascimento, $this->field_config['data_nascimento']['date_format']) ; 
          $this->data_nascimento_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->data_nascimento_hora = substr($this->data_nascimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->data_nascimento_hora = substr($this->data_nascimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->data_nascimento_hora = substr($this->data_nascimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->data_nascimento_hora = substr($this->data_nascimento_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->data_nascimento_hora = substr($this->data_nascimento_hora, 0, -4);
          }
      } 
      if ($this->data_nascimento == "" && $use_null)  
      { 
          $this->data_nascimento = "null" ; 
      } 
      $this->field_config['data_nascimento']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_idpet();
          $this->ajax_return_values_nome();
          $this->ajax_return_values_sexo();
          $this->ajax_return_values_idpet_especie();
          $this->ajax_return_values_idpet_pelagem();
          $this->ajax_return_values_idpet_raca();
          $this->ajax_return_values_data_nascimento();
          $this->ajax_return_values_pet_obs();
          $this->ajax_return_values_foto_pet();
          $this->ajax_return_values_foto_carteirinha();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['idpet']['keyVal'] = form_pet_pack_protect_string($this->nmgp_dados_form['idpet']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['foreign_key']['idpet'] = $this->nmgp_dados_form['idpet'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['where_filter'] = "idpet = " . $this->nmgp_dados_form['idpet'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['where_detal']  = "idpet = " . $this->nmgp_dados_form['idpet'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['form_obs_pet_script_case_init'] ]['form_obs_pet']['total']);
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'] = array(); 
}
$aLookup[] = array(form_pet_pack_protect_string('') => str_replace('<', '&lt;',form_pet_pack_protect_string(' ')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj + ' - ' + nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
   {
       $nm_comando = "SELECT idcliente, concat(cpf_cnpj, ' - ', nome_fantasia)  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj&' - '&nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj + ' - ' + nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   else
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'][] = $rs->fields[0];
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
              $this->NM_ajax_info['fldList']['idcliente']['valList'][$i] = form_pet_pack_protect_string($v);
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

          //----- idpet
   function ajax_return_values_idpet($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idpet", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idpet);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['idpet'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("idpet", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- nome
   function ajax_return_values_nome($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("nome", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->nome);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['nome'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- sexo
   function ajax_return_values_sexo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("sexo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->sexo);
              $aLookup = array();
              $this->_tmp_lookup_sexo = $this->sexo;

$aLookup[] = array(form_pet_pack_protect_string('MACHO') => str_replace('<', '&lt;',form_pet_pack_protect_string("MACHO")));
$aLookup[] = array(form_pet_pack_protect_string('FEMEA') => str_replace('<', '&lt;',form_pet_pack_protect_string("FEMEA")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_sexo'][] = 'MACHO';
$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_sexo'][] = 'FEMEA';
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"sexo\"";
          if (isset($this->NM_ajax_info['select_html']['sexo']) && !empty($this->NM_ajax_info['select_html']['sexo']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['sexo']);
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

                  if ($this->sexo == $sValue)
                  {
                      $this->_tmp_lookup_sexo = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['sexo'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['sexo']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['sexo']['valList'][$i] = form_pet_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['sexo']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['sexo']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['sexo']['labList'] = $aLabel;
          }
   }

          //----- idpet_especie
   function ajax_return_values_idpet_especie($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idpet_especie", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idpet_especie);
              $aLookup = array();
              $this->_tmp_lookup_idpet_especie = $this->idpet_especie;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   $nm_comando = "SELECT idpet_especie, descricao  FROM pet_especie  ORDER BY descricao";

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'][] = $rs->fields[0];
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
          $sSelComp = "name=\"idpet_especie\"";
          if (isset($this->NM_ajax_info['select_html']['idpet_especie']) && !empty($this->NM_ajax_info['select_html']['idpet_especie']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['idpet_especie']);
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

                  if ($this->idpet_especie == $sValue)
                  {
                      $this->_tmp_lookup_idpet_especie = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['idpet_especie'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['idpet_especie']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['idpet_especie']['valList'][$i] = form_pet_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['idpet_especie']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['idpet_especie']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['idpet_especie']['labList'] = $aLabel;
          }
   }

          //----- idpet_pelagem
   function ajax_return_values_idpet_pelagem($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idpet_pelagem", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idpet_pelagem);
              $aLookup = array();
              $this->_tmp_lookup_idpet_pelagem = $this->idpet_pelagem;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   $nm_comando = "SELECT idpet_pelagem, descricao  FROM pet_pelagem  ORDER BY descricao";

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'][] = $rs->fields[0];
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
          $sSelComp = "name=\"idpet_pelagem\"";
          if (isset($this->NM_ajax_info['select_html']['idpet_pelagem']) && !empty($this->NM_ajax_info['select_html']['idpet_pelagem']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['idpet_pelagem']);
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

                  if ($this->idpet_pelagem == $sValue)
                  {
                      $this->_tmp_lookup_idpet_pelagem = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['idpet_pelagem'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['idpet_pelagem']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['idpet_pelagem']['valList'][$i] = form_pet_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['idpet_pelagem']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['idpet_pelagem']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['idpet_pelagem']['labList'] = $aLabel;
          }
   }

          //----- idpet_raca
   function ajax_return_values_idpet_raca($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("idpet_raca", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->idpet_raca);
              $aLookup = array();
              $this->_tmp_lookup_idpet_raca = $this->idpet_raca;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'] = array(); 
}
$aLookup[] = array(form_pet_pack_protect_string('') => str_replace('<', '&lt;',form_pet_pack_protect_string(' ')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   $nm_comando = "SELECT idpet_raca, upper(descricao)  FROM pet_raca  ORDER BY descricao";

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_pet_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'][] = $rs->fields[0];
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
          $sSelComp = "name=\"idpet_raca\"";
          if (isset($this->NM_ajax_info['select_html']['idpet_raca']) && !empty($this->NM_ajax_info['select_html']['idpet_raca']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['idpet_raca']);
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

                  if ($this->idpet_raca == $sValue)
                  {
                      $this->_tmp_lookup_idpet_raca = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['idpet_raca'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['idpet_raca']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['idpet_raca']['valList'][$i] = form_pet_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['idpet_raca']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['idpet_raca']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['idpet_raca']['labList'] = $aLabel;
          }
   }

          //----- data_nascimento
   function ajax_return_values_data_nascimento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("data_nascimento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->data_nascimento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['data_nascimento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pet_obs
   function ajax_return_values_pet_obs($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pet_obs", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pet_obs);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pet_obs'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- foto_pet
   function ajax_return_values_foto_pet($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("foto_pet", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->foto_pet);
              $aLookup = array();
   $out_foto_pet = '';
   $out1_foto_pet = '';
   if ($this->foto_pet != "" && $this->foto_pet != "none")   
   { 
       $out_foto_pet = $this->Ini->path_imag_temp . "/sc_foto_pet_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_foto_pet = $out_foto_pet; 
       $arq_foto_pet = fopen($this->Ini->root . $out_foto_pet, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->foto_pet, 0, 12));
           if (is_string($this->foto_pet) && substr($this->foto_pet, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->foto_pet = nm_conv_img_access($this->foto_pet);
           } 
       } 
       if (is_string($this->foto_pet) && substr($this->foto_pet, 0, 4) == "*nm*") 
       { 
           $this->foto_pet = substr($this->foto_pet, 4) ; 
           $this->foto_pet = base64_decode($this->foto_pet) ; 
       } 
       $img_pos_bm = (is_string($this->foto_pet)) ? strpos($this->foto_pet, "BM") : false; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->foto_pet = substr($this->foto_pet, $img_pos_bm) ; 
       } 
       fwrite($arq_foto_pet, (string)$this->foto_pet) ;  
       fclose($arq_foto_pet) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto_pet, true);
       $this->nmgp_return_img['foto_pet'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['foto_pet'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       $out_foto_pet = $this->Ini->path_imag_temp . "/sc_" . "foto_pet_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ; 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       if (!$this->Ini->Gd_missing)
       { 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto_pet, true);
           $sc_obj_img->setWidth(300);
           $sc_obj_img->setHeight(300);
           $sc_obj_img->setManterAspecto(true);
           $sc_obj_img->createImg($this->Ini->root . $out_foto_pet);
       } 
       else 
       { 
           $out_foto_pet = $out1_foto_pet;
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['foto_pet'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_foto_pet,
               'imgOrig' => $out1_foto_pet,
               'keepImg' => $sKeepImage,
              );
          }
   }

          //----- foto_carteirinha
   function ajax_return_values_foto_carteirinha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("foto_carteirinha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->foto_carteirinha);
              $aLookup = array();
   $out_foto_carteirinha = '';
   $out1_foto_carteirinha = '';
   if ($this->foto_carteirinha != "" && $this->foto_carteirinha != "none")   
   { 
       $out_foto_carteirinha = $this->Ini->path_imag_temp . "/sc_foto_carteirinha_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $out1_foto_carteirinha = $out_foto_carteirinha; 
       $arq_foto_carteirinha = fopen($this->Ini->root . $out_foto_carteirinha, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->foto_carteirinha, 0, 12));
           if (is_string($this->foto_carteirinha) && substr($this->foto_carteirinha, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->foto_carteirinha = nm_conv_img_access($this->foto_carteirinha);
           } 
       } 
       if (is_string($this->foto_carteirinha) && substr($this->foto_carteirinha, 0, 4) == "*nm*") 
       { 
           $this->foto_carteirinha = substr($this->foto_carteirinha, 4) ; 
           $this->foto_carteirinha = base64_decode($this->foto_carteirinha) ; 
       } 
       $img_pos_bm = (is_string($this->foto_carteirinha)) ? strpos($this->foto_carteirinha, "BM") : false; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->foto_carteirinha = substr($this->foto_carteirinha, $img_pos_bm) ; 
       } 
       fwrite($arq_foto_carteirinha, (string)$this->foto_carteirinha) ;  
       fclose($arq_foto_carteirinha) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto_carteirinha, true);
       $this->nmgp_return_img['foto_carteirinha'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['foto_carteirinha'][1] = $sc_obj_img->getWidth();
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       $out_foto_carteirinha = $this->Ini->path_imag_temp . "/sc_" . "foto_carteirinha_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ; 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       if (!$this->Ini->Gd_missing)
       { 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto_carteirinha, true);
           $sc_obj_img->setWidth(300);
           $sc_obj_img->setHeight(300);
           $sc_obj_img->setManterAspecto(true);
           $sc_obj_img->createImg($this->Ini->root . $out_foto_carteirinha);
       } 
       else 
       { 
           $out_foto_carteirinha = $out1_foto_carteirinha;
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['foto_carteirinha'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($this->Ini->Nm_lang['lang_othr_show_imgg']),
               'imgFile' => $out_foto_carteirinha,
               'imgOrig' => $out1_foto_carteirinha,
               'keepImg' => $sKeepImage,
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['upload_dir'][$fieldName][] = $newName;
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
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']))
          {
               $sc_where_pos = " WHERE ((idpet < $this->idpet))";
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
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->idpet)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opcao'] = '';

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
      $NM_val_form['idcliente'] = $this->idcliente;
      $NM_val_form['idpet'] = $this->idpet;
      $NM_val_form['nome'] = $this->nome;
      $NM_val_form['sexo'] = $this->sexo;
      $NM_val_form['idpet_especie'] = $this->idpet_especie;
      $NM_val_form['idpet_pelagem'] = $this->idpet_pelagem;
      $NM_val_form['idpet_raca'] = $this->idpet_raca;
      $NM_val_form['data_nascimento'] = $this->data_nascimento;
      $NM_val_form['pet_obs'] = $this->pet_obs;
      $NM_val_form['foto_pet'] = $this->foto_pet;
      $NM_val_form['foto_carteirinha'] = $this->foto_carteirinha;
      if ($this->idpet === "" || is_null($this->idpet))  
      { 
          $this->idpet = 0;
      } 
      if ($this->idcliente === "" || is_null($this->idcliente))  
      { 
          $this->idcliente = 0;
          $this->sc_force_zero[] = 'idcliente';
      } 
      if ($this->idpet_raca === "" || is_null($this->idpet_raca))  
      { 
          $this->idpet_raca = 0;
          $this->sc_force_zero[] = 'idpet_raca';
      } 
      if ($this->idpet_especie === "" || is_null($this->idpet_especie))  
      { 
          $this->idpet_especie = 0;
          $this->sc_force_zero[] = 'idpet_especie';
      } 
      if ($this->idpet_pelagem === "" || is_null($this->idpet_pelagem))  
      { 
          $this->idpet_pelagem = 0;
          $this->sc_force_zero[] = 'idpet_pelagem';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->nome_before_qstr = $this->nome;
          $this->nome = substr($this->Db->qstr($this->nome), 1, -1); 
          if ($this->nome == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->nome = "null"; 
              $NM_val_null[] = "nome";
          } 
          if ($this->data_nascimento == "")  
          { 
              $this->data_nascimento = "null"; 
              $NM_val_null[] = "data_nascimento";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->foto_pet, 0, 12));
              if (is_string($this->foto_pet) && substr($this->foto_pet, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->foto_pet = nm_conv_img_access($this->foto_pet);
              } 
              if (!empty($this->foto_pet) && $this->foto_pet != 'null' && substr($this->foto_pet, 0, 4) != "*nm*") 
              { 
                  $this->foto_pet = "*nm*" . base64_encode($this->foto_pet) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->foto_pet) && $this->foto_pet != 'null' && substr($this->foto_pet, 0, 4) != "*nm*") 
              { 
                  $this->foto_pet = "*nm*" . base64_encode($this->foto_pet) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->foto_pet) && $this->foto_pet != 'null' && substr($this->foto_pet, 0, 4) != "*nm*") 
              { 
                  $this->foto_pet = "*nm*" . base64_encode($this->foto_pet) ; 
              } 
          } 
          else
          { 
              $this->foto_pet =  substr($this->Db->qstr($this->foto_pet), 1, -1);
          } 
          if ($this->foto_pet == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->foto_pet = "null"; 
              $NM_val_null[] = "foto_pet";
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $nm_tmp = nm_conv_img_access(substr($this->foto_carteirinha, 0, 12));
              if (is_string($this->foto_carteirinha) && substr($this->foto_carteirinha, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
              { 
                  $this->foto_carteirinha = nm_conv_img_access($this->foto_carteirinha);
              } 
              if (!empty($this->foto_carteirinha) && $this->foto_carteirinha != 'null' && substr($this->foto_carteirinha, 0, 4) != "*nm*") 
              { 
                  $this->foto_carteirinha = "*nm*" . base64_encode($this->foto_carteirinha) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              if ($this->Ini->nm_tpbanco != "pdo_sqlsrv" && !empty($this->foto_carteirinha) && $this->foto_carteirinha != 'null' && substr($this->foto_carteirinha, 0, 4) != "*nm*") 
              { 
                  $this->foto_carteirinha = "*nm*" . base64_encode($this->foto_carteirinha) ; 
              } 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              if ($this->Ini->nm_tpbanco != 'pdo_ibm' && !empty($this->foto_carteirinha) && $this->foto_carteirinha != 'null' && substr($this->foto_carteirinha, 0, 4) != "*nm*") 
              { 
                  $this->foto_carteirinha = "*nm*" . base64_encode($this->foto_carteirinha) ; 
              } 
          } 
          else
          { 
              $this->foto_carteirinha =  substr($this->Db->qstr($this->foto_carteirinha), 1, -1);
          } 
          if ($this->foto_carteirinha == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->foto_carteirinha = "null"; 
              $NM_val_null[] = "foto_carteirinha";
          } 
          if ($this->sexo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->sexo = "null"; 
              $NM_val_null[] = "sexo";
          } 
          $this->pet_obs_before_qstr = $this->pet_obs;
          $this->pet_obs = substr($this->Db->qstr($this->pet_obs), 1, -1); 
          if ($this->pet_obs == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pet_obs = "null"; 
              $NM_val_null[] = "pet_obs";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_pet_pack_ajax_response();
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
                  $SC_fields_update[] = "idcliente = $this->idcliente, idpet_raca = $this->idpet_raca, idpet_especie = $this->idpet_especie, idpet_pelagem = $this->idpet_pelagem, nome = '$this->nome', data_nascimento = #$this->data_nascimento#, sexo = '$this->sexo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idpet_raca = $this->idpet_raca, idpet_especie = $this->idpet_especie, idpet_pelagem = $this->idpet_pelagem, nome = '$this->nome', data_nascimento = " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", sexo = '$this->sexo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idpet_raca = $this->idpet_raca, idpet_especie = $this->idpet_especie, idpet_pelagem = $this->idpet_pelagem, nome = '$this->nome', data_nascimento = " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", sexo = '$this->sexo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idpet_raca = $this->idpet_raca, idpet_especie = $this->idpet_especie, idpet_pelagem = $this->idpet_pelagem, nome = '$this->nome', data_nascimento = EXTEND('$this->data_nascimento', YEAR TO DAY), sexo = '$this->sexo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idpet_raca = $this->idpet_raca, idpet_especie = $this->idpet_especie, idpet_pelagem = $this->idpet_pelagem, nome = '$this->nome', data_nascimento = " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", sexo = '$this->sexo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idpet_raca = $this->idpet_raca, idpet_especie = $this->idpet_especie, idpet_pelagem = $this->idpet_pelagem, nome = '$this->nome', data_nascimento = " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", sexo = '$this->sexo'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "idcliente = $this->idcliente, idpet_raca = $this->idpet_raca, idpet_especie = $this->idpet_especie, idpet_pelagem = $this->idpet_pelagem, nome = '$this->nome', data_nascimento = " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", sexo = '$this->sexo'"; 
              } 
              $temp_cmd_sql = "";
              if ($this->foto_pet_limpa == "S")
              {
                  if ($this->foto_pet != "null")
                  {
                      $this->foto_pet = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "foto_pet = '" . $this->foto_pet . "'";
                  }
                  $this->foto_pet = "";
              }
              else
              {
                  if ($this->foto_pet != "none" && $this->foto_pet != "")
                  {
                      $NM_conteudo =  $this->foto_pet;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " foto_pet = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "foto_pet";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $temp_cmd_sql = "";
              if ($this->foto_carteirinha_limpa == "S")
              {
                  if ($this->foto_carteirinha != "null")
                  {
                      $this->foto_carteirinha = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                  }
                  else
                  {
                      $temp_cmd_sql = "foto_carteirinha = '" . $this->foto_carteirinha . "'";
                  }
                  $this->foto_carteirinha = "";
              }
              else
              {
                  if ($this->foto_carteirinha != "none" && $this->foto_carteirinha != "")
                  {
                      $NM_conteudo =  $this->foto_carteirinha;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      }
                      else
                      {
                          $temp_cmd_sql .= " foto_carteirinha = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "foto_carteirinha";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              if ($this->foto_pet_limpa == "S" || ($this->foto_pet != "none" && $this->foto_pet != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "foto_pet = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "foto_pet = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "foto_pet = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "foto_pet = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "foto_pet = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "foto_pet = empty_blob()"; 
                  } 
              } 
              if ($this->foto_carteirinha_limpa == "S" || ($this->foto_carteirinha != "none" && $this->foto_carteirinha != "" && in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase)) 
                  { 
                      $SC_fields_update[] = "foto_carteirinha = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql)) 
                  { 
                      $SC_fields_update[] = "foto_carteirinha = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
                  { 
                      $SC_fields_update[] = "foto_carteirinha = ''"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix)) 
                  { 
                      $SC_fields_update[] = "foto_carteirinha = null"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite)) 
                  { 
                      $SC_fields_update[] = "foto_carteirinha = ''"; 
                  } 
                  else 
                  { 
                      $SC_fields_update[] = "foto_carteirinha = empty_blob()"; 
                  } 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE idpet = $this->idpet ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE idpet = $this->idpet ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE idpet = $this->idpet ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE idpet = $this->idpet ";  
              }  
              else  
              {
                  $comando .= " WHERE idpet = $this->idpet ";  
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
                                  form_pet_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              $this->nome = $this->nome_before_qstr;
              $this->pet_obs = $this->pet_obs_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if ($this->foto_pet_limpa == "S" && (!isset($this->Ini->nm_bases_oracle) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle)) && (!isset($this->Ini->nm_bases_informix) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ", \"foto_pet\", \"\",  \"idpet = $this->idpet\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "foto_pet", "",  "idpet = $this->idpet"); 
                  } 
                  else 
                  { 
                      if ($this->foto_pet != "none" && $this->foto_pet != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ", \"foto_pet\", $this->foto_pet,  \"idpet = $this->idpet\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "foto_pet", $this->foto_pet,  "idpet = $this->idpet"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_pet_pack_ajax_response();
                      }
                      exit;  
                  }   
                  if ($this->foto_carteirinha_limpa == "S" && (!isset($this->Ini->nm_bases_oracle) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle)) && (!isset($this->Ini->nm_bases_informix) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))) 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ", \"foto_carteirinha\", \"\",  \"idpet = $this->idpet\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "foto_carteirinha", "",  "idpet = $this->idpet"); 
                  } 
                  else 
                  { 
                      if ($this->foto_carteirinha != "none" && $this->foto_carteirinha != "") 
                      { 
                          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ", \"foto_carteirinha\", $this->foto_carteirinha,  \"idpet = $this->idpet\")"; 
                          $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "foto_carteirinha", $this->foto_carteirinha,  "idpet = $this->idpet"); 
                      } 
                  } 
                  if ($rs === false) 
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_pet_pack_ajax_response();
                      }
                      exit;  
                  }   
              }   
              if ($this->foto_pet_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['foto_pet_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              if ($this->foto_carteirinha_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['foto_carteirinha_salva'] = array(
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
                  $this->NM_ajax_info['fldList']['foto_pet_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
                  $this->NM_ajax_info['fldList']['foto_carteirinha_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }


              if     (isset($NM_val_form) && isset($NM_val_form['idpet'])) { $this->idpet = $NM_val_form['idpet']; }
              elseif (isset($this->idpet)) { $this->nm_limpa_alfa($this->idpet); }
              if     (isset($NM_val_form) && isset($NM_val_form['idcliente'])) { $this->idcliente = $NM_val_form['idcliente']; }
              elseif (isset($this->idcliente)) { $this->nm_limpa_alfa($this->idcliente); }
              if     (isset($NM_val_form) && isset($NM_val_form['idpet_raca'])) { $this->idpet_raca = $NM_val_form['idpet_raca']; }
              elseif (isset($this->idpet_raca)) { $this->nm_limpa_alfa($this->idpet_raca); }
              if     (isset($NM_val_form) && isset($NM_val_form['idpet_especie'])) { $this->idpet_especie = $NM_val_form['idpet_especie']; }
              elseif (isset($this->idpet_especie)) { $this->nm_limpa_alfa($this->idpet_especie); }
              if     (isset($NM_val_form) && isset($NM_val_form['idpet_pelagem'])) { $this->idpet_pelagem = $NM_val_form['idpet_pelagem']; }
              elseif (isset($this->idpet_pelagem)) { $this->nm_limpa_alfa($this->idpet_pelagem); }
              if     (isset($NM_val_form) && isset($NM_val_form['nome'])) { $this->nome = $NM_val_form['nome']; }
              elseif (isset($this->nome)) { $this->nm_limpa_alfa($this->nome); }
              if     (isset($NM_val_form) && isset($NM_val_form['pet_obs'])) { $this->pet_obs = $NM_val_form['pet_obs']; }
              elseif (isset($this->pet_obs)) { $this->nm_limpa_alfa($this->pet_obs); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('idcliente', 'idpet', 'nome', 'sexo', 'idpet_especie', 'idpet_pelagem', 'idpet_raca', 'data_nascimento', 'pet_obs'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
          { 
              $NM_seq_auto = "NULL, ";
              $NM_cmp_auto = "idpet, ";
          } 
          $bInsertOk = true;
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_pet_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $_test_file = $this->fetchUniqueUploadName($this->foto_pet_scfile_name, $dir_file, "foto_pet");
              if (trim($this->foto_pet_scfile_name) != $_test_file)
              {
                  $this->foto_pet_scfile_name = $_test_file;
                  $this->foto_pet = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->foto_carteirinha_scfile_name, $dir_file, "foto_carteirinha");
              if (trim($this->foto_carteirinha_scfile_name) != $_test_file)
              {
                  $this->foto_carteirinha_scfile_name = $_test_file;
                  $this->foto_carteirinha = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES ($this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', #$this->data_nascimento#, '$this->foto_pet', '$this->foto_carteirinha', '$this->sexo')"; 
              }
              elseif ($this->Ini->nm_tpbanco == "pdo_sqlsrv")
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES ($this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", '', '', '$this->sexo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES ($this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", '$this->foto_pet', '$this->foto_carteirinha', '$this->sexo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES ($this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", '$this->foto_pet', '$this->foto_carteirinha', '$this->sexo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", EMPTY_BLOB(), EMPTY_BLOB(), '$this->sexo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', EXTEND('$this->data_nascimento', YEAR TO DAY), null, null, '$this->sexo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", '', '', '$this->sexo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", '', '', '$this->sexo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", '', '', '$this->sexo')"; 
              }
              elseif ($this->Ini->nm_tpbanco =='pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", EMPTY_BLOB(), EMPTY_BLOB(), '$this->sexo')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo) VALUES (" . $NM_seq_auto . "$this->idcliente, $this->idpet_raca, $this->idpet_especie, $this->idpet_pelagem, '$this->nome', " . $this->Ini->date_delim . $this->data_nascimento . $this->Ini->date_delim1 . ", '$this->foto_pet', '$this->foto_carteirinha', '$this->sexo')"; 
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
                              form_pet_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase)) 
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select @@identity"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_pet_pack_ajax_response();
                      }
                      exit; 
                  } 
                  $this->idpet =  $rsy->fields[0];
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
                  $this->idpet = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT dbinfo('sqlca.sqlerrd1') FROM " . $this->Ini->nm_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->idpet = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select .currval from dual"; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->idpet = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $str_tabela = "SYSIBM.SYSDUMMY1"; 
                  if($this->Ini->nm_con_use_schema == "N") 
                  { 
                          $str_tabela = "SYSDUMMY1"; 
                  } 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SELECT IDENTITY_VAL_LOCAL() FROM " . $str_tabela; 
                  $rsy = $this->Db->Execute($_SESSION['scriptcase']['sc_sql_ult_comando']); 
                  if ($rsy === false && !$rsy->EOF)  
                  { 
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                      exit; 
                  } 
                  $this->idpet = $rsy->fields[0];
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
                  $this->idpet = $rsy->fields[0];
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
                  $this->idpet = $rsy->fields[0];
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
                  $this->idpet = $rsy->fields[0];
                  $rsy->Close(); 
              } 
              $this->nome = $this->nome_before_qstr;
              $this->pet_obs = $this->pet_obs_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
                  if (trim($this->foto_pet ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  foto_pet , $this->foto_pet,  \"idpet = $this->idpet\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "foto_pet", $this->foto_pet,  "idpet = $this->idpet"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_pet_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
                  if (trim($this->foto_carteirinha ) != "") 
                  { 
                      $_SESSION['scriptcase']['sc_sql_ult_comando'] = "UpdateBlob(" . $this->Ini->nm_tabela . ",  foto_carteirinha , $this->foto_carteirinha,  \"idpet = $this->idpet\")"; 
                      $rs = $this->Db->UpdateBlob($this->Ini->nm_tabela, "foto_carteirinha", $this->foto_carteirinha,  "idpet = $this->idpet"); 
                      if ($rs === false)  
                      { 
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_pet_pack_ajax_response();
                          }
                          exit; 
                      }  
                  }  
              }  
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->nome = $this->nome_before_qstr;
              $this->pet_obs = $this->pet_obs_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->idpet = substr($this->Db->qstr($this->idpet), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "idpet = " . $this->idpet . "";
              $this->form_obs_pet->ini_controle();
              if ($this->form_obs_pet->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where idpet = $this->idpet "); 
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
                          form_pet_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['parms'] = "idpet?#?$this->idpet?@?"; 
      }
      $this->nmgp_dados_form['foto_pet'] = ""; 
      $this->foto_pet_limpa = ""; 
      $this->foto_pet_salva = ""; 
      $this->nmgp_dados_form['foto_carteirinha'] = ""; 
      $this->foto_carteirinha_limpa = ""; 
      $this->foto_carteirinha_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->idpet = null === $this->idpet ? null : substr($this->Db->qstr($this->idpet), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT idpet, idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, str_replace (convert(char(10),data_nascimento,102), '.', '-') + ' ' + convert(char(8),data_nascimento,20), foto_pet, foto_carteirinha, sexo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT idpet, idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, convert(char(23),data_nascimento,121), foto_pet, foto_carteirinha, sexo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT idpet, idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT idpet, idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, EXTEND(data_nascimento, YEAR TO DAY), LOTOFILE(foto_pet, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_foto_pet', 'client'), LOTOFILE(foto_carteirinha, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_foto_carteirinha', 'client'), sexo from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT idpet, idcliente, idpet_raca, idpet_especie, idpet_pelagem, nome, data_nascimento, foto_pet, foto_carteirinha, sexo from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "idpet = $this->idpet"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "idpet = $this->idpet"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "idpet = $this->idpet"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "idpet = $this->idpet"; 
              }  
              else  
              {
                  $aWhere[] = "idpet = $this->idpet"; 
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
          $sc_order_by = "idpet";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['select'] = ""; 
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter'] = true;
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
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
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
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->idpet = $rs->fields[0] ; 
              $this->nmgp_dados_select['idpet'] = $this->idpet;
              $this->idcliente = $rs->fields[1] ; 
              $this->nmgp_dados_select['idcliente'] = $this->idcliente;
              $this->idpet_raca = $rs->fields[2] ; 
              $this->nmgp_dados_select['idpet_raca'] = $this->idpet_raca;
              $this->idpet_especie = $rs->fields[3] ; 
              $this->nmgp_dados_select['idpet_especie'] = $this->idpet_especie;
              $this->idpet_pelagem = $rs->fields[4] ; 
              $this->nmgp_dados_select['idpet_pelagem'] = $this->idpet_pelagem;
              $this->nome = $rs->fields[5] ; 
              $this->nmgp_dados_select['nome'] = $this->nome;
              $this->data_nascimento = $rs->fields[6] ; 
              $this->nmgp_dados_select['data_nascimento'] = $this->data_nascimento;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->foto_pet = $this->Db->BlobDecode($rs->fields[7]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->foto_pet = $this->Db->BlobDecode($rs->fields[7]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[7]) && !empty($rs->fields[7]) && is_file($rs->fields[7])) 
                  { 
                     $this->foto_pet = file_get_contents($rs->fields[7]);
                  }else 
                  { 
                     $this->foto_pet = ''; 
                  } 
              } 
              else
              { 
                  $this->foto_pet = $rs->fields[7] ; 
              } 
              $this->nmgp_dados_select['foto_pet'] = $this->foto_pet;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $this->foto_carteirinha = $this->Db->BlobDecode($rs->fields[8]) ; 
              } 
              elseif ($this->Ini->nm_tpbanco == 'pdo_oracle')
              { 
                  $this->foto_carteirinha = $this->Db->BlobDecode($rs->fields[8]) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  if(isset($rs->fields[8]) && !empty($rs->fields[8]) && is_file($rs->fields[8])) 
                  { 
                     $this->foto_carteirinha = file_get_contents($rs->fields[8]);
                  }else 
                  { 
                     $this->foto_carteirinha = ''; 
                  } 
              } 
              else
              { 
                  $this->foto_carteirinha = $rs->fields[8] ; 
              } 
              $this->nmgp_dados_select['foto_carteirinha'] = $this->foto_carteirinha;
              $this->sexo = $rs->fields[9] ; 
              $this->nmgp_dados_select['sexo'] = $this->sexo;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->idpet = (string)$this->idpet; 
              $this->idcliente = (string)$this->idcliente; 
              $this->idpet_raca = (string)$this->idpet_raca; 
              $this->idpet_especie = (string)$this->idpet_especie; 
              $this->idpet_pelagem = (string)$this->idpet_pelagem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['parms'] = "idpet?#?$this->idpet?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sub_dir'][0]  = "";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sub_dir'][1]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_select'] = $this->nmgp_dados_select;
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
              $this->idpet = "";  
              $this->nmgp_dados_form["idpet"] = $this->idpet;
              $this->idcliente = "";  
              $this->nmgp_dados_form["idcliente"] = $this->idcliente;
              $this->idpet_raca = "";  
              $this->nmgp_dados_form["idpet_raca"] = $this->idpet_raca;
              $this->idpet_especie = "";  
              $this->nmgp_dados_form["idpet_especie"] = $this->idpet_especie;
              $this->idpet_pelagem = "";  
              $this->nmgp_dados_form["idpet_pelagem"] = $this->idpet_pelagem;
              $this->nome = "";  
              $this->nmgp_dados_form["nome"] = $this->nome;
              $this->data_nascimento = "";  
              $this->data_nascimento_hora = "" ;  
              $this->nmgp_dados_form["data_nascimento"] = $this->data_nascimento;
              $this->foto_pet = "";  
              $this->foto_pet_ul_name = "" ;  
              $this->foto_pet_ul_type = "" ;  
              $this->nmgp_dados_form["foto_pet"] = $this->foto_pet;
              $this->foto_carteirinha = "";  
              $this->foto_carteirinha_ul_name = "" ;  
              $this->foto_carteirinha_ul_type = "" ;  
              $this->nmgp_dados_form["foto_carteirinha"] = $this->foto_carteirinha;
              $this->sexo = "";  
              $this->nmgp_dados_form["sexo"] = $this->sexo;
              $this->pet_obs = "";  
              $this->nmgp_dados_form["pet_obs"] = $this->pet_obs;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_obs_pet']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
  }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_pet_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['retorno_edit'] . "';";
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
       $out_foto_pet = "";  
   } 
   else 
   { 
       $out_foto_pet = $this->foto_pet;  
   } 
   if ($this->foto_pet != "" && $this->foto_pet != "none")   
   { 
       $out_foto_pet = $this->Ini->path_imag_temp . "/sc_foto_pet_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_foto_pet = fopen($this->Ini->root . $out_foto_pet, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->foto_pet, 0, 12));
           if (is_string($this->foto_pet) && substr($this->foto_pet, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->foto_pet = nm_conv_img_access($this->foto_pet);
           } 
       } 
       if (is_string($this->foto_pet) && substr($this->foto_pet, 0, 4) == "*nm*") 
       { 
           $this->foto_pet = substr($this->foto_pet, 4) ; 
           $this->foto_pet = base64_decode($this->foto_pet) ; 
       } 
       $img_pos_bm = (is_string($this->foto_pet)) ? strpos($this->foto_pet, "BM") : false; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->foto_pet = substr($this->foto_pet, $img_pos_bm) ; 
       } 
       fwrite($arq_foto_pet, (string)$this->foto_pet) ;  
       fclose($arq_foto_pet) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto_pet, true);
       $this->nmgp_return_img['foto_pet'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['foto_pet'][1] = $sc_obj_img->getWidth();
       $out1_foto_pet = $out_foto_pet; 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       $out_foto_pet = $this->Ini->path_imag_temp . "/sc_" . "foto_pet_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ; 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       if (!$this->Ini->Gd_missing)
       { 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto_pet, true);
           $sc_obj_img->setWidth(300);
           $sc_obj_img->setHeight(300);
           $sc_obj_img->setManterAspecto(true);
           $sc_obj_img->createImg($this->Ini->root . $out_foto_pet);
       } 
       else 
       { 
           $out_foto_pet = $out1_foto_pet;
       } 
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_foto_pet;
           $out_foto_pet = str_replace($this->Ini->path_imag_temp . "/", "", $out_foto_pet);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_foto_pet;
       if (isset($temp_out_foto_pet))
       {
           $out_foto_pet = $temp_out_foto_pet;
       }
       global $temp_out1_foto_pet;
       if (isset($temp_out1_foto_pet))
       {
           $out1_foto_pet = $temp_out1_foto_pet;
       }
   }
   if ($this->nmgp_opcao == "novo")
   { 
       $out_foto_carteirinha = "";  
   } 
   else 
   { 
       $out_foto_carteirinha = $this->foto_carteirinha;  
   } 
   if ($this->foto_carteirinha != "" && $this->foto_carteirinha != "none")   
   { 
       $out_foto_carteirinha = $this->Ini->path_imag_temp . "/sc_foto_carteirinha_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ;  
       $arq_foto_carteirinha = fopen($this->Ini->root . $out_foto_carteirinha, "w") ;  
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) 
       { 
           $nm_tmp = nm_conv_img_access(substr($this->foto_carteirinha, 0, 12));
           if (is_string($this->foto_carteirinha) && substr($this->foto_carteirinha, 0, 4) != "*nm*" && is_string($nm_tmp) && substr($nm_tmp, 0, 4) == "*nm*") 
           { 
               $this->foto_carteirinha = nm_conv_img_access($this->foto_carteirinha);
           } 
       } 
       if (is_string($this->foto_carteirinha) && substr($this->foto_carteirinha, 0, 4) == "*nm*") 
       { 
           $this->foto_carteirinha = substr($this->foto_carteirinha, 4) ; 
           $this->foto_carteirinha = base64_decode($this->foto_carteirinha) ; 
       } 
       $img_pos_bm = (is_string($this->foto_carteirinha)) ? strpos($this->foto_carteirinha, "BM") : false; 
       if (!$img_pos_bm === FALSE && $img_pos_bm == 78) 
       { 
           $this->foto_carteirinha = substr($this->foto_carteirinha, $img_pos_bm) ; 
       } 
       fwrite($arq_foto_carteirinha, (string)$this->foto_carteirinha) ;  
       fclose($arq_foto_carteirinha) ;  
       $sc_obj_img = new nm_trata_img($this->Ini->root . $out_foto_carteirinha, true);
       $this->nmgp_return_img['foto_carteirinha'][0] = $sc_obj_img->getHeight();
       $this->nmgp_return_img['foto_carteirinha'][1] = $sc_obj_img->getWidth();
       $out1_foto_carteirinha = $out_foto_carteirinha; 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       $out_foto_carteirinha = $this->Ini->path_imag_temp . "/sc_" . "foto_carteirinha_" . $_SESSION['scriptcase']['sc_num_img'] . session_id() . ".gif" ; 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
       if (!$this->Ini->Gd_missing)
       { 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_foto_carteirinha, true);
           $sc_obj_img->setWidth(300);
           $sc_obj_img->setHeight(300);
           $sc_obj_img->setManterAspecto(true);
           $sc_obj_img->createImg($this->Ini->root . $out_foto_carteirinha);
       } 
       else 
       { 
           $out_foto_carteirinha = $out1_foto_carteirinha;
       } 
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_foto_carteirinha;
           $out_foto_carteirinha = str_replace($this->Ini->path_imag_temp . "/", "", $out_foto_carteirinha);
       } 
       $_SESSION['scriptcase']['sc_num_img']++ ; 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_foto_carteirinha;
       if (isset($temp_out_foto_carteirinha))
       {
           $out_foto_carteirinha = $temp_out_foto_carteirinha;
       }
       global $temp_out1_foto_carteirinha;
       if (isset($temp_out1_foto_carteirinha))
       {
           $out1_foto_carteirinha = $temp_out1_foto_carteirinha;
       }
   }
        $this->initFormPages();
    include_once("form_pet_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("idcliente", "idpet", "nome", "sexo", "idpet_especie", "idpet_pelagem", "idpet_raca", "data_nascimento", "pet_obs", "foto_pet", "foto_carteirinha"))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array("idcliente", "idpet", "nome", "sexo", "idpet_especie", "idpet_pelagem", "idpet_raca", "data_nascimento", "pet_obs", "foto_pet", "foto_carteirinha"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['csrf_token'];
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'] = array(); 
    }

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj + ' - ' + nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
   {
       $nm_comando = "SELECT idcliente, concat(cpf_cnpj, ' - ', nome_fantasia)  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj&' - '&nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj + ' - ' + nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }
   else
   {
       $nm_comando = "SELECT idcliente, cpf_cnpj||' - '||nome_fantasia  FROM cliente  ORDER BY cpf_cnpj, ' - ', nome_fantasia";
   }

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idcliente'][] = $rs->fields[0];
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
   function Form_lookup_sexo()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "MACHO?#?MACHO?#?S?@?";
       $nmgp_def_dados .= "FEMEA?#?FEMEA?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_idpet_especie()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'] = array(); 
    }

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   $nm_comando = "SELECT idpet_especie, descricao  FROM pet_especie  ORDER BY descricao";

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_especie'][] = $rs->fields[0];
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
   function Form_lookup_idpet_pelagem()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'] = array(); 
    }

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   $nm_comando = "SELECT idpet_pelagem, descricao  FROM pet_pelagem  ORDER BY descricao";

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_pelagem'][] = $rs->fields[0];
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
   function Form_lookup_idpet_raca()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'] = array(); 
    }

   $old_value_idpet = $this->idpet;
   $old_value_data_nascimento = $this->data_nascimento;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idpet = $this->idpet;
   $unformatted_value_data_nascimento = $this->data_nascimento;

   $nm_comando = "SELECT idpet_raca, upper(descricao)  FROM pet_raca  ORDER BY descricao";

   $this->idpet = $old_value_idpet;
   $this->data_nascimento = $old_value_data_nascimento;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['Lookup_idpet_raca'][] = $rs->fields[0];
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
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = false;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_pet_pack_ajax_response();
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
          if ($field == "SC_all_Cmp" || $field == "idpet") 
          {
              $this->SC_monta_condicao($comando, "idpet", $arg_search, str_replace(",", ".", $data_search), "INT", false);
          }
          if ($field == "SC_all_Cmp" || $field == "nome") 
          {
              $this->SC_monta_condicao($comando, "nome", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp" || $field == "sexo") 
          {
              $data_lookup = $this->SC_lookup_sexo($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "sexo", $arg_search, $data_lookup, "ENUM", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "idpet_especie") 
          {
              $data_lookup = $this->SC_lookup_idpet_especie($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "idpet_especie", $arg_search, $data_lookup, "INT", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "idpet_pelagem") 
          {
              $data_lookup = $this->SC_lookup_idpet_pelagem($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "idpet_pelagem", $arg_search, $data_lookup, "INT", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "idpet_raca") 
          {
              $data_lookup = $this->SC_lookup_idpet_raca($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "idpet_raca", $arg_search, $data_lookup, "INT", false);
              }
          }
          if ($field == "SC_all_Cmp" || $field == "data_nascimento") 
          {
              $this->SC_monta_condicao($comando, "data_nascimento", $arg_search, $data_search, "DATE", false);
          }
          if ($field == "SC_all_Cmp" || $field == "foto_pet") 
          {
              $this->SC_monta_condicao($comando, "foto_pet", $arg_search, $data_search, "BLOB", false);
          }
          if ($field == "SC_all_Cmp" || $field == "foto_carteirinha") 
          {
              $this->SC_monta_condicao($comando, "foto_carteirinha", $arg_search, $data_search, "BLOB", false);
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_pet = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['total'] = $qt_geral_reg_form_pet;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_pet_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_pet_pack_ajax_response();
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
      $nm_numeric[] = "idpet";$nm_numeric[] = "idcliente";$nm_numeric[] = "idpet_raca";$nm_numeric[] = "idpet_especie";$nm_numeric[] = "idpet_pelagem";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['decimal_db'] == ".")
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
      $Nm_datas["data_nascimento"] = "date";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['SC_sep_date1'];
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
   function SC_lookup_idcliente($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nm_comando = "SELECT cpf_cnpj + ' - ' + nome_fantasia, idcliente FROM cliente WHERE (#cmp_icpf_cnpj + ' - ' + nome_fantasia#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
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
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "SELECT cpf_cnpj + ' - ' + nome_fantasia, idcliente FROM cliente WHERE (#cmp_icpf_cnpj + ' - ' + nome_fantasia#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
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
   function SC_lookup_sexo($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['MACHO'] = "MACHO";
       $data_look['FEMEA'] = "FEMEA";
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
   function SC_lookup_idpet_especie($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT descricao, idpet_especie FROM pet_especie WHERE (#cmp_idescricao#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
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
   function SC_lookup_idpet_pelagem($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT descricao, idpet_pelagem FROM pet_pelagem WHERE (#cmp_idescricao#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
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
   function SC_lookup_idpet_raca($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT upper(descricao), idpet_raca FROM pet_raca WHERE (#cmp_iupper(descricao)#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
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
       $nmgp_saida_form = "form_pet_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_pet_fim.php";
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
       form_pet_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['masterValue']);
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
            case "new":
                return array("sc_b_new_t.sc-unique-btn-1");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-2");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-3");
                break;
            case "delete":
                return array("sc_b_del_t.sc-unique-btn-4");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-5", "sc_b_sai_t.sc-unique-btn-7", "sc_b_sai_t.sc-unique-btn-6");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-header">
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "CADASTRAR PET"; } else { echo "CADASTRAR PET"; } ?></div>
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_pet']['ordem_ord'] == " desc") {
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
            case "idpet":
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
            case "idpet":
                return 'desc';
            case "idpet_especie":
                return 'desc';
            case "idpet_pelagem":
                return 'desc';
            case "idpet_raca":
                return 'desc';
            case "data_nascimento":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>