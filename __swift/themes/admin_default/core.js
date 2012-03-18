//=======================================
//###################################
// Kayako Infotech Ltd. - SWIFT Framework
//
// Source Copyright 2001-2007 Kayako Infotech Ltd.
// Unauthorized reproduction is not allowed
// License Number: $%LICENSE%$
// $Author$ ($Date$)
// $RCSfile$ : $Revision$
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//                   www.kayako.com
//###################################
//=======================================

var checktoggle = 1;
var _tabFunctionQueue = new Array();
var _currentlyActiveTab = '';
var _activeViewportRequestHistoryChunk = '';
var _incomingRequestHistoryChunk = '';
var _isHistoryPop = false;
var _hasHistorySupport = (typeof history.pushState != 'undefined');

_noteSettings = {
	tl: {
		radius: 10
	},
	tr: {
		radius: 10
	},
	bl: {
		radius: 10
	},
	br: {
		radius: 10
	},
	antiAlias: true,
	autoPad: true
}

/**
* ###############################################
* BEGIN ON READY FUNCTIONS
* ###############################################
*/
$(function(){

	$.extend($.expr[':'], {
		focused: function(elem) {
			return elem.hasFocus;
		}
	});

	$('input').attr('autocomplete', 'OFF');

	if (!$.cookie('documentheight') || pagetype == 'login')
	{
		$.cookie('documentheight', getWindowHeight());
	}

	var menuselfield = menuhiddenfieldval;
	var _parsedMenuSelField = menuselfield.substr(menuselfield.indexOf('_')+3, menuselfield.length);
	var _menuID = menuselfield.substr(0, menuselfield.indexOf('_'));

	if (menuselfield != '' && menuselfield != '0')
	{
		$('#linkmenu' + _menuID + '_' + _parsedMenuSelField).removeClass('topnavmenuitem').addClass('topnavselmenuitem');
	} else {
//		$('div.topnavselmenuitem').removeClass('topnavselmenuitem').addClass('topnavmenuitem');
	}

	setTimeout(function () {
		FetchStaffRecurringJSON();
	}, 5000);

	var _actionTaken = false;

	$('td[id^=\'staffnavbarc_\']').click(function () {
		_cookieJar = $.cookieJar('options', {
			expires: 365
		});

		_actionTaken = true;

		if ($('#staffnavbarcontainer').css('display') == 'none')
		{
			_cookieJar.set('navbardisplay', '1');
			$('#staffnavbarcontainer').show();
		} else {
			_cookieJar.set('navbardisplay', '0');
			$('#staffnavbarcontainer').hide();
		}
	});

	_cookieJar = $.cookieJar('options', {
		expires: 365
	});

	if (_cookieJar.get('navbardisplay') && !_actionTaken)
	{
		if (_cookieJar.get('navbardisplay') == '0')
		{
			$('#staffnavbarcontainer').hide();
		}
	}

	// Use HTML5 History Support?
	if (_hasHistorySupport) {
		$(window).bind('popstate', function(e) {
			var _historyURL = CleanHistoryURL(location.href.split('#')[0]);        //    will return the url without the hash
			if (_activeViewportRequestHistoryChunk != '' && _activeViewportRequestHistoryChunk != _historyURL) {
				_isHistoryPop = true;
				loadViewportData(_historyURL);
			}
		});


	// Fallback to old hash method if history support is not detected
	} else {
		// Bind a callback that executes when document.location.hash changes.
		$(window).bind('hashchange', function(e) {
			var _historyURL = $.bbq.getState('u');

			if (typeof(_historyURL) == 'string' && _activeViewportRequestHistoryChunk != _historyURL) {
				loadViewportData(_historyURL);
			}
		});

		// Since the event is only triggered when the hash changes, we need
		// to trigger the event now, to handle the hash the page may have
		// loaded with.
		$(window).trigger('hashchange');
	}

	reParseDoc();
});

$(window).resize( function() {
	resizeExecute();
} );

/**
* ###############################################
* END ON READY FUNCTIONS
* ###############################################
*/



/**
 * ###############################################
 * BEGIN HISTORY FUNCTIONS
 * ###############################################
 */

function PushHistoryState(_url)
{
	if (!_isHistoryPop) {
		if (_hasHistorySupport) {
			history.pushState(null, null, _baseName + _url);
		} else {
			$.bbq.pushState({u: CleanHistoryURL(_url)}, 2);
		}
	}

	_isHistoryPop = false;
}

function CleanHistoryURL(_url)
{
	// Strip off base name
	var _baseNameStrip = _url.substr(0, _baseName.length);

	// Is basename same?
	if (_baseNameStrip.toLowerCase() == _baseName.toLowerCase()) {
		_url = _url.substr(_baseName.length);
	}

	return _url;
}

function HandleHistoryChange(newLocation, historyData) {
	if (historyData && _isViewportRequestActive == false)
	{
		loadViewportData(historyData, newLocation);
	}
};



/**
 * ###############################################
 * END HISTORY FUNCTIONS
 * ###############################################
 */





/**
 * ###############################################
 * BEGIN CORE FUNCTIONS
 * ###############################################
 */

function GetYesNoValue(_fieldName)
{
	if ($('#y' + _fieldName + ':checked').val())
	{
		return '1';
	} else {
		return '0';
	}
};

function BrowserObject(objid)
{
	return document.getElementById(objid);
}

function PopupSmallWindow(url) {
	screen_width = screen.width;
	screen_height = screen.height;
	widthm = (screen_width-400)/2;
	heightm = (screen_height-300)/2;
	window.open(url,"infowindow"+doRand(), "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=400,height=300,left="+widthm+",top="+heightm);
};

function ToggleSubCheckbox(_object) {
	if ($(_object).find('input[type=checkbox]').is(':checked')) {
		$(_object).find('input[type=checkbox]').attr('checked', false);
	} else {
		$(_object).find('input[type=checkbox]').attr('checked', true);
	}
}

function TabLoading(_tabPanelID, _tabID) {
	$('#' + _tabPanelID + '_tabimg_' + _tabID).attr('src', themepath + 'images/loadingcircle.gif');
};

function ChangeTabLoading(_tabPanelID, _tabID, _icon) {
	$('#' + _tabPanelID + '_tabimg_' + _tabID).attr('src', themepath + 'images/' + _icon);
};

var _activeSWIFTAction = new Array();
function RemoveActiveSWIFTAction(_actionName) {
	var _removeIndex = 0;
	for (_key in _activeSWIFTAction)
	{
		if (_activeSWIFTAction[_key] && _activeSWIFTAction[_key] == _actionName)
		{
			_removeIndex = _key;
		}
	}

	if (_removeIndex)
	{
		_activeSWIFTAction.splice(_removeIndex, 1);
	}

	if (!_activeSWIFTAction.length)
	{
		$('#menuloadingcircle').css('display', 'none');
		$('body').css('cursor', 'default');
	}
};

function ResetTopMenuToHome() {
	switchTab(1, 1);
};

function resizeExecute() {
	if (finalHeightDiff)
	{
		var documentHeight = getWindowHeight();
		var documentHeightFinal = documentHeight-finalHeightDiff;
		$.cookie('documentheight', documentHeight);
		$('#cpfinalheighttr').height(documentHeightFinal);
		$('#cpfinalheighttable').height(documentHeightFinal);
	}
};

function getWindowHeight()
{
	var windowHeight=0;
	if (typeof(window.innerHeight)=='number')
	{
		windowHeight = window.innerHeight;
	} else {
		if (document.documentElement && document.documentElement.clientHeight)
		{
			windowHeight = document.documentElement.clientHeight;
		} else {
			if (document.body && document.body.clientHeight)
			{
				windowHeight = document.body.clientHeight;
			}
		}
	}

	return windowHeight;
};

var _onlineUsers = {
	'onlineusersarray': []
};

var _onlineStaffFirstRun = false;
function FetchStaffRecurringJSON() {
	$.getJSON(_baseName + '/Core/AJAX/OnlineStaff', {  },
		function(_JSON){
			_updateOnlineStaffHTML = false;
			if (!_onlineStaffFirstRun)
			{
				_updateOnlineStaffHTML = true;
			}

			for (_key in _JSON.onlineusersarray)
			{
				if (!_onlineUsers[_key] && _onlineStaffFirstRun)
				{
					SWIFT_Notification.Users(_JSON.onlineusersarray[_key].fullname + " has logged in");
					_updateOnlineStaffHTML = true;
				}
			}

			for (_key in _onlineUsers)
			{
				if (!_JSON.onlineusersarray[_key] && _onlineStaffFirstRun)
				{
					SWIFT_Notification.Users(_onlineUsers[_key].fullname + " has logged out");
					_updateOnlineStaffHTML = true;
				}
			}

			if (_updateOnlineStaffHTML == true)
			{
				$('#onlinestaffcontainer').html(_JSON.onlineusershtml);
			}

			_onlineUsers = _JSON.onlineusersarray;
			_onlineStaffFirstRun = true;
			setTimeout(function () {
				FetchStaffRecurringJSON();
			}, 60000);
		}
		);
};

/**
* Toggles the display of an object
*/
function switchDisplay(objid)
{
	result = $('#'+objid);
	if (!result)
	{
		alert("Invalid Display Object: "+objid+"\nPlease make sure that all correct display objects are on the page");
		return;
	}

	if (result.css('display') == "none")
	{
		result.css('display', '');
	} else {
		result.css('display', 'none');
	}
};

/**
* Toggles the display of an object
*/
function switchDisplayAnimated(objid)
{
	$('#'+objid).fadeIn('medium');
};

/**
* Fades out the selected boxes
*/
function fadeOutAll(formname) {
	var currForm = document.forms[formname];
	if (!currForm)
	{
		return false
	}
	var isChecked = checktoggle;
	var itercount = 1;
	var trassignid;

	if (checktoggle == 1) {
		checktoggle = 0;
	} else {
		checktoggle = 1;
	}

	for (var elementIdx=0; elementIdx<currForm.elements.length; elementIdx++) {
		if (!currForm.elements)
		{
			break;
		}
		if (currForm.elements[elementIdx].type == 'checkbox') {
			var checkboxValue = $(currForm.elements[elementIdx]).val();
			if (currForm.elements[elementIdx].checked && $('#trid'+checkboxValue) && $('#trid'+checkboxValue).css('display') != 'none')
			{
				$('#trid'+checkboxValue).fadeOut('medium');
			}
		}
	}
};

