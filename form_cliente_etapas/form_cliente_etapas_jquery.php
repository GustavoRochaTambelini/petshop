
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

  if ($oField.length > 0) {
    switch ($oField[0].name) {
      case 'idcliente':
      case 'cidade_idcidade':
      case 'cpf_cnpj':
      case 'nome_fantasia':
        break;
      case 'razao_social':
      case 'data_nascimento':
      case 'logradouro':
        break;
      case 'numero':
      case 'bairro':
      case 'email':
        break;
      case 'indicacao':
      case 'cep':
      case 'uf':
        break;
    }
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
  scEventControl_data["idcliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cidade_idcidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cpf_cnpj" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nome_fantasia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["razao_social" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["data_nascimento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["logradouro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["bairro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["indicacao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cep" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["uf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idcliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idcliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cidade_idcidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cidade_idcidade" + iSeqRow]["change"]) {
    return true;
  }
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
  if (scEventControl_data["data_nascimento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["data_nascimento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["logradouro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["logradouro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["bairro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["indicacao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["indicacao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cep" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["uf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["uf" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
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
  $('#id_sc_field_idcliente' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_idcliente_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_cliente_etapas_idcliente_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_cliente_etapas_idcliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_cidade_idcidade' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_cidade_idcidade_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_cliente_etapas_cidade_idcidade_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_cliente_etapas_cidade_idcidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf_cnpj' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_cpf_cnpj_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_cliente_etapas_cpf_cnpj_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_cliente_etapas_cpf_cnpj_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome_fantasia' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_nome_fantasia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_cliente_etapas_nome_fantasia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_cliente_etapas_nome_fantasia_onfocus(this, iSeqRow) });
  $('#id_sc_field_razao_social' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_razao_social_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_cliente_etapas_razao_social_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_cliente_etapas_razao_social_onfocus(this, iSeqRow) });
  $('#id_sc_field_data_nascimento' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_data_nascimento_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_cliente_etapas_data_nascimento_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_cliente_etapas_data_nascimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_logradouro' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_logradouro_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_cliente_etapas_logradouro_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_cliente_etapas_logradouro_onfocus(this, iSeqRow) });
  $('#id_sc_field_numero' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_numero_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_cliente_etapas_numero_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cliente_etapas_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_bairro' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_bairro_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_cliente_etapas_bairro_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_cliente_etapas_bairro_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_email_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_cliente_etapas_email_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_cliente_etapas_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_indicacao' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_indicacao_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_cliente_etapas_indicacao_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_cliente_etapas_indicacao_onfocus(this, iSeqRow) });
  $('#id_sc_field_cep' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_cep_onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_cliente_etapas_cep_onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_cliente_etapas_cep_onfocus(this, iSeqRow) });
  $('#id_sc_field_uf' + iSeqRow).bind('blur', function() { sc_form_cliente_etapas_uf_onblur(this, iSeqRow) })
                                .bind('change', function() { sc_form_cliente_etapas_uf_onchange(this, iSeqRow) })
                                .bind('focus', function() { sc_form_cliente_etapas_uf_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_cliente_etapas_idcliente_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_idcliente();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_idcliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_idcliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_cidade_idcidade_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_cidade_idcidade();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_cidade_idcidade_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_cidade_idcidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_cpf_cnpj_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_cpf_cnpj();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_cpf_cnpj_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_cpf_cnpj_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_nome_fantasia_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_nome_fantasia();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_nome_fantasia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_nome_fantasia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_razao_social_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_razao_social();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_razao_social_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_razao_social_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_data_nascimento_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_data_nascimento();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_data_nascimento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_data_nascimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_logradouro_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_logradouro();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_logradouro_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_logradouro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_numero();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_numero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_bairro_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_bairro();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_bairro_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_bairro_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_email_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_email();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_email_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_indicacao_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_indicacao();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_indicacao_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_indicacao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_cep_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_cep();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_cep_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_cep_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_cliente_etapas_uf_onblur(oThis, iSeqRow) {
  do_ajax_form_cliente_etapas_validate_uf();
  scCssBlur(oThis);
}

function sc_form_cliente_etapas_uf_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_cliente_etapas_uf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_page(page, status) {
	if ("0" == page) {
		displayChange_page_0(status);
	}
	if ("1" == page) {
		displayChange_page_1(status);
	}
	if ("2" == page) {
		displayChange_page_2(status);
	}
	if ("3" == page) {
		displayChange_page_3(status);
	}
}

function displayChange_page_0(status) {
	displayChange_block("0", status);
}

function displayChange_page_1(status) {
	displayChange_block("1", status);
}

function displayChange_page_2(status) {
	displayChange_block("2", status);
}

function displayChange_page_3(status) {
	displayChange_block("3", status);
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
	if ("3" == block) {
		displayChange_block_3(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("idcliente", "", status);
	displayChange_field("cidade_idcidade", "", status);
	displayChange_field("cpf_cnpj", "", status);
	displayChange_field("nome_fantasia", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("razao_social", "", status);
	displayChange_field("data_nascimento", "", status);
	displayChange_field("logradouro", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("numero", "", status);
	displayChange_field("bairro", "", status);
	displayChange_field("email", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("indicacao", "", status);
	displayChange_field("cep", "", status);
	displayChange_field("uf", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idcliente(row, status);
	displayChange_field_cidade_idcidade(row, status);
	displayChange_field_cpf_cnpj(row, status);
	displayChange_field_nome_fantasia(row, status);
	displayChange_field_razao_social(row, status);
	displayChange_field_data_nascimento(row, status);
	displayChange_field_logradouro(row, status);
	displayChange_field_numero(row, status);
	displayChange_field_bairro(row, status);
	displayChange_field_email(row, status);
	displayChange_field_indicacao(row, status);
	displayChange_field_cep(row, status);
	displayChange_field_uf(row, status);
}

function displayChange_field(field, row, status) {
	if ("idcliente" == field) {
		displayChange_field_idcliente(row, status);
	}
	if ("cidade_idcidade" == field) {
		displayChange_field_cidade_idcidade(row, status);
	}
	if ("cpf_cnpj" == field) {
		displayChange_field_cpf_cnpj(row, status);
	}
	if ("nome_fantasia" == field) {
		displayChange_field_nome_fantasia(row, status);
	}
	if ("razao_social" == field) {
		displayChange_field_razao_social(row, status);
	}
	if ("data_nascimento" == field) {
		displayChange_field_data_nascimento(row, status);
	}
	if ("logradouro" == field) {
		displayChange_field_logradouro(row, status);
	}
	if ("numero" == field) {
		displayChange_field_numero(row, status);
	}
	if ("bairro" == field) {
		displayChange_field_bairro(row, status);
	}
	if ("email" == field) {
		displayChange_field_email(row, status);
	}
	if ("indicacao" == field) {
		displayChange_field_indicacao(row, status);
	}
	if ("cep" == field) {
		displayChange_field_cep(row, status);
	}
	if ("uf" == field) {
		displayChange_field_uf(row, status);
	}
}

function displayChange_field_idcliente(row, status) {
    var fieldId;
}

function displayChange_field_cidade_idcidade(row, status) {
    var fieldId;
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

function displayChange_field_data_nascimento(row, status) {
    var fieldId;
}

function displayChange_field_logradouro(row, status) {
    var fieldId;
}

function displayChange_field_numero(row, status) {
    var fieldId;
}

function displayChange_field_bairro(row, status) {
    var fieldId;
}

function displayChange_field_email(row, status) {
    var fieldId;
}

function displayChange_field_indicacao(row, status) {
    var fieldId;
}

function displayChange_field_cep(row, status) {
    var fieldId;
}

function displayChange_field_uf(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_cliente_etapas_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(27);
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
      do_ajax_form_cliente_etapas_validate_data_nascimento(iSeqRow);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_cliente_etapas')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
} // scJQSelect2Add

var wizardActualStep = <?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_etapas']['form_wizard']['actual_step']; ?>;
var wizardTotalSteps = <?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_cliente_etapas']['form_wizard']['total_steps']; ?>;
var wizardIsInsert = <?php echo ('novo' == $this->nmgp_opcao || $GLOBALS["erro_incl"] == 1 ? 'true' : 'false'); ?>;
var wizardViewMode = '<?php echo ('novo' == $this->nmgp_opcao || $GLOBALS["erro_incl"] == 1 ? 'wizard' : 'wizard'); ?>';
var pag_ativa = wizardActualStep;

function scJQWizardGoToPage(pageNo)
{
    pageNo = parseInt(pageNo);

    scJQWizardHideAllFormSteps();
    scJQWizardShowFormStep(pageNo);
    scJQWizardPreparePageNavigation(pageNo);
    scJQWizardPrepareStep(pageNo);

    wizardActualStep = pageNo;
    pag_ativa = wizardActualStep;
}

function scJQWizardPageClick(pageGoTo)
{
    var thisPage = $("#sc-ui-form-step-" + pageGoTo);

    pageGoTo = parseInt(pageGoTo);

    if (thisPage.hasClass("scTabInactive")) {
        scJQWizardGoToPage(pageGoTo);
    }
}

function scJQWizardPreparePageNavigation(pageNo)
{
    $("#sc-ui-form-step-" + wizardActualStep).removeClass("scTabActive").addClass("scTabInactive");
    $("#sc-ui-form-step-" + pageNo).removeClass("scTabInactive").addClass("scTabActive");

    $(".scTabInactive").css("cursor", "pointer");

    scJQWizardNavigationButtons();
}

function scJQWizardIsFirstStep()
{
    return 0 == wizardActualStep;
}

function scJQWizardIsLastStep()
{
    return wizardTotalSteps == wizardActualStep + 1;
}

function scJQWizardGoToNextStep()
{
    if (scJQWizardIsLastStep()) {
        return;
    }

    scJQWizardValidateStep(wizardActualStep + 1);
}

function scJQWizardGoToPreviousStep()
{
    if (scJQWizardIsFirstStep()) {
        return;
    }

    scJQWizardValidateStep(wizardActualStep - 1);
}

function scJQWizardStepClick(stepGoTo)
{
    var thisStep = $("#sc-ui-form-step-" + stepGoTo);

    stepGoTo = parseInt(stepGoTo);

    if (thisStep.hasClass("sc-ui-form-step-done")) {
        scJQWizardValidateStep(stepGoTo);
    } else if (thisStep.hasClass("sc-ui-form-step-next")) {
        scJQWizardValidateStep(stepGoTo);
    }
}

function scJQWizardValidateStep(stepGoTo)
{
    if (0 == wizardActualStep) {
        do_ajax_form_cliente_etapas_submit_page_0(stepGoTo);
    }
    if (1 == wizardActualStep) {
        do_ajax_form_cliente_etapas_submit_page_1(stepGoTo);
    }
    if (2 == wizardActualStep) {
        do_ajax_form_cliente_etapas_submit_page_2(stepGoTo);
    }
    if (3 == wizardActualStep) {
        do_ajax_form_cliente_etapas_submit_page_3(stepGoTo);
    }
}

function scJQWizardGoToStep(stepNo)
{
    stepNo = parseInt(stepNo);

    if (typeof wizardMobileProgress === "object") {
        if (stepNo > wizardActualStep) {
            wizardMobileProgress.goToNextStep();
        } else if (stepNo < wizardActualStep) {
            wizardMobileProgress.goToPrevStep();
        }
    }

    scJQWizardHideAllFormSteps();
    scJQWizardShowFormStep(stepNo);
    scJQWizardPrepareNavigation(stepNo);
    scJQWizardPrepareStep(stepNo);

    wizardActualStep = stepNo;
    pag_ativa = wizardActualStep;

    if (wizardIsInsert) {
        if (scJQWizardIsLastStep()) {
            scJQWizardInsertButtonShow();
        } else {
            scJQWizardInsertButtonHide();
        }
    }

    if ('wizard' == wizardViewMode) {
        if (scJQWizardIsFirstStep()) {
            scJQWizardPreviousButtonHide();
        } else {
            scJQWizardPreviousButtonShow();
        }
        if (scJQWizardIsLastStep()) {
            scJQWizardNextButtonHide();
        } else {
            scJQWizardNextButtonShow();
        }
    }
}

function scJQWizardHideAllFormSteps()
{
    scJQWizardHideFormStep(0);
    scJQWizardHideFormStep(1);
    scJQWizardHideFormStep(2);
    scJQWizardHideFormStep(3);
}

function scJQWizardHideFormStep(stepNo)
{
    $("#form_cliente_etapas_form" + stepNo).css({
        "width": "1px",
        "height": "0",
        "display": "none",
        "overflow": "scroll",
    });
}

function scJQWizardShowFormStep(stepNo)
{
    $("#form_cliente_etapas_form" + stepNo).css({
        "width": "",
        "height": "",
        "display": "",
        "overflow": "visible",
    });
}

function scJQWizardPrepareNavigation(stepNo)
{
    scJQWizardNavigationDone(stepNo);
    scJQWizardNavigationNow(stepNo);
    scJQWizardNavigationNext(stepNo);
    scJQWizardNavigationToDo(stepNo);
    scJQWizardNavigationButtons();
}

function scJQWizardNavigationDone(stepNo)
{
    if (0 == stepNo) {
        return;
    }

    for (var i = 0; i < stepNo; i++) {
        scJQWizardNavigationAddClass("sc-ui-form-step-done", i);
        scJQWizardNavigationUpdateStep(i);
    }
}

function scJQWizardNavigationNow(stepNo)
{
    scJQWizardNavigationAddClass("sc-ui-form-step-now", stepNo);
    scJQWizardNavigationUpdateStep(stepNo);
}

function scJQWizardNavigationNext(stepNo)
{
    if (wizardTotalSteps == stepNo + 1) {
        return;
    }

    for (var i = stepNo + 1; i < wizardTotalSteps; i++) {
        scJQWizardNavigationAddClass("sc-ui-form-step-next", i);
        scJQWizardNavigationUpdateStep(i);
    }
}

function scJQWizardNavigationToDo(stepNo)
{
    if (!wizardIsInsert && 'wizard' != wizardViewMode) {
        return;
    }

    if (wizardTotalSteps == stepNo + 2) {
        return;
    }

    for (var i = stepNo + 2; i < wizardTotalSteps; i++) {
        scJQWizardNavigationAddClass("sc-ui-form-step-todo", i);
        scJQWizardNavigationUpdateStep(i);
    }
}

function scJQWizardNavigationAddClass(className, stepNo)
{
    $("#sc-ui-form-step-" + stepNo)
        .removeClass("sc-ui-form-step-done")
        .removeClass("sc-ui-form-step-now")
        .removeClass("sc-ui-form-step-next")
        .removeClass("sc-ui-form-step-todo")
        .removeClass("is-complete")
        .addClass(className);

    if ("sc-ui-form-step-done" == className) {
        $("#sc-ui-form-step-" + stepNo).addClass("is-complete");
    }
}

function scJQWizardNavigationUpdateStep(stepNo)
{
    var thisStep = $("#sc-ui-form-step-" + stepNo);

    if (thisStep.hasClass("sc-ui-form-step-done")) {
        thisStep.on("mouseover", function() {
            $(this).css("cursor", "pointer");
        });
    } else if (thisStep.hasClass("sc-ui-form-step-now")) {
        thisStep.on("mouseover", function() {
            $(this).css("cursor", "default");
        });
    } else if (thisStep.hasClass("sc-ui-form-step-next")) {
        thisStep.on("mouseover", function() {
            $(this).css("cursor", "pointer");
        });
    } else {
        thisStep.on("mouseover", function() {
            $(this).css("cursor", "not-allowed");
        });
    }
}

function scJQWizardInsertButtonHide()
{
    $("#sc_b_ins_t").hide();
    $("#sc_b_ins_b").hide();
}

function scJQWizardInsertButtonShow()
{
    $("#sc_b_ins_t").show();
    $("#sc_b_ins_b").show();
}

function scJQWizardInsertButtonDisable()
{
    $("#sc_b_ins_t").addClass("disabled");
    $("#sc_b_ins_b").addClass("disabled");
}

function scJQWizardInsertButtonEnable()
{
    $("#sc_b_ins_t").removeClass("disabled");
    $("#sc_b_ins_b").removeClass("disabled");
}

function scJQWizardPreviousButtonHide()
{
    $("#sc_b_stepret_t").hide();
    $("#sc_b_stepret_b").hide();
}

function scJQWizardPreviousButtonShow()
{
    $("#sc_b_stepret_t").show();
    $("#sc_b_stepret_b").show();
}

function scJQWizardPreviousButtonDisable()
{
    $("#sc_b_stepret_t").addClass("disabled");
    $("#sc_b_stepret_b").addClass("disabled");
}

function scJQWizardPreviousButtonEnable()
{
    $("#sc_b_stepret_t").removeClass("disabled");
    $("#sc_b_stepret_b").removeClass("disabled");
}

function scJQWizardNextButtonHide()
{
    $("#sc_b_stepavc_t").hide();
    $("#sc_b_stepavc_b").hide();
}

function scJQWizardNextButtonShow()
{
    $("#sc_b_stepavc_t").show();
    $("#sc_b_stepavc_b").show();
}

function scJQWizardNextButtonDisable()
{
    $("#sc_b_stepavc_t").addClass("disabled");
    $("#sc_b_stepavc_b").addClass("disabled");
}

function scJQWizardNextButtonEnable()
{
    $("#sc_b_stepavc_t").removeClass("disabled");
    $("#sc_b_stepavc_b").removeClass("disabled");
}

function scJQWizardNavigationButtons()
{
    if ('wizard' != wizardViewMode) {
        scJQWizardPreviousButtonHide();
        scJQWizardNextButtonHide();
    }
}

function scJQWizardPrepareStep(stepNo)
{
    if (0 == stepNo) {
        scJQWizardPrepareStep_0();
    }
    if (1 == stepNo) {
        scJQWizardPrepareStep_1();
    }
    if (2 == stepNo) {
        scJQWizardPrepareStep_2();
    }
    if (3 == stepNo) {
        scJQWizardPrepareStep_3();
    }
}

function scJQWizardPrepareStep_0()
{
}

function scJQWizardPrepareStep_1()
{
}

function scJQWizardPrepareStep_2()
{
}

function scJQWizardPrepareStep_3()
{
}

<?php
if ($_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile']) {
?>
class MobileWizard
{
    constructor(wrapper) {
        this.wrapper = document.querySelector(wrapper)

        // Circle
        this.circle = this.wrapper.querySelector('.js-progress-circle');
        this.radius = this.circle.r.baseVal.value;
        this.circumference = this.radius * 2 * Math.PI;

        // Steps
        this.steps = this.wrapper.querySelectorAll('.sc-steps .item');
        this.currentStep = this.wrapper.querySelector('.sc-ui-form-step-now');
        this.nextStep = this.wrapper.querySelector('.sc-ui-form-step-next');
        this.arraySteps = Array.from(this.steps);
        this.currentStepIndex = this.arraySteps.findIndex((step) => step === this.currentStep);

        // Counter
        this.currentStepCounter = document.querySelector('.js-current-step-counter');
        this.totalStepsCounter = document.querySelector('.js-total-steps-counter');
        this.totalCounter = this.steps.length;

        this.progress = 100 / this.totalCounter;

        // Initial Setup
        this.initialStyles();
        this.initialCounter();
        this.initialProgress();
        this.setNextStepTitle();
    }

    initialStyles() {
        this.circle.style.strokeDasharray = this.circumference + " " + this.circumference;
        this.circle.style.strokeDashoffset = this.circumference;
    }

    initialCounter() {
        this.currentStepCounter.textContent = this.currentStepIndex + 1;
        this.totalStepsCounter.textContent = this.totalCounter;
    }

    initialProgress() {
        this.percent = 100 / this.totalCounter;
        this.setProgress(this.progress);
    }

    setCounter(counter) {
        this.currentStepCounter.textContent = counter;
    }

    setProgress(percent) {
        const offset = this.circumference - percent / 100 * this.circumference;
        this.circle.style.strokeDashoffset = offset;
    }

    calcAndSetProgress() {
        this.progress = parseFloat(100 / this.totalCounter) * (this.currentStepIndex + 1);
        this.setProgress(this.progress);
        this.setCounter(this.currentStepIndex + 1);
    }

    goToNextStep = () => {
        if (this.currentStepIndex +1 < this.totalCounter) {
            this.setActiveStepsStatus(1);
            this.calcAndSetProgress();
            this.setNextStepTitle()
        }
    }

    goToPrevStep = () => {
        if (this.currentStepIndex !== 0 && this.currentStepIndex <= this.totalCounter) {
            this.setActiveStepsStatus(-1);
            this.calcAndSetProgress();
            this.setNextStepTitle()
        }
    }

    setActiveStepsStatus(operator) {
        this.steps[this.currentStepIndex].classList.remove('sc-ui-form-step-now');
        this.steps[this.currentStepIndex].classList.add('is-complete');

        this.currentStepIndex = this.currentStepIndex + operator;

        this.steps[this.currentStepIndex].classList.remove('sc-ui-form-step-next');
        this.steps[this.currentStepIndex].classList.add('sc-ui-form-step-now');

        if (this.currentStepIndex + 1 < this.totalCounter) {
            this.steps[this.currentStepIndex + 1].classList.add('sc-ui-form-step-next');
        }
    }

    setNextStepTitle() {
        const description = this.steps[this.currentStepIndex].querySelector('.description');
        const nextStep = document.querySelector('.sc-ui-form-step-next');
        let nextStepTitle = '';

        if (nextStep) {
            const title = nextStep.querySelector('.title').textContent;
            nextStepTitle = '<?php echo $this->Ini->Nm_lang['lang_btns_next']; ?>: ' + title;
        } else {
            nextStepTitle = ''
        }

        description.textContent = nextStepTitle
    }
}

var wizardMobileProgress;

$(function() {
//    const prevButton = document.querySelector('.js-example-prev');
//    const nextButton = document.querySelector('.js-example-next');

    wizardMobileProgress = new MobileWizard('.sc-div-steps');

//    nextButton.addEventListener('click', wizardMobileProgress.goToNextStep);
//    prevButton.addEventListener('click', wizardMobileProgress.goToPrevStep);
});
<?php
}
?>


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
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

