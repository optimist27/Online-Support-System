<?php
ob_start(); /* template body */ ?>//===============================
// Kayako LiveResponse
// Copyright (c) 2001-<?php echo $this->scope["_currentYear"];?>


// http://www.kayako.com
// License: http://www.kayako.com/license.txt
//===============================

<?php if ((isset($this->scope["_isBanned"]) ? $this->scope["_isBanned"] : null) != 1) {
?>
var sessionid_<?php echo $this->scope["_randomSuffix"];?> = "<?php echo $this->scope["_sessionID"];?>";
var geoip_<?php echo $this->scope["_randomSuffix"];?> = new Array();
<?php 
$_fh0_data = (isset($this->scope["_geoIP"]) ? $this->scope["_geoIP"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['itemkey']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
geoip_<?php echo $this->scope["_randomSuffix"];?>[<?php echo $this->scope["itemkey"];?>] = "<?php echo $this->scope["_item"];?>";
<?php 
/* -- foreach end output */
	}
}?>

var hasnotes_<?php echo $this->scope["_randomSuffix"];?> = "<?php echo $this->scope["_hasNotes"];?>";
var isnewsession_<?php echo $this->scope["_randomSuffix"];?> = "<?php echo $this->scope["_isNewSession"];?>";
var repeatvisit_<?php echo $this->scope["_randomSuffix"];?> = "<?php echo $this->scope["_repeatVisit"];?>";
var lastvisittimeline_<?php echo $this->scope["_randomSuffix"];?> = "<?php echo $this->scope["_lastVisitTimeline"];?>";
var lastchattimeline_<?php echo $this->scope["_randomSuffix"];?> = "<?php echo $this->scope["_lastChatTimeline"];?>";
var isfirsttime_<?php echo $this->scope["_randomSuffix"];?> = 1;
var timer_<?php echo $this->scope["_randomSuffix"];?> = 0;
var imagefetch_<?php echo $this->scope["_randomSuffix"];?> = <?php echo $this->scope["_clientRefresh"];?>;
var updateurl_<?php echo $this->scope["_randomSuffix"];?> = "";
var screenHeight = window.screen.availHeight;
var screenWidth = window.screen.availWidth;
var colorDepth = window.screen.colorDepth;
var timeNow = new Date();
var referrer = escape(document.referrer);
var windows, mac, linux;
var ie, op, moz, misc, browsercode, browsername, browserversion, operatingsys;
var dom, ienew, ie4, ie5, ie6, ie7, ie8, moz_rv, moz_rv_sub, ie5mac, ie5xwin, opnu, op4, op5, op6, op7, op8, op9, op10, saf, konq, chrome, ch1, ch2, ch3;
var appName, appVersion, userAgent;
var appname = navigator.appName;
var appVersion = navigator.appVersion;
var userAgent = navigator.userAgent;
var dombrowser = "default";
var isChatRunning_<?php echo $this->scope["_randomSuffix"];?> = 0;
var title = document.title;
var proactiveImageUse_<?php echo $this->scope["_randomSuffix"];?> = new Image();
windows = (appVersion.indexOf('Win') != -1);
mac = (appVersion.indexOf('Mac') != -1);
linux = (appVersion.indexOf('Linux') != -1);
if (!document.layers) {
	dom = (document.getElementById ) ? document.getElementById : false;
} else {
	dom = false;
}
var myWidth = 0, myHeight = 0;
if( typeof( window.innerWidth ) == 'number' ) {
	//Non-IE
	myWidth = window.innerWidth;
	myHeight = window.innerHeight;
} else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
	//IE 6+ in 'standards compliant mode'
	myWidth = document.documentElement.clientWidth;
	myHeight = document.documentElement.clientHeight;
} else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
	//IE 4 compatible
	myWidth = document.body.clientWidth;
	myHeight = document.body.clientHeight;
}
winH = myHeight;
winW = myWidth;
misc=(appVersion.substring(0,1) < 4);
op=(userAgent.indexOf('Opera') != -1);
moz=(userAgent.indexOf('Gecko') != -1);
chrome=(userAgent.indexOf('Chrome') != -1);
if (document.all) {
	ie=(document.all && !op);
}
saf=(userAgent.indexOf('Safari') != -1);
konq=(userAgent.indexOf('Konqueror') != -1);

