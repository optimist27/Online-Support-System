/**
 * ###############################################
 * BEGIN STAFF CP > REPORTS FUNCTIONS
 * ###############################################
 */

function PrintReport(_reportID) {
	screen_width = screen.width;
	screen_height = screen.height;
	widthm = (screen_width-1000)/2;
	heightm = (screen_height-800)/2;
	window.open(_baseName + '/Reports/Report/PrintReport/' + _reportID, "printwindow", "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=1000,height=800,left=" + widthm + ",top=" + heightm);
}

/**
 * ###############################################
 * END STAFF CP > REPORTS FUNCTIONS
 * ###############################################
 */

/**
 * ###############################################
 * BEGIN STAFF CP > TROUBLESHOOTER FUNCTIONS
 * ###############################################
 */

function HandleTroubleshooterCategoryType() {
//	const TYPE_GLOBAL = 1;
//	const TYPE_PUBLIC = 2;
//	const TYPE_PRIVATE = 3;
//	const TYPE_INHERIT = 4;

	if ($("input[@name='categorytype']:checked").val() == '1') {
		$('#View_Categorytabs').tabs('enable', 2);
		$('#View_Categorytabs').tabs('enable', 3);
	} else if ($("input[@name='categorytype']:checked").val() == '2') {
		$('#View_Categorytabs').tabs('enable', 2);
		$('#View_Categorytabs').tabs('disable', 3);
	} else if ($("input[@name='categorytype']:checked").val() == '3') {
		$('#View_Categorytabs').tabs('disable', 2);
		$('#View_Categorytabs').tabs('enable', 3);
	}else if ($("input[@name='categorytype']:checked").val() == '4') {
		$('#View_Categorytabs').tabs('disable', 2);
		$('#View_Categorytabs').tabs('disable', 3);
	}
}

function AddTRFile() {
	$('#trattachmentcontainer').append('<div class="attachmentitem"><div class="attachmentitemdelete" onclick="javascript: $(this).parent().remove();">&nbsp;</div><input name="trattachments[]" type="file" size="20" class="swifttextlarge swifttextfile" /></div>');
};

/**
 * ###############################################
 * END STAFF CP > TROUBLESHOOTER FUNCTIONS
 * ###############################################
 */

/**
 * ###############################################
 * BEGIN STAFF CP > KNOWLEDGEBASE FUNCTIONS
 * ###############################################
 */

function ArticleHelpful(_kbArticleID) {
	$('#kbratingcontainer').load(_baseName + '/Knowledgebase/ViewKnowledgebase/Rate/' + _kbArticleID + '/1');
}

function ArticleNotHelpful(_kbArticleID) {
	$('#kbratingcontainer').load(_baseName + '/Knowledgebase/ViewKnowledgebase/Rate/' + _kbArticleID + '/0');
}

function InsertKnowledgebaseCategoryWindow(_selectedKnowledgebaseCategoryID) {
	UICreateWindow(_baseName + '/Knowledgebase/Category/Insert/' + _selectedKnowledgebaseCategoryID, 'insertkbcategory', swiftLanguage['insert'], swiftLanguage['loading'], 680, 530, true, this);
}

function EditKnowledgebaseCategoryWindow(_selectedKnowledgebaseCategoryID) {
	UICreateWindow(_baseName + '/Knowledgebase/Category/Edit/' + _selectedKnowledgebaseCategoryID, 'editkbcategory', swiftLanguage['edit'], swiftLanguage['loading'], 680, 530, true, this);
}

function HandleKBCategoryType() {
//	const TYPE_GLOBAL = 1;
//	const TYPE_PUBLIC = 2;
//	const TYPE_PRIVATE = 3;
//	const TYPE_INHERIT = 4;

	if ($("input[@name='categorytype']:checked").val() == '1') {
		$('#View_Categorytabs').tabs('enable', 2);
		$('#View_Categorytabs').tabs('enable', 3);
	} else if ($("input[@name='categorytype']:checked").val() == '2') {
		$('#View_Categorytabs').tabs('enable', 2);
		$('#View_Categorytabs').tabs('disable', 3);
	} else if ($("input[@name='categorytype']:checked").val() == '3') {
		$('#View_Categorytabs').tabs('disable', 2);
		$('#View_Categorytabs').tabs('enable', 3);
	} else if ($("input[@name='categorytype']:checked").val() == '4') {
		$('#View_Categorytabs').tabs('disable', 2);
		$('#View_Categorytabs').tabs('disable', 3);
	}
}