/**
* Generates a random number
*/
function doRand()
{
	var num;
	now=new Date();
	num=(now.getSeconds());
	num=num+1;
	return num;
};

function GenerateRandomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 8;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}

	return randomstring;
};

/**
* Loads a data from URL into viewport and then processes it using KAJAX
*/
var indexCounter = 0;
var _lastUsedURL = '';
var _viewportAjaxRequest = false;
function loadViewportData(_url, _argumentIndexCounter, _prefixBaseName)
{
	_isViewportRequestActive = true;
	_incomingRequestHistoryChunk = '';

	if (_viewportAjaxRequest != false) {
		_viewportAjaxRequest.abort();
	}

	_finalURL = HandleBeforeAJAXDispatch(_url, _argumentIndexCounter, _prefixBaseName);
	_lastUsedURL = _finalURL;

	HideHeaderURL();

	_viewportAjaxRequest = $.get(_finalURL, function(responseText) {
		$('#cpmenu').html(responseText);
		reParseDoc();
	});

/*	$('#cpmenu').load(_finalURL, function(responseText) {
		reParseDoc();
	});*/
};

function LoadViewportPOST(_url, _parameterContainer, _prefixBaseName)
{
	if (_viewportAjaxRequest != false) {
		_viewportAjaxRequest.abort();
	}

	_finalURL = HandleBeforeAJAXDispatch(_url, false, _prefixBaseName);

	HideHeaderURL();
	_viewportAjaxRequest = $.post(_finalURL, _parameterContainer, function(_dataContainer) {
		$('#cpmenu').html(_dataContainer);
		reParseDoc();
	});
};

function HandleBeforeAJAXDispatch(_url, _argumentIndexCounter, _prefixBaseName)
{
	if (_activeSWIFTAction.length)
	{
		var _x = confirm(swiftLanguage['continueprocessquestion']);
		if (!_x) {
			return;
		}
	}

	_activeSWIFTAction = new Array();

	$('#menuloadingcircle').css('display', 'block');
	$('body').css('cursor', 'wait');

	var _historyURL = '';

	if (_prefixBaseName || _url.substr(0, 1) == '/')
	{
		_historyURL = _url;
		_url = _baseName + _url;
	} else {
		// Strip off base name
		var _baseNameStrip = _url.substr(0, _baseName.length);
		// Is basename same?
		if (_baseNameStrip.toLowerCase() == _baseName.toLowerCase()) {
			_historyURL = _url.substr(_baseName.length);
		}
	}

	if (_url.indexOf('=') == -1)
	{
		_url = _url + '/' + 'R:' + GenerateRandomString();
	} else {
		_url = _url + '/randomNumber=' + GenerateRandomString();
	}

	if (_historyURL != '')
	{
		_activeViewportRequestHistoryChunk = _historyURL;

		PushHistoryState(_historyURL);

		indexCounter++;
	}

	checktoggle = 1;

	slaScheduleTableIndex = {
		'sunday': 0,
		'monday': 0,
		'tuesday': 0,
		'wednesday': 0,
		'thursday': 0,
		'friday': 0,
		'saturday': 0
	};

	UIDestroyAllDialogs();

	// Destroy all Color Pickers
	$('.colorpicker').remove();

	// Destroy all tooltips
	$('.qtip').remove();

	return _url;
}

var _currentlyFocusedElement = false;
/**
* Reprocess the document
*/
function reParseDoc()
{
	_isViewportRequestActive = false;

	$('#menuloadingcircle').css('display', 'none');
	$('body').css('cursor', 'default');
	globalRuleIndex = 1;
	globalRuleSecondaryIndex = 1;
	_currentlyFocusedElement = false;
	checktoggle = 1;

	// Remove existing strength meters..
	$('div[class^=\'pstrength\']').remove();
	$('.swiftpassword').pstrength();

	$('input').attr('autocomplete', 'OFF');
	switchSubTab();

	var menuselfield = menuhiddenfieldval.toString();

	if (menuselfield != '' && menuselfield != '0' && menuselfield != '0_0')
	{
		var _parsedMenuSelField = menuselfield.substr(0, menuselfield.indexOf('_')+2);

		if (_parsedMenuSelField != _currentlyActiveTab) {
			var _menuID = menuselfield.substr(0, _parsedMenuSelField.indexOf('_'));
			var _classID = menuselfield.substr(_parsedMenuSelField.indexOf('_')+1, _parsedMenuSelField.length);
			var _finalClassID = _classID.substr(0, _classID.indexOf('_'));

			if (_menuID != '0' && _finalClassID != '0') {
				switchTab(_menuID, _finalClassID);
			}
		}

	} else {
//		$('div.topnavselmenuitem').removeClass('topnavselmenuitem').addClass('topnavmenuitem');
	}

	// End the loading messages if any
	UIEndLoading();

	// Render the notes..
	$('.notebubble').corner(_noteSettings);

	// Render the custom navigation...
	if ($('#customnavhtmlcontainer').html() != null && $('#customnavhtmlcontainer').html().length) {
		$('#customnavcontainer').html($('#customnavhtmlcontainer').html());
		$('#customnavhtmlcontainer').html('');
	}

	// Forcing Numeric Data
	$('.swifttextnumeric').ForceNumeric();

	// Default Tree Controls
	$(".swifttree").treeview({
		collapsed: false,
		animated: 'fast',
		unique: false,
		persist: "cookie"
	});

	ClearFunctionQueue();

	ProcessTableHighlights();

	UIHideAllDropDowns();

	UIScrollToTop();

	/*
	 * BUG FIX - Varun Shoor
	 *
	 * SWIFT-834 Audit Log in some tickets shows unrelated names
	 *
	 * Comments: Forced this to load cron from cron interface
	 */
	if (typeof _baseName == 'string' && _lastUsedURL.indexOf('/Base/Import') == -1) {
		$.get(_swiftPath + 'cron/index.php?/Core/CronManager/Execute');
	}

	$('#cpmenu').show();

	LoadTinyMCE();
};

function UIScrollToTop() {
	$('html, body').animate({scrollTop:0}, 'fast');
}

function LoadTinyMCE() {
	if (!$('.tinymce').length) {
		return false;
	}

	$('.tinymce').tinymce({
		// General options
		script_url : swiftpath + '__swift/thirdparty/TinyMCE/tiny_mce_gzip.php',
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,forecolor,backcolor",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,media,advhr,pagebreak|,ltr,rtl,|,fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
//		force_br_newlines : true,
		force_p_newlines : true,
        forced_root_block : '',
		content_css : swiftpath + '__swift/themes/admin_default/tinymce.css'
	});
};

function MoveCommentReply(_commentID) {
	$('#commentsformcontainer').appendTo('#commentreplycontainer_' + _commentID);
	$('#commentformparentcommentid').val(_commentID);
};

function ProcessTableHighlights() {
	// Process highlighting of the table rows
	$('tr.tablerow1_tr').mouseover(function() {

		// If no element has focus then highlight row
		if (!_currentlyFocusedElement) {
			$(this).children('td').addClass('tablerowhighlight');
		} else {
			$(_currentlyFocusedElement)
		}
	}).mouseout(function() {

		_inputChildren = $(this).children('td.inputhasfocus');
		_inputHasFocus = false;

		if (_inputChildren.length) {
			_inputHasFocus = true;
		}

		if (!_inputHasFocus) {
			$(this).children('td').removeClass('tablerowhighlight');
		}
	});

	$('input,textarea,select').focus(function () {
		if ($(this).parents('tr.tablerow1_tr').length) {
			_currentlyFocusedElement = this;
			$(this).parents('tr.tablerow1_tr').children('td').addClass('tablerowhighlight inputhasfocus');
		}
	}).blur(function() {
		_currentlyFocusedElement = false;
		$(this).parents('tr.tablerow1_tr').children('td').removeClass('tablerowhighlight inputhasfocus');
	});
};

function doConfirmForm(question, formName, windowName) {
	var x = confirm(question);
	if (x) {
		UIDestroyAllDialogs();

		$('#'+formName).submit();

		return true;
	}

	return false;
};

function doConfirmViewport(question,url, windowName) {
	var x = confirm(question);
	if (x) {
		loadViewportData(url);
	}
};

function doConfirm(question,url) {
	var x = confirm(question);
	if (x) {
		loadViewportData(url);
	}
};

function iif(cond, success, failure) {
	return cond ? success : failure;
};

/**
* Binds submit event of a form to container div
*/
function bindFormSubmit(formName, _targetDiv, _targetFunction)
{
	$('#'+formName).unbind('submit');

	var _formTargetDiv = 'cpmenu';

	if (_targetDiv && typeof _targetDiv == 'string' && _targetDiv != '')
	{
		_formTargetDiv = _targetDiv;
	}

	if (typeof _targetFunction === 'undefined') {
		_targetFunction = function(x) { };
	}

	$('#'+formName).submit(function(event) {
		if (window.$KAJAX._browserDetect.ie)
		{
			event.stopPropagation();
			event.preventDefault();
		}

		if ($('#'+formName).find('textarea.tinymce').length) {
			$('#'+formName).find('textarea.tinymce').each(function() {
				var _tinyMCEContents = tinyMCE.get($(this).attr('id'));
				$('#' + $(this).attr('id') + '_htmlcontents').val(_tinyMCEContents.getContent());
			});
		}

		if (typeof $('#'+formName).attr('action') == 'undefined') {
			return false;
		}

		$('#'+formName).ajaxSubmit({
			target: '#' + _formTargetDiv,
			beforeSubmit: function () {
				$('body').css('cursor', 'wait');
				$('#menuloadingcircle').css('display', 'block');
			},
			success: function() {
				UIDestroyAllDialogs();
				reParseDoc();

				if (typeof(_incomingRequestHistoryChunk) == 'string' && _incomingRequestHistoryChunk != '') {
					_activeViewportRequestHistoryChunk = _incomingRequestHistoryChunk;

					PushHistoryState(_incomingRequestHistoryChunk);
				}

				bindFormSubmit($(this).attr('id'));
				$('#' + _formTargetDiv + 'holder').show();
				$('#' + _formTargetDiv).show();

				_targetFunction();
				return false;
			}
		});

	return false;
	});
};

