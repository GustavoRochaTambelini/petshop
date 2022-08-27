
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["cpf_cnpj" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nome_fantasia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["razao_social" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["contas_receber_detalhes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["contas_recebido_detalhes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["cpf_cnpj" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cpf_cnpj" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome_fantasia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome_fantasia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["razao_social" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["razao_social" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["contas_receber_detalhes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["contas_receber_detalhes" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["contas_recebido_detalhes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["contas_recebido_detalhes" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("cidade_idcidade" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_idcliente' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_idcliente_onchange(this, iSeqRow) });
  $('#id_sc_field_cidade_idcidade' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_cidade_idcidade_onchange(this, iSeqRow) });
  $('#id_sc_field_cpf_cnpj' + iSeqRow).bind('blur', function() { sc_form_cliente_contas_pagar_cpf_cnpj_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_cliente_contas_pagar_cpf_cnpj_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_cliente_contas_pagar_cpf_cnpj_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome_fantasia' + iSeqRow).bind('blur', function() { sc_form_cliente_contas_pagar_nome_fantasia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_cliente_contas_pagar_nome_fantasia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_cliente_contas_pagar_nome_fantasia_onfocus(this, iSeqRow) });
  $('#id_sc_field_razao_social' + iSeqRow).bind('blur', function() { sc_form_cliente_contas_pagar_razao_social_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_cliente_contas_pagar_razao_social_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_cliente_contas_pagar_razao_social_onfocus(this, iSeqRow) });
  $('#id_sc_field_data_nascimento' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_data_nascimento_onchange(this, iSeqRow) });
  $('#id_sc_field_logradouro' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_logradouro_onchange(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_numero_onchange(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_bairro_onchange(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_email_onchange(this, iSeqRow) });
  $('#id_sc_field_indicacao' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_indicacao_onchange(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('change', function() { sc_form_cliente_contas_pagar_cep_onchange(this, iSeqRow) });
  $('#id_sc_field_contas_receber_detalhes' + iSeqRow).bind('blur', function() { sc_form_cliente_contas_pagar_contas_receber_detalhes_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_cliente_contas_pagar_contas_receber_detalhes_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_cliente_contas_pagar_contas_receber_detalhes_onfocus(this, iSeqRow) });
  $('#id_sc_field_contas_recebido_detalhes' + iSeqRow).bind('blur', function() { sc_form_cliente_contas_pagar_contas_recebido_detalhes_onblur(this, iSeqRow) })
                                                      .bind('change', function() { sc_form_cliente_contas_pagar_contas_recebido_detalhes_onchange(this, iSeqRow) })
                                                      .bind('focus', function() { sc_form_cliente_contas_pagar_contas_recebido_detalhes_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cliente_contas_pagar_idcliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_cidade_idcidade_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_cpf_cnpj_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_contas_pagar_validate_cpf_cnpj();
  scCssBlur(oThis);
}

function sc_form_cliente_contas_pagar_cpf_cnpj_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_cpf_cnpj_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_contas_pagar_nome_fantasia_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_contas_pagar_validate_nome_fantasia();
  scCssBlur(oThis);
}

function sc_form_cliente_contas_pagar_nome_fantasia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_nome_fantasia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_contas_pagar_razao_social_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_contas_pagar_validate_razao_social();
  scCssBlur(oThis);
}

function sc_form_cliente_contas_pagar_razao_social_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_razao_social_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_contas_pagar_data_nascimento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_logradouro_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_numero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_bairro_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_indicacao_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_cep_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_contas_receber_detalhes_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_contas_pagar_validate_contas_receber_detalhes();
  scCssBlur(oThis);
}

function sc_form_cliente_contas_pagar_contas_receber_detalhes_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_contas_receber_detalhes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_contas_pagar_contas_recebido_detalhes_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_contas_pagar_validate_contas_recebido_detalhes();
  scCssBlur(oThis);
}

function sc_form_cliente_contas_pagar_contas_recebido_detalhes_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_contas_pagar_contas_recebido_detalhes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
	if ("2" == block) {
		displayChange_block_2(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("cpf_cnpj", "", status);
	displayChange_field("nome_fantasia", "", status);
	displayChange_field("razao_social", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("contas_receber_detalhes", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("contas_recebido_detalhes", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_cpf_cnpj(row, status);
	displayChange_field_nome_fantasia(row, status);
	displayChange_field_razao_social(row, status);
	displayChange_field_contas_receber_detalhes(row, status);
	displayChange_field_contas_recebido_detalhes(row, status);
}

function displayChange_field(field, row, status) {
	if ("cpf_cnpj" == field) {
		displayChange_field_cpf_cnpj(row, status);
	}
	if ("nome_fantasia" == field) {
		displayChange_field_nome_fantasia(row, status);
	}
	if ("razao_social" == field) {
		displayChange_field_razao_social(row, status);
	}
	if ("contas_receber_detalhes" == field) {
		displayChange_field_contas_receber_detalhes(row, status);
	}
	if ("contas_recebido_detalhes" == field) {
		displayChange_field_contas_recebido_detalhes(row, status);
	}
}

function displayChange_field_cpf_cnpj(row, status) {
    var fieldId;
}

function displayChange_field_nome_fantasia(row, status) {
    var fieldId;
}

function displayChange_field_razao_social(row, status) {
    var fieldId;
}

function displayChange_field_contas_receber_detalhes(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_contas_pagar_nao_pago_fornecedor")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_contas_pagar_nao_pago_fornecedor")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_contas_recebido_detalhes(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_contas_pagar_pagos_fornecedor")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_contas_pagar_pagos_fornecedor")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_cliente_contas_pagar_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(33);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_data_nascimento" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_data_nascimento" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_cliente_contas_pagar_validate_data_nascimento(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['data_nascimento']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_cliente_contas_pagar')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQPasswordToggleAdd(seqRow) {
  $(".sc-ui-pwd-toggle-icon" + seqRow).on("click", function() {
    var fieldName = $(this).attr("id").substr(17), fieldObj = $("#id_sc_field_" + fieldName), fieldFA = $("#id_pwd_fa_" + fieldName);
    if ("text" == fieldObj.attr("type")) {
      fieldObj.attr("type", "password");
      fieldFA.attr("class", "fa fa-eye sc-ui-pwd-eye");
    } else {
      fieldObj.attr("type", "text");
      fieldFA.attr("class", "fa fa-eye-slash sc-ui-pwd-eye");
    }
  });
} // scJQPasswordToggleAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "cidade_idcidade" == specificField) {
    scJQSelect2Add_cidade_idcidade(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_cidade_idcidade(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cidade_idcidade_obj" : "#id_sc_field_cidade_idcidade" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cidade_idcidade_obj',
      dropdownCssClass: 'css_cidade_idcidade_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_cidade_idcidade) { displayChange_field_cidade_idcidade(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}