if (op) {
	op_pos = userAgent.indexOf('Opera');
	opnu = userAgent.substr((op_pos+6),4);
	op5 = (opnu.substring(0,1) == 5);
	op6 = (opnu.substring(0,1) == 6);
	op7 = (opnu.substring(0,1) == 7);
	op8 = (opnu.substring(0,1) == 8);
	op9 = (opnu.substring(0,1) == 9);
	op10 = (opnu.substring(0,2) == 10);
} else if (chrome) {
	chrome_pos = userAgent.indexOf('Chrome');
	chnu = userAgent.substr((chrome_pos+7),4);
	ch1 = (chnu.substring(0,1) == 1);
	ch2 = (chnu.substring(0,1) == 2);
	ch3 = (chnu.substring(0,1) == 3);
} else if (moz){
	rv_pos = userAgent.indexOf('rv');
	moz_rv = userAgent.substr((rv_pos+3),3);
	moz_rv_sub = userAgent.substr((rv_pos+7),1);
	if (moz_rv_sub == ' ' || isNaN(moz_rv_sub)) {
		moz_rv_sub='';
	}
	moz_rv = moz_rv + moz_rv_sub;
} else if (ie){
	ie_pos = userAgent.indexOf('MSIE');
	ienu = userAgent.substr((ie_pos+5),3);
	ie4 = (!dom);
	ie5 = (ienu.substring(0,1) == 5);
	ie6 = (ienu.substring(0,1) == 6);
	ie7 = (ienu.substring(0,1) == 7);
	ie8 = (ienu.substring(0,1) == 8);
}

if (konq) {
	browsercode = "KO";
	browserversion = appVersion;
	browsername = "Konqueror";
} else if (chrome) {
	browsercode = "CH";
	if (ch1) {
		browserversion = "1";
	} else if (ch2) {
		browserversion = "2";
	} else if (ch3) {
		browserversion = "3";
	}

	browsername = "Google Chrome";
} else if (saf) {
	browsercode = "SF";
	browserversion = appVersion;
	browsername = "Safari";
} else if (op) {
	browsercode = "OP";
	if (op5) {
		browserversion = "5";
	} else if (op6) {
		browserversion = "6";
	} else if (op7) {
		browserversion = "7";
	} else if (op8) {
		browserversion = "8";
	} else if (op9) {
		browserversion = "9";
	} else if (op10) {
		browserversion = "10";
	} else {
		browserversion = appVersion;
	}
	browsername = "Opera";
} else if (moz) {
	browsercode = "MO";
	browserversion = appVersion;
	browsername = "Firefox";
} else if (ie) {
	browsercode = "IE";
	if (ie4) {
		browserversion = "4";
	} else if (ie5) {
		browserversion = "5";
	} else if (ie6) {
		browserversion = "6";
	} else if (ie7) {
		browserversion = "7";
	} else if (ie8) {
		browserversion = "8";
	} else {
		browserversion = appVersion;
	}
	browsername = "Internet Explorer";
}

if (windows) {
	operatingsys = "Windows";
} else if (linux) {
	operatingsys = "Linux";
} else if (mac) {
	operatingsys = "Mac";
} else {
	operatingsys = "Unkown";
}

if (document.getElementById)
{
	dombrowser = "default";
} else if (document.layers) {
	dombrowser = "NS4";
} else if (document.all) {
	dombrowser = "IE4";
}

var proactiveX = 20;
var proactiveXStep = 1;
var proactiveDelayTime = 100;

var proactiveY = 0;
var proactiveOffsetHeight=0;
var proactiveYStep = 0;
var proactiveAnimate = false;

function browserObject_<?php echo $this->scope["_randomSuffix"];?>(objid)
{
	if (dombrowser == "default")
	{
		return document.getElementById(objid);
	} else if (dombrowser == "NS4") {
		return document.layers[objid];
	} else if (dombrowser == "IE4") {
		return document.all[objid];
	}
}

function doRand_<?php echo $this->scope["_randomSuffix"];?>()
{
	var num;
	now=new Date();
	num=(now.getSeconds());
	num=num+1;
	return num;
}