function AddKBFile() {
	$('#kbattachmentcontainer').append('<div class="attachmentitem"><div class="attachmentitemdelete" onclick="javascript: $(this).parent().remove();">&nbsp;</div><input name="kbattachments[]" type="file" size="20" class="swifttextlarge swifttextfile" /></div>');
};

/**
 * ###############################################
 * END STAFF CP > KNOWLEDGEBASE FUNCTIONS
 * ###############################################
 */


/**
 * ###############################################
 * BEGIN STAFF CP > BENCHMARKS FUNCTIONS
 * ###############################################
 */

function TriggerBenchmark(_benchmarkURL, _benchmarkID, _typeID, _benchmarkValue, _isReadOnly) {
	$.post(_baseName + _benchmarkURL, {
		'benchmarkid': _benchmarkID,
		'benchmarkvalue': _benchmarkValue
	}, function(data){
	});

	if (_isReadOnly == true) {
		$('input[name=benchmark_' + _benchmarkID + '_' + _typeID + ']').rating('readOnly', true);
	}
}

/**
 * ###############################################
 * END STAFF CP > BENCHMARKS FUNCTIONS
 * ###############################################
 */

/**
 * ###############################################
 * BEGIN STAFF CP > TICKETS FUNCTIONS
 * ###############################################
 */


function TicketTipBubble(_element, _ticketID) {
	if ($(_element).parent().attr('qtip') == '1') {
		return;
	}

	$(_element).parent().attr('qtip', '1');

	$(_element).parent().qtip({
		content: {url: _baseName + '/Tickets/Manage/Preview/' + _ticketID},
		position: {
			corner: {
				target: 'bottomLeft',
				tooltip: 'topLeft'
			}
		},
		style: {
			width: 500,
			name: 'cream',
			tip: 'topMiddle'
		}
	});
}

function ShowEscalationPathHistory() {
	$('.escalationpathhistory').slideToggle();
}

function ToggleRecurrence(_recurrenceType) {
	$('#recurrencecontainer_none').hide();
	$('#recurrencecontainer_daily').hide();
	$('#recurrencecontainer_weekly').hide();
	$('#recurrencecontainer_monthly').hide();
	$('#recurrencecontainer_yearly').hide();

	if (_recurrenceType != 'none') {
		$('#recurrencerangecontainer').show();
	} else {
		$('#recurrencerangecontainer').hide();
	}
	$('#recurrencecontainer_' + _recurrenceType).show();
}

function ReloadTicketFilterMenu() {
	$('#ticketfiltermenu').remove();
	$.get(_baseName + '/Tickets/Filter/GetMenu', function(_responseText) {
		$('body').append(_responseText);
	});
}


function QuoteTicketPost(_ticketID, _ticketPostID) {
   	$.ajax({
		type: 'POST',
		url: _baseName + '/Tickets/Ticket/GetQuote/' + _ticketID + '/' + _ticketPostID,
		data: '',
		success: function(_data){
			if ($('#View_Tickettabs').tabs('option', 'selected') != 2) {
				$('#View_Tickettabs').tabs('option', 'selected', 1);
				$('#replycontents').val($('#replycontents').val() + _data);
			} else {
				$('#forwardcontents').val($('#forwardcontents').val() + _data);
			}
		}
	});

}

function HandleFilterTypeToggle() {
	if ($("input[@name='filtertype']:checked").val() == '1') {
		$('#selectrestrictstaffgroupid').attr('disabled', false);
	} else {
		$('#selectrestrictstaffgroupid').attr('disabled', true);
	}
}

function LinkTicketSearchForms() {
	bindFormSubmit('searchmenuform');
	bindFormSubmit('searchtimenuform');
	bindFormSubmit('searchcrmenuform');
}

