
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
  scEventControl_data["idproduto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descricao_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor_unitario_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["quantidade_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor_total_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["iditens_orcamento_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idproduto_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idproduto_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descricao_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descricao_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor_unitario_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor_unitario_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["quantidade_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["quantidade_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor_total_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor_total_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["iditens_orcamento_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["iditens_orcamento_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("idproduto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idorcamento_" + iSeq == fieldName) {
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
  $('#id_sc_field_iditens_orcamento_' + iSeqRow).bind('blur', function() { sc_form_itens_orcamento_iditens_orcamento__onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_itens_orcamento_iditens_orcamento__onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_itens_orcamento_iditens_orcamento__onfocus(this, iSeqRow) });
  $('#id_sc_field_idorcamento_' + iSeqRow).bind('change', function() { sc_form_itens_orcamento_idorcamento__onchange(this, iSeqRow) });
  $('#id_sc_field_idproduto_' + iSeqRow).bind('blur', function() { sc_form_itens_orcamento_idproduto__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_itens_orcamento_idproduto__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_itens_orcamento_idproduto__onfocus(this, iSeqRow) });
  $('#id_sc_field_descricao_' + iSeqRow).bind('blur', function() { sc_form_itens_orcamento_descricao__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_itens_orcamento_descricao__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_itens_orcamento_descricao__onfocus(this, iSeqRow) });
  $('#id_sc_field_valor_unitario_' + iSeqRow).bind('blur', function() { sc_form_itens_orcamento_valor_unitario__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_itens_orcamento_valor_unitario__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_itens_orcamento_valor_unitario__onfocus(this, iSeqRow) });
  $('#id_sc_field_quantidade_' + iSeqRow).bind('blur', function() { sc_form_itens_orcamento_quantidade__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_itens_orcamento_quantidade__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_itens_orcamento_quantidade__onfocus(this, iSeqRow) });
  $('#id_sc_field_unidade_' + iSeqRow).bind('change', function() { sc_form_itens_orcamento_unidade__onchange(this, iSeqRow) });
  $('#id_sc_field_valor_total_' + iSeqRow).bind('blur', function() { sc_form_itens_orcamento_valor_total__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_itens_orcamento_valor_total__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_itens_orcamento_valor_total__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_itens_orcamento_iditens_orcamento__onblur(oThis, iSeqRow) {
  do_ajax_form_itens_orcamento_validate_iditens_orcamento_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_itens_orcamento_iditens_orcamento__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_itens_orcamento_iditens_orcamento__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_itens_orcamento_idorcamento__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_itens_orcamento_idproduto__onblur(oThis, iSeqRow) {
  do_ajax_form_itens_orcamento_validate_idproduto_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_itens_orcamento_idproduto__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_itens_orcamento_idproduto__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_itens_orcamento_descricao__onblur(oThis, iSeqRow) {
  do_ajax_form_itens_orcamento_validate_descricao_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_itens_orcamento_descricao__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_itens_orcamento_descricao__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_itens_orcamento_valor_unitario__onblur(oThis, iSeqRow) {
  do_ajax_form_itens_orcamento_validate_valor_unitario_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
  do_ajax_form_itens_orcamento_event_valor_unitario__onblur(iSeqRow);
}

function sc_form_itens_orcamento_valor_unitario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_itens_orcamento_valor_unitario__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_itens_orcamento_quantidade__onblur(oThis, iSeqRow) {
  do_ajax_form_itens_orcamento_validate_quantidade_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
  do_ajax_form_itens_orcamento_event_quantidade__onblur(iSeqRow);
}

function sc_form_itens_orcamento_quantidade__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_itens_orcamento_quantidade__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_itens_orcamento_unidade__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_itens_orcamento_valor_total__onblur(oThis, iSeqRow) {
  do_ajax_form_itens_orcamento_validate_valor_total_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_itens_orcamento_valor_total__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_itens_orcamento_valor_total__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("idproduto_", "", status);
	displayChange_field("descricao_", "", status);
	displayChange_field("valor_unitario_", "", status);
	displayChange_field("quantidade_", "", status);
	displayChange_field("valor_total_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idproduto_(row, status);
	displayChange_field_descricao_(row, status);
	displayChange_field_valor_unitario_(row, status);
	displayChange_field_quantidade_(row, status);
	displayChange_field_valor_total_(row, status);
	displayChange_field_iditens_orcamento_(row, status);
}

function displayChange_field(field, row, status) {
	if ("idproduto_" == field) {
		displayChange_field_idproduto_(row, status);
	}
	if ("descricao_" == field) {
		displayChange_field_descricao_(row, status);
	}
	if ("valor_unitario_" == field) {
		displayChange_field_valor_unitario_(row, status);
	}
	if ("quantidade_" == field) {
		displayChange_field_quantidade_(row, status);
	}
	if ("valor_total_" == field) {
		displayChange_field_valor_total_(row, status);
	}
	if ("iditens_orcamento_" == field) {
		displayChange_field_iditens_orcamento_(row, status);
	}
}

function displayChange_field_idproduto_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_idproduto___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_idproduto_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "idproduto_");
	}
}

function displayChange_field_descricao_(row, status) {
    var fieldId;
}

function displayChange_field_valor_unitario_(row, status) {
    var fieldId;
}

function displayChange_field_quantidade_(row, status) {
    var fieldId;
}

function displayChange_field_valor_total_(row, status) {
    var fieldId;
}

function displayChange_field_iditens_orcamento_(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_idproduto_("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_itens_orcamento_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(28);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_itens_orcamento')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "idproduto_" == specificField) {
    scJQSelect2Add_idproduto_(seqRow);
  }
  if (null == specificField || "idorcamento_" == specificField) {
    scJQSelect2Add_idorcamento_(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_idproduto_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_idproduto__obj" : "#id_sc_field_idproduto_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_idproduto__obj',
      dropdownCssClass: 'css_idproduto__obj',
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

function scJQSelect2Add_idorcamento_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_idorcamento__obj" : "#id_sc_field_idorcamento_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_idorcamento__obj',
      dropdownCssClass: 'css_idorcamento__obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_idproduto_) { displayChange_field_idproduto_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_idorcamento_) { displayChange_field_idorcamento_(iLine, "on"); } }, 150);
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

