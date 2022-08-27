<?php

class grid_lancamento_cartao_rtf
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Texto_tag;
   var $Arquivo;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   //---- 
   function __construct()
   {
      $this->nm_data   = new nm_data("pt_br");
      $this->Texto_tag = "";
   }

   //---- 
   function monta_rtf()
   {
      $this->inicializa_vars();
      $this->gera_texto_tag();
      $this->grava_arquivo_rtf();
      if ($this->Ini->sc_export_ajax)
      {
          $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Rtf_f);
          $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          exit;
      }
      else
      {
          $this->progress_bar_end();
      }
   }

   //----- 
   function inicializa_vars()
   {
      global $nm_lang;
      if (isset($GLOBALS['nmgp_parms']) && !empty($GLOBALS['nmgp_parms'])) 
      { 
          $GLOBALS['nmgp_parms'] = str_replace("@aspass@", "'", $GLOBALS['nmgp_parms']);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $GLOBALS["nmgp_parms"]);
          $todo  = explode("?@?", $todox);
          foreach ($todo as $param)
          {
               $cadapar = explode("?#?", $param);
               if (1 < sizeof($cadapar))
               {
                   if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                   {
                       $cadapar[0] = substr($cadapar[0], 11);
                       $cadapar[1] = $_SESSION[$cadapar[1]];
                   }
                   if (isset($GLOBALS['sc_conv_var'][$cadapar[0]]))
                   {
                       $cadapar[0] = $GLOBALS['sc_conv_var'][$cadapar[0]];
                   }
                   elseif (isset($GLOBALS['sc_conv_var'][strtolower($cadapar[0])]))
                   {
                       $cadapar[0] = $GLOBALS['sc_conv_var'][strtolower($cadapar[0])];
                   }
                   nm_limpa_str_grid_lancamento_cartao($cadapar[1]);
                   nm_protect_num_grid_lancamento_cartao($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_lancamento_cartao']['opcao'] = $cadapar[1];
                   }
               }
          }
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_lancamento_cartao_total.class.php"); 
      $this->Tot      = new grid_lancamento_cartao_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['SC_Ind_Groupby'];
      if (method_exists($this->Tot,$Gb_geral))
      {
          $this->Tot->$Gb_geral();
          $this->count_ger = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['tot_geral'][1];
      }
      if (!$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_lancamento_cartao']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption('volta_grid');
          $this->pb->setTotalSteps($this->count_ger);
      }
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_lancamento_cartao";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_lancamento_cartao.rtf";
   }
   //---- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }


   //----- 
   function gera_texto_tag()
   {
     global $nm_lang;
      global $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_lancamento_cartao']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_lancamento_cartao']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_lancamento_cartao']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->idlancamento_cartao = (isset($Busca_temp['idlancamento_cartao'])) ? $Busca_temp['idlancamento_cartao'] : ""; 
          $tmp_pos = (is_string($this->idlancamento_cartao)) ? strpos($this->idlancamento_cartao, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->idlancamento_cartao))
          {
              $this->idlancamento_cartao = substr($this->idlancamento_cartao, 0, $tmp_pos);
          }
          $this->idcontas_receber = (isset($Busca_temp['idcontas_receber'])) ? $Busca_temp['idcontas_receber'] : ""; 
          $tmp_pos = (is_string($this->idcontas_receber)) ? strpos($this->idcontas_receber, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->idcontas_receber))
          {
              $this->idcontas_receber = substr($this->idcontas_receber, 0, $tmp_pos);
          }
          $this->data = (isset($Busca_temp['data'])) ? $Busca_temp['data'] : ""; 
          $tmp_pos = (is_string($this->data)) ? strpos($this->data, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->data))
          {
              $this->data = substr($this->data, 0, $tmp_pos);
          }
          $this->data_2 = (isset($Busca_temp['data_input_2'])) ? $Busca_temp['data_input_2'] : ""; 
          $this->idforma_pagamento = (isset($Busca_temp['idforma_pagamento'])) ? $Busca_temp['idforma_pagamento'] : ""; 
          $tmp_pos = (is_string($this->idforma_pagamento)) ? strpos($this->idforma_pagamento, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->idforma_pagamento))
          {
              $this->idforma_pagamento = substr($this->idforma_pagamento, 0, $tmp_pos);
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_name'] .= ".rtf";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['data'])) ? $this->New_label['data'] : "DATA"; 
          if ($Cada_col == "data" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['idforma_pagamento'])) ? $this->New_label['idforma_pagamento'] : "FORMA DE RECEBIMENTO"; 
          if ($Cada_col == "idforma_pagamento" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['quantidade_parcelas'])) ? $this->New_label['quantidade_parcelas'] : "QUANTIDADE DE PARCELAS"; 
          if ($Cada_col == "quantidade_parcelas" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['numero_parcela'])) ? $this->New_label['numero_parcela'] : "NUMERO DE PARCELAS"; 
          if ($Cada_col == "numero_parcela" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['valor_venda'])) ? $this->New_label['valor_venda'] : "VALOR DE VENDA"; 
          if ($Cada_col == "valor_venda" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['taxa_cartao'])) ? $this->New_label['taxa_cartao'] : "TAXA DO CARTÃO"; 
          if ($Cada_col == "taxa_cartao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['valor_da_taxa_cartao'])) ? $this->New_label['valor_da_taxa_cartao'] : "VALOR COBRADO "; 
          if ($Cada_col == "valor_da_taxa_cartao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['valor_liquido_cartao'])) ? $this->New_label['valor_liquido_cartao'] : "VALOR LIQUIDO PARCELA"; 
          if ($Cada_col == "valor_liquido_cartao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['taxa_antecipacao'])) ? $this->New_label['taxa_antecipacao'] : "TAXA DE ANTECIPAÇÃO"; 
          if ($Cada_col == "taxa_antecipacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['valor_liquido_antecipacao'])) ? $this->New_label['valor_liquido_antecipacao'] : "VALOR COBRADO POR ANTECIPAÇÃO"; 
          if ($Cada_col == "valor_liquido_antecipacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['valor_antecipacao'])) ? $this->New_label['valor_antecipacao'] : "TOTAL LIQUIDO ANTECIPAÇÃO"; 
          if ($Cada_col == "valor_antecipacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['dia_recebimento'])) ? $this->New_label['dia_recebimento'] : "DIA DO RECEBIMENTO"; 
          if ($Cada_col == "dia_recebimento" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['data_prevista_recebimento'])) ? $this->New_label['data_prevista_recebimento'] : "DATA PREVISTA DE RECEBIEMNTO"; 
          if ($Cada_col == "data_prevista_recebimento" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['observacao'])) ? $this->New_label['observacao'] : "OBSERVAÇÃO"; 
          if ($Cada_col == "observacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['status'])) ? $this->New_label['status'] : "STATUS"; 
          if ($Cada_col == "status" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['idlancamento_cartao'])) ? $this->New_label['idlancamento_cartao'] : "ID"; 
          if ($Cada_col == "idlancamento_cartao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['idcontas_receber'])) ? $this->New_label['idcontas_receber'] : "CONTA A RECEBER"; 
          if ($Cada_col == "idcontas_receber" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
      } 
      $this->Texto_tag .= "</tr>\r\n";
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $nmgp_select_count = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela; 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT str_replace (convert(char(10),data,102), '.', '-') + ' ' + convert(char(8),data,20), idforma_pagamento, quantidade_parcelas, numero_parcela, valor_venda, taxa_cartao, valor_da_taxa_cartao, valor_liquido_cartao, taxa_antecipacao, valor_liquido_antecipacao, valor_antecipacao, dia_recebimento, str_replace (convert(char(10),data_prevista_recebimento,102), '.', '-') + ' ' + convert(char(8),data_prevista_recebimento,20), observacao, status, idlancamento_cartao, idcontas_receber from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT data, idforma_pagamento, quantidade_parcelas, numero_parcela, valor_venda, taxa_cartao, valor_da_taxa_cartao, valor_liquido_cartao, taxa_antecipacao, valor_liquido_antecipacao, valor_antecipacao, dia_recebimento, data_prevista_recebimento, observacao, status, idlancamento_cartao, idcontas_receber from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),data,121), idforma_pagamento, quantidade_parcelas, numero_parcela, valor_venda, taxa_cartao, valor_da_taxa_cartao, valor_liquido_cartao, taxa_antecipacao, valor_liquido_antecipacao, valor_antecipacao, dia_recebimento, convert(char(23),data_prevista_recebimento,121), observacao, status, idlancamento_cartao, idcontas_receber from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT data, idforma_pagamento, quantidade_parcelas, numero_parcela, valor_venda, taxa_cartao, valor_da_taxa_cartao, valor_liquido_cartao, taxa_antecipacao, valor_liquido_antecipacao, valor_antecipacao, dia_recebimento, data_prevista_recebimento, observacao, status, idlancamento_cartao, idcontas_receber from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(data, YEAR TO DAY), idforma_pagamento, quantidade_parcelas, numero_parcela, valor_venda, taxa_cartao, valor_da_taxa_cartao, valor_liquido_cartao, taxa_antecipacao, valor_liquido_antecipacao, valor_antecipacao, dia_recebimento, EXTEND(data_prevista_recebimento, YEAR TO DAY), LOTOFILE(observacao, '" . $this->Ini->root . $this->Ini->path_imag_temp . "/sc_blob_informix', 'client') as observacao, status, idlancamento_cartao, idcontas_receber from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT data, idforma_pagamento, quantidade_parcelas, numero_parcela, valor_venda, taxa_cartao, valor_da_taxa_cartao, valor_liquido_cartao, taxa_antecipacao, valor_liquido_antecipacao, valor_antecipacao, dia_recebimento, data_prevista_recebimento, observacao, status, idlancamento_cartao, idcontas_receber from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select_count;
      $rt = $this->Db->Execute($nmgp_select_count);
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->count_ger = $rt->fields[0];
      $rt->Close();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->SC_seq_register = 0;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         if (!$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->Texto_tag .= "<tr>\r\n";
         $this->data = $rs->fields[0] ;  
         $this->idforma_pagamento = $rs->fields[1] ;  
         $this->idforma_pagamento = (string)$this->idforma_pagamento;
         $this->quantidade_parcelas = $rs->fields[2] ;  
         $this->quantidade_parcelas = (string)$this->quantidade_parcelas;
         $this->numero_parcela = $rs->fields[3] ;  
         $this->numero_parcela = (string)$this->numero_parcela;
         $this->valor_venda = $rs->fields[4] ;  
         $this->valor_venda =  str_replace(",", ".", $this->valor_venda);
         $this->valor_venda = (string)$this->valor_venda;
         $this->taxa_cartao = $rs->fields[5] ;  
         $this->taxa_cartao =  str_replace(",", ".", $this->taxa_cartao);
         $this->taxa_cartao = (string)$this->taxa_cartao;
         $this->valor_da_taxa_cartao = $rs->fields[6] ;  
         $this->valor_da_taxa_cartao =  str_replace(",", ".", $this->valor_da_taxa_cartao);
         $this->valor_da_taxa_cartao = (string)$this->valor_da_taxa_cartao;
         $this->valor_liquido_cartao = $rs->fields[7] ;  
         $this->valor_liquido_cartao =  str_replace(",", ".", $this->valor_liquido_cartao);
         $this->valor_liquido_cartao = (string)$this->valor_liquido_cartao;
         $this->taxa_antecipacao = $rs->fields[8] ;  
         $this->taxa_antecipacao =  str_replace(",", ".", $this->taxa_antecipacao);
         $this->taxa_antecipacao = (string)$this->taxa_antecipacao;
         $this->valor_liquido_antecipacao = $rs->fields[9] ;  
         $this->valor_liquido_antecipacao =  str_replace(",", ".", $this->valor_liquido_antecipacao);
         $this->valor_liquido_antecipacao = (string)$this->valor_liquido_antecipacao;
         $this->valor_antecipacao = $rs->fields[10] ;  
         $this->valor_antecipacao =  str_replace(",", ".", $this->valor_antecipacao);
         $this->valor_antecipacao = (string)$this->valor_antecipacao;
         $this->dia_recebimento = $rs->fields[11] ;  
         $this->dia_recebimento = (string)$this->dia_recebimento;
         $this->data_prevista_recebimento = $rs->fields[12] ;  
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $this->observacao = "";  
              if (is_file($rs_grid->fields[13])) 
              { 
                  $this->observacao = file_get_contents($rs_grid->fields[13]);  
              } 
          } 
         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
         { 
             $this->observacao = $this->Db->BlobDecode($rs->fields[13]) ;  
         } 
         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
         { 
             $this->observacao = $this->Db->BlobDecode($rs->fields[13]) ;  
         } 
         else
         { 
             $this->observacao = $rs->fields[13] ;  
         } 
         $this->status = $rs->fields[14] ;  
         $this->idlancamento_cartao = $rs->fields[15] ;  
         $this->idlancamento_cartao = (string)$this->idlancamento_cartao;
         $this->idcontas_receber = $rs->fields[16] ;  
         $this->idcontas_receber = (string)$this->idcontas_receber;
         //----- lookup - idforma_pagamento
         $this->look_idforma_pagamento = $this->idforma_pagamento; 
         $this->Lookup->lookup_idforma_pagamento($this->look_idforma_pagamento, $this->idforma_pagamento) ; 
         $this->look_idforma_pagamento = ($this->look_idforma_pagamento == "&nbsp;") ? "" : $this->look_idforma_pagamento; 
         $this->observacao = "";
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->Texto_tag .= "</tr>\r\n";
         $rs->MoveNext();
      }
      $this->Texto_tag .= "</table>\r\n";
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- data
   function NM_export_data()
   {
             $conteudo_x =  $this->data;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->data, "YYYY-MM-DD  ");
                 $this->data = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
         $this->data = NM_charset_to_utf8($this->data);
         $this->data = str_replace('<', '&lt;', $this->data);
         $this->data = str_replace('>', '&gt;', $this->data);
         $this->Texto_tag .= "<td>" . $this->data . "</td>\r\n";
   }
   //----- idforma_pagamento
   function NM_export_idforma_pagamento()
   {
         nmgp_Form_Num_Val($this->look_idforma_pagamento, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->look_idforma_pagamento = NM_charset_to_utf8($this->look_idforma_pagamento);
         $this->look_idforma_pagamento = str_replace('<', '&lt;', $this->look_idforma_pagamento);
         $this->look_idforma_pagamento = str_replace('>', '&gt;', $this->look_idforma_pagamento);
         $this->Texto_tag .= "<td>" . $this->look_idforma_pagamento . "</td>\r\n";
   }
   //----- quantidade_parcelas
   function NM_export_quantidade_parcelas()
   {
             nmgp_Form_Num_Val($this->quantidade_parcelas, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->quantidade_parcelas = NM_charset_to_utf8($this->quantidade_parcelas);
         $this->quantidade_parcelas = str_replace('<', '&lt;', $this->quantidade_parcelas);
         $this->quantidade_parcelas = str_replace('>', '&gt;', $this->quantidade_parcelas);
         $this->Texto_tag .= "<td>" . $this->quantidade_parcelas . "</td>\r\n";
   }
   //----- numero_parcela
   function NM_export_numero_parcela()
   {
             nmgp_Form_Num_Val($this->numero_parcela, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->numero_parcela = NM_charset_to_utf8($this->numero_parcela);
         $this->numero_parcela = str_replace('<', '&lt;', $this->numero_parcela);
         $this->numero_parcela = str_replace('>', '&gt;', $this->numero_parcela);
         $this->Texto_tag .= "<td>" . $this->numero_parcela . "</td>\r\n";
   }
   //----- valor_venda
   function NM_export_valor_venda()
   {
             nmgp_Form_Num_Val($this->valor_venda, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->valor_venda = NM_charset_to_utf8($this->valor_venda);
         $this->valor_venda = str_replace('<', '&lt;', $this->valor_venda);
         $this->valor_venda = str_replace('>', '&gt;', $this->valor_venda);
         $this->Texto_tag .= "<td>" . $this->valor_venda . "</td>\r\n";
   }
   //----- taxa_cartao
   function NM_export_taxa_cartao()
   {
             nmgp_Form_Num_Val($this->taxa_cartao, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->taxa_cartao = NM_charset_to_utf8($this->taxa_cartao);
         $this->taxa_cartao = str_replace('<', '&lt;', $this->taxa_cartao);
         $this->taxa_cartao = str_replace('>', '&gt;', $this->taxa_cartao);
         $this->Texto_tag .= "<td>" . $this->taxa_cartao . "</td>\r\n";
   }
   //----- valor_da_taxa_cartao
   function NM_export_valor_da_taxa_cartao()
   {
             nmgp_Form_Num_Val($this->valor_da_taxa_cartao, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->valor_da_taxa_cartao = NM_charset_to_utf8($this->valor_da_taxa_cartao);
         $this->valor_da_taxa_cartao = str_replace('<', '&lt;', $this->valor_da_taxa_cartao);
         $this->valor_da_taxa_cartao = str_replace('>', '&gt;', $this->valor_da_taxa_cartao);
         $this->Texto_tag .= "<td>" . $this->valor_da_taxa_cartao . "</td>\r\n";
   }
   //----- valor_liquido_cartao
   function NM_export_valor_liquido_cartao()
   {
             nmgp_Form_Num_Val($this->valor_liquido_cartao, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->valor_liquido_cartao = NM_charset_to_utf8($this->valor_liquido_cartao);
         $this->valor_liquido_cartao = str_replace('<', '&lt;', $this->valor_liquido_cartao);
         $this->valor_liquido_cartao = str_replace('>', '&gt;', $this->valor_liquido_cartao);
         $this->Texto_tag .= "<td>" . $this->valor_liquido_cartao . "</td>\r\n";
   }
   //----- taxa_antecipacao
   function NM_export_taxa_antecipacao()
   {
             nmgp_Form_Num_Val($this->taxa_antecipacao, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->taxa_antecipacao = NM_charset_to_utf8($this->taxa_antecipacao);
         $this->taxa_antecipacao = str_replace('<', '&lt;', $this->taxa_antecipacao);
         $this->taxa_antecipacao = str_replace('>', '&gt;', $this->taxa_antecipacao);
         $this->Texto_tag .= "<td>" . $this->taxa_antecipacao . "</td>\r\n";
   }
   //----- valor_liquido_antecipacao
   function NM_export_valor_liquido_antecipacao()
   {
             nmgp_Form_Num_Val($this->valor_liquido_antecipacao, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->valor_liquido_antecipacao = NM_charset_to_utf8($this->valor_liquido_antecipacao);
         $this->valor_liquido_antecipacao = str_replace('<', '&lt;', $this->valor_liquido_antecipacao);
         $this->valor_liquido_antecipacao = str_replace('>', '&gt;', $this->valor_liquido_antecipacao);
         $this->Texto_tag .= "<td>" . $this->valor_liquido_antecipacao . "</td>\r\n";
   }
   //----- valor_antecipacao
   function NM_export_valor_antecipacao()
   {
             nmgp_Form_Num_Val($this->valor_antecipacao, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->valor_antecipacao = NM_charset_to_utf8($this->valor_antecipacao);
         $this->valor_antecipacao = str_replace('<', '&lt;', $this->valor_antecipacao);
         $this->valor_antecipacao = str_replace('>', '&gt;', $this->valor_antecipacao);
         $this->Texto_tag .= "<td>" . $this->valor_antecipacao . "</td>\r\n";
   }
   //----- dia_recebimento
   function NM_export_dia_recebimento()
   {
             nmgp_Form_Num_Val($this->dia_recebimento, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->dia_recebimento = NM_charset_to_utf8($this->dia_recebimento);
         $this->dia_recebimento = str_replace('<', '&lt;', $this->dia_recebimento);
         $this->dia_recebimento = str_replace('>', '&gt;', $this->dia_recebimento);
         $this->Texto_tag .= "<td>" . $this->dia_recebimento . "</td>\r\n";
   }
   //----- data_prevista_recebimento
   function NM_export_data_prevista_recebimento()
   {
             $conteudo_x =  $this->data_prevista_recebimento;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->data_prevista_recebimento, "YYYY-MM-DD  ");
                 $this->data_prevista_recebimento = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
         $this->data_prevista_recebimento = NM_charset_to_utf8($this->data_prevista_recebimento);
         $this->data_prevista_recebimento = str_replace('<', '&lt;', $this->data_prevista_recebimento);
         $this->data_prevista_recebimento = str_replace('>', '&gt;', $this->data_prevista_recebimento);
         $this->Texto_tag .= "<td>" . $this->data_prevista_recebimento . "</td>\r\n";
   }
   //----- observacao
   function NM_export_observacao()
   {
         $this->observacao = NM_charset_to_utf8($this->observacao);
         $this->observacao = str_replace('<', '&lt;', $this->observacao);
         $this->observacao = str_replace('>', '&gt;', $this->observacao);
         $this->Texto_tag .= "<td>" . $this->observacao . "</td>\r\n";
   }
   //----- status
   function NM_export_status()
   {
         $this->status = html_entity_decode($this->status, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->status = strip_tags($this->status);
         $this->status = NM_charset_to_utf8($this->status);
         $this->status = str_replace('<', '&lt;', $this->status);
         $this->status = str_replace('>', '&gt;', $this->status);
         $this->Texto_tag .= "<td>" . $this->status . "</td>\r\n";
   }
   //----- idlancamento_cartao
   function NM_export_idlancamento_cartao()
   {
             nmgp_Form_Num_Val($this->idlancamento_cartao, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->idlancamento_cartao = NM_charset_to_utf8($this->idlancamento_cartao);
         $this->idlancamento_cartao = str_replace('<', '&lt;', $this->idlancamento_cartao);
         $this->idlancamento_cartao = str_replace('>', '&gt;', $this->idlancamento_cartao);
         $this->Texto_tag .= "<td>" . $this->idlancamento_cartao . "</td>\r\n";
   }
   //----- idcontas_receber
   function NM_export_idcontas_receber()
   {
             nmgp_Form_Num_Val($this->idcontas_receber, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->idcontas_receber = NM_charset_to_utf8($this->idcontas_receber);
         $this->idcontas_receber = str_replace('<', '&lt;', $this->idcontas_receber);
         $this->idcontas_receber = str_replace('>', '&gt;', $this->idcontas_receber);
         $this->Texto_tag .= "<td>" . $this->idcontas_receber . "</td>\r\n";
   }

   //----- 
   function grava_arquivo_rtf()
   {
      global $nm_lang, $doc_wrap;
      $this->Rtf_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $rtf_f       = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      require_once($this->Ini->path_third      . "/rtf_new/document_generator/cl_xml2driver.php"); 
      $text_ok  =  "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\r\n"; 
      $text_ok .=  "<DOC config_file=\"" . $this->Ini->path_third . "/rtf_new/doc_config.inc\" >\r\n"; 
      $text_ok .=  $this->Texto_tag; 
      $text_ok .=  "</DOC>\r\n"; 
      $xml = new nDOCGEN($text_ok,"RTF"); 
      fwrite($rtf_f, $xml->get_result_file());
      fclose($rtf_f);
   }

   function nm_conv_data_db($dt_in, $form_in, $form_out)
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
           nm_conv_form_data($dt_out, $form_in, $form_out);
           return $dt_out;
       }
   }
   function progress_bar_end()
   {
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao'][$path_doc_md5][1] = $this->Tit_doc;
      $Mens_bar = $this->Ini->Nm_lang['lang_othr_file_msge'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
          $Mens_bar = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      $this->pb->setProgressbarMessage($Mens_bar);
      $this->pb->setDownloadLink($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $this->pb->setDownloadMd5($path_doc_md5);
      $this->pb->completed();
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_lancamento_cartao'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_title'] ?> lancamento_cartao :: RTF</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
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
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <?php
 if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts))
 {
 ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->str_google_fonts ?>" />
 <?php
 }
 ?>
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">RTF</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_lancamento_cartao_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_lancamento_cartao"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="volta_grid"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $str_highlight_ini = "";
      $str_highlight_fim = "";
      if(substr($nm_campo, 0, 23) == '<div class="highlight">' && substr($nm_campo, -6) == '</div>')
      {
           $str_highlight_ini = substr($nm_campo, 0, 23);
           $str_highlight_fim = substr($nm_campo, -6);

           $trab_campo = substr($nm_campo, 23, -6);
           $tam_campo  = strlen($trab_campo);
      }      $mask_num = false;
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
              if ($tam_campo >= $cont2)
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
          $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
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
      $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
   } 
}

?>