var _activeTicketTabPrefix = '';
function QuickInsertLoad(_tabPrefix) {
	_activeTicketTabPrefix = _tabPrefix;

    $('#qi' + _tabPrefix + '_macro, #qi' + _tabPrefix + '_knowledgebase, #qi' + _tabPrefix + '_downloads').focus(function () {
		if ($(this).hasClass('swifttextautocompleteinput')) {
			$(this).val('');
			$(this).removeClass('swifttextautocompleteinput').addClass('swifttextautocompleteinputactive');
		}
	});

	$('#qi' + _tabPrefix + '_macro').oldautocomplete(_baseName + '/Tickets/Macro/GetLookup/' + doRand(), {
		width: 300,
		matchContains: true,
		delay: 40,
		matchCase: true
	}).result(function(event, data, formatted) {
		$('#qi' + _tabPrefix + '_macro').val('');
		TriggerMacro(data[1]);
	});

	if (!$('#qi' + _tabPrefix + '_macromenucontainer').length) {
		$('body').append('<div id="qi' + _tabPrefix + '_macromenucontainer" style="display: none;" />');
		$('#qi' + _tabPrefix + '_macromenucontainer').load(_baseName + '/Tickets/Macro/GetMenu/' + doRand(), function() {
			$('#qi' + _tabPrefix + '_macromenu').fgmenu({content: $(this).html(), backLink: false, callerOnState: '', loadingState: '', maxHeight: 'auto'});
		});
	} else {
		$('#qi' + _tabPrefix + '_macromenu').fgmenu({content: $('#qi' + _tabPrefix + '_macromenucontainer').html(), backLink: false, callerOnState: '', loadingState: '', maxHeight: 300});
	}

	if ($('#qi' + _tabPrefix + '_knowledgebase').length) {
		$('#qi' + _tabPrefix + '_knowledgebase').oldautocomplete(_baseName + '/Knowledgebase/ArticleManager/GetLookup/' + doRand(), {
			width: 300,
			matchContains: true,
			delay: 40,
			matchCase: true
		}).result(function(event, data, formatted) {
			$('#qi' + _tabPrefix + '_knowledgebase').val('');
			TriggerArticle(data[1]);
		});

		if (!$('#qi' + _tabPrefix + '_knowledgebasemenucontainer').length) {
			$('body').append('<div id="qi' + _tabPrefix + '_knowledgebasemenucontainer" style="display: none;" />');
			$('#qi' + _tabPrefix + '_knowledgebasemenucontainer').load(_baseName + '/Knowledgebase/ArticleManager/GetMenu/' + doRand(), function() {
				$('#qi' + _tabPrefix + '_knowledgebasemenu').fgmenu({content: $(this).html(), backLink: false, callerOnState: '', loadingState: '', maxHeight: 300});
			});
		} else {
			$('#qi' + _tabPrefix + '_knowledgebasemenu').fgmenu({content: $('#qi' + _tabPrefix + '_knowledgebasemenucontainer').html(), backLink: false, callerOnState: '', loadingState: '', maxHeight: 300});
		}
	}
}


function TriggerArticle(_knowledgebaseArticleID) {
	$.getJSON(_baseName + '/Knowledgebase/ArticleManager/Get/' + _knowledgebaseArticleID + '/' + _activeTicketTabPrefix, '', function (_data) {
		var _activeReplyValue = $('#' + _activeTicketTabPrefix + 'contents').val() + _data.contentstext;
		$('#' + _activeTicketTabPrefix + 'contents').val(_activeReplyValue);

		$('#' + _activeTicketTabPrefix + 'attachmentlistcontainer').show().append(_data.attachments);
	});
}

