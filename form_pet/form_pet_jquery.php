
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
  scEventControl_data["idcliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idpet" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["nome" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["sexo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idpet_especie" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idpet_pelagem" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["idpet_raca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["data_nascimento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["pet_obs" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["foto_pet" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["foto_carteirinha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idcliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idcliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idpet" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idpet" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["nome" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["sexo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idpet_especie" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idpet_especie" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idpet_pelagem" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idpet_pelagem" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["idpet_raca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idpet_raca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["data_nascimento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["data_nascimento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["pet_obs" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["pet_obs" + iSeqRow]["change"]) {
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
  if ("sexo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idpet_especie" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idpet_pelagem" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("idpet_raca" + iSeq == fieldName) {
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
  $('#id_sc_field_idpet' + iSeqRow).bind('blur', function() { sc_form_pet_idpet_onblur(this, iSeqRow) })
                                   .bind('change', function() { sc_form_pet_idpet_onchange(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_pet_idpet_onfocus(this, iSeqRow) });
  $('#id_sc_field_idcliente' + iSeqRow).bind('blur', function() { sc_form_pet_idcliente_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_pet_idcliente_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_pet_idcliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_idpet_raca' + iSeqRow).bind('blur', function() { sc_form_pet_idpet_raca_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_pet_idpet_raca_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_pet_idpet_raca_onfocus(this, iSeqRow) });
  $('#id_sc_field_idpet_especie' + iSeqRow).bind('blur', function() { sc_form_pet_idpet_especie_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_pet_idpet_especie_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_pet_idpet_especie_onfocus(this, iSeqRow) });
  $('#id_sc_field_idpet_pelagem' + iSeqRow).bind('blur', function() { sc_form_pet_idpet_pelagem_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_pet_idpet_pelagem_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_pet_idpet_pelagem_onfocus(this, iSeqRow) });
  $('#id_sc_field_nome' + iSeqRow).bind('blur', function() { sc_form_pet_nome_onblur(this, iSeqRow) })
                                  .bind('change', function() { sc_form_pet_nome_onchange(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pet_nome_onfocus(this, iSeqRow) });
  $('#id_sc_field_data_nascimento' + iSeqRow).bind('blur', function() { sc_form_pet_data_nascimento_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_pet_data_nascimento_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_pet_data_nascimento_onfocus(this, iSeqRow) });
  $('#id_sc_field_foto_pet' + iSeqRow).bind('blur', function() { sc_form_pet_foto_pet_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_pet_foto_pet_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_pet_foto_pet_onfocus(this, iSeqRow) });
  $('#id_sc_field_foto_carteirinha' + iSeqRow).bind('blur', function() { sc_form_pet_foto_carteirinha_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_pet_foto_carteirinha_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_pet_foto_carteirinha_onfocus(this, iSeqRow) });
  $('#id_sc_field_sexo' + iSeqRow).bind('blur', function() { sc_form_pet_sexo_onblur(this, iSeqRow) })
                                  .bind('change', function() { sc_form_pet_sexo_onchange(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_pet_sexo_onfocus(this, iSeqRow) });
  $('#id_sc_field_pet_obs' + iSeqRow).bind('blur', function() { sc_form_pet_pet_obs_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_pet_pet_obs_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_pet_pet_obs_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_pet_idpet_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_idpet();
  scCssBlur(oThis);
}

function sc_form_pet_idpet_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_idpet_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_idcliente_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_idcliente();
  scCssBlur(oThis);
}

function sc_form_pet_idcliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_idcliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_idpet_raca_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_idpet_raca();
  scCssBlur(oThis);
}

function sc_form_pet_idpet_raca_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_idpet_raca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_idpet_especie_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_idpet_especie();
  scCssBlur(oThis);
}

function sc_form_pet_idpet_especie_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_idpet_especie_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_idpet_pelagem_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_idpet_pelagem();
  scCssBlur(oThis);
}

function sc_form_pet_idpet_pelagem_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_idpet_pelagem_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_nome_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_nome();
  scCssBlur(oThis);
}

function sc_form_pet_nome_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_nome_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_data_nascimento_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_data_nascimento();
  scCssBlur(oThis);
}

function sc_form_pet_data_nascimento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_data_nascimento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_foto_pet_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_pet_foto_pet_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_foto_pet_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_pet_foto_carteirinha_onblur(oThis, iSeqRow) {
  scCssBlur(oThis);
}

function sc_form_pet_foto_carteirinha_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_foto_carteirinha_onfocus(oThis, iSeqRow) {
  scCssFocus(oThis);
}

function sc_form_pet_sexo_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_sexo();
  scCssBlur(oThis);
}

function sc_form_pet_sexo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_sexo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_pet_pet_obs_onblur(oThis, iSeqRow) {
  do_ajax_form_pet_validate_pet_obs();
  scCssBlur(oThis);
}

function sc_form_pet_pet_obs_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_pet_pet_obs_onfocus(oThis, iSeqRow) {
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
	displayChange_field("idcliente", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("idpet", "", status);
	displayChange_field("nome", "", status);
	displayChange_field("sexo", "", status);
	displayChange_field("idpet_especie", "", status);
	displayChange_field("idpet_pelagem", "", status);
	displayChange_field("idpet_raca", "", status);
	displayChange_field("data_nascimento", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("pet_obs", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("foto_pet", "", status);
	displayChange_field("foto_carteirinha", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idcliente(row, status);
	displayChange_field_idpet(row, status);
	displayChange_field_nome(row, status);
	displayChange_field_sexo(row, status);
	displayChange_field_idpet_especie(row, status);
	displayChange_field_idpet_pelagem(row, status);
	displayChange_field_idpet_raca(row, status);
	displayChange_field_data_nascimento(row, status);
	displayChange_field_pet_obs(row, status);
	displayChange_field_foto_pet(row, status);
	displayChange_field_foto_carteirinha(row, status);
}

function displayChange_field(field, row, status) {
	if ("idcliente" == field) {
		displayChange_field_idcliente(row, status);
	}
	if ("idpet" == field) {
		displayChange_field_idpet(row, status);
	}
	if ("nome" == field) {
		displayChange_field_nome(row, status);
	}
	if ("sexo" == field) {
		displayChange_field_sexo(row, status);
	}
	if ("idpet_especie" == field) {
		displayChange_field_idpet_especie(row, status);
	}
	if ("idpet_pelagem" == field) {
		displayChange_field_idpet_pelagem(row, status);
	}
	if ("idpet_raca" == field) {
		displayChange_field_idpet_raca(row, status);
	}
	if ("data_nascimento" == field) {
		displayChange_field_data_nascimento(row, status);
	}
	if ("pet_obs" == field) {
		displayChange_field_pet_obs(row, status);
	}
	if ("foto_pet" == field) {
		displayChange_field_foto_pet(row, status);
	}
	if ("foto_carteirinha" == field) {
		displayChange_field_foto_carteirinha(row, status);
	}
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

function displayChange_field_idpet(row, status) {
    var fieldId;
}

function displayChange_field_nome(row, status) {
    var fieldId;
}

function displayChange_field_sexo(row, status) {
    var fieldId;
}

function displayChange_field_idpet_especie(row, status) {
    var fieldId;
}

function displayChange_field_idpet_pelagem(row, status) {
    var fieldId;
}

function displayChange_field_idpet_raca(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_idpet_raca__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_idpet_raca" + row).select2("destroy");
		}
		scJQSelect2Add(row, "idpet_raca");
	}
}

function displayChange_field_data_nascimento(row, status) {
    var fieldId;
}

function displayChange_field_pet_obs(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_obs_pet")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_obs_pet")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_foto_pet(row, status) {
    var fieldId;
}

function displayChange_field_foto_carteirinha(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_idcliente("all", "on");
	displayChange_field_idpet_raca("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_pet_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(16);
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
      do_ajax_form_pet_validate_data_nascimento(iSeqRow);
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
  $("#id_sc_field_foto_pet" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_pet_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'foto_pet'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_foto_pet" + iSeqRow);
        loaderContent = $("#id_img_loader_foto_pet" + iSeqRow + " .scProgressBarLoading");
        loaderContent.html("&nbsp;");
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_foto_pet" + iSeqRow);
        loader.show();
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
        $("#id_img_loader_foto_pet" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_foto_pet" + iSeqRow).hide();
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
      $("#id_sc_field_foto_pet" + iSeqRow).val("");
      $("#id_sc_field_foto_pet_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_foto_pet_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_foto_pet = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_foto_pet) ? "none" : "";
      $("#id_ajax_img_foto_pet" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_foto_pet" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_foto_pet) {
        document.F1.temp_out_foto_pet.value = var_ajax_img_thumb;
        document.F1.temp_out1_foto_pet.value = var_ajax_img_foto_pet;
      }
      else if (document.F1.temp_out_foto_pet) {
        document.F1.temp_out_foto_pet.value = var_ajax_img_foto_pet;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_foto_pet" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_foto_pet" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_foto_pet" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_foto_pet" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
    }
  });

  $("#id_sc_field_foto_carteirinha" + iSeqRow).fileupload({
    datatype: "json",
    url: "form_pet_ul_save.php",
    dropZone: "",
    formData: function() {
      return [
        {name: 'param_field', value: 'foto_carteirinha'},
        {name: 'param_seq', value: '<?php echo $this->Ini->sc_page; ?>'},
        {name: 'upload_file_row', value: iSeqRow}
      ];
    },
    progress: function(e, data) {
      var loader, progress;
      if (data.lengthComputable && window.FormData !== undefined) {
        loader = $("#id_img_loader_foto_carteirinha" + iSeqRow);
        loaderContent = $("#id_img_loader_foto_carteirinha" + iSeqRow + " .scProgressBarLoading");
        loaderContent.html("&nbsp;");
        progress = parseInt(data.loaded / data.total * 100, 10);
        loader.show().find("div").css("width", progress + "%");
      }
      else {
        loader = $("#id_ajax_loader_foto_carteirinha" + iSeqRow);
        loader.show();
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
        $("#id_img_loader_foto_carteirinha" + iSeqRow).hide();
      }
      else
      {
        $("#id_ajax_loader_foto_carteirinha" + iSeqRow).hide();
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
      $("#id_sc_field_foto_carteirinha" + iSeqRow).val("");
      $("#id_sc_field_foto_carteirinha_ul_name" + iSeqRow).val(fileData[0].sc_ul_name);
      $("#id_sc_field_foto_carteirinha_ul_type" + iSeqRow).val(fileData[0].type);
      var_ajax_img_foto_carteirinha = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_image_source;
      var_ajax_img_thumb = '<?php echo $this->Ini->path_imag_temp; ?>/' + fileData[0].sc_thumb_prot;
      thumbDisplay = ("" == var_ajax_img_foto_carteirinha) ? "none" : "";
      $("#id_ajax_img_foto_carteirinha" + iSeqRow).attr("src", var_ajax_img_thumb);
      $("#id_ajax_img_foto_carteirinha" + iSeqRow).css("display", thumbDisplay);
      if (document.F1.temp_out1_foto_carteirinha) {
        document.F1.temp_out_foto_carteirinha.value = var_ajax_img_thumb;
        document.F1.temp_out1_foto_carteirinha.value = var_ajax_img_foto_carteirinha;
      }
      else if (document.F1.temp_out_foto_carteirinha) {
        document.F1.temp_out_foto_carteirinha.value = var_ajax_img_foto_carteirinha;
      }
      checkDisplay = ("" == fileData[0].sc_random_prot.substr(12)) ? "none" : "";
      $("#chk_ajax_img_foto_carteirinha" + iSeqRow).css("display", checkDisplay);
      $("#txt_ajax_img_foto_carteirinha" + iSeqRow).html(fileData[0].name);
      $("#txt_ajax_img_foto_carteirinha" + iSeqRow).css("display", checkDisplay);
      $("#id_ajax_link_foto_carteirinha" + iSeqRow).html(fileData[0].sc_random_prot.substr(12));
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_pet')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "idpet_raca" == specificField) {
    scJQSelect2Add_idpet_raca(seqRow);
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

function scJQSelect2Add_idpet_raca(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_idpet_raca_obj" : "#id_sc_field_idpet_raca" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_idpet_raca_obj',
      dropdownCssClass: 'css_idpet_raca_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_idcliente) { displayChange_field_idcliente(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_idpet_raca) { displayChange_field_idpet_raca(iLine, "on"); } }, 150);
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

