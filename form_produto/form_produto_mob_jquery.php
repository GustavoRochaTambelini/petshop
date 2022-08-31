
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
  scEventControl_data["idproduto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["referencia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["codigo_de_barras" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["descricao" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["custo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["margem_lucro" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["estoque_minimo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idgrupo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idsubgrupo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idmarca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idunidade" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["foto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idproduto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idproduto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["referencia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["referencia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["codigo_de_barras" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["codigo_de_barras" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["descricao" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["descricao" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["custo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["custo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["margem_lucro" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["margem_lucro" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["estoque_minimo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["estoque_minimo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idgrupo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idgrupo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idsubgrupo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idsubgrupo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idmarca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idmarca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idunidade" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idunidade" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("tipo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idgrupo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idsubgrupo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idmarca" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idunidade" + iSeq == fieldName) {
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
  $('#id_sc_field_idproduto' + iSeqRow).bind('blur', function() { sc_form_produto_idproduto_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_produto_idproduto_onfocus(this, iSeqRow) });
  $('#id_sc_field_idgrupo' + iSeqRow).bind('blur', function() { sc_form_produto_idgrupo_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_produto_idgrupo_onfocus(this, iSeqRow) });
  $('#id_sc_field_idsubgrupo' + iSeqRow).bind('blur', function() { sc_form_produto_idsubgrupo_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_produto_idsubgrupo_onfocus(this, iSeqRow) });
  $('#id_sc_field_idmarca' + iSeqRow).bind('blur', function() { sc_form_produto_idmarca_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_produto_idmarca_onfocus(this, iSeqRow) });
  $('#id_sc_field_idunidade' + iSeqRow).bind('blur', function() { sc_form_produto_idunidade_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_produto_idunidade_onfocus(this, iSeqRow) });
  $('#id_sc_field_referencia' + iSeqRow).bind('blur', function() { sc_form_produto_referencia_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_produto_referencia_onfocus(this, iSeqRow) });
  $('#id_sc_field_codigo_de_barras' + iSeqRow).bind('blur', function() { sc_form_produto_codigo_de_barras_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_produto_codigo_de_barras_onfocus(this, iSeqRow) });
  $('#id_sc_field_descricao' + iSeqRow).bind('blur', function() { sc_form_produto_descricao_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_produto_descricao_onfocus(this, iSeqRow) });
  $('#id_sc_field_custo' + iSeqRow).bind('blur', function() { sc_form_produto_custo_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_produto_custo_onfocus(this, iSeqRow) });
  $('#id_sc_field_valor' + iSeqRow).bind('blur', function() { sc_form_produto_valor_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_produto_valor_onfocus(this, iSeqRow) });
  $('#id_sc_field_estoque_minimo' + iSeqRow).bind('blur', function() { sc_form_produto_estoque_minimo_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_produto_estoque_minimo_onfocus(this, iSeqRow) });
  $('#id_sc_field_foto' + iSeqRow).bind('blur', function() { sc_form_produto_foto_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_produto_foto_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo' + iSeqRow).bind('blur', function() { sc_form_produto_tipo_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_produto_tipo_onfocus(this, iSeqRow) });
  $('#id_sc_field_margem_lucro' + iSeqRow).bind('blur', function() { sc_form_produto_margem_lucro_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_produto_margem_lucro_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_produto_idproduto_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_idproduto();
  scCssBlur(oThis);
}

function sc_form_produto_idproduto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_idgrupo_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_idgrupo();
  scCssBlur(oThis);
}

function sc_form_produto_idgrupo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_idsubgrupo_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_idsubgrupo();
  scCssBlur(oThis);
}

function sc_form_produto_idsubgrupo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_idmarca_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_idmarca();
  scCssBlur(oThis);
}

function sc_form_produto_idmarca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_idunidade_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_idunidade();
  scCssBlur(oThis);
}

function sc_form_produto_idunidade_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_referencia_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_referencia();
  scCssBlur(oThis);
}

function sc_form_produto_referencia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_codigo_de_barras_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_codigo_de_barras();
  scCssBlur(oThis);
}

function sc_form_produto_codigo_de_barras_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_descricao_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_descricao();
  scCssBlur(oThis);
}

function sc_form_produto_descricao_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_custo_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_custo();
  scCssBlur(oThis);
  do_ajax_form_produto_mob_event_custo_onblur();
}

function sc_form_produto_custo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_valor_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_valor();
  scCssBlur(oThis);
  do_ajax_form_produto_mob_event_valor_onblur();
}

function sc_form_produto_valor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_estoque_minimo_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_estoque_minimo();
  scCssBlur(oThis);
}

function sc_form_produto_estoque_minimo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_foto_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_produto_foto_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_produto_tipo_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_tipo();
  scCssBlur(oThis);
}

function sc_form_produto_tipo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_produto_margem_lucro_onblur(oThis, iSeqRow) {
  do_ajax_form_produto_mob_validate_margem_lucro();
  scCssBlur(oThis);
}

function sc_form_produto_margem_lucro_onfocus(oThis, iSeqRow) {
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
	displayChange_field("idproduto", "", status);
	displayChange_field("referencia", "", status);
	displayChange_field("codigo_de_barras", "", status);
	displayChange_field("descricao", "", status);
	displayChange_field("custo", "", status);
	displayChange_field("valor", "", status);
	displayChange_field("margem_lucro", "", status);
	displayChange_field("estoque_minimo", "", status);
	displayChange_field("tipo", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("idgrupo", "", status);
	displayChange_field("idsubgrupo", "", status);
	displayChange_field("idmarca", "", status);
	displayChange_field("idunidade", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("foto", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idproduto(row, status);
	displayChange_field_referencia(row, status);
	displayChange_field_codigo_de_barras(row, status);
	displayChange_field_descricao(row, status);
	displayChange_field_custo(row, status);
	displayChange_field_valor(row, status);
	displayChange_field_margem_lucro(row, status);
	displayChange_field_estoque_minimo(row, status);
	displayChange_field_tipo(row, status);
	displayChange_field_idgrupo(row, status);
	displayChange_field_idsubgrupo(row, status);
	displayChange_field_idmarca(row, status);
	displayChange_field_idunidade(row, status);
	displayChange_field_foto(row, status);
}

function displayChange_field(field, row, status) {
	if ("idproduto" == field) {
		displayChange_field_idproduto(row, status);
	}
	if ("referencia" == field) {
		displayChange_field_referencia(row, status);
	}
	if ("codigo_de_barras" == field) {
		displayChange_field_codigo_de_barras(row, status);
	}
	if ("descricao" == field) {
		displayChange_field_descricao(row, status);
	}
	if ("custo" == field) {
		displayChange_field_custo(row, status);
	}
	if ("valor" == field) {
		displayChange_field_valor(row, status);
	}
	if ("margem_lucro" == field) {
		displayChange_field_margem_lucro(row, status);
	}
	if ("estoque_minimo" == field) {
		displayChange_field_estoque_minimo(row, status);
	}
	if ("tipo" == field) {
		displayChange_field_tipo(row, status);
	}
	if ("idgrupo" == field) {
		displayChange_field_idgrupo(row, status);
	}
	if ("idsubgrupo" == field) {
		displayChange_field_idsubgrupo(row, status);
	}
	if ("idmarca" == field) {
		displayChange_field_idmarca(row, status);
	}
	if ("idunidade" == field) {
		displayChange_field_idunidade(row, status);
	}
	if ("foto" == field) {
		displayChange_field_foto(row, status);
	}
}

function displayChange_field_idproduto(row, status) {
    var fieldId;
}

function displayChange_field_referencia(row, status) {
    var fieldId;
}

function displayChange_field_codigo_de_barras(row, status) {
    var fieldId;
}

function displayChange_field_descricao(row, status) {
    var fieldId;
}

function displayChange_field_custo(row, status) {
    var fieldId;
}

function displayChange_field_valor(row, status) {
    var fieldId;
}

function displayChange_field_margem_lucro(row, status) {
    var fieldId;
}

function displayChange_field_estoque_minimo(row, status) {
    var fieldId;
}

function displayChange_field_tipo(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_tipo__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_tipo" + row).select2("destroy");
		}
		scJQSelect2Add(row, "tipo");
	}
}

function displayChange_field_idgrupo(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_idgrupo__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_idgrupo" + row).select2("destroy");
		}
		scJQSelect2Add(row, "idgrupo");
	}
}

function displayChange_field_idsubgrupo(row, status) {
    var fieldId;
}

function displayChange_field_idmarca(row, status) {
    var fieldId;
}

function displayChange_field_idunidade(row, status) {
    var fieldId;
}

function displayChange_field_foto(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_tipo("all", "on");
	displayChange_field_idgrupo("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_produto_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(24);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
  $("#id_sc_field_foto" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_produto_mob_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'foto'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_foto" + iSeqRow);
        loaderContent = $("#id_img_loader_foto" + iSeqRow + " .scProgressBarLoading");
        loaderContent.html("&nbsp;");
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_foto" + iSeqRow);
        loader.show();
      }
    },
    change: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_foto(data);
      if ('ok' != checkUploadSize) {
        e.preventDefault();
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    drop: function(e, data) {
      var checkUploadSize = scCheckUploadExtensionSize_foto(data);
      if ('ok' != checkUploadSize) {
        scJs_alert(scFormatExtensionSizeErrorMsg(checkUploadSize), function() {}, {'type': 'error'});
      }
    },
    done: function(e, data) {
      var fileData, respData, respPos, respMsg, thumbDisplay, checkDisplay, var_ajax_img_thumb, oTemp;
      fileData = null;
      respMsg = "";
      if (data && data.result && data.result[0] && data.result[0].body) {
        respData = data.result[0].body.innerText;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = $.parseJSON(respData);
        }
        else {
          respMsg = respData;
        }
      }
      else {
        respData = data.result;
        respPos = respData.indexOf("[{");
        if (-1 !== respPos) {
          respMsg = respData.substr(0, respPos);
          respData = respData.substr(respPos);
          fileData = eval(respData);
        }
        else {
          respMsg = respData;
        }
      }
      if (window.FormData !== undefined)
      {
        $("#id_img_loader_foto" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_foto" + iSeqRow).hide();
      }
      if (null == fileData) {
        if ("" != respMsg) {
          oTemp = {"htmOutput" : "<?php echo $this->Ini->Nm_lang['lang_errm_upld_admn']; ?>"};
          scAjaxShowDebug(oTemp);
        }
        return;
      }
      if (fileData[0].error && "" != fileData[0].error) {
        var uploadErrorMessage = "";
        oResp = {};
        if ("acceptFileTypes" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_invl']) ?>";
        }
        else if ("maxFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("minFileSize" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_size']) ?>";
        }
        else if ("emptyFile" == fileData[0].error) {
          uploadErrorMessage = "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_errm_file_empty']) ?>";
        }
        scAjaxShowErrorDisplay("table", uploadErrorMessage);
        return;
      }
      $("#id_sc_field_foto" + iSeqRow).val("");
      $("#id_sc_field_foto_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_foto_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_foto = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_foto) ? "none" : "";
      $("#id_ajax_img_foto" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_foto" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_foto) {
        document.F1.temp_out_foto.value = var_ajax_img_thumb;
        document.F1.temp_out1_foto.value = var_ajax_img_foto;
      }
      else if (document.F1.temp_out_foto) {
        document.F1.temp_out_foto.value = var_ajax_img_foto;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_foto" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_foto" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_foto" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_foto" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_produto_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "tipo" == specificField) {
    scJQSelect2Add_tipo(seqRow);
  }
  if (null == specificField || "idgrupo" == specificField) {
    scJQSelect2Add_idgrupo(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_tipo(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_tipo_obj" : "#id_sc_field_tipo" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_tipo_obj',
      dropdownCssClass: 'css_tipo_obj',
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

function scJQSelect2Add_idgrupo(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_idgrupo_obj" : "#id_sc_field_idgrupo" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_idgrupo_obj',
      dropdownCssClass: 'css_idgrupo_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_tipo) { displayChange_field_tipo(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_idgrupo) { displayChange_field_idgrupo(iLine, "on"); } }, 150);
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

function scCheckUploadExtensionSize_foto(thisField)
{
    if ("files" in thisField && thisField.files.length > 0) {
        thisFileExtension = scGetFileExtension(thisField.files[0].name);


        if (!["jpg", "gif", "png", "ico", "jpeg"].includes(thisFileExtension)) {
            return 'err_extension||' + thisFileExtension.toUpperCase();
        }
    }

    return 'ok';
}