function TriggerMacro(_macroID) {
	$.getJSON(_baseName + '/Tickets/Macro/Get/' + _macroID, '', function (_data) {
		var _activeReplyValue = $('#' + _activeTicketTabPrefix + 'contents').val() + _data.contents;
		$('#' + _activeTicketTabPrefix + 'contents').val(_activeReplyValue);

		if (_data.departmentid != '-1') {
			$('#' + _activeTicketTabPrefix + '_departmentid').val(_data.departmentid);
		}

		if (_data.ownerstaffid != '-1') {
			$('#select' + _activeTicketTabPrefix + 'ownerstaffid').val(_data.ownerstaffid);
		}

		if (_data.ticketstatusid != '-1') {
			$('#select' + _activeTicketTabPrefix + 'ticketstatusid').val(_data.ticketstatusid);
			ResetStatusParentColor($('#select' + _activeTicketTabPrefix + 'ticketstatusid').get(), _activeTicketTabPrefix + 'ticketproperties');
		}

		if (_data.tickettypeid != '-1') {
			$('#select' + _activeTicketTabPrefix + 'tickettypeid').val(_data.tickettypeid);
		}

		if (_data.priorityid != '-1') {
			$('#' + _activeTicketTabPrefix + '_ticketpriorityid').val(_data.priorityid);
			ResetPriorityParentColor($('#' + _activeTicketTabPrefix + '_ticketpriorityid').get(), _activeTicketTabPrefix + 'priorityproperties');
		}

		if (_data.tagcontents.length) {
			for (key in _data.tagcontents) {
				_tagName = _data.tagcontents[key];

				UITagControlAddTag($('#taginput_' + _activeTicketTabPrefix + 'tags').get(), _tagName);
			}
		}
	});
}

function InsertMacroCategoryWindow(_selectedMacroCategoryID) {
	UICreateWindow(_baseName + '/Tickets/MacroCategory/Insert/' + _selectedMacroCategoryID, 'insertmacrocategory', swiftLanguage['insert'], swiftLanguage['loading'], 680, 430, true, this);
}

function EditMacroCategoryWindow(_selectedMacroCategoryID) {
	UICreateWindow(_baseName + '/Tickets/MacroCategory/Edit/' + _selectedMacroCategoryID, 'editmacrocategory', swiftLanguage['edit'], swiftLanguage['loading'], 680, 430, true, this);
}

function InsertMacroReplyWindow(_selectedMacroCategoryID) {
	UICreateWindow(_baseName + '/Tickets/MacroReply/Insert/' + _selectedMacroCategoryID, 'insertmacroreply', swiftLanguage['insert'], swiftLanguage['loading'], 680, 530, true, this);
}

function LoadFollowUp(_containerPrefix, _linkSuffix) {
	$('#' + _containerPrefix + 'container').html(swiftLanguage['loading']);
	$('#' + _containerPrefix + 'container').load(_baseName + '/Tickets/Ticket/FollowUp/' + _linkSuffix, function(responseText) {
		reParseDoc();
	});

}

function FollowUpTrigger(_selectObject, _tabPrefix) {
	if ($(_selectObject).val() == 'custom') {
		$('#' + _tabPrefix + 'followupblock').css('display', 'none');
		$('#' + _tabPrefix + 'followupcustomvaluecontainer').show();

	} else {
		$('#' + _tabPrefix + 'followupblock').css('display', 'inline');
		$('#' + _tabPrefix + 'followupcustomvaluecontainer').hide();

	}
}


function ToggleTicketFollowUpCheckbox(_checkboxObject) {
	var _checkboxID = $(_checkboxObject).attr('id');
	_checkboxValue = $("#" + _checkboxID + ":checked").val();

	if (_checkboxValue == '1') {
		$('#' + _checkboxID + '_container').show();
	} else {
		$('#' + _checkboxID + '_container').hide();
	}
}
function HandleBillingBillableFocus(_billableObject, _billType) {
	if ($(_billableObject).val() == '') {
		$(_billableObject).val($('#' + _billType + 'billingtimeworked').val());
	}
}

function SyncTicketBillDate(_billType) {
    $('#' + _billType + 'billworkdate').val($('#' + _billType + 'billdate').val());
	$('#' + _billType + 'billworkdate_hour').val($('#' + _billType + 'billdate_hour').val());
	$('#' + _billType + 'billworkdate_minute').val($('#' + _billType + 'billdate_minute').val());
	$('#' + _billType + 'billworkdate_meridian').val($('#' + _billType + 'billdate_meridian').val());
}