function getCookie_<?php echo $this->scope["_randomSuffix"];?>(name) {
	var crumb = document.cookie;
	var index = crumb.indexOf(name + "=");
	if (index == -1) return null;
	index = crumb.indexOf("=", index) + 1;
	var endstr = crumb.indexOf(";", index);
	if (endstr == -1) endstr = crumb.length;
	return unescape(crumb.substring(index, endstr));
}

function deleteCookie_<?php echo $this->scope["_randomSuffix"];?>(name) {
	var expiry = new Date();
	document.cookie = name + "=" + "; expires=Thu, 01-Jan-70 00:00:01 GMT" +  "; path=/";
}

function elapsedTime_<?php echo $this->scope["_randomSuffix"];?>()
{
	if (typeof _elapsedTimeStatusIndicator == 'undefined') {
		_elapsedTimeStatusIndicator = '<?php echo $this->scope["_randomSuffix"];?>';
	} else if (typeof _elapsedTimeStatusIndicator == 'string' && _elapsedTimeStatusIndicator != '<?php echo $this->scope["_randomSuffix"];?>') {

		return;
	}


	if (timer_<?php echo $this->scope["_randomSuffix"];?> < 3600)
	{
		timer_<?php echo $this->scope["_randomSuffix"];?>++;
		imagefetch_<?php echo $this->scope["_randomSuffix"];?>++;

		if (imagefetch_<?php echo $this->scope["_randomSuffix"];?> > <?php echo $this->scope["_clientRefresh"];?>) {
			imagefetch_<?php echo $this->scope["_randomSuffix"];?> = 0;
			doStatusLoop_<?php echo $this->scope["_randomSuffix"];?>();
		}

		setTimeout("elapsedTime_<?php echo $this->scope["_randomSuffix"];?>();", 1000);
	}
}

function doStatusLoop_<?php echo $this->scope["_randomSuffix"];?>() {
	date1 = new Date();
	var _newPageTitleReg=/[^0-9,a-z,A-Z]/gi;
	var _finalPageTitle=title.replace(_newPageTitleReg, " ");

	updateurl_<?php echo $this->scope["_randomSuffix"];?> = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/VisitorUpdate/UpdateFootprint/_time="+date1.getTime()+"/_randomNumber="+doRand_<?php echo $this->scope["_randomSuffix"];?>()+"/_url="+encodeURIComponent(window.location)+"/_isFirstTime="+encodeURIComponent(isfirsttime_<?php echo $this->scope["_randomSuffix"];?>)+"/_sessionID="+encodeURIComponent(sessionid_<?php echo $this->scope["_randomSuffix"];?>)+"/_referrer="+encodeURIComponent(document.referrer)+"/_resolution="+encodeURIComponent(screenWidth+"x"+screenHeight)+"/_colorDepth="+encodeURIComponent(colorDepth)+"/_platform="+encodeURIComponent(navigator.platform)+"/_appVersion="+encodeURIComponent(navigator.appVersion)+"/_appName="+encodeURIComponent(navigator.appName)+"/_browserCode="+encodeURIComponent(browsercode)+"/_browserVersion="+encodeURIComponent(browserversion)+"/_browserName="+encodeURIComponent(browsername)+"/_operatingSys="+encodeURIComponent(operatingsys)+"/_pageTitle="+encodeURIComponent(_finalPageTitle)+"/_hasNotes="+encodeURIComponent(hasnotes_<?php echo $this->scope["_randomSuffix"];?>)+"/_repeatVisit="+encodeURIComponent(repeatvisit_<?php echo $this->scope["_randomSuffix"];?>)+"/_lastVisitTimeline="+encodeURIComponent(lastvisittimeline_<?php echo $this->scope["_randomSuffix"];?>)+"/_lastChatTimeline="+encodeURIComponent(lastchattimeline_<?php echo $this->scope["_randomSuffix"];?>)+"/_isNewSession="+encodeURIComponent(isnewsession_<?php echo $this->scope["_randomSuffix"];?>)<?php echo $this->scope["_geoIPURL"];?>;

	proactiveImageUse_<?php echo $this->scope["_randomSuffix"];?> = new Image();
	proactiveImageUse_<?php echo $this->scope["_randomSuffix"];?>.onload = imageLoaded_<?php echo $this->scope["_randomSuffix"];?>;
	proactiveImageUse_<?php echo $this->scope["_randomSuffix"];?>.src = updateurl_<?php echo $this->scope["_randomSuffix"];?>;

	isfirsttime_<?php echo $this->scope["_randomSuffix"];?> = 0;
}