/**
* Binds submit event of a form to container div
*/
function ajaxFormSubmit(formName)
{
	$('#'+formName).unbind('submit');
	$('#'+formName).submit(function(event) {
		if (window.$KAJAX._browserDetect.ie)
		{
			event.stopPropagation();
		}

		$(this).ajaxSubmit({
			target: "#cpmenu",
			beforeSubmit: function () {
				$('body').css('cursor', 'wait');
				$('#menuloadingcircle').css('display', 'block');
			},
			success: function() {

				if (typeof(_incomingRequestHistoryChunk) == 'string' && _incomingRequestHistoryChunk != '') {
					_activeViewportRequestHistoryChunk = _incomingRequestHistoryChunk;

					PushHistoryState(_incomingRequestHistoryChunk);
				}

				UIDestroyAllDialogs();
				reParseDoc();
				bindFormSubmit($(this).attr('id'));
				return false;
			}
		});

	return false;
	});
$('#'+formName).submit();
return false;
};

function changeImage(imgid, newpath)
{
	imgObj = $('#'+imgid);
	if (imgObj)
	{
		imgObj.attr('src', newpath);
	}
}


/**
* Switches the class of sub tabs
*/
function switchSubTab()
{
//	$('div.topnavselmenuitem').removeClass('topnavselmenuitem').addClass('topnavmenuitem');
};

/**
* Resets the top menu
*/
function resetTopMenu()
{
	ResetMenuItems();

	switchTab(1, 1);
};


/**
* Toggles the login form options
*/
function toggleLoginOptions()
{
	var cookieJar = $.cookieJar('options', {
		expires: 365
	});

	if ($('#loginoptions').css('display') == 'block')
	{
		$('#loginoptions').slideUp('fast', null);
		cookieJar.set('loginoptions', null);
	} else {
		$('#loginoptions').slideDown('fast', null);
		cookieJar.set('loginoptions', 1);
	}
};


/**
* Builds the top tab menu for main interfaces
*/
function buildTopTabMenu()
{
	document.write('<div class="menusectiondefault" id="menusectionparentc">');
	for (key in swtabmenu)
	{
		if (swtabmenu[key] == null)
		{
			continue;
		}

		var tabmenbg = swmenubg2;
		if (swtabselmenu == swtabmenu[key][0])
		{
			tabmenbg = "remenusection"+swtabmenu[key][2];
		}
		document.write('<div id="tb_menusection'+swtabmenu[key][0]+'" '+swtabmenutype+'="javascript:switchTab('+swtabmenu[key][0]+', '+swtabmenu[key][2]+');" style="width: '+ swtabmenu[key][1] +'px;" class="'+ tabmenbg +'" alt="'+ swtabmenu[key][3] +'"><div class="menutext">'+ swtabmenu[key][3] +'</div></div>');
	}

	document.write('<div class="remenudefbg"></div>');

	document.write("<div id=\"menulinkwindow\" class=\"menusectionextender\" style=\"display: block;\">&nbsp;&nbsp;<a href='#' id='menulinkholder' target='_blank'><img src='"+themepath+"images/icon_newwindow_gray.png' align='absmiddle' border='0' /></a>&nbsp;&nbsp;</div>");
	document.write("<div id=\"menuloadingcircle\" class=\"menusectionextender\" style=\"display: none;\">&nbsp;&nbsp;<img src='"+themepath+"images/loadingcircledarkbg.gif' align='absmiddle' border='0' />&nbsp;&nbsp;</div>");
	document.write('</div><div id="tb_menuline" class="remenuline'+swtabselmenuclass+'">&nbsp;</div><div class="topmenulinksdiv" id="linksdiv" class="remenulinks">');
	for (key in menulinks[swtabselmenu])
	{
		document.write(menulinks[swtabselmenu][key]);
	}
	document.write('</div>');
};

function SetHeaderURL(_url) {
	$('#menulinkwindow').show();
	$('#menulinkholder').attr('href', _url);
};

function SetHeaderTitle(_documentTitle) {
	document.title = _documentTitle;
};

function HideHeaderURL() {
	$('#menulinkwindow').hide();
}

/**
* MENU TAB RELATED FUNCTIONS
*/
function switchTabClass(tabname, classname) {
	var t_tab = BrowserObject(tabname);
	if (t_tab)
	{
		t_tab.className = classname;
	}
};

function resetTabDefault() {
	var tabClass = "remenusectiondefault";
	for (key in menulinks)
	{
		switchTabClass("tb_menusection"+key, tabClass);
	}
};

function switchTab(tabitem, classid) {
	var t_ml = BrowserObject("tb_menuline");
	var t_md = BrowserObject("linksdiv");
	if ($(t_md).length == 0) {
		return;
	}

	t_md.innerHTML = '';
	for (key in menulinks[tabitem])
	{
		t_md.innerHTML += menulinks[tabitem][key];
	//		document.write(menulinks[swtabselmenu][ii]);
	}
	t_md.innerHTML += "<div onclick=\"window.location.href='"+ _baseName +"/Core/Default/Logout'\" class=\"topnavmenuitem\" style=\"float: right;\"><span id=\"itemspanleft\">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;<img src='"+themepath+"images/icon_logout.gif' align='absmiddle' border='0' /> "+logoutText+"&nbsp;&nbsp;&nbsp; <span id=\"itemspanright\">&nbsp;</span></div>";

	t_ml.className = "remenuline"+classid;

	resetTabDefault();
	switchTabClass("tb_menusection"+tabitem, "remenusection"+classid);

	_currentlyActiveTab = tabitem + '_' + classid;
};

/**
* Toggles the checkboxes in the given form from their current state
*/
function toggleAll(_gridName, formName) {

	if (formName)
	{
		var currForm = BrowserObject(formName + 'form');
	} else {
		var currForm = BrowserObject('form_'+_gridName);
	}
	var isChecked = checktoggle;
	var itercount = 1;
	var trassignid;

	if (checktoggle == 1) {
		checktoggle = 0;
	} else {
		checktoggle = 1;
	}

	var _rowPrefix = 'itemhighlight_'+_gridName+'_';
	var _rowPrefixLength = _rowPrefix.length;

	for (var elementIdx=0; elementIdx<currForm.elements.length; elementIdx++) {
		if (!currForm.elements)
		{
			break;
		}

		if (currForm.elements[elementIdx].type == 'checkbox') {
			currForm.elements[elementIdx].checked = isChecked;
		} else if (currForm.elements[elementIdx].type == 'hidden') {
			hidval = currForm.elements[elementIdx].name;

			if (hidval.substr(0, _rowPrefixLength) == _rowPrefix)
			{
				trassignid = hidval.substr(_rowPrefixLength, hidval.length);
				currForm.elements[elementIdx].value = isChecked;

				HandleCheckboxToggleAll(_gridName, trassignid, isChecked, itercount);
				itercount++;
			}
		}
	}

	// Activate the Mass Action Panel
	if (isChecked) {
		$('#gridmassactionpanel').show();
	} else {
		$('#gridmassactionpanel').hide();
	}

};

/**
* Handles the navigation for the admin accordion
*/
function LoadBarMenu(obj, tdobj, noanim){
	$('.BarOptions').slideUp('fast');

	if ($('#' + obj).is(':visible') == true) {
		$('#' + obj).slideUp('fast');
	} else {
		$('#' + obj).slideDown('fast');
	}

};

function CollapseBarMenu(){
	$('.BarOptions').slideUp('fast');

	ResetBarActiveStates();
};

function ResetBarActiveStates() {
	$('.BarOption').removeClass('BarOptionActive');
	$('.BarItem').removeClass('BarItemActive');
};

function SetActiveBarItem(_barObject) {
	ResetBarActiveStates();
	ResetMenuItems();
	$(_barObject).addClass('BarItemActive');
};

function SetActiveBarOption(_barObject) {
	ResetBarActiveStates();
	ResetMenuItems();
	$(_barObject).addClass('BarOptionActive');
};

function ActivateMenuItem(_menuObject) {
	ResetMenuItems();

	$(_menuObject).removeClass('topnavmenuitem').addClass('topnavselmenuitem');
};

function ResetMenuItems() {
	$('div.topnavselmenuitem').removeClass('topnavselmenuitem').addClass('topnavmenuitem');
};

function ResetDynamicMenuItems() {
	$('div.topnavmenuitemdynamic').removeClass('topnavselmenuitem').addClass('topnavmenuitem');
}

/**
* Navigates the window to given location
*/
function navigateWindow(navlocation) {
	window.location.href = navlocation;
};


function ChangeColorTable(_inputName, _value) {
	$('#color_'+_inputName).css('background-color', _value);

	return true;
}


function absX(o) {
	if (o == document.body) return 0;
	var x = o.offsetLeft;
	if (o.offsetParent && o.offsetParent != o)
		x += absX(o.offsetParent);
	return x;
}

function absX2(o, dotype) {
	if (o == document.body) return 0;

	var x = o.offsetLeft;
	if (dotype == 1)
	{
		x += o.offsetWidth;
	}

	if (o.offsetParent && o.offsetParent != o)
		x += absX2(o.offsetParent, 0);
	return x;
}

function absY(o) {
	if (o == document.body) return 0;
	var y = o.offsetTop;
	if (o.offsetParent && o.offsetParent != o)
		y += absY(o.offsetParent);
	return y;
}

function absY2(o, dotype) {
	if (o == document.body) return 0;
	var y = o.offsetTop;
	if (dotype == 1)
	{
		y += o.offsetHeight;
	}
	if (o.offsetParent && o.offsetParent != o)
		y += absY2(o.offsetParent, 0);
	return y;
}

function ClearDateField(_fieldName) {
	$('#' + _fieldName).val('');
	$('#' + _fieldName + '_hour').val('12');
	$('#' + _fieldName + '_minute').val('0');
	$('#' + _fieldName + '_meridian').val('am');
}

/**
 * ###############################################
 * END CORE FUNCTIONS
 * ###############################################
 */



/**
 * ###############################################
 * BEGIN RULE MANAGEMENT FUNCTIONS
 * ###############################################
 */


ruleCreationCallback = new Array();
var globalRuleIndex = 1;
var globalRuleSecondaryIndex = 1;

