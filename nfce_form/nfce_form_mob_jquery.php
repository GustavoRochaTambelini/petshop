
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
  scEventControl_data["qtde_item" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nfce_detalhe" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["imagem" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cod_barra" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tecla" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["f2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["f4" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["f7" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["f9" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["chk_f2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["quantidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sc_field_0" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pra_pular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["qtde_item" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qtde_item" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nfce_detalhe" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nfce_detalhe" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["imagem" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["imagem" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cod_barra" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cod_barra" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tecla" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tecla" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["f2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["f2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["f4" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["f4" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["f7" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["f7" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["f9" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["f9" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["chk_f2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["chk_f2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["quantidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["quantidade" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sc_field_0" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sc_field_0" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pra_pular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pra_pular" + iSeqRow]["change"]) {
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
  $('#id_sc_field_valor_total' + iSeqRow).bind('blur', function() { sc_nfce_form_valor_total_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_nfce_form_valor_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_f2' + iSeqRow).bind('blur', function() { sc_nfce_form_f2_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_nfce_form_f2_onfocus(this, iSeqRow) });
  $('#id_sc_field_f4' + iSeqRow).bind('blur', function() { sc_nfce_form_f4_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_nfce_form_f4_onfocus(this, iSeqRow) });
  $('#id_sc_field_f7' + iSeqRow).bind('blur', function() { sc_nfce_form_f7_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_nfce_form_f7_onfocus(this, iSeqRow) });
  $('#id_sc_field_f9' + iSeqRow).bind('blur', function() { sc_nfce_form_f9_onblur(this, iSeqRow) })
                                .bind('focus', function() { sc_nfce_form_f9_onfocus(this, iSeqRow) });
  $('#id_sc_field_chk_f2' + iSeqRow).bind('blur', function() { sc_nfce_form_chk_f2_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_nfce_form_chk_f2_onfocus(this, iSeqRow) });
  $('#id_sc_field_cod_barra' + iSeqRow).bind('blur', function() { sc_nfce_form_cod_barra_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_nfce_form_cod_barra_onfocus(this, iSeqRow) });
  $('#id_sc_field_imagem' + iSeqRow).bind('blur', function() { sc_nfce_form_imagem_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_nfce_form_imagem_onfocus(this, iSeqRow) });
  $('#id_sc_field_sc_field_0' + iSeqRow).bind('blur', function() { sc_nfce_form_sc_field_0_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_nfce_form_sc_field_0_onfocus(this, iSeqRow) });
  $('#id_sc_field_pra_pular' + iSeqRow).bind('blur', function() { sc_nfce_form_pra_pular_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_nfce_form_pra_pular_onfocus(this, iSeqRow) });
  $('#id_sc_field_qtde_item' + iSeqRow).bind('blur', function() { sc_nfce_form_qtde_item_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_nfce_form_qtde_item_onfocus(this, iSeqRow) });
  $('#id_sc_field_quantidade' + iSeqRow).bind('blur', function() { sc_nfce_form_quantidade_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_nfce_form_quantidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_tecla' + iSeqRow).bind('blur', function() { sc_nfce_form_tecla_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_nfce_form_tecla_onfocus(this, iSeqRow) });
  $('#id_sc_field_nfce_detalhe' + iSeqRow).bind('blur', function() { sc_nfce_form_nfce_detalhe_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_nfce_form_nfce_detalhe_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-f2' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-f4' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-f7' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-f9' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-chk_f2' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-chk_fecha' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-chk_nfce' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-chk_orcamento' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-chk_tecla' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
  $('.sc-ui-checkbox-inclui' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_nfce_form_valor_total_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_valor_total();
  scCssBlur(oThis);
}

function sc_nfce_form_valor_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_f2_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_f2();
  scCssBlur(oThis);
}

function sc_nfce_form_f2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_f4_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_f4();
  scCssBlur(oThis);
}

function sc_nfce_form_f4_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_f7_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_f7();
  scCssBlur(oThis);
}

function sc_nfce_form_f7_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_f9_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_f9();
  scCssBlur(oThis);
}

function sc_nfce_form_f9_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_chk_f2_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_chk_f2();
  scCssBlur(oThis);
}

function sc_nfce_form_chk_f2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_cod_barra_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_cod_barra();
  scCssBlur(oThis);
}

function sc_nfce_form_cod_barra_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_imagem_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_imagem();
  scCssBlur(oThis);
}

function sc_nfce_form_imagem_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_sc_field_0_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_sc_field_0();
  scCssBlur(oThis);
}

function sc_nfce_form_sc_field_0_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_pra_pular_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_pra_pular();
  scCssBlur(oThis);
}

function sc_nfce_form_pra_pular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_qtde_item_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_qtde_item();
  scCssBlur(oThis);
  do_ajax_nfce_form_mob_event_qtde_item_onblur();
}

function sc_nfce_form_qtde_item_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_quantidade_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_quantidade();
  scCssBlur(oThis);
}

function sc_nfce_form_quantidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_tecla_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_tecla();
  scCssBlur(oThis);
}

function sc_nfce_form_tecla_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_nfce_form_nfce_detalhe_onblur(oThis, iSeqRow) {
  do_ajax_nfce_form_mob_validate_nfce_detalhe();
  scCssBlur(oThis);
}

function sc_nfce_form_nfce_detalhe_onfocus(oThis, iSeqRow) {
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
	displayChange_field("qtde_item", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("nfce_detalhe", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("imagem", "", status);
	displayChange_field("cod_barra", "", status);
	displayChange_field("tecla", "", status);
	displayChange_field("f2", "", status);
	displayChange_field("f4", "", status);
	displayChange_field("f7", "", status);
	displayChange_field("f9", "", status);
	displayChange_field("chk_f2", "", status);
	displayChange_field("quantidade", "", status);
	displayChange_field("sc_field_0", "", status);
	displayChange_field("valor_total", "", status);
	displayChange_field("pra_pular", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_qtde_item(row, status);
	displayChange_field_nfce_detalhe(row, status);
	displayChange_field_imagem(row, status);
	displayChange_field_cod_barra(row, status);
	displayChange_field_tecla(row, status);
	displayChange_field_f2(row, status);
	displayChange_field_f4(row, status);
	displayChange_field_f7(row, status);
	displayChange_field_f9(row, status);
	displayChange_field_chk_f2(row, status);
	displayChange_field_quantidade(row, status);
	displayChange_field_sc_field_0(row, status);
	displayChange_field_valor_total(row, status);
	displayChange_field_pra_pular(row, status);
}

function displayChange_field(field, row, status) {
	if ("qtde_item" == field) {
		displayChange_field_qtde_item(row, status);
	}
	if ("nfce_detalhe" == field) {
		displayChange_field_nfce_detalhe(row, status);
	}
	if ("imagem" == field) {
		displayChange_field_imagem(row, status);
	}
	if ("cod_barra" == field) {
		displayChange_field_cod_barra(row, status);
	}
	if ("tecla" == field) {
		displayChange_field_tecla(row, status);
	}
	if ("f2" == field) {
		displayChange_field_f2(row, status);
	}
	if ("f4" == field) {
		displayChange_field_f4(row, status);
	}
	if ("f7" == field) {
		displayChange_field_f7(row, status);
	}
	if ("f9" == field) {
		displayChange_field_f9(row, status);
	}
	if ("chk_f2" == field) {
		displayChange_field_chk_f2(row, status);
	}
	if ("quantidade" == field) {
		displayChange_field_quantidade(row, status);
	}
	if ("sc_field_0" == field) {
		displayChange_field_sc_field_0(row, status);
	}
	if ("valor_total" == field) {
		displayChange_field_valor_total(row, status);
	}
	if ("pra_pular" == field) {
		displayChange_field_pra_pular(row, status);
	}
}

function displayChange_field_qtde_item(row, status) {
    var fieldId;
}

function displayChange_field_nfce_detalhe(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_nfce_detalhe_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_nfce_detalhe_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_imagem(row, status) {
    var fieldId;
}

function displayChange_field_cod_barra(row, status) {
    var fieldId;
}

function displayChange_field_tecla(row, status) {
    var fieldId;
}

function displayChange_field_f2(row, status) {
    var fieldId;
}

function displayChange_field_f4(row, status) {
    var fieldId;
}

function displayChange_field_f7(row, status) {
    var fieldId;
}

function displayChange_field_f9(row, status) {
    var fieldId;
}

function displayChange_field_chk_f2(row, status) {
    var fieldId;
}

function displayChange_field_quantidade(row, status) {
    var fieldId;
}

function displayChange_field_sc_field_0(row, status) {
    var fieldId;
}

function displayChange_field_valor_total(row, status) {
    var fieldId;
}

function displayChange_field_pra_pular(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_nfce_form_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(21);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'nfce_form_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
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

