<?php

class grid_orcamento_diario_rtf
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
                   nm_limpa_str_grid_orcamento_diario($cadapar[1]);
                   nm_protect_num_grid_orcamento_diario($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_orcamento_diario']['opcao'] = $cadapar[1];
                   }
               }
          }
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_orcamento_diario_total.class.php"); 
      $this->Tot      = new grid_orcamento_diario_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['SC_Ind_Groupby'];
      if (method_exists($this->Tot,$Gb_geral))
      {
          $this->Tot->$Gb_geral();
          $this->count_ger = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['tot_geral'][1];
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['SC_Ind_Groupby'] == "sc_free_group_by")
          {
              $this->sum_itens_orcamento_quantidade = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['tot_geral'][2];
              $this->sum_itens_orcamento_valor_total = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['tot_geral'][3];
          }
      }
      if (!$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_orcamento_diario']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption('volta_grid');
          $this->pb->setTotalSteps($this->count_ger);
      }
      $this->Arquivo    = "sc_rtf";
      $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arquivo   .= "_grid_orcamento_diario";
      $this->Arquivo   .= ".rtf";
      $this->Tit_doc    = "grid_orcamento_diario.rtf";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_orcamento_diario']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_orcamento_diario']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_orcamento_diario']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->orcamento_idorcamento = (isset($Busca_temp['orcamento_idorcamento'])) ? $Busca_temp['orcamento_idorcamento'] : ""; 
          $tmp_pos = (is_string($this->orcamento_idorcamento)) ? strpos($this->orcamento_idorcamento, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->orcamento_idorcamento))
          {
              $this->orcamento_idorcamento = substr($this->orcamento_idorcamento, 0, $tmp_pos);
          }
          $this->orcamento_idcliente = (isset($Busca_temp['orcamento_idcliente'])) ? $Busca_temp['orcamento_idcliente'] : ""; 
          $tmp_pos = (is_string($this->orcamento_idcliente)) ? strpos($this->orcamento_idcliente, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->orcamento_idcliente))
          {
              $this->orcamento_idcliente = substr($this->orcamento_idcliente, 0, $tmp_pos);
          }
          $this->orcamento_data_venda = (isset($Busca_temp['orcamento_data_venda'])) ? $Busca_temp['orcamento_data_venda'] : ""; 
          $tmp_pos = (is_string($this->orcamento_data_venda)) ? strpos($this->orcamento_data_venda, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->orcamento_data_venda))
          {
              $this->orcamento_data_venda = substr($this->orcamento_data_venda, 0, $tmp_pos);
          }
          $this->orcamento_data_venda_2 = (isset($Busca_temp['orcamento_data_venda_input_2'])) ? $Busca_temp['orcamento_data_venda_input_2'] : ""; 
      } 
      $this->nm_where_dinamico = "";
      $_SESSION['scriptcase']['grid_orcamento_diario']['contr_erro'] = 'on';
 





