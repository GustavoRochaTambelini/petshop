<?php
class grid_contas_pagar_nao_pago_fornecedor_lookup
{
//  
   function lookup_idforma_pagamento_prevista(&$conteudo , $idforma_pagamento_prevista) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $idforma_pagamento_prevista; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($idforma_pagamento_prevista) === "" || trim($idforma_pagamento_prevista) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select descricao from forma_pagamento where idforma_pagamento = $idforma_pagamento_prevista order by descricao" ; 
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
   function lookup_idcliente(&$conteudo , $idcliente) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $idcliente; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;" || trim($idcliente) === "" || trim($idcliente) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nm_comando = "SELECT concat(cpf_cnpj, ' - ', nome_fantasia)  FROM cliente where idcliente = $idcliente order by cpf_cnpj, nome_fantasia" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "SELECT cpf_cnpj&' - '&nome_fantasia  FROM cliente where idcliente = $idcliente order by cpf_cnpj, nome_fantasia" ; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
      { 
          $nm_comando = "SELECT cpf_cnpj||' - '||nome_fantasia  FROM cliente where idcliente = $idcliente order by cpf_cnpj, nome_fantasia" ; 
      } 
      else 
      { 
          $nm_comando = "SELECT cpf_cnpj||' - '||nome_fantasia  FROM cliente where idcliente = $idcliente order by cpf_cnpj, nome_fantasia" ; 
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
