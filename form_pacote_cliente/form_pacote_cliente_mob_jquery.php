
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
  scEventControl_data["idpacote_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idcliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idpacote" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["quantidade_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["qunatidade_realizada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["itens_pacote" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idpacote_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idpacote_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idcliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idcliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idpacote" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idpacote" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["quantidade_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["quantidade_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pago" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["qunatidade_realizada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["qunatidade_realizada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["itens_pacote" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["itens_pacote" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("idcliente" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idpacote" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("pago" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idpacote" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
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
  $('#id_sc_field_idpacote_cliente' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_idpacote_cliente_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_pacote_cliente_idpacote_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_idpacote' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_idpacote_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_pacote_cliente_idpacote_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pacote_cliente_idpacote_onfocus(this, iSeqRow) });
  $('#id_sc_field_idcliente' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_idcliente_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_pacote_cliente_idcliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_quantidade_total' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_quantidade_total_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_pacote_cliente_quantidade_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_qunatidade_realizada' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_qunatidade_realizada_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_pacote_cliente_qunatidade_realizada_onfocus(this, iSeqRow) });
  $('#id_sc_field_valor_total' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_valor_total_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_pacote_cliente_valor_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_pago' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_pago_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pacote_cliente_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_itens_pacote' + iSeqRow).bind('blur', function() { sc_form_pacote_cliente_itens_pacote_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_pacote_cliente_itens_pacote_onfocus(this, iSeqRow) });
  $('.sc-ui-radio-qunatidade_realizada' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_pacote_cliente_idpacote_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_idpacote_cliente();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_idpacote_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pacote_cliente_idpacote_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_idpacote();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_idpacote_onchange(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_event_idpacote_onchange();
}

function sc_form_pacote_cliente_idpacote_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pacote_cliente_idcliente_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_idcliente();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_idcliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pacote_cliente_quantidade_total_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_quantidade_total();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_quantidade_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pacote_cliente_qunatidade_realizada_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_qunatidade_realizada();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_qunatidade_realizada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pacote_cliente_valor_total_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_valor_total();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_valor_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pacote_cliente_pago_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_pago();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pacote_cliente_itens_pacote_onblur(oThis, iSeqRow) {
  do_ajax_form_pacote_cliente_mob_validate_itens_pacote();
  scCssBlur(oThis);
}

function sc_form_pacote_cliente_itens_pacote_onfocus(oThis, iSeqRow) {
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
	displayChange_field("idpacote_cliente", "", status);
	displayChange_field("idcliente", "", status);
	displayChange_field("idpacote", "", status);
	displayChange_field("quantidade_total", "", status);
	displayChange_field("valor_total", "", status);
	displayChange_field("pago", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("qunatidade_realizada", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("itens_pacote", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idpacote_cliente(row, status);
	displayChange_field_idcliente(row, status);
	displayChange_field_idpacote(row, status);
	displayChange_field_quantidade_total(row, status);
	displayChange_field_valor_total(row, status);
	displayChange_field_pago(row, status);
	displayChange_field_qunatidade_realizada(row, status);
	displayChange_field_itens_pacote(row, status);
}

function displayChange_field(field, row, status) {
	if ("idpacote_cliente" == field) {
		displayChange_field_idpacote_cliente(row, status);
	}
	if ("idcliente" == field) {
		displayChange_field_idcliente(row, status);
	}
	if ("idpacote" == field) {
		displayChange_field_idpacote(row, status);
	}
	if ("quantidade_total" == field) {
		displayChange_field_quantidade_total(row, status);
	}
	if ("valor_total" == field) {
		displayChange_field_valor_total(row, status);
	}
	if ("pago" == field) {
		displayChange_field_pago(row, status);
	}
	if ("qunatidade_realizada" == field) {
		displayChange_field_qunatidade_realizada(row, status);
	}
	if ("itens_pacote" == field) {
		displayChange_field_itens_pacote(row, status);
	}
}

function displayChange_field_idpacote_cliente(row, status) {
    var fieldId;
}

function displayChange_field_idcliente(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_idcliente__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_idcliente" + row).select2("destroy");
		}
		scJQSelect2Add(row, "idcliente");
	}
}

function displayChange_field_idpacote(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_idpacote__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_idpacote" + row).select2("destroy");
		}
		scJQSelect2Add(row, "idpacote");
	}
}

function displayChange_field_quantidade_total(row, status) {
    var fieldId;
}

function displayChange_field_valor_total(row, status) {
    var fieldId;
}

function displayChange_field_pago(row, status) {
    var fieldId;
}

function displayChange_field_qunatidade_realizada(row, status) {
    var fieldId;
}

function displayChange_field_itens_pacote(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_pacote_itens")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_pacote_itens")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_idcliente("all", "on");
	displayChange_field_idpacote("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_pacote_cliente_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(31);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_pacote_cliente_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "idcliente" == specificField) {
    scJQSelect2Add_idcliente(seqRow);
  }
  if (null == specificField || "idpacote" == specificField) {
    scJQSelect2Add_idpacote(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_idcliente(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_idcliente_obj" : "#id_sc_field_idcliente" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_idcliente_obj',
      dropdownCssClass: 'css_idcliente_obj',
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

function scJQSelect2Add_idpacote(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_idpacote_obj" : "#id_sc_field_idpacote" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_idpacote_obj',
      dropdownCssClass: 'css_idpacote_obj',
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
  scJQUploadAdd(iLine);
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_idcliente) { displayChange_field_idcliente(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_idpacote) { displayChange_field_idpacote(iLine, "on"); } }, 150);
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

