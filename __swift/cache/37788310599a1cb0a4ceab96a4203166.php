<?php
ob_start(); /* template body */ ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->scope["_language"]["charset"];?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
		<title><?php if ((isset($this->scope["_pageTitle"]) ? $this->scope["_pageTitle"] : null) != "") {

echo $this->scope["_pageTitle"];

}
else {

echo $this->scope["_companyName"];

}?> - <?php echo $this->scope["_poweredByNotice"];?></title>
		<meta name="KEYWORDS" content="Home" />
		<!-- <meta name="description" content="DISPLAY SOME KB STUFF OR NEWS HERE" /> -->
		<meta name="robots" content="index,follow" />

		<link rel="shortcut icon" href="favicon.ico" />
		<script language="Javascript" type="text/javascript">
		var _themePath = "<?php echo $this->scope["_themePath"];?>";
		var _swiftPath = "<?php echo $this->scope["_swiftPath"];?>";
		var _baseName = "<?php echo $this->scope["_baseName"];?>";
		</script>

		<script type="text/javascript" language="Javascript">
		var themepath = "<?php echo $this->scope["_themePath"];?>";
		var swiftpath = "<?php echo $this->scope["_swiftPath"];?>";
		var _baseName = "<?php echo $this->scope["_baseName"];?>";
		var _isInline = "<?php echo $this->scope["_isInline"];?>";
		var _swiftLanguage = {'istyping':'<?php echo $this->scope["_language"]["istyping"];?>', 'staffnotacceptedchat':'<?php echo $this->scope["_language"]["staffnotacceptedchat"];?>', 'chatendsurvey':"<?php echo $this->scope["_language"]["chatendsurvey"];?>", 'chatendednotification':"<?php echo $this->scope["_language"]["chatendednotification"];?>", 'chatendednotificationsub':"<?php echo $this->scope["_language"]["chatendednotificationsub"];?>"};
		var _swiftRefreshInterval = <?php echo $this->scope["_refreshInterval"];?>;
		var _swiftChatURL = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?/LiveChat/Chat/Loop/_chatSessionID=<?php echo $this->scope["_chatSessionID"];?>/_sessionID=<?php echo $this->scope["_sessionID"];?>";
		var _swiftMessageURL = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?/LiveChat/Chat/SubmitMessage/<?php echo $this->scope["_chatSessionID"];?>/<?php echo $this->scope["_sessionID"];?>";
		var _swiftChatEndURL = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?/LiveChat/Chat/End/<?php echo $this->scope["_chatSessionID"];?>/<?php echo $this->scope["_sessionID"];?>";
		var _swiftChatSurvey = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?/LiveChat/Chat/Survey/<?php echo $this->scope["_chatSessionID"];?>/<?php echo $this->scope["_sessionID"];?>";
		var _swiftChatEmailURL = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?/LiveChat/Chat/SendEmail/<?php echo $this->scope["_chatSessionID"];?>/<?php echo $this->scope["_sessionID"];?>";
		var _swiftChatPrintURL = "<?php echo $this->scope["_swiftPath"];?>visitor/index.php?/LiveChat/Chat/PrintChat/<?php echo $this->scope["_chatSessionID"];?>/<?php echo $this->scope["_sessionID"];?>";
		var _userFullName = "<?php echo $this->scope["_userFullName"];?>";
		var _swiftDisplayTimestamps = "<?php echo $this->scope["_settings"]["livechat_timestamps"];?>";
		</script>

		<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Core/Default/Compressor/css/popup:client" />
		<script type="text/javascript" src="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/Core/Default/Compressor/js/jquery:jqueryplugins:coresc:popup"></script>
		<?php if ((isset($this->scope["_inChat"]) ? $this->scope["_inChat"] : null) == true || (isset($this->scope["_chatLanding"]) ? $this->scope["_chatLanding"] : null) == true) {
?>
		<script type="text/javascript" language="Javascript" src="<?php echo $this->scope["_themePath"];?>livesupport.js"></script>

		<script type="text/javascript">
			if (_isInline != '1')
			{
				window.onbeforeunload = LiveChatBeforeUnload;
			}
		</script>
		<?php 
}?>

	</head>

	<body onload="<?php if ((isset($this->scope["_inChat"]) ? $this->scope["_inChat"] : null) == true) {
