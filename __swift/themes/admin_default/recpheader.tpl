<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title><{$_defaultTitle}></title>
<meta http-equiv="Content-Type" content="text/html; charset=<{$_language[charset]}>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<script language="Javascript" type="text/javascript">
var themepath = "<{$_themePath}>";
var swiftpath = "<{$_swiftPath}>";
var _swiftPath = "<{$_swiftPath}>";
var _baseName = "<{$_baseName}>";
var swiftsessionid = "<{$_session[sessionid]}>";
var swiftiswinapp = "<{$_session[iswinapp]}>";
var cparea = "<{$_area}>";
var enTinyMCE = false;
var pagetype = 'content';
var finalDocHeight = "<{$_finalHeight}>";
var finalHeightDiff = <{$_finalHeightDifference}>;
var selectedMenu = '<{$_selectedMenu}>';
var isMainHeader = true;
var menuhiddenfieldval = '<{$_menuHiddenFieldValue}>';
var globalImageLoading = false;
var logoutText = '<{$_language[logout]}>: <{$_userName}>';
var strOpConstants = {'OP_CONTAINS':'<{$_language[opcontains]}>', 'OP_NOTCONTAINS':"<{$_language[opnotcontains]}>", 'OP_EQUAL':'<{$_language[opequal]}>', 'OP_NOTEQUAL':'<{$_language[opnotequal]}>', 'OP_GREATER':'<{$_language[opgreater]}>', 'OP_LESS':'<{$_language[opless]}>', 'OP_REGEXP':'<{$_language[opregexp]}>', 'OP_CHANGED':'<{$_language[opchanged]}>', 'OP_CHANGEDTO':'<{$_language[opchangedto]}>', 'OP_CHANGEDFROM':'<{$_language[opchangedfrom]}>', 'OP_NOTCHANGED':'<{$_language[opnotchanged]}>', 'OP_NOTCHANGEDFROM':'<{$_language[opnotchangedfrom]}>', 'OP_NOTCHANGEDTO':'<{$_language[opnotchangedto]}>'};

