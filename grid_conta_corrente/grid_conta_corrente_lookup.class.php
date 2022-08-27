<?php
class grid_conta_corrente_lookup
{
//  
   function lookup_ativo(&$ativo) 
   {
      $conteudo = "" ; 
      if ($ativo == "T")
      { 
          $conteudo = "ATIVO";
      } 
      if ($ativo == "F")
      { 
          $conteudo = "INATIVO";
      } 
      if (!empty($conteudo)) 
      { 
          $ativo = $conteudo; 
      } 
   }  
//  
   function lookup_saldo(&$conteudo , $idconta_corrente, &$nm_array_retorno_lookup) 
   {
      $nm_array_retorno_lookup = array();
      if (trim($idconta_corrente) === "")
      { 
          $conteudo = "&nbsp;";
          return ; 
      } 
      $conteudo = "";
      $nm_comando = "SELECT
CASE
    WHEN SUM(entrada - saida) = '' THEN '0'
    WHEN SUM(entrada - saida) IS NULL THEN '0'
    ELSE  SUM(entrada - saida)
END 
FROM caixa_diario 
WHERE idconta_corrente = $idconta_corrente" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          $y = 0; 
          $a = 0; 
          while (!$rx->EOF) 
          { 
                 if (isset($rx->fields[0]))
                 { 
                     $nm_array_retorno_lookup[$a][0] = trim($rx->fields[0]);
                     $a++; 
                     if ($y == 1)
                     { 
                          $conteudo .= "<br>";
                          $y = 0; 
                     } 
                     if ($y != 0)
                     { 
                          $conteudo .= "";
                     } 
                     $y++; 
                     $nm_tmp_form = trim($rx->fields[0]); 
                     $conteudo .= $nm_tmp_form;
                 } 
                 $rx->MoveNext();
          } 
          $rx->Close();
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
   } 
}
?>
