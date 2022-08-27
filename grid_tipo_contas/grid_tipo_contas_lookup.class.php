<?php
class grid_tipo_contas_lookup
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
}
?>