/**
* Creates a container for the new criteria.. the HTML for this container gets generated from updateGlobalRuleHTML
*/
function newGlobalRuleCriteria(crulename, selectedop, dfieldvalue, hasextendedmatch, matchtype)
{
	var rowElement = document.createElement("div");
	rowElement.id = "rulerow"+globalRuleIndex;
	var rowMod = globalRuleIndex%2;
	rowElement.className = "searchrule"+rowMod;

	var parentContainer = $('#ruleparent');
	if (!parentContainer)
	{
		return false;
	}

	if (typeof hasextendedmatch != 'undefined' && typeof matchtype != 'undefined' && matchtype == '2') {
		rowElement.className = 'searchrule2';
	} else if (typeof hasextendedmatch != 'undefined' && typeof matchtype != 'undefined' && matchtype == '1') {
		rowElement.className = 'searchrule0';
	}

	parentContainer.append(rowElement);
	rowElement.style.display = 'none';
	rowElement.innerHTML = updateGlobalRuleHTML(globalRuleIndex, crulename, selectedop, dfieldvalue, hasextendedmatch, matchtype);
	$(rowElement).fadeIn('medium');

	globalRuleIndex++;

	runRuleCallbacks();


};

function runRuleCallbacks() {
	for (var i=0;i<ruleCreationCallback.length;i++)
	{
		ruleCreationCallback[i]();
	}
	ruleCreationCallback = new Array();

	// Forcing Numeric Data
	$('.swifttextnumeric').ForceNumeric();
};

function UpdateRuleMatchType(_ruleIndex, _opSelect) {
	var rowElement = '#rulerow' + _ruleIndex;

	if ($(_opSelect).val() == '2') {
		$(rowElement).removeClass().addClass('searchrule2');
	} else {
		var _rowMod = _ruleIndex%2;
		$(rowElement).removeClass().addClass('searchrule0');
	}
}

/**
* Generates HTML for a field row
*/
function updateGlobalRuleHTML(ruleindex, fieldtype, selectedop, dfieldvalue, hasextendedmatch, matchtype)
{
	var returnResult;

	if (!criteriaStore)
	{
		return '';
	}

	var fieldObject = criteriaStore[fieldtype];
	if (!fieldObject)
	{
		return 'ERROR';
	}

	var rowElement = '#rulerow'+ruleindex;

	var _extendedResult = '';
	if (typeof hasextendedmatch != 'undefined' && typeof matchtype != 'undefined' && hasextendedmatch == '1') {
		_extendedResult = '<div style="float: right; padding: 4px;"><select name="rulecriteria['+ ruleindex +'][3]" id="rulematchsel_' + ruleindex + '" onchange="javascript: UpdateRuleMatchType(\'' + ruleindex + '\', this)" class="swiftselect">';
		_extendedResult += '<option value="1"'+iif(matchtype=="1", " selected", "")+'>' + swiftLanguage['matchand'] + '</option>';
		_extendedResult += '<option value="2"'+iif(matchtype=="2", " selected", "")+'>' + swiftLanguage['matchor'] + '</option>';
		_extendedResult += '</select></div>';

		if (matchtype == '2') {
			$(rowElement).removeClass().addClass('searchrule2');
		} else {
			$(rowElement).removeClass().addClass('searchrule0');
		}
	}

	returnResult = _extendedResult + '<div style="width: 600px;"><table border="0" cellpadding="3" cellspacing="1" width="100%"><tr><td align="left" width="1"><a href="javascript:void(0);" onClick="javascript:removeGlobalRuleRow(\''+ruleindex+'\');"><img src="'+themepath+'images/icon_delete.gif" border="0" /></a></td><td align="left" width="1"><select name="rulecriteria['+ ruleindex +'][0]" class="swiftselect" onChange="javascript:$(\'#rulerow'+ruleindex+'\').html(updateGlobalRuleHTML(\''+ ruleindex +'\', this.options[this.selectedIndex].value, 0, \'\', \'' + hasextendedmatch + '\', $(\'#rulematchsel_' + ruleindex + '\').val()));runRuleCallbacks();">';

	for (key in criteriaStore)
	{
		if (criteriaStore[key].optgroup == true && typeof criteriaStore[key].optgroup != 'undefined') {
			returnResult += '<optgroup label="'+criteriaStore[key].title+'">';
		} else {
			returnResult += '<option value="'+ key +'"'+selectedGlobalStatus(fieldtype, key)+'>'+criteriaStore[key].title+'</option>';
		}
	}

	returnResult += '</select>';
	returnResult += getGlobalOperatorHTML(ruleindex, criteriaStore[fieldtype].op, selectedop);
	returnResult += getGlobalQueryHTML(ruleindex, fieldtype, criteriaStore[fieldtype].field, criteriaStore[fieldtype].desc, dfieldvalue);

	return returnResult+'</table></div>';
};

function removeGlobalRuleRow(ruleindex)
{
	$('#rulerow'+ruleindex).fadeOut('medium', function() {
		$('#rulerow'+ruleindex).remove();
	});

	return;
};

var opConstants = new Object();
opConstants['OP_EQUAL'] = 1;
opConstants['OP_NOTEQUAL'] = 2;
opConstants['OP_REGEXP'] = 3;
opConstants['OP_CONTAINS'] = 4;
opConstants['OP_NOTCONTAINS'] = 5;
opConstants['OP_GREATER'] = 6;
opConstants['OP_LESS'] = 7;
opConstants['OP_CHANGED'] = 8;
opConstants['OP_CHANGEDTO'] = 9;
opConstants['OP_CHANGEDFROM'] = 10;
opConstants['OP_NOTCHANGED'] = 11;
opConstants['OP_NOTCHANGEDTO'] = 12;
opConstants['OP_NOTCHANGEDFROM'] = 13;
function UpdateRuleOPChange(_ruleIndex, _opSelect) {
	if ($(_opSelect).val() == opConstants['OP_CHANGED'] || $(_opSelect).val() == opConstants['OP_NOTCHANGED']) {
		$('#rulevaluecontainer_' + _ruleIndex).hide();
	} else {
		$('#rulevaluecontainer_' + _ruleIndex).show();
	}
}

function getGlobalOperatorHTML(ruleindex, optype, selectedop)
{
	if (!ruleindex)
	{
		return;
	}

	var returnValue;
	var opCollection = new Array;
	var defaultOp;

	returnValue = '<td align="left" width="130"><select name="rulecriteria['+ ruleindex +'][1]" onchange="javascript: UpdateRuleOPChange(\'' + ruleindex + '\', this);" class="swiftselect">';
	if (optype == "string")
	{
		opCollection[0] = 'OP_CONTAINS';
		opCollection[1] = 'OP_NOTCONTAINS';
		opCollection[2] = 'OP_EQUAL';
		opCollection[3] = 'OP_NOTEQUAL';
		opCollection[4] = 'OP_REGEXP';
		defaultOp = 'OP_CONTAINS';
	}else if (optype == "resstring") {
		opCollection[0] = 'OP_CONTAINS';
		defaultOp = 'OP_CONTAINS';
	} else if (optype == "extendedcustom") {
		opCollection[0] = 'OP_EQUAL';
		opCollection[1] = 'OP_NOTEQUAL';
		opCollection[2] = 'OP_CHANGED';
		opCollection[3] = 'OP_CHANGEDTO';
		opCollection[4] = 'OP_CHANGEDFROM';
		opCollection[5] = 'OP_NOTCHANGED';
		opCollection[6] = 'OP_NOTCHANGEDTO';
		opCollection[7] = 'OP_NOTCHANGEDFROM';
		defaultOp = 'OP_EQUAL';
	} else if (optype == "bool") {
		opCollection[0] = 'OP_EQUAL';
		opCollection[1] = 'OP_NOTEQUAL';
		defaultOp = 'OP_EQUAL';
	} else if (optype == "resbool") {
		opCollection[0] = 'OP_EQUAL';
		defaultOp = 'OP_EQUAL';
	} else if (optype == "int") {
		opCollection[0] = 'OP_GREATER';
		opCollection[1] = 'OP_LESS';
		opCollection[2] = 'OP_EQUAL';
		opCollection[3] = 'OP_NOTEQUAL';
		defaultOp = 'OP_EQUAL';
	} else if (optype == "calfixed") {
		opCollection[0] = 'OP_EQUAL';
		opCollection[1] = 'OP_NOTEQUAL';
		defaultOp = 'OP_EQUAL';
	} else if (optype == "cal") {
		opCollection[0] = 'OP_GREATER';
		opCollection[1] = 'OP_LESS';
		defaultOp = 'OP_GREATER';
	}

	if (opCollection.length)
	{
		for (var i=0;i<opCollection.length;i++)
		{
			var currentOp = opCollection[i];
			returnValue += '<option value="'+opConstants[currentOp]+'"';
			if ((selectedop == "" && opCollection[i] == defaultOp) || (selectedop != "" && selectedop == opConstants[currentOp]))
			{
				returnValue += ' selected';
			}
			returnValue += '>'+strOpConstants[currentOp]+'</option>';
		}
	}

	returnValue += '</select></td>';
	return returnValue;
};