?>OnChatLoaded();<?php 
}
else {
?>OnLoaded();<?php 
}?>">

			<div id="soundcontainer"></div>
		<div id="main" class="chatview">
			<div id="topbanner"><div class="topbannerchat"><img src="<?php echo $this->scope["_headerImageSC"];?>" alt="Kayako <?php echo $this->scope["_productTitle"];?> Logo" id="logo" /></div><div id="topbanneravatarcontainer"><img src="<?php echo $this->scope["_themePath"];?>images/space.gif" id="topbanneravatar" width="100" height="100" border="0" /></div></div>
			<div id="chattoptoolbar">
				<span id="chattoptoolbarrightarea">
				<span id="chattoptoolbarrightareainset">
				<?php if ((isset($this->scope["_displayLanguageSelection"]) ? $this->scope["_displayLanguageSelection"] : null) == true) {
?>
				<?php echo $this->scope["_language"]["languagefield"];?></span>
					<select class="swiftselect" name="languageid" id="languageid" onchange="javascript: LanguageSwitch(true);">
					<?php 
$_fh1_data = (isset($this->scope["_languageContainer"]) ? $this->scope["_languageContainer"] : null);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['_languageID']=>$this->scope['_languageItem'])
	{
/* -- foreach start output */
?>
					<?php if ((isset($this->scope["_languageItem"]["isenabled"]) ? $this->scope["_languageItem"]["isenabled"]:null) == '1') {
?>
					<option value="<?php echo $this->scope["_languageID"];?>"<?php if ((isset($this->scope["_activeLanguageID"]) ? $this->scope["_activeLanguageID"] : null) == (isset($this->scope["_languageID"]) ? $this->scope["_languageID"] : null)) {
?> selected<?php 
}?>><?php echo $this->scope["_languageItem"]["title"];?></option>
					<?php 
}?>

					<?php 
/* -- foreach end output */
	}
}?>

					</select>
				<?php 
}
elseif ((isset($this->scope["_displayClockTicker"]) ? $this->scope["_displayClockTicker"] : null) == true) {
?>
				<div id="chattoptoolbarrightclockticker">00:00</div></span>
				<?php 
}
else {
?>
				<div id="chattoptoolbarrightclockticker">&nbsp;</div></span>
				<?php 
}?>

				</span>

				<ul id="chattoptoolbarlinklist"><?php if ((isset($this->scope["_isInline"]) ? $this->scope["_isInline"] : null) == false) {
?><li><a id="chattoptoolbarcloselink" href="#" onclick="javascript: CloseChat();" title="<?php echo $this->scope["_language"]["close"];?>"><?php echo $this->scope["_language"]["close"];?></a></li><?php 
}?><li id="chattoptoolbarprint"><a id="chattoptoolbarprintlink" href="#" onclick="javascript: PrintChat();" title="<?php echo $this->scope["_language"]["lcprint"];?>"><?php echo $this->scope["_language"]["lcprint"];?></a></li><li id="chattoptoolbaremail"><a id="chattoptoolbaremaillink" href="#" onclick="javascript: EmailChat();" title="<?php echo $this->scope["_language"]["lcemail"];?>"><?php echo $this->scope["_language"]["lcemail"];?></a></li><li id="chattoptoolbarsoundon"><a id="chattoptoolbarsoundonlink" href="#" onclick="javascript: SwitchSoundOff();" title="<?php echo $this->scope["_language"]["lcsoundon"];?>"><?php echo $this->scope["_language"]["lcsoundon"];?></a></li><li id="chattoptoolbarsoundoff"><a id="chattoptoolbarsoundofflink" href="#" onclick="javascript: SwitchSoundOn();" title="<?php echo $this->scope["_language"]["lcsoundoff"];?>"><?php echo $this->scope["_language"]["lcsoundoff"];?></a></li></ul>
			</div>

			<div id="sendemailcontainer">
			<form name="chatsendemailform" method="post" action="<?php echo $this->scope["_baseName"];
echo $this->scope["_templateGroupPrefix"];?>/LiveChat/Chat/SendEmail" target="_top" onsubmit="return ValidateChatSendEmailForm();">
			<table width="100%"  border="0" cellspacing="1" cellpadding="2">
				<tr>
					<td align="left" valign="middle" colspan="2"><?php echo $this->scope["_language"]["chatsendemaildesc"];?></td>
				</tr>
				<tr>
					<td class="fieldtitle" align="left" valign="middle"><?php echo $this->scope["_language"]["fieldemail"];?></td>
					<td align="left" valign="middle"><input type="text" name="email" id="chatsendemail" class="swifttext" value="<?php echo $this->scope["_email"];?>"></td>
				</tr>
				<tr>
					<td class="fieldtitle" align="left" valign="middle">&nbsp;</td>
					<td align="left" valign="middle"><input type="submit" class="rebuttonblue" value="<?php echo $this->scope["_language"]["send"];?>" /> <input type="button" class="rebuttonred" onclick="javascript: CloseEmailDialog();" value="<?php echo $this->scope["_language"]["cancel"];?>" /><div id="chatsendemailerror" class="errorrowhidden"><?php echo $this->scope["_language"]["requiredfieldempty"];?></div><div id="chatsendemailinvaliderror" class="errorrowhidden"><?php echo $this->scope["_language"]["emailinvalid"];?></div></td>
				</tr>
			</table>
			</form>
			</div>

			<div id="maincore">

			<div id="chatcore">
				<div class="tabrow" id="leftloginsubscribeboxtabs"><a id="livechattab" href="#" class="atab atabbasic"><span class="tableftgap">&nbsp;</span><span class="tabbulk"><span class="tabtext"><?php if ((isset($this->scope["_promptType"]) ? $this->scope["_promptType"] : null) == 'call') {

echo $this->scope["_language"]["clicktocalltab"];

}
elseif ((isset($this->scope["_extendedPromptType"]) ? $this->scope["_extendedPromptType"] : null) == 'message') {

echo $this->scope["_language"]["leaveamessage"];

}
else {

echo $this->scope["_language"]["livechat"];

}
if ((isset($this->scope["_inChat"]) ? $this->scope["_inChat"] : null) == true) {
?> &raquo; <?php echo $this->scope["_departmentBreadcrumb"];

}?></span></span></a></div>
				<div id="chatbox" class="switchingpanel active">

				<!-- BEGIN DIALOG PROCESSING -->
				<?php 
$_fh2_data = (isset($this->scope["_errorContainer"]) ? $this->scope["_errorContainer"] : null);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
				<div class="dialogerror"><div class="dialogerrorsub"><div class="dialogerrorcontent"><?php echo $this->scope["_item"]["message"];?></div></div></div>
				<?php 
/* -- foreach end output */
	}
}?>

				<?php 
$_fh3_data = (isset($this->scope["_infoContainer"]) ? $this->scope["_infoContainer"] : null);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['key']=>$this->scope['_item'])
	{
/* -- foreach start output */
?>
				<div class="dialoginfo"><div class="dialoginfosub"><div class="dialoginfocontent"><?php echo $this->scope["_item"]["message"];?></div></div></div>
				<?php 
/* -- foreach end output */
	}
}
 /* end template body */
return $this->buffer . ob_get_clean();
?>