function startChat_<?php echo $this->scope["_randomSuffix"];?>(proactive)
{
	isChatRunning_<?php echo $this->scope["_randomSuffix"];?> = 1;

	docWidth = (winW-<?php echo $this->scope["_chatWidth"];?>)/2;
	docHeight = (winH-<?php echo $this->scope["_chatHeight"];?>)/2;

	<?php if ((isset($this->scope["_isInlineRequest"]) ? $this->scope["_isInlineRequest"] : null) == true) {
?>
	_chatWindowURL = '<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/Chat/StartInline/_sessionID=<?php echo $this->scope["_sessionID"];?>/_proactive=0/_filterDepartmentID=<?php echo $this->scope["_filterDepartmentID"];?>/_fullName=/_email=/_inline=0/';
	<?php 
}
else {
?>
	_chatWindowURL = '<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/Chat/Request/_sessionID=' + sessionid_<?php echo $this->scope["_randomSuffix"];?> + '/_proactive=' + proactive + '/_filterDepartmentID=<?php echo $this->scope["_filterDepartmentID"];?>/_randomNumber=' + doRand_<?php echo $this->scope["_randomSuffix"];?>() + '/_fullName=<?php echo $this->scope["_fullName"];?>/_email=<?php echo $this->scope["_email"];?>/_promptType=<?php echo $this->scope["_promptType"];?>';
	<?php 
}?>



	chatwindow = window.open(_chatWindowURL,"customerchat"+doRand_<?php echo $this->scope["_randomSuffix"];?>(), "toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=yes,resizable=1,width=<?php echo $this->scope["_chatWidth"];?>,height=<?php echo $this->scope["_chatHeight"];?>,left="+docWidth+",top="+docHeight);

	hideProactiveChatData_<?php echo $this->scope["_randomSuffix"];?>();
}

function imageLoaded_<?php echo $this->scope["_randomSuffix"];?>() {
	if (!proactiveImageUse_<?php echo $this->scope["_randomSuffix"];?>)
	{
		return;
	}
	proactiveAction = proactiveImageUse_<?php echo $this->scope["_randomSuffix"];?>.width;

	if (proactiveAction == 3)
	{
		doProactiveInline_<?php echo $this->scope["_randomSuffix"];?>();
	} else if (proactiveAction == 4) {
		displayProactiveChatData_<?php echo $this->scope["_randomSuffix"];?>();
	}
}

function writeInlineRequestData_<?php echo $this->scope["_randomSuffix"];?>()
{
	docWidth = (winW-<?php echo $this->scope["_settings"]["livesupport_chatwidth"];?>)/2;
	docHeight = (winH-<?php echo $this->scope["_settings"]["livesupport_chatheight"];?>)/2;

	var divData = '';
	<?php echo $this->scope["_inlineChatData"];?>


	var inlineChatElement = document.createElement("div");
	inlineChatElement.style.position = 'absolute';
	inlineChatElement.style.display = 'none';
	inlineChatElement.style.float = 'left';
	inlineChatElement.style.top = docHeight+'px';
	inlineChatElement.style.left = docWidth+'px';
	inlineChatElement.style.zIndex = 500;

	if (inlineChatElement.style.overflow) {
		inlineChatElement.style.overflow = 'none';
	}

	inlineChatElement.id = 'inlinechatdiv';
	inlineChatElement.innerHTML = divData;

	var proactiveChatContainer = document.getElementById('proactivechatcontainer' + swiftuniqueid);
	proactiveChatContainer.appendChild(inlineChatElement);
}

function writeProactiveRequestData_<?php echo $this->scope["_randomSuffix"];?>()
{
	docWidth = (winW-450)/2;
	docHeight = (winH-400)/2;

	var divData = '';
	<?php echo $this->scope["_proactiveChatData"];?>


	var proactiveElement = document.createElement("div");
	proactiveElement.style.position = 'absolute';
	proactiveElement.style.display = 'none';
	proactiveElement.style.float = 'left';
	proactiveElement.style.top = docHeight+'px';
	proactiveElement.style.left = docWidth+'px';
	proactiveElement.style.zIndex = 500;

	if (proactiveElement.style.overflow) {
		proactiveElement.style.overflow = 'none';
	}

	proactiveElement.id = 'proactivechatdiv';
	proactiveElement.innerHTML = divData;

	var proactiveChatContainer = document.getElementById('proactivechatcontainer' + swiftuniqueid);
	proactiveChatContainer.appendChild(proactiveElement);
}