function getGlobalQueryHTML(ruleindex, fieldtype, querytype, pdesc, dfieldvalue)
{
	if (!ruleindex)
	{
		return;
	}

	var returnResult = '<td align="left" width="100%"><div id="rulevaluecontainer_' + ruleindex + '">';
	if (querytype == "text")
	{
		returnResult += '<input type="text" size="20" class="swifttext" value="'+dfieldvalue+'" name="rulecriteria['+ ruleindex +'][2]" style="width:98%;" />';
	} else if (querytype == "int") {
		returnResult += '<input type="text" size="15" class="swifttextnumeric" value="'+dfieldvalue+'" name="rulecriteria['+ ruleindex +'][2]" />';
	} else if (querytype == "cal") {
		returnResult += '<input type="text" size="12" class="swifttext" value="'+dfieldvalue+'" name="rulecriteria['+ ruleindex +'][2]" id="rulecriteriafield_'+ ruleindex +'" />';
		ruleCreationCallback[ruleCreationCallback.length] = function () {
			$('#rulecriteriafield_'+ ruleindex).datepicker(datePickerDefaults);
		};
	} else if (querytype == "bool") {
		if (dfieldvalue == "")
		{
			dfieldvalue = "1";
		}
		returnResult += '<select name="rulecriteria['+ ruleindex +'][2]" class="swiftselect"><option value="1"'+iif(dfieldvalue=="1", " selected", "")+'>'+ swiftLanguage['strue'] +'</option><option value="0"'+ iif(dfieldvalue!="1", " selected", "") +'>'+ swiftLanguage['sfalse'] +'</option></select>';
	} else if (querytype == "daterange") {
		if (dfieldvalue == "")
		{
			dfieldvalue = "yesterday";
		}
		returnResult += '<select name="rulecriteria['+ ruleindex +'][2]" class="swiftselect"><option value="yesterday"'+iif(dfieldvalue=="yesterday", " selected", "")+'>'+ swiftLanguage['cyesterday'] +'</option><option value="today"'+iif(dfieldvalue=="today", " selected", "")+'>'+ swiftLanguage['ctoday'] +'</option><option value="cwtd"'+iif(dfieldvalue=="cwtd", " selected", "")+'>'+ swiftLanguage['ccurrentwtd'] +'</option><option value="cmtd"'+iif(dfieldvalue=="cmtd", " selected", "")+'>'+ swiftLanguage['ccurrentmtd'] +'</option><option value="cytd"'+iif(dfieldvalue=="cytd", " selected", "")+'>'+ swiftLanguage['ccurrentytd'] +'</option><option value="l7d"'+iif(dfieldvalue=="l7d", " selected", "")+'>'+ swiftLanguage['cl7days'] +'</option><option value="l30d"'+iif(dfieldvalue=="l30d", " selected", "")+'>'+ swiftLanguage['cl30days'] +'</option><option value="l90d"'+iif(dfieldvalue=="l90d", " selected", "")+'>'+ swiftLanguage['cl90days'] +'</option><option value="l180d"'+iif(dfieldvalue=="l180d", " selected", "")+'>'+ swiftLanguage['cl180days'] +'</option><option value="l365d"'+iif(dfieldvalue=="l365d", " selected", "")+'>'+ swiftLanguage['cl365days'] +'</option></select>';
	} else if (querytype == "daterangeforward") {
		if (dfieldvalue == "")
		{
			dfieldvalue = "tomorrow";
		}
		returnResult += '<select name="rulecriteria['+ ruleindex +'][2]" class="swiftselect"><option value="tomorrow"'+iif(dfieldvalue=="tomorrow", " selected", "")+'>'+ swiftLanguage['ctomorrow'] +'</option><option value="today"'+iif(dfieldvalue=="today", " selected", "")+'>'+ swiftLanguage['ctoday'] +'</option><option value="nwtd"'+iif(dfieldvalue=="nwtd", " selected", "")+'>'+ swiftLanguage['cnextwfd'] +'</option><option value="nmtd"'+iif(dfieldvalue=="nmtd", " selected", "")+'>'+ swiftLanguage['cnextmfd'] +'</option><option value="nytd"'+iif(dfieldvalue=="nytd", " selected", "")+'>'+ swiftLanguage['cnextyfd'] +'</option><option value="n7d"'+iif(dfieldvalue=="n7d", " selected", "")+'>'+ swiftLanguage['cn7days'] +'</option><option value="n30d"'+iif(dfieldvalue=="n30d", " selected", "")+'>'+ swiftLanguage['cn30days'] +'</option><option value="n90d"'+iif(dfieldvalue=="n90d", " selected", "")+'>'+ swiftLanguage['cn90days'] +'</option><option value="n180d"'+iif(dfieldvalue=="n180d", " selected", "")+'>'+ swiftLanguage['cn180days'] +'</option><option value="n365d"'+iif(dfieldvalue=="n365d", " selected", "")+'>'+ swiftLanguage['cn365days'] +'</option></select>';
	} else if (querytype == "custom") {
		returnResult += '<select name="rulecriteria['+ ruleindex +'][2]" class="swiftselect">';
		if (typeof criteriaStore[fieldtype].fieldcontents == 'object')
		{
			for (var key in criteriaStore[fieldtype].fieldcontents) {
				//alert(criteriaStore[fieldtype].fieldcontents[key].title+": "+criteriaStore[fieldtype].fieldcontents[key].contents);
				returnResult += '<option value="'+criteriaStore[fieldtype].fieldcontents[key].contents+'" '+ iif(dfieldvalue==criteriaStore[fieldtype].fieldcontents[key].contents, " selected", "") +'>'+ criteriaStore[fieldtype].fieldcontents[key].title +'</option>';
			}
		}
		returnResult += '</select>';
	}

	return returnResult+'</div></td></tr>'+iif(pdesc!="", '<tr><td colspan="4"><span class="smalltext">'+pdesc+'</span></td></tr>', '');
};

function selectedGlobalStatus(fieldtype, dfieldvalue)
{
	if (fieldtype == dfieldvalue)
	{
		return " selected";
	}

	return '';
};

/**
 * ###############################################
 * END RULE MANAGEMENT FUNCTIONS
 * ###############################################
 */



/**
* ###############################################
* -- BEGIN GRID FUNCTIONS --
* ###############################################
*/
// Return a helper with preserved width of cells
var _gridSortHelper = function(e, ui) {
	ui.children().each(function() {
		$(this).width($(this).width());
	});
	return ui;
};

var _gridSortUpdateHandler = function(e, ui) {

	_gridName = $(this).attr('gridname');
	formName = 'form_'+_gridName;
	$('#_gridMassAction_'+_gridName).val('');
	$('#_gridSort_'+_gridName).val('1');

	$('#'+formName).unbind('submit');
	$('#'+formName).submit(function() {
		$(this).ajaxSubmit({
			target: "#cpmenu",
			beforeSubmit: function () {
				$('body').css('cursor', 'wait');
				UIStartLoading();
				$('#menuloadingcircle').css('display', 'block');
			},
			success: function() {
				reParseDoc();
			}
		});
		return false;
	});
	$('#'+formName).submit();

	return ui;
};

function EnableGridSorting(_gridName) {
	$('.gridcontents_' + _gridName + '_sub').sortable({
		containment: '.gridlayoutborder',
		handle: '.griddragdropsub',
		opacity: 0.6,
		helper: _gridSortHelper,
		update: _gridSortUpdateHandler
	}).disableSelection();

	$('.gridcontents_' + _gridName + '_parent').sortable({
		containment: '.gridlayoutborder',
		connectWith: ['.gridcontents_' + _gridName + '_parent'],
		handle: '.griddragdrop',
		opacity: 0.6,
		helper: _gridSortHelper,
		update: _gridSortUpdateHandler
	}).disableSelection();

}

function HandleGridEnter(_gridName, _fieldObject, _event) {
	var _keyCode = _event.keyCode ? _event.keyCode : _event.which ? _event.which : _event.charCode;
	if (_keyCode == 13) {
		var _currentValue = window.$gridirs.textObject.value;
		window.$gridirs.RunIRS(_gridName, _currentValue);

		return false;
	}

	return true;
};

function GridMassAction(_gridName, _massActionHash, _confirmationMessage)
{
	if (_confirmationMessage != '')
	{
		var x = confirm(_confirmationMessage);
		if (!x) {
			return false;
		}
	}

	formName = 'form_'+_gridName;
	$('#_gridMassAction_'+_gridName).val(_massActionHash);

	$('#'+formName).unbind('submit');
	$('#'+formName).submit(function() {
		$(this).ajaxSubmit({
			target: "#cpmenu",
			beforeSubmit: function () {
				$('body').css('cursor', 'wait');
				UIStartLoading();
				$('#menuloadingcircle').css('display', 'block');
			},
			success: function() {
				reParseDoc();
			}
		});
	return false;
	});
$('#'+formName).submit();
};

function GridMassActionPanel(_gridName, _confirmationMessage)
{
	if (_confirmationMessage != '')
	{
		var x = confirm(_confirmationMessage);
		if (!x) {
			return false;
		}
	}

	formName = 'form_' + _gridName;
	$('#_gridMassActionPanel_'+_gridName).val('1');

	$('#'+formName).unbind('submit');
	$('#'+formName).submit(function() {
		$(this).ajaxSubmit({
			target: "#cpmenu",
			beforeSubmit: function () {
				$('body').css('cursor', 'wait');
				UIStartLoading();
				$('#menuloadingcircle').css('display', 'block');
			},
			success: function() {
				reParseDoc();
			}
		});
	return false;
	});

$('#'+formName).submit();
};

function GridSortRequest(_gridName, _gridURL, _sortFieldName, _sortOrder)
{
	$('#menuloadingcircle').css('display', 'block');
	$('body').css('cursor', 'wait');

	UIDestroyAllDialogs();

	$.ajax({
		type: 'POST',
		url: _gridURL + '/' + doRand(),
		data: '_sortOrder='+escape(_sortOrder) + '&_sortBy=' + _sortFieldName,
		success: function(_xmlData){
			UpdateGridContents(_xmlData, _gridName);
		}
	});
};

function UpdateGridContents(_xmlData, _gridName) {
	UIEndLoading();
	$('#menuloadingcircle').css('display', 'none');
	$('body').css('cursor', 'default');

	$('#gridcontent'+_gridName).html(_xmlData);
	$('input').attr('autocomplete', 'OFF');
	$("#gridirs").focus();

	reParseDoc();

	EnableGridSorting(_gridName);
};

function GridTitleMouseOver(_titleObject) {
	$(_titleObject).removeClass('gridtabletitlerow');
	$(_titleObject).addClass('gridtabletitlerowhover');
}

function GridTitleMouseOut(_titleObject, _originalClass) {
	$(_titleObject).removeClass('gridtabletitlerowhover');
	$(_titleObject).addClass(_originalClass);
}


function HandleGridCheckboxClick(_gridName, _rowID)
{
	_rowHighlightName = '#itemhighlight_'+_gridName+'_'+_rowID;

	if ($(_rowHighlightName).val() == '0')
	{
		$(_rowHighlightName).val('1');
	} else {
		$(_rowHighlightName).val('0');
	}
};

function HandleGridClickRow(_gridName, _rowID, _rowTRObject, _rowClass)
{
	_rowHighlightName = '#itemhighlight_'+_gridName+'_'+_rowID;

	if ($(_rowHighlightName).val() == '1')
	{
		_rowTRObject.className = 'rowselect';
		$(_rowTRObject).children("td").addClass('rowselect');
	} else {
		_rowTRObject.className = _rowClass;
		$(_rowTRObject).children("td").removeClass('rowselect');
	}

	var _checkedLength = $(".swiftgridcheckbox:checked").length;

	if (_checkedLength) {
		// Activate the Mass Action Panel
		$('#gridmassactionpanel').show();
	} else {
		$('#gridmassactionpanel').hide();
	}
};