function ResetStatusParentColor(selectObject, _parentID) {
    var _selectedTicketStatusID = $(selectObject).val();

	if (typeof _ticketData != 'undefined' && typeof _ticketData['status'][_selectedTicketStatusID] != 'undefined') {
		$('#' + _parentID).css('background-color', _ticketData['status'][_selectedTicketStatusID]['statusbgcolor']);
	}
}

function ResetPriorityParentColor(selectObject, _parentID) {
    var _selectedTicketPriorityID = $(selectObject).val();

	if (typeof _ticketData != 'undefined' && typeof _ticketData['priority'][_selectedTicketPriorityID] != 'undefined') {
		$('#' + _parentID).css('background-color', _ticketData['priority'][_selectedTicketPriorityID]['bgcolorcode']);
	}
}

_isTicketReplyLockTimerActive = false;
function StartTicketReplyLockTimer(_ticketID) {
    if (_isTicketReplyLockTimerActive == true) {
		return true;
	}

	setTimeout('CheckTicketReplyLock(' + _ticketID + ')', 1000);
};

function CheckTicketReplyLock(_ticketID) {
	// Is the lock div active?
	if ($('#ticketreplylockcontainer' + _ticketID).length) {
		_isTicketReplyLockTimerActive = true;
		$.post(_baseName + '/Tickets/Ajax/ReplyLock/' + _ticketID, {contents: $('#replycontents').val()}, function(data, textStatus) {$('#ticketreplylockcontainer' + _ticketID).html(data);});

		setTimeout('CheckTicketReplyLock(' + _ticketID + ')', 10000);
	}

	_isTicketReplyLockTimerActive = false;
}

function AddTicketFile(_namePrefix) {
	$('#' + _namePrefix + 'attachmentcontainer').append('<div class="ticketattachmentitem"><div class="ticketattachmentitemdelete" onclick="javascript: $(this).parent().remove();">&nbsp;</div><input name="' + _namePrefix + 'attachments[]" type="file" size="20" class="swifttextlarge swifttextfile" /></div>');
};

function HandleTicketNoteRestriction() {
	_noteValue = $("input:radio[name='notetype']:checked").val();
	if (_noteValue != 'ticket') {
		$('#selectforstaffid').attr('disabled', 'disabled');
	} else {
		$('#selectforstaffid').removeAttr('disabled');
	}
}
function TicketDeleteNote(_question, _noteURL) {
	var x = confirm(_question);
	if (x) {
		$('#ticketnotescontainerdiv').load(_baseName + '/Tickets/Ticket/DeleteNote/' + _noteURL, function(_responseText) {
			reParseDoc();

			if (typeof _responseText == 'string' && _responseText == '')
			{
				$('#ticketnotescontainerdivholder').hide();
			}
		});
	}

	return true
}
function TicketDeleteBilling(_question, _billingURL) {
	var x = confirm(_question);
	if (x) {
		$('#ticketbillingcontainerdiv').load(_baseName + '/Tickets/Ticket/DeleteBilling/' + _billingURL, function(_responseText) {
			reParseDoc();

			if (typeof _responseText == 'string' && _responseText == '')
			{
				$('#ticketbillingcontainerdiv').hide();
			}
		});
	}

	return true
}

function HandleTicketPropertiesClick(event) {
	var target = $(event.target);

	if (target.is('select')) {
		return false;
	}

	if ($('#general_departmentid').is(':visible') == true) {
		$('.ticketgeneralpropertiesselect').hide();
		$('.ticketgeneralpropertiescontent').show();
	} else {
		$('.ticketgeneralpropertiescontent').hide();
		$('.ticketgeneralpropertiesselect').show();
	}

	return true;
}

function UpdateMassActionSelectBox(_selectName, _value) {
	$('#select' + _selectName).val(_value);
}