$_SESSION['scriptcase']['grid_orcamento_diario']['contr_erro'] = 'off'; 
      if  (!empty($this->nm_where_dinamico)) 
      {   
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_pesq'] .= $this->nm_where_dinamico;
      }   
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_name'] .= ".rtf";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_name'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      $this->Texto_tag .= "<table>\r\n";
      $this->Texto_tag .= "<tr>\r\n";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['itens_orcamento_idproduto'])) ? $this->New_label['itens_orcamento_idproduto'] : "PRODUTO"; 
          if ($Cada_col == "itens_orcamento_idproduto" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['itens_orcamento_quantidade'])) ? $this->New_label['itens_orcamento_quantidade'] : "QUANTIDADE"; 
          if ($Cada_col == "itens_orcamento_quantidade" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['itens_orcamento_valor_unitario'])) ? $this->New_label['itens_orcamento_valor_unitario'] : "VALOR TOTAL"; 
          if ($Cada_col == "itens_orcamento_valor_unitario" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['itens_orcamento_valor_total'])) ? $this->New_label['itens_orcamento_valor_total'] : "VALOR TOTAL"; 
          if ($Cada_col == "itens_orcamento_valor_total" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['orcamento_idorcamento'])) ? $this->New_label['orcamento_idorcamento'] : "ORÇAMENTO"; 
          if ($Cada_col == "orcamento_idorcamento" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['orcamento_idcliente'])) ? $this->New_label['orcamento_idcliente'] : "CLIENTE"; 
          if ($Cada_col == "orcamento_idcliente" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['orcamento_data_venda'])) ? $this->New_label['orcamento_data_venda'] : "DATA DA VENDA"; 
          if ($Cada_col == "orcamento_data_venda" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['orcamento_observacao'])) ? $this->New_label['orcamento_observacao'] : "Observacao"; 
          if ($Cada_col == "orcamento_observacao" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['orcamento_status'])) ? $this->New_label['orcamento_status'] : "Status"; 
          if ($Cada_col == "orcamento_status" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $SC_Label = NM_charset_to_utf8($SC_Label);
              $SC_Label = str_replace('<', '&lt;', $SC_Label);
              $SC_Label = str_replace('>', '&gt;', $SC_Label);
              $this->Texto_tag .= "<td>" . $SC_Label . "</td>\r\n";
          }
          $SC_Label = (isset($this->New_label['orcamento_valor'])) ? $this->New_label['orcamento_valor'] : "Valor"; 
          if ($Cada_col == "orcamento_valor" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
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
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT itens_orcamento.idproduto as itens_orcamento_idproduto, itens_orcamento.quantidade as itens_orcamento_quantidade, itens_orcamento.valor_unitario as itens_orcamento_valor_unitario, itens_orcamento.valor_total as itens_orcamento_valor_total, orcamento.idorcamento as orcamento_idorcamento, orcamento.idcliente as orcamento_idcliente, orcamento.data_venda as orcamento_data_venda, orcamento.observacao as orcamento_observacao, orcamento.status as orcamento_status, orcamento.valor as orcamento_valor from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT itens_orcamento.idproduto as itens_orcamento_idproduto, itens_orcamento.quantidade as itens_orcamento_quantidade, itens_orcamento.valor_unitario as itens_orcamento_valor_unitario, itens_orcamento.valor_total as itens_orcamento_valor_total, orcamento.idorcamento as orcamento_idorcamento, orcamento.idcliente as orcamento_idcliente, orcamento.data_venda as orcamento_data_venda, orcamento.observacao as orcamento_observacao, orcamento.status as orcamento_status, orcamento.valor as orcamento_valor from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_pesq'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_resumo']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_resumo'])) 
      { 
          if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_pesq'])) 
          { 
              $nmgp_select .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_resumo']; 
              $nmgp_select_count .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_resumo']; 
          } 
          else
          { 
              $nmgp_select .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_resumo'] . ")"; 
              $nmgp_select_count .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['where_resumo'] . ")"; 
          } 
      } 
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      if (!empty($this->Ini->nm_col_dinamica)) 
      {
          foreach ($this->Ini->nm_col_dinamica as $nm_cada_col => $nm_nova_col)
          {
              $nmgp_select = str_replace($nm_cada_col, $nm_nova_col, $nmgp_select); 
          }
      }
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
         $this->itens_orcamento_idproduto = $rs->fields[0] ;  
         $this->itens_orcamento_idproduto = (string)$this->itens_orcamento_idproduto;
         $this->itens_orcamento_quantidade = $rs->fields[1] ;  
         $this->itens_orcamento_quantidade =  str_replace(",", ".", $this->itens_orcamento_quantidade);
         $this->itens_orcamento_quantidade = (string)$this->itens_orcamento_quantidade;
         $this->itens_orcamento_valor_unitario = $rs->fields[2] ;  
         $this->itens_orcamento_valor_unitario =  str_replace(",", ".", $this->itens_orcamento_valor_unitario);
         $this->itens_orcamento_valor_unitario = (string)$this->itens_orcamento_valor_unitario;
         $this->itens_orcamento_valor_total = $rs->fields[3] ;  
         $this->itens_orcamento_valor_total =  str_replace(",", ".", $this->itens_orcamento_valor_total);
         $this->itens_orcamento_valor_total = (string)$this->itens_orcamento_valor_total;
         $this->orcamento_idorcamento = $rs->fields[4] ;  
         $this->orcamento_idorcamento = (string)$this->orcamento_idorcamento;
         $this->orcamento_idcliente = $rs->fields[5] ;  
         $this->orcamento_idcliente = (string)$this->orcamento_idcliente;
         $this->orcamento_data_venda = $rs->fields[6] ;  
         $this->orcamento_observacao = $rs->fields[7] ;  
         $this->orcamento_status = $rs->fields[8] ;  
         $this->orcamento_valor = $rs->fields[9] ;  
         $this->orcamento_valor =  str_replace(",", ".", $this->orcamento_valor);
         $this->orcamento_valor = (string)$this->orcamento_valor;
         //----- lookup - itens_orcamento_idproduto
         $this->look_itens_orcamento_idproduto = $this->itens_orcamento_idproduto; 
         $this->Lookup->lookup_itens_orcamento_idproduto($this->look_itens_orcamento_idproduto, $this->itens_orcamento_idproduto) ; 
         $this->look_itens_orcamento_idproduto = ($this->look_itens_orcamento_idproduto == "&nbsp;") ? "" : $this->look_itens_orcamento_idproduto; 
         //----- lookup - orcamento_idcliente
         $this->look_orcamento_idcliente = $this->orcamento_idcliente; 
         $this->Lookup->lookup_orcamento_idcliente($this->look_orcamento_idcliente, $this->orcamento_idcliente) ; 
         $this->look_orcamento_idcliente = ($this->look_orcamento_idcliente == "&nbsp;") ? "" : $this->look_orcamento_idcliente; 
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['field_order'] as $Cada_col)
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
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- itens_orcamento_idproduto
   function NM_export_itens_orcamento_idproduto()
   {
         nmgp_Form_Num_Val($this->look_itens_orcamento_idproduto, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->look_itens_orcamento_idproduto = NM_charset_to_utf8($this->look_itens_orcamento_idproduto);
         $this->look_itens_orcamento_idproduto = str_replace('<', '&lt;', $this->look_itens_orcamento_idproduto);
         $this->look_itens_orcamento_idproduto = str_replace('>', '&gt;', $this->look_itens_orcamento_idproduto);
         $this->Texto_tag .= "<td>" . $this->look_itens_orcamento_idproduto . "</td>\r\n";
   }
   //----- itens_orcamento_quantidade
   function NM_export_itens_orcamento_quantidade()
   {
             nmgp_Form_Num_Val($this->itens_orcamento_quantidade, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->itens_orcamento_quantidade = NM_charset_to_utf8($this->itens_orcamento_quantidade);
         $this->itens_orcamento_quantidade = str_replace('<', '&lt;', $this->itens_orcamento_quantidade);
         $this->itens_orcamento_quantidade = str_replace('>', '&gt;', $this->itens_orcamento_quantidade);
         $this->Texto_tag .= "<td>" . $this->itens_orcamento_quantidade . "</td>\r\n";
   }
   //----- itens_orcamento_valor_unitario
   function NM_export_itens_orcamento_valor_unitario()
   {
             nmgp_Form_Num_Val($this->itens_orcamento_valor_unitario, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", $_SESSION['scriptcase']['reg_conf']['monet_simb'], "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->itens_orcamento_valor_unitario = NM_charset_to_utf8($this->itens_orcamento_valor_unitario);
         $this->itens_orcamento_valor_unitario = str_replace('<', '&lt;', $this->itens_orcamento_valor_unitario);
         $this->itens_orcamento_valor_unitario = str_replace('>', '&gt;', $this->itens_orcamento_valor_unitario);
         $this->Texto_tag .= "<td>" . $this->itens_orcamento_valor_unitario . "</td>\r\n";
   }
   //----- itens_orcamento_valor_total
   function NM_export_itens_orcamento_valor_total()
   {
             nmgp_Form_Num_Val($this->itens_orcamento_valor_total, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", $_SESSION['scriptcase']['reg_conf']['monet_simb'], "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->itens_orcamento_valor_total = NM_charset_to_utf8($this->itens_orcamento_valor_total);
         $this->itens_orcamento_valor_total = str_replace('<', '&lt;', $this->itens_orcamento_valor_total);
         $this->itens_orcamento_valor_total = str_replace('>', '&gt;', $this->itens_orcamento_valor_total);
         $this->Texto_tag .= "<td>" . $this->itens_orcamento_valor_total . "</td>\r\n";
   }
   //----- orcamento_idorcamento
   function NM_export_orcamento_idorcamento()
   {
             nmgp_Form_Num_Val($this->orcamento_idorcamento, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->orcamento_idorcamento = NM_charset_to_utf8($this->orcamento_idorcamento);
         $this->orcamento_idorcamento = str_replace('<', '&lt;', $this->orcamento_idorcamento);
         $this->orcamento_idorcamento = str_replace('>', '&gt;', $this->orcamento_idorcamento);
         $this->Texto_tag .= "<td>" . $this->orcamento_idorcamento . "</td>\r\n";
   }
   //----- orcamento_idcliente
   function NM_export_orcamento_idcliente()
   {
         nmgp_Form_Num_Val($this->look_orcamento_idcliente, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->look_orcamento_idcliente = NM_charset_to_utf8($this->look_orcamento_idcliente);
         $this->look_orcamento_idcliente = str_replace('<', '&lt;', $this->look_orcamento_idcliente);
         $this->look_orcamento_idcliente = str_replace('>', '&gt;', $this->look_orcamento_idcliente);
         $this->Texto_tag .= "<td>" . $this->look_orcamento_idcliente . "</td>\r\n";
   }
   //----- orcamento_data_venda
   function NM_export_orcamento_data_venda()
   {
             $conteudo_x =  $this->orcamento_data_venda;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->orcamento_data_venda, "YYYY-MM-DD  ");
                 $this->orcamento_data_venda = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa;hhiiss"));
             } 
         $this->orcamento_data_venda = NM_charset_to_utf8($this->orcamento_data_venda);
         $this->orcamento_data_venda = str_replace('<', '&lt;', $this->orcamento_data_venda);
         $this->orcamento_data_venda = str_replace('>', '&gt;', $this->orcamento_data_venda);
         $this->Texto_tag .= "<td>" . $this->orcamento_data_venda . "</td>\r\n";
   }
   //----- orcamento_observacao
   function NM_export_orcamento_observacao()
   {
         $this->orcamento_observacao = html_entity_decode($this->orcamento_observacao, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->orcamento_observacao = strip_tags($this->orcamento_observacao);
         $this->orcamento_observacao = NM_charset_to_utf8($this->orcamento_observacao);
         $this->orcamento_observacao = str_replace('<', '&lt;', $this->orcamento_observacao);
         $this->orcamento_observacao = str_replace('>', '&gt;', $this->orcamento_observacao);
         $this->Texto_tag .= "<td>" . $this->orcamento_observacao . "</td>\r\n";
   }
   //----- orcamento_status
   function NM_export_orcamento_status()
   {
         $this->orcamento_status = html_entity_decode($this->orcamento_status, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->orcamento_status = strip_tags($this->orcamento_status);
         $this->orcamento_status = NM_charset_to_utf8($this->orcamento_status);
         $this->orcamento_status = str_replace('<', '&lt;', $this->orcamento_status);
         $this->orcamento_status = str_replace('>', '&gt;', $this->orcamento_status);
         $this->Texto_tag .= "<td>" . $this->orcamento_status . "</td>\r\n";
   }
   //----- orcamento_valor
   function NM_export_orcamento_valor()
   {
             nmgp_Form_Num_Val($this->orcamento_valor, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "2", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         $this->orcamento_valor = NM_charset_to_utf8($this->orcamento_valor);
         $this->orcamento_valor = str_replace('<', '&lt;', $this->orcamento_valor);
         $this->orcamento_valor = str_replace('>', '&gt;', $this->orcamento_valor);
         $this->Texto_tag .= "<td>" . $this->orcamento_valor . "</td>\r\n";
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario'][$path_doc_md5][1] = $this->Tit_doc;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario']['rtf_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_orcamento_diario'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>RELATÓRIO DE VENDAS POR DATA :: RTF</TITLE>
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
<form name="Fdown" method="get" action="grid_orcamento_diario_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_orcamento_diario"> 
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