var swiftLanguage = {'matchand': '<{$_language[matchand]}>', 'pfieldreveal': '<{$_language[pfieldreveal]}>', 'pfieldhide': '<{$_language[pfieldhide]}>', 'matchor': '<{$_language[matchor]}>', 'strue':'<{$_language[strue]}>', 'sfalse':'<{$_language[sfalse]}>', 'name':'<{$_language[name]}>', 'title':'<{$_language[title]}>', 'value':'<{$_language[value]}>', 'engagevisitor':'<{$_language[engagevisitor]}>', 'customengagevisitor':'<{$_language[customengagevisitor]}>', 'inlinechat':'<{$_language[inlinechat]}>', 'url':'<{$_language[url]}>', 'vactionvariables':'<{$_language[vactionvariables]}>', 'vactionvexp':'<{$_language[vactionvexp]}>', 'vactionsalerts':'<{$_language[vactionsalerts]}>', 'open':'<{$_language[open]}>', 'close':'<{$_language[close]}>', 'geoipprocessrunning': '<{$_language[geoipprocessrunning]}>', 'continueprocessquestion': '<{$_language[continueprocessquestion]}>', 'vactionsetdepartment': '<{$_language[vactionsetdepartment]}>', 'vactionsetskill': '<{$_language[vactionsetskill]}>', 'vactionsetcolor': '<{$_language[vactionsetcolor]}>', 'vactionbanvisitor': '<{$_language[vactionbanvisitor]}>', 'vactionsetgroup': '<{$_language[vactionsetgroup]}>', 'hexcode': '<{$_language[hexcode]}>', 'type': '<{$_language[type]}>', 'banip': '<{$_language[banip]}>', 'banclassa': '<{$_language[banclassa]}>', 'banclassb': '<{$_language[banclassb]}>', 'banclassc': '<{$_language[banclassc]}>', 'notificationsubject': '<{$_language[notificationsubject]}>', 'notificationuser': '<{$_language[notificationuser]}>', 'notificationuserorganization': '<{$_language[notificationuserorganization]}>', 'notificationstaff': '<{$_language[notificationstaff]}>', 'notificationteam': '<{$_language[notificationteam]}>', 'notificationdepartment': '<{$_language[notificationdepartment]}>', 'loading': '<{$_language[loading]}>', 'pwtooshort': '<{$_language[pwtooshort]}>', 'pwveryweak': '<{$_language[pwveryweak]}>', 'pwunsafeword': '<{$_language[pwunsafeword]}>', 'pwweak': '<{$_language[pwweak]}>', 'pwmedium': '<{$_language[pwmedium]}>', 'pwstrong': '<{$_language[pwstrong]}>', 'pwverystrong': '<{$_language[pwverystrong]}>', 'cyesterday': '<{$_language[cyesterday]}>', 'ctoday': '<{$_language[ctoday]}>', 'ccurrentwtd': '<{$_language[ccurrentwtd]}>', 'ccurrentmtd': '<{$_language[ccurrentmtd]}>', 'ccurrentytd': '<{$_language[ccurrentytd]}>', 'cl7days': '<{$_language[cl7days]}>', 'cl30days': '<{$_language[cl30days]}>', 'cl90days': '<{$_language[cl90days]}>', 'cl180days': '<{$_language[cl180days]}>', 'cl365days': '<{$_language[cl365days]}>', 'starttypingtags': '<{$_language[starttypingtags]}>', 'edit': '<{$_language[edit]}>', 'insert': '<{$_language[insert]}>', 'ctomorrow': '<{$_language[ctomorrow]}>', 'cnextwfd': '<{$_language[cnextwfd]}>', 'cnextmfd': '<{$_language[cnextmfd]}>', 'cnextyfd': '<{$_language[cnextyfd]}>', 'cn7days': '<{$_language[cn7days]}>', 'cn30days': '<{$_language[cn30days]}>', 'cn90days': '<{$_language[cn90days]}>', 'cn180days': '<{$_language[cn180days]}>', 'cn365days': '<{$_language[cn365days]}>'};
</script>
<link rel="stylesheet" type="text/css" media="all" href="<{$_baseName}>/Core/Default/Compressor/css/jqueryui:staff:colorpicker:popup:kql:notification:circleplayer" />
<script type="text/javascript" src="<{$_baseName}>/Core/Default/Compressor/js/jquery:jqueryplugins:jqueryui:colorpicker:corecp:<{$_area}>cp:kajax:tinymce:popup:kql:notification:circleplayer"></script>
<{RenderControlPanelMenu area=$_area}>
<script type="text/javascript">
var datePickerDefaults = {showOn: "both", buttonImage: "<{$_themePath}>images/icon_calendar.gif", changeMonth: true, changeYear: true, buttonImageOnly: true, dateFormat: '<{if $_settings[dt_caltype] == 'us'}>mm/dd/yy<{else}>dd/mm/yy<{/if}>'};
</script>
</head>
<body background="<{$_themePath}>images/bgblocks.gif" kajaximagepath="<{$_themePath}>images/">
<{if $_session[iswinapp] != "1" && $_settings[g_displaytopheader] == 1}>
<div class="reheaderbar">
<div class="rebarlogo">
<a href="<{$_baseName}>/Core/Dashboard/Index"><img src="<{$_headerImageCP}>" border="0" /></a>
</div>
<div class="cptopmenulink">
<a href="<{$_swiftPath}>" class="menulink" target="_blank"><{$_language[menusupportcenter]}></a><{if $_area != 'staff'}> | <a class="menulink" href="<{$_swiftPath}>staff/index.php" target="_blank"><{$_language[menustaffcp]}></a><{/if}><{if $_area == 'staff' && $_staffIsAdmin == true}> | <a class="menulink" href="<{$_swiftPath}>admin/index.php" target="_blank"><{$_language[menuadmincp]}></a><{/if}>
</div>
</div>
<div class="rebartopspacer"></div>
<{/if}>
<script language="Javascript" type="text/javascript">
var swmenubg1 = "menudefbg";
var swmenubg2 = "remenusectiondefault";
var swtabmenutype = "<{if $_controlPanelMenu == "hover"}>onMouseOver<{else}>onClick<{/if}>";
var swtabmenu = new Array(); var swtabmenucolspan = '<{$_menuColumnSpan}>'; var swtabselmenu = '<{$_selectedMenu}>'; var swtabselmenuclass = '<{$_selectedMenuClass}>';
swtabmenu = [<{foreach key=key item=_item from=$_menu}>['<{$key}>', '<{$_item[1]}>', '<{$_item[4]}>', '<{$_item[0]}>'],<{/foreach}>];
buildTopTabMenu();
</script>

<script language="Javascript" type="text/javascript">
switchTab(<{$_selectedMenu}>, <{$_selectedMenuClass}>);
</script>
<{$_extendedRefreshScript}>
<table border="0" cellspacing="0" cellpadding="0" width="100%">