function displayProactiveChatData_<?php echo $this->scope["_randomSuffix"];?>()
{
	if (proactiveAnimate == true) {
		return false;
	}

	writeObj = browserObject_<?php echo $this->scope["_randomSuffix"];?>("proactivechatdiv");
	if (writeObj)
	{
		docWidth = (winW-450)/2;
		docHeight = (winH-400)/2;
		proactiveY = docHeight;
		writeObj.top = docWidth;
		writeObj.left = docHeight;
		proactiveAnimate = true;
	}

	showDisplay_<?php echo $this->scope["_randomSuffix"];?>("proactivechatdiv");

	<?php if ((isset($this->scope["_settings"]["livechat_proactivescroll"]) ? $this->scope["_settings"]["livechat_proactivescroll"]:null) == '1') {
?>
	animateProactiveDiv_<?php echo $this->scope["_randomSuffix"];?>();
	<?php 
}?>

}

function displayInlineChatData_<?php echo $this->scope["_randomSuffix"];?>()
{
	writeObj = browserObject_<?php echo $this->scope["_randomSuffix"];?>("inlinechatdiv");
	if (writeObj)
	{
		docWidth = (winW-<?php echo $this->scope["_settings"]["livesupport_chatwidth"];?>)/2;
		docHeight = (winH-<?php echo $this->scope["_settings"]["livesupport_chatheight"];?>)/2;
		proactiveY = docHeight;
		writeObj.top = docHeight;
		writeObj.left = docWidth;

		acceptProactive = new Image();
		acceptProactive.src = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_<?php echo $this->scope["_randomSuffix"];?>()+"/_sessionID="+sessionid_<?php echo $this->scope["_randomSuffix"];?>;

		inlineChatFrameObj = browserObject_<?php echo $this->scope["_randomSuffix"];?>("inlinechatframe");
		_iframeURL = '<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/Chat/StartInline/_sessionID=<?php echo $this->scope["_sessionID"];?>/_proactive=1/_filterDepartmentID=<?php echo $this->scope["_filterDepartmentID"];?>/_fullName=/_email=/_inline=1/';
		if (inlineChatFrameObj && inlineChatFrameObj.src != _iframeURL && writeObj.style.display == 'none') {
			inlineChatFrameObj.src = _iframeURL;
		}
	}

	showDisplay_<?php echo $this->scope["_randomSuffix"];?>("inlinechatdiv");
}

function hideProactiveChatData_<?php echo $this->scope["_randomSuffix"];?>()
{
	hideDisplay_<?php echo $this->scope["_randomSuffix"];?>("proactivechatdiv");
	hideDisplay_<?php echo $this->scope["_randomSuffix"];?>("inlinechatdiv");
}

function doProactiveInline_<?php echo $this->scope["_randomSuffix"];?>()
{
	displayInlineChatData_<?php echo $this->scope["_randomSuffix"];?>();
}

function doProactiveRequest_<?php echo $this->scope["_randomSuffix"];?>()
{
	acceptProactive = new Image();
	acceptProactive.src = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/VisitorUpdate/AcceptProactive/_randomNumber="+doRand_<?php echo $this->scope["_randomSuffix"];?>()+"/_sessionID="+sessionid_<?php echo $this->scope["_randomSuffix"];?>;

	startChat_<?php echo $this->scope["_randomSuffix"];?>("<?php echo $this->scope["_visitorEngage"];?>");
}

function closeProactiveRequest_<?php echo $this->scope["_randomSuffix"];?>()
{
	rejectProactive = new Image();
	date1 = new Date();
	proactiveAnimate = false;
	rejectProactive.src = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_<?php echo $this->scope["_randomSuffix"];?>()+"/_sessionID="+sessionid_<?php echo $this->scope["_randomSuffix"];?>;

	hideProactiveChatData_<?php echo $this->scope["_randomSuffix"];?>();
}