function ToggleFlag(_ticketID, _flagColor, _flagImage, _blankFlagImage) {
	var _flagImageSrc = $('#ticketflagimg_' + _ticketID).attr('src');

	if (!_blankFlagImage) {
		_blankFlagImage = 'icon_flagblank.gif';
	}

	var _flagAjaxURL, _flagAjaxImage, _flagAjaxColor;
	if (_flagImageSrc.substr(-(_blankFlagImage.length)) == _blankFlagImage) {
		_flagAjaxURL = _baseName + '/Tickets/Ajax/Flag/' + _ticketID + '/' + doRand();

		_flagAjaxImage = _flagImage;
		_flagAjaxColor = _flagColor;
	} else {
		_flagAjaxURL = _baseName + '/Tickets/Ajax/ClearFlag/' + _ticketID + '/' + doRand()
		_flagAjaxImage = _blankFlagImage;
		_flagAjaxColor = '';
	}

	$('#ticketflagimg_' + _ticketID).attr('src', themepath + 'images/loadingcircle3.gif');

   	$.ajax({
		type: 'POST',
		url: _flagAjaxURL,
		data: '',
		success: function(_xmlData){
			$('#ticketflagimg_' + _ticketID).attr('onclick', '').attr('src', themepath + 'images/' + _flagAjaxImage).parent('a').parent('td,div').css('background-color', _flagAjaxColor);
		}
	});
}

function EnableViewSorting() {
	$('#ticketviewfielddragtarget').sortable({
		opacity: 0.6,
		connectWith: ['.ticketviewfielddragcontainer'],
		update: TicketViewDragContainerUpdate
	}).disableSelection();

	$('.ticketviewfielddragcontainer').sortable({
		connectWith: ['#ticketviewfielddragtarget'],
		opacity: 0.6,
		update: TicketViewDragContainerUpdate
	}).disableSelection();
}

var TicketViewDragContainerUpdate = function(event, ui) {
	$('#ticketviewfielddragtarget').children('li').each(function (_index) {
		$(this).children('input').remove();
		$(this).append('<input type="hidden" name="viewfields[]" value="' + $(this).attr('id') + '" />');
	});

	$('.ticketviewfielddragcontainer').children('li').each(function (_index) {
		$(this).children('input[type=\'hidden\']').remove();
	});
};

/**
 * ###############################################
 * END STAFF CP > TICKETS FUNCTIONS
 * ###############################################
 */


/**
 * ###############################################
 * BEGIN STAFF CP > LIVE CHAT FUNCTIONS
 * ###############################################
 */

function LinkChatSearchForms() {
	bindFormSubmit('searchchatform');
	bindFormSubmit('searchchatidform');
	bindFormSubmit('searchchatmessform');
}

function ChatDeleteNote(_question, _noteURL) {
	var x = confirm(_question);
	if (x) {
		$('#chatnotescontainerdiv').load(_baseName + '/LiveChat/ChatHistory/DeleteNote/' + _noteURL, function(_responseText) {
			reParseDoc();

			if (typeof _responseText == 'string' && _responseText == '')
			{
				$('#chatnotescontainerdivholder').hide();
			}
		});
	}

	return true
}

function PrintChatHistory(_chatObjectID) {
	screen_width = screen.width;
	screen_height = screen.height;
	widthm = (screen_width-400)/2;
	heightm = (screen_height-500)/2;
	window.open(_baseName + '/LiveChat/ChatHistory/PrintChat/' + _chatObjectID, "printwindow", "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=500,height=600,left=" + widthm + ",top=" + heightm);
}

function PrintTicket(_ticketObjectID) {
	screen_width = screen.width;
	screen_height = screen.height;
	widthm = (screen_width-400)/2;
	heightm = (screen_height-500)/2;
	window.open(_baseName + '/Tickets/Ticket/PrintTicket/' + _ticketObjectID, "printwindow", "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=600,height=600,left=" + widthm + ",top=" + heightm);
}

function InsertCannedCategoryWindow(_selectedCannedCategoryID) {
	UICreateWindow(_baseName + '/LiveChat/CannedCategory/Insert/' + _selectedCannedCategoryID, 'insertcannedcategory', swiftLanguage['insert'], swiftLanguage['loading'], 680, 430, true, this);
}

function EditCannedCategoryWindow(_selectedCannedCategoryID) {
	UICreateWindow(_baseName + '/LiveChat/CannedCategory/Edit/' + _selectedCannedCategoryID, 'editcannedcategory', swiftLanguage['edit'], swiftLanguage['loading'], 680, 430, true, this);
}