function ClearGridRowHighlight(_rowObject, _className)
{
	if (_rowObject.className != "rowselect")
	{
		_rowObject.className = _className;
	}
};

function GridRowHighlight(_rowObject)
{
	if (_rowObject.className != "rowselect")
	{
		_rowObject.className = 'rowhighlight';
	}
};

function HandleCheckboxToggleAll(_gridName, _rowID, _isChecked, _rowIndex) {
	_rowTRObject = $('#gridrowid_'+_gridName + '_' + _rowID);
	_rowTRObjectDOM = BrowserObject('gridrowid_'+_gridName + '_' + _rowID);

	var _gridRowID = _rowIndex%2;

	if (_isChecked == 1)
	{
		_rowTRObjectDOM.className="rowselect";
		_rowTRObject.children("td").addClass('rowselect');
	} else {
		if (_gridRowID == 0)
		{
			_rowTRObjectDOM.className="gridrow1";
		} else {
			_rowTRObjectDOM.className="gridrow2";
		}
		_rowTRObject.children("td").removeClass('rowselect');
	}
};

function GridPagination(_gridName, _gridURL, _gridSearchQueryString, _gridOffset) {
	$('#menuloadingcircle').css('display', 'block');
	$('body').css('cursor', 'wait');

	UIDestroyAllDialogs();

	UIStartLoading();

	_parsedSearchQuery = '';
	if (_gridSearchQueryString != '') {
		_parsedSearchQuery = encodeURIComponent(Base64Encode(_gridSearchQueryString));
	}

	$.ajax({
		type: 'POST',
		url: _gridURL + '/' + doRand(),
		data: '_searchQuery=' + _parsedSearchQuery + '&_offset=' + _gridOffset,
		success: function(_xmlData){
			UpdateGridContents(_xmlData, _gridName);
		}
	});
};

_gridRefreshTimeout = 0;
function AutoRefreshGrid(_gridName, _refreshSeconds, _gridURL) {
	if (!$('#form_' + _gridName).length) {
		return false;
	}

	if (_gridRefreshTimeout != 0) {
		clearTimeout(_gridRefreshTimeout);
	}

	_gridRefreshTimeout = setTimeout('AutoRefreshGridExecute(\'' + _gridName + '\', \'' + _gridURL + '\');', _refreshSeconds*1000);

	return true;
}

function AutoRefreshGridExecute(_gridName, _gridURL) {
	if (!$('#form_' + _gridName).length) {
		return false;
	}

	loadViewportData(_gridURL);

	return true;
}

/**
* ###############################################
* -- END GRID FUNCTIONS --
* ###############################################
*/

/**
* ###############################################
* -- BEGIN GRID IRS AUTO COMPLETE OBJECT --
* ###############################################
*/
var gridCacheContents = '';
var _oldGridIRSTimerID = '';
var _timerCacheContents = '';
var _lastGridIRSCheckTimer = 0;
var _lastGridIRSCheckTimerSnapshotChange = 0;
function GridIRSAutoComplete(obj, gridName, autocompleteurl, searchStoreID)
{
	if (_oldGridIRSTimerID != '')
	{
		clearTimeout(_oldGridIRSTimerID);
		window.$gridirs.isThreadRunning = false;
		_oldGridIRSTimerID = '';
	}

	this.textObject = obj;
	this.searchStoreID = searchStoreID;
	this.isThreadRunning = false;
	this.cachedContents;
	this.itemMap = new Array();
	this.selectedItem = 0;
	this.itemRange = 0;
	var thisObject = this;
	this.xmlURL = autocompleteurl;
	this.gridName = gridName;

	gridCacheContents = obj.value;

	if (window.$gridirs)
	{
		if (!window.$gridirs.isThreadRunning)
		{
			_oldGridIRSTimerID = setTimeout(function () {
				window.$gridirs.lookupThread(gridName);
			}, 1000);
		}
	} else {
		_oldGridIRSTimerID = setTimeout(function () {
			window.$gridirs.lookupThread(gridName);
		}, 1000);
	}
};

GridIRSAutoComplete.prototype.lookupThread = function (gridName) {
	window.$gridirs.isThreadRunning = true;

	var currentValue = window.$gridirs.textObject.value;
	if (currentValue != _timerCacheContents)
	{
		_lastGridIRSCheckTimerSnapshotChange = _lastGridIRSCheckTimer;
		_timerCacheContents = currentValue;
	}

	var _gridIRSTimerDifference = _lastGridIRSCheckTimer - _lastGridIRSCheckTimerSnapshotChange;

	if (currentValue != gridCacheContents && _gridIRSTimerDifference > 1) {
		window.$gridirs.RunIRS(gridName, currentValue);

		gridCacheContents = currentValue;
	}

	_lastGridIRSCheckTimer++;

	_oldGridIRSTimerID = setTimeout(function () {
		window.$gridirs.lookupThread(gridName);
	}, 1000);
};

GridIRSAutoComplete.prototype.RunIRS = function(_gridName, _currentValue) {
	// Run IRS
	_parsedSearchQuery = '';
	if (_currentValue != '') {
		_parsedSearchQuery = encodeURIComponent(Base64Encode(_currentValue));
	}

	window.$gridirs.changeSearchBoxClass('gridirsloading');
	if (window.$gridirs.xmlURL != '')
	{
		$.ajax({
			type: "POST",
			url: window.$gridirs.xmlURL,
			data: '_searchQuery=' + _parsedSearchQuery + '&_searchStoreID=' + window.$gridirs.searchStoreID,
			success: function(_xmlData){
				window.$gridirs.processXML(_xmlData, _gridName);
			}
		});
	}
}

GridIRSAutoComplete.prototype.processXML = function(xmlData, gridName) {
	UpdateGridContents(xmlData, gridName);

	window.$gridirs.changeSearchBoxClass('gridirs');
};

GridIRSAutoComplete.prototype.changeSearchBoxClass = function (newClass) {
	this.textObject.className = newClass;
};
/**
* ###############################################
* -- END GRID IRS AUTO COMPLETE OBJECT --
* ###############################################
*/


/**
 * ###############################################
 * BEGIN JQUERY UI FUNCTIONS
 * ###############################################
 */


function UIObject()
{
};

UIObject.prototype.Queue = function (_functionData) {
	window._uiOnParseCallbacks[_uiOnParseCallbacks.length] = _functionData;

	return true;
}

window.$UIObject = new UIObject();

window._uiOnParseCallbacks = new Array();
window._uiDialogQueues = new Array();

function QueueFunction(_functionData) {
	window._uiOnParseCallbacks[_uiOnParseCallbacks.length] = _functionData;

	return true;
};

window.QueueFunction = function (_functionData) {
	window._uiOnParseCallbacks[_uiOnParseCallbacks.length] = _functionData;

	return true;
};

function ClearFunctionQueue() {
	for (var i=0;i<_uiOnParseCallbacks.length;i++)
	{
		window._uiOnParseCallbacks[i]();
	}

	window._uiOnParseCallbacks = new Array();


	$(document).unbind('keypress');
	$(document).keypress(function (e) {
		if ((e.which && e.which == 27) || (e.keyCode && e.keyCode == 27)) {
			// Reset Dynamic Menu Items
			ResetDynamicMenuItems();

			UIHideAllDropDowns();
		}
	});

	$('form input[class!=swifttextnumeric2][class!=swifttextnumeric2small]').unbind('keypress');
	$('form input[class!=swifttextnumeric2][class!=swifttextnumeric2small]').keypress(function (e) {

		// Enter
		if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
			if ($(this).hasClass('swifttextautocompleteinput'))
			{
				UITagControlInputEnter(this, false);

				return false;
			} else if ($(this).hasClass('swifttextautocompletelookup') || $(this).hasClass('swifttextautocompleteinputactive')) {
				return false;
			} else if ($(this).parents('form').length && $(this).parents('form').attr('id') != '') {
				var _aPointer = $(this).parents('form').find('a[id^=\'' + $(this).parents('form').attr('id') + '_submit' + '\']');
				var _aPointer_Secondary = $(this).parents('div .ui-tabs-panel').find('a[id^=\'' + $(this).parents('form').attr('id') + '_submit_' + '\']');
				var _aPointer_Form = $(this).parents('div .ui-tabs-panel').find('a[id^=\'' + $(this).parents('form').attr('id') + '_submitform' + '\']');
				var _buttonPointer = $(this).parents('form').find('input[type=\'button\'][id=\'' + $(this).parents('form').attr('id') + '_submit' + '\']');

				if (_aPointer_Form.length && !_aPointer_Secondary.length) {
					$(_aPointer_Form).click();

				} else if (_aPointer.length) {
					ajaxFormSubmit($(this).parents('form').attr('name'));
					//$(this).parents('form').submit();

					return false;
				} else if (_buttonPointer.length) {
					ajaxFormSubmit($(this).parents('form').attr('name'));
					//$(this).parents('form').submit();

					return false;
				}
			}

		// Space
		} else if ((e.which && e.which == 32) || (e.keyCode && e.keyCode == 32)) {
			if ($(this).hasClass('swifttextautocompleteinput'))
			{
				UITagControlInputEnter(this, false);

				return false;
			}

		// Tab
		} else if ((e.which && e.which == 9) || (e.keyCode && e.keyCode == 9)) {
			if ($(this).hasClass('swifttextautocompleteinput'))
			{
				UITagControlInputEnter(this, false);

				return true;
			}

		// Escape
		} else if ((e.which && e.which == 27) || (e.keyCode && e.keyCode == 27)) {
			if ($(this).hasClass('swifttextautocompleteinput'))
			{
				UITagControlInputEscape(this, e);

				return false;
			}

		// Backspace
		}else if ((e.which && e.which == 8) || (e.keyCode && e.keyCode == 8)) {
			if ($(this).hasClass('swifttextautocompleteinput'))
			{
				return UITagControlInputBackspace(this, e);
			}
		} else {
			return true;
		}
	});

	return true;
};

