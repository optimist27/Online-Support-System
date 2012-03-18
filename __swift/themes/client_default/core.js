var _irsContents = ' ';
function ToggleTicketSubDepartments(_departmentID) {
	$("tr[class^='ticketsubdepartments_']").hide();
	$('.ticketsubdepartments_' + _departmentID).show();

}

function StartIRS() {
	var _ticketMessageContents = $('#ticketsubject').val() + ' ' + $('#ticketmessage').val();

	if (_ticketMessageContents != _irsContents) {
			$('#irscontainer').slideDown('medium');
		$.post(_baseName + '/Knowledgebase/Article/IRS', {
			'contents': _ticketMessageContents
		}, function(_data){
			$('#irscontainer').show().html(_data);
		});

		_irsContents = _ticketMessageContents;
	}
	setTimeout('StartIRS();', 2000);
}


function ArticleHelpful(_kbArticleID) {
	$('#kbratingcontainer').load(_baseName + '/Knowledgebase/Article/Rate/' + _kbArticleID + '/1');
}

function ArticleNotHelpful(_kbArticleID) {
	$('#kbratingcontainer').load(_baseName + '/Knowledgebase/Article/Rate/' + _kbArticleID + '/0');
}

function MoveCommentReply(_commentID) {
	$('#commentsformcontainer').appendTo('#commentreplycontainer_' + _commentID);
	$('#commentformparentcommentid').val(_commentID);
}

function ActivateLoginTab() {
	$('#leftloginsubscribeboxsubscribetab').addClass('inactive');
	$('#leftloginsubscribeboxlogintab').removeClass('inactive');

	$('#leftsubscribebox').removeClass('active');
	$('#leftloginbox').addClass('active');

	$('#leftsubscribebox').hide();
	$('#leftloginbox').show();
}

function ActivateSubscribeTab() {
	$('#leftloginsubscribeboxlogintab').addClass('inactive');
	$('#leftloginsubscribeboxsubscribetab').removeClass('inactive');

	$('#leftloginbox').removeClass('active');
	$('#leftsubscribebox').addClass('active');

	$('#leftloginbox').hide();
	$('#leftsubscribebox').show();
}

function LanguageSwitch(_isLiveChat) {
	if (!$('#languageid').length) {
		return false;
	}

	if (_isLiveChat == true) {
		window.location.href = window.location.href + '/_languageID=' + $('#languageid').val();
	} else {
		window.location.href = _baseName + '/Base/Language/Change/' + $('#languageid').val();
	}
};

function OnLoaded() {
	$('#chatfullname').focus();
}

var RecaptchaOptions = {
   theme : 'clean'
};

function ResetLabel(_inputObject, _labelText, _cssClass) {
	if ($(_inputObject).val() == _labelText && _labelText != '')
	{
		$(_inputObject).val('');
	}

	if (_cssClass)
	{
		$(_inputObject).removeClass().addClass(_cssClass);
	}

	return true;
};

function Redirect(_newLocation) {
	window.location.href = _newLocation;
};

function AddProfileEmail() {
	$('#profileemailcontainer').append('<div class="useremailitem"><div class="useremailitemdelete" onclick="javascript: $(this).parent().remove();">&nbsp;</div><input name="newemaillist[]" type="text" size="20" class="swifttextlarge" /></div>');
};


function AddTicketFile() {
	$('#ticketattachmentcontainer').append('<div class="ticketattachmentitem"><div class="ticketattachmentitemdelete" onclick="javascript: $(this).parent().remove();">&nbsp;</div><input name="ticketattachments[]" type="file" size="20" class="swifttextlarge" /></div>');
};

function PopupSmallWindow(url) {
	screen_width = screen.width;
	screen_height = screen.height;
	widthm = (screen_width-400)/2;
	heightm = (screen_height-300)/2;
	window.open(url,"infowindow"+GetRandom(), "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=400,height=300,left="+widthm+",top="+heightm);
};


function QuoteTicketPost(_ticketID, _ticketPostID) {
   	$.ajax({
		type: 'POST',
		url: _baseName + '/Tickets/Ticket/GetQuote/' + _ticketID + '/' + _ticketPostID,
		data: '',
		success: function(_data){
			$('#postreplycontainer').show();
			$('#replycontents').val(_data);
		}
	});

}

function GetRandom()
{
	var num;
	now=new Date();
	num=(now.getSeconds());
	num=num+1;
	return num;
};

function LinkedSelectChanged(_selectObject, _fieldName) {
	var _selectValue = $(_selectObject).val();

	$('.linkedselectcontainer_' + _fieldName).hide();

	if ($('#selectsuboptioncontainer_' + _selectValue).length) {
		$('#selectsuboptioncontainer_' + _selectValue).show();
	}
};


function ClearDateField(_fieldName) {
	$('#' + _fieldName).val('');
	$('#' + _fieldName + '_hour').val('12');
	$('#' + _fieldName + '_minute').val('0');
	$('#' + _fieldName + '_meridian').val('am');
};

function ClearFunctionQueue() {
	for (var i=0;i<_uiOnParseCallbacks.length;i++)
	{
		window._uiOnParseCallbacks[i]();
	}

	window._uiOnParseCallbacks = new Array();

	return true;
};

window._uiOnParseCallbacks = new Array();

function QueueFunction(_functionData) {
	window._uiOnParseCallbacks[_uiOnParseCallbacks.length] = _functionData;

	return true;
};

function TriggerBenchmark(_benchmarkURL, _benchmarkID, _typeID, _benchmarkValue, _isReadOnly) {
	$.post(_baseName + _benchmarkURL, {
		'benchmarkvalue': _benchmarkValue
	}, function(data){
	});

	if (_isReadOnly == true) {
		$('input[name=benchmark_' + _benchmarkID + '_' + _typeID + ']').rating('readOnly', true);
	}
}


/**
* ###############################################
* BEGIN ON READY FUNCTIONS
* ###############################################
*/
$(function(){
	if (typeof _baseName == 'string') {
		$.get(_swiftPath + 'cron/index.php?/Core/CronManager/Execute');
	}

	$('#trisback').val('0');
	ClearFunctionQueue();
});

/**
* ###############################################
* END ON READY FUNCTIONS
* ###############################################
*/