function closeInlineProactiveRequest_<?php echo $this->scope["_randomSuffix"];?>()
{
	rejectProactive = new Image();
	date1 = new Date();
	rejectProactive.src = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?<?php echo $this->scope["_templateGroupPrefix"];?>/LiveChat/VisitorUpdate/ResetProactive/_time="+date1.getTime()+"/_randomNumber="+doRand_<?php echo $this->scope["_randomSuffix"];?>()+"/_sessionID="+sessionid_<?php echo $this->scope["_randomSuffix"];?>;
	var bodyElement = document.getElementsByTagName('body');

	document.getElementById('inlinechatframe').contentWindow.CloseProactiveChat();
//	window.frames.inlinechatframe.CloseProactiveChat();

	if (bodyElement[0])
	{
		var inlineDivElement = browserObject_<?php echo $this->scope["_randomSuffix"];?>('inlinechatdiv');
		if (inlineDivElement) {
			var _parentNode = inlineDivElement.parentNode;
			_parentNode.removeChild(inlineDivElement);
		}
	}
}

function switchDisplay_<?php echo $this->scope["_randomSuffix"];?>(objid)
{
	result = browserObject_<?php echo $this->scope["_randomSuffix"];?>(objid);
	if (!result)
	{
		return;
	}

	if (result.style.display == "none")
	{
		result.style.display = "block";
	} else {
		result.style.display = "none";
	}
}

function hideDisplay_<?php echo $this->scope["_randomSuffix"];?>(objid)
{
	result = browserObject_<?php echo $this->scope["_randomSuffix"];?>(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "none";
}

function showDisplay_<?php echo $this->scope["_randomSuffix"];?>(objid)
{
	result = browserObject_<?php echo $this->scope["_randomSuffix"];?>(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "block";
}

function updateProactivePosition_<?php echo $this->scope["_randomSuffix"];?>()
{
	writeObj = browserObject_<?php echo $this->scope["_randomSuffix"];?>("proactivechatdiv");
	writeObjInline = browserObject_<?php echo $this->scope["_randomSuffix"];?>("inlinechatdiv");

	docHeight = (winH-412)/2;
	docHeightInline = (winH-<?php echo $this->scope["_settings"]["livesupport_chatheight"];?>)/2;

	finalTopValue = docHeight + document.body.scrollTop;
	if (finalTopValue < 0) {
		finalTopValue = 10;
	}

	finalTopValueInline = docHeightInline + document.body.scrollTop;
	if (finalTopValueInline < 0) {
		finalTopValueInline = 10;
	}

	if (writeObj) {
		writeObj.style.top = finalTopValue + "px";
	}

	if (writeObjInline) {
		writeObjInline.style.top = finalTopValueInline + "px";
	}
}

function animateProactiveDiv_<?php echo $this->scope["_randomSuffix"];?>()
{
	writeObj = browserObject_<?php echo $this->scope["_randomSuffix"];?>("proactivechatdiv");

	if (!writeObj) {
		return false;
	}

	if(proactiveYStep == 0){proactiveY = proactiveY-proactiveXStep;} else {proactiveY = proactiveY+proactiveXStep;}

	proactiveOffsetHeight = writeObj.offsetHeight;
	if(proactiveY < 0){proactiveYStep = 1; proactiveY=0; }
	if(proactiveY >= (myHeight - proactiveOffsetHeight)){proactiveYStep=0; proactiveY=(myHeight-proactiveOffsetHeight);}

	finalTopValue = proactiveY+document.body.scrollTop;
	if (finalTopValue < 0) {
		finalTopValue = 10;
	}

	writeObj.style.top = finalTopValue+"px";

	if (proactiveAnimate) {
		setTimeout('animateProactiveDiv_<?php echo $this->scope["_randomSuffix"];?>()', proactiveDelayTime);
	}
}

writeProactiveRequestData_<?php echo $this->scope["_randomSuffix"];?>(); writeInlineRequestData_<?php echo $this->scope["_randomSuffix"];?>(); elapsedTime_<?php echo $this->scope["_randomSuffix"];?>();

var oldEvtScroll = window.onscroll; window.onscroll = function() { if (oldEvtScroll) { updateProactivePosition_<?php echo $this->scope["_randomSuffix"];?>(); } }

<?php 
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>