function UICreateWindowGrid(_gridName, _windowURL, _paramContainer, _windowID, _windowTitle, _width, _height) {
	_gridDialogIndex = 0;

	$('.swiftgriditemid' + _gridName).each(function () {
		if ($(this).is(':checked')) {
			_paramContainer['itemid[' + _gridDialogIndex + ']'] = $(this).val();

			_gridDialogIndex++;
		}
	});

	UICreateWindowPOST(_windowURL, _paramContainer, _windowID, _windowTitle, _width, _height);
};

function UICreateWindowPOST(_windowURL, _paramContainer, _windowID, _windowTitle, _width, _height) {
	if (_windowURL.substring(0, 1) == '/') {
		_windowURL = _baseName + _windowURL;
	}

	var _divElement = UICreateWindowStart(_windowID);

	$.post(_windowURL, _paramContainer, function(data) {
		$(_divElement).html(data);
		UICreateWindowEnd(_divElement, _windowID, _windowTitle, _width, _height);
	});
};

function UICreateWindow(_windowURL, _windowID, _windowTitle, _windowLoading, _width, _height, _displayImmediately) {
	if (_windowURL.substring(0, 1) == '/') {
		_windowURL = _baseName + _windowURL;
	}

	var _divElement = UICreateWindowStart(_windowID);

	_divElement.load(_windowURL, {}, function() {
		UICreateWindowEnd(_divElement, _windowID, _windowTitle, _width, _height);
	} );
};

function UICreateWindowStart(_windowID) {
	UIStartLoading();

	var _divElement = $('<div>');
	_divElement.attr('id', 'window_' + _windowID);
	_divElement.hide();

	UIQueueDialog('window_' + _windowID);

	return _divElement;
};

function UICreateWindowEnd(_divElement, _windowID, _windowTitle, _width, _height) {
	_windowTitle = '<img src="' + themepath + 'images/icon_window.gif" align="absmiddle" border="0" /> ' + _windowTitle;

	_dialogWidth = parseInt(_width);
	_dialogHeight = parseInt(_height);

	$(_divElement).dialog({
		height: _dialogHeight,
		width: _dialogWidth,
		minHeight: _dialogHeight,
		minWidth: _dialogWidth,
		modal: true,
		draggable: true,
		resizable: true,
		close: function(event, ui) {
			UIDestroyDialog($(this).attr('id'), true);
			$(this).remove();
		},
		title: _windowTitle,
		open: function() {
			$('.ui-dialog').each(function() {
				$(this).css('overflow','visible');
			})
			$('.ui-dialog-container').each(function() {
				$(this).css('overflow','hidden');
			})
			UIEndLoading();
			reParseDoc();
		}
	});

	return true;
};

function UIQueueDialog(_dialogID) {
	window._uiDialogQueues[_uiDialogQueues.length] = _dialogID;

	return true;
};

function UIDestroyAllDialogs() {
	for (var i=0;i<_uiDialogQueues.length;i++)
	{
		$('#' + _uiDialogQueues[i]).dialog('destroy').remove();
	}

	window._uiDialogQueues = new Array();

	// Destroy all color pickers
	$('.colorpicker').remove();

	UIEndLoading();

	// Reset Dynamic Menu Items
	ResetDynamicMenuItems();

	return true;
};

function UIDestroyDialog(_dialogID, _ignoreDestroy) {
	_newDialogQueue = new Array();

	for (var i=0;i<_uiDialogQueues.length;i++)
	{
		if (_uiDialogQueues[i] == _dialogID)
		{
			if (!_ignoreDestroy)
			{
				$('#' + _uiDialogQueues[i]).dialog('destroy').remove();
			}
		} else {
			_newDialogQueue[_newDialogQueue.length] = _uiDialogQueues[i];
		}
	}

	// Destroy all color pickers
	$('.colorpicker').remove();

	window._uiDialogQueues = _newDialogQueue;

	UIEndLoading();

	return true;
};


function UIDropDown(_ulID, _event, _idX, _idY) {
	var o1 = BrowserObject(_idX), o2 = BrowserObject(_idY);
	if (!o1 || !o2)
		return;

	UIHideAllDropDowns();


	_finalY = absY(o2)+$(o2).height() - 1;
	_finalX = absX(o1);

	if (_finalY < 0)
	{
		_finalY = 0;
	}

	if (_finalX < 0)
	{
		_finalX = 0;
	}

	if (!$('#' + _ulID).length)
	{
		return;
	}

	if (_event.stopPropagation) _event.stopPropagation();

	var _documentWidth = $(document).width();
	var _rightPoint = _documentWidth - ($('#' + _idX).width() + _finalX);

	if ((_finalX + 200) > _documentWidth) {
		$('#' + _ulID).css('left', '').css('right', _rightPoint + 'px').css('top', _finalY + 'px');
	} else {
		$('#' + _ulID).css('left', _finalX + 'px').css('top', _finalY + 'px');
	}

	$('#' + _ulID).slideDown('fast').show();

	$('.swiftdropdownitemtext').unbind('hover');
	$('.swiftdropdownitemparent').hover(function() {
		$(this).addClass("swiftdropdownitemhover");
	}, function(){
		$(this).removeClass("swiftdropdownitemhover");
	});
};

function UIHideAllDropDowns() {
	$('.swiftdropdown').hide();
};

$(document).bind('click', function(e) {
	var $clicked=$(e.target); // get the element clicked

	// Destroy all tooltips
	$('.qtip').hide();

	if (!$clicked.parents().is('.colorpicker')) {
		// Destroy all Color Pickers
		$('.colorpicker').remove();
	}

	if( ! ( $clicked.is('.swiftdropdowninput') || $clicked.parents().is('.swiftdropdowninput') || $clicked.is('.topnavmenuitemdynamic') ) )
	{
		// Reset Dynamic Menu Items
		ResetDynamicMenuItems();

		$('.swiftdropdown').hide();
	}
});

function UIStartLoading() {
	$.blockUI({
		message: swiftLanguage['loading'],
		overlayCSS: {
			background: '#d9ceba url(' + themepath + 'images/uigeneralbg.png) 50% 50% repeat',
			filter: 'Alpha(Opacity=30);',
			opacity: .3
		},
		css: {
			padding: '15px',
			'-webkit-border-radius': '10px',
			'-moz-border-radius': '10px',
			border: '1px solid #d9ceba',
			font: '22px Calibri, Trebuchet MS, Verdana, Arial, Helvetica',
			color: '#666666'
		}
	});
};

function UIEndLoading() {
	$.unblockUI();
}

function UIProcessTabFunctionQueue(_formName, _tabEvent) {
    if (typeof _tabFunctionQueue == 'undefined') {
		return false;
	} else if (typeof _tabFunctionQueue[_formName] == 'undefined') {
		return false;
	} else if (typeof _tabFunctionQueue[_formName][_tabEvent] == 'undefined') {
		return false;
	}

	for (key in _tabFunctionQueue[_formName][_tabEvent]) {
		if ($('#' + _formName + 'tabs').tabs('option', 'selected') == key) {
			_tabFunctionQueue[_formName][_tabEvent][key]();
		}
	}

	return true;
}

function UIAutoCompleteControl(_fieldName, _autoCompleteURL, _icon) {
	$('#' + _fieldName).oldautocomplete(_baseName + _autoCompleteURL, {
		width: 300,
		matchContains: true,
		delay: 120,
		matchCase: false,
		formatItem: function(data, i, n, value) {
			if (_icon != '')
			{
				return '<img src="' + themepath + 'images/' + _icon + '" align="absmiddle" border="0" /> ' + value;
			} else {
				return value;
			}
		}
	}).result(function(event, data, formatted) {

		if (data[2] && data[2] != '') {
			$('#' + _fieldName).val(data[2]);
		} else {
			$('#' + _fieldName).val(data[0]);
		}

		$('#autocomplete_' + _fieldName).val(data[1]);
	});
}

function UISwitchNote(_fieldName, _classType) {
	$('#' + _fieldName).removeClass().addClass('swifttextareanotes' + _classType);
	$('#notecolor_' + _fieldName).val(_classType);

	return true
}

function RevealPasswordField(_fieldName) {
	if ($('#preveal_' + _fieldName).html() == swiftLanguage['pfieldreveal']) {
		$('#prevealcontainer_' + _fieldName).html($('#' + _fieldName).val());
		$('#preveal_' + _fieldName).html(swiftLanguage['pfieldhide']);
	} else {
		$('#prevealcontainer_' + _fieldName).html('');
		$('#preveal_' + _fieldName).html(swiftLanguage['pfieldreveal']);
	}
}

function LinkedSelectChanged(_selectObject, _fieldName) {
	var _selectValue = $(_selectObject).val();

	$('.linkedselectcontainer_' + _fieldName).hide();

	if ($('#selectsuboptioncontainer_' + _selectValue).length) {
		$('#selectsuboptioncontainer_' + _selectValue).show();
	}
}

/**
 * ###############################################
 * END JQUERY UI FUNCTIONS
 * ###############################################
 */


/**
 * ###############################################
 * BEGIN TAG CONTROL FUNCTIONS
 * ###############################################
 */
var _tagControlSuffixContainer = new Array();

function UITagControl(_fieldName, _suffixHTML) {
	if (!$('#taginput_' + _fieldName).length)
	{
		return false;
	}

	if (typeof _suffixHTML == 'string' && _suffixHTML != '') {
		_tagControlSuffixContainer['taginput_' + _fieldName] = _suffixHTML;
	}

	// Do we have to do auto complete?
	var _processingURL = $('#tagcontainer_' + _fieldName).attr('jsonurl');
	if (_processingURL)
	{
		_processingURL = _baseName + _processingURL;


		$('#taginput_' + _fieldName).oldautocomplete(_processingURL, {
			width: 300,
			matchContains: true,
			delay: 120,
			matchCase: true
		}).result(function(event, data, formatted) {
			UITagControlInputEnter($('#taginput_' + _fieldName).get(), data[1], data[1]);
		});
	}

	$('.swifttextautocompletediv').click(function (_event) {
		if ($(this).find('.swifttextautocompleteinput').val() == swiftLanguage['starttypingtags'])
		{
			$(this).find('.swifttextautocompleteinput').val('');
		}

		$(this).find('.swifttextautocompleteinput').focus().addClass('swifttextautocompleteinputfocus');
	});

	$('.swifttextautocompleteinput').focus(function (_event) {
		if ($(this).val() == swiftLanguage['starttypingtags'])
		{
			$(this).val('');
		}

		$(this).addClass('swifttextautocompleteinputfocus');
	});

	$('.swifttextautocompleteinput').blur(function (_event) {
		$(this).removeClass('swifttextautocompleteinputfocus');
	});

	UITagControlRemoveTag();

	//$('.swifttextautocompletediv').find('.swifttextautocompleteinput').val(swiftLanguage['starttypingtags']);

	return true
}


