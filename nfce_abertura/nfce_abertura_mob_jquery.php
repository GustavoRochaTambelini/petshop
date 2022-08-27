
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
  scEventControl_data["pdv_livre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["linha1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cpf_na_nota" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["espaco1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["com_cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["espaco2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sem_cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["espaco3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["linha2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cpf_cnpj" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["venda_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["chk_com_cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["chk_sem_cpf" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["pdv_livre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pdv_livre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["linha1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["linha1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cpf_na_nota" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cpf_na_nota" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["espaco1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["espaco1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["com_cpf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["com_cpf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["espaco2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["espaco2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sem_cpf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sem_cpf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["espaco3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["espaco3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["linha2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["linha2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cpf_cnpj" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cpf_cnpj" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["venda_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["venda_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["chk_com_cpf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["chk_com_cpf" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["chk_sem_cpf" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["chk_sem_cpf" + iSeqRow]["change"]) {
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
  $('#id_sc_field_pdv_livre' + iSeqRow).bind('blur', function() { sc_nfce_abertura_pdv_livre_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_nfce_abertura_pdv_livre_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf_na_nota' + iSeqRow).bind('blur', function() { sc_nfce_abertura_cpf_na_nota_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_nfce_abertura_cpf_na_nota_onfocus(this, iSeqRow) });
  $('#id_sc_field_com_cpf' + iSeqRow).bind('blur', function() { sc_nfce_abertura_com_cpf_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_nfce_abertura_com_cpf_onfocus(this, iSeqRow) });
  $('#id_sc_field_sem_cpf' + iSeqRow).bind('blur', function() { sc_nfce_abertura_sem_cpf_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_nfce_abertura_sem_cpf_onfocus(this, iSeqRow) });
  $('#id_sc_field_cpf_cnpj' + iSeqRow).bind('blur', function() { sc_nfce_abertura_cpf_cnpj_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_nfce_abertura_cpf_cnpj_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_nfce_abertura_nome_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_nfce_abertura_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_email' + iSeqRow).bind('blur', function() { sc_nfce_abertura_email_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_nfce_abertura_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_linha1' + iSeqRow).bind('blur', function() { sc_nfce_abertura_linha1_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_nfce_abertura_linha1_onfocus(this, iSeqRow) });
  $('#id_sc_field_linha2' + iSeqRow).bind('blur', function() { sc_nfce_abertura_linha2_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_nfce_abertura_linha2_onfocus(this, iSeqRow) });
  $('#id_sc_field_espaco1' + iSeqRow).bind('blur', function() { sc_nfce_abertura_espaco1_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_nfce_abertura_espaco1_onfocus(this, iSeqRow) });
  $('#id_sc_field_espaco2' + iSeqRow).bind('blur', function() { sc_nfce_abertura_espaco2_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_nfce_abertura_espaco2_onfocus(this, iSeqRow) });
  $('#id_sc_field_espaco3' + iSeqRow).bind('blur', function() { sc_nfce_abertura_espaco3_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_nfce_abertura_espaco3_onfocus(this, iSeqRow) });
  $('#id_sc_field_venda_id' + iSeqRow).bind('blur', function() { sc_nfce_abertura_venda_id_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_nfce_abertura_venda_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_chk_com_cpf' + iSeqRow).bind('blur', function() { sc_nfce_abertura_chk_com_cpf_onblur(this, iSeqRow) })
                                         .bind('click', function() { sc_nfce_abertura_chk_com_cpf_onclick(this, iSeqRow) })
                                         .bind('focus', function() { sc_nfce_abertura_chk_com_cpf_onfocus(this, iSeqRow) });
  $('#id_sc_field_chk_sem_cpf' + iSeqRow).bind('blur', function() { sc_nfce_abertura_chk_sem_cpf_onblur(this, iSeqRow) })
                                         .bind('click', function() { sc_nfce_abertura_chk_sem_cpf_onclick(this, iSeqRow) })
                                         .bind('focus', function() { sc_nfce_abertura_chk_sem_cpf_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-chk_com_cpf' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-chk_sem_cpf' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_nfce_abertura_pdv_livre_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_pdv_livre();
  scCssBlur(oThis);
}

function sc_nfce_abertura_pdv_livre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_cpf_na_nota_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_cpf_na_nota();
  scCssBlur(oThis);
}

function sc_nfce_abertura_cpf_na_nota_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_com_cpf_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_com_cpf();
  scCssBlur(oThis);
}

function sc_nfce_abertura_com_cpf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_sem_cpf_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_sem_cpf();
  scCssBlur(oThis);
}

function sc_nfce_abertura_sem_cpf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_cpf_cnpj_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_cpf_cnpj();
  scCssBlur(oThis);
}

function sc_nfce_abertura_cpf_cnpj_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_nome_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_nome();
  scCssBlur(oThis);
}

function sc_nfce_abertura_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_email_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_email();
  scCssBlur(oThis);
}

function sc_nfce_abertura_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_linha1_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_linha1();
  scCssBlur(oThis);
}

function sc_nfce_abertura_linha1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_linha2_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_linha2();
  scCssBlur(oThis);
}

function sc_nfce_abertura_linha2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_espaco1_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_espaco1();
  scCssBlur(oThis);
}

function sc_nfce_abertura_espaco1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_espaco2_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_espaco2();
  scCssBlur(oThis);
}

function sc_nfce_abertura_espaco2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_espaco3_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_espaco3();
  scCssBlur(oThis);
}

function sc_nfce_abertura_espaco3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_venda_id_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_venda_id();
  scCssBlur(oThis);
}

function sc_nfce_abertura_venda_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_chk_com_cpf_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_chk_com_cpf();
  scCssBlur(oThis);
}

function sc_nfce_abertura_chk_com_cpf_onclick(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_event_chk_com_cpf_onclick();
}

function sc_nfce_abertura_chk_com_cpf_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_abertura_chk_sem_cpf_onblur(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_validate_chk_sem_cpf();
  scCssBlur(oThis);
}

function sc_nfce_abertura_chk_sem_cpf_onclick(oThis, iSeqRow) {
  do_ajax_nfce_abertura_mob_event_chk_sem_cpf_onclick();
}

function sc_nfce_abertura_chk_sem_cpf_onfocus(oThis, iSeqRow) {
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
	if ("3" == block) {
		displayChange_block_3(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("pdv_livre", "", status);
	displayChange_field("linha1", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("cpf_na_nota", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("espaco1", "", status);
	displayChange_field("com_cpf", "", status);
	displayChange_field("espaco2", "", status);
	displayChange_field("sem_cpf", "", status);
	displayChange_field("espaco3", "", status);
	displayChange_field("linha2", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("cpf_cnpj", "", status);
	displayChange_field("nome", "", status);
	displayChange_field("email", "", status);
	displayChange_field("venda_id", "", status);
	displayChange_field("chk_com_cpf", "", status);
	displayChange_field("chk_sem_cpf", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_pdv_livre(row, status);
	displayChange_field_linha1(row, status);
	displayChange_field_cpf_na_nota(row, status);
	displayChange_field_espaco1(row, status);
	displayChange_field_com_cpf(row, status);
	displayChange_field_espaco2(row, status);
	displayChange_field_sem_cpf(row, status);
	displayChange_field_espaco3(row, status);
	displayChange_field_linha2(row, status);
	displayChange_field_cpf_cnpj(row, status);
	displayChange_field_nome(row, status);
	displayChange_field_email(row, status);
	displayChange_field_venda_id(row, status);
	displayChange_field_chk_com_cpf(row, status);
	displayChange_field_chk_sem_cpf(row, status);
}

function displayChange_field(field, row, status) {
	if ("pdv_livre" == field) {
		displayChange_field_pdv_livre(row, status);
	}
	if ("linha1" == field) {
		displayChange_field_linha1(row, status);
	}
	if ("cpf_na_nota" == field) {
		displayChange_field_cpf_na_nota(row, status);
	}
	if ("espaco1" == field) {
		displayChange_field_espaco1(row, status);
	}
	if ("com_cpf" == field) {
		displayChange_field_com_cpf(row, status);
	}
	if ("espaco2" == field) {
		displayChange_field_espaco2(row, status);
	}
	if ("sem_cpf" == field) {
		displayChange_field_sem_cpf(row, status);
	}
	if ("espaco3" == field) {
		displayChange_field_espaco3(row, status);
	}
	if ("linha2" == field) {
		displayChange_field_linha2(row, status);
	}
	if ("cpf_cnpj" == field) {
		displayChange_field_cpf_cnpj(row, status);
	}
	if ("nome" == field) {
		displayChange_field_nome(row, status);
	}
	if ("email" == field) {
		displayChange_field_email(row, status);
	}
	if ("venda_id" == field) {
		displayChange_field_venda_id(row, status);
	}
	if ("chk_com_cpf" == field) {
		displayChange_field_chk_com_cpf(row, status);
	}
	if ("chk_sem_cpf" == field) {
		displayChange_field_chk_sem_cpf(row, status);
	}
}

function displayChange_field_pdv_livre(row, status) {
    var fieldId;
}

function displayChange_field_linha1(row, status) {
    var fieldId;
}

function displayChange_field_cpf_na_nota(row, status) {
    var fieldId;
}

function displayChange_field_espaco1(row, status) {
    var fieldId;
}

function displayChange_field_com_cpf(row, status) {
    var fieldId;
}

function displayChange_field_espaco2(row, status) {
    var fieldId;
}

function displayChange_field_sem_cpf(row, status) {
    var fieldId;
}

function displayChange_field_espaco3(row, status) {
    var fieldId;
}

function displayChange_field_linha2(row, status) {
    var fieldId;
}

function displayChange_field_cpf_cnpj(row, status) {
    var fieldId;
}

function displayChange_field_nome(row, status) {
    var fieldId;
}

function displayChange_field_email(row, status) {
    var fieldId;
}

function displayChange_field_venda_id(row, status) {
    var fieldId;
}

function displayChange_field_chk_com_cpf(row, status) {
    var fieldId;
}

function displayChange_field_chk_sem_cpf(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_nfce_abertura_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(25);
		}
	}
}
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'nfce_abertura_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
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