function InsertCannedResponseWindow(_selectedCannedCategoryID) {
	UICreateWindow(_baseName + '/LiveChat/CannedResponse/Insert/' + _selectedCannedCategoryID, 'insertcannedresponse', swiftLanguage['insert'], swiftLanguage['loading'], 740, 670, true, this);
}

function SyncResponseWindow() {
	// Bind Calls
	$('#urldataenabled').unbind('click').bind('click', function(e) {
		SyncResponseWindowCheckboxes();

		if ($('#urldataenabled').is(':checked')) {
			$('#urldata').focus();
		}
	});

	$('#imagedataenabled').unbind('click').bind('click', function(e) {
		SyncResponseWindowCheckboxes();

		if ($('#imagedataenabled').is(':checked')) {
			$('#url_imagedata').focus();
		}
	});

	$('#responsetypeenabled').unbind('click').bind('click', function(e) {
		SyncResponseWindowCheckboxes();

		if ($('#responsetypeenabled').is(':checked')) {
			$('#responsecontents').focus();
		}
	});

	SyncResponseWindowCheckboxes();

	return true;
}

function SyncResponseWindowCheckboxes() {
	if ($('#responsetypeenabled').is(':checked')) {
		$("input:radio[name='responsetype']").removeClass().addClass('swiftradio');
		$("input:radio[name='responsetype']").removeAttr('disabled');
		$('#responsecontents').removeClass().addClass('swifttext');
		$('#responsecontents').removeAttr('disabled');
	} else {
		$("input:radio[name='responsetype']").removeClass().addClass('swifttextdisabled');
		$("input:radio[name='responsetype']").attr('disabled', 'disabled');
		$('#responsecontents').removeClass().addClass('swifttextdisabled');
		$('#responsecontents').attr('disabled', 'disabled');
	}

	if ($('#urldataenabled').is(':checked')) {
		$('#urldata').removeClass().addClass('swifttext');
		$('#urldata').removeAttr('disabled');
	} else {
		$('#urldata').removeClass().addClass('swifttextdisabled');
		$('#urldata').attr('disabled', 'disabled');
	}

	if ($('#imagedataenabled').is(':checked')) {
		$('#url_imagedata').removeClass().addClass('swifttext');
		$('#url_imagedata').removeAttr('disabled');
		$('#file_imagedata').removeClass().addClass('swifttext');
		$('#file_imagedata').removeAttr('disabled');
	} else {
		$('#file_imagedata').attr('disabled', 'disabled');
		$('#file_imagedata').removeClass().addClass('swifttextdisabled');

		$('#url_imagedata').removeClass().addClass('swifttextdisabled');
		$('#url_imagedata').attr('disabled', 'disabled');
	}

	return true;
}

/**
 * ###############################################
 * END STAFF CP > LIVE CHAT FUNCTIONS
 * ###############################################
 */

/**
 * ###############################################
 * BEGIN STAFF CP > USERS FUNCTIONS
 * ###############################################
 */

function UserDeleteNote(_question, _noteURL) {
	var x = confirm(_question);
	if (x) {
		$('#usernotescontainerdiv').load(_baseName + '/Base/User/DeleteNote/' + _noteURL, function(_responseText) {
			reParseDoc();

			if (typeof _responseText == 'string' && _responseText == '')
			{
				$('#usernotescontainerdivholder').hide();
			}
		});
	}

	return true
}

function UserOrganizationDeleteNote(_question, _noteURL) {
	var x = confirm(_question);
	if (x) {
		$('#usernotescontainerdiv').load(_baseName + '/Base/UserOrganization/DeleteNote/' + _noteURL, function(_responseText) {
			reParseDoc();

			if (typeof _responseText == 'string' && _responseText == '')
			{
				$('#usernotescontainerdivholder').hide();
			}
		});
	}

	return true
}

function LinkUserSearchForms() {
	bindFormSubmit('searchusmenuform');
	bindFormSubmit('searchuorgmenuform');
}

/**
 * ###############################################
 * END STAFF CP > USERS FUNCTIONS
 * ###############################################
 */