function UITagControlInputEnter(_inputObject, _customTag, _customValue) {
	if (!_customTag)
	{
		var _tagName = $(_inputObject).val();
	} else {
		var _tagName = _customTag;
	}

	if (typeof _tagName != 'string' || _tagName == '')
	{
		return false;
	}

	_tagName = UICleanTag(_tagName);

	$(_inputObject).val('');

	UITagControlAddTag(_inputObject, _tagName);

	UITagControlRemoveTag();

	return true;
}

function UITagControlAddTag(_inputObject, _tagName) {
	var _isUniqueTag = true;

	var _tagCount = 0;

	// Check for Duplicate Records
	$(_inputObject).parents('ul:first').children('li').each(function (i) {
		_tagCount++;

		if ($(this).attr('tagid') && $(this).attr('tagid') == _tagName)
		{
			_isUniqueTag = false;

			return false;
		}
	});

	if (!_isUniqueTag)
	{
		return false;
	}

	_tagValue = _tagName;
	if (typeof _customValue == 'string' && _customValue != '')
	{
		_tagValue = _customValue;
	}

	var _tagSuffixHTML = '';
	var _fieldName = $(_inputObject).attr('id');
	if (typeof _tagControlSuffixContainer[_fieldName] == 'string') {
		_tagSuffixHTML = _tagControlSuffixContainer[_fieldName];
	}

	_tagSuffixHTML = _tagSuffixHTML.replace(/%tagid/g, _tagCount);
	_tagSuffixHTML = _tagSuffixHTML.replace(/%tagvalue/g, _tagValue);

	$(_inputObject).parents('li:first').before('<li class="swifttextautocompleteinputcontainer swifttextautocompleteitem" tagid="' + _tagName + '">' + _tagName + _tagSuffixHTML + '<div class="swifttextautocompleteitemclose"><img src="' + themepath + 'images/icon_tagx.gif" align="absmiddle" border="0" /></div><input type="hidden" name="container' + $(_inputObject).attr('id') + '[]" value="' + _tagValue + '" /></li>');

	return true;
}

function UITagControlInputEscape(_inputObject, _event) {
	$(_inputObject).val('');

	return false;
}

function UITagControlInputBackspace(_inputObject, _event) {
	if ($(_inputObject).val() == '')
	{
		$(_inputObject).parents('li:first').prev('li').hide('fast', function() {
			$(this).remove()
			});

		return false
	}

	return true;
}

function UITagControlRemoveTag() {
	$('.swifttextautocompleteitemclose').unbind('click');

	$('.swifttextautocompleteitemclose').click(function (_event) {
		$(this).parents('li:first').hide('fast', function() {
			$(this).remove()
			});;
	});

	return false;
}

function UICleanTag(_string) {
	return _string.replace(/[^a-zA-Z0-9\+\-\_:@\. ]+/g,'');
}

function UITipBubble(_elementID, _bubbleText) {
	$('#' + _elementID).qtip({
		content: _bubbleText,
		position: {
			corner: {
				target: 'bottomRight',
				tooltip: 'topLeft'
			}
		},
		style: {
			name: 'cream',
			tip: 'topLeft'
		}
	});
}

/**
 * ###############################################
 * END TAG CONTROL FUNCTIONS
 * ###############################################
 */




/**
 * ###############################################
 * BEGIN BASE64 FUNCTIONS
 * ###############################################
 */


function Base64Decode(input) {
	return Base64.decode(input);
}

function Base64Encode(input) {
	return Base64.encode(input);
}

/**
*
*  Base64 encode / decode
*  http://www.webtoolkit.info/
*
**/

var Base64 = {

	// private property
	_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

	// public method for encoding
	encode : function (input) {
		var output = "";
		var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
		var i = 0;

		input = Base64._utf8_encode(input);

		while (i < input.length) {

			chr1 = input.charCodeAt(i++);
			chr2 = input.charCodeAt(i++);
			chr3 = input.charCodeAt(i++);

			enc1 = chr1 >> 2;
			enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
			enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
			enc4 = chr3 & 63;

			if (isNaN(chr2)) {
				enc3 = enc4 = 64;
			} else if (isNaN(chr3)) {
				enc4 = 64;
			}

			output = output +
			this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
			this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

		}

		return output;
	},

	// public method for decoding
	decode : function (input) {
		var output = "";
		var chr1, chr2, chr3;
		var enc1, enc2, enc3, enc4;
		var i = 0;

		input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

		while (i < input.length) {

			enc1 = this._keyStr.indexOf(input.charAt(i++));
			enc2 = this._keyStr.indexOf(input.charAt(i++));
			enc3 = this._keyStr.indexOf(input.charAt(i++));
			enc4 = this._keyStr.indexOf(input.charAt(i++));

			chr1 = (enc1 << 2) | (enc2 >> 4);
			chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
			chr3 = ((enc3 & 3) << 6) | enc4;

			output = output + String.fromCharCode(chr1);

			if (enc3 != 64) {
				output = output + String.fromCharCode(chr2);
			}
			if (enc4 != 64) {
				output = output + String.fromCharCode(chr3);
			}

		}

		output = Base64._utf8_decode(output);

		return output;

	},

	// private method for UTF-8 encoding
	_utf8_encode : function (string) {
		string = string.replace(/\r\n/g,"\n");
		var utftext = "";

		for (var n = 0; n < string.length; n++) {

			var c = string.charCodeAt(n);

			if (c < 128) {
				utftext += String.fromCharCode(c);
			}
			else if((c > 127) && (c < 2048)) {
				utftext += String.fromCharCode((c >> 6) | 192);
				utftext += String.fromCharCode((c & 63) | 128);
			}
			else {
				utftext += String.fromCharCode((c >> 12) | 224);
				utftext += String.fromCharCode(((c >> 6) & 63) | 128);
				utftext += String.fromCharCode((c & 63) | 128);
			}

		}

		return utftext;
	},

	// private method for UTF-8 decoding
	_utf8_decode : function (utftext) {
		var string = "";
		var i = 0;
		var c = c1 = c2 = 0;

		while ( i < utftext.length ) {

			c = utftext.charCodeAt(i);

			if (c < 128) {
				string += String.fromCharCode(c);
				i++;
			}
			else if((c > 191) && (c < 224)) {
				c2 = utftext.charCodeAt(i+1);
				string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
				i += 2;
			}
			else {
				c2 = utftext.charCodeAt(i+1);
				c3 = utftext.charCodeAt(i+2);
				string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
				i += 3;
			}

		}

		return string;
	}

}

/**
 * ###############################################
 * END BASE64 FUNCTIONS
 * ###############################################
 */





/**
 * ###############################################
 * BEGIN SELECT AJAX UPDATE FUNCTIONS
 * ###############################################
 */
function UpdateTicketPropertyDiv(_selectObject, _fieldName, _showNoChange, _actionName, _onlyPublic, _calleFunction, _additionalArguments) {
	if (!$(_selectObject).length || !$('#select' + _fieldName).length || !$('#' + _fieldName + '_container').length)
	{
		return false;
	}

	$('#select' + _fieldName).attr('disabled', 'disabled');

	_formName = '';
	if ($(_selectObject).parents('form').length)
	{
		_formName = $(_selectObject).parents('form').attr('id');
		$(_selectObject).parents('form').unbind('submit');
		$(_selectObject).parents('form').submit(function(event) {
			return false;
		});
	}

	var _finalArguments = '';
	if (typeof _additionalArguments == 'string' && _additionalArguments != '') {
		_finalArguments = _additionalArguments;
	}

	$('#' + _fieldName + '_container').append('&nbsp;<img src="' + themepath + 'images/loadingcircle.gif" align="absmiddle" border="0" />');
	$('#' + _fieldName + '_container').load(_baseName + '/Tickets/Ajax/' + _actionName + '/' + escape($(_selectObject).val()) + '/' +
		escape(_fieldName) + '/' + escape($('#select' + _fieldName).val()) + '/' + escape(_showNoChange) + '/' + escape(_onlyPublic) + _finalArguments, function() {
		$('#' + _fieldName).removeAttr('disabled');bindFormSubmit(_formName);ProcessTableHighlights();
		if (typeof _calleFunction == 'function') {
			_calleFunction();
		}
		});

	return true;
}

function UpdateTicketStatusDiv(_selectObject, _fieldName, _showNoChange, _onlyPublic, _binderDiv, _forceColorChange) {
	var _calleFunction = function() {
		$('#select' + _fieldName).change(function() {
			_domSelectObject = $('#select' + _fieldName).get(0);

			ResetStatusParentColor(_domSelectObject, _binderDiv);
		})

		if (typeof(_forceColorChange) != 'undefined' && _forceColorChange == true) {
			$('#select' + _fieldName).addClass('swiftselectnotify');
		}
	}

	UpdateTicketPropertyDiv(_selectObject, _fieldName, _showNoChange, 'GetTicketStatusOnDepartmentID', _onlyPublic, _calleFunction);

	return true;
};

function UpdateTicketTypeDiv(_selectObject, _fieldName, _showNoChange, _onlyPublic) {
	UpdateTicketPropertyDiv(_selectObject, _fieldName, _showNoChange, 'GetTicketTypeOnDepartmentID', _onlyPublic);

	return true;
};

function UpdateTicketOwnerDiv(_selectObject, _fieldName, _showNoChange, _onlyPublic, _showActiveStaff) {
	var _extendedArguments = '';

	if (typeof _showActiveStaff == 'boolean' && _showActiveStaff == true) {
		_extendedArguments = '/1';
	}

	UpdateTicketPropertyDiv(_selectObject, _fieldName, _showNoChange, 'GetTicketOwnerOnDepartmentID', _onlyPublic, false, _extendedArguments);

	return true;
};

/**
 * ###############################################
 * END SELECT AJAX UPDATE FUNCTIONS
 * ###############################################
 */
