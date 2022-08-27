<?php
class grid_pacote_itens_lookup
{
//  
   function lookup_pacote_itens_idproduto(&$conteudo , $pacote_itens_idproduto) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $pacote_itens_idproduto; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($pacote_itens_idproduto) === "" || trim($pacote_itens_idproduto) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select descricao from produto where idproduto = $pacote_itens_idproduto order by descricao" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = trim($rx->fields[0]); 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_pacote_itens_quantidade_produto(&$conteudo , $pacote_itens_idpacote_itens) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $pacote_itens_idpacote_itens; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;" || trim($pacote_itens_idpacote_itens) === "" || trim($pacote_itens_idpacote_itens) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nm_comando = "SELECT  concat(quantidade_realizada_produto_pacote,'/', quantidade_total_produto_pacote) FROM quantidade_produto_pacote_view where idpacote_itens= $pacote_itens_idpacote_itens" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "SELECT  quantidade_realizada_produto_pacote&'/'&quantidade_total_produto_pacote FROM quantidade_produto_pacote_view where idpacote_itens= $pacote_itens_idpacote_itens" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
      { 
          $nm_comando = "SELECT  quantidade_realizada_produto_pacote||'/'||quantidade_total_produto_pacote FROM quantidade_produto_pacote_view where idpacote_itens= $pacote_itens_idpacote_itens" ; 
      } 
      else 
      { 
          $nm_comando = "SELECT  quantidade_realizada_produto_pacote||'/'||quantidade_total_produto_pacote FROM quantidade_produto_pacote_view where idpacote_itens= $pacote_itens_idpacote_itens" ; 
      } 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = trim($rx->fields[0]); 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
}
?>
